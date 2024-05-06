<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Controller for student view
 *
 * @package    mod_scheduler
 * @copyright  2015 Henning Bostelmann and others (see README.txt)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot.'/mod/scheduler/mailtemplatelib.php');

require_once ($CFG->dirroot.'/mod/sendgrid-php/sendgrid-php.php');
use SendGrid\Mail\From;
use SendGrid\Mail\To;
use SendGrid\Mail\Mail;

require_once ($CFG->dirroot.'/mod/scheduler/googleapiclient/vendor/autoload.php');
//require_once ($CFG->dirroot.'/mod/scheduler/waytogo-402607-d5e37ff5e6e2.json');

define('SCOPES', Google_Service_Calendar::CALENDAR_EVENTS);

define('CLIENT_ID', '23913882101-23e8ilvop0b3fso86qpe3e9nthl8qhgp.apps.googleusercontent.com'); 
define('CLIENT_SECRET', "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");
define('SENDGRID_APIKEY', "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");

/**
 * scheduler_book_slot
 *
 * @param scheduler_instance $scheduler
 * @param int $slotid
 * @param int $userid
 * @param int $groupid
 * @param scheduler_booking_form $mform
 * @param mixed $formdata
 * @param mixed $returnurl
 * @throws mixed moodle_exception
 */
function scheduler_book_slot($scheduler, $slotid, $userid, $groupid, $mform, $formdata, $returnurl) {

    global $DB, $COURSE, $output;

    $slot = $scheduler->get_slot($slotid);
    if (!$slot) {
        throw new moodle_exception('error');
    }

    if (!$slot->is_in_bookable_period()) {
        throw new moodle_exception('nopermissions');
    }

    $requiredcapacity = 1;
    $userstobook = array($userid);
    if ($groupid > 0) {
        if (!$scheduler->is_group_scheduling_enabled()) {
            throw new moodle_exception('error');
        }
        $groupmembers = $scheduler->get_available_students($groupid);
        $requiredcapacity = count($groupmembers);
        $userstobook = array_keys($groupmembers);
    } else if ($groupid == 0) {
        if (!$scheduler->is_individual_scheduling_enabled()) {
            throw new moodle_exception('error');
        }
    } else {
        // Group scheduling enabled but no group selected.
        throw new moodle_exception('error');
    }

    $errormessage = '';

    $bookinglimit = $scheduler->count_bookable_appointments($userid, false);
    if ($bookinglimit == 0) {
        $errormessage = get_string('selectedtoomany', 'scheduler', $bookinglimit);
    } else {
        // Validate our user ids.
        $existingstudents = array();
        foreach ($slot->get_appointments() as $app) {
            $existingstudents[] = $app->studentid;
        }
        $userstobook = array_diff($userstobook, $existingstudents);

        $remaining = $slot->count_remaining_appointments();
        // If the slot is already overcrowded...
        if ($remaining >= 0 && $remaining < $requiredcapacity) {
            if ($requiredcapacity > 1) {
                $errormessage = get_string('notenoughplaces', 'scheduler');
            } else {
                $errormessage = get_string('slot_is_just_in_use', 'scheduler');
            }
        }
    }

    if ($errormessage) {
        \core\notification::error($errormessage);
        redirect($returnurl);
    }

    // Create new appointment for each member of the group.
    foreach ($userstobook as $studentid) {
        $appointment = $slot->create_appointment();
        $appointment->studentid = $studentid;
        $appointment->attended = 0;
        $appointment->timecreated = time();
        $appointment->timemodified = time();
        $appointment->save();

        if (($studentid == $userid) && $mform) {
            $mform->save_booking_data($formdata, $appointment);
        }

        \mod_scheduler\event\booking_added::create_from_slot($slot)->trigger();

        // Notify the teacher.
        if ($scheduler->allownotifications) {
            $student = $DB->get_record('user', array('id' => $appointment->studentid), '*', MUST_EXIST);
            $teacher = $DB->get_record('user', array('id' => $slot->teacherid), '*', MUST_EXIST);
            
            $from = new From("info@waytogo.live", "Waytogo Digital Coaching");
            $tos = [
                new To(
                    $student->email,
                    $student->email,
                    [
                        'subject' => 'Welcome To '.$COURSE->fullname,
                        'editprofileurl' => 'https://dcp.waytogo.live/user/view.php?id=15&course=8'
                    ]
                )
            ];
            $email = new Mail(
                $from,
                $tos
            );
            $email->setTemplateId("d-ef2e63d789984a8a9f5e51685d55315d");
            $sendgrid = new \SendGrid(SENDGRID_APIKEY);
            $sendgrid->send($email);
            //scheduler_messenger::send_slot_notification($slot, 'bookingnotification', 'applied',
              //      $student, $teacher, $teacher, $student, $COURSE);
        }
    }
    $slot->save();

    $KEY_FILE_LOCATION = './waytogo-402607-d5e37ff5e6e2.json';
    
    $client = new Google_Client();
    $client->setApplicationName("Waytogo Görüşmesi");
    $client->setAuthConfigFile($KEY_FILE_LOCATION);
    $client->setScopes([SCOPES]);
    $client->setRedirectUri($returnurl);
    $client->setSubject('info@waytogo.live');

    $service = new Google_Service_Calendar($client);

    
    $event = new Google_Service_Calendar_Event();  
    $event->setSummary('Waytogo Görüşmesi');
    $event->setLocation('waytogo.live');
    $event->setSummary('Waytogo Görüşmesi');


    $startdate = new DateTime();
    $startdate->setTimestamp($slot->starttime);

    $enddate = new DateTime();
    $enddate->setTimestamp($slot->endtime);

    $start = new Google_Service_Calendar_EventDateTime();
    $start->setDateTime(date_format($startdate, DATE_ISO8601));
    $event->setStart($start);

    $end = new Google_Service_Calendar_EventDateTime();
    $end->setDateTime(date_format($enddate, DATE_ISO8601));
    $event->setEnd($end);


    $organizer = new Google_Service_Calendar_EventOrganizer();
    $organizer->setEmail('info@waytogo.live');
    $organizer->getDisplayName("Full Name");

    $event->setOrganizer($organizer);

    $student = $DB->get_record('user', array('id' => $appointment->studentid), '*', MUST_EXIST);
    $teacher = $DB->get_record('user', array('id' => $slot->teacherid), '*', MUST_EXIST);

    $attendee1 = new Google_Service_Calendar_EventAttendee();
    $attendee1->setEmail($student->email);

    $attendee2 = new Google_Service_Calendar_EventAttendee();
    $attendee2->setEmail($teacher->email);

    // ...
    $attendees = array($attendee1, $attendee2);
    $event->attendees = $attendees;
    $sendNotifications = array('sendNotifications' => true, 'conferenceDataVersion' => 1);

    $solution_key = new Google_Service_Calendar_ConferenceSolutionKey();
    $solution_key->setType("hangoutsMeet");
    $confrequest = new Google_Service_Calendar_CreateConferenceRequest();
    $confrequest->setRequestId("3whatisup3");
    $confrequest->setConferenceSolutionKey($solution_key);
    $confdata = new Google_Service_Calendar_ConferenceData();
    $confdata->setCreateRequest($confrequest);
    $event->setConferenceData($confdata);

    $createdEvent = $service->events->insert('c_ae38a0ecf5b46b157423da5b7eb378484637dd47f77c76962ed45883e5f7d89a@group.calendar.google.com', $event, $sendNotifications);

    $slot->appointmentlocation = $createdEvent->hangoutLink.'?event_id='.$createdEvent->id;
    $slot->save();

    // $event = $service->events->get('c_ae38a0ecf5b46b157423da5b7eb378484637dd47f77c76962ed45883e5f7d89a@group.calendar.google.com', $createdEvent->id);

    // $attendeeNew = new Google_Service_Calendar_EventAttendee();
    // $attendeeNew->setEmail('efetacirliogluu@gmail.com');
    // $attendeeNew->setResponseStatus('accepted');

    // $attedess = $event->getAttendees();
    // array_push($attedess,$attendeeNew);


    
    // $updatedEvent = $service->events->update('c_ae38a0ecf5b46b157423da5b7eb378484637dd47f77c76962ed45883e5f7d89a@group.calendar.google.com', $createdEvent->id, $event);
    

    redirect($returnurl);
}

$returnurlparas = array('id' => $cm->id);
if ($scheduler->is_group_scheduling_enabled()) {
    $returnurlparas['appointgroup'] = $appointgroup;
}
$returnurl = new moodle_url('/mod/scheduler/view.php', $returnurlparas);


/******************************************** Show the booking form *******************************************/

if ($action == 'bookingform') {
    require_once($CFG->dirroot.'/mod/scheduler/bookingform.php');

    require_sesskey();
    require_capability('mod/scheduler:appoint', $context);

    $slotid = required_param('slotid', PARAM_INT);
    $slot = $scheduler->get_slot($slotid);

    $actionurl = new moodle_url($returnurl, array('what' => 'bookingform', 'slotid' => $slotid));

    $mform = new scheduler_booking_form($slot, $actionurl);

    if ($mform->is_cancelled()) {
        redirect($returnurl);
    } else if (($formdata = $mform->get_data()) || $appointgroup < 0) {
        // Workaround - call scheduler_book_slot also if no group was selected, to show an error message.
        scheduler_book_slot($scheduler, $slotid, $USER->id, $appointgroup, $mform, $formdata, $returnurl);
        redirect($returnurl);
    } else {
        $groupinfo = null;
        if ($scheduler->is_group_scheduling_enabled() && $appointgroup == 0) {
            $groupinfo = get_string('myself', 'scheduler');
        } else if ($appointgroup > 0) {
            $groupinfo = $mygroupsforscheduling[$appointgroup]->name;
        }

        echo $output->header();
        echo $output->heading(get_string('bookaslot', 'scheduler'));

        $info = scheduler_appointment_info::make_from_slot($slot, true, true, $groupinfo);
        echo $output->render($info);
        $mform->display();
        echo $output->footer();
        exit();
    }

}



/************************************************ Book a slot  ************************************************/

if ($action == 'bookslot') {

    require_sesskey();
    require_capability('mod/scheduler:appoint', $context);

    // Reject this request if the user is required to go through a booking form.
    if ($scheduler->uses_bookingform()) {
        throw new moodle_exception('error');
    }

    // Get the request parameters.
    $slotid = required_param('slotid', PARAM_INT);

    scheduler_book_slot($scheduler, $slotid, $USER->id, $appointgroup, null, null, $returnurl);
}

/******************************************** Show details of booking *******************************************/

if ($action == 'viewbooking') {
    require_once($CFG->dirroot.'/mod/scheduler/bookingform.php');

    require_sesskey();
    require_capability('mod/scheduler:appoint', $context);

    $appointmentid = required_param('appointmentid', PARAM_INT);
    list($slot, $appointment) = $scheduler->get_slot_appointment($appointmentid);

    if ($appointment->studentid != $USER->id) {
        throw new moodle_exception('nopermissions');
    }

    echo $output->header();
    echo $output->heading(get_string('bookingdetails', 'scheduler'));
    $info = scheduler_appointment_info::make_from_appointment($slot, $appointment);
    echo $output->render($info);

    echo $output->continue_button($returnurl);
    echo $output->footer();
    exit();

}

/******************************************** Edit a booking *******************************************/

if ($action == 'editbooking') {
    require_once($CFG->dirroot.'/mod/scheduler/bookingform.php');

    require_sesskey();
    require_capability('mod/scheduler:appoint', $context);

    if (!$scheduler->uses_studentdata()) {
        throw new moodle_exception('error');
    }

    $appointmentid = required_param('appointmentid', PARAM_INT);
    list($slot, $appointment) = $scheduler->get_slot_appointment($appointmentid);

    if ($appointment->studentid != $USER->id) {
        throw new moodle_exception('nopermissions');
    }
    if (!$slot->is_in_bookable_period()) {
        throw new moodle_exception('nopermissions');
    }

    $actionurl = new moodle_url($returnurl, array('what' => 'editbooking', 'appointmentid' => $appointmentid));

    $mform = new scheduler_booking_form($slot, $actionurl, true);
    $mform->set_data($mform->prepare_booking_data($appointment));

    if ($mform->is_cancelled()) {
        redirect($returnurl);
    } else if ($formdata = $mform->get_data()) {
        $mform->save_booking_data($formdata, $appointment);
        redirect($returnurl);
    } else {
        echo $output->header();
        echo $output->heading(get_string('editbooking', 'scheduler'));
        echo $output->box(format_text($scheduler->intro, $scheduler->introformat));
        $info = scheduler_appointment_info::make_from_slot($slot);
        echo $output->render($info);
        $mform->display();
        echo $output->footer();
        exit();
    }

}


/******************************** Cancel a booking (for the current student or a group) ******************************/

if ($action == 'cancelbooking') {

    require_sesskey();
    require_capability('mod/scheduler:appoint', $context);

    // Get the request parameters.
    $slotid = required_param('slotid', PARAM_INT);
    $slot = $scheduler->get_slot($slotid);
    if (!$slot) {
        throw new moodle_exception('error');
    }

    if (!$slot->is_in_bookable_period()) {
        throw new moodle_exception('nopermissions');
    }

    $userstocancel = array($USER->id);
    if ($appointgroup) {
        $userstocancel = array_keys($scheduler->get_available_students($appointgroup));
    }

    foreach ($userstocancel as $userid) {
        if ($appointment = $slot->get_student_appointment($userid)) {
            $scheduler->delete_appointment($appointment->id);

            // Notify the teacher.
            if ($scheduler->allownotifications) {
                $student = $DB->get_record('user', array('id' => $USER->id));
                $teacher = $DB->get_record('user', array('id' => $slot->teacherid));

                $from = new From("info@waytogo.live", "Waytogo Digital Coaching");
                $tos = [
                    new To(
                        $student->email,
                        $student->email,
                        [
                            'subject' => 'Booking Cancelled'
                        ]
                    )
                ];
                $email = new Mail(
                    $from,
                    $tos
                );
                $email->setTemplateId("d-1bdd8cbf94a347b7869133a61a8b71df");
                $sendgrid = new \SendGrid(SENDGRID_APIKEY);
                $sendgrid->send($email);

                //scheduler_messenger::send_slot_notification($slot, 'bookingnotification', 'cancelled',
                  //                                          $student, $teacher, $teacher, $student, $COURSE);
            }
            \mod_scheduler\event\booking_removed::create_from_slot($slot)->trigger();
        }
    }

    
    $KEY_FILE_LOCATION = './waytogo-402607-d5e37ff5e6e2.json';
    
    $client = new Google_Client();
    $client->setApplicationName("Waytogo Görüşmesi");
    $client->setAuthConfigFile($KEY_FILE_LOCATION);
    $client->setScopes([SCOPES]);
    $client->setRedirectUri($returnurl);
    $client->setSubject('info@waytogo.live');

    $service = new Google_Service_Calendar($client);
    $event_id = explode('?event_id=',$slot->appointmentlocation)[1];
    if(strlen($event_id) > 0) {
        $deletedEvent = $service->events->delete('c_ae38a0ecf5b46b157423da5b7eb378484637dd47f77c76962ed45883e5f7d89a@group.calendar.google.com', $event_id);
    }
    

    $slot->appointmentlocation = '';
    $slot->location = '';
    $slot->save();

    redirect($returnurl);

}
