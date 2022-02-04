<?php 
// Adding customizer home page setting
function honeywaves_custom_color($wp_customize)
{
	/* Theme Style settings */
	$wp_customize->add_section( 'theme_style' , array(
		'title'      => esc_html__('Theme Style settings', 'honeywaves'),
		'priority'   => 110,
   	) );
	
	// enable / disable custom color settings 
	$wp_customize->add_setting('custom_color_enable', array(
		'capability'  => 'edit_theme_options',
		'default' => false,
		'sanitize_callback' => 'honeywaves_sanitize_checkbox',
		));
	$wp_customize->add_control('custom_color_enable',array(
			'type' => 'checkbox',
			'label' => esc_html__('Enable custom color skin','honeywaves'),
			'section' => 'theme_style',
		)
	);
	
	// link color settings
	$wp_customize->add_setting('link_color', array(
		'capability'     => 'edit_theme_options',
		'default' => '#ee591f',
		'sanitize_callback' => 'sanitize_hex_color'
    ));
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'link_color', 
	array(
		'label'      => esc_html__( 'Skin color', 'honeywaves' ),
		'section'    => 'theme_style',
		'settings'   => 'link_color',
	) ) );
}

add_action( 'customize_register', 'honeywaves_custom_color' );