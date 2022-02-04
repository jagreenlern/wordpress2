<?php
/**
 * Footer Customizer Options
 *
 * @package corpobrand
 */

// Add footer section
$wp_customize->add_section( 'corpobrand_footer_section', array(
	'title'             => esc_html__( 'Footer Section','corpobrand' ),
	'description'       => esc_html__( 'Footer Setting Options', 'corpobrand' ),
	'panel'             => 'corpobrand_theme_options_panel',
) );

// slide to top enable setting and control.
$wp_customize->add_setting( 'corpobrand_theme_options[slide_to_top]', array(
	'default'           => corpobrand_theme_option('slide_to_top'),
	'sanitize_callback' => 'corpobrand_sanitize_switch',
) );

$wp_customize->add_control( new Corpobrand_Switch_Control( $wp_customize, 'corpobrand_theme_options[slide_to_top]', array(
	'label'             => esc_html__( 'Show Slide to Top', 'corpobrand' ),
	'section'           => 'corpobrand_footer_section',
	'on_off_label' 		=> corpobrand_show_options(),
) ) );

// copyright text
$wp_customize->add_setting( 'corpobrand_theme_options[copyright_text]',
	array(
		'default'       		=> corpobrand_theme_option('copyright_text'),
		'sanitize_callback'		=> 'corpobrand_santize_allow_tags',
	)
);
$wp_customize->add_control( 'corpobrand_theme_options[copyright_text]',
    array(
		'label'      			=> esc_html__( 'Copyright Text', 'corpobrand' ),
		'section'    			=> 'corpobrand_footer_section',
		'type'		 			=> 'textarea',
    )
);

