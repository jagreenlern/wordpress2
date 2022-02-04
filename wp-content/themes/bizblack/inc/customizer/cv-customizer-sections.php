<?php
/**
 * bizblack manage the Customizer sections.
 *
 * @subpackage bizblack
 * @since 1.0 
 */

/**
 * Site Settings
 */
Kirki::add_section( 'bizblack_section_site', array(
	'title'    => __( 'Site Settings', 'bizblack' ),
	'panel'    => 'bizblack_general_panel',
	'priority' => 40,
) );

/**
 * Hero Section
 */
Kirki::add_section( 'bizblack_section_slider_content', array(
	'title'    => __( 'Home Slider Settings', 'bizblack' ),
	'panel'    => 'bizblack_frontpage_panel',
	'priority' => 5,
) );

/**
 * Blog Section
 */
Kirki::add_section( 'bizblack_section_feature', array(
	'title'    => __( 'Home Feature Setting', 'bizblack' ),
	'panel'    => 'bizblack_frontpage_panel',
	'priority' => 7,
) );

/**
 * About Us Section
 */
Kirki::add_section( 'bizblack_section_about_us', array(
	'title'    => __( 'Home About Setting', 'bizblack' ),
	'panel'    => 'bizblack_frontpage_panel',
	'priority' => 10,
) );

/**
 * Services Section
 */
Kirki::add_section( 'bizblack_section_services', array(
	'title'    => __( 'Home Service Settings', 'bizblack' ),
	'panel'    => 'bizblack_frontpage_panel',
	'priority' => 15,
) );


/**
 * Portfolio Section
 */
Kirki::add_section( 'bizblack_section_portfolio', array(
	'title'    => __( 'Home Portfolio Settings', 'bizblack' ),
	'panel'    => 'bizblack_frontpage_panel',
	'priority' => 15,
) );


/**
 * Contact Section
 */
Kirki::add_section( 'bizblack_section_team', array(
	'title'    => __( 'Home Team Section', 'bizblack' ),
	'panel'    => 'bizblack_frontpage_panel',
	'priority' => 35,
) );

/**
 * Contact Section
 */
Kirki::add_section( 'bizblack_section_testimonial', array(
	'title'    => __( 'Home Testimonial Section', 'bizblack' ),
	'panel'    => 'bizblack_frontpage_panel',
	'priority' => 40,
) );

/**
 * Blog Section
 */
Kirki::add_section( 'bizblack_section_blog', array(
	'title'    => __( 'Home Blog Setting', 'bizblack' ),
	'panel'    => 'bizblack_frontpage_panel',
	'priority' => 45,
) );

/**
 * Blog Section
 */
Kirki::add_section( 'bizblack_section_callout_content', array(
	'title'    => __( 'Home Callout Setting', 'bizblack' ),
	'panel'    => 'bizblack_frontpage_panel',
	'priority' => 47,
) );
/**
 * Footer Settings
 */
Kirki::add_section( 'bizblack_footer_setting', array(
	'title'    => __( 'Footer Settings', 'bizblack' ),
	'priority' => 40,
) );