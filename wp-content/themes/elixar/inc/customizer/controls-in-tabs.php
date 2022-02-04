<?php 
/* slider */
$wp_customize->add_setting(
	'slider_tabs', array(
		'sanitize_callback' => 'sanitize_text_field',
	)
);
        
$wp_customize->add_control(
    new Customizer_Tabs_Control(
        $wp_customize, 'slider_tabs', apply_filters('elixar_slider_control_tabs', array(
            /* Make sure you edit the following parameters*/
            'section' => 'elixar_slider',
            'tabs'    => array(
                'slider_settings' => array(
                    'nicename' => esc_html__( 'Settings', 'elixar' ),
                    'icon'     => 'cogs',
                    'controls' => array(
                        'elixar_hero_enable',
                        'elixar_hero_id',
                    ),
                ),
                'slider_content'   => array(
                    'nicename' => esc_html__( 'Content', 'elixar' ),
                    'icon'     => 'edit',
                    'controls' => array(
                        'elixar_hero_padding_top',
                        'elixar_hero_padding_bottom',
                        'elixar_hero_page',
                        'elixar_hero_large_text_color',
                        'elixar_hero_large_text_bg_color',
                        'elixar_hero_btn1_text',
                        'elixar_hero_btn1_link',
                        'elixar_hero_btn1_style',
                        'elixar_hero_btn_target',
                        'elixar_hero_btn2_text',
                        'elixar_hero_btn2_link',
                        'elixar_hero_btn2_style',
                        'elixar_hero_btn_2_target',
                    ),
                ),
            ),
        ))
    )
);
/* Service */
$wp_customize->add_setting(
    'service_tabs', array(
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    new Customizer_Tabs_Control(
        $wp_customize, 'service_tabs', apply_filters('elixar_service_control_tabs',array(
            /* Make sure you edit the following parameters*/
            'section' => 'elixar_services',
            'tabs'    => array(
                'service_settings' => array(
                    'nicename' => esc_html__( 'Settings', 'elixar' ),
                    'icon'     => 'cogs',
                    'controls' => array(
                        'elixar_services_enable',
                        'elixar_services_id',
                        'elixar_services_title',
                        'elixar_services_desc',
                        'elixar_service_layout',
                    ),
                ),
                'service_content'   => array(
                    'nicename' => esc_html__( 'Content', 'elixar' ),
                    'icon'     => 'edit',
                    'controls' => array(
                        'elixar_services',
						'elixar_service_icon_size'
                    ),
                )
            ),
        ))
    )
);

/* Blog */
$wp_customize->add_setting(
    'blog_tabs', array(
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    new Customizer_Tabs_Control(
        $wp_customize, 'blog_tabs', apply_filters('elixar_blog_control_tabs', array(
            /* Make sure you edit the following parameters*/
            'section' => 'elixar_blog',
            'tabs'    => array(
                'blog_settings' => array(
                    'nicename' => esc_html__( 'Settings', 'elixar' ),
                    'icon'     => 'cogs',
                    'controls' => array(
                        'elixar_blog_enable',
                        'elixar_blog_id',
                        'elixar_blog_title',
                        'elixar_blog_desc',
						'elixar_blog_settings_hr'
                    ),
                ),
				'blog_content'   => array(
                    'nicename' => esc_html__( 'Content', 'elixar' ),
                    'icon'     => 'edit',
                    'controls' => array(
                        'elixar_blog_number',
						'elixar_blog_cat',
                        'elixar_blog_orderby',
                        'elixar_blog_order',
						'elixar_blog_more_text',
                        'elixar_load_post_button_enable',
						'elixar_blog_load_more_text',
                        'elixar_blog_more_loading_text',
                        'elixar_blog_no_more_post_text',
                    ),
                ),
            ),
        ))
    )
);

/* CTA */
$wp_customize->add_setting(
    'cta_tabs', array(
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    new Customizer_Tabs_Control(
        $wp_customize, 'cta_tabs', apply_filters('elixar_cta_control_tabs', array(
            /* Make sure you edit the following parameters*/
            'section' => 'elixar_cta',
            'tabs'    => array(
                'cta_settings' => array(
                    'nicename' => esc_html__( 'Settings', 'elixar' ),
                    'icon'     => 'cogs',
                    'controls' => array(
                        'elixar_cta_enable',
                        'elixar_cta_id',
                    ),
                ),
				'cta_content'   => array(
                    'nicename' => esc_html__( 'Content', 'elixar' ),
                    'icon'     => 'edit',
                    'controls' => array(
                        'elixar_cta_page',
                        'elixar_cta_btn1_text',
						'elixar_cta_btn1_icon',
                        'elixar_cta_btn1_link',
                        'elixar_cta_btn1_style',
						'elixar_cta_btn1_target',
                    ),
                )
            ),
        ))
    )
);

/* Extra */
$wp_customize->add_setting(
    'extra_tabs', array(
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    new Customizer_Tabs_Control(
        $wp_customize, 'extra_tabs', apply_filters('elixar_extra_control_tabs', array(
            /* Make sure you edit the following parameters*/
            'section' => 'elixar_extra',
            'tabs'    => array(
                'extra_settings' => array(
                    'nicename' => esc_html__( 'Settings', 'elixar' ),
                    'icon'     => 'cogs',
                    'controls' => array(
                        'elixar_section_extra_enable',
                        'elixar_section_extra_id',
						'elixar_section_extra_title',
						'elixar_section_extra_desc',
                    ),
                ),
				'extra_content'   => array(
                    'nicename' => esc_html__( 'Content', 'elixar' ),
                    'icon'     => 'edit',
                    'controls' => array(
                        'elixar_section_extra_boxes',
						'elixar_section_extra_content_source'
                    ),
                ),
            ),
        ))
    )
);