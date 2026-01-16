<?php


/**
	* Tell WordPress how to interpret our project URL structure
	*
	* @param array $rules Existing rewrite rules
	* @return array
*/
function product_add_rewrite_rules( $rules ) {
	$new = array();
	$new['products/([^/]+)/(.+)/?$'] = 'index.php?products=$matches[2]';
	$new['products/(.+)/?$'] = 'index.php?product_category=$matches[1]';

	return array_merge( $new, $rules ); // Ensure our rules come first
}
add_filter( 'rewrite_rules_array', 'product_add_rewrite_rules' );

/**
	* Handle the '%product_category%' URL placeholder
	*
	* @param str $link The link to the post
	* @param WP_Post object $post The post object
	* @return str
*/
function product_filter_post_type_link( $link, $post ) {
	if ( $post->post_type == 'products' ) {
		if ( $cats = get_the_terms( $post->ID, 'product_category' ) ) {
			$link = str_replace( '%product_category%', current( $cats )->slug, $link );
		}
	}
	return $link;
}
add_filter( 'post_type_link', 'product_filter_post_type_link', 10, 2 );


/*
* Creating a function to create our CPT
*/

function register_product_post_type() {
  
// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Products', 'Post Type General Name', 'neaco' ),
		'singular_name'       => _x( 'Product', 'Post Type Singular Name', 'neaco' ),
		'menu_name'           => __( 'Products', 'neaco' ),
		'parent_item_colon'   => __( 'Parent Product', 'neaco' ),
		'all_items'           => __( 'All Products', 'neaco' ),
		'view_item'           => __( 'View Product', 'neaco' ),
		'add_new_item'        => __( 'Add New Product', 'neaco' ),
		'add_new'             => __( 'Add New', 'neaco' ),
		'edit_item'           => __( 'Edit Product', 'neaco' ),
		'update_item'         => __( 'Update Product', 'neaco' ),
		'search_items'        => __( 'Search Product', 'neaco' ),
		'not_found'           => __( 'Not Found', 'neaco' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'neaco' ),
	);
	  
// Set other options for Custom Post Type
	  
	$args = array(
		'label'               => __( 'products', 'neaco' ),
		'description'         => __( 'Neaco Products', 'neaco' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'thumbnail' ),
		
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		//'taxonomies'          => array( 'category' ),
		
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/
		'menu_icon'		      => 'dashicons-screenoptions',
		'hierarchical'		  => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		//'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest' => true,
		'taxonomies' => ['product_category'],
		'rewrite' => array(
			'slug' => 'products/%product_category%'
		)
	);
	  
	// Registering your Custom Post Type
	register_post_type( 'products', $args );
  
}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'register_product_post_type', 0 );

function register_product_category_taxonomy() {
	$labels = array(
		'name'              => _x( 'Product Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'Product Category', 'taxonomy singular name' ),
		'search_items'      => __( 'Query Product Categories' ),
		'all_items'         => __( 'All Product Categories' ),
		'parent_item'       => __( 'Parent Category' ),
		'parent_item_colon' => __( 'Parent Category:' ),
		'edit_item'         => __( 'Edit Product Category' ), 
		'update_item'       => __( 'Update Product Category' ),
		'add_new_item'      => __( 'Add Edit Product Category' ),
		'new_item_name'     => __( 'New Product Category' ),
		'menu_name'         => __( 'Product Categories' ),
	);
	$args = array(
		'labels' => $labels,
		'show_admin_column' => true,
		'hierarchical' => true,
		'rewrite' => array('slug' => 'product-range')
	);
	register_taxonomy( 'product_category', 'products', $args );
}
add_action( 'init', 'register_product_category_taxonomy', 0 );