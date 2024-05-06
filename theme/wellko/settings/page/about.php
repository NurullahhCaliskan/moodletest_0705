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
$name = 'theme_wellko/page_02_info';
$heading = get_string('page_02_info', 'theme_wellko');
$information = get_string('page_02_info_desc', 'theme_wellko');
$setting = new admin_setting_heading($name, $heading, $information);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Page title.
$name = 'theme_wellko/page_02_page_title';
$title = get_string('page_02_page_title', 'theme_wellko');
$description = get_string('page_02_page_title_desc', 'theme_wellko');
$default = get_string('page_02_page_title_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Sub header image.
$name = 'theme_wellko/page_02_page_subhdimg';
$title = get_string('page_02_page_subhdimg', 'theme_wellko');
$description = get_string('page_02_page_subhdimg_desc', 'theme_wellko');
$default = 'subheader.jpg';
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Section 1.
$page->add(new admin_setting_heading('page_02_section_1', get_string('page_02_section_1', 'theme_wellko'),
format_text( '', FORMAT_MARKDOWN)));
$page->add($setting);
// About page s1 enable or disable settings.
$name = 'theme_wellko/page_02_s1_enabled';
$title = get_string('page_02_s1_enabled', 'theme_wellko');
$description = get_string('page_02_s1_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// About page s1 subtitle.
$name = 'theme_wellko/page_02_s1_subtitle';
$title = get_string('page_02_s1_subtitle', 'theme_wellko');
$description = get_string('page_02_s1_subtitle_desc', 'theme_wellko');
$default = get_string('page_02_s1_subtitle_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// About page s1 title.
$name = 'theme_wellko/page_02_s1_title';
$title = get_string('page_02_s1_title', 'theme_wellko');
$description = get_string('page_02_s1_title_desc', 'theme_wellko');
$default = get_string('page_02_s1_title_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// About page s1 caption.
$name = 'theme_wellko/page_02_s1_caption';
$title = get_string('page_02_s1_caption', 'theme_wellko');
$description = get_string('page_02_s1_caption_desc', 'theme_wellko');
$default = get_string('page_02_s1_caption_default', 'theme_wellko');
$setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_RAW, '1', '2');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// BAbout page s1 header 1 .
$name = 'theme_wellko/page_02_s1_header_1';
$title = get_string('page_02_s1_header_1', 'theme_wellko');
$description = get_string('page_02_s1_header_1_desc', 'theme_wellko');
$default = get_string('page_02_s1_header_1_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// About page s1 text 1.
$name = 'theme_wellko/page_02_s1_text_1';
$title = get_string('page_02_s1_text_1', 'theme_wellko');
$description = get_string('page_02_s1_text_1_desc', 'theme_wellko');
$default = get_string('page_02_s1_text_1_default', 'theme_wellko');
$setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_RAW, '1', '2');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// About page s1 header 2 .
$name = 'theme_wellko/page_02_s1_header_2';
$title = get_string('page_02_s1_header_2', 'theme_wellko');
$description = get_string('page_02_s1_header_2_desc', 'theme_wellko');
$default = get_string('page_02_s1_header_2_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// About page s1 text 2.
$name = 'theme_wellko/page_02_s1_text_2';
$title = get_string('page_02_s1_text_2', 'theme_wellko');
$description = get_string('page_02_s1_text_2_desc', 'theme_wellko');
$default = get_string('page_02_s1_text_2_default', 'theme_wellko');
$setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_RAW, '1', '2');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// About page s1 header 3.
$name = 'theme_wellko/page_02_s1_header_3';
$title = get_string('page_02_s1_header_3', 'theme_wellko');
$description = get_string('page_02_s1_header_3_desc', 'theme_wellko');
$default = get_string('page_02_s1_header_3_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// About page s1 text 3.
$name = 'theme_wellko/page_02_s1_text_3';
$title = get_string('page_02_s1_text_3', 'theme_wellko');
$description = get_string('page_02_s1_text_3_desc', 'theme_wellko');
$default = get_string('page_02_s1_text_3_default', 'theme_wellko');
$setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_RAW, '1', '2');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// About page s1 header 4.
$name = 'theme_wellko/page_02_s1_header_4';
$title = get_string('page_02_s1_header_4', 'theme_wellko');
$description = get_string('page_02_s1_header_4_desc', 'theme_wellko');
$default = get_string('page_02_s1_header_4_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// About page s1 text 4.
$name = 'theme_wellko/page_02_s1_text_4';
$title = get_string('page_02_s1_text_4', 'theme_wellko');
$description = get_string('page_02_s1_text_4_desc', 'theme_wellko');
$default = get_string('page_02_s1_text_4_default', 'theme_wellko');
$setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_RAW, '1', '2');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// About page s1 button.
$name = 'theme_wellko/page_02_s1_button';
$title = get_string('page_02_s1_button', 'theme_wellko');
$description = get_string('page_02_s1_button_desc', 'theme_wellko');
$default = get_string('page_02_s1_button_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// About page s1 button link.
$name = 'theme_wellko/page_02_s1_button_link';
$title = get_string('page_02_s1_button_link', 'theme_wellko');
$description = get_string('page_02_s1_button_link_desc', 'theme_wellko');
$default = get_string('page_02_s1_button_link_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Section 2.
$page->add(new admin_setting_heading('page_02_section_2', get_string('page_02_section_2', 'theme_wellko'),
format_text( '', FORMAT_MARKDOWN)));
$page->add($setting);
// Enable or disable About page s2 settings.
$name = 'theme_wellko/page_02_s2_enabled';
$title = get_string('page_02_s2_enabled', 'theme_wellko');
$description = get_string('page_02_s2_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Section 3.
$page->add(new admin_setting_heading('page_02_section_3', get_string('page_02_section_3', 'theme_wellko'),
format_text( '', FORMAT_MARKDOWN)));
$page->add($setting);
// Enable or disable about page s3.
$name = 'theme_wellko/page_02_s3_enabled';
$title = get_string('page_02_s3_enabled', 'theme_wellko');
$description = get_string('page_02_s3_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// About page headline.
$name = 'theme_wellko/page_02_s3_headline';
$title = get_string('page_02_s3_headline', 'theme_wellko');
$description = get_string('page_02_s3_headline_desc', 'theme_wellko');
$default = get_string('page_02_s3_headline_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// About page header.
$name = 'theme_wellko/page_02_s3_header';
$title = get_string('page_02_s3_header', 'theme_wellko');
$description = get_string('page_02_s3_header_desc', 'theme_wellko');
$default = get_string('page_02_s3_header_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// About page maintext.
$name = 'theme_wellko/page_02_s3_maintext';
$title = get_string('page_02_s3_maintext', 'theme_wellko');
$description = get_string('page_02_s3_maintext_desc', 'theme_wellko');
$default = get_string('page_02_s3_maintext_default', 'theme_wellko');
$setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_RAW, '1', '2');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// About page text.
$name = 'theme_wellko/page_02_s3_three_text';
$title = get_string('page_02_s3_three_text', 'theme_wellko');
$description = get_string('page_02_s3_three_text_desc', 'theme_wellko');
$default = get_string('page_02_s3_three_text_default', 'theme_wellko');
$setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_RAW, '1', '1');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// About page video link.
$name = 'theme_wellko/page_02_s3_video_link';
$title = get_string('page_02_s3_video_link', 'theme_wellko');
$description = get_string('page_02_s3_video_link_desc', 'theme_wellko');
$default = get_string('page_02_s3_video_link_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// About page button.
$name = 'theme_wellko/page_02_s3_btn';
$title = get_string('page_02_s3_btn', 'theme_wellko');
$description = get_string('page_02_s3_btn_desc', 'theme_wellko');
$default = get_string('page_02_s3_btn_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// About page button link.
$name = 'theme_wellko/page_02_s3_btn_link';
$title = get_string('page_02_s3_btn_link', 'theme_wellko');
$description = get_string('page_02_s3_btn_link_desc', 'theme_wellko');
$default = get_string('page_02_s3_btn_link_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Section 4.
$page->add(new admin_setting_heading('page_02_section_4', get_string('page_02_section_4', 'theme_wellko'),
format_text( '', FORMAT_MARKDOWN)));
$page->add($setting);
// Enable or disable about page s4.
$name = 'theme_wellko/page_02_s4_enabled';
$title = get_string('page_02_s4_enabled', 'theme_wellko');
$description = get_string('page_02_s4_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
$name = 'theme_wellko/page_02_s4_count';
$title = get_string('page_02_s4_count', 'theme_wellko');
$description = get_string('page_02_s4_count_desc', 'theme_wellko');
$default = get_string('page_02_s4_count_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT, '1');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Section 5.
$page->add(new admin_setting_heading('page_02_section_5', get_string('page_02_section_5', 'theme_wellko'),
format_text( '', FORMAT_MARKDOWN)));
$page->add($setting);
// Enable or disable about page s5.
$name = 'theme_wellko/page_02_s5_enabled';
$title = get_string('page_02_s5_enabled', 'theme_wellko');
$description = get_string('page_02_s5_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Section 6.
$page->add(new admin_setting_heading('page_02_section_6', get_string('page_02_section_6', 'theme_wellko'),
format_text( '', FORMAT_MARKDOWN)));
$page->add($setting);
// Enable or disable about page s6.
$name = 'theme_wellko/page_02_s6_enabled';
$title = get_string('page_02_s6_enabled', 'theme_wellko');
$description = get_string('page_02_s6_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
