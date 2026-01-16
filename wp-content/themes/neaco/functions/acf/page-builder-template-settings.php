<?php
if(function_exists("acf_add_local_field_group"))
{
	acf_add_local_field_group(array (
		'key' => 'group_fieldgroup_fG98c698TJ5914z',
		'title' => 'Page Builder',
		'fields' => array (
			//insert fields here
			// tabtrigger acf_reg_
			
			
			/*********************************/
			/*********************************/
			/* Content Blocks */
			/*********************************/
			/*********************************/
			array (
				// Generic Field Settings
				'key' => 'field_tab_pM91l538QL9742r',
				'label' => 'Content Blocks',
				'name' => 'content_blocks_tab',
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
				'key' => 'field_flexiblecontent_pE90n667AT9402l',
				'label' => 'Content Blocks',
				'name' => 'page_builder_content_blocks',
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
					/* On-Page Navigation */
					/*********************************/
					/*********************************/
					'field_layout_bG14t259JN5634r' => array (
						// Generic Field Settings
						'key' => 'field_layout_bG14t259JN5634r',
						'label' => 'On-Page Navigation',
						'name' => 'pb_on_page_navigation',
						'display' => 'block', // table / block / row
						'sub_fields' => array (
							// add subfields here
							array (
								// Generic Field Settings
								'key' => 'field_repeater_rC62p724AY1805l',
								'label' => 'Navigation Items',
								'name' => 'pb_on_page_navigation__navigation_items',
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
										'key' => 'field_text_gR56y548WJ8489z',
										'label' => 'Label',
										'name' => 'pb_on_page_navigation__navigation_item_label',
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
										'key' => 'field_text_kA67g442AG3182y',
										'label' => 'Destination ID',
										'name' => 'pb_on_page_navigation__navigation_item_dest',
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
						),
						'min' => '0',
						'max' => '1',
					),
					
					
					
					/*********************************/
					/*********************************/
					/* Text Block */
					/*********************************/
					/*********************************/
					'field_layout_fT92p436RU2755g' => array (
						// Generic Field Settings
						'key' => 'field_layout_fT92p436RU2755g',
						'label' => 'Text Block',
						'name' => 'pb_text_block',
						'display' => 'block', // table / block / row
						'sub_fields' => array (
							// add subfields here
							array (
								// Generic Field Settings
								'key' => 'field_text_kO51q874PE4778c',
								'label' => 'Admin Label',
								'name' => 'pb_text_block_admin_label',
								'type' => 'text',
								'instructions' => 'This field can be used to apply descriptive labels to this content block, for better admin management.',
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
								'key' => 'field_text_bR90p983SO4736v',
								'label' => 'Section ID',
								'name' => 'pb_text_block_section_id',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '25%',
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
								'key' => 'field_colorpicker_lR81e650ZT7131p',
								'label' => 'Section Background Colour',
								'name' => 'pb_text_block_section_background_colour',
								'type' => 'color_picker',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '25%',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'rgb(255,255,255)',
								
								//Field Type Specific Settings
								// 0,string for hex (eg '#fffaaa')
								// 1,string for rgba string (eg 'rgba(0,0,0,1)')
								// 1,array for rgba value only (eg '0,0,0,1')
								'enable_opacity' => 1,
								'return_format' => 'string',
							),
							array (
								// Generic Field Settings
								'key' => 'field_select_lG14c529ZF7897j',
								'label' => 'Content Colour',
								'name' => 'pb_text_block_content_colour',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '25%',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'dark',
								
								//Field Type Specific Settings
								'choices' => array (
									'dark' => 'Dark',
									'light' => 'Light',
									'black' => 'Black',
									'white' => 'White',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							array (
								// Generic Field Settings
								'key' => 'field_select_zO55u538IT2814s',
								'label' => 'Section Padding',
								'name' => 'pb_text_block_section_padding',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '25%',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'pad',
								
								//Field Type Specific Settings
								'choices' => array(
									'pad' => 'Top & Bottom',
									'pad-bottom' => 'Bottom',
									'pad-top' => 'Top',
									'pad-none' => 'No Padding',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							array (
								// Generic Field Settings
								'key' => 'field_truefalse_gB56e195YE7715i',
								'label' => 'Display 2nd Column?',
								'name' => 'pb_text_block_display_2nd_column',
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
								'key' => 'field_text_xM96s755KI3569n',
								'label' => 'Content Heading',
								'name' => 'pb_text_block_content_heading',
								'type' => 'text',
								'instructions' => 'Optional! This heading will span the full width of the content block - useful for column alignment when using a 2-column layout.<br><strong><em>If enabled, this heading will take the same content alignment settings as Column 1.</em></strong>',
								'required' => 0,
								'conditional_logic' => array (
									'field' => 'field_truefalse_gB56e195YE7715i',
									'operator' => '==',
									'value' => '1',
								),
								'wrapper' => array (
									'width' => '60%',
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
								'key' => 'field_truefalse_oD62f786WC5092y',
								'label' => 'Fancy Content Heading?',
								'name' => 'pb_text_block_content_heading_fancy_heading',
								'type' => 'true_false',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => array (
									'field' => 'field_truefalse_gB56e195YE7715i',
									'operator' => '==',
									'value' => '1',
								),
								'wrapper' => array (
									'width' => '20%',
									'class' => '',
									'id' => '',
								),
								'default_value' => '1',
								
								//Field Type Specific Settings
								'message' => 0,
							),
							array (
								// Generic Field Settings
								'key' => 'field_truefalse_oU98h514PI7563r',
								'label' => 'Content Heading Underline?',
								'name' => 'pb_text_block_content_heading_heading_underline',
								'type' => 'true_false',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => array (
									'field' => 'field_truefalse_gB56e195YE7715i',
									'operator' => '==',
									'value' => '1',
								),
								'wrapper' => array (
									'width' => '20%',
									'class' => '',
									'id' => '',
								),
								'default_value' => '1',
								
								//Field Type Specific Settings
								'message' => 0,
							),
							array (
								// Generic Field Settings
								'key' => 'field_select_eR19e957EW7117j',
								'label' => 'Column 1 Content Alignment (Mobile)',
								'name' => 'pb_text_block_column_1_content_alignment_mobile',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '25%',
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
								'key' => 'field_select_gQ52g634FK8265x',
								'label' => 'Column 1 Content Alignment (Desktop)',
								'name' => 'pb_text_block_column_1_content_alignment_desktop',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '25%',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'start',
								
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
								'key' => 'field_select_wC52v245LM3304v',
								'label' => 'Column 2 Content Alignment (Mobile)',
								'name' => 'pb_text_block_column_2_content_alignment_mobile',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => array (
									'field' => 'field_truefalse_gB56e195YE7715i',
									'operator' => '==',
									'value' => '1',
								),
								'wrapper' => array (
									'width' => '25%',
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
								'key' => 'field_select_oM97p958NO8946h',
								'label' => 'Column 2 Content Alignment (Desktop)',
								'name' => 'pb_text_block_column_2_content_alignment_desktop',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => array (
									'field' => 'field_truefalse_gB56e195YE7715i',
									'operator' => '==',
									'value' => '1',
								),
								'wrapper' => array (
									'width' => '25%',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'start',
								
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
								'key' => 'field_message_kQ24u253JD9236i',
								'label' => '',
								'name' => 'pb_text_block_message',
								'type' => 'message',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => array (
									'field' => 'field_truefalse_gB56e195YE7715i',
									'operator' => '!=',
									'value' => '1',
								),
								'wrapper' => array (
									'width' => '',
									'class' => '',
									'id' => '',
								),
								
								//Field Type Specific Settings
								
								'message' => '',
								
								'new_lines' => 'wpautop',
									// 'wpautop' = automatically add paragraphs
									// 'br' = automatically add <br>
									// '' = no formatting
									
								'esc_html' => 0,
							),
							array (
								// Generic Field Settings
								'key' => 'field_wysiwyg_bY27g916IS4565m',
								'label' => 'Column 1 Content',
								'name' => 'pb_text_block_column_1_content',
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
								'key' => 'field_wysiwyg_tU27r653QK5313j',
								'label' => 'Column 2 Content',
								'name' => 'pb_text_block_column_2_content',
								'type' => 'wysiwyg',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => array (
									'field' => 'field_truefalse_gB56e195YE7715i',
									'operator' => '==',
									'value' => '1',
								),
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
						),
						'min' => '0',
						'max' => '0',
					),
					
					
					/*********************************/
					/*********************************/
					/* Text Block with Image */
					/*********************************/
					/*********************************/
					'decking_features_section' => array(
						'key' => 'layout_decking_features_section',
						'name' => 'decking_features_section',
						'label' => 'Decking Features Section',
						'display' => 'block',
						'sub_fields' => array(
							array(
								'key' => 'field_decking_features_section_id',
								'label' => 'Section ID',
								'name' => 'section_id',
								'type' => 'text',
								'instructions' => 'Optional ID attribute for anchor links.',
								'required' => 0,
							),
							array (
								// Generic Field Settings
								'key' => 'field_decking_features_section_padding',
								'label' => 'Section Padding',
								'name' => 'pb_dual_image_block_section_padding',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '33.3%',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'pad',
								
								//Field Type Specific Settings
								'choices' => array(
									'pad' => 'Top & Bottom',
									'pad-bottom' => 'Bottom',
									'pad-top' => 'Top',
									'pad-none' => 'No Padding',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							// BACKGROUND COLOUR FIELD
							array(
								'key' => 'field_decking_features_section_background_color',
								'label' => 'Section Background Colour',
								'name' => 'section_background_colour',
								'type' => 'color_picker',
								'instructions' => '',
								'required' => 0,
							),
						),
					),
					'companies_section' => array(
						'key' => 'layout_companies_section',
						'name' => 'companies_section',
						'label' => 'Companies Section',
						'display' => 'block',
						'sub_fields' => array(
							array(
								'key' => 'field_companies_section_id',
								'label' => 'Section ID',
								'name' => 'section_id',
								'type' => 'text',
								'instructions' => 'Optional ID attribute for anchor links.',
								'required' => 0,
							),
							array (
								// Generic Field Settings
								'key' => 'field_companies_section_padding',
								'label' => 'Section Padding',
								'name' => 'pb_dual_image_block_section_padding',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '33.3%',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'pad',
								
								//Field Type Specific Settings
								'choices' => array(
									'pad' => 'Top & Bottom',
									'pad-bottom' => 'Bottom',
									'pad-top' => 'Top',
									'pad-none' => 'No Padding',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							// BACKGROUND COLOUR FIELD
							array(
								'key' => 'field_companies_section_background_color',
								'label' => 'Section Background Colour',
								'name' => 'section_background_colour',
								'type' => 'color_picker',
								'instructions' => '',
								'required' => 0,
							),
						),
					),
					'newsletter_section' => array(
						'key' => 'layout_newsletter_section',
						'name' => 'newsletter_section',
						'label' => 'Newsletter Section',
						'display' => 'block',
						'sub_fields' => array(
							array(
								'key' => 'field_newsletter_section_id',
								'label' => 'Section ID',
								'name' => 'section_id',
								'type' => 'text',
								'instructions' => 'Optional ID attribute for anchor links.',
								'required' => 0,
							),
							array (
								// Generic Field Settings
								'key' => 'field_newsletter_section_padding',
								'label' => 'Section Padding',
								'name' => 'pb_dual_image_block_section_padding',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '33.3%',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'pad',
								
								//Field Type Specific Settings
								'choices' => array(
									'pad' => 'Top & Bottom',
									'pad-bottom' => 'Bottom',
									'pad-top' => 'Top',
									'pad-none' => 'No Padding',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							// BACKGROUND COLOUR FIELD
							array(
								'key' => 'field_newsletter_section_background_color',
								'label' => 'Section Background Colour',
								'name' => 'section_background_colour',
								'type' => 'color_picker',
								'instructions' => '',
								'required' => 0,
							),
						),
					),
					'why_engineers_architects_choose_neaco_section' => array(
						'key' => 'layout_why_engineers_architects_choose_neaco_section',
						'name' => 'why_engineers_architects_choose_neaco_section',
						'label' => 'Why Engineers Architects Choose Neaco Section',
						'display' => 'block',
						'sub_fields' => array(
							array(
								'key' => 'field_why_engineers_architects_choose_neaco_section_id',
								'label' => 'Section ID',
								'name' => 'section_id',
								'type' => 'text',
								'instructions' => 'Optional ID attribute for anchor links.',
								'required' => 0,
							),
							array (
								// Generic Field Settings
								'key' => 'field_why_engineers_architects_choose_neaco_section_padding',
								'label' => 'Section Padding',
								'name' => 'pb_dual_image_block_section_padding',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '33.3%',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'pad',
								
								//Field Type Specific Settings
								'choices' => array(
									'pad' => 'Top & Bottom',
									'pad-bottom' => 'Bottom',
									'pad-top' => 'Top',
									'pad-none' => 'No Padding',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							// BACKGROUND COLOUR FIELD
							array(
								'key' => 'field_why_engineers_architects_choose_neaco_section_background_color',
								'label' => 'Section Background Colour',
								'name' => 'section_background_colour',
								'type' => 'color_picker',
								'instructions' => '',
								'required' => 0,
							),
						),
					),
					'why_choose_neaco_section' => array(
						'key' => 'layout_why_choose_neaco_section',
						'name' => 'why_choose_neaco_section',
						'label' => 'Why Choose Neaco Section',
						'display' => 'block',
						'sub_fields' => array(
							array(
								'key' => 'field_why_choose_neaco_section_id',
								'label' => 'Section ID',
								'name' => 'section_id',
								'type' => 'text',
								'instructions' => 'Optional ID attribute for anchor links.',
								'required' => 0,
							),
							array (
								// Generic Field Settings
								'key' => 'field_why_choose_neaco_section_padding',
								'label' => 'Section Padding',
								'name' => 'pb_dual_image_block_section_padding',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '33.3%',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'pad',
								
								//Field Type Specific Settings
								'choices' => array(
									'pad' => 'Top & Bottom',
									'pad-bottom' => 'Bottom',
									'pad-top' => 'Top',
									'pad-none' => 'No Padding',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							// BACKGROUND COLOUR FIELD
							array(
								'key' => 'field_why_choose_neaco_section_background_color',
								'label' => 'Section Background Colour',
								'name' => 'section_background_colour',
								'type' => 'color_picker',
								'instructions' => '',
								'required' => 0,
							),
						),
					),
					'about_neacos_product_offerings_section' => array(
						'key' => 'layout_about_neacos_product_offerings_section',
						'name' => 'about_neacos_product_offerings_section',
						'label' => 'About Neacos Product Offerings Section',
						'display' => 'block',
						'sub_fields' => array(

							// SECTION ID FIELD
							array(
								'key' => 'field_about_offerings_section_id',
								'label' => 'Section ID',
								'name' => 'section_id',
								'type' => 'text',
								'instructions' => 'Optional ID attribute for anchor links.',
								'required' => 0,
							),
							array (
								// Generic Field Settings
								'key' => 'field_about_neacos_offerings_padding',
								'label' => 'Section Padding',
								'name' => 'pb_dual_image_block_section_padding',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '33.3%',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'pad',
								
								//Field Type Specific Settings
								'choices' => array(
									'pad' => 'Top & Bottom',
									'pad-bottom' => 'Bottom',
									'pad-top' => 'Top',
									'pad-none' => 'No Padding',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							// BACKGROUND COLOUR FIELD
							array(
								'key' => 'field_about_offerings_background_color',
								'label' => 'Section Background Colour',
								'name' => 'section_background_colour',
								'type' => 'color_picker',
								'instructions' => '',
								'required' => 0,
							),
							// CONTENT FIELD (WYSIWYG)
							array(
								'key' => 'field_about_offerings_content',
								'label' => 'Content',
								'name' => 'content',
								'type' => 'wysiwyg',
								'instructions' => 'Enter the content for this block.',
								'required' => 0,
								'tabs' => 'all',
								'toolbar' => 'full',
								'media_upload' => 1,
							),

						),
					),
					
					'get_in_touch_section' => array(
						'key' => 'layout_get_in_touch_section',
						'name' => 'get_in_touch_section',
						'label' => 'Get In Touch Section',
						'display' => 'block',
						'sub_fields' => array(

							// SECTION ID FIELD
							array(
								'key' => 'field_get_in_touch_section_id',
								'label' => 'Section ID',
								'name' => 'section_id',
								'type' => 'text',
								'instructions' => 'Optional ID attribute for anchor links.',
								'required' => 0,
							),
							array (
								// Generic Field Settings
								'key' => 'field_get_in_touch_section_padding',
								'label' => 'Section Padding',
								'name' => 'pb_dual_image_block_section_padding',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '33.3%',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'pad',
								
								//Field Type Specific Settings
								'choices' => array(
									'pad' => 'Top & Bottom',
									'pad-bottom' => 'Bottom',
									'pad-top' => 'Top',
									'pad-none' => 'No Padding',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							// BACKGROUND COLOUR FIELD
							array(
								'key' => 'field_get_in_touch_section_background_color',
								'label' => 'Section Background Colour',
								'name' => 'section_background_colour',
								'type' => 'color_picker',
								'instructions' => '',
								'required' => 0,
							),
						),
					),
					
					'factory_boxes_section' => array(
						'key' => 'layout_factory_boxes_section',
						'name' => 'factory_boxes_section',
						'label' => 'Factory Boxes Section',
						'display' => 'block',
						'sub_fields' => array(

							// SECTION ID FIELD
							array(
								'key' => 'field_factory_boxes_section_id',
								'label' => 'Section ID',
								'name' => 'section_id',
								'type' => 'text',
								'instructions' => 'Optional ID attribute for anchor links.',
								'required' => 0,
							),
							array (
								// Generic Field Settings
								'key' => 'field_factory_boxes_section_padding',
								'label' => 'Section Padding',
								'name' => 'pb_dual_image_block_section_padding',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '33.3%',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'pad',
								
								//Field Type Specific Settings
								'choices' => array(
									'pad' => 'Top & Bottom',
									'pad-bottom' => 'Bottom',
									'pad-top' => 'Top',
									'pad-none' => 'No Padding',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							// BACKGROUND COLOUR FIELD
							array(
								'key' => 'field_factory_boxes_section_background_color',
								'label' => 'Section Background Colour',
								'name' => 'section_background_colour',
								'type' => 'color_picker',
								'instructions' => '',
								'required' => 0,
							),
						),
					),

					'field_layout_lS19e329PH8070y' => array (
						// Generic Field Settings
						'key' => 'field_layout_lS19e329PH8070y',
						'label' => 'Text Block with Image',
						'name' => 'pb_text_block_image',
						'display' => 'block', // table / block / row
						'sub_fields' => array (
							// add subfields here
							array (
								// Generic Field Settings
								'key' => 'field_text_fJ96h928HW6082v',
								'label' => 'Admin Label',
								'name' => 'pb_text_block_image_admin_label',
								'type' => 'text',
								'instructions' => 'This field can be used to apply descriptive labels to this content block, for better admin management.',
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
								'key' => 'field_text_fH12z346UC2620g',
								'label' => 'Section ID',
								'name' => 'pb_text_block_image_section_id',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '25%',
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
								'key' => 'field_colorpicker_eL97b376JT8504y',
								'label' => 'Section Background Colour',
								'name' => 'pb_text_block_image_section_background_colour',
								'type' => 'color_picker',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '25%',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'rgb(255,255,255)',
								
								//Field Type Specific Settings
								// 0,string for hex (eg '#fffaaa')
								// 1,string for rgba string (eg 'rgba(0,0,0,1)')
								// 1,array for rgba value only (eg '0,0,0,1')
								'enable_opacity' => 1,
								'return_format' => 'string',
							),
							array (
								// Generic Field Settings
								'key' => 'field_select_pP49y933UY6104r',
								'label' => 'Content Colour',
								'name' => 'pb_text_block_image_content_colour',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '25%',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'dark',
								
								//Field Type Specific Settings
								'choices' => array (
									'dark' => 'Dark',
									'light' => 'Light',
									'black' => 'Black',
									'white' => 'White',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							array (
								// Generic Field Settings
								'key' => 'field_select_wK49g399AD4608u',
								'label' => 'Alignment',
								'name' => 'pb_text_block_image_alignment',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '25%',
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
								'key' => 'field_wysiwyg_xW80x962QZ8673e',
								'label' => 'Content',
								'name' => 'pb_text_block_image_content',
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
								'key' => 'field_image_oJ24k519DY8599h',
								'label' => 'Image',
								'name' => 'pb_text_block_image_image',
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
								'key' => 'field_repeater_fU39y578XB5107w',
								'label' => 'Buttons',
								'name' => 'pb_text_block_image_buttons',
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
										'key' => 'field_text_mY76r826ZP7477j',
										'label' => 'Button Label',
										'name' => 'pb_text_block_image_button_text',
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
										'key' => 'field_text_sV89s872IC7321l',
										'label' => 'Button Destination',
										'name' => 'pb_text_block_image_button_destination',
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
					/* Dual Image Block */
					/*********************************/
					/*********************************/
					'field_layout_xH63e585FP7701t' => array (
						// Generic Field Settings
						'key' => 'field_layout_xH63e585FP7701t',
						'label' => 'Dual Image Block',
						'name' => 'pb_dual_image_block',
						'display' => 'block', // table / block / row
						'sub_fields' => array (
							// add subfields here
							array (
								// Generic Field Settings
								'key' => 'field_text_vM23a104DJ7166z',
								'label' => 'Admin Label',
								'name' => 'pb_dual_image_block_admin_label',
								'type' => 'text',
								'instructions' => 'This field can be used to apply descriptive labels to this content block, for better admin management.',
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
								'key' => 'field_text_fW53u379UO1817t',
								'label' => 'Section ID',
								'name' => 'pb_dual_image_block_section_id',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '33.3%',
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
								'key' => 'field_colorpicker_pK96w962DG5322l',
								'label' => 'Section Background Colour',
								'name' => 'pb_dual_image_block_section_background_colour',
								'type' => 'color_picker',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '33.3%',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'rgb(255,255,255)',
								
								//Field Type Specific Settings
								// 0,string for hex (eg '#fffaaa')
								// 1,string for rgba string (eg 'rgba(0,0,0,1)')
								// 1,array for rgba value only (eg '0,0,0,1')
								'enable_opacity' => 1,
								'return_format' => 'string',
							),
							array (
								// Generic Field Settings
								'key' => 'field_select_rT88c569FF4662i',
								'label' => 'Section Padding',
								'name' => 'pb_dual_image_block_section_padding',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '33.3%',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'pad',
								
								//Field Type Specific Settings
								'choices' => array(
									'pad' => 'Top & Bottom',
									'pad-bottom' => 'Bottom',
									'pad-top' => 'Top',
									'pad-none' => 'No Padding',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							array (
								// Generic Field Settings
								'key' => 'field_image_iP44a302EO5991b',
								'label' => 'Image 1',
								'name' => 'pb_dual_image_block_image_1',
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
								'key' => 'field_image_iO83v682AE3654p',
								'label' => 'Image 2',
								'name' => 'pb_dual_image_block_image_2',
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
						'min' => '0',
						'max' => '0',
					),
					
					
					/*********************************/
					/*********************************/
					/* Video Embed */
					/*********************************/
					/*********************************/
					'field_layout_aN35k253CJ8958p' => array (
						// Generic Field Settings
						'key' => 'field_layout_aN35k253CJ8958p',
						'label' => 'Video Embed',
						'name' => 'pb_video_embed',
						'display' => 'block', // table / block / row
						'sub_fields' => array (
							// add subfields here
							array (
								// Generic Field Settings
								'key' => 'field_text_vQ92f734CB1733x',
								'label' => 'Admin Label',
								'name' => 'pb_video_embed_admin_label',
								'type' => 'text',
								'instructions' => 'This field can be used to apply descriptive labels to this content block, for better admin management.',
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
								'key' => 'field_text_fJ52k994SA8450l',
								'label' => 'Section ID',
								'name' => 'pb_video_embed_section_id',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '25%',
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
								'key' => 'field_colorpicker_yK63c968KH6616l',
								'label' => 'Section Background Colour',
								'name' => 'pb_video_embed_section_background_colour',
								'type' => 'color_picker',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '25%',
									'class' => '',
									'id' => '',
								),
								'default_value' => '#eff2f5',
								
								//Field Type Specific Settings
								// 0,string for hex (eg '#fffaaa')
								// 1,string for rgba string (eg 'rgba(0,0,0,1)')
								// 1,array for rgba value only (eg '0,0,0,1')
								'enable_opacity' => 0,
								'return_format' => 'string',
							),
							array (
								// Generic Field Settings
								'key' => 'field_select_mX77q645IB9606d',
								'label' => 'Content Colour',
								'name' => 'pb_video_embed_content_colour',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '25%',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'dark',
								
								//Field Type Specific Settings
								'choices' => array (
									'dark' => 'Dark',
									'light' => 'Light',
									'black' => 'Black',
									'white' => 'White',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							array (
								// Generic Field Settings
								'key' => 'field_select_hU95e963LQ4278f',
								'label' => 'Section Padding',
								'name' => 'pb_video_embed_section_padding',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '25%',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'pad',
								
								//Field Type Specific Settings
								'choices' => array(
									'pad' => 'Top & Bottom',
									'pad-bottom' => 'Bottom',
									'pad-top' => 'Top',
									'pad-none' => 'No Padding',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							array (
								// Generic Field Settings
								'key' => 'field_wysiwyg_cE99t303EE8580o',
								'label' => 'Intro Text',
								'name' => 'pb_video_embed_intro_text',
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
								'key' => 'field_select_bO69c518TZ2260n',
								'label' => 'Embed Source',
								'name' => 'pb_video_embed_embed_source',
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
									'youtube' => 'YouTube',
									'vimeo' => 'Vimeo',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							array (
								// Generic Field Settings
								'key' => 'field_text_gN47c603PL1788i',
								'label' => 'Video ID',
								'name' => 'pb_video_embed_video_id',
								'type' => 'text',
								'instructions' => 'Unique ID string that can be taken directly from the URL of the video page.',
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
						'min' => '0',
						'max' => '0',
					),
					
					
					/*********************************/
					/*********************************/
					/* Featured Content */
					/*********************************/
					/*********************************/
					'field_layout_gB83n175XF2710l' => array (
						// Generic Field Settings
						'key' => 'field_layout_gB83n175XF2710l',
						'label' => 'Featured Content',
						'name' => 'pb_featured_content',
						'display' => 'block', // table / block / row
						'sub_fields' => array (
							// add subfields here
							array (
								// Generic Field Settings
								'key' => 'field_text_cV83f568TJ6649x',
								'label' => 'Admin Label',
								'name' => 'pb_featured_content_admin_label',
								'type' => 'text',
								'instructions' => 'This field can be used to apply descriptive labels to this content block, for better admin management.',
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
								'key' => 'field_text_oH85r999NX5628a',
								'label' => 'Section ID',
								'name' => 'pb_featured_content_section_id',
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
								'key' => 'field_select_qV94g240PZ9035p',
								'label' => 'Background Type',
								'name' => 'pb_featured_content_background_type',
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
									'image' => 'Background Image',
									'video' => 'Background Video',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							array (
								// Generic Field Settings
								'key' => 'field_image_sR23n115AJ3980h',
								'label' => 'Image',
								'name' => 'pb_featured_content_image',
								'type' => 'image',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => array (
									'field' => 'field_select_qV94g240PZ9035p',
									'operator' => '==',
									'value' => 'image',
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
								'key' => 'field_file_pS62o667RE4933t',
								'label' => 'Background Video (WEBM)',
								'name' => 'pb_featured_content_background_video_webm',
								'type' => 'file',
								'instructions' => '.webm filetype only please!',
								'required' => 0,
								'conditional_logic' => array (
									'field' => 'field_select_qV94g240PZ9035p',
									'operator' => '==',
									'value' => 'video',
								),
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
								'mime_types' => 'webm',
							),
							array (
								// Generic Field Settings
								'key' => 'field_file_wU85h796RE5884q',
								'label' => 'Background Video (MP4)',
								'name' => 'pb_featured_content_background_video_mp4',
								'type' => 'file',
								'instructions' => '.mp4 filetype only please!',
								'required' => 0,
								'conditional_logic' => array (
									'field' => 'field_select_qV94g240PZ9035p',
									'operator' => '==',
									'value' => 'video',
								),
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
								'mime_types' => 'mp4',
							),
							array (
								// Generic Field Settings
								'key' => 'field_select_cV25d479MS9974s',
								'label' => 'Overlay/Background Setting',
								'name' => 'pb_featured_content_overlay_background_setting',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '50%',
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
								'key' => 'field_select_xR83y248LF5557n',
								'label' => 'Content Padding',
								'name' => 'pb_featured_content_content_padding',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '50%',
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
									'xxl' => 'XXL Padding',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							array (
								// Generic Field Settings
								'key' => 'field_select_iM49j959UL9501t',
								'label' => 'Content Alignment (Mobile)',
								'name' => 'pb_featured_content_content_alignment_mobile',
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
								'key' => 'field_select_jB40y792SO8151w',
								'label' => 'Content Alignment (Desktop)',
								'name' => 'pb_featured_content_content_alignment_desktop',
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
								'key' => 'field_wysiwyg_uY84a202YW7587l',
								'label' => 'Content',
								'name' => 'pb_featured_content_content',
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
								'key' => 'field_repeater_vN62w563PB5028k',
								'label' => 'Buttons',
								'name' => 'pb_featured_content_buttons',
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
										'key' => 'field_text_aU76h690PH7534j',
										'label' => 'Button Text',
										'name' => 'pb_featured_content_button_text',
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
										'key' => 'field_text_sG99j956FY4086o',
										'label' => 'Button Destination',
										'name' => 'pb_featured_content_button_destination',
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
										'key' => 'field_select_hN93v868NP3829f',
										'label' => 'Button Colour',
										'name' => 'pb_featured_content_button_colour',
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
						),
						'min' => '0',
						'max' => '0',
					),
					
					
					/*********************************/
					/*********************************/
					/* Featured Content (Slider with Intro) */
					/*********************************/
					/*********************************/
					'field_layout_bT15e297XI1092n' => array (
						// Generic Field Settings
						'key' => 'field_layout_bT15e297XI1092n',
						'label' => 'Featured Content (Slider with Intro)',
						'name' => 'pb_featured_content_slider',
						'display' => 'block', // table / block / row
						'sub_fields' => array (
							// add subfields here
							array (
								// Generic Field Settings
								'key' => 'field_text_aW77m842SY3718x',
								'label' => 'Admin Label',
								'name' => 'pb_featured_content_slider__admin_label',
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
								'key' => 'field_text_wY21p846EI7468r',
								'label' => 'Section ID',
								'name' => 'pb_featured_content_slider__section_id',
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
								'key' => 'field_wysiwyg_xZ83d494KY6171h',
								'label' => 'Introduction',
								'name' => 'pb_featured_content_slider__introduction',
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
								'key' => 'field_repeater_xP43m542II2037h',
								'label' => 'Buttons',
								'name' => 'pb_featured_content_slider__buttons_rp',
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
										'key' => 'field_text_pG96j109OT7026e',
										'label' => 'Button Label',
										'name' => 'pb_featured_content_slider__buttons_rp__button_label',
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
										'key' => 'field_text_sM17i239GC8039s',
										'label' => 'Button Destination',
										'name' => 'pb_featured_content_slider__buttons_rp__button_destination',
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
								'key' => 'field_repeater_nK38j229OG4875s',
								'label' => 'Slides',
								'name' => 'pb_featured_content_slider__slides_rp',
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
										'key' => 'field_image_tW64j849NW1075f',
										'label' => 'Background Image',
										'name' => 'pb_featured_content_slider__slides_rp__image',
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
										'key' => 'field_wysiwyg_nE53v321ZZ4288w',
										'label' => 'Service',
										'name' => 'pb_featured_content_slider__slides_rp__service',
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
										'key' => 'field_repeater_rD79w466IV6136n',
										'label' => 'Slide Buttons',
										'name' => 'pb_featured_content_slider__slides_rp__btns_rp',
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
												'key' => 'field_text_qX56t446AX5241m',
												'label' => 'Button Label',
												'name' => 'pb_featured_content_slider__slides_rp__btns_rp__btn_label',
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
												'key' => 'field_text_oL56m538MR3034u',
												'label' => 'Button Destination',
												'name' => 'pb_featured_content_slider__slides_rp__btns_rp__btn_destination',
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
							),
						),
						'min' => '0',
						'max' => '0',
					),
					
					
					/*********************************/
					/*********************************/
					/* Options Showcase */
					/*********************************/
					/*********************************/
					'field_layout_rH12u314QZ9179w' => array (
						// Generic Field Settings
						'key' => 'field_layout_rH12u314QZ9179w',
						'label' => 'Options Showcase',
						'name' => 'pb_options_showcase',
						'display' => 'block', // table / block / row
						'sub_fields' => array (
							// add subfields here
							array (
								// Generic Field Settings
								'key' => 'field_layout_rH12u314QZ9179w',
								'label' => 'Options Showcase',
								'name' => 'pb_options_showcase',
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
								'key' => 'field_text_nE34j352JV1579h',
								'label' => 'Section ID',
								'name' => 'pb_options_showcase__section_id',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'options-showcase',
								
								//Field Type Specific Settings
								'placeholder' => 'options-showcase',
								'prepend' => '',
								'append' => '',
								'maxlength' => '',
								'readonly' => 0,
								'disabled' => 0,
							),
							array (
								// Generic Field Settings
								'key' => 'field_wysiwyg_tX62e222UB1199z',
								'label' => 'Introduction',
								'name' => 'pb_options_showcase__introduction',
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
								'key' => 'field_repeater_xM46h115FQ6526r',
								'label' => 'Products',
								'name' => 'pb_options_showcase__products_rp',
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
										'key' => 'field_image_kR92n615LF1063j',
										'label' => 'Product Image',
										'name' => 'pb_options_showcase__products_rp__product_image',
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
										'key' => 'field_text_fH61l498OW8773n',
										'label' => 'Product Name',
										'name' => 'pb_options_showcase__products_rp__product_name',
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
										'key' => 'field_wysiwyg_qW63v187KI8944d',
										'label' => 'Product Description',
										'name' => 'pb_options_showcase__products_rp__product_description',
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
										'key' => 'field_text_tN40w657OT9118r',
										'label' => 'Item Link',
										'name' => 'pb_options_showcase__products_rp__item_link',
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
					/* Info Slider */
					/*********************************/
					/*********************************/
					'field_layout_mC83v234TK7511w' => array (
						// Generic Field Settings
						'key' => 'field_layout_mC83v234TK7511w',
						'label' => 'Info Slider',
						'name' => 'pb_info_slider',
						'display' => 'block', // table / block / row
						'sub_fields' => array (
							// add subfields here
							array (
								// Generic Field Settings
								'key' => 'field_text_xC46i261VF1930e',
								'label' => 'Admin Label',
								'name' => 'pb_info_slider_admin_label',
								'type' => 'text',
								'instructions' => 'This field can be used to apply descriptive labels to this content block, for better admin management.',
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
								'key' => 'field_text_xB38l786ZB8767z',
								'label' => 'Section ID',
								'name' => 'pb_info_slider_section_id',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '33%',
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
								'key' => 'field_colorpicker_vI68n170OB1716d',
								'label' => 'Section Background Colour',
								'name' => 'pb_info_slider_section_background_colour',
								'type' => 'color_picker',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '33%',
									'class' => '',
									'id' => '',
								),
								'default_value' => '#EFF2F5',
								
								//Field Type Specific Settings
								// 0,string for hex (eg '#fffaaa')
								// 1,string for rgba string (eg 'rgba(0,0,0,1)')
								// 1,array for rgba value only (eg '0,0,0,1')
								'enable_opacity' => 0,
								'return_format' => 'string',
							),
							array (
								// Generic Field Settings
								'key' => 'field_select_cO10z992XH6551s',
								'label' => 'Content Colour',
								'name' => 'pb_info_slider_content_colour',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '33%',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								
								//Field Type Specific Settings
								'choices' => array (
									'dark' => 'Dark',
									'light' => 'Light',
									'black' => 'Black',
									'white' => 'White',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							array (
								// Generic Field Settings
								'key' => 'field_wysiwyg_rD24q899FU2137k',
								'label' => 'Introduction Content',
								'name' => 'pb_info_slider_introduction_content',
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
								'key' => 'field_repeater_jL88w166WK8450x',
								'label' => 'Slides',
								'name' => 'pb_info_slider_slides',
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
								'layout' => 'block', //table/block/row
								'button_label' => 'Add Slide',
								'sub_fields' => array (
									// add repeater fields here
									array (
										// Generic Field Settings
										'key' => 'field_image_kP24q445NZ6382e',
										'label' => 'Slide Image',
										'name' => 'pb_info_slider_slide_image',
										'type' => 'image',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '15%',
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
										'key' => 'field_colorpicker_yT92i515CA7041b',
										'label' => 'Content Container Background',
										'name' => 'pb_info_slider_content_container_background',
										'type' => 'color_picker',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '15%',
											'class' => '',
											'id' => '',
										),
										'default_value' => 'rgb(0,0,0,0.55)',
										
										//Field Type Specific Settings
										// 0,string for hex (eg '#fffaaa')
										// 1,string for rgba string (eg 'rgba(0,0,0,1)')
										// 1,array for rgba value only (eg '0,0,0,1')
										'enable_opacity' => 1,
										'return_format' => 'string',
									),
									array (
										// Generic Field Settings
										'key' => 'field_select_wL62q528EH3119c',
										'label' => 'Slide Content Colour',
										'name' => 'pb_info_slider_slide_content_colour',
										'type' => 'select',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '15%',
											'class' => '',
											'id' => '',
										),
										'default_value' => 'white',
										
										//Field Type Specific Settings
										'choices' => array (
											'dark' => 'Dark',
											'light' => 'Light',
											'black' => 'Black',
											'white' => 'White',
										),
										'allow_null' => 0,
										'multiple' => 0,
										'ui' => 0,
										'ajax' => 0,
										'placeholder' => '',
									),
									array (
										// Generic Field Settings
										'key' => 'field_select_rC45d216QN3844i',
										'label' => 'Slide Content',
										'name' => 'pb_info_slider_slide_content',
										'type' => 'wysiwyg',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '55%',
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
										'key' => 'field_truefalse_rY97e906AQ8894n',
										'label' => 'Add Button?',
										'name' => 'pb_info_slider_add_button',
										'type' => 'true_false',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '25%',
											'class' => '',
											'id' => '',
										),
										'default_value' => '',
										
										//Field Type Specific Settings
										'message' => 0,
									),
									array (
										// Generic Field Settings
										'key' => 'field_text_sM46x810QJ1005b',
										'label' => 'Button Text',
										'name' => 'pb_info_slider_button_text',
										'type' => 'text',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '25%',
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
										'key' => 'field_text_nC62p567PL7898t',
										'label' => 'Button Destination',
										'name' => 'pb_info_slider_button_destination',
										'type' => 'text',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '25%',
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
										'key' => 'field_select_mN40q249SP1045i',
										'label' => 'Button Colour',
										'name' => 'pb_info_slider_button_colour',
										'type' => 'select',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '25%',
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
							),
						),
						'min' => '0',
						'max' => '0',
					),
					
					
					/*********************************/
					/*********************************/
					/* Colour Range */
					/*********************************/
					/*********************************/
					'field_layout_wA50b942LK8020l' => array (
						// Generic Field Settings
						'key' => 'field_layout_wA50b942LK8020l',
						'label' => 'Colour Range',
						'name' => 'pb_color_range',
						'display' => 'block', // table / block / row
						'sub_fields' => array (
							// add subfields here
							array (
								// Generic Field Settings
								'key' => 'field_text_xN97c327ZB1302j',
								'label' => 'Admin Label',
								'name' => 'pb_color_range_admin_label',
								'type' => 'text',
								'instructions' => 'This field can be used to apply descriptive labels to this content block, for better admin management.',
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
								'key' => 'field_text_sT65g985RJ6813h',
								'label' => 'Section ID',
								'name' => 'pb_color_range_section_id',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '25%',
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
								'key' => 'field_colorpicker_eQ51o881DJ6585w',
								'label' => 'Section Background Colour',
								'name' => 'pb_color_range_section_background_colour',
								'type' => 'color_picker',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '25%',
									'class' => '',
									'id' => '',
								),
								'default_value' => '#EFF2F5',
								
								//Field Type Specific Settings
								// 0,string for hex (eg '#fffaaa')
								// 1,string for rgba string (eg 'rgba(0,0,0,1)')
								// 1,array for rgba value only (eg '0,0,0,1')
								'enable_opacity' => 0,
								'return_format' => 'string',
							),
							array (
								// Generic Field Settings
								'key' => 'field_select_wZ60a743FM9382j',
								'label' => 'Content Colour',
								'name' => 'pb_color_range_content_colour',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '25%',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								
								//Field Type Specific Settings
								'choices' => array (
									'dark' => 'Dark',
									'light' => 'Light',
									'black' => 'Black',
									'white' => 'White',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							array (
								// Generic Field Settings
								'key' => 'field_select_hN95r624VV2141q',
								'label' => 'Colour Range Set',
								'name' => 'pb_color_range_set',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '25%',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								
								//Field Type Specific Settings
								'choices' => array(
									'balustrade' => 'Handrail & Balustrade',
									'flooring' => 'Flooring',
									'freedom' => 'Freedom (Adaptive Bathing)',
									'alutec' => 'Alutec (Adaptive Bathing)',
									'custom' => 'Custom Range',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							array (
								// Generic Field Settings
								'key' => 'field_wysiwyg_wH67z185YD8450d',
								'label' => 'Introduction Content',
								'name' => 'pb_color_range_introduction_content',
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
							/*array (
								// Generic Field Settings
								'key' => 'field_select_eJ26e550UM7786b',
								'label' => 'Colour Range Label Placement',
								'name' => 'pb_colour_range_label_placement',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => array (
									'field' => 'field_select_hN95r624VV2141q',
									'operator' => '==',
									'value' => 'custom',
								),
								'wrapper' => array (
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'outside',
								
								//Field Type Specific Settings
								'choices' => array(
									'inside' => 'Inside',
									'outside' => 'Outside',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),*/
							array (
								// Generic Field Settings
								'key' => 'field_repeater_sZ44s354TD5197s',
								'label' => 'Colour Range',
								'name' => 'pb_color_range_colour_options',
								'type' => 'repeater',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => array (
									'field' => 'field_select_hN95r624VV2141q',
									'operator' => '==',
									'value' => 'custom',
								),
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
								'button_label' => 'Add Colour Option',
								'sub_fields' => array (
									// add repeater fields here
									/*array (
										// Generic Field Settings
										'key' => 'field_truefalse_hR84i464IR9444h',
										'label' => 'Use Image Instead?',
										'name' => 'pb_color_range_use_image_instead',
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
									),*/
									array (
										// Generic Field Settings
										'key' => 'field_colorpicker_vT44i571RM4562r',
										'label' => 'Colour',
										'name' => 'pb_color_option_colour',
										'type' => 'color_picker',
										'instructions' => '',
										'required' => 0,
										/*'conditional_logic' => array (
											'field' => 'field_truefalse_hR84i464IR9444h',
											'operator' => '!=',
											'value' => '1',
										),*/
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'default_value' => '',
										
										//Field Type Specific Settings
										// 0,string for hex (eg '#fffaaa')
										// 1,string for rgba string (eg 'rgba(0,0,0,1)')
										// 1,array for rgba value only (eg '0,0,0,1')
										'enable_opacity' => 0,
										'return_format' => 'string',
									),
									array (
										// Generic Field Settings
										'key' => 'field_image_nW33k504AD1004m',
										'label' => 'Image',
										'name' => 'pb_color_option_image',
										'type' => 'image',
										'instructions' => '',
										'required' => 0,
										/*'conditional_logic' => array (
											'field' => 'field_truefalse_hR84i464IR9444h',
											'operator' => '==',
											'value' => '1',
										),*/
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
										'key' => 'field_text_nJ12s721FY8547t',
										'label' => 'Colour Name',
										'name' => 'pb_color_option_colour_name',
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
										'key' => 'field_text_lV74c478TO3903j',
										'label' => 'RAL',
										'name' => 'pb_color_option_ral',
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
										'key' => 'field_select_xD50r395PA3131q',
										'label' => 'Text Colour',
										'name' => 'pb_color_option_text_colour',
										'type' => 'select',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => array (
											'field' => 'field_select_eJ26e550UM7786b',
											'operator' => '==',
											'value' => 'inside',
										),
										'wrapper' => array (
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'default_value' => '',
										
										//Field Type Specific Settings
										'choices' => array (
											'dark' => 'Dark',
											'light' => 'Light',
											'black' => 'Black',
											'white' => 'White',
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
					/* Featured Text */
					/*********************************/
					/*********************************/
					'field_layout_mK95y886UW4915m' => array (
						// Generic Field Settings
						'key' => 'field_layout_mK95y886UW4915m',
						'label' => 'Featured Text',
						'name' => 'pb_featured_text',
						'display' => 'block', // table / block / row
						'sub_fields' => array (
							// add subfields here
							array (
								// Generic Field Settings
								'key' => 'field_text_hP26m944JA5660z',
								'label' => 'Admin Label',
								'name' => 'pb_featured_text_admin_label',
								'type' => 'text',
								'instructions' => 'This field can be used to apply descriptive labels to this content block, for better admin management.',
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
								'key' => 'field_text_zI58o164DT6761p',
								'label' => 'Section ID',
								'name' => 'bp_featured_text_section_id',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '25%',
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
								'key' => 'field_colorpicker_dL20n510QQ9534r',
								'label' => 'Section Background Colour',
								'name' => 'pb_featured_text_section_background_colour',
								'type' => 'color_picker',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '25%',
									'class' => '',
									'id' => '',
								),
								'default_value' => '#EFF2F5',
								
								//Field Type Specific Settings
								// 0,string for hex (eg '#fffaaa')
								// 1,string for rgba string (eg 'rgba(0,0,0,1)')
								// 1,array for rgba value only (eg '0,0,0,1')
								'enable_opacity' => 0,
								'return_format' => 'string',
							),
							array (
								// Generic Field Settings
								'key' => 'field_select_dC44t737WV2198i',
								'label' => 'Content Colour',
								'name' => 'pb_featured_text_content_colour',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '25%',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								
								//Field Type Specific Settings
								'choices' => array (
									'dark' => 'Dark',
									'light' => 'Light',
									'black' => 'Black',
									'white' => 'White',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							array (
								// Generic Field Settings
								'key' => 'field_select_wX46x680BR2977f',
								'label' => 'Quote Mark Colour',
								'name' => 'pb_featured_text_quote_mark_colour',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '25%',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'green',
								
								//Field Type Specific Settings
								'choices' => array (
									'green' => 'Neaco Green',
									'dark' => 'Dark',
									'light' => 'Light',
									'black' => 'Black',
									'white' => 'White',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							array (
								// Generic Field Settings
								'key' => 'field_textarea_cZ19n510NJ3805g',
								'label' => 'Content',
								'name' => 'pb_featured_text_content',
								'type' => 'textarea',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '33%',
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
								'key' => 'field_text_iP45t584CM2569i',
								'label' => 'Name',
								'name' => 'pb_featured_text_name',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '33%',
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
								'key' => 'field_text_iK42v607ZN4424t',
								'label' => 'Company',
								'name' => 'pb_featured_text_company',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '33%',
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
						'min' => '0',
						'max' => '0',
					),
					
					
					/*********************************/
					/*********************************/
					/* Image Gallery */
					/*********************************/
					/*********************************/
					'field_layout_pH62a334EL8505h' => array (
						// Generic Field Settings
						'key' => 'field_layout_pH62a334EL8505h',
						'label' => 'Image Gallery',
						'name' => 'pb_image_gallery',
						'display' => 'block', // table / block / row
						'sub_fields' => array (
							// add subfields here
							array (
								// Generic Field Settings
								'key' => 'field_text_oW66n552FE1263m',
								'label' => 'Admin Label',
								'name' => 'pb_image_gallery_admin_label',
								'type' => 'text',
								'instructions' => 'This field can be used to apply descriptive labels to this content block, for better admin management.',
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
								'key' => 'field_text_iV26r168UU2341q',
								'label' => 'Section ID',
								'name' => 'pb_image_gallery_section_id',
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
								'key' => 'field_colorpicker_wK57l166LO8025i',
								'label' => 'Section Background Colour',
								'name' => 'pb_image_gallery_section_background_colour',
								'type' => 'color_picker',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '20%',
									'class' => '',
									'id' => '',
								),
								'default_value' => '#EFF2F5',
								
								//Field Type Specific Settings
								// 0,string for hex (eg '#fffaaa')
								// 1,string for rgba string (eg 'rgba(0,0,0,1)')
								// 1,array for rgba value only (eg '0,0,0,1')
								'enable_opacity' => 0,
								'return_format' => 'string',
							),
							array (
								// Generic Field Settings
								'key' => 'field_select_wT33t397MR4482f',
								'label' => 'Content Colour',
								'name' => 'pb_image_gallery_content_colour',
								'type' => 'select',
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
								'choices' => array (
									'dark' => 'Dark',
									'light' => 'Light',
									'black' => 'Black',
									'white' => 'White',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							array (
								// Generic Field Settings
								'key' => 'field_select_qZ46o951DR6075u',
								'label' => 'Section Padding',
								'name' => 'pb_image_gallery_section_padding',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '20%',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'pad',
								
								//Field Type Specific Settings
								'choices' => array(
									'pad' => 'Top & Bottom',
									'pad-bottom' => 'Bottom',
									'pad-top' => 'Top',
									'pad-none' => 'No Padding',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							array (
								// Generic Field Settings
								'key' => 'field_select_tB65v748YH4921k',
								'label' => 'Gallery Type',
								'name' => 'pb_image_gallery_gallery_type',
								'type' => 'select',
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
								'choices' => array(
									'standard' => 'Standard',
									'modula' => 'Modula',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							array (
								// Generic Field Settings
								'key' => 'field_wysiwyg_uC43t298WO8713p',
								'label' => 'Introduction Content',
								'name' => 'pb_image_gallery_introduction_content',
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
								'key' => 'field_text_vN45i687WB8465p',
								'label' => 'Modula Gallery Shortcode',
								'name' => 'pb_image_gallery_modula_gallery_shortcode',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => array (
									'field' => 'field_select_tB65v748YH4921k',
									'operator' => '==',
									'value' => 'modula',
								),
								'wrapper' => array (
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								
								//Field Type Specific Settings
								'placeholder' => '[modula id="###"]',
								'prepend' => '',
								'append' => '',
								'maxlength' => '',
								'readonly' => 0,
								'disabled' => 0,
							),
							array (
								// Generic Field Settings
								'key' => 'field_repeater_iB26p239BU1892h',
								'label' => 'Images',
								'name' => 'pb_image_gallery_images',
								'type' => 'repeater',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => array (
									'field' => 'field_select_tB65v748YH4921k',
									'operator' => '==',
									'value' => 'standard',
								),
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
								'button_label' => 'Add Row',
								'sub_fields' => array (
									// add repeater fields here
									array (
										// Generic Field Settings
										'key' => 'field_image_dK54q442HE8615x',
										'label' => 'Image',
										'name' => 'pb_image_gallery_image',
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
										'key' => 'field_text_dO11r467ZI7084d',
										'label' => 'Caption',
										'name' => 'pb_image_gallery_image_caption',
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
					/* FAQs */
					/*********************************/
					/*********************************/
					'field_layout_dP62g480KJ4997y' => array (
						// Generic Field Settings
						'key' => 'field_layout_dP62g480KJ4997y',
						'label' => 'FAQs',
						'name' => 'pb_faqs',
						'display' => 'block', // table / block / row
						'sub_fields' => array (
							// add subfields here
							array (
								// Generic Field Settings
								'key' => 'field_text_gK83r385YQ2188u',
								'label' => 'Admin Label',
								'name' => 'pb_faqs_admin_label',
								'type' => 'text',
								'instructions' => 'This field can be used to apply descriptive labels to this content block, for better admin management.',
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
								'key' => 'field_text_dS34e447DQ7563e',
								'label' => 'Section ID',
								'name' => 'pb_faqs_section_id',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '33%',
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
								'key' => 'field_colorpicker_hO67m775EH6083o',
								'label' => 'Section Background Colour',
								'name' => 'pb_faqs_section_background_colour',
								'type' => 'color_picker',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '33%',
									'class' => '',
									'id' => '',
								),
								'default_value' => '#EFF2F5',
								
								//Field Type Specific Settings
								// 0,string for hex (eg '#fffaaa')
								// 1,string for rgba string (eg 'rgba(0,0,0,1)')
								// 1,array for rgba value only (eg '0,0,0,1')
								'enable_opacity' => 0,
								'return_format' => 'string',
							),
							array (
								// Generic Field Settings
								'key' => 'field_select_wG57p142EK1051x',
								'label' => 'Content Colour',
								'name' => 'pb_faqs_content_colour',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '33%',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								
								//Field Type Specific Settings
								'choices' => array (
									'dark' => 'Dark',
									'light' => 'Light',
									'black' => 'Black',
									'white' => 'White',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							array (
								// Generic Field Settings
								'key' => 'field_wysiwyg_yB22h254JB2151o',
								'label' => 'Introduction Content',
								'name' => 'pb_faqs_introduction_content',
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
								'key' => 'field_repeater_cX57p296FR9891f',
								'label' => 'FAQs',
								'name' => 'pb_faqs_faqs',
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
										'key' => 'field_text_bQ27k929HX6643s',
										'label' => 'Question',
										'name' => 'pb_faqs_faq_question',
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
										'key' => 'field_textarea_oZ64y642XE6644h',
										'label' => 'Answer',
										'name' => 'pb_faqs_faq_answer',
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
					/* Specifications */
					/*********************************/
					/*********************************/
					'field_layout_nD87c662IT5745c' => array (
						// Generic Field Settings
						'key' => 'field_layout_nD87c662IT5745c',
						'label' => 'Specifications',
						'name' => 'pb_specifications',
						'display' => 'block', // table / block / row
						'sub_fields' => array (
							// add subfields here
							array (
								// Generic Field Settings
								'key' => 'field_text_nA35a908LT5615c',
								'label' => 'Admin Label',
								'name' => 'pb_specifications_admin_label',
								'type' => 'text',
								'instructions' => 'This field can be used to apply descriptive labels to this content block, for better admin management.',
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
								'key' => 'field_text_dM60s868TA7142r',
								'label' => 'Section ID',
								'name' => 'pb_specifications_section_id',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '33%',
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
								'key' => 'field_colorpicker_hE36t302XU5881f',
								'label' => 'Section Background Colour',
								'name' => 'pb_specifications_section_background_colour',
								'type' => 'color_picker',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '33%',
									'class' => '',
									'id' => '',
								),
								'default_value' => '#EFF2F5',
								
								//Field Type Specific Settings
								// 0,string for hex (eg '#fffaaa')
								// 1,string for rgba string (eg 'rgba(0,0,0,1)')
								// 1,array for rgba value only (eg '0,0,0,1')
								'enable_opacity' => 0,
								'return_format' => 'string',
							),
							array (
								// Generic Field Settings
								'key' => 'field_select_eQ11c868GX7972c',
								'label' => 'Content Colour',
								'name' => 'pb_specifications_content_colour',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '33%',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								
								//Field Type Specific Settings
								'choices' => array (
									'dark' => 'Dark',
									'light' => 'Light',
									'black' => 'Black',
									'white' => 'White',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							array (
								// Generic Field Settings
								'key' => 'field_wysiwyg_bI53q376EU3705t',
								'label' => 'Introduction Content',
								'name' => 'pb_specifications_introduction_content',
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
								'key' => 'field_image_gM15y591FG6628e',
								'label' => 'Main Image',
								'name' => 'pb_specifications_main_image',
								'type' => 'image',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '33.3%',
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
								'key' => 'field_number_fH22d886NR8925w',
								'label' => 'Image Height (Mobile)',
								'name' => 'pb_specifications_image_height_mobile',
								'type' => 'number',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '33.3%',
									'class' => '',
									'id' => '',
								),
								'default_value' => '240',
								
								//Field Type Specific Settings
								'placeholder' => '240',
								'prepend' => '',
								'append' => 'px',
								'min' => '240',
								'max' => '1000',
								'step' => '10',
							),
							array (
								// Generic Field Settings
								'key' => 'field_number_qH71i108ZT6899d',
								'label' => 'Image Height (Desktop)',
								'name' => 'pb_specifications_image_height_desktop',
								'type' => 'number',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '33.3%',
									'class' => '',
									'id' => '',
								),
								'default_value' => '600',
								
								//Field Type Specific Settings
								'placeholder' => '600',
								'prepend' => '',
								'append' => 'px',
								'min' => '240',
								'max' => '1000',
								'step' => '10',
							),
							array (
								// Generic Field Settings
								'key' => 'field_repeater_rL72v966XK4505f',
								'label' => 'Specifications',
								'name' => 'pb_specifications_specifications',
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
								'layout' => 'block', //table/block/row
								'button_label' => 'Add Specification',
								'sub_fields' => array (
									// add repeater fields here
									array (
										// Generic Field Settings
										'key' => 'field_text_zJ73n362AP6432b',
										'label' => 'Title',
										'name' => 'pb_specifications_specification_title',
										'type' => 'text',
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
										'placeholder' => 'Title',
										'prepend' => '',
										'append' => '',
										'maxlength' => '',
										'readonly' => 0,
										'disabled' => 0,
									),
									array (
										// Generic Field Settings
										'key' => 'field_repeater_yB15q772HR2732k',
										'label' => 'Options',
										'name' => 'pb_specifications_specification_images',
										'type' => 'repeater',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '100%',
											'class' => '',
											'id' => '',
										),
										
										//Field Type Specific Settings
										'collapsed' => '',
										'min' => '0',
										'max' => '0',
										'layout' => 'block', //table/block/row
										'button_label' => 'Add Option',
										'sub_fields' => array (
											// add repeater fields here
											array (
												// Generic Field Settings
												'key' => 'field_image_pA21u536WZ7825x',
												'label' => 'Thumb',
												'name' => 'pb_specifications_specification_images_image_thumb',
												'type' => 'image',
												'instructions' => '',
												'required' => 0,
												'conditional_logic' => 0,
												'wrapper' => array (
													'width' => '25%',
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
												'key' => 'field_image_nU30r743WM8671r',
												'label' => 'Image',
												'name' => 'pb_specifications_specification_images_image_image',
												'type' => 'image',
												'instructions' => '',
												'required' => 0,
												'conditional_logic' => 0,
												'wrapper' => array (
													'width' => '25%',
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
												'key' => 'field_text_rK35y762HS1003z',
												'label' => 'Title',
												'name' => 'pb_specifications_specification_images_image_title',
												'type' => 'text',
												'instructions' => '',
												'required' => 0,
												'conditional_logic' => 0,
												'wrapper' => array (
													'width' => '25%',
													'class' => '',
													'id' => '',
												),
												'default_value' => '',
												
												//Field Type Specific Settings
												'placeholder' => 'Title',
												'prepend' => '',
												'append' => '',
												'maxlength' => '',
												'readonly' => 0,
												'disabled' => 0,
											),
											array (
												// Generic Field Settings
												'key' => 'field_textarea_iC41k228BB8195h',
												'label' => 'Description',
												'name' => 'pb_specifications_specification_images_image_description',
												'type' => 'textarea',
												'instructions' => '',
												'required' => 0,
												'conditional_logic' => 0,
												'wrapper' => array (
													'width' => '25%',
													'class' => '',
													'id' => '',
												),
												'default_value' => '',
												
												//Field Type Specific Settings
												'placeholder' => 'Description',
												'maxlength' => '',
												'rows' => '',
												'new_lines' => '', // empty / wpautop / br
												'readonly' => 0,
												'disabled' => 0,
											),
										),
									),
								),
							),
						),
						'min' => '0',
						'max' => '0',
					),
					
					
					/*********************************/
					/*********************************/
					/* Product Builder */
					/*********************************/
					/*********************************/
					'field_layout_cB49g876HS3188b' => array (
						// Generic Field Settings
						'key' => 'field_layout_cB49g876HS3188b',
						'label' => 'Product Builder',
						'name' => 'pb_product_builder',
						'display' => 'block', // table / block / row
						'sub_fields' => array (
							// add subfields here
							array (
								// Generic Field Settings
								'key' => 'field_text_eP77p369QV6977y',
								'label' => 'Admin Label',
								'name' => 'pb_product_builder_admin_label',
								'type' => 'text',
								'instructions' => 'This field can be used to apply descriptive labels to this content block, for better admin management.',
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
								'key' => 'field_text_vF75c734LZ9396o',
								'label' => 'Section ID',
								'name' => 'pb_product_builder_section_id',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '33%',
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
								'key' => 'field_colorpicker_sE34e708EG3321l',
								'label' => 'Section Background Colour',
								'name' => 'pb_product_builder_section_background_colour',
								'type' => 'color_picker',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '33%',
									'class' => '',
									'id' => '',
								),
								'default_value' => '#EFF2F5',
								
								//Field Type Specific Settings
								// 0,string for hex (eg '#fffaaa')
								// 1,string for rgba string (eg 'rgba(0,0,0,1)')
								// 1,array for rgba value only (eg '0,0,0,1')
								'enable_opacity' => 0,
								'return_format' => 'string',
							),
							array (
								// Generic Field Settings
								'key' => 'field_select_mP90c251XN5823a',
								'label' => 'Content Colour',
								'name' => 'pb_product_builder_content_colour',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '33%',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								
								//Field Type Specific Settings
								'choices' => array (
									'dark' => 'Dark',
									'light' => 'Light',
									'black' => 'Black',
									'white' => 'White',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							array (
								// Generic Field Settings
								'key' => 'field_wysiwyg_eC38c909LW6444o',
								'label' => 'Introduction Content',
								'name' => 'pb_product_builder_introduction_content',
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
								'key' => 'field_text_jT58x408WW4103y',
								'label' => 'Product Code',
								'name' => 'pb_product_builder_product_code',
								'type' => 'text',
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
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'maxlength' => '',
								'readonly' => 0,
								'disabled' => 0,
							),
							array (
								// Generic Field Settings
								'key' => 'field_repeater_lG74i978CT8435x',
								'label' => 'Components',
								'name' => 'pb_product_builder_components',
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
								'layout' => 'block', //table/block/row
								'button_label' => 'Add Component',
								'sub_fields' => array (
									// add repeater fields here
									array (
										// Generic Field Settings
										'key' => 'field_text_gS32r382RR9440f',
										'label' => 'Component Title',
										'name' => 'pb_product_builder_component_title',
										'type' => 'text',
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
										'placeholder' => 'Component Title',
										'prepend' => '',
										'append' => '',
										'maxlength' => '',
										'readonly' => 0,
										'disabled' => 0,
									),
									array (
										// Generic Field Settings
										'key' => 'field_text_fY20x641PX3455o',
										'label' => 'Component Code',
										'name' => 'pb_product_builder_component_code',
										'type' => 'text',
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
										'placeholder' => '',
										'prepend' => '',
										'append' => '',
										'maxlength' => '',
										'readonly' => 0,
										'disabled' => 0,
									),
									array (
										// Generic Field Settings
										'key' => 'field_repeater_vU42e362CX1981x',
										'label' => 'Component Options',
										'name' => 'pb_product_builder_component_options',
										'type' => 'repeater',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '100%',
											'class' => '',
											'id' => '',
										),
										
										//Field Type Specific Settings
										'collapsed' => '',
										'min' => '0',
										'max' => '0',
										'layout' => 'block', //table/block/row
										'button_label' => 'Add Component Option',
										'sub_fields' => array (
											// add repeater fields here
											array (
												// Generic Field Settings
												'key' => 'field_image_rC70d749ZX9144n',
												'label' => 'Option Image',
												'name' => 'pb_product_builder_component_options_option_image',
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
												'key' => 'field_text_wN75l944XS2916o',
												'label' => 'Option Title',
												'name' => 'pb_product_builder_component_options_option_title',
												'type' => 'text',
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
												'placeholder' => 'Title',
												'prepend' => '',
												'append' => '',
												'maxlength' => '',
												'readonly' => 0,
												'disabled' => 0,
											),
											array (
												// Generic Field Settings
												'key' => 'field_text_wM34p201EL2488f',
												'label' => 'Option Code',
												'name' => 'pb_product_builder_component_options_option_code',
												'type' => 'text',
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
												'placeholder' => '',
												'prepend' => '',
												'append' => '',
												'maxlength' => '',
												'readonly' => 0,
												'disabled' => 0,
											),
											
											array (
												// Generic Field Settings
												'key' => 'field_repeater_cC46m297EQ4074o',
												'label' => 'Compatible Options',
												'name' => 'pb_product_builder_component_options_option_compatible_options',
												'type' => 'repeater',
												'instructions' => 'Please only add compatible options on the immeidate next level!',
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
												'button_label' => 'Add Compatible Option',
												'sub_fields' => array (
													// add repeater fields here
													array (
														// Generic Field Settings
														'key' => 'field_text_iF72f679FH2902e',
														'label' => 'Compatible Option Code',
														'name' => 'compatible_option_code',
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
									),
								),
							),
						),
						'min' => '0',
						'max' => '0',
					),
					
					
					/*********************************/
					/*********************************/
					/* Call to Action */
					/*********************************/
					/*********************************/
					'field_layout_fY13o224QT5581n' => array (
						// Generic Field Settings
						'key' => 'field_layout_fY13o224QT5581n',
						'label' => 'Call to Action',
						'name' => 'pb_call_to_action',
						'display' => 'block', // table / block / row
						'sub_fields' => array (
							// add subfields here
							
							array (
								// Generic Field Settings
								'key' => 'field_message_eV33u283DL3099n',
								'label' => '',
								'name' => 'pb_call_to_action_about_this_content_block',
								'type' => 'message',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '100%',
									'class' => '',
									'id' => '',
								),
								
								//Field Type Specific Settings
								
								'message' => '<h1>About This Content Block</h1><br><p>The Call to Action Content Block will only display on Landing Pages - it will not display on any other page or post type such as products or blog posts.</p>',
								
								'new_lines' => 'wpautop',
									// 'wpautop' = automatically add paragraphs
									// 'br' = automatically add <br>
									// '' = no formatting
									
								'esc_html' => 0,
							),
							
							array (
								// Generic Field Settings
								'key' => 'field_text_iA80p580IT2114v',
								'label' => 'Admin Label',
								'name' => 'pb_call_to_action_admin_label',
								'type' => 'text',
								'instructions' => 'This field can be used to apply descriptive labels to this content block, for better admin management.',
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
								'key' => 'field_text_hD18e551WE2420m',
								'label' => 'Section ID',
								'name' => 'pb_call_to_action_section_id',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '25%',
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
								'key' => 'field_colorpicker_qN76q175VW8178n',
								'label' => 'Section Background Colour',
								'name' => 'pb_call_to_action_section_background_colour',
								'type' => 'color_picker',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '25%',
									'class' => '',
									'id' => '',
								),
								'default_value' => '#EFF2F5',
								
								//Field Type Specific Settings
								// 0,string for hex (eg '#fffaaa')
								// 1,string for rgba string (eg 'rgba(0,0,0,1)')
								// 1,array for rgba value only (eg '0,0,0,1')
								'enable_opacity' => 0,
								'return_format' => 'string',
							),
							array (
								// Generic Field Settings
								'key' => 'field_select_hA23y932YA2032x',
								'label' => 'Content Colour',
								'name' => 'pb_call_to_action_content_colour',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '25%',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								
								//Field Type Specific Settings
								'choices' => array (
									'dark' => 'Dark',
									'light' => 'Light',
									'black' => 'Black',
									'white' => 'White',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							array (
								// Generic Field Settings
								'key' => 'field_select_vX10x238CV9307e',
								'label' => 'Section Padding',
								'name' => 'pb_call_to_action_section_padding',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '25%',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'pad',
								
								//Field Type Specific Settings
								'choices' => array(
									'pad' => 'Top & Bottom',
									'pad-bottom' => 'Bottom',
									'pad-top' => 'Top',
									'pad-none' => 'No Padding',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							array (
								// Generic Field Settings
								'key' => 'field_wysiwyg_zY24e110VZ1133x',
								'label' => 'Content',
								'name' => 'pb_call_to_action_content',
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
								'key' => 'field_image_kV18g642YK5861z',
								'label' => 'Image',
								'name' => 'pb_call_to_action_image',
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
								'key' => 'field_truefalse_cV64g750FH4045l',
								'label' => 'Add Button?',
								'name' => 'pb_call_to_action_add_button',
								'type' => 'true_false',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => 1,
								
								//Field Type Specific Settings
								'message' => 0,
							),
							array (
								// Generic Field Settings
								'key' => 'field_select_fH97k627AZ9023g',
								'label' => 'Button Text Setting',
								'name' => 'pb_call_to_action_button_text_setting',
								'type' => 'select',
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
								'choices' => array(
									'default' => 'Default (Landing Page Setttings)',
									'custom' => 'Custom',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							array (
								// Generic Field Settings
								'key' => 'field_text_jA92m468SM6138f',
								'label' => 'Button Text',
								'name' => 'pb_call_to_action_button_text_custom',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => array (
									'field' => 'field_select_fH97k627AZ9023g',
									'operator' => '==',
									'value' => 'custom',
								),
								'wrapper' => array (
									'width' => '50%',
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
								'key' => 'field_message_nL73s592XG6865r',
								'label' => '',
								'name' => 'pb_call_to_action_message_1',
								'type' => 'message',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => array (
									'field' => 'field_select_fH97k627AZ9023g',
									'operator' => '==',
									'value' => 'default',
								),
								'wrapper' => array (
									'width' => '50%',
									'class' => '',
									'id' => '',
								),
								
								//Field Type Specific Settings
								
								'message' => '',
								
								'new_lines' => 'wpautop',
									// 'wpautop' = automatically add paragraphs
									// 'br' = automatically add <br>
									// '' = no formatting
									
								'esc_html' => 0,
							),
							array (
								// Generic Field Settings
								'key' => 'field_select_zQ94l734GI5404r',
								'label' => 'Button Function',
								'name' => 'pb_call_to_action_button_function',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '33.3%',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								
								//Field Type Specific Settings
								'choices' => array(
									'form' => 'Open Enquiry Form',
									'pagelink' => 'Page Link',
									'customlink' => 'Custom Link',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							array (
								// Generic Field Settings
								'key' => 'field_message_aG20s981WP2081z',
								'label' => '',
								'name' => 'pb_call_to_action_message_2',
								'type' => 'message',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => array (
									array (
										array (
											'field' => 'field_select_zQ94l734GI5404r',
											'operator' => '==',
											'value' => 'form',
										),
									),
									array (
										array (
											'field' => 'field_select_zQ94l734GI5404r',
											'operator' => '==',
											'value' => 'order',
										),
									),
								),
								'wrapper' => array (
									'width' => '33.3%',
									'class' => '',
									'id' => '',
								),
								
								//Field Type Specific Settings
								
								'message' => '',
								
								'new_lines' => 'wpautop',
									// 'wpautop' = automatically add paragraphs
									// 'br' = automatically add <br>
									// '' = no formatting
									
								'esc_html' => 0,
							),
							array (
								// Generic Field Settings
								'key' => 'field_text_fS62t166JH5621l',
								'label' => 'Button Link',
								'name' => 'pb_call_to_action_button_link_custom',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => array (
									'field' => 'field_select_zQ94l734GI5404r',
									'operator' => '==',
									'value' => 'customlink',
								),
								'wrapper' => array (
									'width' => '33.3%',
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
								'key' => 'field_pagelink_qV95j419FE3718u',
								'label' => 'Button Link',
								'name' => 'pb_call_to_action_button_link_page',
								'type' => 'page_link',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => array (
									'field' => 'field_select_zQ94l734GI5404r',
									'operator' => '==',
									'value' => 'pagelink',
								),
								'wrapper' => array (
									'width' => '33.3%',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								
								//Field Type Specific Settings
								'post_type' => '',
								'taxonomy' => '',
								'allow_null' => 0,
								'multiple' => 0,
							),
							array (
								// Generic Field Settings
								'key' => 'field_select_nW58u658BW7033c',
								'label' => 'Button Colour',
								'name' => 'pb_call_to_action_button_colour',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '33.3%',
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
						'min' => '0',
						'max' => '0',
					),
					
					
					/*********************************/
					/*********************************/
					/* USPs */
					/*********************************/
					/*********************************/
					'field_layout_uJ91e468LT4264r' => array (
						// Generic Field Settings
						'key' => 'field_layout_uJ91e468LT4264r',
						'label' => 'USPs',
						'name' => 'pb_usps',
						'display' => 'block', // table / block / row
						'sub_fields' => array (
							// add subfields here
							array (
								// Generic Field Settings
								'key' => 'field_text_gM81p650LC3565j',
								'label' => 'Admin Label',
								'name' => 'pb_usps_admin_label',
								'type' => 'text',
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
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'maxlength' => '',
								'readonly' => 0,
								'disabled' => 0,
							),
							array (
								// Generic Field Settings
								'key' => 'field_text_yU20x119WH2509o',
								'label' => 'Section ID',
								'name' => 'pb_usps_section_id',
								'type' => 'text',
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
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'maxlength' => '',
								'readonly' => 0,
								'disabled' => 0,
							),
							array (
								// Generic Field Settings
								'key' => 'field_colorpicker_kO97c641MD6010x',
								'label' => 'Section Background Colour',
								'name' => 'pb_usps_section_background_colour',
								'type' => 'color_picker',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '25%',
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
								'key' => 'field_select_nI84h777SH5485b',
								'label' => 'Content Alignment',
								'name' => 'pb_usps_content_alignment',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '25%',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'start',
								
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
								'key' => 'field_select_fC27a767GU1528a',
								'label' => 'Content Colour',
								'name' => 'pb_usps_content_colour',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '25%',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								
								//Field Type Specific Settings
								'choices' => array (
									'dark' => 'Dark',
									'light' => 'Light',
									'black' => 'Black',
									'white' => 'White',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							array (
								// Generic Field Settings
								'key' => 'field_select_wZ27z741KA5886x',
								'label' => 'Icon Colour',
								'name' => 'pb_usps_icon_colour',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '25%',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'default',
								
								//Field Type Specific Settings
								'choices' => array (
									'default' => 'Default (Product Settings)',
									'dark' => 'Dark',
									'light' => 'Light',
									'black' => 'Black',
									'white' => 'White',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							array (
								// Generic Field Settings
								'key' => 'field_wysiwyg_mP68a733WJ3840y',
								'label' => 'Introduction Content',
								'name' => 'pb_usps_introduction_content',
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
								'key' => 'field_repeater_xS77p754DA6023j',
								'label' => 'USPs',
								'name' => 'pb_usps_usps',
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
										'key' => 'field_fontawesome_tM60s929LO6030t',
										'label' => 'Icon',
										'name' => 'pb_usps_usp_icon',
										'type' => 'font-awesome',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '33%',
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
											"style" : "light",
											"id" : "star",
											"label" : "Star"
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
										'key' => 'field_text_zW41e369AN6820l',
										'label' => 'Heading',
										'name' => 'pb_usps_usp_heading',
										'type' => 'text',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '33%',
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
										'key' => 'field_text_aV78v413NA6965c',
										'label' => 'Link',
										'name' => 'pb_usps_usp_link',
										'type' => 'text',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '33%',
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
										'key' => 'field_wysiwyg_aK40v253GJ9224p',
										'label' => 'Text',
										'name' => 'pb_usps_usp_text',
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
						),
						'min' => '0',
						'max' => '0',
					),


					/*********************************/
					/*********************************/
					/* USPs (Rollover) */
					/*********************************/
					/*********************************/
					'field_layout_kM54v588LS1947k' => array (
						// Generic Field Settings
						'key' => 'field_layout_kM54v588LS1947k',
						'label' => 'USPs (Rollover)',
						'name' => 'pb_usps_rollover',
						'display' => 'block', // table / block / row
						'sub_fields' => array (
							// add subfields here
							array (
								// Generic Field Settings
								'key' => 'field_text_fC88f121YB7790t',
								'label' => 'Admin Label',
								'name' => 'pb_usps_rollover_admin_label',
								'type' => 'text',
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
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'maxlength' => '',
								'readonly' => 0,
								'disabled' => 0,
							),
							array (
								// Generic Field Settings
								'key' => 'field_text_kM79l234TW3124e',
								'label' => 'Section ID',
								'name' => 'pb_usps_rollover_section_id',
								'type' => 'text',
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
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'maxlength' => '',
								'readonly' => 0,
								'disabled' => 0,
							),
							array (
								// Generic Field Settings
								'key' => 'field_colorpicker_yE57z843LN8113d',
								'label' => 'Section Background Colour',
								'name' => 'pb_usps_rollover_section_background_colour',
								'type' => 'color_picker',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '33.3%',
									'class' => '',
									'id' => '',
								),
								'default_value' => '#EFF2F5',
								
								//Field Type Specific Settings
								// 0,string for hex (eg '#fffaaa')
								// 1,string for rgba string (eg 'rgba(0,0,0,1)')
								// 1,array for rgba value only (eg '0,0,0,1')
								'enable_opacity' => 0,
								'return_format' => 'string',
							),
							array (
								// Generic Field Settings
								'key' => 'field_select_hV12u305IK7525p',
								'label' => 'Intro Content Colour',
								'name' => 'pb_usps_rollover_intro_content_colour',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '33.3%',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								
								//Field Type Specific Settings
								'choices' => array (
									'dark' => 'Dark',
									'light' => 'Light',
									'black' => 'Black',
									'white' => 'White',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							array (
								// Generic Field Settings
								'key' => 'field_truefalse_dQ46w287OS4403x',
								'label' => 'Heading Visible?',
								'name' => 'pb_usps_rollover_heading_visible',
								'type' => 'true_false',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '33.3%',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								
								//Field Type Specific Settings
								'message' => 0,
							),
							array (
								// Generic Field Settings
								'key' => 'field_wysiwyg_mY70d492WK5616p',
								'label' => 'Introduction Content',
								'name' => 'pb_usps_rollover_introduction_content',
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
								'key' => 'field_repeater_dS77p475EE9545p',
								'label' => 'USPs',
								'name' => 'pb_usps_rollover_usps',
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
										'key' => 'field_image_oE54w279ZN1422i',
										'label' => 'Background Image',
										'name' => 'pb_usps_rollover_usp_background_image',
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
										'key' => 'field_fontawesome_xX67f956HL6434n',
										'label' => 'Icon',
										'name' => 'pb_usps_rollover_usp_icon',
										'type' => 'font-awesome',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '50%',
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
											"style" : "light",
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
										'key' => 'field_text_pB30r723EK7294t',
										'label' => 'Heading',
										'name' => 'pb_usps_rollover_usp_heading',
										'type' => 'text',
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
										'placeholder' => '',
										'prepend' => '',
										'append' => '',
										'maxlength' => '',
										'readonly' => 0,
										'disabled' => 0,
									),
									array (
										// Generic Field Settings
										'key' => 'field_wysiwyg_gD18c535MM4280u',
										'label' => 'Text',
										'name' => 'pb_usps_rollover_usp_text',
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
						),
						'min' => '0',
						'max' => '0',
					),
					
					
					/*********************************/
					/*********************************/
					/* Case Studies */
					/*********************************/
					/*********************************/
					'field_layout_mB58u552EH4100a' => array (
						// Generic Field Settings
						'key' => 'field_layout_mB58u552EH4100a',
						'label' => 'Case Studies',
						'name' => 'pb_case_studies',
						'display' => 'block', // table / block / row
						'sub_fields' => array (
							// add subfields here
							array (
								// Generic Field Settings
								'key' => 'field_text_oZ51k265ZP3179v',
								'label' => 'Admin Label',
								'name' => 'pb_case_studies__admin_label',
								'type' => 'text',
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
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'maxlength' => '',
								'readonly' => 0,
								'disabled' => 0,
							),
							array (
								// Generic Field Settings
								'key' => 'field_text_fC97d491TB6824h',
								'label' => 'Section ID',
								'name' => 'pb_case_studies__section_id',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '50%',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'case-studies',
								
								//Field Type Specific Settings
								'placeholder' => 'case-studies',
								'prepend' => '',
								'append' => '',
								'maxlength' => '',
								'readonly' => 0,
								'disabled' => 0,
							),
							array (
								// Generic Field Settings
								'key' => 'field_colorpicker_nX72b218PA3422r',
								'label' => 'Section Background Colour',
								'name' => 'pb_case_studies__section_background_colour',
								'type' => 'color_picker',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '33.3%',
									'class' => '',
									'id' => '',
								),
								'default_value' => '#EFF2F5',
								
								//Field Type Specific Settings
								// 0,string for hex (eg '#fffaaa')
								// 1,string for rgba string (eg 'rgba(0,0,0,1)')
								// 1,array for rgba value only (eg '0,0,0,1')
								'enable_opacity' => 0,
								'return_format' => 'string',
							),
							array (
								// Generic Field Settings
								'key' => 'field_select_jS75d535XK3899j',
								'label' => 'Intro Content Colour',
								'name' => 'pb_case_studies__intro_content_colour',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '33.3%',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								
								//Field Type Specific Settings
								'choices' => array (
									'dark' => 'Dark',
									'light' => 'Light',
									'black' => 'Black',
									'white' => 'White',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							array (
								// Generic Field Settings
								'key' => 'field_wysiwyg_uL47z813XP8580o',
								'label' => 'Introduction Content',
								'name' => 'pb_case_studies__introduction_content',
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
								'key' => 'field_taxonomy_sY42s195QW2387l',
								'label' => 'Case Study Categories',
								'name' => 'pb_case_studies__case_study_categories',
								'type' => 'taxonomy',
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
								'taxonomy' => 'project_category',
								'field_type' => 'checkbox',
								'allow_null' => 0,
								'load_save_terms' 	=> 0,
								'return_format'		=> 'id',
								'add_term'			=> 1,
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
					'field_layout_tM78z282PV6339a' => array (
						// Generic Field Settings
						'key' => 'field_layout_tM78z282PV6339a',
						'label' => 'Resources',
						'name' => 'pb_resources',
						'display' => 'block', // table / block / row
						'sub_fields' => array (
							// add subfields here
							array (
								// Generic Field Settings
								'key' => 'field_text_nG87r700JA9721j',
								'label' => 'Admin Label',
								'name' => 'pb_resources_admin_label',
								'type' => 'text',
								'instructions' => 'This field can be used to apply descriptive labels to this content block, for better admin management.',
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
								'key' => 'field_text_zG74l666ZL8947c',
								'label' => 'Section ID',
								'name' => 'pb_resources_section_id',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '25%',
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
								'key' => 'field_colorpicker_dH71t886OB7803u',
								'label' => 'Section Background Colour',
								'name' => 'pb_resources_section_background_colour',
								'type' => 'color_picker',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '25%',
									'class' => '',
									'id' => '',
								),
								'default_value' => '#ffffff',
								
								//Field Type Specific Settings
								// 0,string for hex (eg '#fffaaa')
								// 1,string for rgba string (eg 'rgba(0,0,0,1)')
								// 1,array for rgba value only (eg '0,0,0,1')
								'enable_opacity' => 0,
								'return_format' => 'string',
							),
							array (
								// Generic Field Settings
								'key' => 'field_select_vN79l855LD6919z',
								'label' => 'Content Colour',
								'name' => 'pb_resources_content_colour',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '25%',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'dark',
								
								//Field Type Specific Settings
								'choices' => array (
									'dark' => 'Dark',
									'light' => 'Light',
									'black' => 'Black',
									'white' => 'White',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							array (
								// Generic Field Settings
								'key' => 'field_select_pP27b723EB3720t',
								'label' => 'Section Padding',
								'name' => 'pb_resources_section_padding',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '25%',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'pad',
								
								//Field Type Specific Settings
								'choices' => array(
									'pad' => 'Top & Bottom',
									'pad-bottom' => 'Bottom',
									'pad-top' => 'Top',
									'pad-none' => 'No Padding',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							array (
								// Generic Field Settings
								'key' => 'field_wysiwyg_oC52g391VN1304v',
								'label' => 'Intro Text',
								'name' => 'pb_resources_intro_text',
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
								'key' => 'field_repeater_aQ22f679FE9343v',
								'label' => 'Resources',
								'name' => 'pb_resources_resources_rp',
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
										'key' => 'field_file_fI17e940FK3467a',
										'label' => 'Resource File',
										'name' => 'pb_resources_resources_rp__resource__resource_file',
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
										'key' => 'field_text_mE23c845WP1183n',
										'label' => 'Resource Title',
										'name' => 'pb_resources_resources_rp__resource__resource_title',
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
										'key' => 'field_image_lQ39i622KW4918g',
										'label' => 'Resource Thumb',
										'name' => 'pb_resources_resources_rp__resource__resource_thumb',
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
						'max' => '0',
					),
					
					
					/*********************************/
					/*********************************/
					/* 3D Render */
					/*********************************/
					/*********************************/
					'field_layout_nH56w371AG3282t' => array (
						// Generic Field Settings
						'key' => 'field_layout_nH56w371AG3282t',
						'label' => '3D Render',
						'name' => 'pb_3d_render',
						'display' => 'block', // table / block / row
						'sub_fields' => array (
							// add subfields here
							array (
								// Generic Field Settings
								'key' => 'field_text_tK79f993EZ6061w',
								'label' => 'Admin Label',
								'name' => 'pb_3d_render_admin_label',
								'type' => 'text',
								'instructions' => 'This field can be used to apply descriptive labels to this content block, for better admin management.',
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
								'key' => 'field_text_aY83t521XJ9112p',
								'label' => 'Section ID',
								'name' => 'pb_3d_render_section_id',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '33.3%',
									'class' => '',
									'id' => '',
								),
								'default_value' => '3d-render',
								
								//Field Type Specific Settings
								'placeholder' => '3d-render',
								'prepend' => '',
								'append' => '',
								'maxlength' => '',
								'readonly' => 0,
								'disabled' => 0,
							),
							array (
								// Generic Field Settings
								'key' => 'field_colorpicker_wR43o148BT4186r',
								'label' => 'Section Background Colour',
								'name' => 'pb_3d_render_section_background_colour',
								'type' => 'color_picker',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '33.3%',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'rgb(255,255,255)',
								
								//Field Type Specific Settings
								// 0,string for hex (eg '#fffaaa')
								// 1,string for rgba string (eg 'rgba(0,0,0,1)')
								// 1,array for rgba value only (eg '0,0,0,1')
								'enable_opacity' => 1,
								'return_format' => 'string',
							),
							array (
								// Generic Field Settings
								'key' => 'field_select_pP39g358JY1774p',
								'label' => 'Section Padding',
								'name' => 'pb_3d_render_section_padding',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '33.3%',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'pad',
								
								//Field Type Specific Settings
								'choices' => array(
									'pad' => 'Top & Bottom',
									'pad-bottom' => 'Bottom',
									'pad-top' => 'Top',
									'pad-none' => 'No Padding',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							array (
								// Generic Field Settings
								'key' => 'field_wysiwyg_yN51m180TK4843b',
								'label' => 'Content',
								'name' => 'pb_3d_render_content',
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
								'key' => 'field_repeater_wD94y845YP8860d',
								'label' => 'Buttons',
								'name' => 'pb_3d_render_buttons',
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
										'key' => 'field_text_lR44l280BW3462o',
										'label' => 'Button Text',
										'name' => 'pb_3d_render_button_text',
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
										'key' => 'field_text_aD91k672ER6327v',
										'label' => 'Button Destination',
										'name' => 'pb_3d_render_button_destination',
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
								'key' => 'field_textarea_qN67w227NR6271u',
								'label' => 'Render Code',
								'name' => 'pb_3d_render_iframe_code',
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
						'min' => '0',
						'max' => '1',
					),
					
					
					/*********************************/
					/*********************************/
					/* NBS Frame */
					/*********************************/
					/*********************************/
					/*'field_layout_gD39v622NK5035f' => array (
						// Generic Field Settings
						'key' => 'field_layout_gD39v622NK5035f',
						'label' => 'NBS Frame',
						'name' => 'pb_nbs_frame',
						'display' => 'block', // table / block / row
						'sub_fields' => array (
							// add subfields here
							array (
								// Generic Field Settings
								'key' => 'field_text_wC48x808RR3378d',
								'label' => 'Admin Label',
								'name' => 'pb_nbs_frame_admin_label',
								'type' => 'text',
								'instructions' => 'This field can be used to apply descriptive labels to this content block, for better admin management.',
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
								'key' => 'field_text_hJ82v768MX5386j',
								'label' => 'Section ID',
								'name' => 'pb_nbs_frame_section_id',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '33.3%',
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
								'key' => 'field_colorpicker_kE46y131MO7734c',
								'label' => 'Section Background Colour',
								'name' => 'pb_nbs_frame_section_background_colour',
								'type' => 'color_picker',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '33.3%',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'rgb(255,255,255)',
								
								//Field Type Specific Settings
								// 0,string for hex (eg '#fffaaa')
								// 1,string for rgba string (eg 'rgba(0,0,0,1)')
								// 1,array for rgba value only (eg '0,0,0,1')
								'enable_opacity' => 1,
								'return_format' => 'string',
							),
							array (
								// Generic Field Settings
								'key' => 'field_select_vG66e409XJ6076e',
								'label' => 'Section Padding',
								'name' => 'pb_nbs_frame_section_padding',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '33.3%',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'pad',
								
								//Field Type Specific Settings
								'choices' => array(
									'pad' => 'Top & Bottom',
									'pad-bottom' => 'Bottom',
									'pad-top' => 'Top',
									'pad-none' => 'No Padding',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							array (
								// Generic Field Settings
								'key' => 'field_textarea_aS40v897UV4628f',
								'label' => 'iFrame Code',
								'name' => 'pb_nbs_frame_iframe_code',
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
						'min' => '0',
						'max' => '0',
					),*/
					
					
					/*********************************/
					/*********************************/
					/* Accreditations */
					/*********************************/
					/*********************************/
					'field_layout_nP78f783JA3451v' => array (
						// Generic Field Settings
						'key' => 'field_layout_nP78f783JA3451v',
						'label' => 'Accreditations',
						'name' => 'pb_accreditations',
						'display' => 'block', // table / block / row
						'sub_fields' => array (
							// add subfields here
							array (
								// Generic Field Settings
								'key' => 'field_message_wE27h425FV2061a',
								'label' => '',
								'name' => 'pb_accreditations_message',
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
							array (
								// Generic Field Settings
								'key' => 'field_text_gP85v788JY4152q',
								'label' => 'Admin Label',
								'name' => 'pb_accreditations_admin_label',
								'type' => 'text',
								'instructions' => 'This field can be used to apply descriptive labels to this content block, for better admin management.',
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
								'key' => 'field_text_qJ95a139BO1215z',
								'label' => 'Section ID',
								'name' => 'pb_accreditations_section_id',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '33.3%',
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
								'key' => 'field_colorpicker_iI41g789GL2977o',
								'label' => 'Section Background Colour',
								'name' => 'pb_accreditations_section_background_colour',
								'type' => 'color_picker',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '33.3%',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'rgb(255,255,255)',
								
								//Field Type Specific Settings
								// 0,string for hex (eg '#fffaaa')
								// 1,string for rgba string (eg 'rgba(0,0,0,1)')
								// 1,array for rgba value only (eg '0,0,0,1')
								'enable_opacity' => 1,
								'return_format' => 'string',
							),
							array (
								// Generic Field Settings
								'key' => 'field_select_xJ85e201MO9948l',
								'label' => 'Section Padding',
								'name' => 'pb_accreditations_section_padding',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '33.3%',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'pad',
								
								//Field Type Specific Settings
								'choices' => array(
									'pad' => 'Top & Bottom',
									'pad-bottom' => 'Bottom',
									'pad-top' => 'Top',
									'pad-none' => 'No Padding',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
						),
						'min' => '0',
						'max' => '1',
					),
					
										
					/*********************************/
					/*********************************/
					/* Contact */
					/*********************************/
					/*********************************/
					'field_layout_uH50i343HF4015v' => array (
						// Generic Field Settings
						'key' => 'field_layout_uH50i343HF4015v',
						'label' => 'Contact',
						'name' => 'pb_contact',
						'display' => 'block', // table / block / row
						'sub_fields' => array (
							// add subfields here
							array (
								// Generic Field Settings
								'key' => 'field_message_eX40m145WJ3310s',
								'label' => '',
								'name' => 'pb_contact_message',
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
								
								'message' => 'You can manage the content for this section under <strong>Options > Global Page Sections > Contact Section (Page Builder)</strong>.',
								
								'new_lines' => 'wpautop',
									// 'wpautop' = automatically add paragraphs
									// 'br' = automatically add <br>
									// '' = no formatting
									
								'esc_html' => 0,
							),
							array (
								// Generic Field Settings
								'key' => 'field_text_rU54g837LK2917x',
								'label' => 'Admin Label',
								'name' => 'pb_contact_admin_label',
								'type' => 'text',
								'instructions' => 'This field can be used to apply descriptive labels to this content block, for better admin management.',
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
								'key' => 'field_text_yA24l386ZO4182w',
								'label' => 'Section ID',
								'name' => 'pb_contact_section_id',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '25%',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'contact-section',
								
								//Field Type Specific Settings
								'placeholder' => 'contact-section',
								'prepend' => '',
								'append' => '',
								'maxlength' => '',
								'readonly' => 0,
								'disabled' => 0,
							),
							array (
								// Generic Field Settings
								'key' => 'field_colorpicker_lC52y258IQ3967v',
								'label' => 'Section Background Colour',
								'name' => 'pb_contact_section_background_colour',
								'type' => 'color_picker',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '25%',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'rgb(255,255,255)',
								
								//Field Type Specific Settings
								// 0,string for hex (eg '#fffaaa')
								// 1,string for rgba string (eg 'rgba(0,0,0,1)')
								// 1,array for rgba value only (eg '0,0,0,1')
								'enable_opacity' => 1,
								'return_format' => 'string',
							),
							array (
								// Generic Field Settings
								'key' => 'field_select_yY20l188AA8143n',
								'label' => 'Content Colour',
								'name' => 'pb_contact_content_colour',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '25%',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'dark',
								
								//Field Type Specific Settings
								'choices' => array (
									'dark' => 'Dark',
									'light' => 'Light',
									'black' => 'Black',
									'white' => 'White',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
							),
							array (
								// Generic Field Settings
								'key' => 'field_select_cW68g822XC2328a',
								'label' => 'Section Padding',
								'name' => 'pb_contact_section_padding',
								'type' => 'select',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array (
									'width' => '25%',
									'class' => '',
									'id' => '',
								),
								'default_value' => 'pad',
								
								//Field Type Specific Settings
								'choices' => array(
									'pad' => 'Top & Bottom',
									'pad-bottom' => 'Bottom',
									'pad-top' => 'Top',
									'pad-none' => 'No Padding',
								),
								'allow_null' => 0,
								'multiple' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
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
		),
		
		'location' => array (// repeat this array for OR rules
			array (
				// add location rules here
				// tabtrigger acf_group_location_
				// repeat whithin this array for AND rules
				array (
					'param' => 'post_type',
					'operator' => '==', // == / !=
					'value' => 'products', // post / page
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			
			array (
				// add location rules here
				// tabtrigger acf_group_location_
				// repeat whithin this array for AND rules
				array (
					'param' => 'post_type',
					'operator' => '==', // == / !=
					'value' => 'projects', // post / page
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			
			array (
				// add location rules here
				// tabtrigger acf_group_location_
				// repeat whithin this array for AND rules
				array (
					'param' => 'post_type',
					'operator' => '==', // == / !=
					'value' => 'landing-pages', // post / page
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			
			array (
				// add location rules here
				// tabtrigger acf_group_location_
				// repeat whithin this array for AND rules
				array (
					'param' => 'post_type',
					'operator' => '==', // == / !=
					'value' => 'post', // post / page
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			
			array (
				// add location rules here
				// tabtrigger acf_group_location_
				// repeat whithin this array for AND rules
				array (
					'param' => 'post_type',
					'operator' => '==', // == / !=
					'value' => 'page', // post / page
					'order_no' => 0,
					'group_no' => 0,
				),
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-templates/template-page-builder.php',
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