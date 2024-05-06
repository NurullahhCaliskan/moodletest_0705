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
 * wellko home four block 01 settings.
 *
 * @package   theme_wellko
 * @copyright 2022 ThemesAlmond
 * @author    ThemesAlmond - Developer Team
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
// Home page four block 1 info.
$name = 'theme_wellko/h4_01_block_info';
$heading = get_string('h4_01_block_info', 'theme_wellko');
$information = get_string('h4_01_block_info_desc', 'theme_wellko');
$setting = new admin_setting_heading($name, $heading, $information);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Enable or disable settings.
$name = 'theme_wellko/h4_01_block_enabled';
$title = get_string('h4_01_block_enabled', 'theme_wellko');
$description = get_string('h4_01_block_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Block 1 header text.
$name = 'theme_wellko/h4_01_block_header';
$title = get_string('h4_01_block_header', 'theme_wellko');
$description = get_string('h4_01_block_header_desc', 'theme_wellko');
$default = "Page Four Header";
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Block 1 main title.
$name = 'theme_wellko/h4_01_block_maintitle';
$title = get_string('h4_01_block_maintitle', 'theme_wellko');
$description = get_string('h4_01_block_maintitle_desc', 'theme_wellko');
$default = "Page Four Maintitle";
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Block 1 img height.
$name = 'theme_wellko/h4_01_block_imgheight';
$title = get_string('h4_01_block_imgheight', 'theme_wellko');
$description = get_string('h4_01_block_imgheight_desc', 'theme_wellko');
$default = "275";
$options = array(
    '100' => '100',
    '125' => '125',
    '150' => '150',
    '175' => '175',
    '200' => '200',
    '225' => '225',
    '250' => '250',
    '275' => '275',
    '300' => '300',
    '325' => '325',
    '350' => '350',
);
$setting = new admin_setting_configselect($name, $title, $description, $default, $options);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Count Block 1 settings.
$name = 'theme_wellko/h4_01_block_count';
$title = get_string('h4_01_block_count', 'theme_wellko');
$description = get_string('h4_01_block_count_desc', 'theme_wellko');
$description = $description.get_string('underline', 'theme_wellko');
$default = 3;
$options = array();
for ($i = 3; $i <= 6; $i++) {
     $options[$i] = $i;
}
$setting = new admin_setting_configselect($name, $title, $description, $default, $options);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
$count = get_config('theme_wellko', 'h4_01_block_count');
// ------------------------------------------------------------------------------------.
for ($i = 1; $i < $count + 1; $i++) {
    // Block 1 head.
    $name = 'theme_wellko/h4_01_block_headline'.$i;
    $title = get_string('h4_01_block_headline', 'theme_wellko', array('block' => $i));
    $description = get_string('h4_01_block_headline_desc', 'theme_wellko');
    $default = "News headline";
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    // Block 1 caption.
    $name = 'theme_wellko/h4_01_block_caption'.$i;;
    $title = get_string('h4_01_block_caption', 'theme_wellko', array('block' => $i));
    $description = get_string('h4_01_block_caption_desc', 'theme_wellko');
    $default = "Quis autem vel eumiure reprehenderit quis volupta velit esse quam nihil molestiae conse quatur vel illum qui dolorem";
    $setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_RAW, '1', '2');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    // Block 1 button link.
    $name = 'theme_wellko/h4_01_block_link'.$i;
    $title = get_string('h4_01_block_link', 'theme_wellko', array('block' => $i));
    $description = get_string('h4_01_block_link_desc', 'theme_wellko');
    $default = "";
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    // Background image setting.
    $name = 'theme_wellko/imageh401'.$i;
    $title = get_string('imageh401', 'theme_wellko', array('block' => $i));
    $description = get_string('imageh401_desc', 'theme_wellko');
    $description = $description.get_string('underline', 'theme_wellko');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'imageh401'.$i);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
}
