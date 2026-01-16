class NeacoBox {
	constructor(options) {
		this.gallerySelector = options.gallerySelector || '#neacobox-gallery';
		this.lightboxSelector = '#neacobox';
		this.showArrows = options.showArrows !== undefined ? options.showArrows : true;
		this.showThumbnails = options.showThumbnails !== undefined ? options.showThumbnails : true;
		this.closeButtonHTML = options.closeButtonHTML || '&times;';
		this.prevArrowHTML = options.prevArrowHTML || '&#10094;';
		this.nextArrowHTML = options.nextArrowHTML || '&#10095;';
		
		this.currentSlide = 0;
		this.galleryItems = document.querySelectorAll(`${this.gallerySelector} img`);
		
		this.lightboxElement = document.querySelector(this.lightboxSelector);
		this.lightboxImage = document.getElementById('neacobox-image');
		this.lightboxCaption = document.getElementById('neacobox-caption');
		
		this.thumbnailsContainer = document.querySelector('.neacobox__thumbnails');
		
		if (!this.lightboxElement) {
            return;  // Exit if the element is not found to avoid further errors
        }
		
		if (options.enableOverlayClick) {
			this.lightboxElement.addEventListener('click', (event) => this.overlayClick(event));
		}
		
		this.init();
	}
	
	init() {
		this.galleryItems.forEach((item, index) => {
			item.addEventListener('click', () => this.open(index));
		});
		
		if (!this.showArrows) {
			this.lightboxElement.querySelector('.neacobox__arrows').style.display = 'none';
		} else {
			this.updateArrows(); // Update arrows with custom HTML
		}
		
		this.updateCloseButton(); // Update close button with custom HTML
		
		if (!this.showThumbnails) {
			this.thumbnailsContainer.style.display = 'none';
		} else {
			this.populateThumbnails();
		}
		
		this.thumbnailsContainer = this.lightboxElement.querySelector('.neacobox__thumbnails');
	}
	
	updateCloseButton() {
		const closeButton = this.lightboxElement.querySelector('.neacobox__close');
		closeButton.innerHTML = this.closeButtonHTML;
	}

	updateArrows() {
		const prevArrow = this.lightboxElement.querySelector('.neacobox__arrows .prev');
		const nextArrow = this.lightboxElement.querySelector('.neacobox__arrows .next');

		prevArrow.innerHTML = this.prevArrowHTML;
		nextArrow.innerHTML = this.nextArrowHTML;
	}
	
	open(index) {
		this.currentSlide = index;
		this.updateLightbox();
		this.scrollToActiveThumbnail();
		this.lightboxElement.style.display = 'block';
		this.lightboxElement.classList.add('open');  // Add the "open" class
		document.body.style.overflow = 'hidden'; // Prevent page scroll
		this.preloadImages();
	}
	
	close() {
		this.lightboxElement.style.display = 'none';
		this.lightboxElement.classList.remove('open'); // Remove the "open" class
		document.body.style.overflow = ''; // Allow page scroll
	}
	
	changeSlide(step) {
		this.currentSlide += step;
		if (this.currentSlide < 0) {
			this.currentSlide = this.galleryItems.length - 1;
		} else if (this.currentSlide >= this.galleryItems.length) {
			this.currentSlide = 0;
		}
		this.updateLightbox();
		this.scrollToActiveThumbnail();
	}
	
	scrollToActiveThumbnail() {
		const container = this.thumbnailsContainer;
		const activeThumb = container.children[this.currentSlide];

		if (!activeThumb) return; // Safety check

		// Calculate the position of the active thumbnail
		const containerRect = container.getBoundingClientRect();
		const thumbRect = activeThumb.getBoundingClientRect();

		// Check if the thumbnail is outside the visible area of the container
		if (thumbRect.left < containerRect.left) {
			// Scroll left if the active thumbnail is out of view on the left
			container.scrollLeft -= containerRect.left - thumbRect.left;
		} else if (thumbRect.right > containerRect.right) {
			// Scroll right if the active thumbnail is out of view on the right
			container.scrollLeft += thumbRect.right - containerRect.right;
		}
	}
	
	updateLightbox() {
		const image = this.galleryItems[this.currentSlide];
		const captionHTML = image.getAttribute('data-caption');
		
		const currentImage = document.getElementById('neacobox-image-current');
		const nextImage = document.getElementById('neacobox-image-next');
		const wrapper = document.querySelector('.neacobox__image-wrapper');
		
		const captionElement = this.lightboxCaption;
		
		// Step 1a: Preload the next image and set its src
		const newImage = new Image();
		newImage.src = image.getAttribute('data-full');
		
		newImage.onload = () => {
			// Set the src of #neacobox-image-next to the preloaded image
			nextImage.src = newImage.src;
			
			// Step 1b: Fade out #neacobox-image-current
			currentImage.classList.remove('show');
			
			// Wait for the fade-out transition to complete
			setTimeout(() => {
				// Step 2a: Update the src of #neacobox-image-current with that of #neacobox-image-next
				currentImage.src = nextImage.src;

				// Set the height of the wrapper based on the new image
				const actualHeight = newImage.naturalHeight;
				const actualWidth = newImage.naturalWidth;
				wrapper.style.height = (actualHeight * wrapper.clientWidth / actualWidth) + 'px';
				
				setTimeout(() => {
					const scaledWidth = currentImage.clientWidth;
					captionElement.style.width = scaledWidth + 'px'; // Set caption width to the image's displayed width
					currentImage.classList.add('show');
				}, 150);

				// Step 2b: Fade #neacobox-image-current back in
				setTimeout(() => {
					currentImage.classList.add('show');
				}, 0); // Start the fade-in immediately after updating the src and height
			}, 150); // Duration of the fade-out transition
		};
		
		// Update the caption content
		// captionElement.innerHTML = captionHTML || '';
		// Update the caption content and visibility more explicitly
		if (captionHTML) {
			captionElement.style.display = 'block';
			captionElement.innerHTML = captionHTML;
		} else {
			captionElement.style.display = 'none';
			captionElement.innerHTML = ''; // Clear any existing caption text
		}
		
		
		
		
		
		if (this.showThumbnails) {
			this.highlightThumbnail(this.currentSlide);
		}
	}
	
	preloadImages() {
		this.galleryItems.forEach(item => {
			const img = new Image();
			img.src = item.getAttribute('data-full');
		});
	}
	
	
	highlightThumbnail(index) {
		const thumbnails = this.thumbnailsContainer.querySelectorAll('img');
		thumbnails.forEach(thumb => thumb.classList.remove('active'));
		thumbnails[index].classList.add('active');
	}
	
	
	initThumbnailScroll() {
		const container = this.thumbnailsContainer;
		const arrowContainer = document.querySelector('.neacobox__thumbnail-nav');
		
		// Calculate base combined width of all thumbnails (content width only)
		const baseThumbWidth = Array.from(container.children).reduce((total, thumb) => total + thumb.clientWidth, 0);
		
		// Calculate additional width from margins and borders
		const extraWidthPerThumb = 12; // 10px (margins) + 2px (borders)
		const totalExtraWidth = extraWidthPerThumb * container.children.length;
		
		// Total combined width including margins and borders
		const combinedThumbWidth = baseThumbWidth + totalExtraWidth;
		
		const thumbContainerWidth = container.clientWidth;
		
		//console.log("Combined thumbnail width:", combinedThumbWidth);
		//console.log("Thumbnail container width:", thumbContainerWidth);
		
		// Determine if scrolling is needed, allowing for partial overhang
		if (combinedThumbWidth - thumbContainerWidth <= 10) { // Adjust threshold as needed
			//console.log("No scroll needed; adding 'hide' class to arrow container.");
			arrowContainer.classList.add('hide');
			container.classList.add('no-nav'); // Center align thumbnails when no scroll
		} else {
			//console.log("Scroll needed; removing 'hide' class from arrow container.");
			arrowContainer.classList.remove('hide');
			container.classList.remove('no-nav'); // Remove centering when scroll is active
			this.updateArrowState(); // Initial arrow state
			container.addEventListener('scroll', () => this.updateArrowState());
		}
	}
	
	
	// Scroll function to move thumbnails and update arrows
	scrollThumbnails(direction) {
		const container = this.thumbnailsContainer;
		const scrollAmount = container.clientWidth * 0.8; // Scroll by 80% of container width for better visibility

		container.scrollLeft += direction * scrollAmount;
	}
	
	// Update arrow states based on scroll position
	updateArrowState() {
		const container = this.thumbnailsContainer;
		const leftArrow = document.querySelector('.neacobox__thumbnail-nav--left');
		const rightArrow = document.querySelector('.neacobox__thumbnail-nav--right');
		
		//console.log("Current scroll position:", container.scrollLeft);
		//console.log("Maximum scroll position:", container.scrollWidth - container.clientWidth);

		if (container.scrollLeft <= 0) {
			//console.log("Left arrow should be disabled.");
			leftArrow.classList.add('disabled'); // Disable left arrow
			leftArrow.onclick = null; // Remove function if at start
		} else {
			//console.log("Left arrow should be enabled.");
			leftArrow.classList.remove('disabled');
			leftArrow.onclick = () => this.scrollThumbnails(-1); // Re-add function
		}

		if (container.scrollLeft + container.clientWidth >= container.scrollWidth) {
			//console.log("Right arrow should be disabled.");
			rightArrow.classList.add('disabled'); // Disable right arrow
			rightArrow.onclick = null; // Remove function if at end
		} else {
			//console.log("Right arrow should be enabled.");
			rightArrow.classList.remove('disabled');
			rightArrow.onclick = () => this.scrollThumbnails(1); // Re-add function
		}
	}
	
	// Call initThumbnailScroll after thumbnails are populated
	populateThumbnails() {
		this.thumbnailsContainer.innerHTML = '';

		this.galleryItems.forEach((img, index) => {
			const thumb = document.createElement('img');
			thumb.src = img.src;
			thumb.alt = img.alt;
			thumb.onclick = () => this.open(index);
			this.thumbnailsContainer.appendChild(thumb);
		});

		// Initialize scroll feature and arrow visibility
		//this.initThumbnailScroll();
		
		// Use requestAnimationFrame to ensure layout is rendered before measuring
		requestAnimationFrame(() => {
			this.initThumbnailScroll();
		});

		// Set up ResizeObserver to recheck if container or content dimensions change
		const resizeObserver = new ResizeObserver(() => {
			this.initThumbnailScroll();
		});
		resizeObserver.observe(this.thumbnailsContainer);
		
	}
	
	overlayClick(event) {
		if (event.target === this.lightboxElement) {
			this.close();
		}
	}
}



/*document.addEventListener('DOMContentLoaded', function () {
    const gallery = document.querySelector('#image-gallery');
    const breakpoint = window.innerWidth <= 767
        ? 'mobile'
        : window.innerWidth <= 991
        ? 'tablet'
        : window.innerWidth <= 1199
        ? 'desktop'
        : 'large_desktop';

    // Check if the current URL already includes the breakpoint
    const currentBreakpoint = new URLSearchParams(window.location.search).get('breakpoint');
    if (currentBreakpoint !== breakpoint) {
        // Reload the page with the correct breakpoint
        //const url = new URL(window.location.href);
        //url.searchParams.set('breakpoint', breakpoint);
        window.location.href = url.toString();
    }
});*/

