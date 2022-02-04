<?php
	/**
	 * Welcome Page Initiation
	*/

	get_template_part('/inc/welcome/welcome');

	/** Plugins **/
	$en_plugins = array(
		// *** Companion Plugins
		'companion_plugins' => array(

		),

		//Displays on Required Plugins tab
		'req_plugins' => array(

			// Free Plugins
			'free_plug' => array(

				'accesspress-social-icons' => array(
					'slug' => 'accesspress-social-icons',
					'filename' => 'accesspress-social-icons.php',
					'class' => 'APS_Class'
				),

				'accesspress-social-share' => array(
					'slug' => 'accesspress-social-share',
					'filename' => 'accesspress-social-share.php',
					'class' => 'APSS_Class'
				),

				'accesspress-instagram-feed' => array(
					'slug' => 'accesspress-instagram-feed',
					'filename' => 'accesspress-instagram-feed.php',
					'class' => 'APSS_Class'
				),

				'ap-custom-testimonial' => array(
					'slug' => 'ap-custom-testimonial',
					'filename' => 'ap-custom-testimonial.php',
					'class' => 'APCT_free'
				),

				'accesspress-twitter-feed' => array(
					'slug' => 'accesspress-twitter-feed',
					'filename' => 'accesspress-twitter-feed.php',
					'class' => 'APTF_Class'
				),
			),
			'pro_plug' => array(

			),
		),

		// *** Displays on Import Demo section
		'required_plugins' => array(
			'access-demo-importer' => array(
					'slug' 		=> 'access-demo-importer',
					'name' 		=> esc_html__('Access Demo Importer', 'enlighten'),
					'filename' 	=>'access-demo-importer.php',
					'host_type' => 'wordpress', // Use either bundled, remote, wordpress
					'class' 	=> 'Access_Demo_Importer',
					'info' 		=> esc_html__('Access Demo Importer adds the feature to Import the Demo Conent with a single click.', 'enlighten'),
			),
		

		),

		// *** Recommended Plugins
		'recommended_plugins' => array(
			// Free Plugins
			'free_plugins' => array(
			),

			// Pro Plugins
			'pro_plugins' => array(

			)
		),
	);

	$strings = array(
		// Welcome Page General Texts
		'welcome_menu_text' => esc_html__( 'Enlighten Info', 'enlighten' ),
		'theme_short_description' => esc_html__( 'Enlighten is a responsive FREE education WordPress theme ideal for creating college, school, university and other academic/ educational websites. It is a fully Customizer based user-friendly theme which allows you to customize most of the theme settings instantly with live real time live previews. It is a clean and elegant modern WordPress theme with plenty of flexibility and features - you can use for various types of business websites as well. Enlighten is fully mobile-responsive so that your website content is sure to look great on any device. It features homepage sliders, Multiple menu options, carousel portfolio and service section, video section, client section etc. It is a fully widgetized theme with multiple widget areas. Create a beautiful education website and enlighten the world. For Demo https://demo.accesspressthemes.com/enlighten', 'enlighten' ),

		// Plugin Action Texts
		'install_n_activate' 	=> esc_html__('Install and Activate', 'enlighten'),
		'deactivate' 			=> esc_html__('Deactivate', 'enlighten'),
		'activate' 				=> esc_html__('Activate', 'enlighten'),

		// Getting Started Section
		'doc_heading' 		=> esc_html__('Step 1 - Documentation', 'enlighten'),
		'doc_description' 	=> esc_html__('Read the Documentation and follow the instructions to manage the site , it helps you to set up the theme more easily and quickly. The Documentation is very easy with its pictorial  and well managed listed instructions. ', 'enlighten'),
		'doc_link'			=> 'https://doc.accesspressthemes.com/enlighten-documentation/',
		'doc_read_now' 		=> esc_html__( 'Read Now', 'enlighten' ),
		'cus_heading' 		=> esc_html__('Step 2 - Customizer Panel', 'enlighten'),
		'cus_read_now' 		=> esc_html__( 'Go to Customizer Panels', 'enlighten' ),

		// Recommended Plugins Section
		'pro_plugin_title' 			=> esc_html__( 'Premium Plugins', 'enlighten' ),
		'free_plugin_title' 		=> esc_html__( 'Free Plugins', 'enlighten' ),


		// Demo Actions
		'activate_btn' 		=> esc_html__('Activate', 'enlighten'),
		'installed_btn' 	=> esc_html__('Activated', 'enlighten'),
		'demo_installing' 	=> esc_html__('Installing Demo', 'enlighten'),
		'demo_installed' 	=> esc_html__('Demo Installed', 'enlighten'),
		'demo_confirm' 		=> esc_html__('Are you sure to import demo content ?', 'enlighten'),

		// Actions Required
		'req_plugin_info' => esc_html__('All these required plugins will be installed and activated while importing demo. Or you can choose to install and activate them manually. If you\'re not importing any of the demos, you must install and activate these plugins manually.', 'enlighten' ),
		'req_plugins_installed' => esc_html__( 'All Recommended action has been successfully completed.', 'enlighten' ),
		'customize_theme_btn' 	=> esc_html__( 'Customize Theme', 'enlighten' ),
		'pro_plugin_title' 			=> esc_html__( 'Premium Plugins', 'enlighten' ),
		'free_plugin_title' 		=> esc_html__( 'Free Plugins', 'enlighten' ),
	);

	/**
	 * Initiating Welcome Page
	*/
	$my_theme_wc_page = new Enlighten_Welcome( $en_plugins, $strings );