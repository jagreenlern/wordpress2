<?php
/**
 * Testimonial Slider options.
 *
 * @package Meilleur Business
 */

$default = meilleur_business_get_default_theme_options();

// Testimonial Slider Section
$wp_customize->add_section( 'section_testimonial_slider',
	array(
		'title'      => __( 'Clients Feedback', 'meilleur-business' ),
		'priority'   => 100,
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);

// Disable Slider Section
$wp_customize->add_setting('theme_options[disable_testimonial_slider]', 
	array(
	'default' 			=> $default['disable_testimonial_slider'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'meilleur_business_sanitize_checkbox'
	)
);

$wp_customize->add_control('theme_options[disable_testimonial_slider]', 
	array(		
	'label' 	=> __('Disable Slider Section', 'meilleur-business'),
	'section' 	=> 'section_testimonial_slider',
	'settings'  => 'theme_options[disable_testimonial_slider]',
	'type' 		=> 'checkbox',	
	)
);

// Testimonial Background Image
$wp_customize->add_setting('theme_options[background_testimonial_section]', 
	array(
	'type'              => 'theme_mod',
	'default' 			=> $default['background_testimonial_section'],
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'meilleur_business_sanitize_image'
	)
);

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,
	'theme_options[background_testimonial_section]', 
	array(
	'label'       => __('Background Image', 'meilleur-business'),
	'section'     => 'section_testimonial_slider',   
	'settings'    => 'theme_options[background_testimonial_section]',	
	'active_callback' => 'meilleur_business_testimonial_active',			
	'type'        => 'image',
	)
	)
);

//Testimonial Section title
$wp_customize->add_setting('theme_options[testimonial_title]', 
	array(
	'default'           => $default['testimonial_title'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[testimonial_title]', 
	array(
	'label'       => __('Section Title', 'meilleur-business'),
	'section'     => 'section_testimonial_slider',   
	'settings'    => 'theme_options[testimonial_title]',
	'active_callback' => 'meilleur_business_testimonial_active',		
	'type'        => 'text'
	)
);

// Testimonial Section subtitle
$wp_customize->add_setting('theme_options[testimonial_subtitle]', 
	array(
	'default'           => $default['testimonial_subtitle'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[testimonial_subtitle]', 
	array(
	'label'       => __('Section Sub Title', 'meilleur-business'),
	'section'     => 'section_testimonial_slider',   
	'settings'    => 'theme_options[testimonial_subtitle]',		
	'type'        => 'text',
	'active_callback' => 'meilleur_business_testimonial_active',
	)
);

// Testimonial Overlay
$wp_customize->add_setting('theme_options[testimonial_overlay]', 
	array(
	'default' 			=> $default['testimonial_overlay'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[testimonial_overlay]', 
	array(
	'label'       => __('Dark Overlay Opacity', 'meilleur-business'),
	'description' => __('Select Value between 0 to 1.', 'meilleur-business'),
	'section'     => 'section_testimonial_slider',   
	'settings'    => 'theme_options[testimonial_overlay]',		
	'type'        => 'number',
	'active_callback' => 'meilleur_business_testimonial_active',
	'input_attrs' => array(
			'min'	=> 0,
			'max'	=> 1,
			'step'	=> 0.1,
			'style' => 'width: 55px;',
		),
	)
);

// Number of items
$wp_customize->add_setting('theme_options[number_of_testi_items]', 
	array(
	'default' 			=> $default['number_of_testi_items'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'meilleur_business_sanitize_number_range'
	)
);

$wp_customize->add_control('theme_options[number_of_testi_items]', 
	array(
	'label'       => __('Number Of Testimonial', 'meilleur-business'),
	'description' => __('Save & Refresh the customizer to see its effect. Maximum is 3.', 'meilleur-business'),
	'section'     => 'section_testimonial_slider',   
	'settings'    => 'theme_options[number_of_testi_items]',		
	'type'        => 'number',
	'active_callback'	=> 'meilleur_business_testimonial_active',
	'input_attrs' => array(
			'min'	=> 1,
			'max'	=> 3,
			'step'	=> 1,
		),
	)
);

$wp_customize->add_setting('theme_options[tl_content_type]', 
	array(
	'default' 			=> $default['tl_content_type'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'meilleur_business_sanitize_select'
	)
);

$wp_customize->add_control('theme_options[tl_content_type]', 
	array(
	'label'       => __('Testimonial Type', 'meilleur-business'),
	'section'     => 'section_testimonial_slider',   
	'settings'    => 'theme_options[tl_content_type]',		
	'type'        => 'select',
	'active_callback'	=> 'meilleur_business_testimonial_active',
	'choices'	  => array(
			'tl_page'	  => __('Page','meilleur-business'),
		),
	)
);

$number_of_testi_items = meilleur_business_get_option( 'number_of_testi_items' );

for( $i=1; $i<=$number_of_testi_items; $i++ ){

	// Testimonial Slider First Page
	$wp_customize->add_setting('theme_options[testimonial_slider_'.$i.']', 
		array(
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',	
		'sanitize_callback' => 'meilleur_business_dropdown_pages'
		)
	);

	$wp_customize->add_control('theme_options[testimonial_slider_'.$i.']', 
		array(
		'label'       => sprintf( __('Testimonial Page #%1$s', 'meilleur-business'), $i ),
		'section'     => 'section_testimonial_slider',   
		'settings'    => 'theme_options[testimonial_slider_'.$i.']',		
		'type'        => 'dropdown-pages',
		'active_callback'	=> 'meilleur_business_testimonial_page'
		)
	);
}