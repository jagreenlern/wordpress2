<?php
/**
 * Theme functions and definitions
 *
 * @package Cargoex
 */

if ( ! function_exists( 'cargoex_enqueue_styles' ) ) :

	/**
	 * Load assets.
	 *
	 * @since 1.0.0
	 */
	function cargoex_enqueue_styles() {

		wp_enqueue_style( 'transportex-style-parent', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'cargoex-style', get_stylesheet_directory_uri() . '/style.css', array( 'transportex-style-parent' ), '1.0' );
		wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
		wp_enqueue_style( 'cargoex-default-css', get_stylesheet_directory_uri()."/css/colors/default.css" );
		wp_dequeue_style( 'default',get_template_directory_uri() .'/css/colors/default.css');
		

	}

endif;

add_action( 'wp_enqueue_scripts', 'cargoex_enqueue_styles', 99 );
?>