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

// Front page, home page two.
// Transferring information from settings to mustache template.

/**
 * Block 1.
 */
function theme_wellko_frontpage_h2_block_1() {
    $theme = theme_config::load('wellko');
    $templatecontext['h2_01_block_headline'] = format_string($theme->settings->h2_01_block_headline);
    $templatecontext['h2_01_block_header'] = format_string($theme->settings->h2_01_block_header);
    $templatecontext['h2_01_block_maintitle'] = format_string($theme->settings->h2_01_block_maintitle);
    $templatecontext['h2_01_block_btna'] = format_string($theme->settings->h2_01_block_btna);
    $templatecontext['h2_01_block_btna_link'] = format_string($theme->settings->h2_01_block_btna_link);
    $templatecontext['h2_01_block_btnb'] = format_string($theme->settings->h2_01_block_btnb);
    $templatecontext['h2_01_block_btnb_link'] = format_string($theme->settings->h2_01_block_btnb_link);
    $templatecontext['h2_01_block_circle_cnter'] = format_string($theme->settings->h2_01_block_circle_cnter);
    $templatecontext['h2_01_block_circle_text_1'] = format_string($theme->settings->h2_01_block_circle_text_1);
    $templatecontext['h2_01_block_circle_text_2'] = format_string($theme->settings->h2_01_block_circle_text_2);
    return $templatecontext;
}
/**
 * Block 2.
 */
function theme_wellko_frontpage_h2_block_2() {
    $theme = theme_config::load('wellko');
    $count = $theme->settings->h2_02_block_count;
    for ($k = 6, $t = 10, $i = 1, $j = 0; $i <= $count; $t++, $k++, $i ++, $j++) {
        $h202blocktitle = "h2_02_block_title{$i}";
        $h202blockcounting = "h2_02_block_counting{$i}";
        $templatecontext['h2_02_block'][$j]['title'] = format_string($theme->settings->$h202blocktitle);
        $templatecontext['h2_02_block'][$j]['counting'] = $theme->settings->$h202blockcounting;
        $templatecontext['h2_02_block'][$j]['counter'] = $i;
        $templatecontext['h2_02_block'][$j]['counter4'] = $k;
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
function theme_wellko_frontpage_h2_block_3() {
    $theme = theme_config::load('wellko');
    $templatecontext['h2_03_block_subtitle'] = format_string($theme->settings->h2_03_block_subtitle);
    $templatecontext['h2_03_block_title'] = format_string($theme->settings->h2_03_block_title);
    $templatecontext['h2_03_block_caption'] = format_string($theme->settings->h2_03_block_caption);
    $templatecontext['h2_03_block_button'] = format_string($theme->settings->h2_03_block_button);
    $templatecontext['h2_03_block_button_lnk'] = $theme->settings->h2_03_block_button_lnk;
    $templatecontext['h2_03_block_header_1'] = format_string($theme->settings->h2_03_block_header_1);
    $templatecontext['h2_03_block_header_2'] = format_string($theme->settings->h2_03_block_header_2);
    $templatecontext['h2_03_block_header_3'] = format_string($theme->settings->h2_03_block_header_3);
    $templatecontext['h2_03_block_header_4'] = format_string($theme->settings->h2_03_block_header_4);
    return $templatecontext;
}
/**
 * Block 4.
 */
function theme_wellko_frontpage_h2_block_4() {
    GLOBAL  $PAGE, $DB, $CFG;
    $theme = theme_config::load('wellko');
    $templatecontext['h2_04_block_headline'] = format_string($theme->settings->h2_04_block_headline);
    $templatecontext['h2_04_block_header'] = format_string($theme->settings->h2_04_block_header);
    $templatecontext['h2_04_block_maintitle'] = format_string($theme->settings->h2_04_block_maintitle);
    $count = 6;
    if (!empty($theme->settings->h2_04_block_courseid)) {
        $courses = $DB->get_records_sql("SELECT * FROM {course} WHERE ".$theme->settings->h2_04_block_courseid);
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
    if (!empty($allcourses)) {
        foreach ($allcourses as $id => $course) {
            $templatecontext['h2_04_block'][$j]['fullname'] = $course->fullname;
            $templatecontext['h2_04_block'][$j]['shortname'] = $course->shortname;
            $templatecontext['h2_04_block'][$j]['summary'] = $course->summary;
            $templatecontext['h2_04_block'][$j]['update'] = gmdate("M d,Y", $course->timemodified);
            $templatecontext['h2_04_block'][$j]['categoryName'] = $course->categoryName;
            $templatecontext['h2_04_block'][$j]['courselink'] = "course/view.php?id=".$id;
            $templatecontext['h2_04_block'][$j]['categorylink'] = "course/index.php?categoryid=".$course->categoryId;
            $templatecontext['h2_04_block'][$j]['imgurl'] = wellko_get_course_image($id);
            $templatecontext['h2_04_block'][$j]['counter'] = $j + 1;
            $templatecontext['h2_04_block'][$j]['coursed_detail_lnk'] = "?course-details=".$id;
            $enrol = $DB->get_records_sql($sql, array('courseid' => $id));
            if (empty($enrol)) {
                $templatecontext['h2_04_block'][$j]['currency'] = get_string('h2_04_block_enrol_free', 'theme_wellko');
            } else {
                foreach ($enrol as $enrols) {
                    $templatecontext['h2_04_block'][$j]['cost'] = $enrols->cost;
                    $templatecontext['h2_04_block'][$j]['currency'] = $enrols->currency;
                };
            }
            $context = context_course::instance($id);
            $role = $theme->settings->h2_04_block_teacher_role;
            $teachers = get_role_users($role, $context);
            if (!empty($teachers)) {
                foreach ($teachers as $id => $teacher) {
                    $templatecontext['h2_04_block'][$j]['teachername'] = fullname($teacher);
                    $teacher->imagealt = get_string('defaultcourseteacher', 'moodle');
                    $userpicture = new user_picture($teacher);
                    $templatecontext['h2_04_block'][$j]['userpicture'] = $userpicture->get_url($PAGE)->out(false);
                    $templatecontext['h2_04_block'][$j]['userURL'] =
                            new moodle_url('/user/profile.php', array('id' => $teacher->id ));
                    $templatecontext['h2_04_block'][$j]['team_detail_lnk'] = '?team-details='.$teacher->id;
                }
            }
            $j++;
        };
    }
    return $templatecontext;
}
/**
 * Block 5.
 */
function theme_wellko_frontpage_h2_block_5() {
    $theme = theme_config::load('wellko');
    $templatecontext['h2_05_block_headline'] = format_string($theme->settings->h2_05_block_headline);
    $templatecontext['h2_05_block_header'] = format_string($theme->settings->h2_05_block_header);
    $templatecontext['h2_05_block_maintitle'] = format_string($theme->settings->h2_05_block_maintitle);
    $templatecontext['h2_05_block_btna'] = format_string($theme->settings->h2_05_block_btna);
    $templatecontext['h2_05_block_btna_link'] = $theme->settings->h2_05_block_btna_link;
    $templatecontext['h2_05_block_btnb'] = format_string($theme->settings->h2_05_block_btnb);
    $templatecontext['h2_05_block_btnb_link'] = $theme->settings->h2_05_block_btnb_link;
    return $templatecontext;
}
/**
 * Block 6.
 */
function theme_wellko_frontpage_h2_block_6() {
    $theme = theme_config::load('wellko');
    $templatecontext['h2_06_block_headline'] = format_string($theme->settings->h2_06_block_headline);
    $templatecontext['h2_06_block_header'] = format_string($theme->settings->h2_06_block_header);
    $templatecontext['h2_06_block_maintitle'] = format_string($theme->settings->h2_06_block_maintitle);

    $expset = explode("|", format_string($theme->settings->h2_06_block_circle_triple));

    $expset1 = isset($expset[0]) ? $expset[0] : null;
    $expset2 = isset($expset[1]) ? $expset[1] : null;
    $circle1 = explode(",", $expset1);
    if (isset($circle1[0]) && isset($circle1[1]) && isset($circle1[2])) {
        $templatecontext['h2_06_block_circle_num_1'] = $circle1[0];
        $templatecontext['h2_06_block_circle_txt1_1'] = format_string($circle1[1]);
        $templatecontext['h2_06_block_circle_txt2_1'] = format_string($circle1[2]);
    }
    $circle2 = explode(",", $expset2);
    if (isset($circle2[0]) && isset($circle2[1]) && isset($circle2[2])) {
        $templatecontext['h2_06_block_circle_num_2'] = $circle2[0];
        $templatecontext['h2_06_block_circle_txt1_2'] = format_string($circle2[1]);
        $templatecontext['h2_06_block_circle_txt2_2'] = format_string($circle2[2]);
    }
    $count = $theme->settings->h2_06_block_count;
    for ($k = 6, $t = 10, $i = 1, $j = 0; $i <= $count; $t++, $k++, $i ++, $j++) {
        $h206blocktitle = "h2_06_block_title{$i}";
        $h206blockcaption = "h2_06_block_caption{$i}";
        $templatecontext['h2_06_block'][$j]['title'] = format_string($theme->settings->$h206blocktitle);
        $templatecontext['h2_06_block'][$j]['caption'] = format_string($theme->settings->$h206blockcaption);
        $templatecontext['h2_06_block'][$j]['counter'] = "item".$i;
        $templatecontext['h2_06_block'][$j]['counter4'] = $k;
    }
    return $templatecontext;
}
/**
 * Block 7.
 */
function theme_wellko_frontpage_h2_block_7() {
    $theme = theme_config::load('wellko');
    $templatecontext['h2_07_block_caption'] = format_string($theme->settings->h2_07_block_caption);
    return $templatecontext;
}
/**
 * Block 8.
 */
function theme_wellko_frontpage_h2_block_8() {
    $theme = theme_config::load('wellko');
    $templatecontext['h2_08_block_headline'] = format_string($theme->settings->h2_08_block_headline);
    $templatecontext['h2_08_block_header'] = format_string($theme->settings->h2_08_block_header);
    $templatecontext['h2_08_block_maintitle'] = format_string($theme->settings->h2_08_block_maintitle);
    $count = $theme->settings->h2_08_block_count;
    for ($i = 1, $j = 0; $i <= $count; $i++, $j++) {
        $h208blockname = "h2_08_block_name{$i}";
        $h208blockjob = "h2_08_block_job{$i}";
        $h208blockcomment = "h2_08_block_comment{$i}";
        $templatecontext['h2_08_block'][$j]['name'] = format_string($theme->settings->$h208blockname);
        $templatecontext['h2_08_block'][$j]['job'] = format_string($theme->settings->$h208blockjob);
        $templatecontext['h2_08_block'][$j]['comment'] = format_string($theme->settings->$h208blockcomment);
        $templatecontext['h2_08_block'][$j]['counter'] = $i;
    }
    return $templatecontext;
}
/**
 * Block 9.
 *
 * @param int $freecount counters.
 */
function theme_wellko_frontpage_h2_block_9($freecount) {
    // Site blog frontpage.
    global $DB, $OUTPUT, $CFG;
    $theme = theme_config::load('wellko');
    $templatecontext['h2_09_block_headline'] = format_string($theme->settings->h2_09_block_headline);
    $templatecontext['h2_09_block_header'] = format_string($theme->settings->h2_09_block_header);
    $templatecontext['h2_09_block_maintitle'] = format_string($theme->settings->h2_09_block_maintitle);
    $count = $theme->settings->h2_09_block_count;
    if ($freecount > 0 ) {
        $count = $freecount;
    }
    // SQL Server.
    if ($CFG->dbtype === 'sqlsrv') {
        $sql = "SELECT TOP ". $count ." FROM {post} pt";
    } else {
        $sql = "SELECT * FROM {post} pt";
    }
    if (isloggedin()) {
        $sql = $sql." WHERE pt.publishstate = 'public' or pt.publishstate = 'site'";
    } else {
        $sql = $sql." WHERE pt.publishstate = 'public'";
    }
    $sql = $sql." ORDER BY pt.created DESC";
    if ($CFG->dbtype != 'sqlsrv') {
        $sql = $sql." LIMIT ". $count;
    }
    $posts = $DB->get_records_sql($sql, array());
    if (!empty($posts)) {
        $j = 0;
        $i = 2;
        foreach ($posts as $post) {
            $templatecontext['h2_09_block'][$j]['subject'] = $post->subject;
            $templatecontext['h2_09_block'][$j]['summary'] = $post->summary;
            $templatecontext['h2_09_block'][$j]['created'] = gmdate(" D, d M Y", $post->created);
            $templatecontext['h2_09_block'][$j]['lastmodified'] = gmdate("d M Y", $post->lastmodified);
            $templatecontext['h2_09_block'][$j]['postURL'] = new moodle_url('/blog/index.php?entryid='. $post->id);
            $templatecontext['h2_09_block'][$j]['post_detail_lnk'] = '?blog-details='.$post->id;
            $templatecontext['h2_09_block'][$j]['imgurl'] = wellko_get_blog_post_image($post->id);
            $templatecontext['h2_09_block'][$j]['tag'] = $OUTPUT->tag_list(core_tag_tag::get_item_tags('core', 'post', $post->id));
            $templatecontext['h2_09_block'][$j]['commentscount'] = $DB->count_records('comments', array('itemid' => $post->id));
            $templatecontext['h2_09_block'][$j]['count'] = $i;
            if ($user = $DB->get_record('user', array('id' => $post->userid))) {
                $templatecontext['h2_09_block'][$j]['userURL'] =
                    new moodle_url('/user/profile.php', array('id' => $post->userid ));
                $templatecontext['h2_09_block'][$j]['team_detail_lnk'] = '?team-details='.$post->userid;
                $templatecontext['h2_09_block'][$j]['username'] = fullname($user);
            }

            $i = $i + 2;
            $j++;
        }
    }
    return $templatecontext;
}
