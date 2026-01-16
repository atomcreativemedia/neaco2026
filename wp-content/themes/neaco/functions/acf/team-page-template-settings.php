<?php

if(function_exists("acf_add_local_field_group"))
{
	acf_add_local_field_group(array (
		'key' => 'group_fieldgroup_sI17n873PR1235m',
		'title' => 'Team Page Settings',
		'fields' => array (
			//insert fields here
			// tabtrigger acf_reg_
			
			
			array (
				// Generic Field Settings
				'key' => 'field_repeater_kN11f434CX1184d',
				'label' => 'Departments',
				'name' => 'departments',
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
				'button_label' => 'Add Department',
				'sub_fields' => array (
					// add repeater fields here
					array (
						// Generic Field Settings
						'key' => 'field_text_oW15j704WU4821m',
						'label' => 'Department Name',
						'name' => 'department_name',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '30%',
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
						'key' => 'field_repeater_uW46h536GI9947d',
						'label' => 'Team Profiles',
						'name' => 'team_bios',
						'type' => 'repeater',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '70%',
							'class' => '',
							'id' => '',
						),
						
						//Field Type Specific Settings
						'collapsed' => '',
						'min' => '0',
						'max' => '0',
						'layout' => 'block', //table/block/row
						'button_label' => 'Add Profile',
						'sub_fields' => array (
							// add repeater fields here
							array (
								// Generic Field Settings
								'key' => 'field_text_fU92k683FM7803u',
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
								'key' => 'field_text_kM90j663MF8996s',
								'label' => 'Position/Title',
								'name' => 'position_title',
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
								'key' => 'field_textarea_hZ81t681OM9407n',
								'label' => 'Bio',
								'name' => 'bio',
								'type' => 'textarea',
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
								'maxlength' => '',
								'rows' => '',
								'new_lines' => '', // empty / wpautop / br
								'readonly' => 0,
								'disabled' => 0,
							),
							array (
								// Generic Field Settings
								'key' => 'field_text_mH73u116NG8503t',
								'label' => 'Contact Phone',
								'name' => 'contact_phone',
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
								'key' => 'field_text_rD27e506OI2144r',
								'label' => 'Contact Email',
								'name' => 'contact_email',
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
								'key' => 'field_image_wS96y845HE3099n',
								'label' => 'Main Image',
								'name' => 'main_image',
								'type' => 'image',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '50%',
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
							array (
								// Generic Field Settings
								'key' => 'field_image_vM76z661WM5244d',
								'label' => 'Secondary Image',
								'name' => 'secondary_image',
								'type' => 'image',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '50%',
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
					'value' => 'page-templates/template-team-page.php', // front_page / posts_page / top_level / parent / child
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