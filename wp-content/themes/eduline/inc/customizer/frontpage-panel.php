<?php

/**
 * Eduline Frontpage Settings panel at Theme Customizer
 *
 * @package Eduline
 * @since 1.0.0
 */
add_action( 'customize_register', 'eduline_frontpage_settings_register' );

function eduline_frontpage_settings_register( $wp_customize ) {
/**
 * Add Frontpage Settings Panel
 *
 * @since 1.0.0
 */
$wp_customize->add_panel(
  'eduline_frontpage_settings_panel',
  array(
    'priority'       => 15,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __( 'Frontpage Settings', 'eduline' ),
  )
);

/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Front page Banner section
 *
 * @since 1.0.0
 */

$wp_customize->add_section(
  'eduline_frontpage_banner_section',
  array(
   'priority'       => 1,
   'panel'          => 'eduline_frontpage_settings_panel',
   'capability'     => 'edit_theme_options',
   'theme_supports' => '',
   'title'          => __( 'Banner Section', 'eduline' ),
   'description'    => __( 'Managed the Banner display at Frontpage section.', 'eduline' ),
 )
);

/**
 * Enable/Disable for Banner
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
  'eduline_banner_enable',
  array(
    'default'           => 0,
    'sanitize_callback' => 'eduline_sanitize_checkbox',
  )
);

$wp_customize->add_control(
  'eduline_banner_enable',
  array(
    'section'     => 'eduline_frontpage_banner_section',
    'label'       => __( 'Enable/Disable for  Banner', 'eduline' ),
    'type'        => 'checkbox'
  )       
);

/*
* Frontpage banner section
*/
$wp_customize->add_setting(
  'eduline_banner_tag_text',
  array(
    'default'           => __( 'Accelerate your future', 'eduline' ),
    'sanitize_callback' => 'sanitize_text_field',
    'transport'         => 'postMessage'
  )
);

$wp_customize->add_control(
  'eduline_banner_tag_text',
  array(
    'label'    => __( 'Popular Courses Text', 'eduline' ),
    'section'  => 'eduline_frontpage_banner_section',
    'type'     => 'text',
  )
);

$wp_customize->selective_refresh->add_partial( 'eduline_banner_tag_text', array(
  'selector' => '.hero-area  .slider-text .short',
  'render_callback' => 'eduline_banner_tag_text'
) );
// Select Page For Banner title with featured image.
$wp_customize->add_setting( 'eduline_banner_title', array(
  'capability'            => 'edit_theme_options',
  'default'               => '',
  'sanitize_callback'     => 'eduline_sanitize_dropdown_pages'
) );

$wp_customize->add_control('eduline_banner_title',
  array(
    'label'                 =>  __( 'Select Page for Banner title with featured image', 'eduline' ),
    'section' => 'eduline_frontpage_banner_section',
    'type'=> 'dropdown-pages',
    'settings' => 'eduline_banner_title'
  )
);

$wp_customize->add_setting( 'eduline_banner_sub_title', array(
  'capability'            => 'edit_theme_options',
  'default'               => '',
  'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'eduline_banner_sub_title', array(
  'label'                 =>  __( 'Sub Title For Banner', 'eduline' ),
  'description'           =>  __( 'Collection', 'eduline' ),
  'section'               => 'eduline_frontpage_banner_section',
  'type'                  => 'text',
  'settings' => 'eduline_banner_sub_title',
) );

$wp_customize->add_setting( 'eduline_banner_button_title', array(
  'capability'            => 'edit_theme_options',
  'default'               => '',
  'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'eduline_banner_button_title', array(
  'label'                 =>  __( 'Button Title For Banner', 'eduline' ),
  'description'           =>  __( 'Read More', 'eduline' ),
  'section'               => 'eduline_frontpage_banner_section',
  'type'                  => 'text',
  'settings' => 'eduline_banner_button_title',
) );

$wp_customize->add_setting( 'eduline_banner_button_url', array(
  'capability'            => 'edit_theme_options',
  'default'               => '',
  'sanitize_callback'     => 'esc_url_raw'
) );

$wp_customize->add_control( 'eduline_banner_button_url', array(
  'label'                 =>  __( 'URL For button Title of banner', 'eduline' ),
  'description'           =>  __( '#', 'eduline' ),
  'section'               => 'eduline_frontpage_banner_section',
  'type'                  => 'url',
  'settings' => 'eduline_banner_button_url',
) );



/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Frontpage Counter section
 *
 * @since 1.0.0
 */
$wp_customize->add_section(
  'eduline_counter_section',
  array(
    'priority'       => 2,
    'panel'          => 'eduline_frontpage_settings_panel',
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __( 'Counter Section', 'eduline' ),
    'description'    => __( 'Managed the content display at Counter section.', 'eduline' ),
  )
);

/**
* Enable/Disable for Counter
*
* @since 1.0.0
*/
$wp_customize->add_setting(
  'eduline_counter_enable',
  array(
    'default'           => 0,
    'sanitize_callback' => 'eduline_sanitize_checkbox',
  )
);

$wp_customize->add_control(
  'eduline_counter_enable',
  array(
    'section'     => 'eduline_counter_section',
    'label'       => __( 'Enable/Disable for Counter', 'eduline' ),
    'type'        => 'checkbox'
  )       
);


for ($i=1;$i<=4;$i++) {
    
    $wp_customize->add_setting( 'eduline_counter_icon_'.$i, array(
      'capability'            => 'edit_theme_options',
      'default'               => '',
      'sanitize_callback'     => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'eduline_counter_icon_'.$i, array(
      /* translators: %s: number */ 
        'label'                 =>  sprintf( __( 'Counter Icon %s', 'eduline' ), $i ),
         /* translators: %s: Description */ 
        'description'           => sprintf( __( 'Use font awesome icon: Eg: %1$s. %2$s See more here %3$s', 'eduline' ), 'fa fa-map','<a href="'.esc_url('https://fontawesome.com/v4.7.0/icons/').'" target="_blank">','</a>'),
        'section'               => 'eduline_counter_section',
        'type'                  => 'text',
        'settings' => 'eduline_counter_icon_'.$i,
    ) );

    $wp_customize->add_setting( 'eduline_counter_number_'.$i, array(
      'capability'            => 'edit_theme_options',
      'default'               => '',
      'sanitize_callback'     => 'absint'
    ));

    $wp_customize->add_control( 'eduline_counter_number_'.$i, array(
      /* translators: %s: Number */ 
      'label'                 =>  sprintf( __( 'Counter Number %s', 'eduline' ), $i ),
      'section'               => 'eduline_counter_section',
      'type'                  => 'number',
      'settings' => 'eduline_counter_number_'.$i,
    ) );

    $wp_customize->add_setting( 'eduline_counter_title_'.$i, array(
      'capability'            => 'edit_theme_options',
      'default'               => '',
      'sanitize_callback'     => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'eduline_counter_title_'.$i, array(
        /* translators: %s: Number */ 
        'label'                 =>  sprintf( __( 'Counter Title %s', 'eduline' ), $i ),
        'section'               => 'eduline_counter_section',
        'type'                  => 'text',
        'settings' => 'eduline_counter_title_'.$i,
    ) );

  }


/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Frontpage Service section
 *
 * @since 1.0.0
 */

$wp_customize->add_section(
  'eduline_frontpage_service_section',
  array(
    'priority'       => 3,
    'panel'          => 'eduline_frontpage_settings_panel',
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __( 'Service Section', 'eduline' ),
    'description'    => __( 'Managed the Service display at Frontpage section.', 'eduline' ),
  )
);

//Service Enable/Disable
$wp_customize->add_setting( 'eduline_service_enable', array(
  'capability'            => 'edit_theme_options',
  'default'               => 0,
  'sanitize_callback'     => 'eduline_sanitize_checkbox'
) );

$wp_customize->add_control( 'eduline_service_enable', array(
  'label'                 =>  __( 'Enable/Disable Service section', 'eduline' ),
  'section'               => 'eduline_frontpage_service_section',
  'type'                  => 'checkbox',
  'settings'              => 'eduline_service_enable',
) );


//Service title and description with featured Image
$wp_customize->add_setting( 'eduline_service_page_title', array(
  'capability'            => 'edit_theme_options',
  'default'               => '',
  'sanitize_callback'     => 'eduline_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'eduline_service_page_title', array( 
  'label'                 =>  __( 'Select Page for  Service Page title & description with Featured Image', 'eduline' ),
  'section'               => 'eduline_frontpage_service_section',
  'type'                  => 'dropdown-pages',
  'settings'              => 'eduline_service_page_title',
) );



for ($i=1;$i<=4;$i++) {
    
    $wp_customize->add_setting( 'eduline_service_title_'.$i, array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'eduline_sanitize_dropdown_pages'
    ) );

    $wp_customize->add_control( 'eduline_service_title_'.$i, array(
        /* translators: %s: Label */ 
        'label'                 =>  sprintf( __( 'Select Page for service  %s Title and Description', 'eduline' ), $i ),
        'section'               => 'eduline_frontpage_service_section',
        'type'                  => 'dropdown-pages',
        'settings'              => 'eduline_service_title_'.$i,
    ) );

    $wp_customize->add_setting( 'eduline_service_icon_'.$i, array(
      'capability'            => 'edit_theme_options',
      'default'               => '',
      'sanitize_callback'     => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'eduline_service_icon_'.$i, array(
      /* translators: %s: number */ 
        'label'                 =>  sprintf( __( 'Icon For Service %s', 'eduline' ), $i ),
         /* translators: %s: Description */ 
        'description'           => sprintf( __( 'Use font awesome icon: Eg: %1$s. %2$s See more here %3$s', 'eduline' ), 'fa fa-map','<a href="'.esc_url('https://fontawesome.com/v4.7.0/icons/').'" target="_blank">','</a>'),
        'section'               => 'eduline_frontpage_service_section',
        'type'                  => 'text',
        'settings' => 'eduline_service_icon_'.$i,
    ) );
    
}



/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Front page Course section
 *
 * @since 1.0.0
 */

$wp_customize->add_section(
  'eduline_frontpage_course_section',
  array(
    'priority'       => 4,
    'panel'          => 'eduline_frontpage_settings_panel',
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __( 'Course Section', 'eduline' ),
    'description'    => __( 'Managed the Course display at Frontpage section.', 'eduline' ),
  )
);

/**
 * Enable/Disable for Courses
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
  'eduline_course_enable',
  array(
    'default'           => 0,
    'sanitize_callback' => 'eduline_sanitize_checkbox',
  )
);

$wp_customize->add_control(
  'eduline_course_enable',
  array(
    'section'     => 'eduline_frontpage_course_section',
    'label'       => __( 'Enable/Disable for  Courses', 'eduline' ),
    'type'        => 'checkbox'
  )       
);


$wp_customize->add_setting( 'eduline_course_title', array(
  'capability'            => 'edit_theme_options',
  'default'               => '',
  'sanitize_callback'     => 'eduline_sanitize_dropdown_pages'
) );

$wp_customize->add_control('eduline_course_title',
  array(
    'label'                 =>  __( 'Select Page for Course title and description', 'eduline' ),
    'section' => 'eduline_frontpage_course_section',
    'type'=> 'dropdown-pages',
    'settings' => 'eduline_course_title'
  )
);

// Popular Courses
for ($i=1;$i<=6;$i++) {
// Select Page For course title with featured image.
  $wp_customize->add_setting( 'eduline_course_title_'.$i, array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'eduline_sanitize_dropdown_pages'
  ) );

  $wp_customize->add_control('eduline_course_title_'.$i,
    array(
      /* translators: %s: Banner Number. */
      'label'                 =>  sprintf( __( 'Select Page for Course %s title with featured image', 'eduline' ), $i ),
      'section' => 'eduline_frontpage_course_section',
      'type'=> 'dropdown-pages',
      'settings' => 'eduline_course_title_'.$i
    )
  );
}

/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Front page  Registration section
 *
 * @since 1.0.0
 */

$wp_customize->add_section(
  'eduline_frontpage_registration_section',
  array(
    'priority'       => 5,
    'panel'          => 'eduline_frontpage_settings_panel',
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __( 'Registration Section', 'eduline' ),
    'description'    => __( 'Managed the  Registration display at Frontpage section.', 'eduline' ),
  )
);

/**
 * Enable/Disable for  Registration
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
  'eduline_registration_enable',
  array(
    'default'           => 0,
    'sanitize_callback' => 'eduline_sanitize_checkbox',
  )
);

$wp_customize->add_control(
  'eduline_registration_enable',
  array(
    'section'     => 'eduline_frontpage_registration_section',
    'label'       => __( 'Enable/Disable for Registration', 'eduline' ),
    'type'        => 'checkbox'
  )       
);

$wp_customize->add_setting( 'eduline_registration_title', array(
  'capability'            => 'edit_theme_options',
  'default'               => '',
  'sanitize_callback'     => 'eduline_sanitize_dropdown_pages'
) );

$wp_customize->add_control('eduline_registration_title',
  array(
    'label'                 =>  __( 'Select Page for Registration Title and Description', 'eduline' ),
    'section' => 'eduline_frontpage_registration_section',
    'type'=> 'dropdown-pages',
    'settings' => 'eduline_registration_title'
  )
);

// Newsletter Form Shortcode Descriptions
$wp_customize->add_setting('eduline_newsletter_shortcode',array(
  'default'       =>      '',
  'sanitize_callback'     =>  'sanitize_text_field'
));
$wp_customize->add_control('eduline_newsletter_shortcode',array(
  'section'       =>      'eduline_frontpage_registration_section',
  'label'                 =>  __( 'News Letter Section Use Shortcode', 'eduline' ),
  /* translators: %s: Description */
  'description'           => sprintf( __( 'Use Newsletter Plugins shortcode: Eg: %1$s. %2$s See more here %3$s', 'eduline' ), '[newsletter_form]','<a href="'.esc_url('https://wordpress.org/plugins/newsletter/').'" target="_blank">','</a>' ),
  'type'          =>      'text',
  'settings'    =>    'eduline_newsletter_shortcode'
));
/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Front page  Team section
 *
 * @since 1.0.0
 */

$wp_customize->add_section(
  'eduline_frontpage_team_section',
  array(
    'priority'       => 6,
    'panel'          => 'eduline_frontpage_settings_panel',
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __( 'Team Section', 'eduline' ),
    'description'    => __( 'Managed the  Team display at Frontpage section.', 'eduline' ),
  )
);

/**
 * Enable/Disable for Team
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
  'eduline_team_enable',
  array(
    'default'           => 0,
    'sanitize_callback' => 'eduline_sanitize_checkbox',
  )
);

$wp_customize->add_control(
  'eduline_team_enable',
  array(
    'section'     => 'eduline_frontpage_team_section',
    'label'       => __( 'Enable/Disable for Team', 'eduline' ),
    'type'        => 'checkbox'
  )       
);

//Team Title
$wp_customize->add_setting( 'eduline_team_page_title', array(
  'capability'            => 'edit_theme_options',
  'default'               => '',
  'sanitize_callback'     => 'eduline_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'eduline_team_page_title', array(
  'label'                 =>  __( 'Select Page for Team Title & Description', 'eduline' ),
  'section'               => 'eduline_frontpage_team_section',
  'type'                  => 'dropdown-pages',
  'settings'              => 'eduline_team_page_title',
) );

// Team Us pages

for ($i=1;$i<5;$i++) {

  $wp_customize->add_setting( 'eduline_team_page_'.$i, array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'eduline_sanitize_dropdown_pages'
  ) );

  $wp_customize->add_control( 'eduline_team_page_'.$i, array(
   /* translators: %s: Description */ 
   'label'                 => sprintf( __( 'Select Team Page %s with Featured Image', 'eduline' ), $i ),
   'section'               => 'eduline_frontpage_team_section',
   'type'                  => 'dropdown-pages',
   'settings'              => 'eduline_team_page_'.$i,
 ) );

  $wp_customize->add_setting( 'eduline_team_position_'.$i, array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
  ) );

  $wp_customize->add_control( 'eduline_team_position_'.$i, array(
    /* translators: %s: label */ 
    'label'                 =>  sprintf( __( 'Enter Age - Designation', 'eduline' ), $i ),
    'description'           =>  __( '28 years old - Marketing Teacher', 'eduline' ),
    'section'               => 'eduline_frontpage_team_section',
    'type'                  => 'text',
    'settings' => 'eduline_team_position_'.$i,
  ) );
}
/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Front page Testimonials section
 *
 * @since 1.0.0
 */

$wp_customize->add_section(
  'eduline_frontpage_testimonials_section',
  array(
    'priority'       => 7,
    'panel'          => 'eduline_frontpage_settings_panel',
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __( 'Testimonials Section', 'eduline' ),
    'description'    => __( 'Managed the  Testimonials display at Frontpage section.', 'eduline' ),
  )
);

/**
 * Enable/Disable for Testimonials
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
  'eduline_testimonials_enable',
  array(
    'default'           => 0,
    'sanitize_callback' => 'eduline_sanitize_checkbox',
  )
);

$wp_customize->add_control(
  'eduline_testimonials_enable',
  array(
    'section'     => 'eduline_frontpage_testimonials_section',
    'label'       => __( 'Enable/Disable for Testimonials', 'eduline' ),
    'type'        => 'checkbox'
  )       
);


$wp_customize->add_setting( 'eduline_testimonials_title', array(
  'capability'            => 'edit_theme_options',
  'default'               => '',
  'sanitize_callback'     => 'eduline_sanitize_dropdown_pages'
) );

$wp_customize->add_control('eduline_testimonials_title',
  array(
    'label'                 =>  __( 'Select Page for Testimonials Title, Featured Image and vedio link in description', 'eduline' ),
    'section' => 'eduline_frontpage_testimonials_section',
    'type'=> 'dropdown-pages',
    'settings' => 'eduline_testimonials_title'
  )
);

// Testimonial Us page 1 and Icon 1

for ($i=1;$i<5;$i++) {
//print_r('eduline_testimonial_page_'.$i);
  $wp_customize->add_setting( 'eduline_testimonial_page_'.$i, array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'eduline_sanitize_dropdown_pages'
  ) );


  $wp_customize->add_control( 'eduline_testimonial_page_'.$i, array(
    /* translators: %s: Label */ 
    'label'                 => sprintf( __( 'Select Testimonial Page %s', 'eduline' ), $i ),
    'section'               => 'eduline_frontpage_testimonials_section',
    'type'                  => 'dropdown-pages',
    'settings'              => 'eduline_testimonial_page_'.$i,
  ) );

  $wp_customize->add_setting( 'eduline_testimonial_position_'.$i, array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
  ) );


  $wp_customize->add_control( 'eduline_testimonial_position_'.$i, array(
   /* translators: %s: Description */ 
   'label'                 =>  sprintf( __( 'Select Designation or Company Name %s', 'eduline' ), $i ),
   'description'           =>  __( 'Position like Developer, CEO MD', 'eduline' ),
   'section'               => 'eduline_frontpage_testimonials_section',
   'type'                  => 'text',
   'settings' => 'eduline_testimonial_position_'.$i,
 ) );

}
/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Front page Upcoming Events section
 *
 * @since 1.0.0
 */

$wp_customize->add_section(
  'eduline_frontpage_events_section',
  array(
    'priority'       => 8,
    'panel'          => 'eduline_frontpage_settings_panel',
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __( 'Events Section', 'eduline' ),
    'description'    => __( 'Managed the  Events display at Frontpage section.', 'eduline' ),
  )
);

/**
 * Enable/Disable for  Events
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
  'eduline_events_enable',
  array(
    'default'           => 0,
    'sanitize_callback' => 'eduline_sanitize_checkbox',
  )
);

$wp_customize->add_control(
  'eduline_events_enable',
  array(
    'section'     => 'eduline_frontpage_events_section',
    'label'       => __( 'Enable/Disable for Events', 'eduline' ),
    'type'        => 'checkbox'
  )       
);


$wp_customize->add_setting( 'eduline_events_title', array(
  'capability'            => 'edit_theme_options',
  'default'               => '',
  'sanitize_callback'     => 'eduline_sanitize_dropdown_pages'
) );

$wp_customize->add_control('eduline_events_title',
  array(
    'label'                 =>  __( 'Select Page for Events title & Description', 'eduline' ),
    'section' => 'eduline_frontpage_events_section',
    'type'=> 'dropdown-pages',
    'settings' => 'eduline_events_title'
  )
);

//Category select for Events
for ($i=1;$i<5;$i++) {
  $wp_customize->add_setting( 'eduline_event_page_'.$i, array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'eduline_sanitize_dropdown_pages'
  ) );


  $wp_customize->add_control( 'eduline_event_page_'.$i, array(
    /* translators: %s: Label */ 
    'label'                 => sprintf( __( 'Select Event Page %s for title and description with Featured Image', 'eduline' ), $i ),
    'section'               => 'eduline_frontpage_events_section',
    'type'                  => 'dropdown-pages',
    'settings'              => 'eduline_event_page_'.$i,
  ) );

  $wp_customize->add_setting( 'eduline_event_date_'.$i, array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
  ) );


  $wp_customize->add_control( 'eduline_event_date_'.$i, array(
   /* translators: %s: Description */ 
   'label'                 =>  sprintf( __( 'Enter event start date to End Date %s', 'eduline' ), $i ),
   'description'           =>  __( '18:00 - friday june 1, 2018 to 10:00 - monday june 4, 2018', 'eduline' ),
   'section'               => 'eduline_frontpage_events_section',
   'type'                  => 'text',
   'settings' => 'eduline_event_date_'.$i,
 ) );

  $wp_customize->add_setting( 'eduline_event_address_'.$i, array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
  ) );


  $wp_customize->add_control( 'eduline_event_address_'.$i, array(
   /* translators: %s: Description */ 
   'label'                 =>  sprintf( __( 'Enter event Address %s', 'eduline' ), $i ),
   'description'           =>  __( '754 5th ave new york, ny 10019', 'eduline' ),
   'section'               => 'eduline_frontpage_events_section',
   'type'                  => 'text',
   'settings' => 'eduline_event_address_'.$i,
 ) );

}


/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Front page Become A Teacher section
 *
 * @since 1.0.0
 */

$wp_customize->add_section(
  'eduline_frontpage_become_section',
  array(
    'priority'       => 9,
    'panel'          => 'eduline_frontpage_settings_panel',
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __( 'Become Section', 'eduline' ),
    'description'    => __( 'Managed the  Become A Teacher display at Frontpage section.', 'eduline' ),
  )
);

/**
 * Enable/Disable for Become
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
  'eduline_become_enable',
  array(
    'default'           => 0,
    'sanitize_callback' => 'eduline_sanitize_checkbox',
  )
);

$wp_customize->add_control(
  'eduline_become_enable',
  array(
    'section'     => 'eduline_frontpage_become_section',
    'label'       => __( 'Enable/Disable for Become A Teacher', 'eduline' ),
    'type'        => 'checkbox'
  )       
);

$wp_customize->add_setting( 'eduline_become_title', array(
  'capability'            => 'edit_theme_options',
  'default'               => '',
  'sanitize_callback'     => 'eduline_sanitize_dropdown_pages'
) );

$wp_customize->add_control('eduline_become_title',
  array(
    'label'                 =>  __( 'Select Page for Become A Teacher title & Description', 'eduline' ),
    'section' => 'eduline_frontpage_become_section',
    'type'=> 'dropdown-pages',
    'settings' => 'eduline_become_title'
  )
);

$wp_customize->add_setting( 'eduline_become_button_title', array(
  'capability'            => 'edit_theme_options',
  'default'               => '',
  'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'eduline_become_button_title', array(
  'label'                 =>  __( 'Button Title For Become A Teacher', 'eduline' ),
  'description'           =>  __( 'Get Started', 'eduline' ),
  'section'               => 'eduline_frontpage_become_section',
  'type'                  => 'text',
  'settings' => 'eduline_become_button_title',
) );

$wp_customize->add_setting( 'eduline_become_button_url', array(
  'capability'            => 'edit_theme_options',
  'default'               => '',
  'sanitize_callback'     => 'esc_url_raw'
) );

$wp_customize->add_control( 'eduline_become_button_url', array(
  'label'                 =>  __( 'Type URL For button Title of Become A Teacher', 'eduline' ),
  'description'           =>  __( '#', 'eduline' ),
  'section'               => 'eduline_frontpage_become_section',
  'type'                  => 'url',
  'settings' => 'eduline_become_button_url',
) );


/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Front page blog section
 *
 * @since 1.0.0
 */

$wp_customize->add_section(
  'eduline_frontpage_blog_section',
  array(
    'priority'       => 10,
    'panel'          => 'eduline_frontpage_settings_panel',
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __( 'Blog Section', 'eduline' ),
    'description'    => __( 'Managed the  Blog display at Frontpage section.', 'eduline' ),
  )
);

/**
 * Enable/Disable for Blog Section
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
  'eduline_blog_enable',
  array(
    'default'           => 1,
    'sanitize_callback' => 'eduline_sanitize_checkbox',
  )
);

$wp_customize->add_control(
  'eduline_blog_enable',
  array(
    'section'     => 'eduline_frontpage_blog_section',
    'label'       => __( 'Enable/Disable for Blog', 'eduline' ),
    'type'        => 'checkbox'
  )       
);


$wp_customize->add_setting( 'eduline_blog_title', array(
  'capability'            => 'edit_theme_options',
  'default'               => '',
  'sanitize_callback'     => 'eduline_sanitize_dropdown_pages'
) );

$wp_customize->add_control('eduline_blog_title',
  array(
    'label'                 =>  __( 'Select Page for Blog title & Description', 'eduline' ),
    'section' => 'eduline_frontpage_blog_section',
    'type'=> 'dropdown-pages',
    'settings' => 'eduline_blog_title'
  )
);

//Category select for blogs
$wp_customize->add_setting('eduline_blog_category_id',array(
  'capability'        => 'edit_theme_options',
  'sanitize_callback' => 'eduline_sanitize_category',
  'default' =>  '1',
)
);

$wp_customize->add_control(new Eduline_Customize_Dropdown_Taxonomies_Control($wp_customize,'eduline_blog_category_id',
  array(
   'label' => __('Select Category for Blog','eduline'),
   'section' => 'eduline_frontpage_blog_section',
   'settings' => 'eduline_blog_category_id',
   'type'=> 'dropdown-taxonomies',
 )
));

$wp_customize->add_setting( 'eduline_blog_number', array(
  'capability'            => 'edit_theme_options',
  'default'               => '3',
  'sanitize_callback'     => 'absint'
));

$wp_customize->add_control( 'eduline_blog_number', array(
  'label'                 =>  __( 'Number of Recent Blogs to Show in Front Page', 'eduline' ),
  'description'           =>  __( 'input 3,4,5,6,7,8,9,10', 'eduline' ),
  'section'               => 'eduline_frontpage_blog_section',
  'type'                  => 'number',
  'settings' => 'eduline_blog_number',
) );

/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Front page Call to Action section
 *
 * @since 1.0.0
 */

$wp_customize->add_section(
  'eduline_frontpage_cta_section',
  array(
    'priority'       => 11,
    'panel'          => 'eduline_frontpage_settings_panel',
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __( 'Call to Action Section', 'eduline' ),
    'description'    => __( 'Managed the  Call to Action display at Frontpage section.', 'eduline' ),
  )
);

/**
 * Enable/Disable for Become
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
  'eduline_cta_enable',
  array(
    'default'           => 0,
    'sanitize_callback' => 'eduline_sanitize_checkbox',
  )
);

$wp_customize->add_control(
  'eduline_cta_enable',
  array(
    'section'     => 'eduline_frontpage_cta_section',
    'label'       => __( 'Enable/Disable for Call to Action', 'eduline' ),
    'type'        => 'checkbox'
  )       
);

$wp_customize->add_setting( 'eduline_cta_title', array(
  'capability'            => 'edit_theme_options',
  'default'               => '',
  'sanitize_callback'     => 'eduline_sanitize_dropdown_pages'
) );

$wp_customize->add_control('eduline_cta_title',
  array(
    'label'                 =>  __( 'Select Page for Call to Action title & Description', 'eduline' ),
    'section' => 'eduline_frontpage_cta_section',
    'type'=> 'dropdown-pages',
    'settings' => 'eduline_cta_title'
  )
);

$wp_customize->add_setting( 'eduline_cta_button_title', array(
  'capability'            => 'edit_theme_options',
  'default'               => '',
  'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'eduline_cta_button_title', array(
  'label'                 =>  __( 'Button Title For Call to Action', 'eduline' ),
  'description'           =>  __( 'Get Started', 'eduline' ),
  'section'               => 'eduline_frontpage_cta_section',
  'type'                  => 'text',
  'settings' => 'eduline_cta_button_title',
) );

$wp_customize->add_setting( 'eduline_cta_button_url', array(
  'capability'            => 'edit_theme_options',
  'default'               => '',
  'sanitize_callback'     => 'esc_url_raw'
) );

$wp_customize->add_control( 'eduline_cta_button_url', array(
  'label'                 =>  __( 'Type URL For button Title of Call to Action', 'eduline' ),
  'description'           =>  __( '#', 'eduline' ),
  'section'               => 'eduline_frontpage_cta_section',
  'type'                  => 'url',
  'settings' => 'eduline_cta_button_url',
) );
}