<?php
if(function_exists("acf_add_local_field_group"))
{
	acf_add_local_field_group(array (
		'key' => 'group_fieldgroup_kU60h305MF6936w',
		'title' => 'Product Settings',
		'fields' => array (
			//insert fields here
			// tabtrigger acf_reg_
			
			array (
				// Generic Field Settings
				'key' => 'field_textarea_oA76b899RE1857x',
				'label' => 'Product Text Snippet',
				'name' => 'product_text_snippet',
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
				'key' => 'field_select_bL26b636OM1040t',
				'label' => 'Page Branding',
				'name' => 'page_branding',
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
					'default' => 'Default (Green)',
					'flooring' => 'Flooring (Light Grey)',
					'industrial' => 'Industrial (Yellow)',
					'balconies' => 'Balconies (Pink)',
					'bathing' => 'Bathing (Blue)',
				),
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 0,
				'ajax' => 0,
				'placeholder' => '',
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
		),
		
		'menu_order' => 10,
		'position' => 'side', // normal / acf_after_title / side
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