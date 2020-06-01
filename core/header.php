<!DOCTYPE html>
<html <?php language_attributes(); ?> class="wrapper">
<head>
     <meta charset="<?php bloginfo('charset'); ?>" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="author" content="Wolfactive - HuyNguyen - PhuongNam">
  	 <link rel="profile" href="https://wolfactive.net/">
     <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
     <link rel="preload" href="<?php echo get_theme_file_uri('assets\css\lib\slick\fonts\slick.woff') ?>" as="font" type="font/woff" crossorigin>
     <link rel="preload" href="<?php echo get_theme_file_uri('assets\css\lib\fontawsome\webfonts\fa-brands-400.woff2') ?>" as="font" type="font/woff2" crossorigin>
     <link rel="preload" href="<?php echo get_theme_file_uri('assets\css\lib\fontawsome\webfonts\fa-regular-400.woff2') ?>" as="font" type="font/woff2" crossorigin>
     <link rel="preload" href="<?php echo get_theme_file_uri('assets\css\lib\fontawsome\webfonts\fa-solid-900.woff2') ?>" as="font" type="font/woff2" crossorigin>
     <link rel="preload" href="<?php echo get_theme_file_uri('assets\fonts\Exo.ttf') ?>" as="font" type="font/ttf" crossorigin>
     <link rel="dns-prefetch" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.635015753784!2d106.65623431533444!3d10.839218260994189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529a14af56771%3A0x1053c6f69b60391!2zOTgyLzc1LzExIFF1YW5nIFRydW5nLCBQaMaw4budbmcgMTEsIEfDsiBW4bqlcCwgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1589863213110!5m2!1svi!2s">
     <link rel="stylesheet" href="<?php echo get_theme_file_uri('assets/css/globals.min.css') ?>">
     <script defer type='text/javascript' src="<?php echo get_theme_file_uri('assets/js/main.min.js') ?>"></script>
     <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if(wp_is_mobile()): ?>
  <section class="navbar">
  <div class="navbar__contain">
    <div class="navbar__item">
      <div class="navbar__item-brand">
        <a class="d--block logo" href="<?php echo home_url()?>">
          <img src="<?php echo get_theme_file_uri('assets\images\logo-white.png') ?>" alt="stealsneaker-logo-moble">
        </a>
      </div>
      <div class="navbar__item-btn">
        <button class="btn" id="navbarClose" aria-label="btn-navbar-close">
          <i class="fas fa-times text--light icon--text"></i>
        </button>
      </div>
    </div>
    <div class="navbar__item">
      <?php
       wp_nav_menu(array(
      'theme_location' => 'mobile_nav' ));
      ?>
      <div class="header__soical">
        <a href="" class="header__soical-item">
          <img src="<?php echo get_theme_file_uri("assets/images/facebook.svg") ?>" alt="facebook">
        </a>
        <a href="" class="header__soical-item">
          <img src="<?php echo get_theme_file_uri("assets\images\instagram.svg") ?>" alt="instagram">
        </a>
        <a href="" class="header__soical-item">
            <img src="  <?php echo get_theme_file_uri("assets\images\linkedin.svg") ?>" alt="linkedin">
        </a>
        <a href="" class="header__soical-item">
          <img src="<?php echo get_theme_file_uri("assets\images\pinterest.svg") ?>" alt="pinterest">
        </a>
        <a href="" class="header__soical-item">
          <img src="<?php echo get_theme_file_uri("assets\images\youtube.svg") ?>" alt="youtube">
        </a>
      </div>
    </div>
  </div>
  </section>
<?php endif; ?>
<section class="topmenu">
  <div class="topmenu__contain container">
    <?php if(!wp_is_mobile()): ?>
    <div class="topmenu__item">
      <div class="topmenu__content text--light">
        <?php echo get_theme_mod( 'title_top_menu'); ?>
      </div>
    </div>
    <?php endif; ?>
    <div class="topmenu__item">
      <?php
       wp_nav_menu(array(
      'theme_location' => 'top_nav' ));
      ?>
    </div>
  </div>
</section>
<section class="header">
    <div class="header__contain container">
  	   <div class="header__item">
  	      <a href="<?php echo site_url(); ?>" class="d--block logo mr-auto">
            <?php
             $custom_logo_id = get_theme_mod( 'custom_logo' );
             $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                ?>
  	        <img src="<?php echo $image[0]; ?>" alt="logo-stealsneaker">
  	      </a>
  	   </div>
       <?php if(wp_is_mobile()):?>
         <div class="header__item">
    	      <button class="btn" id="navBtn" aria-label="btn-navbar">
    	          <i class="fas fa-bars icon--text"></i>
    	      </button>
    	   </div>
     <?php else: ?>
       <div class="header__item dp--none">
          <?php
           wp_nav_menu(array(
          'theme_location' => 'main_nav' ));
          ?>
       </div>
        <div class="header__item dp--none">
          <?php get_search_form(); ?>
        </div>
     <?php endif; ?>
  	</div>
</section>
