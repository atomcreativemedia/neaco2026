<section class="landing-page-drawer">
	<div class="landing-page-drawer__layer-1">
		<div class="landing-page-drawer__main-container">
			<div class="landing-page-drawer__header">
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-6 col-md-3">
							<div class="landing-page-drawer__logo-container">
								<?php
									$order_form_logo = get_field('order_form_logo','option');
									// vars
									$order_form_logo_url = $order_form_logo['url'];
									$order_form_logo_alt = $order_form_logo['alt'];
									$order_form_logo_title = $order_form_logo['title'];
								?>
								<a href="<?php echo home_url(); ?>"><img
									src="<?php echo $order_form_logo_url; ?>"
									alt="<?php echo $order_form_logo_alt; ?>"
									title="<?php echo $order_form_logo_title; ?>"
									class="img-fluid landing-page-drawer__logo"></a>
							</div>
						</div>
						<div class="col-6 col-md-9">
							<div class="landing-page-drawer__close close-form">
								<span class="form-click"><i class="fa-light fa-times"></i></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="landing-page-drawer__body">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col col-md-6">
							<div class="landing-page-drawer__form">
								<?php if(get_field('cta_form_to_use')) {
									$form = get_field('cta_form_to_use');
									gravity_form($form['id'], false, false, false, '', true, 200);
								} ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>