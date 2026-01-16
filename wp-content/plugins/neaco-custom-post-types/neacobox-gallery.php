<?php

/*
* Creating a function to create our CPT
*/

function register_neacobox_gallery_post_type() {
  
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'NeacoBox', 'Post Type General Name', 'neaco' ),
        'singular_name'       => _x( 'NeacoBox Gallery', 'Post Type Singular Name', 'neaco' ),
        'menu_name'           => __( 'NeacoBox', 'neaco' ),
        'parent_item_colon'   => __( 'Parent Career', 'neaco' ),
        'all_items'           => __( 'All Galleries', 'neaco' ),
        'view_item'           => __( 'View Gallery', 'neaco' ),
        'add_new_item'        => __( 'Add New Gallery', 'neaco' ),
        'add_new'             => __( 'Add New NeacoBox Gallery', 'neaco' ),
        'edit_item'           => __( 'Edit Gallery', 'neaco' ),
        'update_item'         => __( 'Update Gallery', 'neaco' ),
        'search_items'        => __( 'Search Galleries', 'neaco' ),
        'not_found'           => __( 'Not Found', 'neaco' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'neaco' ),
    );
      
// Set other options for Custom Post Type
      
    $args = array(
        'label'               => __( 'neacobox', 'neaco' ),
        'description'         => __( 'Image Galleries', 'neaco' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'thumbnail' ),
        
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        //'taxonomies'          => array( 'category' ),
        
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'menu_icon'		      => 'dashicons-images-alt',
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
    );
    
    // Registering your Custom Post Type
    register_post_type( 'neacobox', $args );
  
}

add_action( 'init', 'register_neacobox_gallery_post_type', 0 );