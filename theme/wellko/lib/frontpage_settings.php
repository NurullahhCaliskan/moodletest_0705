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
 * wellko theme general settings.
 *
 * @package   theme_wellko
 * @copyright 2022 ThemesAlmond
 * @author    ThemesAlmond - Developer Team
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Front page home one section.
 */
function theme_wellko_frontpage_h1_section() {
    $theme = theme_config::load('wellko');
    if (!empty($theme->settings->frontpagenavlink)) {
        $templatecontext['frontpagenavlink'] = theme_wellko_header_links_h1($theme->settings->frontpagenavlink);
    } else {
        $templatecontext['frontpagenavlink'] = "";
    }
    // Frontpage .
    for ($i = 1; $i <= 12; $i++) {
        $block = substr($i, 0, 2);
        $blockenabled = "h1_".$block."_block_enabled";
        if ($i < 10) {
            $blockenabled = "h1_0".$block."_block_enabled";
        }
        if (!empty($theme->settings->$blockenabled)) {
            $templatecontext[$blockenabled] = $theme->settings->$blockenabled;
            $function = "theme_wellko_frontpage_h1_block_".$block;
            if ($block == 4  || $block == 8) {
                $templatecontext = array_merge($templatecontext, $function(0));
            } else {
                $templatecontext = array_merge($templatecontext, $function());
            }
        }
    }
    return $templatecontext;
}
/**
 * Front page home two section.
 */
function theme_wellko_frontpage_h2_section() {
    $theme = theme_config::load('wellko');
    if (!empty($theme->settings->frontpagenavlink)) {
        $templatecontext['frontpagenavlink'] = theme_wellko_header_links_h1($theme->settings->frontpagenavlink);
    } else {
        $templatecontext['frontpagenavlink'] = "";
    }
    // Frontpage .
    for ($i = 1; $i <= 9; $i++) {
        $block = substr($i, 0, 2);
        $blockenabled = "h2_".$block."_block_enabled";
        if ($i < 10) {
            $blockenabled = "h2_0".$block."_block_enabled";
        }
        if (!empty($theme->settings->$blockenabled)) {
            $templatecontext[$blockenabled] = $theme->settings->$blockenabled;
            $function = "theme_wellko_frontpage_h2_block_".$block;
            if ($block == 9 ) {
                $templatecontext = array_merge($templatecontext, $function(0));
            } else {
                $templatecontext = array_merge($templatecontext, $function());
            }
        }
    }
    return $templatecontext;
}
/**
 * Front page home three section.
 */
function theme_wellko_frontpage_h3_section() {
    $theme = theme_config::load('wellko');
    if (!empty($theme->settings->frontpagenavlink)) {
        $templatecontext['frontpagenavlink'] = theme_wellko_header_links_h1($theme->settings->frontpagenavlink);
    } else {
        $templatecontext['frontpagenavlink'] = "";
    }
    // Frontpage .
    for ($i = 1; $i <= 12; $i++) {
        $block = substr($i, 0, 2);
        $blockenabled = "h3_".$block."_block_enabled";
        if ($i < 10) {
            $blockenabled = "h3_0".$block."_block_enabled";
        }
        if (!empty($theme->settings->$blockenabled)) {
            $templatecontext[$blockenabled] = $theme->settings->$blockenabled;
            $function = "theme_wellko_frontpage_h3_block_".$block;
            $templatecontext = array_merge($templatecontext, $function());
$templatecontext = array_merge($templatecontext, theme_wellko_page_2());
        }
    }
    return $templatecontext;
}
/**
 * Front page home three section.
 */
function theme_wellko_frontpage_h4_section() {
    $theme = theme_config::load('wellko');
    if (!empty($theme->settings->frontpagenavlink)) {
        $templatecontext['frontpagenavlink'] = theme_wellko_header_links_h1($theme->settings->frontpagenavlink);
    } else {
        $templatecontext['frontpagenavlink'] = "";
    }
    // Frontpage .
    for ($i = 1; $i <= 3; $i++) {
        $block = substr($i, 0, 2);
        $blockenabled = "h4_".$block."_block_enabled";
        if ($i < 10) {
            $blockenabled = "h4_0".$block."_block_enabled";
        }
        if (!empty($theme->settings->$blockenabled)) {
            $templatecontext[$blockenabled] = $theme->settings->$blockenabled;
            $function = "theme_wellko_frontpage_h4_block_".$block;
            $templatecontext = array_merge($templatecontext, $function());
        }
    }
    return $templatecontext;
}
/**
 * Front page custom page section.
 *
 * @param string $pageid page id.
 * @param int $id counter id.
 */
function theme_wellko_frontpage_page_section($pageid, $id) {
    $theme = theme_config::load('wellko');
    if (!empty($theme->settings->frontpagenavlink)) {
        $templatecontext['frontpagenavlink'] = theme_wellko_header_links_h1($theme->settings->frontpagenavlink);
    } else {
        $templatecontext['frontpagenavlink'] = "";
    }
    // Header 3 up menu.
    if ($theme->settings->h3_01_block_enabled) {
        $templatecontext['h3_01_block_enabled'] = $theme->settings->h3_01_block_enabled;
        $templatecontext = array_merge($templatecontext, theme_wellko_frontpage_h3_block_1());
    }
    // Page create.
    switch ($pageid):
        case '1':
            $templatecontext['page_testimonials_enabled'] = true;
            $templatecontext = array_merge($templatecontext, theme_wellko_page_1());
            break;
        case '2':
            $templatecontext['page_about_enabled'] = true;
            $templatecontext = array_merge($templatecontext, theme_wellko_page_2());
            break;
        case '3':
            $templatecontext['page_events_enabled'] = true;
            $templatecontext = array_merge($templatecontext, theme_wellko_page_3());
            break;
        case '4':
            $templatecontext['page_videos_enabled'] = true;
            $templatecontext = array_merge($templatecontext, theme_wellko_page_4());
            break;
        case '5':
            $templatecontext['page_services_enabled'] = true;
            $templatecontext = array_merge($templatecontext, theme_wellko_page_5());
            break;
        case '6':
            $templatecontext['page_teams_enabled'] = true;
            $templatecontext = array_merge($templatecontext, theme_wellko_page_6());
            break;
        case '7':
            $templatecontext['page_pricing_enabled'] = true;
            $templatecontext = array_merge($templatecontext, theme_wellko_page_7());
            break;
        case '8':
            $templatecontext['page_faqs_enabled'] = true;
            $templatecontext = array_merge($templatecontext, theme_wellko_page_8());
            break;
        case '9':
            $templatecontext['page_aboutme_enabled'] = true;
            $templatecontext = array_merge($templatecontext, theme_wellko_page_9());
            break;
        case '10':
            $templatecontext['page_contact_enabled'] = true;
            $templatecontext = array_merge($templatecontext, theme_wellko_page_10());
            break;
        case '11':
            $templatecontext['page_courses_enabled'] = true;
            $templatecontext = array_merge($templatecontext, theme_wellko_page_11());
            break;
        case '12':
            $templatecontext['page_blog_grid_enabled'] = true;
            $templatecontext = array_merge($templatecontext, theme_wellko_page_12());
            break;
        case '13':
            $templatecontext['page_blog_list_enabled'] = true;
            $templatecontext = array_merge($templatecontext, theme_wellko_page_13());
            break;
        case '14':
            $templatecontext['page_blog_details_enabled'] = true;
            $templatecontext = array_merge($templatecontext, theme_wellko_page_14($id));
            break;
        case '15':
            $templatecontext['page_course_details_enabled'] = true;
            $templatecontext = array_merge($templatecontext, theme_wellko_page_15($id));
            break;
        case '16':
            $templatecontext['page_team_details_enabled'] = true;
            $templatecontext = array_merge($templatecontext, theme_wellko_page_16($id));
            break;
        case '17':
            $templatecontext['page_portfolio_grid_enabled'] = true;
            $templatecontext = array_merge($templatecontext, theme_wellko_page_17(0));
            break;
        case '18':
            $templatecontext['page_portfolio_gallery_enabled'] = true;
            $templatecontext = array_merge($templatecontext, theme_wellko_page_18());
            break;
        case '19':
            $templatecontext['page_portfolio_masonry_enabled'] = true;
            $templatecontext = array_merge($templatecontext, theme_wellko_page_19());
            break;
        case '20':
            $templatecontext['page_portfolio_details_enabled'] = true;
            $templatecontext = array_merge($templatecontext, theme_wellko_page_20());
            break;
        case 'terms':
            $templatecontext['other_terms_enabled'] = true;
            $templatecontext = array_merge($templatecontext, theme_wellko_frontpage_other_block_terms());
            break;
        case 'privacy':
            $templatecontext['other_privacy_enabled'] = true;
            $templatecontext = array_merge($templatecontext, theme_wellko_frontpage_other_block_privacy());
            break;
    endswitch;
    return $templatecontext;
}

/**
 * Find course image link.
 *
 * @param int $id course id.
 */
function wellko_get_course_image($id) {
    global $CFG, $OUTPUT;
    $url = '';
    require_once( $CFG->libdir . '/filelib.php' );
    $context = context_course::instance( $id );
    $fs = get_file_storage();
    $files = $fs->get_area_files( $context->id, 'course', 'overviewfiles', 0 );
    foreach ($files as $f) {
        if ($f->is_valid_image()) {
            $url = moodle_url::make_pluginfile_url( $f->get_contextid(),
                $f->get_component(), $f->get_filearea(), null, $f->get_filepath(), $f->get_filename(), false );
        }
    }
    if (empty($url)) {
        $url = $OUTPUT->get_generated_image_for_id($id + 17);
    }
    return $url;
}
/**
 * Find blog image link.
 *
 * @param int $id blog id.
 */
function wellko_get_blog_post_image($id) {
    global $CFG;
    $url = '';
    require_once( $CFG->libdir . '/filelib.php' );
    $syscontext = context_system::instance();
    $fs = get_file_storage();
    $files = $fs->get_area_files($syscontext->id, 'blog', 'attachment', $id);
    foreach ($files as $f) {
        if ($f->is_valid_image()) {
            $url = moodle_url::make_pluginfile_url( $f->get_contextid(),
                $f->get_component(), $f->get_filearea(), $id, $f->get_filepath(), $f->get_filename(), false );
        }
    }
    return $url;
}
/**
 * Find user image link.
 *
 * @param int $id user id.
 */
function wellko_get_user_image($id) {
    global $CFG;
    $url = '';
    require_once( $CFG->libdir . '/filelib.php' );
    $context = context_user::instance( $id );
    $fs = get_file_storage();
    $files = $fs->get_area_files( $context->id, 'user', 'icon', 'wellko', false);
    foreach ($files as $f) {
        if ($f->is_valid_image()) {
            $url = moodle_url::make_pluginfile_url( $f->get_contextid(), $f->get_component(),
                $f->get_filearea(), null, $f->get_filepath(), $f->get_filename(), false );
        }
    }
    return $url;
}
/**
 * Find user name.
 *
 */
function wellko_get_user_name() {
    global $USER;
    $username = fullname($USER);
    return $username;
}
/**
 * Find category name.
 *
 * @param int $id category id.
 */
function theme_wellko_frontpageblockcategory($id) {
    GLOBAL  $DB;
    $category = $DB->get_record('course_categories', array('id' => $id));
    if (!empty($category)) {
        $categoryname = $category->name;
    }
    return $categoryname;
}
/**
 * Theme links.
 *
 * @param string $links theme links.
 */
function theme_wellko_links($links) {
    $weblink = $links;
    $content = "";
    $websettings = explode("\n", $weblink);
    foreach ($websettings as $settingval) {
        if (!empty(trim($settingval))) {
            $expset = explode("|", $settingval);
            $target = "_self";
            $lurl = "#";
            $ltxt = "";
            $lang = current_language();
            $langcnt = false;
            if (isset($expset[3]) && !empty($expset[3]) ) {
                if ( trim($lang) == trim($expset[3])) {
                    $langcnt = true;
                }
            } else {
                $langcnt = true;
            }
            if ($langcnt) {
                if (isset($expset[0]) && isset($expset[1]) && isset($expset[4])) {
                    if (isset($expset[1]) && !empty($expset[1])) {
                        list($ltxt, $lurl, $comment, $lang, $target) = $expset;
                    }
                    $target = trim($target);
                    if ($target == "_self" || $target == "_blank" || $target == "_parent" || $target == "_top") {
                        $target = trim($target);
                    } else {
                        $target = "_self";
                    }
                } else if (isset($expset[0]) && isset($expset[1])) {
                    list($ltxt, $lurl) = $expset;
                } else {
                    $ltxt = $expset[0];
                    $lurl = "#";
                }
                $ltxt = trim($ltxt);
                $lurl = trim($lurl);

                if (empty($ltxt)) {
                    continue;
                }
                $content .= '<li><a href="'.$lurl.'" target="'.$target.'">'.$ltxt.'</a></li>';
            }
        }
    }
    return $content;
}
/**
 * Theme header links.
 *
 * @param string $links theme header links.
 */
function theme_wellko_header_links_h1($links) {
    $weblink = trim($links);
    $content = "";
    $lurl = "";
    $ltxt = "";
    $i = 0;
    $before = "";
    $websettings = explode("\n", $weblink);
    foreach ($websettings as $settingval) {
        if (!empty(trim($settingval))) {
            $expset = explode("|", $settingval);
            $lang = current_language();
            $langcnt = false;
            if (isset($expset[3]) && !empty($expset[3]) ) {
                if ( trim($lang) == trim($expset[3])) {
                    $langcnt = true;
                }
            } else {
                $langcnt = true;
            }
            if ($langcnt) {
                if (isset($expset[0]) && !empty($expset[0]) ) {
                    if (substr($expset[0], 0, 1) == "*") {
                        $blank = "_self";
                        if (isset($expset[4])) {
                            $blank = trim($expset[4]);
                        }
                        if ($i != 0) {
                            if ($before != "*" && $before != "#") {
                                $content .= "</ul>";
                            }
                        }
                        if (isset($expset[1])) {
                            list($ltxt, $lurl) = $expset;
                            $ltxt = trim(substr($ltxt, 1, strlen($ltxt)));
                            $lurl = trim($lurl);
                            $content .= "<li class='menu-item'>";
                            $content .= "<a href='".$lurl."' target='".$blank."' title='".$ltxt. "'>".$ltxt."</a>";
                            $content .= "</li>";
                        }
                    } else if (substr($expset[0], 0, 1) == "#") {
                        $content .= "<li class='dropdown-divider'></li>";
                    } else if (substr($expset[0], 0, 1) <> "-") {
                        if ($i != 0) {
                            if ($before != "*" && $before != "#") {
                                $content .= "</ul>";
                            }
                        }
                        $ltxt = trim($expset[0]);
                        $blank = "_self";
                        if (isset($expset[4])) {
                            $blank = trim($expset[4]);
                        }
                        if (isset($expset[1])) {
                            $lurl = trim($expset[1]);
                            $content .= "<li class='menu-item menu-item-has-children'>";
                            $content .= "<a href='".$lurl."' target='".$blank."'>".$ltxt."</a>";
                            $content .= "<ul class='sub-menu'>";
                        } else {
                            $content .= "<li class='menu-item menu-item-has-children'>";
                            $content .= "<a href='#'>".$ltxt."</a>";
                            $content .= "<ul class='sub-menu'>";
                        }
                    } else {
                        $blank = "_self";
                        if (isset($expset[4])) {
                            $blank = trim($expset[4]);
                        }
                        if (isset($expset[1])) {
                            list($ltxt, $lurl) = $expset;
                            $ltxt = trim(substr($ltxt, 1, strlen($ltxt)));
                            $lurl = trim($lurl);
                            $content .= "<li class='menu-item'>";
                            $content .= "<a href='".$lurl."' target='".$blank."' title='".$ltxt. "'>".$ltxt."</a>";
                            $content .= "</li>";
                        }
                    }
                } else {
                    $ltxt = $expset[0];
                }
                $before = substr($expset[0], 0, 1);
                $i++;
            }
        }
    }
    return $content;
}
/**
 * Theme dashboard footer select.
 *
 */
function theme_wellko_footer_select() {
    $theme = theme_config::load('wellko');
    $templatecontext['frontpageimglink'] = $theme->settings->frontpageimglink;
    if ($theme->settings->footerselect == "1") {
        $templatecontext['footerselect1'] = $theme->settings->footerselect;
    } else if (($theme->settings->footerselect == "2")) {
        $templatecontext['footerselect2'] = $theme->settings->footerselect;
    } else {
        $templatecontext['footerselect3'] = $theme->settings->footerselect;
    }
    return $templatecontext;
}
/**
 * Blog tags.
 *
 * @param int $count counters.
 * @param string $arrtext parameters.
 */
function theme_wellko_blog_tags($count, $arrtext) {
    global $DB, $CFG;
    // SQL Server.
    if ($CFG->dbtype === 'sqlsrv') {
        $sql = "SELECT TOP ". $count ." tagid, count(tagid) as counttagid";
    } else {
        $sql = "SELECT tagid, count(tagid) as counttagid";
    }
    $sql = $sql." FROM {tag_instance} tags";
    $sql = $sql." WHERE tags.component = 'core' and tags.itemtype = 'post'";
    $sql = $sql." GROUP BY tags.tagid";
    $sql = $sql." ORDER BY counttagid DESC";
    if ($CFG->dbtype != 'sqlsrv') {
        $sql = $sql." LIMIT ". $count;
    }
    $tags = $DB->get_records_sql($sql, array());
    $j = 0;
    $templatecontext['theme_wellko_blog_tags'] = "";
    if (!empty($tags)) {
        foreach ($tags as $tag) {
            if ($tagarr = $DB->get_record('tag', array('id' => $tag->tagid))) {
                $templatecontext[$arrtext][$j]['tags'] = ucwords(strtolower($tagarr->name));
                $templatecontext[$arrtext][$j]['tagurl'] = "tag/index.php?tc=1&tag=".ucwords(strtolower($tagarr->name));
                $j++;
            }
        }
    }
    return $templatecontext;
}
