<?php if( have_rows('careers_departments','option') ) : ?>
<div class="careers__filters">
	<h4>Filter by Department</h4>
	<?php while( have_rows('careers_departments','option') ) : the_row();
		$slug = get_sub_field('department_name_value');
		$name = get_sub_field('department_name'); ?>
	<div class="careers__filter careers__filter--<?= $slug; ?>">
		<input checked type="checkbox" name="<?= $slug; ?>" value="<?= $slug; ?>" id="<?= $slug; ?>" class="careers__filter-checkbox careers__filter-checkbox--<?= $slug; ?>">
		<label class="careers__filter-label careers__filter-label--<?= $slug; ?>" for="<?= $slug; ?>"><?= $name; ?></label>
	</div>
	<?php endwhile; ?>
</div>
<?php endif; ?>