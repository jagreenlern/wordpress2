<?php
/**
 * Describe child theme functions
 *
 * @package Enrollment
 * @subpackage Enrollment Lite
 * 
 */

/*-------------------------------------------------------------------------------------------------------------------------------*/

if ( ! function_exists( 'enrollment_lite_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function enrollment_lite_setup() {

	    $enrollment_lite_theme_info = wp_get_theme();
	    $GLOBALS['enrollment_lite_version'] = $enrollment_lite_theme_info->get( 'Version' );
	}
	endif;

add_action( 'after_setup_theme', 'enrollment_lite_setup' );

/*-------------------------------------------------------------------------------------------------------------------------------*/
	
if( ! function_exists( 'enrollment_lite_customize_register' ) ) :
	/**
	 * Managed the theme default color
	 */
	function enrollment_lite_customize_register( $wp_customize ) {
		
		global $wp_customize;

		$wp_customize->get_setting( 'enrollment_primary_theme_color' )->default = '#00c353';

	}
endif;

add_action( 'customize_register', 'enrollment_lite_customize_register', 20 );


/*-------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Enqueue child theme styles and scripts
 */
add_action( 'wp_enqueue_scripts', 'enrollment_lite_scripts', 20 );

function enrollment_lite_scripts() {
    
    global $enrollment_lite_version;
    
    wp_dequeue_style( 'enrollment-style' );
    wp_dequeue_style( 'enrollment-responsive-style' );
    
	wp_enqueue_style( 'enrollment-parent-style', get_template_directory_uri() . '/style.css', array(), esc_attr( $enrollment_lite_version ) );
    
    wp_enqueue_style( 'enrollment-parent-responsive', get_template_directory_uri() . '/assets/css/enrollment-responsive.css', array(), esc_attr( $enrollment_lite_version ) );
    
    wp_enqueue_style( 'enrollment-lite', get_stylesheet_uri(), array(), esc_attr( $enrollment_lite_version ) );
    
    $enrollment_lite_theme_color = get_theme_mod( 'enrollment_primary_theme_color', '#ecb101' );
    
    $output_css = '';
    
    $output_css .=" a,a:hover,a:focus,a:active,.entry-footer a:hover,.header-elements-holder .top-info:after,.header-search-wrapper .search-main:hover,.widget a:hover,.widget a:hover:before,.widget li:hover:before,.enrollment_service .post-title a:hover,.team-title-wrapper .post-title a:hover,.testimonial-content:before,.enrollment_testimonials .client-name,.latest-posts-wrapper .byline a:hover,.latest-posts-wrapper .posted-on a:hover,.latest-posts-wrapper .news-title a:hover,.enrollment_latest_blog .news-more,.enrollment_latest_blog .news-more:hover,.search-results .entry-title a:hover,.archive .entry-title a:hover,.single .entry-title a:hover,.home.blog .archive-content-wrapper .entry-title a:hover,.archive-content-wrapper .entry-title a:hover,.entry-meta span a:hover,.post-readmore a:hover,#top-footer .widget_archive a:hover:before, #top-footer .widget_categories a:hover:before, #top-footer .widget_recent_entries a:hover:before, #top-footer .widget_meta a:hover:before, #top-footer .widget_recent_comments li:hover:before, #top-footer .widget_rss li:hover:before, #top-footer .widget_pages li a:hover:before, #top-footer .widget_nav_menu li a:hover:before,#top-footer .widget_archive a:hover, #top-footer .widget_categories a:hover, #top-footer .widget_recent_entries a:hover, #top-footer .widget_meta a:hover, #top-footer .widget_recent_comments li:hover, #top-footer .widget_rss li:hover, #top-footer .widget_pages li a:hover, #top-footer .widget_nav_menu li a:hover,.site-info a:hover,.grid-archive-layout .entry-title a:hover,.menu-toggle:hover,#cancel-comment-reply-link,#cancel-comment-reply-link:before,.logged-in-as a{
            color:". esc_attr( $enrollment_lite_theme_color ) .";
        }\n";
        
    $output_css .=".navigation .nav-links a:hover,.bttn:hover,button,input[type='button']:hover,input[type='reset']:hover,input[type='submit']:hover,.edit-link .post-edit-link,#site-navigation ul li.current-menu-item>a,#site-navigation ul li.current-menu-ancestor>a,#site-navigation ul li:hover>a,#site-navigation ul li.current_page_ancestor>a,#site-navigation ul li.current_page_item>a,.header-search-wrapper .search-form-main .search-submit:hover,.slider-btn:hover,.enrollment-slider-wrapper .lSAction>a:hover,.widget_search .search-submit,.widget .widget-title:after,.widget_search .search-submit,.widget .enrollment-widget-wrapper .widget-title:before,.widget .enrollment-widget-wrapper .widget-title:after,.enrollment_service .grid-items-wrapper .single-post-wrapper,.cta-btn-wrap a,.cta-btn-wrap a:hover,.courses-block-wrapper .courses-link:hover,.entry-btn:hover,.team-wrapper .team-desc-wrapper,.enrollment_testimonials .lSSlideOuter .lSPager.lSpg>li:hover a,.enrollment_testimonials .lSSlideOuter .lSPager.lSpg>li.active a,#cv-scrollup:hover,#cv-scrollup{
            background:". esc_attr( $enrollment_lite_theme_color ) .";
        }\n";
        
   $output_css .=".navigation .nav-links a,.bttn,button,input[type='button'],input[type='reset'],input[type='submit'],.header-elements-holder .top-info:after,.header-search-wrapper .search-form-main .search-submit:hover,.slider-btn,.widget_search .search-submit,.cta-btn-wrap a:hover,.courses-link,.entry-btn{
            border-color:". esc_attr( $enrollment_lite_theme_color ) .";
       }\n";
        
   $output_css .="#colophon{
            border-top-color:". esc_attr( $enrollment_lite_theme_color ) .";
        }\n";
        

    $refine_output_css = enrollment_css_strip_whitespace( $output_css );

    wp_add_inline_style( 'enrollment-lite', $refine_output_css );
    
}