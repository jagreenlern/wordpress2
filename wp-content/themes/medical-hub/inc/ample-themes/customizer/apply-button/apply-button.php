<?php
/**
 * applybutton Info Section
 *
 * @since 1.0.0
 */
$wp_customize->add_section(
    'medical_hub_applybutton_info_section',
    array(
        'priority' => 10,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => esc_html__('Contact us Top Button Option', 'medical-hub'),
    )
);


$wp_customize->add_setting(
    'medical_hub_button',
    array(
        'default' => $default['medical_hub_button'],
        'sanitize_callback' => 'wp_kses_post',
    )
);
$wp_customize->add_control(
    'medical_hub_button',
    array(
        'type' => 'text',
        'label' => esc_html__(' Button Text', 'medical-hub'),
        'section' => 'medical_hub_applybutton_info_section',
        'priority' => 8
    )
);

/**
 * Field for Get Started button Link
 *
 */
$wp_customize->add_setting(
    'medical_hub_apply_button_link',
    array(
        'default' => $default['medical_hub_apply_button_link'],
        'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control(
    'medical_hub_apply_button_link',
    array(
        'type' => 'url',
        'label' => esc_html__('Button Text Link', 'medical-hub'),
        'description' => esc_html__('Use full url link', 'medical-hub'),
        'section' => 'medical_hub_applybutton_info_section',
        'priority' => 9
    )
);


