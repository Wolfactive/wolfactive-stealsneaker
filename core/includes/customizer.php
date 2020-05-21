<?php

function theme_slug_customizer( $wp_customize ) {
            $wp_customize->add_panel(
            // $id
            'theme_option',
            // $args
            array(
              'priority' 			=> 11,
              'capability' 		=> 'edit_theme_options',
              'theme_supports'	=> '',
              'title' 			=> __( 'Theme Opitons', 'theme-option' ),
              'description' 		=> __( 'Theme option', 'theme-option' ),
            )
          );
      // Thông tin công ty
      $wp_customize->add_section(
      'title_sub_footer_top_menu',
      array(
          'title' => esc_html__( 'Tiêu đề sub Footer và top Menu', 'stealsneaker' ),
          'panel'   =>  'theme_option',
          'priority' => 150
        )
     );
    // Thông tin công ty
    $wp_customize->add_section(
        'company_information',
        array(
            'title' => esc_html__( 'Thông tin công ty', 'stealsneaker' ),
            'panel'   =>  'theme_option',
            'priority' => 150
        )
    );
    // Thông tin công ty
    $wp_customize->add_section(
        'home_page',
        array(
            'title' => esc_html__( 'Cấu hình trang chủ', 'stealsneaker' ),
            'panel'   =>  'theme_option',
            'priority' => 150
        )
    );
    //sidebar
    $wp_customize->add_section(
        'sidebar_options',
        array(
            'title' => esc_html__( 'Cấu hình sidebar', 'stealsneaker' ),
            'panel'   =>  'theme_option',
            'priority' => 150
        )
    );
    //add select setting to your section
    /*----------------------------------------------------------------------*/
    // Company Name
      $wp_customize->add_setting(
          // $id
          'title_top_menu',
          // $args
          array(
            'sanitize_callback'	=> 'sanitize_text_field',
            'default'           => 'Chào mừng bạn đến với STEALSNEAKER.COM - shop giày chính hãng uy tín nhất TP.HCM!!! Cam kết chỉ bán hàng chính hãng!!!'
          )
        );


      $wp_customize->add_control(
              'title_top_menu',
              array(
                  'label' => esc_html__( 'Tiêu đề top menu', 'theme_slug' ),
                  'section' => 'title_sub_footer_top_menu',
                  'type' => 'text'
              )
     );

     $wp_customize->add_setting(
          // $id
          'title_top_menu',
          // $args
          array(
            'sanitize_callback'	=> 'sanitize_text_field',
            'default'           => 'Chào mừng bạn đến với STEALSNEAKER.COM - shop giày chính hãng uy tín nhất TP.HCM!!! Cam kết chỉ bán hàng chính hãng!!!'
          )
        );


      $wp_customize->add_control(
              'title_top_menu',
              array(
                  'label' => esc_html__( 'Tiêu đề top menu', 'theme_slug' ),
                  'section' => 'title_sub_footer_top_menu',
                  'type' => 'text'
              )
     );
  /*----------------------------------------------------------------------*/
  $wp_customize->add_setting(
      // $id
      'title_sub_footer',
      // $args
      array(
        'sanitize_callback'	=> 'sanitize_text_field',
        'default'           => 'All Right Reserved.'
      )
    );


  $wp_customize->add_control(
          'title_sub_footer',
          array(
              'label' => esc_html__( 'Tiêu đề sub footer', 'theme_slug' ),
              'section' => 'title_sub_footer_top_menu',
              'type' => 'text'
          )
 );
/*----------------------------------------------------------------------*/
  // Company Name
    $wp_customize->add_setting(
        // $id
        'company_name',
        // $args
        array(
          'sanitize_callback'	=> 'sanitize_text_field',
          'default'           =>  'STEAL SNEAKER AUTHENTIC'
        )
      );


    $wp_customize->add_control(
            'company_name',
            array(
                'label' => esc_html__( 'Điền tên công ty', 'theme_slug' ),
                'section' => 'company_information',
                'type' => 'text'
            )
   );
   /*----------------------------------------------------------------------*/
   // Company Address
     $wp_customize->add_setting(
         // $id
         'company_address',
         // $args
         array(
           'sanitize_callback'	=> 'sanitize_text_field',
           'default'            =>  '982/11 Quang Trung, P8, Q. Gò Vấp'
         )
       );


     $wp_customize->add_control(
             'company_address',
             array(
                 'label' => esc_html__( 'Điền địa chỉ công ty', 'theme_slug' ),
                 'section' => 'company_information',
                 'type' => 'text'
             )
    );
    /*----------------------------------------------------------------------*/
    //Company_phone
    $wp_customize->add_setting(
        // $id
        'company_phone',
        // $args
        array(
          'sanitize_callback'	=> 'sanitize_text_field',
          'default'            =>  '0978 97 55 56  - 0394 391 999'
        )
      );


    $wp_customize->add_control(
            'company_phone',
            array(
                'label' => esc_html__( 'Điền số diện thoại', 'theme_slug' ),
                'section' => 'company_information',
                'type' => 'text'
            )
   );
   /*----------------------------------------------------------------------*/
   //Company_email
   $wp_customize->add_setting(
           'company_email',
           array(
               'sanitize_callback' => 'sanitize_email', //removes all invalid characters
               'default'           => 'cskh.stealsneaker.com@gmail.com'
           )
       );

       $wp_customize->add_control(
           'company_email',
           array(
               'label' => esc_html__( 'Điền email công ty', 'theme_slug' ),
               'section' => 'company_information',
               'type' => 'email'
           )
       );
      /*----------------------------------------------------------------------*/
      /*----------------------------------------------------------------------*/
      /* Config sidebar */

        $wp_customize->add_setting(
            'sidebar_image',
            array(
                'sanitize_callback' => 'theme_slug_sanitize_file'
            )
        );


        $wp_customize->add_control(
            new WP_Customize_Upload_Control(
                $wp_customize,
                'sidebar_image',
                array(
                    'label'      => __( 'Chọn ảnh logo', 'stealsneaker' ),
                    'section'    => 'sidebar_options'
                )
            )
        );

      /*----------------------------------------------------------------------*/
      function theme_slug_sanitize_select( $input, $setting ){

                  //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
                  $input = sanitize_key($input);

                  //get the list of possible select options
                  $choices = $setting->manager->get_control( $setting->id )->choices;

                  //return input if valid or return default option
                  return ( array_key_exists( $input, $choices ) ? $input : $setting->default );

              }


          //add setting to your section
              $wp_customize->add_setting(
                  'home_section_1',
                  array(
                      'sanitize_callback' => 'theme_slug_sanitize_select'
                  )
              );

              $wp_customize->add_control(
                  'home_section_1',
                  array(
                      'label' => esc_html__( 'Chọn mục hiển thị cho section 1 ', 'stealsneaker' ),
                      'section' => 'home_page',
                      'type' => 'select',
                      'choices' => array(
                          '' => esc_html__('Chọn mục hiện thị','stealsneaker'),
                          'lastest-products' => esc_html__('Sản phẩm mới','stealsneaker'),
                          'sale-product' => esc_html__('Sản phẩm khuyến mãi','stealsneaker'),
                          'hot-product' => esc_html__('Sản phẩm bán chạy','stealsneaker')
                      )
                  )
              );
              //radio box sanitization function
       function theme_slug_sanitize_radio( $input, $setting ){

           //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
           $input = sanitize_key($input);

           //get the list of possible radio box options
           $choices = $setting->manager->get_control( $setting->id )->choices;

           //return input if valid or return default option
           return ( array_key_exists( $input, $choices ) ? $input : $setting->default );

       }

      /*----------------------------------------------------------------------*/
          //add setting to your section
              $wp_customize->add_setting(
                  'home_section_2',
                  array(
                      'sanitize_callback' => 'theme_slug_sanitize_select'
                  )
              );

              $wp_customize->add_control(
                  'home_section_2',
                  array(
                      'label' => esc_html__( 'Chọn mục hiển thị cho section 2 ', 'stealsneaker' ),
                      'section' => 'home_page',
                      'type' => 'select',
                      'choices' => array(
                          '' => esc_html__('Chọn mục hiện thị','stealsneaker'),
                          'lastest-products' => esc_html__('Sản phẩm mới','stealsneaker'),
                          'sale-product' => esc_html__('Sản phẩm khuyến mãi','stealsneaker'),
                          'hot-product' => esc_html__('Sản phẩm bán chạy','stealsneaker')
                      )
                  )
              );
      /*----------------------------------------------------------------------*/
      //add setting to your section
          $wp_customize->add_setting(
              'home_section_3',
              array(
                  'sanitize_callback' => 'theme_slug_sanitize_select'
              )
          );

          $wp_customize->add_control(
              'home_section_3',
              array(
                  'label' => esc_html__( 'Chọn mục hiển thị cho section 3 ', 'stealsneaker' ),
                  'section' => 'home_page',
                  'type' => 'select',
                  'choices' => array(
                      '' => esc_html__('Chọn mục hiện thị','stealsneaker'),
                      'lastest-products' => esc_html__('Sản phẩm mới','stealsneaker'),
                      'sale-product' => esc_html__('Sản phẩm khuyến mãi','stealsneaker'),
                      'hot-product' => esc_html__('Sản phẩm bán chạy','stealsneaker')
                  )
              )
          );
      /*----------------------------------------------------------------------*/
         //add setting to your section
             $wp_customize->add_setting(
                 'home_section_1_slider',
                 array(
                     'sanitize_callback' => 'theme_slug_sanitize_radio'
                 )
             );

             $wp_customize->add_control(
                 'home_section_1_slider',
                 array(
                     'label' => esc_html__( 'Bật slider cho sản phẩm mới', 'stealsneaker' ),
                     'section' => 'home_page',
                     'type' => 'radio',
                     'choices' => array(
                          false => esc_html__('Off','stealsneaker'),
                          true => esc_html__('On','stealsneaker'),
                     )
                 )
             );
      //add setting to your section
          $wp_customize->add_setting(
              'home_section_2_slider',
              array(
                  'sanitize_callback' => 'theme_slug_sanitize_radio'
              )
          );

          $wp_customize->add_control(
              'home_section_2_slider',
              array(
                  'label' => esc_html__( 'Bật slider cho sản phẩm khuyến mãi', 'stealsneaker' ),
                  'section' => 'home_page',
                  'type' => 'radio',
                  'choices' => array(
                       false => esc_html__('Off','stealsneaker'),
                       true => esc_html__('On','stealsneaker'),
                  )
              )
          );
          //add setting to your section
              $wp_customize->add_setting(
                  'home_section_3_slider',
                  array(
                      'sanitize_callback' => 'theme_slug_sanitize_radio'
                  )
              );

              $wp_customize->add_control(
                  'home_section_3_slider',
                  array(
                      'label' => esc_html__( 'Bật slider cho sản phẩm bán chạy', 'stealsneaker' ),
                      'section' => 'home_page',
                      'type' => 'radio',
                      'choices' => array(
                           false => esc_html__('Off','stealsneaker'),
                           true => esc_html__('On','stealsneaker'),
                      )
                  )
              );
  /*----------------------------------------------------------------------*/
      //file input sanitization function
          function theme_slug_sanitize_file( $file, $setting ) {

              //allowed file types
              $mimes = array(
                  'jpg|jpeg|jpe' => 'image/jpeg',
                  'gif'          => 'image/gif',
                  'png'          => 'image/png',
                  'webp'          => 'image/webp'
              );

              //check file type from file name
              $file_ext = wp_check_filetype( $file, $mimes );

              //if file has a valid mime type return it, otherwise return default
              return ( $file_ext['ext'] ? $file : $setting->default );
          }
      // image field
          $wp_customize->add_setting(
              'home_img_banner',
              array(
                  'sanitize_callback' => 'theme_slug_sanitize_file'
              )
          );


          $wp_customize->add_control(
              new WP_Customize_Upload_Control(
                  $wp_customize,
                  'home_img_banner',
                  array(
                      'label'      => __( 'Chọn ảnh quảng cáo trên desktop', 'stealsneaker' ),
                      'section'    => 'home_page'
                  )
              )
          );
          // image field
              $wp_customize->add_setting(
                  'home_img_banner_mb',
                  array(
                      'sanitize_callback' => 'theme_slug_sanitize_file'
                  )
              );


              $wp_customize->add_control(
                  new WP_Customize_Upload_Control(
                      $wp_customize,
                      'home_img_banner_mb',
                      array(
                          'label'      => __( 'Chọn ảnh quảng cáo trên mobile', 'stealsneaker' ),
                          'section'    => 'home_page'
                      )
                  )
              );
  /*--------------------------------------------------------------------*/
  // image field
      $wp_customize->add_setting(
          'home_img_banner_privacy',
          array(
              'sanitize_callback' => 'theme_slug_sanitize_file'
          )
      );


      $wp_customize->add_control(
          new WP_Customize_Upload_Control(
              $wp_customize,
              'home_img_banner_privacy',
              array(
                  'label'      => __( 'Chọn ảnh quảng cáo cho chính sách', 'stealsneaker' ),
                  'section'    => 'home_page'
              )
          )
      );
/*--------------------------------------------------------------------*/
}
add_action( 'customize_register', 'theme_slug_customizer' );
