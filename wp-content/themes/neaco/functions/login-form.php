<?php

function custom_login_form_shortcode() {
 
  $args = array(
    'echo'            => true,
    'redirect'        => get_permalink( get_the_ID() ),
    'remember'        => true,
    'value_remember'  => true,
  );
 
  return wp_login_form( $args );
 
}
add_shortcode( 'custom_login_form', 'custom_login_form_shortcode' );