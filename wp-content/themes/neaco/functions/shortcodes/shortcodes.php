<?php
/* Logged-In User Firstname */
function member_first_name_shortcode() {
   global $current_user, $wp_roles;
   $output = get_the_author_meta( 'first_name', $current_user->ID );;
   $output = '<span class="member-firstname">' . shortcode_unautop($output) . '</span>';
   return $output;
}
add_shortcode( 'member-firstname', 'member_first_name_shortcode' );

function wiselybox_gallery_shortcode($atts) {
    $atts = shortcode_atts(
        array(
            'id' => '',
            // Additional attributes if needed
        ),
        $atts,
        'wiselybox'
    );

    $gallery_id = $atts['id'];

    // Retrieve your gallery data based on the ID or any other relevant method
    $gallery_data = get_wiselybox_gallery_data($gallery_id);

    // Build your gallery HTML here using $gallery_data
    $output = '<div class="wiselybox-gallery">';
    foreach ($gallery_data as $image) {
        $output .= '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
    }
    $output .= '</div>';

    return $output;
}
add_shortcode('wiselybox', 'wiselybox_gallery_shortcode');