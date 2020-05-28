<section class="lastest my-40">
  <div class="lastest__contain container">
    <h3 class="lastest__title title--section text--upcase">
      sản phẩm khuyến mãi
    </h3>
    <?php if(check_slider_home_page('home_section_2_slider')) : ?>
      <div class="lastest__list slick__slider">
    <?php else:?>
     <div class="lastest__list row-divide">
    <?php endif; ?>
      <?php
      $args = array(
        'post_type'   => 'san-pham',
        'post_status' => 'publish',
        'show_posts'   =>  12,
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
      <?php if(check_slider_home_page('home_section_2_slider')) : ?>
      <div class="lastest__item d--block">
        <?php else: ?>
      <div class="lastest__item d--block col-divide-3 col-divide-md-6 col-divide-sm-12">
      <?php endif; ?>
        <div class="lastest__item-img">
         <img src="<?php echo hk_get_thumb(get_the_id(),395,395) ?>" alt="<?php the_title(); ?>" />
         <div class="lastest__item-tag tag">
           <img src="<?php echo get_theme_file_uri('assets/images/new-product-sticker.svg') ?>" alt="lastest-product-tag">
         </div>
         <?php if(is_sale_off()):?>
           <span class="lastest__item-tag tag sale text--light">
             <?php percent_sale(); ?>&nbsp;%
           </span>
         <?php endif;?>
         <div class="lastest__config">
           <div class="lastest__config-btn">
             <button class="btn" type="button" aria-label="view-quick" data-view="<?php the_title(); ?>" name="viewQuick" id="viewQuick">Xem nhanh</button>
           </div>
           <div class="lastest__config-btn">
             <a href="<?php the_permalink(); ?>" class="btn" id="viewDetail">Xem chi tiết</a>
           </div>
         </div>
        </div>
        <p class="lastest__item-title title--item">
          <?php the_title(); ?>
        </p>
        <div class="lastest__item-price position--relative">
          <p <?php if(is_sale_off()):?>  class="line--through" <?php endif;?>>
            <?php echo convert_price( get_field('product_price')) ?> &nbsp;VNĐ
          </p>
          <?php if(is_sale_off()):?>
            <p>
              <?php  echo convert_price(get_field('product_price_sale') )?> &nbsp;VNĐ
            </p>
          <?php endif;?>
          <?php if(is_sold_out()): ?>
          <img class="sale__item-tag tag sold" src="<?php echo get_theme_file_uri('assets/images/icon out stock-01.svg') ?>" style="width: 45px" alt="sale-product-tag">
          <?php endif; ?>
        </div>
      </div>
      <?php endwhile;wp_reset_postdata();
      ?>
    </div>
    <div class="lastest__btn">
      <a href="<?php bloginfo('url')?>/khuyen-mai/san-pham-khuyen-mai" class="btn">
        Xem thêm >>
      </a>
    </div>
  </div>
</section>
