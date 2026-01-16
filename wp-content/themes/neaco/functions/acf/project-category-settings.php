<?php

if(function_exists("acf_add_local_field_group"))
{
	acf_add_local_field_group(array (
		'key' => 'group_fieldgroup_zN90t978XT6919y',
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
				'key' => 'field_tab_iL10m977CT7813t',
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
				'key' => 'field_image_kR72e111OJ5332h',
				'label' => 'Background Image',
				'name' => 'title_page_heading_background_image',
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
				'key' => 'field_colorpicker_wR90i384GN7787s',
				'label' => 'Overlay Strength',
				'name' => 'title_page_heading_overlay_strength',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '25%',
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
				'key' => 'field_select_zZ55n834TT6538s',
				'label' => 'Section Padding',
				'name' => 'title_page_heading_section_padding',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '25%',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'medium',
				
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
				'key' => 'field_select_bG79r418NQ2872q',
				'label' => 'Content Alignment',
				'name' => 'title_page_heading_content_alignment',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '25%',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'text-center',
				
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
				'key' => 'field_text_bW91b654HB3329y',
				'label' => 'Category Title (if different from main title)',
				'name' => 'title_page_range_title',
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
				'key' => 'field_wysiwyg_hB86s390RX5861l',
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
			
			/*********************************/
			/*********************************/
			/* Description */
			/*********************************/
			/*********************************/
			array (
				// Generic Field Settings
				'key' => 'field_tab_iN74p273LT5522h',
				'label' => 'Description',
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
				'key' => 'field_wysiwyg_lU88s243RV5544v',
				'label' => 'Description',
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
			/* Schema Markup */
			/*********************************/
			/*********************************/
			array (
				// Generic Field Settings
				'key' => 'field_tab_kH11u386IM1913f',
				'label' => 'Schema Markup',
				'name' => 'projcat_schema_markup__tab',
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
				'key' => 'field_textarea_kT43y861AI2289z',
				'label' => 'JSON-LD Schema Markup',
				'name' => 'projcat_json_ld_schema_markup',
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
					'param' => 'taxonomy',
					'operator' => '==', // == / !=
					'value' => 'project_category', // front_page / posts_page / top_level / parent / child
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