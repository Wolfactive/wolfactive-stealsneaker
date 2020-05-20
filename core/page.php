<?php
get_header();
get_template_part('sections/breadcums');
?>
<div class="page__contain my-60">
  <div class="container">
    <h1 class="title--section text--upcase text--center">
      <?php the_title() ?>
    </h1>
    <div class="page__content my-40">
      <?php the_content(); ?>
    </div>
  </div>
</div>
<?php
get_footer();
?>
