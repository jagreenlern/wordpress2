<?php
/**
 * Business agency default theme options.
 *
 * 
 * @subpackage Business agency
 */

if ( !function_exists('medical_hub_get_default_theme_options' ) ) :

    /**
     * Get default theme options.
     *
     * @since 1.0.0
     *
     * @return array Default theme options.
     */
    function medical_hub_get_default_theme_options()
    {

        $default = array();

        // Homepage Slider Section
        $default['medical_hub_homepage_slider_option'] = 'hide';
        $default['medical_hub_slider_cat_id'] = 0;
        $default['medical_hub_no_of_slider'] = 3;
        $default['medical_hub_slider_get_started_txt'] = esc_html__('Get Started!', 'medical-hub');
        $default['medical_hub_slider_get_started_link'] = '#';

        // footer copyright.
        $default['medical_hub_copyright'] = esc_html__('Copyright Text', 'medical-hub');

        // Home Page Top header Info.
        $default['medical_hub_top_header_section'] = 'hide';
        $default['medical_hub_notice_title']= esc_html__('Notice', 'medical-hub');
        $default['medical_hub_news_cat_id']='';
        $default['medical_hub_no_of_news']=5;
        $default['medical_hub_social_link_hide_option'] = 1;

        $default['medical_hub_button']=esc_html__('Contact Us', 'medical-hub');
        $default['medical_hub_apply_button_link']='';

        // Blog.
        $default['medical_hub_sidebar_layout_option'] = 'right-sidebar';
        $default['medical_hub_blog_title_option'] = esc_html__('Latest Blog', 'medical-hub');
        $default['medical_hub_blog_excerpt_option'] = 'excerpt';
        $default['medical_hub_description_length_option'] = 40;
        $default['medical_hub_exclude_cat_blog_archive_option'] = '';
        

        // Details page.
        $default['medical_hub_show_feature_image_single_option'] = 'show';

        // Color Option.
        $default['medical_hub_primary_color'] = '#3a6ee7';
       
        $default['medical_hub_top_header_background_color'] = '#3a6ee7';
        $default['medical_hub_top_footer_background_color'] = '#444444';
        $default['medical_hub_bottom_footer_background_color'] = '#444444';
        $default['medical_hub_front_page_hide_option'] = 0;
        $default['medical_hub_breadcrumb_setting_option'] = 'enable';
        $default['medical_hub_post_search_placeholder_option'] = esc_html__('Search', 'medical-hub');
        $default['medical_hub_hide_breadcrumb_front_page_option'] = 0;
        $default['medical_hub_color_reset_option'] = 'do-not-reset';

        //company info
       $default['medical_hub_info_header_section']='hide';
       $default['medical_hub_info_header_section_location_icon']='fa-home';
        $default['medical_hub_info_header_location']='';
        $default['medical_hub_info_header_section_phone_number_icon']='fa-phone';
        $default['medical_hub_info_header_phone_no']='';
        $default['medical_hub_email_icon']='fa-envelope';
        $default['medical_hub_info_header_email']='';



        // Pass through filter.
        $default = apply_filters( 'medical_hub_get_default_theme_options', $default );
        return $default;
    }
endif;
