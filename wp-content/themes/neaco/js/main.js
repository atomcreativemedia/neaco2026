// JavaScript Document


$(document).ready(function () {
    function animateElements(selector, extraProps = {}) {
        $(selector).each(function (index, element) {
            gsap.set(element, { opacity: 0, y: 100 });

            gsap.to(element, {
                opacity: 1,
                y: 0,
                duration: 0.75,
                scrollTrigger: {
                    trigger: element,
                    start: "top 80%",
                    end: "bottom 20%",
                    toggleActions: "play none none none",
                },
                delay: index * 0.5,
            });
        });
    }

    // Call the function for each selector
    animateElements('.features_graphic .item');
	animateElements('.why_choose_neaco_grid .item');
	animateElements('.why_engineers_architects_neaco_grid .item');
	animateElements('.decking_features_grid .decking_feature_card');
	animateElements('.product_offerings_container');
	animateElements('.get_in_touch_methods .item');
});

$(document).ready(function() {
    let currentIndex = 0;
    const items = $('.accordion_item'); // Get all accordion items
    const totalItems = items.length;
    let timeoutId = null; // Store timeout ID to clear it when necessary

    // Function to set the selected item by index
    function setSelectedItem(index) {
        // Clear any existing timeout to prevent overlapping animations
        if (timeoutId) {
            clearTimeout(timeoutId);
        }

        // Remove 'selected' from all items and their open-content sections
        items.removeClass('selected'); 
        items.find('.open_content').removeClass('selected'); // Remove 'selected' from all open-content elements
        
        // Add 'selected' class to the desired item immediately
        $(items[index]).addClass('selected');
        
        // Add a 0.5s delay before adding the 'selected' class to the .open-content
        timeoutId = setTimeout(function() {
            $(items[index]).find('.open_content').addClass('selected');
        }, 500); // 500ms delay

        // Update current index
        currentIndex = index;
    }

    // Initially add 'selected' class to the first accordion item
    setSelectedItem(0);

    // Handle click on accordion items
    items.click(function() {
        const index = items.index(this); // Get index of clicked item
		if (index === currentIndex) {
			return;
		}

        setSelectedItem(index);
    });

    // Function to handle next and previous navigation
    function navigate(direction) {
        if (direction === 'next') {
            const nextIndex = (currentIndex + 1) % totalItems; // Loop back if on the last item
            setSelectedItem(nextIndex);
        } else if (direction === 'prev') {
            const prevIndex = (currentIndex - 1 + totalItems) % totalItems; // Loop to last item if on the first
            setSelectedItem(prevIndex);
        }
    }
	
	// Handle click on next and previous arrows
    $('.accordion_controls_container .next').click(function() {
        navigate('next');
    });

    $('.accordion_controls_container .prev').click(function() {
        navigate('prev');
    });

});

$(document).ready(function() {
    
    /***********************************
	** Menu Drawer Control
	***********************************/
	var menu_click = $(".menu-click");
	var menu = $(".menu-drawer__layer-1");
	menu_click.on("click", function() {
		menu.toggleClass("open");
	});
		
		/***********************************
		** 1st Level Child Menu
		***********************************/
		// Add chevron triggers
		$(".menu-drawer .menu-item-has-children > ul.sub-menu").after(
			"<span class=\"child-click\"><i class=\"fa-light fa-chevron-right\"></i></span>"
		);
		$(".menu-drawer .has-mega-menu > .mega-menu").after(
			"<span class=\"child-click\"><i class=\"fa-light fa-chevron-right\"></i></span>"
		);
		
		// Add back controls
		// 1) Normal sub-menus: button inside an li (valid inside ul)
		$(".menu-drawer .menu-item-has-children > ul.sub-menu").each(function() {
			var $subMenu = $(this);
			
			// Prevent duplicates
			if ($subMenu.children("li.parent-click").length) {
				return;
			}
			
			$subMenu.prepend(
				"<li class=\"parent-click\">" +
					"<button type=\"button\" class=\"go-back\">" +
						"<i class=\"fa-light fa-chevron-left\"></i>" +
					"</button>" +
				"</li>"
			);
		});
		
		// 2) Mega menus: button directly inside mega-menu__inner (valid inside div)
		$(".menu-drawer .has-mega-menu > .mega-menu").each(function() {
			var $mega = $(this);
			var $inner = $mega.find(".mega-menu__inner").first();
			
			if (!$inner.length) {
				$inner = $mega;
			}
			
			// Prevent duplicates
			if ($inner.children("button.parent-click.go-back").length) {
				return;
			}
			
			$inner.prepend(
				"<button type=\"button\" class=\"parent-click go-back\">" +
					"<i class=\"fa-light fa-chevron-left\"></i>" +
				"</button>"
			);
		});
		
		// Cache elements
		var parentMenu = $(".menu-drawer .menu");
		
		// Open handler (simple - adds active to whichever panel exists)
		$(".menu-drawer .child-click").on("click", function(e) {
			e.preventDefault();
			
			parentMenu.addClass("swiped");
			
			// Activate the sibling panel (either .sub-menu or .mega-menu)
			$(this).siblings(".sub-menu, .mega-menu").addClass("active");
		});
		
		// Back handler (works for both sub-menus and mega panels)
		$(".menu-drawer .go-back").on("click", function(e) {
			e.preventDefault();
			
			// Remove active from the nearest panel container
			$(this).closest(".sub-menu, .mega-menu").removeClass("active");
			
			// If nothing else is active, remove swipe state
			if ($(".menu-drawer .sub-menu.active, .menu-drawer .mega-menu.active").length === 0) {
				parentMenu.removeClass("swiped");
			}
		});
	
	
	/***********************************
	** Search Drawer Control
	***********************************/
	var search_click = $(".search-click");
	var search = $(".search-drawer__layer-1");
	search_click.on("click", function() {
		search.toggleClass("open");
	});
	
	/***********************************
	** Order Drawer Control
	***********************************/
	var order_click = $(".order-click");
	var order = $(".order-drawer__layer-1");
	order_click.on("click", function() {
		order.toggleClass("open");
	});
	
	/***********************************
	** Login Drawer Control
	***********************************/
	var login_click = $(".login-click");
	var login = $(".login-drawer__layer-1");
	login_click.on("click", function() {
		login.toggleClass("open");
	});
	
	/***********************************
	** Landing Page Drawer Control
	***********************************/
	var form_click = $(".form-click");
	var form = $(".landing-page-drawer__layer-1");
	form_click.on("click", function() {
		form.toggleClass("open");
	});
	
	/***********************************
	** Product Range On-Page Nav Control
	***********************************/
	var open_click = $(".product-range__heading__nav-open");
	var nav_items = $(".product-range__heading__nav-items");
	open_click.on("click", function() {
		open_click.toggleClass("open");
		nav_items.toggleClass("open");
	});
	
	
	/***********************************
	** Click to scroll to on-page anchor tag
	***********************************/
    var container = 'html, body';
    var theOffset = 99;
    if ($(window).width() > 768) {
        var theOffset = 156;
    }
	$('a[href*="#"]:not([href="#"])').click(function() {
		if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
					$(container).animate({
						scrollTop: target.offset().top - theOffset
					}, 500);
					return false;
			}
		}
	});
	
	
	/***********************************
	** Handling the header change on scroll
	***********************************/
	$(function() {
		
		//giving the body a margin on the top equal to the header height
		$(window).load(function() {
			var header_height = $(".header").outerHeight();
			$("body.sticky-header").css("margin-top", header_height);
		});
		
		//caches a jQuery object containing the header element
		var header_object = $(".sticky-header");
		header_object.addClass("noscroll");
		
		$(window).scroll(function() {
			var scroll = $(window).scrollTop();
			if (scroll >= 100) {
				header_object.addClass("scrolled");
				header_object.removeClass("noscroll");
			} else {
				header_object.addClass("noscroll");
				header_object.removeClass("scrolled");
			}
		});
	});
	
	
	/***********************************
	** Peeking out the top-bar when scrolling back up
	***********************************/
	$(function() {
		
		//caches a jQuery object containing the header element
		var top_bar_object = $(".header__top-bar");
		
		var position = $(window).scrollTop(); 
		
		$(window).scroll(function() {
			var scroll = $(window).scrollTop();
			if (scroll > position) {
				top_bar_object.removeClass("peek");
			} else {
				top_bar_object.addClass("peek");
			}
			position = scroll;
		});
	});
	
    
	/***********************************
	** Element Slide-In Animations
	***********************************/
	$(function() {
		var $elements = $('.animateBlock.notAnimated'); //contains all elements of nonAnimated class
		var $window = $(window);
		
		$window.on('scroll', function(e) {
			$elements.each(function(i, elem) { //loop through each element
				if ($(this).hasClass('animated')) // check if already animated
				return;
				animateMe($(this));
			});			
		});
	});
	function animateMe(elem) {
		var winTop = $(window).scrollTop(); // calculate distance from top of window
		var winBottom = winTop + $(window).height();
		var elemTop = $(elem).offset().top; // element distance from top of page
		var elemBottom = elemTop + $(elem).height();

		if ((elemBottom <= winBottom) && (elemTop >= winTop)) {
			// exchange classes if element visible
			$(elem).removeClass('notAnimated').addClass('animated');
		}
	}
	
	
	
	
	
	$(function() {
		var $popInElements = $('.popIn');
		var $window = $(window);
		
		$window.on('scroll', function(e) {
			$popInElements.each(function(i, elem) { //loop through each element
				if ($(this).hasClass('poppedIn')) // check if already animated
				return;
				popIn($(this));
			});			
		});
	});
	function popIn(elem) {
		var winTop = $(window).scrollTop(); // calculate distance from top of window
		var winBottom = winTop + $(window).height();
		var elemTop = $(elem).offset().top; // element distance from top of page
		var elemBottom = elemTop + $(elem).height();
		
		if ((elemBottom <= winBottom) && (elemTop >= winTop)) {
			// exchange classes if element visible
			$(elem).removeClass('popIn').addClass('poppedIn');
		}
	}
    
    
	/***********************************
	** Slideshow Control
	***********************************/
    $('.slider').slick({
		autoplay: true,
  		autoplaySpeed: 4000,
  		arrows: false,
  		dots: true,
		appendDots: '.slider__pager',
  		dotsClass: 'pager__dots'
	});
	
	$('.page-heading__splash-slider').slick({
		autoplay: true,
  		autoplaySpeed: 4000,
  		arrows: false,
  		dots: false,
  		fade: true,
  		speed: 1000
	});
	
	$('.page-builder__info-slider__info-slider-container').slick({
		autoplay: false,
  		arrows: true,
  		adaptiveHeight: true,
  		dots: true,
		appendDots: '.slider__pager',
  		dotsClass: 'pager__dots',
  		prevArrow: '<button type="button" class="slick-prev">Previous</button>'
	});
	$('.page-builder__specifications__slider').on('init', function(event, slick){
		var dots = $( '.page-builder__specifications__slider-dots li' );
		dots.each( function( k, v){
			$(this).find( 'button' ).addClass( 'heading'+ k );
		});
		var items = slick.$slides;
		items.each( function( k, v){
			var text = $(this).find( '.page-builder__specifications__spec-category-slide-title' ).text();
			$( '.heading' + k ).text(text);
		});
	});
	$('.page-builder__specifications__slider').slick({
		autoplay: false,
  		arrows: false,
  		adaptiveHeight: true,
  		dots: true,
  		draggable: false,
		appendDots: '.page-builder__specifications__slider-pager',
  		dotsClass: 'page-builder__specifications__slider-dots',
	});
	$('.page-builder__featured-content-slider__slider-container').each(function () {
        var sliderID = $(this).data('slider-id'); // Get the unique ID from the data attribute
        $('#' + sliderID + '-bg').slick({
            infinite: true,
            autoplay: false,
            arrows: false,
            dots: false,
            asNavFor: '#' + sliderID + '-content',
        });

        $('#' + sliderID + '-content').slick({
            infinite: true,
            autoplay: false,
            arrows: true,
            adaptiveHeight: true,
            appendArrows: '#' + sliderID + '-arrows',
            prevArrow: '<button type="button" class="slick-prev"><i class="fa-sharp fa-regular fa-chevron-left"></i></button>',
            nextArrow: '<button type="button" class="slick-next"><i class="fa-sharp fa-regular fa-chevron-right"></i></button>',
            dots: false,
            asNavFor: '#' + sliderID + '-bg',
        });
    });
	
	
	
	$('.resources__slider').on('init', function(event, slick){
		var dots = $( '.resources__pager-dots li' );
		dots.each( function( k, v){
			$(this).find( 'button' ).addClass( 'heading'+ k );
		});
		var items = slick.$slides;
		items.each( function( k, v){
			var text = $(this).find( 'h2' ).text();
			$( '.heading' + k ).text(text);
		});
	});
	$('.resources__slider').slick({
		autoplay: false,
  		arrows: false,
  		adaptiveHeight: true,
  		dots: true,
  		draggable: false,
		appendDots: '.resources__slider-pager',
  		dotsClass: 'resources__pager-dots',
	});
	
	$('.accreditations__items__slider').slick({
		infinite: true,
		autoplay: true,
  		autoplaySpeed: 2000,
  		arrows: false,
  		dots: false,
  		slidesToShow: 5,
		centerMode: true,
		variableWidth: true,
	});
	
	$('.product-range__ranges__slider').slick({
		infinite: false,
		autoplay: false,
  		initialSlide: 0,
  		slidesToShow: 1.2,
  		arrows: true,
  		appendArrows: '.product-range__ranges__slider-arrows',
  		prevArrow: '<button type="button" class="slick-prev"><i class="fa-sharp fa-regular fa-chevron-left"></i></button>',
  		nextArrow: '<button type="button" class="slick-prev"><i class="fa-sharp fa-regular fa-chevron-right"></i></button>',
  		focusOnSelect: true,
  		mobileFirst: true,
  		responsive: [
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 1.5,
				}
			},
			{
				breakpoint: 1399,
				settings: {
					slidesToShow: 2.3,
				}
			}
		],
	});
	$('.product-range__usps__slider').slick({
		infinite: false,
		autoplay: false,
  		initialSlide: 0,
  		slidesToShow: 1.05,
  		arrows: true,
  		appendArrows: '.product-range__usps__slider-arrows',
  		prevArrow: '<button type="button" class="slick-prev"><i class="fa-sharp fa-regular fa-chevron-left"></i></button>',
  		nextArrow: '<button type="button" class="slick-prev"><i class="fa-sharp fa-regular fa-chevron-right"></i></button>',
  		focusOnSelect: true,
  		mobileFirst: true,
  		responsive: [
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 1.2,
				}
			},
			{
				breakpoint: 1199,
				settings: {
					slidesToShow: 1.4,
				}
			},
			{
				breakpoint: 1399,
				settings: {
					slidesToShow: 1.8,
				}
			}
		],
	});
	$('.product-range__services__background-image-slider').slick({
		infinite: true,
		autoplay: false,
  		arrows: false,
  		dots: false,
  		asNavFor: '.product-range__services__slider',
	});
	$('.product-range__services__slider').slick({
		infinite: true,
		autoplay: false,
  		arrows: true,
  		adaptiveHeight: true,
  		appendArrows: '.product-range__services__slider-arrows',
  		prevArrow: '<button type="button" class="slick-prev"><i class="fa-sharp fa-regular fa-chevron-left"></i></button>',
  		nextArrow: '<button type="button" class="slick-prev"><i class="fa-sharp fa-regular fa-chevron-right"></i></button>',
  		dots: false,
  		asNavFor: '.product-range__services__background-image-slider',
	});
	
	$('.product-range__testimonials__testimonials-slider').slick({
  		autoplay: true,
  		autoplaySpeed: 2000,
  		arrows: true,
  		appendArrows: '.product-range__testimonials__slider-arrows',
  		prevArrow: '<button type="button" class="slick-prev"><i class="fa-sharp fa-regular fa-chevron-left"></i></button>',
  		nextArrow: '<button type="button" class="slick-prev"><i class="fa-sharp fa-regular fa-chevron-right"></i></button>',
	});
	
	
	
	/***********************************
	** Appending the span tag to buttons
	***********************************/
	$( "p.button a" ).append( "<span></span>" );
	//$( "button.button span.button-span" ).append( "<span></span>" );
	
	
	/***********************************
	** Removing the inline styles applied to NBS iframe elements
	***********************************/
	$('.page-builder__nbs-frame__wrapper iframe').removeAttr('style');
	$('.page-heading__content__nbs-button iframe').removeAttr('style');
	
	
	/***********************************
	** Setting team profile image height to be same as width
	***********************************/
	$(window).load(function() {
		var profile_img = $(".team-page__profile__img-holder");
		var profile_img_width = $(profile_img).outerWidth();
		$(profile_img).css("height", profile_img_width);
	});
	
	
	/***********************************
	** Setting colour range swatch height to be same as width
	***********************************/
	$(window).load(function() {
		var range_swatch = $(".page-builder__colour-range__option-swatch--full");
		var range_swatch_height = $(range_swatch).outerHeight();
		$(range_swatch).css("width", range_swatch_height);
	});
	
	
	/***********************************
	** Setting gallery image thumb height to be same as width
	***********************************/
	$(window).load(function() {
		var image_gallery_thumb = $(".page-builder__image-gallery__image");
		var image_gallery_thumb_width = $(image_gallery_thumb).outerWidth();
		$(image_gallery_thumb).css("height", image_gallery_thumb_width);
	});
	
	
	/***********************************
	** Setting content and overlay widths on home page quick links containers
	***********************************/
	$(window).load(function() {
		if ($(window).width() > 768) {
			var fp_quick_link_title = $(".front-page__quick-links__link-title");
			$(fp_quick_link_title).each(function() {
		        var fp_quick_link_title_width = $(this).width();
				var fp_quick_link_descr = $(this).next("p");
				var fp_quick_link_content_inner = $(this).parent("div");
				var fp_quick_link_overlay = $(fp_quick_link_content_inner).parent().siblings("div");
				
		        fp_quick_link_descr.width(fp_quick_link_title_width + 150);
		        fp_quick_link_content_inner.width(fp_quick_link_title_width + 160);
		        fp_quick_link_overlay.width(fp_quick_link_title_width + 160);
		    });
		}
	});
	
	
	/***********************************
	** Image Gallery Control
	***********************************/
    /*$('[data-fancybox="gallery"]').fancybox({
        // Options will go here
    });*/
    
	
	/***********************************
	** Filtering the career departments
	***********************************/
	$('input.careers__filter-checkbox').click(function() {
		var inputValue = $(this).attr("value");
		$("." + inputValue).toggleClass('filtered');
	});
	
    window.neacoBox = new NeacoBox({
	    gallerySelector: '#image-gallery',
	    showArrows: true,
	    showThumbnails: true,
    	enableOverlayClick: false,
    	closeButtonHTML: '<i class="fa-sharp fa-regular fa-xmark"></i>',
	    prevArrowHTML: '<i class="fa-sharp fa-regular fa-chevron-left"></i>',
	    nextArrowHTML: '<i class="fa-sharp fa-regular fa-chevron-right"></i>'
	});
});


/***********************************
** FAQ Collapse Toggle
***********************************/
document.addEventListener('DOMContentLoaded', function() {
    // Toggle FAQ answers on click
    document.querySelectorAll('.page-builder__faqs__faq-q').forEach(function(question) {
        question.addEventListener('click', function() {
            question.querySelector('.plus-minus-toggle').classList.toggle('collapsed');
            question.nextElementSibling.classList.toggle('active');
        });
    });
    
    // Collapse FAQs when the section is reached
    const faqSection = document.querySelector('.page-builder__faqs');
    const faqAnswers = document.querySelectorAll('.page-builder__faqs__faq-a');
    const pmIcons = document.querySelectorAll('.plus-minus-toggle');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                faqAnswers.forEach(answer => {
                    answer.classList.remove('active');
                });
                pmIcons.forEach(icon => {
                    icon.classList.add('collapsed');
                });
                observer.unobserve(faqSection); // Stop observing after the first trigger
            }
        });
    });
    observer.observe(faqSection);
});


/***********************************
** FAQ Collapse Toggle
***********************************/
document.addEventListener('DOMContentLoaded', function() {
    // Toggle FAQ answers on click
    document.querySelectorAll('.product-range__faqs__faq-q').forEach(function(question) {
        question.addEventListener('click', function() {
            question.querySelector('.plus-minus-toggle').classList.toggle('collapsed');
            question.nextElementSibling.classList.toggle('active');
        });
    });
    
    // Collapse FAQs when the section is reached
    const faqSection = document.querySelector('.product-range__faqs');
    const faqAnswers = document.querySelectorAll('.product-range__faqs__faq-a');
    const pmIcons = document.querySelectorAll('.plus-minus-toggle');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                faqAnswers.forEach(answer => {
                    answer.classList.remove('active');
                });
                pmIcons.forEach(icon => {
                    icon.classList.add('collapsed');
                });
                observer.unobserve(faqSection); // Stop observing after the first trigger
            }
        });
    });
    observer.observe(faqSection);
});


/***********************************
** Disable modular gallery clicks and lightbox loading
***********************************/
document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll('.modula-best-grid-gallery').forEach(function(el) {
        el.classList.remove('modula-best-grid-gallery');
    });
    document.querySelectorAll('.modula .modula-item a').forEach(function(el) {
        el.removeAttribute('href');
        el.classList.remove('modula-item-link');
    });
    var lightbox = document.querySelector('.fancybox__container');
    if (lightbox) {
        lightbox.remove();
    }
});


/*document.addEventListener("DOMContentLoaded", function() {
    const elem = document.querySelector('.neacobox-gallery');
});*/