    <section class="footer main--background">
	    <!----------=========Main==========-------->
	  <div class="footer__main">
    	<div class="footer__container container">
        <div class="footer__logo logo">
          <img src="<?php echo get_theme_file_uri('assets\images\logo-white.png')?>" alt="logo-stealsneaker-footer">
        </div>
    		<div class="footer__list row-divide">
    		<div class="footer__item col-divide-5 col-divide-md-12">
          <h3 class="footer__item-des text--light text--upcase">
            THÔNG TIN STEAL SNEAKER AUTHENTIC
          </h3>
          <h2 class="footer__item-title text--light text--upcase">
            <?php echo get_theme_mod('company_name') ?>
          </h2>
          <div class="footer__item-contact row-divide">
            <div class="col-divide-2 col-divide-md-12">
              <p class="text--light font--weight--600">
                Địa chỉ:
              </p>
            </div>
            <div class="col-divide-10 col-divide-md-12">
              <p class="text--light">
                <?php echo get_theme_mod('company_address') ?>
              </p>
            </div>
            <div class="col-divide-2 col-divide-md-12">
              <p class="text--light font--weight--600">
                Hotline:
              </p>
            </div>
            <div class="col-divide-10 col-divide-md-12">
              <p class="text--light">
                <?php echo get_theme_mod('company_phone') ?>
              </p>
            </div>
            <div class="col-divide-2 col-divide-md-12">
              <p class="text--light font--weight--600">
                Mail:
              </p>
            </div>
            <div class="col-divide-10 col-divide-md-12">
              <p class="text--light">
                <?php echo get_theme_mod('company_email') ?>
              </p>
            </div>
          </div>
        </div>
        <div class="footer__item col-divide-2 col-divide-md-12">
            <h2 class="title--item text--light text--upcase">
              Chính sách
            </h2>
            <div class="footer__pivacy-list">
              <a href="<?php echo site_url('chinh-sach-bao-hanh')?>" class="footer__privacy-item d--block text--light text--upcase">
                CHÍNH SÁCH BẢO HÀNH
              </a>
              <a href="<?php echo site_url('chinh-sach-doi-hang')?>" class="footer__privacy-item d--block text--light text--upcase">
                CHÍNH SÁCH ĐỔI HÀNG
              </a>
              <a href="<?php echo site_url('chinh-sach-giao-nhan')?>" class="footer__privacy-item d--block text--light text--upcase">
                CHÍNH SÁCH GIAO NHẬN
              </a>
              <a href="<?php echo site_url('chinh-sach-bao-mat')?>" class="footer__privacy-item d--block text--light text--upcase">
                CHÍNH SÁCH BẢO MẬT
              </a>
            </div>
        </div>
        <div class="footer__item col-divide-3 col-divide-md-12">
          <h2 class="title--item text--light text--upcase">
            Hỗ trợ khách hàng
          </h2>
          <div class="footer__pivacy-list">
            <a href="<?php echo site_url('huong-dan-mua-hang')?>" class="footer__privacy-item d--block text--light text--upcase">
              hướng dẫn mua hàng
            </a>
            <a href="<?php echo site_url('cham-soc-khach-hang')?>" class="footer__privacy-item d--block text--light text--upcase">
              Chăm sóc khách hàng
            </a>
            <a href="<?php echo site_url('thanh-toan')?>" class="footer__privacy-item d--block text--light text--upcase">
              thanh toán
            </a>
          </div>
        </div>
        <div class="footer__item col-divide-2 col-divide-md-12">
          <h2 class="title--item text--light text--upcase">
            Theo dõi chúng tôi
          </h2>
          <div class="social__list myt-20">
            <a href="" class="footer__socical-item mx-15">
              <img src="<?php echo get_theme_file_uri("assets/images/facebook.svg") ?>" alt="facebook">
            </a>
            <a href="" class="footer__socical-item mx-15">
              <img src="<?php echo get_theme_file_uri("assets\images\instagram.svg") ?>" alt="instagram">
            </a>
            <a href="" class="footer__socical-item mx-15">
            <img src="  <?php echo get_theme_file_uri("assets\images\linkedin.svg") ?>" alt="linkedin">
            </a>
            <a href="" class="footer__socical-item mx-15">
              <img src="<?php echo get_theme_file_uri("assets\images\pinterest.svg") ?>" alt="pinterest">
            </a>
            <a href="" class="footer__socical-item mx-15">
            <img src="<?php echo get_theme_file_uri("assets\images\youtube.svg") ?>" alt="youtube">
            </a>
          </div>
        </div>
    		</div>
    	</div>
	  </div>
	    <!----------=========Main==========-------->

		<!----------=========Sub==========-------->
	  <div class="footer__sub">
	    <div class="container"><p class="text--center"><?php echo get_theme_mod( 'title_sub_footer'); ?></p></div>
	  </div>
	    <!----------=========Sub==========-------->
      <div id="buttonBackToTop"></div>
      <div id="cart"><i class="fas fa-shopping-cart"></i></div>
      <a href="https://m.me/StealSneakerAuthentic" target="_blank" class="fb-livechat-mb"></a>
 </section>
 <?php wp_footer(); ?>
 </body>
</html>
