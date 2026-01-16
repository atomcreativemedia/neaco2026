<?php
/*
	Plugin Name: Neaco User Roles
	Version: 1.0
	Description: Plugin for managing custom user roles on Neaco website.
	Author: Atom Creative Media
	Author URI: https://www.atomcreativemedia.com/
	License: GPLv2 or later
	Text Domain: neaco-user-roles
*/


/* Add User Roles */
function add_custom_user_roles() {
	
	// Neaco Member Role
	add_role( 'neaco_member', __('Member'), array(
		'read' => false
	));
	
	// Content Manager Role
	add_role('content_manager', 'Content Manager', array(
		'read' => true,
		
		// Posts & Pages
		'edit_posts' => true,
		'edit_others_posts' => true,
		'publish_posts' => true,
		'read_private_posts' => true,
		'delete_posts' => true,
		'delete_others_posts' => true,
		'edit_published_posts' => true,
		'delete_published_posts' => true,
		'upload_files' => true,
		'edit_pages' => true,
		'edit_others_pages' => true,
		'publish_pages' => true,
		'delete_pages' => true,
		'delete_others_pages' => true,
		'edit_published_pages' => true,
		'delete_published_pages' => true,
		'read_private_pages' => true,
		
		// Menus
		'edit_theme_options' => true,
		
		// Categories and tags
		'manage_categories' => true,
		
		// Full User Management Access
		'list_users' => false,
		'edit_users' => false,
		'create_users' => false,
		'delete_users' => false,
		'promote_users' => true,
		
		'gravityforms_userregistration' => true,
		'gravityforms_edit_settings' => true,
		'gravityforms_view_entries' => true,
		
		'unfiltered_html' => true,
	));
	
}
register_activation_hook( __FILE__, 'add_custom_user_roles' );

function add_custom_user_caps() {
	$neaco_member_role = get_role( 'neaco_member' );
}
register_activation_hook( __FILE__ , 'add_custom_user_caps');


/* Remove User Role Capabilities */
function remove_custom_user_caps() {
	$role = get_role( 'neaco_member' );
	$role->remove_cap( 'read' );
	
}
register_activation_hook( __FILE__ , 'remove_custom_user_caps');

function restrict_appearance_access_for_content_manager() {
	if (!current_user_can('content_manager')) {
		return;
	}

	// Remove unwanted Appearance submenus
	remove_submenu_page('themes.php', 'themes.php');           // Themes
	remove_submenu_page('themes.php', 'customize.php');        // Customise
	remove_submenu_page('themes.php', 'widgets.php');          // Widgets
	remove_submenu_page('themes.php', 'theme-editor.php');     // Theme File Editor
	remove_submenu_page('themes.php', 'site-editor.php');      // Full Site Editor

	// Remove Patterns (CPT UI entry)
	remove_menu_page('edit.php?post_type=wp_block');

	// Block direct access to Customiser
	add_action('load-customize.php', function() {
		if (current_user_can('content_manager')) {
			wp_die(
				__('Access to the Customiser is blocked.') . '<br><br><a href="' . admin_url() . '">&lt; Back to Dashboard</a>',
				__('Access Denied'),
				array('response' => 403, 'back_link' => false)
			);
		}
	});

	// Block direct access to Site Editor and Patterns
	add_action('load-site-editor.php', function() {
		if (current_user_can('content_manager')) {
			$msg = (!empty($_GET['p']) && strpos($_GET['p'], '/pattern') === 0)
				? __('Access to Patterns is blocked.')
				: __('Access to the Site Editor is blocked.');

			wp_die(
				$msg . '<br><br><a href="' . admin_url() . '">&lt; Back to Dashboard</a>',
				__('Access Denied'),
				array('response' => 403, 'back_link' => false)
			);
		}
	});
}
add_action('admin_menu', 'restrict_appearance_access_for_content_manager', 999);

/*add_action('admin_menu', function() {
	if ( current_user_can('gf_view_pending_activations') ) {
		add_menu_page(
			__('Pending Activations'),
			__('Pending Activations'),
			'gf_view_pending_activations',
			'gf-pending-activations',
			'',
			'dashicons-admin-users',
			70
		);
	}
});*/

/*add_action('admin_menu', function() {
	global $submenu;

	if (isset($submenu['profile.php'])) {
		foreach ($submenu['profile.php'] as $index => $item) {
			if (isset($item[2]) && $item[2] === 'gf-pending-activations') {
				unset($submenu['profile.php'][$index]);
			}
		}
	}
}, 999);*/

add_action('admin_menu', function () {
	if (current_user_can('administrator')) {
		add_submenu_page('tools.php', 'Reapply Content Manager Role', 'Reapply Role', 'manage_options', 'reapply-role', function () {
			$role = get_role('content_manager');
			if ($role) {
				$role->remove_cap('list_users');
				$role->remove_cap('edit_users');
				$role->remove_cap('create_users');
				$role->remove_cap('delete_users');
				$role->add_cap('promote_users');
				$role->add_cap('gravityforms_userregistration');
				$role->add_cap('gravityforms_edit_settings');
				$role->add_cap('gravityforms_view_entries');
				echo '<div class="updated"><p>Content Manager capabilities refreshed.</p></div>';
			}
		});
	}
});
