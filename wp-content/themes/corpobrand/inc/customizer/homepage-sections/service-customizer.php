<?php
/**
 * Service Customizer Options
 *
 * @package corpobrand
 */

// Add service section
$wp_customize->add_section( 'corpobrand_service_section', array(
	'title'             => esc_html__( 'Service Section','corpobrand' ),
	'description'       => esc_html__( 'Service Setting Options', 'corpobrand' ),
	'panel'             => 'corpobrand_homepage_sections_panel',
) );

// service menu enable setting and control.
$wp_customize->add_setting( 'corpobrand_theme_options[enable_service]', array(
	'default'           => corpobrand_theme_option('enable_service'),
	'sanitize_callback' => 'corpobrand_sanitize_switch',
) );

$wp_customize->add_control( new Corpobrand_Switch_Control( $wp_customize, 'corpobrand_theme_options[enable_service]', array(
	'label'             => esc_html__( 'Enable Service', 'corpobrand' ),
	'section'           => 'corpobrand_service_section',
	'on_off_label' 		=> corpobrand_show_options(),
) ) );

// service label chooser control and setting
$wp_customize->add_setting( 'corpobrand_theme_options[service_readmore]', array(
	'default'          	=> corpobrand_theme_option('service_readmore'),
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( 'corpobrand_theme_options[service_readmore]', array(
	'label'             => esc_html__( 'Readmore Label', 'corpobrand' ),
	'section'           => 'corpobrand_service_section',
	'type'				=> 'text',
) );

for ( $i = 1; $i <= 4; $i++ ) :

	// service menu enable setting and control.
	$wp_customize->add_setting( 'corpobrand_theme_options[service_icon_' . $i . ']', array(
		// 'default'           => corpobrand_theme_option('service_icon_' . $i . ''),
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( new Corpobrand_Icon_Picker_Control( $wp_customize, 'corpobrand_theme_options[service_icon_' . $i . ']', array(
		'label'             => sprintf( esc_html__( 'Select Icon %d', 'corpobrand' ), $i ),
		'section'           => 'corpobrand_service_section',
		'type' 				=> 'icon_picker',
	) ) );

	// service pages drop down chooser control and setting
	$wp_customize->add_setting( 'corpobrand_theme_options[service_content_page_' . $i . ']', array(
		'sanitize_callback' => 'corpobrand_sanitize_page_post',
	) );

	$wp_customize->add_control( new Corpobrand_Dropdown_Chosen_Control( $wp_customize, 'corpobrand_theme_options[service_content_page_' . $i . ']', array(
		'label'             => sprintf( esc_html__( 'Select Page %d', 'corpobrand' ), $i ),
		'section'           => 'corpobrand_service_section',
		'choices'			=> corpobrand_page_choices(),
	) ) );

	// service hr control and setting
	$wp_customize->add_setting( 'corpobrand_theme_options[service_custom_hr_' . $i . ']', array(
		'sanitize_callback' => 'wp_kses_post',
	) );

	$wp_customize->add_control( new Corpobrand_Horizontal_Line( $wp_customize, 'corpobrand_theme_options[service_custom_hr_' . $i . ']', array(
		'section'           => 'corpobrand_service_section',
	) ) );

endfor;
