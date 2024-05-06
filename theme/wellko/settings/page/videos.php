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
$name = 'theme_wellko/page_04_info';
$heading = get_string('page_04_info', 'theme_wellko');
$information = get_string('page_04_info_desc', 'theme_wellko');
$setting = new admin_setting_heading($name, $heading, $information);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Page title.
$name = 'theme_wellko/page_04_page_title';
$title = get_string('page_04_page_title', 'theme_wellko');
$description = get_string('page_04_page_title_desc', 'theme_wellko');
$default = get_string('page_04_page_title_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Sub header image.
$name = 'theme_wellko/page_04_page_subhdimg';
$title = get_string('page_04_page_subhdimg', 'theme_wellko');
$description = get_string('page_04_page_subhdimg_desc', 'theme_wellko');
$default = 'subheader.jpg';
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Section 1.
$page->add(new admin_setting_heading('page_04_section_1', get_string('page_04_section_1', 'theme_wellko'),
format_text( '', FORMAT_MARKDOWN)));
$page->add($setting);
// Videos page s1 enable or disable settings.
$name = 'theme_wellko/page_04_s1_enabled';
$title = get_string('page_04_s1_enabled', 'theme_wellko');
$description = get_string('page_04_s1_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Videos page s1 count settings.
$name = 'theme_wellko/page_04_s1_count';
$title = get_string('page_04_s1_count', 'theme_wellko');
$description = get_string('page_04_s1_count_desc', 'theme_wellko');
$description = $description.get_string('underline', 'theme_wellko');
$default = 9;
$options = array();
for ($i = 2; $i <= 9; $i++) {
     $options[$i] = $i;
}
$setting = new admin_setting_configselect($name, $title, $description, $default, $options);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
$count = get_config('theme_wellko', 'page_04_s1_count');
// End of videos page general settings.
// ------------------------------------------------------------------------------------.
for ($i = 1; $i <= $count; $i++) {
    // Videos page category.
    $name = 'theme_wellko/page_04_s1_category'.$i;
    $title = get_string('page_04_s1_category', 'theme_wellko', array('block' => $i));
    $description = get_string('page_04_s1_category_desc', 'theme_wellko');
    $default = get_string('page_04_s1_category_default', 'theme_wellko');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    // Videos page title.
    $name = 'theme_wellko/page_04_s1_first_title'.$i;
    $title = get_string('page_04_s1_first_title', 'theme_wellko', array('block' => $i));
    $description = get_string('page_04_s1_first_title_desc', 'theme_wellko');
    $default = get_string('page_04_s1_first_title_default', 'theme_wellko');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    // Videos page caption.
    $name = 'theme_wellko/page_04_s1_second_title'.$i;
    $title = get_string('page_04_s1_second_title', 'theme_wellko', array('block' => $i));
    $description = get_string('page_04_s1_second_title_desc', 'theme_wellko');
    $default = get_string('page_04_s1_second_title_default', 'theme_wellko');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    // Videos page video URL link .
    $name = 'theme_wellko/page_04_s1_link'.$i;
    $title = get_string('page_04_s1_link', 'theme_wellko', array('block' => $i));
    $description = get_string('page_04_s1_link_desc', 'theme_wellko');
    $default = get_string('page_04_s1_link_default', 'theme_wellko');
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    // Videos page badge.
    $name = 'theme_wellko/page_04_s1_badge'.$i;
    $title = get_string('page_04_s1_badge', 'theme_wellko', array('block' => $i));
    $description = get_string('page_04_s1_badge_desc', 'theme_wellko');
    $description = $description.get_string('underline', 'theme_wellko');
    $default = get_string('page_04_s1_badge_default', 'theme_wellko');
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
}
// Section 2.
$page->add(new admin_setting_heading('page_04_section_2', get_string('page_04_section_2', 'theme_wellko'),
format_text( '', FORMAT_MARKDOWN)));
$page->add($setting);
// Videos page s2 enable or disable settings.
$name = 'theme_wellko/page_04_s2_enabled';
$title = get_string('page_04_s2_enabled', 'theme_wellko');
$description = get_string('page_04_s2_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Videos page s2 caption.
$name = 'theme_wellko/page_04_s2_caption';
$title = get_string('page_04_s2_caption', 'theme_wellko');
$description = get_string('page_04_s2_caption_desc', 'theme_wellko');
$default = get_string('page_04_s2_caption_default', 'theme_wellko');
$setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_RAW, '1', '1');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Section 3.
$page->add(new admin_setting_heading('page_04_section_3', get_string('page_04_section_3', 'theme_wellko'),
format_text( '', FORMAT_MARKDOWN)));
$page->add($setting);
// Videos page s3 enable or disable settings.
$name = 'theme_wellko/page_04_s3_enabled';
$title = get_string('page_04_s3_enabled', 'theme_wellko');
$description = get_string('page_04_s3_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Section 4.
$page->add(new admin_setting_heading('page_04_section_4', get_string('page_04_section_4', 'theme_wellko'),
format_text( '', FORMAT_MARKDOWN)));
$page->add($setting);
// Videos page s4 enable or disable settings.
$name = 'theme_wellko/page_04_s4_enabled';
$title = get_string('page_04_s4_enabled', 'theme_wellko');
$description = get_string('page_04_s4_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Videos page s4 headline.
$name = 'theme_wellko/page_04_s4_headline';
$title = get_string('page_04_s4_headline', 'theme_wellko');
$description = get_string('page_04_s4_headline_desc', 'theme_wellko');
$default = get_string('page_04_s4_headline_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Videos page s4 header.
$name = 'theme_wellko/page_04_s4_header';
$title = get_string('page_04_s4_header', 'theme_wellko');
$description = get_string('page_04_s4_header_desc', 'theme_wellko');
$default = get_string('page_04_s4_header_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Videos page s4 main title.
$name = 'theme_wellko/page_04_s4_maintitle';
$title = get_string('page_04_s4_maintitle', 'theme_wellko');
$description = get_string('page_04_s4_maintitle_desc', 'theme_wellko');
$default = get_string('page_04_s4_maintitle_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Videos page s4 caption.
$name = 'theme_wellko/page_04_s4_caption';
$title = get_string('page_04_s4_caption', 'theme_wellko');
$description = get_string('page_04_s4_caption_desc', 'theme_wellko');
$default = get_string('page_04_s4_caption_default', 'theme_wellko');
$setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_RAW, '1', '2');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Videos page s4 button.
$name = 'theme_wellko/page_04_s4_button';
$title = get_string('page_04_s4_button', 'theme_wellko');
$description = get_string('page_04_s4_button_desc', 'theme_wellko');
$default = get_string('page_04_s4_button_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Videos page s4 button link.
$name = 'theme_wellko/page_04_s4_button_link';
$title = get_string('page_04_s4_button_link', 'theme_wellko');
$description = get_string('page_04_s4_button_link_desc', 'theme_wellko');
$default = get_string('page_04_s4_button_link_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
