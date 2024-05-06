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
 * wellko frontpage settings.
 *
 * @package   theme_wellko
 * @copyright 2022 ThemesAlmond
 * @author    ThemesAlmond - Developer Team
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Front page settings.
defined('MOODLE_INTERNAL') || die();
$page = new admin_settingpage('theme_wellko_frontpage', get_string('frontpagewellko', 'theme_wellko'));
// Frontpage general heading.
$page->add(new admin_setting_heading('theme_wellko_frontpagehead', get_string('frontpageheading', 'theme_wellko'),
'', FORMAT_MARKDOWN));
// Frontpage desing select.
$name = 'theme_wellko/frontpagechoice';
$title = get_string('frontpagechoice', 'theme_wellko');
$description = get_string('frontpagechoicedesc', 'theme_wellko');
$default = 1;
$options = array();
for ($i = 1; $i <= 4; $i++) {
    $options[$i] = $i;
}
$setting = new admin_setting_configselect($name, $title, $description, $default, $options);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Front page block images folder path.
$name = 'theme_wellko/frontpageimglink';
$title = get_string('frontpageimglink', 'theme_wellko');
$description = get_string('frontpageimglinkdesc', 'theme_wellko');
$default = 'https://';
$default .= 'themesalmond.';
$default .= 'com';
$default .= '/images/wellko/';
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 60);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Frontpage nav link area.
$name = 'theme_wellko/frontpagenavlink';
$title = get_string('frontpagenavlink', 'theme_wellko');
$description = get_string('frontpagenavlinkdesc', 'theme_wellko');
$default = get_string('frontpagenavlinkdefault', 'theme_wellko');
$setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_RAW, '1', '6');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
$settings->add($page);
