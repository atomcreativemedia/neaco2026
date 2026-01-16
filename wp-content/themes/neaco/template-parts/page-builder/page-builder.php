<?php
if(have_rows('page_builder_content_blocks')) :
	while(have_rows('page_builder_content_blocks')): the_row();
		if(get_row_layout() == 'pb_on_page_navigation') { get_template_part('template-parts/page-builder/sections/page-builder-on-page-navigation'); }
		elseif(get_row_layout() == 'pb_text_block') { get_template_part('template-parts/page-builder/sections/page-builder-text-block'); }
		elseif(get_row_layout() == 'pb_text_block_image') { get_template_part('template-parts/page-builder/sections/page-builder-text-block-image'); }
		elseif(get_row_layout() == 'pb_dual_image_block') { get_template_part('template-parts/page-builder/sections/page-builder-dual-image-block'); }
		elseif(get_row_layout() == 'pb_video_embed') { get_template_part('template-parts/page-builder/sections/page-builder-video-embed'); }
		elseif(get_row_layout() == 'pb_featured_content') { get_template_part('template-parts/page-builder/sections/page-builder-featured-content'); }
		elseif(get_row_layout() == 'pb_featured_content_slider') { get_template_part('template-parts/page-builder/sections/page-builder-featured-content-slider'); }
		elseif(get_row_layout() == 'pb_options_showcase') { get_template_part('template-parts/page-builder/sections/page-builder-options-showcase'); }
		elseif(get_row_layout() == 'pb_info_slider') { get_template_part('template-parts/page-builder/sections/page-builder-info-slider'); }
		elseif(get_row_layout() == 'pb_color_range') { get_template_part('template-parts/page-builder/sections/page-builder-colour-range'); }
		elseif(get_row_layout() == 'pb_featured_text') { get_template_part('template-parts/page-builder/sections/page-builder-featured-text'); }
		elseif(get_row_layout() == 'pb_image_gallery') { get_template_part('template-parts/page-builder/sections/page-builder-image-gallery'); }
		elseif(get_row_layout() == 'pb_faqs') { get_template_part('template-parts/page-builder/sections/page-builder-faqs'); }
		elseif(get_row_layout() == 'pb_specifications') { get_template_part('template-parts/page-builder/sections/page-builder-specifications'); }
		elseif(get_row_layout() == 'pb_product_builder') { get_template_part('template-parts/page-builder/sections/page-builder-product-builder'); }
		elseif(get_row_layout() == 'pb_call_to_action') { get_template_part('template-parts/page-builder/sections/page-builder-call-to-action'); }
		elseif(get_row_layout() == 'pb_usps') { get_template_part('template-parts/page-builder/sections/page-builder-usps'); }
		elseif(get_row_layout() == 'pb_usps_rollover') { get_template_part('template-parts/page-builder/sections/page-builder-usps-rollover'); }
		elseif(get_row_layout() == 'pb_case_studies') { get_template_part('template-parts/page-builder/sections/page-builder-case-studies'); }
		elseif(get_row_layout() == 'pb_resources') { get_template_part('template-parts/page-builder/sections/page-builder-resources'); }
		elseif(get_row_layout() == 'pb_contact') { get_template_part('template-parts/page-builder/sections/page-builder-contact'); }
		elseif(get_row_layout() == 'pb_accreditations') { get_template_part('template-parts/page-builder/sections/page-builder-accreditations'); }
		elseif(get_row_layout() == 'pb_3d_render') { get_template_part('template-parts/page-builder/sections/page-builder-3d-render'); }
		elseif (get_row_layout() == 'decking_features_section') {get_template_part('template-parts/page-builder/sections/page-builder-decking-features-section');}
		elseif (get_row_layout() == 'companies_section') {get_template_part('template-parts/page-builder/sections/page-builder-companies');}
		elseif (get_row_layout() == 'newsletter_section') {get_template_part('template-parts/page-builder/sections/page-builder-newsletter');}
		elseif (get_row_layout() == 'why_engineers_architects_choose_neaco_section') {get_template_part('template-parts/page-builder/sections/page-builder-why-engineers-architects-choose-neaco');}
		elseif (get_row_layout() == 'why_choose_neaco_section') {get_template_part('template-parts/page-builder/sections/page-builder-why-choose-neaco');}
		elseif (get_row_layout() == 'about_neacos_product_offerings_section') {get_template_part('template-parts/page-builder/sections/page-builder-about-neacos-product-offerings-section');}
		elseif (get_row_layout() == 'get_in_touch_section') {get_template_part('template-parts/page-builder/sections/page-builder-get-in-touch');}
		elseif (get_row_layout() == 'factory_boxes_section') {get_template_part('template-parts/page-builder/sections/page-builder-factory-boxes');}
	endwhile;
endif;
?>