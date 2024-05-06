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
 * Transferring wellko other block settings to mustache
 *
 * @package   theme_wellko
 * @copyright 2022 ThemesAlmond
 * @author    ThemesAlmond - Developer Team
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Front page, asside and footer page.
// Transferring information from settings to mustache template.

/**
 * Block asside.
 */
function theme_wellko_frontpage_other_block_aside() {
    GLOBAL $DB, $CFG;
    $theme = theme_config::load('wellko');
    $templatecontext['aside_enabled'] = $theme->settings->aside_enabled;
    $templatecontext['aside_caption'] = format_string($theme->settings->aside_caption);
    $templatecontext['aside_header1'] = format_string($theme->settings->aside_header1);
    $templatecontext['aside_header2'] = format_string($theme->settings->aside_header2);
    $count = 6;
    // SQL Server.
    if ($CFG->dbtype === 'sqlsrv') {
        $sql = "SELECT TOP ". $count ." ca.id, ca.name, ca.parent, ca.coursecount, ca.visible, ca.depth, ca.path, ca.description";
    } else {
        $sql = "SELECT ca.id, ca.name, ca.parent, ca.coursecount, ca.visible, ca.depth, ca.path, ca.description";
    }
    $sql = $sql." FROM {course_categories} ca";
    $sql = $sql." WHERE ca.coursecount > 0";
    $sql = $sql." ORDER BY ca.coursecount DESC";
    if ($CFG->dbtype != 'sqlsrv') {
        $sql = $sql." LIMIT ". $count;
    }
    $categorys = $DB->get_records_sql($sql, array());
    if (!empty($categorys)) {
        $j = 0;
        foreach ($categorys as $category) {
            $templatecontext['aside'][$j]['catagoryname'] = $category->name;
            $templatecontext['aside'][$j]['catagoryURL'] = new moodle_url('/course/index.php?categoryid='. $category->id);
            $j++;
        }
    }
    $count = 3;
    // SQL Server.
    if ($CFG->dbtype === 'sqlsrv') {
        $sql = "SELECT TOP ". $count ." c.id, c.fullname, c.shortname, c.summary, c.timemodified, c.category";
    } else {
        $sql = "SELECT c.id, c.fullname, c.shortname, c.summary, c.timemodified, c.category";
    }
    $sql = $sql." FROM {course} c";
    $sql = $sql." WHERE c.category > 0";
    $sql = $sql." ORDER BY c.timemodified DESC";
    if ($CFG->dbtype != 'sqlsrv') {
        $sql = $sql." LIMIT ". $count;
    }
    $courses = $DB->get_records_sql($sql);
    $j = 0;
    foreach ($courses as $id => $course) {
        $templatecontext['aside_course'][$j]['fullname'] = $course->fullname;
        $templatecontext['aside_course'][$j]['shortname'] = $course->shortname;
        $templatecontext['aside_course'][$j]['courselink'] = "course/view.php?id=".$id;
        $templatecontext['aside_course'][$j]['imgurl'] = wellko_get_course_image($id);
        $templatecontext['aside_course'][$j]['coursed_detail_lnk'] = "?course-details=".$id;
        $context = context_course::instance($id);
        $role = $theme->settings->h1_08_block_teacher_role;
        $teachers = get_role_users($role, $context);
        if (!empty($teachers)) {
            foreach ($teachers as $id => $teacher) {
                $templatecontext['aside_course'][$j]['teachername'] = fullname($teacher);
            }
        }
        $j++;
    };
    return $templatecontext;
}
/**
 * Block footer.
 */
function theme_wellko_frontpage_other_block_footer() {
    $theme = theme_config::load('wellko');
    $templatecontext['footer_enabled'] = $theme->settings->footer_enabled;
    $templatecontext['footer_moodle'] = $theme->settings->footer_moodle;
    $templatecontext['footer_appimg'] = $theme->settings->footer_appimg;
    $templatecontext['footer_email'] = $theme->settings->footer_email;
    $templatecontext['footer_appimg_link'] = $theme->settings->footer_appimg_link;
    $templatecontext['footer_appimg_link_1'] = $theme->settings->footer_appimg_link_1;
    $frontpagechoice = $theme->settings->frontpagechoice;
    $templatecontext['frontpagechoice-1'] = ( 1 == $frontpagechoice ) ? true : false;
    $templatecontext['frontpagechoice-2'] = ( 2 == $frontpagechoice ) ? true : false;
    $templatecontext['frontpagechoice-3'] = ( 3 == $frontpagechoice ) ? true : false;
    switch ($theme->settings->footer_logo) {
        case 'Logo':
            $templatecontext['footer_logo'] = true;
            break;
        case 'Small logo':
            $templatecontext['footer_logo_sm'] = true;
            break;
    }
    $templatecontext['footer_col1_header'] = format_string($theme->settings->footer_col1_header);
    $expset = explode("|", format_string($theme->settings->footer_col1_header));
    $say = 0;
    foreach ($expset as $x => $val) {
        if (isset($val)) {
            $say++;
            $templatecontext['footer_col1_header_'.$say] = $val;
        }
    }
    $templatecontext['footer_col1_caption'] = $theme->settings->footer_col1_caption;
    $expset = explode("|", format_string($theme->settings->footer_col1_caption));
    $say = 0;
    foreach ($expset as $x => $val) {
        if (isset($val)) {
            $say++;
            $templatecontext['footer_col1_caption_'.$say] = $val;
        }
    }
    $templatecontext['footer_col2_header'] = format_string($theme->settings->footer_col2_header);
    $expset = explode("|", format_string($theme->settings->footer_col2_header));
    $say = 0;
    foreach ($expset as $x => $val) {
        if (isset($val)) {
            $say++;
            $templatecontext['footer_col2_header_'.$say] = $val;
        }
    }
    $templatecontext['footer_col2_link'] = theme_wellko_links($theme->settings->footer_col2_link);
    $templatecontext['footer_col3_header'] = format_string($theme->settings->footer_col3_header);
    $expset = explode("|", format_string($theme->settings->footer_col3_header));
    $say = 0;
    foreach ($expset as $x => $val) {
        if (isset($val)) {
            $say++;
            $templatecontext['footer_col3_header_'.$say] = $val;
        }
    }
    $templatecontext['footer_col3_link'] = theme_wellko_links($theme->settings->footer_col3_link);
    $templatecontext['footer_col4_header'] = format_string($theme->settings->footer_col4_header);
    $expset = explode("|", format_string($theme->settings->footer_col4_header));
    $say = 0;
    foreach ($expset as $x => $val) {
        if (isset($val)) {
            $say++;
            $templatecontext['footer_col4_header_'.$say] = $val;
        }
    }
    $templatecontext['footer_col4_caption'] = $theme->settings->footer_col4_caption;
    $expset = explode("|", format_string($theme->settings->footer_col4_caption));
    $say = 0;
    foreach ($expset as $x => $val) {
        if (isset($val)) {
            $say++;
            $templatecontext['footer_col4_caption_'.$say] = $val;
        }
    }
    $templatecontext['footer_social'] = $theme->settings->footer_social;
    $templatecontext['footer_copyright'] = $theme->settings->footer_copyright;
    $expset = explode("|", format_string($theme->settings->footer_copyright));
    $say = 0;
    foreach ($expset as $x => $val) {
        if (isset($val)) {
            $say++;
            $templatecontext['footer_copyright_'.$say] = $val;
        }
    }
    return $templatecontext;
}
/**
 * Block Terms & Conditions.
 */
function theme_wellko_frontpage_other_block_terms() {
    $theme = theme_config::load('wellko');
    $templatecontext['terms_header1'] = format_string($theme->settings->terms_header1);
    $templatecontext['terms_subhdimg'] = $theme->settings->terms_subhdimg;
    $templatecontext['terms_caption'] = $theme->settings->terms_caption;
    return $templatecontext;
}
/**
 * Block Privacy Policy.
 */
function theme_wellko_frontpage_other_block_privacy() {
    $theme = theme_config::load('wellko');
    $templatecontext['privacy_header1'] = format_string($theme->settings->privacy_header1);
    $templatecontext['privacy_subhdimg'] = $theme->settings->privacy_subhdimg;
    $templatecontext['privacy_caption'] = $theme->settings->privacy_caption;
    $expset = explode("|", format_string($theme->settings->privacy_caption));
    $say = 0;
    foreach ($expset as $x => $val) {
        if (isset($val)) {
            $say++;
            $templatecontext['privacy_caption_'.$say] = $val;
        }
    }
    return $templatecontext;
}
