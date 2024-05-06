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
 * wellko home four block 2 settings.
 *
 * @package   theme_wellko
 * @copyright 2023 ThemesAlmond
 * @author    ThemesAlmond - Developer Team
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
// Block 2 info.
$name = 'theme_wellko/h4_02_block_info';
$heading = get_string('h4_02_block_info', 'theme_wellko');
$information = get_string('h4_02_block_info_desc', 'theme_wellko');
$setting = new admin_setting_heading($name, $heading, $information);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Enable or disable Block 2 settings.
$name = 'theme_wellko/h4_02_block_enabled';
$title = get_string('h4_02_block_enabled', 'theme_wellko');
$description = get_string('h4_02_block_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Block 2 headline.
$name = 'theme_wellko/h4_02_block_headline';
$title = get_string('h4_02_block_headline', 'theme_wellko');
$description = get_string('h4_02_block_headline_desc', 'theme_wellko');
$default = "Headline home four";
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Block 2 header.
$name = 'theme_wellko/h4_02_block_header';
$title = get_string('h4_02_block_header', 'theme_wellko');
$description = get_string('h4_02_block_header_desc', 'theme_wellko');
$default = "Header home four";
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Block 2 main title.
$name = 'theme_wellko/h4_02_block_maintitle';
$title = get_string('h4_02_block_maintitle', 'theme_wellko');
$description = get_string('h4_02_block_maintitle_desc', 'theme_wellko');
$default = "Maintitle home four";
$setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_RAW, '1', '3');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Block 2 welcome.
$name = 'theme_wellko/h4_02_block_welcome';
$title = get_string('h4_02_block_welcome', 'theme_wellko');
$description = get_string('h4_02_block_welcome_desc', 'theme_wellko');
$default = "Welcome message";
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
