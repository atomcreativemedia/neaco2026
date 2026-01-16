<?php

$pb_text_block_section_id = get_sub_field('section_id') ?: '';
$pb_text_block_section_background_colour = get_sub_field('section_background_colour') ?: 'rgb(255,255,255)';
$pb_text_block_content_colour = get_sub_field('pb_text_block_content_colour') ?: 'dark';
$pb_text_block_section_padding = get_sub_field('pb_text_block_section_padding') ?: 'pad';

?>

<section class="page-builder__contact <?= $pb_text_block_section_padding; ?>" id="<?= $pb_text_block_section_id; ?>" style="background-color:<?= $pb_text_block_section_background_colour; ?>;">

	<style>
	
		.get_in_touch_methods {
			display: grid;
			grid-template-columns: 1fr 1fr 1fr;		
			gap: 2rem;
			margin-bottom: 4rem;
		}
		
		.get_in_touch_methods .item .details {
			padding: 30px;
			box-sizing: border-box;
			height: 200px;
		}
		
		.get_in_touch_methods .item {
			display: flex;
			flex-direction: column;
			gap: 15px;
		}
		
		.get_in_touch_methods .item .details * {
			color: #ffffff;
		}
		
		.get_in_touch_methods .item .details h3 {
			font-weight: bold;
			font-size: 25px;
			margin-bottom: 10px;
		}
		
		.get_in_touch_methods .item .details p {
			margin: 0;
		}
		
		.get_in_touch_methods .item:nth-child(1) .details {
			background: #E25098;
		}
		
		.get_in_touch_methods .item:nth-child(2) .details {
			background: #FB813B;
		}
		
		.get_in_touch_methods .item:nth-child(3)  .details{
			background: #AAC642;
		}
		
		.get_in_touch_methods .item .method {
			display: flex;
			flex-direction: row;
			justify-content: center;
			align-items: center;
			gap: 15px;
			background-color: #3B4752;
			text-decoration: none;
			padding: 15px;
			box-sizing: border-box;
		}
	
		.get_in_touch_methods .item .method * {
			color: #ffffff;
			margin: 0;
		}
		
		.get_in_touch_methods .item .method p {
			font-weight: bold;
			font-size: 25px;
		}
		
		@media (max-width: 1299px) {
			.get_in_touch_methods .item .details {
				height: 230px;
			}
		}
		
		@media (max-width: 1199px) {
			.get_in_touch_methods .item .details {
				height: 205px;
				padding: 15px;
			}
		}
		
		@media (max-width: 1099px) {
			.get_in_touch_methods {
				gap: 1rem;
			}
			.get_in_touch_methods .item .details {
				height: 225px;
			}
		}
		
		@media (max-width: 991px) {
			.get_in_touch_methods {
				grid-template-columns: 1fr 1fr;
			}
			.get_in_touch_methods .item:last-child {
				transform: translateX(54%);
			}
			.get_in_touch_methods .item .details {
				height: 100%;
			}
		}
		
		@media (max-width: 599px) {
			.get_in_touch_methods .item .method p {
				font-size: 18px;
			}
			.get_in_touch_methods .item .method {
				padding: 10px;
			}
		}
		
		@media (max-width: 400px) {
			.get_in_touch_methods {
				grid-template-columns: 1fr;
			}
			.get_in_touch_methods .item:last-child {
				transform: translateX(0) !important;
			}
		}
	
	</style>

	<div class="container">
	
		<div class="content">
		
			<h2><strong>Get in touch</strong></h2>
			
			<p>Whether you are in the early design phase or finalising specifications, Neaco is here to help. Our team of experts is here with expert advice, fast answers, and tailored solutions to help you find the perfect solution for your next undertaking.</p>
		
		</div>
		
		<div class="get_in_touch_methods">
		
			<div class="item">
			
				<div class="details">
				
					<h3>Download a Specification Pack</h3>

					<p>Get detailed product information and technical drawings, curated especially for UK-based design and specification processes.</p>
				
				</div>
				
				<div class="method">
				
					<p>Contact us right away:</p>
				
				</div>
			
			</div>
			
			<div class="item">
			
				<div class="details">
				
					<h3>Call or Email for Advice</h3>

					<p>Speak with a neaco specialist for expert guidance on your project’s demands.</p>
				
				</div>
				
				<a href="tel: 01653695721" class="method">
				
					<i class="fa-light fa-phone" aria-hidden="true"></i>
				
					<p>01653 695 721</p>
				
				</a>
			
			</div>
		
			
			<div class="item">
			
				<div class="details">
				
					<h3>Explore Our Full Product Range</h3>

					<p>Discover neaco’s complete selection of high-performance decking, balcony, and balustrade systems.</p>
				
				</div>
				
				<a href="mailto: sales@neaco.co.uk" class="method">
				
					<i class="fa-light fa-envelope" aria-hidden="true"></i>
				
					<p>sales@neaco.co.uk</p>
				
				</a>
			
			</div>
			
		</div>
	
	</div>

	<div class="container">
		<div class="row justify-content-center">
			<?php if (get_field('contact_section_introduction','option')): ?>
			<div class="col-11 col-md-6">
			
				<div class="page-builder__contact__content content-colour--<?= $pb_contact_content_colour; ?>">
					
					<h2><strong>Or, just simply fill out our contact form. We will get back to you shortly after.</strong></h2>
					
					<p>With engineered performance, full fire compliance, and seamless specification, neaco delivers solutions you can trust, every single time.</p>
					
				</div>
				
			</div>
			<?php endif; ?>
			
			<div class="col-11 col-md-6">
				<div class="page-builder__contact__form">
					<?php if(get_field('contact_section_form_to_use','option')) {
						$form = get_field('contact_section_form_to_use','option');
						gravity_form($form['id'], false, false, false, '', true);
					} ?>
				</div>
			</div>
		</div>
	</div>
</section>