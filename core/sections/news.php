<section class="newspaper my-40" id="newSpaperHome">
    <div class="container">
        <h3 class="mc--hometitle title--section text--upcase">tin tức mới</h3>
        <?php
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => 'tin-noi-bat',
                'showposts'   =>  10,
            );
            $list_newspaper = new WP_Query( $args );
            if($list_newspaper->have_posts()) :
        ?>
        <div class="newspaper_content_slick">
        <?php while($list_newspaper->have_posts()) : $list_newspaper->the_post(); ?>
        <div class="newspaper_content">
            <div class="newspaper_content-image">
                <a href="<?php the_permalink(); ?>">
                <img src="<?php echo hk_get_thumb(get_the_id(),300,300) ?>" alt="<?php the_title(); ?>" />
                </a>
            </div>
            <div class="newspaper_content-title">
                <a href="<?php the_permalink(); ?>"><?php the_title();  ?></a>
            </div>
            <div class="newspaper_content-date fs-14">
            <i class="fas fa-calendar-alt"></i><span>Ngày đăng: </span><span><?php echo get_the_date('d/m/Y'); ?></span>
            </div>
            <div class="newspaper_content-excerpt fs-14">
                <?php echo wp_trim_words( get_the_content(), 30, ' ...' ); ?>
            </div>
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
</section>
