<?php
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
      <div class="product__filter-list">
        <div class="row-divide">
          <div class="product__filter-item col-divide-4 border--right-15 border--right-p-0 col-divide-md-6 col-divide-sm-12">
            <h3 class="title--item col-divide-12 mxl-15"> Hãng</h3>
            <div class="filter__form-item">
              <input type="radio" id="productBand0" name="productBand" value="all-brand" checked>
              <label class="productBand active" for="productBand0">Tất cả</label>
            </div>
            <?php get_term_list_check('hang','productBand') ?>
          </div>
          <div class="product__filter-item col-divide-4 border--right-15 border--right-p-0 col-divide-md-6 col-divide-sm-12">
            <h3 class="title--item col-divide-12 mxl-15"> Loại giày</h3>
            <div class="filter__form-item">
              <input type="radio" id="productKind0" name="productKind" value="all-kind" checked>
              <label class="productKind active" for="productKind0">Tất cả</label>
            </div>
            <?php get_term_list_check('loai-san-pham','productKind') ?>
          </div>
          <div class="product__filter-item col-divide-4 col-divide-md-6 col-divide-sm-12">
            <h3 class="title--item col-divide-12 mxl-15"> Giới tính</h3>
            <div class="filter__form-item">
              <input type="radio" id="productSex0" name="productSex" value="all-sex" checked>
              <label class="productSex active" for="productSex0">Tất cả</label>
            </div>
            <?php get_term_list_check('gioi-tinh','productSex') ?>
          </div>
          <div class="product__filter-item col-divide-4 border--right-15 border--right-p-0 col-divide-md-6 col-divide-sm-12">
            <h3 class="title--item col-divide-12 mxl-15"> Size</h3>
            <div class="filter__form-item">
              <input type="radio" id="productSize0" name="productSize" value="all-size" checked>
              <label class="productSize active" for="productSize0">Tất cả</label>
            </div>
            <?php get_term_list_check('size','productSize') ?>
          </div>
          <div class="product__filter-item col-divide-4 border--right-15 border--right-p-0 col-divide-md-6 col-divide-sm-12">
            <h3 class="title--item col-divide-12 mxl-15">Sản phẩm</h3>
            <div class="filter__form-item">
              <input type="radio" id="productSafe0" name="productSafe" value="all-product" checked>
              <label class="productSafe active" for="productSafe0">Tất cả</label>
            </div>
            <?php get_term_list_check('khuyen-mai','productSafe') ?>
          </div>
          <div class="product__filter-item col-divide-4 col-divide-md-6 col-divide-sm-12">
            <h3 class="title--item col-divide-12 mxl-15"> Thứ tự sắp xếp</h3>
            <div class="filter__form-item">
              <input type="radio" id="sortProduct1" name="sortProduct" value="DESC" checked>
              <label class="sortProduct active" for="sortProduct1">Giá giảm dần</label>
            </div>
            <div class="filter__form-item">
              <input type="radio" id="sortProduct2" name="sortProduct" value="ASC">
              <label class="sortProduct" for="sortProduct2">Giá tăng dần</label>
            </div>
          </div>
          <div class="product__filter-item form--slider col-divide-12">
            <div class="slidecontainer">
              <p class="title--item">Tầm giá: <span id="priceSliderValue" style="color:#333">6000000</span> <span style="color:#333">VNĐ</span></p>
              <input type="range" min="1000000" max="6000000" value="6000000" class="range--slider" id="priceSliderValueRange">
            </div>
              <button class="btn btn--submit " id="filterBtn">Lọc sản phẩm</button>
          </div>
        </div>
      </div>
    </div>
    <div class="product__list row-divide">
      <?php while(have_posts()) : the_post(); ?>
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
             <button class="btn" type="button" aria-label="view-quick" data-view="<?php the_title(); ?>" name="viewQuick">Xem nhanh</button>
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
            <?php  echo convert_price(get_field('product_price')) ?> &nbsp;VNĐ
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
</section>
<?php
get_template_part('sections/modal');
get_footer();
?>
