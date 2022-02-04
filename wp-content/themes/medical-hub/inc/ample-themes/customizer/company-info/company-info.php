<?php

/**
 * Business Header Info Section
 *
 */
$wp_customize->add_section(
    'medical_hub_comapny_info_section',
    array(
        'priority' => 6,
        'capability' => 'edit_theme_options',
        'title' => esc_html__('Company Info', 'medical-hub'),
    )
);

$wp_customize->add_setting(
    'medical_hub_info_header_section',
    array(
        'default' => $default['medical_hub_info_header_section'],
        'sanitize_callback' => 'medical_hub_sanitize_select',
    )
);

$hide_show_top_header_option = medical_hub_slider_option();
$wp_customize->add_control(
    'medical_hub_info_header_section',
    array(
        'type' => 'radio',
        'label' => esc_html__('Company Info Option', 'medical-hub'),
        'description' => esc_html__('Show/hide Option for Company Info Section.', 'medical-hub'),
        'section' => 'medical_hub_comapny_info_section',
        'choices' => $hide_show_top_header_option,
        'priority' => 5
    )
);



/**
 * Field for icon location
 *
 */
$wp_customize->add_setting(
    'medical_hub_info_header_section_location_icon',
    array(
        'default' => $default['medical_hub_info_header_section_location_icon'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'medical_hub_info_header_section_location_icon',
    array(
        'type' => 'text',
        'description' => esc_html__('Insert Font Awesome Icon For Location', 'medical-hub'),
        'section' => 'medical_hub_comapny_info_section',
        'priority' => 6
    )
);

/**
 * Field for Company Info Phone Number
 *
 */
$wp_customize->add_setting(
    'medical_hub_info_header_location',
    array(
        'default' => $default['medical_hub_info_header_location'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'medical_hub_info_header_location',
    array(
        'type' => 'text',
        'label' => esc_html__('Address', 'medical-hub'),
        'section' => 'medical_hub_comapny_info_section',
        'priority' => 7
    )
);




/**
 * Field for Font Awesome Icon Icon
 *
 */
$wp_customize->add_setting(
    'medical_hub_info_header_section_phone_number_icon',
    array(
        'default' => $default['medical_hub_info_header_section_phone_number_icon'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'medical_hub_info_header_section_phone_number_icon',
    array(
        'type' => 'text',
        'description' => esc_html__('Insert Font Awesome Icon For Phone', 'medical-hub'),
        'section' => 'medical_hub_comapny_info_section',
        'priority' => 8
    )
);

/**
 * Field for Company Info Phone Number
 *
 */
$wp_customize->add_setting(
    'medical_hub_info_header_phone_no',
    array(
        'default' => $default['medical_hub_info_header_phone_no'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'medical_hub_info_header_phone_no',
    array(
        'type' => 'text',
        'label' => esc_html__('Phone Number', 'medical-hub'),
        'section' => 'medical_hub_comapny_info_section',
        'priority' => 9
    )
);

/**
 * Field for Fonsome Icon
 *
 */
$wp_customize->add_setting(
    'medical_hub_email_icon',
    array(
        'default' => $default['medical_hub_email_icon'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'medical_hub_email_icon',
    array(
        'type' => 'text',
        'description' => esc_html__('Insert Font Awesome Icon Class For Email', 'medical-hub'),
        'section' => 'medical_hub_comapny_info_section',
        'priority' => 10
    )
);

/**
 * Field for Company Info Email Address
 *
 */
$wp_customize->add_setting(
    'medical_hub_info_header_email',
    array(
        'default' => $default['medical_hub_info_header_email'],
        'sanitize_callback' => 'sanitize_email',
    )
);
$wp_customize->add_control(
    'medical_hub_info_header_email',
    array(
        'type' => 'email',
        'label' => esc_html__('Email Address', 'medical-hub'),
        'section' => 'medical_hub_comapny_info_section',
        'priority' => 11
    )
);

