<?php

// Create an ACF options page for the Popup settings
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title' => 'Popup Settings',
        'menu_title' => 'Popup Settings',
        'menu_slug'  => 'acf-options-popup-settings',
        'capability' => 'edit_posts',
        'redirect'   => false,
    ));
}

// Register ACF fields for Popup Content Blocks
if(function_exists("acf_add_local_field_group"))
{
	acf_add_local_field_group(array (
		'key' => 'group_fieldgroup_zS54j359QU1626s',
		'title' => 'Promotional Popup',
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
				'key' => 'field_tab_yG52i636MK4362p',
				'label' => 'Content Blocks',
				'name' => 'popup_tab_content_blocks',
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
				'key' => 'field_flexiblecontent_iF67y227OZ2028i',
				'label' => 'Content Blocks',
				'name' => 'popup_content_blocks',
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
					/* Image */
					/*********************************/
					/*********************************/
					'field_layout_qX85d409KW1803k' => array (
						// Generic Field Settings
						'key' => 'field_layout_qX85d409KW1803k',
						'label' => 'Image',
						'name' => 'popup_layout__image',
						'display' => 'block', // table / block / row
						'sub_fields' => array (
							// add subfields here
							array (
								// Generic Field Settings
								'key' => 'field_image_aV52e793YR4543g',
								'label' => 'Image',
								'name' => 'popup_layout__image__image',
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
								'key' => 'field_text_cX41p611PY3581h',
								'label' => 'Link',
								'name' => 'popup_layout__image__link',
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
			/* Settings */
			/*********************************/
			/*********************************/
			array (
				// Generic Field Settings
				'key' => 'field_tab_rS72h765VB5193i',
				'label' => 'Settings',
				'name' => 'popup_tab_settings',
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
				'key' => 'field_group_fZ24l327WP4827p',
				'label' => 'Trigger Settings',
				'name' => 'popup_group__trigger_settings',
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
						'key' => 'field_select_tH35q108WB1377y',
						'label' => 'Trigger Type',
						'name' => 'popup_group__trigger_settings__trigger_type',
						'type' => 'select',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => 'timer',
						
						//Field Type Specific Settings
						'choices' => array(
							'scroll' => 'Scroll Percentage',
							'timer' => 'Timer (Seconds)',
						),
						'allow_null' => 0,
						'multiple' => 0,
						'ui' => 0,
						'ajax' => 0,
						'placeholder' => '',
					),
					array (
						// Generic Field Settings
						'key' => 'field_number_zX15w310RG6565q',
						'label' => 'Trigger on Scroll (%)',
						'name' => 'popup_group__trigger_settings__trigger_on_scroll',
						'type' => 'number',
						'instructions' => 'Trigger the popup after user scrolls a given percentage of the page.',
						'required' => 0,
						'conditional_logic' => array (
							'field' => 'field_select_tH35q108WB1377y',
							'operator' => '==',
							'value' => 'scroll',
						),
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => 20,
						
						//Field Type Specific Settings
						'placeholder' => '',
						'prepend' => '',
						'append' => '%',
						'min' => 0,
						'max' => 100,
						'step' => '',
					),
					array (
						// Generic Field Settings
						'key' => 'field_number_yQ56i551OX9149l',
						'label' => 'Trigger on Timer (seconds)',
						'name' => 'popup_group__trigger_settings__trigger_on_timer',
						'type' => 'number',
						'instructions' => 'Trigger the popup after a given number of seconds.',
						'required' => 0,
						'conditional_logic' => array (
							'field' => 'field_select_tH35q108WB1377y',
							'operator' => '==',
							'value' => 'timer',
						),
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => 8,
						
						//Field Type Specific Settings
						'placeholder' => '',
						'prepend' => '',
						'append' => '(s)',
						'min' => '',
						'max' => '',
						'step' => '',
					),
				),
			),
	        array (
	        	// Generic Field Settings
	        	'key' => 'field_number_bN69i487CW9281s',
	        	'label' => 'Cookie Expiry (hours)',
	        	'name' => 'popup_cookie_expiry',
	        	'type' => 'number',
	        	'instructions' => 'Set the number of hours after which the popup should reappear.',
	        	'required' => 0,
	        	'conditional_logic' => 0,
	        	'wrapper' => array (
	        		'width' => '',
	        		'class' => '',
	        		'id' => '',
	        	),
	        	'default_value' => 48,
	        	
	        	//Field Type Specific Settings
	        	'placeholder' => '',
	        	'prepend' => '',
	        	'append' => '(h)',
	        	'min' => '',
	        	'max' => '',
	        	'step' => '',
	        ),
		),
		
		'location' => array (// repeat this array for OR rules
			array (
				// add location rules here
				// tabtrigger acf_group_location_
				// repeat whithin this array for AND rules
				array (
					'param' => 'options_page',
	                'operator' => '==',
	                'value' => 'acf-options-popup-settings',
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

// Enqueue scripts and styles
function wisely_popup_enqueue_assets() {
    wp_enqueue_script('wisely-popup-js', plugin_dir_url(__FILE__) . 'wisely-popup.js', array('jquery'), '1.0', true);
    wp_enqueue_style('wisely-popup-css', plugin_dir_url(__FILE__) . 'wisely-popup.css');
    
    // Fetch ACF field values (ensure they reference the group properly)
    $cookie_expiry = get_field('popup_cookie_expiry', 'option') ?: 48; // Default to 48 hours
    
    // Fetch group and then individual fields from within the group
    $trigger_settings = get_field('popup_group__trigger_settings', 'option');
    $trigger_type = $trigger_settings['popup_group__trigger_settings__trigger_type'] ?: 'timer'; // Default to 'timer'
    $trigger_scroll = $trigger_settings['popup_group__trigger_settings__trigger_on_scroll'] ?: 20; // Default to 20%
    $trigger_timer = $trigger_settings['popup_group__trigger_settings__trigger_on_timer'] ?: 8; // Default to 8 seconds
    
    // Log ACF values to error_log for debugging
    /*error_log('Cookie Expiry: ' . $cookie_expiry);
    error_log('Trigger Type: ' . $trigger_type);
    error_log('Trigger Scroll: ' . $trigger_scroll);
    error_log('Trigger Timer: ' . $trigger_timer);*/
    
    // Localize the script to pass ACF values to the JS file
    wp_localize_script('wisely-popup-js', 'wiselyPopupSettings', array(
        'cookieExpiry' => $cookie_expiry * 3600 * 1000, // Convert hours to milliseconds
        'triggerType' => $trigger_type,
        'triggerScroll' => $trigger_scroll,
        'triggerTimer' => $trigger_timer * 1000 // Convert seconds to milliseconds
    ));
}
add_action('wp_enqueue_scripts', 'wisely_popup_enqueue_assets');