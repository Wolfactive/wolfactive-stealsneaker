<?php
/*create search api*/
add_action('rest_api_init','productRegisterApiSearch');
function productRegisterApiSearch(){
  register_rest_route('product-api/v1','search',array(
    'methods'   =>  WP_REST_SERVER::READABLE,
    'callback'  =>  'productApiSearchResult'
  ));
}
function productApiSearchResult($data){
  $productList = new WP_Query(array(
    'post_type'     => 'san-pham',
    's'             => sanitize_text_field($data['term']),
  ));
  $productResult = array();
  while($productList->have_posts()){
    $productList->the_post();
    $termsSize = get_the_terms($post->ID,'size');
    $sizes = array();
    foreach ($termsSize as $term) {
      array_push($sizes,$term->name);
    };
    $picturArray = array();
    while ( have_rows('product_gallery') ) : the_row();
     array_push($picturArray,array(
        'product_picture'       => hk_get_image(get_sub_field('product_picture'), 550, 550),
        'product_picture_alt'   => get_sub_field('product_picture_alt')
     )
    );
    endwhile;
    array_push($productResult,
    array(
      'title'             => get_the_title(),
      'price'             => convert_price(get_field('product_price')),
      'sale_price'        => convert_price(get_field('product_price_sale')),
      'percent_sale'      => ceil(100 - (get_field('product_price_sale')*100/get_field('product_price'))),
      'size'              => $sizes,
      'pictures'          => $picturArray
      )
    );
  }
  return $productResult;
}
