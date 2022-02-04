<?php
/**
 * Team options.
 *
 * @package Meilleur Business
 */

$default = meilleur_business_get_default_theme_options();

// Featured team Section
$wp_customize->add_section( 'section_home_team',
	array(
		'title'      => __( 'Our Team Members', 'meilleur-business' ),
		'priority'   => 100,
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);
// Disable Team Section
$wp_customize->add_setting('theme_options[disable_team_section]', 
	array(
	'default' 			=> $default['disable_team_section'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'meilleur_business_sanitize_checkbox'
	)
);

$wp_customize->add_control('theme_options[disable_team_section]', 
	array(		
	'label' 	=> __('Disable Team Section', 'meilleur-business'),
	'section' 	=> 'section_home_team',
	'settings'  => 'theme_options[disable_team_section]',
	'type' 		=> 'checkbox',	
	)
);

//Team Section title
$wp_customize->add_setting('theme_options[team_title]', 
	array(
	'default'           => $default['team_title'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[team_title]', 
	array(
	'label'       => __('Section Title', 'meilleur-business'),
	'section'     => 'section_home_team',   
	'settings'    => 'theme_options[team_title]',
	'active_callback' => 'meilleur_business_teams_active',		
	'type'        => 'text'
	)
);

// Team Section subtitle
$wp_customize->add_setting('theme_options[team_subtitle]', 
	array(
	'default'           => $default['team_subtitle'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[team_subtitle]', 
	array(
	'label'       => __('Section Sub Title', 'meilleur-business'),
	'section'     => 'section_home_team',   
	'settings'    => 'theme_options[team_subtitle]',		
	'type'        => 'text',
	'active_callback' => 'meilleur_business_teams_active',
	)
);

// Number of counter
$wp_customize->add_setting('theme_options[number_of_ts_column]', 
	array(
	'default' 			=> $default['number_of_ts_column'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'meilleur_business_sanitize_number_range'
	)
);

$wp_customize->add_control('theme_options[number_of_ts_column]', 
	array(
	'label'       => __('Column Per Row', 'meilleur-business'),
	'description' => __('Save & Refresh the customizer to see its effect. Maximum is 3', 'meilleur-business'),
	'section'     => 'section_home_team',   
	'settings'    => 'theme_options[number_of_ts_column]',		
	'type'        => 'number',
	'active_callback' => 'meilleur_business_teams_active',
	'input_attrs' => array(
			'min'	=> 1,
			'max'	=> 3,
			'step'	=> 1,
		),
	)
);
// Number of items
$wp_customize->add_setting('theme_options[number_of_ts_items]', 
	array(
	'default' 			=> $default['number_of_ts_items'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'meilleur_business_sanitize_number_range'
	)
);

$wp_customize->add_control('theme_options[number_of_ts_items]', 
	array(
	'label'       => __('Number Of Teams', 'meilleur-business'),
	'description' => __('Save & Refresh the customizer to see its effect. Maximum is 3.', 'meilleur-business'),
	'section'     => 'section_home_team',   
	'settings'    => 'theme_options[number_of_ts_items]',		
	'type'        => 'number',
	'active_callback' => 'meilleur_business_teams_active',
	'input_attrs' => array(
			'min'	=> 1,
			'max'	=> 3,
			'step'	=> 1,
		),
	)
);

$wp_customize->add_setting('theme_options[ts_content_type]', 
	array(
	'default' 			=> $default['ts_content_type'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'meilleur_business_sanitize_select'
	)
);

$wp_customize->add_control('theme_options[ts_content_type]', 
	array(
	'label'       => __('Content Type', 'meilleur-business'),
	'section'     => 'section_home_team',   
	'settings'    => 'theme_options[ts_content_type]',		
	'type'        => 'select',
	'active_callback' => 'meilleur_business_teams_active',
	'choices'	  => array(
			'ts_page'	  => __('Page','meilleur-business'),
		),
	)
);

$number_of_ts_items = meilleur_business_get_option( 'number_of_ts_items' );

for( $i=1; $i<=$number_of_ts_items; $i++ ){

	// Additional Information First Page
	$wp_customize->add_setting('theme_options[teams_page_'.$i.']', 
		array(
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',	
		'sanitize_callback' => 'meilleur_business_dropdown_pages'
		)
	);

	$wp_customize->add_control('theme_options[teams_page_'.$i.']', 
		array(
		'label'       => sprintf( __('Select Page #%1$s', 'meilleur-business'), $i),
		'section'     => 'section_home_team',   
		'settings'    => 'theme_options[teams_page_'.$i.']',		
		'type'        => 'dropdown-pages',
		'active_callback' => 'meilleur_business_teams_page',
		)
	);
}