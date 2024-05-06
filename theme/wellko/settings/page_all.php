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
 * wellko page.
 *
 * @package   theme_wellko
 * @copyright 2022 ThemesAlmond
 * @author    ThemesAlmond - Developer Team
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Front page, custom page settings.
defined('MOODLE_INTERNAL') || die();
$page = new admin_settingpage('theme_wellko_page_testimonials', get_string('page_all', 'theme_wellko'));
require('page/testimonials.php');
require('page/about.php');
require('page/events.php');
require('page/videos.php');
require('page/services.php');
require('page/teams.php');
require('page/teams_detail.php');
require('page/pricing.php');
require('page/faqs.php');
require('page/aboutme.php');
require('page/contact.php');
require('page/courses.php');
require('page/courses_detail.php');
require('page/blog_grid.php');
require('page/blog_list.php');
require('page/blog_details.php');
require('page/portfolio_grid.php');
require('page/portfolio_gallery.php');
require('page/portfolio_masonry.php');
require('page/portfolio_details.php');
// Page end.
$page->add(new admin_setting_heading('theme_wellko_page_testimonials_end', get_string('page_all_end', 'theme_wellko'),
format_text(get_string('page_all_end_desc', 'theme_wellko'), FORMAT_MARKDOWN)));
$settings->add($page);
