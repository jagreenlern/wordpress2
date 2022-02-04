<?php
/**
 * play-school-kindergarten functions and definitions
 *
 * 
 * @subpackage play-school-kindergarten
 * @since 1.0
 */

if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

function play_school_kindergarten_setup() {
	

	load_theme_textdomain( 'play-school-kindergarten', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-background', $defaults = array(
    'default-color'          => '',
    'default-image'          => '',
    'default-repeat'         => '',
    'default-position-x'     => '',
    'default-attachment'     => '',
    'wp-head-callback'       => '_custom_background_cb',
    'admin-head-callback'    => '',
    'admin-preview-callback' => ''
	));

	add_image_size( 'play-school-kindergarten-featured-image', 2000, 1200, true );

	add_image_size( 'play-school-kindergarten-thumbnail-avatar', 100, 100, true );

	$GLOBALS['content_width'] = 525;
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'play-school-kindergarten' ),
	) );

	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	* Enable support for Post Formats.
	*
	* See: https://codex.wordpress.org/Post_Formats
	*/
	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
 	 */
	add_editor_style( array( 'assets/css/editor-style.css', play_school_kindergarten_fonts_url() ) );

 	// Theme Activation Notice
	global $pagenow;

	if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {
		add_action( 'admin_notices', 'play_school_kindergarten_activation_notice' );
	}

}
add_action( 'after_setup_theme', 'play_school_kindergarten_setup' );

// Notice after Theme Activation
function play_school_kindergarten_activation_notice() {
	echo '<div class="notice notice-success is-dismissible start-notice">';
	echo '<h3>'. esc_html__( 'Welcome to Luzuk!!', 'play-school-kindergarten' ) .'</h3>';
	echo '<p>'. esc_html__( 'Thank you for choosing Play School Kindergarten theme. It will be our pleasure to have you on our Welcome page to serve you better.', 'play-school-kindergarten' ) .'</p>';
	echo '<p><a href="'. esc_url( admin_url( 'themes.php?page=play_school_kindergarten_guide' ) ) .'" class="button button-primary">'. esc_html__( 'GET STARTED', 'play-school-kindergarten' ) .'</a></p>';
	echo '</div>';
}

function play_school_kindergarten_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'play-school-kindergarten' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'play-school-kindergarten' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 2', 'play-school-kindergarten' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your pages and posts', 'play-school-kindergarten' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'play-school-kindergarten' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your pages and posts', 'play-school-kindergarten' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'play-school-kindergarten' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'play-school-kindergarten' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'play-school-kindergarten' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'play-school-kindergarten' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'play-school-kindergarten' ),
		'id'            => 'footer-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'play-school-kindergarten' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'play-school-kindergarten' ),
		'id'            => 'footer-4',
		'description'   => __( 'Add widgets here to appear in your footer.', 'play-school-kindergarten' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'play_school_kindergarten_widgets_init' );

function play_school_kindergarten_fonts_url(){
	$font_url = '';
	$font_family = array();
	$font_family[] = 'Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';

	$query_args = array(
		'family'	=> rawurlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}

//Enqueue scripts and styles.
function play_school_kindergarten_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'play-school-kindergarten-fonts', play_school_kindergarten_fonts_url(), array(), null );
		//Bootstarp 
	wp_enqueue_style( 'bootstrap', esc_url(get_template_directory_uri()).'/assets/css/bootstrap.css' );	
	
	// Theme stylesheet.
	wp_enqueue_style( 'play-school-kindergarten-style', get_stylesheet_uri() );

	// Load the Internet Explorer 9 specific stylesheet, to fix display issues in the Customizer.
	if ( is_customize_preview() ) {
		wp_enqueue_style( 'play-school-kindergarten-ie9', get_theme_file_uri( '/assets/css/ie9.css' ), array( 'play-school-kindergarten-style' ), '1.0' );
		wp_style_add_data( 'play-school-kindergarten-ie9', 'conditional', 'IE 9' );
	}
	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'play-school-kindergarten-ie8', get_theme_file_uri( '/assets/css/ie8.css' ), array( 'play-school-kindergarten-style' ), '1.0' );
	wp_style_add_data( 'play-school-kindergarten-ie8', 'conditional', 'lt IE 9' );

	//font-awesome
	wp_enqueue_style( 'font-awesome', esc_url(get_template_directory_uri()).'/assets/css/fontawesome-all.css' );
	// Load the html5 shiv.
	wp_enqueue_script( 'html5', get_theme_file_uri( '/assets/js/html5.js' ), array(), '3.7.3' );
	wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'play-school-kindergarten-navigation-jquery', get_theme_file_uri( '/assets/js/navigation.js' ), array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'bootstrap', get_theme_file_uri( '/assets/js/bootstrap.js' ), array(), '1.0', true );
	wp_enqueue_script( 'jquery-superfish', esc_url(get_template_directory_uri()) . '/assets/js/jquery.superfish.js', array('jquery') ,'',true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ){
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'play_school_kindergarten_scripts' );

function play_school_kindergarten_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template',  'play_school_kindergarten_front_page_template' );

function play_school_kindergarten_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

//define Link
define('PLAY_SCHOOL_KINDERGARTEN_LIVE_DEMO',__('https://luzukdemo.com/demo/play-School-Kindergarten/','play-school-kindergarten'));
define('PLAY_SCHOOL_KINDERGARTEN_PRO_DOCS',__('http://luzukdemo.com/demo/play-School-Kindergarten/documentation/','play-school-kindergarten'));
define('PLAY_SCHOOL_KINDERGARTEN_BUY_NOW',__('https://www.luzuk.com/product/premium-kindergarten-wordpress-theme/','play-school-kindergarten'));
define('PLAY_SCHOOL_KINDERGARTEN_SUPPORT',__('https://wordpress.org/support/theme/play-school-kindergarten/','play-school-kindergarten'));
define('PLAY_SCHOOL_KINDERGARTEN_CREDIT',__('https://www.luzuk.com/themes/free-kindergarten-wordpress-theme/','play-school-kindergarten'));

if ( ! function_exists( 'play_school_kindergarten_credit' ) ) {
	function play_school_kindergarten_credit(){
		echo "<a href=".esc_url(PLAY_SCHOOL_KINDERGARTEN_CREDIT)." target='_blank'>".esc_html__('Kindergarten WordPress Theme','play-school-kindergarten')."</a>";
	}
}

function play_school_kindergarten_sanitize_dropdown_pages( $page_id, $setting ) {
  // Ensure $input is an absolute integer.
  $page_id = absint( $page_id );
  // If $page_id is an ID of a published page, return it; otherwise, return the default.
  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'play_school_kindergarten_loop_columns');
if (!function_exists('play_school_kindergarten_loop_columns')) {
	function play_school_kindergarten_loop_columns() {
		return 3; // 3 products per row
	}
}

/* Excerpt Limit Begin */
function play_school_kindergarten_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

function play_school_kindergarten_sanitize_checkbox( $input ) {
	
	// Boolean check 
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

function play_school_kindergarten_sanitize_email( $email, $setting ) {
	// Strips out all characters that are not allowable in an email address.
	$email = sanitize_email( $email );

	// If $email is a valid email, return it; otherwise, return the default.
	return ( ! is_null( $email ) ? $email : $setting->default );
}

require get_parent_theme_file_path( '/inc/custom-header.php' );

require get_parent_theme_file_path( '/inc/template-tags.php' );

require get_parent_theme_file_path( '/inc/template-functions.php' );

require get_parent_theme_file_path( '/inc/customizer.php' );

require get_parent_theme_file_path( '/inc/getting-started/getting-started.php' );