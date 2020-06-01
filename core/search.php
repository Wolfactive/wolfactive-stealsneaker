<?php
get_header();
 ?>

<section class="container search_style">
<?php

  if (have_posts()){?>
  <div class="product_ch">
      <div class="product__list row-divide py-40">
    <?php  while(have_posts()) : the_post(); ?>

        <div  class="product__item d--block col-divide-3 col-divide-md-6 col-divide-sm-12">
          <div class="product__item-img">
            <img src="<?php echo hk_get_thumb(get_the_id(),395,395) ?>" alt="<?php the_title(); ?>" />
          <div class="product__item-tag tag">
            <img src="<?php echo get_theme_file_uri('assets/images/new-product-sticker.svg') ?>" alt="product-product-tag">
          </div>
          <?php if(is_sale_off()):?>
            <span class="product__item-tag tag sale text--light">
              <?php percent_sale(); ?>&nbsp;%
            </span>
          <?php endif;?>
          <div class="lastest__config">
            <div class="lastest__config-btn">
              <button class="btn viewQuick" type="button" aria-label="view-quick" data-view="<?php the_title(); ?>" name="viewQuick">Xem nhanh</button>
            </div>
            <div class="lastest__config-btn">
              <a href="<?php the_permalink(); ?>" class="btn">Xem chi tiết</a>
            </div>
          </div>
          </div>
          <p class="product__item-title title--item">
            <?php the_title(); ?>
          </p>
          <div class="product__item-price position--relative">
            <p <?php if(is_sale_off()):?>  class="line--through" <?php endif;?>>
              <?php echo convert_price(get_field('product_price')) ?> &nbsp;VNĐ
            </p>
            <?php if(is_sale_off()):?>
              <p>
                <?php echo convert_price(get_field('product_price_sale')) ?> &nbsp;VNĐ
              </p>
            <?php endif;?>
            <?php if(is_sold_out()): ?>
            <img class="sale__item-tag tag sold" src="<?php echo get_theme_file_uri('assets/images/icon out stock-01.svg') ?>" style="width: 45px" alt="sale-product-tag">
            <?php endif; ?>
          </div>
		</div>
	<?php endwhile; ?>

    </div>
    <div class="pagination_steal">
        <?php the_posts_pagination(); ?>
    </div>
    </div>
  <?php }else {
    echo '<h2 class="headline headline--small-plus">No results match that search.</h2>';
    } ?>


</section>

<?php get_footer();?>
