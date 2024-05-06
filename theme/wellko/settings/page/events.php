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
$name = 'theme_wellko/page_03_info';
$heading = get_string('page_03_info', 'theme_wellko');
$information = get_string('page_03_info_desc', 'theme_wellko');
$setting = new admin_setting_heading($name, $heading, $information);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Page title.
$name = 'theme_wellko/page_03_page_title';
$title = get_string('page_03_page_title', 'theme_wellko');
$description = get_string('page_03_page_title_desc', 'theme_wellko');
$default = get_string('page_03_page_title_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Sub header image.
$name = 'theme_wellko/page_03_page_subhdimg';
$title = get_string('page_03_page_subhdimg', 'theme_wellko');
$description = get_string('page_03_page_subhdimg_desc', 'theme_wellko');
$default = 'subheader.jpg';
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Section 1.
$page->add(new admin_setting_heading('page_03_section_1', get_string('page_03_section_1', 'theme_wellko'),
format_text( '', FORMAT_MARKDOWN)));
$page->add($setting);
// Events page s1 enable or disable settings.
$name = 'theme_wellko/page_03_s1_enabled';
$title = get_string('page_03_s1_enabled', 'theme_wellko');
$description = get_string('page_03_s1_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Events page s1 count settings.
$name = 'theme_wellko/page_03_s1_count';
$title = get_string('page_03_s1_count', 'theme_wellko');
$description = get_string('page_03_s1_count_desc', 'theme_wellko');
$description = $description.get_string('underline', 'theme_wellko');
$default = 6;
$options = array();
for ($i = 2; $i <= 12; $i++) {
     $options[$i] = $i;
}
$setting = new admin_setting_configselect($name, $title, $description, $default, $options);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
$count = get_config('theme_wellko', 'page_03_s1_count');
// End of events page general settings.
// ------------------------------------------------------------------------------------.
for ($i = 1; $i <= $count; $i++) {
    // Events page s1 date.
    $name = 'theme_wellko/page_03_s1_date'.$i;
    $title = get_string('page_03_s1_date', 'theme_wellko', array('block' => $i));
    $description = get_string('page_03_s1_date_desc', 'theme_wellko');
    $default = get_string('page_03_s1_date_default', 'theme_wellko');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    // Events page s1 title.
    $name = 'theme_wellko/page_03_s1_title'.$i;
    $title = get_string('page_03_s1_title', 'theme_wellko', array('block' => $i));
    $description = get_string('page_03_s1_title_desc', 'theme_wellko');
    $default = get_string('page_03_s1_title_default', 'theme_wellko');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    // Events page s1 location.
    $name = 'theme_wellko/page_03_s1_location'.$i;
    $title = get_string('page_03_s1_location', 'theme_wellko', array('block' => $i));
    $description = get_string('page_03_s1_location_desc', 'theme_wellko');
    $default = get_string('page_03_s1_location_default', 'theme_wellko');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    // Events page s1 link.
    $name = 'theme_wellko/page_03_s1_link'.$i;
    $title = get_string('page_03_s1_link', 'theme_wellko', array('block' => $i));
    $description = get_string('page_03_s1_link_desc', 'theme_wellko');
    $default = get_string('page_03_s1_link_default', 'theme_wellko');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    // Events page s1 cost.
    $name = 'theme_wellko/page_03_s1_cost'.$i;
    $title = get_string('page_03_s1_cost', 'theme_wellko', array('block' => $i));
    $description = get_string('page_03_s1_cost_desc', 'theme_wellko');
    $description = $description.get_string('underline', 'theme_wellko');
    $default = get_string('page_03_s1_cost_default', 'theme_wellko');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
}

// Section 2.
$page->add(new admin_setting_heading('page_03_section_2', get_string('page_03_section_2', 'theme_wellko'),
format_text( '', FORMAT_MARKDOWN)));
$page->add($setting);
// Enable or disable about page s2.
$name = 'theme_wellko/page_03_s2_enabled';
$title = get_string('page_03_s2_enabled', 'theme_wellko');
$description = get_string('page_03_s2_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Section 3.
$page->add(new admin_setting_heading('page_03_section_3', get_string('page_03_section_3', 'theme_wellko'),
format_text( '', FORMAT_MARKDOWN)));
$page->add($setting);
// Enable or disable Events page settings.
$name = 'theme_wellko/page_03_s3_enabled';
$title = get_string('page_03_s3_enabled', 'theme_wellko');
$description = get_string('page_03_s3_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Events page headline.
$name = 'theme_wellko/page_03_s3_headline';
$title = get_string('page_03_s3_headline', 'theme_wellko');
$description = get_string('page_03_s3_headline_desc', 'theme_wellko');
$default = get_string('page_03_s3_headline_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Events page header.
$name = 'theme_wellko/page_03_s3_header';
$title = get_string('page_03_s3_header', 'theme_wellko');
$description = get_string('page_03_s3_header_desc', 'theme_wellko');
$default = get_string('page_03_s3_header_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Events page main title.
$name = 'theme_wellko/page_03_s3_maintitle';
$title = get_string('page_03_s3_maintitle', 'theme_wellko');
$description = get_string('page_03_s3_maintitle_desc', 'theme_wellko');
$default = get_string('page_03_s3_maintitle_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Events page caption.
$name = 'theme_wellko/page_03_s3_caption';
$title = get_string('page_03_s3_caption', 'theme_wellko');
$description = get_string('page_03_s3_caption_desc', 'theme_wellko');
$default = get_string('page_03_s3_caption_default', 'theme_wellko');
$setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_RAW, '1', '2');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Events page button.
$name = 'theme_wellko/page_03_s3_button';
$title = get_string('page_03_s3_button', 'theme_wellko');
$description = get_string('page_03_s3_button_desc', 'theme_wellko');
$default = get_string('page_03_s3_button_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Events page button link.
$name = 'theme_wellko/page_03_s3_button_link';
$title = get_string('page_03_s3_button_link', 'theme_wellko');
$description = get_string('page_03_s3_button_link_desc', 'theme_wellko');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
