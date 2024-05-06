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
// Page about me info.
$name = 'theme_wellko/page_09_info';
$heading = get_string('page_09_info', 'theme_wellko');
$information = get_string('page_09_info_desc', 'theme_wellko');
$setting = new admin_setting_heading($name, $heading, $information);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Page title.
$name = 'theme_wellko/page_09_page_title';
$title = get_string('page_09_page_title', 'theme_wellko');
$description = get_string('page_09_page_title_desc', 'theme_wellko');
$default = get_string('page_09_page_title_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Sub header image.
$name = 'theme_wellko/page_09_page_subhdimg';
$title = get_string('page_09_page_subhdimg', 'theme_wellko');
$description = get_string('page_09_page_subhdimg_desc', 'theme_wellko');
$default = 'subheader.jpg';
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Section 1.
$page->add(new admin_setting_heading('page_09_section_1', get_string('page_09_section_1', 'theme_wellko'),
format_text( '', FORMAT_MARKDOWN)));
$page->add($setting);
// About page s1 enable or disable settings.
$name = 'theme_wellko/page_09_s1_enabled';
$title = get_string('page_09_s1_enabled', 'theme_wellko');
$description = get_string('page_09_s1_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// About page s1 subtitle.
$name = 'theme_wellko/page_09_s1_subtitle';
$title = get_string('page_09_s1_subtitle', 'theme_wellko');
$description = get_string('page_09_s1_subtitle_desc', 'theme_wellko');
$default = get_string('page_09_s1_subtitle_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// About page s1 title.
$name = 'theme_wellko/page_09_s1_title';
$title = get_string('page_09_s1_title', 'theme_wellko');
$description = get_string('page_09_s1_title_desc', 'theme_wellko');
$default = get_string('page_09_s1_title_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// About page s1 caption.
$name = 'theme_wellko/page_09_s1_caption';
$title = get_string('page_09_s1_caption', 'theme_wellko');
$description = get_string('page_09_s1_caption_desc', 'theme_wellko');
$default = get_string('page_09_s1_caption_default', 'theme_wellko');
$setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_RAW, '1', '2');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// About page s1 four text.
$name = 'theme_wellko/page_09_s1_four_text';
$title = get_string('page_09_s1_four_text', 'theme_wellko');
$description = get_string('page_09_s1_four_text_desc', 'theme_wellko');
$default = get_string('page_09_s1_four_text_default', 'theme_wellko');
$setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_RAW, '1', '1');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// About page s1 circle triple.
$name = 'theme_wellko/page_09_s1_circle_triple';
$title = get_string('page_09_s1_circle_triple', 'theme_wellko');
$description = get_string('page_09_s1_circle_triple_desc', 'theme_wellko');
$default = get_string('page_09_s1_circle_triple_default', 'theme_wellko');
$setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_RAW, '1', '1');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// About page s1 button.
$name = 'theme_wellko/page_09_s1_button';
$title = get_string('page_09_s1_button', 'theme_wellko');
$description = get_string('page_09_s1_button_desc', 'theme_wellko');
$default = get_string('page_09_s1_button_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// About page s1 button link.
$name = 'theme_wellko/page_09_s1_button_link';
$title = get_string('page_09_s1_button_link', 'theme_wellko');
$description = get_string('page_09_s1_button_link_desc', 'theme_wellko');
$default = get_string('page_09_s1_button_link_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Section 2.
$page->add(new admin_setting_heading('page_09_section_2', get_string('page_09_section_2', 'theme_wellko'),
format_text( '', FORMAT_MARKDOWN)));
$page->add($setting);
// About page s2 enable or disable settings.
$name = 'theme_wellko/page_09_s2_enabled';
$title = get_string('page_09_s2_enabled', 'theme_wellko');
$description = get_string('page_09_s2_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Section 3.
$page->add(new admin_setting_heading('page_09_section_3', get_string('page_09_section_3', 'theme_wellko'),
format_text( '', FORMAT_MARKDOWN)));
$page->add($setting);
// About page s3 enable or disable settings.
$name = 'theme_wellko/page_09_s3_enabled';
$title = get_string('page_09_s3_enabled', 'theme_wellko');
$description = get_string('page_09_s3_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// About page s3 video link.
$name = 'theme_wellko/page_09_s3_video_lnk';
$title = get_string('page_09_s3_video_lnk', 'theme_wellko');
$description = get_string('page_09_s3_video_lnk_desc', 'theme_wellko');
$default = get_string('page_09_s3_video_lnk_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, '60', '1');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Section 4.
$page->add(new admin_setting_heading('page_09_section_4', get_string('page_09_section_4', 'theme_wellko'),
format_text( '', FORMAT_MARKDOWN)));
$page->add($setting);
// About page s4 enable or disable settings.
$name = 'theme_wellko/page_09_s4_enabled';
$title = get_string('page_09_s4_enabled', 'theme_wellko');
$description = get_string('page_09_s4_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// About page subtitle.
$name = 'theme_wellko/page_09_s4_subtitle';
$title = get_string('page_09_s4_subtitle', 'theme_wellko');
$description = get_string('page_09_s4_subtitle_desc', 'theme_wellko');
$default = get_string('page_09_s4_subtitle_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// About page title.
$name = 'theme_wellko/page_09_s4_title';
$title = get_string('page_09_s4_title', 'theme_wellko');
$description = get_string('page_09_s4_title_desc', 'theme_wellko');
$default = get_string('page_09_s4_title_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// About page button.
$name = 'theme_wellko/page_09_s4_circle_triple';
$title = get_string('page_09_s4_circle_triple', 'theme_wellko');
$description = get_string('page_09_s4_circle_triple_desc', 'theme_wellko');
$default = get_string('page_09_s4_circle_triple_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// About page header 1.
$name = 'theme_wellko/page_09_s4_header_1';
$title = get_string('page_09_s4_header_1', 'theme_wellko');
$description = get_string('page_09_s4_header_1_desc', 'theme_wellko');
$default = get_string('page_09_s4_header_1_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// About page header 2.
$name = 'theme_wellko/page_09_s4_header_2';
$title = get_string('page_09_s4_header_2', 'theme_wellko');
$description = get_string('page_09_s4_header_2_desc', 'theme_wellko');
$default = get_string('page_09_s4_header_2_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// About page header 3.
$name = 'theme_wellko/page_09_s4_header_3';
$title = get_string('page_09_s4_header_3', 'theme_wellko');
$description = get_string('page_09_s4_header_3_desc', 'theme_wellko');
$default = get_string('page_09_s4_header_3_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Section 5.
$page->add(new admin_setting_heading('page_09_section_5', get_string('page_09_section_5', 'theme_wellko'),
format_text( '', FORMAT_MARKDOWN)));
$page->add($setting);
// About page s5 enable or disable settings.
$name = 'theme_wellko/page_09_s5_enabled';
$title = get_string('page_09_s5_enabled', 'theme_wellko');
$description = get_string('page_09_s5_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Section 6.
$page->add(new admin_setting_heading('page_09_section_6', get_string('page_09_section_6', 'theme_wellko'),
format_text( '', FORMAT_MARKDOWN)));
$page->add($setting);
// About page s6 enable or disable settings.
$name = 'theme_wellko/page_09_s6_enabled';
$title = get_string('page_09_s6_enabled', 'theme_wellko');
$description = get_string('page_09_s6_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Section 7.
$page->add(new admin_setting_heading('page_09_section_7', get_string('page_09_section_7', 'theme_wellko'),
format_text( '', FORMAT_MARKDOWN)));
$page->add($setting);
// About page s7 enable or disable settings.
$name = 'theme_wellko/page_09_s7_enabled';
$title = get_string('page_09_s7_enabled', 'theme_wellko');
$description = get_string('page_09_s7_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Section 8.
$page->add(new admin_setting_heading('page_09_section_8', get_string('page_09_section_8', 'theme_wellko'),
format_text( '', FORMAT_MARKDOWN)));
$page->add($setting);
// Enable or disable about page 9 s8.
$name = 'theme_wellko/page_09_s8_enabled';
$title = get_string('page_09_s8_enabled', 'theme_wellko');
$description = get_string('page_09_s8_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Enable or disable Events page settings.
$name = 'theme_wellko/page_09_s8_enabled';
$title = get_string('page_09_s8_enabled', 'theme_wellko');
$description = get_string('page_09_s8_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Events page headline.
$name = 'theme_wellko/page_09_s8_headline';
$title = get_string('page_09_s8_headline', 'theme_wellko');
$description = get_string('page_09_s8_headline_desc', 'theme_wellko');
$default = get_string('page_09_s8_headline_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Events page header.
$name = 'theme_wellko/page_09_s8_header';
$title = get_string('page_09_s8_header', 'theme_wellko');
$description = get_string('page_09_s8_header_desc', 'theme_wellko');
$default = get_string('page_09_s8_header_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Events page button.
$name = 'theme_wellko/page_09_s8_button';
$title = get_string('page_09_s8_button', 'theme_wellko');
$description = get_string('page_09_s8_button_desc', 'theme_wellko');
$default = get_string('page_09_s8_button_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Events page button link.
$name = 'theme_wellko/page_09_s8_button_link';
$title = get_string('page_09_s8_button_link', 'theme_wellko');
$description = get_string('page_09_s8_button_link_desc', 'theme_wellko');
$default = get_string('page_09_s8_button_link_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
