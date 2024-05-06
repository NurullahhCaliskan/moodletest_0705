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
 * Transferring wellko block settings to mustache
 *
 * @package   theme_wellko
 * @copyright 2022 ThemesAlmond
 * @author    ThemesAlmond - Developer Team
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Front page, home page three.
// Transferring information from settings to mustache template.

/**
 * Block 1.
 */
function theme_wellko_frontpage_h3_block_1() {
    $theme = theme_config::load('wellko');
    $templatecontext['h3_01_block_title'] = format_string($theme->settings->h3_01_block_title);
    $templatecontext['h3_01_block_countdown'] = $theme->settings->h3_01_block_countdown;
    $templatecontext['h3_01_block_phone'] = $theme->settings->h3_01_block_phone;
    $templatecontext['h3_01_block_phone_link'] = $theme->settings->h3_01_block_phone_link;
    $templatecontext['h3_01_block_email'] = $theme->settings->h3_01_block_email;
    return $templatecontext;
}
/**
 * Block 2.
 */
function theme_wellko_frontpage_h3_block_2() {
    $theme = theme_config::load('wellko');
    $templatecontext['h3_02_block_headline'] = format_string($theme->settings->h3_02_block_headline);
    $templatecontext['h3_02_block_header'] = format_string($theme->settings->h3_02_block_header);
    $templatecontext['h3_02_block_btn'] = format_string($theme->settings->h3_02_block_btn);
    $templatecontext['h3_02_block_placeholder'] = format_string($theme->settings->h3_02_block_placeholder);
    $templatecontext['h3_02_block_btn_link'] = $theme->settings->h3_02_block_btn_link;
    $expset = explode("|", format_string($theme->settings->h3_02_block_three_text));
    $say = 0;
    foreach ($expset as $x => $val) {
        if (isset($val)) {
            $say++;
            $templatecontext['h3_02_block_three_text_'.$say] = $val;
        }
    }
    $expset = explode("|", format_string($theme->settings->h3_02_block_speech));
    $say = 0;
    foreach ($expset as $x => $val) {
        if (isset($val)) {
            $say++;
            $templatecontext['h3_02_block_speech_'.$say] = $val;
        }
    }


    $expset = explode("|", format_string($theme->settings->h3_02_block_headline));
    $say = 0;
    foreach ($expset as $x => $val) {
        if (isset($val)) {
            $say++;
            $templatecontext['h3_02_block_headline_'.$say] = $val;
        }
    }

$expset = explode("|", format_string($theme->settings->h3_02_block_header));
    $say = 0;
    foreach ($expset as $x => $val) {
        if (isset($val)) {
            $say++;
            $templatecontext['h3_02_block_header_'.$say] = $val;
        }
    }
    return $templatecontext;
}
/**
 * Block 3.
 */
function theme_wellko_frontpage_h3_block_3() {
    $theme = theme_config::load('wellko');
    $templatecontext['h3_03_block_headline'] = format_string($theme->settings->h3_03_block_headline);
    $templatecontext['h3_03_block_header'] = format_string($theme->settings->h3_03_block_header);
    $templatecontext['h3_03_block_maintext'] = format_string($theme->settings->h3_03_block_maintext);
    $templatecontext['h3_03_block_btn'] = format_string($theme->settings->h3_03_block_btn);
    $templatecontext['h3_03_block_btn_link'] = $theme->settings->h3_03_block_btn_link;
    $expset = explode("|", format_string($theme->settings->h3_03_block_three_text));
    $say = 0;
    foreach ($expset as $x => $val) {
        if (isset($val)) {
            $say++;
            $templatecontext['h3_03_block_three_text_'.$say] = $val;
        }
    }
    return $templatecontext;
}
/**
 * Block 4.
 */
function theme_wellko_frontpage_h3_block_4() {
    $theme = theme_config::load('wellko');
    $templatecontext['h3_04_block_headline'] = format_string($theme->settings->h3_04_block_headline);
    $templatecontext['h3_04_block_header'] = format_string($theme->settings->h3_04_block_header);
    $count = $theme->settings->h3_04_block_count;
    for ($k = 2, $t = 10, $i = 1, $j = 0; $i <= $count; $t++, $k++, $i++, $j++) {
        $h102blocktitle = "h3_04_block_title{$i}";
        $h102blockcaption = "h3_04_block_caption{$i}";
        $h102blockbuttonlink = "h3_04_block_button_link{$i}";
        $templatecontext['h3_04_block'][$j]['title'] = format_string($theme->settings->$h102blocktitle);
        $templatecontext['h3_04_block'][$j]['caption'] = format_string($theme->settings->$h102blockcaption);
        $templatecontext['h3_04_block'][$j]['buttonurl'] = format_string($theme->settings->$h102blockbuttonlink);
        $templatecontext['h3_04_block'][$j]['counter'] = $i;
        $templatecontext['h3_04_block'][$j]['counter4'] = $k;
        $templatecontext['h3_04_block'][$j]['counter8'] = $t;
    }
    if ($count == 2) {
        $templatecontext['col'] = "col-lg-6";
    } else if ($count == 3) {
        $templatecontext['col'] = "col-lg-4 col-md-6";
    } else {
        $templatecontext['col'] = "col-lg-3 col-md-6";
    }
    return $templatecontext;
}
/**
 * Block 5.
 */
function theme_wellko_frontpage_h3_block_5() {
    $theme = theme_config::load('wellko');
    $templatecontext['h3_05_block_headline'] = format_string($theme->settings->h3_05_block_headline);
    $templatecontext['h3_05_block_header'] = format_string($theme->settings->h3_05_block_header);
$expset = explode("|", format_string($theme->settings->h3_05_block_header));
    $say = 0;
    foreach ($expset as $x => $val) {
        if (isset($val)) {
            $say++;
            $templatecontext['h3_05_block_header_'.$say] = $val;
        }
    }
    $templatecontext['h3_05_block_maintitle'] = format_string($theme->settings->h3_05_block_maintitle);

    $expset = explode("|", format_string($theme->settings->h3_05_block_circle_triple));
    $expset1 = isset($expset[0]) ? $expset[0] : null;
    $expset2 = isset($expset[1]) ? $expset[1] : null;
    $expset3 = isset($expset[2]) ? $expset[2] : null;
    $circle1 = explode(",", $expset1);
    if (isset($circle1[0]) && isset($circle1[1]) && isset($circle1[2])) {
        $templatecontext['h3_05_block_circle_num_1'] = $circle1[0];
        $templatecontext['h3_05_block_circle_txt1_1'] = format_string($circle1[1]);
        $templatecontext['h3_05_block_circle_txt2_1'] = format_string($circle1[2]);
        $templatecontext['h3_05_block_circle_num_1_2'] = $circle1[3];
        $templatecontext['h3_05_block_circle_txt3_1'] = format_string($circle1[4]);
        $templatecontext['h3_05_block_circle_txt4_1'] = format_string($circle1[5]);
    }
    $circle2 = explode(",", $expset2);
    if (isset($circle2[0]) && isset($circle2[1]) && isset($circle2[2])) {
        $templatecontext['h3_05_block_circle_num_2'] = $circle2[0];
        $templatecontext['h3_05_block_circle_txt1_2'] = format_string($circle2[1]);
        $templatecontext['h3_05_block_circle_txt2_2'] = format_string($circle2[2]);
        $templatecontext['h3_05_block_circle_num_2_2'] = $circle2[3];
        $templatecontext['h3_05_block_circle_txt3_2'] = format_string($circle2[4]);
        $templatecontext['h3_05_block_circle_txt4_2'] = format_string($circle2[5]);
    }
    $circle3 = explode(",", $expset3);
    if (isset($circle3[0]) && isset($circle3[1]) && isset($circle3[2])) {
        $templatecontext['h3_05_block_circle_num_3'] = $circle3[0];
        $templatecontext['h3_05_block_circle_txt1_3'] = format_string($circle3[1]);
        $templatecontext['h3_05_block_circle_txt2_3'] = format_string($circle3[2]);
        $templatecontext['h3_05_block_circle_num_3_2'] = $circle3[3];
        $templatecontext['h3_05_block_circle_txt3_3'] = format_string($circle3[4]);
        $templatecontext['h3_05_block_circle_txt4_3'] = format_string($circle3[5]);
    }

   $expset = explode("|", format_string($theme->settings->h3_05_block_headline));
    $say = 0;
    foreach ($expset as $x => $val) {
        if (isset($val)) {
            $say++;
            $templatecontext['h3_05_block_headline_'.$say] = $val;
        }
    }

$expset = explode("|", format_string($theme->settings-> h3_05_block_maintitle));
    $say = 0;
    foreach ($expset as $x => $val) {
        if (isset($val)) {
            $say++;
            $templatecontext['h3_05_block_maintitle_'.$say] = $val;
        }
    }

    return $templatecontext;
}
/**
 * Block 6.
 */
function theme_wellko_frontpage_h3_block_6() {
    $theme = theme_config::load('wellko');
    $templatecontext['h3_06_block_headline'] = format_string($theme->settings->h3_06_block_headline);
    $templatecontext['h3_06_block_header'] = format_string($theme->settings->h3_06_block_header);
    $count = 3;
    for ($i = 1, $j = 0; $i <= $count; $i++, $j++) {
        $h102blocktitle = "h3_06_block_title{$i}";
        $h102blockcaption = "h3_06_block_caption{$i}";
        $h306blockprice = "h3_06_block_price{$i}";
        $h306blocktextfour = "h3_06_block_text_four{$i}";
        $h102blocktitley = "h3_06_block_title_y{$i}";
        $h102blockcaptiony = "h3_06_block_caption_y{$i}";
        $h306blockpricey = "h3_06_block_price_y{$i}";
        $h306blocktextfoury = "h3_06_block_text_four_y{$i}";
        $templatecontext['h3_06_block'][$j]['title_m'] = format_string($theme->settings->$h102blocktitle);
        $templatecontext['h3_06_block'][$j]['caption_m'] = format_string($theme->settings->$h102blockcaption);
        $templatecontext['h3_06_block'][$j]['price_m'] = format_string($theme->settings->$h306blockprice);
        $templatecontext['h3_06_block'][$j]['title_y'] = format_string($theme->settings->$h102blocktitley);
        $templatecontext['h3_06_block'][$j]['caption_y'] = format_string($theme->settings->$h102blockcaptiony);
        $templatecontext['h3_06_block'][$j]['price_y'] = format_string($theme->settings->$h306blockpricey);
        $templatecontext['h3_06_block'][$j]['active_m'] = '';
        $templatecontext['h3_06_block'][$j]['active_y'] = '';
        $expset = explode("|", format_string($theme->settings->$h306blocktextfour));
        $say = 0;
        foreach ($expset as $x => $val) {
            if (isset($val)) {
                $say++;
                $templatecontext['h3_06_block'][$j]['text_four_m_'.$say] = format_string($val);
            }
        }
        $expset = explode("|", format_string($theme->settings->$h306blocktextfoury));
        $say = 0;
        foreach ($expset as $x => $val) {
            if (isset($val)) {
                $say++;
                $templatecontext['h3_06_block'][$j]['text_four_y_'.$say] = $val;
            }
        }
    }
    $templatecontext['h3_06_block'][$theme->settings->h3_06_block_active_m]['active_m'] = 'active';
    $templatecontext['h3_06_block'][$theme->settings->h3_06_block_active_y]['active_y'] = 'active';
    return $templatecontext;
}
/**
 * Block 7.
 */
function theme_wellko_frontpage_h3_block_7() {
    $theme = theme_config::load('wellko');
    $templatecontext['h3_07_block_video_lnk'] = $theme->settings->h3_07_block_video_lnk;
    return $templatecontext;
}
/**
 * Block 8.
 */
function theme_wellko_frontpage_h3_block_8() {
    $theme = theme_config::load('wellko');
    $templatecontext['h3_08_block_caption'] = format_string($theme->settings->h3_08_block_caption);
    return $templatecontext;
}
/**
 * Block 9.
 */
function theme_wellko_frontpage_h3_block_9() {
    $theme = theme_config::load('wellko');
    $templatecontext['h3_09_block_headline'] = format_string($theme->settings->h3_09_block_headline);
    $templatecontext['h3_09_block_header'] = format_string($theme->settings->h3_09_block_header);
    $templatecontext['h3_09_block_btn'] = format_string($theme->settings->h3_09_block_btn);
    $templatecontext['h3_09_block_btn_link'] = $theme->settings->h3_09_block_btn_link;
    $templatecontext['h3_09_block_caption_one'] = format_string($theme->settings->h3_09_block_caption_one);
    $templatecontext['h3_09_block_caption_one_lnk'] = $theme->settings->h3_09_block_caption_one_lnk;
    $templatecontext['h3_09_block_job_one'] = format_string($theme->settings->h3_09_block_job_one);
    $templatecontext['h3_09_block_caption_two'] = format_string($theme->settings->h3_09_block_caption_two);
    $templatecontext['h3_09_block_caption_two_lnk'] = $theme->settings->h3_09_block_caption_two_lnk;
    $templatecontext['h3_09_block_job_two'] = format_string($theme->settings->h3_09_block_job_two);
    return $templatecontext;
}
/**
 * Block 10.
 */
function theme_wellko_frontpage_h3_block_10() {
    $theme = theme_config::load('wellko');
    $templatecontext['h3_10_block_headline'] = format_string($theme->settings->h3_10_block_headline);
    $templatecontext['h3_10_block_header'] = format_string($theme->settings->h3_10_block_header);
    $count = $theme->settings->h3_10_block_count;
    for ($i = 1, $j = 0; $i <= $count; $i++, $j++) {
        $h208blockcomment = "h3_10_block_comment{$i}";
        $templatecontext['h3_10_block'][$j]['comment'] = format_string($theme->settings->$h208blockcomment);
        $templatecontext['h3_10_block'][$j]['counter'] = $i;


    $expset = explode("|", format_string($theme->settings->$h208blockcomment));
    $say = 0;
    foreach ($expset as $x => $val) {
        if (isset($val)) {
            $say++;
            $templatecontext['h3_10_block'][$j]['comment_'.$say] = $val;
        }
    }
    }
	
   $expset = explode("|", format_string($theme->settings-> h3_10_block_headline));
    $say = 0;
    foreach ($expset as $x => $val) {
        if (isset($val)) {
            $say++;
            $templatecontext['h3_10_block_headline_'.$say] = $val;
        }
    }

    $expset = explode("|", format_string($theme->settings-> h3_10_block_header));
    $say = 0;
    foreach ($expset as $x => $val) {
        if (isset($val)) {
            $say++;
            $templatecontext['h3_10_block_header_'.$say] = $val;
        }
    }

    return $templatecontext;
}
/**
 * Block 11.
 */
function theme_wellko_frontpage_h3_block_11() {
    global $DB, $CFG;
    $theme = theme_config::load('wellko');
    $templatecontext['h3_11_block_headline'] = format_string($theme->settings->h3_11_block_headline);
    $templatecontext['h3_11_block_header'] = format_string($theme->settings->h3_11_block_header);
    $templatecontext['h3_11_block_maintitle'] = format_string($theme->settings->h3_11_block_maintitle);
    $count = $theme->settings->h3_11_block_count;
    // SQL Server.
    if ($CFG->dbtype === 'sqlsrv') {
        $sql = "SELECT TOP ". $count ." FROM {post} pt";
    } else {
         $sql = "SELECT * FROM {post} pt";
    }
    if (isloggedin()) {
        $sql = $sql." WHERE pt.publishstate = 'public' or pt.publishstate = 'site'";
    } else {
        $sql = $sql." WHERE pt.publishstate = 'public'";
    }
    $sql = $sql." ORDER BY pt.created DESC";
    if ($CFG->dbtype != 'sqlsrv') {
        $sql = $sql." LIMIT ". $count;
    }
    $posts = $DB->get_records_sql($sql, array());
    if (!empty($posts)) {
        $j = 0;
        $i = 2;
        foreach ($posts as $post) {
            $templatecontext['h3_11_block'][$j]['subject'] = $post->subject;
            $templatecontext['h3_11_block'][$j]['summary'] = $post->summary;
            $templatecontext['h3_11_block'][$j]['created'] = gmdate(" D, d M Y", $post->created);
            $templatecontext['h3_11_block'][$j]['lastmodified'] = gmdate("d M Y", $post->lastmodified);
            $templatecontext['h3_11_block'][$j]['postURL'] = new moodle_url('/blog/index.php?entryid='. $post->id);
            $templatecontext['h3_11_block'][$j]['post_detail_lnk'] = '?blog-details='.$post->id;
            $templatecontext['h3_11_block'][$j]['imgurl'] = wellko_get_blog_post_image($post->id);
            $templatecontext['h3_11_block'][$j]['commentscount'] = $DB->count_records('comments', array('itemid' => $post->id));
            $templatecontext['h3_11_block'][$j]['count'] = $i;
            $i = $i + 2;
            $j++;
        }
    }
	
    $expset = explode("|", format_string($theme->settings-> h3_11_block_headline));
    $say = 0;
    foreach ($expset as $x => $val) {
        if (isset($val)) {
            $say++;
            $templatecontext['h3_11_block_headline_'.$say] = $val;
        }
    }

    $expset = explode("|", format_string($theme->settings-> h3_11_block_header));
    $say = 0;
    foreach ($expset as $x => $val) {
        if (isset($val)) {
            $say++;
            $templatecontext['h3_11_block_header_'.$say] = $val;
        }
    }

    return $templatecontext;
}
/**
 * Block 12.
 */
function theme_wellko_frontpage_h3_block_12() {
    $theme = theme_config::load('wellko');
    $templatecontext['h3_12_block_headline'] = format_string($theme->settings->h3_12_block_headline);
    $templatecontext['h3_12_block_header'] = format_string($theme->settings->h3_12_block_header);
    $templatecontext['h3_12_block_maintitle'] = format_string($theme->settings->h3_12_block_maintitle);
    $templatecontext['h3_12_block_caption'] = format_string($theme->settings->h3_12_block_caption);
    $templatecontext['h3_12_block_button'] = format_string($theme->settings->h3_12_block_button);
    $templatecontext['h3_12_block_button_link'] = $theme->settings->h3_12_block_button_link;

    $expset = explode("|", format_string($theme->settings-> h3_12_block_button));
    $say = 0;
    foreach ($expset as $x => $val) {
        if (isset($val)) {
            $say++;
            $templatecontext['h3_12_block_button_'.$say] = $val;
        }
    }

    $expset = explode("|", format_string($theme->settings-> h3_12_block_header));
    $say = 0;
    foreach ($expset as $x => $val) {
        if (isset($val)) {
            $say++;
            $templatecontext['h3_12_block_header_'.$say] = $val;
        }
    }

    $expset = explode("|", format_string($theme->settings-> h3_12_block_headline));
    $say = 0;
    foreach ($expset as $x => $val) {
        if (isset($val)) {
            $say++;
            $templatecontext['h3_12_block_headline_'.$say] = $val;
        }
    }

    return $templatecontext;
}
