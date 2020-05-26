 <?php
 /**
 * template name: Home Page
 */
 get_header();
 get_template_part('sections/carousel');
 get_section_homepage('home_section_1');
 get_section_homepage('home_section_2');
 get_template_part('sections/banner');
 get_section_homepage('home_section_3');
 get_template_part('sections/banner-privacy');
 get_template_part('sections/news');
 get_template_part('sections/modal');
 get_footer();
?>
