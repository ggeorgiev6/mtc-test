import {tns} from 'tiny-slider/src/tiny-slider';
import GLightbox from 'glightbox'

// Initialize the homepage banner slider
var slider = tns({
	container: '.home-slider',
	items: 1,
	slideBy: 'page',
	autoplay: true,
	mode: 'gallery',
	controls: false,
	autoplayButtonOutput: false,
	navContainer: '.home-slider-controls',
});

// Initialize the testimonials slider
var testimonials = tns({
	container: '.home-testimonials-slider',
	items: 1,
	slideBy: 'page',
	autoplay: true,
	autoplayButtonOutput: false,
	nav: false,
	controlsContainer: '.home-testimonials-slider-controls'
});

// Initialize the lightbox
const lightbox = GLightbox({
	touchNavigation: true,
	loop: true,
	autoplayVideos: true
});

// Toggle the mobile menu

const navSelector = document.querySelector('.nav-sm-toggle-menu');
const mobileMenu = document.querySelector('.mobile-nav-wrapper');
const darkOverlay = document.querySelector('.dark-overlay');
let mobileMenuVisible = false;

if (navSelector && mobileMenu && darkOverlay) {
	navSelector.onclick = function() {
		mobileMenu.classList.toggle('visible');
		darkOverlay.classList.toggle('active');
		mobileMenuVisible = true;
	}

	// Add an event listener that closes the mobile menu if the user has clicked outside of it
	document.addEventListener('click', function( event ) {
		if (mobileMenuVisible && mobileMenu !== event.target && navSelector !== event.target && !mobileMenu.contains(event.target) && !navSelector.contains(event.target)) {  
			mobileMenu.classList.remove('visible');
			darkOverlay.classList.remove('active');
		}
	});
}

// Toggle the navbar 'scrolled' class when scrolling down the page

let scrollpos = window.pageYOffset;
const nav = document.querySelector("header");
const nav_height = nav.offsetHeight;

const isScrolled = () => nav.classList.add("scrolled");
const isNotScrolled = () => nav.classList.remove("scrolled");

window.addEventListener('scroll', function() { 
    scrollpos = window.pageYOffset;
	if (scrollpos >= nav_height) { 
		isScrolled(); 
	} else { 
		isNotScrolled(); 
	}
})
