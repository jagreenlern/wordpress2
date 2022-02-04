<?php
/**
 * Default theme options.
 *
 * @package Meilleur Business
 */

if ( ! function_exists( 'meilleur_business_get_default_theme_options' ) ) :

	/**
	 * Get default theme options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Default theme options.
	 */
function meilleur_business_get_default_theme_options() {

	$defaults = array();

	$defaults['show_header_contact_info'] 	= true;
    $defaults['header_email']             	= __( 'info@creativthemes.com','meilleur-business' );
    $defaults['header_phone' ]            	= __( '+1-541-754-3010','meilleur-business' );
    $defaults['header_location' ]           = __( 'London, UK','meilleur-business' );
    $defaults['show_header_social_links'] 	= true;
    $defaults['header_social_links']		= array();

	// Featured Slider Section
	$defaults['disable_featured_slider']	= true;
	$defaults['number_of_sr_items']			= 3;
	$defaults['featured_slider_overlay']	= 0.4;
	$defaults['sr_content_type']			= 'sr_page';

	// Featured Courses Section
	$defaults['disable_featured_courses_section']	= true;
	$defaults['featured_courses_title']	   	 		= esc_html__( 'About Us', 'meilleur-business' );
	$defaults['about_us_section_subtitle']			= esc_html__( 'Business consulting excepteur sint occaecat cupidatat consulting non proident, sunt in culpa qui officia deserunt laborum Market.', 'meilleur-business' );
	$defaults['number_of_ss_items']					= 1;
	$defaults['ss_content_type']					= 'ss_page';

	// Our Team Section
	$defaults['disable_team_section']		= true;
	$defaults['team_title']	   	 			= esc_html__( 'Our Team Members', 'meilleur-business' );
	$defaults['team_subtitle']				= esc_html__( 'Business consulting excepteur sint occaecat cupidatat consulting non proident, sunt in culpa qui officia deserunt laborum Market.', 'meilleur-business' );
	$defaults['number_of_ts_column']		= 3;
	$defaults['number_of_ts_items']			= 3;
	$defaults['ts_content_type']			= 'ts_page';

	//Featured Plans Section	
	$defaults['disable_featured_plans_section']	= true;
	$defaults['logo_title']	   	 				= esc_html__( 'Our Partners', 'meilleur-business' );
	$defaults['logo_subtitle']					= esc_html__( 'Business consulting excepteur sint occaecat cupidatat consulting non proident, sunt in culpa qui officia deserunt laborum Market.', 'meilleur-business' );
	$defaults['number_of_cs_column']			= 5;
	$defaults['number_of_cs_items']				= 5;
	$defaults['cs_content_type']				= 'cs_page';

	// Our Services Section
	$defaults['disable_additional_info_section']	= true;
	$defaults['additional_info_section_title']	   	= esc_html__( 'Our Services', 'meilleur-business' );
	$defaults['additional_info_section_subtitle']	= esc_html__( 'Business consulting excepteur sint occaecat cupidatat consulting non proident, sunt in culpa qui officia deserunt laborum Market.', 'meilleur-business' );
	$defaults['number_of_column']					= 3;
	$defaults['number_of_items']					= 6;
	$defaults['ad_content_type']					= 'ad_page';

	//Cta Section	
	$defaults['disable_cta_section']	   	= true;
	$defaults['background_cta_section']		= get_template_directory_uri() .'/assets/images/default-header.jpg';
	$defaults['cta_small_description']	   	= esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'meilleur-business' );
	$defaults['cta_description']	   	 	= esc_html__( 'We Have 25 Years Experience in Web Design and Development', 'meilleur-business' );
	$defaults['cta_overlay']				= 0.6;
	$defaults['cta_button_label']	   	 	= esc_html__( 'Purchase Now', 'meilleur-business' );
	$defaults['cta_button_url']	   	 		= '#';

	// Gallery Section
	$defaults['disable_gallery_section']	= true;
	$defaults['gallery_title']	   	 		= esc_html__( 'Recent Work', 'meilleur-business' );
	$defaults['gallery_subtitle']			= esc_html__( 'Business consulting excepteur sint occaecat cupidatat consulting non proident, sunt in culpa qui officia deserunt laborum Market.', 'meilleur-business' );
	$defaults['number_of_gy_column']		= 3;
	$defaults['number_of_gy_items']			= 6;
	$defaults['gy_content_type']			= 'gy_page';
	
	// Testimonial Slider Section
	$defaults['disable_testimonial_slider']		= true;
	$defaults['background_testimonial_section']	= get_template_directory_uri() .'/assets/images/default-header.jpg';
	$defaults['testimonial_title']	   	 		= esc_html__( 'Clients Feedback', 'meilleur-business' );
	$defaults['testimonial_subtitle']			= esc_html__( 'Business consulting excepteur sint occaecat cupidatat consulting non proident, sunt in culpa qui officia deserunt laborum Market.', 'meilleur-business' );
	$defaults['testimonial_overlay']			= 0.6;
	$defaults['number_of_testi_items']			= 3;
	$defaults['tl_content_type']				= 'tl_page';

	// Blog Section
	$defaults['disable_blog_section']		= true;
	$defaults['blog_title']	   	 			= esc_html__( 'Latest News & Blog', 'meilleur-business' );
	$defaults['blog_subtitle']				= esc_html__( 'Business consulting excepteur sint occaecat cupidatat consulting non proident, sunt in culpa qui officia deserunt laborum Market.', 'meilleur-business' );
	$defaults['blog_category']	   			= 0; 
	$defaults['blog_number']				= 3;

	//General Section
	$defaults['readmore_text']				= esc_html__('Read More','meilleur-business');
	$defaults['excerpt_length']				= 40;
	$defaults['layout_options']				= 'right-sidebar';	

	//Footer section 		
	$defaults['copyright_text']				= esc_html__( 'Copyright &copy; All rights reserved.', 'meilleur-business' );

	// Pass through filter.
	$defaults = apply_filters( 'meilleur_business_filter_default_theme_options', $defaults );
	return $defaults;
}

endif;

/**
*  Get theme options
*/
if ( ! function_exists( 'meilleur_business_get_option' ) ) :

	/**
	 * Get theme option
	 *
	 * @since 1.0.0
	 *
	 * @param string $key Option key.
	 * @return mixed Option value.
	 */
	function meilleur_business_get_option( $key ) {

		$default_options = meilleur_business_get_default_theme_options();
		if ( empty( $key ) ) {
			return;
		}

		$theme_options = (array)get_theme_mod( 'theme_options' );
		$theme_options = wp_parse_args( $theme_options, $default_options );

		$value = null;

		if ( isset( $theme_options[ $key ] ) ) {
			$value = $theme_options[ $key ];
		}

		return $value;

	}

endif;