<section class="account-register__main">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10">
				<div class="row">
					<div class="col-md-6">
						<div class="account-register__intro">
							<?php
							$rdir = $_GET['rdir'];
							$fname = $_GET['fname'];
							$lname = $_GET['lname'];
							if (($rdir == 'cfrd') || ($rdir == 'odrd') || ($rdir == 'nlrd')) :
							?>
							<h2>Thanks for choosing to register with us, <?= $fname; ?>.</h2>
							<p>To continue setting up your account, please complete the form on this page.</p>
							<?php else : ?>
							<h2>Register Your Membership Account</h2>
							<?php endif; ?>
							<p>Please note, all fields are required for approved membership.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="account-register__the-form">
			                <?php if(get_field('account_registration_form','option')) {
			                	$form = get_field('account_registration_form','option');
			                	gravity_form($form['id'], false, false, false, '', true);
			                } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>