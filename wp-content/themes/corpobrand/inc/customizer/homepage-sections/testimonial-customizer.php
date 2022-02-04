<?php
/**
 * Testimonial Customizer Options
 *
 * @package corpobrand
 */

// Add testimonial section
$wp_customize->add_section( 'corpobrand_testimonial_section', array(
	'title'             => esc_html__( 'Testimonial Section','corpobrand' ),
	'description'       => esc_html__( 'Testimonial Setting Options', 'corpobrand' ),
	'panel'             => 'corpobrand_homepage_sections_panel',
) );

// testimonial enable setting and control.
$wp_customize->add_setting( 'corpobrand_theme_options[enable_testimonial]', array(
	'default'           => corpobrand_theme_option('enable_testimonial'),
	'sanitize_callback' => 'corpobrand_sanitize_switch',
) );

$wp_customize->add_control( new Corpobrand_Switch_Control( $wp_customize, 'corpobrand_theme_options[enable_testimonial]', array(
	'label'             => esc_html__( 'Enable Testimonial', 'corpobrand' ),
	'section'           => 'corpobrand_testimonial_section',
	'on_off_label' 		=> corpobrand_show_options(),
) ) );

// testimonial control enable setting and control.
$wp_customize->add_setting( 'corpobrand_theme_options[testimonial_control]', array(
	'default'           => corpobrand_theme_option('testimonial_control'),
	'sanitize_callback' => 'corpobrand_sanitize_switch',
) );

$wp_customize->add_control( new Corpobrand_Switch_Control( $wp_customize, 'corpobrand_theme_options[testimonial_control]', array(
	'label'             => esc_html__( 'Show Arrow Control', 'corpobrand' ),
	'section'           => 'corpobrand_testimonial_section',
	'on_off_label' 		=> corpobrand_show_options(),
) ) );

// testimonial auto slide enable setting and control.
$wp_customize->add_setting( 'corpobrand_theme_options[testimonial_auto_slide]', array(
	'default'           => corpobrand_theme_option('testimonial_auto_slide'),
	'sanitize_callback' => 'corpobrand_sanitize_switch',
) );

$wp_customize->add_control( new Corpobrand_Switch_Control( $wp_customize, 'corpobrand_theme_options[testimonial_auto_slide]', array(
	'label'             => esc_html__( 'Enable Auto Slide', 'corpobrand' ),
	'section'           => 'corpobrand_testimonial_section',
	'on_off_label' 		=> corpobrand_show_options(),
) ) );

// testimonial additional image setting and control.
$wp_customize->add_setting( 'corpobrand_theme_options[testimonial_image]', array(
	'sanitize_callback' => 'corpobrand_sanitize_image',
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'corpobrand_theme_options[testimonial_image]',
		array(
		'label'       		=> esc_html__( 'Select Background Image', 'corpobrand' ),
		'description' 		=> sprintf( esc_html__( 'Recommended size: %1$dpx x %2$dpx ', 'corpobrand' ), 1920, 1080 ),
		'section'     		=> 'corpobrand_testimonial_section',
) ) );

for ( $i = 1; $i <= 3; $i++ ) :

	// testimonial pages drop down chooser control and setting
	$wp_customize->add_setting( 'corpobrand_theme_options[testimonial_content_page_' . $i . ']', array(
		'sanitize_callback' => 'corpobrand_sanitize_page_post',
	) );

	$wp_customize->add_control( new Corpobrand_Dropdown_Chosen_Control( $wp_customize, 'corpobrand_theme_options[testimonial_content_page_' . $i . ']', array(
		'label'             => sprintf( esc_html__( 'Select Page %d', 'corpobrand' ), $i ),
		'section'           => 'corpobrand_testimonial_section',
		'choices'			=> corpobrand_page_choices(),
	) ) );

endfor;
