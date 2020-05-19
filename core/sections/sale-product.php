<section class="lastest my-40">
  <div class="lastest__contain container">
    <h3 class="lastest__title title--section text--upcase">
      sản phẩm khuyến mãi
    </h3>
    <div class="lastest__list row-divide">
      <?php
      $args = array(
        'post_type'   => 'san-pham',
        'post_status' => 'publish',
        'showposts'   =>  10,
        'tax_query' => array(
          array(
            'taxonomy' => 'khuyen-mai',
            'field' => 'slug',
            'terms' => 'san-pham-khuyen-mai',
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
      <a href="<?php the_permalink(); ?>" class="lastest__item d--block col-divide-3 col-divide-md-6 col-divide-sm-12">
        <div class="lastest__item-img">
         <?php the_post_thumbnail('medium'); ?>
         <div class="lastest__item-tag tag">
           <img src="<?php echo get_theme_file_uri('assets/images/new-product-sticker.svg') ?>" alt="lastest-product-tag">
         </div>
         <?php if(is_sale_off()):?>
           <span class="lastest__item-tag tag sale text--light">
             <?php percent_sale(); ?>&nbsp;%
           </span>
         <?php endif;?>
        </div>
        <p class="lastest__item-title title--item">
          <?php the_title(); ?>
        </p>
        <div class="lastest__item-price position--relative">
          <p <?php if(is_sale_off()):?>  class="line--through" <?php endif;?>>
            <?php the_field('product_price') ?> &nbsp;VNĐ
          </p>
          <?php if(is_sale_off()):?>
            <p>
              <?php the_field('product_price_sale') ?> &nbsp;VNĐ
            </p>
          <?php endif;?>
          <?php if(is_sold_out()): ?>
          <img class="sale__item-tag tag sold" src="<?php echo get_theme_file_uri('assets/images/icon out stock-01.svg') ?>" style="width: 45px" alt="sale-product-tag">
          <?php endif; ?>
        </div>
      </a>
      <?php endwhile;wp_reset_postdata();
      ?>

    </div>
    <div class="lastest__btn">
      <a href="<?php echo site_url('san-pham-moi') ?>" class="btn">
        Xem thêm >>
      </a>
    </div>
  </div>
</section>
