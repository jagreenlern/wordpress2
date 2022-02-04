<?php
/**
 * play-school-kindergarten: Customizer
 *
 * @subpackage play-school-kindergarten
 * @since 1.0
 */

function play_school_kindergarten_customize_register( $wp_customize ) {

	$wp_customize->add_setting('play_school_kindergarten_show_site_title',array(
       'default' => true,
       'sanitize_callback'	=> 'play_school_kindergarten_sanitize_checkbox'
    ));
    $wp_customize->add_control('play_school_kindergarten_show_site_title',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Site Title','play-school-kindergarten'),
       'section' => 'title_tagline'
    ));

    $wp_customize->add_setting('play_school_kindergarten_show_tagline',array(
       'default' => true,
       'sanitize_callback'	=> 'play_school_kindergarten_sanitize_checkbox'
    ));
    $wp_customize->add_control('play_school_kindergarten_show_tagline',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Site Tagline','play-school-kindergarten'),
       'section' => 'title_tagline'
    ));

	$wp_customize->add_panel( 'play_school_kindergarten_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'play-school-kindergarten' ),
	    'description' => __( 'Description of what this panel does.', 'play-school-kindergarten' ),
	) );

	$wp_customize->add_section( 'play_school_kindergarten_theme_options_section', array(
    	'title'      => __( 'General Settings', 'play-school-kindergarten' ),
		'priority'   => 30,
		'panel' => 'play_school_kindergarten_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('play_school_kindergarten_theme_options',array(
	        'default' =>'Right Sidebar',
	        'sanitize_callback' => 'play_school_kindergarten_sanitize_choices'	        
	));

	$wp_customize->add_control('play_school_kindergarten_theme_options',
	    array(
	        'type' => 'radio',
	        'label' => __('Do you want this section','play-school-kindergarten'),
	        'section' => 'play_school_kindergarten_theme_options_section',
	        'choices' => array(
	            'Left Sidebar' => __('Left Sidebar','play-school-kindergarten'),
	            'Right Sidebar' => __('Right Sidebar','play-school-kindergarten'),
	            'One Column' => __('One Column','play-school-kindergarten'),
	            'Three Columns' => __('Three Columns','play-school-kindergarten'),
	            'Four Columns' => __('Four Columns','play-school-kindergarten'),
	            'Grid Layout' => __('Grid Layout','play-school-kindergarten')
	        ),
	));

	// Contact Details
	$wp_customize->add_section( 'play_school_kindergarten_contact_details', array(
    	'title'      => __( 'Contact Details', 'play-school-kindergarten' ),
		'priority'   => null,
		'panel' => 'play_school_kindergarten_panel_id'
	) );

	$wp_customize->add_setting('play_school_kindergarten_facebook',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('play_school_kindergarten_facebook',array(
		'label'	=> __('Add Facebook link','play-school-kindergarten'),
		'section'=> 'play_school_kindergarten_contact_details',
		'setting'=> 'play_school_kindergarten_facebook',
		'type'=> 'url'
	));

	$wp_customize->add_setting('play_school_kindergarten_twitter',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('play_school_kindergarten_twitter',array(
		'label'	=> __('Add Twitter Link','play-school-kindergarten'),
		'section'=> 'play_school_kindergarten_contact_details',
		'setting'=> 'play_school_kindergarten_twitter',
		'type'=> 'url'
	));

	$wp_customize->add_setting('play_school_kindergarten_linkdin',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('play_school_kindergarten_linkdin',array(
		'label'	=> __('Add Linkedin Link','play-school-kindergarten'),
		'section'=> 'play_school_kindergarten_contact_details',
		'setting'=> 'play_school_kindergarten_linkdin',
		'type'=> 'url'
	));	

	$wp_customize->add_setting('play_school_kindergarten_instagram',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('play_school_kindergarten_instagram',array(
		'label'	=> __('Add Instagram Link','play-school-kindergarten'),
		'section'=> 'play_school_kindergarten_contact_details',
		'setting'=> 'play_school_kindergarten_instagram',
		'type'=> 'url'
	));

	$wp_customize->add_setting('play_school_kindergarten_mail',array(
		'default'=> '',
		'sanitize_callback'	=> 'play_school_kindergarten_sanitize_email'
	));	
	$wp_customize->add_control('play_school_kindergarten_mail',array(
		'label'	=> __('Email Address','play-school-kindergarten'),
		'section'=> 'play_school_kindergarten_contact_details',
		'setting'=> 'play_school_kindergarten_mail',
		'type'=> 'text'
	));	

	$wp_customize->add_setting('play_school_kindergarten_location',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('play_school_kindergarten_location',array(
		'label'	=> __('Address','play-school-kindergarten'),
		'section'=> 'play_school_kindergarten_contact_details',
		'setting'=> 'play_school_kindergarten_location',
		'type'=> 'text'
	));

	$wp_customize->add_setting('play_school_kindergarten_button_link',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('play_school_kindergarten_button_link',array(
		'label'	=> __('Add Courses Page Link','play-school-kindergarten'),
		'section'=> 'play_school_kindergarten_contact_details',
		'setting'=> 'play_school_kindergarten_button_link',
		'type'=> 'url'
	));

	//home page slider
	$wp_customize->add_section( 'play_school_kindergarten_slider' , array(
    	'title'      => __( 'Slider Settings', 'play-school-kindergarten' ),
		'priority'   => null,
		'panel' => 'play_school_kindergarten_panel_id'
	) );

	for ( $count = 1; $count <= 4; $count++ ) {
		$wp_customize->add_setting( 'play_school_kindergarten_slide_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'play_school_kindergarten_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'play_school_kindergarten_slide_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'play-school-kindergarten' ),
			'section'  => 'play_school_kindergarten_slider',
			'type'     => 'dropdown-pages'
		) );
	}

	//About
	$wp_customize->add_section('play_school_kindergarten_about1',array(
		'title'	=> __('About Section','play-school-kindergarten'),
		'description'	=> __('Add About sections below.','play-school-kindergarten'),
		'panel' => 'play_school_kindergarten_panel_id',
	));

	$args = array('numberposts' => -1);
	$post_list = get_posts($args);
	$i = 0;
	foreach($post_list as $post){
		$posts[$post->post_title] = $post->post_title;
	}

	$wp_customize->add_setting('play_school_kindergarten_about_name',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('play_school_kindergarten_about_name',array(
		'label'	=> __('Title','play-school-kindergarten'),
		'section'	=> 'play_school_kindergarten_about1',
		'setting'	=> 'play_school_kindergarten_about_name',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('play_school_kindergarten_about_setting',array(
		'sanitize_callback' => 'play_school_kindergarten_sanitize_choices',
	));
	$wp_customize->add_control('play_school_kindergarten_about_setting',array(
		'type'    => 'select',
		'choices' => $posts,
		'label' => __('Select post','play-school-kindergarten'),
		'section' => 'play_school_kindergarten_about1',
	));

	//Footer
    $wp_customize->add_section( 'play_school_kindergarten_footer', array(
    	'title'      => __( 'Footer Text', 'play-school-kindergarten' ),
		'priority'   => null,
		'panel' => 'play_school_kindergarten_panel_id'
	) );

    $wp_customize->add_setting('play_school_kindergarten_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('play_school_kindergarten_footer_copy',array(
		'label'	=> __('Footer Text','play-school-kindergarten'),
		'section'	=> 'play_school_kindergarten_footer',
		'setting'	=> 'play_school_kindergarten_footer_copy',
		'type'		=> 'text'
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'play_school_kindergarten_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'play_school_kindergarten_customize_partial_blogdescription',
	) );

	//front page
	$num_sections = apply_filters( 'play_school_kindergarten_front_page_sections', 4 );

	// Create a setting and control for each of the sections available in the theme.
	for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
		$wp_customize->add_setting( 'panel_' . $i, array(
			'default'           => false,
			'sanitize_callback' => 'absint',
			'transport'         => 'postMessage',
		) );

		$wp_customize->add_control( 'panel_' . $i, array(
			/* translators: %d is the front page section number */
			'label'          => sprintf( __( 'Front Page Section %d Content', 'play-school-kindergarten' ), $i ),
			'description'    => ( 1 !== $i ? '' : __( 'Select pages to feature in each area from the dropdowns. Add an image to a section by setting a featured image in the page editor. Empty sections will not be displayed.', 'play-school-kindergarten' ) ),
			'section'        => 'theme_options',
			'type'           => 'dropdown-pages',
			'allow_addition' => true,
			'active_callback' => 'play_school_kindergarten_is_static_front_page',
		) );

		$wp_customize->selective_refresh->add_partial( 'panel_' . $i, array(
			'selector'            => '#panel' . $i,
			'render_callback'     => 'play_school_kindergarten_front_page_section',
			'container_inclusive' => true,
		) );
	}
}
add_action( 'customize_register', 'play_school_kindergarten_customize_register' );

function play_school_kindergarten_sanitize_colorscheme( $input ) {
	$valid = array( 'light', 'dark', 'custom' );

	if ( in_array( $input, $valid, true ) ) {
		return $input;
	}

	return 'light';
}

function play_school_kindergarten_customize_partial_blogname() {
	bloginfo( 'name' );
}

function play_school_kindergarten_customize_partial_blogdescription() {
	bloginfo( 'description' );
}


function play_school_kindergarten_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}

function play_school_kindergarten_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'sidebar-1' ) ) );
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Play_School_Kindergarten_Customize {

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
		$manager->register_section_type( 'Play_School_Kindergarten_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Play_School_Kindergarten_Customize_Section_Pro(
				$manager,
				'play_school_kindergarten_example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__( 'Kindergarten Pro Theme', 'play-school-kindergarten' ),
					'pro_text' => esc_html__( 'Go Pro', 'play-school-kindergarten' ),
					'pro_url'  => esc_url( 'https://www.luzuk.com/product/premium-kindergarten-wordpress-theme/' ),
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

		wp_enqueue_script( 'play-school-kindergarten-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'play-school-kindergarten-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Play_School_Kindergarten_Customize::get_instance();