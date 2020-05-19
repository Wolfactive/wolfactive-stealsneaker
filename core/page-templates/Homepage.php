 <?php
 /**
 * template name: Home Page
 */
 get_header();
 get_template_part('sections/carousel');
<<<<<<< HEAD
 get_template_part('sections/lastest-products');
 get_template_part('sections/news');
=======
 get_section_homepage('home_section_1');
 get_section_homepage('home_section_2');
 get_template_part('sections/banner');
 get_section_homepage('home_section_3');
 get_template_part('sections/banner-privacy');
>>>>>>> ae69529a9bd1fc7b5b05eda9a75d8f2dd043d7ce
 get_footer();
?>
