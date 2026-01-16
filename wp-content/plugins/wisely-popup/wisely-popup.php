<?php
/*
Plugin Name: Wisely Promotional Popup
Description: A simple promotional popup plugin using ACF flexible content.
Version: 1.0
Author: Atom Creative Media
*/

// Include the functions.php file
require_once plugin_dir_path(__FILE__) . 'functions.php';

function wisely_popup_display() {
    if (have_rows('popup_content_blocks', 'option')): ?>
        <div class="wisely-popup">
        	<div class="wisely-popup__body">
    			<div class="wisely-popup__header">
    				<button class="wisely-popup__close">
    		            <i class="fas fa-times"></i>
    		        </button>
    			</div>
    			<div class="wisely-popup__main">
    				<?php
    				while (have_rows('popup_content_blocks', 'option')): the_row();
    				    if (get_row_layout() == 'popup_layout__image'): 
    				        $image = get_sub_field('popup_layout__image__image');
    				        $link = get_sub_field('popup_layout__image__link');
    				        ?>
    				        <a href="<?php echo esc_url($link); ?>">
    				            <img src="<?php echo esc_url($image); ?>" alt="Popup Image" class="img-fluid">
    				        </a>
    				    <?php endif;
    				endwhile; ?>
    			</div>
        	</div>
        </div>
    <?php
    endif;
}
add_action('wp_footer', 'wisely_popup_display');