<?php
if(get_sub_field('pb_usps_rollover_section_id')) {
	$pb_usps_rollover_section_id = get_sub_field('pb_usps_rollover_section_id');
} else {
	$pb_usps_rollover_section_id = '';
}


$section_background_colour = get_sub_field('pb_usps_rollover_section_background_colour') ?: '#FFFFFF';
$intro_content_colour = get_sub_field('pb_usps_rollover_intro_content_colour') ?: '';
$introduction_content = get_sub_field('pb_usps_rollover_introduction_content') ?: '';

if(get_sub_field('pb_usps_rollover_usps')) {
	$pb_usps_rollover_usps = get_sub_field('pb_usps_rollover_usps');
}
$heading_visible = get_sub_field('pb_usps_rollover_heading_visible') ? true : false;

?>
<section class="page-builder__usps-rollover" id="<?= esc_attr($pb_usps_rollover_section_id); ?>" style="background-color:<?= esc_attr($section_background_colour); ?>;">
	<div class="container">
		<?php if ($introduction_content): ?>
		<div class="row justify-content-center">
			<div class="col-11 col-md-12 text-start">
				<div class="page-builder__usps-rollover__intro page-builder__usps-rollover__intro--<?= $intro_content_colour; ?>">
					<?= wp_kses_post($introduction_content); ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
		
		
		<?php if(isset($pb_usps_rollover_usps)) :
		$usp_count = count($pb_usps_rollover_usps); ?>
	    <div class="row justify-content-center">
	    	<div class="col-11 col-md-12">
	    		<div class="page-builder__usps-rollover__usps">
			    	<?php foreach ($pb_usps_rollover_usps as $usp) :
		    			$bg_img = $usp['pb_usps_rollover_usp_background_image'] ?: '';
		    			$icon = $usp['pb_usps_rollover_usp_icon'] ?: '';
		    			$heading = $usp['pb_usps_rollover_usp_heading'] ?: '';
		    			$text = $usp['pb_usps_rollover_usp_text'] ?: ''; ?>
			    		<div class="page-builder__usps-rollover__usp bg-img" style="background-image:url(<?= esc_url($bg_img); ?>);">
			    			
			    			<?php if ($heading_visible) {
			    				echo '<div class="page-builder__usps-rollover__usp-overlay page-builder__usps-rollover__usp-overlay--overlay-1"></div>';
			    			} else {
			    				echo '<div class="page-builder__usps-rollover__usp-overlay page-builder__usps-rollover__usp-overlay--overlay-1 d-lg-none"></div>';
			    			} ?>
			    			
			    			<div class="page-builder__usps-rollover__usp-overlay page-builder__usps-rollover__usp-overlay--overlay-2"></div>
			    			
			    			<div class="page-builder__usps-rollover__usp-content">
			    				
			    				<div class="page-builder__usps-rollover__usp-content-header">
			    					<?php if ($icon): ?><div class="page-builder__usps-rollover__usp-icon"><?= wp_kses_post($icon); ?></div><?php endif; ?>
			    					<?php if ($heading_visible) {
			    						echo '<h3 class="page-builder__usps-rollover__usp-heading">'.wp_kses_post($heading).'</h3>';
			    					} ?>
			    				</div>
			    				
			    				<div class="page-builder__usps-rollover__usp-content-text">
			    					<div class="page-builder__usps-rollover__usp-desc">
			    						<?php if (!$heading_visible) {
			    							echo '<h3 class="page-builder__usps-rollover__usp-heading">'.wp_kses_post($heading).'</h3>';
			    						} ?>
			    						<?= wp_kses_post($text); ?>
			    					</div>
			    				</div>
			    			</div>
			    		</div>
			    	<?php endforeach; ?>
	    		</div>
		    </div>
	    </div>
		<?php endif; ?>
		
	</div>
</section>