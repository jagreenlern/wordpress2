<?php
/**
 * Portfolio Customizer Options
 *
 * @package corpobrand
 */

// Add portfolio section
$wp_customize->add_section( 'corpobrand_portfolio_section', array(
	'title'             => esc_html__( 'Portfolio Section','corpobrand' ),
	'description'       => esc_html__( 'Portfolio Setting Options', 'corpobrand' ),
	'panel'             => 'corpobrand_homepage_sections_panel',
) );

// portfolio menu enable setting and control.
$wp_customize->add_setting( 'corpobrand_theme_options[enable_portfolio]', array(
	'default'           => corpobrand_theme_option('enable_portfolio'),
	'sanitize_callback' => 'corpobrand_sanitize_switch',
) );

$wp_customize->add_control( new Corpobrand_Switch_Control( $wp_customize, 'corpobrand_theme_options[enable_portfolio]', array(
	'label'             => esc_html__( 'Enable Portfolio', 'corpobrand' ),
	'section'           => 'corpobrand_portfolio_section',
	'on_off_label' 		=> corpobrand_show_options(),
) ) );

// portfolio auto slide enable setting and control.
$wp_customize->add_setting( 'corpobrand_theme_options[portfolio_auto_slide]', array(
	'default'           => corpobrand_theme_option('portfolio_auto_slide'),
	'sanitize_callback' => 'corpobrand_sanitize_switch',
) );

$wp_customize->add_control( new Corpobrand_Switch_Control( $wp_customize, 'corpobrand_theme_options[portfolio_auto_slide]', array(
	'label'             => esc_html__( 'Enable Auto Slide', 'corpobrand' ),
	'section'           => 'corpobrand_portfolio_section',
	'on_off_label' 		=> corpobrand_show_options(),
) ) );

// portfolio label chooser control and setting
$wp_customize->add_setting( 'corpobrand_theme_options[portfolio_title]', array(
	'default'          	=> corpobrand_theme_option('portfolio_title'),
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( 'corpobrand_theme_options[portfolio_title]', array(
	'label'             => esc_html__( 'Title', 'corpobrand' ),
	'section'           => 'corpobrand_portfolio_section',
	'type'				=> 'text',
) );

// portfolio button label chooser control and setting
$wp_customize->add_setting( 'corpobrand_theme_options[portfolio_btn_label]', array(
	'default'          	=> corpobrand_theme_option('portfolio_btn_label'),
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( 'corpobrand_theme_options[portfolio_btn_label]', array(
	'label'             => esc_html__( 'Button Label', 'corpobrand' ),
	'section'           => 'corpobrand_portfolio_section',
	'type'				=> 'text',
) );

// portfolio pages drop down chooser control and setting
$wp_customize->add_setting( 'corpobrand_theme_options[portfolio_content_category]', array(
	'sanitize_callback' => 'corpobrand_sanitize_category',
) );

$wp_customize->add_control( new Corpobrand_Dropdown_Chosen_Control( $wp_customize, 'corpobrand_theme_options[portfolio_content_category]', array(
	'label'             => esc_html__( 'Select Category', 'corpobrand' ),
	'description'       => esc_html__( 'Note: Latest four posts will be shown form selected category.', 'corpobrand' ),
	'section'           => 'corpobrand_portfolio_section',
	'choices'			=> corpobrand_category_choices(),
) ) );
