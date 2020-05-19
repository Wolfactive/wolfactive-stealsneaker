<section class="lastest my-40">
  <div class="lastest__contain container">
    <h3 class="lastest__title title--section text--upcase">
      sản phẩm mới
    </h3>
    <div class="lastest__list row-divide">
      <?php
      $args = array(
        'post_type'   => 'san-pham',
        'post_status' => 'publish',
        'tax_query' => array(
          array(
            'taxonomy' => 'khuyen-mai',
            'field' => 'slug',
            'terms' => 'san-pham-moi',
            'include_children' => true,
          )
        ),
           'meta_query' => array(
           array(
             'key' => 'product_popular',
             'value' => true,
             'compare' => '='
           ),
        ),
      );
      $lastest_list = new WP_Query( $args );
      while( $lastest_list->have_posts() ) :
      $lastest_list->the_post();   ?>
      <a href="<?php the_permalink(); ?>" class="lastest__item d--block col-divide-3 col-divide-md-6">
        <div class="lastest__item-img">
         <?php the_post_thumbnail('medium'); ?>
         <div class="lastest__item-tag tag">
           <img src="<?php echo get_theme_file_uri('assets/images/new-product-sticker.svg') ?>" alt="lastest-product-tag">
         </div>
        </div>
        <p class="lastest__item-title title--item">
          <?php the_title(); ?>
        </p>
        <p class="lastes__item-price position--relative">
          <?php the_field('product_price') ?>
          <?php if(is_sold_out()): ?>
          <img class="lastest__item-tag tag sold" src="<?php echo get_theme_file_uri('assets/images/icon out stock-01.svg') ?>" style="width: 45px" alt="lastest-product-tag">
          <?php endif; ?>
        </p>
      </a>
      <?php endwhile;wp_reset_postdata();
      ?>

    </div>
    <div class="lastest__btn">
      <a href="<?php echo site_url('san-pham-khuyen-mai') ?>" class="btn">
        Xem thêm >>
      </a>
    </div>
  </div>
</section>
