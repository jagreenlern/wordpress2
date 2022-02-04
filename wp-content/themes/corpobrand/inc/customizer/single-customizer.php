<?php
/**
 * Single Post Customizer Options
 *
 * @package corpobrand
 */

// Add excerpt section
$wp_customize->add_section( 'corpobrand_single_section', array(
	'title'             => esc_html__( 'Single Post Setting','corpobrand' ),
	'description'       => esc_html__( 'Single Post Setting Options', 'corpobrand' ),
	'panel'             => 'corpobrand_theme_options_panel',
) );

// sidebar layout setting and control.
$wp_customize->add_setting( 'corpobrand_theme_options[sidebar_single_layout]', array(
	'sanitize_callback'   => 'corpobrand_sanitize_select',
	'default'             => corpobrand_theme_option('sidebar_single_layout'),
) );

$wp_customize->add_control(  new Corpobrand_Radio_Image_Control ( $wp_customize, 'corpobrand_theme_options[sidebar_single_layout]', array(
	'label'               => esc_html__( 'Sidebar Layout', 'corpobrand' ),
	'section'             => 'corpobrand_single_section',
	'choices'			  => corpobrand_sidebar_position(),
) ) );

// Archive date meta setting and control.
$wp_customize->add_setting( 'corpobrand_theme_options[show_single_date]', array(
	'default'           => corpobrand_theme_option( 'show_single_date' ),
	'sanitize_callback' => 'corpobrand_sanitize_switch',
) );

$wp_customize->add_control( new Corpobrand_Switch_Control( $wp_customize, 'corpobrand_theme_options[show_single_date]', array(
	'label'             => esc_html__( 'Show Date', 'corpobrand' ),
	'section'           => 'corpobrand_single_section',
	'on_off_label' 		=> corpobrand_show_options(),
) ) );

// Archive category meta setting and control.
$wp_customize->add_setting( 'corpobrand_theme_options[show_single_category]', array(
	'default'           => corpobrand_theme_option( 'show_single_category' ),
	'sanitize_callback' => 'corpobrand_sanitize_switch',
) );

$wp_customize->add_control( new Corpobrand_Switch_Control( $wp_customize, 'corpobrand_theme_options[show_single_category]', array(
	'label'             => esc_html__( 'Show Category', 'corpobrand' ),
	'section'           => 'corpobrand_single_section',
	'on_off_label' 		=> corpobrand_show_options(),
) ) );

// Archive category meta setting and control.
$wp_customize->add_setting( 'corpobrand_theme_options[show_single_tags]', array(
	'default'           => corpobrand_theme_option( 'show_single_tags' ),
	'sanitize_callback' => 'corpobrand_sanitize_switch',
) );

$wp_customize->add_control( new Corpobrand_Switch_Control( $wp_customize, 'corpobrand_theme_options[show_single_tags]', array(
	'label'             => esc_html__( 'Show Tags', 'corpobrand' ),
	'section'           => 'corpobrand_single_section',
	'on_off_label' 		=> corpobrand_show_options(),
) ) );

// Archive author meta setting and control.
$wp_customize->add_setting( 'corpobrand_theme_options[show_single_author]', array(
	'default'           => corpobrand_theme_option( 'show_single_author' ),
	'sanitize_callback' => 'corpobrand_sanitize_switch',
) );

$wp_customize->add_control( new Corpobrand_Switch_Control( $wp_customize, 'corpobrand_theme_options[show_single_author]', array(
	'label'             => esc_html__( 'Show Author', 'corpobrand' ),
	'section'           => 'corpobrand_single_section',
	'on_off_label' 		=> corpobrand_show_options(),
) ) );
