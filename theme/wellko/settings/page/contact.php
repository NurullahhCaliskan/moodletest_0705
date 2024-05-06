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
$name = 'theme_wellko/page_10_info';
$heading = get_string('page_10_info', 'theme_wellko');
$information = get_string('page_10_info_desc', 'theme_wellko');
$setting = new admin_setting_heading($name, $heading, $information);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Page title.
$name = 'theme_wellko/page_10_page_title';
$title = get_string('page_10_page_title', 'theme_wellko');
$description = get_string('page_10_page_title_desc', 'theme_wellko');
$default = get_string('page_10_page_title_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Sub header image.
$name = 'theme_wellko/page_10_page_subhdimg';
$title = get_string('page_10_page_subhdimg', 'theme_wellko');
$description = get_string('page_10_page_subhdimg_desc', 'theme_wellko');
$default = 'subheader.jpg';
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Section 1.
$page->add(new admin_setting_heading('page_10_section_1', get_string('page_10_section_1', 'theme_wellko'),
format_text( '', FORMAT_MARKDOWN)));
$page->add($setting);
// Contact page s1 enable or disable settings.
$name = 'theme_wellko/page_10_s1_enabled';
$title = get_string('page_10_s1_enabled', 'theme_wellko');
$description = get_string('page_10_s1_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Contact page headline.
$name = 'theme_wellko/page_10_s1_headline';
$title = get_string('page_10_s1_headline', 'theme_wellko');
$description = get_string('page_10_s1_headline_desc', 'theme_wellko');
$default = get_string('page_10_s1_headline_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Contact page header.
$name = 'theme_wellko/page_10_s1_header';
$title = get_string('page_10_s1_header', 'theme_wellko');
$description = get_string('page_10_s1_header_desc', 'theme_wellko');
$description = $description.get_string('underline', 'theme_wellko');
$default = get_string('page_10_s1_header_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

for ($i = 1; $i <= 2; $i++) {
    // Contact page s1 maintaite.
    $name = 'theme_wellko/page_10_s1_maintitle'.$i;
    $title = get_string('page_10_s1_maintitle', 'theme_wellko', array('block' => $i));
    $description = get_string('page_10_s1_maintitle_desc', 'theme_wellko');
    $default = get_string('page_10_s1_maintitle_default', 'theme_wellko');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    // Contact page s1 caption.
    $name = 'theme_wellko/page_10_s1_caption'.$i;
    $title = get_string('page_10_s1_caption', 'theme_wellko', array('block' => $i));
    $description = get_string('page_10_s1_caption_desc', 'theme_wellko');
    $default = get_string('page_10_s1_caption_default', 'theme_wellko');
    $setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_RAW, '1', '1');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    // Contact page s1 location.
    $name = 'theme_wellko/page_10_s1_button'.$i;
    $title = get_string('page_10_s1_button', 'theme_wellko', array('block' => $i));
    $description = get_string('page_10_s1_button_desc', 'theme_wellko');
    $default = get_string('page_10_s1_button_default', 'theme_wellko');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    // Contact page s1 link.
    $name = 'theme_wellko/page_10_s1_button_link'.$i;
    $title = get_string('page_10_s1_button_link', 'theme_wellko', array('block' => $i));
    $description = get_string('page_10_s1_button_link_desc', 'theme_wellko');
    $description = $description.get_string('underline', 'theme_wellko');
    $default = get_string('page_10_s1_button_link_default', 'theme_wellko');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
}
// Section 2.
$page->add(new admin_setting_heading('page_10_section_2', get_string('page_10_section_2', 'theme_wellko'),
format_text( '', FORMAT_MARKDOWN)));
$page->add($setting);
// Contact page s2 enable or disable settings.
$name = 'theme_wellko/page_10_s2_enabled';
$title = get_string('page_10_s2_enabled', 'theme_wellko');
$description = get_string('page_10_s2_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Contact page s2 headline.
$name = 'theme_wellko/page_10_s2_headline';
$title = get_string('page_10_s2_headline', 'theme_wellko');
$description = get_string('page_10_s2_headline_desc', 'theme_wellko');
$default = get_string('page_10_s2_headline_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Contact page s2 header.
$name = 'theme_wellko/page_10_s2_header';
$title = get_string('page_10_s1_header', 'theme_wellko');
$description = get_string('page_10_s2_header_desc', 'theme_wellko');
$default = get_string('page_10_s2_header_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Contact page three header.
$name = 'theme_wellko/page_10_s2_three_header';
$title = get_string('page_10_s2_three_header', 'theme_wellko');
$description = get_string('page_10_s2_three_header_desc', 'theme_wellko');
$default = get_string('page_10_s2_three_header_default', 'theme_wellko');
$setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_RAW, '1', '1');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Contact page three text.
$name = 'theme_wellko/page_10_s2_three_text';
$title = get_string('page_10_s2_three_text', 'theme_wellko');
$description = get_string('page_10_s2_three_text_desc', 'theme_wellko');
$default = get_string('page_10_s2_three_text_default', 'theme_wellko');
$setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_RAW, '1', '1');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Contact page geolocation.
$name = 'theme_wellko/page_10_s2_geolocation';
$title = get_string('page_10_s2_geolocation', 'theme_wellko');
$description = get_string('page_10_s2_geolocation_desc', 'theme_wellko');
$default = get_string('page_10_s2_geolocation_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Section 3.
$page->add(new admin_setting_heading('page_10_section_3', get_string('page_10_section_3', 'theme_wellko'),
format_text( '', FORMAT_MARKDOWN)));
$page->add($setting);
// Contact page s3 enable or disable settings.
$name = 'theme_wellko/page_10_s3_enabled';
$title = get_string('page_10_s3_enabled', 'theme_wellko');
$description = get_string('page_10_s3_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Contact page s3 headline.
$name = 'theme_wellko/page_10_s3_headline';
$title = get_string('page_10_s3_headline', 'theme_wellko');
$description = get_string('page_10_s3_headline_desc', 'theme_wellko');
$default = get_string('page_10_s3_headline_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Contact page s3 header.
$name = 'theme_wellko/page_10_s3_header';
$title = get_string('page_10_s1_header', 'theme_wellko');
$description = get_string('page_10_s3_header_desc', 'theme_wellko');
$default = get_string('page_10_s3_header_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Contact page five text.
$name = 'theme_wellko/page_10_s3_five_text';
$title = get_string('page_10_s3_five_text', 'theme_wellko');
$description = get_string('page_10_s3_five_text_desc', 'theme_wellko');
$default = get_string('page_10_s3_five_text_default', 'theme_wellko');
$setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_RAW, '1', '1');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Contact page button text.
$name = 'theme_wellko/page_10_s3_button';
$title = get_string('page_10_s3_button', 'theme_wellko');
$description = get_string('page_10_s3_button_desc', 'theme_wellko');
$default = get_string('page_10_s3_button_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Contact page button lnk.
$name = 'theme_wellko/page_10_s3_button_lnk';
$title = get_string('page_10_s3_button_lnk', 'theme_wellko');
$description = get_string('page_10_s3_button_lnk_desc', 'theme_wellko');
$default = get_string('page_10_s3_button_lnk_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Section 4.
$page->add(new admin_setting_heading('page_10_section_4', get_string('page_10_section_4', 'theme_wellko'),
format_text( '', FORMAT_MARKDOWN)));
$page->add($setting);
// Enable or disable contact page settings.
$name = 'theme_wellko/page_10_s4_enabled';
$title = get_string('page_10_s4_enabled', 'theme_wellko');
$description = get_string('page_10_s4_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Contact page headline.
$name = 'theme_wellko/page_10_s4_headline';
$title = get_string('page_10_s4_headline', 'theme_wellko');
$description = get_string('page_10_s4_headline_desc', 'theme_wellko');
$default = get_string('page_10_s4_headline_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Contact page header.
$name = 'theme_wellko/page_10_s4_header';
$title = get_string('page_10_s4_header', 'theme_wellko');
$description = get_string('page_10_s4_header_desc', 'theme_wellko');
$default = get_string('page_10_s4_header_default', 'theme_wellko');
$setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_RAW, '1', '1');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Contact page button.
$name = 'theme_wellko/page_10_s4_button';
$title = get_string('page_10_s4_button', 'theme_wellko');
$description = get_string('page_10_s4_button_desc', 'theme_wellko');
$default = get_string('page_10_s4_button_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Contact page button link.
$name = 'theme_wellko/page_10_s4_button_lnk';
$title = get_string('page_10_s4_button_lnk', 'theme_wellko');
$description = get_string('page_10_s4_button_lnk_desc', 'theme_wellko');
$default = get_string('page_10_s4_button_lnk_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
