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

//tam degil ilerde istenirse sp kullanarak yapilir: https://chat.openai.com/share/9dd4890e-0080-4dca-8540-a367b5f66391 
//ssh ile baglanti yapinca patladigi icin sql leri simdilik yoruma aldim 

/**
 * TODO describe file index
 *
 * @package    local_coachlist
 * @copyright  2024 Waytogo Digital Coaching Platform
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once('../../config.php');

require_login();
$PAGE->set_url('/local/coachlist/index.php');
$PAGE->set_context(context_system::instance());
$PAGE->set_title(get_string('pluginname', 'local_coachlist'));

$PAGE->requires->css(new moodle_url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'));


// CSS dosyasını dahil etme
$PAGE->requires->css('/local/coachlist/styles/styles.css');
$PAGE->requires->js('/local/coachlist/scripts/scripts.js');


echo $OUTPUT->header();

// Öğretmenlerin bilgilerini almak için SQL sorgusu
/*$sql = "SELECT 
    us.id, 
    CONCAT(us.firstname, ' ', us.lastname) AS fullname, 
    us.city,
    GROUP_CONCAT(mc.id) AS courseid,
    GROUP_CONCAT(mc.fullname) AS coursename, 
    us.email
    FROM {user} us
    INNER JOIN {role_assignments} ra ON us.id = ra.userid
    INNER JOIN {user_enrolments} mue ON mue.userid = us.id
    INNER JOIN {enrol} me ON me.id = mue.enrolid
    INNER JOIN {course} mc ON mc.id = me.courseid
    WHERE ra.roleid = 3
    GROUP BY us.id, us.firstname, us.lastname, us.city, us.email";
 // Öğretmenler için roleid, sisteminize göre değişebilir.

$teachers = $DB->get_records_sql($sql);*/

/*$userID = $USER->id; // Mevcut kullanıcının ID'sini al

$sql = "SELECT 
    us.id, 
    CONCAT(us.firstname, ' ', us.lastname) AS fullname, 
    us.city,
    GROUP_CONCAT(mc.id) AS courseid,
    GROUP_CONCAT(mc.fullname) AS coursename, 
    us.email
FROM {user} us
INNER JOIN {role_assignments} ra ON us.id = ra.userid
INNER JOIN {user_enrolments} mue ON mue.userid = us.id
INNER JOIN {enrol} me ON me.id = mue.enrolid
INNER JOIN {course} mc ON mc.id = me.courseid
WHERE ra.roleid = (SELECT id FROM {role} WHERE shortname = 'teacher')
AND us.id = :userid
GROUP BY us.id, us.firstname, us.lastname, us.city, us.email";

$teachers = $DB->get_records_sql($sql, array('userid' => $userID));
*/
echo '<div class="container">';
echo '<div class="col-md-12">';
echo '<div class="m-portlet m-portlet--full-height">';
echo '<div class="m-portlet__head">';
echo '<div class="m-portlet__head-caption">';
echo '<div class="m-portlet__head-title">';
echo '<h3 class="m-portlet__head-text">' . get_string('pluginname', 'local_coachlist') . '</h3>';
echo '</div></div></div>';
echo '<div class="m-portlet__body">';
echo '<div class="tab-content">';
echo '<div class="tab-pane active" id="m_widget4_tab1_content">';
echo '<div class="m-widget4 m-widget4--progress">';
echo '<div id="accordion">';

foreach ($teachers as $teacher) {
    $profileurl = new moodle_url('/user/profile.php', array('id' => $teacher->id));
    $userpicture = new user_picture($teacher);
    $userpicture->size = 125;
    $collapseId = "collapse" . $teacher->id;
    echo '<div class="m-widget4__item">';
    echo '<div class="row">';
    echo '<div class="col-md-3">';
    echo $OUTPUT->render($userpicture);
    echo '</div>';
    echo '<div class="col-md-9">';
    echo '<div class="m-widget4__info">';
    echo '<span class="m-widget4__title">' . $teacher->fullname . '</span>';
    echo '<br>';
    echo '<span class="m-widget4__sub">' . $teacher->email . '</span>';
    echo '</div>';
    echo '<div class="m-widget4__ext">';
    echo '<button class="btn btn-info" data-toggle="collapse" data-target="#' . $collapseId . '" onclick="showCourses(' . $teacher->id . ')">More Info</button>';
    echo '</div>';
    echo '</div>'; // Close col-md-9
    echo '</div>'; // Close row

    // Add accordion content area
    echo '<div id="' . $collapseId . '" class="collapse courses" aria-labelledby="heading' . $teacher->id . '" data-userid="' . $teacher->id . '">';
    echo '<div class="card-body">';
    // List courses
    echo '<h2>Courses:</h2>';
    echo '<ul>';

    $courseIds = explode(',', $teacher->courseid);
    $courses = explode(',', $teacher->coursename);

    foreach (array_combine($courseIds, $courses) as $courseId => $course) {
        $courseurl = new moodle_url('/course/view.php', array('id' => $courseId));
        echo '<li><a href="' . $courseurl . '">' . $course . '</a></li>'; 
    }

    echo '</ul>';
    echo '</div>';
    echo '</div>';
    echo '</div>'; 
}


echo '</div></div></div></div></div></div>';

echo $OUTPUT->footer();

 require_once('../../config.php');
require_login();
$PAGE->set_url('/local/coachlist/index.php');
$PAGE->set_context(context_system::instance());
$PAGE->set_title(get_string('pluginname', 'local_coachlist'));

// CSS dosyasını dahil etme
$PAGE->requires->css('/local/coachlist/styles.css');

echo $OUTPUT->header();

// Öğretmenlerin bilgilerini almak için SQL sorgusu
$sql = "SELECT us.id, CONCAT(us.firstname, ' ', us.lastname) AS fullname, us.email
        FROM {user} us
        JOIN {role_assignments} ra ON us.id = ra.userid
        WHERE ra.roleid = 3;";  // Öğretmenler için roleid, sisteminize göre değişebilir.

$teachers = $DB->get_records_sql($sql);

echo '<div class="container">';
echo '<div class="col-md-12">';
echo '<div class="m-portlet m-portlet--full-height">';
echo '<div class="m-portlet__head">';
echo '<div class="m-portlet__head-caption">';
echo '<div class="m-portlet__head-title">';
echo '<h3 class="m-portlet__head-text">'.get_string('pluginname','local_coachlist').'</h3>';
echo '</div></div></div>';
echo '<div class="m-portlet__body">';
echo '<div class="tab-content">';
echo '<div class="tab-pane active" id="m_widget4_tab1_content">';
echo '<div class="m-widget4 m-widget4--progress">';

foreach ($teachers as $teacher) {
    $profileurl = new moodle_url('/user/profile.php', array('id' => $teacher->id));
    // Kullanıcı resmi 
    $userpicture = new user_picture($teacher);  
    $userpicture->size = 150;  
    echo '<div class="m-widget4__item">';
    echo $OUTPUT->render($userpicture); 
    echo '<div class="m-widget4__info">';
    echo '<span class="m-widget4__title">' . $teacher->fullname . '</span>';
    echo '<br>';
    echo '<span class="m-widget4__sub">' . $teacher->email . '</span>';
    echo '</div>';
    echo '<div class="m-widget4__ext">';
    echo '<a href="'.$profileurl.'" class="m-btn m-btn--hover-brand m-btn--pill btn btn-sm btn-secondary">View Profile</a>';
    echo '</div></div>';
}

echo '</div></div></div></div></div></div>';

echo $OUTPUT->footer();