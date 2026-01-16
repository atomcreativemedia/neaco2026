<?php

if(function_exists("acf_add_local_field_group"))
{
	acf_add_local_field_group(array (
		'key' => 'group_fieldgroup_zB77a434EW3331d',
		'title' => 'Contact Page Settings',
		'fields' => array (
			//insert fields here
			// tabtrigger acf_reg_
			
			
			/*********************************/
			/*********************************/
			/* Contact Form */
			/*********************************/
			/*********************************/
			array (
				// Generic Field Settings
				'key' => 'field_tab_dT21e709FI1073v',
				'label' => 'Contact Form',
				'name' => 'contact_form',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				
				//Field Type Specific Settings
				'placement' => 'top',
				'endpoint' => 0,
			),
			
			array (
				// Generic Field Settings
				'key' => 'field_wysiwyg_pS89k229YV8932v',
				'label' => 'Contact Form Introduction',
				'name' => 'contact_form_introduction',
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
				'key' => 'field_gravityform_pY63l495MV2594y',
				'label' => 'Contact Form to Use',
				'name' => 'contact_form_to_use',
				'type' => 'forms',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				
				//Field Type Specific Settings
				'return_format' => 'post_object', // post_object / id
				'allow_null' => 0,
				'multiple' => 0,
			),
			
			
			/*********************************/
			/*********************************/
			/* Additional Contact */
			/*********************************/
			/*********************************/
			array (
				// Generic Field Settings
				'key' => 'field_tab_lE32i609JM4749e',
				'label' => 'Additional Contact',
				'name' => 'additional_contact',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				
				//Field Type Specific Settings
				'placement' => 'top',
				'endpoint' => 0,
			),
			array (
				// Generic Field Settings
				'key' => 'field_wysiwyg_hV17s903UT5091d',
				'label' => 'Additional Contact Introduction',
				'name' => 'additional_contact_introduction',
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
				'key' => 'field_checkbox_cD13m976UL8053w',
				'label' => 'Departments to Display',
				'name' => 'departments_to_display',
				'type' => 'checkbox',
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
				'choices' => array(
					
				),
				'layout' => 'horizontal',
				'allow_custom' => false,
				'save_custom' => false,
				'toggle' => false,
				'return_format' => 'value',
			),
			array (
				// Generic Field Settings
				'key' => 'field_truefalse_iZ71j334FS5246g',
				'label' => 'Display Head Office',
				'name' => 'display_head_office',
				'type' => 'true_false',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '1',
				
				//Field Type Specific Settings
				'message' => 0,
			),
			
			
			/*********************************/
			/*********************************/
			/* Map */
			/*********************************/
			/*********************************/
			array (
				// Generic Field Settings
				'key' => 'field_tab_vL55a933ER1742n',
				'label' => 'Map',
				'name' => 'map',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				
				//Field Type Specific Settings
				'placement' => 'top',
				'endpoint' => 0,
			),
			array (
				// Generic Field Settings
				'key' => 'field_textarea_xJ83t183HA3973p',
				'label' => 'Google Map Code',
				'name' => 'google_map_code',
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
				'key' => 'field_truefalse_jM49f579MS6367e',
				'label' => 'Display Map?',
				'name' => 'display_map',
				'type' => 'true_false',
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
				'message' => 0,
			),
			
			
			/*********************************/
			/*********************************/
			/* Merchants */
			/*********************************/
			/*********************************/
			array (
				// Generic Field Settings
				'key' => 'field_tab_gX34b537YT8306w',
				'label' => 'Overseas Merchants',
				'name' => 'contact_merchants',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				
				//Field Type Specific Settings
				'placement' => 'top',
				'endpoint' => 0,
			),
			array (
				// Generic Field Settings
				'key' => 'field_wysiwyg_nB84v483FN8427z',
				'label' => 'Overseas Merchants Intro',
				'name' => 'contact_merchants_intro',
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
				'key' => 'field_repeater_nT93z176VZ7926e',
				'label' => 'Merchants',
				'name' => 'contact_merchants_repeater',
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
				'pagination' => 0,
				'rows_per_page' => 20,
				'collapsed' => '',
				'min' => '0',
				'max' => '0',
				'layout' => 'block', //table/block/row
				'button_label' => 'Add Merchant',
				'sub_fields' => array (
					// add repeater fields here
					array (
						// Generic Field Settings
						'key' => 'field_text_nO77d191CH4229q',
						'label' => 'Heading',
						'name' => 'contact_merchants_repeater_heading',
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
						'key' => 'field_text_tL44l224AY5817k',
						'label' => 'Business Name',
						'name' => 'contact_merchants_repeater_business_name',
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
						'key' => 'field_text_zQ62q950NC7264v',
						'label' => 'Contact Name',
						'name' => 'contact_merchants_repeater_contact_name',
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
						'key' => 'field_text_kU20t727NP1474a',
						'label' => 'Phone',
						'name' => 'contact_merchants_repeater_phone',
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
						'key' => 'field_text_xL65y184TZ2366j',
						'label' => 'Email',
						'name' => 'contact_merchants_repeater_email',
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
						'key' => 'field_text_cR72q930FR2049n',
						'label' => 'Website',
						'name' => 'contact_merchants_repeater_website',
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
						'key' => 'field_image_lH70l531HX9171x',
						'label' => 'Logo',
						'name' => 'contact_merchants_repeater_logo',
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
		
		'location' => array (
			// repeat this array for OR rules
			array (
				// add location rules here
				// tabtrigger acf_group_location_
				// repeat whithin this array for AND rules
				array (
					'param' => 'page_template',
					'operator' => '==', // == / !=
					'value' => 'page-templates/template-contact-page.php', // front_page / posts_page / top_level / parent / child
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

?>