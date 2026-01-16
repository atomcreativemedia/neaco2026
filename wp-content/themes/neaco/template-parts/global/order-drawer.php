<section class="order-drawer">
	<div class="order-drawer__layer-1">
		<div class="order-drawer__main-container">
			<div class="order-drawer__header">
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-6 col-md-3">
							<div class="order-drawer__logo-container">
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
									class="img-fluid order-drawer__logo"></a>
							</div>
						</div>
						<div class="col-6 col-md-9">
							<div class="order-drawer__close close-order">
								<span class="order-click"><i class="fa-light fa-times"></i></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="order-drawer__body">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col col-md-6">
							<div class="order-drawer__form">
								<?php if(get_field('top_bar_order_form','option')) {
									$form = get_field('top_bar_order_form','option');
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