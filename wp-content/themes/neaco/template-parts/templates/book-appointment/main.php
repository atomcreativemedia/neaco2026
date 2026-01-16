<?php
/* Get user info */
global $current_user, $wp_roles;
?>
<section class="book-appointment__main">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10">
				<div class="row">
					<div class="col-md-6">
						<div class="user-account__intro">
							<?php if (get_field('member_bookings_introduction','option')) {
								the_field('member_bookings_introduction','option');
							} ?>
						</div>
					</div>
					<div class="col-md-6">
						<div class="book-appointment__the-form">
							<?php if(get_field('member_bookings_form_to_use','option')) {
								$form = get_field('member_bookings_form_to_use','option');
								gravity_form($form['id'], false, false, false, '', true);
							} ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>