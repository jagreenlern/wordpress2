<?php
/**
 * Breadcrumb  display option options
 * @param null
 * @return array $medical_hub_show_breadcrumb_option
 *
 */
if (!function_exists('medical_hub_show_breadcrumb_option')) :
    function medical_hub_show_breadcrumb_option()
    {
        $medical_hub_show_breadcrumb_option = array(
            'enable' => esc_html__('Enable', 'medical-hub'),
            'disable' => esc_html__('Disable', 'medical-hub')
        );
        return apply_filters('medical_hub_show_breadcrumb_option', $medical_hub_show_breadcrumb_option);
    }
endif;


/**
 * Reset Option
 *
 *
 * @param null
 * @return array $medical_hub_reset_option
 *
 */
if (!function_exists('medical_hub_reset_option')) :
    function medical_hub_reset_option()
    {
        $medical_hub_reset_option = array(
            'do-not-reset' => esc_html__('Do Not Reset', 'medical-hub'),
            'reset-all' => esc_html__('Reset All', 'medical-hub'),
        );
        return apply_filters('medical_hub_reset_option', $medical_hub_reset_option);
    }
endif;



/**
 * Sanitize Multiple Category
 * =====================================
 */

if ( !function_exists('medical_hub_sanitize_multiple_category') ) :

    function medical_hub_sanitize_multiple_category( $values )
    {

        $multi_values = !is_array( $values ) ? explode( ',', $values ) : $values;

        return !empty( $multi_values ) ? array_map( 'sanitize_text_field', $multi_values ) : array();
    }

endif;
