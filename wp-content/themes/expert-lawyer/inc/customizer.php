<?php
/**
 * expert-lawyer: Customizer
 *
 * @package WordPress
 * @subpackage expert-lawyer
 * @since 1.0
 */

function expert_lawyer_customize_register( $wp_customize ) {

	$wp_customize->add_setting('expert_lawyer_show_site_title',array(
       'default' => true,
       'sanitize_callback'	=> 'expert_lawyer_sanitize_checkbox'
    ));
    $wp_customize->add_control('expert_lawyer_show_site_title',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Site Title','expert-lawyer'),
       'section' => 'title_tagline'
    ));

    $wp_customize->add_setting('expert_lawyer_show_tagline',array(
       'default' => true,
       'sanitize_callback'	=> 'expert_lawyer_sanitize_checkbox'
    ));
    $wp_customize->add_control('expert_lawyer_show_tagline',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Site Tagline','expert-lawyer'),
       'section' => 'title_tagline'
    ));

	$wp_customize->add_panel( 'expert_lawyer_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'expert-lawyer' ),
	) );

	$wp_customize->add_section( 'expert_lawyer_theme_options_section', array(
    	'title'      => __( 'General Settings', 'expert-lawyer' ),
		'priority'   => 30,
		'panel' => 'expert_lawyer_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('expert_lawyer_theme_options',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'expert_lawyer_sanitize_choices'	        
	));
	$wp_customize->add_control('expert_lawyer_theme_options',array(
        'type' => 'radio',
        'label' => __('Do you want this section','expert-lawyer'),
        'section' => 'expert_lawyer_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','expert-lawyer'),
            'Right Sidebar' => __('Right Sidebar','expert-lawyer'),
            'One Column' => __('One Column','expert-lawyer'),
            'Three Columns' => __('Three Columns','expert-lawyer'),
            'Four Columns' => __('Four Columns','expert-lawyer'),
            'Grid Layout' => __('Grid Layout','expert-lawyer')
        ),
	));

	// Top Bar
	$wp_customize->add_section( 'expert_lawyer_contact_details', array(
    	'title'      => __( 'Top Bar', 'expert-lawyer' ),
		'priority'   => null,
		'panel' => 'expert_lawyer_panel_id'
	) );

	$wp_customize->add_setting('expert_lawyer_time',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('expert_lawyer_time',array(
		'label'	=> __('Timing','expert-lawyer'),
		'section'=> 'expert_lawyer_contact_details',
		'setting'=> 'expert_lawyer_time',
		'type'=> 'text'
	));

	$wp_customize->add_setting('expert_lawyer_call',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('expert_lawyer_call',array(
		'label'	=> __('Phone text','expert-lawyer'),
		'section'=> 'expert_lawyer_contact_details',
		'setting'=> 'expert_lawyer_call',
		'type'=> 'text'
	));

	$wp_customize->add_setting('expert_lawyer_call1',array(
		'default'=> '',
		'sanitize_callback'	=> 'expert_lawyer_sanitize_phone_number'
	));	
	$wp_customize->add_control('expert_lawyer_call1',array(
		'label'	=> __('Phone Number','expert-lawyer'),
		'section'=> 'expert_lawyer_contact_details',
		'setting'=> 'expert_lawyer_call1',
		'type'=> 'text'
	));

	$wp_customize->add_setting('expert_lawyer_mail',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('expert_lawyer_mail',array(
		'label'	=> __('Email text','expert-lawyer'),
		'section'=> 'expert_lawyer_contact_details',
		'setting'=> 'expert_lawyer_mail',
		'type'=> 'text'
	));	

	$wp_customize->add_setting('expert_lawyer_mail1',array(
		'default'=> '',
		'sanitize_callback'	=> 'expert_lawyer_sanitize_email'
	));	
	$wp_customize->add_control('expert_lawyer_mail1',array(
		'label'	=> __('Email Address','expert-lawyer'),
		'section'=> 'expert_lawyer_contact_details',
		'setting'=> 'expert_lawyer_mail1',
		'type'=> 'text'
	));	

	$wp_customize->add_setting('expert_lawyer_btn_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('expert_lawyer_btn_text',array(
		'label'	=> __('Add Button Text','expert-lawyer'),
		'section'	=> 'expert_lawyer_contact_details',
		'setting'	=> 'expert_lawyer_btn_text',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('expert_lawyer_btn_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('expert_lawyer_btn_link',array(
		'label'	=> __('Add Button Link','expert-lawyer'),
		'section'	=> 'expert_lawyer_contact_details',
		'setting'	=> 'expert_lawyer_btn_link',
		'type'	=> 'url'
	));

	//social icons
	$wp_customize->add_section( 'expert_lawyer_social', array(
    	'title'      => __( 'Social Icons', 'expert-lawyer' ),
		'priority'   => null,
		'panel' => 'expert_lawyer_panel_id'
	) );

	$wp_customize->add_setting('expert_lawyer_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('expert_lawyer_facebook_url',array(
		'label'	=> __('Add Facebook link','expert-lawyer'),
		'section'	=> 'expert_lawyer_social',
		'setting'	=> 'expert_lawyer_facebook_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('expert_lawyer_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('expert_lawyer_twitter_url',array(
		'label'	=> __('Add Twitter link','expert-lawyer'),
		'section'	=> 'expert_lawyer_social',
		'setting'	=> 'expert_lawyer_twitter_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('expert_lawyer_linkedin_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('expert_lawyer_linkedin_url',array(
		'label'	=> __('Add Linkedin link','expert-lawyer'),
		'section'	=> 'expert_lawyer_social',
		'setting'	=> 'expert_lawyer_linkedin_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('expert_lawyer_insta_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('expert_lawyer_insta_url',array(
		'label'	=> __('Add Instagram link','expert-lawyer'),
		'section'	=> 'expert_lawyer_social',
		'setting'	=> 'expert_lawyer_insta_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('expert_lawyer_pinterest_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('expert_lawyer_pinterest_url',array(
		'label'	=> __('Add Pintrest link','expert-lawyer'),
		'section'	=> 'expert_lawyer_social',
		'setting'	=> 'expert_lawyer_pinterest_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('expert_lawyer_you_tube_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('expert_lawyer_you_tube_url',array(
		'label'	=> __('Add YouTube link','expert-lawyer'),
		'section'	=> 'expert_lawyer_social',
		'setting'	=> 'expert_lawyer_you_tube_url',
		'type'	=> 'url'
	));	
	
	//home page slider
	$wp_customize->add_section( 'expert_lawyer_slider_section' , array(
    	'title'      => __( 'Slider Settings', 'expert-lawyer' ),
		'priority'   => null,
		'panel' => 'expert_lawyer_panel_id'
	) );

	$wp_customize->add_setting('expert_lawyer_slider_hide_show',array(
       	'default' => 'true',
       	'sanitize_callback'	=> 'expert_lawyer_sanitize_checkbox'
	));
	$wp_customize->add_control('expert_lawyer_slider_hide_show',array(
	   	'type' => 'checkbox',
	   	'label' => __('Show / Hide slider','expert-lawyer'),
	   	'description' => __('Image Size ( 1600px x 582px )','expert-lawyer'),
	   	'section' => 'expert_lawyer_slider_section',
	));

	for ( $count = 1; $count <= 4; $count++ ) {
		$wp_customize->add_setting( 'expert_lawyer_slider' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'expert_lawyer_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'expert_lawyer_slider' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'expert-lawyer' ),
			'section'  => 'expert_lawyer_slider_section',
			'type'     => 'dropdown-pages'
		) );
	}

	//Abut Us
	$wp_customize->add_section('expert_lawyer_about_us',array(
		'title'	=> __('About Us','expert-lawyer'),
		'description' => __('Add content here.','expert-lawyer'),
		'panel' => 'expert_lawyer_panel_id',
	));

	$args = array('numberposts' => -1);
	$post_list = get_posts($args);
	$i = 0;
	$psts[]='Select';  
	foreach($post_list as $post){
		$psts[$post->post_title] = $post->post_title;
	}

	$wp_customize->add_setting('expert_lawyer_post',array(
		'sanitize_callback' => 'expert_lawyer_sanitize_choices',
	));
	$wp_customize->add_control('expert_lawyer_post',array(
		'type'    => 'select',
		'choices' => $psts,
		'label' => __('Select post','expert-lawyer'),
		'section' => 'expert_lawyer_about_us',
	));

	//Footer
    $wp_customize->add_section( 'expert_lawyer_footer', array(
    	'title'      => __( 'Footer Text', 'expert-lawyer' ),
		'priority'   => null,
		'panel' => 'expert_lawyer_panel_id'
	) );

    $wp_customize->add_setting('expert_lawyer_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('expert_lawyer_footer_copy',array(
		'label'	=> __('Footer Text','expert-lawyer'),
		'section'	=> 'expert_lawyer_footer',
		'setting'	=> 'expert_lawyer_footer_copy',
		'type'		=> 'text'
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'expert_lawyer_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'expert_lawyer_customize_partial_blogdescription',
	) );

	//front page
	$num_sections = apply_filters( 'expert_lawyer_front_page_sections', 4 );

	// Create a setting and control for each of the sections available in the theme.
	for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
		$wp_customize->add_setting( 'panel_' . $i, array(
			'default'           => false,
			'sanitize_callback' => 'expert_lawyer_sanitize_dropdown_pages',
			'transport'         => 'postMessage',
		) );

		$wp_customize->add_control( 'panel_' . $i, array(
			/* translators: %d is the front page section number */
			'label'          => sprintf( __( 'Front Page Section %d Content', 'expert-lawyer' ), $i ),
			'description'    => ( 1 !== $i ? '' : __( 'Select pages to feature in each area from the dropdowns. Add an image to a section by setting a featured image in the page editor. Empty sections will not be displayed.', 'expert-lawyer' ) ),
			'section'        => 'theme_options',
			'type'           => 'dropdown-pages',
			'allow_addition' => true,
			'active_callback' => 'expert_lawyer_is_static_front_page',
		) );

		$wp_customize->selective_refresh->add_partial( 'panel_' . $i, array(
			'selector'            => '#panel' . $i,
			'render_callback'     => 'expert_lawyer_front_page_section',
			'container_inclusive' => true,
		) );
	}
}
add_action( 'customize_register', 'expert_lawyer_customize_register' );

function expert_lawyer_customize_partial_blogname() {
	bloginfo( 'name' );
}

function expert_lawyer_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

function expert_lawyer_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}

function expert_lawyer_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'sidebar-1' ) ) );
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Expert_Lawyer_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Expert_Lawyer_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Expert_Lawyer_Customize_Section_Pro(
				$manager,
				'expert_lawyer_example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__( 'Expert Lawyer Pro', 'expert-lawyer' ),
					'pro_text' => esc_html__( 'Go Pro','expert-lawyer' ),
					'pro_url'  => esc_url( 'https://www.luzuk.com/themes/lawyer-wordpress-theme/' ),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'expert-lawyer-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'expert-lawyer-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Expert_Lawyer_Customize::get_instance();