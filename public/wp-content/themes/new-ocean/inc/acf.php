<?php

function acf_custom_fields() {

// Start paste

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_5841fa477fbc9',
	'title' => 'Homepage',
	'fields' => array (
		array (
			'key' => 'field_5841fa4d89db9',
			'label' => 'Hero Button Text',
			'name' => 'hero_button_text',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_5841fa6089dba',
			'label' => 'Hero Video URL',
			'name' => 'hero_video_url',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_58471aec5ce2d',
			'label' => 'Hero Video Play URL',
			'name' => 'hero_video_play_url',
			'type' => 'text',
			'instructions' => 'If different to the background hero video',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_5841fa6989dbb',
			'label' => 'Icon List Title',
			'name' => 'icon_list_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_5841fa7d89dbc',
			'label' => 'Icon List',
			'name' => 'icon_list',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => '',
			'max' => '',
			'layout' => 'table',
			'button_label' => 'Add Row',
			'sub_fields' => array (
				array (
					'key' => 'field_5841fa8589dbd',
					'label' => 'Icon',
					'name' => 'icon',
					'type' => 'select',
					'instructions' => 'Choose an icon',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array (
						'Solar' => 'Solar',
						'User' => 'User',
						'Heart' => 'Heart',
					),
					'default_value' => array (
					),
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 0,
					'ajax' => 0,
					'placeholder' => '',
					'disabled' => 0,
					'readonly' => 0,
				),
				array (
					'key' => 'field_5841fab989dbe',
					'label' => 'Title',
					'name' => 'title',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_5841fac089dbf',
					'label' => 'Text',
					'name' => 'text',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 1,
				),
			),
		),
		array (
			'key' => 'field_584f4bdcd4cc1',
			'label' => 'Video Banner Title',
			'name' => 'video_banner_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_584f4bedd4cc2',
			'label' => 'Video Banner Text',
			'name' => 'video_banner_text',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
		),
		array (
			'key' => 'field_584f4c6cd4cc4',
			'label' => 'Video Banner Button Text',
			'name' => 'video_banner_button_text',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_584f4c16d4cc3',
			'label' => 'Video Banner Background',
			'name' => 'video_banner_background',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
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
		array (
			'key' => 'field_5855fa714ac17',
			'label' => 'Video Banner Thumbnail',
			'name' => 'video_banner_thumbnail',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
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
		array (
			'key' => 'field_584f4c75d4cc5',
			'label' => 'Video Banner Video URL',
			'name' => 'video_banner_video_url',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_5841fad189dc0',
			'label' => 'Banner Background',
			'name' => 'banner_background',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
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
		array (
			'key' => 'field_5841fafe89dc1',
			'label' => 'Banner Title',
			'name' => 'banner_title',
			'type' => 'text',
			'instructions' => '',
			'required' => '',
			'conditional_logic' => '',
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_5841fb0389dc2',
			'label' => 'Banner Text',
			'name' => 'banner_text',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => '',
			'conditional_logic' => '',
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
		),
		array (
			'key' => 'field_5841fb3689dc3',
			'label' => 'Sales Title',
			'name' => 'sales_title',
			'type' => 'text',
			'instructions' => '',
			'required' => '',
			'conditional_logic' => '',
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_5841fb6889dc4',
			'label' => 'Sales Text',
			'name' => 'sales_text',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => '',
			'conditional_logic' => '',
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
		),
		array (
			'key' => 'field_5841fb7289dc5',
			'label' => 'Sales List',
			'name' => 'sales_list',
			'type' => 'repeater',
			'instructions' => '',
			'required' => '',
			'conditional_logic' => '',
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => '',
			'max' => '',
			'layout' => 'table',
			'button_label' => 'Add Row',
			'sub_fields' => array (
				array (
					'key' => 'field_5841fb8189dc6',
					'label' => 'Icon',
					'name' => 'icon',
					'type' => 'select',
					'instructions' => 'Choose an icon',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array (
						'Chess' => 'Chess',
						'Check' => 'Check',
						'Phone' => 'Phone',
						'Lightbulb' => 'Lightbulb',
					),
					'default_value' => array (
					),
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 0,
					'ajax' => 0,
					'placeholder' => '',
					'disabled' => 0,
					'readonly' => 0,
				),
				array (
					'key' => 'field_5841fbcd0a95e',
					'label' => 'Text',
					'name' => 'text',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => '',
					'conditional_logic' => '',
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 1,
				),
			),
		),
		array (
			'key' => 'field_5841fbdc0a95f',
			'label' => 'Profiles Title',
			'name' => 'profiles_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_5841fbe80a960',
			'label' => 'Profiles Text',
			'name' => 'profiles_text',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
		),
		array (
			'key' => 'field_5841fbf10a961',
			'label' => 'Profiles',
			'name' => 'profiles',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => '',
			'max' => '',
			'layout' => 'row',
			'button_label' => 'Add Row',
			'sub_fields' => array (
				array (
					'key' => 'field_5841fbfa0a962',
					'label' => 'Name',
					'name' => 'name',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_584f68d88cf19',
					'label' => 'Position',
					'name' => 'position',
					'type' => 'text',
					'instructions' => '',
					'required' => '',
					'conditional_logic' => '',
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_5841fc8c0a963',
					'label' => 'Bio Extract',
					'name' => 'bio_extract',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 1,
				),
				array (
					'key' => 'field_584f3d3d9df7d',
					'label' => 'Bio Full',
					'name' => 'bio_full',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => '',
					'conditional_logic' => '',
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 1,
				),
				array (
					'key' => 'field_5841fcc00a964',
					'label' => 'Picture',
					'name' => 'picture',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
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
				array (
					'key' => 'field_584eeba447d2a',
					'label' => 'Video URL',
					'name' => 'video_url',
					'type' => 'text',
					'instructions' => '',
					'required' => '',
					'conditional_logic' => '',
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_584f021d03776',
					'label' => 'Email',
					'name' => 'email',
					'type' => 'text',
					'instructions' => '',
					'required' => '',
					'conditional_logic' => '',
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_584f236d3cfb4',
					'label' => 'Modal Picture',
					'name' => 'modal_picture',
					'type' => 'image',
					'instructions' => '',
					'required' => '',
					'conditional_logic' => '',
					'wrapper' => array (
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
			),
		),
		array (
			'key' => 'field_5841fcd00a965',
			'label' => 'Contact Title',
			'name' => 'contact_title',
			'type' => 'text',
			'instructions' => '',
			'required' => '',
			'conditional_logic' => '',
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_5841fce70a966',
			'label' => 'Contact Text',
			'name' => 'contact_text',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => '',
			'conditional_logic' => '',
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
		),
		array (
			'key' => 'field_5841fcf00a967',
			'label' => 'Contact Map',
			'name' => 'contact_map',
			'type' => 'google_map',
			'instructions' => '',
			'required' => '',
			'conditional_logic' => '',
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'center_lat' => '40.0712968',
			'center_lng' => '-75.3100186',
			'zoom' => 17,
			'height' => '',
		),
		array (
			'key' => 'field_5841fd920a968',
			'label' => 'Addresses',
			'name' => 'addresses',
			'type' => 'repeater',
			'instructions' => '',
			'required' => '',
			'conditional_logic' => '',
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => '',
			'max' => '',
			'layout' => 'table',
			'button_label' => 'Add Row',
			'sub_fields' => array (
				array (
					'key' => 'field_5841fd9c0a969',
					'label' => 'Address',
					'name' => 'address',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 1,
				),
				array (
					'key' => 'field_5841fda90a96a',
					'label' => 'Contact Number',
					'name' => 'contact_number',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_5841fdb00a96b',
					'label' => 'Email',
					'name' => 'email',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page-explore.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_5887e1e803cff',
	'title' => 'Singular Page',
	'fields' => array (
		array (
			'layouts' => array (
				array (
					'key' => '5887ed3a01317',
					'name' => 'text_content',
					'label' => 'Text Content',
					'display' => 'block',
					'sub_fields' => array (
						array (
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => '',
							'default_value' => '',
							'delay' => 0,
							'key' => 'field_5887f2abfd639',
							'label' => 'Content',
							'name' => 'content',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => '',
							'conditional_logic' => '',
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
						),
					),
					'min' => '',
					'max' => '',
				),
				array (
					'key' => '5887f2bdfd63a',
					'name' => 'tabular_content',
					'label' => 'Tabular Content',
					'display' => 'block',
					'sub_fields' => array (
						array (
							'default_value' => 0,
							'message' => '',
							'ui' => 0,
							'ui_on_text' => '',
							'ui_off_text' => '',
							'key' => 'field_5887faf90a729',
							'label' => 'Table first column is header',
							'name' => 'table_first_column_is_header',
							'type' => 'true_false',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
						),
						array (
							'key' => 'field_5888ea278426d',
							'label' => 'Table',
							'name' => 'table',
							'type' => 'table',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'use_header' => 0,
						),
					),
					'min' => '',
					'max' => '',
				),
			),
			'min' => '',
			'max' => '',
			'button_label' => 'Add Row',
			'key' => 'field_5887e675fd638',
			'label' => 'Flexible Content',
			'name' => 'flexible_content',
			'type' => 'flexible_content',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page-flexible-content.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;

// Stop paste

}

acf_custom_fields();
