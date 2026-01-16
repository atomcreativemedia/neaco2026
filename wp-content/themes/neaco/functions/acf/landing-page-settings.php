<?php
if(function_exists("acf_add_local_field_group"))
{
	acf_add_local_field_group(array (
		'key' => 'group_fieldgroup_zT39m869XM5521n',
		'title' => 'Landing Page Settings',
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
				'key' => 'field_tab_tN67h319OM4361h',
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
				'key' => 'field_image_bB13n421LF1392e',
				'label' => 'Main Logo',
				'name' => 'title_page_heading_main_logo',
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
				'key' => 'field_text_mE79z584UI1079x',
				'label' => 'Section ID',
				'name' => 'title_page_heading_section_id',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '20%',
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
				'key' => 'field_image_gJ66n945XH1065s',
				'label' => 'Background Image',
				'name' => 'title_page_heading_background_image',
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
				'return_format' => 'url',
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
				'key' => 'field_colorpicker_pX30f857VG6821z',
				'label' => 'Overlay Colour',
				'name' => 'title_page_heading_overlay_colour',
				'type' => 'color_picker',
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
				// 0,string for hex (eg '#fffaaa')
				// 1,string for rgba string (eg 'rgba(0,0,0,1)')
				// 1,array for rgba value only (eg '0,0,0,1')
				'enable_opacity' => 0,
				'return_format' => 'string',
			),
			array (
				// Generic Field Settings
				'key' => 'field_select_sH68f920TV7027q',
				'label' => 'Overlay Strength',
				'name' => 'title_page_heading_overlay_strength',
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
				'key' => 'field_image_vE11z896RE9612e',
				'label' => 'Foreground Image',
				'name' => 'title_page_heading_foreground_image',
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
				'key' => 'field_colorpicker_kG78f736RT1904q',
				'label' => 'Content Colour',
				'name' => 'title_page_heading_content_colour',
				'type' => 'color_picker',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '50%',
					'class' => '',
					'id' => '',
				),
				'default_value' => '#3b4752',
				
				//Field Type Specific Settings
				// 0,string for hex (eg '#fffaaa')
				// 1,string for rgba string (eg 'rgba(0,0,0,1)')
				// 1,array for rgba value only (eg '0,0,0,1')
				'enable_opacity' => 0,
				'return_format' => 'string',
			),
			array (
				// Generic Field Settings
				'key' => 'field_colorpicker_mK28v121SI9299h',
				'label' => 'Highlight Colour',
				'name' => 'title_page_heading_highlight_colour',
				'type' => 'color_picker',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '50%',
					'class' => '',
					'id' => '',
				),
				'default_value' => '#aac642',
				
				//Field Type Specific Settings
				// 0,string for hex (eg '#fffaaa')
				// 1,string for rgba string (eg 'rgba(0,0,0,1)')
				// 1,array for rgba value only (eg '0,0,0,1')
				'enable_opacity' => 0,
				'return_format' => 'string',
			),
			array (
				// Generic Field Settings
				'key' => 'field_wysiwyg_uX28o274LA1580b',
				'label' => 'Content',
				'name' => 'title_page_content',
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
				'key' => 'field_repeater_eT79w439PJ7049p',
				'label' => 'Bullet Points',
				'name' => 'title_page_content_bullet_points',
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
				'collapsed' => '',
				'min' => '0',
				'max' => '0',
				'layout' => 'table', //table/block/row
				'button_label' => 'Add Bullet Point',
				'sub_fields' => array (
					// add repeater fields here
					array (
						// Generic Field Settings
						'key' => 'field_text_rG20x512DP9524r',
						'label' => 'Bullet Point',
						'name' => 'title_page_content_bullet_points_bullet_point',
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
			
			
			/*********************************/
			/*********************************/
			/* Main Article */
			/*********************************/
			/*********************************/
			array (
				// Generic Field Settings
				'key' => 'field_tab_kM76l724MH2469z',
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
				'key' => 'field_truefalse_gM58d205ZN9055l',
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
				'key' => 'field_text_mA27i232TM9463o',
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
				'key' => 'field_truefalse_jE95p280VT2985d',
				'label' => 'Display Button?',
				'name' => 'main_article_display_button',
				'type' => 'true_false',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array (
					'field' => 'field_truefalse_gM58d205ZN9055l',
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
				'key' => 'field_text_yL88w802XI1765j',
				'label' => 'Button Text',
				'name' => 'main_article_button_text',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array (
					'field' => 'field_truefalse_gM58d205ZN9055l',
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
				'key' => 'field_text_tO81a565HB5060f',
				'label' => 'Button Destination',
				'name' => 'main_article_button_destination',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array (
					'field' => 'field_truefalse_gM58d205ZN9055l',
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
				'key' => 'field_select_sF72l103TE2196x',
				'label' => 'Button Colour',
				'name' => 'main_article_button_colour',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array (
					'field' => 'field_truefalse_gM58d205ZN9055l',
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
			
			
			/*********************************/
			/*********************************/
			/* Call to Action Settings */
			/*********************************/
			/*********************************/
			array (
				// Generic Field Settings
				'key' => 'field_tab_dS69w232VH8841j',
				'label' => 'Call to Action Settings',
				'name' => 'call_to_action_settings',
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
				'key' => 'field_text_pF61h204DR2760y',
				'label' => 'CTA Button Label',
				'name' => 'cta_button_label',
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
				'key' => 'field_select_xY94n483WW1750i',
				'label' => 'CTA Button Colour',
				'name' => 'cta_button_colour',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '33.3%',
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
				'key' => 'field_form_iP33c222HW1661u',
				'label' => 'Form to Use',
				'name' => 'cta_form_to_use',
				'type' => 'forms',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '33.3%',
					'class' => '',
					'id' => '',
				),
				
				//Field Type Specific Settings
				'return_format' => 'post_object', // post_object / id
				'allow_null' => 0,
				'multiple' => 0,
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
					'value' => 'landing-pages', // post / page
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