<?php
if(function_exists("acf_add_local_field_group"))
{
	acf_add_local_field_group(array (
		'key' => 'group_fieldgroup_bZ36u743WD9455r',
		'title' => 'Website Settings',
		'fields' => array (
			//insert fields here
			// tabtrigger acf_reg_
			array (
				// Generic Field Settings
				'key' => 'field_tab_rW40d253MR6745c',
				'label' => 'Business Information',
				'name' => 'business_information',
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
				'key' => 'field_text_zM69n267BK1743y',
				'label' => 'Business Name',
				'name' => 'business_name',
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
				'key' => 'field_text_sV93l859EV4580v',
				'label' => 'Primary Contact Number',
				'name' => 'contact_number',
				'type' => 'text',
				'instructions' => 'This is your main number, and will be displayed in the top bar (if enabled).',
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
				'key' => 'field_fontawesome_cN68x859RM8138b',
				'label' => 'Primary Contact Number Icon',
				'name' => 'primary_contact_number_icon',
				'type' => 'font-awesome',
				'instructions' => '&nbsp;',
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
					//0 => 'solid',
					//1 => 'regular',
					2 => 'light',
					//3 => 'thin',
					//4 => 'brands',
				),
				'custom_icon_set' => '',
				'default_label' => '',
				'default_value' => '{
					"style" : "light",
					"id" : "phone-flip",
					"label" : "Phone flip"
				}',
				'save_format' => 'element', // element, class, unicode or object
				'allow_null' => 0,
				'show_preview' => 0,
				'enqueue_fa' => 0,
				'fa_live_preview' => '',
				'choices' => array (
				),
			),
			array (
				// Generic Field Settings
				'key' => 'field_text_nJ89x643NQ4388g',
				'label' => 'Primary Email Address',
				'name' => 'email_address',
				'type' => 'text',
				'instructions' => 'This is your main email address, and will be displayed in the top bar (if enabled).',
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
				'key' => 'field_fontawesome_bQ24z164UL9322j',
				'label' => 'Primary Email Address Icon',
				'name' => 'primary_email_address_icon',
				'type' => 'font-awesome',
				'instructions' => '&nbsp;',
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
					//0 => 'solid',
					//1 => 'regular',
					2 => 'light',
					//3 => 'thin',
					//4 => 'brands',
				),
				'custom_icon_set' => '',
				'default_label' => '',
				'default_value' => '{
					"style" : "light",
					"id" : "envelope",
					"label" : "Envelope"
				}',
				'save_format' => 'element', // element, class, unicode or object
				'allow_null' => 0,
				'show_preview' => 0,
				'enqueue_fa' => 0,
				'fa_live_preview' => '',
				'choices' => array (
				),
			),
			array (
				// Generic Field Settings
				'key' => 'field_text_xN95y161BV3010o',
				'label' => 'Address Line 1',
				'name' => 'address_line_1',
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
				'placeholder' => 'Address Line 1',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
				'readonly' => 0,
				'disabled' => 0,
			),
			array (
				// Generic Field Settings
				'key' => 'field_text_eB28l265BH9836g',
				'label' => 'Address Line 2',
				'name' => 'address_line_2',
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
				'placeholder' => 'Address Line 2',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
				'readonly' => 0,
				'disabled' => 0,
			),
			array (
				// Generic Field Settings
				'key' => 'field_text_rU85n590KK9623t',
				'label' => 'Town/City',
				'name' => 'town_city',
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
				'placeholder' => 'Town/City',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
				'readonly' => 0,
				'disabled' => 0,
			),
			array (
				// Generic Field Settings
				'key' => 'field_text_mL87o751DY9750r',
				'label' => 'County',
				'name' => 'county',
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
				'placeholder' => 'County',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
				'readonly' => 0,
				'disabled' => 0,
			),
			array (
				// Generic Field Settings
				'key' => 'field_text_aB23x166WH7540x',
				'label' => 'Postcode',
				'name' => 'postcode',
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
				'placeholder' => 'Postcode',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
				'readonly' => 0,
				'disabled' => 0,
			),
			array (
				// Generic Field Settings
				'key' => 'field_text_oV86l962JM3149g',
				'label' => 'Link to Maps',
				'name' => 'link_to_maps',
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
				'key' => 'field_repeater_zS62x528JA9817o',
				'label' => 'Company Departments',
				'name' => 'company_departments',
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
				'button_label' => 'Add Department',
				'sub_fields' => array (
					// add repeater fields here
					array (
						// Generic Field Settings
						'key' => 'field_text_pC50e954OX4168c',
						'label' => 'Department Name',
						'name' => 'department_name',
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
						'key' => 'field_text_pC50e954OX4168c',
						'label' => 'Department Name',
						'name' => 'department_name',
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
						'key' => 'field_text_eO70p573AM8437i',
						'label' => 'Contact Number',
						'name' => 'department_contact_number',
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
						'key' => 'field_text_cW98a891UZ9949n',
						'label' => 'Email Address',
						'name' => 'department_email_address',
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
			/* Social Media */
			/*********************************/
			/*********************************/
			array (
				// Generic Field Settings
				'key' => 'field_tab_qC94b403UM2914n',
				'label' => 'Social Media',
				'name' => 'social_media',
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
				'key' => 'field_repeater_uB57u557YI5246h',
				'label' => 'Social Media Profiles',
				'name' => 'social_media_profiles',
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
				'button_label' => 'Add Profile',
				'sub_fields' => array (
					// add repeater fields here
					array (
						// Generic Field Settings
						'key' => 'field_text_aK77m473AG8075w',
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
					array (
						// Generic Field Settings
						'key' => 'field_fontawesome_kT97k153XB5220t',
						'label' => 'Icon',
						'name' => 'icon',
						'type' => 'font-awesome',
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
						'save_format' => 'element',
						'allow_null' => 0,
						'show_preview' => 0,
						'enqueue_fa' => 0,
						'default_value' => '',
						'fa_live_preview' => '',
						'choices' => array (
						),
					),
				),
				'row_min' => '',
				'row_limit' => '',
			),
			
			array (
				// Generic Field Settings
				'key' => 'field_tab_sK40o194JA9147m',
				'label' => 'Branding',
				'name' => 'branding',
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
				'key' => 'field_image_iG76i523UI4732a',
				'label' => 'Header Logo',
				'name' => 'header_logo',
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
				'key' => 'field_image_mK65t869GX9538x',
				'label' => 'Footer Logo',
				'name' => 'footer_logo',
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
				'key' => 'field_image_nF98b237JP2170u',
				'label' => 'Menu Logo',
				'name' => 'menu_drawer_logo',
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
				'key' => 'field_image_qA34d556FM6377e',
				'label' => 'Search Form Logo',
				'name' => 'search_form_logo',
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
				'key' => 'field_image_iI42o672EY8173l',
				'label' => 'Order Form Logo',
				'name' => 'order_form_logo',
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
				'key' => 'field_image_nU73z964BD7322v',
				'label' => 'Member Drawer Logo',
				'name' => 'member_drawer_logo',
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
			
			
			/*********************************/
			/*********************************/
			/* Header & Top Bar */
			/*********************************/
			/*********************************/
			array (
				// Generic Field Settings
				'key' => 'field_tab_cZ64z496DA5598p',
				'label' => 'Header & Top Bar',
				'name' => 'header_top_bar',
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
				'key' => 'field_truefalse_yU57y775VH3225q',
				'label' => 'Display Top Bar?',
				'name' => 'display_top_bar',
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
			/*array (
				// Generic Field Settings
				'key' => 'field_text_pQ63r789JA2457d',
				'label' => 'NBS Link',
				'name' => 'top_bar_nbs_link',
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
				'placeholder' => 'https://',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
				'readonly' => 0,
				'disabled' => 0,
			),*/
			array (
				// Generic Field Settings
				'key' => 'field_text_dD32p205WW9958c',
				'label' => 'Spec Builder Link',
				'name' => 'top_bar_spec_builder_link',
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
				'key' => 'field_text_dW76f333BL1151a',
				'label' => 'Latest News Link',
				'name' => 'top_bar_latest_news_link',
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
				'key' => 'field_truefalse_sD84j880LK5062p',
				'label' => 'Enable Order Form',
				'name' => 'enable_order_form',
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
				'key' => 'field_gravityform_tU14a988LA4885s',
				'label' => 'Order Form',
				'name' => 'top_bar_order_form',
				'type' => 'forms',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array (
					'field' => 'field_truefalse_sD84j880LK5062p',
					'operator' => '==',
					'value' => 1,
				),
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
			
			/*********************************/
			/*********************************/
			/* Account Registration */
			/*********************************/
			/*********************************/
			array (
				// Generic Field Settings
				'key' => 'field_tab_gH14i329BK1201z',
				'label' => 'Account Registration',
				'name' => 'account_registration',
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
				'key' => 'field_pagelink_hK80j666MG6760w',
				'label' => 'Account Registration Page',
				'name' => 'account_registration_page',
				'type' => 'page_link',
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
				'post_type' => '',
				'taxonomy' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				// Generic Field Settings
				'key' => 'field_gravityform_zU55l520RY5277p',
				'label' => 'Account Registration Form',
				'name' => 'account_registration_form',
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
			
			
			/*********************************/
			/*********************************/
			/* Careers Departments */
			/*********************************/
			/*********************************/
			array (
				// Generic Field Settings
				'key' => 'field_tab_tK18z674PA4661g',
				'label' => 'Careers Departments',
				'name' => 'careers_departments',
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
				'key' => 'field_gravityform_hE44t991LZ7918g',
				'label' => 'Default (Fallback) Application Form',
				'name' => 'default_fallback_application_form',
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
				'key' => 'field_repeater_iA40q997WX2071r',
				'label' => 'Careers Departments',
				'name' => 'careers_departments',
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
				'button_label' => 'Add Department',
				'sub_fields' => array (
					// add repeater fields here
					array (
						// Generic Field Settings
						'key' => 'field_text_pE40h363NX3273n',
						'label' => 'Department Name',
						'name' => 'department_name',
						'type' => 'text',
						'instructions' => 'Enter a department name. This will be shown on the frontend.',
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
						'key' => 'field_text_tL98x710VD8236v',
						'label' => 'Department Name (Value)',
						'name' => 'department_name_value',
						'type' => 'text',
						'instructions' => 'This is important for the post filtering - no spaces or special characters, and must be unique!',
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
						'key' => 'field_gravityform_nT72t898HS5182f',
						'label' => 'Application Form',
						'name' => 'application_form',
						'type' => 'forms',
						'instructions' => 'Select a contact form that will be used for the application process.',
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
			),
			
			
			
			
			/*********************************/
			/*********************************/
			/* Footer */
			/*********************************/
			/*********************************/
			array (
				// Generic Field Settings
				'key' => 'field_tab_gZ92l616EJ1340s',
				'label' => 'Footer',
				'name' => 'footer',
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
				'key' => 'field_taxonomy_hV14d441HI1536a',
				'label' => 'Footer Menu 1',
				'name' => 'footer_menu_1',
				'type' => 'taxonomy',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '25%',
					'class' => '',
					'id' => '',
				),
				//Field Type Specific Settings
				'taxonomy' => 'product_category',
				'field_type' => 'select',
				'allow_null' => 0,
				'add_term' => 0,
				'save_terms' => 0,
				'load_terms' => 0,
				'return_format' => 'object',
				'multiple' => 0,
			),
			array (
				// Generic Field Settings
				'key' => 'field_taxonomy_mZ22o521PC9539j',
				'label' => 'Footer Menu 2',
				'name' => 'footer_menu_2',
				'type' => 'taxonomy',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '25%',
					'class' => '',
					'id' => '',
				),
				//Field Type Specific Settings
				'taxonomy' => 'product_category',
				'field_type' => 'select',
				'allow_null' => 0,
				'add_term' => 0,
				'save_terms' => 0,
				'load_terms' => 0,
				'return_format' => 'object',
				'multiple' => 0,
			),
			array (
				// Generic Field Settings
				'key' => 'field_taxonomy_eX44e303UO6059a',
				'label' => 'Footer Menu 3',
				'name' => 'footer_menu_3',
				'type' => 'taxonomy',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '25%',
					'class' => '',
					'id' => '',
				),
				//Field Type Specific Settings
				'taxonomy' => 'product_category',
				'field_type' => 'select',
				'allow_null' => 0,
				'add_term' => 0,
				'save_terms' => 0,
				'load_terms' => 0,
				'return_format' => 'object',
				'multiple' => 0,
			),
			array (
				// Generic Field Settings
				'key' => 'field_taxonomy_wL52r957ZD8495p',
				'label' => 'Footer Menu 4',
				'name' => 'footer_menu_4',
				'type' => 'taxonomy',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '25%',
					'class' => '',
					'id' => '',
				),
				//Field Type Specific Settings
				'taxonomy' => 'product_category',
				'field_type' => 'select',
				'allow_null' => 0,
				'add_term' => 0,
				'save_terms' => 0,
				'load_terms' => 0,
				'return_format' => 'object',
				'multiple' => 0,
			),
			
			/*********************************/
			/*********************************/
			/* NeacoBox Import */
			/*********************************/
			/*********************************/
			/*array (
				// Generic Field Settings
				'key' => 'field_tab_gU24x873GR3255v',
				'label' => 'NeacoBox Import',
				'name' => 'neacobox_import',
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
				'key' => 'field_textarea_uG39o693RD1349c',
				'label' => 'Import XML',
				'name' => 'neacobox_import_xml',
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
				'rows' => 30,
				'new_lines' => '', // empty / wpautop / br
				'readonly' => 0,
				'disabled' => 0,
			),*/
		),
		
		'location' => array (
			array (
				// add location rules here
				// tabtrigger acf_group_location_
				array (
					'param' => 'options_page',
					'operator' => '==', // == / !=
					'value' => 'acf-options-website-settings',
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