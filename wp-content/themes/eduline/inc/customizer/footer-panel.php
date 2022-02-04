<?php
/**
 * Eduline Footer Settings panel at Theme Customizer
 *
 * @package Eduline
 * @since 1.0.0
 */

add_action( 'customize_register', 'eduline_footer_settings_register' );

function eduline_footer_settings_register( $wp_customize ) {


	/**
     * Add Footer Settings Panel
     *
     * @since 1.0.0
     */
  $wp_customize->add_panel(
   'eduline_footer_settings_panel',
   array(
     'priority'       => 30,
     'capability'     => 'edit_theme_options',
     'theme_supports' => '',
     'title'          => __( 'Footer Settings', 'eduline' ),
   )
 );


  /*----------------------------------------------------------------------------------------------------------------------------------------*/
  /**
     * Footer Social section
     *
     * @since 1.0.0
     */
  $wp_customize->add_section(
    'footer_social_media_section',
    array(
      'priority'       => 2,
      'panel'          => 'eduline_footer_settings_panel',
      'capability'     => 'edit_theme_options',
      'theme_supports' => '',
      'title'          => __( 'Footer Social Media Section', 'eduline' ),
      'description'    => __( 'Managed the content display at Footer Social media section.', 'eduline' ),
    )
  );

  /**Foter Social medi  Enable/Disable  */
  $wp_customize->add_setting(
    'eduline_footer_social_media_enable',
    array(
      'default'           => 0,
      'sanitize_callback' => 'eduline_sanitize_checkbox',
    )
  );

  $wp_customize->add_control(
    'eduline_footer_social_media_enable',
    array(
      'section'     => 'footer_social_media_section',
      'label'       => __( 'Social Links', 'eduline' ),
      'description' => __( 'Enable/Disable social links in Footer.', 'eduline' ),
      'type'        => 'checkbox'
    )       
  );

  $wp_customize->add_setting('eduline_footer_facebook_url',array(
        'capability'     => 'edit_theme_options',
    'sanitize_callback' => 'esc_url_raw',
    'default' =>  ''
  )
);

$wp_customize->add_control(new WP_Customize_Control($wp_customize,'eduline_footer_facebook_url',array(
    'label' => __('Facebook URL','eduline'),
    'type' => 'url',
    'section' => 'footer_social_media_section',
    'settings' => 'eduline_footer_facebook_url',
  )
));

  $wp_customize->add_setting('eduline_footer_twitter_url',array(
        'capability'     => 'edit_theme_options',
    'sanitize_callback' => 'esc_url_raw',
    'default' =>  ''
  )
);

$wp_customize->add_control(new WP_Customize_Control($wp_customize,'eduline_footer_twitter_url',array(
    'label' => __('Twitter URL','eduline'),
    'type' => 'url',
    'section' => 'footer_social_media_section',
    'settings' => 'eduline_footer_twitter_url',
  )
));

  $wp_customize->add_setting('eduline_footer_linkedin_url',array(
        'capability'     => 'edit_theme_options',
    'sanitize_callback' => 'esc_url_raw',
    'default' =>  ''
  )
);

$wp_customize->add_control(new WP_Customize_Control($wp_customize,'eduline_footer_linkedin_url',array(
    'label' => __('Linkedin URL','eduline'),
    'type' => 'url',
    'section' => 'footer_social_media_section',
    'settings' => 'eduline_footer_linkedin_url',
  )
));

$wp_customize->add_setting('eduline_footer_pinterest_url',array(
        'capability'     => 'edit_theme_options',
    'sanitize_callback' => 'esc_url_raw',
    'default' =>  ''
  )
);

$wp_customize->add_control(new WP_Customize_Control($wp_customize,'eduline_footer_pinterest_url',array(
    'label' => __('Pinterest URL','eduline'),
    'type' => 'url',
    'section' => 'footer_social_media_section',
    'settings' => 'eduline_footer_pinterest_url',
  )
));
 $wp_customize->add_setting('eduline_footer_youtube_url',array(
        'capability'     => 'edit_theme_options',  
    'sanitize_callback' => 'esc_url_raw',
    'default' =>  ''
  )
);

$wp_customize->add_control(new WP_Customize_Control($wp_customize,'eduline_footer_youtube_url',array(
    'label' => __('Youtube URL','eduline'),
    'type' => 'url',
    'section' => 'footer_social_media_section',
    'settings' => 'eduline_footer_youtube_url',
  )
));

}