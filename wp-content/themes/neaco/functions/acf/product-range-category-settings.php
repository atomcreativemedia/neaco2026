<?php

if(function_exists("acf_add_local_field_group"))
{
	acf_add_local_field_group(array (
		'key' => 'group_fieldgroup_wI29m405SI8963h',
		'title' => 'Product Range Category Settings',
		'fields' => array (
			//insert fields here
			// tabtrigger acf_reg_
			
			/*********************************/
			/*********************************/
			/* Category Page Heading */
			/*********************************/
			/*********************************/
			array (
				// Generic Field Settings
				'key' => 'field_tab_bT61q244XR3126g',
				'label' => 'Category Page Heading',
				'name' => 'title_page_heading',
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
				'key' => 'field_image_xD90k635LS2817j',
				'label' => 'Background Image',
				'name' => 'title_page_heading_background_image',
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
				'return_format' => 'array',
				'preview_size' => 'medium',
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
				'key' => 'field_text_fI96z304WP3691u',
				'label' => 'Range Title',
				'name' => 'title_page_range_title',
				'type' => 'text',
				'instructions' => 'Use this field if you would like the main page heading to be different from the default category name.',
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
				'prepend' => '[h1]',
				'append' => '[/h1]',
				'maxlength' => '',
				'readonly' => 0,
				'disabled' => 0,
			),
			array (
				// Generic Field Settings
				'key' => 'field_text_jJ12y295OF8636l',
				'label' => 'Range Subheading',
				'name' => 'title_page_range_subheading',
				'type' => 'text',
				'instructions' => 'This is an optional field.',
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
				'prepend' => '[h2]',
				'append' => '[/h2]',
				'maxlength' => '',
				'readonly' => 0,
				'disabled' => 0,
			),
			array (
				// Generic Field Settings
				'key' => 'field_wysiwyg_mM14y491XE9412l',
				'label' => 'Content',
				'name' => 'title_page_content',
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
				'key' => 'field_repeater_rQ77g290JS6918a',
				'label' => 'Buttons',
				'name' => 'title_page_buttons',
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
				'layout' => 'table', //table/block/row
				'button_label' => 'Add Button',
				'sub_fields' => array (
					// add repeater fields here
					array (
						// Generic Field Settings
						'key' => 'field_text_fR71y505NK8463l',
						'label' => 'Button Text',
						'name' => 'title_page_buttons_button_text',
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
						'key' => 'field_text_jB98q144QW1777w',
						'label' => 'Button Destination',
						'name' => 'title_page_buttons_button_destination',
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
				),
				'row_min' => '',
				'row_limit' => '3',
			),
			
			array (
				// Generic Field Settings
				'key' => 'field_repeater_uF75w675DZ2310h',
				'label' => 'On-Page Navigation',
				'name' => 'title_page_nav',
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
				'layout' => 'table', //table/block/row
				'button_label' => 'Add Item',
				'sub_fields' => array (
					// add repeater fields here
					array (
						// Generic Field Settings
						'key' => 'field_text_pU62m757SN9567y',
						'label' => 'Label',
						'name' => 'title_page_nav_label',
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
						'key' => 'field_text_rW63l769SZ3212l',
						'label' => 'Destination ID',
						'name' => 'title_page_nav_dest_id',
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
						'prepend' => '#',
						'append' => '',
						'maxlength' => '',
						'readonly' => 0,
						'disabled' => 0,
					),
				),
			),
			
			
			/*********************************/
			/*********************************/
			/* Content Blocks */
			/*********************************/
			/*********************************/
			array (
				// Generic Field Settings
				'key' => 'field_tab_sT83i531RW2074q',
				'label' => 'Content Blocks',
				'name' => 'tab_prod_range_content_blocks',
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
				'key' => 'field_flexiblecontent_xE54q170BD4016y',
				'label' => 'Content Blocks',
				'name' => 'prod_range_content_blocks',
				'type' => 'flexible_content',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				//Field Type Specific Settings
				'layouts' => array (
					// add layout blocks here
					
					/*********************************/
					/*********************************/
					/* Product Ranges */
					/*********************************/
					/*********************************/
					'field_layout_kJ38x943AU9428d' => array (
						// Generic Field Settings
						'key' => 'field_layout_kJ38x943AU9428d',
						'label' => 'Product Ranges',
						'name' => 'pr_cb__prod_ranges',
						'display' => 'block', // table / block / row
						'sub_fields' => array (
							// add subfields here
							array (
								// Generic Field Settings
								'key' => 'field_text_bO69r953VZ9869o',
								'label' => 'Section ID',
								'name' => 'pr_cb__prod_ranges__section_id',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'product-ranges',
								
								//Field Type Specific Settings
								'placeholder' => 'product-ranges',
								'prepend' => '',
								'append' => '',
								'maxlength' => '',
								'readonly' => 0,
								'disabled' => 0,
							),
							array (
								// Generic Field Settings
								'key' => 'field_wysiwyg_lP54a374EU7158b',
								'label' => 'Introduction',
								'name' => 'pr_cb__prod_ranges__introduction',
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
								'key' => 'field_repeater_sK57a262DT2960f',
								'label' => 'Buttons',
								'name' => 'pr_cb__prod_ranges__buttons_rp',
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
								'max' => '2',
								'layout' => 'table', //table/block/row
								'button_label' => 'Add Button',
								'sub_fields' => array (
									// add repeater fields here
									array (
										// Generic Field Settings
										'key' => 'field_text_yR44h150SB7499i',
										'label' => 'Button Label',
										'name' => 'pr_cb__prod_ranges__buttons_rp__button_label',
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
										'key' => 'field_text_aT81s205LD9117l',
										'label' => 'Button Destination',
										'name' => 'pr_cb__prod_ranges__buttons_rp__button_destination',
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
								),
							),
						),
						'min' => '0',
						'max' => '1',
					),
					
					
					/*********************************/
					/*********************************/
					/* Products */
					/*********************************/
					/*********************************/
					'field_layout_eX63a985DO1975l' => array (
						// Generic Field Settings
						'key' => 'field_layout_eX63a985DO1975l',
						'label' => 'Products',
						'name' => 'pr_cb__products',
						'display' => 'block', // table / block / row
						'sub_fields' => array (
							// add subfields here
							array (
								// Generic Field Settings
								'key' => 'field_text_jI34a646UQ5987h',
								'label' => 'Section ID',
								'name' => 'pr_cb__products__section_id',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'products',
								
								//Field Type Specific Settings
								'placeholder' => 'products',
								'prepend' => '',
								'append' => '',
								'maxlength' => '',
								'readonly' => 0,
								'disabled' => 0,
							),
							array (
								// Generic Field Settings
								'key' => 'field_wysiwyg_gG55h696KJ4685u',
								'label' => 'Introduction',
								'name' => 'pr_cb__products__introduction',
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
								'key' => 'field_repeater_wS49d739LF2385a',
								'label' => 'Buttons',
								'name' => 'pr_cb__products__buttons_rp',
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
								'max' => '2',
								'layout' => 'table', //table/block/row
								'button_label' => 'Add Button',
								'sub_fields' => array (
									// add repeater fields here
									array (
										// Generic Field Settings
										'key' => 'field_text_qT26e356LL6458p',
										'label' => 'Button Label',
										'name' => 'pr_cb__products__buttons_rp__button_label',
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
										'key' => 'field_text_zN80v415EZ1680h',
										'label' => 'Button Destination',
										'name' => 'pr_cb__products__buttons_rp__button_destination',
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
								),
							),
						),
						'min' => '0',
						'max' => '1',
					),
					
					/*********************************/
					/*********************************/
					/* Article */
					/*********************************/
					/*********************************/
					'field_layout_mH98m769ME7000x' => array (
						// Generic Field Settings
						'key' => 'field_layout_mH98m769ME7000x',
						'label' => 'Article',
						'name' => 'pr_cb__article',
						'display' => 'block', // table / block / row
						'sub_fields' => array (
							// add subfields here
							array (
								// Generic Field Settings
								'key' => 'field_text_aE98e530PR2147e',
								'label' => 'Section ID',
								'name' => 'pr_cb__article__section_id',
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
								'key' => 'field_truefalse_fS78s431BA7494v',
								'label' => 'Showcase Article',
								'name' => 'pr_cb__article__showcase_article',
								'type' => 'true_false',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => 0,
								
								//Field Type Specific Settings
								'message' => 0,
							),
							array (
								// Generic Field Settings
								'key' => 'field_colorpicker_zA89b517JZ9551c',
								'label' => 'Background Colour',
								'name' => 'pr_cb__article__background_colour',
								'type' => 'color_picker',
								'instructions' => '',
								'required' => 0,
								/*'conditional_logic' => array (
									'field' => 'field_truefalse_fS78s431BA7494v',
									'operator' => '==',
									'value' => 1,
								),*/
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => '#FFFFFF',
								
								//Field Type Specific Settings
								// 0,string for hex (eg '#fffaaa')
								// 1,string for rgba string (eg 'rgba(0,0,0,1)')
								// 1,array for rgba value only (eg '0,0,0,1')
								'enable_opacity' => 0,
								'return_format' => 'string',
							),
							array (
								// Generic Field Settings
								'key' => 'field_image_iG22e511JM5390w',
								'label' => 'Background Image',
								'name' => 'pr_cb__article__background_image',
								'type' => 'image',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => array (
									'field' => 'field_truefalse_fS78s431BA7494v',
									'operator' => '==',
									'value' => 1,
								),
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
								'key' => 'field_select_jQ88o916XH7831v',
								'label' => 'Image Alignment',
								'name' => 'pr_cb__article__image_alignment',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => array (
									'field' => 'field_truefalse_fS78s431BA7494v',
									'operator' => '==',
									'value' => 1,
								),
								'wrapper' => array (
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'right',
								
								//Field Type Specific Settings
								'choices' => array(
									'left' => 'Image Left',
									'right' => 'Image Right',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							array (
								// Generic Field Settings
								'key' => 'field_select_sE37m563IZ2410u',
								'label' => 'Content Colour',
								'name' => 'pr_cb__article__content_colour',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								/*'conditional_logic' => array (
									'field' => 'field_truefalse_fS78s431BA7494v',
									'operator' => '==',
									'value' => 1,
								),*/
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'dark',
								
								//Field Type Specific Settings
								'choices' => array(
									'dark' => 'Dark',
									'light' => 'Light',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							array (
								// Generic Field Settings
								'key' => 'field_fontawesome_nF76f103MA8085l',
								'label' => 'Icon',
								'name' => 'pr_cb__article__icon',
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
									//2 => 'light',
									//3 => 'thin',
									//4 => 'duotone',
									5 => 'fak', // (uploaded icons)
									6 => 'brands',
								),
								'custom_icon_set' => '',
								'default_label' => '',
								'default_value' => '',
								
								'save_format' => 'element', // element, class, unicode or object
								'allow_null' => 0,
								'show_preview' => 1,
								'enqueue_fa' => 0,
								'fa_live_preview' => '',
								'choices' => array (),
							),
							array (
								// Generic Field Settings
								'key' => 'field_wysiwyg_cK25w947TW8992s',
								'label' => 'Article',
								'name' => 'pr_cb__article__article',
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
								'key' => 'field_repeater_wU65y987OB3105d',
								'label' => 'Buttons',
								'name' => 'pr_cb__article__buttons__rp',
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
								'max' => '3',
								'layout' => 'table', //table/block/row
								'button_label' => 'Add Button',
								'sub_fields' => array (
									// add repeater fields here
									array (
										// Generic Field Settings
										'key' => 'field_text_lT53i358VP7544e',
										'label' => 'Button Label',
										'name' => 'pr_cb__article__buttons__rp_button_label',
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
										'key' => 'field_text_oR72f794PI4297j',
										'label' => 'Button Destination',
										'name' => 'pr_cb__article__buttons__rp_button_destination',
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
										'key' => 'field_select_lM40n368NB4948z',
										'label' => 'Button Style',
										'name' => 'pr_cb__article__buttons__rp_button_style',
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
											'default' => 'Default',
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
							),
						),
						'min' => '0',
						'max' => '0',
					),
					
					
					/*********************************/
					/*********************************/
					/* Text Block with Image */
					/*********************************/
					/*********************************/
					'field_layout_cQ89s283DP6734u' => array (
						// Generic Field Settings
						'key' => 'field_layout_cQ89s283DP6734u',
						'label' => 'Text Block with Image',
						'name' => 'pr_cb__text_block_image',
						'display' => 'block', // table / block / row
						'sub_fields' => array (
							// add subfields here
							
							array (
								// Generic Field Settings
								'key' => 'field_text_uI82f164GI9356g',
								'label' => 'Section ID',
								'name' => 'pr_cb__text_block_image__section_id',
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
								'key' => 'field_select_bV36k596SK7153s',
								'label' => 'Alignment',
								'name' => 'pr_cb__text_block_image__alignment',
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
									'order-lg-0' => 'Image Left',
									'order-lg-2' => 'Image Right',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							array (
								// Generic Field Settings
								'key' => 'field_select_uR63b778AF5560w',
								'label' => 'Placement',
								'name' => 'pr_cb__text_block_image__placement',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'background',
								
								//Field Type Specific Settings
								'choices' => array(
									'background' => 'Image as Background',
									'static' => 'Image as Static',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							array (
								// Generic Field Settings
								'key' => 'field_wysiwyg_dU13h421BR4697j',
								'label' => 'Content',
								'name' => 'pr_cb__text_block_image__content',
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
								'key' => 'field_image_eI53e209BF9439g',
								'label' => 'Image',
								'name' => 'pr_cb__text_block_image__image',
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
								'key' => 'field_repeater_kU57x817WP7323i',
								'label' => 'Buttons',
								'name' => 'pr_cb__text_block_image__buttons__rp',
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
								'max' => '2',
								'layout' => 'table', //table/block/row
								'button_label' => 'Add Button',
								'sub_fields' => array (
									// add repeater fields here
									array (
										// Generic Field Settings
										'key' => 'field_text_kZ29p840OB1116c',
										'label' => 'Button Label',
										'name' => 'pr_cb__text_block_image__buttons__rp_button_text',
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
										'key' => 'field_text_lL70w374QT4985s',
										'label' => 'Button Destination',
										'name' => 'pr_cb__text_block_image__buttons__rp_button_destination',
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
								),
							),
						),
						'min' => '0',
						'max' => '0',
					),
					
					
					/*********************************/
					/*********************************/
					/* Comparison */
					/*********************************/
					/*********************************/
					'field_layout_rQ30e254ID1092g' => array (
						// Generic Field Settings
						'key' => 'field_layout_rQ30e254ID1092g',
						'label' => 'Comparison',
						'name' => 'pr_cb__comparison',
						'display' => 'block', // table / block / row
						'sub_fields' => array (
							// add subfields here
							array (
								// Generic Field Settings
								'key' => 'field_text_uE64m243IA6577x',
								'label' => 'Section ID',
								'name' => 'pr_cb__comparison__section_id',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'comparison',
								
								//Field Type Specific Settings
								'placeholder' => 'comparison',
								'prepend' => '',
								'append' => '',
								'maxlength' => '',
								'readonly' => 0,
								'disabled' => 0,
							),
							array (
								// Generic Field Settings
								'key' => 'field_text_jS98w876XR6783v',
								'label' => 'Section Heading',
								'name' => 'pr_cb__comparison__section_heading',
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
								'key' => 'field_text_lA39k774JZ8222c',
								'label' => 'Compare A Heading',
								'name' => 'pr_cb__comparison__compare_a_heading',
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
								'key' => 'field_textarea_rV61z809AB5558t',
								'label' => 'Compare A Text',
								'name' => 'pr_cb__comparison__compare_a_text',
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
								'key' => 'field_text_hG35v318SF1122h',
								'label' => 'Compare B Heading',
								'name' => 'pr_cb__comparison__compare_b_heading',
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
								'key' => 'field_textarea_mP68p258SZ5903x',
								'label' => 'Compare B Text',
								'name' => 'pr_cb__comparison__compare_b_text',
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
								'key' => 'field_repeater_qR78y413XH8942s',
								'label' => 'Products',
								'name' => 'pr_cb__comparison__products_rp',
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
								'layout' => 'row', //table/block/row
								'button_label' => 'Add Product',
								'sub_fields' => array (
									// add repeater fields here
									array (
										// Generic Field Settings
										'key' => 'field_image_eS65u595FH7526i',
										'label' => 'Product Image',
										'name' => 'pr_cb__comparison__products_rp__product_image',
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
										'return_format' => 'array', // array / url / id
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
										'key' => 'field_text_lA24n502IB1624f',
										'label' => 'Product Name',
										'name' => 'pr_cb__comparison__products_rp__product_name',
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
										'key' => 'field_text_uK25f825MS7701h',
										'label' => 'Product Description',
										'name' => 'pr_cb__comparison__products_rp__product_description',
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
										'key' => 'field_text_nL87o207OU7332c',
										'label' => 'Item Link',
										'name' => 'pr_cb__comparison__products_rp__item_link',
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
								),
							),
							array (
								// Generic Field Settings
								'key' => 'field_repeater_lV85t380YC9980x',
								'label' => 'Buttons',
								'name' => 'pr_cb__comparison__buttons_rp',
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
								'max' => '2',
								'layout' => 'table', //table/block/row
								'button_label' => 'Add Button',
								'sub_fields' => array (
									// add repeater fields here
									array (
										// Generic Field Settings
										'key' => 'field_text_jE95j437JY2562i',
										'label' => 'Button Label',
										'name' => 'pr_cb__comparison__buttons_rp__button_label',
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
										'key' => 'field_text_lO55q210PO2127z',
										'label' => 'Button Destination',
										'name' => 'pr_cb__comparison__buttons_rp__button_destination',
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
								),
							),
						),
						'min' => '0',
						'max' => '1',
					),
					
					
					/*********************************/
					/*********************************/
					/* USPs */
					/*********************************/
					/*********************************/
					'field_layout_kW96z917XU4832h' => array (
						// Generic Field Settings
						'key' => 'field_layout_kW96z917XU4832h',
						'label' => 'USPs',
						'name' => 'pr_cb__usps',
						'display' => 'block', // table / block / row
						'sub_fields' => array (
							// add subfields here
							array (
								// Generic Field Settings
								'key' => 'field_text_eP81h301LJ5123y',
								'label' => 'Section ID',
								'name' => 'pr_cb__usps__section_id',
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
								'key' => 'field_wysiwyg_lG41v259WL1341i',
								'label' => 'Introduction',
								'name' => 'pr_cb__usps__introduction',
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
								'key' => 'field_select_oJ13i269JY7690o',
								'label' => 'USPs Style',
								'name' => 'pr_cb__usps__usps_style',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'simple',
								
								//Field Type Specific Settings
								'choices' => array(
									'simple' => 'Simple with Icons',
									'intro-left' => 'Simple with Icons - Intro Left',
									'images' => 'Image Blocks',
									'slider' => 'Slider',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							array (
								// Generic Field Settings
								'key' => 'field_repeater_zX24o133TV6602k',
								'label' => 'USPs',
								'name' => 'pr_cb__usps__usps_rp',
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
								'layout' => 'row', //table/block/row
								'button_label' => 'Add USP',
								'sub_fields' => array (
									// add repeater fields here
									array (
										// Generic Field Settings
										'key' => 'field_fontawesome_qV80x759ZI7619g',
										'label' => 'USP Icon',
										'name' => 'pr_cb__usps__usps_rp__usp_icon',
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
											5 => 'fak', // (uploaded icons)
											//6 => 'brands',
										),
										'custom_icon_set' => '',
										'default_label' => '',
										'default_value' => '{
											"style" : "regular",
											"id" : "star",
											"label" : "Star"
										}',
										
										'save_format' => 'element', // element, class, unicode or object
										'allow_null' => 1,
										'show_preview' => 0,
										'enqueue_fa' => 0,
										'fa_live_preview' => '',
										'choices' => array (),
									),
									array (
										// Generic Field Settings
										'key' => 'field_text_pV49x762SR3263k',
										'label' => 'USP Heading',
										'name' => 'pr_cb__usps__usps_rp__usp_heading',
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
										'key' => 'field_textarea_wR89t930LA8565t',
										'label' => 'USP Text',
										'name' => 'pr_cb__usps__usps_rp__usp_text',
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
										'new_lines' => 'br', // empty / wpautop / br
										'readonly' => 0,
										'disabled' => 0,
									),
									array (
										// Generic Field Settings
										'key' => 'field_image_eW62e525NS7527c',
										'label' => 'USP Background Image',
										'name' => 'pr_cb__usps__usps_rp__usp_bg_image',
										'type' => 'image',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => array (
											array (
												'field' => 'field_select_oJ13i269JY7690o',
												'operator' => '!=',
												'value' => 'simple',
											),
											array (
												'field' => 'field_select_oJ13i269JY7690o',
												'operator' => '!=',
												'value' => 'intro-left',
											),
										),
										'wrapper' => array (
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'default_value' => '',
										
										//Field Type Specific Settings
										'return_format' => 'array', // array / url / id
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
							array (
								// Generic Field Settings
								'key' => 'field_wysiwyg_eX24z549DC9455b',
								'label' => 'Lower Content',
								'name' => 'pr_cb__usps__lower_content',
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
								'key' => 'field_repeater_sN24c787EL8144l',
								'label' => 'Buttons',
								'name' => 'pr_cb__usps__buttons_rp',
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
								'max' => '2',
								'layout' => 'table', //table/block/row
								'button_label' => 'Add Button',
								'sub_fields' => array (
									// add repeater fields here
									array (
										// Generic Field Settings
										'key' => 'field_text_vY51j445FH2898f',
										'label' => 'Button Label',
										'name' => 'pr_cb__usps__buttons_rp__button_label',
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
										'key' => 'field_text_rQ39j277PY3096k',
										'label' => 'Button Destination',
										'name' => 'pr_cb__usps__buttons_rp__button_destination',
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
								),
							),
						),
						'min' => '0',
						'max' => '0',
					),
					
					
					/*********************************/
					/*********************************/
					/* USPs (Rollover) */
					/*********************************/
					/*********************************/
					'field_layout_hM92j672YW6058e' => array (
						// Generic Field Settings
						'key' => 'field_layout_hM92j672YW6058e',
						'label' => 'USPs (Rollover)',
						'name' => 'pr_cb__usps_rollover',
						'display' => 'block', // table / block / row
						'sub_fields' => array (
							// add subfields here
							
							array (
								// Generic Field Settings
								'key' => 'field_text_eT16v572WC9742d',
								'label' => 'Section ID',
								'name' => 'pr_cb__usps_rollover_section_id',
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
								'key' => 'field_truefalse_wT39y360DA7310e',
								'label' => 'Heading Visible?',
								'name' => 'pr_cb__usps_rollover_heading_visible',
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
								'key' => 'field_wysiwyg_eF36y354SI2254x',
								'label' => 'Introduction Content',
								'name' => 'pr_cb__usps_rollover_introduction_content',
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
								'key' => 'field_truefalse_xW75z901DW1164e',
								'label' => 'Extra Height',
								'name' => 'pr_cb__usps_rollover_extra_height',
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
								'key' => 'field_repeater_fI28h373TG8927u',
								'label' => 'USPs',
								'name' => 'pr_cb__usps_rollover_usps_rp',
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
								'layout' => 'block', //table/block/row
								'button_label' => 'Add USP',
								'sub_fields' => array (
									// add repeater fields here
									array (
										// Generic Field Settings
										'key' => 'field_image_bB48s893BW6946q',
										'label' => 'Background Image',
										'name' => 'pr_cb__usps_rollover_usps_rp__background_image',
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
										'preview_size' => 'thumbnail', // thumbnail / medium / large
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
										'key' => 'field_fontawesome_gM61m368TX3469u',
										'label' => 'Icon',
										'name' => 'pr_cb__usps_rollover_usps_rp__icon',
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
											0 => 'light',
											1 => 'fak', // (uploaded icons)
										),
										'custom_icon_set' => '',
										'default_label' => '',
										'default_value' => '{
											"style" : "",
											"id" : "",
											"label" : ""
										}',
										
										'save_format' => 'element', // element, class, unicode or object
										'allow_null' => 1,
										'show_preview' => 0,
										'enqueue_fa' => 0,
										'fa_live_preview' => '',
										'choices' => array (),
									),
									
									array (
										// Generic Field Settings
										'key' => 'field_text_zB67r733NH4351f',
										'label' => 'Heading',
										'name' => 'pr_cb__usps_rollover_usps_rp__heading',
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
										'key' => 'field_wysiwyg_oE26z268IJ6865p',
										'label' => 'Text',
										'name' => 'pr_cb__usps_rollover_usps_rp__text',
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
										'key' => 'field_text_hQ21c163HO7145i',
										'label' => 'Product Link',
										'name' => 'pr_cb__usps_rollover_usps_rp__product_link',
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
								),
								'row_min' => '',
								'row_limit' => '',
							),
							array (
								// Generic Field Settings
								'key' => 'field_repeater_bZ41p539PY5042w',
								'label' => 'Buttons',
								'name' => 'pr_cb__usps_rollover__buttons_rp',
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
								'max' => '2',
								'layout' => 'table', //table/block/row
								'button_label' => 'Add Button',
								'sub_fields' => array (
									// add repeater fields here
									array (
										// Generic Field Settings
										'key' => 'field_text_vW85u988MW9549b',
										'label' => 'Button Label',
										'name' => 'pr_cb__usps_rollover__buttons_rp__button_label',
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
										'key' => 'field_text_vG80y718RS8603e',
										'label' => 'Button Destination',
										'name' => 'pr_cb__usps_rollover__buttons_rp__button_destination',
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
								),
							),
						),
						'min' => '0',
						'max' => '0',
					),
					
					
					/*********************************/
					/*********************************/
					/* USPs (Rollover Squares) */
					/*********************************/
					/*********************************/
					'field_layout_jC85x456BV9067x' => array (
						// Generic Field Settings
						'key' => 'field_layout_jC85x456BV9067x',
						'label' => 'USPs (Rollover Squares)',
						'name' => 'pr_cb__usps_rollover_sq',
						'display' => 'block', // table / block / row
						'sub_fields' => array (
							// add subfields here
							
							array (
								// Generic Field Settings
								'key' => 'field_text_hM16j630KQ9063t',
								'label' => 'Section ID',
								'name' => 'pr_cb__usps_rollover_sq_section_id',
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
								'key' => 'field_wysiwyg_dY56r923MI2334g',
								'label' => 'Introduction Content',
								'name' => 'pr_cb__usps_rollover_sq_introduction_content',
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
								'key' => 'field_repeater_gI31z595NU9854t',
								'label' => 'USPs',
								'name' => 'pr_cb__usps_rollover_sq_usps_rp',
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
								'layout' => 'block', //table/block/row
								'button_label' => 'Add USP',
								'sub_fields' => array (
									// add repeater fields here
									array (
										// Generic Field Settings
										'key' => 'field_image_zJ80v359RQ8716o',
										'label' => 'Background Image',
										'name' => 'pr_cb__usps_rollover_sq_usps_rp__background_image',
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
										'preview_size' => 'thumbnail', // thumbnail / medium / large
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
										'key' => 'field_text_zT35z466YG4397o',
										'label' => 'Heading',
										'name' => 'pr_cb__usps_rollover_sq_usps_rp__heading',
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
										'key' => 'field_wysiwyg_zB33l307ZJ2539p',
										'label' => 'Text',
										'name' => 'pr_cb__usps_rollover_sq_usps_rp__text',
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
								),
								'row_min' => '',
								'row_limit' => '',
							),
							array (
								// Generic Field Settings
								'key' => 'field_repeater_bI78i363YU6941f',
								'label' => 'Buttons',
								'name' => 'pr_cb__usps_rollover_sq__buttons_rp',
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
								'max' => '2',
								'layout' => 'table', //table/block/row
								'button_label' => 'Add Button',
								'sub_fields' => array (
									// add repeater fields here
									array (
										// Generic Field Settings
										'key' => 'field_text_fT84u194BG1753t',
										'label' => 'Button Label',
										'name' => 'pr_cb__usps_rollover_sq__buttons_rp__button_label',
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
										'key' => 'field_text_gB68f278PI6749e',
										'label' => 'Button Destination',
										'name' => 'pr_cb__usps_rollover_sq__buttons_rp__button_destination',
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
								),
							),
						),
						'min' => '0',
						'max' => '0',
					),
					
					
					/*********************************/
					/*********************************/
					/* Services */
					/*********************************/
					/*********************************/
					'field_layout_lM88g788DA6145t' => array (
						// Generic Field Settings
						'key' => 'field_layout_lM88g788DA6145t',
						'label' => 'Services',
						'name' => 'pr_cb__services',
						'display' => 'block', // table / block / row
						'sub_fields' => array (
							// add subfields here
							array (
								// Generic Field Settings
								'key' => 'field_text_wS75d122KB4011c',
								'label' => 'Section ID',
								'name' => 'pr_cb__services__section_id',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'services',
								
								//Field Type Specific Settings
								'placeholder' => 'services',
								'prepend' => '',
								'append' => '',
								'maxlength' => '',
								'readonly' => 0,
								'disabled' => 0,
							),
							array (
								// Generic Field Settings
								'key' => 'field_wysiwyg_aX36q620GJ2726n',
								'label' => 'Introduction',
								'name' => 'pr_cb__services__introduction',
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
								'key' => 'field_repeater_eI87u212ZD7788c',
								'label' => 'Buttons',
								'name' => 'pr_cb__services__buttons_rp',
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
								'max' => '2',
								'layout' => 'table', //table/block/row
								'button_label' => 'Add Button',
								'sub_fields' => array (
									// add repeater fields here
									array (
										// Generic Field Settings
										'key' => 'field_text_dX82g242TO1992w',
										'label' => 'Button Label',
										'name' => 'pr_cb__services__buttons_rp__button_label',
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
										'key' => 'field_text_mB47b250MW9122w',
										'label' => 'Button Destination',
										'name' => 'pr_cb__services__buttons_rp__button_destination',
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
								),
							),
							array (
								// Generic Field Settings
								'key' => 'field_repeater_tG96p447CY4697a',
								'label' => 'Services',
								'name' => 'pr_cb__services__services_rp',
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
								'button_label' => 'Add Service',
								'sub_fields' => array (
									// add repeater fields here
									array (
										// Generic Field Settings
										'key' => 'field_image_fG47m257HH6565h',
										'label' => 'Background Image',
										'name' => 'pr_cb__services__services_rp__image',
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
										'return_format' => 'array', // array / url / id
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
										'key' => 'field_wysiwyg_zX68r596NH2515q',
										'label' => 'Service',
										'name' => 'pr_cb__services__services_rp__service',
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
								),
							),
						),
						'min' => '0',
						'max' => '1',
					),
					
					
					/*********************************/
					/*********************************/
					/* Testimonials */
					/*********************************/
					/*********************************/
					'field_layout_pK80k836YW5393d' => array (
						// Generic Field Settings
						'key' => 'field_layout_pK80k836YW5393d',
						'label' => 'Testimonials',
						'name' => 'pr_cb__testimonials',
						'display' => 'block', // table / block / row
						'sub_fields' => array (
							// add subfields here
							
							array (
								// Generic Field Settings
								'key' => 'field_text_aL30p895GX5152x',
								'label' => 'Section ID',
								'name' => 'pr_cb__testimonials_section_id',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'testimonials',
								
								//Field Type Specific Settings
								'placeholder' => 'testimonials',
								'prepend' => '',
								'append' => '',
								'maxlength' => '',
								'readonly' => 0,
								'disabled' => 0,
							),
							array (
								// Generic Field Settings
								'key' => 'field_wysiwyg_iW24a306QA4000l',
								'label' => 'Introduction',
								'name' => 'pr_cb__testimonials_introduction',
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
								'key' => 'field_repeater_cJ73k523JF4437s',
								'label' => 'Testimonials',
								'name' => 'pr_cb__testimonials_testimonials_rp',
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
								'layout' => 'table', //table/block/row
								'button_label' => 'Add Testimonial',
								'sub_fields' => array (
									// add repeater fields here
									array (
										// Generic Field Settings
										'key' => 'field_textarea_bC60f137IF8236a',
										'label' => 'Text',
										'name' => 'pr_cb__testimonials_testimonials_rp_text',
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
										'key' => 'field_text_vG68m417XD2293c',
										'label' => 'Source',
										'name' => 'pr_cb__testimonials_testimonials_rp_source',
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
								),
							),
						),
						'min' => '0',
						'max' => '1',
					),
					
					
					/*********************************/
					/*********************************/
					/* FAQs */
					/*********************************/
					/*********************************/
					'field_layout_iQ59q985TS3648w' => array (
						// Generic Field Settings
						'key' => 'field_layout_iQ59q985TS3648w',
						'label' => 'FAQs',
						'name' => 'pr_cb__faqs',
						'display' => 'block', // table / block / row
						'sub_fields' => array (
							// add subfields here
							array (
								// Generic Field Settings
								'key' => 'field_text_oQ38d588JC6713g',
								'label' => 'Section ID',
								'name' => 'pr_cb__faqs__section_id',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'faqs',
								
								//Field Type Specific Settings
								'placeholder' => 'faqs',
								'prepend' => '',
								'append' => '',
								'maxlength' => '',
								'readonly' => 0,
								'disabled' => 0,
							),
							array (
								// Generic Field Settings
								'key' => 'field_wysiwyg_lH43i320BQ5624p',
								'label' => 'Introduction',
								'name' => 'pr_cb__faqs__introduction',
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
								'key' => 'field_repeater_nL34a263AL6731u',
								'label' => 'FAQs',
								'name' => 'pr_cb__faqs__faqs_rp',
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
								'layout' => 'table', //table/block/row
								'button_label' => 'Add FAQ',
								'sub_fields' => array (
									// add repeater fields here
									array (
										// Generic Field Settings
										'key' => 'field_text_dD51i702QF6980l',
										'label' => 'Question',
										'name' => 'pr_cb__faqs__faqs_rp__question',
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
										'key' => 'field_textarea_tI67a551HR9260t',
										'label' => 'Answer',
										'name' => 'pr_cb__faqs__faqs_rp__answer',
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
								'row_min' => '',
								'row_limit' => '',
							),
						),
						'min' => '0',
						'max' => '1',
					),
					
					
					/*********************************/
					/*********************************/
					/* Resources */
					/*********************************/
					/*********************************/
					'field_layout_zQ83g167QT5958x' => array (
						// Generic Field Settings
						'key' => 'field_layout_zQ83g167QT5958x',
						'label' => 'Resources',
						'name' => 'pr_cb__resources',
						'display' => 'block', // table / block / row
						'sub_fields' => array (
							// add subfields here
							array (
								// Generic Field Settings
								'key' => 'field_text_nZ45q376YP2124n',
								'label' => 'Section ID',
								'name' => 'pr_cb__resources__section_id',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'resources',
								
								//Field Type Specific Settings
								'placeholder' => 'resources',
								'prepend' => '',
								'append' => '',
								'maxlength' => '',
								'readonly' => 0,
								'disabled' => 0,
							),
							array (
								// Generic Field Settings
								'key' => 'field_wysiwyg_sX13o449JM7731k',
								'label' => 'Introduction',
								'name' => 'pr_cb__resources__introduction',
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
								'key' => 'field_repeater_qL59u420WW9283m',
								'label' => 'Resources',
								'name' => 'pr_cb__resources__resources_rp',
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
										'key' => 'field_file_iK46u231LC1655b',
										'label' => 'Resource File',
										'name' => 'pr_cb__resources__resources_rp__resource_file',
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
										'key' => 'field_text_oR91x723EN9502e',
										'label' => 'Resource Title',
										'name' => 'pr_cb__resources__resources_rp__resource_title',
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
										'key' => 'field_image_gX61e244FF4881r',
										'label' => 'Resource Thumb',
										'name' => 'pr_cb__resources__resources_rp__resource_thumb',
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
						'min' => '0',
						'max' => '1',
					),
					
					
					/*********************************/
					/*********************************/
					/* Companies */
					/*********************************/
					/*********************************/
					'field_layout_cO59w325HS7932c' => array (
						// Generic Field Settings
						'key' => 'field_layout_cO59w325HS7932c',
						'label' => 'Companies',
						'name' => 'pr_cb__companies',
						'display' => 'block', // table / block / row
						'sub_fields' => array (
							// add subfields here
							array (
								// Generic Field Settings
								'key' => 'field_text_bI49w889UV6052e',
								'label' => 'Section ID',
								'name' => 'pr_cb__companies__section_id',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'companies',
								
								//Field Type Specific Settings
								'placeholder' => 'companies',
								'prepend' => '',
								'append' => '',
								'maxlength' => '',
								'readonly' => 0,
								'disabled' => 0,
							),
							array (
								// Generic Field Settings
								'key' => 'field_wysiwyg_wM63y611YA8858t',
								'label' => 'Introduction',
								'name' => 'pr_cb__companies__introduction',
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
								'key' => 'field_repeater_tQ33j992PL6097c',
								'label' => 'Companies',
								'name' => 'pr_cb__companies__companies_rp',
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
								'button_label' => 'Add Logo',
								'sub_fields' => array (
									// add repeater fields here
									array (
										// Generic Field Settings
										'key' => 'field_image_fH49g758TT7052o',
										'label' => 'Logo Image',
										'name' => 'pr_cb__companies__companies_rp__logo_image',
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
										'return_format' => 'array', // array / url / id
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
						'min' => '0',
						'max' => '1',
					),
					
					
					/*********************************/
					/*********************************/
					/* Merchants */
					/*********************************/
					/*********************************/
					'field_layout_iI65n795TG6226g' => array (
						// Generic Field Settings
						'key' => 'field_layout_iI65n795TG6226g',
						'label' => 'Merchants',
						'name' => 'pr_cb__merchants',
						'display' => 'block', // table / block / row
						'sub_fields' => array (
							// add subfields here
							array (
								// Generic Field Settings
								'key' => 'field_text_uK84s909IQ6121l',
								'label' => 'Section ID',
								'name' => 'pr_cb__merchants__section_id',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'merchants',
								
								//Field Type Specific Settings
								'placeholder' => 'merchants',
								'prepend' => '',
								'append' => '',
								'maxlength' => '',
								'readonly' => 0,
								'disabled' => 0,
							),
							array (
								// Generic Field Settings
								'key' => 'field_wysiwyg_wV21m606BP2871a',
								'label' => 'Introduction',
								'name' => 'pr_cb__merchants__introduction',
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
								'key' => 'field_repeater_lO94r154PT9956i',
								'label' => 'Merchants',
								'name' => 'pr_cb__merchants__merchants_rp',
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
								'layout' => 'row', //table/block/row
								'button_label' => 'Add Merchant',
								'sub_fields' => array (
									// add repeater fields here
									array (
										// Generic Field Settings
										'key' => 'field_text_qP30q500DK2110k',
										'label' => 'Heading',
										'name' => 'pr_cb__merchants__merchants_rp__heading',
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
										'key' => 'field_text_yM96n534MM9341m',
										'label' => 'Business Name',
										'name' => 'pr_cb__merchants__merchants_rp__business_name',
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
										'key' => 'field_text_tJ26k432VD5309r',
										'label' => 'Contact Name',
										'name' => 'pr_cb__merchants__merchants_rp__contact_name',
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
										'key' => 'field_text_uT61d519TE8670k',
										'label' => 'Phone',
										'name' => 'pr_cb__merchants__merchants_rp__phone',
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
										'key' => 'field_text_uW84k837DB4970s',
										'label' => 'Email',
										'name' => 'pr_cb__merchants__merchants_rp__email',
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
										'key' => 'field_text_iE48z489UI1183f',
										'label' => 'Website',
										'name' => 'pr_cb__merchants__merchants_rp__website',
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
										'key' => 'field_image_hV47x483CW2952u',
										'label' => 'Logo',
										'name' => 'pr_cb__merchants__merchants_rp__logo',
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
						'min' => '0',
						'max' => '1',
					),
				),
				'button_label' => 'Add Block',
				'min' => '0',
				'max' => '0',
			),
			
			
			/*********************************/
			/*********************************/
			/* Description (Upper) */
			/*********************************/
			/*********************************/
			array (
				// Generic Field Settings
				'key' => 'field_tab_nJ96g420NS9403z',
				'label' => 'Description (Upper)',
				'name' => 'description_tab',
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
				'key' => 'field_wysiwyg_bO22o733HV7142z',
				'label' => 'Description (Upper)',
				'name' => 'description',
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
			
			/*********************************/
			/*********************************/
			/* Description (Lower) */
			/*********************************/
			/*********************************/
			array (
				// Generic Field Settings
				'key' => 'field_tab_hS54b382ND3042j',
				'label' => 'Description (Lower)',
				'name' => 'description_lower_tab',
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
				'key' => 'field_wysiwyg_dT87z221PO2845m',
				'label' => 'Description (Lower)',
				'name' => 'description_lower',
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
			
			/*********************************/
			/*********************************/
			/* Resources */
			/*********************************/
			/*********************************/
			array (
				// Generic Field Settings
				'key' => 'field_tab_sT27a595BF1934e',
				'label' => 'Resources',
				'name' => 'prodcat_resources__tab',
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
				'key' => 'field_repeater_kO86c222CU6221c',
				'label' => 'Resources',
				'name' => 'prodcat_resources__resources_rp',
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
						'key' => 'field_file_kR50b450HX5283j',
						'label' => 'Resource File',
						'name' => 'prodcat_resources__resources_rp__resource_file',
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
						'key' => 'field_text_pP34r213EO2158g',
						'label' => 'Resource Title',
						'name' => 'prodcat_resources__resources_rp__resource_title',
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
						'key' => 'field_image_vS38j889QU7845z',
						'label' => 'Resource Thumb',
						'name' => 'prodcat_resources__resources_rp__resource_thumb',
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
			
			/*********************************/
			/*********************************/
			/* Products */
			/*********************************/
			/*********************************/
			array (
				// Generic Field Settings
				'key' => 'field_tab_qE48b186OL7643p',
				'label' => 'Products',
				'name' => 'products',
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
				'key' => 'field_truefalse_rK97o947NO9557w',
				'label' => 'Show Product List?',
				'name' => 'show_product_list',
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
			/* Companies */
			/*********************************/
			/*********************************/
			array (
				// Generic Field Settings
				'key' => 'field_tab_gE84k733OD6422q',
				'label' => 'Companies',
				'name' => 'prodcat_companies',
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
				'key' => 'field_wysiwyg_hN96j285ZU4628i',
				'label' => 'Companies Introduction',
				'name' => 'prodcat_companies_introduction',
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
				'key' => 'field_repeater_kF47w942YC9354n',
				'label' => 'Companies',
				'name' => 'prodcat_companies_repeater',
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
				'button_label' => 'Add Logo',
				'sub_fields' => array (
					// add repeater fields here
					array (
						// Generic Field Settings
						'key' => 'field_image_fW17v346HM7643o',
						'label' => 'Logo Image',
						'name' => 'prodcat_companies_repeater_logo_image',
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
						'return_format' => 'array', // array / url / id
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
			
			/*********************************/
			/*********************************/
			/* Merchants */
			/*********************************/
			/*********************************/
			array (
				// Generic Field Settings
				'key' => 'field_tab_cJ17t490ZQ2594u',
				'label' => 'Merchants',
				'name' => 'prodcat_merchants',
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
				'key' => 'field_wysiwyg_nK83r221AS3359r',
				'label' => 'Merchants Intro',
				'name' => 'prodcat_merchants_intro',
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
				'key' => 'field_repeater_vK35w117AF5476y',
				'label' => 'Merchants',
				'name' => 'prodcat_merchants_repeater',
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
						'key' => 'field_text_bF36j250EY9782t',
						'label' => 'Heading',
						'name' => 'prodcat_merchants_repeater_heading',
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
						'key' => 'field_text_oM27l833NC7044j',
						'label' => 'Business Name',
						'name' => 'prodcat_merchants_repeater_business_name',
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
						'key' => 'field_text_rO88n374PX3556w',
						'label' => 'Contact Name',
						'name' => 'prodcat_merchants_repeater_contact_name',
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
						'key' => 'field_text_lX35o768DK9998w',
						'label' => 'Phone',
						'name' => 'prodcat_merchants_repeater_phone',
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
						'key' => 'field_text_fA23n233UG3382i',
						'label' => 'Email',
						'name' => 'prodcat_merchants_repeater_email',
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
						'key' => 'field_text_gZ80i445MC4119p',
						'label' => 'Website',
						'name' => 'prodcat_merchants_repeater_website',
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
						'key' => 'field_image_vG15o238SB1461u',
						'label' => 'Logo',
						'name' => 'prodcat_merchants_repeater_logo',
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


			/*********************************/
			/*********************************/
			/* FAQs */
			/*********************************/
			/*********************************/
			array (
				// Generic Field Settings
				'key' => 'field_tab_wS14e182QJ7434z',
				'label' => 'FAQs',
				'name' => 'prodcat_faqs_tab',
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
				'key' => 'field_repeater_fN46z161OJ5722s',
				'label' => 'FAQs',
				'name' => 'prodcat_faqs',
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
				'layout' => 'table', //table/block/row
				'button_label' => 'Add FAQ',
				'sub_fields' => array (
					// add repeater fields here
					array (
						// Generic Field Settings
						'key' => 'field_text_iG89i528EC5396v',
						'label' => 'Question',
						'name' => 'prodcat_faqs__faq_q',
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
						'key' => 'field_textarea_kI44e310HO8000j',
						'label' => 'Answer',
						'name' => 'prodcat_faqs__faq_a',
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
				'row_min' => '',
				'row_limit' => '',
			),
			
			
			/*********************************/
			/*********************************/
			/* Schema Markup */
			/*********************************/
			/*********************************/
			array (
				// Generic Field Settings
				'key' => 'field_tab_xJ17j131WU1078b',
				'label' => 'Schema Markup',
				'name' => 'prodcat_schema_markup__tab',
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
				'key' => 'field_textarea_sA70h914FF7540r',
				'label' => 'JSON-LD Schema Markup',
				'name' => 'prodcat_json_ld_schema_markup',
				'type' => 'textarea',
				'instructions' => 'Add your JSON-LD structured data here.',
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
				'rows' => 10,
				'new_lines' => '', // empty / wpautop / br
				'readonly' => 0,
				'disabled' => 0,
			),
			
			
			/*********************************/
			/*********************************/
			/* Mega Menu Settings */
			/*********************************/
			/*********************************/
			array (
				// Generic Field Settings
				'key' => 'field_tab_gN12u479DE8721z',
				'label' => 'Mega Menu Settings',
				'name' => 'mega_menu_settings_tab',
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
				'key' => 'field_wysiwyg_uP35k447BI5574w',
				'label' => 'Parent Category Description',
				'name' => 'mega_desc',
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
				'key' => 'field_image_gS15t902XA3995o',
				'label' => 'Subcategory Image',
				'name' => 'mega_img',
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
				'return_format' => 'array', // array / url / id
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
				'key' => 'field_text_vW74y353BG9246l',
				'label' => 'Subcategory Range Label',
				'name' => 'mega_range',
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
		),
		
		'location' => array (
			// repeat this array for OR rules
			array (
				// add location rules here
				// tabtrigger acf_group_location_
				// repeat whithin this array for AND rules
				array (
					'param' => 'taxonomy',
					'operator' => '==', // == / !=
					'value' => 'product_category', // front_page / posts_page / top_level / parent / child
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