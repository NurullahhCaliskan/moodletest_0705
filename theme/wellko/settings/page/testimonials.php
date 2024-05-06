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
// Page testimonials info.
$name = 'theme_wellko/page_01_info';
$heading = get_string('page_01_info', 'theme_wellko');
$information = get_string('page_01_info_desc', 'theme_wellko');
$setting = new admin_setting_heading($name, $heading, $information);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Page title.
$name = 'theme_wellko/page_01_page_title';
$title = get_string('page_01_page_title', 'theme_wellko');
$description = get_string('page_01_page_title_desc', 'theme_wellko');
$default = get_string('page_01_page_title_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Sub header image.
$name = 'theme_wellko/page_01_page_subhdimg';
$title = get_string('page_01_page_subhdimg', 'theme_wellko');
$description = get_string('page_01_page_subhdimg_desc', 'theme_wellko');
$default = 'subheader.jpg';
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Section 1.
$page->add(new admin_setting_heading('page_01_section_1', get_string('page_01_section_1', 'theme_wellko'),
format_text( '', FORMAT_MARKDOWN)));
$page->add($setting);
// Testimonial page s1 enable or disable settings.
$name = 'theme_wellko/page_01_s1_enabled';
$title = get_string('page_01_s1_enabled', 'theme_wellko');
$description = get_string('page_01_s1_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Testimonial page s1 count.
$name = 'theme_wellko/page_01_s1_count';
$title = get_string('page_01_s1_count', 'theme_wellko');
$description = get_string('page_01_s1_count_desc', 'theme_wellko');
$description = $description.get_string('underline', 'theme_wellko');
$default = 6;
$options = array();
for ($i = 2; $i <= 9; $i++) {
     $options[$i] = $i;
}
$setting = new admin_setting_configselect($name, $title, $description, $default, $options);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
$count = get_config('theme_wellko', 'page_01_s1_count');
// Testimonial page general settings END.
// ------------------------------------------------------------------------------------.
for ($i = 1; $i <= $count; $i++) {
    // Name.
    $name = 'theme_wellko/page_01_s1_name'.$i;
    $title = get_string('page_01_s1_name', 'theme_wellko', array('block' => $i));
    $description = get_string('page_01_s1_name_desc', 'theme_wellko');
    $default = "Robert M. Morales";
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    // Job.
    $name = 'theme_wellko/page_01_s1_job'.$i;
    $title = get_string('page_01_s1_job', 'theme_wellko', array('block' => $i));
    $description = get_string('page_01_s1_job_desc', 'theme_wellko');
    $default = "Web Designer";
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    // Comment.
    $name = 'theme_wellko/page_01_s1_comment'.$i;
    $title = get_string('page_01_s1_comment', 'theme_wellko', array('block' => $i));
    $description = get_string('page_01_s1_comment_desc', 'theme_wellko');
    $default = get_string('page_01_s1_comment_default', 'theme_wellko');
    $setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_RAW, '1', '2');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    // Ratings star.
    $name = 'theme_wellko/page_01_s1_star'.$i;
    $title = get_string('page_01_s1_star', 'theme_wellko', array('block' => $i));
    $description = get_string('page_01_s1_star_desc', 'theme_wellko');
    $description = $description.get_string('underline', 'theme_wellko');
    $default = 5;
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT, "4", "1");
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
}
// Section 2.
$page->add(new admin_setting_heading('page_01_section_2', get_string('page_01_section_2', 'theme_wellko'),
format_text( '', FORMAT_MARKDOWN)));
$page->add($setting);
// Testimonial page s2 enable or disable settings.
$name = 'theme_wellko/page_01_s2_enabled';
$title = get_string('page_01_s2_enabled', 'theme_wellko');
$description = get_string('page_01_s2_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Testimonial page s2 caption.
$name = 'theme_wellko/page_01_s2_caption';
$title = get_string('page_01_s2_caption', 'theme_wellko');
$description = get_string('page_01_s2_caption_desc', 'theme_wellko');
$default = get_string('page_01_s2_caption_default', 'theme_wellko');
$setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_RAW, '1', '1');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Section 3.
$page->add(new admin_setting_heading('page_01_section_3', get_string('page_01_section_3', 'theme_wellko'),
format_text( '', FORMAT_MARKDOWN)));
$page->add($setting);
// Testimonial page s3 enable or disable settings.
$name = 'theme_wellko/page_01_s3_enabled';
$title = get_string('page_01_s3_enabled', 'theme_wellko');
$description = get_string('page_01_s3_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Testimonial page s3 headline.
$name = 'theme_wellko/page_01_s3_headline';
$title = get_string('page_01_s3_headline', 'theme_wellko');
$description = get_string('page_01_s3_headline_desc', 'theme_wellko');
$default = get_string('page_01_s3_headline_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Testimonial page s3 header text.
$name = 'theme_wellko/page_01_s3_header';
$title = get_string('page_01_s3_header', 'theme_wellko');
$description = get_string('page_01_s3_header_desc', 'theme_wellko');
$default = get_string('page_01_s3_header_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Testimonial page s3 count.
$name = 'theme_wellko/page_01_s3_count';
$title = get_string('page_01_s3_count', 'theme_wellko');
$description = get_string('page_01_s3_count_desc', 'theme_wellko');
$description = $description.get_string('underline', 'theme_wellko');
$default = 6;
$options = array();
for ($i = 2; $i <= 6; $i++) {
     $options[$i] = $i;
}
$setting = new admin_setting_configselect($name, $title, $description, $default, $options);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
$count = get_config('theme_wellko', 'page_01_s3_count');
// Testimonial page s3 general settings END.
// ------------------------------------------------------------------------------------.
for ($i = 1; $i <= $count; $i++) {
    // Testimonial page s3 comment.
    $name = 'theme_wellko/page_01_s3_comment'.$i;
    $title = get_string('page_01_s3_comment', 'theme_wellko', array('block' => $i));
    $description = get_string('page_01_s3_comment_desc', 'theme_wellko');
    $description = $description.get_string('underline', 'theme_wellko');
    $default = get_string('page_01_s3_comment_default', 'theme_wellko');
    $setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_RAW, '1', '2');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
}
// Section 4.
$page->add(new admin_setting_heading('page_01_section_4', get_string('page_01_section_4', 'theme_wellko'),
format_text( '', FORMAT_MARKDOWN)));
$page->add($setting);
// Testimonial page s4 enable or disable settings.
$name = 'theme_wellko/page_01_s4_enabled';
$title = get_string('page_01_s4_enabled', 'theme_wellko');
$description = get_string('page_01_s4_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Testimonial page s4 headline.
$name = 'theme_wellko/page_01_s4_headline';
$title = get_string('page_01_s4_headline', 'theme_wellko');
$description = get_string('page_01_s4_headline_desc', 'theme_wellko');
$default = get_string('page_01_s4_headline_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Testimonial page s4 header text.
$name = 'theme_wellko/page_01_s4_header';
$title = get_string('page_01_s4_header', 'theme_wellko');
$description = get_string('page_01_s4_header_desc', 'theme_wellko');
$default = get_string('page_01_s4_header_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Testimonial page s4 count.
$name = 'theme_wellko/page_01_s4_count';
$title = get_string('page_01_s4_count', 'theme_wellko');
$description = get_string('page_01_s4_count_desc', 'theme_wellko');
$description = $description.get_string('underline', 'theme_wellko');
$default = 6;
$options = array();
for ($i = 2; $i <= 6; $i++) {
     $options[$i] = $i;
}
$setting = new admin_setting_configselect($name, $title, $description, $default, $options);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
$count = get_config('theme_wellko', 'page_01_s4_count');
// Testimonial page s4 settings END.
// ------------------------------------------------------------------------------------.
for ($i = 1; $i <= $count; $i++) {
    // Testimonial page s4 name.
    $name = 'theme_wellko/page_01_s4_name'.$i;
    $title = get_string('page_01_s4_name', 'theme_wellko', array('block' => $i));
    $description = get_string('page_01_s4_name_desc', 'theme_wellko');
    $default = "Herminia F. Hudson";
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    // Testimonial page s4 job.
    $name = 'theme_wellko/page_01_s4_job'.$i;
    $title = get_string('page_01_s4_job', 'theme_wellko', array('block' => $i));
    $description = get_string('page_01_s4_job_desc', 'theme_wellko');
    $default = "Apps Developer";
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    // Testimonial page s4 comment.
    $name = 'theme_wellko/page_01_s4_comment'.$i;
    $title = get_string('page_01_s4_comment', 'theme_wellko', array('block' => $i));
    $description = get_string('page_01_s4_comment_desc', 'theme_wellko');
    $description = $description.get_string('underline', 'theme_wellko');
    $default = "On the other hand, we denounce with righteous indignation and demoralized by the charms";
    $setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_RAW, '1', '2');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
}
// Section 5.
$page->add(new admin_setting_heading('page_01_section_5', get_string('page_01_section_5', 'theme_wellko'),
format_text( '', FORMAT_MARKDOWN)));
$page->add($setting);
// Testimonial page s5 enable or disable settings.
$name = 'theme_wellko/page_01_s5_enabled';
$title = get_string('page_01_s5_enabled', 'theme_wellko');
$description = get_string('page_01_s5_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Testimonial page s5 headline.
$name = 'theme_wellko/page_01_s5_headline';
$title = get_string('page_01_s5_headline', 'theme_wellko');
$description = get_string('page_01_s5_headline_desc', 'theme_wellko');
$default = get_string('page_01_s5_headline_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Testimonial page s5 header text.
$name = 'theme_wellko/page_01_s5_header';
$title = get_string('page_01_s5_header', 'theme_wellko');
$description = get_string('page_01_s5_header_desc', 'theme_wellko');
$default = get_string('page_01_s5_header_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Testimonial page s5 button.
$name = 'theme_wellko/page_01_s5_button';
$title = get_string('page_01_s5_button', 'theme_wellko');
$description = get_string('page_01_s5_button_desc', 'theme_wellko');
$default = get_string('page_01_s5_button_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Testimonial page s5 button link.
$name = 'theme_wellko/page_01_s5_button_link';
$title = get_string('page_01_s5_button_link', 'theme_wellko');
$description = get_string('page_01_s5_button_link_desc', 'theme_wellko');
$default = get_string('page_01_s5_button_link_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
