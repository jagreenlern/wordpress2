<?php
/**
 * Slider Customizer Options
 *
 * @package corpobrand
 */

// Add slider section
$wp_customize->add_section( 'corpobrand_slider_section', array(
	'title'             => esc_html__( 'Slider Section','corpobrand' ),
	'description'       => esc_html__( 'Slider Setting Options', 'corpobrand' ),
	'panel'             => 'corpobrand_homepage_sections_panel',
) );

// slider menu enable setting and control.
$wp_customize->add_setting( 'corpobrand_theme_options[enable_slider]', array(
	'default'           => corpobrand_theme_option('enable_slider'),
	'sanitize_callback' => 'corpobrand_sanitize_switch',
) );

$wp_customize->add_control( new Corpobrand_Switch_Control( $wp_customize, 'corpobrand_theme_options[enable_slider]', array(
	'label'             => esc_html__( 'Enable Slider', 'corpobrand' ),
	'section'           => 'corpobrand_slider_section',
	'on_off_label' 		=> corpobrand_show_options(),
) ) );

// slider social menu enable setting and control.
$wp_customize->add_setting( 'corpobrand_theme_options[slider_entire_site]', array(
	'default'           => corpobrand_theme_option('slider_entire_site'),
	'sanitize_callback' => 'corpobrand_sanitize_switch',
) );

$wp_customize->add_control( new Corpobrand_Switch_Control( $wp_customize, 'corpobrand_theme_options[slider_entire_site]', array(
	'label'             => esc_html__( 'Show Entire Site', 'corpobrand' ),
	'section'           => 'corpobrand_slider_section',
	'on_off_label' 		=> corpobrand_show_options(),
) ) );

// slider arrow control enable setting and control.
$wp_customize->add_setting( 'corpobrand_theme_options[slider_arrow]', array(
	'default'           => corpobrand_theme_option('slider_arrow'),
	'sanitize_callback' => 'corpobrand_sanitize_switch',
) );

$wp_customize->add_control( new Corpobrand_Switch_Control( $wp_customize, 'corpobrand_theme_options[slider_arrow]', array(
	'label'             => esc_html__( 'Show Arrow Controller', 'corpobrand' ),
	'section'           => 'corpobrand_slider_section',
	'on_off_label' 		=> corpobrand_show_options(),
) ) );

// slider auto slide control enable setting and control.
$wp_customize->add_setting( 'corpobrand_theme_options[slider_auto_slide]', array(
	'default'           => corpobrand_theme_option('slider_auto_slide'),
	'sanitize_callback' => 'corpobrand_sanitize_switch',
) );

$wp_customize->add_control( new Corpobrand_Switch_Control( $wp_customize, 'corpobrand_theme_options[slider_auto_slide]', array(
	'label'             => esc_html__( 'Enable Auto Slide', 'corpobrand' ),
	'section'           => 'corpobrand_slider_section',
	'on_off_label' 		=> corpobrand_show_options(),
) ) );

// slider wave border enable setting and control.
$wp_customize->add_setting( 'corpobrand_theme_options[enable_slider_wave]', array(
	'default'           => corpobrand_theme_option('enable_slider_wave'),
	'sanitize_callback' => 'corpobrand_sanitize_switch',
) );

$wp_customize->add_control( new Corpobrand_Switch_Control( $wp_customize, 'corpobrand_theme_options[enable_slider_wave]', array(
	'label'             => esc_html__( 'Enable Slider Wave Border', 'corpobrand' ),
	'section'           => 'corpobrand_slider_section',
	'on_off_label' 		=> corpobrand_show_options(),
) ) );

// slider btn label chooser control and setting
$wp_customize->add_setting( 'corpobrand_theme_options[slider_btn_label]', array(
	'default'          	=> corpobrand_theme_option('slider_btn_label'),
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( 'corpobrand_theme_options[slider_btn_label]', array(
	'label'             => esc_html__( 'Button Label', 'corpobrand' ),
	'section'           => 'corpobrand_slider_section',
	'type'				=> 'text',
) );

for ( $i = 1; $i <= 5; $i++ ) :

	// slider pages drop down chooser control and setting
	$wp_customize->add_setting( 'corpobrand_theme_options[slider_content_page_' . $i . ']', array(
		'sanitize_callback' => 'corpobrand_sanitize_page_post',
	) );

	$wp_customize->add_control( new Corpobrand_Dropdown_Chosen_Control( $wp_customize, 'corpobrand_theme_options[slider_content_page_' . $i . ']', array(
		'label'             => sprintf( esc_html__( 'Select Page %d', 'corpobrand' ), $i ),
		'section'           => 'corpobrand_slider_section',
		'choices'			=> corpobrand_page_choices(),
	) ) );

endfor;
