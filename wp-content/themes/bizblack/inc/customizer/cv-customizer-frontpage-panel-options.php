<?php
/**
 * bizblack manage the Customizer options of frontpage panel.
 *
 * @subpackage bizblack
 * @since 1.0 
 */

// Toggle field for Enable/Disable banner content
Kirki::add_field(
	'bizblack_config', array(
		'type'     => 'toggle',
		'settings' => 'bizblack_enable_slider_section',
		'label'    => __( 'Enable Home Page Slider', 'bizblack' ),
		'section'  => 'bizblack_section_slider_content',
		'default'  => '0',
		'priority' => 5,
	)
);

for($k=1;$k<=3;$k++){
	Kirki::add_field(
	'bizblack_config', array(
		'type'        => 'dropdown-pages',
		'settings'    => 'bizblack_slider_page'.$k,
		'label'       => 'Select Slider Page'.$k,
		'section'     => 'bizblack_section_slider_content',
		'default'     => 0,
		'priority'    => 11,
		
	)
);
}

for($k=1;$k<=3;$k++){
	Kirki::add_field(
	'bizblack_config', array(
		'type'        => 'text',
		'settings'    => 'bizblack_slider_page_btn_txt_'.$k,
		'label'       => 'Button Text for Slide -'.$k,
		'section'     => 'bizblack_section_slider_content',
		'default'     => "",
		'priority'    => 11,
		
	)
);
}
for($k=1;$k<=3;$k++){
	Kirki::add_field(
	'bizblack_config', array(
		'type'        => 'text',
		'settings'    => 'bizblack_slider_page_btn_url_'.$k,
		'label'       => 'Button URL for Slide -'.$k,
		'section'     => 'bizblack_section_slider_content',
		'default'     => "",
		'priority'    => 11,
		
	)
);
}


// Text field for Feature section title

Kirki::add_field(
	'bizblack_config', array(
		'type'     => 'toggle',
		'settings' => 'bizblack_enable_feature_section',
		'label'    => __( 'Enable Home Feature (Please use same size Thumbnail on selected Page for better look)', 'bizblack' ),
		'section'  => 'bizblack_section_feature',
		'default'  => '0',
		'priority' => 5,
	)
);
 

for($k=1;$k<=3;$k++){
	Kirki::add_field(
	'bizblack_config', array(
		'type'        => 'dropdown-pages',
		'settings'    => 'bizblack_feature_page'.$k,
		'label'       => 'Select Feature Page'.$k,
		'section'     => 'bizblack_section_feature',
		'default'     => 0,
		'priority'    => 11,
		
	)
);
}


// Toggle field for Enable/Disable About Us Section
Kirki::add_field(
	'bizblack_config', array(
		'type'     => 'toggle',
		'settings' => 'bizblack_enable_about_us_section',
		'label'    => __( 'Enable Home About Area', 'bizblack' ),
		'section'  => 'bizblack_section_about_us',
		'default'  => '0',
		'priority' => 5,
	)
);

// Dropdown pages field for about us section


	Kirki::add_field(
	'bizblack_config', array(
		'type'        => 'dropdown-pages',
		'settings'    => 'bizblack_about_page',
		'label'       => __( 'Select Page', 'bizblack' ),
		'section'     => 'bizblack_section_about_us',
		'default'     => 0,
		'priority'    => 10,
		
	)
);

// Text field for callout content button label
Kirki::add_field(
	'bizblack_config', array(
		'type'     => 'text',
		'settings' => 'bizblack_about_button_label1',
		'label'    => __( 'Read More Button Text', 'bizblack' ),
		'default'  => '',
		'section'  => 'bizblack_section_about_us',
		'priority' => 25,
		'active_callback' => array(
			array(
				'setting'  => 'bizblack_enable_about_us_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Link field for callout content button link
Kirki::add_field(
	'bizblack_config', array(
		'type'     => 'text',
		'settings' => 'bizblack_about_button_link1',
		'label'    => __( 'Read More Button URL', 'bizblack' ),
		'default'  => '',
		'section'  => 'bizblack_section_about_us',
		'priority' => 30,
		'active_callback' => array(
			array(
				'setting'  => 'bizblack_enable_about_us_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Toggle field for Enable/Disable Service Section
Kirki::add_field(
	'bizblack_config', array(
		'type'     => 'toggle',
		'settings' => 'bizblack_enable_service_section',
		'label'    => __( 'Enable Home Service Area', 'bizblack' ),
		'section'  => 'bizblack_section_services',
		'default'  => '0',
		'priority' => 5,
	)
);

// Text field for Service section title
Kirki::add_field(
	'bizblack_config', array(
		'type'     => 'text',
		'settings' => 'bizblack_service_title',
		'label'    => __( 'Service Title', 'bizblack' ),
		'section'  => 'bizblack_section_services',
		'default'  => '',	
		'priority' => 5,
		'active_callback' => array(
			array(
				'setting'  => 'bizblack_enable_service_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Text field for Service section title
Kirki::add_field(
	'bizblack_config', array(
		'type'     => 'text',
		'settings' => 'bizblack_service_subtitle',
		'label'    => __( 'Service Sub Title', 'bizblack' ),
		'section'  => 'bizblack_section_services',
		'default'  => '',	
		'priority' => 5,
		'active_callback' => array(
			array(
				'setting'  => 'bizblack_enable_service_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

for($i=1;$i<=8;$i++){
	Kirki::add_field(
	'bizblack_config', array(
		'type'        => 'dropdown-pages',
		'settings'    => 'bizblack_service_page'.$i,
		'label'       => 'Select Service Page'.$i,
		'section'     => 'bizblack_section_services',
		'default'     => 0,
		'priority'    => 11,
		
	)
);
}

// Text field for Service section title
Kirki::add_field(
	'bizblack_config', array(
		'type'     => 'radio',
		'settings' => 'bizblack_service_column',
		'label'    => __( 'Column Layout', 'bizblack' ),
		'section'  => 'bizblack_section_services',
		'default'  => '4',	
		'priority' => 5,
		'choices'  => array(
		            '3' => esc_html__('4 Column Layout', 'bizblack'),
					'4' => esc_html__('3 Column Layout', 'bizblack'),
		        )
	)
);

// Toggle field for Enable/Disable Portfolio Section
Kirki::add_field(
	'bizblack_config', array(
		'type'     => 'toggle',
		'settings' => 'bizblack_enable_portfolio_section',
		'label'    => __( 'Enable Home Portfolio Area', 'bizblack' ),
		'section'  => 'bizblack_section_portfolio',
		'default'  => '0',
		'priority' => 5,
	)
);

// Text field for Service section title
Kirki::add_field(
	'bizblack_config', array(
		'type'     => 'text',
		'settings' => 'bizblack_portfolio_title',
		'label'    => __( 'Portfolio Title', 'bizblack' ),
		'section'  => 'bizblack_section_portfolio',
		'default'  =>'',	
		'priority' => 5,
		'active_callback' => array(
			array(
				'setting'  => 'bizblack_enable_portfolio_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Text field for Portfolio section title
Kirki::add_field(
	'bizblack_config', array(
		'type'     => 'text',
		'settings' => 'bizblack_portfolio_subtitle',
		'label'    => __( 'Portfolio Sub Title', 'bizblack' ),
		'section'  => 'bizblack_section_portfolio',
		'default'  => '',	
		'priority' => 5,
		'active_callback' => array(
			array(
				'setting'  => 'bizblack_enable_portfolio_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

for($k=1;$k<=8;$k++){
	Kirki::add_field(
	'bizblack_config', array(
		'type'        => 'dropdown-pages',
		'settings'    => 'bizblack_portfolio_page'.$k,
		'label'       =>  'Select Portfolio Page'.$k,
		'section'     => 'bizblack_section_portfolio',
		'default'     => 0,
		'priority'    => 11,
		
	)
);
}

// Toggle field for Enable/Disable Team Section
Kirki::add_field(
	'bizblack_config', array(
		'type'     => 'toggle',
		'settings' => 'bizblack_enable_team_section',
		'label'    => __( 'Enable Home Team Area', 'bizblack' ),
		'section'  => 'bizblack_section_team',
		'default'  => '0',
		'priority' => 5,
	)
);


// Text field for Team section title
Kirki::add_field(
	'bizblack_config', array(
		'type'     => 'text',
		'settings' => 'bizblack_team_title',
		'label'    => __( 'Team Title', 'bizblack' ),
		'section'  => 'bizblack_section_team',
		'default'  => '',	
		'priority' => 5,
		'active_callback' => array(
			array(
				'setting'  => 'bizblack_enable_team_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Text field for Team section title
Kirki::add_field(
	'bizblack_config', array(
		'type'     => 'text',
		'settings' => 'bizblack_team_subtitle',
		'label'    => __( 'Team Sub Title', 'bizblack' ),
		'section'  => 'bizblack_section_team',
		'default'  => '',	
		'priority' => 6,
		'active_callback' => array(
			array(
				'setting'  => 'bizblack_enable_team_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

for($k=1;$k<=6;$k++){
	Kirki::add_field(
	'bizblack_config', array(
		'type'        => 'dropdown-pages',
		'settings'    => 'bizblack_team_page'.$k,
		'label'       => 'Select Team Page'.$k,
		'section'     => 'bizblack_section_team',
		'default'     => 0,
		'priority'    => 11,
		
	)
);
}

Kirki::add_field(
	'bizblack_config', array(
		'type'     => 'toggle',
		'settings' => 'bizblack_enable_blog_section',
		'label'    => __( 'Enable Home Blog Area', 'bizblack' ),
		'section'  => 'bizblack_section_blog',
		'default'  => '1',
		'priority' => 5,
	)
);


Kirki::add_field(
	'bizblack_config', array(
		'type'     => 'toggle',
		'settings' => 'bizblack_enable_blog_section',
		'label'    => __( 'Enable Home Blog Area', 'bizblack' ),
		'section'  => 'bizblack_section_blog',
		'default'  => '0',
		'priority' => 5,
	)
);

// Text field for blog section title
Kirki::add_field(
	'bizblack_config', array(
		'type'     => 'text',
		'settings' => 'bizblack_blog_title',
		'label'    => __( 'Top Title', 'bizblack' ),
		'section'  => 'bizblack_section_blog',
		'default'  => '',	
		'priority' => 10,
		'active_callback' => array(
			array(
				'setting'  => 'bizblack_enable_blog_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Select field for blog section categories.
Kirki::add_field(
	'bizblack_config', array(
		'type'        => 'select',
		'settings'    => 'bizblack_blog_cat',
		'label'       => esc_attr__( 'Select Category', 'bizblack' ),
		'section'     => 'bizblack_section_blog',
		'default'     => 'Uncategorized',
		'priority'    => 15,
		'choices'     => bizblack_select_categories_list(),
		'active_callback' => array(
			array(
				'setting'  => 'bizblack_enable_blog_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);



// Toggle field for Enable/Disable callout content
Kirki::add_field(
	'bizblack_config', array(
		'type'     => 'toggle',
		'settings' => 'bizblack_enable_callout_section',
		'label'    => __( 'Enable Home Page Callout', 'bizblack' ),
		'section'  => 'bizblack_section_callout_content',
		'default'  => '0',
		'priority' => 5,
	)
);
// Text field for callout title
Kirki::add_field(
	'bizblack_config', array(
		'type'     => 'text',
		'settings' => 'bizblack_callout_title',
		'label'    => __( 'Callout Title', 'bizblack' ),
		'section'  => 'bizblack_section_callout_content',
        'default'  => '',
		'priority' => 15,
		'active_callback' => array(
			array(
				'setting'  => 'bizblack_enable_callout_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Textarea field for callout content
Kirki::add_field(
	'bizblack_config', array(
		'type'     => 'textarea',
		'settings' => 'bizblack_callout_content',
		'label'    => __( 'Callout Text', 'bizblack' ),
		'section'  => 'bizblack_section_callout_content',
        'default'  => '',
		'priority' => 20,
		'active_callback' => array(
			array(
				'setting'  => 'bizblack_enable_callout_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Text field for callout content button label
Kirki::add_field(
	'bizblack_config', array(
		'type'     => 'text',
		'settings' => 'bizblack_callout_button_label1',
		'label'    => __( 'Callout Button Text', 'bizblack' ),
		'default'  => '',
		'section'  => 'bizblack_section_callout_content',
		'priority' => 25,
		'active_callback' => array(
			array(
				'setting'  => 'bizblack_enable_callout_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Link field for callout content button link
Kirki::add_field(
	'bizblack_config', array(
		'type'     => 'text',
		'settings' => 'bizblack_callout_button_link1',
		'label'    => __( 'callout Button URL', 'bizblack' ),
		'default'  => '',
		'section'  => 'bizblack_section_callout_content',
		'priority' => 30,
		'active_callback' => array(
			array(
				'setting'  => 'bizblack_enable_callout_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);