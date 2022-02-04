<?php
/**
 * bizzmo manage the Customizer panels.
 *
 * @subpackage bizzmo
 * @since 1.0 
 */

/**
 * General Settings Panel
 */
Kirki::add_panel( 'bizzmo_general_panel', array(
	'priority' => 10,
	'title'    => __( 'General Settings', 'bizzmo' ),
) );

/**
 * Header Settings Panel
 */
Kirki::add_panel( 'bizzmo_header_panel', array(
	'priority' => 15,
	'title'    => __( 'Header Options', 'bizzmo' ),
) );

/**
 * Frontpage Settings Panel
 */
Kirki::add_panel( 'bizzmo_frontpage_panel', array(
	'priority' => 20,
	'title'    => __( 'Bizzmo Front Page', 'bizzmo' ),
) );

/**
 * Design Settings Panel
 */
Kirki::add_panel( 'bizzmo_design_panel', array(
	'priority' => 25,
	'title'    => esc_html__( 'Design Settings', 'bizzmo' ),
) );