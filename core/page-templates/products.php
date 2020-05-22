<?php
/**
* template name: Lọc sản phẩm
*/
get_header();
get_template_part('sections/breadcums');
?>
<section class="taxonomy_page py-40" id="taxonomyPage">
  <div class="container">
    <div class="product__filter">
      <div class="product__filter-title">
        <button class="btn text--light" aria-label="filter-button">
          <img class="mxr-5" src="<?php echo get_theme_file_uri('assets\images\filter.svg'); ?>" alt="filter-button" style="width:auto">
          <span class="text--upcase">Filter <i class="fas fa-angle-down"></i></span>
        </button>
      </div>
    </div>
    <div class="product__list row-divide">
      <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
        'posts_per_page' => 16,
        'post_status'=>'publish',
        'orderby' => 'menu_order',
        'order'=> 'DESC',
        'paged'=>$paged
        );
        $query = new WP_Query($args); ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
      <a href="<?php the_permalink(); ?>" class="product__item d--block col-divide-3 col-divide-md-6 col-divide-sm-12">
        <div class="product__item-img">
         <?php the_post_thumbnail('medium'); ?>
         <div class="product__item-tag tag">
           <img src="<?php echo get_theme_file_uri('assets/images/new-product-sticker.svg') ?>" alt="product-product-tag">
         </div>
         <?php if(is_sale_off()):?>
           <span class="product__item-tag tag sale text--light">
             <?php percent_sale(); ?>&nbsp;%
           </span>
         <?php endif;?>
        </div>
        <p class="product__item-title title--item">
          <?php the_title(); ?>
        </p>
        <div class="product__item-price position--relative">
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
      <?php endwhile; ?>
    </div>
    <div class="pagination_steal">
      <?php
      $GLOBALS['wp_query']->max_num_pages = $query->max_num_pages;
      the_posts_pagination( array(
      'mid_size' => 3,
      'prev_text' => __( 'Về', 'welsh-womens-aid' ),
      'next_text' => __( 'Tiếp', 'welsh-womens-aid' ),
      ) ); ?>    
    </div>
  </div>
</section>
<?php
get_footer();
?>
