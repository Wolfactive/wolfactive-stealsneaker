<?php
get_header();
get_template_part('sections/breadcums');
?>
<section class="category_page" id="categoryPage">
  <div class="container">
    <div class="row-divide">
      <?php while(have_posts()) : the_post(); ?>
      <div class="col-divide-6 mg-bt-20 col-divide-md-12">
          <div class="row-divide">
            <div class="category_image col-divide-3 col-divide-md-3">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
            </div>
            <div class="col-divide-9 pl-20 col-divide-md-9">
                <div class="category_title">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </div>
                <div class="category_date">
                <i class="fas fa-calendar-alt"></i><span>Ngày đăng: </span><span><?php echo get_the_date('d/m/Y'); ?></span>
                </div>
                <div class="category_excerpt">
                    <?php echo wp_trim_words( get_the_content(), 30, ' ...' ); ?>
                </div>
                <a href="<?php the_permalink(); ?>" class="readmore_category">Xem Thêm</a>
            </div>
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
get_footer();
?>
