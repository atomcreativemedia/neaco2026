<section class="header__main sticky-header">
	<div class="container-fluid container-xl">
		<div class="row align-items-center">
			<div class="col-5 col-md-3">
                <div class="header__main__logo-container sticky-header">
					<?php
					if(get_field('header_logo','option')) :
						$image = get_field('header_logo','option');
						// vars
						$image_url = $image['url'];
						$image_alt = $image['alt'];
						$image_title = $image['title'];
					?>
					
					<?php
					$slug = get_query_var('pagename'); 
					if ($slug != 'new-homepage') {
					?>
						<a href="<?php echo home_url(); ?>"><img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" title="<?php echo $image_title; ?>" class="img-fluid"></a>
					<?php
					} else {
					?>
						<a href="<?php echo home_url(); ?>"><img src="https://www.neaco.co.uk/wp-content/uploads/2025/11/neaco-logo.svg" alt="<?php echo $image_alt; ?>" title="<?php echo $image_title; ?>" class="img-fluid"></a>
					<?php
					}
					?>
					
					
					
					<?php else : ?>
					<a href="<?php echo home_url(); ?>"><?php the_field('website_name','option'); ?></a>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-7 col-md-9">
				<div class="header__main__utilities">
					<div class="d-flex justify-content-end align-items-center">
						<div class="header__main__utility header__main__utility--search sticky-header">
							<span class="header__main__utility-content search-click"><i class="fa-light fa-search"></i><span class="d-none d-md-inline-block ms-md-2">Search</span></span>
						</div>
						
						<?php if (get_field('top_bar_latest_news_link','option')) : ?>
						<div class="header__main__utility header__main__utility--latest-news d-none d-xl-inline-block sticky-header">
							<span class="header__main__utility-content"><a href="<?php the_field('top_bar_latest_news_link','option') ?>"><i class="fa-light fa-bell"></i><span class="d-none d-md-inline-block ms-md-2">Latest News</span></a></span>
						</div>
						<?php endif; ?>
						
						<?php if (get_field('top_bar_spec_builder_link','option')) : ?>
						<div class="header__main__utility header__main__utility--spec-builder d-none d-xl-inline-block sticky-header">
							<span class="header__main__utility-content"><a href="<?php the_field('top_bar_spec_builder_link','option') ?>"><i class="fa-light fa-puzzle"></i><span class="d-none d-md-inline-block ms-md-2">Spec Builder</span></a></span>
						</div>
						<?php endif; ?>
						
						<div class="header__main__utility header__main__utility--login sticky-header">
							<div class="login-click">
								<?php if (is_user_logged_in()) {
									$login_icon = 'fa-user-unlock';
								} else {
									$login_icon = 'fa-user-lock';
								} ?>
								
								<span class="header__main__utility-content"><i class="fa-light <?= $login_icon; ?>"></i><span class="d-none d-md-inline-block ms-md-2">Architect's Lounge</span></span>
							</div>
						</div>
						
						<?php
						
						$slug = get_query_var('pagename'); 

						if ($slug == 'new-homepage') {
							
						?>
						
						<?php if (get_field('top_bar_spec_builder_link','option')) : ?>
						<div class="header__main__utility header__main__contact d-none d-xl-inline-block sticky-header">
							<span class="header__main__utility-content"><a href="<?php the_field('top_bar_spec_builder_link','option') ?>"><i class="fa-light fa-phone"></i><span class="d-none d-md-inline-block ms-md-2">Contact us</span></a></span>
						</div>
						<?php endif; ?>
						
						<?php
						
						}
						
						?>
						
						<div class="header__main__utility header__main__utility--menu-click d-lg-none">
							<div class="menu-click">
								<i class="fa-light fa-bars"></i>
							</div>
						</div>
	                </div>
				</div>
            </div>
            <div class="col-md-12 d-none d-lg-inline-block">
            	<div class="header__main__nav header__main__nav--desktop sticky-header">
                	<?php //wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
                	<?php
                	wp_nav_menu([
                		'theme_location' => 'main-menu',
                		'walker' => new Neaco_Mega_Menu_Walker(),
                		'container' => false,
                	]);
                	?>
                </div>
            </div>
		</div>
	</div>
</section>