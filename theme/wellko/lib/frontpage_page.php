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
 * Transferring wellko other block settings to mustache
 *
 * @package   theme_wellko
 * @copyright 2022 ThemesAlmond
 * @author    ThemesAlmond - Developer Team
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Front page, custom pages.
// Transferring information from settings to mustache template.

/**
 * Block Testimonials.
 */
function theme_wellko_page_1() {
    $theme = theme_config::load('wellko');
    $templatecontext['page_01_page_title'] = format_string($theme->settings->page_01_page_title);
    $templatecontext['page_01_page_subhdimg'] = $theme->settings->page_01_page_subhdimg;
    // Section 1.
    $templatecontext['page_01_s1_enabled'] = $theme->settings->page_01_s1_enabled;
    if ($theme->settings->page_01_s1_enabled) {
        $count = $theme->settings->page_01_s1_count;
        for ($i = 1, $j = 0; $i <= $count; $i++, $j++) {
            $page01s1name = "page_01_s1_name{$i}";
            $page01s1job = "page_01_s1_job{$i}";
            $page01s1comment = "page_01_s1_comment{$i}";
            $page01s1star = "page_01_s1_star{$i}";
            $templatecontext['page_01_s1'][$j]['name'] = $theme->settings->$page01s1name;
            $templatecontext['page_01_s1'][$j]['job'] = format_string($theme->settings->$page01s1job);
            $templatecontext['page_01_s1'][$j]['comment'] = format_string($theme->settings->$page01s1comment);
            $templatecontext['page_01_s1'][$j]['counter'] = $i;
            for ($k = 1; $k <= 5; $k++) {
                if ( $k <= $theme->settings->$page01s1star ) {
                    $templatecontext['page_01_s1'][$j]['rating'.$k] = "active";
                } else {
                    $templatecontext['page_01_s1'][$j]['rating'.$k] = "";
                }
            }
        }
    }
    // Section 2.
    $templatecontext['page_01_s2_enabled'] = $theme->settings->page_01_s2_enabled;
    if ($theme->settings->page_01_s2_enabled) {
        $templatecontext['page_01_s2_caption'] = format_string($theme->settings->page_01_s2_caption);
    }
    // Section 3.
    $templatecontext['page_01_s3_enabled'] = $theme->settings->page_01_s3_enabled;
    if ($theme->settings->page_01_s3_enabled) {
        $templatecontext['page_01_s3_headline'] = format_string($theme->settings->page_01_s3_headline);
        $templatecontext['page_01_s3_header'] = format_string($theme->settings->page_01_s3_header);
        $count = $theme->settings->page_01_s3_count;
        for ($i = 1, $j = 0; $i <= $count; $i++, $j++) {
            $page01s3comment = "page_01_s3_comment{$i}";
            $templatecontext['page_01_s3'][$j]['comment'] = format_string($theme->settings->$page01s3comment);
            $templatecontext['page_01_s3'][$j]['counter'] = $i;
        }
    }
    // Section 4.
    $templatecontext['page_01_s4_enabled'] = $theme->settings->page_01_s4_enabled;
    if ($theme->settings->page_01_s4_enabled) {
        $templatecontext['page_01_s4_headline'] = format_string($theme->settings->page_01_s4_headline);
        $templatecontext['page_01_s4_header'] = format_string($theme->settings->page_01_s4_header);
        $count = $theme->settings->page_01_s4_count;
        for ($i = 1, $j = 0; $i <= $count; $i++, $j++) {
            $page01s4name = "page_01_s4_name{$i}";
            $page01s4job = "page_01_s4_job{$i}";
            $page01s4comment = "page_01_s4_comment{$i}";
            $templatecontext['page_01_s4'][$j]['name'] = $theme->settings->$page01s4name;
            $templatecontext['page_01_s4'][$j]['job'] = format_string($theme->settings->$page01s4job);
            $templatecontext['page_01_s4'][$j]['comment'] = format_string($theme->settings->$page01s4comment);
            $templatecontext['page_01_s4'][$j]['counter'] = $i;
        }
    }
    // Section 5.
    $templatecontext['page_01_s5_enabled'] = $theme->settings->page_01_s5_enabled;
    if ($theme->settings->page_01_s5_enabled) {
        $templatecontext['page_01_s5_headline'] = format_string($theme->settings->page_01_s5_headline);
        $templatecontext['page_01_s5_header'] = format_string($theme->settings->page_01_s5_header);
        $templatecontext['page_01_s5_button'] = format_string($theme->settings->page_01_s5_button);
        $templatecontext['page_01_s5_button_link'] = $theme->settings->page_01_s5_button_link;
    }
    return $templatecontext;
}
/**
 * Block About us.
 */
function theme_wellko_page_2() {
    $theme = theme_config::load('wellko');
    $templatecontext['page_02_page_title'] = format_string($theme->settings->page_02_page_title);
    $templatecontext['page_02_page_subhdimg'] = $theme->settings->page_02_page_subhdimg;
    // Section 1.
    $templatecontext['page_02_s1_enabled'] = $theme->settings->page_02_s1_enabled;
    if ($theme->settings->page_02_s1_enabled) {
        $templatecontext['page_02_s1_subtitle'] = format_string($theme->settings->page_02_s1_subtitle);
        $expset = explode("|", format_string($theme->settings->page_02_s1_subtitle));
        $say = 0;
        foreach ($expset as $x => $val) {
            if (isset($val)) {
                $say++;
                $templatecontext['page_02_s1_subtitle_'.$say] = $val;
            }
        }
        $templatecontext['page_02_s1_title'] = format_string($theme->settings->page_02_s1_title);
        $expset = explode("|", format_string($theme->settings->page_02_s1_title));
        $say = 0;
        foreach ($expset as $x => $val) {
            if (isset($val)) {
                $say++;
                $templatecontext['page_02_s1_title_'.$say] = $val;
            }
        }
        $templatecontext['page_02_s1_caption'] = format_string($theme->settings->page_02_s1_caption);
        $expset = explode("|", format_string($theme->settings->page_02_s1_caption));
        $say = 0;
        foreach ($expset as $x => $val) {
            if (isset($val)) {
                $say++;
                $templatecontext['page_02_s1_caption_'.$say] = $val;
            }
        }
        $templatecontext['page_02_s1_header_1'] = format_string($theme->settings->page_02_s1_header_1);
        $expset = explode("|", format_string($theme->settings->page_02_s1_header_1));
        $say = 0;
        foreach ($expset as $x => $val) {
            if (isset($val)) {
                $say++;
                $templatecontext['page_02_s1_header_1_'.$say] = $val;
            }
        }
        $templatecontext['page_02_s1_text_1'] = format_string($theme->settings->page_02_s1_text_1);
        $expset = explode("|", format_string($theme->settings->page_02_s1_text_1));
        $say = 0;
        foreach ($expset as $x => $val) {
            if (isset($val)) {
                $say++;
                $templatecontext['page_02_s1_text_1_'.$say] = $val;
            }
        }
        $templatecontext['page_02_s1_header_2'] = format_string($theme->settings->page_02_s1_header_2);
        $expset = explode("|", format_string($theme->settings->page_02_s1_header_2));
        $say = 0;
        foreach ($expset as $x => $val) {
            if (isset($val)) {
                $say++;
                $templatecontext['page_02_s1_header_2_'.$say] = $val;
            }
        }
        $templatecontext['page_02_s1_text_2'] = format_string($theme->settings->page_02_s1_text_2);
        $expset = explode("|", format_string($theme->settings->page_02_s1_text_2));
        $say = 0;
        foreach ($expset as $x => $val) {
            if (isset($val)) {
                $say++;
                $templatecontext['page_02_s1_text_2_'.$say] = $val;
            }
        }
        $templatecontext['page_02_s1_header_3'] = format_string($theme->settings->page_02_s1_header_3);
        $expset = explode("|", format_string($theme->settings->page_02_s1_header_3));
        $say = 0;
        foreach ($expset as $x => $val) {
            if (isset($val)) {
                $say++;
                $templatecontext['page_02_s1_header_3_'.$say] = $val;
            }
        }
        $templatecontext['page_02_s1_text_3'] = format_string($theme->settings->page_02_s1_text_3);
        $expset = explode("|", format_string($theme->settings->page_02_s1_text_3));
        $say = 0;
        foreach ($expset as $x => $val) {
            if (isset($val)) {
                $say++;
                $templatecontext['page_02_s1_text_3_'.$say] = $val;
            }
        }
        $templatecontext['page_02_s1_header_4'] = format_string($theme->settings->page_02_s1_header_4);
        $expset = explode("|", format_string($theme->settings->page_02_s1_header_4));
        $say = 0;
        foreach ($expset as $x => $val) {
            if (isset($val)) {
                $say++;
                $templatecontext['page_02_s1_header_4_'.$say] = $val;
            }
        }
        $templatecontext['page_02_s1_text_4'] = format_string($theme->settings->page_02_s1_text_4);
        $expset = explode("|", format_string($theme->settings->page_02_s1_text_4));
        $say = 0;
        foreach ($expset as $x => $val) {
            if (isset($val)) {
                $say++;
                $templatecontext['page_02_s1_text_4_'.$say] = $val;
            }
        }
        $templatecontext['page_02_s1_button'] = format_string($theme->settings->page_02_s1_button);
        $expset = explode("|", format_string($theme->settings->page_02_s1_button));
        $say = 0;
        foreach ($expset as $x => $val) {
            if (isset($val)) {
                $say++;
                $templatecontext['page_02_s1_button_'.$say] = $val;
            }
        }
        $templatecontext['page_02_s1_button_link'] = $theme->settings->page_02_s1_button_link;
    }
    // Section 2.
    $templatecontext['page_02_s2_enabled'] = $theme->settings->page_02_s2_enabled;
    if ($theme->settings->page_02_s2_enabled) {
        $templatecontext = array_merge($templatecontext, theme_wellko_frontpage_h2_block_2());
    }
    // Section 3.
    $templatecontext['page_02_s3_enabled'] = $theme->settings->page_02_s3_enabled;
    if ($theme->settings->page_02_s3_enabled) {
        $templatecontext['page_02_s3_headline'] = format_string($theme->settings->page_02_s3_headline);
        $expset = explode("|", format_string($theme->settings->page_02_s3_headline));
        $say = 0;
        foreach ($expset as $x => $val) {
            if (isset($val)) {
                $say++;
                $templatecontext['page_02_s3_headline_'.$say] = $val;
            }
        }
        $templatecontext['page_02_s3_header'] = format_string($theme->settings->page_02_s3_header);
        $expset = explode("|", format_string($theme->settings->page_02_s3_header));
        $say = 0;
        foreach ($expset as $x => $val) {
            if (isset($val)) {
                $say++;
                $templatecontext['page_02_s3_header_'.$say] = $val;
            }
        }
        $templatecontext['page_02_s3_maintext'] = format_string($theme->settings->page_02_s3_maintext);
        $expset = explode("|", format_string($theme->settings->page_02_s3_maintext));
        $say = 0;
        foreach ($expset as $x => $val) {
            if (isset($val)) {
                $say++;
                $templatecontext['page_02_s3_maintext_'.$say] = $val;
            }
        }
        $templatecontext['page_02_s3_btn'] = format_string($theme->settings->page_02_s3_btn);
        $expset = explode("|", format_string($theme->settings->page_02_s3_btn));
        $say = 0;
        foreach ($expset as $x => $val) {
            if (isset($val)) {
                $say++;
                $templatecontext['page_02_s3_btn_'.$say] = $val;
            }
        }
        $templatecontext['page_02_s3_btn_link'] = $theme->settings->page_02_s3_btn_link;
        $templatecontext['page_02_s3_video_link'] = $theme->settings->page_02_s3_video_link;
        $expset = explode("|", format_string($theme->settings->page_02_s3_three_text));
        $say = 0;
        foreach ($expset as $x => $val) {
            if (isset($val)) {
                $say++;
                $templatecontext['page_02_s3_three_text_'.$say] = format_string($val);
            }
        }
    }
    // Section 4.
    $templatecontext['page_02_s4_enabled'] = $theme->settings->page_02_s4_enabled;
    if ($theme->settings->page_02_s4_enabled) {
        $templatecontext = array_merge($templatecontext, theme_wellko_frontpage_h1_block_4($theme->settings->page_02_s4_count));
    }
    // Section 5.
    $templatecontext['page_02_s5_enabled'] = $theme->settings->page_02_s5_enabled;
    if ($theme->settings->page_02_s5_enabled) {
        $templatecontext = array_merge($templatecontext, theme_wellko_frontpage_h1_block_7());
    }
    // Section 6.
    $templatecontext['page_02_s6_enabled'] = $theme->settings->page_02_s6_enabled;;
    return $templatecontext;
}
/**
 * Block Events.
 */
function theme_wellko_page_3() {
    $theme = theme_config::load('wellko');
    $templatecontext['page_03_page_title'] = ($theme->settings->page_03_page_title);
    $templatecontext['page_03_page_subhdimg'] = $theme->settings->page_03_page_subhdimg;
    // Section 1.
    $templatecontext['page_03_s1_enabled'] = $theme->settings->page_03_s1_enabled;
    if ($theme->settings->page_03_s1_enabled) {
        $count = $theme->settings->page_03_s1_count;
        $templatecontext['page_03_s1_count'] = $count;
        for ($i = 1, $j = 0; $i <= $count; $i++, $j++) {
            $page03s1date = "page_03_s1_date{$i}";
            $page03s1title = "page_03_s1_title{$i}";
            $page03s1location = "page_03_s1_location{$i}";
            $page03s1cost = "page_03_s1_cost{$i}";
            $page03s1link = "page_03_s1_link{$i}";
            $templatecontext['page_03_s1'][$j]['date'] = $theme->settings->$page03s1date;
            $templatecontext['page_03_s1'][$j]['title'] = format_string($theme->settings->$page03s1title);
            $templatecontext['page_03_s1'][$j]['location'] = format_string($theme->settings->$page03s1location);
            $templatecontext['page_03_s1'][$j]['cost'] = format_string($theme->settings->$page03s1cost);
            $templatecontext['page_03_s1'][$j]['link'] = $theme->settings->$page03s1link;
            $templatecontext['page_03_s1'][$j]['counter'] = $i;
        }
    }
    // Section 2.
    $templatecontext['page_03_s2_enabled'] = $theme->settings->page_03_s2_enabled;
    // Section 3.
    $templatecontext['page_03_s3_enabled'] = $theme->settings->page_03_s3_enabled;
    if ($theme->settings->page_03_s3_enabled) {
        $templatecontext['page_03_s3_headline'] = format_string($theme->settings->page_03_s3_headline);
        $templatecontext['page_03_s3_header'] = format_string($theme->settings->page_03_s3_header);
        $templatecontext['page_03_s3_maintitle'] = format_string($theme->settings->page_03_s3_maintitle);
        $templatecontext['page_03_s3_caption'] = format_string($theme->settings->page_03_s3_caption);
        $templatecontext['page_03_s3_button'] = format_string($theme->settings->page_03_s3_button);
        $templatecontext['page_03_s3_button_link'] = $theme->settings->page_03_s3_button_link;
    }
    return $templatecontext;
}
/**
 * Block Videos.
 */
function theme_wellko_page_4() {
    $theme = theme_config::load('wellko');
    $templatecontext['page_04_page_title'] = format_string($theme->settings->page_04_page_title);
    $templatecontext['page_04_page_subhdimg'] = $theme->settings->page_04_page_subhdimg;
    $templatecontext['page_04_s1_enabled'] = $theme->settings->page_04_s1_enabled;
    if ($theme->settings->page_04_s1_enabled) {
        $count = $theme->settings->page_04_s1_count;
        if ( $count > 7 ) {
            $count1 = 3;
            $count2 = 7;
            $count3 = $count;
        } else if ( $count > 3 ) {
            $count1 = 3;
            $count2 = $count;
            $count3 = 0;
        } else {
            $count1 = $count;
            $count2 = 0;
            $count3 = 0;
        }
        $categoryarr = array();
        for ($i = 1, $j = 0; $i <= $count; $i++, $j++) {
            $page04s1category = "page_04_s1_category{$i}";
            $categoryarr[$j] = format_string($theme->settings->$page04s1category);
        }
        $arrayctg = array_unique($categoryarr);
        $i = 0;
        foreach ($arrayctg as $field) {
            $templatecontext['page_04_s1_ctg'][$i]['category'] = format_string($field);
            $i++;
        }
        for ($i = 1, $j = 0; $i <= $count1; $i++, $j++) {
            $page04s1category = "page_04_s1_category{$i}";
            $page04s1firsttitle = "page_04_s1_first_title{$i}";
            $page04s1secondtitle = "page_04_s1_second_title{$i}";
            $page04s1link = "page_04_s1_link{$i}";
            $page04s1badge = "page_04_s1_badge{$i}";
            $templatecontext['page_04_s1'][$j]['category'] = format_string($theme->settings->$page04s1category);
            $templatecontext['page_04_s1'][$j]['firsttitle'] = format_string($theme->settings->$page04s1firsttitle);
            $templatecontext['page_04_s1'][$j]['secondtitle'] = format_string($theme->settings->$page04s1secondtitle);
            $templatecontext['page_04_s1'][$j]['linkurl'] = $theme->settings->$page04s1link;
            $templatecontext['page_04_s1'][$j]['badge'] = format_string($theme->settings->$page04s1badge);
            $templatecontext['page_04_s1'][$j]['counter'] = $i;
        }
        for ($i = 4, $j = 0; $i <= $count2; $i++, $j++) {
            $page04s1category = "page_04_s1_category{$i}";
            $page04s1firsttitle = "page_04_s1_first_title{$i}";
            $page04s1secondtitle = "page_04_s1_second_title{$i}";
            $page04s1link = "page_04_s1_link{$i}";
            $page04s1badge = "page_04_s1_badge{$i}";
            $templatecontext['page_04_s1_'][$j]['category'] = format_string($theme->settings->$page04s1category);
            $templatecontext['page_04_s1_'][$j]['firsttitle'] = format_string($theme->settings->$page04s1firsttitle);
            $templatecontext['page_04_s1_'][$j]['secondtitle'] = format_string($theme->settings->$page04s1secondtitle);
            $templatecontext['page_04_s1_'][$j]['linkurl'] = $theme->settings->$page04s1link;
            $templatecontext['page_04_s1_'][$j]['badge'] = format_string($theme->settings->$page04s1badge);
            $templatecontext['page_04_s1_'][$j]['counter'] = $i;
        }
        for ($i = 8, $j = 0; $i <= $count3; $i++, $j++) {
            $page04s1category = "page_04_s1_category{$i}";
            $page04s1firsttitle = "page_04_s1_first_title{$i}";
            $page04s1secondtitle = "page_04_s1_second_title{$i}";
            $page04s1link = "page_04_s1_link{$i}";
            $page04s1badge = "page_04_s1_badge{$i}";
            $templatecontext['page_04_s1__'][$j]['category'] = format_string($theme->settings->$page04s1category);
            $templatecontext['page_04_s1__'][$j]['firsttitle'] = format_string($theme->settings->$page04s1firsttitle);
            $templatecontext['page_04_s1__'][$j]['secondtitle'] = format_string($theme->settings->$page04s1secondtitle);
            $templatecontext['page_04_s1__'][$j]['linkurl'] = $theme->settings->$page04s1link;
            $templatecontext['page_04_s1__'][$j]['badge'] = format_string($theme->settings->$page04s1badge);
            $templatecontext['page_04_s1__'][$j]['counter'] = $i;
        }
    }
    // Section 2.
    $templatecontext['page_04_s2_enabled'] = $theme->settings->page_04_s2_enabled;
    if ($theme->settings->page_04_s2_enabled) {
        $templatecontext['page_04_s2_caption'] = format_string($theme->settings->page_04_s2_caption);
    }
    // Section 3.
    $templatecontext['page_04_s3_enabled'] = $theme->settings->page_04_s3_enabled;
    if ($theme->settings->page_04_s3_enabled) {
        $templatecontext = array_merge($templatecontext, theme_wellko_frontpage_h2_block_4());
    }
    // Section 4.
    $templatecontext['page_04_s4_enabled'] = $theme->settings->page_04_s4_enabled;
    if ($theme->settings->page_04_s4_enabled) {
        $templatecontext['page_04_s4_headline'] = format_string($theme->settings->page_04_s4_headline);
        $templatecontext['page_04_s4_header'] = format_string($theme->settings->page_04_s4_header);
        $templatecontext['page_04_s4_maintitle'] = format_string($theme->settings->page_04_s4_maintitle);
        $templatecontext['page_04_s4_caption'] = format_string($theme->settings->page_04_s4_caption);
        $templatecontext['page_04_s4_button'] = format_string($theme->settings->page_04_s4_button);
        $templatecontext['page_04_s4_button_link'] = $theme->settings->page_04_s4_button_link;
    }
    return $templatecontext;

}
/**
 * Block Services.
 */
function theme_wellko_page_5() {
    $theme = theme_config::load('wellko');
    $templatecontext['page_05_page_title'] = format_string($theme->settings->page_05_page_title);
    $templatecontext['page_05_page_subhdimg'] = $theme->settings->page_05_page_subhdimg;
    // Section 1.
    $templatecontext['page_05_s1_enabled'] = $theme->settings->page_05_s1_enabled;
    if ($theme->settings->page_05_s1_enabled) {
        $count = $theme->settings->page_05_s1_count;
        for ($i = 1, $j = 0; $i <= $count; $i++, $j++) {
            $page05s1title = "page_05_s1_title{$i}";
            $page05s1caption = "page_05_s1_caption{$i}";
            $templatecontext['page_05_s1'][$j]['title'] = format_string($theme->settings->$page05s1title);
            $templatecontext['page_05_s1'][$j]['caption'] = format_string($theme->settings->$page05s1caption);
            $templatecontext['page_05_s1'][$j]['counter'] = $i;
        }
    }
    // Section 2.
    $templatecontext['page_05_s2_enabled'] = $theme->settings->page_05_s2_enabled;
    if ($theme->settings->page_05_s2_enabled) {
        $templatecontext['page_05_s2_headline'] = format_string($theme->settings->page_05_s2_headline);
        $templatecontext['page_05_s2_header'] = format_string($theme->settings->page_05_s2_header);
        $templatecontext['page_05_s2_maintitle'] = format_string($theme->settings->page_05_s2_maintitle);
        $templatecontext['page_05_s2_btna'] = format_string($theme->settings->page_05_s2_btna);
        $templatecontext['page_05_s2_btna_link'] = $theme->settings->page_05_s2_btna_link;
        $templatecontext['page_05_s2_btnb'] = format_string($theme->settings->page_05_s2_btnb);
        $templatecontext['page_05_s2_btnb_link'] = $theme->settings->page_05_s2_btnb_link;
    }
    // Section 3.
    $templatecontext['page_05_s3_enabled'] = $theme->settings->page_05_s3_enabled;
    if ($theme->settings->page_05_s3_enabled) {
        $templatecontext = array_merge($templatecontext, theme_wellko_frontpage_h3_block_6());
    }
    // Section 4.
    $templatecontext['page_05_s4_enabled'] = $theme->settings->page_05_s4_enabled;
    if ($theme->settings->page_05_s4_enabled) {
        $templatecontext['page_05_s4_headline'] = format_string($theme->settings->page_05_s4_headline);
        $templatecontext['page_05_s4_header'] = format_string($theme->settings->page_05_s4_header);
        $templatecontext['page_05_s4_caption'] = format_string($theme->settings->page_05_s4_caption);
        $templatecontext['page_05_s4_button'] = format_string($theme->settings->page_05_s4_button);
        $templatecontext['page_05_s4_button_link'] = $theme->settings->page_05_s4_button_link;
    }
    return $templatecontext;
}
/**
 * Block Teams.
 */
function theme_wellko_page_6() {
    $theme = theme_config::load('wellko');
    $templatecontext['page_06_page_title'] = format_string($theme->settings->page_06_page_title);
    $templatecontext['page_06_page_subhdimg'] = $theme->settings->page_06_page_subhdimg;
    // Section 1.
    $templatecontext['page_06_s1_enabled'] = $theme->settings->page_06_s1_enabled;
    if ($theme->settings->page_06_s1_enabled) {
        $templatecontext = array_merge($templatecontext, theme_wellko_frontpage_h3_block_5());
        $templatecontext = array_merge($templatecontext, theme_wellko_frontpage_h2_block_2());
    }
    // Section 2.
    $templatecontext['page_06_s2_enabled'] = $theme->settings->page_06_s2_enabled;
    if ($theme->settings->page_06_s2_enabled) {
        $templatecontext = array_merge($templatecontext, theme_wellko_frontpage_h1_block_4(11));
    }
    // Section 3.
    $templatecontext['page_06_s3_enabled'] = $theme->settings->page_06_s3_enabled;
    // Section 4.
    $templatecontext['page_06_s4_enabled'] = $theme->settings->page_06_s4_enabled;
    if ($theme->settings->page_06_s4_enabled) {
        $templatecontext['page_06_s4_headline'] = format_string($theme->settings->page_06_s4_headline);
        $templatecontext['page_06_s4_header'] = format_string($theme->settings->page_06_s4_header);
        $templatecontext['page_06_s4_caption'] = format_string($theme->settings->page_06_s4_caption);
        $templatecontext['page_06_s4_button'] = format_string($theme->settings->page_06_s4_button);
        $templatecontext['page_06_s4_button_link'] = $theme->settings->page_06_s4_button_link;
    }
    return $templatecontext;
}
/**
 * Block Pricing.
 */
function theme_wellko_page_7() {
    $theme = theme_config::load('wellko');
    $templatecontext['page_07_page_title'] = format_string($theme->settings->page_07_page_title);
    $templatecontext['page_07_page_subhdimg'] = $theme->settings->page_07_page_subhdimg;
    // Section 1.
    $templatecontext['page_07_s1_enabled'] = $theme->settings->page_07_s1_enabled;
    if ($theme->settings->page_07_s1_enabled) {
        $templatecontext = array_merge($templatecontext, theme_wellko_frontpage_h3_block_6());
    }
    // Section 2.
    $templatecontext['page_07_s2_enabled'] = $theme->settings->page_07_s2_enabled;
    if ($theme->settings->page_07_s2_enabled) {
        $templatecontext = array_merge($templatecontext, theme_wellko_frontpage_h3_block_9());
    }
    // Section 3.
    $templatecontext['page_07_s3_enabled'] = $theme->settings->page_07_s3_enabled;
    if ($theme->settings->page_07_s3_enabled) {
        $templatecontext['page_07_s3_headline'] = format_string($theme->settings->page_07_s3_headline);
        $templatecontext['page_07_s3_header'] = format_string($theme->settings->page_07_s3_header);
        $templatecontext['page_07_s3_caption'] = format_string($theme->settings->page_07_s3_caption);
        $templatecontext['page_07_s3_button'] = format_string($theme->settings->page_07_s3_button);
        $templatecontext['page_07_s3_button_link'] = $theme->settings->page_07_s3_button_link;
    }
    return $templatecontext;
}
/**
 * Block Faqs.
 */
function theme_wellko_page_8() {
    $theme = theme_config::load('wellko');
    $templatecontext['page_08_page_title'] = format_string($theme->settings->page_08_page_title);
    $templatecontext['page_08_page_subhdimg'] = $theme->settings->page_08_page_subhdimg;
    // Section 1.
    $templatecontext['page_08_s1_enabled'] = $theme->settings->page_08_s1_enabled;
    if ($theme->settings->page_08_s1_enabled) {
        $count = $theme->settings->page_08_s1_count;
        $templatecontext['page_08_s1_count'] = $theme->settings->page_08_s1_count;
        $ar = [];
        for ($i = 1, $j = 0; $i <= $count; $i++, $j++) {
            $page08s1ctgry = "page_08_s1_category{$i}";
            $ar[$j] = $theme->settings->$page08s1ctgry;
        }
        $ar = array_unique($ar);
        $say = 0;
        foreach ($ar as $x => $val) {
            $templatecontext['page_08_s1_1'][$say]['ctgry'] = format_string($val);
            $say++;
        }
        for ($i = 1, $j = 0; $i <= $count; $i++, $j++) {
            $page08s1category = "page_08_s1_category{$i}";
            $page08s1title = "page_08_s1_title{$i}";
            $page08s1caption = "page_08_s1_caption{$i}";
            $templatecontext['page_08_s1'][$j]['category'] = format_string($theme->settings->$page08s1category);
            $templatecontext['page_08_s1'][$j]['title'] = format_string($theme->settings->$page08s1title);
            $templatecontext['page_08_s1'][$j]['caption'] = format_string($theme->settings->$page08s1caption);
            $templatecontext['page_08_s1'][$j]['counter'] = $i;
        }
    }
    // Section 2.
    $templatecontext['page_08_s2_enabled'] = $theme->settings->page_08_s2_enabled;
    if ($theme->settings->page_08_s2_enabled) {
        $templatecontext['page_08_s2_caption'] = format_string($theme->settings->page_08_s2_caption);
    }
    // Section 3.
    $templatecontext['page_08_s3_enabled'] = $theme->settings->page_08_s3_enabled;
    if ($theme->settings->page_08_s3_enabled) {
        $templatecontext['page_08_s3_headline'] = format_string($theme->settings->page_08_s3_headline);
        $templatecontext['page_08_s3_header'] = format_string($theme->settings->page_08_s3_header);
        $templatecontext['page_08_s3_button'] = format_string($theme->settings->page_08_s3_button);
        $templatecontext['page_08_s3_button_link'] = $theme->settings->page_08_s3_button_link;
    }
    // Section 4.
    $templatecontext['page_08_s4_enabled'] = $theme->settings->page_08_s4_enabled;
    if ($theme->settings->page_08_s4_enabled) {
        $templatecontext = array_merge($templatecontext, theme_wellko_frontpage_h3_block_9());
    }
    // Section 5.
    $templatecontext['page_08_s5_enabled'] = $theme->settings->page_08_s5_enabled;
    if ($theme->settings->page_08_s5_enabled) {
        $templatecontext['page_08_s5_headline'] = format_string($theme->settings->page_08_s5_headline);
        $templatecontext['page_08_s5_header'] = format_string($theme->settings->page_08_s5_header);
        $templatecontext['page_08_s5_caption'] = format_string($theme->settings->page_08_s5_caption);
        $templatecontext['page_08_s5_button'] = format_string($theme->settings->page_08_s5_button);
        $templatecontext['page_08_s5_button_link'] = $theme->settings->page_08_s5_button_link;
    }
    return $templatecontext;

}
/**
 * Block About me.
 */
function theme_wellko_page_9() {
    $theme = theme_config::load('wellko');
    $templatecontext['page_09_page_title'] = format_string($theme->settings->page_09_page_title);
    $templatecontext['page_09_page_subhdimg'] = $theme->settings->page_09_page_subhdimg;
    // Section 1.
    $templatecontext['page_09_s1_enabled'] = $theme->settings->page_09_s1_enabled;
    if ($theme->settings->page_09_s1_enabled) {
        $templatecontext['page_09_s1_subtitle'] = format_string($theme->settings->page_09_s1_subtitle);
        $templatecontext['page_09_s1_title'] = format_string($theme->settings->page_09_s1_title);
        $templatecontext['page_09_s1_caption'] = format_string($theme->settings->page_09_s1_caption);
        $expset = explode("|", format_string($theme->settings->page_09_s1_four_text));
        $say = 0;
        foreach ($expset as $x => $val) {
            if (isset($val)) {
                $say++;
                $templatecontext['page_09_s1_four_text_'.$say] = format_string($val);
            }
        }
        $expset = explode("|", format_string($theme->settings->page_09_s1_circle_triple));
        $say = 0;
        foreach ($expset as $x => $val) {
            if (isset($val)) {
                $say++;
                $templatecontext['page_09_s1_circle_'.$say] = format_string($val);
            }
        }
        $templatecontext['page_09_s1_button'] = format_string($theme->settings->page_09_s1_button);
        $templatecontext['page_09_s1_button_link'] = $theme->settings->page_09_s1_button_link;
    }
    // Section 2.
    $templatecontext['page_09_s2_enabled'] = $theme->settings->page_09_s2_enabled;
    if ($theme->settings->page_09_s2_enabled) {
        $templatecontext = array_merge($templatecontext, theme_wellko_frontpage_h1_block_2());
    }

    // Section 3.
    $templatecontext['page_09_s3_enabled'] = $theme->settings->page_09_s3_enabled;
    if ($theme->settings->page_09_s3_enabled) {
        $templatecontext['page_09_s3_video_lnk'] = $theme->settings->page_09_s3_video_lnk;
    }

    // Section 4.
    $templatecontext['page_09_s4_enabled'] = $theme->settings->page_09_s4_enabled;
    if ($theme->settings->page_09_s4_enabled) {
        $templatecontext['page_09_s4_subtitle'] = format_string($theme->settings->page_09_s1_subtitle);
        $templatecontext['page_09_s4_title'] = format_string($theme->settings->page_09_s1_title);
        $templatecontext['page_09_s4_header_1'] = format_string($theme->settings->page_09_s4_header_1);
        $templatecontext['page_09_s4_header_2'] = format_string($theme->settings->page_09_s4_header_2);
        $templatecontext['page_09_s4_header_3'] = format_string($theme->settings->page_09_s4_header_2);
        $expset = explode("|", format_string($theme->settings->page_09_s4_circle_triple));
        $say = 0;
        foreach ($expset as $x => $val) {
            if (isset($val)) {
                $say++;
                $templatecontext['page_09_s4_circle_'.$say] = format_string($val);
            }
        }
    }
    // Section 5.
    $templatecontext['page_09_s5_enabled'] = $theme->settings->page_09_s5_enabled;
    if ($theme->settings->page_09_s5_enabled) {
        $templatecontext = array_merge($templatecontext, theme_wellko_frontpage_h2_block_2());
    }

    // Section 6.
    $templatecontext['page_09_s6_enabled'] = $theme->settings->page_09_s6_enabled;
    if ($theme->settings->page_09_s6_enabled) {
        $templatecontext = array_merge($templatecontext, theme_wellko_frontpage_h1_block_7());
    }

    // Section 7.
    $templatecontext['page_09_s7_enabled'] = $theme->settings->page_09_s7_enabled;

    // Section 8.
    $templatecontext['page_09_s8_enabled'] = $theme->settings->page_09_s8_enabled;
    if ($theme->settings->page_09_s8_enabled) {
        $templatecontext['page_09_s8_headline'] = format_string($theme->settings->page_09_s8_headline);
        $templatecontext['page_09_s8_header'] = format_string($theme->settings->page_09_s8_header);
        $templatecontext['page_09_s8_button'] = format_string($theme->settings->page_09_s8_button);
        $templatecontext['page_09_s8_button_link'] = $theme->settings->page_09_s8_button_link;
    }
    return $templatecontext;
}
/**
 * Block Contact me.
 */
function theme_wellko_page_10() {
    $theme = theme_config::load('wellko');
    $templatecontext['page_10_page_title'] = format_string($theme->settings->page_10_page_title);
    $expset = explode("|", format_string($theme->settings->page_10_page_title));
    $say = 0;
    foreach ($expset as $x => $val) {
        if (isset($val)) {
            $say++;
            $templatecontext['page_10_page_title_'.$say] = $val;
        }
    }
    $templatecontext['page_10_page_subhdimg'] = $theme->settings->page_10_page_subhdimg;
    // Section 1.
    $templatecontext['page_10_s1_enabled'] = $theme->settings->page_10_s1_enabled;
    if ($theme->settings->page_10_s1_enabled) {
        $templatecontext['page_10_s1_headline'] = format_string($theme->settings->page_10_s1_headline);
        $templatecontext['page_10_s1_header'] = format_string($theme->settings->page_10_s1_header);
        for ($i = 1, $j = 0; $i <= 2; $i++, $j++) {
            $page10s1maintitle = "page_10_s1_maintitle{$i}";
            $page10s1caption = "page_10_s1_caption{$i}";
            $page10s1button = "page_10_s1_button{$i}";
            $page10s1buttonlink = "page_10_s1_button_link{$i}";
            if ( $i == 1 ) {
                $templatecontext['page_10_s1_maintitle_1'] = format_string($theme->settings->$page10s1maintitle);
                $templatecontext['page_10_s1_caption_1'] = format_string($theme->settings->$page10s1caption);
                $templatecontext['page_10_s1_button_1'] = format_string($theme->settings->$page10s1button);
                $templatecontext['page_10_s1_button_lnk_1'] = $theme->settings->$page10s1buttonlink;
            } else {
                $templatecontext['page_10_s1_maintitle_2'] = format_string($theme->settings->$page10s1maintitle);
                $templatecontext['page_10_s1_caption_2'] = format_string($theme->settings->$page10s1caption);
                $templatecontext['page_10_s1_button_2'] = format_string($theme->settings->$page10s1button);
                $templatecontext['page_10_s1_button_lnk_2'] = $theme->settings->$page10s1buttonlink;
            }
        }
    }
    // Section 2.
    $templatecontext['page_10_s2_enabled'] = $theme->settings->page_10_s2_enabled;
    if ($theme->settings->page_10_s2_enabled) {
        $templatecontext['page_10_s2_headline'] = ($theme->settings->page_10_s2_headline);
        $expset = explode("|", format_string($theme->settings->page_10_s2_headline));
        $say = 0;
        foreach ($expset as $x => $val) {
            if (isset($val)) {
                $say++;
                $templatecontext['page_10_s2_headline_'.$say] = $val;
            }
        }
        $templatecontext['page_10_s2_header'] = ($theme->settings->page_10_s2_header);
        $expset = explode("|", format_string($theme->settings->page_10_s2_header));
        $say = 0;
        foreach ($expset as $x => $val) {
            if (isset($val)) {
                $say++;
                $templatecontext['page_10_s2_header_'.$say] = $val;
            }
        }
        $templatecontext['page_10_s2_three_header'] = ($theme->settings->page_10_s2_three_header);
        $templatecontext['page_10_s2_three_text'] = ($theme->settings->page_10_s2_three_text);
        $templatecontext['page_10_s2_geolocation'] = $theme->settings->page_10_s2_geolocation;
        $expset = explode("|", format_string($theme->settings->page_10_s2_three_header));
        $say = 0;
        foreach ($expset as $x => $val) {
            if (isset($val)) {
                $say++;
                $templatecontext['page_10_s2_three_header_'.$say] = format_string($val);
            }
        }
        $expset = explode("|", format_string($theme->settings->page_10_s2_three_text));
        $say = 0;
        foreach ($expset as $x => $val) {
            if (isset($val)) {
                $say++;
                $templatecontext['page_10_s2_three_text_'.$say] = format_string($val);
            }
        }
        $expset = explode(",", format_string($theme->settings->page_10_s2_geolocation));
        $say = 0;
        foreach ($expset as $x => $val) {
            if (isset($val)) {
                $say++;
                $templatecontext['page_10_s2_geolocation_'.$say] = floatval($val);
            }
        }

    }
    // Section 3.
    $templatecontext['page_10_s3_enabled'] = $theme->settings->page_10_s3_enabled;
    if ($theme->settings->page_10_s3_enabled) {
        $templatecontext['page_10_s3_headline'] = format_string($theme->settings->page_10_s3_headline);
        $expset = explode("|", format_string($theme->settings->page_10_s3_headline));
        $say = 0;
        foreach ($expset as $x => $val) {
            if (isset($val)) {
                $say++;
                $templatecontext['page_10_s3_headline_'.$say] = format_string($val);
            }
        }
        $templatecontext['page_10_s3_header'] = format_string($theme->settings->page_10_s3_header);
        $expset = explode("|", format_string($theme->settings->page_10_s3_header));
        $say = 0;
        foreach ($expset as $x => $val) {
            if (isset($val)) {
                $say++;
                $templatecontext['page_10_s3_header_'.$say] = format_string($val);
            }
        }
        $templatecontext['page_10_s3_button'] = format_string($theme->settings->page_10_s3_button);
        $expset = explode("|", format_string($theme->settings->page_10_s3_button));
        $say = 0;
        foreach ($expset as $x => $val) {
            if (isset($val)) {
                $say++;
                $templatecontext['page_10_s3_button_'.$say] = format_string($val);
            }
        }
        $templatecontext['page_10_s3_button_lnk'] = $theme->settings->page_10_s3_button_lnk;
        $expset = explode("|", format_string($theme->settings->page_10_s3_five_text));
        $say = 0;
        foreach ($expset as $x => $val) {
            if (isset($val)) {
                $say++;
                $templatecontext['page_10_s3_five_text_'.$say] = format_string($val);
            }
        }
    }
    // Section 4.
    $templatecontext['page_10_s4_enabled'] = $theme->settings->page_10_s4_enabled;
    if ($theme->settings->page_10_s4_enabled) {
        $templatecontext['page_10_s4_headline'] = format_string($theme->settings->page_10_s4_headline);
        $templatecontext['page_10_s4_header'] = format_string($theme->settings->page_10_s4_header);
        $templatecontext['page_10_s4_button'] = format_string($theme->settings->page_10_s4_button);
        $templatecontext['page_10_s4_button_lnk'] = $theme->settings->page_10_s4_button_lnk;
    }
    return $templatecontext;
}
/**
 * Block Courses.
 */
function theme_wellko_page_11() {
    $theme = theme_config::load('wellko');
    $templatecontext['page_11_page_title'] = format_string($theme->settings->page_11_page_title);
    $expset = explode("|", format_string($theme->settings->page_11_page_title));
    $say = 0;
    foreach ($expset as $x => $val) {
        if (isset($val)) {
            $say++;
            $templatecontext['page_11_page_title_'.$say] = format_string($val);
        }
    }
    $templatecontext['page_11_page_subhdimg'] = $theme->settings->page_11_page_subhdimg;
    // Section 1.
    $templatecontext['page_11_s1_enabled'] = $theme->settings->page_11_s1_enabled;
    if ($theme->settings->page_11_s1_enabled) {
        $templatecontext = array_merge($templatecontext, theme_wellko_frontpage_h1_block_8($theme->settings->page_11_s1_count));
    }
    // Section 2.
    $templatecontext['page_11_s2_enabled'] = $theme->settings->page_11_s2_enabled;
    if ($theme->settings->page_11_s2_enabled) {
        $templatecontext = array_merge($templatecontext, theme_wellko_frontpage_h1_block_12());
    }
    // Section 3.
    $templatecontext['page_11_s3_enabled'] = $theme->settings->page_11_s3_enabled;
    if ($theme->settings->page_11_s3_enabled) {
        $templatecontext = array_merge($templatecontext, theme_wellko_frontpage_h3_block_9());
    }
    // Section 4.
    $templatecontext['page_11_s4_enabled'] = $theme->settings->page_11_s4_enabled;
    if ($theme->settings->page_11_s4_enabled) {
        $templatecontext['page_11_s4_headline'] = format_string($theme->settings->page_11_s4_headline);
        $templatecontext['page_11_s4_header'] = format_string($theme->settings->page_11_s4_header);
        $templatecontext['page_11_s4_button'] = format_string($theme->settings->page_11_s4_button);
        $templatecontext['page_11_s4_button_lnk'] = $theme->settings->page_11_s4_button_lnk;
    }
    return $templatecontext;
}
/**
 * Block Blog grid.
 */
function theme_wellko_page_12() {
    $theme = theme_config::load('wellko');
    $templatecontext['page_12_page_title'] = format_string($theme->settings->page_12_page_title);
    $templatecontext['page_12_page_subhdimg'] = $theme->settings->page_12_page_subhdimg;
    // Section 1.
    $templatecontext['page_12_s1_enabled'] = $theme->settings->page_12_s1_enabled;
    if ($theme->settings->page_12_s1_enabled) {
        $templatecontext = array_merge($templatecontext, theme_wellko_frontpage_h2_block_9($theme->settings->page_12_s1_count));
    }
    // Section 2.
    $templatecontext['page_12_s2_enabled'] = $theme->settings->page_12_s2_enabled;
    if ($theme->settings->page_12_s2_enabled) {
        $templatecontext['page_12_s2_headline'] = format_string($theme->settings->page_12_s2_headline);
        $templatecontext['page_12_s2_header'] = format_string($theme->settings->page_12_s2_header);
        $templatecontext['page_12_s2_button'] = format_string($theme->settings->page_12_s2_button);
        $templatecontext['page_12_s2_button_lnk'] = $theme->settings->page_12_s2_button_lnk;
    }
    return $templatecontext;
}
/**
 * Block Blog list.
 */
function theme_wellko_page_13() {
    $theme = theme_config::load('wellko');
    $templatecontext['page_13_page_title'] = format_string($theme->settings->page_13_page_title);
    $templatecontext['page_13_page_subhdimg'] = $theme->settings->page_13_page_subhdimg;
    $templatecontext['page_13_page_sidebar_header_1'] = format_string($theme->settings->page_13_page_sidebar_header_1);
    $templatecontext['page_13_page_sidebar_adimg_lnk'] = $theme->settings->page_13_page_sidebar_adimg_lnk;
    $templatecontext['page_13_page_sidebar_header_2'] = format_string($theme->settings->page_13_page_sidebar_header_2);
    // Section 1.
    $templatecontext['page_13_s1_enabled'] = $theme->settings->page_13_s1_enabled;
    if ($theme->settings->page_13_s1_enabled) {
        $templatecontext['page_13_s1_button'] = format_string($theme->settings->page_13_s1_button);
        $templatecontext['page_13_s1_style_1_enabled'] = $theme->settings->page_13_s1_style_1_enabled;
        $templatecontext['page_13_s1_style_2_enabled'] = $theme->settings->page_13_s1_style_2_enabled;
        $templatecontext['page_13_s2_video_link'] = $theme->settings->page_13_s2_video_link;
        $templatecontext['page_13_s1_style_3_enabled'] = $theme->settings->page_13_s1_style_3_enabled;
        $templatecontext['page_13_s1_style_4_enabled'] = $theme->settings->page_13_s1_style_4_enabled;
        $templatecontext = array_merge($templatecontext, theme_wellko_frontpage_h2_block_9($theme->settings->page_13_s1_count));
    }
    // Section 2.
    $templatecontext['page_13_s2_enabled'] = $theme->settings->page_13_s2_enabled;
    if ($theme->settings->page_13_s2_enabled) {
        $templatecontext['page_13_s2_headline'] = format_string($theme->settings->page_13_s2_headline);
        $templatecontext['page_13_s2_header'] = format_string($theme->settings->page_13_s2_header);
        $templatecontext['page_13_s2_button'] = format_string($theme->settings->page_13_s2_button);
        $templatecontext['page_13_s2_button_lnk'] = $theme->settings->page_13_s2_button_lnk;
    }
    $templatecontext = array_merge($templatecontext, theme_wellko_blog_tags(10, 'page_13_s2'));
    return $templatecontext;
}
/**
 * Block Blog details.
 *
 * @param int $blogid blog id.
 */
function theme_wellko_page_14($blogid) {
    $theme = theme_config::load('wellko');
    $templatecontext['page_14_page_title'] = format_string($theme->settings->page_14_page_title);
    $templatecontext['page_14_page_subhdimg'] = $theme->settings->page_14_page_subhdimg;
    // Section 1.
    $templatecontext['page_14_s1_enabled'] = $theme->settings->page_14_s1_enabled;
    if ($theme->settings->page_14_s1_enabled) {
        $templatecontext['page_14_page_sidebar_header_1'] = ($theme->settings->page_14_page_sidebar_header_1);
        $templatecontext['page_14_page_sidebar_adimg_lnk'] = $theme->settings->page_14_page_sidebar_adimg_lnk;
        $templatecontext['page_14_page_sidebar_header_2'] = ($theme->settings->page_14_page_sidebar_header_2);
        $templatecontext['page_14_s1_quote_title'] = ($theme->settings->page_14_s1_quote_title);
        $templatecontext['page_14_s1_quote_author'] = $theme->settings->page_14_s1_quote_author;
        $templatecontext['page_14_s1_cmd_headline'] = ($theme->settings->page_14_s1_cmd_headline);
        $templatecontext['page_14_s1_form_header'] = ($theme->settings->page_14_s1_form_header);
        $templatecontext['page_14_s1_form_button'] = ($theme->settings->page_14_s1_form_button);
        $templatecontext['page_14_s1_form_button_lnk'] = $theme->settings->page_14_s1_form_button_lnk;
        $expset = explode("|", format_string($theme->settings->page_14_s1_form_text));
        $say = 0;
        foreach ($expset as $x => $val) {
            if (isset($val)) {
                $say++;
                $templatecontext['page_14_s1_form_text_'.$say] = $val;
            }
        }
        $templatecontext = array_merge($templatecontext, theme_wellko_frontpage_h2_block_9(3));
        $share = explode("|", $theme->settings->page_14_s1_share);
        $i = 0;
        foreach ($share as $settingval) {
            if (isset($settingval)) {
                $social = explode(",", $settingval);
                $templatecontext['page_14_s1_social'][$i]['social'] = $social[0];
                 $templatecontext['page_14_s1_social'][$i]['social_lnk'] = $social[1];
                if (get_string_manager()->string_exists($social[0], 'theme_wellko')) {
                    $templatecontext['page_14_s1_social'][$i]['social_icon'] = get_string($social[0], 'theme_wellko');
                }
            }
            $i++;
        }
        GLOBAL $DB, $OUTPUT, $PAGE;
        if ($post = $DB->get_record('post', array('id' => $blogid ))) {
            $templatecontext['page_14_s1_subject'] = $post->subject;
            $templatecontext['page_14_s1_summary'] = $post->summary;
            $templatecontext['page_14_s1_created'] = gmdate(" D, d M Y", $post->created);
            $templatecontext['page_14_s1_lastmodified'] = gmdate("d M Y", $post->lastmodified);
            $templatecontext['page_14_s1_postURL'] = new moodle_url('/blog/index.php?entryid='. $post->id);
            $templatecontext['page_14_s1_post_detail_lnk'] = '?blog-details='.$post->id;
            $templatecontext['page_14_s1_imgurl'] = wellko_get_blog_post_image($post->id);
            $templatecontext['page_14_s1_tag'] = $OUTPUT->tag_list(core_tag_tag::get_item_tags('core', 'post', $post->id));
            $templatecontext['page_14_s1_commentscount'] = $DB->count_records('comments', array('itemid' => $post->id));
            if ($user = $DB->get_record('user', array('id' => $post->userid))) {
                $templatecontext['page_14_s1_userURL'] =
                    new moodle_url('/user/profile.php', array('id' => $post->userid ));
                $templatecontext['page_14_s1_team_detail_lnk'] = '?team-details='.$post->userid;
                $templatecontext['page_14_s1_username'] = fullname($user);
                $templatecontext['page_14_s1_user_desc'] = $user->description;
                $userpicture = new user_picture($user);
                $userpicture->size = 160;
                $templatecontext['page_14_s1_userimg'] = $userpicture->get_url($PAGE)->out(false);

                $sql = "SELECT  usdata.*, usfield.shortname";
                $sql = $sql." FROM {user_info_data} usdata";
                $sql = $sql." JOIN {user_info_field} usfield ON usdata.fieldid = usfield.id";
                $sql = $sql." WHERE usdata.userid = ". $post->userid;
                $otherareas = $DB->get_records_sql($sql);
                if (!empty($otherareas)) {
                    foreach ($otherareas as $otherarea) {
                        if ($otherarea->shortname == "userjob" ) {
                            $templatecontext['page_14_s1_user_job'] = $otherarea->data;
                        } else if ( substr($otherarea->shortname, 0, 10) == "usersocial" ) {
                            if (!empty($otherarea->data)) {
                                $exp = explode(',', $otherarea->data);
                                $templatecontext['page_14_s1_'.$otherarea->shortname."link"] = $exp[1];
                                if (get_string_manager()->string_exists($exp[0], 'theme_wellko')) {
                                    $socialmedia = get_string($exp[0], 'theme_wellko');
                                    if (substr($socialmedia, 0, 1) != "[" ) {
                                        $templatecontext['page_14_s1_'.$otherarea->shortname] = $socialmedia;
                                    } else {
                                        $templatecontext['page_14_s1_'.$otherarea->shortname] = "fa fa-question";
                                    }
                                }
                            }
                        }
                    }
                }
            }
            // Comments.
            $comments = $DB->get_records('comments',  array('itemid' => $blogid ));
            if (!empty($comments)) {
                $i = 0;
                foreach ($comments as $comment) {
                    $templatecontext['page_14_s1_comment'][$i]['content'] = $comment->content;
                    $templatecontext['page_14_s1_comment'][$i]['timecreated'] = gmdate("d M Y", $comment->timecreated);
                    $person = $DB->get_record('user', array('id' => $comment->userid));
                    $templatecontext['page_14_s1_comment'][$i]['username'] = fullname($person);
                    $userpicture = new user_picture($person);
                    $userpicture->size = 100;
                    $templatecontext['page_14_s1_comment'][$i]['userimg'] = $userpicture->get_url($PAGE)->out(false);
                    $i++;
                }
            }
        }
        $templatecontext = array_merge($templatecontext, theme_wellko_blog_tags(10, 'page_14_s1'));
    }
    // Section 2.
    $templatecontext['page_14_s2_enabled'] = $theme->settings->page_14_s2_enabled;
    if ($theme->settings->page_14_s2_enabled) {
        $templatecontext['page_14_s2_headline'] = format_string($theme->settings->page_14_s2_headline);
        $templatecontext['page_14_s2_header'] = format_string($theme->settings->page_14_s2_header);
        $templatecontext['page_14_s2_button'] = format_string($theme->settings->page_14_s2_button);
        $templatecontext['page_14_s2_button_lnk'] = $theme->settings->page_14_s2_button_lnk;
    }
    return $templatecontext;
}
/**
 * Block course details.
 *
 * @param int $courseid course id.
 */
function theme_wellko_page_15($courseid) {
    $theme = theme_config::load('wellko');
    $templatecontext['page_15_page_title'] = ($theme->settings->page_15_page_title);
    $templatecontext['page_15_page_subhdimg'] = $theme->settings->page_15_page_subhdimg;
    $templatecontext['page_15_page_enroll_explanation'] = ($theme->settings->page_15_page_enroll_explanation);
    $templatecontext['page_15_page_enroll_button'] = ($theme->settings->page_15_page_enroll_button);
    $templatecontext['page_15_page_sidebar_header'] = ($theme->settings->page_15_page_sidebar_header);
    $templatecontext['page_15_page_sidebar_info_header'] = ($theme->settings->page_15_page_sidebar_info_header);
    $expset = explode("|", format_string($theme->settings->page_15_page_sidebar_info_header));
    $say = 0;
    foreach ($expset as $x => $val) {
        if (isset($val)) {
            $say++;
            $templatecontext['page_15_page_sidebar_info_header_'.$say] = format_string($val);
        }
    }
    // Section 1.
    $templatecontext['page_15_s1_enabled'] = $theme->settings->page_15_s1_enabled;
    if ($theme->settings->page_15_s1_enabled) {
        $templatecontext['page_15_s1_tab'] = ($theme->settings->page_15_s1_tab);
        $templatecontext['page_15_s1_curriculum'] = format_string($theme->settings->page_15_s1_curriculum);
        $templatecontext['page_15_s1_cmd_header'] = format_string($theme->settings->page_15_s1_cmd_header);
        $templatecontext['page_15_s1_form_header'] = format_string($theme->settings->page_15_s1_form_header);
        $templatecontext['page_15_s1_form_button'] = format_string($theme->settings->page_15_s1_form_button);
        $templatecontext['page_15_s1_form_button_lnk'] = $theme->settings->page_15_s1_form_button_lnk;
        $expset = explode("|", format_string($theme->settings->page_15_s1_form_text));
        $say = 0;
        foreach ($expset as $x => $val) {
            if (isset($val)) {
                $say++;
                $templatecontext['page_15_s1_form_text_'.$say] = format_string($val);
            }
        }
        $expset = explode("|", format_string($theme->settings->page_15_s1_tab));
        $say = 0;
        foreach ($expset as $x => $val) {
            if (isset($val)) {
                $say++;
                $templatecontext['page_15_s1_tab_'.$say] = format_string($val);
            }
        }
        GLOBAL  $PAGE, $DB;
        if (!empty($courseid)) {
            $courses = $DB->get_records_sql("SELECT * FROM {course} WHERE  id =".$courseid);
        }
        $j = 0;
        $sql = "SELECT  en.courseid, en.cost, en.currency";
        $sql = $sql." FROM {enrol} en";
        $sql = $sql." WHERE en.courseid = :courseid and en.status = 0 and en.cost != 'NULL'";
        if (!empty($courses)) {
            foreach ($courses as $id => $course) {
                $context = context_course::instance($id);
                $templatecontext['page_15_s1_course_fullname'] = $course->fullname;
                $templatecontext['page_15_s1_course_summary'] = $course->summary;
                $templatecontext['page_15_s1_course_imgurl'] = wellko_get_course_image($id);
                $templatecontext['page_15_s1_course_shortname'] = $course->shortname;
                $templatecontext['page_15_s1_course_update'] = gmdate("M d,Y", $course->timemodified);
                $templatecontext['page_15_s1_course_start_date'] = gmdate("d M Y", $course->startdate);
                $templatecontext['page_15_s1_course_courselink'] = "course/view.php?id=".$id;
                $templatecontext['page_15_s1_course_counter'] = $j + 1;
                $sectiontotal = $DB->count_records('course_sections', array('course' => $id));
                $templatecontext['page_15_s1_course_format'] = $sectiontotal." of ". $course->format;
                $enrol = $DB->get_records_sql($sql, array('courseid' => $id));
                if (empty($enrol)) {
                    $templatecontext['page_15_s1_course_currency'] = get_string('h1_08_block_enrol_free', 'theme_wellko');
                } else {
                    foreach ($enrol as $enrols) {
                        $templatecontext['page_15_s1_course_cost'] = $enrols->cost;
                        $templatecontext['page_15_s1_course_currency'] = $enrols->currency;
                    };
                }
                $role = $theme->settings->h1_08_block_teacher_role;
                $teachers = get_role_users($role, $context);
                if (!empty($teachers)) {
                    foreach ($teachers as $id => $teacher) {
                        $templatecontext['page_15_s1_course_teachername'] = fullname($teacher);
                        $teacher->imagealt = get_string('defaultcourseteacher', 'moodle');
                        $userpicture = new user_picture($teacher);
                        $templatecontext['page_15_s1_course_userpicture'] = $userpicture->get_url($PAGE)->out(false);
                        $templatecontext['page_15_s1_course_userURL'] =
                                new moodle_url('/user/profile.php', array('id' => $teacher->id ));
                        $templatecontext['page_15_s1_team_detail_lnk'] = '?team-details='.$teacher->id;
                    }
                }
                $role = $DB->get_field('role', 'id', array('id' => $theme->settings->page_15_page_enroll_role));
                $students = get_role_users($role, $context);
                $templatecontext['page_15_s1_course_studentscount'] = count($students);
                // Comments.
                $comments = $DB->get_records('comments',  array('contextid' => $context->id));
                if (!empty($comments)) {
                    $i = 0;
                    foreach ($comments as $id => $comment) {
                        $templatecontext['page_15_s1_comment'][$i]['content'] = $comment->content;
                        $templatecontext['page_15_s1_comment'][$i]['timecreated'] = gmdate("d M Y", $comment->timecreated);
                        $person = $DB->get_record('user', array('id' => $comment->userid));
                        $templatecontext['page_15_s1_comment'][$i]['username'] = fullname($person);
                        $userpicture = new user_picture($person);
                        $userpicture->size = 100;
                        $templatecontext['page_15_s1_comment'][$i]['userimg'] = $userpicture->get_url($PAGE)->out(false);
                        $i++;
                    }
                }
                $j++;
            };
        }
    }
    // Section 2.
    $templatecontext['page_15_s2_enabled'] = $theme->settings->page_15_s2_enabled;
    if ($theme->settings->page_15_s2_enabled) {
        $templatecontext['page_15_s2_caption'] = format_string($theme->settings->page_15_s2_caption);
    }
    // Section 3.
    $templatecontext['page_15_s3_enabled'] = $theme->settings->page_15_s3_enabled;
    if ($theme->settings->page_15_s2_enabled) {
        $templatecontext['page_15_s3_headline'] = format_string($theme->settings->page_15_s3_headline);
        $templatecontext['page_15_s3_header'] = format_string($theme->settings->page_15_s3_header);
        $templatecontext = array_merge($templatecontext, theme_wellko_frontpage_h1_block_8(0));
    }

    // Section 4.
    $templatecontext['page_15_s4_enabled'] = $theme->settings->page_15_s4_enabled;
    if ($theme->settings->page_15_s4_enabled) {
        $templatecontext['page_15_s4_headline'] = format_string($theme->settings->page_15_s4_headline);
        $templatecontext['page_15_s4_header'] = format_string($theme->settings->page_15_s4_header);
        $templatecontext['page_15_s4_button'] = format_string($theme->settings->page_15_s4_button);
        $templatecontext['page_15_s4_button_lnk'] = $theme->settings->page_15_s4_button_lnk;
    }

    return $templatecontext;
}
/**
 * Block team details.
 *
 * @param int $userid user id.
 */
function theme_wellko_page_16($userid) {
    $theme = theme_config::load('wellko');
    $templatecontext['page_16_page_title'] = format_string($theme->settings->page_16_page_title);
    $templatecontext['page_16_page_subhdimg'] = $theme->settings->page_16_page_subhdimg;
    // Section 1.
    $templatecontext['page_16_s1_enabled'] = $theme->settings->page_16_s1_enabled;
    if ($theme->settings->page_15_s1_enabled) {
        $templatecontext['page_16_s1_video_link'] = $theme->settings->page_16_s1_video_link;
        $expset = explode("|", format_string($theme->settings->page_16_s1_header_text));
        $say = 0;
        foreach ($expset as $x => $val) {
            if (isset($val)) {
                $say++;
                $templatecontext['page_16_s1_header_text_'.$say] = format_string($val);
            }
        }
        $expset = explode("|", format_string($theme->settings->page_16_s1_tab));
        $say = 0;
        foreach ($expset as $x => $val) {
            if (isset($val)) {
                $say++;
                $templatecontext['page_16_s1_tab_'.$say] = format_string($val);
            }
        }
        GLOBAL  $PAGE, $DB;
        $person = $DB->get_record('user', array('id' => $userid));
        if (!empty($person)) {
            $templatecontext['page_16_s1_username'] = fullname($person);
            $userpicture = new user_picture($person);
            $userpicture->size = 555;
            $templatecontext['page_16_s1_userimg'] = $userpicture->get_url($PAGE)->out(false);
            $templatecontext['page_16_s1_description'] = $person->description;
            $templatecontext['page_16_s1_email'] = $person->email;
            $templatecontext['page_16_s1_address'] = $person->address;
            $templatecontext['page_16_s1_city'] = $person->city;
            $countries = get_string_manager()->get_list_of_countries(true);
            if (isset($countries[$person->country])) {
                // Prefer our localized country names.
                $templatecontext['page_16_s1_country'] = $countries[$person->country];
            }
            $templatecontext['page_16_s1_phone1'] = $person->phone1;
            $templatecontext['page_16_s1_phone2'] = $person->phone2;
            // Social links.
            $sql = "SELECT  usdata.*, usfield.shortname";
            $sql = $sql." FROM {user_info_data} usdata";
            $sql = $sql." JOIN {user_info_field} usfield ON usdata.fieldid = usfield.id";
            $sql = $sql." WHERE usdata.userid = ". $userid;
            $otherareas = $DB->get_records_sql($sql);
            if (!empty($otherareas)) {
                $j = 1;
                foreach ($otherareas as $otherarea) {
                    if ($otherarea->shortname == "userjob" ) {
                        $templatecontext['page_16_s1_user_job'] = $otherarea->data;
                    } else if ( substr($otherarea->shortname, 0, 10) == "usersocial" ) {
                        if (!empty($otherarea->data)) {
                            $exp = explode(',', $otherarea->data);
                            $templatecontext['page_16_s1_'.$otherarea->shortname."link"] = isset($exp[1]) ? $exp[1] : null;
                            if (get_string_manager()->string_exists($exp[0], 'theme_wellko')) {
                                $socialmedia = get_string($exp[0], 'theme_wellko');
                            }
                            if (substr($socialmedia, 0, 1) != "[" ) {
                                $templatecontext['page_16_s1_'.$otherarea->shortname] = $socialmedia;
                            } else {
                                $templatecontext['page_16_s1_'.$otherarea->shortname] = "fa fa-question";
                            }
                        }
                    }
                    $j++;
                }
            }
        }
        $templatecontext = array_merge($templatecontext, theme_wellko_frontpage_h2_block_2());
        $expset = explode("|", format_string($theme->settings->page_16_s1_skill));
        $expset1 = isset($expset[0]) ? $expset[0] : null;
        $expset2 = isset($expset[1]) ? $expset[1] : null;
        $expset3 = isset($expset[2]) ? $expset[2] : null;
        $expset4 = isset($expset[3]) ? $expset[3] : null;
        $skill = explode(",", $expset1);
        if (isset($skill[0]) && isset($skill[1])) {
            $templatecontext['page_16_s1_skill_num_1'] = $skill[0];
            $templatecontext['page_16_s1_skill_txt_1'] = format_string($skill[1]);
        }
        $skill = explode(",", $expset2);
        if (isset($skill[0]) && isset($skill[1])) {
            $templatecontext['page_16_s1_skill_num_2'] = $skill[0];
            $templatecontext['page_16_s1_skill_txt_2'] = format_string($skill[1]);
        }
        $skill = explode(",", $expset3);
        if (isset($skill[0]) && isset($skill[1])) {
            $templatecontext['page_16_s1_skill_num_3'] = $skill[0];
            $templatecontext['page_16_s1_skill_txt_3'] = format_string($skill[1]);
        }
        $skill = explode(",", $expset4);
        if (isset($skill[0]) && isset($skill[1])) {
            $templatecontext['page_16_s1_skill_num_4'] = $skill[0];
            $templatecontext['page_16_s1_skill_txt_4'] = format_string($skill[1]);
        }
    }
    // Section 2.
    $templatecontext['page_16_s2_enabled'] = $theme->settings->page_16_s2_enabled;
    if ($theme->settings->page_16_s2_enabled) {
        $templatecontext['page_16_s2_headline'] = format_string($theme->settings->page_16_s2_headline);
        $templatecontext['page_16_s2_header'] = format_string($theme->settings->page_16_s2_header);
        $templatecontext['page_16_s2_button'] = format_string($theme->settings->page_16_s2_button);
        $templatecontext['page_16_s2_button_lnk'] = $theme->settings->page_16_s2_button_lnk;
    }
    return $templatecontext;
}
/**
 * Block Portfolio grid.
 *
 * @param int $count counter.
 */
function theme_wellko_page_17($count) {
    $theme = theme_config::load('wellko');
    $templatecontext['page_17_page_title'] = format_string($theme->settings->page_17_page_title);
    $templatecontext['page_17_page_subhdimg'] = $theme->settings->page_17_page_subhdimg;
    // Section 1.
    $templatecontext['page_17_s1_enabled'] = $theme->settings->page_17_s1_enabled;
    if ($theme->settings->page_17_s1_enabled) {
        if ($count == 0 ) {
            $count = $theme->settings->page_17_s1_count;
        }
        $y = 0;
        $arr = [];
        for ($i = 1, $j = 0; $i <= $count; $i++, $j++) {
            $page17s1group = "page_17_s1_group{$i}";
            $page17s1category = "page_17_s1_category{$i}";
            $page17s1title = "page_17_s1_title{$i}";
            $page17s1lnk = "page_17_s1_lnk{$i}";
            $expset = explode("|", format_string($theme->settings->$page17s1group));
            $say = 0;
            foreach ($expset as $x => $val) {
                $say++;
                if (isset($val)) {
                    $templatecontext['page_17_s1'][$j]['group'.$say] = format_string($val);
                    $arr[$y] = $val;
                    $y++;
                }
            }
            $templatecontext['page_17_s1'][$j]['category'] = format_string($theme->settings->$page17s1category);
            $templatecontext['page_17_s1'][$j]['title'] = format_string($theme->settings->$page17s1title);
            $templatecontext['page_17_s1'][$j]['link'] = $theme->settings->$page17s1lnk;
            $templatecontext['page_17_s1'][$j]['counter'] = $i;
        }
        $arr = array_unique($arr);
        $say = 0;
        foreach ($arr as $x => $val) {
            $templatecontext['page_17_s1_g'][$say]['group'] = $val;
            $say++;
        }
    }
    // Section 2.
    $templatecontext['page_17_s2_enabled'] = $theme->settings->page_17_s2_enabled;
    if ($theme->settings->page_17_s2_enabled) {
        $templatecontext['page_17_s2_headline'] = format_string($theme->settings->page_17_s2_headline);
        $templatecontext['page_17_s2_header'] = format_string($theme->settings->page_17_s2_header);
        $templatecontext['page_17_s2_button'] = format_string($theme->settings->page_17_s2_button);
        $templatecontext['page_17_s2_button_lnk'] = $theme->settings->page_17_s2_button_lnk;
    }
    return $templatecontext;
}
/**
 * Block Portfolio gallery.
 */
function theme_wellko_page_18() {
    $theme = theme_config::load('wellko');
    $templatecontext['page_18_page_title'] = format_string($theme->settings->page_18_page_title);
    $templatecontext['page_18_page_subhdimg'] = $theme->settings->page_18_page_subhdimg;
    // Section 1.
    $templatecontext['page_18_s1_enabled'] = $theme->settings->page_18_s1_enabled;
    // Section 2.
    $templatecontext['page_18_s2_enabled'] = $theme->settings->page_18_s2_enabled;
    if ($theme->settings->page_18_s2_enabled) {
        $templatecontext['page_18_s2_headline'] = format_string($theme->settings->page_18_s2_headline);
        $templatecontext['page_18_s2_header'] = format_string($theme->settings->page_18_s2_header);
        $templatecontext['page_18_s2_button'] = format_string($theme->settings->page_18_s2_button);
        $templatecontext['page_18_s2_button_lnk'] = $theme->settings->page_18_s2_button_lnk;
        $templatecontext = array_merge($templatecontext, theme_wellko_page_17(0));
    }
    return $templatecontext;
}
/**
 * Block Portfolio Masonry.
 */
function theme_wellko_page_19() {
    $theme = theme_config::load('wellko');
    $templatecontext[] = null;
    $templatecontext['page_19_page_title'] = format_string($theme->settings->page_19_page_title);
    $templatecontext['page_19_page_subhdimg'] = $theme->settings->page_19_page_subhdimg;
    // Section 1.
    $templatecontext['page_19_s1_enabled'] = $theme->settings->page_19_s1_enabled;
    if ($theme->settings->page_19_s1_enabled) {
        $templatecontext['page_19_s1_button'] = format_string($theme->settings->page_19_s1_button);
        $templatecontext['page_19_s1_button_lnk'] = $theme->settings->page_19_s1_button_lnk;
        $templatecontext = array_merge($templatecontext, theme_wellko_page_17(0));
        for ($i = 1, $j = 0; $i <= 9; $i++, $j++) {
            if ($i == 1 || $i == 3 || $i == 4 || $i == 5 || $i == 7) {
                $templatecontext['page_17_s1'][$j]['column'] = "col-lg-4 col-md-6";
            } else if ($i == 2 || $i == 6) {
                $templatecontext['page_17_s1'][$j]['column'] = "col-lg-8 col-md-6";
            } else if ($i == 8 || $i == 9) {
                $templatecontext['page_17_s1'][$j]['column'] = "col-md-6";
            }
        }
    }
    // Section 2.
    $templatecontext['page_19_s2_enabled'] = $theme->settings->page_19_s2_enabled;
    if ($theme->settings->page_19_s2_enabled) {
        $templatecontext['page_19_s2_headline'] = format_string($theme->settings->page_19_s2_headline);
        $templatecontext['page_19_s2_header'] = format_string($theme->settings->page_19_s2_header);
        $templatecontext['page_19_s2_button'] = format_string($theme->settings->page_19_s2_button);
        $templatecontext['page_19_s2_button_lnk'] = $theme->settings->page_19_s2_button_lnk;
    }
    return $templatecontext;
}
/**
 * Block Portfolio detail.
 */
function theme_wellko_page_20() {
    $theme = theme_config::load('wellko');
    $templatecontext['page_20_page_title'] = format_string($theme->settings->page_20_page_title);
    $templatecontext['page_20_page_subhdimg'] = $theme->settings->page_20_page_subhdimg;
    // Section 1.
    $templatecontext['page_20_s1_enabled'] = $theme->settings->page_20_s1_enabled;
    if ($theme->settings->page_20_s1_enabled) {
        $templatecontext['page_20_s1_html'] = $theme->settings->page_20_s1_html;
        $theme->settings->page_17_s1_count = 3;
        $templatecontext = array_merge($templatecontext, theme_wellko_page_17(3));
    }
    // Section 2.
    $templatecontext['page_20_s2_enabled'] = $theme->settings->page_20_s2_enabled;
    if ($theme->settings->page_20_s2_enabled) {
        $templatecontext = array_merge($templatecontext, theme_wellko_frontpage_h2_block_9(3));
    }
    // Section 3.
    $templatecontext['page_20_s3_enabled'] = $theme->settings->page_20_s3_enabled;
    if ($theme->settings->page_20_s3_enabled) {
        $templatecontext = array_merge($templatecontext, theme_wellko_page_17(3));
    }
    // Section 4.
    $templatecontext['page_20_s4_enabled'] = $theme->settings->page_20_s4_enabled;
    if ($theme->settings->page_20_s4_enabled) {
        $templatecontext['page_20_s4_headline'] = format_string($theme->settings->page_20_s4_headline);
        $templatecontext['page_20_s4_header'] = format_string($theme->settings->page_20_s4_header);
        $templatecontext['page_20_s4_button'] = format_string($theme->settings->page_20_s4_button);
        $templatecontext['page_20_s4_button_lnk'] = $theme->settings->page_20_s4_button_lnk;
    }
    return $templatecontext;
}
