<?php
/**
 * Introduction Customizer Options
 *
 * @package corpobrand
 */

// Add introduction section
$wp_customize->add_section( 'corpobrand_introduction_section', array(
	'title'             => esc_html__( 'Introduction Section','corpobrand' ),
	'description'       => esc_html__( 'Introduction Setting Options', 'corpobrand' ),
	'panel'             => 'corpobrand_homepage_sections_panel',
) );

// introduction menu enable setting and control.
$wp_customize->add_setting( 'corpobrand_theme_options[enable_introduction]', array(
	'default'           => corpobrand_theme_option('enable_introduction'),
	'sanitize_callback' => 'corpobrand_sanitize_switch',
) );

$wp_customize->add_control( new Corpobrand_Switch_Control( $wp_customize, 'corpobrand_theme_options[enable_introduction]', array(
	'label'             => esc_html__( 'Enable Introduction', 'corpobrand' ),
	'section'           => 'corpobrand_introduction_section',
	'on_off_label' 		=> corpobrand_show_options(),
) ) );

// introduction pages drop down chooser control and setting
$wp_customize->add_setting( 'corpobrand_theme_options[introduction_content_page]', array(
	'sanitize_callback' => 'corpobrand_sanitize_page_post',
) );

$wp_customize->add_control( new Corpobrand_Dropdown_Chosen_Control( $wp_customize, 'corpobrand_theme_options[introduction_content_page]', array(
	'label'             => esc_html__( 'Select Page', 'corpobrand' ),
	'section'           => 'corpobrand_introduction_section',
	'choices'			=> corpobrand_page_choices(),
) ) );

// introduction btn label chooser control and setting
$wp_customize->add_setting( 'corpobrand_theme_options[introduction_btn_label]', array(
	'default'          	=> corpobrand_theme_option('introduction_btn_label'),
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( 'corpobrand_theme_options[introduction_btn_label]', array(
	'label'             => esc_html__( 'Button Label', 'corpobrand' ),
	'section'           => 'corpobrand_introduction_section',
	'type'				=> 'text',
) );
