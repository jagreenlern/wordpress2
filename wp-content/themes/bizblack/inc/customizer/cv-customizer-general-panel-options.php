<?php
/**
 * bizblack manage the Customizer options of general panel.
 *
 * @subpackage bizblack
 * @since 1.0 
 */
Kirki::add_field(
	'bizblack_config', array(
		'type'        => 'checkbox',
		'settings'    => 'bizblack_home_posts',
		'label'       => esc_attr__( 'Checked to hide latest posts in homepage.', 'bizblack' ),
		'section'     => 'static_front_page',
		'default'     => true,
	)
);

// Color Picker field for Primary Color
Kirki::add_field( 
	'bizblack_config', array(
		'type'        => 'color',
		'settings'    => 'bizblack_theme_color',
		'label'       => esc_html__( 'Primary Color', 'bizblack' ),
		'section'     => 'colors',
		'default'     => '#43baff',
	)
);