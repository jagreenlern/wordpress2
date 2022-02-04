<?php
/**
 * Eduline Theme Customizer
 *
 * @package eduline
 */

use WPTRT\Customize\Section\Button;

function eduline_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'eduline_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'eduline_customize_partial_blogdescription',
		) );
	}


	$wp_customize->register_section_type( Button::class );

	// Register sections.
	$wp_customize->add_section(
		new Button(
			$wp_customize,
			'eduline_pro',
			array(
				'title'    => esc_html__( 'Go Pro', 'eduline' ),
				'button_text' => esc_html__( 'Buy Eduline Pro', 'eduline' ),
				'button_url'  => 'http://html5wp.com/downloads/eduline-pro-wordpress-theme/',
				'priority' => 1,
			)
		)
	);
}
add_action( 'customize_register', 'eduline_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function eduline_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function eduline_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function eduline_customize_preview_js() {
	wp_enqueue_script( 'eduline-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'eduline_customize_preview_js' );


function eduline_customize_backend_scripts() {
	$version = wp_get_theme()->get( 'Version' );

	wp_enqueue_script(
		'eduline-customize-section-button',
		get_theme_file_uri( 'inc/upgrade-to-pro/public/js/customize-controls.js' ),
		[ 'customize-controls' ],
		$version,
		true
	);

	wp_enqueue_style(
		'eduline-customize-section-button',
		get_theme_file_uri( 'inc/upgrade-to-pro/public/css/customize-controls.css' ),
		[ 'customize-controls' ],
 		$version
	);
}
add_action( 'customize_controls_enqueue_scripts', 'eduline_customize_backend_scripts', 10 );
/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Load customizer required panels.
 */

require get_template_directory() . '/inc/customizer/general-panel.php';

require get_template_directory() . '/inc/customizer/header-panel.php';
require get_template_directory() . '/inc/customizer/frontpage-panel.php';
require get_template_directory() . '/inc/customizer/page-panel.php';
require get_template_directory() . '/inc/customizer/footer-panel.php';

require get_template_directory() . '/inc/customizer/customizer-sanitize.php';
require get_template_directory() . '/inc/customizer/customizer-classes.php';


// Autoloader
include get_theme_file_path( 'inc/upgrade-to-pro/src/Loader.php' );

$loader = new \WPTRT\Autoload\Loader();

$loader->add( 'WPTRT\\Customize\\Section', get_theme_file_path( 'inc/upgrade-to-pro/src' ) );

$loader->register();