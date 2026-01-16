<?php
/*********
Prevent the emoji script from being loaded.
*********/
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');


/*********
Styles and scripts, scripts and styles...
*********/
function scripts_and_styles() {
    global $has_product_builder;
    
    // Styles
    wp_enqueue_style( 'typekit', 'https://use.typekit.net/hui7xet.css', array(), null );
    wp_enqueue_style( 'slickstyles', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css', array(), '1.8.1' );
    //wp_enqueue_style( 'fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.2/jquery.fancybox.min.css', array(), '3.4.2' );
    wp_enqueue_style( 'neacobox', get_template_directory_uri() . '/js/neacobox/css/neacobox.css', array(), null );
    wp_enqueue_style( 'theme-setup', get_stylesheet_uri(), array(), null );
    wp_enqueue_style( 'theme-styles', get_template_directory_uri() . '/style.min.css', array(), null );
    
    // Scripts
    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-2.2.4.min.js', array(), '2.2.4', false );
    wp_enqueue_script( 'fontawesome', 'https://kit.fontawesome.com/a1651dd91c.js',array(),null, false );
    
    if ($has_product_builder) {wp_enqueue_script( 'product-builder', get_template_directory_uri() . '/js/product-builder.min.js', array('jquery'), null, true );}
    wp_enqueue_script( 'slickslider', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.8.1', true );
    wp_enqueue_script( 'infiniteslidev2', get_template_directory_uri() . '/js/infiniteslidev2.min.js', array('jquery'), null, true );
    //wp_enqueue_script( 'fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.2/jquery.fancybox.min.js', array('jquery'), '3.4.2', true );
    wp_enqueue_script( 'neacobox', get_template_directory_uri() . '/js/neacobox/neacobox.js', array('jquery'), null, true );
    wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.1.3', true );
    wp_enqueue_script( 'main-min', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true );
}
add_action( 'wp_enqueue_scripts', 'scripts_and_styles' ); // action hook to actually load the script/s