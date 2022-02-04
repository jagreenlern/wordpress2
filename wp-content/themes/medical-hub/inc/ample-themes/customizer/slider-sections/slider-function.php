<?php

/**
 * Slider  options
 * @param null
 * @return array $medical_hub_slider_option
 *
 */
if (!function_exists('medical_hub_slider_option')) :
    function medical_hub_slider_option()
    {
        $medical_hub_slider_option = array(
            'show' => esc_html__('Show', 'medical-hub'),
            'hide' => esc_html__('Hide', 'medical-hub')
        );
        return apply_filters('medical_hub_slider_option', $medical_hub_slider_option);
    }
endif;