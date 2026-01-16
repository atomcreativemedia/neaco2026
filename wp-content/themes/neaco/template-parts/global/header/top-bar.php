<section class="header__top-bar">
	<div class="px-0 container-md text-center text-md-start">
		<div class="d-flex">
			<div class="flex-grow-1 flex-md-grow-0 header__top-bar__item">
				<div class="header__top-bar__item-content header__top-bar__item-content--contact">
					<span class="header__top-bar__item-content"><a href="tel:<?php the_field('contact_number','option') ?>" target="_blank"><?php the_field('primary_contact_number_icon','option') ?></i><span class="d-none d-md-inline-block ms-md-2"><?php the_field('contact_number','option') ?></span></a></span>
				</div>
			</div>
			<div class="flex-grow-1 flex-md-grow-0 header__top-bar__item">
				<div class="header__top-bar__item-content header__top-bar__item-content--contact">
					<span class="header__top-bar__item-content"><a href="mailto:<?php the_field('email_address','option') ?>" target="_blank"><?php the_field('primary_email_address_icon','option') ?></i><span class="d-none d-md-inline-block ms-md-2"><?php the_field('email_address','option') ?></span></a></span>
				</div>
			</div>
			
			<?php if (get_field('enable_order_form','option')) : ?>
			<div class="flex-grow-1 flex-md-grow-0 ms-auto header__top-bar__item">
				<div class="header__top-bar__item-content header__top-bar__item-content--order order-click">
					<i class="fa-light fa-box"></i><span class="ms-2">Order Your Free Sample!</span>
				</div>
			</div>
			<?php endif; ?>
			
			<?php if (get_field('top_bar_latest_news_link','option')) : ?>
			<div class="flex-fill header__top-bar__item d-xl-none">
				<div class="header__top-bar__item-content header__top-bar__item-content--latest-news">
					<a href="<?php the_field('top_bar_latest_news_link','option') ?>" class="text-md-center"><i class="fa-light fa-bell"></i><span class="ms-2">Latest News</span></a>
				</div>
			</div>
			<?php endif; ?>
			
			<?php if (get_field('top_bar_spec_builder_link','option')) : ?>
			<div class="flex-fill header__top-bar__item d-xl-none">
				<div class="header__top-bar__item-content header__top-bar__item-content--spec-builder">
					<a href="<?php the_field('top_bar_spec_builder_link','option') ?>" class="text-lg-center"><i class="fa-light fa-puzzle"></i><span class="ms-2">Spec Builder</span></a>
				</div>
			</div>
			<?php endif; ?>
			
		</div>
	</div>
</section>