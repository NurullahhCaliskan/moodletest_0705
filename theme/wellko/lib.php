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
 * Load the migration files
 *
 * Load the our theme js and css file
 *
 * @package   theme_wellko
 * @copyright 2022 ThemesAlmond
 * @author    ThemesAlmond - Developer Team
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Load the migration files
 * Load the our theme js and css file
 * @param moodle_page $PAGE parameter.
 */
function theme_wellko_page_init(moodle_page $PAGE) {
    wellko_delete_css();
    wellko_create_css();
    if ( wellko_read_css() ) {
        $PAGE->requires->css('/pluginfile.php/1/theme_wellko/css/0/wellko-fonts.css');
    }
    $PAGE->requires->css('/theme/wellko/style/slick.css');
    $PAGE->requires->css('/theme/wellko/style/magnific-popup.css');
    $PAGE->requires->css('/theme/wellko/style/animate.css');
    $PAGE->requires->css('/theme/wellko/style/boxicons.css');

    $PAGE->requires->jquery();
    $PAGE->requires->js('/theme/wellko/js/wow.min.js');
    $PAGE->requires->js('/theme/wellko/js/slick.min.js');
    $PAGE->requires->js('/theme/wellko/js/imagesloaded.min.js');
    $PAGE->requires->js('/theme/wellko/js/isotope.pkgd.min.js');
    $PAGE->requires->js('/theme/wellko/js/jquery.magnific-popup.min.js');
    $PAGE->requires->js('/theme/wellko/js/jquery.counterup.min.js');
    $PAGE->requires->js('/theme/wellko/js/jquery.inview.min.js');
    $PAGE->requires->js('/theme/wellko/js/jquery.easypiechart.js');
    $PAGE->requires->js('/theme/wellko/js/jquery.countdown.min.js');
    $PAGE->requires->js('/theme/wellko/js/faqsfilter.js');
    $PAGE->requires->js('/theme/wellko/js/main.js');
}
/**
 * Template custom css create.
 *
 */
function wellko_create_css() {
    $fs = get_file_storage();
    $theme = theme_config::load('wellko');
    // Prepare file record object.
    $fileinfo = array(
        'contextid' => 1,
        'component' => 'theme_wellko',
        'filearea' => 'css',
        'itemid' => 0,
        'filepath' => '/',
        'filename' => 'wellko-fonts.css');

    // Create file containing text.
    if (!empty($theme->settings->fontimport) && !empty($theme->settings->fontfamily)) {
        $text = $theme->settings->fontimport;
        $text .= "body { ". PHP_EOL;
        $text .= $theme->settings->fontfamily. PHP_EOL;
        $text .= "max-width: 1920px;". PHP_EOL;
        $text .= "margin: auto;". PHP_EOL;;
        $text .= " } ";
        $fs->create_file_from_string($fileinfo, $text);
    }
}
/**
 * Template custom css read.
 *
 */
function wellko_read_css() {
    global $CFG;
    $fs = get_file_storage();
    // Prepare file record object.
    $fileinfo = array(
        'component' => 'theme_wellko',
        'filearea' => 'css',
        'itemid' => 0,
        'contextid' => 1,
        'filepath' => '/',
        'filename' => 'wellko-fonts.css');

    // Get file.
    $file = $fs->get_file($fileinfo['contextid'], $fileinfo['component'], $fileinfo['filearea'],
                        $fileinfo['itemid'], $fileinfo['filepath'], $fileinfo['filename']);
    $context = $fileinfo['contextid'];
    $component = $fileinfo['component'];
    $filearea = $fileinfo['filearea'];
    $itemid = $fileinfo['itemid'];
    $filename = $fileinfo['filename'];
    $url = moodle_url::make_file_url("$CFG->wwwroot/pluginfile.php", "/$context/$component/$filearea/$itemid/$filename");
    $url = preg_replace('|^https?://|i', '//', $url->out(false));
    // Read contents.
    if ($file) {
        return $url;
    } else {
        // File doesn't exist - do something.
        return "";
    }
}
/**
 * Template custom css delete.
 *
 */
function wellko_delete_css() {
    $fs = get_file_storage();
    // Prepare file record object.
    $fileinfo = array(
        'component' => 'theme_wellko',
        'filearea' => 'css',
        'itemid' => 0,
        'contextid' => 1,
        'filepath' => '/',
        'filename' => 'wellko-fonts.css');

    // Get file.
    $file = $fs->get_file($fileinfo['contextid'], $fileinfo['component'], $fileinfo['filearea'],
            $fileinfo['itemid'], $fileinfo['filepath'], $fileinfo['filename']);

    // Delete it if it exists.
    if ($file) {
        $file->delete();
    }
}
/**
 * Inject additional SCSS.
 *
 * @param theme_config $theme The theme config object.
 * @return string
 */
function theme_wellko_get_extra_scss($theme) {
    $content = '';
    $imageurl = $theme->setting_file_url('backgroundimage', 'backgroundimage');

    // Sets the background image, and its settings.
    if (!empty($imageurl)) {
        $content .= '@media (min-width: 768px) {';
        $content .= 'body { ';
        $content .= "background-image: url('$imageurl'); background-size: cover;";
        $content .= ' } }';
    }

    // Sets the login background image.
    $loginbackgroundimageurl = $theme->setting_file_url('loginbackgroundimage', 'loginbackgroundimage');
    if (!empty($loginbackgroundimageurl)) {
        $content .= 'body.pagelayout-login #page { ';
        $content .= "background-image: url('$loginbackgroundimageurl'); background-size: cover;";
        $content .= ' }';
    }

    // Always return the background image with the scss when we have it.
    return !empty($theme->settings->scss) ? $theme->settings->scss . ' ' . $content : $content;
}
/**
 * Serves any files associated with the theme settings.
 *
 * @param stdClass $course
 * @param stdClass $cm
 * @param context $context
 * @param string $filearea
 * @param array $args
 * @param bool $forcedownload
 * @param array $options
 * @return bool
 */
function theme_wellko_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options = array()) {
    if ($context->contextlevel == CONTEXT_SYSTEM && ($filearea === 'logo' || $filearea === 'backgroundimage' ||
        $filearea === 'attachment' || $filearea === 'css' || $filearea === 'loginbackgroundimage'
        || substr($filearea, 0, 5) === 'image')) {
        $theme = theme_config::load('wellko');
        // By default, theme files must be cache-able by both browsers and proxies.
        if (!array_key_exists('cacheability', $options)) {
            $options['cacheability'] = 'public';
        }
        return $theme->setting_file_serve($filearea, $args, $forcedownload, $options);
    } else {
        send_file_not_found();
    }
}
/**
 * Returns the main SCSS content.
 *
 * @param theme_config $theme The theme config object.
 * @return string
 */
function theme_wellko_get_main_scss_content($theme) {
    global $CFG;
    $scss = '';
    $filename = !empty($theme->settings->preset) ? $theme->settings->preset : null;
    $fs = get_file_storage();

    $context = context_system::instance();
    if ($filename == 'default.scss') {
        $scss .= file_get_contents($CFG->dirroot . '/theme/wellko/scss/preset/default.scss');
    } else if ($filename == 'plain.scss') {
        $scss .= file_get_contents($CFG->dirroot . '/theme/wellko/scss/preset/plain.scss');
    } else if ($filename && ($presetfile = $fs->get_file($context->id, 'theme_wellko', 'preset', 0, '/', $filename))) {
        $scss .= $presetfile->get_content();
    } else {
        // Safety fallback - maybe new installs etc.
        $scss .= file_get_contents($CFG->dirroot . '/theme/wellko/scss/preset/default.scss');
    }
    return $scss;
}
/**
 * Get compiled css.
 *
 * @return string compiled css
 */
function theme_wellko_get_precompiled_css() {
    global $CFG;
    return file_get_contents($CFG->dirroot . '/theme/boost/style/moodle.css');
}

/**
 * Get SCSS to prepend.
 *
 * @param theme_config $theme The theme config object.
 * @return array
 */
function theme_wellko_get_pre_scss($theme) {
    $scss = '';
    $configurable = [
        // Config key => [variableName, ...].
        'brandcolor' => ['primary'],
        'backcolor' => ['preloadbackcolor']
    ];
    // Prepend variables first.
    foreach ($configurable as $configkey => $targets) {
        $value = isset($theme->settings->{$configkey}) ? $theme->settings->{$configkey} : null;
        if (empty($value)) {
            continue;
        }
        array_map(function($target) use (&$scss, $value) {
            $scss .= '$' . $target . ': ' . $value . ";\n";
        }, (array) $targets);
    }
    // Prepend pre-scss.
    if (!empty($theme->settings->scsspre)) {
        $scss .= $theme->settings->scsspre;
    }
    return $scss;
}

/**
 * Render the current theme url
 * @return string
 */
function theme_wellko_theme_url() {
    global $CFG, $PAGE;
    $themeurl = $CFG->wwwroot.'/theme/'. $PAGE->theme->name;
    return $themeurl;
}
require('lib/frontpage_settings.php');
require('lib/frontpage_h1_block.php');
require('lib/frontpage_h2_block.php');
require('lib/frontpage_h3_block.php');
require('lib/frontpage_h4_block.php');
require('lib/frontpage_other_block.php');
require('lib/frontpage_page.php');
