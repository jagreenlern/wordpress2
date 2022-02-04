<?php
/**
 * bizzmo manage the Customizer options of general panel.
 *
 * @subpackage bizzmo
 * @since 1.0 
 */
Kirki::add_field(
	'bizzmo_config', array(
		'type'        => 'checkbox',
		'settings'    => 'bizzmo_home_posts',
		'label'       => esc_attr__( 'Checked to hide latest posts in homepage.', 'bizzmo' ),
		'section'     => 'static_front_page',
		'default'     => true,
	)
);

// Color Picker field for Primary Color
Kirki::add_field( 
	'bizzmo_config', array(
		'type'        => 'color',
		'settings'    => 'bizzmo_theme_color',
		'label'       => esc_html__( 'Primary Color', 'bizzmo' ),
		'section'     => 'colors',
		'default'     => '#f15a28',
	)
);