<?php
function agencyup_general_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';

	/* General Section */
	$wp_customize->add_panel( 'general_options', array(
		'priority' => 3,
		'capability' => 'edit_theme_options',
		'title' => __('General Settings', 'agencyup'),
	) );

	//Logo and Background color settings
    $wp_customize->add_section(
        'colors',
        array(
            'priority'      => 1,
            'title'         => __('Colors','agencyup'),
            'panel'         => 'general_options',
        )
    );

    $wp_customize->add_section(
        'header_image',
        array(
            'priority'      => 2,
            'title'         => __('Breadcrumb','agencyup'),
            'panel'         => 'general_options',
        )
    );

    $wp_customize->add_setting( 
        'breadcrumb_display' , 
            array(
            'default' => '1',
            'sanitize_callback' => 'agencyup_general_sanitize_checkbox',
            'capability' => 'edit_theme_options',
            'priority' => 1,
        ) 
    );
    
    $wp_customize->add_control(
    'breadcrumb_display', 
        array(
            'label'       => esc_html__( 'Hide / Show', 'agencyup' ),
            'section'     => 'header_image',
            'type'        => 'checkbox'
        ) 
    );

    $wp_customize->add_setting( 
        'breadcrumb_img_type_display' , 
            array(
            'default' => 'scroll',
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'agencyup_sanitize_select',
            'priority'  => 10,
        ) 
    );
    
    $wp_customize->add_control(
    'breadcrumb_img_type_display' , 
        array(
            'label'          => __( 'Background Attachment', 'agencyup' ),
            'section'        => 'header_image',
            'type'           => 'select',
            'choices'        => 
            array(
                'inherit' => __( 'Inherit', 'agencyup' ),
                'scroll' => __( 'Scroll', 'agencyup' ),
                'fixed'   => __( 'Fixed', 'agencyup' )
            ) 
        ) 
    );

    }
add_action( 'customize_register', 'agencyup_general_setting' );



function agencyup_general_sanitize_checkbox( $input ) {
            // Boolean check 
    return ( ( isset( $input ) && true == $input ) ? true : false );
    
    }
add_action( 'customize_register', 'agencyup_general_sanitize_checkbox' );


function agencyup_sanitize_select( $input, $setting ) {
    
    // Ensure input is a slug.
    $input = sanitize_key( $input );
    
    // Get list of choices from the control associated with the setting.
    $choices = $setting->manager->get_control( $setting->id )->choices;
    
    // If the input is a valid key, return it; otherwise, return the default.
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}