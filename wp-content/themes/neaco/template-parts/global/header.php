<?php

	$slug = get_query_var('pagename'); 

	if ($slug != 'new-homepage') {

	?>
		<header class="header sticky-header">
			<?php #get_template_part('template-parts/global/header/top-bar'); ?>
			<?php get_template_part('template-parts/global/header/main'); ?>
		</header>

	<?php
	} else {?>

	<header style="background-color: transparent;" class="header sticky-header">
		<?php #get_template_part('template-parts/global/header/top-bar'); ?>
		<?php get_template_part('template-parts/global/header/main'); ?>
	</header>

	<?php	
	}
?>
