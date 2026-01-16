<?php

/*
* Creating a function to create our CPT
*/

function register_project_post_type() {
  
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Projects', 'Post Type General Name', 'neaco' ),
        'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'neaco' ),
        'menu_name'           => __( 'Projects', 'neaco' ),
        'parent_item_colon'   => __( 'Parent Project', 'neaco' ),
        'all_items'           => __( 'All Projects', 'neaco' ),
        'view_item'           => __( 'View Project', 'neaco' ),
        'add_new_item'        => __( 'Add New Project', 'neaco' ),
        'add_new'             => __( 'Add New', 'neaco' ),
        'edit_item'           => __( 'Edit Project', 'neaco' ),
        'update_item'         => __( 'Update Project', 'neaco' ),
        'search_items'        => __( 'Search Project', 'neaco' ),
        'not_found'           => __( 'Not Found', 'neaco' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'neaco' ),
    );
      
// Set other options for Custom Post Type
      
    $args = array(
        'label'               => __( 'projects', 'neaco' ),
        'description'         => __( 'Neaco Projects', 'neaco' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'thumbnail' ),
        
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        //'taxonomies'          => array( 'category' ),
        
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'menu_icon'           => 'dashicons-hammer',
        'hierarchical'        => false,
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
        'taxonomies' => ['project_category'],
    );
    
    // Registering your Custom Post Type
    register_post_type( 'projects', $args );
  
}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'register_project_post_type', 0 );

function register_project_category_taxonomy() {
    $labels = array(
        'name'              => _x( 'Project Categories', 'taxonomy general name' ),
        'singular_name'     => _x( 'Project Category', 'taxonomy singular name' ),
        'search_items'      => __( 'Query Project Categories' ),
        'all_items'         => __( 'All Project Categories' ),
        'parent_item'       => __( 'Parent Category' ),
        'parent_item_colon' => __( 'Parent Category:' ),
        'edit_item'         => __( 'Edit Project Category' ), 
        'update_item'       => __( 'Update Project Category' ),
        'add_new_item'      => __( 'Add Edit Project Category' ),
        'new_item_name'     => __( 'New Project Category' ),
        'menu_name'         => __( 'Project Categories' ),
    );
    $args = array(
        'labels' => $labels,
        'show_admin_column' => true,
        'hierarchical' => true,
        'rewrite' => array('slug' => 'project-category')
    );
    register_taxonomy( 'project_category', 'projects', $args );
}
add_action( 'init', 'register_project_category_taxonomy', 0 );