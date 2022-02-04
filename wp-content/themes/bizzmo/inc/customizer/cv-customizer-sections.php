<?php
/**
 * bizzmo manage the Customizer sections.
 *
 * @subpackage bizzmo
 * @since 1.0 
 */

/**
 * Site Settings
 */
Kirki::add_section( 'bizzmo_section_site', array(
	'title'    => __( 'Site Settings', 'bizzmo' ),
	'panel'    => 'bizzmo_general_panel',
	'priority' => 40,
) );

/**
 * Hero Section
 */
Kirki::add_section( 'bizzmo_section_banner_content', array(
	'title'    => __( 'Home Banner Settings', 'bizzmo' ),
	'panel'    => 'bizzmo_frontpage_panel',
	'priority' => 5,
) );

 

/**
 * About Us Section
 */
Kirki::add_section( 'bizzmo_section_about_us', array(
	'title'    => __( 'Home About Setting', 'bizzmo' ),
	'panel'    => 'bizzmo_frontpage_panel',
	'priority' => 10,
) );

/**
 * Services Section
 */
Kirki::add_section( 'bizzmo_section_services', array(
	'title'    => __( 'Home Service Settings', 'bizzmo' ),
	'panel'    => 'bizzmo_frontpage_panel',
	'priority' => 15,
) );


/**
 * Portfolio Section
 */
Kirki::add_section( 'bizzmo_section_portfolio', array(
	'title'    => __( 'Home Portfolio Settings', 'bizzmo' ),
	'panel'    => 'bizzmo_frontpage_panel',
	'priority' => 35,
) );


/**
 * Team Section
 */
Kirki::add_section( 'bizzmo_section_team', array(
	'title'    => __( 'Home Team Section', 'bizzmo' ),
	'panel'    => 'bizzmo_frontpage_panel',
	'priority' => 15,
) );

 
/**
 * Blog Section
 */
Kirki::add_section( 'bizzmo_section_blog', array(
	'title'    => __( 'Home Blog Setting', 'bizzmo' ),
	'panel'    => 'bizzmo_frontpage_panel',
	'priority' => 45,
) );

/**
 * Callout Section
 */
Kirki::add_section( 'bizzmo_section_callout_content', array(
	'title'    => __( 'Home Callout Setting', 'bizzmo' ),
	'panel'    => 'bizzmo_frontpage_panel',
	'priority' => 47,
) );
/**
 * Footer Settings
 */
Kirki::add_section( 'bizzmo_footer_setting', array(
	'title'    => __( 'Footer Settings', 'bizzmo' ),
	'priority' => 40,
) );