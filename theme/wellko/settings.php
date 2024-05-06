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
 * Theme wellko settings file.
 *
 * @package   theme_wellko
 * @copyright 2022 ThemesAlmond
 * @author    ThemesAlmond - Developer Team
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {
    $settings = new theme_boost_admin_settingspage_tabs('themesettingwellko', get_string('configtitle', 'theme_wellko'));
    $page = new admin_settingpage('theme_wellko_general', get_string('generalsettings', 'theme_wellko'));
    require('settings/general.php');
    require('settings/advanced.php');
    require('settings/theme.php');
    require('settings/frontpage_settings.php');
    require('settings/frontpage_h1_block.php');
    require('settings/frontpage_h2_block.php');
    require('settings/frontpage_h3_block.php');
    require('settings/frontpage_h4_block.php');
    require('settings/page_all.php');
    require('settings/other.php');
}
