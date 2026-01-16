<?php
if(function_exists("acf_add_local_field_group"))
{
	acf_add_local_field_group(array (
		'key' => 'group_fieldgroup_oK62g574IY2791j',
		'title' => 'NeacoBox Post Settings',
		'fields' => array (
			//insert fields here
			// tabtrigger acf_reg_
			
			array (
				// Generic Field Settings
				'key' => 'field_text_mF36i321KV6577l',
				'label' => 'Gallery ID',
				'name' => 'neacobox_gallery_id',
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
				'key' => 'field_repeater_gY29s522EO4364e',
				'label' => 'Gallery',
				'name' => 'rp__neacobox_gallery',
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
						'key' => 'field_image_iU82z634OP2647q',
						'label' => 'Image',
						'name' => 'rp__neacobox_gallery__item__image',
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
						'key' => 'field_textarea_lJ90b284FR9024u',
						'label' => 'Caption',
						'name' => 'rp__neacobox_gallery__item__caption',
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
		),
		
		'location' => array (// repeat this array for OR rules
			array (
				// add location rules here
				// tabtrigger acf_group_location_
				// repeat whithin this array for AND rules
				array (
					'param' => 'post_type',
					'operator' => '==', // == / !=
					'value' => 'neacobox', // post / page
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		
		'menu_order' => 10,
		'position' => 'normal', // normal / acf_after_title / side
		'style' => 'default', // default / seamless
		'label_placement' => 'top', // top / left
		'instruction_placement' => 'label', // label / field
		'hide_on_screen' => array (
			0 => 'permalink',
			1 => 'the_content',
			2 => 'excerpt',
			3 => 'discussion',
			4 => 'comments',
			5 => 'revisions',
			6 => 'slug',
			7 => 'author',
			8 => 'format',
			9 => 'page_attributes',
			10 => 'featured_image',
			11 => 'categories',
			12 => 'tags',
			13 => 'send-trackbacks',
		),
		'active' => true,
		'description' => '',
	));
}