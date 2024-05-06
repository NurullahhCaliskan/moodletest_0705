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
 * Transferring wellko block settings to mustache
 *
 * @package   theme_wellko
 * @copyright 2022 ThemesAlmond
 * @author    ThemesAlmond - Developer Team
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Front page, home page one.
// Transferring information from settings to mustache template.

/**
 * Block 1.
 */
function theme_wellko_frontpage_h1_block_1() {
    $theme = theme_config::load('wellko');
    $templatecontext['h1_01_block_ratio_1'] = $theme->settings->h1_01_block_ratio;
    $templatecontext['h1_01_block_ratio_2'] = 12 - $theme->settings->h1_01_block_ratio;
    $templatecontext['h1_01_block_headline'] = format_string($theme->settings->h1_01_block_headline);
    $templatecontext['h1_01_block_header'] = format_string($theme->settings->h1_01_block_header);
    $templatecontext['h1_01_block_maintitle'] = format_string($theme->settings->h1_01_block_maintitle);
    $templatecontext['h1_01_block_btna'] = format_string($theme->settings->h1_01_block_btna);
    $templatecontext['h1_01_block_btna_link'] = $theme->settings->h1_01_block_btna_link;
    $templatecontext['h1_01_block_btnb'] = format_string($theme->settings->h1_01_block_btnb);
    $templatecontext['h1_01_block_btnb_link'] = $theme->settings->h1_01_block_btnb_link;

    return $templatecontext;
}
/**
 * Block 2.
 */
function theme_wellko_frontpage_h1_block_2() {
    $theme = theme_config::load('wellko');
    $templatecontext['h1_02_block_headline'] = format_string($theme->settings->h1_02_block_headline);
    $templatecontext['h1_02_block_header'] = format_string($theme->settings->h1_02_block_header);
    $count = $theme->settings->h1_02_block_count;
    for ($k = 5, $t = 10, $i = 1, $j = 0; $i <= $count; $t++, $k++, $i++, $j++) {
        $h102blocktitle = "h1_02_block_title{$i}";
        $h102blockcaption = "h1_02_block_caption{$i}";
        $h102blockbutton = "h1_02_block_button{$i}";
        $h102blockbuttonlink = "h1_02_block_button_link{$i}";
        $templatecontext['h1_02_block'][$j]['title'] = format_string($theme->settings->$h102blocktitle);
        $templatecontext['h1_02_block'][$j]['caption'] = format_string($theme->settings->$h102blockcaption);
        $templatecontext['h1_02_block'][$j]['button'] = format_string($theme->settings->$h102blockbutton);
        $templatecontext['h1_02_block'][$j]['buttonurl'] = format_string($theme->settings->$h102blockbuttonlink);
        $templatecontext['h1_02_block'][$j]['counter'] = $i;
        $templatecontext['h1_02_block'][$j]['counter4'] = $k;
        $templatecontext['h1_02_block'][$j]['counter8'] = $t;
    }
    if ($count == 2) {
        $templatecontext['col'] = "col-lg-6";
    } else if ($count == 3) {
        $templatecontext['col'] = "col-lg-4 col-md-6";
    } else {
        $templatecontext['col'] = "col-lg-3 col-md-6";
    }
    return $templatecontext;
}
/**
 * Block 3.
 */
function theme_wellko_frontpage_h1_block_3() {
    $theme = theme_config::load('wellko');
    $templatecontext['h1_03_block_subtitle'] = format_string($theme->settings->h1_03_block_subtitle);
    $templatecontext['h1_03_block_title'] = format_string($theme->settings->h1_03_block_title);
    $templatecontext['h1_03_block_caption'] = format_string($theme->settings->h1_03_block_caption);
    $templatecontext['h1_03_block_header_1'] = format_string($theme->settings->h1_03_block_header_1);
    $templatecontext['h1_03_block_text_1'] = format_string($theme->settings->h1_03_block_text_1);
    $templatecontext['h1_03_block_header_2'] = format_string($theme->settings->h1_03_block_header_2);
    $templatecontext['h1_03_block_text_2'] = format_string($theme->settings->h1_03_block_text_2);

    return $templatecontext;
}
/**
 * Block 4.
 *
 * @param int $freecount counter.
 */
function theme_wellko_frontpage_h1_block_4($freecount) {
    GLOBAL $DB, $OUTPUT, $PAGE, $CFG;
    $theme = theme_config::load('wellko');
    if ($freecount > 0 ) {
        $count = $freecount;
    } else {
        $count = $theme->settings->h1_04_block_count;
    }
     $templatecontext['h1_04_block_headline'] = format_string($theme->settings->h1_04_block_headline);
    $expset = explode("|", format_string($theme->settings->h1_04_block_headline));
    $say = 0;
    foreach ($expset as $x => $val) {
        if (isset($val)) {
            $say++;
            $templatecontext['h1_04_block_headline_'.$say] = $val;
        }
    }
    $templatecontext['h1_04_block_header'] = format_string($theme->settings->h1_04_block_header);
    $expset = explode("|", format_string($theme->settings->h1_04_block_header));
    $say = 0;
    foreach ($expset as $x => $val) {
        if (isset($val)) {
            $say++;
            $templatecontext['h1_04_block_header_'.$say] = $val;
        }
    }
    $teacherrole = $theme->settings->h1_04_block_showrole;
    // SQL Server.
    if ($CFG->dbtype === 'sqlsrv') {
        $sql = "SELECT TOP ". $count ." ra.userid, ra.roleid";
    } else {
        $sql = "SELECT  ra.userid, ra.roleid";
    }
    $sql = $sql." FROM {role_assignments} ra";
    $sql = $sql." JOIN {context} ctx on ra.contextid = ctx.id";
    $sql = $sql." WHERE ra.roleid = :roleid";
    $sql = $sql." GROUP BY ra.userid, ra.roleid";
    if ($CFG->dbtype != 'sqlsrv') {
        $sql = $sql." LIMIT ". $count;
    }
    // And ctx.contextlevel = '50'?
    $roleassignments = $DB->get_records_sql($sql, array('roleid' => $teacherrole));
    if (!empty($roleassignments)) {
        $j = 0;
        $k = 3;
        foreach ($roleassignments as $roleassignment) {
            $roleassignment->imagealt = "Teacher";
            if ($user = $DB->get_record('user', array('id' => $roleassignment->userid))) {
                $templatecontext['h1_04_block'][$j]['teachername'] = $user->firstname." ".$user->lastname;
                $templatecontext['h1_04_block'][$j]['userpicture'] =
                    $OUTPUT->user_picture($user, array('class' => ''));
                $templatecontext['h1_04_block'][$j]['userURL'] =
                    new moodle_url('/user/profile.php', array('id' => $roleassignment->userid ));
                $templatecontext['h1_04_block'][$j]['team_detail_lnk'] = '?team-details='.$roleassignment->userid;
                $userpicture = new user_picture($user);
                $userpicture->size = 512;
                $url = $userpicture->get_url($PAGE)->out(false);
                $templatecontext['h1_04_block'][$j]['userpictureURL'] = $url;
            }

            $sql = "SELECT  usdata.*, usfield.shortname";
            $sql = $sql." FROM {user_info_data} usdata";
            $sql = $sql." JOIN {user_info_field} usfield ON usdata.fieldid = usfield.id";
            $sql = $sql." WHERE usdata.userid = ". $roleassignment->userid;
            $otherareas = $DB->get_records_sql($sql);
            if (!empty($otherareas)) {
                foreach ($otherareas as $otherarea) {
                    if ($otherarea->shortname == "userjob" ) {
                        $templatecontext['h1_04_block'][$j]['job'] = $otherarea->data;
                    } else if ( $otherarea->shortname == "usermail" ) {
                        $templatecontext['h1_04_block'][$j]['usermail'] = $otherarea->data;
                    } else if ( substr($otherarea->shortname, 0, 10) == "usersocial" ) {
                        if (!empty($otherarea->data)) {
                            $exp = explode(',', $otherarea->data);
                            $templatecontext['h1_04_block'][$j][$otherarea->shortname."link"] = isset($exp[1]) ? $exp[1] : null;
                            if (get_string_manager()->string_exists($exp[0], 'theme_wellko')) {
                                $socialmedia = get_string($exp[0], 'theme_wellko');
                                if (substr($socialmedia, 0, 1) != "[" ) {
                                    $templatecontext['h1_04_block'][$j][$otherarea->shortname] = $socialmedia;
                                } else {
                                    $templatecontext['h1_04_block'][$j][$otherarea->shortname] = "fa fa-question";
                                }
                            }
                        }
                    }
                }
            }
            $templatecontext['h1_04_block'][$j]['counter3'] = $k;
            $k++;
            if ($j + 1 == $count) {
                break;
            }
            $j++;
        }
    }
    return $templatecontext;
}
/**
 * Block 5.
 */
function theme_wellko_frontpage_h1_block_5() {
    $theme = theme_config::load('wellko');
    $templatecontext['h1_05_block_headline'] = format_string($theme->settings->h1_05_block_headline);
    $templatecontext['h1_05_block_header'] = format_string($theme->settings->h1_05_block_header);
    $templatecontext['h1_05_block_caption'] = format_string($theme->settings->h1_05_block_caption);
    $templatecontext['h1_05_block_button'] = format_string($theme->settings->h1_05_block_button);
    $templatecontext['h1_05_block_button_link'] = $theme->settings->h1_05_block_button_link;
    return $templatecontext;
}
/**
 * Block 6.
 */
function theme_wellko_frontpage_h1_block_6() {
    $theme = theme_config::load('wellko');
    $templatecontext['h1_06_block_headline'] = format_string($theme->settings->h1_06_block_headline);
    $templatecontext['h1_06_block_header'] = format_string($theme->settings->h1_06_block_header);
    $templatecontext['h1_06_block_maintitle'] = format_string($theme->settings->h1_06_block_maintitle);
    $count = $theme->settings->h1_06_block_count;
    if ( $count > 3 ) {
        $count1 = 3;
        $count2 = $count;
    } else {
        $count1 = $count;
        $count2 = 0;
    }
    $categoryarr = array();
    for ($i = 1, $j = 0; $i <= $count; $i++, $j++) {
        $h106blockcategory = "h1_06_block_category{$i}";
        $categoryarr[$j] = strtolower($theme->settings->$h106blockcategory);
    }
    $arrayctg = array_unique($categoryarr);
    $i = 0;
    foreach ($arrayctg as $field) {
        $templatecontext['h1_06_block_ctg'][$i]['category'] = format_string($field);
        $i++;
    }
    for ($i = 1, $j = 0; $i <= $count1; $i++, $j++) {
        $h106blockcategory = "h1_06_block_category{$i}";
        $h106blockfirsttitle = "h1_06_block_first_title{$i}";
        $h106blocksecondtitle = "h1_06_block_second_title{$i}";
        $h106blocklink = "h1_06_block_link{$i}";
        $h106blockbadge = "h1_06_block_badge{$i}";
        $templatecontext['h1_06_block'][$j]['category'] = format_string($theme->settings->$h106blockcategory);
        $templatecontext['h1_06_block'][$j]['firsttitle'] = format_string($theme->settings->$h106blockfirsttitle);
        $templatecontext['h1_06_block'][$j]['secondtitle'] = format_string($theme->settings->$h106blocksecondtitle);
        $templatecontext['h1_06_block'][$j]['linkurl'] = format_string($theme->settings->$h106blocklink);
        $templatecontext['h1_06_block'][$j]['badge'] = format_string($theme->settings->$h106blockbadge);
        $templatecontext['h1_06_block'][$j]['counter'] = $i;
    }
    for ($i = 4, $j = 0; $i <= $count2; $i++, $j++) {
        $h106blockcategory = "h1_06_block_category{$i}";
        $h106blockfirsttitle = "h1_06_block_first_title{$i}";
        $h106blocksecondtitle = "h1_06_block_second_title{$i}";
        $h106blocklink = "h1_06_block_link{$i}";
        $h106blockbadge = "h1_06_block_badge{$i}";
        $templatecontext['h1_06_block_'][$j]['category'] = format_string($theme->settings->$h106blockcategory);
        $templatecontext['h1_06_block_'][$j]['firsttitle'] = format_string($theme->settings->$h106blockfirsttitle);
        $templatecontext['h1_06_block_'][$j]['secondtitle'] = format_string($theme->settings->$h106blocksecondtitle);
        $templatecontext['h1_06_block_'][$j]['linkurl'] = format_string($theme->settings->$h106blocklink);
        $templatecontext['h1_06_block_'][$j]['badge'] = format_string($theme->settings->$h106blockbadge);
        $templatecontext['h1_06_block_'][$j]['counter'] = $i;
    }
    return $templatecontext;
}
/**
 * Block 7.
 */
function theme_wellko_frontpage_h1_block_7() {
    $theme = theme_config::load('wellko');
    $templatecontext['h1_07_block_headline'] = format_string($theme->settings->h1_07_block_headline);
    $templatecontext['h1_07_block_header'] = format_string($theme->settings->h1_07_block_header);
    $templatecontext['h1_07_block_maintitle'] = format_string($theme->settings->h1_07_block_maintitle);
    $count = $theme->settings->h1_07_block_count;
    for ($i = 1, $j = 0; $i <= $count; $i++, $j++) {
        $h107blockname = "h1_07_block_name{$i}";
        $h107blockjob = "h1_07_block_job{$i}";
        $h107blockcomment = "h1_07_block_comment{$i}";
        $h107blockstar = "h1_07_block_star{$i}";
        $templatecontext['h1_07_block'][$j]['name'] = format_string($theme->settings->$h107blockname);
        $templatecontext['h1_07_block'][$j]['job'] = format_string($theme->settings->$h107blockjob);
        $templatecontext['h1_07_block'][$j]['comment'] = format_string($theme->settings->$h107blockcomment);
        $templatecontext['h1_07_block'][$j]['star'] = $theme->settings->$h107blockstar;
        $templatecontext['h1_07_block'][$j]['counter'] = $i;

        for ($k = 1; $k <= 5; $k++) {
            if ( $k <= $theme->settings->$h107blockstar ) {
                $templatecontext['h1_07_block'][$j]['rating'.$k] = "active";
            } else {
                $templatecontext['h1_07_block'][$j]['rating'.$k] = "";
            }
        }
    }
    return $templatecontext;
}
/**
 * Block 8.
 *
 * @param int $freecount counters.
 */
function theme_wellko_frontpage_h1_block_8($freecount) {
    GLOBAL  $PAGE, $DB, $CFG;
    $theme = theme_config::load('wellko');
    $templatecontext['h1_08_block_headline'] = format_string($theme->settings->h1_08_block_headline);
    $templatecontext['h1_08_block_header'] = format_string($theme->settings->h1_08_block_header);
    $templatecontext['h1_08_block_maintitle'] = format_string($theme->settings->h1_08_block_maintitle);
    $count = 3;
    if ($freecount > 0 ) {
        $count = $freecount;
    }
    if (!empty($theme->settings->h1_08_block_courseid)) {
        $courses = $DB->get_records_sql("SELECT * FROM {course} WHERE ".$theme->settings->h1_08_block_courseid);
    } else {
        if ($CFG->dbtype === 'sqlsrv') {
            $courses =
            $DB->get_records_sql("SELECT TOP ". $count ." * FROM {course} WHERE category <> 0 ORDER BY timemodified DESC");
        } else {
            $courses =
            $DB->get_records_sql("SELECT * FROM {course} WHERE category <> 0 ORDER BY timemodified DESC  LIMIT ". $count);
        }
    }
    if (!empty($courses)) {
        foreach ($courses as $id => $course) {
            $category = $DB->get_record('course_categories', array('id' => $course->category));
            if (!empty($category)) {
                $course->categoryName = $category->name;
                $course->categoryId = $category->id;
                $allcourses[$id] = $course;
            }
        };
    }
    $j = 0;
    $sql = "SELECT  en.courseid, en.cost, en.currency";
    $sql = $sql." FROM {enrol} en";
    $sql = $sql." WHERE en.courseid = :courseid and en.status = 0 and en.cost != 'NULL'";
    // Course star SQL.
    $sqla = "SELECT fv.itemid, count(fv.itemid) as countstar";
    $sqla = $sqla." FROM {favourite} fv";
    $sqla = $sqla." WHERE fv.itemid = :courseid and fv.itemtype = 'courses'";
    $sqla = $sqla." GROUP BY fv.itemid";
    if (!empty($allcourses)) {
        foreach ($allcourses as $id => $course) {
            $templatecontext['h1_08_block'][$j]['fullname'] = $course->fullname;
            $templatecontext['h1_08_block'][$j]['shortname'] = $course->shortname;
            $templatecontext['h1_08_block'][$j]['summary'] = $course->summary;
            $templatecontext['h1_08_block'][$j]['update'] = gmdate("M d,Y", $course->timemodified);
            $templatecontext['h1_08_block'][$j]['categoryName'] = $course->categoryName;
            $templatecontext['h1_08_block'][$j]['courselink'] = "course/view.php?id=".$id;
            $templatecontext['h1_08_block'][$j]['categorylink'] = "course/index.php?categoryid=".$course->categoryId;
            $templatecontext['h1_08_block'][$j]['imgurl'] = wellko_get_course_image($id);
            $templatecontext['h1_08_block'][$j]['counter'] = $j + 1;
            $templatecontext['h1_08_block'][$j]['coursed_detail_lnk'] = "?course-details=".$id;
            $enrol = $DB->get_records_sql($sql, array('courseid' => $id));
            $star = $DB->get_records_sql($sqla, array('courseid' => $id));
            if (empty($enrol)) {
                $templatecontext['h1_08_block'][$j]['currency'] = get_string('h1_08_block_enrol_free', 'theme_wellko');
            } else {
                foreach ($enrol as $enrols) {
                    $templatecontext['h1_08_block'][$j]['cost'] = $enrols->cost;
                    $templatecontext['h1_08_block'][$j]['currency'] = $enrols->currency;
                };
            }
            if (empty($star)) {
                $templatecontext['h1_08_block'][$j]['star'] = false;
            } else {
                foreach ($star as $stars) {
                    $templatecontext['h1_08_block'][$j]['star'] = $stars->countstar;
                };
            }
            $context = context_course::instance($id);
            $role = $theme->settings->h1_08_block_teacher_role;
            $teachers = get_role_users($role, $context);
            if (!empty($teachers)) {
                foreach ($teachers as $id => $teacher) {
                    $templatecontext['h1_08_block'][$j]['teachername'] = fullname($teacher);
                    $teacher->imagealt = get_string('defaultcourseteacher', 'moodle');
                    $userpicture = new user_picture($teacher);
                    $templatecontext['h1_08_block'][$j]['userpicture'] = $userpicture->get_url($PAGE)->out(false);
                    $templatecontext['h1_08_block'][$j]['userURL'] =
                            new moodle_url('/user/profile.php', array('id' => $teacher->id ));
                    $templatecontext['h1_08_block'][$j]['team_detail_lnk'] = '?team-details='.$teacher->id;
                }
            }
            $j++;
        };
    }
    return $templatecontext;
}
/**
 * Block 9.
 */
function theme_wellko_frontpage_h1_block_9() {
    $templatecontext['h1_09_block_null'] = null;
    return $templatecontext;
}
/**
 * Block 10.
 */
function theme_wellko_frontpage_h1_block_10() {
    $theme = theme_config::load('wellko');
    $templatecontext['h1_10_block_subtitle'] = format_string($theme->settings->h1_10_block_subtitle);
    $templatecontext['h1_10_block_title'] = format_string($theme->settings->h1_10_block_title);
    $templatecontext['h1_10_placeholder'] = format_string($theme->settings->h1_10_placeholder);
    $templatecontext['h1_10_button'] = format_string($theme->settings->h1_10_button);
    $templatecontext['h1_10_button_link'] = $theme->settings->h1_10_button_link;
    $templatecontext['h1_10_chk_condition'] = format_string($theme->settings->h1_10_chk_condition);
    return $templatecontext;
}
/**
 * Block 11.
 */
function theme_wellko_frontpage_h1_block_11() {
    $theme = theme_config::load('wellko');
    $templatecontext['h1_11_block_subtitle'] = format_string($theme->settings->h1_11_block_subtitle);
    $templatecontext['h1_11_block_title'] = format_string($theme->settings->h1_11_block_title);
    $templatecontext['h1_11_block_header_1'] = format_string($theme->settings->h1_11_block_header_1);
    $templatecontext['h1_11_block_text_1'] = format_string($theme->settings->h1_11_block_text_1);
    $templatecontext['h1_11_block_header_2'] = format_string($theme->settings->h1_11_block_header_2);
    $templatecontext['h1_11_block_text_2'] = format_string($theme->settings->h1_11_block_text_2);
    $templatecontext['h1_11_block_header_3'] = format_string($theme->settings->h1_11_block_header_3);
    $templatecontext['h1_11_block_text_3'] = format_string($theme->settings->h1_11_block_text_3);
    return $templatecontext;
}
/**
 * Block 12.
 */
function theme_wellko_frontpage_h1_block_12() {
    $theme = theme_config::load('wellko');
    $templatecontext['h1_12_block_caption'] = format_string($theme->settings->h1_12_block_caption);
    return $templatecontext;
}
