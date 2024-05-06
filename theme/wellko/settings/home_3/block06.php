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
 * wellko home there block 6 settings.
 *
 * @package   theme_wellko
 * @copyright 2022 ThemesAlmond
 * @author    ThemesAlmond - Developer Team
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
// Block 6 info.
$name = 'theme_wellko/h3_06_block_info';
$heading = get_string('h3_06_block_info', 'theme_wellko');
$information = get_string('h3_06_block_info_desc', 'theme_wellko');
$setting = new admin_setting_heading($name, $heading, $information);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Enable or disable Block 6 settings.
$name = 'theme_wellko/h3_06_block_enabled';
$title = get_string('h3_06_block_enabled', 'theme_wellko');
$description = get_string('h3_06_block_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Block 6 headline.
$name = 'theme_wellko/h3_06_block_headline';
$title = get_string('h3_06_block_headline', 'theme_wellko');
$description = get_string('h3_06_block_headline_desc', 'theme_wellko');
$default = get_string('h3_06_block_headline_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Block 6 header.
$name = 'theme_wellko/h3_06_block_header';
$title = get_string('h3_06_block_header', 'theme_wellko');
$description = get_string('h3_06_block_header_desc', 'theme_wellko');
$default = get_string('h3_06_block_header_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT, '60', '1');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Monthly active plan.
$options = array();
for ($i = 0; $i <= 2; $i++) {
     $options[$i] = $i + 1;
}
$name = 'theme_wellko/h3_06_block_active_m';
$title = get_string('h3_06_block_active_m', 'theme_wellko');
$description = get_string('h3_06_block_active_m_desc', 'theme_wellko');
$default = 1;
$setting = new admin_setting_configselect($name, $title, $description, $default, $options);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Yearly active plan.
$name = 'theme_wellko/h3_06_block_active_y';
$title = get_string('h3_06_block_active_y', 'theme_wellko');
$description = get_string('h3_06_block_active_y_desc', 'theme_wellko');
$default = 2;
$setting = new admin_setting_configselect($name, $title, $description, $default, $options);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$page->add(new admin_setting_heading('h3_06_montly', get_string('h3_06_montly', 'theme_wellko'),
format_text( '', FORMAT_MARKDOWN)));
$page->add($setting);

for ($i = 1; $i <= 3; $i++) {
    // Monthly.
    // Block 6 title.
    $name = 'theme_wellko/h3_06_block_title'.$i;
    $title = get_string('h3_06_block_title', 'theme_wellko', array('block' => $i));
    $description = get_string('h3_06_block_title_desc', 'theme_wellko');
    $default = get_string('h3_06_block_title_default', 'theme_wellko');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    // Block 6 caption.
    $name = 'theme_wellko/h3_06_block_caption'.$i;
    $title = get_string('h3_06_block_caption', 'theme_wellko', array('block' => $i));
    $description = get_string('h3_06_block_caption_desc', 'theme_wellko');
    $default = get_string('h3_06_block_caption_default', 'theme_wellko');
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT, '60', '1');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    // Block 6 price.
    $name = 'theme_wellko/h3_06_block_price'.$i;
    $title = get_string('h3_06_block_price', 'theme_wellko', array('block' => $i));
    $description = get_string('h3_06_block_price_desc', 'theme_wellko');
    $default = '19';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    // Block 6 four text.
    $name = 'theme_wellko/h3_06_block_text_four'.$i;
    $title = get_string('h3_06_block_text_four', 'theme_wellko', array('block' => $i));
    $description = get_string('h3_06_block_text_four_desc', 'theme_wellko');
    $description = $description.get_string('underline', 'theme_wellko');
    $default = get_string('h3_06_block_text_four_default', 'theme_wellko');
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT, '80', '1');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
}

$page->add(new admin_setting_heading('h3_06_yearly', get_string('h3_06_yearly', 'theme_wellko'),
format_text( '', FORMAT_MARKDOWN)));
$page->add($setting);

for ($i = 1; $i <= 3; $i++) {
    // Yearly.
    // Block 6 title.
    $name = 'theme_wellko/h3_06_block_title_y'.$i;
    $title = get_string('h3_06_block_title_y', 'theme_wellko', array('block' => $i));
    $description = get_string('h3_06_block_title_y_desc', 'theme_wellko');
    $default = get_string('h3_06_block_title_y_default', 'theme_wellko');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    // Block 6 caption.
    $name = 'theme_wellko/h3_06_block_caption_y'.$i;
    $title = get_string('h3_06_block_caption_y', 'theme_wellko', array('block' => $i));
    $description = get_string('h3_06_block_caption_y_desc', 'theme_wellko');
    $default = get_string('h3_06_block_caption_y_default', 'theme_wellko');
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT, '60', '1');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    // Block 6 price.
    $name = 'theme_wellko/h3_06_block_price_y'.$i;
    $title = get_string('h3_06_block_price_y', 'theme_wellko', array('block' => $i));
    $description = get_string('h3_06_block_price_y_desc', 'theme_wellko');
    $default = $default = '199';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    // Block 6 four text.
    $name = 'theme_wellko/h3_06_block_text_four_y'.$i;
    $title = get_string('h3_06_block_text_four_y', 'theme_wellko', array('block' => $i));
    $description = get_string('h3_06_block_text_four_y_desc', 'theme_wellko');
    $description = $description.get_string('underline', 'theme_wellko');
    $default = get_string('h3_06_block_text_four_y_default', 'theme_wellko');
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT, '80', '1');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
}
