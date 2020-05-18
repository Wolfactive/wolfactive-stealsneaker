<!DOCTYPE html>
<html <?php language_attributes(); ?> class="wrapper">
<head>
     <meta charset="<?php bloginfo('charset'); ?>" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="author" content="Wolfactive - HuyNguyen - PhuongNam">
  	 <link rel="profile" href="https://wolfactive.net/">
     <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
     <link rel="preload" href="<?php echo get_theme_file_uri('assets\css\lib\fontawsome\webfonts\fa-brands-400.woff2') ?>" as="font" type="font/woff2" crossorigin>
     <link rel="preload" href="<?php echo get_theme_file_uri('assets\css\lib\fontawsome\webfonts\fa-regular-400.woff2') ?>" as="font" type="font/woff2" crossorigin>
     <link rel="preload" href="<?php echo get_theme_file_uri('assets\css\lib\fontawsome\webfonts\fa-solid-900.woff2') ?>" as="font" type="font/woff2" crossorigin>
     <link rel="preload" href="<?php echo get_theme_file_uri('assets\fonts\Exo.ttf') ?>" as="font" type="font/ttf" crossorigin>
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
        <button class="btn" id="navbarClose">
          <i class="fas fa-times text--light icon--text"></i>
        </button>
      </div>
    </div>
    <div class="navbar__item">
      <?php
       wp_nav_menu(array(
      'theme_location' => 'mobile_nav' ));
      ?>
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
           <div class="header__search">
               <label for="inputHeaderSearch"><i class="fas fa-search" class="icon--text"></i></label>
               <input class="input" type="text" id="inputHeaderSearch" name="s" value="" placeholder="Tìm kiếm">
           </div>
        </div>
     <?php endif; ?>
  	</div>
</section>

<section>Nam test Commit</section>