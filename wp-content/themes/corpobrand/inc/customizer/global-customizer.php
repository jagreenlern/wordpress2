<?php
/**
 * Global Customizer Options
 *
 * @package corpobrand
 */

// Add Global section
$wp_customize->add_section( 'corpobrand_global_section', array(
	'title'             => esc_html__( 'Global Setting','corpobrand' ),
	'description'       => esc_html__( 'Global Setting Options', 'corpobrand' ),
	'panel'             => 'corpobrand_theme_options_panel',
) );

// header sticky setting and control.
$wp_customize->add_setting( 'corpobrand_theme_options[enable_sticky_header]', array(
	'default'           => corpobrand_theme_option( 'enable_sticky_header' ),
	'sanitize_callback' => 'corpobrand_sanitize_switch',
) );

$wp_customize->add_control( new Corpobrand_Switch_Control( $wp_customize, 'corpobrand_theme_options[enable_sticky_header]', array(
	'label'             => esc_html__( 'Make Header Sticky', 'corpobrand' ),
	'section'           => 'corpobrand_global_section',
	'on_off_label' 		=> corpobrand_show_options(),
) ) );

// breadcrumb setting and control.
$wp_customize->add_setting( 'corpobrand_theme_options[enable_breadcrumb]', array(
	'default'           => corpobrand_theme_option( 'enable_breadcrumb' ),
	'sanitize_callback' => 'corpobrand_sanitize_switch',
) );

$wp_customize->add_control( new Corpobrand_Switch_Control( $wp_customize, 'corpobrand_theme_options[enable_breadcrumb]', array(
	'label'             => esc_html__( 'Enable Breadcrumb', 'corpobrand' ),
	'section'           => 'corpobrand_global_section',
	'on_off_label' 		=> corpobrand_show_options(),
) ) );

// site layout setting and control.
$wp_customize->add_setting( 'corpobrand_theme_options[site_layout]', array(
	'sanitize_callback'   => 'corpobrand_sanitize_select',
	'default'             => corpobrand_theme_option('site_layout'),
) );

$wp_customize->add_control(  new Corpobrand_Radio_Image_Control ( $wp_customize, 'corpobrand_theme_options[site_layout]', array(
	'label'               => esc_html__( 'Site Layout', 'corpobrand' ),
	'section'             => 'corpobrand_global_section',
	'choices'			  => corpobrand_site_layout(),
) ) );
