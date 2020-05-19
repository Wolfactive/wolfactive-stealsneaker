<section class="carousel">
  <div class="carousel__contain">
    <div class="carousel__list">
      <?php $getposts = new WP_query();
      $getposts->query('post_status=publish&showposts=3&post_type=slider&order_by=DESC'); ?>
      <?php global $wp_query; $wp_query->in_the_loop = true; ?>
      <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
      <div class="carousel__item">
        <a class="d--block" href="<?php echo_element_field('link_slider','','javascript:void(0)','') ?>">
          <img class="d--block" src="<?php the_field('image_slider') ?>" alt="carousel-img">
        </a>
      </div>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>
  </div>
</section>
