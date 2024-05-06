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
 * wellko top title block settings.
 *
 * @package   theme_wellko
 * @copyright 2022 ThemesAlmond
 * @author    ThemesAlmond - Developer Team
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
// Block top title info.
$name = 'theme_wellko/h3_01_block_info';
$heading = get_string('h3_01_block_info', 'theme_wellko');
$information = get_string('h3_01_block_info_desc', 'theme_wellko');
$setting = new admin_setting_heading($name, $heading, $information);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Enable or disable settings.
$name = 'theme_wellko/h3_01_block_enabled';
$title = get_string('h3_01_block_enabled', 'theme_wellko');
$description = get_string('h3_01_block_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Block title.
$name = 'theme_wellko/h3_01_block_title';
$title = get_string('h3_01_block_title', 'theme_wellko');
$description = get_string('h3_01_block_title_desc', 'theme_wellko');
$default = get_string('h3_01_block_title_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT, '50', '1');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Block count down.
$name = 'theme_wellko/h3_01_block_countdown';
$title = get_string('h3_01_block_countdown', 'theme_wellko');
$description = get_string('h3_01_block_countdown_desc', 'theme_wellko');
$default = get_string('h3_01_block_countdown_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Block header 2.
$name = 'theme_wellko/h3_01_block_phone';
$title = get_string('h3_01_block_phone', 'theme_wellko');
$description = get_string('h3_01_block_phone_desc', 'theme_wellko');
$default = get_string('h3_01_block_phone_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
$name = 'theme_wellko/h3_01_block_phone_link';
$title = get_string('h3_01_block_phone', 'theme_wellko');
$description = get_string('h3_01_block_phone_link_desc', 'theme_wellko');
$default = get_string('h3_01_block_phone_link_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
$name = 'theme_wellko/h3_01_block_email';
$title = get_string('h3_01_block_email', 'theme_wellko');
$description = get_string('h3_01_block_email_desc', 'theme_wellko');
$default = get_string('h3_01_block_email_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_EMAIL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
