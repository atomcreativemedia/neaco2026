<section class="contact-page__map">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col p-4">
				<div class="contact-page__the-map">
					<?php if (get_field('google_map_code')) : ?>
						<?php echo get_field('google_map_code'); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>