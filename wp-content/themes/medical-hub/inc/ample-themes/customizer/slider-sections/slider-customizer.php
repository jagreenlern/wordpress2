<?php
/**
 * HomePage Settings Panel on customizer
 */
$wp_customize->add_panel(
    'medical_hub_homepage_settings_panel',
    array(
        'priority' => 5,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => esc_html__('HomePage Slider Settings', 'medical-hub'),
    )
);

/*-------------------------------------------------------------------------------------------------*/
/**
 * Slider Section
 *
 */
$wp_customize->add_section(
    'medical_hub_slider_section',
    array(
        'title' => esc_html__('Slider Section', 'medical-hub'),
        'panel' => 'medical_hub_homepage_settings_panel',
        'priority' => 6,
    )
);

/**
 * Show/Hide option for Homepage Slider Section
 *
 */

$wp_customize->add_setting(
    'medical_hub_homepage_slider_option',
    array(
        'default' => $default['medical_hub_homepage_slider_option'],
        'sanitize_callback' => 'medical_hub_sanitize_select',
    )
);
$hide_show_option = medical_hub_slider_option();
$wp_customize->add_control(
    'medical_hub_homepage_slider_option',
    array(
        'type' => 'radio',
        'label' => esc_html__('Slider Option', 'medical-hub'),
        'description' => esc_html__('Show/hide option for homepage Slider Section.', 'medical-hub'),
        'section' => 'medical_hub_slider_section',
        'choices' => $hide_show_option,
        'priority' => 7
    )
);


/**
 * List All Pages
 */
$slider_pages = array();
$slider_pages_obj = get_pages();
$slider_pages[''] = esc_html__('Select Page','medical-hub');
foreach ($slider_pages_obj as $page) {
    $slider_pages[$page->ID] = $page->post_title;
}


/*repeter call */
$wp_customize->add_setting('medical_hub_banner_all_sliders', array(
    'sanitize_callback' => 'medical_hub_sanitize_repeater',
    'default' => json_encode(array(
        array(
            'selectpage' => '',//field
            'button_text' => '',
            'button_url' => ''
        )
    ))
));

$wp_customize->add_control(new medical_hub_Repeater_Controler($wp_customize, 'medical_hub_banner_all_sliders', array(
        'label' =>esc_html__('Slider Settings Area', 'medical-hub'),
        'section' => 'medical_hub_slider_section',
        'settings' => 'medical_hub_banner_all_sliders',
        'medical_hub_box_label' =>esc_html__('Slider Settings Options', 'medical-hub'),
        'medical_hub_box_add_control' =>esc_html__('Add New Slider', 'medical-hub'),
    ),
        array(
            'selectpage' => array(
                'type' => 'select',
                'label' =>esc_html__('Select Slider Page', 'medical-hub'),
                'options' => $slider_pages//array
            ),
            'button_text' => array(
                'type' => 'text',
                'label' =>esc_html__('Enter Button Text', 'medical-hub'),
                'default' => ''
            ),
            'button_url' => array(
                'type' => 'text',
                'label' => esc_html__('Enter Button Url', 'medical-hub'),
                'default' => ''
            ),

        )
    )
);

	