<?php

/*
* Creating a function to create our CPT
*/

function register_careers_post_type() {
  
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Careers', 'Post Type General Name', 'neaco' ),
        'singular_name'       => _x( 'Career', 'Post Type Singular Name', 'neaco' ),
        'menu_name'           => __( 'Careers', 'neaco' ),
        'parent_item_colon'   => __( 'Parent Career', 'neaco' ),
        'all_items'           => __( 'All Careers', 'neaco' ),
        'view_item'           => __( 'View Career', 'neaco' ),
        'add_new_item'        => __( 'Add New Career', 'neaco' ),
        'add_new'             => __( 'Add New', 'neaco' ),
        'edit_item'           => __( 'Edit Career', 'neaco' ),
        'update_item'         => __( 'Update Career', 'neaco' ),
        'search_items'        => __( 'Search Career', 'neaco' ),
        'not_found'           => __( 'Not Found', 'neaco' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'neaco' ),
    );
      
// Set other options for Custom Post Type
      
    $args = array(
        'label'               => __( 'careers', 'neaco' ),
        'description'         => __( 'Neaco Careers', 'neaco' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'thumbnail' ),
        
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        //'taxonomies'          => array( 'category' ),
        
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'menu_icon'		      => 'dashicons-coffee',
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
        //'taxonomies' => ['career_department'],
    );
      
    // Registering your Custom Post Type
    register_post_type( 'careers', $args );
  
}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'register_careers_post_type', 0 );

/*function register_careers_taxonomy() {
    $labels = array(
        'name'              => _x( 'Departments', 'taxonomy general name' ),
        'singular_name'     => _x( 'Department', 'taxonomy singular name' ),
        'search_items'      => __( 'Query Departments' ),
        'all_items'         => __( 'All Departments' ),
        'parent_item'       => __( 'Parent Department' ),
        'parent_item_colon' => __( 'Parent Department:' ),
        'edit_item'         => __( 'Edit Department' ), 
        'update_item'       => __( 'Update Department' ),
        'add_new_item'      => __( 'Add Edit Department' ),
        'new_item_name'     => __( 'Add Department' ),
        'menu_name'         => __( 'Departments' ),
    );
    $args = array(
        'labels' => $labels,
        'show_admin_column' => true,
        'hierarchical' => true,
        'rewrite' => array('slug' => 'department')
    );
    register_taxonomy( 'career_department', 'careers', $args );
}
add_action( 'init', 'register_careers_taxonomy', 0 );*/