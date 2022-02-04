<?php
/**
 * Eduline Header Settings panel at Theme Customizer
 *
 * @package Eduline
 * @since 1.0.0
 */

add_action( 'customize_register', 'eduline_header_settings_register' );

function eduline_header_settings_register( $wp_customize ) {
  $wp_customize->get_section( 'header_image' )->priority = '20';
  $wp_customize->get_section( 'header_image' )->title    = __( 'Header Image', 'eduline' );
  $wp_customize->get_section( 'header_image' )->panel    = 'eduline_header_settings_panel';

	/**
     * Add Header Settings Panel
     *
     * @since 1.0.0
     */
    $wp_customize->add_panel(
     'eduline_header_settings_panel',
     array(
         'priority'       => 10,
         'capability'     => 'edit_theme_options',
         'theme_supports' => '',
         'title'          => __( 'Header Settings', 'eduline' ),
     )
 );

    /*----------------------------------------------------------------------------------------------------------------------------------------*/
	/**
     * Top Header section
     *
     * @since 1.0.0
     */
    $wp_customize->add_section(
        'eduline_top_header_section',
        array(
        	'priority'       => 5,
        	'panel'          => 'eduline_header_settings_panel',
        	'capability'     => 'edit_theme_options',
        	'theme_supports' => '',
            'title'          => __( 'Top Header Section', 'eduline' ),
            'description'    => __( 'Managed the content display at top header section.', 'eduline' ),
        )
    );

    /*----------------------------------------------------------------------------------------------------------------------------------------*/
    /**
     *Enable/Disable Top Header section
     *
     * @since 1.0.0
     */
    $wp_customize->add_setting(
        'eduline_top_header_enable',
        array(
            'default'           => 0,
            'sanitize_callback' => 'eduline_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_control(
        'eduline_top_header_enable',
        array(
            'section'     => 'eduline_top_header_section',
            'label'       => __( 'Enable/Disable top header', 'eduline' ),
            'type'        => 'checkbox'
        )       
    );

    /*----------------------------------------------------------------------------------------------------------------------------------------*/
    /**
     *Login Page Link in Top Header section
     *
     * @since 1.0.0
     */
    $wp_customize->add_setting(
        'eduline_login_page',
        array(
            'default'           => 0,
            'sanitize_callback' => 'eduline_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_control(
        'eduline_top_header_enable',
        array(
            'section'     => 'eduline_top_header_section',
            'label'       => __( 'Enable/Disable top header', 'eduline' ),
            'type'        => 'checkbox'
        )       
    );

   /** Top Header Contact info */
   
   for ($i=1;$i<=3;$i++) {
    
    $wp_customize->add_setting( 'eduline_top_header_contact_info_icon_'.$i, array(
      'capability'            => 'edit_theme_options',
      'default'               => '',
      'sanitize_callback'     => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'eduline_top_header_contact_info_icon_'.$i, array(
      /* translators: %s: Description */ 
        'label'                 =>  sprintf( __( 'Top header Contact Icon %s', 'eduline' ), $i ),
         /* translators: %s: Description */ 
        'description'           => sprintf( __( 'Use font awesome icon: Eg: %1$s. %2$s See more here %3$s', 'eduline' ), 'fa fa-map','<a href="'.esc_url('https://fontawesome.com/v4.7.0/icons/').'" target="_blank">','</a>'),
        'section'               => 'eduline_top_header_section',
        'type'                  => 'text',
        'settings' => 'eduline_top_header_contact_info_icon_'.$i,
    ) );


    $wp_customize->add_setting( 'eduline_top_header_contact_info_'.$i, array(
      'capability'            => 'edit_theme_options',
      'default'               => '',
      'sanitize_callback'     => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'eduline_top_header_contact_info_'.$i, array(
        'label'                 =>  sprintf( __( 'Top header Contact Location Title %s', 'eduline' ), $i ),
        'section'               => 'eduline_top_header_section',
        'type'                  => 'text',
        'settings' => 'eduline_top_header_contact_info_'.$i,
    ) );

  }
}