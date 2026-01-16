<?php

if(function_exists("acf_add_local_field_group"))
{
	acf_add_local_field_group(array (
		'key' => 'group_fieldgroup_fG13u435GG3326h',
		'title' => 'Resources Page Settings',
		'fields' => array (
			//insert fields here
			// tabtrigger acf_reg_
			
			array (
				// Generic Field Settings
				'key' => 'field_repeater_wH76z100HY2249a',
				'label' => 'Resource Categories',
				'name' => 'resource_categories',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				
				//Field Type Specific Settings
				'collapsed' => '',
				'min' => '0',
				'max' => '0',
				'layout' => 'row', //table/block/row
				'button_label' => 'Add Resource Category',
				'sub_fields' => array (
					// add repeater fields here
					
					
					
					array (
						// Generic Field Settings
						'key' => 'field_text_kV17y847CF2285o',
						'label' => 'Resource Category Title',
						'name' => 'resource_category_title',
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
						
						//Field Type Specific Settings
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
						'readonly' => 0,
						'disabled' => 0,
					),
					array (
						// Generic Field Settings
						'key' => 'field_wysiwyg_nK98n154KO1549k',
						'label' => 'Resource Category Description',
						'name' => 'resource_category_description',
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
						
						//Field Type Specific Settings
						'tabs' => 'all',
						'toolbar' => 'full',
						'media_upload' => 1,
					),
					array (
						// Generic Field Settings
						'key' => 'field_repeater_qJ66d526PW8572z',
						'label' => 'Resources',
						'name' => 'resources',
						'type' => 'repeater',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						
						//Field Type Specific Settings
						'collapsed' => '',
						'min' => '0',
						'max' => '0',
						'layout' => 'table', //table/block/row
						'button_label' => 'Add Resource',
						'sub_fields' => array (
							// add repeater fields here
							
							array (
								// Generic Field Settings
								'key' => 'field_file_xQ60s776HB3523p',
								'label' => 'Resource File',
								'name' => 'resource_file',
								'type' => 'file',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								
								//Field Type Specific Settings
								'return_format' => 'url',
								'preview_size' => 'thumbnail',
								'library' => 'all',
								'min_size' => 0,
								'max_size' => 0,
								'mime_types' => '',
							),
							array (
								// Generic Field Settings
								'key' => 'field_text_zG53y817VG8256o',
								'label' => 'Resource Title',
								'name' => 'resource_title',
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
								
								//Field Type Specific Settings
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'maxlength' => '',
								'readonly' => 0,
								'disabled' => 0,
							),
							array (
								// Generic Field Settings
								'key' => 'field_image_qW16q562ZE8282u',
								'label' => 'Resource Thumb',
								'name' => 'resource_thumb',
								'type' => 'image',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								
								//Field Type Specific Settings
								'return_format' => 'url', // array / url / id
								'preview_size' => 'medium', // thumbnail / medium / large
								'library' => 'all',
								'min_width' => 0,
								'min_height' => 0,
								'min_size' => 0,
								'max_width' => 0,
								'max_height' => 0,
								'max_size' => 0,
								'mime_types' => '',
							),
						),
					),
					
					
					
					
					
					
					
					
				),
			),
		),
		
		'location' => array (
			// repeat this array for OR rules
			array (
				// add location rules here
				// tabtrigger acf_group_location_
				// repeat whithin this array for AND rules
				array (
					'param' => 'page_template',
					'operator' => '==', // == / !=
					'value' => 'page-templates/template-resources.php', // front_page / posts_page / top_level / parent / child
				),
			),
		),
		
		'menu_order' => 0,
		'position' => 'normal', // normal / acf_after_title / side
		'style' => 'default', // default / seamless
		'label_placement' => 'top', // top / left
		'instruction_placement' => 'label', // label / field
		'hide_on_screen' => array (
			/*0 => 'permalink',*/
			/*1 => 'the_content',*/
			/*2 => 'excerpt',*/
			/*3 => 'discussion',*/
			/*4 => 'comments',*/
			/*5 => 'revisions',*/
			/*6 => 'slug',*/
			/*7 => 'author',*/
			/*8 => 'format',*/
			/*9 => 'page_attributes',*/
			/*10 => 'featured_image',*/
			/*11 => 'categories',*/
			/*12 => 'tags',*/
			/*13 => 'send-trackbacks',*/
		),
		'active' => true,
		'description' => '',
	));
}