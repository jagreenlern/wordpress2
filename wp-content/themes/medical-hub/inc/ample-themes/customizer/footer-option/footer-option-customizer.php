<?php
/**
 * Copyright Info Section
 *
 * @since 1.0.0
 */
$wp_customize->add_section(
    'medical_hub_copyright_info_section',
    array(
        'priority' => 10,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => esc_html__('Footer Option', 'medical-hub'),
    )
);

/**
 * Field for Copyright
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'medical_hub_copyright',
    array(
        'default' => $default['medical_hub_copyright'],
        'sanitize_callback' => 'wp_kses_post',
    )
);
$wp_customize->add_control(
    'medical_hub_copyright',
    array(
        'type' => 'text',
        'label' => esc_html__('Copyright', 'medical-hub'),
        'section' => 'medical_hub_copyright_info_section',
        'priority' => 8
    )
);

