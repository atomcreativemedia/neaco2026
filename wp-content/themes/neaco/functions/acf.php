<?php
/*********
Create the ACF Theme Options page.
*********/
if( function_exists('acf_add_options_sub_page') )
{
    acf_add_options_sub_page( 'Website Settings' );
    acf_add_options_sub_page( 'Global Page Sections' );
}


/*********
Bring In ACF Custom Fields
*********/
include_once dirname(__FILE__) . '/acf/website-settings.php';
include_once dirname(__FILE__) . '/acf/global-page-section-settings.php';
include_once dirname(__FILE__) . '/acf/standard-page-settings.php';
include_once dirname(__FILE__) . '/acf/blog-post-header-settings.php';
include_once dirname(__FILE__) . '/acf/landing-page-settings.php';
include_once dirname(__FILE__) . '/acf/frontpage.php';
include_once dirname(__FILE__) . '/acf/team-page-template-settings.php';
include_once dirname(__FILE__) . '/acf/contact-page-template-settings.php';
include_once dirname(__FILE__) . '/acf/resources-page-template-settings.php';
include_once dirname(__FILE__) . '/acf/page-builder-template-settings.php';
include_once dirname(__FILE__) . '/acf/product-range-category-settings.php';
include_once dirname(__FILE__) . '/acf/project-category-settings.php';
include_once dirname(__FILE__) . '/acf/product-settings.php';
include_once dirname(__FILE__) . '/acf/project-settings.php';
include_once dirname(__FILE__) . '/acf/career-post-settings.php';
include_once dirname(__FILE__) . '/acf/neacobox-post-settings.php';
include_once dirname(__FILE__) . '/acf/user-settings.php';
include_once dirname(__FILE__) . '/acf/menu-settings.php';


/*********
Adding commas to salary value on careers posts
*********/
add_filter('acf/format_value/name=salary', 'fix_number', 20, 3);
function fix_number($value, $post_id, $field) {
    if($value != null) {
        $value = number_format($value);
        return $value;
    }
}


/*********
Custom styles for backend ACF interface
*********/
function my_acf_admin_head() {
?>
<style type="text/css">
    .acf-flexible-content .layout .acf-fc-layout-handle {
        /*background-color: #00B8E4;*/
        background-color: #202428;
        color: #eee;
    }
    .acf-flexible-content .layout .acf-fc-layout-handle span.admin-label {
        font-weight: bold;
        color: #AAC642;
    }
    .acf-repeater.-row > table > tbody > tr > td,
    .acf-repeater.-block > table > tbody > tr > td {
        border-top: 2px solid #202428;
    }
    .acf-repeater .acf-row-handle {
        vertical-align: top !important;
        padding-top: 16px;
    }
    .acf-repeater .acf-row-handle span {
        font-size: 20px;
        font-weight: bold;
        color: #202428;
    }
    .imageUpload img {
        width: 75px;
    }
    .acf-repeater .acf-row-handle .acf-icon.-minus {
        top: 30px;
    }
</style>
<?php
}
add_action('acf/input/admin_head', 'my_acf_admin_head');


/*********
Populating the contact section department options
*********/
function acf_load_contact_section_department_choices( $field ) {
    // reset choices
    $field['choices'] = array();
    
    // if has rows
    if( have_rows('company_departments', 'option') ) {
        // while has rows
        while( have_rows('company_departments', 'option') ) {
            // instantiate row
            the_row();
            
            // vars
            $label = get_sub_field('department_name');
            $value = get_sub_field('department_name');

            // append to choices
            $field['choices'][ $value ] = $label;
        }
    }
    // return the field
    return $field;
}
add_filter('acf/load_field/name=contact_section_display_departments', 'acf_load_contact_section_department_choices');
add_filter('acf/load_field/name=departments_to_display', 'acf_load_contact_section_department_choices');


/*********
Populating the career post department select box
*********/
function acf_load_department_field_choices( $field ) {
    // reset choices
    $field['choices'] = array();
    
    // if has rows
    if( have_rows('careers_departments', 'option') ) {
        // while has rows
        while( have_rows('careers_departments', 'option') ) {
            // instantiate row
            the_row();

            // vars
            $value = get_sub_field('department_name_value');
            $label = get_sub_field('department_name');

            // append to choices
            $field['choices'][ $value ] = $label;
        }
    }
    // return the field
    return $field;
}
add_filter('acf/load_field/name=career_post_department', 'acf_load_department_field_choices');


/*********
Giving block layouts an admin label for better management
*********/
function my_acf_fields_flexible_content_layout_title( $title, $field, $layout, $i ) {

    // Text Block
    if( $text = get_sub_field('pb_text_block_admin_label') ) {
        $title .= ' - <span class="admin-label admin-label--pb_text_block_admin_label">'.esc_html($text).'</span>';
    }
    
    // Text Block with Image
    if( $text = get_sub_field('pb_text_block_image_admin_label') ) {
        $title .= ' - <span class="admin-label admin-label--pb_text_block_image_admin_label">'.esc_html($text).'</span>';
    }
    
    // Dual Image Block
    if( $text = get_sub_field('pb_dual_image_block_admin_label') ) {
        $title .= ' - <span class="admin-label admin-label--pb_dual_image_block_admin_label">'.esc_html($text).'</span>';
    }
    
    // Video Embed
    if( $text = get_sub_field('pb_video_embed_admin_label') ) {
        $title .= ' - <span class="admin-label admin-label--pb_video_embed_admin_label">'.esc_html($text).'</span>';
    }
    
    // Featured Content
    if( $text = get_sub_field('pb_featured_content_admin_label') ) {
        $title .= ' - <span class="admin-label admin-label--pb_featured_content_admin_label">'.esc_html($text).'</span>';
    }
    
    // Featured Content (Slider with Intro)
    if( $text = get_sub_field('pb_featured_content_slider__admin_label') ) {
        $title .= ' - <span class="admin-label admin-label--pb_featured_content_slider__admin_label">'.esc_html($text).'</span>';
    }
    
    // Options Showcase
    if( $text = get_sub_field('pb_options_showcase') ) {
        $title .= ' - <span class="admin-label admin-label--pb_options_showcase">'.esc_html($text).'</span>';
    }
    
    // Info Slider
    if( $text = get_sub_field('pb_info_slider_admin_label') ) {
        $title .= ' - <span class="admin-label admin-label--pb_info_slider_admin_label">'.esc_html($text).'</span>';
    }
    
    // Colour Range
    if( $text = get_sub_field('pb_color_range_admin_label') ) {
        $title .= ' - <span class="admin-label admin-label--pb_color_range_admin_label">'.esc_html($text).'</span>';
    }
    
    // Featured Text
    if( $text = get_sub_field('pb_featured_text_admin_label') ) {
        $title .= ' - <span class="admin-label admin-label--pb_featured_text_admin_label">'.esc_html($text).'</span>';
    }
    
    // Image Gallery
    if( $text = get_sub_field('pb_image_gallery_admin_label') ) {
        $title .= ' - <span class="admin-label admin-label--pb_image_gallery_admin_label">'.esc_html($text).'</span>';
    }
    
    // FAQs
    if( $text = get_sub_field('pb_faqs_admin_label') ) {
        $title .= ' - <span class="admin-label admin-label--pb_faqs_admin_label">'.esc_html($text).'</span>';
    }
    
    // Specifications
    if( $text = get_sub_field('pb_specifications_admin_label') ) {
        $title .= ' - <span class="admin-label admin-label--pb_specifications_admin_label">'.esc_html($text).'</span>';
    }
    
    // Product Builder
    if( $text = get_sub_field('pb_product_builder_admin_label') ) {
        $title .= ' - <span class="admin-label admin-label--pb_product_builder_admin_label">'.esc_html($text).'</span>';
    }
    
    // Call to Action
    if( $text = get_sub_field('pb_call_to_action_admin_label') ) {
        $title .= ' - <span class="admin-label admin-label--pb_call_to_action_admin_label">'.esc_html($text).'</span>';
    }
    
    // USPs
    if( $text = get_sub_field('pb_usps_admin_label') ) {
        $title .= ' - <span class="admin-label admin-label--pb_usps_admin_label">'.esc_html($text).'</span>';
    }
    
    // USPs (Rollover)
    if( $text = get_sub_field('pb_usps_rollover_admin_label') ) {
        $title .= ' - <span class="admin-label admin-label--pb_usps_rollover_admin_label">'.esc_html($text).'</span>';
    }
    
    // Case Studies
    if( $text = get_sub_field('pb_case_studies__admin_label') ) {
        $title .= ' - <span class="admin-label admin-label--pb_case_studies__admin_label">'.esc_html($text).'</span>';
    }
    
    // Resources
    if( $text = get_sub_field('pb_resources_admin_label') ) {
        $title .= ' - <span class="admin-label admin-label--pb_resources_admin_label">'.esc_html($text).'</span>';
    }
    
    // 3D Render
    if( $text = get_sub_field('pb_3d_render_admin_label') ) {
        $title .= ' - <span class="admin-label admin-label--pb_3d_render_admin_label">'.esc_html($text).'</span>';
    }
    
    // NBS Frame
    if( $text = get_sub_field('pb_nbs_frame_admin_label') ) {
        $title .= ' - <span class="admin-label admin-label--pb_nbs_frame_admin_label">'.esc_html($text).'</span>';
    }
    
    // Accreditations
    if( $text = get_sub_field('pb_accreditations_admin_label') ) {
        $title .= ' - <span class="admin-label admin-label--pb_accreditations_admin_label">'.esc_html($text).'</span>';
    }
    
    // Contact
    if( $text = get_sub_field('pb_contact_admin_label') ) {
        $title .= ' - <span class="admin-label admin-label--pb_contact_admin_label">'.esc_html($text).'</span>';
    }
    
    return $title;
}
add_filter('acf/fields/flexible_content/layout_title/key=field_flexiblecontent_pE90n667AT9402l', 'my_acf_fields_flexible_content_layout_title', 10, 4);


/*********
Setting the swatches on the colour picker
*********/
function acf_input_admin_footer() {
    
    $white          = '#FFFFFF';
    $black          = '#000000';
    $grey_light     = '#EFF2F5';
    $grey_med       = '#B5BBBF';
    $grey_dark      = '#707070';
    $green          = '#AAC642';
    $steel          = '#3B4752';
    $purple         = '#592D5E';
    $flooring       = '#94969A';
    $industrial     = '#CCB647';
    $balconies      = '#E25098';
    $bathing        = '#2C7DAA'; ?>
    <script type="text/javascript">
        (function($) {
            acf.add_filter('color_picker_args', function( args, $field ) {
                
                // add the hexadecimal codes here for the colors you want to appear as swatches
                args.palettes = [
                    '<?= $white ?>',
                    '<?= $black ?>',
                    '<?= $grey_light ?>',
                    '<?= $grey_med ?>',
                    '<?= $grey_dark ?>',
                    '<?= $green ?>',
                    '<?= $steel ?>',
                    '<?= $purple ?>',
                    '<?= $flooring ?>',
                    '<?= $industrial ?>',
                    '<?= $balconies ?>',
                    '<?= $bathing ?>',
                ]
                
                // return colors
                return args;
            });
        })(jQuery);
    </script>
<?php }
add_action('acf/input/admin_footer', 'acf_input_admin_footer');





function check_for_product_builder() {
    global $post, $has_product_builder;
    $has_product_builder = false; // Reset this flag for each check.
    if (is_singular()) {
        if (have_rows('page_builder_content_blocks', $post->ID)) {
            while (have_rows('page_builder_content_blocks', $post->ID)) : the_row();
                if (get_row_layout() == 'pb_product_builder' && !$has_product_builder) {
                    $has_product_builder = true;
                }
            endwhile;
        }
    }
}
add_action('wp', 'check_for_product_builder');