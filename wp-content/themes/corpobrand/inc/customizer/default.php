<?php
/**
 * Default Theme Customizer Values
 *
 * @package corpobrand
 */

function corpobrand_get_default_theme_options() {
	$corpobrand_default_options = array(
		// default options

		/* Homepage Sections */

		// Slider
		'enable_slider'			=> true,
		'slider_entire_site'	=> false,
		'slider_auto_slide'		=> false,
		'enable_slider_wave'	=> true,
		'slider_arrow'			=> true,
		'slider_btn_label'		=> esc_html__( 'Learn More', 'corpobrand' ),
		'slider_alt_btn_url'	=> '#',

		// Introduction
		'enable_introduction'		=> true,
		'introduction_btn_label'	=> esc_html__( 'Explore Us', 'corpobrand' ),

		// Service
		'enable_service'		=> true,
		'service_readmore'		=> esc_html__( 'Learn More', 'corpobrand' ),

		// Portfolio
		'enable_portfolio'		=> true,
		'portfolio_auto_slide'	=> false,
		'portfolio_title'		=> esc_html__( 'Portfolio', 'corpobrand' ),
		'portfolio_btn_label'	=> esc_html__( 'Read More', 'corpobrand' ),

		// Testimonial
		'enable_testimonial'		=> true,
		'testimonial_control'		=> true,
		'testimonial_auto_slide'	=> false,

		// Recent
		'enable_recent'			=> true,
		'recent_title'			=> esc_html__( 'Latest News', 'corpobrand' ),

		// Call to action
		'enable_cta'			=> true,
		'cta_btn_label'			=> esc_html__( 'Contact Us Now', 'corpobrand' ),
		
		// Footer
		'slide_to_top'			=> true,
		'copyright_text'		=> esc_html__( 'Copyright &copy; Corpobrand Theme | All Rights Reserved.', 'corpobrand' ),

		/* Theme Options */

		// blog / archive
		'latest_blog_title'		=> esc_html__( 'Blogs', 'corpobrand' ),
		'excerpt_count'			=> 25,
		'pagination_type'		=> 'numeric',
		'sidebar_layout'		=> 'right-sidebar',
		'column_type'			=> 'column-2',
		'show_date'				=> true,
		'show_category'			=> true,
		'show_author'			=> true,
		'show_comment'			=> true,

		// single post
		'sidebar_single_layout'	=> 'right-sidebar',
		'show_single_date'		=> true,
		'show_single_category'	=> true,
		'show_single_tags'		=> true,
		'show_single_author'	=> true,

		// page
		'sidebar_page_layout'	=> 'right-sidebar',

		// global
		'enable_breadcrumb'		=> true,
		'enable_sticky_header'	=> false,
		'site_layout'			=> 'full',

	);

	$output = apply_filters( 'corpobrand_default_theme_options', $corpobrand_default_options );
	return $output;
}