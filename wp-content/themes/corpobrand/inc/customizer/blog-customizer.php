<?php
/**
 * Blog / Archive / Search Customizer Options
 *
 * @package corpobrand
 */

// Add blog section
$wp_customize->add_section( 'corpobrand_blog_section', array(
	'title'             => esc_html__( 'Blog/Archive Page Setting','corpobrand' ),
	'description'       => esc_html__( 'Blog/Archive/Search Page Setting Options', 'corpobrand' ),
	'panel'             => 'corpobrand_theme_options_panel',
) );

// latest blog title drop down chooser control and setting
$wp_customize->add_setting( 'corpobrand_theme_options[latest_blog_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'          	=> corpobrand_theme_option( 'latest_blog_title' ),
) );

$wp_customize->add_control( new Corpobrand_Dropdown_Chosen_Control( $wp_customize, 'corpobrand_theme_options[latest_blog_title]', array(
	'label'             => esc_html__( 'Latest Blog Title', 'corpobrand' ),
	'description'       => esc_html__( 'Note: This title is displayed when your homepage displays option is set to latest posts.', 'corpobrand' ),
	'section'           => 'corpobrand_blog_section',
	'type'				=> 'text',
) ) );

// sidebar layout setting and control.
$wp_customize->add_setting( 'corpobrand_theme_options[sidebar_layout]', array(
	'sanitize_callback'   => 'corpobrand_sanitize_select',
	'default'             => corpobrand_theme_option( 'sidebar_layout' ),
) );

$wp_customize->add_control(  new Corpobrand_Radio_Image_Control ( $wp_customize, 'corpobrand_theme_options[sidebar_layout]', array(
	'label'               => esc_html__( 'Sidebar Layout', 'corpobrand' ),
	'section'             => 'corpobrand_blog_section',
	'choices'			  => corpobrand_sidebar_position(),
) ) );

// column control and setting
$wp_customize->add_setting( 'corpobrand_theme_options[column_type]', array(
	'default'          	=> corpobrand_theme_option( 'column_type' ),
	'sanitize_callback' => 'corpobrand_sanitize_select',
) );

$wp_customize->add_control( 'corpobrand_theme_options[column_type]', array(
	'label'             => esc_html__( 'Column Layout', 'corpobrand' ),
	'section'           => 'corpobrand_blog_section',
	'type'				=> 'select',
	'choices'			=> array( 
		'column-1' 		=> esc_html__( 'One Column', 'corpobrand' ),
		'column-2' 		=> esc_html__( 'Two Column', 'corpobrand' ),
	),
) );

// excerpt count control and setting
$wp_customize->add_setting( 'corpobrand_theme_options[excerpt_count]', array(
	'default'          	=> corpobrand_theme_option( 'excerpt_count' ),
	'sanitize_callback' => 'corpobrand_sanitize_number_range',
	'validate_callback' => 'corpobrand_validate_excerpt_count',
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'corpobrand_theme_options[excerpt_count]', array(
	'label'             => esc_html__( 'Excerpt Length', 'corpobrand' ),
	'description'       => esc_html__( 'Note: Min 1 & Max 50.', 'corpobrand' ),
	'section'           => 'corpobrand_blog_section',
	'type'				=> 'number',
	'input_attrs'		=> array(
		'min'	=> 1,
		'max'	=> 50,
		),
) );

// pagination control and setting
$wp_customize->add_setting( 'corpobrand_theme_options[pagination_type]', array(
	'default'          	=> corpobrand_theme_option( 'pagination_type' ),
	'sanitize_callback' => 'corpobrand_sanitize_select',
) );

$wp_customize->add_control( 'corpobrand_theme_options[pagination_type]', array(
	'label'             => esc_html__( 'Pagination Type', 'corpobrand' ),
	'section'           => 'corpobrand_blog_section',
	'type'				=> 'select',
	'choices'			=> array( 
		'default' 		=> esc_html__( 'Default', 'corpobrand' ),
		'numeric' 		=> esc_html__( 'Numeric', 'corpobrand' ),
	),
) );

// Archive date meta setting and control.
$wp_customize->add_setting( 'corpobrand_theme_options[show_date]', array(
	'default'           => corpobrand_theme_option( 'show_date' ),
	'sanitize_callback' => 'corpobrand_sanitize_switch',
) );

$wp_customize->add_control( new Corpobrand_Switch_Control( $wp_customize, 'corpobrand_theme_options[show_date]', array(
	'label'             => esc_html__( 'Show Date', 'corpobrand' ),
	'section'           => 'corpobrand_blog_section',
	'on_off_label' 		=> corpobrand_show_options(),
) ) );

// Archive category meta setting and control.
$wp_customize->add_setting( 'corpobrand_theme_options[show_category]', array(
	'default'           => corpobrand_theme_option( 'show_category' ),
	'sanitize_callback' => 'corpobrand_sanitize_switch',
) );

$wp_customize->add_control( new Corpobrand_Switch_Control( $wp_customize, 'corpobrand_theme_options[show_category]', array(
	'label'             => esc_html__( 'Show Category', 'corpobrand' ),
	'section'           => 'corpobrand_blog_section',
	'on_off_label' 		=> corpobrand_show_options(),
) ) );

// Archive author meta setting and control.
$wp_customize->add_setting( 'corpobrand_theme_options[show_author]', array(
	'default'           => corpobrand_theme_option( 'show_author' ),
	'sanitize_callback' => 'corpobrand_sanitize_switch',
) );

$wp_customize->add_control( new Corpobrand_Switch_Control( $wp_customize, 'corpobrand_theme_options[show_author]', array(
	'label'             => esc_html__( 'Show Author', 'corpobrand' ),
	'section'           => 'corpobrand_blog_section',
	'on_off_label' 		=> corpobrand_show_options(),
) ) );

// Archive comment meta setting and control.
$wp_customize->add_setting( 'corpobrand_theme_options[show_comment]', array(
	'default'           => corpobrand_theme_option( 'show_comment' ),
	'sanitize_callback' => 'corpobrand_sanitize_switch',
) );

$wp_customize->add_control( new Corpobrand_Switch_Control( $wp_customize, 'corpobrand_theme_options[show_comment]', array(
	'label'             => esc_html__( 'Show Comment', 'corpobrand' ),
	'section'           => 'corpobrand_blog_section',
	'on_off_label' 		=> corpobrand_show_options(),
) ) );