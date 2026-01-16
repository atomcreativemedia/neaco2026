<section class="search-drawer">
	<div class="search-drawer__layer-1">
		<div class="search-drawer__main-container">
			<div class="search-drawer__header">
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-6 col-md-3">
							<div class="search-drawer__logo-container">
								<?php
									$search_form_logo = get_field('search_form_logo','option');
									// vars
									$search_form_logo_url = $search_form_logo['url'];
									$search_form_logo_alt = $search_form_logo['alt'];
									$search_form_logo_title = $search_form_logo['title'];
								?>
								<a href="<?php echo home_url(); ?>"><img
									src="<?php echo $search_form_logo_url; ?>"
									alt="<?php echo $search_form_logo_alt; ?>"
									title="<?php echo $search_form_logo_title; ?>"
									class="img-fluid search-drawer__logo"></a>
							</div>
						</div>
						<div class="col-6 col-md-9">
							<div class="search-drawer__close close-search">
								<span class="search-click"><i class="fa-light fa-times"></i></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="search-drawer__body">
				<div class="search-drawer__form">
					<form method="get" action="<?php bloginfo('url'); ?>">
						<h3>Search Our Website</h3>
						<fieldset>
							<div class="form-input-containter">
								<input type="text" name="s" value="" placeholder="search&hellip;" maxlength="50" required="required" id="search-input" />
							</div>
							<button type="submit"><span></span></button>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>