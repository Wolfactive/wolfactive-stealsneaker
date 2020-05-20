<?php
get_header();
get_template_part('sections/breadcums');
?>
<div class="page__contain my-60">
  <div class="container">    
    <div class="page__content my-40">
      <?php the_content(); ?>
    </div>
  </div>
</div>
<?php
get_footer();
?>
