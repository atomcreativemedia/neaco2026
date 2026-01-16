<?php
if(get_sub_field('pb_on_page_navigation__navigation_items')) {
	$navigation_items = get_sub_field('pb_on_page_navigation__navigation_items');
}

if(isset($navigation_items)) : ?>
<section class="page-builder__on-page-navigation__nav-container">
	<div class="container-fluid">
		<div class="row justify-content-lg-center">
			<div class="col col-lg-10">
				<div class="page-builder__on-page-navigation__nav">
					<div class="page-builder__on-page-navigation__nav-open"><span>Jump to a Section</span></div>
					<ul class="page-builder__on-page-navigation__nav-items">
    			    	<?php foreach ($navigation_items as $nav_item) :
							$label = $nav_item['pb_on_page_navigation__navigation_item_label'];
							$dest_id = $nav_item['pb_on_page_navigation__navigation_item_dest']; ?>
						<li class="page-builder__on-page-navigation__nav-item"><a href="#<?= esc_attr($dest_id); ?>"><?= esc_html($label); ?></a></li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>