<?php

function login_styles() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/login-styles.css' );
}
add_action( 'login_enqueue_scripts', 'login_styles' );