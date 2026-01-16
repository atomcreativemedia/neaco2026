<section class="projects__categories">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="projects__categories-nav">
					<?php if(is_tax('project_category')) : ?>
					<span class="projects__categories-nav-item"><a href="/about/projects/">All Projects</a></span>
					<?php endif; ?>
					
					<?php
					$args = array (
						'taxonomy' => 'project_category',
						'hide_empty' => true,
						'orderby' => 'ID'
					);
					$categories = get_categories($args);
					foreach( $categories as $category ) :
						$catID = esc_html( $category->term_id );
						$name = esc_html( $category->name );
						$slug = esc_html( $category->slug );
					?>
					<span class="projects__categories-nav-item"><a href="/project-category/<?php echo $slug; ?>"><?php echo $category->name; ?></a></span>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>