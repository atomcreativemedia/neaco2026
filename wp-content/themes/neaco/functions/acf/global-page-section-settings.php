<?php
if(function_exists("acf_add_local_field_group"))
{
	acf_add_local_field_group(array (
		'key' => 'group_fieldgroup_rO60j255VE7992f',
		'title' => 'Global Page Sections',
		'fields' => array (
			//insert fields here
			// tabtrigger acf_reg_
			
			
			/*********************************/
			/*********************************/
			/* Default Colour Ranges */
			/*********************************/
			/*********************************/
			array (
				// Generic Field Settings
				'key' => 'field_tab_gB34k421UY9523m',
				'label' => 'Default Colour Ranges',
				'name' => 'default_colour_ranges',
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
			
			
			/*array (
				// Generic Field Settings
				'key' => 'field_select_cQ84g577TV5838f',
				'label' => 'Adaptive Bathing: Freedom Colour Range Label Placement',
				'name' => 'adaptive_bathing_freedom_colour_range_label_placement',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
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
				'key' => 'field_repeater_dK74h925WB2419f',
				'label' => 'Adaptive Bathing: Freedom Colour Range',
				'name' => 'adaptive_bathing_freedom_colour_range',
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
				'button_label' => 'Add Colour Option',
				'sub_fields' => array (
					// add repeater fields here
					/*array (
						// Generic Field Settings
						'key' => 'field_truefalse_uS26q625HS3750t',
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
						'key' => 'field_colorpicker_oW32k302GM9310y',
						'label' => 'Colour',
						'name' => 'pb_color_option_colour',
						'type' => 'color_picker',
						'instructions' => '',
						'required' => 0,
						/*'conditional_logic' => array (
							'field' => 'field_truefalse_uS26q625HS3750t',
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
						'key' => 'field_image_lW13e374EG9361g',
						'label' => 'Image',
						'name' => 'pb_color_option_image',
						'type' => 'image',
						'instructions' => '',
						'required' => 0,
						/*'conditional_logic' => array (
							'field' => 'field_truefalse_uS26q625HS3750t',
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
						'key' => 'field_text_aH74u123FX1352d',
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
						'key' => 'field_text_wM62f423BB5433n',
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
						'key' => 'field_select_bI68k647JL1369k',
						'label' => 'Text Colour',
						'name' => 'pb_color_option_text_colour',
						'type' => 'select',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => array (
							'field' => 'field_select_cQ84g577TV5838f',
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
			
			/*array (
				// Generic Field Settings
				'key' => 'field_select_dL26s236FF9913z',
				'label' => 'Adaptive Bathing: Alutec Colour Range Label Placement',
				'name' => 'adaptive_bathing_alutec_colour_range_label_placement',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
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
				'key' => 'field_repeater_nI77z751JD4102y',
				'label' => 'Adaptive Bathing: Alutec Colour Range',
				'name' => 'adaptive_bathing_alutec_colour_range',
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
				'button_label' => 'Add Colour Option',
				'sub_fields' => array (
					// add repeater fields here
					/*array (
						// Generic Field Settings
						'key' => 'field_truefalse_kX43h185IL2219k',
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
						'key' => 'field_colorpicker_vK83i754TV2687f',
						'label' => 'Colour',
						'name' => 'pb_color_option_colour',
						'type' => 'color_picker',
						'instructions' => '',
						'required' => 0,
						/*'conditional_logic' => array (
							'field' => 'field_truefalse_kX43h185IL2219k',
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
						'key' => 'field_image_zM17f855OL2854l',
						'label' => 'Image',
						'name' => 'pb_color_option_image',
						'type' => 'image',
						'instructions' => '',
						'required' => 0,
						/*'conditional_logic' => array (
							'field' => 'field_truefalse_kX43h185IL2219k',
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
						'key' => 'field_text_dN33o426BU9851s',
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
						'key' => 'field_text_fD14x355GK3616t',
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
						'key' => 'field_select_xD49s214TJ3745w',
						'label' => 'Text Colour',
						'name' => 'pb_color_option_text_colour',
						'type' => 'select',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => array (
							'field' => 'field_select_dL26s236FF9913z',
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
			
			/*array (
				// Generic Field Settings
				'key' => 'field_select_kN69v736UG5755t',
				'label' => 'Handrail & Balustrade Colour Range Label Placement',
				'name' => 'handrail_balustrade_colour_range_label_placement',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
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
				'key' => 'field_repeater_lI65h442FF3459b',
				'label' => 'Handrail & Balustrade Colour Range',
				'name' => 'handrail_balustrade_colour_range',
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
				'button_label' => 'Add Colour Option',
				'sub_fields' => array (
					// add repeater fields here
					/*array (
						// Generic Field Settings
						'key' => 'field_truefalse_sA72w674EP3474d',
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
						'key' => 'field_colorpicker_dV52i625GA9559b',
						'label' => 'Colour',
						'name' => 'pb_color_option_colour',
						'type' => 'color_picker',
						'instructions' => '',
						'required' => 0,
						/*'conditional_logic' => array (
							'field' => 'field_truefalse_sA72w674EP3474d',
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
						'key' => 'field_image_dQ54o983ND3611q',
						'label' => 'Image',
						'name' => 'pb_color_option_image',
						'type' => 'image',
						'instructions' => '',
						'required' => 0,
						/*'conditional_logic' => array (
							'field' => 'field_truefalse_sA72w674EP3474d',
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
						'key' => 'field_text_rO27c658GE3228e',
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
						'key' => 'field_text_uA31e916PK7927h',
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
						'key' => 'field_select_lC70s358QC5016y',
						'label' => 'Text Colour',
						'name' => 'pb_color_option_text_colour',
						'type' => 'select',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => array (
							'field' => 'field_select_kN69v736UG5755t',
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
			
			/*array (
				// Generic Field Settings
				'key' => 'field_select_gM40e202PT1620x',
				'label' => 'Flooring Colour Range Label Placement',
				'name' => 'flooring_colour_range_label_placement',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
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
				'key' => 'field_repeater_vS35r179CE6989v',
				'label' => 'Flooring Colour Range',
				'name' => 'flooring_colour_range',
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
				'button_label' => 'Add Colour Option',
				'sub_fields' => array (
					// add repeater fields here
					/*array (
						// Generic Field Settings
						'key' => 'field_truefalse_uS47n200KD5183r',
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
						'key' => 'field_colorpicker_wF94a298NQ9914f',
						'label' => 'Colour',
						'name' => 'pb_color_option_colour',
						'type' => 'color_picker',
						'instructions' => '',
						'required' => 0,
						/*'conditional_logic' => array (
							'field' => 'field_truefalse_uS47n200KD5183r',
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
						'key' => 'field_image_rS95l426QW1386d',
						'label' => 'Image',
						'name' => 'pb_color_option_image',
						'type' => 'image',
						'instructions' => '',
						'required' => 0,
						/*'conditional_logic' => array (
							'field' => 'field_truefalse_uS47n200KD5183r',
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
						'key' => 'field_text_qJ31g769KF2007h',
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
						'key' => 'field_text_pP64n353EY7187h',
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
						'key' => 'field_select_wD62r359JQ6398d',
						'label' => 'Text Colour',
						'name' => 'pb_color_option_text_colour',
						'type' => 'select',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => array (
							'field' => 'field_select_gM40e202PT1620x',
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
			
			
			/*********************************/
			/*********************************/
			/* Companies Section */
			/*********************************/
			/*********************************/
			array (
				// Generic Field Settings
				'key' => 'field_tab_sP91m692QO3657a',
				'label' => 'Companies Section',
				'name' => 'companies_section',
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
				'key' => 'field_wysiwyg_sZ38n901AH8329e',
				'label' => 'Companies Introduction',
				'name' => 'companies_introduction',
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
				'key' => 'field_repeater_mI49h103UX1833c',
				'label' => 'Companies',
				'name' => 'companies',
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
						'key' => 'field_image_nR57b377VV2265r',
						'label' => 'Logo Image',
						'name' => 'logo_image',
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
			/* Accreditations Section */
			/*********************************/
			/*********************************/
			array (
				// Generic Field Settings
				'key' => 'field_tab_zK53h787OK7632u',
				'label' => 'Accreditations Section',
				'name' => 'accreditations_section',
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
				'key' => 'field_repeater_uC22k537PK2138x',
				'label' => 'Accreditations',
				'name' => 'accreditations',
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
						'key' => 'field_image_iF37e170JN9976j',
						'label' => 'Logo Image',
						'name' => 'logo_image',
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
						'key' => 'field_text_xB19n635ZD3152e',
						'label' => 'Link',
						'name' => 'link',
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
				'key' => 'field_tab_qK88f719YB9277i',
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
				'key' => 'field_wysiwyg_oS34f735HZ7578u',
				'label' => 'Newsletter Introduction',
				'name' => 'newsletter_introduction',
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
				'key' => 'field_form_xN70t499EJ5854n',
				'label' => 'Newsletter Form ID',
				'name' => 'newsletter_form_id',
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
			array (
				// Generic Field Settings
				'key' => 'field_tab_jW10i205QS2401w',
				'label' => 'Contact Section (Page Builder)',
				'name' => 'contact_section_page_builder',
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
				'key' => 'field_wysiwyg_qL87f826GP5417w',
				'label' => 'Contact Section Introduction',
				'name' => 'contact_section_introduction',
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
				'key' => 'field_form_lX15s204PS4042o',
				'label' => 'Form to Use',
				'name' => 'contact_section_form_to_use',
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
			array (
				// Generic Field Settings
				'key' => 'field_checkbox_lC10o495ZD8129i',
				'label' => 'Display Departments',
				'name' => 'contact_section_display_departments',
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
			
			
			/*********************************/
			/*********************************/
			/* Member Bookings */
			/*********************************/
			/*********************************/
			array (
				// Generic Field Settings
				'key' => 'field_tab_nX30v292EE3918g',
				'label' => 'Member Bookings',
				'name' => 'member_bookings',
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
				'key' => 'field_wysiwyg_lN60k603NV8112b',
				'label' => 'Member Bookings Introduction',
				'name' => 'member_bookings_introduction',
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
				'key' => 'field_gravityform_yU14b544GB4010q',
				'label' => 'Form to Use',
				'name' => 'member_bookings_form_to_use',
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
		),
		
		'location' => array (
		
			// repeat this array for OR rules
			array (
				// add location rules here
				// tabtrigger acf_group_location_
				// repeat whithin this array for AND rules
				array (
					'param' => 'options_page',
					'operator' => '==', // == / !=
					'value' => 'acf-options-global-page-sections',
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