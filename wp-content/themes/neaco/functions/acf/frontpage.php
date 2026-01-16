<?php

if(function_exists("acf_add_local_field_group"))
{
	acf_add_local_field_group(array (
		'key' => 'group_fieldgroup_iJ43t822YC7911k',
		'title' => 'Front Page Settings',
		'fields' => array (
			//insert fields here
			// tabtrigger acf_reg_
			
			
			/*********************************/
			/*********************************/
			/* Featured Content */
			/*********************************/
			/*********************************/
			array (
				// Generic Field Settings
				'key' => 'field_tab_hG65a625DQ2575a',
				'label' => 'Featured Content',
				'name' => 'tab_featured_content',
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
				'key' => 'field_truefalse_sA46p874DY6760j',
				'label' => 'Display Featured Content?',
				'name' => 'display_featured_content',
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
			array (
				// Generic Field Settings
				'key' => 'field_text_dT29v962MS7543o',
				'label' => 'Section ID',
				'name' => 'featured_content_section_id',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '20%',
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
				'key' => 'field_image_aV14v555ED1099w',
				'label' => 'Image',
				'name' => 'featured_content_image',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '20%',
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
				'key' => 'field_select_jB66l663HM2708g',
				'label' => 'Overlay/Background Setting',
				'name' => 'featured_content_overlay_background_setting',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '20%',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'black',
				
				//Field Type Specific Settings
				'choices' => array (
					'dark' => 'Dark',
					'light' => 'Light',
					'black' => 'Black',
					'white' => 'White',
					'none' => 'No Overlay',
				),
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 0,
				'ajax' => 0,
				'placeholder' => '',
			),
			array (
				// Generic Field Settings
				'key' => 'field_select_hT83s108TP7413g',
				'label' => 'Content Padding',
				'name' => 'featured_content_content_padding',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '20%',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'large',
				
				//Field Type Specific Settings
				'choices' => array (
					'small' => 'Small Padding',
					'medium' => 'Medium Padding',
					'large' => 'Large Padding',
					'xlarge' => 'Extra Large Padding',
					'xxl' => 'XXL',
				),
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 0,
				'ajax' => 0,
				'placeholder' => '',
			),
			array (
				// Generic Field Settings
				'key' => 'field_truefalse_iZ96a235FX3384b',
				'label' => 'Enable Parallax?',
				'name' => 'featured_content_enable_parallax',
				'type' => 'true_false',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '20%',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				
				//Field Type Specific Settings
				'message' => 0,
			),
			array (
				// Generic Field Settings
				'key' => 'field_select_jO34d531HT8089h',
				'label' => 'Content Alignment (Mobile)',
				'name' => 'featured_content_content_alignment_mobile',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '50%',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'center',
				
				//Field Type Specific Settings
				'choices' => array (
					'start' => 'Left',
					'center' => 'Centre',
					'end' => 'Right',
				),
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 0,
				'ajax' => 0,
				'placeholder' => '',
			),
			array (
				// Generic Field Settings
				'key' => 'field_select_oO10z973QX6997b',
				'label' => 'Content Alignment (Desktop)',
				'name' => 'featured_content_content_alignment_desktop',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '50%',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'center',
				
				//Field Type Specific Settings
				'choices' => array (
					'start' => 'Left',
					'center' => 'Centre',
					'end' => 'Right',
				),
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 0,
				'ajax' => 0,
				'placeholder' => '',
			),
			array (
				// Generic Field Settings
				'key' => 'field_wysiwyg_yZ79n652HS7340d',
				'label' => 'Content',
				'name' => 'featured_content_content',
				'type' => 'wysiwyg',
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
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
			),
			array (
				// Generic Field Settings
				'key' => 'field_repeater_sR97m773IL5719t',
				'label' => 'Buttons',
				'name' => 'featured_content_buttons',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '50%',
					'class' => '',
					'id' => '',
				),
				
				//Field Type Specific Settings
				'layout' => 'table', //table/block/row
				'button_label' => 'Add Button',
				'sub_fields' => array (
					// add repeater fields here
					array (
						// Generic Field Settings
						'key' => 'field_text_vC51i132QR1709o',
						'label' => 'Button Text',
						'name' => 'featured_content_button_text',
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
						'key' => 'field_text_vF66h540XE6575w',
						'label' => 'Button Destination',
						'name' => 'featured_content_button_destination',
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
						'key' => 'field_select_oN45c503YK5026a',
						'label' => 'Button Colour',
						'name' => 'featured_content_button_colour',
						'type' => 'select',
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
						'choices' => array (
							'grey-green' => 'Grey/Green',
							'green-grey' => 'Green/Grey',
							'white-grey' => 'White/Grey',
							'grey-white' => 'Grey/White',
							'white-green' => 'White/Green',
							'green-white' => 'Green/White',
						),
						'allow_null' => 0,
						'multiple' => 0,
						'ui' => 0,
						'ajax' => 0,
						'placeholder' => '',
					),
				),
				'row_min' => '',
				'row_limit' => '2',
			),
			
			
			/*********************************/
			/*********************************/
			/* Quick Links */
			/*********************************/
			/*********************************/
			array (
				// Generic Field Settings
				'key' => 'field_tab_vC84f484BE1968w',
				'label' => 'Quick Links',
				'name' => 'tab_quick_links',
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
				'key' => 'field_truefalse_yZ47m586AE6648o',
				'label' => 'Display Quick Links?',
				'name' => 'display_quick_links',
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
			array (
				// Generic Field Settings
				'key' => 'field_text_gK34a381GL8478t',
				'label' => 'Section ID',
				'name' => 'quick_links_section_id',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '25%',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'quick-links',
				
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
				'key' => 'field_wysiwyg_bU91f804GT8596d',
				'label' => 'Intro',
				'name' => 'quick_links_intro',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '75%',
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
				'key' => 'field_repeater_wH49g552WX4163d',
				'label' => 'Quick Links',
				'name' => 'quick_links_rep',
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
				'button_label' => 'Add Quick Link',
				'sub_fields' => array (
					// add repeater fields here
					array (
						// Generic Field Settings
						'key' => 'field_image_jS16h970FQ4574a',
						'label' => 'Background Image',
						'name' => 'quick_links_rep_background_image',
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
					array (
						// Generic Field Settings
						'key' => 'field_text_vV32g849XX3964y',
						'label' => 'Title',
						'name' => 'quick_links_rep_title',
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
						'key' => 'field_textarea_aH56g426WC5566g',
						'label' => 'Description',
						'name' => 'quick_links_rep_description',
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
						'key' => 'field_text_kT77d821DE7278o',
						'label' => 'Link',
						'name' => 'quick_links_link',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '#',
						
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
						'key' => 'field_select_qC35e469MT9870x',
						'label' => 'Overlay Colour',
						'name' => 'quick_links_rep_overlay_colour',
						'type' => 'select',
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
							'green' => 'Green',
							'steel' => 'Steel',
							'light' => 'Light',
						),
						'allow_null' => 0,
						'multiple' => 0,
						'ui' => 0,
						'ajax' => 0,
						'placeholder' => '',
					),
				),
			),
			
			
			/*********************************/
			/*********************************/
			/* Mission Statement */
			/*********************************/
			/*********************************/
			array (
				// Generic Field Settings
				'key' => 'field_tab_eG75b102SA1199x',
				'label' => 'Mission Statement',
				'name' => 'tab_mission_statement',
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
				'key' => 'field_truefalse_sJ95a802ZL4647h',
				'label' => 'Display Mission Statement?',
				'name' => 'display_mission_statement',
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
			array (
				// Generic Field Settings
				'key' => 'field_text_oC11t767JQ9800j',
				'label' => 'Section ID',
				'name' => 'mission_statement_section_id',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'mission-statement',
				
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
				'key' => 'field_text_vX42d185LR4915e',
				'label' => 'Intro Heading',
				'name' => 'mission_statement_intro_heading',
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
				'key' => 'field_text_wO34m773EC5713y',
				'label' => 'Intro Subheading',
				'name' => 'mission_statement_intro_subheading',
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
				'key' => 'field_wysiwyg_hL59v820QT4147c',
				'label' => 'Column 1',
				'name' => 'mission_statement_column_1',
				'type' => 'wysiwyg',
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
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
			),
			array (
				// Generic Field Settings
				'key' => 'field_wysiwyg_bA33r391JX4743d',
				'label' => 'Column 2',
				'name' => 'mission_statement_column_2',
				'type' => 'wysiwyg',
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
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
			),
			
			
			/*********************************/
			/*********************************/
			/* Featured Content (Lower) */
			/*********************************/
			/*********************************/
			array (
				// Generic Field Settings
				'key' => 'field_tab_rG56u713UL3155q',
				'label' => 'Featured Content (Lower)',
				'name' => 'tab_featured_content_lower',
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
				'key' => 'field_truefalse_iH43a971TE8330g',
				'label' => 'Display Featured Content?',
				'name' => 'display_featured_content_lower',
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
			array (
				// Generic Field Settings
				'key' => 'field_text_qZ45f633IV6091k',
				'label' => 'Section ID',
				'name' => 'featured_content_lower_section_id',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '20%',
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
				'key' => 'field_image_uI49z894EC3181o',
				'label' => 'Image',
				'name' => 'featured_content_lower_image',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '20%',
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
				'key' => 'field_select_wU88e643OB3521v',
				'label' => 'Overlay/Background Setting',
				'name' => 'featured_content_lower_overlay_background_setting',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '20%',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'black',
				
				//Field Type Specific Settings
				'choices' => array (
					'dark' => 'Dark',
					'light' => 'Light',
					'black' => 'Black',
					'white' => 'White',
					'none' => 'No Overlay',
				),
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 0,
				'ajax' => 0,
				'placeholder' => '',
			),
			array (
				// Generic Field Settings
				'key' => 'field_select_eO55g576RP2736u',
				'label' => 'Content Padding',
				'name' => 'featured_content_lower_content_padding',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '20%',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'large',
				
				//Field Type Specific Settings
				'choices' => array (
					'small' => 'Small Padding',
					'medium' => 'Medium Padding',
					'large' => 'Large Padding',
					'xlarge' => 'Extra Large Padding',
					'xxl' => 'XXL',
				),
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 0,
				'ajax' => 0,
				'placeholder' => '',
			),
			array (
				// Generic Field Settings
				'key' => 'field_truefalse_bO36x192PP4533a',
				'label' => 'Enable Parallax?',
				'name' => 'featured_content_lower_enable_parallax',
				'type' => 'true_false',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '20%',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				
				//Field Type Specific Settings
				'message' => 0,
			),
			array (
				// Generic Field Settings
				'key' => 'field_select_aG60w178IY3829a',
				'label' => 'Content Alignment (Mobile)',
				'name' => 'featured_content_lower_content_alignment_mobile',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '50%',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'center',
				
				//Field Type Specific Settings
				'choices' => array (
					'start' => 'Left',
					'center' => 'Centre',
					'end' => 'Right',
				),
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 0,
				'ajax' => 0,
				'placeholder' => '',
			),
			array (
				// Generic Field Settings
				'key' => 'field_select_qN42c511CL6221i',
				'label' => 'Content Alignment (Desktop)',
				'name' => 'featured_content_lower_content_alignment_desktop',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '50%',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'center',
				
				//Field Type Specific Settings
				'choices' => array (
					'start' => 'Left',
					'center' => 'Centre',
					'end' => 'Right',
				),
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 0,
				'ajax' => 0,
				'placeholder' => '',
			),
			array (
				// Generic Field Settings
				'key' => 'field_wysiwyg_eD61h633UK7926y',
				'label' => 'Content',
				'name' => 'featured_content_lower_content',
				'type' => 'wysiwyg',
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
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
			),
			array (
				// Generic Field Settings
				'key' => 'field_repeater_cY25h490XG8608m',
				'label' => 'Buttons',
				'name' => 'featured_content_lower_buttons',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '50%',
					'class' => '',
					'id' => '',
				),
				
				//Field Type Specific Settings
				'layout' => 'table', //table/block/row
				'button_label' => 'Add Button',
				'sub_fields' => array (
					// add repeater fields here
					array (
						// Generic Field Settings
						'key' => 'field_text_oI40d539LO5508p',
						'label' => 'Button Text',
						'name' => 'featured_content_lower_button_text',
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
						'key' => 'field_text_zE90w824CE2861e',
						'label' => 'Button Destination',
						'name' => 'featured_content_lower_button_destination',
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
						'key' => 'field_select_rZ20c824QU7319w',
						'label' => 'Button Colour',
						'name' => 'featured_content_lower_button_colour',
						'type' => 'select',
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
						'choices' => array (
							'grey-green' => 'Grey/Green',
							'green-grey' => 'Green/Grey',
							'white-grey' => 'White/Grey',
							'grey-white' => 'Grey/White',
							'white-green' => 'White/Green',
							'green-white' => 'Green/White',
						),
						'allow_null' => 0,
						'multiple' => 0,
						'ui' => 0,
						'ajax' => 0,
						'placeholder' => '',
					),
				),
				'row_min' => '',
				'row_limit' => '2',
			),
			
			
			/*********************************/
			/*********************************/
			/* Why Choose Us? */
			/*********************************/
			/*********************************/
			array (
				// Generic Field Settings
				'key' => 'field_tab_mV62q934TY8684u',
				'label' => 'Why Choose Us?',
				'name' => 'tab_why_choose_us',
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
				'key' => 'field_truefalse_lF43j170VE8167y',
				'label' => 'Display Why Choose Us?',
				'name' => 'display_why_choose_us',
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
			array (
				// Generic Field Settings
				'key' => 'field_text_sT35y559JV6802e',
				'label' => 'Section ID',
				'name' => 'why_choose_us_section_id',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'why-choose-us',
				
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
				'key' => 'field_wysiwyg_tL37n868QC1269f',
				'label' => 'Intro',
				'name' => 'why_choose_us_intro',
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
				'key' => 'field_repeater_rB48w306EL1392r',
				'label' => 'USPs',
				'name' => 'why_choose_us_usps',
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
				'button_label' => 'Add USP',
				'sub_fields' => array (
					// add repeater fields here
					array (
						// Generic Field Settings
						'key' => 'field_text_rL29k211LV3825w',
						'label' => 'USP Heading',
						'name' => 'why_choose_us_usps_usp_heading',
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
						'key' => 'field_fontawesome_lV22c979ZN2775p',
						'label' => 'USP Icon',
						'name' => 'why_choose_us_usps_usp_icon',
						'type' => 'font-awesome',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						
						//Field Type Specific Settings
						'icon_sets' => array (
							//remove as needed, start at 0
							0 => 'solid',
							1 => 'regular',
							2 => 'light',
							3 => 'thin',
							//4 => 'duotone',
							//5 => 'fak', // (uploaded icons)
							//6 => 'brands',
						),
						'custom_icon_set' => '',
						'default_label' => '',
						'default_value' => '{
							"style" : "solid",
							"id" : "users",
							"label" : "Users"
						}',
						
						'save_format' => 'element', // element, class, unicode or object
						'allow_null' => 0,
						'show_preview' => 0,
						'enqueue_fa' => 0,
						'fa_live_preview' => '',
						'choices' => array (),
					),
					array (
						// Generic Field Settings
						'key' => 'field_textarea_kG63p271EZ3050p',
						'label' => 'USP Text',
						'name' => 'why_choose_us_usps_usp_text',
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
				),
			),
			
			
			/*********************************/
			/*********************************/
			/* Companies */
			/*********************************/
			/*********************************/
			array (
				// Generic Field Settings
				'key' => 'field_tab_pJ31z650BC7711n',
				'label' => 'Companies',
				'name' => 'tab_companies',
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
				'key' => 'field_truefalse_jY41j911YA1433x',
				'label' => 'Display Companies?',
				'name' => 'display_companies',
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
			array (
				// Generic Field Settings
				'key' => 'field_text_vA56l320VJ9291c',
				'label' => 'Section ID',
				'name' => 'companies_section_id',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'companies-section',
				
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
				'key' => 'field_message_zO23s472GX3905n',
				'label' => '',
				'name' => 'companies_message',
				'type' => 'message',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				
				//Field Type Specific Settings
				
				'message' => 'You can manage the companies logos under <strong>Options > Global Page Sections > Companies Section</strong>.',
				
				'new_lines' => 'wpautop',
					// 'wpautop' = automatically add paragraphs
					// 'br' = automatically add <br>
					// '' = no formatting
					
				'esc_html' => 0,
			),
			
			
			/*********************************/
			/*********************************/
			/* Quick Links (Lower) */
			/*********************************/
			/*********************************/
			array (
				// Generic Field Settings
				'key' => 'field_tab_pI21c115ZL7322r',
				'label' => 'Quick Links (Lower)',
				'name' => 'tab_quick_links_lower',
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
				'key' => 'field_truefalse_tV93p933EC4225o',
				'label' => 'DIsplay Quick Links (Lower)?',
				'name' => 'display_quick_links_lower',
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
			array (
				// Generic Field Settings
				'key' => 'field_text_tS61d741CT4918d',
				'label' => 'Section ID',
				'name' => 'quick_links_lower_section_id',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'quick-links-lower',
				
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
				'key' => 'field_image_rH46o751MX8329c',
				'label' => 'Background Image',
				'name' => 'quick_links_lower_background_image',
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
			array (
				// Generic Field Settings
				'key' => 'field_repeater_lR21m487MR1437w',
				'label' => 'Quick Links',
				'name' => 'quick_links_lower_quick_links',
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
				'button_label' => 'Add Link',
				'sub_fields' => array (
					// add repeater fields here
					array (
						// Generic Field Settings
						'key' => 'field_wysiwyg_oD15p334YB5201q',
						'label' => 'Text',
						'name' => 'quick_links_lower_quick_link_text',
						'type' => 'wysiwyg',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '100%',
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
						'key' => 'field_text_wZ96t393VB4669f',
						'label' => 'Button Label',
						'name' => 'quick_links_lower_quick_link_button_label',
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
						'key' => 'field_text_oH46n734KZ7405n',
						'label' => 'Button Link',
						'name' => 'quick_links_lower_quick_link_button_link',
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
						'key' => 'field_truefalse_jR40a265EW7184z',
						'label' => 'External Link?',
						'name' => 'quick_links_lower_quick_link_external_link',
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
				),
			),
			
			
			/*********************************/
			/*********************************/
			/* Accreditations */
			/*********************************/
			/*********************************/
			array (
				// Generic Field Settings
				'key' => 'field_tab_aC62c682EV5094l',
				'label' => 'Accreditations',
				'name' => 'tab_accreditations',
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
				'key' => 'field_truefalse_zQ61u510MV5349f',
				'label' => 'Display Accreditations?',
				'name' => 'display_accreditations',
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
			array (
				// Generic Field Settings
				'key' => 'field_text_xC85h530QK7392u',
				'label' => 'Section ID',
				'name' => 'accreditations_section_id',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'accreditations-section',
				
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
				'key' => 'field_message_wQ47f439KA7362i',
				'label' => '',
				'name' => 'accreditations_message',
				'type' => 'message',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				
				//Field Type Specific Settings
				
				'message' => 'You can manage the accreditations logos under <strong>Options > Global Page Sections > Accreditations Section</strong>.',
				
				'new_lines' => 'wpautop',
					// 'wpautop' = automatically add paragraphs
					// 'br' = automatically add <br>
					// '' = no formatting
					
				'esc_html' => 0,
			),
		),
		
		'location' => array (
			// repeat this array for OR rules
			array (
				// add location rules here
				// tabtrigger acf_group_location_
				// repeat whithin this array for AND rules
				array (
					'param' => 'page_type',
					'operator' => '==', // == / !=
					'value' => 'front_page', // front_page / posts_page / top_level / parent / child
					'order_no' => 0,
					'group_no' => 0,
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