<?php
if (!function_exists('medical_hub_sidebar_layout')) :
    function medical_hub_sidebar_layout()
    {
        $medical_hub_sidebar_layout = array(
            'right-sidebar' => esc_html__('Right Sidebar', 'medical-hub'),
            'left-sidebar' => esc_html__('Left Sidebar', 'medical-hub'),
            'no-sidebar' => esc_html__('No Sidebar', 'medical-hub'),
        );
        return apply_filters('medical_hub_sidebar_layout', $medical_hub_sidebar_layout);
    }
endif;

/**
 * Blog/Archive Description Option
 *
 * @since Business agency 1.0.0
 *
 *
 * 
 * @param null
 * @return array $medical_hub_blog_excerpt
 *
 */
if (!function_exists('medical_hub_blog_excerpt')) :
    function medical_hub_blog_excerpt()
    {
        $medical_hub_blog_excerpt = array(
            'excerpt' => esc_html__('Excerpt', 'medical-hub'),
            'content' => esc_html__('Content', 'medical-hub'),

        );
        return apply_filters('medical_hub_blog_excerpt', $medical_hub_blog_excerpt);
    }
endif;

/**
 * Show/Hide Feature Image  options
 *
 * @since Business agency 1.0.0
 *
 * @param null
 * @return array $medical_hub_show_feature_image_option
 *
 */
if (!function_exists('medical_hub_show_feature_image_option')) :
    function medical_hub_show_feature_image_option()
    {
        $medical_hub_show_feature_image_option = array(
            'show' => esc_html__('Show', 'medical-hub'),
            'hide' => esc_html__('Hide', 'medical-hub')
        );
        return apply_filters('medical_hub_show_feature_image_option', $medical_hub_show_feature_image_option);
    }
endif;
