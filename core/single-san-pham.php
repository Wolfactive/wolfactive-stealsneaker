<?php
get_header();
get_template_part('sections/breadcums');
?>
<section class="single_product my-40" id="singleProduct">
    <div class="container">
    <?php while(have_posts()) : the_post(); ?>
        <div class="row-divide">
            <div class="col-divide-6 col-divide-md-12">
                <div class="slider_product_big">
                    <?php while ( have_rows('product_gallery') ) : the_row(); ?>
                      <div class="image_product">
                        <?php
                          if(wp_is_mobile()) :
                        ?>
                          <a href="<?php echo hk_get_image(get_sub_field('product_picture'), 800, 500) ?>" data-lightbox="roadtrip">
                          <img src="<?php echo hk_get_image(get_sub_field('product_picture'), 800, 500) ?>"
                                alt="<?php the_sub_field('product_picture_alt') ?>"></a>
                        <?php else :  ?>
                          <img src="<?php echo hk_get_image(get_sub_field('product_picture'), 800, 500) ?>"
                                alt="<?php the_sub_field('product_picture_alt') ?>">
                        <?php endif; ?>
                      </div>
                    <?php endwhile; ?>
                </div>
                <div class="slider_product_small">
                    <?php while ( have_rows('product_gallery') ) : the_row(); ?>
                  <div class="image_product">
                      <img src="<?php echo hk_get_image(get_sub_field('product_picture'), 200, 200) ?>" alt="<?php the_sub_field('product_picture_alt') ?>">
                  </div>
                  <?php endwhile; ?>
                </div>
            </div>
            <div class="col-divide-6 col-divide-md-12 mc-pdl-50 mc-pdl-res-20">
                <h1 class="sg_product_title"><?php the_title(); ?></h1>
                <?php if(get_field('product_price_sale') != ''){ ?>
                    <div class="product_price_sale mc-mgb-10">
                        <?php echo convert_price(get_field('product_price_sale')); ?> &nbsp;VNĐ
                    </div>
                    <div class="price_product remove-price mc-mgb-10">
                        <strike><?php echo convert_price(get_field('product_price')); ?></strike> &nbsp;VNĐ
                    </div>
                    <div class="option_sale_price mc-mgb-10">
                        <?php if(is_sold_out()): ?>
                            <img class="product_sold" src="<?php echo get_theme_file_uri('assets/images/icon out stock-01.svg') ?>" style="width: 45px" alt="sale-product-tag">
                        <?php endif; ?>
                        <?php if(is_sale_off()):?>
                        <div class="product__item-tag mc-sale text--light">
                            <?php percent_sale(); ?>&nbsp;%
                        </div>
                        <?php endif;?>
                    </div>
                    <div class="product__filter-item mc_product_size mc-mgb-10">
                        <h3 class="title--item mc-title-size"> Size</h3>
                        <?php $term_list = wp_get_post_terms( $post->ID, 'size', array( 'fields' => 'names' ) );
                          $countTerm =1;
                          foreach ($term_list as $terms) {
                            if($terms != "Tất cả"){
                              echo '<div class="filter__form-item">
                                  <input type="radio" id="productSize'.$countTerm.'" name="productSize" value="'.$terms.'">
                                  <label class="productSize" for="productSize'.$countTerm.'">'.$terms.'</label>
                                </div>';
                            }
                          $countTerm++;
                        }?>
                    </div>
                    <div class="quality mc-mgb-10">
                        <div>
                        <button class="btn" id="minusCT">-</button>
                        </div>
                        <div>
                        <input class="input" id="qualityCT" type="number" value="1">
                        </div>
                        <div>
                        <button class="btn" id="plusCT">+</button>
                        </div>
                    </div>
                    <div class="buy-btn">
                      <button class="btn text--upcase mxr-15" id="btnToCart">
                          <i class="fas fa-cart-plus"></i> <span class=" dp--none">Thêm vào giỏ</span>
                      </button>
                      <button class="btn text--upcase" id="btnBuy">
                      <i class="fas fa-shopping-bag"></i><span class=" dp--none"> mua ngay</span>
                    </button>
                        </div>
                <?php }else{ ?>
                    <div class="price_product mc-mgb-10">
                        <?php echo convert_price(get_field('product_price')); ?> &nbsp;VNĐ
                    </div>
                    <?php if(is_sold_out()): ?>
                        <img class="product_sold mc-mgb-10" src="<?php echo get_theme_file_uri('assets/images/icon out stock-01.svg') ?>" style="width: 45px" alt="sale-product-tag">
                    <?php endif; ?>
                    <div class="product__filter-item mc_product_size mc-mgb-10">
                        <h3 class="title--item mc-title-size"> Size</h3>
                        <?php $term_list = wp_get_post_terms( $post->ID, 'size', array( 'fields' => 'names' ) );
                          $countTerm =1;
                          foreach ($term_list as $terms) {
                              if($terms != "Tất cả")  {
                                echo '<div class="filter__form-item">
                                    <input type="radio" id="productSize'.$countTerm.'" name="productSize" value="'.$terms.'">
                                    <label class="productSize" for="productSize'.$countTerm.'">'.$terms.'</label>
                                  </div>';
                              }
                          $countTerm++;
                    }?>
                    </div>
                    <div class="quality mc-mgb-10">
                        <div>
                            <button class="btn" id="minusCT">-</button>
                        </div>
                        <div>
                            <input class="input" id="qualityCT" type="number" value="1">
                        </div>
                        <div>
                            <button class="btn" id="plusCT">+</button>
                        </div>
                    </div>
                    <div class="buy-btn">
                          <button class="btn text--upcase mxr-15" id="btnToCart">
                              <i class="fas fa-cart-plus"></i> <span class=" dp--none">Thêm vào giỏ</span>
                          </button>
                          <button class="btn text--upcase" id="btnBuy">
                          <i class="fas fa-shopping-bag"></i><span class=" dp--none"> mua ngay</span>
                        </button>
                        </div>
                <?php } ?>
            </div>
        </div>
    <div class="content_single_prodct">
        <h3 class="content_single_prodct-title">Thông tin sản phẩm</h3>
        <div class="style-bd-content">
            <?php if(get_field('use_content_general') == true){ ?>
            <div class="content-ch">
                <?php echo get_field('post_chung','option'); ?>
            </div>
            <?php }elseif(get_field('use_content_new') == true){ ?>
                <div class="content_news">
                    <?php the_content(); ?>
                </div>
            <?php }elseif(get_field('use_content_new_general') == true){ ?>
            <div class="content-ch">
                <?php echo get_field('post_chung','option'); ?>
            </div>
            <div class="content_news">
                    <?php the_content(); ?>
                </div>
            <?php } ?>
        </div>

    </div>
    <div class="product_ch">
        <h3 class="content_single_prodct-title">Sản phẩm cùng loại</h3>
        <div class="product__list row-divide">
        <?php
          $terms = get_the_terms($post->ID,'hang');
      $args = array(
        'post_type'   => 'san-pham',
        'post_status' => 'publish',
        'show_posts'   =>  8,
        'order'       => 'DESC',
        'orderby'     => 'date',
        'tax_query' => array(
          array(
            'taxonomy' => 'hang',
            'field' => 'slug',
            'terms' => $terms[0]->slug,
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
      <div  class="product__item d--block col-divide-3 col-divide-md-6 col-divide-sm-12">
        <div class="product__item-img">
          <img src="<?php echo hk_get_thumb(get_the_id(),300,300) ?>" alt="<?php the_title(); ?>" />
         <div class="product__item-tag tag">
           <?php if(is_new_product()):?>
            <img src="<?php echo get_theme_file_uri('assets/images/new-product-sticker.svg') ?>" alt="product-product-tag">
           <?php endif; ?>
         </div>
         <?php if(is_sale_off()):?>
           <span class="product__item-tag tag sale text--light">
             <?php percent_sale(); ?>&nbsp;%
           </span>
         <?php endif;?>
         <div class="lastest__config">
           <div class="lastest__config-btn">
             <?php if(!is_order()):?>
<button class="btn viewQuick" type="button" aria-label="view-quick" data-view="<?php the_title(); ?>" name="viewQuick">Xem nhanh</button>
<?php endif; ?>
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

    </div>
    <div class="pagination_steal">
            <?php the_posts_pagination(); ?>
        </div>
    <?php endwhile; ?>

    </div>
</section>
<?php
get_template_part('sections/modal');
get_footer();
?>
