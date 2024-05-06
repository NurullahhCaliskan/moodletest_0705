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
 * wellko home three block 9 settings.
 *
 * @package   theme_wellko
 * @copyright 2022 ThemesAlmond
 * @author    ThemesAlmond - Developer Team
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
// Home page three block 9 info.
$name = 'theme_wellko/h3_09_block_info';
$heading = get_string('h3_09_block_info', 'theme_wellko');
$information = get_string('h3_09_block_info_desc', 'theme_wellko');
$setting = new admin_setting_heading($name, $heading, $information);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Enable or disable settings.
$name = 'theme_wellko/h3_09_block_enabled';
$title = get_string('h3_09_block_enabled', 'theme_wellko');
$description = get_string('h3_09_block_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Home page three block 9 event header.
$name = 'theme_wellko/h3_09_block_headline';
$title = get_string('h3_09_block_headline', 'theme_wellko');
$description = get_string('h3_09_block_headline_desc', 'theme_wellko');
$default = get_string('h3_09_block_headline_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Home page three block 9 header.
$name = 'theme_wellko/h3_09_block_header';
$title = get_string('h3_09_block_header', 'theme_wellko');
$description = get_string('h3_09_block_header_desc', 'theme_wellko');
$default = get_string('h3_09_block_header_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT, '40', '1');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Home page three block 9 button.
$name = 'theme_wellko/h3_09_block_btn';
$title = get_string('h3_09_block_btn', 'theme_wellko');
$description = get_string('h3_09_block_btn_desc', 'theme_wellko');
$default = get_string('h3_09_block_btn_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Home page three block 9 button link.
$name = 'theme_wellko/h3_09_block_btn_link';
$title = get_string('h3_09_block_btn_link', 'theme_wellko');
$description = get_string('h3_09_block_btn_link_desc', 'theme_wellko');
$default = get_string('h3_09_block_btn_link_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Home page three block 9 caption one.
$name = 'theme_wellko/h3_09_block_caption_one';
$title = get_string('h3_09_block_caption_one', 'theme_wellko');
$description = get_string('h3_09_block_caption_one_desc', 'theme_wellko');
$default = get_string('h3_09_block_caption_one_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT, '40', '1');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Home page three block 9 caption one link.
$name = 'theme_wellko/h3_09_block_caption_one_lnk';
$title = get_string('h3_09_block_caption_one_lnk', 'theme_wellko');
$description = get_string('h3_09_block_caption_one_lnk_desc', 'theme_wellko');
$default = get_string('h3_09_block_caption_one_lnk_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT, '40', '1');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Home page three block 9 job one.
$name = 'theme_wellko/h3_09_block_job_one';
$title = get_string('h3_09_block_job_one', 'theme_wellko');
$description = get_string('h3_09_block_job_one_desc', 'theme_wellko');
$default = get_string('h3_09_block_job_one_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT, '40', '1');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Home page three block 9 caption two.
$name = 'theme_wellko/h3_09_block_caption_two';
$title = get_string('h3_09_block_caption_two', 'theme_wellko');
$description = get_string('h3_09_block_caption_two_desc', 'theme_wellko');
$default = get_string('h3_09_block_caption_two_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT, '40', '1');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Home page three block 9 caption two link.
$name = 'theme_wellko/h3_09_block_caption_two_lnk';
$title = get_string('h3_09_block_caption_two_lnk', 'theme_wellko');
$description = get_string('h3_09_block_caption_two_lnk_desc', 'theme_wellko');
$default = get_string('h3_09_block_caption_two_lnk_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT, '40', '1');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Home page three block 9 job two.
$name = 'theme_wellko/h3_09_block_job_two';
$title = get_string('h3_09_block_job_two', 'theme_wellko');
$description = get_string('h3_09_block_job_two_desc', 'theme_wellko');
$default = get_string('h3_09_block_job_two_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT, '40', '1');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
