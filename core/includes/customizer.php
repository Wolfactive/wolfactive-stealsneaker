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
          'sanitize_callback'	=> 'sanitize_text_field'
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
           'sanitize_callback'	=> 'sanitize_text_field'
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
          'sanitize_callback'	=> 'absint'
        )
      );


    $wp_customize->add_control(
            'company_phone',
            array(
                'label' => esc_html__( 'Điền số diện thoại', 'theme_slug' ),
                'section' => 'company_information',
                'type' => 'number'
            )
   );
   /*----------------------------------------------------------------------*/
   //Company_email
   $wp_customize->add_setting(
           'company_email',
           array(
               'sanitize_callback' => 'sanitize_email' //removes all invalid characters
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

}
add_action( 'customize_register', 'theme_slug_customizer' );
