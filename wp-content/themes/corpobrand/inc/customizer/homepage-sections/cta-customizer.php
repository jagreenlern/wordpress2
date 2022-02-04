<?php
/**
 * Call to Action Customizer Options
 *
 * @package corpobrand
 */

// Add cta section
$wp_customize->add_section( 'corpobrand_cta_section', array(
	'title'             => esc_html__( 'Call to Action Section','corpobrand' ),
	'description'       => esc_html__( 'Call to Action Setting Options', 'corpobrand' ),
	'panel'             => 'corpobrand_homepage_sections_panel',
) );

// cta menu enable setting and control.
$wp_customize->add_setting( 'corpobrand_theme_options[enable_cta]', array(
	'default'           => corpobrand_theme_option('enable_cta'),
	'sanitize_callback' => 'corpobrand_sanitize_switch',
) );

$wp_customize->add_control( new Corpobrand_Switch_Control( $wp_customize, 'corpobrand_theme_options[enable_cta]', array(
	'label'             => esc_html__( 'Enable Call to Action', 'corpobrand' ),
	'section'           => 'corpobrand_cta_section',
	'on_off_label' 		=> corpobrand_show_options(),
) ) );




// cta pages drop down chooser control and setting
$wp_customize->add_setting( 'corpobrand_theme_options[cta_content_page]', array(
	'sanitize_callback' => 'corpobrand_sanitize_page_post',
) );

$wp_customize->add_control( new Corpobrand_Dropdown_Chosen_Control( $wp_customize, 'corpobrand_theme_options[cta_content_page]', array(
	'label'             => esc_html__( 'Select Page', 'corpobrand' ),
	'section'           => 'corpobrand_cta_section',
	'choices'			=> corpobrand_page_choices(),
) ) );

// cta btn label chooser control and setting
$wp_customize->add_setting( 'corpobrand_theme_options[cta_btn_label]', array(
	'default'          	=> corpobrand_theme_option('cta_btn_label'),
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( 'corpobrand_theme_options[cta_btn_label]', array(
	'label'             => esc_html__( 'Button Label', 'corpobrand' ),
	'section'           => 'corpobrand_cta_section',
	'type'				=> 'text',
) );
