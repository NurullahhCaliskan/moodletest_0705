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
 * wellko theme settings.
 *
 * @package   theme_wellko
 * @copyright 2022 ThemesAlmond
 * @author    ThemesAlmond - Developer Team
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
// Theme settings.
$page = new admin_settingpage('theme_wellko_theme', get_string('themesettings', 'theme_wellko'));
// Frontpage heading.
$page->add(new admin_setting_heading('theme_wellko_theme_head', get_string('themesettingshead', 'theme_wellko'),
'', FORMAT_MARKDOWN));
// Theme font @import .
$name = 'theme_wellko/fontimport';
$title = get_string('fontimport', 'theme_wellko');
$description = get_string('fontimportdesc', 'theme_wellko');
$default = "@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');";
$setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_RAW, '1', '2');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Theme font family.
$name = 'theme_wellko/fontfamily';
$title = get_string('fontfamily', 'theme_wellko');
$description = get_string('fontfamilydesc', 'theme_wellko');
$default = "font-family: 'Poppins', sans-serif !important;";
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT, 60);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Preloader select.
$name = 'theme_wellko/preloader';
$title = get_string('preloader', 'theme_wellko');
$description = get_string('preloaderdesc', 'theme_wellko');
$default = "preloader";
$options = array(
    'preloader' => 'Preloader',
    'ball-triangle' => 'Ball-triangle',
    'bars' => 'Bars',
    'circles' => 'Circles',
    'grid' => 'Grid',
    'hearts' => 'Hearts',
    'oval' => 'Oval',
    'puff' => 'Puff',
    'rings' => 'Rings',
    'spinning-circles' => 'Spinning-circles',
    'tail-spin' => 'Tail-spin',
    'three-dots' => 'three-dots',
);
$setting = new admin_setting_configselect($name, $title, $description, $default, $options);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Back color.
$name = 'theme_wellko/backcolor';
$title = get_string('backcolor', 'theme_wellko');
$description = get_string('backcolor_desc', 'theme_wellko');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Login page position select.
$name = 'theme_wellko/loginposition';
$title = get_string('loginposition', 'theme_wellko');
$description = get_string('loginpositiondesc', 'theme_wellko');
$default = "center";
$options = array(
    'Center' => 'Center',
    'Left' => 'Left',
    'Right' => 'Right',
);
$setting = new admin_setting_configselect($name, $title, $description, $default, $options);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Dashboard footer select.
$name = 'theme_wellko/footerselect';
$title = get_string('footerselect', 'theme_wellko');
$description = get_string('footerselectdesc', 'theme_wellko');
$default = "3";
$options = array(
    '1' => 'Moodle footer',
    '2' => 'Frontpage footer',
);
$setting = new admin_setting_configselect($name, $title, $description, $default, $options);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$settings->add($page);
