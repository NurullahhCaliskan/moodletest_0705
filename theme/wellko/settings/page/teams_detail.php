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
 * wellko page settings.
 *
 * @package   theme_wellko
 * @copyright 2022 ThemesAlmond
 * @author    ThemesAlmond - Developer Team
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
// Page about info.
$name = 'theme_wellko/page_16_info';
$heading = get_string('page_16_info', 'theme_wellko');
$information = get_string('page_16_info_desc', 'theme_wellko');
$setting = new admin_setting_heading($name, $heading, $information);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Page title.
$name = 'theme_wellko/page_16_page_title';
$title = get_string('page_16_page_title', 'theme_wellko');
$description = get_string('page_16_page_title_desc', 'theme_wellko');
$default = get_string('page_16_page_title_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Sub header image.
$name = 'theme_wellko/page_16_page_subhdimg';
$title = get_string('page_16_page_subhdimg', 'theme_wellko');
$description = get_string('page_16_page_subhdimg_desc', 'theme_wellko');
$default = 'subheader.jpg';
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Section 1.
$page->add(new admin_setting_heading('page_16_section_1', get_string('page_16_section_1', 'theme_wellko'),
get_string('page_16_section_1_desc', 'theme_wellko'),
format_text( '', FORMAT_MARKDOWN)));
$page->add($setting);
// Teams page s1 enable or disable settings.
$name = 'theme_wellko/page_16_s1_enabled';
$title = get_string('page_16_s1_enabled', 'theme_wellko');
$description = get_string('page_16_s1_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Teams detail page s1 sidebar header text.
$name = 'theme_wellko/page_16_s1_header_text';
$title = get_string('page_16_s1_header_text', 'theme_wellko');
$description = get_string('page_16_s1_header_text_desc', 'theme_wellko');
$default = get_string('page_16_s1_header_text_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Teams detail page s1 video link.
$name = 'theme_wellko/page_16_s1_video_link';
$title = get_string('page_16_s1_video_link', 'theme_wellko');
$description = get_string('page_16_s1_video_link_desc', 'theme_wellko');
$default = get_string('page_16_s1_video_link_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Teams detail page s1 tab name.
$name = 'theme_wellko/page_16_s1_tab';
$title = get_string('page_16_s1_tab', 'theme_wellko');
$description = get_string('page_16_s1_tab_desc', 'theme_wellko');
$default = get_string('page_16_s1_tab_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Teams detail page s1 coach tab skills.
$name = 'theme_wellko/page_16_s1_headline';
$title = get_string('page_16_s1_headline', 'theme_wellko');
$description = get_string('page_16_s1_headline_desc', 'theme_wellko');
$default = get_string('page_16_s1_headline_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Teams detail page s1 coach tab skills settings.
$name = 'theme_wellko/page_16_s1_skill';
$title = get_string('page_16_s1_skill', 'theme_wellko');
$description = get_string('page_16_s1_skill_desc', 'theme_wellko');
$default = get_string('page_16_s1_skill_default', 'theme_wellko');
$setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_RAW, '1', '1');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Section 2.
$page->add(new admin_setting_heading('page_16_section_2', get_string('page_16_section_2', 'theme_wellko'),
format_text( '', FORMAT_MARKDOWN)));
$page->add($setting);
// Team details page s2 enable or disable settings.
$name = 'theme_wellko/page_16_s2_enabled';
$title = get_string('page_16_s2_enabled', 'theme_wellko');
$description = get_string('page_16_s2_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Teams details page s3 headline.
$name = 'theme_wellko/page_16_s2_headline';
$title = get_string('page_16_s2_headline', 'theme_wellko');
$description = get_string('page_16_s2_headline_desc', 'theme_wellko');
$default = get_string('page_16_s2_headline_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Teams details page s3 header.
$name = 'theme_wellko/page_16_s2_header';
$title = get_string('page_16_s2_header', 'theme_wellko');
$description = get_string('page_16_s2_header_desc', 'theme_wellko');
$default = get_string('page_16_s2_header_default', 'theme_wellko');
$setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_RAW, '1', '1');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Teams details page s3 button.
$name = 'theme_wellko/page_16_s2_button';
$title = get_string('page_16_s2_button', 'theme_wellko');
$description = get_string('page_16_s2_button_desc', 'theme_wellko');
$default = get_string('page_16_s2_button_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Teams details page s3 button link.
$name = 'theme_wellko/page_16_s2_button_lnk';
$title = get_string('page_16_s2_button_lnk', 'theme_wellko');
$description = get_string('page_16_s2_button_lnk_desc', 'theme_wellko');
$default = get_string('page_16_s2_button_lnk_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
