<?php
if(function_exists("acf_add_local_field_group"))
{
	acf_add_local_field_group(array (
		'key' => 'group_fieldgroup_bV46d137VV4830v',
		'title' => 'Blog Post Header Settings',
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
				'key' => 'field_image_fX91o674SM8998i',
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
			
			
			/*********************************/
			/*********************************/
			/* Main Article */
			/*********************************/
			/*********************************/
			array (
				// Generic Field Settings
				'key' => 'field_tab_mM23w557OS4179u',
				'label' => 'Leading Content',
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
				'default_value' => 'leading-content',
				
				//Field Type Specific Settings
				'placeholder' => 'leading-content',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
				'readonly' => 0,
				'disabled' => 0,
			),
			array (
				// Generic Field Settings
				'key' => 'field_group_pD89u519IV9739q',
				'label' => 'Leading Images',
				'name' => 'main_article_leading_images',
				'type' => 'group',
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
				'sub_fields' => array (
					// add group fields here
					array (
						// Generic Field Settings
						'key' => 'field_image_xS91q858BJ7276y',
						'label' => 'Image 1',
						'name' => 'main_article_image_1',
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
						'key' => 'field_image_tH25o778OJ3355p',
						'label' => 'Image 2',
						'name' => 'main_article_image_2',
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
						'key' => 'field_image_fQ49e494IF1539w',
						'label' => 'Image 3',
						'name' => 'main_article_image_3',
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
					'value' => 'post', // post / page
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