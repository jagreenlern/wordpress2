/* =====================================
Template Name: Eduline
Author Name: iThemer
Description: Eduline is a Education & Courses Template.
Version:	1.0
========================================*/

(function($) {
	"use strict";
	$(document).on('ready', function() {	
		$("#menu-footer-1").removeClass('menu');
		$("#menu-footer-2").removeClass('menu');
		/*====================================
			Sticky Header JS
			======================================*/ 
			jQuery(window).on('scroll', function() {
				if ($(this).scrollTop() > 100) {
					$('.header').addClass("sticky");
				} else {
					$('.header').removeClass("sticky");
				}
			});

		/*====================================
			Mobile Menu JS
			======================================*/ 	
			$('.menu').slicknav({
				prependTo:".mobile-menu",
				allowParentLinks: true,
				duration: 600,
				closeOnClick:true,
			});

			$('.slicknav_menu li:last a').focusout(function(event){
     	 		$('.menu').slicknav('close');
   			}); 
		
		/*====================================	
			Slider Active JS
			======================================*/ 
			$('.slider-active').owlCarousel({
				autoplay:false,
				autoplayTimeout:3500,
				autoplayHoverPause:true,
				items:1,
				smartSpeed: 600,
				loop:true,
				merge:true,
				nav:true,
				dots:false,
				navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
				responsive:{
					300: {
						nav:false,
					},
					768: {
						nav:false,
					},
					1170: {
						nav:true,
					},
				}
			});

		/*====================================
			Course Slider JS
			======================================*/ 
			$('.course-slider').owlCarousel({
				autoplay:false,
				autoplayTimeout:3500,
				smartSpeed: 600,
				autoplayHoverPause:true,
				margin:25,
				loop:true,
				merge:true,
				dots:false,
				nav:true,
				navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
				responsive:{
					300: {
						items:1,
						nav:false,
					},
					480: {
						items:2,
						nav:false,
					},
					768: {
						items:2,
						nav:false,
					},
					1170: {
						items:3,
					},
				}
			});	

		
		
		/*====================================
			Testimonial Slider JS
			======================================*/ 
			$('.testimonial-slider').owlCarousel({
				autoplay:false,
				autoplayTimeout:3500,
				smartSpeed: 600,
				autoplayHoverPause:true,
				margin:25,
				loop:$(".testimonial-slider > .single-testimonial").length <= 1 ? false : true,
				merge:true,
				center:false,
				nav:true,
				dots:false,
				navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
				responsive:{
					300: {
						items:1,
						nav:false,
					},
					480: {
						items:1,
						nav:false,
					},
					768: {
						items:1,
						nav:false,
					},
					1170: {
						items:1,
					},
				}
			});	

		/*====================================
			CounterUp JS
			======================================*/ 
			$('.counter').counterUp({
				delay: 10,
				time: 4000

			});	

		/*=====================================
			Video Popup
			======================================*/ 
			$('.video-popup').magnificPopup({
				type: 'iframe',
				removalDelay: 300,
				mainClass: 'mfp-fade'
			});


		/*=====================================
			Parallax JS
			======================================*/ 
			$(window).stellar({
				responsive: true,
				positionProperty: 'position',
				horizontalOffset: 0,
				verticalOffset: 0,
				horizontalScrolling: false
			});

		/*=====================================
			Scroll Up JS
		======================================*/ 
		$.scrollUp({
			scrollName: 'scrollUp',      // Element ID
			scrollDistance: 300,         // Distance from top/bottom before showing element (px)
			scrollFrom: 'top',           // 'top' or 'bottom'
			scrollSpeed: 1000,            // Speed back to top (ms)
			animation: 'fade',           // Fade, slide, none
			animationSpeed: 200,         // Animation speed (ms)
			scrollTrigger: false,        // Set a custom triggering element. Can be an HTML string or jQuery object
			scrollTarget: false,         // Set a custom target element for scrolling to. Can be element or number
			easing: 'easeInOutQuart',
			scrollText: ["<i class='fa fa-angle-up'></i>"], // Text for element, can contain HTML
			scrollTitle: false,          // Set a custom <a> title if required.
			scrollImg: false,            // Set true to use image
			activeOverlay: false,        // Set CSS color to display scrollUp active point, e.g '#00FFFF'
			zIndex: 2147483647           // Z-Index for the overlay
		});

		});

		$(".tnp-field label").hide();

		

})(jQuery);