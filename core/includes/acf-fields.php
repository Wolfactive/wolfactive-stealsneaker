<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5ec71532e1fac',
	'title' => 'Sản phẩm template',
	'fields' => array(
		array(
			'key' => 'field_5ec7153f0f76e',
			'label' => 'Chọn Hãng Sản Phẩm',
			'name' => 'product_choose_tem',
			'type' => 'taxonomy',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'taxonomy' => 'hang',
			'field_type' => 'radio',
			'allow_null' => 0,
			'add_term' => 1,
			'save_terms' => 0,
			'load_terms' => 0,
			'return_format' => 'object',
			'multiple' => 0,
		),
		array(
			'key' => 'field_5ec715840f76f',
			'label' => 'Chọn loại sản phẩm',
			'name' => 'choose_kind_product_temp',
			'type' => 'taxonomy',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'taxonomy' => 'loai-san-pham',
			'field_type' => 'radio',
			'allow_null' => 0,
			'add_term' => 1,
			'save_terms' => 0,
			'load_terms' => 0,
			'return_format' => 'object',
			'multiple' => 0,
		),
		array(
			'key' => 'field_5ec715b10f770',
			'label' => 'Chọn giới tính',
			'name' => 'product_choose_sex',
			'type' => 'taxonomy',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'taxonomy' => 'gioi-tinh',
			'field_type' => 'radio',
			'allow_null' => 0,
			'add_term' => 1,
			'save_terms' => 0,
			'load_terms' => 0,
			'return_format' => 'object',
			'multiple' => 0,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page-templates/products.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

endif;
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5ec373a852649',
	'title' => 'Sản phẩm',
	'fields' => array(
		array(
			'key' => 'field_5ec373b4cba88',
			'label' => 'Nổi bật',
			'name' => 'product_popular',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => 'Bật',
			'ui_off_text' => 'Tắt',
		),
		array(
			'key' => 'field_5ec373d3cba89',
			'label' => 'Hết hàng',
			'name' => 'product_sold_out',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => 'Bật',
			'ui_off_text' => 'Tắt',
		),
		array(
			'key' => 'field_5ec373e7cba8a',
			'label' => 'Giá sản phẩm',
			'name' => 'product_price',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => 'VNĐ',
			'min' => 1000,
			'max' => '',
			'step' => '',
		),
		array(
			'key' => 'field_5ec37409cba8b',
			'label' => 'Giá sản phẩm khuyến mãi',
			'name' => 'product_price_sale',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => 'VNĐ',
			'min' => 1000,
			'max' => '',
			'step' => '',
		),
		array(
			'key' => 'field_5ec3b4da806d0',
			'label' => 'Chỉ dùng content chung',
			'name' => 'use_content_general',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => 'Bật',
			'ui_off_text' => 'Tắt',
		),
		array(
			'key' => 'field_5ec796574601a',
			'label' => 'Chỉ dùng content riêng',
			'name' => 'use_content_new',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => 'Bật',
			'ui_off_text' => 'Tắt',
		),
		array(
			'key' => 'field_5ec796834601b',
			'label' => 'Chỉ dùng content chung và riêng',
			'name' => 'use_content_new_general',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => 'Bật',
			'ui_off_text' => 'Tắt',
		),
		array(
			'key' => 'field_5ec4c9df04f40',
			'label' => 'Thư viện ảnh sản phẩm',
			'name' => 'product_gallery',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 1,
			'max' => 0,
			'layout' => 'table',
			'button_label' => 'Thêm ảnh',
			'sub_fields' => array(
				array(
					'key' => 'field_5ec4c9f304f41',
					'label' => 'Hình ảnh sản phẩm',
					'name' => 'product_picture',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'url',
					'preview_size' => 'thumbnail',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
				array(
					'key' => 'field_5ec4ca1004f42',
					'label' => 'Alt hình ảnh',
					'name' => 'product_picture_alt',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'san-pham',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5ec2c3caf213b',
	'title' => 'Slider',
	'fields' => array(
		array(
			'key' => 'field_5ec2c3d285f23',
			'label' => 'Hình ảnh(video)',
			'name' => 'image_slider',
			'type' => 'file',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'library' => 'all',
			'min_size' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_5ec2c3f185f24',
			'label' => 'Link',
			'name' => 'link_slider',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'slider',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'permalink',
		1 => 'the_content',
		2 => 'excerpt',
		3 => 'discussion',
		4 => 'comments',
		5 => 'revisions',
		6 => 'slug',
		7 => 'author',
		8 => 'format',
		9 => 'page_attributes',
		10 => 'featured_image',
		11 => 'categories',
		12 => 'tags',
		13 => 'send-trackbacks',
	),
	'active' => true,
	'description' => '',
));

endif;
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5ecf29d1d5dc1',
	'title' => 'Cấu hình chung',
	'fields' => array(
		array(
			'key' => 'field_5ecf29d7f8339',
			'label' => 'Content chung cho sản phẩm',
			'name' => 'post_chung',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'theme_options',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

endif;

if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_5ed5fc965c8ea',
		'title' => 'News hightlight',
		'fields' => array(
			array(
				'key' => 'field_5ed5fca6369b6',
				'label' => 'tin tức nổi bật',
				'name' => 'news_hl',
				'type' => 'true_false',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'message' => '',
				'default_value' => 0,
				'ui' => 1,
				'ui_on_text' => '',
				'ui_off_text' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

	endif;
