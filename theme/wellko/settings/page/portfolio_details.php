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
// Page portfolio details info.
$name = 'theme_wellko/page_20_info';
$heading = get_string('page_20_info', 'theme_wellko');
$information = get_string('page_20_info_desc', 'theme_wellko');
$setting = new admin_setting_heading($name, $heading, $information);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Page title.
$name = 'theme_wellko/page_20_page_title';
$title = get_string('page_20_page_title', 'theme_wellko');
$description = get_string('page_20_page_title_desc', 'theme_wellko');
$default = get_string('page_20_page_title_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Sub header image.
$name = 'theme_wellko/page_20_page_subhdimg';
$title = get_string('page_20_page_subhdimg', 'theme_wellko');
$description = get_string('page_20_page_subhdimg_desc', 'theme_wellko');
$default = 'subheader.jpg';
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Section 1.
$page->add(new admin_setting_heading('page_20_section_1', get_string('page_20_section_1', 'theme_wellko'),
format_text( '', FORMAT_MARKDOWN)));
$page->add($setting);
// Portfolio details page s1 enable or disable settings.
$name = 'theme_wellko/page_20_s1_enabled';
$title = get_string('page_20_s1_enabled', 'theme_wellko');
$description = get_string('page_20_s1_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Portfolio details page s1 html.
$name = 'theme_wellko/page_20_s1_html';
$title = get_string('page_20_s1_html', 'theme_wellko');
$description = get_string('page_20_s1_html_desc', 'theme_wellko');
$default = '            <div class="col-lg-8">
<div class="text mb-md-80">
    <h3 class="fw-600 title">Gaining For VR Learning Programs</h3>
    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam
    eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
    voluptatem quiluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione</p>
    <p><span class="dropcap">M</span> Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae
    consequatur, vel illum solorem eum fugiat quo voluptas nulla pariatur laudantium totam rem aperquae ab illo inventore veritatis
    et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quiluptas sit aspernatur aut odit aut fugit,
    sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
    <h5 class="fw-600">Why Learn VR Program</h5>
    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you
    a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of
    human happiness. No one rejects, dislikes, or avoids pleasure itself, because</p>
    <ul class="check_list">
        <li><i class="fal fa-check"></i> Understand The Brain, Where All Your Power</li>
        <li><i class="fal fa-check"></i> Ease Anxiety, Stress, Worry, And Boredom</li>
        <li><i class="fal fa-check"></i> Process Emotion And Create More Energy</li>
        <li><i class="fal fa-check"></i> Be Less Frustrated By Learning Relationship Tools</li>
        <li><i class="fal fa-check"></i> Motivate Yourself To Get More Done In Less Time</li>
    </ul>
</div>
</div>
<div class="col-lg-4">
<div class="sidebar style_3">
    <div class="sidebar_widget">
        <h5 class="widget_title">Project Details</h5>
        <div class="sidebar_widget_inner">
            <ul class="info_widget">
                <li>
                    <span>Clients</span>
                    Blaine D. Cotton
                </li>
                <li>
                    <span>Project</span>
                    VR Learning
                </li>
                <li>
                    <span>Service</span>
                    Courses/Learning
                </li>
                <li>
                    <span>Category</span>
                    VR Coach
                </li>
                <li>
                    <span>Date</span>
                    25 May 2021
                </li>
                <li>
                    <span>Share</span>
                    <ul class="social">
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-behance"></i>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Section 2.
$page->add(new admin_setting_heading('page_20_section_2', get_string('page_20_section_2', 'theme_wellko'),
format_text( '', FORMAT_MARKDOWN)));
$page->add($setting);
// Portfolio details page s2 enable or disable settings.
$name = 'theme_wellko/page_20_s2_enabled';
$title = get_string('page_20_s2_enabled', 'theme_wellko');
$description = get_string('page_20_s2_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Section 3.
$page->add(new admin_setting_heading('page_20_section_3', get_string('page_20_section_3', 'theme_wellko'),
format_text( '', FORMAT_MARKDOWN)));
$page->add($setting);
// Portfolio details page s3 enable or disable settings.
$name = 'theme_wellko/page_20_s3_enabled';
$title = get_string('page_20_s3_enabled', 'theme_wellko');
$description = get_string('page_20_s3_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Section 4.
$page->add(new admin_setting_heading('page_20_section_4', get_string('page_20_section_4', 'theme_wellko'),
format_text( '', FORMAT_MARKDOWN)));
$page->add($setting);
// Enable or disable portfolio details page settings.
$name = 'theme_wellko/page_20_s4_enabled';
$title = get_string('page_20_s4_enabled', 'theme_wellko');
$description = get_string('page_20_s4_enabled_desc', 'theme_wellko');
$setting = new admin_setting_configcheckbox($name, $title, $description, 1);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Portfolio details page headline.
$name = 'theme_wellko/page_20_s4_headline';
$title = get_string('page_20_s4_headline', 'theme_wellko');
$description = get_string('page_20_s4_headline_desc', 'theme_wellko');
$default = get_string('page_20_s4_headline_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Portfolio details page header.
$name = 'theme_wellko/page_20_s4_header';
$title = get_string('page_20_s4_header', 'theme_wellko');
$description = get_string('page_20_s4_header_desc', 'theme_wellko');
$default = get_string('page_20_s4_header_default', 'theme_wellko');
$setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_RAW, '1', '1');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Portfolio details page button.
$name = 'theme_wellko/page_20_s4_button';
$title = get_string('page_20_s4_button', 'theme_wellko');
$description = get_string('page_20_s4_button_desc', 'theme_wellko');
$default = get_string('page_20_s4_button_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Portfolio details page button link.
$name = 'theme_wellko/page_20_s4_button_lnk';
$title = get_string('page_20_s4_button_lnk', 'theme_wellko');
$description = get_string('page_20_s4_button_lnk_desc', 'theme_wellko');
$default = get_string('page_20_s4_button_lnk_default', 'theme_wellko');
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
