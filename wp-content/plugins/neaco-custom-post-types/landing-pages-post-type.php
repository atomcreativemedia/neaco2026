<?php

/*
* Creating a function to create our CPT
*/

function register_landing_page_post_type() {
  
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Landing Pages', 'Post Type General Name', 'neaco' ),
        'singular_name'       => _x( 'Landing Page', 'Post Type Singular Name', 'neaco' ),
        'menu_name'           => __( 'Landing Pages', 'neaco' ),
        'parent_item_colon'   => __( 'Parent Landing Page', 'neaco' ),
        'all_items'           => __( 'All Landing Pages', 'neaco' ),
        'view_item'           => __( 'View Landing Page', 'neaco' ),
        'add_new_item'        => __( 'Add New Landing Page', 'neaco' ),
        'add_new'             => __( 'Add New', 'neaco' ),
        'edit_item'           => __( 'Edit Landing Page', 'neaco' ),
        'update_item'         => __( 'Update Landing Page', 'neaco' ),
        'search_items'        => __( 'Search Landing Pages', 'neaco' ),
        'not_found'           => __( 'Not Found', 'neaco' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'neaco' ),
    );
      
// Set other options for Custom Post Type
      
    $args = array(
        'label'               => __( 'landing-pages', 'neaco' ),
        'description'         => __( 'Neaco Landing Pages', 'neaco' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'thumbnail' ),
        
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        //'taxonomies'          => array( 'category' ),
        
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'menu_icon'		      => 'dashicons-superhero-alt',
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
        
        'rewrite' => array('slug' => 'campaign')
    );
    
    // Registering your Custom Post Type
    register_post_type( 'landing-pages', $args );
  
}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'register_landing_page_post_type', 0 );