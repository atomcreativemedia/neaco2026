<?php
$category = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

if(get_sub_field('pr_cb__usps_rollover_section_id', $category)) {
	$section_id = get_sub_field('pr_cb__usps_rollover_section_id', $category);
}

$introduction_content = get_sub_field('pr_cb__usps_rollover_introduction_content', $category) ?: '';
$extra_height = get_sub_field('pr_cb__usps_rollover_extra_height', $category) ?: 0;

if(get_sub_field('pr_cb__usps_rollover_usps_rp', $category)) {
	$pr_cb__usps_rollover_usps_rp = get_sub_field('pr_cb__usps_rollover_usps_rp', $category);
}
$heading_visible = get_sub_field('pr_cb__usps_rollover_heading_visible', $category) ? true : false;
?>
<section class="product-range__usps-rollover" id="<?= esc_attr($section_id); ?>">
	<div class="container-fluid">
		<?php if ($introduction_content): ?>
		<div class="row justify-content-center">
			<div class="col-12 col-md-10 col-lg-8 text-center">
				<div class="product-range__usps-rollover__intro">
					<?= wp_kses_post($introduction_content); ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
		
		<?php if(isset($pr_cb__usps_rollover_usps_rp)) :
		$usp_count = count($pr_cb__usps_rollover_usps_rp); ?>
	    <div class="row justify-content-center justify-content-lg-start py-5">
	    	<div class="col-11 col-lg-10 offset-lg-1">
	    		<div class="product-range__usps-rollover__usps <?php if($extra_height == 1){echo ' h-650';} ?>">
			    	<?php foreach ($pr_cb__usps_rollover_usps_rp as $usp) :
		    			$bg_img = $usp['pr_cb__usps_rollover_usps_rp__background_image'] ?: '';
		    				if($bg_img) {
		    					$style = 'style="background-image:url('.esc_url($bg_img).');"';
		    				} else {
		    					$style = 'style="background-color:#3B4752;"';
		    				}
		    			$icon = $usp['pr_cb__usps_rollover_usps_rp__icon'] ?: '';
		    			$heading = $usp['pr_cb__usps_rollover_usps_rp__heading'] ?: '';
		    			$text = $usp['pr_cb__usps_rollover_usps_rp__text'] ?: ''; 
		    			$link = $usp['pr_cb__usps_rollover_usps_rp__product_link'] ?: ''; ?>
			    		<div class="product-range__usps-rollover__usp bg-img" <?= $style; ?>>
			    			
			    			<?php if ($heading_visible) {
			    				if($bg_img) {
			    					echo '<div class="product-range__usps-rollover__usp-overlay product-range__usps-rollover__usp-overlay--overlay-1"></div>';
			    				}
			    			} ?>
			    			
			    			<div class="product-range__usps-rollover__usp-overlay product-range__usps-rollover__usp-overlay--overlay-2"></div>
			    			
			    			<div class="product-range__usps-rollover__usp-content">
			    				
			    				<div class="product-range__usps-rollover__usp-content-header">
			    					<?php if ($icon) : ?><div class="product-range__usps-rollover__usp-icon<?php if(!$bg_img) { echo ' icon-sticky'; } ?>"><?= wp_kses_post($icon); ?></div><?php endif; ?>
			    					<?php if ($heading_visible) {
			    						echo '<h3 class="product-range__usps-rollover__usp-heading">'.esc_html($heading).'</h3>';
			    					} ?>
			    				</div>
			    				
			    				<div class="product-range__usps-rollover__usp-content-text">
			    					<div class="product-range__usps-rollover__usp-desc">
			    						<?php if (!$heading_visible) {
			    							echo '<h3 class="product-range__usps-rollover__usp-heading">'.esc_html($heading).'</h3>';
			    						} ?>
			    						<?= wp_kses_post($text); ?>
			    						<?php if ($link) {
			    							echo '<p class="product-range__usps-rollover__usp-link"><a href="'.esc_url($link).'">Discover <i class="fa-sharp fa-solid fa-chevron-right"></i></a></p>';
			    						} ?>
			    					</div>
			    				</div>
			    			</div>
			    		</div>
			    	<?php endforeach; ?>
	    		</div>
		    </div>
	    </div>
		<?php endif; ?>
			
		<?php if (have_rows('pr_cb__usps_rollover__buttons_rp', $category)) : ?>
		<div class="row justify-content-center">
			<div class="col-10 col-lg-8 text-center">
			    <div class="product-range__usps-rollover__buttons">
			        <?php while (have_rows('pr_cb__usps_rollover__buttons_rp', $category)) : the_row();
			        	$label = get_sub_field('pr_cb__usps_rollover__buttons_rp__button_label');
			            $destination = get_sub_field('pr_cb__usps_rollover__buttons_rp__button_destination');
			            if ($label && $destination) {
			            	echo '<p class="button"><a href="'.esc_url($destination).'">'.esc_html($label).'</a></p>';
			            } ?>
			        <?php endwhile; ?>
			    </div>
			</div>
		</div>
		<?php endif; ?>
	</div>
</section>