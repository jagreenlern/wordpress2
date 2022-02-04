<?php
/**
 * bizblack manage the Customizer panels.
 *
 * @subpackage bizblack
 * @since 1.0 
 */

/**
 * General Settings Panel
 */
Kirki::add_panel( 'bizblack_general_panel', array(
	'priority' => 10,
	'title'    => __( 'General Settings', 'bizblack' ),
) );

/**
 * Header Settings Panel
 */
Kirki::add_panel( 'bizblack_header_panel', array(
	'priority' => 15,
	'title'    => __( 'Header Options', 'bizblack' ),
) );

/**
 * Frontpage Settings Panel
 */
Kirki::add_panel( 'bizblack_frontpage_panel', array(
	'priority' => 20,
	'title'    => __( 'Bizblack Front Page', 'bizblack' ),
) );

/**
 * Design Settings Panel
 */
Kirki::add_panel( 'bizblack_design_panel', array(
	'priority' => 25,
	'title'    => esc_html__( 'Design Settings', 'bizblack' ),
) );