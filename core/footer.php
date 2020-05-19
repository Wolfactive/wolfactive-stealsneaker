    <section class="footer main--background">
	    <!----------=========Main==========-------->
	  <div class="footer__main">
    	<div class="footer__container container">
    		<div class="footer__list row-divide">
    		<div class="footer__item col-divide-4 col-divide-md-12">
          <div class="footer__logo logo">
            <img src="<?php echo get_theme_file_uri('assets\images\logo-white.png')?>" alt="logo-stealsneaker-footer">
          </div>
          <h3 class="footer__item-des text--light text--upcase">
            THÔNG TIN STEAL SNEAKER AUTHENTIC
          </h3>
          <h1 class="footer__item-title text--light text--upcase">
            <?php echo get_theme_mod('company_name') ?>
          </h1>
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
            <div class="col-divide-3 col-divide-md-12 align--self--center">
              <p class="text--light font--weight--600">
                Mạng xã hội:
              </p>
            </div>
            <div class="footer__socical col-divide-9 col-divide-md-12">
              <a href="" class="footer__socical-item mx-15">
                <i class="fab fa-facebook icon--text"></i>
              </a>
              <a href="" class="footer__socical-item ">
                <i class="fab fa-instagram icon--text"></i>
              </a>
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
        <div class="footer__item col-divide-2 col-divide-md-12">
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
        <div class="footer__item col-divide-4 col-divide-md-12">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.635015753784!2d106.65623431533444!3d10.839218260994189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529a14af56771%3A0x1053c6f69b60391!2zOTgyLzc1LzExIFF1YW5nIFRydW5nLCBQaMaw4budbmcgMTEsIEfDsiBW4bqlcCwgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1589863213110!5m2!1svi!2s" frameborder="0" style="border:0; width:100%; height:300px" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
 </section>
 <?php wp_footer(); ?>
 </body>
</html>
