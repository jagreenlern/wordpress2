<?php
/**
 * Layout/Design Option
 *
 */
$wp_customize->add_panel(
    'medical_hub_design_layout_options',
    array(
        'priority' => 7,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => esc_html__(' Layout/Design Option', 'medical-hub'),
    )
);

/*-------------------------------------------------------------------------------------------*/
/**
 * Sidebar Option
 *
 */
$wp_customize->add_section(
    'medical_hub_default_sidebar_layout_option',
    array(
        'title' => esc_html__('Default Sidebar Layout Option', 'medical-hub'),
        'panel' => 'medical_hub_design_layout_options',
        'priority' => 6,
    )
);

/**
 * Sidebar Option
 */
$wp_customize->add_setting(
    'medical_hub_sidebar_layout_option',
    array(
        'default' => $default['medical_hub_sidebar_layout_option'],
        'sanitize_callback' => 'medical_hub_sanitize_select',
    )
);


$layout = medical_hub_sidebar_layout();
$wp_customize->add_control('medical_hub_sidebar_layout_option',
    array(
        'label' => esc_html__('Default Sidebar Layout', 'medical-hub'),
        'description' => esc_html__('Home/front page does not have sidebar. Inner pages like blog, archive single page/post Sidebar Layout. However single page/post sidebar can be overridden.', 'medical-hub'),
        'section' => 'medical_hub_default_sidebar_layout_option',
        'type' => 'select',
        'choices' => $layout,
        'priority' => 10
    )
);


/*-------------------------------------------------------------------------------------------*/

/**
 * Blog/Archive Layout Option
 *
 * @since 1.0.0
 */
$wp_customize->add_section(
    'medical_hub_blog_archive_layout_option',
    array(
        'title' => esc_html__('Blog/Archive Layout Option', 'medical-hub'),
        'panel' => 'medical_hub_design_layout_options',
        'priority' => 7,
    )
);


/**
 * Blog Page Title
 */
$wp_customize->add_setting(
    'medical_hub_blog_title_option',
    array(
        'default' => $default['medical_hub_blog_title_option'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control('medical_hub_blog_title_option',
    array(
        'label' => esc_html__('Blog Page Title', 'medical-hub'),
        'section' => 'medical_hub_blog_archive_layout_option',
        'type' => 'text',
        'priority' => 11
    )
);

/**
 * Blog/Archive excerpt option
 */
$wp_customize->add_setting(
    'medical_hub_blog_excerpt_option',
    array(
        'default' => $default['medical_hub_blog_excerpt_option'],
        'sanitize_callback' => 'medical_hub_sanitize_select',
    )
);
$blogexcerpt = medical_hub_blog_excerpt();
$wp_customize->add_control('medical_hub_blog_excerpt_option',
    array(
        'choices' => $blogexcerpt,
        'label' => esc_html__('Show Description From', 'medical-hub'),
        'section' => 'medical_hub_blog_archive_layout_option',
        'type' => 'select',
        'priority' => 8
    )
);

/**
 * Description Length In Words
 */
$wp_customize->add_setting(
    'medical_hub_description_length_option',
    array(
        'default' => $default['medical_hub_description_length_option'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control('medical_hub_description_length_option',
    array(
        'label' => esc_html__('Description Length In Words', 'medical-hub'),
        'section' => 'medical_hub_blog_archive_layout_option',
        'type' => 'number',
        'priority' => 12
    )
);
/*-------------------------------------------------------------------------------------------*/
/**
 * Feature Image Option
 *
 */
$wp_customize->add_section(
    'medical_hub_feature_image_info_option',
    array(
        'title' => esc_html__('Feature Image Option For Single post / Page', 'medical-hub'),
        'panel' => 'medical_hub_design_layout_options',
        'priority' => 6,
    )
);


/**
 * Feature Image Option Single page
 */
$wp_customize->add_setting(
    'medical_hub_show_feature_image_single_option',
    array(
        'default' => $default['medical_hub_show_feature_image_single_option'],
        'sanitize_callback' => 'medical_hub_sanitize_select',
    )
);

$hide_show_feature_image_option = medical_hub_show_feature_image_option();
$wp_customize->add_control(
    'medical_hub_show_feature_image_single_option',
    array(
        'type' => 'radio',
        'label' => esc_html__('Show/Hide Feature Image For Single Page/post', 'medical-hub'),
        'section' => 'medical_hub_feature_image_info_option',
        'choices' => $hide_show_feature_image_option,
        'priority' => 5
    )
);



  

	