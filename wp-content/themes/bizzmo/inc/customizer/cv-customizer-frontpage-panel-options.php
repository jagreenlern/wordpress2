<?php
/**
 * bizzmo manage the Customizer options of frontpage panel.
 *
 * @subpackage bizzmo
 * @since 1.0 
 */

// Toggle field for Enable/Disable banner content
Kirki::add_field(
	'bizzmo_config', array(
		'type'     => 'toggle',
		'settings' => 'bizzmo_enable_banner_section',
		'label'    => __( 'Enable Home Page Banner', 'bizzmo' ),
		'section'  => 'bizzmo_section_banner_content',
		'default'  => '1',
		'priority' => 5,
	)
);
Kirki::add_field(
	'bizzmo_config', array(
		'type'        => 'image',
		'settings'    => 'bizzmo_banner_image',
		'label'       => esc_attr__( 'Home Banner Image', 'bizzmo' ),
		'section'     => 'bizzmo_section_banner_content',
		'default'     => esc_url(  get_template_directory_uri() . '/assets/images/banner.jpg' ),
		'priority' 	  => 10,
		'active_callback' => array(
			array(
				'setting'  => 'bizzmo_enable_banner_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Text field for banner title
Kirki::add_field(
	'bizzmo_config', array(
		'type'     => 'text',
		'settings' => 'bizzmo_vidurl_title',
		'label'    => __( 'For Video in Hero Section Enter Video URL', 'bizzmo' ),
		'section'  => 'bizzmo_section_banner_content',
        'default'  => '',
		'priority' => 11,
		'active_callback' => array(
			array(
				'setting'  => 'bizzmo_enable_banner_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
); 
 
 
// Text field for banner title
Kirki::add_field(
	'bizzmo_config', array(
		'type'     => 'text',
		'settings' => 'bizzmo_banner_title',
		'label'    => __( 'Banner Title', 'bizzmo' ),
		'section'  => 'bizzmo_section_banner_content',
        'default'  => '',
		'priority' => 15,
		'active_callback' => array(
			array(
				'setting'  => 'bizzmo_enable_banner_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Textarea field for banner content
Kirki::add_field(
	'bizzmo_config', array(
		'type'     => 'textarea',
		'settings' => 'bizzmo_banner_content',
		'label'    => __( 'Banner Text', 'bizzmo' ),
		'section'  => 'bizzmo_section_banner_content',
        'default'  => '',
		'priority' => 20,
		'active_callback' => array(
			array(
				'setting'  => 'bizzmo_enable_banner_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Text field for banner content button label
Kirki::add_field(
	'bizzmo_config', array(
		'type'     => 'text',
		'settings' => 'bizzmo_banner_button_label1',
		'label'    => __( 'Banner Button Text', 'bizzmo' ),
		'section'  => 'bizzmo_section_banner_content',
		'default'  => '',
		'priority' => 25,
		'active_callback' => array(
			array(
				'setting'  => 'bizzmo_enable_banner_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Link field for banner content button link
Kirki::add_field(
	'bizzmo_config', array(
		'type'     => 'text',
		'settings' => 'bizzmo_banner_button_link1',
		'label'    => __( 'Banner Button URL', 'bizzmo' ),
		'section'  => 'bizzmo_section_banner_content',
		'default'  => '',
		'priority' => 30,
		'active_callback' => array(
			array(
				'setting'  => 'bizzmo_enable_banner_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

 

// Toggle field for Enable/Disable About Us Section
Kirki::add_field(
	'bizzmo_config', array(
		'type'     => 'toggle',
		'settings' => 'bizzmo_enable_about_us_section',
		'label'    => __( 'Enable Home About Area', 'bizzmo' ),
		'section'  => 'bizzmo_section_about_us',
		'default'  => '0',
		'priority' => 5,
	)
);

// Dropdown pages field for about us section


	Kirki::add_field(
	'bizzmo_config', array(
		'type'        => 'dropdown-pages',
		'settings'    => 'bizzmo_about_page',
		'label'       => __( 'Select Page', 'bizzmo' ),
		'section'     => 'bizzmo_section_about_us',
		'default'     => 0,
		'priority'    => 10,
		
	)
);

// Text field for callout content button label
Kirki::add_field(
	'bizzmo_config', array(
		'type'     => 'text',
		'settings' => 'bizzmo_about_button_label1',
		'label'    => __( 'Read More Button Text', 'bizzmo' ),
		'default'  => '',
		'section'  => 'bizzmo_section_about_us',
		'priority' => 25,
		'active_callback' => array(
			array(
				'setting'  => 'bizzmo_enable_about_us_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Link field for callout content button link
Kirki::add_field(
	'bizzmo_config', array(
		'type'     => 'text',
		'settings' => 'bizzmo_about_button_link1',
		'label'    => __( 'Read More Button URL', 'bizzmo' ),
		'default'  => '',
		'section'  => 'bizzmo_section_about_us',
		'priority' => 30,
		'active_callback' => array(
			array(
				'setting'  => 'bizzmo_enable_about_us_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Toggle field for Enable/Disable About Us Section
Kirki::add_field(
	'bizzmo_config', array(
		'type'     => 'toggle',
		'settings' => 'bizzmo_enable_service_section',
		'label'    => __( 'Enable Home Service Area', 'bizzmo' ),
		'section'  => 'bizzmo_section_services',
		'default'  => '0',
		'priority' => 5,
	)
);

// Text field for Service section title
Kirki::add_field(
	'bizzmo_config', array(
		'type'     => 'text',
		'settings' => 'bizzmo_service_title',
		'label'    => __( 'Service Title', 'bizzmo' ),
		'section'  => 'bizzmo_section_services',
		'default'  => '',	
		'priority' => 5,
		'active_callback' => array(
			array(
				'setting'  => 'bizzmo_enable_service_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Text field for Service section title
Kirki::add_field(
	'bizzmo_config', array(
		'type'     => 'text',
		'settings' => 'bizzmo_service_subtitle',
		'label'    => __( 'Service Sub Title', 'bizzmo' ),
		'section'  => 'bizzmo_section_services',
		'default'  => '',	
		'priority' => 5,
		'active_callback' => array(
			array(
				'setting'  => 'bizzmo_enable_service_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

for($i=1;$i<=8;$i++){
	Kirki::add_field(
	'bizzmo_config', array(
		'type'        => 'dropdown-pages',
		'settings'    => 'bizzmo_service_page'.$i,
		'label'       => 'Select Service Page'.$i,
		'section'     => 'bizzmo_section_services',
		'default'     => 0,
		'priority'    => 11,
		
	)
);
}

// Toggle field for Enable/Disable Portfolio Section
Kirki::add_field(
	'bizzmo_config', array(
		'type'     => 'toggle',
		'settings' => 'bizzmo_enable_portfolio_section',
		'label'    => __( 'Enable Home Portfolio Area', 'bizzmo' ),
		'section'  => 'bizzmo_section_portfolio',
		'default'  => '0',
		'priority' => 5,
	)
);

// Text field for Service section title
Kirki::add_field(
	'bizzmo_config', array(
		'type'     => 'text',
		'settings' => 'bizzmo_portfolio_title',
		'label'    => __( 'Portfolio Title', 'bizzmo' ),
		'section'  => 'bizzmo_section_portfolio',
		'default'  =>'',	
		'priority' => 5,
		'active_callback' => array(
			array(
				'setting'  => 'bizzmo_enable_portfolio_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Text field for Service section title
Kirki::add_field(
	'bizzmo_config', array(
		'type'     => 'text',
		'settings' => 'bizzmo_portfolio_subtitle',
		'label'    => __( 'Portfolio Sub Title', 'bizzmo' ),
		'section'  => 'bizzmo_section_portfolio',
		'default'  => '',	
		'priority' => 5,
		'active_callback' => array(
			array(
				'setting'  => 'bizzmo_enable_portfolio_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

for($k=1;$k<=8;$k++){
	Kirki::add_field(
	'bizzmo_config', array(
		'type'        => 'dropdown-pages',
		'settings'    => 'bizzmo_portfolio_page'.$k,
		'label'       =>  'Select Portfolio Page'.$k,
		'section'     => 'bizzmo_section_portfolio',
		'default'     => 0,
		'priority'    => 11,
		
	)
);
}

// Toggle field for Enable/Disable Testimonial Section
Kirki::add_field(
	'bizzmo_config', array(
		'type'     => 'toggle',
		'settings' => 'bizzmo_enable_team_section',
		'label'    => __( 'Enable Home Team Area', 'bizzmo' ),
		'section'  => 'bizzmo_section_team',
		'default'  => '0',
		'priority' => 5,
	)
);


// Text field for Team section title
Kirki::add_field(
	'bizzmo_config', array(
		'type'     => 'text',
		'settings' => 'bizzmo_team_title',
		'label'    => __( 'Team Title', 'bizzmo' ),
		'section'  => 'bizzmo_section_team',
		'default'  => '',	
		'priority' => 5,
		'active_callback' => array(
			array(
				'setting'  => 'bizzmo_enable_team_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Text field for Team section title
Kirki::add_field(
	'bizzmo_config', array(
		'type'     => 'text',
		'settings' => 'bizzmo_team_subtitle',
		'label'    => __( 'Team Sub Title', 'bizzmo' ),
		'section'  => 'bizzmo_section_team',
		'default'  => '',	
		'priority' => 6,
		'active_callback' => array(
			array(
				'setting'  => 'bizzmo_enable_team_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

for($k=1;$k<=6;$k++){
	Kirki::add_field(
	'bizzmo_config', array(
		'type'        => 'dropdown-pages',
		'settings'    => 'bizzmo_team_page'.$k,
		'label'       => 'Select Team Page'.$k,
		'section'     => 'bizzmo_section_team',
		'default'     => 0,
		'priority'    => 11,
		
	)
);
}

Kirki::add_field(
	'bizzmo_config', array(
		'type'     => 'toggle',
		'settings' => 'bizzmo_enable_blog_section',
		'label'    => __( 'Enable Home Blog Area', 'bizzmo' ),
		'section'  => 'bizzmo_section_blog',
		'default'  => '1',
		'priority' => 5,
	)
);


Kirki::add_field(
	'bizzmo_config', array(
		'type'     => 'toggle',
		'settings' => 'bizzmo_enable_blog_section',
		'label'    => __( 'Enable Home Blog Area', 'bizzmo' ),
		'section'  => 'bizzmo_section_blog',
		'default'  => '1',
		'priority' => 5,
	)
);

// Text field for blog section title
Kirki::add_field(
	'bizzmo_config', array(
		'type'     => 'text',
		'settings' => 'bizzmo_blog_title',
		'label'    => __( 'Top Title', 'bizzmo' ),
		'section'  => 'bizzmo_section_blog',
		'default'  => '',	
		'priority' => 10,
		'active_callback' => array(
			array(
				'setting'  => 'bizzmo_enable_blog_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Select field for blog section categories.
Kirki::add_field(
	'bizzmo_config', array(
		'type'        => 'select',
		'settings'    => 'bizzmo_blog_cat',
		'label'       => esc_attr__( 'Select Category', 'bizzmo' ),
		'section'     => 'bizzmo_section_blog',
		'default'     => 'Uncategorized',
		'priority'    => 15,
		'choices'     => bizzmo_select_categories_list(),
		'active_callback' => array(
			array(
				'setting'  => 'bizzmo_enable_blog_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);



// Toggle field for Enable/Disable callout content
Kirki::add_field(
	'bizzmo_config', array(
		'type'     => 'toggle',
		'settings' => 'bizzmo_enable_callout_section',
		'label'    => __( 'Enable Home Page Callout', 'bizzmo' ),
		'section'  => 'bizzmo_section_callout_content',
		'default'  => '1',
		'priority' => 5,
	)
);
// Text field for callout title
Kirki::add_field(
	'bizzmo_config', array(
		'type'     => 'text',
		'settings' => 'bizzmo_callout_title',
		'label'    => __( 'Callout Title', 'bizzmo' ),
		'section'  => 'bizzmo_section_callout_content',
        'default'  => '',
		'priority' => 15,
		'active_callback' => array(
			array(
				'setting'  => 'bizzmo_enable_callout_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Textarea field for callout content
Kirki::add_field(
	'bizzmo_config', array(
		'type'     => 'textarea',
		'settings' => 'bizzmo_callout_content',
		'label'    => __( 'Callout Text', 'bizzmo' ),
		'section'  => 'bizzmo_section_callout_content',
        'default'  => '',
		'priority' => 20,
		'active_callback' => array(
			array(
				'setting'  => 'bizzmo_enable_callout_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Text field for callout content button label
Kirki::add_field(
	'bizzmo_config', array(
		'type'     => 'text',
		'settings' => 'bizzmo_callout_button_label1',
		'label'    => __( 'Callout Button Text', 'bizzmo' ),
		'default'  => '',
		'section'  => 'bizzmo_section_callout_content',
		'priority' => 25,
		'active_callback' => array(
			array(
				'setting'  => 'bizzmo_enable_callout_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Link field for callout content button link
Kirki::add_field(
	'bizzmo_config', array(
		'type'     => 'text',
		'settings' => 'bizzmo_callout_button_link1',
		'label'    => __( 'callout Button URL', 'bizzmo' ),
		'default'  => '',
		'section'  => 'bizzmo_section_callout_content',
		'priority' => 30,
		'active_callback' => array(
			array(
				'setting'  => 'bizzmo_enable_callout_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);