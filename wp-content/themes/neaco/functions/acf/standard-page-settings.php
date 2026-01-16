<?php
if(function_exists("acf_add_local_field_group"))
{
	acf_add_local_field_group(array (
		'key' => 'group_fieldgroup_iP31e683SE7223r',
		'title' => 'Standard Page Settings',
		'fields' => array (
			//insert fields here
			// tabtrigger acf_reg_
			
			
			/*********************************/
			/*********************************/
			/* Title/Page Heading */
			/*********************************/
			/*********************************/
			array (
				// Generic Field Settings
				'key' => 'field_tab_jV48d949TL3559w',
				'label' => 'Title/Page Heading',
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
				'key' => 'field_text_iI75c469PE7335y',
				'label' => 'Section ID',
				'name' => 'title_page_heading_section_id',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '100%',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'page-heading',
				
				//Field Type Specific Settings
				'placeholder' => 'page-heading',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
				'readonly' => 0,
				'disabled' => 0,
			),
			array (
				// Generic Field Settings
				'key' => 'field_select_hV16v739KO7920w',
				'label' => 'Background Type',
				'name' => 'title_page_heading_background_type',
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
				'key' => 'field_image_fX91o674SM8998i',
				'label' => 'Background Image',
				'name' => 'title_page_heading_background_image',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array (
					'field' => 'field_select_hV16v739KO7920w',
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
				'key' => 'field_file_nN64v766GJ7814s',
				'label' => 'Background Video (WEBM)',
				'name' => 'title_page_heading_background_video_webm',
				'type' => 'file',
				'instructions' => '.webm filetype only please!',
				'required' => 0,
				'conditional_logic' => array (
					'field' => 'field_select_hV16v739KO7920w',
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
				'key' => 'field_file_kY70m817YT7690p',
				'label' => 'Background Video (MP4)',
				'name' => 'title_page_heading_background_video_mp4',
				'type' => 'file',
				'instructions' => '.mp4 filetype only please!',
				'required' => 0,
				'conditional_logic' => array (
					'field' => 'field_select_hV16v739KO7920w',
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
				'key' => 'field_truefalse_mJ66t903FJ9754j',
				'label' => 'Enable Simple Heading?',
				'name' => 'title_page_heading_enable_simple_heading',
				'type' => 'true_false',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array (
					'field' => 'field_select_hV16v739KO7920w',
					'operator' => '!=',
					'value' => 'video',
				),
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
				'key' => 'field_text_qP34j933WP4199m',
				'label' => 'Simple Heading Text',
				'name' => 'title_page_heading_simple_heading_text',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array (
					'field' => 'field_truefalse_mJ66t903FJ9754j',
					'operator' => '==',
					'value' => '1',
				),
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
				'key' => 'field_colorpicker_dF28e890GO3549n',
				'label' => 'Overlay Strength',
				'name' => 'title_page_heading_overlay_strength',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array (
					'field' => 'field_truefalse_mJ66t903FJ9754j',
					'operator' => '!=',
					'value' => '1',
				),
				'wrapper' => array (
					'width' => '33%',
					'class' => '',
					'id' => '',
				),
				'default_value' => '0.55',
				
				//Field Type Specific Settings
				'choices' => array(
					'0' => 'No Overlay',
					'0.05' => '5%',
					'0.1' => '10%',
					'0.15' => '15%',
					'0.2' => '20%',
					'0.25' => '25%',
					'0.3' => '30%',
					'0.35' => '35%',
					'0.4' => '40%',
					'0.45' => '45%',
					'0.5' => '50%',
					'0.55' => '55%',
					'0.6' => '60%',
					'0.65' => '65%',
					'0.7' => '70%',
					'0.75' => '75%',
					'0.8' => '80%',
					'0.85' => '85%',
					'0.9' => '90%',
					'0.95' => '95%',
					'1' => 'Solid',
				),
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 0,
				'ajax' => 0,
				'placeholder' => '',
			),
			array (
				// Generic Field Settings
				'key' => 'field_select_vE35r886ZX5420f',
				'label' => 'Section Padding',
				'name' => 'title_page_heading_section_padding',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array (
					'field' => 'field_truefalse_mJ66t903FJ9754j',
					'operator' => '!=',
					'value' => '1',
				),
				'wrapper' => array (
					'width' => '33%',
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
				),
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 0,
				'ajax' => 0,
				'placeholder' => '',
			),
			array (
				// Generic Field Settings
				'key' => 'field_select_sH59j401PP3317z',
				'label' => 'Content Alignment',
				'name' => 'title_page_heading_content_alignment',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array (
					'field' => 'field_truefalse_mJ66t903FJ9754j',
					'operator' => '!=',
					'value' => '1',
				),
				'wrapper' => array (
					'width' => '34%',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'text-start',
				
				//Field Type Specific Settings
				'choices' => array (
					'text-start' => 'Left',
					'text-center' => 'Centre',
					'text-end' => 'Right',
				),
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 0,
				'ajax' => 0,
				'placeholder' => '',
			),
			array (
				// Generic Field Settings
				'key' => 'field_wysiwyg_jG46k207MZ7279m',
				'label' => 'Content',
				'name' => 'title_page_content',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array (
					'field' => 'field_truefalse_mJ66t903FJ9754j',
					'operator' => '!=',
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
			array (
				// Generic Field Settings
				'key' => 'field_repeater_uK26h370CM2597h',
				'label' => 'Buttons',
				'name' => 'title_page_heading_buttons',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array (
					'field' => 'field_truefalse_mJ66t903FJ9754j',
					'operator' => '!=',
					'value' => '1',
				),
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
						'key' => 'field_text_cS90z388FO5334n',
						'label' => 'Button Text',
						'name' => 'title_page_heading_buttons_button_text',
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
						'key' => 'field_text_hH62w774DL8864f',
						'label' => 'Button Destination',
						'name' => 'title_page_heading_buttons_button_destination',
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
						'key' => 'field_select_zX80h389JG7588y',
						'label' => 'Button Colour',
						'name' => 'title_page_heading_buttons_button_colour',
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
			/* Slides */
			/*********************************/
			/*********************************/
			array (
				// Generic Field Settings
				'key' => 'field_tab_pK50y307IL1341g',
				'label' => 'Slides',
				'name' => 'title_page_heading_slides',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array (
					array (
						array (
							'field' => 'field_select_hV16v739KO7920w',
							'operator' => '!=',
							'value' => 'video',
						),
						array (
							'field' => 'field_truefalse_mJ66t903FJ9754j',
							'operator' => '!=',
							'value' => '1',
						),
					),
				),
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
				'key' => 'field_message_aX23i492OG1920q',
				'label' => 'Enabling Slides',
				'name' => 'enabling_slides',
				'type' => 'message',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array (
					array (
						array (
							'field' => 'field_select_hV16v739KO7920w',
							'operator' => '!=',
							'value' => 'video',
						),
						array (
							'field' => 'field_truefalse_mJ66t903FJ9754j',
							'operator' => '!=',
							'value' => '1',
						),
					),
				),
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				
				//Field Type Specific Settings
				
				'message' => 'Adding a slide here will change the static heading area into a slider, with the content in the "Title/Page" Heading tab as the first slide.',
				
				'new_lines' => 'wpautop',
					// 'wpautop' = automatically add paragraphs
					// 'br' = automatically add <br>
					// '' = no formatting
					
				'esc_html' => 0,
			),
			array (
				// Generic Field Settings
				'key' => 'field_repeater_pX61v766MW1936n',
				'label' => 'Slides',
				'name' => 'title_page_heading_slide_slides',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array (
					array (
						array (
							'field' => 'field_select_hV16v739KO7920w',
							'operator' => '!=',
							'value' => 'video',
						),
						array (
							'field' => 'field_truefalse_mJ66t903FJ9754j',
							'operator' => '!=',
							'value' => '1',
						),
					),
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
				'layout' => 'row', //table/block/row
				'button_label' => 'Add Slide',
				'sub_fields' => array (
					// add repeater fields here
					array (
						// Generic Field Settings
						'key' => 'field_image_hA86f579GB3810f',
						'label' => 'Background Image',
						'name' => 'title_page_heading_slide_background_image',
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
			/* Main Article */
			/*********************************/
			/*********************************/
			array (
				// Generic Field Settings
				'key' => 'field_tab_mM23w557OS4179u',
				'label' => 'Main Article',
				'name' => 'main_article',
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
				'key' => 'field_truefalse_rM50n729PV1055q',
				'label' => 'Display Main Article?',
				'name' => 'main_article_display_main_article',
				'type' => 'true_false',
				'instructions' => '(Not applicable to News page)',
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
				'key' => 'field_text_nQ26q632JJ4598g',
				'label' => 'Section ID',
				'name' => 'main_article_section_id',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '75%',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'main-article',
				
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
				'key' => 'field_truefalse_eD55s622WT7843h',
				'label' => 'Display Button?',
				'name' => 'main_article_display_button',
				'type' => 'true_false',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array (
					'field' => 'field_truefalse_rM50n729PV1055q',
					'operator' => '==',
					'value' => '1',
				),
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
				'key' => 'field_text_kV58f885LC3756p',
				'label' => 'Button Text',
				'name' => 'main_article_button_text',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array (
					'field' => 'field_truefalse_rM50n729PV1055q',
					'operator' => '==',
					'value' => '1',
				),
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
				'key' => 'field_text_dR87k681NP9119u',
				'label' => 'Button Destination',
				'name' => 'main_article_button_destination',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array (
					'field' => 'field_truefalse_rM50n729PV1055q',
					'operator' => '==',
					'value' => '1',
				),
				'wrapper' => array (
					'width' => '25%',
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
				'key' => 'field_select_kE42g539YB2033b',
				'label' => 'Button Colour',
				'name' => 'main_article_button_colour',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array (
					'field' => 'field_truefalse_rM50n729PV1055q',
					'operator' => '==',
					'value' => '1',
				),
				'wrapper' => array (
					'width' => '25%',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'grey-green',
				
				//Field Type Specific Settings
				'choices' => array(
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
			array (
				// Generic Field Settings
				'key' => 'field_select_sO38c755OT2306y',
				'label' => 'Content Alignment (Mobile)',
				'name' => 'main_article_content_alignment_mobile',
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
				'key' => 'field_select_aF93x399DB9611o',
				'label' => 'Content Alignment (Desktop)',
				'name' => 'main_article_content_alignment_desktop',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '50%',
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
			
			/*********************************/
			/*********************************/
			/* Newsletter Section */
			/*********************************/
			/*********************************/
			array (
				// Generic Field Settings
				'key' => 'field_tab_dG58t720XH5565p',
				'label' => 'Newsletter Section',
				'name' => 'newsletter_section',
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
				'key' => 'field_truefalse_vI45a175LU8681f',
				'label' => 'Display Newsletter Section?',
				'name' => 'display_newsletter_section',
				'type' => 'true_false',
				'instructions' => '(Not applicable to News page)',
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
				'key' => 'field_text_yF40g528NP8150a',
				'label' => 'Section ID',
				'name' => 'newsletter_section_id',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '75%',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'newsletter-section',
				
				//Field Type Specific Settings
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
				'readonly' => 0,
				'disabled' => 0,
			),
			
			
			/*********************************/
			/*********************************/
			/* Schema Markup */
			/*********************************/
			/*********************************/
			array (
				// Generic Field Settings
				'key' => 'field_tab_aX36t201ZD3878f',
				'label' => 'Schema Markup',
				'name' => 'schema_markup__tab',
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
				'key' => 'field_textarea_hP12a106YD5093w',
				'label' => 'JSON-LD Schema Markup',
				'name' => 'json_ld_schema_markup',
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
		),
		
		'location' => array (
			
			// repeat this array for OR rules
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
			),
			
			// repeat this array for OR rules
			/*array (
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
			),*/
			
			// repeat this array for OR rules
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
			
			// repeat this array for OR rules
			array (
				// add location rules here
				// tabtrigger acf_group_location_
				// repeat whithin this array for AND rules
				array (
					'param' => 'post_type',
					'operator' => '==', // == / !=
					'value' => 'careers', // post / page
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			
			// repeat this array for OR rules
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
		),
		
		'menu_order' => 0,
		'position' => 'acf_after_title', // normal / acf_after_title / side
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