<section class="banner my-40">
  <?php if(wp_is_mobile()) :?>
    <img class="d--block" src="<?php echo get_theme_mod('home_img_banner_mb');?>" alt="ads-banner-mobile">
  <?php else: ?>
    <img class="d--block dp--none" src="<?php echo get_theme_mod('home_img_banner');?>" alt="ads-banner-desktop">
  <?php endif?>
</section>
