<section class="user-login-form">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-4">
				<h5>Please log in to view this content</h5>
				<p class="smol"><a href="<?php the_field('account_registration_page','option'); ?>">Don't have an account?</a></p>
				<div class="user-login-form__the-form">
					<?php echo do_shortcode('[custom_login_form]'); ?>
				</div>
			</div>
		</div>
	</div>
</section>