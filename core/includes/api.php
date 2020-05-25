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
    array_push($productResult,
    array(
      'title'             => get_the_title(),
      'price'             => get_field('product_price'),
      'sale_price'        => get_field('product_price_sale'),
      'percent_sale'      => ceil(100 - (get_field('product_price_sale')*100/get_field('product_price'))),
      'size'              => $sizes,
      'pictures'          => get_field('product_gallery'),
      )
    );
  }
  return $productResult;
}