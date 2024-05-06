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
 * wellko other blocks.
 *
 * @package   theme_wellko
 * @copyright 2022 ThemesAlmond
 * @author    ThemesAlmond - Developer Team
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Front page asside and footer settings.
defined('MOODLE_INTERNAL') || die();
$page = new admin_settingpage('theme_wellko_other_block', get_string('other_block', 'theme_wellko'));
require('other/aside.php');
require('other/terms.php');
require('other/privacy.php');
require('other/footer.php');

// Block end.
$page->add(new admin_setting_heading('theme_wellko_other_block_end', get_string('other_block_end', 'theme_wellko'),
format_text(get_string('other_block_end_desc', 'theme_wellko'), FORMAT_MARKDOWN)));
$settings->add($page);
