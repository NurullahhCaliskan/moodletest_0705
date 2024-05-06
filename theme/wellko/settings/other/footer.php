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
 * wellko footer settings.
 *
 * @package   theme_wellko
 * @copyright 2022 ThemesAlmond
 * @author    ThemesAlmond - Developer Team
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
// Footer info.
$name = 'theme_wellko/footer_info';
$heading = get_string('footer_info', 'theme_wellko');
$information = get_string('footer_info_desc', 'theme_wellko');
$setting = new admin_setting_heading($name, $heading, $information);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Enable or disable footer settings.
$name = 'theme_wellko/footer_enabled';
$title = get_string('footer_enabled', 'theme_wellko');
$description = get_string('footer_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Footer logo select.
$name = 'theme_wellko/footer_logo';
$title = get_string('footer_logo', 'theme_wellko');
$description = get_string('footer_logo_desc', 'theme_wellko');
$description = $description.get_string('underline', 'theme_wellko');
$default = "None";
$options = array(
     'None' => 'None',
     'Logo' => 'Logo',
     'Small logo' => 'Small logo',
);
$setting = new admin_setting_configselect($name, $title, $description, $default, $options);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Footer col 1 header.
$name = 'theme_wellko/footer_col1_header';
$title = get_string('footer_col1_header', 'theme_wellko');
$description = get_string('footer_col1_header_desc', 'theme_wellko');
$default = "Site Name";
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Footer col 1 caption.
$name = 'theme_wellko/footer_col1_caption';
$title = get_string('footer_col1_caption', 'theme_wellko');
$description = get_string('footer_col1_caption_desc', 'theme_wellko');
$description = $description.get_string('underline', 'theme_wellko');
$default = get_string('footer_col1_caption_default', 'theme_wellko');
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Footer col 2 header.
$name = 'theme_wellko/footer_col2_header';
$title = get_string('footer_col2_header', 'theme_wellko');
$description = get_string('footer_col2_header_desc', 'theme_wellko');
$default = "Company";
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Footer col 2 link area.
$name = 'theme_wellko/footer_col2_link';
$title = get_string('footer_col2_link', 'theme_wellko');
$description = get_string('footer_col2_link_desc', 'theme_wellko');
$description = $description.get_string('underline', 'theme_wellko');
$default = get_string('footer_col2_link_default', 'theme_wellko');
$setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_RAW, '1', '6');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Footer col 3 header.
$name = 'theme_wellko/footer_col3_header';
$title = get_string('footer_col3_header', 'theme_wellko');
$description = get_string('footer_col3_header_desc', 'theme_wellko');
$default = "Help";
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Footer col 3 link area.
$name = 'theme_wellko/footer_col3_link';
$title = get_string('footer_col3_link', 'theme_wellko');
$description = get_string('footer_col3_link_desc', 'theme_wellko');
$description = $description.get_string('underline', 'theme_wellko');
$default = get_string('footer_col3_link_default', 'theme_wellko');
$setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_RAW, '1', '6');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Footer col 4 header.
$name = 'theme_wellko/footer_col4_header';
$title = get_string('footer_col4_header', 'theme_wellko');
$description = get_string('footer_col4_header_desc', 'theme_wellko');
$default = "Company";
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Footer col 3 caption.
$name = 'theme_wellko/footer_col4_caption';
$title = get_string('footer_col4_caption', 'theme_wellko');
$description = get_string('footer_col4_caption_desc', 'theme_wellko');
$description = $description.get_string('underline', 'theme_wellko');
$default = get_string('footer_col4_caption_default', 'theme_wellko');
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Footer social links.
$name = 'theme_wellko/footer_social';
$title = get_string('footer_social', 'theme_wellko');
$description = get_string('footer_social_desc', 'theme_wellko');
$description = $description.get_string('underline', 'theme_wellko');
$default = get_string('footer_social_default', 'theme_wellko');
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Enable or disable email form.
$name = 'theme_wellko/footer_email';
$title = get_string('footer_email', 'theme_wellko');
$description = get_string('footer_email_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Enable or disable app img.
$name = 'theme_wellko/footer_appimg';
$title = get_string('footer_appimg', 'theme_wellko');
$description = get_string('footer_appimg_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// App img 1 link url.
$name = 'theme_wellko/footer_appimg_link';
$title = get_string('footer_appimg_link', 'theme_wellko');
$description = get_string('footer_appimg_link_desc', 'theme_wellko');
$default = "";
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// App img 2 link url.
$name = 'theme_wellko/footer_appimg_link_1';
$title = get_string('footer_appimg_link_1', 'theme_wellko');
$description = get_string('footer_appimg_link_1_desc', 'theme_wellko');
$default = "";
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Footer Copyright.
$name = 'theme_wellko/footer_copyright';
$title = get_string('footer_copyright', 'theme_wellko');
$description = get_string('footer_copyright_desc', 'theme_wellko');
$default = get_string('footer_copyright_default', 'theme_wellko');
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Enable or disable moodle frontpage orjinal button.
$name = 'theme_wellko/footer_moodle';
$title = get_string('footer_moodle', 'theme_wellko');
$description = get_string('footer_moodle_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 0);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
