	<?php
		get_template_part('template-parts/global/footer');
		if(!is_singular( 'landing-pages' )) {
			get_template_part('template-parts/global/search-drawer');
			if (get_field('enable_order_form','option')) {
				get_template_part('template-parts/global/order-drawer');
			}
			get_template_part('template-parts/global/member-drawer');
			get_template_part('template-parts/global/login-drawer');
		}
		wp_footer();
	?>
</body>
</html>