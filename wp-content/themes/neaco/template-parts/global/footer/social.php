<div class="footer__social">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="footer__social__items">
					<?php if( have_rows('social_media_profiles','option') ) : ?>
					<?php while( have_rows('social_media_profiles','option') ) : the_row(); ?>
					<div class="footer__social__item mx-1 mx-md-2"><a href="<?php the_sub_field('link'); ?>" target="_blank"><?php the_sub_field('icon'); ?></a></div>
					<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>