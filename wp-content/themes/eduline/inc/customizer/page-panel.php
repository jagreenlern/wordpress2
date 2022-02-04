<?php
/**
 * Eduline Pages Settings panel at Theme Customizer
 *
 * @package Eduline
 * @since 1.0.0
 */

add_action( 'customize_register', 'eduline_page_settings_register' );

function eduline_page_settings_register( $wp_customize ) {

	/**
     * Add Page Settings Panel
     *
     * @since 1.0.0
     */
  $wp_customize->add_panel(
   'eduline_page_settings_panel',
   array(
     'priority'       => 40,
     'capability'     => 'edit_theme_options',
     'theme_supports' => '',
     'title'          => __( 'Page Template Settings', 'eduline' ),
   )
 );

  /*----------------------------------------------------------------------------------------------------------------------------------------*/
	/**
     * Contact Page section
     *
     * @since 1.0.0
     */
  $wp_customize->add_section(
    'eduline_contact_page_section',
    array(
     'priority'       => 5,
     'panel'          => 'eduline_page_settings_panel',
     'capability'     => 'edit_theme_options',
     'theme_supports' => '',
     'title'          => __( 'Contact Page', 'eduline' ),
     'description'    => __( 'Managed the content display at contact page.', 'eduline' ),
   )
  );

  // Select Page For Contact Page Title and description
  $wp_customize->add_setting( 'eduline_contact_page_title', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'eduline_sanitize_dropdown_pages'
  ) );

  $wp_customize->add_control('eduline_contact_page_title',
    array(
      'label'                 =>  __( 'Select Page for Contact Page  title and description', 'eduline' ),
      'section' => 'eduline_contact_page_section',
      'type'=> 'dropdown-pages',
      'settings' => 'eduline_contact_page_title'
    )
  );

  /**Contact Page Quotes Heading */
  $wp_customize->add_setting( 'eduline_contact_page_quotes_text', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
  ) );

  $wp_customize->add_control( 'eduline_contact_page_quotes_text', array(
    'label'                 =>  __( 'Type Contact Page Quotes', 'eduline' ),
    'description'           =>__('Eg:-"Build your Bright Future at Edugrade, Get in Touch, minim veniam,We would love to help you! ','eduline'),
    'section'               => 'eduline_contact_page_section',
    'type'                  => 'text',
    'settings'              => 'eduline_contact_page_quotes_text',
  ) );

  /**Contact Page Get In Touch Heading */
  $wp_customize->add_setting( 'eduline_contact_page_git_text', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
  ) );

  $wp_customize->add_control( 'eduline_contact_page_git_text', array(
    'label'                 =>  __( 'Type Contact Page Quotes', 'eduline' ),
    'description'           =>__('Eg:- Get In Touch','eduline'),
    'section'               => 'eduline_contact_page_section',
    'type'                  => 'text',
    'settings'              => 'eduline_contact_page_git_text',
  ) );

  /**Contact Page Main Address */
  $wp_customize->add_setting( 'eduline_contact_main_address', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
  ) );

  $wp_customize->add_control( 'eduline_contact_main_address', array(
    'label'                 =>  __( 'Type Main Address', 'eduline' ),
    'description'           =>__('Eg:-  Street # 75, Borne Block, 5th Avenue, West Road, NY.','eduline'),
    'section'               => 'eduline_contact_page_section',
    'type'                  => 'text',
    'settings'              => 'eduline_contact_main_address',
  ) );

  /**Contact Page Phone Number */
  $wp_customize->add_setting( 'eduline_contact_phone_number', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
  ) );

  $wp_customize->add_control( 'eduline_contact_phone_number', array(
    'label'                 =>  __( 'Type Phone Number', 'eduline' ),
    'description'           =>__('Eg:-  (800) 457 392','eduline'),
    'section'               => 'eduline_contact_page_section',
    'type'                  => 'text',
    'settings'              => 'eduline_contact_phone_number',
  ) );

  /**Contact Page Email Address */
  $wp_customize->add_setting( 'eduline_contact_email_address', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
  ) );

  $wp_customize->add_control( 'eduline_contact_email_address', array(
    'label'                 =>  __( 'Type Email Address', 'eduline' ),
    'description'           =>__('Eg:-  info.demo@email.com','eduline'),
    'section'               => 'eduline_contact_page_section',
    'type'                  => 'text',
    'settings'              => 'eduline_contact_email_address',
  ) );

  

    // Contact form
  $wp_customize->add_setting( 'eduline_contact_form_option', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
  ) );

  $wp_customize->add_control( 'eduline_contact_form_option', array(
    'label'                 =>  __( 'Contact Form Section Use Shortcode', 'eduline' ),
    'description'           =>  __( 'eg [contact-form-7 id="108" title="Contact form 1"]', 'eduline' ),
    'section'               => 'eduline_contact_page_section',
    'type'                  => 'text',
    'settings' => 'eduline_contact_form_option',
  ) );
}