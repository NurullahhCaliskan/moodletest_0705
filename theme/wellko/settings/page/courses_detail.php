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
// Page courses info.
$name = 'theme_wellko/page_15_info';
$heading = get_string('page_15_info', 'theme_wellko');
$information = get_string('page_15_info_desc', 'theme_wellko');
$setting = new admin_setting_heading($name, $heading, $information);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Page title.
$name = 'theme_wellko/page_15_page_title';
$title = get_string('page_15_page_title', 'theme_wellko');
$description = get_string('page_15_page_title_desc', 'theme_wellko');
$default = get_string('page_15_page_title_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Sub header image.
$name = 'theme_wellko/page_15_page_subhdimg';
$title = get_string('page_15_page_subhdimg', 'theme_wellko');
$description = get_string('page_15_page_subhdimg_desc', 'theme_wellko');
$default = 'subheader.jpg';
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Page enroll role.
$name = 'theme_wellko/page_15_page_enroll_role';
$title = get_string('page_15_page_enroll_role', 'theme_wellko');
$description = get_string('page_15_page_enroll_role_desc', 'theme_wellko');
$default = '3';
$options = array();
$role = $DB->get_records('role');
foreach ($role as $roles) {
     $options[$roles->id] = $roles->shortname;
}
$setting = new admin_setting_configselect($name, $title, $description, $default, $options);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Course detail page sidebar info header.
$name = 'theme_wellko/page_15_page_sidebar_info_header';
$title = get_string('page_15_page_sidebar_info_header', 'theme_wellko');
$description = get_string('page_15_page_sidebar_info_header_desc', 'theme_wellko');
$default = get_string('page_15_page_sidebar_info_header_default', 'theme_wellko');
$setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_RAW, '1', '1');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Course detail page enroll title.
$name = 'theme_wellko/page_15_page_enroll_explanation';
$title = get_string('page_15_page_enroll_explanation', 'theme_wellko');
$description = get_string('page_15_page_enroll_explanation_desc', 'theme_wellko');
$default = get_string('page_15_page_enroll_explanation_default', 'theme_wellko');
$setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_RAW, '1', '1');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Course detail page enroll button.
$name = 'theme_wellko/page_15_page_enroll_button';
$title = get_string('page_15_page_enroll_button', 'theme_wellko');
$description = get_string('page_15_page_enroll_button_desc', 'theme_wellko');
$default = get_string('page_15_page_enroll_button_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Course detail page sidebar header.
$name = 'theme_wellko/page_15_page_sidebar_header';
$title = get_string('page_15_page_sidebar_header', 'theme_wellko');
$description = get_string('page_15_page_sidebar_header_desc', 'theme_wellko');
$default = get_string('page_15_page_sidebar_header_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Section 1.
$page->add(new admin_setting_heading('page_15_section_1', get_string('page_15_section_1', 'theme_wellko'),
format_text( '', FORMAT_MARKDOWN)));
$page->add($setting);
// Course detail page s1 enable or disable settings.
$name = 'theme_wellko/page_15_s1_enabled';
$title = get_string('page_15_s1_enabled', 'theme_wellko');
$description = get_string('page_15_s1_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Course detail page s1 tab name.
$name = 'theme_wellko/page_15_s1_tab';
$title = get_string('page_15_s1_tab', 'theme_wellko');
$description = get_string('page_15_s1_tab_desc', 'theme_wellko');
$default = get_string('page_15_s1_tab_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Course detail page s1 curriculum.
$name = 'theme_wellko/page_15_s1_curriculum';
$title = get_string('page_15_s1_curriculum', 'theme_wellko');
$description = get_string('page_15_s1_curriculum_desc', 'theme_wellko');
$default = get_string('page_15_s1_curriculum_default', 'theme_wellko');
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Course detail page s1 reviews comment header.
$name = 'theme_wellko/page_15_s1_cmd_header';
$title = get_string('page_15_s1_cmd_header', 'theme_wellko');
$description = get_string('page_15_s1_cmd_header_desc', 'theme_wellko');
$default = get_string('page_15_s1_cmd_header_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Course detail page s1 reviews form header.
$name = 'theme_wellko/page_15_s1_form_header';
$title = get_string('page_15_s1_form_header', 'theme_wellko');
$description = get_string('page_15_s1_form_header_desc', 'theme_wellko');
$default = get_string('page_15_s1_form_header_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Course detail page s1 reviews form three text.
$name = 'theme_wellko/page_15_s1_form_text';
$title = get_string('page_15_s1_form_text', 'theme_wellko');
$description = get_string('page_15_s1_form_text_desc', 'theme_wellko');
$default = get_string('page_15_s1_form_text_default', 'theme_wellko');
$setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_RAW, '1', '1');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Course detail page s1 reviews form button name.
$name = 'theme_wellko/page_15_s1_form_button';
$title = get_string('page_15_s1_form_button', 'theme_wellko');
$description = get_string('page_15_s1_form_button_desc', 'theme_wellko');
$default = get_string('page_15_s1_form_button_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Course detail page s1 reviews form button link.
$name = 'theme_wellko/page_15_s1_form_button_lnk';
$title = get_string('page_15_s1_form_button_lnk', 'theme_wellko');
$description = get_string('page_15_s1_form_button_lnk_desc', 'theme_wellko');
$default = get_string('page_15_s1_form_button_lnk_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Section 2.
$page->add(new admin_setting_heading('page_15_section_2', get_string('page_15_section_2', 'theme_wellko'),
format_text( '', FORMAT_MARKDOWN)));
$page->add($setting);
// Course detail page s2 enable or disable settings.
$name = 'theme_wellko/page_15_s2_enabled';
$title = get_string('page_15_s2_enabled', 'theme_wellko');
$description = get_string('page_15_s2_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Course detail page s2 caption.
$name = 'theme_wellko/page_15_s2_caption';
$title = get_string('page_15_s2_caption', 'theme_wellko');
$description = get_string('page_15_s2_caption_desc', 'theme_wellko');
$default = get_string('page_15_s2_caption_default', 'theme_wellko');
$setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_RAW, '1', '1');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Section 3.
$page->add(new admin_setting_heading('page_15_section_3', get_string('page_15_section_3', 'theme_wellko'),
format_text( '', FORMAT_MARKDOWN)));
$page->add($setting);
// Course detail page s3 enable or disable settings.
$name = 'theme_wellko/page_15_s3_enabled';
$title = get_string('page_15_s3_enabled', 'theme_wellko');
$description = get_string('page_15_s3_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Course detail page s3 headline.
$name = 'theme_wellko/page_15_s3_headline';
$title = get_string('page_15_s3_headline', 'theme_wellko');
$description = get_string('page_15_s3_headline_desc', 'theme_wellko');
$default = get_string('page_15_s3_headline_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Course detail page s3 header text.
$name = 'theme_wellko/page_15_s3_header';
$title = get_string('page_15_s3_header', 'theme_wellko');
$description = get_string('page_15_s3_header_desc', 'theme_wellko');
$default = get_string('page_15_s3_header_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Section 4.
$page->add(new admin_setting_heading('page_15_section_4', get_string('page_15_section_4', 'theme_wellko'),
format_text( '', FORMAT_MARKDOWN)));
$page->add($setting);
// Enable or disable courses page settings.
$name = 'theme_wellko/page_15_s4_enabled';
$title = get_string('page_15_s4_enabled', 'theme_wellko');
$description = get_string('page_15_s4_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Course detail page headline.
$name = 'theme_wellko/page_15_s4_headline';
$title = get_string('page_15_s4_headline', 'theme_wellko');
$description = get_string('page_15_s4_headline_desc', 'theme_wellko');
$default = get_string('page_15_s4_headline_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Course detail page header.
$name = 'theme_wellko/page_15_s4_header';
$title = get_string('page_15_s4_header', 'theme_wellko');
$description = get_string('page_15_s4_header_desc', 'theme_wellko');
$default = get_string('page_15_s4_header_default', 'theme_wellko');
$setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_RAW, '1', '1');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Course detail page button.
$name = 'theme_wellko/page_15_s4_button';
$title = get_string('page_15_s4_button', 'theme_wellko');
$description = get_string('page_15_s4_button_desc', 'theme_wellko');
$default = get_string('page_15_s4_button_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Course detail page button link.
$name = 'theme_wellko/page_15_s4_button_lnk';
$title = get_string('page_15_s4_button_lnk', 'theme_wellko');
$description = get_string('page_15_s4_button_lnk_desc', 'theme_wellko');
$default = get_string('page_15_s4_button_lnk_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
