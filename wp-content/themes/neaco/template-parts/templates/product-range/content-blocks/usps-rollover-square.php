<?php
$category = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

if(get_sub_field('pr_cb__usps_rollover_sq_section_id', $category)) {
	$section_id = get_sub_field('pr_cb__usps_rollover_sq_section_id', $category);
}

$introduction_content = get_sub_field('pr_cb__usps_rollover_sq_introduction_content', $category) ?: '';

if(get_sub_field('pr_cb__usps_rollover_sq_usps_rp', $category)) {
	$usps = get_sub_field('pr_cb__usps_rollover_sq_usps_rp', $category);
}
?>
<section class="product-range__usps-rollover-sq" id="<?= esc_attr($section_id); ?>">
	<div class="container-fluid">
		<?php if ($introduction_content): ?>
		<div class="row justify-content-center justify-content-lg-start">
			<div class="col-11 col-lg-10 offset-lg-1 text-center text-lg-start">
				<div class="product-range__usps-rollover-sq__intro">
					<?= wp_kses_post($introduction_content); ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
		
		<?php if(isset($usps)) : ?>
	    <div class="row justify-content-center justify-content-lg-start py-5">
	    	<div class="col-11 col-lg-10 offset-lg-1">
	    		<div class="product-range__usps-rollover-sq__usps <?php if($extra_height == 1){echo ' h-650';} ?>">
			    	<?php foreach ($usps as $usp) :
		    			$bg_img = $usp['pr_cb__usps_rollover_sq_usps_rp__background_image'] ?: '';
		    			$heading = $usp['pr_cb__usps_rollover_sq_usps_rp__heading'] ?: '';
		    			$text = $usp['pr_cb__usps_rollover_sq_usps_rp__text'] ?: ''; ?>
			    		<div class="product-range__usps-rollover-sq__usp bg-img" style="background-image:url(<?= esc_url($bg_img); ?>);">
			    			<div class="product-range__usps-rollover-sq__usp-overlay product-range__usps-rollover-sq__usp-overlay--overlay-1"></div>
			    			<div class="product-range__usps-rollover-sq__usp-overlay product-range__usps-rollover-sq__usp-overlay--overlay-2"></div>
			    			<div class="product-range__usps-rollover-sq__usp-content">
			    				<div class="product-range__usps-rollover-sq__usp-content-header">
			    					<h3 class="product-range__usps-rollover-sq__usp-heading"><?= esc_html($heading); ?></h3>
			    				</div>
			    				<div class="product-range__usps-rollover-sq__usp-content-text">
			    					<div class="product-range__usps-rollover-sq__usp-desc">
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
			
		<?php if (have_rows('pr_cb__usps_rollover_sq__buttons_rp', $category)) : ?>
		<div class="row justify-content-center">
			<div class="col-11 col-lg-10 offset-lg-1 text-center">
			    <div class="product-range__usps-rollover-sq__buttons">
			        <?php while (have_rows('pr_cb__usps_rollover_sq__buttons_rp', $category)) : the_row();
			        	$label = get_sub_field('pr_cb__usps_rollover_sq__buttons_rp__button_label');
			            $destination = get_sub_field('pr_cb__usps_rollover_sq__buttons_rp__button_destination');
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

<script>
	/***********************************
	** Setting usp height to be same as width
	***********************************/
	$(document).ready(function() {
	    function updateUspHeight() {
	        if (window.innerWidth >= 992) {
	            $(".product-range__usps-rollover-sq__usp").each(function() {
	                var usp_container_width = $(this).outerWidth();
	                $(this).css("height", usp_container_width);
	            });
	        } else {
	            $(".product-range__usps-rollover-sq__usp").css("height", "");
	        }
	    }
	    updateUspHeight();
	    $(window).on("resize", function() {
	        updateUspHeight();
	    }).trigger("resize");
	    $(".product-range__usps-rollover-sq__usp").hover(
	        function() {
	            if (window.innerWidth >= 992) {
	                var usp_container_width = $(this).outerWidth();
	                $(this).find(".product-range__usps-rollover-sq__usp-overlay--overlay-2")
	                    .css("max-height", usp_container_width);
	                $(this).find(".product-range__usps-rollover-sq__usp-content-text")
	                    .css("max-height", usp_container_width);
	            }
	        },
	        function() {
	            if (window.innerWidth >= 992) {
	                $(this).find(".product-range__usps-rollover-sq__usp-overlay--overlay-2")
	                    .css("max-height", "");

	                $(this).find(".product-range__usps-rollover-sq__usp-content-text")
	                    .css("max-height", "");
	            }
	        }
	    );
	});
</script>