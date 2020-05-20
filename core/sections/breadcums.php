<section class="breadcrumbs">
  <div class="breadcrumbs__contain container">
      <div class="breadcumbs__title text--center text--upcase title--section">
        <?php title_check() ?>
      </div>
      <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs" class="f-breadcrumbs text--center">','</p>');} ?>
  </div>
</section>
