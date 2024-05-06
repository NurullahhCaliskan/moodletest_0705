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
 * wellko home one block 07 settings.
 *
 * @package   theme_wellko
 * @copyright 2022 ThemesAlmond
 * @author    ThemesAlmond - Developer Team
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
// Block 7 info.
$name = 'theme_wellko/h1_07_block_info';
$heading = get_string('h1_07_block_info', 'theme_wellko');
$information = get_string('h1_07_block_info_desc', 'theme_wellko');
$setting = new admin_setting_heading($name, $heading, $information);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Enable or disable block 7 settings.
$name = 'theme_wellko/h1_07_block_enabled';
$title = get_string('h1_07_block_enabled', 'theme_wellko');
$description = get_string('h1_07_block_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Block 7 headline.
$name = 'theme_wellko/h1_07_block_headline';
$title = get_string('h1_07_block_headline', 'theme_wellko');
$description = get_string('h1_07_block_headline_desc', 'theme_wellko');
$default = get_string('h1_07_block_headline_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Block 7 header text.
$name = 'theme_wellko/h1_07_block_header';
$title = get_string('h1_07_block_header', 'theme_wellko');
$description = get_string('h1_07_block_header_desc', 'theme_wellko');
$default = get_string('h1_07_block_header_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Block 7 main title.
$name = 'theme_wellko/h1_07_block_maintitle';
$title = get_string('h1_07_block_maintitle', 'theme_wellko');
$description = get_string('h1_07_block_maintitle_desc', 'theme_wellko');
$default = get_string('h1_07_block_maintitle_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Count block 7 settings.
$name = 'theme_wellko/h1_07_block_count';
$title = get_string('h1_07_block_count', 'theme_wellko');
$description = get_string('h1_07_block_count_desc', 'theme_wellko');
$description = $description.get_string('underline', 'theme_wellko');
$default = 6;
$options = array();
for ($i = 2; $i < 7; $i++) {
     $options[$i] = $i;
}
$setting = new admin_setting_configselect($name, $title, $description, $default, $options);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
$count = get_config('theme_wellko', 'h1_07_block_count');
// Block 7 general settings END.
// ------------------------------------------------------------------------------------.
for ($i = 1; $i < $count + 1; $i++) {
    // Block 7 name.
    $name = 'theme_wellko/h1_07_block_name'.$i;
    $title = get_string('h1_07_block_name', 'theme_wellko', array('block' => $i));
    $description = get_string('h1_07_block_name_desc', 'theme_wellko');
    $default = "Herminia F. Hudson";
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    // Block 7 job.
    $name = 'theme_wellko/h1_07_block_job'.$i;
    $title = get_string('h1_07_block_job', 'theme_wellko', array('block' => $i));
    $description = get_string('h1_07_block_job_desc', 'theme_wellko');
    $default = "Web Designer";
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    // Block 7 comment.
    $name = 'theme_wellko/h1_07_block_comment'.$i;
    $title = get_string('h1_07_block_comment', 'theme_wellko', array('block' => $i));
    $description = get_string('h1_07_block_comment_desc', 'theme_wellko');
    $default = "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque";
    $setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_RAW, '1', '3');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    // Block 7 ratings star.
    $name = 'theme_wellko/h1_07_block_star'.$i;
    $title = get_string('h1_07_block_star', 'theme_wellko', array('block' => $i));
    $description = get_string('h1_07_block_star_desc', 'theme_wellko');
    $description = $description.get_string('underline', 'theme_wellko');
    $default = 5;
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
}
