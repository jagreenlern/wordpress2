<?php
/**
 * Recent Customizer Options
 *
 * @package corpobrand
 */

// Add recent section
$wp_customize->add_section( 'corpobrand_recent_section', array(
	'title'             => esc_html__( 'Recent Section','corpobrand' ),
	'description'       => esc_html__( 'Recent Setting Options', 'corpobrand' ),
	'panel'             => 'corpobrand_homepage_sections_panel',
) );

// recent enable setting and control.
$wp_customize->add_setting( 'corpobrand_theme_options[enable_recent]', array(
	'default'           => corpobrand_theme_option('enable_recent'),
	'sanitize_callback' => 'corpobrand_sanitize_switch',
) );

$wp_customize->add_control( new Corpobrand_Switch_Control( $wp_customize, 'corpobrand_theme_options[enable_recent]', array(
	'label'             => esc_html__( 'Enable Recent', 'corpobrand' ),
	'section'           => 'corpobrand_recent_section',
	'on_off_label' 		=> corpobrand_show_options(),
) ) );

// recent title chooser control and setting
$wp_customize->add_setting( 'corpobrand_theme_options[recent_title]', array(
	'default'          	=> corpobrand_theme_option('recent_title'),
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( 'corpobrand_theme_options[recent_title]', array(
	'label'             => esc_html__( 'Title', 'corpobrand' ),
	'section'           => 'corpobrand_recent_section',
	'type'				=> 'text',
) );
