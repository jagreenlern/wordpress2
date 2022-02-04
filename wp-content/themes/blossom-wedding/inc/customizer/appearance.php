<?php
/**
 * Appearance Settings
 *
 * @package Blossom_Wedding
 */

function blossom_wedding_customize_register_appearance( $wp_customize ) {
    
    $wp_customize->add_panel( 
        'appearance_settings', 
        array(
            'title'       => __( 'Appearance Settings', 'blossom-wedding' ),
            'priority'    => 25,
            'capability'  => 'edit_theme_options',
            'description' => __( 'Change color and body background.', 'blossom-wedding' ),
        ) 
    );
    
    /** Primary Color*/
    $wp_customize->add_setting( 
        'primary_color', 
        array(
            'default'           => '#e39696',
            'sanitize_callback' => 'sanitize_hex_color',
        ) 
    );

    $wp_customize->add_control( 
        new WP_Customize_Color_Control( 
            $wp_customize, 
            'primary_color', 
            array(
                'label'       => __( 'Primary Color', 'blossom-wedding' ),
                'description' => __( 'Primary color of the theme.', 'blossom-wedding' ),
                'section'     => 'colors',
                'priority'    => 5,
            )
        )
    );

    /** Typography */
    $wp_customize->add_section(
        'typography_settings',
        array(
            'title'    => __( 'Typography', 'blossom-wedding' ),
            'priority' => 20,
            'panel'    => 'appearance_settings',
        )
    ); 

    /** Primary Font */
    $wp_customize->add_setting(
        'primary_font',
        array(
            'default'           => 'Nunito',
            'sanitize_callback' => 'blossom_wedding_sanitize_select'
        )
    );

    $wp_customize->add_control(
        new Blossom_Wedding_Select_Control(
            $wp_customize,
            'primary_font',
            array(
                'label'       => __( 'Primary Font', 'blossom-wedding' ),
                'description' => __( 'Primary font of the site.', 'blossom-wedding' ),
                'section'     => 'typography_settings',
                'choices'     => blossom_wedding_get_all_fonts(),   
            )
        )
    );
    
    /** Secondary Font */
    $wp_customize->add_setting(
        'secondary_font',
        array(
            'default'           => 'Great Vibes',
            'sanitize_callback' => 'blossom_wedding_sanitize_select'
        )
    );

    $wp_customize->add_control(
        new Blossom_Wedding_Select_Control(
            $wp_customize,
            'secondary_font',
            array(
                'label'       => __( 'Secondary Font', 'blossom-wedding' ),
                'description' => __( 'Secondary font of the site.', 'blossom-wedding' ),
                'section'     => 'typography_settings',
                'choices'     => blossom_wedding_get_all_fonts(),   
            )
        )
    );

    /** Move Background Image section to appearance panel */
    $wp_customize->get_section( 'colors' )->panel                          = 'appearance_settings';
    $wp_customize->get_section( 'colors' )->priority                       = 10;
    $wp_customize->get_section( 'background_image' )->panel                = 'appearance_settings';
    $wp_customize->get_section( 'background_image' )->priority             = 15;
}
add_action( 'customize_register', 'blossom_wedding_customize_register_appearance' );