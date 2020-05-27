<?php
get_header();
get_template_part('sections/breadcums');
?>
<section class="single_page my-40" id="singlePage">
    <div class="container">
        <div class="row-divide">
            <div class="col-divide-8 col-divide-lg-12">
                <?php while(have_posts()) : the_post() ; ?>
                    <h3 class="single_title"><?php the_title(); ?></h3>
                    <div class="single_page_content">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; ?>
            </div>
            <?php if(!wp_is_mobile()): ?>
            <div class="col-divide-4 col-divide-lg-12 dlg--none dp--block">
                <div class="infor_shop">
                <div class="title-sidebar_style">
                    <h3 class="mc-title-sidebar text--upcase">thông tin</h3>
                    <div class="space-title-sidebar"></div>
                </div>

                <div class="image_shop text--center">
                    <img class="logo" src="<?php echo get_theme_mod('sidebar_image'); ?>" alt="logo-shop">
                </div>
                <p class="steal-au text--center">STEAL SNEAKER AUTHENTIC</p>
                <div class="sidebar-infor text--center">
                    <p><span><?php echo get_theme_mod('company_address'); ?></span> </p>
                    <p><span><?php echo get_theme_mod('company_phone'); ?></span> </p>
                </div>
                <div class="embed-face text--center">
                <iframe name="f2f8aaab949a8d8" width="400px" height="400px" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.8/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D46%23cb%3Df3b02d2d54fc934%26domain%3Dstealsneaker.com%26origin%3Dhttps%253A%252F%252Fstealsneaker.com%252Ff9ed21364ba9%26relation%3Dparent.parent&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FStealSneakerAuthentic%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline&amp;width=400px"></iframe>
                </div>
                </div>
                <div class="news_post">
                <div class="title-sidebar_style">
                    <h3 class="mc-title-sidebar text--upcase">tin nổi bật</h3>
                    <div class="space-title-sidebar"></div>
                </div>
                <?php
                    $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'category_name' => 'tin-noi-bat',
                        'showposts'   =>  4,
                    );
                    $list_newspaper = new WP_Query( $args );
                    if($list_newspaper->have_posts()) :
                    ?>
                    <div class="row-divide">
                    <?php while($list_newspaper->have_posts()) : $list_newspaper->the_post(); ?>

                            <div class="col-divide-5 mc-mgb-20">
                              <a href="<?php the_permalink(); ?>">
                              <img src="<?php echo hk_get_thumb(get_the_id(),300,300) ?>" alt="<?php the_title(); ?>" />
                              </a>
                            </div>

                            <div class="col-divide-7 title-nb mc-mgb-20">
                                <div class="tt-single-news title-nb">
                                    <a href="<?php the_permalink(); ?>"><?php the_title();  ?></a>
                                </div>
                                <div class="category_date">
                                    <i class="fas fa-calendar-alt"></i><span>Ngày đăng: </span><span><?php echo get_the_date('d/m/Y'); ?></span>
                                </div>
                                <div class="category_excerpt">
                                    <?php echo wp_trim_words( get_the_content(), 10, ' ...' ); ?>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="readmore_category">Xem Thêm</a>
                            </div>

                    <?php endwhile;
                        wp_reset_postdata();
                    ?>
                    </div>
                    <?php
                    else :
                        esc_html_e( 'No testimonials in the diving taxonomy!', 'text-domain' );
                    endif;?>
                </div>
            </div>
          <?php endif; ?>
        </div>
    </div>
</section>
<?php
get_footer();
?>
