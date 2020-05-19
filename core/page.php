<?php
get_header();
get_template_part('sections/title');
get_template_part('sections/breadcums');
?>
<div class="page__contain">
  <div class="container">
    <?php the_content(); ?>
  </div>
</div>
<?php
get_footer();
?>
