<?php
/**
 * Corpobrand Theme Customizer
 *
 * @package corpobrand
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function corpobrand_customize_register( $wp_customize ) {
	// Load custom control functions.
	require get_template_directory() . '/inc/customizer/controls.php';

	// Load validation functions.
	require get_template_directory() . '/inc/customizer/validate.php';

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'corpobrand_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'corpobrand_customize_partial_blogdescription',
		) );
	}

	// Register custom section types.
	$wp_customize->register_section_type( 'Corpobrand_Customize_Section_Upsell' );

	// Register sections.
	$wp_customize->add_section(
		new Corpobrand_Customize_Section_Upsell(
			$wp_customize,
			'theme_upsell',
			array(
				'title'    => esc_html__( 'Corpobrand Pro', 'corpobrand' ),
				'pro_text' => esc_html__( 'Buy Pro', 'corpobrand' ),
				'pro_url'  => 'http://www.sharkthemes.com/downloads/corpobrand-pro/',
				'priority'  => 10,
			)
		)
	);

	// Add panel for common Home Page Settings
	$wp_customize->add_panel( 'corpobrand_homepage_sections_panel' , array(
	    'title'      => esc_html__( 'Homepage Sections','corpobrand' ),
	    'description'=> esc_html__( 'Corpobrand Homepage Sections.', 'corpobrand' ),
	    'priority'   => 100,
	) );

	// slider settings
	require get_template_directory() . '/inc/customizer/homepage-sections/slider-customizer.php';

	// introduction settings
	require get_template_directory() . '/inc/customizer/homepage-sections/introduction-customizer.php';
	
	// service settings
	require get_template_directory() . '/inc/customizer/homepage-sections/service-customizer.php';

	// portfolio settings
	require get_template_directory() . '/inc/customizer/homepage-sections/portfolio-customizer.php';

	// testimonial settings
	require get_template_directory() . '/inc/customizer/homepage-sections/testimonial-customizer.php';

	// recent settings
	require get_template_directory() . '/inc/customizer/homepage-sections/recent-customizer.php';

	// cta settings
	require get_template_directory() . '/inc/customizer/homepage-sections/cta-customizer.php';

	// Add panel for common Home Page Settings
	$wp_customize->add_panel( 'corpobrand_theme_options_panel' , array(
	    'title'      => esc_html__( 'Theme Options','corpobrand' ),
	    'description'=> esc_html__( 'Corpobrand Theme Options.', 'corpobrand' ),
	    'priority'   => 100,
	) );

	// footer settings
	require get_template_directory() . '/inc/customizer/footer-customizer.php';
	
	// blog/archive settings
	require get_template_directory() . '/inc/customizer/blog-customizer.php';

	// single settings
	require get_template_directory() . '/inc/customizer/single-customizer.php';

	// page settings
	require get_template_directory() . '/inc/customizer/single-page-customizer.php';

	// global settings
	require get_template_directory() . '/inc/customizer/global-customizer.php';

}
add_action( 'customize_register', 'corpobrand_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function corpobrand_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function corpobrand_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function corpobrand_customize_preview_js() {
	wp_enqueue_script( 'corpobrand-customizer', get_template_directory_uri() . '/assets/js/customizer' . corpobrand_min() . '.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'corpobrand_customize_preview_js' );

/**
 * Load dynamic logic for the customizer controls area.
 */
function corpobrand_customize_control_js() {
	// Choose from select jquery.
	wp_enqueue_style( 'jquery-chosen', get_template_directory_uri() . '/assets/css/chosen' . corpobrand_min() . '.css' );
	wp_enqueue_script( 'jquery-chosen', get_template_directory_uri() . '/assets/js/chosen' . corpobrand_min() . '.js', array( 'jquery' ), '1.4.2', true );

	// Choose fontawesome select jquery.
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome' . corpobrand_min() . '.css' );
	wp_enqueue_style( 'simple-iconpicker', get_template_directory_uri() . '/assets/css/simple-iconpicker' . corpobrand_min() . '.css' );
	wp_enqueue_script( 'jquery-simple-iconpicker', get_template_directory_uri() . '/assets/js/simple-iconpicker' . corpobrand_min() . '.js', array( 'jquery' ), '', true );

	// admin script
	wp_enqueue_style( 'corpobrand-customizer-style', get_template_directory_uri() . '/assets/css/customizer' . corpobrand_min() . '.css' );
	wp_enqueue_script( 'corpobrand-customizer-controls', get_template_directory_uri() . '/assets/js/customizer-controls' . corpobrand_min() . '.js', array( 'jquery', 'jquery-chosen', 'jquery-simple-iconpicker' ), '1.0.0', true );
}
add_action( 'customize_controls_enqueue_scripts', 'corpobrand_customize_control_js' );
