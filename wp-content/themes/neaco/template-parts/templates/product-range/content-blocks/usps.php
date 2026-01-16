<?php
$category = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

if(get_sub_field('pr_cb__usps__section_id', $category)) {
	$section_id = get_sub_field('pr_cb__usps__section_id', $category);
}

$intro_row_class = 'row justify-content-center';
$intro_col_class = 'col-12 col-md-10 col-lg-8 text-center';
$main_col_class = 'col-12 col-md-10';

$usps_style = get_sub_field('pr_cb__usps__usps_style') ?: 'simple';

if($usps_style != 'simple' && $usps_style != 'intro-left') {
	$intro_row_class = 'row justify-content-center';
	$intro_col_class = 'col-10 text-start';
	$main_col_class = 'col-10';
}

if($usps_style === 'intro-left') {
	$intro_row_class .= ' justify-content-lg-start';
	$intro_col_class = 'col-12 col-md-10 col-lg-5 col-xxl-4 offset-lg-1 text-center text-lg-start';
	$main_col_class = 'col-10 col-lg-5 offset-xxl-1';
}

if(get_sub_field('pr_cb__usps__usps_rp', $category)) {
	$usps = get_sub_field('pr_cb__usps__usps_rp', $category);
}

?>
<section class="product-range__usps" id="<?= esc_attr($section_id); ?>">
	<div class="container-fluid">
		<?php if ($usps_style !== 'slider') : ?>
			<?php if(get_sub_field('pr_cb__usps__introduction')) : ?>
			<div class="<?= esc_attr($intro_row_class); ?>">
				<div class="<?= esc_attr($intro_col_class); ?>">
					<div class="product-range__usps__intro">
						<?= wp_kses_post(get_sub_field('pr_cb__usps__introduction')); ?>
					</div>
				</div>
			<?php endif; ?>
			
			<?php if(isset($usps)) :
				$usps_class = 'product-range__usps__usps';
				if($usps_style === 'intro-left') {
					$usps_class .= ' p-0';
				} ?>
				<div class="<?= esc_attr($main_col_class); ?>">
				    <div class="<?= esc_attr($usps_class ); ?>">
				    	<div class="row justify-content-center gy-5">
	    			    	<?php foreach ($usps as $usp) :
	    			    		$single_usp_col_class = 'col-12 col-md-6 col-lg-4 col-xl text-center';
	    			    		$single_usp_class = 'product-range__usps__usp';
	    		    			if(isset($usp['pr_cb__usps__usps_rp__usp_icon'])) {
									$usp_icon = $usp['pr_cb__usps__usps_rp__usp_icon'];
								}
	    		    			if(isset($usp['pr_cb__usps__usps_rp__usp_heading'])) {
									$usp_head = $usp['pr_cb__usps__usps_rp__usp_heading'];
								}
	    		    			if(isset($usp['pr_cb__usps__usps_rp__usp_text'])) {
									$usp_text = $usp['pr_cb__usps__usps_rp__usp_text'];
								}
								if($usps_style != 'simple' && $usps_style != 'intro-left') {
		    			    		if(isset($usp['pr_cb__usps__usps_rp__usp_bg_image'])) {
										$usp_image = $usp['pr_cb__usps__usps_rp__usp_bg_image'];
										$image_url = $usp_image['url']; // Full-size image URL
								        $image_alt = $usp_image['alt']; // Alt text
								        $image_size = $usp_image['sizes']['large'];
								        
								        $single_usp_col_class = 'col-12 col-lg-4 text-start';
								        $single_usp_class .= ' product-range__usps__usp--image bg-img';
									}
								} if($usps_style === 'intro-left') {
									$single_usp_col_class = 'col-12';
								} ?>
	    		    			<div class="<?= esc_attr($single_usp_col_class); ?>">
	    		    				<div class="<?= esc_attr($single_usp_class); ?>"<?php if($usps_style != 'simple' && $usps_style != 'intro-left') { echo 'style="background-image:url('.esc_url($image_size).');"'; } ?>>
	    		    					<?php if($usps_style != 'simple' && $usps_style != 'intro-left') {
	    		    						echo '<div class="product-range__usps__usp-overlay the-overlay"></div>';
	    		    						echo '<div class="product-range__usps__usp-overlay-2 the-overlay-2"></div>';
	    		    					} ?>
	    		    					<div class="product-range__usps__usp-content the-content">
		    		    					<?php if(isset($usp_icon)) {
		    		    						echo '<div class="product-range__usps__usp-icon the-icon">';
		    		    						echo wp_kses_post($usp_icon);
		    		    						echo '</div>';
		    		    					} if(isset($usp_head)) {
												echo '<p class="product-range__usps__usp-heading the-heading">'.esc_html($usp_head).'</p>';
											} if(isset($usp_text)) {
												echo '<p class="product-range__usps__usp-text the-text">'.wp_kses_post($usp_text).'</p>';
											} ?>
		    		    				</div>
	    		    				</div>
	    		    			</div>
	    		    		<?php endforeach; ?>
				    	</div>
				    </div>
		    	</div>
		    </div>
			<?php endif; ?>
			
			<?php if(get_sub_field('pr_cb__usps__lower_content')) : ?>
			<div class="row justify-content-center">
				<div class="col-10 col-lg-8 text-center">
					<div class="product-range__usps__lower-content">
						<?= wp_kses_post(get_sub_field('pr_cb__usps__lower_content')); ?>
					</div>
				</div>
			</div>
			<?php endif; ?>
			
			<?php if (have_rows('pr_cb__usps__buttons_rp')) : ?>
			<div class="row justify-content-center">
				<div class="col-10 col-lg-8 text-center">
				    <div class="product-range__usps__lower-content-buttons">
				        <?php while (have_rows('pr_cb__usps__buttons_rp')) : the_row();
				        	$label = get_sub_field('pr_cb__usps__buttons_rp__button_label');
				            $destination = get_sub_field('pr_cb__usps__buttons_rp__button_destination');
				            if ($label && $destination) {
				            	echo '<p class="button"><a href="'.esc_url($destination).'">'.esc_html($label).'</a></p>';
				            } ?>
				        <?php endwhile; ?>
				    </div>
				</div>
			</div>
			<?php endif; ?>
			
		<?php else : ?>
			<div class="row justify-content-center align-items-md-center">
				<?php if(get_sub_field('pr_cb__usps__introduction')) : ?>
					<div class="col-12 col-md-5 col-xxl-5 mb-4 mb-md-0 offset-md-1 pe-xl-5">
						<div class="product-range__usps__slider-intro">
							<?= wp_kses_post(get_sub_field('pr_cb__usps__introduction')); ?>
							<?php if (have_rows('pr_cb__usps__buttons_rp')) : ?>
							    <div class="product-range__usps__slider-intro-buttons">
							        <?php while (have_rows('pr_cb__usps__buttons_rp')) : the_row();
							        	$label = get_sub_field('pr_cb__usps__buttons_rp__button_label');
							            $destination = get_sub_field('pr_cb__usps__buttons_rp__button_destination');
							            if ($label && $destination) {
							            	echo '<p class="button"><a href="'.esc_url($destination).'">'.esc_html($label).'</a></p>';
							            } ?>
							        <?php endwhile; ?>
							    </div>
							<?php endif; ?>
						</div>
					</div>
				<?php endif; ?>
				
				<?php if(isset($usps)) : ?>
				<div class="col-12 col-md-6 pe-md-0">
					<div class="product-range__usps__slider">
				    	<?php foreach ($usps as $usp) :
			    			if(isset($usp['pr_cb__usps__usps_rp__usp_icon'])) {
								$usp_icon = $usp['pr_cb__usps__usps_rp__usp_icon'];
							}
			    			if(isset($usp['pr_cb__usps__usps_rp__usp_heading'])) {
								$usp_head = $usp['pr_cb__usps__usps_rp__usp_heading'];
							}
			    			if(isset($usp['pr_cb__usps__usps_rp__usp_text'])) {
								$usp_text = $usp['pr_cb__usps__usps_rp__usp_text'];
							}
				    		if(isset($usp['pr_cb__usps__usps_rp__usp_bg_image'])) {
								$usp_image = $usp['pr_cb__usps__usps_rp__usp_bg_image'];
								$image_url = $usp_image['url']; // Full-size image URL
						        $image_alt = $usp_image['alt']; // Alt text
						        $image_size = $usp_image['sizes']['large'];
							} ?>
						<div class="product-range__usps__slider-item">
							<div class="product-range__usps__slider-item-background bg-img" style="background-image:url(<?php echo esc_url($image_size); ?>);"></div>
							<div class="product-range__usps__slider-item-overlay the-overlay">
								<div class="product-range__usps__slider-item-content-container the-content-container text-center">
									<?php if(isset($usp_icon)) {
			    						echo '<div class="product-range__usps__slider-item-icon the-icon">';
			    						echo wp_kses_post($usp_icon);
			    						echo '</div>';
			    					} ?>
			    					
									<div class="product-range__usps__slider-item-content the-content text-center">
										<?php if(isset($usp_head)) {
											echo '<h2 class="product-range__usps__slider-item-title the-title">'.esc_html($usp_head).'</h2>';
										} if(isset($usp_text)) {
											echo '<p class="product-range__usps__slider-item-description the-description">'.wp_kses_post($usp_text).'</p>';
										} ?>
									</div>
								</div>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
					<div class="product-range__usps__slider-arrows"></div>
				</div>
				<?php endif; ?>
			</div>
			
			<?php if(get_sub_field('pr_cb__usps__lower_content')) : ?>
				<div class="row justify-content-center">
					<div class="col-10 col-lg-8 text-center">
						<div class="product-range__usps__lower-content">
							<?= wp_kses_post(get_sub_field('pr_cb__usps__lower_content')); ?>
						</div>
					</div>
				</div>
			<?php endif; ?>
		</div>
	<?php endif; ?>
</section>
