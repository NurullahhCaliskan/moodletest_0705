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
 * A one column layout for the wellko theme.
 *
 * @package   theme_wellko
 * @copyright 2022 ThemesAlmond
 * @author    ThemesAlmond - Developer Team
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$themeurl = theme_wellko_theme_url();
user_preference_allow_ajax_update('drawer-open-nav', PARAM_ALPHA);
require_once($CFG->libdir . '/behat/lib.php');
// Dark-Light check box.
$PAGE->requires->js('/theme/wellko/js/themedarklight.js');

$username = "";
if (isloggedin() && !isguestuser()) {
    $userlogin = true;
    $username = wellko_get_user_name();
} else {
    $userlogin = false;
}
// Add block button in editing mode.
$addblockbutton = $OUTPUT->addblockbutton();

$extraclasses = [''];
$bodyattributes = $OUTPUT->body_attributes($extraclasses);
$blockshtml = $OUTPUT->blocks('side-pre');
$hasblocks = (strpos($blockshtml, 'data-block=') !== false || !empty($addblockbutton));

$secondarynavigation = false;
$overflow = '';
if ($PAGE->has_secondary_navigation()) {
    $tablistnav = $PAGE->has_tablist_secondary_navigation();
    $moremenu = new \core\navigation\output\more_menu($PAGE->secondarynav, 'nav-tabs', true, $tablistnav);
    $secondarynavigation = $moremenu->export_for_template($OUTPUT);
    $overflowdata = $PAGE->secondarynav->get_overflow_menu_data();
    if (!is_null($overflowdata)) {
        $overflow = $overflowdata->export_for_template($OUTPUT);
    }
}

$primary = new core\navigation\output\primary($PAGE);
$renderer = $PAGE->get_renderer('core');
$primarymenu = $primary->export_for_template($renderer);
$buildregionmainsettings = !$PAGE->include_region_main_settings_in_header_actions()  && !$PAGE->has_secondary_navigation();
// If the settings menu will be included in the header then don't add it here.
$regionmainsettingsmenu = $buildregionmainsettings ? $OUTPUT->region_main_settings_menu() : false;

$header = $PAGE->activityheader;
$headercontent = $header->export_for_template($renderer);

$templatecontext = [
    'sitename' => format_string($SITE->shortname, true, ['context' => context_course::instance(SITEID), "escape" => false]),
    'output' => $OUTPUT,
    'sidepreblocks' => $blockshtml,
    'hasblocks' => $hasblocks,
    'bodyattributes' => $bodyattributes,
    'primarymoremenu' => $primarymenu['moremenu'],
    'secondarymoremenu' => $secondarynavigation ?: false,
    'mobileprimarynav' => $primarymenu['mobileprimarynav'],
    'usermenu' => $primarymenu['user'],
    'langmenu' => $primarymenu['lang'],
    'regionmainsettingsmenu' => $regionmainsettingsmenu,
    'hasregionmainsettingsmenu' => !empty($regionmainsettingsmenu),
    'headercontent' => $headercontent,
    'overflow' => $overflow,
    'addblockbutton' => $addblockbutton,
];
// Frontpage style css.
$PAGE->requires->css('/theme/wellko/style/font-awesome.min.css');
$PAGE->requires->css('/theme/wellko/style/style.css');
$PAGE->requires->css('/theme/wellko/style/responsive.css');
// Nav menu user name and dashboard.
$templatecontext['frontpage'] = true;
if (isloggedin()) {
    $templatecontext['userfullname'] = fullname($USER);
}
// User login control.
$templatecontext['userlogin'] = $userlogin;
$templatecontext['loginusername'] = $username;
// Web general img folder.
$theme = theme_config::load('wellko');
$templatecontext['frontpageimglink'] = $theme->settings->frontpageimglink;
$templatecontext['frontpagechoice'] = $theme->settings->frontpagechoice;
// Aside block.
$templatecontext = array_merge($templatecontext, theme_wellko_frontpage_other_block_aside());
// Footer.
$templatecontext = array_merge($templatecontext, theme_wellko_frontpage_other_block_footer());
$templatecontext['sesskey'] = sesskey();
$frontpagechoice = $theme->settings->frontpagechoice;
// Preloader img.
$templatecontext['preloaderimg'] = $OUTPUT->image_url('fp/preloader/'.$theme->settings->preloader, 'theme');
$templatecontext['preloaderbackcolor'] = $theme->settings->backcolor;
$homeid = optional_param('home', '', PARAM_RAW);
$pageid = optional_param('page', '', PARAM_RAW);
$courseid = optional_param('course-details', '', PARAM_RAW);
$teamid = optional_param('team-details', '', PARAM_RAW);
$postid = optional_param('blog-details', '', PARAM_RAW);
if (!empty($pageid) && $pageid != 14 && $pageid != 15 && $pageid != 16) {
    // Contact page.
    if ($pageid == 10) {
        // Maps.
        $PAGE->requires->css('/theme/wellko/style/leaflet.css');
        $PAGE->requires->js('/theme/wellko/js/leaflet.js');
        $PAGE->requires->js('/theme/wellko/js/map.js');
    }
    $templatecontext = array_merge($templatecontext, theme_wellko_frontpage_page_section($pageid, 0));
    echo $OUTPUT->render_from_template('theme_wellko/frontpage/page', $templatecontext);
} else if (!empty(is_numeric($courseid))) {
    $templatecontext = array_merge($templatecontext, theme_wellko_frontpage_page_section(15, $courseid));
    echo $OUTPUT->render_from_template('theme_wellko/frontpage/page', $templatecontext);
} else if (!empty(is_numeric($teamid))) {
    $templatecontext = array_merge($templatecontext, theme_wellko_frontpage_page_section(16, $teamid));
    echo $OUTPUT->render_from_template('theme_wellko/frontpage/page', $templatecontext);
} else if (!empty(is_numeric($postid))) {
    $templatecontext = array_merge($templatecontext, theme_wellko_frontpage_page_section(14, $postid));
    echo $OUTPUT->render_from_template('theme_wellko/frontpage/page', $templatecontext);
} else {
    if ($homeid == 1 || $homeid == 2 || $homeid == 3 || $homeid == 4) {
        $frontpagechoice = $homeid;
    }
    if ($frontpagechoice == 1) {
        $templatecontext = array_merge($templatecontext, theme_wellko_frontpage_h1_section());
        echo $OUTPUT->render_from_template('theme_wellko/frontpage/home_1', $templatecontext);
    } else if ($frontpagechoice == 2) {
        $templatecontext = array_merge($templatecontext, theme_wellko_frontpage_h2_section());
        echo $OUTPUT->render_from_template('theme_wellko/frontpage/home_2', $templatecontext);
    } else if ($frontpagechoice == 3) {
        $templatecontext = array_merge($templatecontext, theme_wellko_frontpage_h3_section());
        echo $OUTPUT->render_from_template('theme_wellko/frontpage/home_3', $templatecontext);
    } else if ($frontpagechoice == 4) {
        $templatecontext = array_merge($templatecontext, theme_wellko_frontpage_h4_section());
        echo $OUTPUT->render_from_template('theme_wellko/frontpage/home_4', $templatecontext);
    }
}
