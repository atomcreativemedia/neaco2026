<?php $department = get_field_object( 'career_post_department' );
$value = $department['value'];
$label = $department['choices'][ $value ]; ?>
<section class="career-post__content">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-11 col-md-6 px-md-5">
				<div class="career-post__heading">
					<h2><?php the_field('opportunity_title'); ?></h2>
					<?php if ( (get_field('contract')) || (get_field('salary')) || (get_field('location')) ) : ?>
						<p class="career-post__options"><?php if (get_field('contract')) : ?><span class="career-post__option career-post__option--contract"><?php the_field('contract'); ?></span><?php endif; ?><?php if (get_field('salary')) : ?><span class="career-post__option career-post__option--salary">£<?php the_field('salary'); ?></span><?php endif; ?><?php if (get_field('location')) : ?><span class="career-post__option career-post__option--location"><?php the_field('location'); ?></span><?php endif; ?></p>
					<?php endif; ?>
					<h5 class="career-post__department"><?php echo esc_html($label); ?></h5>
				</div>
				<?php if(get_field('main_article_display_main_article')) : ?>
				<div class="career-post__description">
					<?php the_content(); ?>
				</div>
				<?php endif; ?>
			</div>
			
			<div class="col-11 col-md-6 px-md-5">
				<div class="career-post__application">
					<h4><strong>Apply</strong> for this Position</h4>
					<?php $the_key = $value;
					while (have_rows('careers_departments','option')) {
						the_row();
						if (get_sub_field('department_name_value') != $the_key) {
							// not our row
						} else {
							$form = get_sub_field('application_form');
							gravity_form($form['id'], false, false, false, '', true);
						}
						// will get here if this is our row
					} ?>
				</div>
			</div>
		</div>
	</div>
</section>