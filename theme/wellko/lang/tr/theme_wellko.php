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
 * Language file.
 *
 * @package   theme_wellko
 * @copyright 2022 ThemesAlmond
 * @author    ThemesAlmond - Developer Team
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advancedsettings'] = 'Advanced settings';
$string['backgroundimage'] = 'Background image';
$string['backgroundimage_desc'] = 'The image to display as a background of the site. The background image you upload here will override the background image in your theme preset files.';
$string['brandcolor'] = 'Brand colour';
$string['brandcolor_desc'] = 'The backcolour.';
$string['bootswatch'] = 'Bootswatch';
$string['bootswatch_desc'] = 'A bootswatch is a set of Bootstrap variables and css to style Bootstrap';
$string['choosereadme'] = 'Wellko is a modern highly-customisable theme.';
$string['currentinparentheses'] = '(current)';
$string['configtitle'] = 'Wellko';
$string['generalsettings'] = 'General settings';
$string['loginbackgroundimage'] = 'Login page background image';
$string['loginbackgroundimage_desc'] = 'The image to display as a background for the login page.';
$string['themesettings'] = 'Theme settings';
$string['themesettingshead'] = 'Wellko Setings';
$string['nobootswatch'] = 'None';
$string['pluginname'] = 'Wellko';
$string['presetfiles'] = 'Additional theme preset files';
$string['presetfiles_desc'] = 'Preset files can be used to dramatically alter the appearance of the theme.';
$string['preset'] = 'Theme preset';
$string['preset_desc'] = 'Pick a preset to broadly change the look of the theme.';
$string['privacy:metadata'] = 'The wellko theme does not store any personal data about any user.';
$string['advancedheading'] = "Advanced Seting";
$string['rawscss'] = 'Raw SCSS';
$string['rawscss_desc'] = 'Use this field to provide SCSS or CSS code which will be injected at the end of the style sheet.';
$string['rawscsspre'] = 'Raw initial SCSS';
$string['rawscsspre_desc'] = 'In this field you can provide initialising SCSS code, it will be injected before everything else. Most of the time you will use this setting to define variables.';
$string['generalheading'] = 'General Setting';
$string['unaddableblocks'] = 'Unneeded blocks';
$string['unaddableblocks_desc'] = 'The blocks specified are not needed when using this theme and will not be listed in the \'Add a block\' menu.';
$string['region-side-pre'] = 'Right';
$string['privacy:metadata:preference:draweropenblock'] = 'The user\'s preference for hiding or showing the drawer with blocks.';
$string['privacy:metadata:preference:draweropenindex'] = 'The user\'s preference for hiding or showing the drawer with course index.';
$string['privacy:metadata:preference:draweropennav'] = 'The user\'s preference for hiding or showing the drawer menu navigation.';
$string['privacy:drawerindexclosed'] = 'The current preference for the index drawer is closed.';
$string['privacy:drawerindexopen'] = 'The current preference for the index drawer is open.';
$string['privacy:drawerblockclosed'] = 'The current preference for the block drawer is closed.';
$string['privacy:drawerblockopen'] = 'The current preference for the block drawer is open.';
$string['privacy:drawernavclosed'] = 'The current preference for the navigation drawer is closed.';
$string['privacy:drawernavopen'] = 'The current preference for the navigation drawer is open.';
$string['totop'] = 'Go to top';
$string['fontimport'] = 'Font @import';
$string['fontimportdesc'] = 'Select the font for the dashboard. if you leave it blank it will use İnter ';
$string['fontfamily'] = 'Font family';
$string['fontfamilydesc'] = 'CSS rules to specify families';
$string['backcolor'] = 'Preloader colour';
$string['backcolor_desc'] = 'Preloader Background colour';
$string['navbarcolor'] = 'Navbar back colour';
$string['navbarcolor_desc'] = 'Navbar Background colour';
$string['preloader'] = 'Preloader image';
$string['preloaderdesc'] = 'Select the pre loader img.
<br><a class="preloader-image-link" href="../theme/wellko/pix/fp/preloader.png">See options</a>';
$string['loginposition'] = 'Login form position';
$string['loginpositiondesc'] = 'Select the login form screen position';
$string['loggedinnot'] = 'log in.';
$string['footerselect'] = 'Dashboard footer';
$string['footerselectdesc'] = 'Select the dashboard form footer style';
// Button settings.
// $string['button'] = 'Button';
// $string['buttonlink'] = '';
// Theme wellko settings !DO NOT DELETE !DO NOT CHANGE.
$string['frontpageend'] = '--End--';
$string['frontpageenddesc'] = '';
$string['frontpagewellko'] = 'Front Page';
// Dashboard choice heading (nav).
$string['dashboardnavchoice'] = 'Dashboard page nav';
$string['dashboardnavchoicedesc'] = 'Select dashboard page nav to display';
// Frontpage choice heading (nav).
$string['frontpagenav'] = 'Front Page Header Choice';
$string['frontpagenavdesc'] = 'Front page navbar settings to display';
$string['frontpagenavchoice'] = 'Front page nav';
$string['frontpagenavchoicedesc'] = 'Select front page nav to display';
$string['frontpagenavlightdark'] = 'Front page light-dark';
$string['frontpagenavlightdarkdesc'] = 'If you chose dark color above, choose "navbar-dark".';
$string['frontpagenavlink'] = 'Front page nav link';
$string['frontpagenavlinkdesc'] = 'Enter theme specific rront page navigation bar links
A custom menu may be configured here. Enter each menu item on a new line with format: menu text, a link URL
(optional, not for a top menu item with sub-items), a tooltip title (optional) and a language code or
comma-separated list of codes (optional, for displaying the line to users of the specified language only),
separated by pipe characters. Lines starting with a hyphen will appear as menu items in the previous top level menu
and ### makes a divider. For example:
<pre>
Courses||english|en
-All courses|course/|english|en
-Course search|course/search.php|english|en
-FAQ|https://example.org/faq|https://example.org|only appears in english|en|_blank

Kurse||German|de
-Alle Kurse|course/|deutsch|de
-Kurssuche|course/search.php|deutsch|de

Cours||French|fr
-Tous les cours|course/|françe|fr
-Recherche de cours|course/search.php|farnçe|fr

Cursos||spanish|es
-Todos los cursos|course/|spanish|es
-Preguntas más frecuentes|https://example.org/pmf|only appears in spanish|es|_self

Mobile app|https://example.org/app|Download our app|en

Documentation|https://doc.themesalmond.com|english|en|_blank
Documentation|https://doc.themesalmond.com|francais|fr|_blank
Dokumentation|https://doc.themesalmond.com|deutsch|de|_blank
Documentación|https://doc.themesalmond.com|español|es|_blank
توثيق|https://doc.themesalmond.com|arabic|ar

</pre>';
$string['frontpagenavlinkdefault'] = '
Home
-Home v1|?home=1
-Home v2|?home=2
-Home v3|?home=3
Pages
-About Us|?page=2
-About Me|?page=9|only appears in english|en
-Events|?page=3|||_blank
-Videos|?page=4
-Services|?page=5
-Team|?page=6
-Team Details|?team-details=5
-Pricing|?page=7
-Testimonials|?page=1
#
-FAQ|?page=8
Courses
-Courses|?page=11
-Course Details|?course-details=7
Blog
-Blog Grid|?page=12
-Blog List|?page=13
-Blog Details|?blog-details=2|only appears in english|en|_blank
Portfolio
-Portfolio Grid|?page=17
-Portfolio Gallery|?page=18
-Portfolio Masonry|?page=19
-Portfolio Details|?page=20
*Contacts|?page=10
*
';

// Frontpage choice HTML.
$string['frontpageheading'] = 'Front Page General';
$string['frontpagedesc'] = 'Front page settings to display';
$string['frontpagechoice'] = 'Select Front Page';
$string['frontpagechoicedesc'] = 'Choose front page design';
// Image path link.
$string['frontpageimglink'] = 'Front page img link';
$string['frontpageimglinkdesc'] = 'You can keep all pictures in a folder without having to enter pictures from block settings.';
// Frontpage home one block.
$string['h1_block'] = 'First front page';
$string['h1_block_heading'] = 'Home page one blocks';
$string['h1_block_desc'] = 'Home page one HTML blocks settings';
// Frontpage block tab.
$string['frontpageblock'] = 'Block';
$string['frontpageblockheading'] = 'Front Page Blocks';
$string['frontpageblockdesc'] = 'Front Page HTML blocks settings';
// Frontpage underline.
$string['underline'] = '<div style="margin-bottom: 10px; border-bottom:3px solid grey;width:100%;"></div>';
// Home page one block 1.
$string['h1_01_block_info'] = '# '.'BLOCK-01 HEADER';
$string['h1_01_block_info_desc'] = 'BLOCK HEADER - Enter the settings for block 1';
$string['h1_01_block_enabled'] = 'Enable';
$string['h1_01_block_enabled_desc'] = 'Enable or disabled block 1 at the your home page';
$string['h1_01_block_ratio'] = 'Ratio';
$string['h1_01_block_ratio_desc'] = 'Ratio of text area to image area.';
$string['h1_01_block_headline'] = 'Headline ';
$string['h1_01_block_headline_desc'] = 'Headline';
$string['h1_01_block_headline_default'] = 'Modern Life';
$string['h1_01_block_header'] = 'Header';
$string['h1_01_block_header_desc'] = 'Header';
$string['h1_01_block_header_default'] = 'Coach School Podcast';
$string['h1_01_block_maintitle'] = 'Main Title';
$string['h1_01_block_maintitle_desc'] = 'Main title';
$string['h1_01_block_maintitle_default'] = 'Sed ut perspiciatis unde omnis iste natus error voluptatem accan tium doloremque laudantium totam rem aperiam';
$string['h1_01_block_btna'] = 'Button-a ';
$string['h1_01_block_btna_desc'] = 'Button-a';
$string['h1_01_block_btna_default'] = 'GET COACH';
$string['h1_01_block_btna_link'] = 'Button-a link ';
$string['h1_01_block_btna_link_desc'] = 'Button-a link';
$string['h1_01_block_btna_link_default'] = '';
$string['h1_01_block_btnb'] = 'Button-b ';
$string['h1_01_block_btnb_desc'] = 'Button-b ';
$string['h1_01_block_btnb_default'] = 'WATCH VIDEOS';
$string['h1_01_block_btnb_link'] = 'Button-b link ';
$string['h1_01_block_btnb_link_desc'] = 'Button-b Link';
$string['h1_01_block_btnb_link_default'] = '';
// Home page one block 2.
$string['h1_02_block_info'] = '* '.'BLOCK-02 FEATURES';
$string['h1_02_block_info_desc'] = 'FEATURES - Enter the settings for block 2';
$string['h1_02_block_enabled'] = 'Enable';
$string['h1_02_block_enabled_desc'] = 'Enable or disabled block 2 at the your home page';
$string['h1_02_block_headline'] = 'Headline';
$string['h1_02_block_headline_desc'] = 'Headline';
$string['h1_02_block_headline_default'] = 'Features';
$string['h1_02_block_header'] = 'Header';
$string['h1_02_block_header_desc'] = 'Header';
$string['h1_02_block_header_default'] = 'We Are Themes';
$string['h1_02_block_count'] = 'Count';
$string['h1_02_block_count_desc'] = 'Select the number of boxes and press the save changes button';
$string['h1_02_block_title'] = 'Title {$a->block}';
$string['h1_02_block_title_desc'] = 'Add a title for your block ';
$string['h1_02_block_title_default'] = 'Exclusive Coach';
$string['h1_02_block_caption'] = 'Caption {$a->block}';
$string['h1_02_block_caption_desc'] = 'Add a caption  for your block ';
$string['h1_02_block_caption_default'] = 'Quis autem vel eum reprehenderit quin eavoluptate';
$string['h1_02_block_button'] = 'Button {$a->block}';
$string['h1_02_block_button_desc'] = 'Add a button for your block ';
$string['h1_02_block_button_default'] = 'Read More ';
$string['h1_02_block_button_link'] = 'URL {$a->block}';
$string['h1_02_block_button_link_desc'] = 'Add a URL for your block ';
// Home page one block 3.
$string['h1_03_block_info'] = '* '.'BLOCK-03 ABOUT';
$string['h1_03_block_info_desc'] = 'ABOUT - Enter the settings for block 3';
$string['h1_03_block_enabled'] = 'Enable';
$string['h1_03_block_enabled_desc'] = 'Enable or disabled block 3 at the your home page';
$string['h1_03_block_subtitle'] = 'Subtitle';
$string['h1_03_block_subtitle_desc'] = 'Subtitle';
$string['h1_03_block_subtitle_default'] = 'WHAT WE PROVIDE';
$string['h1_03_block_title'] = 'Title';
$string['h1_03_block_title_desc'] = 'Title';
$string['h1_03_block_title_default'] = 'We Care About Your Life For Better.';
$string['h1_03_block_caption'] = 'Caption';
$string['h1_03_block_caption_desc'] = 'Add a caption for your block ';
$string['h1_03_block_caption_default'] = 'Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatue velillum';
$string['h1_03_block_header_1'] = 'Header one';
$string['h1_03_block_header_1_desc'] = 'Add a header one for your block ';
$string['h1_03_block_header_1_default'] = 'Master Certified Coach';
$string['h1_03_block_text_1'] = 'Text one';
$string['h1_03_block_text_1_desc'] = 'Add a text one for your block ';
$string['h1_03_block_text_1_default'] = 'Quis autem vel eum iure reprehenderit quein ea voluptate velit esse quam';
$string['h1_03_block_header_2'] = 'Header two';
$string['h1_03_block_header_2_desc'] = 'Add a header two for your block ';
$string['h1_03_block_header_2_default'] = 'Coach Certification Program';
$string['h1_03_block_text_2'] = 'Text two';
$string['h1_03_block_text_2_desc'] = 'Add a text two for your block ';
$string['h1_03_block_text_2_default'] = 'Quis autem vel eum iure reprehenderit quein ea voluptate velit esse quam';
// Home page one block 4.
$string['h1_04_block_info'] = '* '.'BLOCK-04 TEACHER';
$string['h1_04_block_info_desc'] = 'TEACHERS - Enter the settings for block 4';
$string['h1_04_block_enabled'] = 'Enable';
$string['h1_04_block_enabled_desc'] = 'Enable or disabled block 4 at the your home page';
$string['h1_04_block_headline'] = 'Headline';
$string['h1_04_block_headline_desc'] = 'Headline';
$string['h1_04_block_headline_default'] = 'OUR PROFESSIONALS';
$string['h1_04_block_header'] = 'Header';
$string['h1_04_block_header_desc'] = 'Header';
$string['h1_04_block_header_default'] = 'Meet Our Professinoal Team Members';
$string['h1_04_block_maintitle'] = 'Main title';
$string['h1_04_block_maintitle_desc'] = 'Main title';
$string['h1_04_block_maintitle_default'] = 'Teachers';
$string['h1_04_block_total'] = 'Total';
$string['h1_04_block_total_desc'] = 'Show total number of courses and students';
$string['h1_04_block_description'] = 'Description';
$string['h1_04_block_description_desc'] = 'Show user description to page.';
$string['h1_04_block_showrole'] = 'Show Role';
$string['h1_04_block_showrole_desc'] = 'User role to show in block 8';
$string['h1_04_block_count'] = 'Count';
$string['h1_04_block_count_desc'] = 'Number of teachers to show';
$string['h1_04_block_count_default'] = '8';
$string['h1_04_block_tooltipcourse'] = "Teacher's total number of courses";
$string['h1_04_block_tooltipstudents'] = "Teacher's total number of students";
// Home page one block 5.
$string['h1_05_block_info'] = '* '.'BLOCK-05 CTA BOX';
$string['h1_05_block_info_desc'] = 'CTA BOX - Enter the settings for block 5';
$string['h1_05_block_enabled'] = 'Enable';
$string['h1_05_block_enabled_desc'] = 'Enable or disabled block 5 at the your home page';
$string['h1_05_block_headline'] = 'Headline';
$string['h1_05_block_headline_desc'] = 'Headline';
$string['h1_05_block_headline_default'] = 'Our Professionals';
$string['h1_05_block_header'] = 'Header';
$string['h1_05_block_header_desc'] = 'Header';
$string['h1_05_block_header_default'] = 'Do You Want to Transform Your Life For Better ?';
$string['h1_05_block_caption'] = 'Caption';
$string['h1_05_block_caption_desc'] = 'Add a caption for your block 5';
$string['h1_05_block_caption_default'] = 'The Life Coach School Has The Most Amazing Tools And Cutting-Edge Training';
$string['h1_05_block_button'] = 'Button';
$string['h1_05_block_button_desc'] = 'Add a button for your block 5';
$string['h1_05_block_button_default'] = 'Contact Us';
$string['h1_05_block_button_link'] = 'URL';
$string['h1_05_block_button_link_desc'] = 'Add a URL for your block 5';
// Home page one block 6.
$string['h1_06_block_info'] = '* '.'BLOCK-06 VIDEO';
$string['h1_06_block_info_desc'] = 'VIDEO - Enter the settings for block 6';
$string['h1_06_block_enabled'] = 'Enable';
$string['h1_06_block_enabled_desc'] = 'Enable or disabled block 6 at the your home page';
$string['h1_06_block_headline'] = 'Headline';
$string['h1_06_block_headline_desc'] = 'Headline';
$string['h1_06_block_headline_default'] = 'LATEST VIDEO GALLERY';
$string['h1_06_block_header'] = 'Header';
$string['h1_06_block_header_desc'] = 'Header';
$string['h1_06_block_header_default'] = 'We Provide Life-Changing Video Tutorials';
$string['h1_06_block_maintitle'] = 'Main title';
$string['h1_06_block_maintitle_desc'] = 'Main title';
$string['h1_06_block_maintitle_default'] = 'Videos';
$string['h1_06_block_count'] = 'Count';
$string['h1_06_block_count_desc'] = 'Select the number of blogs to display';
$string['h1_06_block_category'] = 'Category {$a->block}';
$string['h1_06_block_category_desc'] = 'Add a category for your block 6';
$string['h1_06_block_first_title'] = 'First Title {$a->block}';
$string['h1_06_block_first_title_desc'] = 'Add a title for your block 6';
$string['h1_06_block_second_title'] = 'Second Title {$a->block}';
$string['h1_06_block_second_title_desc'] = 'Add a title for your block 6';
$string['h1_06_block_link'] = 'Video URL {$a->block}';
$string['h1_06_block_link_desc'] = 'Add a video custom link for your block 6';
$string['h1_06_block_badge'] = 'Badge {$a->block}';
$string['h1_06_block_badge_desc'] = 'Add a video custom badge your block 6';
// Home page one block 7.
$string['h1_07_block_info'] = '* '.'BLOCK-07 TESTIMONIALS';
$string['h1_07_block_info_desc'] = 'TESTIMONIALS - Enter the settings for block 7';
$string['h1_07_block_enabled'] = 'Enable';
$string['h1_07_block_enabled_desc'] = 'Enable or disabled block 7 at the your home page';
$string['h1_07_block_headline'] = 'Headline';
$string['h1_07_block_headline_desc'] = 'Headline';
$string['h1_07_block_headline_default'] = 'OUR TESTIMONIALS';
$string['h1_07_block_header'] = 'Header';
$string['h1_07_block_header_desc'] = 'Header';
$string['h1_07_block_header_default'] = 'What’s Our Clients About Us';
$string['h1_07_block_maintitle'] = 'Main title';
$string['h1_07_block_maintitle_desc'] = 'Main title';
$string['h1_07_block_maintitle_default'] = 'About Us';
$string['h1_07_block_count'] = 'Count';
$string['h1_07_block_count_desc'] = 'Select the number of boxes and press the save changes button';
$string['h1_07_block_name'] = 'Name and surname {$a->block}';
$string['h1_07_block_name_desc'] = 'Name and surname';
$string['h1_07_block_job'] = 'Job {$a->block}';
$string['h1_07_block_job_desc'] = 'Job';
$string['h1_07_block_comment'] = 'Comment {$a->block}';
$string['h1_07_block_comment_desc'] = 'Add a comment  for your block ';
$string['h1_07_block_star'] = 'Star {$a->block}';
$string['h1_07_block_star_desc'] = 'Add a ratings star for your block ';
// Home page one block 8.
$string['h1_08_block_info'] = '* '.'BLOCK-08 COURSE';
$string['h1_08_block_info_desc'] = 'COURSE - Enter the settings for block 8';
$string['h1_08_block_enabled'] = 'Enable';
$string['h1_08_block_enabled_desc'] = 'Enable or disabled block 8 at the your home page';
$string['h1_08_block_headline'] = 'Headline';
$string['h1_08_block_headline_desc'] = 'Headline';
$string['h1_08_block_headline_default'] = 'POPULAR COACH';
$string['h1_08_block_header'] = 'Header';
$string['h1_08_block_header_desc'] = 'Header';
$string['h1_08_block_header_default'] = 'We Provide Professional Life Coachs';
$string['h1_08_block_maintitle'] = 'Main title';
$string['h1_08_block_maintitle_desc'] = 'Main title';
$string['h1_08_block_maintitle_default'] = 'POPULAR COACH';
$string['h1_08_block_teacher_role'] = 'Teacher role';
$string['h1_08_block_teacher_role_desc'] = 'Select teacher role';
$string['h1_08_block_courseid'] = 'Courses id';
$string['h1_08_block_courseid_desc'] = 'Enter the three course IDs you want to appear. If you leave it blank, it will bring up the last updated courses. Example: id = 26 or id = 27 or id = 29';
$string['h1_08_block_enrol_free'] = 'Free';
// Home page one block 9.
$string['h1_09_block_info'] = '* '.'BLOCK-09 SPONSORS';
$string['h1_09_block_info_desc'] = 'SPONSORS - Enter the settings for block 9';
$string['h1_09_block_enabled'] = 'Enable';
$string['h1_09_block_enabled_desc'] = 'Enable or disabled block 9 at the your home page';
// Home page one block 10.
$string['h1_10_block_info'] = '* '.'BLOCK-10 SUBSCRIBE';
$string['h1_10_block_info_desc'] = 'SUBSCRIBE - Enter the settings for block 10';
$string['h1_10_block_enabled'] = 'Enable';
$string['h1_10_block_enabled_desc'] = 'Enable or disabled block 10 at the your home page';
$string['h1_10_block_subtitle'] = 'Subtitle';
$string['h1_10_block_subtitle_desc'] = 'Subtitle';
$string['h1_10_block_subtitle_default'] = 'OUR NEWSLETTERS';
$string['h1_10_block_title'] = 'Title';
$string['h1_10_block_title_desc'] = 'Title';
$string['h1_10_block_title_default'] = 'Get More Every Single Update To Join Our Newsletters';
$string['h1_10_placeholder'] = 'Placeholder';
$string['h1_10_placeholder_desc'] = 'E-mail placeholder ';
$string['h1_10_placeholder_default'] = 'Enter Your Email';
$string['h1_10_button'] = 'Button text';
$string['h1_10_button_desc'] = 'Add a button text for your block';
$string['h1_10_button_default'] = 'Subscribe Now';
$string['h1_10_button_link'] = 'Button link';
$string['h1_10_button_link_desc'] = 'Add a button link for your block ';
$string['h1_10_button_link_default'] = '/../../local/contact/index.php';
$string['h1_10_chk_condition'] = 'Check condition';
$string['h1_10_chk_condition_desc'] = 'Add a check condition for your block ';
$string['h1_10_chk_condition_default'] = 'Get Update Monthly Subscription';
// Home page one block 11.
$string['h1_11_block_info'] = '* '.'BLOCK-11 Why Us';
$string['h1_11_block_info_desc'] = 'Why Us - Enter the settings for block 11';
$string['h1_11_block_enabled'] = 'Enable';
$string['h1_11_block_enabled_desc'] = 'Enable or disabled block 11 at the your home page';
$string['h1_11_block_subtitle'] = 'Subtitle';
$string['h1_11_block_subtitle_desc'] = 'Subtitle';
$string['h1_11_block_subtitle_default'] = 'WHAT WE OFFER';
$string['h1_11_block_title'] = 'Title';
$string['h1_11_block_title_desc'] = 'Title';
$string['h1_11_block_title_default'] = 'People Why Choose Our Coachs';
$string['h1_11_block_header_1'] = 'Header one';
$string['h1_11_block_header_1_desc'] = 'Add a header one for your block ';
$string['h1_11_block_header_1_default'] = 'We Teach You How To Coach Yourself';
$string['h1_11_block_text_1'] = 'Text one';
$string['h1_11_block_text_1_desc'] = 'Add a text one for your block ';
$string['h1_11_block_text_1_default'] = 'Sed ut perspiciatis unde omnis iste natus sit voluptatemec accusantium doloremque laudantium';
$string['h1_11_block_header_2'] = 'Header two';
$string['h1_11_block_header_2_desc'] = 'Add a header two for your block ';
$string['h1_11_block_header_2_default'] = 'We Teach You How To Feel Better';
$string['h1_11_block_text_2'] = 'Text two';
$string['h1_11_block_text_2_desc'] = 'Add a text two for your block ';
$string['h1_11_block_text_2_default'] = 'Sed ut perspiciatis unde omnis iste natus sit voluptatemec accusantium doloremque laudantium';
$string['h1_11_block_header_3'] = 'Header tree';
$string['h1_11_block_header_3_desc'] = 'Add a header tree for your block ';
$string['h1_11_block_header_3_default'] = 'We Teach You How To Take Massive';
$string['h1_11_block_text_3'] = 'Text tree';
$string['h1_11_block_text_3_desc'] = 'Add a text tree for your block ';
$string['h1_11_block_text_3_default'] = 'Sed ut perspiciatis unde omnis iste natus sit voluptatemec accusantium doloremque laudantium';
// Home page one block 12.
$string['h1_12_block_info'] = '* '.'BLOCK-12 PLANE BOX';
$string['h1_12_block_info_desc'] = 'PLANE BOX - Enter the settings for block 12';
$string['h1_12_block_enabled'] = 'Enable';
$string['h1_12_block_enabled_desc'] = 'Enable or disabled block 12 at the your home page';
$string['h1_12_block_caption'] = 'Caption';
$string['h1_12_block_caption_desc'] = 'Caption';
$string['h1_12_block_caption_default'] = 'The Life Coach School Has The Most Amazing Tools And Cutting-Edge Training';
// Second front page.
$string['h2_block'] = 'Second front page';
$string['h2_block_heading'] = 'Home page second';
$string['h2_block_desc'] = 'Home page second HTML blocks settings';
// Home page two block 1.
$string['h2_01_block_info'] = '# '.'BLOCK-01 HEADER';
$string['h2_01_block_info_desc'] = 'BLOCK HEADER - Enter the settings for block 1';
$string['h2_01_block_enabled'] = 'Enable';
$string['h2_01_block_enabled_desc'] = 'Enable or disabled block 1 at the your home page';
$string['h2_01_block_headline'] = 'Headline ';
$string['h2_01_block_headline_desc'] = 'Headline';
$string['h2_01_block_headline_default'] = 'WHAT WE PROVIDE';
$string['h2_01_block_header'] = 'Header';
$string['h2_01_block_header_desc'] = 'Header';
$string['h2_01_block_header_default'] = 'Health Coach Academy';
$string['h2_01_block_maintitle'] = 'Main Title';
$string['h2_01_block_maintitle_desc'] = 'Main title';
$string['h2_01_block_maintitle_default'] = 'Sed ut perspiciatis unde omnis iste natus error voluptatem accan tium doloremque laudantium totam rem aperiam';
$string['h2_01_block_btna'] = 'Button-a ';
$string['h2_01_block_btna_desc'] = 'Button-a';
$string['h2_01_block_btna_default'] = 'GET COACH';
$string['h2_01_block_btna_link'] = 'Button-a link ';
$string['h2_01_block_btna_link_desc'] = 'Button-a link';
$string['h2_01_block_btna_link_default'] = '';
$string['h2_01_block_btnb'] = 'Button-b ';
$string['h2_01_block_btnb_desc'] = 'Button-b ';
$string['h2_01_block_btnb_default'] = 'Learn More';
$string['h2_01_block_btnb_link'] = 'Button-b link ';
$string['h2_01_block_btnb_link_desc'] = 'Button-b Link';
$string['h2_01_block_btnb_link_default'] = '';
$string['h2_01_block_circle_cnter'] = 'Circle counter';
$string['h2_01_block_circle_cnter_desc'] = 'Circle counter';
$string['h2_01_block_circle_cnter_default'] = '89';
$string['h2_01_block_circle_text_1'] = 'Circle text 1';
$string['h2_01_block_circle_text_1_desc'] = 'Circle text 1';
$string['h2_01_block_circle_text_1_default'] = 'Success';
$string['h2_01_block_circle_text_2'] = 'Circle text 2';
$string['h2_01_block_circle_text_2_desc'] = 'Circle text 2';
$string['h2_01_block_circle_text_2_default'] = 'Result';
// Home page two block 2.
$string['h2_02_block_info'] = '* '.'BLOCK-02 COUNTER BOX';
$string['h2_02_block_info_desc'] = 'COUNTER BOX - Enter the settings for block 2';
$string['h2_02_block_enabled'] = 'Enable';
$string['h2_02_block_enabled_desc'] = 'Enable or disabled block 2 at the your home page';
$string['h2_02_block_count'] = 'How many';
$string['h2_02_block_count_desc'] = 'Select the number of boxes and press the save changes button';
$string['h2_02_block_title'] = 'Title {$a->block}';
$string['h2_02_block_title_desc'] = 'Add a title for your block ';
$string['h2_02_block_title_default'] = 'Exclusive Coach';
$string['h2_02_block_counting'] = 'Counting {$a->block}';
$string['h2_02_block_counting_desc'] = 'Add a counting  for your block ';
$string['h2_02_block_counting_default'] = '200';
// Home page two block 3.
$string['h2_03_block_info'] = '* '.'BLOCK-03 Why Us';
$string['h2_03_block_info_desc'] = 'Why Us - Enter the settings for block 3';
$string['h2_03_block_enabled'] = 'Enable';
$string['h2_03_block_enabled_desc'] = 'Enable or disabled block 3 at the your home page';
$string['h2_03_block_subtitle'] = 'Subtitle';
$string['h2_03_block_subtitle_desc'] = 'Subtitle';
$string['h2_03_block_subtitle_default'] = 'WHAT WE OFFER';
$string['h2_03_block_title'] = 'Title';
$string['h2_03_block_title_desc'] = 'Title';
$string['h2_03_block_title_default'] = 'People Why Choose Our Coachs';
$string['h2_03_block_caption'] = 'Caption';
$string['h2_03_block_caption_desc'] = 'Add a caption for your block ';
$string['h2_03_block_caption_default'] = 'Sed ut perspiciatis unde omnis iste natus sit voluptatemec accusantium doloremque laudantium';
$string['h2_03_block_button'] = 'Button';
$string['h2_03_block_button_desc'] = 'Add a button one for your block ';
$string['h2_03_block_button_default'] = 'Learn More';
$string['h2_03_block_button_lnk'] = 'Link';
$string['h2_03_block_button_lnk_desc'] = 'Add a button link one for your block ';
$string['h2_03_block_header_1'] = 'Header one';
$string['h2_03_block_header_1_desc'] = 'Add a header one for your block ';
$string['h2_03_block_header_1_default'] = 'We Teach You How To Coach Yourself';
$string['h2_03_block_header_2'] = 'Header two';
$string['h2_03_block_header_2_desc'] = 'Add a header two for your block ';
$string['h2_03_block_header_2_default'] = 'We Teach You How To Feel Better';
$string['h2_03_block_header_3'] = 'Header tree';
$string['h2_03_block_header_3_desc'] = 'Add a header tree for your block ';
$string['h2_03_block_header_3_default'] = 'We Teach You How To Take Massive';
$string['h2_03_block_header_4'] = 'Header four';
$string['h2_03_block_header_4_desc'] = 'Add a header four for your block ';
$string['h2_03_block_header_4_default'] = 'We Teach You How To Transform Your Life';
// Home page two block 4.
$string['h2_04_block_info'] = '* '.'BLOCK-04 COURSE';
$string['h2_04_block_info_desc'] = 'COURSE - Enter the settings for block 4';
$string['h2_04_block_enabled'] = 'Enable';
$string['h2_04_block_enabled_desc'] = 'Enable or disabled block 4 at the your home page';
$string['h2_04_block_headline'] = 'Headline';
$string['h2_04_block_headline_desc'] = 'Headline';
$string['h2_04_block_headline_default'] = 'POPULAR COACH';
$string['h2_04_block_header'] = 'Header';
$string['h2_04_block_header_desc'] = 'Header';
$string['h2_04_block_header_default'] = 'We Provide Professional Life Coachs';
$string['h2_04_block_maintitle'] = 'Main title';
$string['h2_04_block_maintitle_desc'] = 'Main title';
$string['h2_04_block_maintitle_default'] = 'POPULAR COACH';
$string['h2_04_block_teacher_role'] = 'Teacher role';
$string['h2_04_block_teacher_role_desc'] = 'Select teacher role';
$string['h2_04_block_courseid'] = 'Courses id';
$string['h2_04_block_courseid_desc'] = 'Enter the three course IDs you want to appear. If you leave it blank, it will bring up the last updated courses. Example: id = 26 or id = 27 or id = 29';
$string['h2_04_block_enrol_free'] = 'Free';
// Home page two block 5.
$string['h2_05_block_info'] = '* '.'BLOCK-05 VIDEO QUOTE';
$string['h2_05_block_info_desc'] = 'BLOCK VIDEO QUOTE - Enter the settings for block 5';
$string['h2_05_block_enabled'] = 'Enable';
$string['h2_05_block_enabled_desc'] = 'Enable or disabled block 5 at the your home page';
$string['h2_05_block_headline'] = 'Headline ';
$string['h2_05_block_headline_desc'] = 'Headline';
$string['h2_05_block_headline_default'] = 'ADMISSION GOING ON';
$string['h2_05_block_header'] = 'Header';
$string['h2_05_block_header_desc'] = 'Header';
$string['h2_05_block_header_default'] = 'Find Your Best Coach With Wellko';
$string['h2_05_block_maintitle'] = 'Main Title';
$string['h2_05_block_maintitle_desc'] = 'Main title';
$string['h2_05_block_maintitle_default'] = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudtium totam rem aperiam eaque quae';
$string['h2_05_block_btna'] = 'Button-a ';
$string['h2_05_block_btna_desc'] = 'Button-a';
$string['h2_05_block_btna_default'] = 'Video';
$string['h2_05_block_btna_link'] = 'Button-a link ';
$string['h2_05_block_btna_link_desc'] = 'Button-a link';
$string['h2_05_block_btna_link_default'] = '';
$string['h2_05_block_btnb'] = 'Button-b ';
$string['h2_05_block_btnb_desc'] = 'Button-b ';
$string['h2_05_block_btnb_default'] = 'Ücretsiz Dene';
$string['h2_05_block_btnb_link'] = 'Button-b link ';
$string['h2_05_block_btnb_link_desc'] = 'Button-b Link';
$string['h2_05_block_btnb_link_default'] = '/../../local/contact/index.php';
// Home page two block 6.
$string['h2_06_block_info'] = '* '.'BLOCK-06 FAQS';
$string['h2_06_block_info_desc'] = 'BLOCK FAQS - Enter the settings for block 6';
$string['h2_06_block_enabled'] = 'Enable';
$string['h2_06_block_enabled_desc'] = 'Enable or disabled block 6 at the your home page';
$string['h2_06_block_headline'] = 'Headline ';
$string['h2_06_block_headline_desc'] = 'Headline';
$string['h2_06_block_headline_default'] = 'What You Learn';
$string['h2_06_block_header'] = 'Header';
$string['h2_06_block_header_desc'] = 'Header';
$string['h2_06_block_header_default'] = 'Do You Want to Transform Your Smart Life ?';
$string['h2_06_block_maintitle'] = 'Main Title';
$string['h2_06_block_maintitle_desc'] = 'Main title';
$string['h2_06_block_maintitle_default'] = 'Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariaturSed ut perspiciatis omnis iste natus';
$string['h2_06_block_circle_triple'] = 'Circle count, text';
$string['h2_06_block_circle_triple_desc'] = 'Circle count, text 1, text 2';
$string['h2_06_block_circle_triple_default'] = '89,Success,Result|96,Exclusive,Advisor';
$string['h2_06_block_count'] = 'Count ';
$string['h2_06_block_count_desc'] = 'Select the number of boxes and press the save changes button';
$string['h2_06_block_title'] = 'Title {$a->block}';
$string['h2_06_block_title_desc'] = 'Add a title for your block ';
$string['h2_06_block_title_default'] = 'How to Become a Life Coach';
$string['h2_06_block_caption'] = 'Caption {$a->block}';
$string['h2_06_block_caption_desc'] = 'Add a caption for your block ';
$string['h2_06_block_caption_default'] = 'Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolor emque laudantium totam rem aperiam, eaque ipsa quae abillo inventore veritatis quasi architecto beatae vitae dicta sunt explicabo';
// Home page two block 7.
$string['h2_07_block_info'] = '* '.'BLOCK-07 PLANE BOX';
$string['h2_07_block_info_desc'] = 'PLANE BOX - Enter the settings for block 7';
$string['h2_07_block_enabled'] = 'Enable';
$string['h2_07_block_enabled_desc'] = 'Enable or disabled block 7 at the your home page';
$string['h2_07_block_caption'] = 'Caption';
$string['h2_07_block_caption_desc'] = 'Add a caption for your block';
$string['h2_07_block_caption_default'] = 'The Life Coach School Has The Most Amazing Tools And Cutting-Edge Training';
// Home page two block 8.
$string['h2_08_block_info'] = '* '.'BLOCK-08 TESTIMONIALS';
$string['h2_08_block_info_desc'] = 'TESTIMONIALS - Enter the settings for block 8';
$string['h2_08_block_enabled'] = 'Enable';
$string['h2_08_block_enabled_desc'] = 'Enable or disabled block 8 at the your home page';
$string['h2_08_block_headline'] = 'Headline';
$string['h2_08_block_headline_desc'] = 'Headline';
$string['h2_08_block_headline_default'] = 'Our Testimonials';
$string['h2_08_block_header'] = 'Header';
$string['h2_08_block_header_desc'] = 'Header';
$string['h2_08_block_header_default'] = 'What’s Student Parents Say About Us';
$string['h2_08_block_maintitle'] = 'Main title';
$string['h2_08_block_maintitle_desc'] = 'Main title';
$string['h2_08_block_maintitle_default'] = 'About Us';
$string['h2_08_block_count'] = 'Count';
$string['h2_08_block_count_desc'] = 'Select the number of boxes and press the save changes button';
$string['h2_08_block_name'] = 'Name and surname {$a->block}';
$string['h2_08_block_name_desc'] = 'Name and surname';
$string['h2_08_block_job'] = 'Job {$a->block}';
$string['h2_08_block_job_desc'] = 'Job';
$string['h2_08_block_comment'] = 'Comment {$a->block}';
$string['h2_08_block_comment_desc'] = 'Add a comment  for your block ';
// Home page two block 9.
$string['h2_09_block_info'] = '* '.'BLOCK-09 BLOG';
$string['h2_09_block_info_desc'] = 'BLOG - Enter the settings for block 9';
$string['h2_09_block_enabled'] = 'Enable';
$string['h2_09_block_enabled_desc'] = 'Enable or disabled block 9 at the your home page';
$string['h2_09_block_headline'] = 'Headline';
$string['h2_09_block_headline_desc'] = 'Headline';
$string['h2_09_block_headline_default'] = 'News & Blog';
$string['h2_09_block_header'] = 'Header';
$string['h2_09_block_header_desc'] = 'Header';
$string['h2_09_block_header_default'] = 'Get Every Coach News Articles & Tips';
$string['h2_09_block_maintitle'] = 'Main title';
$string['h2_09_block_maintitle_desc'] = 'Main title';
$string['h2_09_block_maintitle_default'] = 'Main title';
$string['h2_09_block_count'] = 'Count';
$string['h2_09_block_count_desc'] = 'Select the number of boxes and press the save changes button';
// Third front page.
$string['h3_block'] = 'Third front page';
$string['h3_block_heading'] = 'Home page third';
$string['h3_block_desc'] = 'Home page third HTML blocks settings';
// Home page three block 1 top title.
$string['h3_01_block_info'] = '# '.'BLOCK-01 TOP TITLE';
$string['h3_01_block_info_desc'] = 'TOP TITLE - Enter the settings for top title';
$string['h3_01_block_enabled'] = 'Enable';
$string['h3_01_block_enabled_desc'] = 'Enable or disabled aside at the your home page';
$string['h3_01_block_title'] = 'Text';
$string['h3_01_block_title_desc'] = 'Text';
$string['h3_01_block_title_default'] = 'Admission Going On, Hurry To Enroll Now';
$string['h3_01_block_countdown'] = 'Count down';
$string['h3_01_block_countdown_desc'] = 'Block count down add a block';
$string['h3_01_block_countdown_default'] = '2023/09/01';
$string['h3_01_block_phone'] = 'Phone number';
$string['h3_01_block_phone_desc'] = 'Block phone number add a block';
$string['h3_01_block_phone_default'] = 'Call : 012(345) 67 89';
$string['h3_01_block_phone_link'] = 'Phone number link';
$string['h3_01_block_phone_link_desc'] = 'Block phone number link add a block';
$string['h3_01_block_phone_link_default'] = 'tel:0123456789';
$string['h3_01_block_email'] = 'eMail';
$string['h3_01_block_email_desc'] = 'eMail';
$string['h3_01_block_email_default'] = 'example@example.com';
// Home page three block 2.
$string['h3_02_block_info'] = '* '.'BLOCK-02 HEADER';
$string['h3_02_block_info_desc'] = 'BLOCK HEADER - Enter the settings for block 2';
$string['h3_02_block_enabled'] = 'Enable';
$string['h3_02_block_enabled_desc'] = 'Enable or disabled block 2 at the your home page';
$string['h3_02_block_headline'] = 'Headline ';
$string['h3_02_block_headline_desc'] = 'Headline';
$string['h3_02_block_headline_default'] = 'Kendiniz İçin En İyi';
$string['h3_02_block_header'] = 'Header';
$string['h3_02_block_header_desc'] = 'Header';
$string['h3_02_block_header_default'] = 'Koçu Bulun';
$string['h3_02_block_placeholder'] = 'Placeholder';
$string['h3_02_block_placeholder_desc'] = 'Placeholder';
$string['h3_02_block_placeholder_default'] = 'Search Coach';
$string['h3_02_block_btn'] = 'Button';
$string['h3_02_block_btn_desc'] = 'Button';
$string['h3_02_block_btn_default'] = 'Search now';
$string['h3_02_block_btn_link'] = 'Button link ';
$string['h3_02_block_btn_link_desc'] = 'Button link';
$string['h3_02_block_btn_link_default'] = 'course/search.php';
$string['h3_02_block_three_text'] = 'Three Text';
$string['h3_02_block_three_text_desc'] = 'Three Text';
$string['h3_02_block_three_text_default'] = 'Health Coach|Life Coach|Business Coach';
$string['h3_02_block_speech'] = 'Speech bubble';
$string['h3_02_block_speech_desc'] = 'Speech bubble';
$string['h3_02_block_speech_default'] = '89|% Success|We Care Your|Business';
// Home page three block 3.
$string['h3_03_block_info'] = '* '.'BLOCK-03 ABOUT US';
$string['h3_03_block_info_desc'] = 'ABOUT US - Enter the settings for block 3';
$string['h3_03_block_enabled'] = 'Enable';
$string['h3_03_block_enabled_desc'] = 'Enable or disabled block 3 at the your home page';
$string['h3_03_block_headline'] = 'Headline ';
$string['h3_03_block_headline_desc'] = 'Headline';
$string['h3_03_block_headline_default'] = 'WHO WE ARE';
$string['h3_03_block_header'] = 'Header';
$string['h3_03_block_header_desc'] = 'Header';
$string['h3_03_block_header_default'] = 'We Care About Your Business Plan.';
$string['h3_03_block_maintext'] = 'Main text';
$string['h3_03_block_maintext_desc'] = 'Main text';
$string['h3_03_block_maintext_default'] = 'Quis autem vel eum iure reprehenderit qui in ea voluptate esse quam nihil molestiae conseq uaturvel illum qui dolorem eum fugiat quo voluptas nulla pariatur';
$string['h3_03_block_three_text'] = 'Three Text';
$string['h3_03_block_three_text_desc'] = 'Three Text';
$string['h3_03_block_three_text_default'] = 'Business Consulting|Career Development|Financial Solutions';
$string['h3_03_block_btn'] = 'Button';
$string['h3_03_block_btn_desc'] = 'Button';
$string['h3_03_block_btn_default'] = 'Learn more';
$string['h3_03_block_btn_link'] = 'Button link ';
$string['h3_03_block_btn_link_desc'] = 'Button link';
$string['h3_03_block_btn_link_default'] = '?page=2';
// Home page three block 4.
$string['h3_04_block_info'] = '* '.'BLOCK-04 FEATURES';
$string['h3_04_block_info_desc'] = 'FEATURES - Enter the settings for block 4';
$string['h3_04_block_enabled'] = 'Enable';
$string['h3_04_block_enabled_desc'] = 'Enable or disabled block 4 at the your home page';
$string['h3_04_block_headline'] = 'Headline';
$string['h3_04_block_headline_desc'] = 'Headline';
$string['h3_04_block_headline_default'] = 'WHAT WE OFFER';
$string['h3_04_block_header'] = 'Header';
$string['h3_04_block_header_desc'] = 'Header';
$string['h3_04_block_header_default'] = 'We Provide Professional Business Solutions.';
$string['h3_04_block_count'] = 'Count';
$string['h3_04_block_count_desc'] = 'Select the number of boxes and press the save changes button';
$string['h3_04_block_title'] = 'Title {$a->block}';
$string['h3_04_block_title_desc'] = 'Add a title for your block ';
$string['h3_04_block_title_default'] = 'Exclusive Coach';
$string['h3_04_block_caption'] = 'Caption {$a->block}';
$string['h3_04_block_caption_desc'] = 'Add a caption  for your block ';
$string['h3_04_block_caption_default'] = 'Quis autem vel eum reprehenderit quin eavoluptate';
$string['h3_04_block_button_link'] = 'URL {$a->block}';
$string['h3_04_block_button_link_desc'] = 'Add a URL for your block ';
$string['h3_04_block_button_link_default'] = 'page=services';
// Home page three block 5.
$string['h3_05_block_info'] = '* '.'BLOCK-05 SKILLS';
$string['h3_05_block_info_desc'] = 'BLOCK SKILLS - Enter the settings for block 5';
$string['h3_05_block_enabled'] = 'Enable';
$string['h3_05_block_enabled_desc'] = 'Enable or disabled block 5 at the your home page';
$string['h3_05_block_headline'] = 'Headline ';
$string['h3_05_block_headline_desc'] = 'Headline';
$string['h3_05_block_headline_default'] = 'OUR SKILLS';
$string['h3_05_block_header'] = 'Header';
$string['h3_05_block_header_desc'] = 'Header';
$string['h3_05_block_header_default'] = 'We re Awards Winning Coach Academy';
$string['h3_05_block_maintitle'] = 'Main Title';
$string['h3_05_block_maintitle_desc'] = 'Main title';
$string['h3_05_block_maintitle_default'] = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.';
$string['h3_05_block_circle_triple'] = 'Circle count, text';
$string['h3_05_block_circle_triple_desc'] = 'Circle count, text 1, text 2';
$string['h3_05_block_circle_triple_default'] = '89,Business,Consulting|69,Health,Coaching|96,Marketing,Strategy';
// Home page three block 6.
$string['h3_06_montly'] = 'MONTLY';
$string['h3_06_block_info'] = '* '.'BLOCK-06 PRICING';
$string['h3_06_block_info_desc'] = 'BLOCK PRICING - Enter the settings for block 6';
$string['h3_06_block_enabled'] = 'Enable';
$string['h3_06_block_enabled_desc'] = 'Enable or disabled block 6 at the your home page';
$string['h3_06_block_headline'] = 'Headline ';
$string['h3_06_block_headline_desc'] = 'Headline';
$string['h3_06_block_headline_default'] = 'PRICING PLAN';
$string['h3_06_block_header'] = 'Header';
$string['h3_06_block_header_desc'] = 'Header';
$string['h3_06_block_header_default'] = 'Simple Pricing Plan For Business Coach';
$string['h3_06_block_active_m'] = 'Montly active';
$string['h3_06_block_active_m_desc'] = 'Montly active plan select';
$string['h3_06_block_active_y'] = 'Yearly active';
$string['h3_06_block_active_y_desc'] = 'Yearly active plan select';
$string['h3_06_block_title'] = 'Plan {$a->block}';
$string['h3_06_block_title_desc'] = 'Add a plan for your block ';
$string['h3_06_block_title_default'] = 'Basic Plan';
$string['h3_06_block_caption'] = 'Caption {$a->block}';
$string['h3_06_block_caption_desc'] = 'Add a caption  for your block ';
$string['h3_06_block_caption_default'] = 'Quis autem veleum iure reprehenderit qui in ea voluptate velit esse';
$string['h3_06_block_price'] = 'Price {$a->block}';
$string['h3_06_block_price_desc'] = 'Add a price for your block ';
$string['h3_06_block_text_four'] = 'Explanation {$a->block}';
$string['h3_06_block_text_four_desc'] = 'Add a text for your block ';
$string['h3_06_block_text_four_default'] = 'Business Consulting|Professional Trainings|Video Tutorials|Marketing Strategy';
$string['h3_06_yearly'] = 'YEARLY';
$string['h3_06_block_title_y'] = 'Plan {$a->block}';
$string['h3_06_block_title_y_desc'] = 'Add a plan for your block ';
$string['h3_06_block_title_y_default'] = 'Basic Plan';
$string['h3_06_block_caption_y'] = 'Caption {$a->block}';
$string['h3_06_block_caption_y_desc'] = 'Add a caption  for your block ';
$string['h3_06_block_caption_y_default'] = 'Quis autem veleum iure reprehenderit qui in ea voluptate velit esse';
$string['h3_06_block_price_y'] = 'Price {$a->block}';
$string['h3_06_block_price_y_desc'] = 'Add a price for your block ';
$string['h3_06_block_text_four_y'] = 'Explanation {$a->block}';
$string['h3_06_block_text_four_y_desc'] = 'Add a text for your block ';
$string['h3_06_block_text_four_y_default'] = 'Business Consulting|Professional Trainings|Video Tutorials|Marketing Strategy';
// Home page three block 7.
$string['h3_07_block_info'] = '* '.'BLOCK-07 SINGLE VIDEO';
$string['h3_07_block_info_desc'] = 'SINGLE VIDEO - Enter the settings for block 7';
$string['h3_07_block_enabled'] = 'Enable';
$string['h3_07_block_enabled_desc'] = 'Enable or disabled block 7 at the your home page';
$string['h3_07_block_video_lnk'] = 'Video link ';
$string['h3_07_block_video_lnk_desc'] = 'Video link add';
$string['h3_07_block_video_lnk_default'] = '';
// Home page three block 8.
$string['h3_08_block_info'] = '* '.'BLOCK-08 PLANE BOX';
$string['h3_08_block_info_desc'] = 'PLANE BOX - Enter the settings for block 8';
$string['h3_08_block_enabled'] = 'Enable';
$string['h3_08_block_enabled_desc'] = 'Enable or disabled block 8 at the your home page';
$string['h3_08_block_caption'] = 'Caption ';
$string['h3_08_block_caption_desc'] = 'Caption add';
$string['h3_08_block_caption_default'] = 'The Life Coach School Has The Most Amazing Tools And Cutting-Edge Training';
// Home page three block 9.
$string['h3_09_block_info'] = '* '.'BLOCK-09 PORTFOLIO';
$string['h3_09_block_info_desc'] = 'PORTFOLIO - Enter the settings for block 9';
$string['h3_09_block_enabled'] = 'Enable';
$string['h3_09_block_enabled_desc'] = 'Enable or disabled block 9 at the your home page';
$string['h3_09_block_headline'] = 'Headline ';
$string['h3_09_block_headline_desc'] = 'Headline';
$string['h3_09_block_headline_default'] = 'PROJECT GALLERY';
$string['h3_09_block_header'] = 'Header';
$string['h3_09_block_header_desc'] = 'Header';
$string['h3_09_block_header_default'] = 'We Have 34520+ Project Successfully Done';
$string['h3_09_block_btn'] = 'Button';
$string['h3_09_block_btn_desc'] = 'Portfolio button';
$string['h3_09_block_btn_default'] = 'View All Project';
$string['h3_09_block_btn_link'] = 'Button link';
$string['h3_09_block_btn_link_desc'] = 'Portfolio button';
$string['h3_09_block_btn_link_default'] = '?page=portfolio-grid';
$string['h3_09_block_caption_one'] = 'Caption one';
$string['h3_09_block_caption_one_desc'] = 'Portfolio add caption one';
$string['h3_09_block_caption_one_default'] = 'How To Gain Knowledge';
$string['h3_09_block_caption_one_lnk'] = 'Caption one link';
$string['h3_09_block_caption_one_lnk_desc'] = 'Portfolio add caption two link';
$string['h3_09_block_caption_one_lnk_default'] = '?page=portfolio-grid';
$string['h3_09_block_job_one'] = 'Job one';
$string['h3_09_block_job_one_desc'] = 'Portfolio add job one';
$string['h3_09_block_job_one_default'] = 'Business Coach';
$string['h3_09_block_caption_two'] = 'Caption two';
$string['h3_09_block_caption_two_desc'] = 'Portfolio add caption two';
$string['h3_09_block_caption_two_default'] = 'Online Consulting Tutorials';
$string['h3_09_block_caption_two_lnk'] = 'Caption two link';
$string['h3_09_block_caption_two_lnk_desc'] = 'Portfolio add caption two link';
$string['h3_09_block_caption_two_lnk_default'] = '?page=portfolio-grid';
$string['h3_09_block_job_two'] = 'Job two';
$string['h3_09_block_job_two_desc'] = 'Portfolio add job two';
$string['h3_09_block_job_two_default'] = 'Business Coach';
// Home page three block 10.
$string['h3_10_block_info'] = '* '.'BLOCK-10 TESTIMONIALS';
$string['h3_10_block_info_desc'] = 'TESTIMONIALS - Enter the settings for block 10';
$string['h3_10_block_enabled'] = 'Enable';
$string['h3_10_block_enabled_desc'] = 'Enable or disabled block 10 at the your home page';
$string['h3_10_block_headline'] = 'Headline';
$string['h3_10_block_headline_desc'] = 'Headline';
$string['h3_10_block_headline_default'] = 'Our Testimonials';
$string['h3_10_block_header'] = 'Header';
$string['h3_10_block_header_desc'] = 'Header';
$string['h3_10_block_header_default'] = 'What’s Student Parents Say About Us';
$string['h3_10_block_count'] = 'Count';
$string['h3_10_block_count_desc'] = 'Select the number of boxes and press the save changes button';
$string['h3_10_block_comment'] = 'Comment {$a->block}';
$string['h3_10_block_comment_desc'] = 'Add a comment  for your block ';
$string['h3_10_block_comment_default'] = 'Sed ut perspic unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam eaque quae inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.';
// Home page three block 11.
$string['h3_11_block_info'] = '* '.'BLOCK-11 BLOG';
$string['h3_11_block_info_desc'] = 'BLOG - Enter the settings for block 11';
$string['h3_11_block_enabled'] = 'Enable';
$string['h3_11_block_enabled_desc'] = 'Enable or disabled block 11 at the your home page';
$string['h3_11_block_headline'] = 'Headline';
$string['h3_11_block_headline_desc'] = 'Headline';
$string['h3_11_block_headline_default'] = 'News & Blog';
$string['h3_11_block_header'] = 'Header';
$string['h3_11_block_header_desc'] = 'Header';
$string['h3_11_block_header_default'] = 'Get Every Coach News Articles & Tips';
$string['h3_11_block_maintitle'] = 'Main title';
$string['h3_11_block_maintitle_desc'] = 'Main title';
$string['h3_11_block_maintitle_default'] = 'Main title';
$string['h3_11_block_count'] = 'Count';
$string['h3_11_block_count_desc'] = 'Select the number of boxes and press the save changes button';
// Home page three block 12.
$string['h3_12_block_info'] = '* '.'BLOCK-12 CTA BOX';
$string['h3_12_block_info_desc'] = 'CTA BOX - Enter the settings for block 12';
$string['h3_12_block_enabled'] = 'Enable';
$string['h3_12_block_enabled_desc'] = 'Enable or disabled block 12 at the your home page';
$string['h3_12_block_headline'] = 'Headline';
$string['h3_12_block_headline_desc'] = 'Headline';
$string['h3_12_block_headline_default'] = 'Our Professionals';
$string['h3_12_block_header'] = 'Header';
$string['h3_12_block_header_desc'] = 'Header';
$string['h3_12_block_header_default'] = 'Do You Want to Transform Your Life For Better ?';
$string['h3_12_block_maintitle'] = 'Main title';
$string['h3_12_block_maintitle_desc'] = 'Main title';
$string['h3_12_block_maintitle_default'] = 'Wellko';
$string['h3_12_block_caption'] = 'Caption';
$string['h3_12_block_caption_desc'] = 'Add a caption for your block 12';
$string['h3_12_block_caption_default'] = 'The Life Coach School Has The Most Amazing Tools And Cutting-Edge Training';
$string['h3_12_block_button'] = 'Button';
$string['h3_12_block_button_desc'] = 'Add a button for your block 12';
$string['h3_12_block_button_default'] = 'Contact Us';
$string['h3_12_block_button_link'] = 'URL';
$string['h3_12_block_button_link_desc'] = 'Add a URL for your block 12';
// Four front page.
$string['h4_block'] = 'Four front page';
$string['h4_block_heading'] = 'Home page four';
$string['h4_block_desc'] = 'Home page four HTML blocks settings';
// Home page four block 1 News Box.
$string['h4_01_block_info'] = '# '.'BLOCK-01 NEWS BOX';
$string['h4_01_block_info_desc'] = 'NEWS BOX - Enter the settings for news box';
$string['h4_01_block_enabled'] = 'Enable';
$string['h4_01_block_enabled_desc'] = 'Enable or disabled aside at the your home page';
$string['h4_01_block_header'] = 'Header';
$string['h4_01_block_header_desc'] = 'Header';
$string['h4_01_block_maintitle'] = 'Main title';
$string['h4_01_block_maintitle_desc'] = 'Main title';
$string['h4_01_block_imgheight'] = 'Image height';
$string['h4_01_block_imgheight_desc'] = 'Image height';
$string['h4_01_block_count'] = 'Count down';
$string['h4_01_block_count_desc'] = 'Block count down add a block';
$string['h4_01_block_headline'] = 'Headline {$a->block}';
$string['h4_01_block_headline_desc'] = 'Add a headline for your block ';
$string['h4_01_block_caption'] = 'Caption {$a->block}';
$string['h4_01_block_caption_desc'] = 'Add a caption for your block ';
$string['h4_01_block_link'] = 'Link url {$a->block}';
$string['h4_01_block_link_desc'] = 'Add a link url for your block ';
$string['imageh401'] = 'Image {$a->block}';
$string['imageh401_desc'] = 'Add a image for your block ';
// Home page four block 2 login.
$string['h4_02_block_info'] = '* '.'BLOCK-02 LOGIN';
$string['h4_02_block_info_desc'] = 'LOGIN - Enter the settings for login';
$string['h4_02_block_enabled'] = 'Enable';
$string['h4_02_block_enabled_desc'] = 'Enable or disabled aside at the your home page';
$string['h4_02_block_headline'] = 'Headline';
$string['h4_02_block_headline_desc'] = 'Headline';
$string['h4_02_block_header'] = 'Header';
$string['h4_02_block_header_desc'] = 'Header';
$string['h4_02_block_maintitle'] = 'Main title';
$string['h4_02_block_maintitle_desc'] = 'Main title';
$string['h4_02_block_welcome'] = 'Welcome message';
$string['h4_02_block_welcome_desc'] = 'Welcome message';
// Page all.
$string['page_all'] = 'Page';
$string['page_all_heading'] = 'All page settings';
$string['page_all_desc'] = 'All page settings';
// Page testimonial.
$string['page_01_info'] = '# '.'PAGE 1 - TESTIMONIAL';
$string['page_01_info_desc'] = 'TESTIMONIAL - Enter the settings for page testimonial';
$string['page_01_page_title'] = 'Page title';
$string['page_01_page_title_desc'] = 'Enter page title ';
$string['page_01_page_title_default'] = 'Testimonials';
$string['page_01_page_subhdimg'] = 'Sub header img';
$string['page_01_page_subhdimg_desc'] = 'Page sub header image name, dont show if empty ';
$string['page_01_section_1'] = 'SECTION 1 - Testimonials';
$string['page_01_s1_enabled'] = 'Enable';
$string['page_01_s1_enabled_desc'] = 'Enable or disabled page 1 section 1 at the your testimonials page';
$string['page_01_s1_count'] = 'Count';
$string['page_01_s1_count_desc'] = 'Select the number of boxes and press the save changes button';
$string['page_01_s1_name'] = 'Name and surname {$a->block}';
$string['page_01_s1_name_desc'] = 'Name and surname';
$string['page_01_s1_job'] = 'Job {$a->block}';
$string['page_01_s1_job_desc'] = 'Job';
$string['page_01_s1_comment'] = 'Comment {$a->block}';
$string['page_01_s1_comment_desc'] = 'Add a comment for your page section 1';
$string['page_01_s1_comment_default'] = 'Sed ut perspic unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam eaque quae inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo';
$string['page_01_s1_star'] = 'Star {$a->block}';
$string['page_01_s1_star_desc'] = 'Add a ratings star for your page section 1';
$string['page_01_section_2'] = 'SECTION 2 - Plane';
$string['page_01_s2_enabled'] = 'Enable';
$string['page_01_s2_enabled_desc'] = 'Enable or disabled page 1 section 2 at the your testimonials page';
$string['page_01_s2_caption'] = 'Caption';
$string['page_01_s2_caption_desc'] = 'Add a caption for your page section 1';
$string['page_01_s2_caption_default'] = 'The Life Coach School Has The Most Amazing Tools And Cutting-Edge Training';
$string['page_01_section_3'] = 'SECTION 3 - Testimonials';
$string['page_01_s3_enabled'] = 'Enable';
$string['page_01_s3_enabled_desc'] = 'Enable or disabled page 1 section 3 at the your testimonials page';
$string['page_01_s3_headline'] = 'Headline';
$string['page_01_s3_headline_desc'] = 'Headline';
$string['page_01_s3_headline_default'] = 'OUR TESTIMONIALS';
$string['page_01_s3_header'] = 'Header';
$string['page_01_s3_header_desc'] = 'Header';
$string['page_01_s3_header_default'] = 'What’s Student Parents Say About Us';
$string['page_01_s3_count'] = 'Count';
$string['page_01_s3_count_desc'] = 'Select the number of boxes and press the save changes button';
$string['page_01_s3_comment'] = 'Comment {$a->block}';
$string['page_01_s3_comment_desc'] = 'Add a comment for your page section 3';
$string['page_01_s3_comment_default'] = 'Sed ut perspic unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam eaque quae inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo';
$string['page_01_section_4'] = 'SECTION 4 - Testimonials';
$string['page_01_s4_enabled'] = 'Enable';
$string['page_01_s4_enabled_desc'] = 'Enable or disabled page 1 section 4 at the your testimonials page';
$string['page_01_s4_headline'] = 'Headline';
$string['page_01_s4_headline_desc'] = 'Headline';
$string['page_01_s4_headline_default'] = 'OUR TESTIMONIALS';
$string['page_01_s4_header'] = 'Header';
$string['page_01_s4_header_desc'] = 'Header';
$string['page_01_s4_header_default'] = 'What’s Student Parents Say About Us';
$string['page_01_s4_count'] = 'Count';
$string['page_01_s4_count_desc'] = 'Select the number of boxes and press the save changes button';
$string['page_01_s4_name'] = 'Name and surname {$a->block}';
$string['page_01_s4_name_desc'] = 'Name and surname';
$string['page_01_s4_job'] = 'Job {$a->block}';
$string['page_01_s4_job_desc'] = 'Job';
$string['page_01_s4_comment'] = 'Comment {$a->block}';
$string['page_01_s4_comment_desc'] = 'Add a comment for your page section 4';
$string['page_01_s4_comment_default'] = 'Sed ut perspic unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam eaque quae inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo';
$string['page_01_section_5'] = 'SECTION 5 - Cta';
$string['page_01_s5_enabled'] = 'Enable';
$string['page_01_s5_enabled_desc'] = 'Enable or disabled page 1 section 4 at the your testimonials page';
$string['page_01_s5_headline'] = 'Headline';
$string['page_01_s5_headline_desc'] = 'Headline';
$string['page_01_s5_headline_default'] = 'Our Professionals';
$string['page_01_s5_header'] = 'Header';
$string['page_01_s5_header_desc'] = 'Header';
$string['page_01_s5_header_default'] = 'Do You Want to Transform Your Life For Better ?';
$string['page_01_s5_button'] = 'Button';
$string['page_01_s5_button_desc'] = 'Button';
$string['page_01_s5_button_default'] = 'Contact Us';
$string['page_01_s5_button_link'] = 'Button link';
$string['page_01_s5_button_link_desc'] = 'Button link';
$string['page_01_s5_button_link_default'] = '?page=contact';
// Page about.
$string['page_02_info'] = '* '.'PAGE 2 - ABOUT';
$string['page_02_info_desc'] = 'ABOUT - Enter the settings for page about';
$string['page_02_page_title'] = 'Page title';
$string['page_02_page_title_desc'] = 'Enter page title ';
$string['page_02_page_title_default'] = 'About';
$string['page_02_page_subhdimg'] = 'Sub header img';
$string['page_02_page_subhdimg_desc'] = 'Page sub header image name, dont show if empty ';
$string['page_02_section_1'] = 'SECTION 1 - About';
$string['page_02_s1_enabled'] = 'Enable';
$string['page_02_s1_enabled_desc'] = 'Enable or disabled page 2 section 1 at the your about page';
$string['page_02_s1_subtitle'] = 'Subtitle';
$string['page_02_s1_subtitle_desc'] = 'Subtitle';
$string['page_02_s1_subtitle_default'] = 'ABOUT US';
$string['page_02_s1_title'] = 'Title';
$string['page_02_s1_title_desc'] = 'Title';
$string['page_02_s1_title_default'] = 'We Care About Your Life For Better Future';
$string['page_02_s1_caption'] = 'Caption';
$string['page_02_s1_caption_desc'] = 'Add a caption for your block ';
$string['page_02_s1_caption_default'] = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae inventore';
$string['page_02_s1_header_1'] = 'Header one';
$string['page_02_s1_header_1_desc'] = 'Add a header one for your block ';
$string['page_02_s1_header_1_default'] = 'Master Coach';
$string['page_02_s1_text_1'] = 'Text one';
$string['page_02_s1_text_1_desc'] = 'Add a text one for your block ';
$string['page_02_s1_text_1_default'] = 'Quis autem reprehenderit quein voluptate velit esseua';
$string['page_02_s1_header_2'] = 'Header two';
$string['page_02_s1_header_2_desc'] = 'Add a header two for your block ';
$string['page_02_s1_header_2_default'] = 'Professional Advisors';
$string['page_02_s1_text_2'] = 'Text two';
$string['page_02_s1_text_2_desc'] = 'Add a text two for your block ';
$string['page_02_s1_text_2_default'] = 'Quis autem reprehenderit quein voluptate velit esseua';
$string['page_02_s1_header_3'] = 'Header three';
$string['page_02_s1_header_3_desc'] = 'Add a header three for your block ';
$string['page_02_s1_header_3_default'] = 'Coach Certification';
$string['page_02_s1_text_3'] = 'Text three';
$string['page_02_s1_text_3_desc'] = 'Add a text three for your block ';
$string['page_02_s1_text_3_default'] = 'Quis autem reprehenderit quein voluptate velit esseua';
$string['page_02_s1_header_4'] = 'Header four';
$string['page_02_s1_header_4_desc'] = 'Add a header four for your block ';
$string['page_02_s1_header_4_default'] = 'Coaching Scholars';
$string['page_02_s1_text_4'] = 'Text four';
$string['page_02_s1_text_4_desc'] = 'Add a text four for your block ';
$string['page_02_s1_text_4_default'] = 'Quis autem reprehenderit quein voluptate velit esseua';
$string['page_02_s1_button'] = 'Button';
$string['page_02_s1_button_desc'] = 'Button';
$string['page_02_s1_button_default'] = 'learn more';
$string['page_02_s1_button_link'] = 'Button link';
$string['page_02_s1_button_link_desc'] = 'Button link';
$string['page_02_s1_button_link_default'] = '?page=11';

$string['page_02_section_2'] = 'SECTION 2 - Counter Box';
$string['page_02_s2_enabled'] = 'Enable';
$string['page_02_s2_enabled_desc'] = 'Enable or disabled page 2 section 2 at the your about page. <br>
<b> Warning! </b><br>
h2_block_2 settings are used. (Second front page - BlOCK-02 COUNTER BOX)
<br>';
$string['page_02_section_3'] = 'SECTION 3 - About Us';
$string['page_02_s3_enabled'] = 'Enable';
$string['page_02_s3_enabled_desc'] = 'Enable or disabled page 2 section 3 at the your about page';
$string['page_02_s3_headline'] = 'Headline';
$string['page_02_s3_headline_desc'] = 'Headline';
$string['page_02_s3_headline_default'] = 'WHO WE ARE';
$string['page_02_s3_header'] = 'Header';
$string['page_02_s3_header_desc'] = 'Header';
$string['page_02_s3_header_default'] = 'Upgrade Your Skills Build Your Life';
$string['page_02_s3_maintext'] = 'Main text';
$string['page_02_s3_maintext_desc'] = 'Main text';
$string['page_02_s3_maintext_default'] = 'Quis autem vel eum iure reprehenderit qui in ea voluptate esse quam nihil molestiae conseq uaturvel illum qui dolorem eum fugiat quo voluptas nulla pariatur';
$string['page_02_s3_three_text'] = 'Three Text';
$string['page_02_s3_three_text_desc'] = 'Three Text';
$string['page_02_s3_three_text_default'] = 'Business Consulting|Career Development|Financial Solutions';
$string['page_02_s3_video_link'] = 'Button link ';
$string['page_02_s3_video_link_desc'] = 'Button link';
$string['page_02_s3_video_link_default'] = '?page=10';
$string['page_02_s3_btn'] = 'Button';
$string['page_02_s3_btn_desc'] = 'Button';
$string['page_02_s3_btn_default'] = 'Learn more';
$string['page_02_s3_btn_link'] = 'Button link ';
$string['page_02_s3_btn_link_desc'] = 'Button link';
$string['page_02_s3_btn_link_default'] = '';

$string['page_02_section_4'] = 'SECTION 4 - Team';
$string['page_02_s4_enabled'] = 'Enable';
$string['page_02_s4_enabled_desc'] = 'Enable or disabled page 2 section 4 at the your about page <br>
<b> Warning! </b><br>
h1_block_4 settings are used.<br>
(First front page - BlOCK-04 TEACHER)';
$string['page_02_s4_count'] = 'Count';
$string['page_02_s4_count_desc'] = 'Number of teachers to show';
$string['page_02_s4_count_default'] = '10';

$string['page_02_section_5'] = 'SECTION 5 - Testimonials';
$string['page_02_s5_enabled'] = 'Enable';
$string['page_02_s5_enabled_desc'] = 'Enable or disabled page 2 section 5 at the your about page <br>
<b> Warning! </b><br>
h1_block_7 settings are used.<br>
(First front page - BlOCK-07 TESTIMONIALS)';
$string['page_02_section_6'] = 'SECTION 6 - Sponsors';
$string['page_02_s6_enabled'] = 'Enable';
$string['page_02_s6_enabled_desc'] = 'Enable or disabled page 2 section 6 at the your about page';
// Page events.
$string['page_03_info'] = '* '.'PAGE 3 - EVENTS';
$string['page_03_info_desc'] = 'EVENTS - Enter the settings for page events';
$string['page_03_page_title'] = 'Page title';
$string['page_03_page_title_desc'] = 'Enter page title ';
$string['page_03_page_title_default'] = 'EVENTS';
$string['page_03_page_subhdimg'] = 'Sub header img';
$string['page_03_page_subhdimg_desc'] = 'Page sub header image name, dont show if empty ';
$string['page_03_section_1'] = ' SECTION 1 - Events';
$string['page_03_s1_enabled'] = 'Enable';
$string['page_03_s1_enabled_desc'] = 'Enable or disabled page 3 section 1 at the your events page';
$string['page_03_s1_count'] = 'Count';
$string['page_03_s1_count_desc'] = 'Select the number of boxes and press the save changes button';
$string['page_03_s1_date'] = 'Date {$a->block}';
$string['page_03_s1_date_desc'] = 'Event date';
$string['page_03_s1_date_default'] = '25 Feb 2023';
$string['page_03_s1_title'] = 'Title {$a->block}';
$string['page_03_s1_title_desc'] = 'Event title';
$string['page_03_s1_title_default'] = 'Education Workshop';
$string['page_03_s1_location'] = 'Location {$a->block}';
$string['page_03_s1_location_desc'] = 'Add a location  for your page events ';
$string['page_03_s1_location_default'] = 'Italy, France';
$string['page_03_s1_link'] = 'Link {$a->block}';
$string['page_03_s1_link_desc'] = 'Add a link  for your page events ';
$string['page_03_s1_link_default'] = '?page=10';
$string['page_03_s1_cost'] = 'Cost {$a->block}';
$string['page_03_s1_cost_desc'] = 'Add a cost  for your page events ';
$string['page_03_s1_cost_default'] = '$69';
$string['page_03_section_2'] = ' SECTION 2 - Sponsors';
$string['page_03_s2_enabled'] = 'Enable';
$string['page_03_s2_enabled_desc'] = 'Enable or disabled page 3 section 2 at the your events page';
$string['page_03_section_3'] = ' SECTION 3 - Cta';
$string['page_03_s3_enabled'] = 'Enable';
$string['page_03_s3_enabled_desc'] = 'Enable or disabled page 3 section 3 at the your events page';
$string['page_03_s3_headline'] = 'Headline';
$string['page_03_s3_headline_desc'] = 'Headline';
$string['page_03_s3_headline_default'] = 'Our Professionals';
$string['page_03_s3_header'] = 'Header';
$string['page_03_s3_header_desc'] = 'Header';
$string['page_03_s3_header_default'] = 'Do You Want to Transform Your Life For Better ?';
$string['page_03_s3_maintitle'] = 'Main title';
$string['page_03_s3_maintitle_desc'] = 'Main title';
$string['page_03_s3_maintitle_default'] = 'Wellko';
$string['page_03_s3_caption'] = 'Caption';
$string['page_03_s3_caption_desc'] = 'Add a caption for for page events';
$string['page_03_s3_caption_default'] = 'The Life Coach School Has The Most Amazing Tools And Cutting-Edge Training';
$string['page_03_s3_button'] = 'Button';
$string['page_03_s3_button_desc'] = 'Add a button for for page events';
$string['page_03_s3_button_default'] = 'Contact Us';
$string['page_03_s3_button_link'] = 'URL';
$string['page_03_s3_button_link_desc'] = 'Add a URL for for page events';
// Page videos.
$string['page_04_info'] = '* '.'PAGE 4 - VIDEOS';
$string['page_04_info_desc'] = 'VIDEOS - Enter the settings for page videos';
$string['page_04_page_title'] = 'Page title';
$string['page_04_page_title_desc'] = 'Enter page title ';
$string['page_04_page_title_default'] = 'VIDEOS';
$string['page_04_page_subhdimg'] = 'Sub header img';
$string['page_04_page_subhdimg_desc'] = 'Page sub header image name, dont show if empty ';
$string['page_04_section_1'] = ' SECTION 1 - Videos';
$string['page_04_s1_enabled'] = 'Enable';
$string['page_04_s1_enabled_desc'] = 'Enable or disabled page 4 section 1 at the your videos page';
$string['page_04_s1_count'] = 'Count';
$string['page_04_s1_count_desc'] = 'Select the number of boxes and press the save changes button';
$string['page_04_s1_category'] = 'Category {$a->block}';
$string['page_04_s1_category_desc'] = 'Add a category for your videos';
$string['page_04_s1_category_default'] = 'category';
$string['page_04_s1_first_title'] = 'First Title {$a->block}';
$string['page_04_s1_first_title_desc'] = 'Add a title for your videos';
$string['page_04_s1_first_title_default'] = 'How To Gain Knowledge';
$string['page_04_s1_second_title'] = 'Second Title {$a->block}';
$string['page_04_s1_second_title_desc'] = 'Add a title for your videos';
$string['page_04_s1_second_title_default'] = 'By Frank L. Pierce';
$string['page_04_s1_link'] = 'Video URL {$a->block}';
$string['page_04_s1_link_desc'] = 'Add a video custom link for your videos';
$string['page_04_s1_link_default'] = '';
$string['page_04_s1_badge'] = 'Badge {$a->block}';
$string['page_04_s1_badge_desc'] = 'Add a video custom badge your videos';
$string['page_04_s1_badge_default'] = '$99';
$string['page_04_section_2'] = ' SECTION 2 - Plane';
$string['page_04_s2_enabled'] = 'Enable';
$string['page_04_s2_enabled_desc'] = 'Enable or disabled page 4 section 2 at the your videos page';
$string['page_04_s2_caption'] = 'Caption';
$string['page_04_s2_caption_desc'] = 'Caption';
$string['page_04_s2_caption_default'] = 'The Life Coach School Has The Most Amazing Tools And Cutting-Edge Training';

$string['page_04_section_3'] = ' SECTION 3 - Coach box';
$string['page_04_s3_enabled'] = 'Enable';
$string['page_04_s3_enabled_desc'] = 'Enable or disabled page 4 section 3 at the your videos page<br>
<b> Warning! </b><br>
h2_block_4 settings are used.<br>
(Second front page - BlOCK-04 COURSE)';
$string['page_04_section_4'] = ' SECTION 4 - Cta';
$string['page_04_s4_enabled'] = 'Enable';
$string['page_04_s4_enabled_desc'] = 'Enable or disabled page 4 section 4 at the your videos page';
$string['page_04_s4_headline'] = 'Headline';
$string['page_04_s4_headline_desc'] = 'Headline';
$string['page_04_s4_headline_default'] = 'Our Professionals';
$string['page_04_s4_header'] = 'Header';
$string['page_04_s4_header_desc'] = 'Header';
$string['page_04_s4_header_default'] = 'Do You Want to Transform Your Life For Better ?';
$string['page_04_s4_maintitle'] = 'Main title';
$string['page_04_s4_maintitle_desc'] = 'Main title';
$string['page_04_s4_maintitle_default'] = 'Wellko';
$string['page_04_s4_caption'] = 'Caption';
$string['page_04_s4_caption_desc'] = 'Add a caption for videos page';
$string['page_04_s4_caption_default'] = 'The Life Coach School Has The Most Amazing Tools And Cutting-Edge Training';
$string['page_04_s4_button'] = 'Button';
$string['page_04_s4_button_desc'] = 'Add a button for videos page';
$string['page_04_s4_button_default'] = 'Contact Us';
$string['page_04_s4_button_link'] = 'URL';
$string['page_04_s4_button_link_desc'] = 'Add a URL for videos page';
$string['page_04_s4_button_link_default'] = '?page=contact';
// Page services.
$string['page_05_info'] = '* '.'PAGE 5 - SERVICES';
$string['page_05_info_desc'] = 'SERVICES- Enter the settings for page services';
$string['page_05_page_title'] = 'Page title';
$string['page_05_page_title_desc'] = 'Enter page title ';
$string['page_05_page_title_default'] = 'SERVICES';
$string['page_05_page_subhdimg'] = 'Sub header img';
$string['page_05_page_subhdimg_desc'] = 'Page sub header image name, dont show if empty ';
$string['page_05_section_1'] = ' SECTION 1 - Services';
$string['page_05_s1_enabled'] = 'Enable';
$string['page_05_s1_enabled_desc'] = 'Enable or disabled page 5 section 1 at the your services page';
$string['page_05_s1_count'] = 'Count';
$string['page_05_s1_count_desc'] = 'Select the number of boxes and press the save changes button';
$string['page_05_s1_title'] = 'Title {$a->block}';
$string['page_05_s1_title_desc'] = 'Title';
$string['page_05_s1_title_default'] = 'Consultations';
$string['page_05_s1_caption'] = 'Caption {$a->block}';
$string['page_05_s1_caption_desc'] = 'Caption';
$string['page_05_s1_caption_default'] = 'Sed ut perspiciate unde omnis iste natus error sit voluptatem accusantium dolore';
$string['page_05_section_2'] = ' SECTION 2- Video Quote';
$string['page_05_s2_enabled'] = 'Enable';
$string['page_05_s2_enabled_desc'] = 'Enable or disabled page 5 section 1 at the your services page';
$string['page_05_s2_headline'] = 'Headline ';
$string['page_05_s2_headline_desc'] = 'Headline';
$string['page_05_s2_headline_default'] = 'ADMISSION GOING ON';
$string['page_05_s2_header'] = 'Header';
$string['page_05_s2_header_desc'] = 'Header';
$string['page_05_s2_header_default'] = 'Find Your Best Coach With Wellko';
$string['page_05_s2_maintitle'] = 'Main Title';
$string['page_05_s2_maintitle_desc'] = 'Main title';
$string['page_05_s2_maintitle_default'] = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudtium totam rem aperiam eaque quae';
$string['page_05_s2_btna'] = 'Button-a ';
$string['page_05_s2_btna_desc'] = 'Button-a';
$string['page_05_s2_btna_default'] = 'Video';
$string['page_05_s2_btna_link'] = 'Button-a link ';
$string['page_05_s2_btna_link_desc'] = 'Button-a link';
$string['page_05_s2_btna_link_default'] = '';
$string['page_05_s2_btnb'] = 'Button-b ';
$string['page_05_s2_btnb_desc'] = 'Button-b ';
$string['page_05_s2_btnb_default'] = 'Enroll Now';
$string['page_05_s2_btnb_link'] = 'Button-b link ';
$string['page_05_s2_btnb_link_desc'] = 'Button-b Link';
$string['page_05_s2_btnb_link_default'] = '../../local/contact/index.php';
$string['page_05_section_3'] = ' SECTION 3 - Pricing';
$string['page_05_s3_enabled'] = 'Enable';
$string['page_05_s3_enabled_desc'] = 'Enable or disabled page 5 section 3 at the your services page <br>
<b> Warning! </b><br>
h3_block_6 settings are used.<br>
(Third front page - BlOCK-06 PRICING)';
$string['page_05_section_4'] = ' SECTION 4 - Cta';
$string['page_05_s4_enabled'] = 'Enable';
$string['page_05_s4_enabled_desc'] = 'Enable or disabled page 5 section 4 at the your services page';
$string['page_05_s4_headline'] = 'Headline';
$string['page_05_s4_headline_desc'] = 'Headline';
$string['page_05_s4_headline_default'] = 'Our Professionals';
$string['page_05_s4_header'] = 'Header';
$string['page_05_s4_header_desc'] = 'Header';
$string['page_05_s4_header_default'] = 'Do You Want to Transform Your Life For Better ?';
$string['page_05_s4_maintitle'] = 'Main title';
$string['page_05_s4_maintitle_desc'] = 'Main title';
$string['page_05_s4_maintitle_default'] = 'Wellko';
$string['page_05_s4_caption'] = 'Caption';
$string['page_05_s4_caption_desc'] = 'Add a caption for services page';
$string['page_05_s4_caption_default'] = 'The Life Coach School Has The Most Amazing Tools And Cutting-Edge Training';
$string['page_05_s4_button'] = 'Button';
$string['page_05_s4_button_desc'] = 'Add a button for services page';
$string['page_05_s4_button_default'] = 'Contact Us';
$string['page_05_s4_button_link'] = 'URL';
$string['page_05_s4_button_link_desc'] = 'Add a URL for services page';
// Page teams.
$string['page_06_info'] = '* '.'PAGE 6 - TEAMS';
$string['page_06_info_desc'] = 'TEAMS - Enter the settings for page services';
$string['page_06_page_title'] = 'Page title';
$string['page_06_page_title_desc'] = 'Enter page title ';
$string['page_06_page_title_default'] = 'TEAMS';
$string['page_06_page_subhdimg'] = 'Sub header img';
$string['page_06_page_subhdimg_desc'] = 'Page sub header image name, dont show if empty ';
$string['page_06_section_1'] = ' SECTION 1 - Skills';
$string['page_06_s1_enabled'] = 'Enable';
$string['page_06_s1_enabled_desc'] = 'Enable or disabled page 6 section 1 at the your teams page.<br>
<b> Warning! </b><br>
h3_block_5 and h2_block_2 settings are used.<br>
(Third front page - BlOCK-05 SKILLS and Second front page - BlOCK-02 COUNTER BOX)
';
$string['page_06_section_2'] = ' SECTION 2 - Teams';
$string['page_06_s2_enabled'] = 'Enable';
$string['page_06_s2_enabled_desc'] = 'Enable or disabled page 6 section 2 at the your teams page.<br>
<b> Warning! </b><br>
h1_04_block settings are used.<br>
(First front page - BlOCK-04 TEAMS)
';
$string['page_06_section_3'] = ' SECTION 3 - Sponsors';
$string['page_06_s3_enabled'] = 'Enable';
$string['page_06_s3_enabled_desc'] = 'Enable or disabled page 6 section 3 at the your teams page.';
$string['page_06_section_4'] = ' SECTION 4 - Cta';
$string['page_06_s4_enabled'] = 'Enable';
$string['page_06_s4_enabled_desc'] = 'Enable or disabled page 6 section 4 at the your teams page.';
$string['page_06_s4_headline'] = 'Headline';
$string['page_06_s4_headline_desc'] = 'Headline';
$string['page_06_s4_headline_default'] = 'Our Professionals';
$string['page_06_s4_header'] = 'Header';
$string['page_06_s4_header_desc'] = 'Header';
$string['page_06_s4_header_default'] = 'Do You Want to Transform Your Life For Better ?';
$string['page_06_s4_caption'] = 'Caption';
$string['page_06_s4_caption_desc'] = 'Add a caption for services page';
$string['page_06_s4_caption_default'] = 'The Life Coach School Has The Most Amazing Tools And Cutting-Edge Training';
$string['page_06_s4_button'] = 'Button';
$string['page_06_s4_button_desc'] = 'Add a button for services page';
$string['page_06_s4_button_default'] = 'Contact Us';
$string['page_06_s4_button_link'] = 'URL';
$string['page_06_s4_button_link_desc'] = 'Add a URL for services page';
// Page pricing.
$string['page_07_info'] = '* '.'PAGE 7 - PRICING';
$string['page_07_info_desc'] = 'PRICING - Enter the settings for page pricing';
$string['page_07_page_title'] = 'Page title';
$string['page_07_page_title_desc'] = 'Enter page title ';
$string['page_07_page_title_default'] = 'PRICING';
$string['page_07_page_subhdimg'] = 'Sub header img';
$string['page_07_page_subhdimg_desc'] = 'Page sub header image name, dont show if empty ';
$string['page_07_section_1'] = ' SECTION 1 - Pricing';
$string['page_07_s1_enabled'] = 'Enable';
$string['page_07_s1_enabled_desc'] = 'Enable or disabled page 7 section 1 at the your pricing page.<br>
<b> Warning! </b><br>
h3_block_6 settings are used.<br>
(Third front page - BlOCK-06 PRICING)
';
$string['page_07_section_2'] = ' SECTION 2 - Portfolio';
$string['page_07_s2_enabled'] = 'Enable';
$string['page_07_s2_enabled_desc'] = 'Enable or disabled page 7 section 2 at the your pricing page.<br>
<b> Warning! </b><br>
h3_09_block settings are used.<br>
(Third front page - BlOCK-09 PORTFOLIO)
';
$string['page_07_section_3'] = ' SECTION 3 - Cta';
$string['page_07_s3_enabled'] = 'Enable';
$string['page_07_s3_enabled_desc'] = 'Enable or disabled page 7 section 3 at the your pricing page.';
$string['page_07_s3_headline'] = 'Headline';
$string['page_07_s3_headline_desc'] = 'Headline';
$string['page_07_s3_headline_default'] = 'Our Professionals';
$string['page_07_s3_header'] = 'Header';
$string['page_07_s3_header_desc'] = 'Header';
$string['page_07_s3_header_default'] = 'Do You Want to Transform Your Life For Better ?';
$string['page_07_s3_caption'] = 'Caption';
$string['page_07_s3_caption_desc'] = 'Add a caption for services page';
$string['page_07_s3_caption_default'] = 'The Life Coach School Has The Most Amazing Tools And Cutting-Edge Training';
$string['page_07_s3_button'] = 'Button';
$string['page_07_s3_button_desc'] = 'Add a button for services page';
$string['page_07_s3_button_default'] = 'Contact Us';
$string['page_07_s3_button_link'] = 'URL';
$string['page_07_s3_button_link_desc'] = 'Add a URL for services page';
// Page faqs.
$string['page_08_info'] = '* '.'PAGE 8 - FAQS';
$string['page_08_info_desc'] = 'FAQS - Enter the settings for page faqs';
$string['page_08_page_title'] = 'Page title';
$string['page_08_page_title_desc'] = 'Enter page title ';
$string['page_08_page_title_default'] = 'FAQS';
$string['page_08_page_subhdimg'] = 'Sub header img';
$string['page_08_page_subhdimg_desc'] = 'Page sub header image name, dont show if empty ';
$string['page_08_section_1'] = ' SECTION 1 - Faqs';
$string['page_08_s1_enabled'] = 'Enable';
$string['page_08_s1_enabled_desc'] = 'Enable or disabled page 8 section 1 at the your Faqs page.';
$string['page_08_s1_count'] = 'Count';
$string['page_08_s1_count_desc'] = 'Number of teachers to show';
$string['page_08_s1_count_default'] = '10';
$string['page_08_s1_category'] = 'Category {$a->block}';
$string['page_08_s1_category_desc'] = 'Add a category  for your page faqs ';
$string['page_08_s1_category_default'] = 'General';
$string['page_08_s1_title'] = 'Title {$a->block}';
$string['page_08_s1_title_desc'] = 'Add a title for your page faqs ';
$string['page_08_s1_title_default'] = 'We Teach You How To Coach Yourself';
$string['page_08_s1_caption'] = 'Caption {$a->block}';
$string['page_08_s1_caption_desc'] = 'Add a caption  for your page faqs ';
$string['page_08_s1_caption_default'] = 'Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.';
$string['page_08_section_2'] = ' SECTION 2 - Plane';
$string['page_08_s2_enabled'] = 'Enable';
$string['page_08_s2_enabled_desc'] = 'Enable or disabled page 8 section 2 at the your Faqs page.';
$string['page_08_s2_caption'] = 'Caption';
$string['page_08_s2_caption_desc'] = 'Add a caption for faqs page';
$string['page_08_s2_caption_default'] = 'The Life Coach School Has The Most Amazing Tools And Cutting-Edge Training';
$string['page_08_section_3'] = ' SECTION 3 - Quote Form';
$string['page_08_s3_enabled'] = 'Enable';
$string['page_08_s3_enabled_desc'] = 'Enable or disabled page 7 section 3 at the your Faqs page.';
$string['page_08_s3_headline'] = 'Headline';
$string['page_08_s3_headline_desc'] = 'Add a headline for faqs page';
$string['page_08_s3_headline_default'] = 'GET IN TOUCH';
$string['page_08_s3_header'] = 'Header';
$string['page_08_s3_header_desc'] = 'Add a header for faqs page';
$string['page_08_s3_header_default'] = 'Do You Have Any Questions Get Free Quote';
$string['page_08_s3_button'] = 'Button text';
$string['page_08_s3_button_desc'] = 'Add a button text for faqs page';
$string['page_08_s3_button_default'] = 'Send Message';
$string['page_08_s3_button_link'] = 'Button link';
$string['page_08_s3_button_link_desc'] = 'Add a button link for faqs page';
$string['page_08_s3_button_link_default'] = '../../local/contact/index.php';
$string['page_08_section_4'] = ' SECTION 4 - Portfolio';
$string['page_08_s4_enabled'] = 'Enable';
$string['page_08_s4_enabled_desc'] = 'Enable or disabled page 7 section 3 at the your Faqs page.<br>
<b> Warning! </b><br>
h3_09_block settings are used.<br>
(Third front page - BlOCK-09 PORTFOLIO)
';
$string['page_08_section_5'] = ' SECTION 5 - Cta';
$string['page_08_s5_enabled'] = 'Enable';
$string['page_08_s5_enabled_desc'] = 'Enable or disabled page 7 section 5 at the your Faqs page.';
$string['page_08_s5_headline'] = 'Headline';
$string['page_08_s5_headline_desc'] = 'Headline';
$string['page_08_s5_headline_default'] = 'Our Professionals';
$string['page_08_s5_header'] = 'Header';
$string['page_08_s5_header_desc'] = 'Header';
$string['page_08_s5_header_default'] = 'Do You Want to Transform Your Life For Better ?';
$string['page_08_s5_caption'] = 'Caption';
$string['page_08_s5_caption_desc'] = 'Add a caption for services page';
$string['page_08_s5_caption_default'] = 'The Life Coach School Has The Most Amazing Tools And Cutting-Edge Training';
$string['page_08_s5_button'] = 'Button';
$string['page_08_s5_button_desc'] = 'Add a button for services page';
$string['page_08_s5_button_default'] = 'Contact Us';
$string['page_08_s5_button_link'] = 'URL';
$string['page_08_s5_button_link_desc'] = 'Add a URL for services page';
// Page about me.
$string['page_09_info'] = '* '.'PAGE 9 - ABOUT ME';
$string['page_09_info_desc'] = 'ABOUT ME - Enter the settings for page about me';
$string['page_09_page_title'] = 'Page title';
$string['page_09_page_title_desc'] = 'Enter page title ';
$string['page_09_page_title_default'] = 'ABOUT ME';
$string['page_09_page_subhdimg'] = 'Sub header img';
$string['page_09_page_subhdimg_desc'] = 'Page sub header image name, dont show if empty ';
// Section 1.
$string['page_09_section_1'] = 'SECTION 1 - About Me';
$string['page_09_s1_enabled'] = 'Enable';
$string['page_09_s1_enabled_desc'] = 'Enable or disabled page 2 section 1 at the your about me page';
$string['page_09_s1_subtitle'] = 'Subtitle';
$string['page_09_s1_subtitle_desc'] = 'Subtitle';
$string['page_09_s1_subtitle_default'] = 'ABOUT Me';
$string['page_09_s1_title'] = 'Title';
$string['page_09_s1_title_desc'] = 'Title';
$string['page_09_s1_title_default'] = 'Top Lessons For Getting You Back On Track.';
$string['page_09_s1_caption'] = 'Caption';
$string['page_09_s1_caption_desc'] = 'Add a caption for your block ';
$string['page_09_s1_caption_default'] = 'Sed ut perspiciatis unde omnis iste natus voluptatem accusantiue doloremque laudantium totam aperiam eaque quae abillo inventore veritatis et quasi architecto beatae vitae dicta';
$string['page_09_s1_four_text'] = 'Four text';
$string['page_09_s1_four_text_desc'] = 'Four text';
$string['page_09_s1_four_text_default'] = 'Coach Mentoring|Career Development|Ask Consulatncy|Online Learning';
$string['page_09_s1_circle_triple'] = 'Circle';
$string['page_09_s1_circle_triple_desc'] = 'Circle triple';
$string['page_09_s1_circle_triple_default'] = '89|Business|Consulting';
$string['page_09_s1_button'] = 'Button';
$string['page_09_s1_button_desc'] = 'Add a button for about me page';
$string['page_09_s1_button_default'] = 'Contact Us';
$string['page_09_s1_button_link'] = 'Button Link';
$string['page_09_s1_button_link_desc'] = 'Add a URL for about me page';
$string['page_09_s1_button_link_default'] = '?page=10';
// Section 2.
$string['page_09_section_2'] = 'SECTION 2 - Features';
$string['page_09_s2_enabled'] = 'Enable';
$string['page_09_s2_enabled_desc'] = 'Enable or disabled page 9 section 2 at the your about me page.<br>
<b> Warning! </b><br>
h1_02_block settings are used.<br>
(First front page - BlOCK-02 FEATURES)
';
// Section 3.
$string['page_09_section_3'] = 'SECTION 3 - Video';
$string['page_09_s3_enabled'] = 'Enable';
$string['page_09_s3_enabled_desc'] = 'Enable or disabled page 9 section 3 at the your about me page.';
$string['page_09_s3_video_lnk'] = 'Video Link';
$string['page_09_s3_video_lnk_desc'] = 'Add a URL for about me page video';
$string['page_09_s3_video_lnk_default'] = '';
// Section 4.
$string['page_09_section_4'] = 'SECTION 4 - What We Know';
$string['page_09_s4_enabled'] = 'Enable';
$string['page_09_s4_enabled_desc'] = 'Enable or disabled page 9 section 4 at the your about me page.';
$string['page_09_s4_subtitle'] = 'Subtitle';
$string['page_09_s4_subtitle_desc'] = 'Subtitle';
$string['page_09_s4_subtitle_default'] = 'WHAT WE KNOW';
$string['page_09_s4_title'] = 'Title';
$string['page_09_s4_title_desc'] = 'Title';
$string['page_09_s4_title_default'] = 'Learn Online Coaching Lessons For Remote';
$string['page_09_s4_circle_triple'] = 'Circle count, text';
$string['page_09_s4_circle_triple_desc'] = 'Circle count, text 1, text 2';
$string['page_09_s4_circle_triple_default'] = '89|Business|Consulting';
$string['page_09_s4_header_1'] = 'Header one';
$string['page_09_s4_header_1_desc'] = 'Understand The Brain Where All Your Power ';
$string['page_09_s4_header_1_default'] = 'We Teach You How To Coach Yourself';
$string['page_09_s4_header_2'] = 'Header two';
$string['page_09_s4_header_2_desc'] = 'Add a header two for your page ';
$string['page_09_s4_header_2_default'] = 'Ease Anxiety Stress Worry and Boredom';
$string['page_09_s4_header_3'] = 'Header tree';
$string['page_09_s4_header_3_desc'] = 'Add a header tree for your page ';
$string['page_09_s4_header_3_default'] = 'Process Emotion And Create More Energy';
// Section 5.
$string['page_09_section_5'] = 'SECTION 5 - Counter Box';
$string['page_09_s5_enabled'] = 'Enable';
$string['page_09_s5_enabled_desc'] = 'Enable or disabled page 9 section 5 at the your about me page.<br>
<b> Warning! </b><br>
h2_02_block settings are used.<br>
(Second front page - BlOCK-02 COUNTER BOX)
';
// Section 6.
$string['page_09_section_6'] = 'SECTION 6 - Testimonials';
$string['page_09_s6_enabled'] = 'Enable';
$string['page_09_s6_enabled_desc'] = 'Enable or disabled page 9 section 6 at the your about me page.<br>
<b> Warning! </b><br>
h1_07_block settings are used.<br>
(First front page - BlOCK-07 TESTIMONIALS)
';
// Section 7.
$string['page_09_section_7'] = 'SECTION 7 - Sponsors';
$string['page_09_s7_enabled'] = 'Enable';
$string['page_09_s7_enabled_desc'] = 'Enable or disabled page 9 section 7 at the your about me page.';
// Section 8.
$string['page_09_section_8'] = ' SECTION 8 - Cta';
$string['page_09_s8_enabled'] = 'Enable';
$string['page_09_s8_enabled_desc'] = 'Enable or disabled page 9 section 8 at the your about me page';
$string['page_09_s8_headline'] = 'Headline';
$string['page_09_s8_headline_desc'] = 'Headline';
$string['page_09_s8_headline_default'] = 'Our Professionals';
$string['page_09_s8_header'] = 'Header';
$string['page_09_s8_header_desc'] = 'Header';
$string['page_09_s8_header_default'] = 'Do You Want to Transform Your Life For Better ?';
$string['page_09_s8_button'] = 'Button';
$string['page_09_s8_button_desc'] = 'Add a button for for page about me';
$string['page_09_s8_button_default'] = 'Contact Us';
$string['page_09_s8_button_link'] = 'Button';
$string['page_09_s8_button_link_desc'] = 'Add a URL for for page about me';
$string['page_09_s8_button_link_default'] = '?page=10';
// Page Contact.
$string['page_10_info'] = '* '.'PAGE 10 - CONTACT';
$string['page_10_info_desc'] = 'CONTACT - Enter the settings for page contact';
$string['page_10_page_title'] = 'Page title';
$string['page_10_page_title_desc'] = 'Enter page title ';
$string['page_10_page_title_default'] = 'CONTACT';
$string['page_10_page_subhdimg'] = 'Sub header img';
$string['page_10_page_subhdimg_desc'] = 'Page sub header image name, dont show if empty ';
// Section 1.
$string['page_10_section_1'] = 'SECTION 1 - Contact Faq Box ';
$string['page_10_s1_enabled'] = 'Enable';
$string['page_10_s1_enabled_desc'] = 'Enable or disabled page 10 section 1 at the your contact page.';
$string['page_10_s1_headline'] = 'Headline';
$string['page_10_s1_headline_desc'] = 'Headline';
$string['page_10_s1_headline_default'] = 'SUPPORT TEAM';
$string['page_10_s1_header'] = 'Header';
$string['page_10_s1_header_desc'] = 'Header';
$string['page_10_s1_header_default'] = 'We Have A Professional Support Team';
$string['page_10_s1_maintitle'] = 'Maintitle {$a->block}';
$string['page_10_s1_maintitle_desc'] = 'Add a maintitle for your page contact ';
$string['page_10_s1_maintitle_default'] = 'Customer Support';
$string['page_10_s1_caption'] = 'Caption {$a->block}';
$string['page_10_s1_caption_desc'] = 'Add a caption for your page contact ';
$string['page_10_s1_caption_default'] = 'Sed ut perspiciatis unde omnis iste natus voluptatem accusantium doloremque laudantium';
$string['page_10_s1_button'] = 'Button {$a->block}';
$string['page_10_s1_button_desc'] = 'Add a button for your page contact';
$string['page_10_s1_button_default'] = 'Take A Coupon';
$string['page_10_s1_button_link'] = 'Button Link {$a->block}';
$string['page_10_s1_button_link_desc'] = 'Add a button link for your page contact';
$string['page_10_s1_button_link_default'] = '?page=10';
// Section 2.
$string['page_10_section_2'] = 'SECTION 2 - Contact Map & Info ';
$string['page_10_s2_enabled'] = 'Enable';
$string['page_10_s2_enabled_desc'] = 'Enable or disabled page 10 section 2 at the your contact page.';
$string['page_10_s2_headline'] = 'Headline';
$string['page_10_s2_headline_desc'] = 'Headline';
$string['page_10_s2_headline_default'] = 'CONTACT US';
$string['page_10_s2_header'] = 'Header';
$string['page_10_s2_header_desc'] = 'Header';
$string['page_10_s2_header_default'] = 'Have Any Courses Get In Touch';
$string['page_10_s2_three_header'] = 'Three Subtitle';
$string['page_10_s2_three_header_desc'] = 'Three subtitle';
$string['page_10_s2_three_header_default'] = 'Location|Email Address|Contact Us';
$string['page_10_s2_three_text'] = 'Three Text';
$string['page_10_s2_three_text_desc'] = 'ThreeText';
$string['page_10_s2_three_text_default'] = '354 Oakridge, Camden NJ 08102 - USA|supportcoachinfo@gmail.com|Mobile: +012 (345) 789 99|Hotline: +563 789 55';
$string['page_10_s2_geolocation'] = 'Geolocation';
$string['page_10_s2_geolocation_desc'] = 'Geolocation for map';
$string['page_10_s2_geolocation_default'] = '39.9556860685524, -75.11596209461385';
// Section 3.
$string['page_10_section_3'] = 'SECTION 3 - Contact Form ';
$string['page_10_s3_enabled'] = 'Enable';
$string['page_10_s3_enabled_desc'] = 'Enable or disabled page 10 section 3 at the your contact page.';
$string['page_10_s3_headline'] = 'Headline';
$string['page_10_s3_headline_desc'] = 'Headline';
$string['page_10_s3_headline_default'] = 'DROP A MESSAGE';
$string['page_10_s3_header'] = 'Header';
$string['page_10_s3_header_desc'] = 'Header';
$string['page_10_s3_header_default'] = 'Have Any Questions Let’s Started Talk';
$string['page_10_s3_five_text'] = 'Form fields headers';
$string['page_10_s3_five_text_desc'] = 'Form fields headers';
$string['page_10_s3_five_text_default'] = 'Full Name|Phone Number|Email Address|Subject|Message';
$string['page_10_s3_button'] = 'Button';
$string['page_10_s3_button_desc'] = 'Button text';
$string['page_10_s3_button_default'] = 'Send Your Message';
$string['page_10_s3_button_lnk'] = 'Button link';
$string['page_10_s3_button_lnk_desc'] = 'Button link url';
$string['page_10_s3_button_lnk_default'] = '../../local/contact/index.php';
// Section 4.
$string['page_10_section_4'] = 'SECTION 3 - Cta ';
$string['page_10_s4_enabled'] = 'Enable';
$string['page_10_s4_enabled_desc'] = 'Enable or disabled page 10 section 4 at the your contact page.';
$string['page_10_s4_headline'] = 'Headline';
$string['page_10_s4_headline_desc'] = 'Headline';
$string['page_10_s4_headline_default'] = 'Our Professionals';
$string['page_10_s4_header'] = 'Header';
$string['page_10_s4_header_desc'] = 'Header';
$string['page_10_s4_header_default'] = 'Do You Want to Transform Your Life For Better ?';
$string['page_10_s4_button'] = 'Button';
$string['page_10_s4_button_desc'] = 'Button text';
$string['page_10_s4_button_default'] = 'Contact Us';
$string['page_10_s4_button_lnk'] = 'Button link';
$string['page_10_s4_button_lnk_desc'] = 'Button link url';
$string['page_10_s4_button_lnk_default'] = '?page=10';
// Page Courses.
$string['page_11_info'] = '* '.'PAGE 11 - COURSES';
$string['page_11_info_desc'] = 'COURSES - Enter the settings for page courses';
$string['page_11_page_title'] = 'Page title';
$string['page_11_page_title_desc'] = 'Enter page title ';
$string['page_11_page_title_default'] = 'Courses';
$string['page_11_page_subhdimg'] = 'Sub header img';
$string['page_11_page_subhdimg_desc'] = 'Page sub header image name, dont show if empty ';
// Section 1.
$string['page_11_section_1'] = 'SECTION 1 - Courses ';
$string['page_11_s1_enabled'] = 'Enable';
$string['page_11_s1_enabled_desc'] = 'Enable or disabled page 11 section 1 at the your courses page.<br>
<b> Warning! </b><br>
h1_08_block settings are used.<br>
(First front page - BlOCK-08 COURSES)
';
$string['page_11_s1_count'] = 'Count';
$string['page_11_s1_count_desc'] = 'Number of courses to show';
$string['page_11_s1_count_default'] = '9';
// Section 2.
$string['page_11_section_2'] = 'SECTION 1 - Plane ';
$string['page_11_s2_enabled'] = 'Enable';
$string['page_11_s2_enabled_desc'] = 'Enable or disabled page 11 section 2 at the your courses page.<br>
<b> Warning! </b><br>
h1_12_block settings are used.<br>
(First front page - BlOCK-12 PLANE)
';
// Section 3.
$string['page_11_section_3'] = 'SECTION 3 - Portfolio ';
$string['page_11_s3_enabled'] = 'Enable';
$string['page_11_s3_enabled_desc'] = 'Enable or disabled page 11 section 3 at the your courses page.<br>
<b> Warning! </b><br>
h3_09_block settings are used.<br>
(Third front page - BlOCK-09 PORTFOLIO)
';
// Section 4.
$string['page_11_section_4'] = 'SECTION 4 - Cta ';
$string['page_11_s4_enabled'] = 'Enable';
$string['page_11_s4_enabled_desc'] = 'Enable or disabled page 11 section 4 at the your courses page.';
$string['page_11_s4_headline'] = 'Headline';
$string['page_11_s4_headline_desc'] = 'Headline';
$string['page_11_s4_headline_default'] = 'Our Professionals';
$string['page_11_s4_header'] = 'Header';
$string['page_11_s4_header_desc'] = 'Header';
$string['page_11_s4_header_default'] = 'Do You Want to Transform Your Life For Better ?';
$string['page_11_s4_button'] = 'Button';
$string['page_11_s4_button_desc'] = 'Button text';
$string['page_11_s4_button_default'] = 'Contact Us';
$string['page_11_s4_button_lnk'] = 'Button link';
$string['page_11_s4_button_lnk_desc'] = 'Button link url';
$string['page_11_s4_button_lnk_default'] = '?page=10';
// Page Blog grid.
$string['page_12_info'] = '* '.'PAGE 12 - BLOG GRID';
$string['page_12_info_desc'] = 'BLOG GRID - Enter the settings for page blog';
$string['page_12_page_title'] = 'Page title';
$string['page_12_page_title_desc'] = 'Enter page title ';
$string['page_12_page_title_default'] = 'Blog Grid';
$string['page_12_page_subhdimg'] = 'Sub header img';
$string['page_12_page_subhdimg_desc'] = 'Page sub header image name, dont show if empty ';
// Section 1.
$string['page_12_section_1'] = 'SECTION 1 - Blog Grid ';
$string['page_12_s1_enabled'] = 'Enable';
$string['page_12_s1_enabled_desc'] = 'Enable or disabled page 12 section 1 at the your courses page.<br>
<b> Warning! </b><br>
h2_09_block settings are used.<br>
(Second front page - BlOCK-09 BLOG)
';
$string['page_12_s1_count'] = 'Count';
$string['page_12_s1_count_desc'] = 'Number of courses to show';
$string['page_12_s1_count_default'] = '9';
// Section 2.
$string['page_12_section_2'] = 'SECTION 2 - Cta ';
$string['page_12_s2_enabled'] = 'Enable';
$string['page_12_s2_enabled_desc'] = 'Enable or disabled page 12 section 2 at the your blog page.';
$string['page_12_s2_headline'] = 'Headline';
$string['page_12_s2_headline_desc'] = 'Headline';
$string['page_12_s2_headline_default'] = 'Our Professionals';
$string['page_12_s2_header'] = 'Header';
$string['page_12_s2_header_desc'] = 'Header';
$string['page_12_s2_header_default'] = 'Do You Want to Transform Your Life For Better ?';
$string['page_12_s2_button'] = 'Button';
$string['page_12_s2_button_desc'] = 'Button text';
$string['page_12_s2_button_default'] = 'Contact Us';
$string['page_12_s2_button_lnk'] = 'Button link';
$string['page_12_s2_button_lnk_desc'] = 'Button link url';
$string['page_12_s2_button_lnk_default'] = '?page=10';
// Page Blog List.
$string['page_13_info'] = '* '.'PAGE 13 - BLOG LIST';
$string['page_13_info_desc'] = 'BLOG LIST - Enter the settings for page blog';
$string['page_13_page_title'] = 'Page title';
$string['page_13_page_title_desc'] = 'Enter page title ';
$string['page_13_page_title_default'] = 'Blog List';
$string['page_13_page_subhdimg'] = 'Sub header img';
$string['page_13_page_subhdimg_desc'] = 'Page sub header image name, dont show if empty ';
$string['page_13_page_sidebar_header_1'] = 'Sidebar Header 1';
$string['page_13_page_sidebar_header_1_desc'] = 'Sidebar widget header 1';
$string['page_13_page_sidebar_header_1_default'] = 'Latest News';
$string['page_13_page_sidebar_adimg_lnk'] = 'Sidebar ad img link';
$string['page_13_page_sidebar_adimg_lnk_desc'] = 'Sidebar ad img link ';
$string['page_13_page_sidebar_adimg_lnk_default'] = '?page=11';
$string['page_13_page_sidebar_header_2'] = 'Sidebar Header 2';
$string['page_13_page_sidebar_header_2_desc'] = 'Sidebar widget header 2';
$string['page_13_page_sidebar_header_2_default'] = 'Popular Tags';
// Section 1.
$string['page_13_section_1'] = 'SECTION 1 - Blog List ';
$string['page_13_s1_enabled'] = 'Enable';
$string['page_13_s1_enabled_desc'] = 'Enable or disabled page 13 section 1 at the your blog page.<br>
<b> Warning! </b><br>
h2_09_block settings are used.<br>
(Second front page - BlOCK-09 BLOG)
';
$string['page_13_s1_button'] = 'Button';
$string['page_13_s1_button_desc'] = 'Button text';
$string['page_13_s1_button_default'] = 'Read More';
$string['page_13_s1_count'] = 'Count';
$string['page_13_s1_count_desc'] = 'Number of blog to show';
$string['page_13_s1_count_default'] = '9';
$string['page_13_s1_style_1_enabled'] = 'Style 1 enable';
$string['page_13_s1_style_2_enabled'] = 'Style 2 enable';
$string['page_13_s2_video_link'] = 'Video link';
$string['page_13_s1_style_3_enabled'] = 'Style 3 enable';
$string['page_13_s1_style_4_enabled'] = 'Style 4 enable';
// Section 2.
$string['page_13_section_2'] = 'SECTION 2 - Cta ';
$string['page_13_s2_enabled'] = 'Enable';
$string['page_13_s2_enabled_desc'] = 'Enable or disabled page 13 section 2 at the your blog page.';
$string['page_13_s2_headline'] = 'Headline';
$string['page_13_s2_headline_desc'] = 'Headline';
$string['page_13_s2_headline_default'] = 'Our Professionals';
$string['page_13_s2_header'] = 'Header';
$string['page_13_s2_header_desc'] = 'Header';
$string['page_13_s2_header_default'] = 'Do You Want to Transform Your Life For Better ?';
$string['page_13_s2_button'] = 'Button';
$string['page_13_s2_button_desc'] = 'Button text';
$string['page_13_s2_button_default'] = 'Contact Us';
$string['page_13_s2_button_lnk'] = 'Button link';
$string['page_13_s2_button_lnk_desc'] = 'Button link url';
$string['page_13_s2_button_lnk_default'] = '?page=10';
// Page blog details.
$string['page_14_info'] = '* '.'PAGE 14 - BLOG DETAİLS';
$string['page_14_info_desc'] = 'BLOG DETAILS - Enter the settings for page blog';
$string['page_14_page_title'] = 'Page title';
$string['page_14_page_title_desc'] = 'Enter page title ';
$string['page_14_page_title_default'] = 'Blog Details';
$string['page_14_page_subhdimg'] = 'Sub header img';
$string['page_14_page_subhdimg_desc'] = 'Page sub header image name, dont show if empty ';
$string['page_14_page_sidebar_header_1'] = 'Sidebar Header 1';
$string['page_14_page_sidebar_header_1_desc'] = 'Sidebar widget header 1';
$string['page_14_page_sidebar_header_1_default'] = 'Latest News';
$string['page_14_page_sidebar_adimg_lnk'] = 'Sidebar ad img link';
$string['page_14_page_sidebar_adimg_lnk_desc'] = 'Sidebar ad img link ';
$string['page_14_page_sidebar_adimg_lnk_default'] = '?page=11';
$string['page_14_page_sidebar_header_2'] = 'Sidebar Header 2';
$string['page_14_page_sidebar_header_2_desc'] = 'Sidebar widget header 2';
$string['page_14_page_sidebar_header_2_default'] = 'Popular Tags';
// Section 1.
$string['page_14_section_1'] = 'SECTION 1 - Blog Details ';
$string['page_14_s1_enabled'] = 'Enable';
$string['page_14_s1_enabled_desc'] = 'Enable or disabled page 14 section 1 at the your blog page.<br>
<b> Warning! </b><br>
h2_09_block settings are used.<br>
(First front page - BlOCK-09 BLOG)
';
$string['page_14_s1_quote_title'] = 'Quote title';
$string['page_14_s1_quote_title_desc'] = 'Quote title blog details.';
$string['page_14_s1_quote_title_default'] = 'Smashing Podcast Episode With Paul Boag What Is Conversion Optimization Inspired Design Decisions';
$string['page_14_s1_quote_author'] = 'Quote author';
$string['page_14_s1_quote_author_desc'] = 'Quote author blog details.';
$string['page_14_s1_quote_author_default'] = 'Bailey Dobson';
$string['page_14_s1_share'] = 'Share';
$string['page_14_s1_share_desc'] = 'Share blog details.';
$string['page_14_s1_share_default'] = 'facebook,https://example-social.com|twitter,https://example-social.com|instagram,https://example-social.com|behance,https://example-social.com';
$string['page_14_s1_cmd_headline'] = 'Comments header';
$string['page_14_s1_cmd_headline_desc'] = 'Comments header';
$string['page_14_s1_cmd_headline_default'] = 'People Comments';
$string['page_14_s1_form_header'] = 'Comments form header';
$string['page_14_s1_form_header_desc'] = 'Blog details comments contact form header';
$string['page_14_s1_form_header_default'] = 'Leave A Reply';
$string['page_14_s1_form_text'] = 'Form fields headers';
$string['page_14_s1_form_text_desc'] = 'Form fields headers';
$string['page_14_s1_form_text_default'] = 'Your Full Name|Your Email|Write Message';
$string['page_14_s1_form_button'] = 'Button';
$string['page_14_s1_form_button_desc'] = 'Button text';
$string['page_14_s1_form_button_default'] = 'Send Comment';
$string['page_14_s1_form_button_lnk'] = 'Button link';
$string['page_14_s1_form_button_lnk_desc'] = 'Button link url';
$string['page_14_s1_form_button_lnk_default'] = '/../../local/contact/index.php';
// Section 2.
$string['page_14_section_2'] = 'SECTION 2 - Cta ';
$string['page_14_s2_enabled'] = 'Enable';
$string['page_14_s2_enabled_desc'] = 'Enable or disabled page 14 section 2 at the your blog page.';
$string['page_14_s2_headline'] = 'Headline';
$string['page_14_s2_headline_desc'] = 'Headline';
$string['page_14_s2_headline_default'] = 'Our Professionals';
$string['page_14_s2_header'] = 'Header';
$string['page_14_s2_header_desc'] = 'Header';
$string['page_14_s2_header_default'] = 'Do You Want to Transform Your Life For Better ?';
$string['page_14_s2_button'] = 'Button';
$string['page_14_s2_button_desc'] = 'Button text';
$string['page_14_s2_button_default'] = 'Contact Us';
$string['page_14_s2_button_lnk'] = 'Button link';
$string['page_14_s2_button_lnk_desc'] = 'Button link url';
$string['page_14_s2_button_lnk_default'] = '?page=10';
// Page course details.
$string['page_15_info'] = '* '.'PAGE 15 - COURSE DETAILS';
$string['page_15_info_desc'] = 'COURSE DETAILS - Enter the settings for page course details';
$string['page_15_page_title'] = 'Page title';
$string['page_15_page_title_desc'] = 'Enter page title ';
$string['page_15_page_title_default'] = 'Course Details';
$string['page_15_page_subhdimg'] = 'Sub header img';
$string['page_15_page_subhdimg_desc'] = 'Page sub header image name, dont show if empty ';
$string['page_15_page_enroll_role'] = 'Registered student role';
$string['page_15_page_enroll_role_desc'] = 'Registered student role';
$string['page_15_page_sidebar_info_header'] = 'Sidebar Info Header';
$string['page_15_page_sidebar_info_header_desc'] = 'Sidebar info widget header';
$string['page_15_page_sidebar_info_header_default'] = 'Course Price|Instructor|Lectures|Enrolled|Deadline';
$string['page_15_page_enroll_explanation'] = 'Enroll exp.';
$string['page_15_page_enroll_explanation_desc'] = 'Enter enroll exp.';
$string['page_15_page_enroll_explanation_default'] = 'Quis autem vel eum iurrepre hende quin ea voluptate velit esse quanihily molestiae consequatur';
$string['page_15_page_enroll_button'] = 'Button';
$string['page_15_page_enroll_button_desc'] = 'Button name';
$string['page_15_page_enroll_button_default'] = 'Enroll Now';
$string['page_15_page_sidebar_header'] = 'Sidebar Header';
$string['page_15_page_sidebar_header_desc'] = 'Sidebar widget header';
$string['page_15_page_sidebar_header_default'] = 'Popular Courses';
// Section 1.
$string['page_15_section_1'] = 'SECTION 1 - Course Details ';
$string['page_15_s1_enabled'] = 'Enable';
$string['page_15_s1_enabled_desc'] = 'Enable or disabled page 15 section 1 at the your courses details.';
$string['page_15_s1_tab'] = 'Tabs';
$string['page_15_s1_tab_desc'] = 'Course detail tabs names';
$string['page_15_s1_tab_default'] = 'Description|Curriculum|Reviews';
$string['page_15_s1_curriculum'] = 'Curriculum';
$string['page_15_s1_curriculum_desc'] = 'Course details curriculum.';
$string['page_15_s1_curriculum_default'] = '<h5>Why You Learn In Coach</h5>
<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos quirati voluptatem sequi nesciunt. Neque porro quisquam est qui dolorem ipsum quia dolor sit aconsece tuadipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam </p>
<ul class="about_list style_2">
    <li>
        Business Consulting
    </li>
    <li>
        Career Development
    </li>
    <li>
        Financial Solutions
    </li>
</ul>';
$string['page_15_s1_cmd_header'] = 'Comments header';
$string['page_15_s1_cmd_header_desc'] = 'Course details comment header.';
$string['page_15_s1_cmd_header_default'] = 'People Comments';
$string['page_15_s1_form_header'] = 'Comments form header';
$string['page_15_s1_form_header_desc'] = 'Course details comments contact form header';
$string['page_15_s1_form_header_default'] = 'Leave A Reply';
$string['page_15_s1_form_text'] = 'Form fields headers';
$string['page_15_s1_form_text_desc'] = 'Form fields headers';
$string['page_15_s1_form_text_default'] = 'Your Full Name|Your Email|Write Message';
$string['page_15_s1_form_button'] = 'Button';
$string['page_15_s1_form_button_desc'] = 'Button text';
$string['page_15_s1_form_button_default'] = 'Send Comment';
$string['page_15_s1_form_button_lnk'] = 'Button link';
$string['page_15_s1_form_button_lnk_desc'] = 'Button link url';
$string['page_15_s1_form_button_lnk_default'] = '/../../local/contact/index.php';
// Section 2.
$string['page_15_section_2'] = 'SECTION 2 - Plane ';
$string['page_15_s2_enabled'] = 'Enable';
$string['page_15_s2_enabled_desc'] = 'Enable or disabled page 15 section 2 at the your courses plane.';
$string['page_15_s2_caption'] = 'Caption';
$string['page_15_s2_caption_desc'] = 'Add a caption for your page section 2';
$string['page_15_s2_caption_default'] = 'The Life Coach School Has The Most Amazing Tools And Cutting-Edge Training';
// Section 3.
$string['page_15_section_3'] = 'SECTION 3 - Course list ';
$string['page_15_s3_enabled'] = 'Enable';
$string['page_15_s3_enabled_desc'] = 'Enable or disabled page 15 section 3 at the your courses list.';
$string['page_15_s3_headline'] = 'Headline';
$string['page_15_s3_headline_desc'] = 'Headline text';
$string['page_15_s3_headline_default'] = 'RELATED COACH';
$string['page_15_s3_header'] = 'Header text';
$string['page_15_s3_header_desc'] = 'Header text';
$string['page_15_s3_header_default'] = 'We Provide Professional Life Coachs';
// Section 4.
$string['page_15_section_4'] = 'SECTION 4 - Cta ';
$string['page_15_s4_enabled'] = 'Enable';
$string['page_15_s4_enabled_desc'] = 'Enable or disabled page 15 section 4 at the your course details.';
$string['page_15_s4_headline'] = 'Headline';
$string['page_15_s4_headline_desc'] = 'Headline';
$string['page_15_s4_headline_default'] = 'Our Professionals';
$string['page_15_s4_header'] = 'Header';
$string['page_15_s4_header_desc'] = 'Header';
$string['page_15_s4_header_default'] = 'Do You Want to Transform Your Life For Better ?';
$string['page_15_s4_button'] = 'Button';
$string['page_15_s4_button_desc'] = 'Button text';
$string['page_15_s4_button_default'] = 'Contact Us';
$string['page_15_s4_button_lnk'] = 'Button link';
$string['page_15_s4_button_lnk_desc'] = 'Button link url';
$string['page_15_s4_button_lnk_default'] = '?page=10';
// Page team details.
$string['page_16_info'] = '* '.'PAGE 16 - TEAM DETAILS';
$string['page_16_info_desc'] = 'TEAM DETAILS - Enter the settings for page team details';
$string['page_16_page_title'] = 'Page title';
$string['page_16_page_title_desc'] = 'Enter page title ';
$string['page_16_page_title_default'] = 'Team Details';
$string['page_16_page_subhdimg'] = 'Sub header img';
$string['page_16_page_subhdimg_desc'] = 'Page sub header image name, dont show if empty ';
// Section 1.
$string['page_16_section_1'] = 'SECTION 1 - Team Details ';
$string['page_16_section_1_desc'] = 'Coach tab counter box settings are taken from h2_block_2';
$string['page_16_s1_enabled'] = 'Enable';
$string['page_16_s1_enabled_desc'] = 'Enable or disabled page 16 section 1 at the your team details.';
$string['page_16_s1_header_text'] = 'Sidebar header text';
$string['page_16_s1_header_text_desc'] = 'Sidebar header text';
$string['page_16_s1_header_text_default'] = 'Location|Email Me|Phone';
$string['page_16_s1_video_link'] = 'Video link';
$string['page_16_s1_video_link_desc'] = 'Video link';
$string['page_16_s1_video_link_default'] = '';

$string['page_16_s1_tab'] = 'Tab names';
$string['page_16_s1_tab_desc'] = 'Teams details tab names';
$string['page_16_s1_tab_default'] = 'Description|Coach';
$string['page_16_s1_headline'] = 'Skills';
$string['page_16_s1_headline_desc'] = 'Teams details coach tab skills header';
$string['page_16_s1_headline_default'] = 'Best Skills';
$string['page_16_s1_skill'] = 'Skills settings text';
$string['page_16_s1_skill_desc'] = 'Teams details Skills settings text';
$string['page_16_s1_skill_default'] = '89,Business Consulting|93,Health Coaching|87,Life Coaching|92,Career Development';
// Section 2.
$string['page_16_section_2'] = 'SECTION 2 - Team Details ';
$string['page_16_s2_enabled'] = 'Enable';
$string['page_16_s2_enabled_desc'] = 'Enable or disabled page 16 section 2 at the your team details.';
$string['page_16_s2_headline'] = 'Headline';
$string['page_16_s2_headline_desc'] = 'Headline';
$string['page_16_s2_headline_default'] = 'Our Professionals';
$string['page_16_s2_header'] = 'Header';
$string['page_16_s2_header_desc'] = 'Header';
$string['page_16_s2_header_default'] = 'Do You Want to Transform Your Life For Better ?';
$string['page_16_s2_button'] = 'Button';
$string['page_16_s2_button_desc'] = 'Button text';
$string['page_16_s2_button_default'] = 'Contact Us';
$string['page_16_s2_button_lnk'] = 'Button link';
$string['page_16_s2_button_lnk_desc'] = 'Button link url';
$string['page_16_s2_button_lnk_default'] = '?page=10';
// Page portfolio grid.
$string['page_17_info'] = '* '.'PAGE 17 - PORTFOLIO GRID';
$string['page_17_info_desc'] = 'PORTFOLIO GRID - Enter the settings for page portfolio';
$string['page_17_page_title'] = 'Page title';
$string['page_17_page_title_desc'] = 'Enter page title ';
$string['page_17_page_title_default'] = 'Portfolio Grid';
$string['page_17_page_subhdimg'] = 'Sub header img';
$string['page_17_page_subhdimg_desc'] = 'Page sub header image name, dont show if empty ';
// Section 1.
$string['page_17_section_1'] = 'SECTION 1 - Portfolio Grid ';
$string['page_17_s1_enabled'] = 'Enable';
$string['page_17_s1_enabled_desc'] = 'Enable or disabled page 17 section 1 at the your portfolio page.';
$string['page_17_s1_count'] = 'Count';
$string['page_17_s1_count_desc'] = 'Number of portfolio to show';
$string['page_17_s1_count_default'] = '9';
$string['page_17_s1_group'] = 'Group';
$string['page_17_s1_group_desc'] = 'Portfolio grid group ( no more than 3 )';
$string['page_17_s1_category'] = 'Category';
$string['page_17_s1_category_desc'] = 'Portfolio grid category';
$string['page_17_s1_title'] = 'Title';
$string['page_17_s1_title_desc'] = 'Portfolio grid title';
$string['page_17_s1_lnk'] = 'Link';
$string['page_17_s1_lnk_desc'] = 'Link url';
$string['page_17_s1_lnk_default'] = '?page=20';
// Section 2.
$string['page_17_section_2'] = 'SECTION 2 - Cta ';
$string['page_17_s2_enabled'] = 'Enable';
$string['page_17_s2_enabled_desc'] = 'Enable or disabled page 17 section 2 at the your portfolio page.';
$string['page_17_s2_headline'] = 'Headline';
$string['page_17_s2_headline_desc'] = 'Headline';
$string['page_17_s2_headline_default'] = 'Our Professionals';
$string['page_17_s2_header'] = 'Header';
$string['page_17_s2_header_desc'] = 'Header';
$string['page_17_s2_header_default'] = 'Do You Want to Transform Your Life For Better ?';
$string['page_17_s2_button'] = 'Button';
$string['page_17_s2_button_desc'] = 'Button text';
$string['page_17_s2_button_default'] = 'Contact Us';
$string['page_17_s2_button_lnk'] = 'Button link';
$string['page_17_s2_button_lnk_desc'] = 'Button link url';
$string['page_17_s2_button_lnk_default'] = '?page=10';
// Page portfolio gallery.
$string['page_18_info'] = '* '.'PAGE 18 - PORTFOLIO GALLERY';
$string['page_18_info_desc'] = 'PORTFOLIO GALLERY - Enter the settings for page portfolio';
$string['page_18_page_title'] = 'Page title';
$string['page_18_page_title_desc'] = 'Enter page title ';
$string['page_18_page_title_default'] = 'Portfolio Gallery';
$string['page_18_page_subhdimg'] = 'Sub header img';
$string['page_18_page_subhdimg_desc'] = 'Page sub header image name, dont show if empty ';
// Section 1.
$string['page_18_section_1'] = 'SECTION 1 - Portfolio Gallery';
$string['page_18_s1_enabled'] = 'Enable';
$string['page_18_s1_enabled_desc'] = 'Enable or disabled page 18 section 1 at the your portfolio page.<br>
<b> Warning! </b><br>
theme_wellko_page_17 (section-1) settings are used.<br>
(Page - PAGE-17 PORTFOLIO GRID - SECTION 1)
';
$string['page_18_s1_count_default'] = '9';
// Section 2.
$string['page_18_section_2'] = 'SECTION 2 - Cta ';
$string['page_18_s2_enabled'] = 'Enable';
$string['page_18_s2_enabled_desc'] = 'Enable or disabled page 18 section 2 at the your portfolio page.';
$string['page_18_s2_headline'] = 'Headline';
$string['page_18_s2_headline_desc'] = 'Headline';
$string['page_18_s2_headline_default'] = 'Our Professionals';
$string['page_18_s2_header'] = 'Header';
$string['page_18_s2_header_desc'] = 'Header';
$string['page_18_s2_header_default'] = 'Do You Want to Transform Your Life For Better ?';
$string['page_18_s2_button'] = 'Button';
$string['page_18_s2_button_desc'] = 'Button text';
$string['page_18_s2_button_default'] = 'Contact Us';
$string['page_18_s2_button_lnk'] = 'Button link';
$string['page_18_s2_button_lnk_desc'] = 'Button link url';
$string['page_18_s2_button_lnk_default'] = '?page=10';
// Page portfolio masonry.
$string['page_19_info'] = '* '.'PAGE 19 - PORTFOLIO MASONRY';
$string['page_19_info_desc'] = 'PORTFOLIO MASONRY - Enter the settings for page portfolio';
$string['page_19_page_title'] = 'Page title';
$string['page_19_page_title_desc'] = 'Enter page title ';
$string['page_19_page_title_default'] = 'Portfolio Masonry';
$string['page_19_page_subhdimg'] = 'Sub header img';
$string['page_19_page_subhdimg_desc'] = 'Page sub header image name, dont show if empty ';
// Section 1.
$string['page_19_section_1'] = 'SECTION 1 - Portfolio Masonry';
$string['page_19_s1_enabled'] = 'Enable';
$string['page_19_s1_enabled_desc'] = 'Enable or disabled page 18 section 1 at the your portfolio page.';
$string['page_19_s1_button'] = 'Button';
$string['page_19_s1_button_desc'] = 'Button text';
$string['page_19_s1_button_default'] = 'View All Project';
$string['page_19_s1_button_lnk'] = 'Button link';
$string['page_19_s1_button_lnk_default'] = '?page=17';
$string['page_19_s1_button_lnk_desc'] = 'Button link url
<br><br>
<b> Warning! </b><br>
theme_wellko_page_17 (section-1) settings are used.<br>
(Page - PAGE-17 PORTFOLIO GRID - SECTION 1)';
// Section 2.
$string['page_19_section_2'] = 'SECTION 2 - Cta ';
$string['page_19_s2_enabled'] = 'Enable';
$string['page_19_s2_enabled_desc'] = 'Enable or disabled page 18 section 2 at the your portfolio page.';
$string['page_19_s2_headline'] = 'Headline';
$string['page_19_s2_headline_desc'] = 'Headline';
$string['page_19_s2_headline_default'] = 'Our Professionals';
$string['page_19_s2_header'] = 'Header';
$string['page_19_s2_header_desc'] = 'Header';
$string['page_19_s2_header_default'] = 'Do You Want to Transform Your Life For Better ?';
$string['page_19_s2_button'] = 'Button';
$string['page_19_s2_button_desc'] = 'Button text';
$string['page_19_s2_button_default'] = 'Contact Us';
$string['page_19_s2_button_lnk'] = 'Button link';
$string['page_19_s2_button_lnk_desc'] = 'Button link url';
$string['page_19_s2_button_lnk_default'] = '?page=10';
// Page portfolio details.
$string['page_20_info'] = '* '.'PAGE 20 - PORTFOLIO DETAILS';
$string['page_20_info_desc'] = 'PORTFOLIO DETAILS - Enter the settings for page portfolio';
$string['page_20_page_title'] = 'Page title';
$string['page_20_page_title_desc'] = 'Enter page title ';
$string['page_20_page_title_default'] = 'Portfolio Details';
$string['page_20_page_subhdimg'] = 'Sub header img';
$string['page_20_page_subhdimg_desc'] = 'Page sub header image name, dont show if empty ';
// Section 1.
$string['page_20_section_1'] = 'SECTION 1 - Portfolio Details ';
$string['page_20_s1_enabled'] = 'Enable';
$string['page_20_s1_enabled_desc'] = 'Enable or disabled page 20 section 1 at the your portfolio page.';
$string['page_20_s1_html'] = 'HTML caption';
$string['page_20_s1_html_desc'] = 'HTML caption page 20 section 1 at the your portfolio page.';
// Section 2.
$string['page_20_section_2'] = 'SECTION 2 - Post Navigation ';
$string['page_20_s2_enabled'] = 'Enable';
$string['page_20_s2_enabled_desc'] = 'Enable or disabled page 20 section 2 at the your portfolio page.
<br><br>
<b> Warning! </b><br>
h2_09_block settings are used.<br>
(Second front page - BLOCK-09 BLOG)
';
// Section 3.
$string['page_20_section_3'] = 'SECTION 3 - Related Project ';
$string['page_20_s3_enabled'] = 'Enable';
$string['page_20_s3_enabled_desc'] = 'Enable or disabled page 20 section 3 at the your portfolio page.
<br><br>
<b> Warning! </b><br>
page_17 (section-1) settings are used.<br>
(Page - PAGE-17 PORTFOLIO GRID - SECTION 1)
';
// Section 4.
$string['page_20_section_4'] = 'SECTION 4 - Cta ';
$string['page_20_s4_enabled'] = 'Enable';
$string['page_20_s4_enabled_desc'] = 'Enable or disabled page 20 section 4 at the your portfolio page.';
$string['page_20_s4_headline'] = 'Headline';
$string['page_20_s4_headline_desc'] = 'Headline';
$string['page_20_s4_headline_default'] = 'Our Professionals';
$string['page_20_s4_header'] = 'Header';
$string['page_20_s4_header_desc'] = 'Header';
$string['page_20_s4_header_default'] = 'Do You Want to Transform Your Life For Better ?';
$string['page_20_s4_button'] = 'Button';
$string['page_20_s4_button_desc'] = 'Button text';
$string['page_20_s4_button_default'] = 'Contact Us';
$string['page_20_s4_button_lnk'] = 'Button link';
$string['page_20_s4_button_lnk_desc'] = 'Button link url';
$string['page_20_s4_button_lnk_default'] = '?page=10';

// Block 4 social media.
$string['facebook'] = 'fab fa-facebook-f';
$string['twitter'] = 'fab fa-twitter';
$string['instagram'] = 'fab fa-instagram';
$string['linkedin'] = 'fab fa-linkedin';
$string['youtube'] = 'fab fa-youtube';
$string['pinterest'] = 'fab fa-pinterest';
$string['dribbble'] = 'fab fa-dribbble';
$string['email'] = 'fas fa-envelope';
$string['medium'] = 'fab fa-medium';
$string['figma'] = 'fab fa-figma';
$string['snapchat'] = 'fab fa-snapchat';
$string['github'] = 'fab fa-github';
$string['behance'] = 'fab fa-behance';
// Other blocks.
$string['other_block'] = 'Other';
$string['other_block_heading'] = 'Other blocks';
$string['other_block_desc'] = 'Other HTML blocks settings';
// Aside block.
$string['aside_info'] = '# '.'ASIDE BLOCK';
$string['aside_info_desc'] = 'ASIDE BLOCK - Enter the settings for aside';
$string['aside_enabled'] = 'Enable';
$string['aside_enabled_desc'] = 'Enable or disabled aside at the your home page';
$string['aside_caption'] = 'Caption';
$string['aside_caption_desc'] = 'Caption';
$string['aside_caption_default'] = 'Sed ut perspiciatis unde omnis iste natus error voluptatem accan tium doloremque laudantium totam rem aperiam';
$string['aside_header1'] = 'Header 1';
$string['aside_header1_desc'] = 'Block aside add a header ( Popular Courses )';
$string['aside_header1_default'] = 'Popular Courses';
$string['aside_header2'] = 'Header 2';
$string['aside_header2_desc'] = 'Block aside add a header ( Popular Categories )';
$string['aside_header2_default'] = 'Popular Categories';
// Terms block.
$string['terms_info'] = '* '.'TERMS & CONDITIONS BLOCK';
$string['terms_info_desc'] = 'TERMS & CONDITIONS BLOCK - Enter the settings for terms';
$string['terms_header1'] = 'Title';
$string['terms_header1_desc'] = 'Block terms add a title';
$string['terms_header1_default'] = 'Terms & Conditions';
$string['terms_subhdimg'] = 'Sub header img';
$string['terms_subhdimg_desc'] = 'Page sub header image name, dont show if empty ';
$string['terms_caption'] = 'Terms & Conditions';
$string['terms_caption_desc'] = 'Terms & Conditions Details';
// Privacy block.
$string['privacy_info'] = '* '.'PRIVACY BLOCK';
$string['privacy_info_desc'] = 'PRIVACY BLOCK - Enter the settings for privacy';
$string['privacy_header1'] = 'Title';
$string['privacy_header1_desc'] = 'Block privacy add a title';
$string['privacy_header1_default'] = 'Privacy Policy';
$string['privacy_subhdimg'] = 'Sub header img';
$string['privacy_subhdimg_desc'] = 'Page sub header image name, dont show if empty ';
$string['privacy_caption'] = 'Privacy Policy';
$string['privacy_caption_desc'] = 'Privacy Policy Details';
// Home page footer.
$string['footer_page'] = 'Footer';
$string['footer_info'] = '* '.'FOOTER';
$string['footer_info_desc'] = 'FOOTER - Enter the settings for footer';
$string['footer_enabled'] = 'Enabled';
$string['footer_enabled_desc'] = 'Enable or disabled footer at the your home page';
$string['footer_logo'] = 'Select the logo';
$string['footer_logo_desc'] = 'Logo selection';
$string['footer_col1_header'] = 'Colon 1 header';
$string['footer_col1_header_desc'] = 'Colon 1 header';
$string['footer_col1_caption'] = 'Colon 1 caption';
$string['footer_col1_caption_desc'] = 'Colon 1 caption';
$string['footer_col1_caption_default'] = '
<ul class="info">
    <li>
        <a href="#">256 Elizaberth Ave Str, Brooklyn, CA, 90025</a>
    </li>
    <li>
        <a href="tel:+01234567899">+012 (345) 678 99</a>
    </li>
    <li>
        <a href="mailto:example@example.com">example@example.com</a>
    </li>
</ul>';
$string['footer_col2_header'] = 'Colon 2 header';
$string['footer_col2_header_desc'] = 'Column 2 enter header';
$string['footer_col2_link'] = 'Colon 2 link';
$string['footer_col2_link_desc'] = 'Colon 2 link area
<pre>
    About Us|../?page=2|||_blank
    Our Story|../?page=9|only show language in english|en|_blank
    Contact|../?page=10
    Terms & Condition|../?page=terms
    Privacy Policy|../?page=privacy|only show language in english|en|_blank
</pre>';
$string['footer_col2_link_default'] = '
    About Us|../?page=2|||_blank
    Our Story|../?page=9|only show language in english|en|_blank
    Contact|../?page=10
    Terms & Condition|../?page=terms
    Privacy Policy|../?page=privacy|only show language in english|en|_blank';
$string['footer_col3_header'] = 'Colon 3 header';
$string['footer_col3_header_desc'] = 'Column 3 enter header';
$string['footer_col3_link'] = 'Colon 3 link';
$string['footer_col3_link_desc'] = 'Colon 3 link area
<pre>
    Blog|../?page=12
    Blog Details|?blog-details=2|||_blank
    Portfolio|?page=20|only show language in english|en|_blank
    Gallery|?page=18
    FAQS|?page=8|only show language in english|en|_blank
</pre>';
$string['footer_col3_link_default'] = '
    Blog|../?page=12
    Blog Details|../?blog-details=2|||_blank
    Portfolio|../?page=20|only show language in english|en|_blank
    Gallery|../?page=18
    FAQS|../?page=8|only show language in english|en|_blank ';
$string['footer_col4_header'] = 'Colon 4 header';
$string['footer_col4_header_desc'] = 'Column 4 enter header';
$string['footer_col4_caption'] = 'Colon 4 caption';
$string['footer_col4_caption_desc'] = 'Colon 4 caption enter';
$string['footer_col4_caption_default'] = 'It is a long established fact that a reader will be distracted by
the readable content of a page when looking at its layout. ';
$string['footer_social'] = 'Social links';
$string['footer_social_desc'] = 'Social links';
$string['footer_social_default'] = '<ul class="social">
<li><a href="#" class="icoFacebook" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="#" class="icoTwitter" title="Twitter"><i class="fab fa-twitter"></i></a></li>
<li><a href="#" class="icoPinterest" title="Pinterest"><i class="fab fa-pinterest"></i></a></li>
<li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
<li><a href="#" class="icoInstagram" title="Instagram"><i class="fab fa-instagram"></i></a></li>
<li><a href="#" class="icoYouTube" title="YouTube"><i class="fab fa-youtube"></i></a></li>
</ul>';
$string['footer_email'] = 'Show email form';
$string['footer_email_desc'] = 'Enable or disabled footer email form';
$string['footer_appimg'] = 'Show app image';
$string['footer_appimg_desc'] = 'Enable or disabled footer app image';
$string['footer_appimg_link'] = 'App image link url';
$string['footer_appimg_link_desc'] = 'App image-1 link url example : https://www.themeaalmond.com';
$string['footer_appimg_link_1'] = 'App image link url';
$string['footer_appimg_link_1_desc'] = 'App image-2 link url example : https://www.themeaalmond.com';
$string['footer_copyright'] = 'Copyright';
$string['footer_copyright_desc'] = 'Copyright';
$string['footer_copyright_default'] = 'Copyright © 2022 Designed by
    <a href="#">Your Site</a>.  All rights reserved.';
$string['footer_moodle'] = 'Enable frontpage button';
$string['footer_moodle_desc'] = 'Enable or disabled footer moodle original frontpage';

// Other HTML block  !DO NOT DELETE !DO NOT CHANGE.
$string['other_block_end'] = '--End--';
$string['other_block_end_desc'] = '';
// Home page one HTML block  !DO NOT DELETE !DO NOT CHANGE.
$string['h1_block_end'] = '--End--';
$string['h1_block_end_desc'] = '';
// Home page two HTML block  !DO NOT DELETE !DO NOT CHANGE.
$string['h2_block_end'] = '--End--';
$string['h2_block_end_desc'] = '';
// Home page three HTML block  !DO NOT DELETE !DO NOT CHANGE.
$string['h3_block_end'] = '--End--';
$string['h3_block_end_desc'] = '';
// Home page three HTML block  !DO NOT DELETE !DO NOT CHANGE.
$string['h4_block_end'] = '--End--';
$string['h4_block_end_desc'] = '';
// All page !DO NOT DELETE !DO NOT CHANGE.
$string['page_all_end'] = '--End--';
$string['page_all_end_desc'] = '';
// Frontpage HTML block  !DO NOT DELETE !DO NOT CHANGE.
$string['frontpageblockend'] = '--End--';
$string['frontpageblockenddesc'] = '';
// Course single page.
$string['coursesummary'] = 'Course Summary';
// Flat navigation.
$string['coursesection'] = 'Course Sections';
$string['h3_02_block_three_text_1_default'] = 'Personal Coach';
$string['h3_02_block_three_text_2_default'] = 'Business Coach';
$string['h3_02_block_three_text_1_tr'] = 'Kişisel Koç';
$string['h3_02_block_three_text_1_tr_default'] = 'Kişisel Koç';