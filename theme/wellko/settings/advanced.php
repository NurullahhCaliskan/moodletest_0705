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
 * wellko advanced settings.
 *
 * @package   theme_wellko
 * @copyright 2022 ThemesAlmond
 * @author    ThemesAlmond - Developer Team
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

    // Advanced settings.
    $page = new admin_settingpage('theme_wellko_advanced', get_string('advancedsettings', 'theme_wellko'));
    // Advanced settings heading.
    $page->add(new admin_setting_heading('theme_wellko_advanced_head', get_string('advancedheading', 'theme_wellko'),
    '', FORMAT_MARKDOWN));
    // Raw SCSS to include before the content.
    $setting = new admin_setting_scsscode('theme_wellko/scsspre',
        get_string('rawscsspre', 'theme_wellko'), get_string('rawscsspre_desc', 'theme_wellko'), '', PARAM_RAW);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Raw SCSS to include after the content.
    $setting = new admin_setting_scsscode('theme_wellko/scss', get_string('rawscss', 'theme_wellko'),
        get_string('rawscss_desc', 'theme_wellko'), '', PARAM_RAW);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    $settings->add($page);
