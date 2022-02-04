<?php
function eduline_scripts() {
	// Google font
	wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css?family=Poppins:200,200i,300,300i,400,400i,500,600,700,700i,800,800i,900', array(), '' );

	// Bootstrap CSS
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/assets/css/bootstrap.min.css', array(), '4.0.0' );

	// fontawesome Css
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() .'/assets/css/font-awesome.min.css', array(), '4.7.0' );

	// Owl carousel CSS
	wp_enqueue_style( 'owl-carausel', get_template_directory_uri() .'/assets/css/owl.carousel.min.css', array(), '2.2.1' );

	// Owl theme default CSS
	wp_enqueue_style( 'owl-theme-default', get_template_directory_uri() .'/assets/css/owl.theme.default.min.css', array(), '2.3.0' );

	// Animate CSS
	wp_enqueue_style( 'animate', get_template_directory_uri() .'/assets/css/animate.min.css', array(), '3.5.2' );

	// Slick Nav
	wp_enqueue_style( 'slicknav', get_template_directory_uri() .'/assets/css/slicknav.min.css', array(), '1.0.10' );

	// Magnific Popup
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() .'/assets/css/magnific-popup.min.css', array(), '' );

	// Normalize CSS
	wp_enqueue_style( 'noramlize', get_template_directory_uri() .'/assets/css/normalize.css', array(), '1.0.0' );

	wp_enqueue_style( 'eduline-style', get_stylesheet_uri() );

	// Responsive CSS
	wp_enqueue_style( 'responsive', get_template_directory_uri() .'/assets/css/responsive.css', array(), '1.0.0' );


	// Poper JS
	wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '3.3.1', true ); 

	// bootstrap JS
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '4.0.0', true );

	// jquery stellar JS
	wp_enqueue_script( 'jquery-stellar', get_template_directory_uri() . '/assets/js/jquery.stellar.min.js', array('jquery'), '0.6.2', true );

	// Magnific Popup JS
	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.1.0', true );

	// Owl Carousel JS
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '2.2.1', true );

	// Slick Nav JS
	wp_enqueue_script( 'slicknav', get_template_directory_uri() . '/assets/js/slicknav.min.js', array('jquery'), '1.0.10', true );

	// Waypoints JS
	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'), '2.0.3', true );

	// Counter Up JS
	wp_enqueue_script( 'counter-up', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), '1.0.0', true );

	// Easing JS
	wp_enqueue_script( 'easing', get_template_directory_uri() . '/assets/js/easing.min.js', array('jquery'), '1.0.0', true );

	// Scroll Up JS
	wp_enqueue_script( 'jquery-scrollup', get_template_directory_uri() . '/assets/js/jquery.scrollUp.min.js', array('jquery'), '2.4.1', true );

	// Main JS
	wp_enqueue_script( 'eduline-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'eduline-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'eduline-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'eduline_scripts' );