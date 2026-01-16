<?php
if(get_field('mission_statement_section_id')) {
	$mission_statement_section_id = get_field('mission_statement_section_id');
} else {
	$mission_statement_section_id = 'mission-statement';
}
?>
<section class="front-page__mission-statement" id="<?php echo $mission_statement_section_id; ?>">
	<div class="container">
		<?php if (get_field('mission_statement_intro_heading') || get_field('mission_statement_intro_subheading')): ?>
		<div class="row justify-content-center justify-content-md-center">
			<div class="col-11 col-md-10 text-center">
				<div class="front-page__mission-statement__heading">
					<?php if (get_field('mission_statement_intro_heading')) : ?>
						<h2><?php the_field('mission_statement_intro_heading'); ?></h2>
					<?php endif;
					if (get_field('mission_statement_intro_subheading')) : ?>
						<h5><?php the_field('mission_statement_intro_subheading'); ?></h5>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<?php endif;
		if (get_field('mission_statement_column_1') || get_field('mission_statement_column_2')) :
			if(get_field('mission_statement_column_1') && !get_field('mission_statement_column_2')) {
				$fpms_col_class = 'col-11 col-md-8';
			} elseif(get_field('mission_statement_column_2') && !get_field('mission_statement_column_1')) {
				$fpms_col_class = 'col-11 col-md-8';
			} elseif(get_field('mission_statement_column_1') && get_field('mission_statement_column_2')) {
				$fpms_col_class = 'col-11 col-md-5';
			}
		?>
		<div class="row">
			<div class="col">
				<div class="front-page__mission-statement__content">
					<div class="row justify-content-center">
						<?php if(get_field('mission_statement_column_1')) : ?>
						<div class="<?= $fpms_col_class; ?> text-center">
							<div class="front-page__mission-statement__column_1">
								<?php the_field('mission_statement_column_1'); ?>
							</div>
						</div>
						<?php endif;
						if(get_field('mission_statement_column_2')) : ?>
						<div class="<?= $fpms_col_class; ?> text-center<?php if(get_field('mission_statement_column_1')) : ?> mt-4 mt-md-0<?php endif; ?>">
							<div class="front-page__mission-statement__column_2">
								<?php the_field('mission_statement_column_2'); ?>
							</div>
						</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
</section>