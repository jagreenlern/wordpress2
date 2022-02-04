<?php
/**
 * Page Customizer Options
 *
 * @package corpobrand
 */

// Add excerpt section
$wp_customize->add_section( 'corpobrand_page_section', array(
	'title'             => esc_html__( 'Page Setting','corpobrand' ),
	'description'       => esc_html__( 'Page Setting Options', 'corpobrand' ),
	'panel'             => 'corpobrand_theme_options_panel',
) );

// sidebar layout setting and control.
$wp_customize->add_setting( 'corpobrand_theme_options[sidebar_page_layout]', array(
	'sanitize_callback'   => 'corpobrand_sanitize_select',
	'default'             => corpobrand_theme_option('sidebar_page_layout'),
) );

$wp_customize->add_control(  new Corpobrand_Radio_Image_Control ( $wp_customize, 'corpobrand_theme_options[sidebar_page_layout]', array(
	'label'               => esc_html__( 'Sidebar Layout', 'corpobrand' ),
	'section'             => 'corpobrand_page_section',
	'choices'			  => corpobrand_sidebar_position(),
) ) );
