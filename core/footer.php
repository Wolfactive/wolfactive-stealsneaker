    <section class="footer">
	    <!----------=========Main==========-------->
	  <div class="footer__main main--background">
      <div class="container">

    	</div>
    	<div class="footer__container container">
    		<div class="footer__list row-divide">
    			<div class="footer__item divide--5-col">

    			</div>
    			<p class="footer__item divide--5-col">
    				<?php echo get_theme_mod('company_name'); ?>
    			</p>
    			<p class="footer__item divide--5-col">
    				<i class="fas fa-map-marker-alt"></i>&nbsp;<?php echo get_theme_mod('company_address'); ?>
    			</p>
    			<p class="footer__item divide--5-col">
    				<i class="fal fa-mobile-android"></i>&nbsp;<?php echo get_theme_mod('company_phone'); ?>
    			</p>
    			<p class="footer__item divide--5-col">
    				<i class="fal fa-envelope"></i>&nbsp;<?php echo get_theme_mod('company_email'); ?>
    			</p>
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
