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
 * @copyright 2023 ThemesAlmond
 * @author    ThemesAlmond - Developer Team
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Front page, home page three.
// Transferring information from settings to mustache template.

/**
 * Block 1.
 */
function theme_wellko_frontpage_h4_block_1() {
    $theme = theme_config::load('wellko');
    $templatecontext['h4_01_block_header'] = format_string($theme->settings->h4_01_block_header);
    $templatecontext['h4_01_block_maintitle'] = format_string($theme->settings->h4_01_block_maintitle);
    $templatecontext['h4_01_block_imgheight'] = $theme->settings->h4_01_block_imgheight."px";
    $templatecontext['h4_01_block_count'] = $theme->settings->h4_01_block_count;
    $count = $theme->settings->h4_01_block_count;
    for ($k = 2, $t = 10, $i = 1, $j = 0; $i <= $count; $t++, $k++, $i++, $j++) {
        $h401blockheadline = "h4_01_block_headline{$i}";
        $h401blockcaption = "h4_01_block_caption{$i}";
        $h401blocklink = "h4_01_block_link{$i}";
        $imageh401 = "imageh401{$i}";
        $templatecontext['h4_01_block'][$j]['headline'] = format_string($theme->settings->$h401blockheadline);
        $templatecontext['h4_01_block'][$j]['caption'] = format_string($theme->settings->$h401blockcaption);
        $templatecontext['h4_01_block'][$j]['urllink'] = $theme->settings->$h401blocklink;
        $templatecontext['h4_01_block'][$j]['image'] = $theme->setting_file_url($imageh401, $imageh401);
        $templatecontext['h4_01_block'][$j]['counter'] = $i;
        $templatecontext['h4_01_block'][$j]['counter4'] = $k;
        $templatecontext['h4_01_block'][$j]['counter8'] = $t;
    }
    return $templatecontext;
}
/**
 * Block 2.
 */
function theme_wellko_frontpage_h4_block_2() {
    GLOBAL $DB, $USER, $OUTPUT;
    $theme = theme_config::load('wellko');
    $templatecontext['h4_02_block_headline'] = format_string($theme->settings->h4_02_block_headline);
    $templatecontext['h4_02_block_header'] = format_string($theme->settings->h4_02_block_header);
    $templatecontext['h4_02_block_maintitle'] = format_string($theme->settings->h4_02_block_maintitle);
    $templatecontext['h4_02_block_welcome'] = format_string($theme->settings->h4_02_block_welcome);
    $templatecontext['logintoken'] = \core\session\manager::get_login_token();
    
    $person = $DB->get_record('user', array('id' => $USER->id));
    if (!empty($person)) {
        $templatecontext['h4_02_block_username'] = fullname($person);
        $templatecontext['h4_02_block_userimg'] =
            $OUTPUT->user_picture($person, array('class' => 'rounded', 'size' => '450'));
    }
    return $templatecontext;
}
