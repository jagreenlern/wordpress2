<?php
/**
 * Finance Accounting functions and definitions
 */

function finance_accounting_setup() {
	
	load_theme_textdomain( 'finance-accounting' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'finance-accounting-featured-image', 2000, 1200, true );
	add_image_size( 'finance-accounting-thumbnail-avatar', 100, 100, true );

	// Set the default content width.
	$GLOBALS['content_width'] = 525;

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'finance-accounting' ),
	) );

	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	add_editor_style( array( 'assets/css/editor-style.css', finance_accounting_fonts_url() ) );
}
add_action( 'after_setup_theme', 'finance_accounting_setup' );

/* Theme Font URL */
function finance_accounting_fonts_url(){
	$font_url = '';
	$font_family = array();
	$font_family[] = 'PT Sans:300,400,600,700,800,900';
	$font_family[] = 'B612:400,400i,700,700i';
	$font_family[] = 'Kalam:300,400,700';
	$font_family[] = 'PT Sans:300,400,600,700,800,900';
	$font_family[] = 'Roboto:400,700';
	$font_family[] = 'Roboto Condensed:400,700';
	$font_family[] = 'Open Sans';
	$font_family[] = 'Overpass';
	$font_family[] = 'Montserrat:300,400,600,700,800,900';
	$font_family[] = 'Playball:300,400,600,700,800,900';
	$font_family[] = 'Alegreya:300,400,600,700,800,900';
	$font_family[] = 'Julius Sans One';
	$font_family[] = 'Arsenal';
	$font_family[] = 'Slabo';
	$font_family[] = 'Lato';
	$font_family[] = 'Overpass Mono';
	$font_family[] = 'Source Sans Pro';
	$font_family[] = 'Raleway';
	$font_family[] = 'Merriweather';
	$font_family[] = 'Droid Sans';
	$font_family[] = 'Rubik';
	$font_family[] = 'Lora';
	$font_family[] = 'Ubuntu';
	$font_family[] = 'Cabin';
	$font_family[] = 'Arimo';
	$font_family[] = 'Playfair Display';
	$font_family[] = 'Quicksand';
	$font_family[] = 'Padauk';
	$font_family[] = 'Muli';
	$font_family[] = 'Inconsolata';
	$font_family[] = 'Bitter';
	$font_family[] = 'Pacifico';
	$font_family[] = 'Indie Flower';
	$font_family[] = 'VT323';
	$font_family[] = 'Dosis';
	$font_family[] = 'Frank Ruhl Libre';
	$font_family[] = 'Fjalla One';
	$font_family[] = 'Oxygen';
	$font_family[] = 'Arvo';
	$font_family[] = 'Noto Serif';
	$font_family[] = 'Lobster';
	$font_family[] = 'Crimson Text';
	$font_family[] = 'Yanone Kaffeesatz';
	$font_family[] = 'Anton';
	$font_family[] = 'Libre Baskerville';
	$font_family[] = 'Bree Serif';
	$font_family[] = 'Gloria Hallelujah';
	$font_family[] = 'Josefin Sans';
	$font_family[] = 'Abril Fatface';
	$font_family[] = 'Varela Round';
	$font_family[] = 'Vampiro One';
	$font_family[] = 'Shadows Into Light';
	$font_family[] = 'Cuprum';
	$font_family[] = 'Rokkitt';
	$font_family[] = 'Vollkorn';
	$font_family[] = 'Francois One';
	$font_family[] = 'Orbitron';
	$font_family[] = 'Patua One';
	$font_family[] = 'Acme';
	$font_family[] = 'Satisfy';
	$font_family[] = 'Josefin Slab';
	$font_family[] = 'Quattrocento Sans';
	$font_family[] = 'Architects Daughter';
	$font_family[] = 'Russo One';
	$font_family[] = 'Monda';
	$font_family[] = 'Righteous';
	$font_family[] = 'Lobster Two';
	$font_family[] = 'Hammersmith One';
	$font_family[] = 'Courgette';
	$font_family[] = 'Permanent Marker';
	$font_family[] = 'Cherry Swash';
	$font_family[] = 'Cormorant Garamond';
	$font_family[] = 'Poiret One';
	$font_family[] = 'BenchNine';
	$font_family[] = 'Economica';
	$font_family[] = 'Handlee';
	$font_family[] = 'Cardo';
	$font_family[] = 'Alfa Slab One';
	$font_family[] = 'Averia Serif Libre';
	$font_family[] = 'Cookie';
	$font_family[] = 'Chewy';
	$font_family[] = 'Great Vibes';
	$font_family[] = 'Coming Soon';
	$font_family[] = 'Philosopher';
	$font_family[] = 'Days One';
	$font_family[] = 'Kanit';
	$font_family[] = 'Shrikhand';
	$font_family[] = 'Tangerine';
	$font_family[] = 'IM Fell English SC';
	$font_family[] = 'Boogaloo';
	$font_family[] = 'Bangers';
	$font_family[] = 'Fredoka One';
	$font_family[] = 'Bad Script';
	$font_family[] = 'Volkhov';
	$font_family[] = 'Shadows Into Light Two';
	$font_family[] = 'Marck Script';
	$font_family[] = 'Sacramento';
	$font_family[] = 'Unica One';
	$font_family[] = 'Noto Sans:400,400i,700,700i';

	$query_args = array(
		'family'	=> rawurlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}

/**
 * Widget area.
 */
function finance_accounting_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'finance-accounting' ),
		'id'            => 'sidebox-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'finance-accounting' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'finance-accounting' ),
		'id'            => 'sidebox-2',
		'description'   => __( 'Add widgets here to appear in your sidebar on Pages and archive pages.', 'finance-accounting' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'finance-accounting' ),
		'id'            => 'sidebox-3',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and pages.', 'finance-accounting' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	//Footer widget areas
	$finance_accounting_widget_areas = get_theme_mod('finance_accounting_footer_widget', '4');
	for ($i=1; $i<=$finance_accounting_widget_areas; $i++) {
		register_sidebar( array(
			'name'          => __( 'Footer ', 'finance-accounting' ) . $i,
			'id'            => 'footer-' . $i,
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s mb-4">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title py-3 text-center mb-3">',
			'after_title'   => '</h3>',
		) );
	}
}
add_action( 'widgets_init', 'finance_accounting_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function finance_accounting_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'finance-accounting-fonts', finance_accounting_fonts_url(), array(), null );

	// blocks-css
	wp_enqueue_style( 'finance-accounting-block-style', get_theme_file_uri('/assets/css/blocks.css') );

	//bootstrap
	wp_enqueue_style( 'bootstrap-style', get_theme_file_uri( '/assets/css/bootstrap.css' ));

	// Theme stylesheet.
	wp_enqueue_style( 'finance-accounting-style', get_stylesheet_uri() );

	//font-awesome 
	wp_enqueue_style( 'font-awesome-style', esc_url(get_template_directory_uri()).'/assets/css/fontawesome-all.css' );
	
	// Paragraph
    $finance_accounting_paragraph_color = get_theme_mod('finance_accounting_paragraph_color', '');
    $finance_accounting_paragraph_font_family = get_theme_mod('finance_accounting_paragraph_font_family', '');
    $finance_accounting_paragraph_font_size = get_theme_mod('finance_accounting_paragraph_font_size', '');
	// "a" tag
	$finance_accounting_atag_color = get_theme_mod('finance_accounting_atag_color', '');
    $finance_accounting_atag_font_family = get_theme_mod('finance_accounting_atag_font_family', '');
	// "li" tag
	$finance_accounting_li_color = get_theme_mod('finance_accounting_li_color', '');
    $finance_accounting_li_font_family = get_theme_mod('finance_accounting_li_font_family', '');
	// H1
	$finance_accounting_h1_color = get_theme_mod('finance_accounting_h1_color', '');
    $finance_accounting_h1_font_family = get_theme_mod('finance_accounting_h1_font_family', '');
    $finance_accounting_h1_font_size = get_theme_mod('finance_accounting_h1_font_size', '');
	// H2
	$finance_accounting_h2_color = get_theme_mod('finance_accounting_h2_color', '');
    $finance_accounting_h2_font_family = get_theme_mod('finance_accounting_h2_font_family', '');
    $finance_accounting_h2_font_size = get_theme_mod('finance_accounting_h2_font_size', '');
	// H3
	$finance_accounting_h3_color = get_theme_mod('finance_accounting_h3_color', '');
    $finance_accounting_h3_font_family = get_theme_mod('finance_accounting_h3_font_family', '');
    $finance_accounting_h3_font_size = get_theme_mod('finance_accounting_h3_font_size', '');
	// H4
	$finance_accounting_h4_color = get_theme_mod('finance_accounting_h4_color', '');
    $finance_accounting_h4_font_family = get_theme_mod('finance_accounting_h4_font_family', '');
    $finance_accounting_h4_font_size = get_theme_mod('finance_accounting_h4_font_size', '');
	// H5
	$finance_accounting_h5_color = get_theme_mod('finance_accounting_h5_color', '');
    $finance_accounting_h5_font_family = get_theme_mod('finance_accounting_h5_font_family', '');
    $finance_accounting_h5_font_size = get_theme_mod('finance_accounting_h5_font_size', '');
	// H6
	$finance_accounting_h6_color = get_theme_mod('finance_accounting_h6_color', '');
    $finance_accounting_h6_font_family = get_theme_mod('finance_accounting_h6_font_family', '');
    $finance_accounting_h6_font_size = get_theme_mod('finance_accounting_h6_font_size', '');

	$finance_accounting_custom_css ='
		p,span{
		    color:'.esc_html($finance_accounting_paragraph_color).'!important;
		    font-family: '.esc_html($finance_accounting_paragraph_font_family).';
		    font-size: '.esc_html($finance_accounting_paragraph_font_size).';
		}
		a{
		    color:'.esc_html($finance_accounting_atag_color).'!important;
		    font-family: '.esc_html($finance_accounting_atag_font_family).';
		}
		li{
		    color:'.esc_html($finance_accounting_li_color).'!important;
		    font-family: '.esc_html($finance_accounting_li_font_family).';
		}
		h1{
		    color:'.esc_html($finance_accounting_h1_color).'!important;
		    font-family: '.esc_html($finance_accounting_h1_font_family).'!important;
		    font-size: '.esc_html($finance_accounting_h1_font_size).'!important;
		}
		h2{
		    color:'.esc_html($finance_accounting_h2_color).'!important;
		    font-family: '.esc_html($finance_accounting_h2_font_family).'!important;
		    font-size: '.esc_html($finance_accounting_h2_font_size).'!important;
		}
		h3{
		    color:'.esc_html($finance_accounting_h3_color).'!important;
		    font-family: '.esc_html($finance_accounting_h3_font_family).'!important;
		    font-size: '.esc_html($finance_accounting_h3_font_size).'!important;
		}
		h4{
		    color:'.esc_html($finance_accounting_h4_color).'!important;
		    font-family: '.esc_html($finance_accounting_h4_font_family).'!important;
		    font-size: '.esc_html($finance_accounting_h4_font_size).'!important;
		}
		h5{
		    color:'.esc_html($finance_accounting_h5_color).'!important;
		    font-family: '.esc_html($finance_accounting_h5_font_family).'!important;
		    font-size: '.esc_html($finance_accounting_h5_font_size).'!important;
		}
		h6{
		    color:'.esc_html($finance_accounting_h6_color).'!important;
		    font-family: '.esc_html($finance_accounting_h6_font_family).'!important;
		    font-size: '.esc_html($finance_accounting_h6_font_size).'!important;
		}
	';
	
	wp_add_inline_style( 'finance-accounting-style',$finance_accounting_custom_css );

	// Load the Internet Explorer 9 specific stylesheet, to fix display issues in the Customizer.
	if ( is_customize_preview() ) {
		wp_enqueue_style( 'finance-accounting-ie9-style', get_theme_file_uri( '/assets/css/ie9.css' ), array( 'finance-accounting-style' ), '1.0' );
		wp_style_add_data( 'finance-accounting-ie9-style', 'conditional', 'IE 9' );
	}

	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'finance-accounting-ie8-style', get_theme_file_uri( '/assets/css/ie8.css' ), array( 'finance-accounting-style' ), '1.0' );
	wp_style_add_data( 'finance-accounting-ie8-style', 'conditional', 'lt IE 9' );

	// Load the html5 shiv.
	wp_enqueue_script( 'html5-jquery', get_theme_file_uri( '/assets/js/html5.js' ), array(), '3.7.3' );
	wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'finance-accounting-skip-link-focus-fix-jquery', get_theme_file_uri( '/assets/js/skip-link-focus-fix.js' ), array(), '1.0', true );

	$finance_accountingScreenReaderText=array();
	
	if ( has_nav_menu( 'top' ) ) {
		wp_enqueue_script( 'finance-accounting-navigation-jquery', get_theme_file_uri( '/assets/js/navigation.js' ), array( 'jquery' ), '1.0', true );

		$finance_accountingScreenReaderText['expand'] = __( 'Expand child menu', 'finance-accounting' );
		$finance_accountingScreenReaderText['collapse'] = __( 'Collapse child menu', 'finance-accounting' );
	}

	wp_enqueue_script( 'bootstrap-jquery', esc_url(get_template_directory_uri()) . '/assets/js/bootstrap.js', array('jquery') ,'',true);

	require get_parent_theme_file_path( '/color-option.php' );
	wp_add_inline_style( 'finance-accounting-style',$finance_accounting_custom_css );

	wp_localize_script( 'finance-accounting-skip-link-focus-fix-jquery', 'finance_accountingScreenReaderText', $finance_accountingScreenReaderText );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'finance_accounting_scripts' );

function finance_accounting_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function finance_accounting_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

function finance_accounting_sanitize_checkbox( $input ) {
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

function finance_accounting_sanitize_float( $input ) {
	return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}

function finance_accounting_sanitize_number_range( $number, $setting ) {
	$number = absint( $number );
	$atts = $setting->manager->get_control( $setting->id )->input_attrs;
	$min = ( isset( $atts['min'] ) ? $atts['min'] : $number );
	$max = ( isset( $atts['max'] ) ? $atts['max'] : $number );
	$step = ( isset( $atts['step'] ) ? $atts['step'] : 1 );
	return ( $min <= $number && $number <= $max && is_int( $number / $step ) ? $number : $setting->default );
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'finance_accounting_loop_columns');
if (!function_exists('finance_accounting_loop_columns')) {
	function finance_accounting_loop_columns() {
		$columns = get_theme_mod( 'finance_accounting_woocommerce_product_per_columns', 3 );
		return $columns; // 3 products per row
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'finance_accounting_shop_per_page', 20 );
function finance_accounting_shop_per_page( $cols ) {
  	$cols = get_theme_mod( 'finance_accounting_woocommerce_product_per_page', 9 );
	return $cols;
}

/* Excerpt Limit Begin */
function finance_accounting_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

function finance_accounting_sanitize_dropdown_pages( $page_id, $setting ) {
  // Ensure $input is an absolute integer.
  $page_id = absint( $page_id );
  // If $page_id is an ID of a published page, return it; otherwise, return the default.
  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

define('FINANCE_ACCOUNTING_LIVE_DEMO',__('https://www.themeseye.com/demo/finance-accounting/','finance-accounting'));
define('FINANCE_ACCOUNTING_BUY_PRO',__('https://www.themeseye.com/wordpress/accounting-finance-wordpress-theme/','finance-accounting'));
define('FINANCE_ACCOUNTING_PRO_DOC',__('https://themeseye.com/theme-demo/docs/finance-accounting-pro/','finance-accounting'));
define('FINANCE_ACCOUNTING_PRO_SUPPORT',__('https://www.themeseye.com/forums/topic/finance-accounting-pro/','finance-accounting'));
define('FINANCE_ACCOUNTING_FREE_SUPPORT',__('https://wordpress.org/support/theme/finance-accounting/','finance-accounting'));

//footer Link
define('FINANCE_ACCOUNTING_CREDIT',__('https://www.themeseye.com/wordpress/free-finance-wordpress-theme/','finance-accounting'));

if ( ! function_exists( 'finance_accounting_credit' ) ) {
	function finance_accounting_credit(){
		echo "<a href=".esc_url(FINANCE_ACCOUNTING_CREDIT).">".esc_html__('Finance WordPress Theme','finance-accounting')."</a>";
	}
}

require get_parent_theme_file_path( '/inc/custom-header.php' );

require get_parent_theme_file_path( '/inc/template-tags.php' );

require get_parent_theme_file_path( '/inc/template-functions.php' );

require get_parent_theme_file_path( '/inc/customizer.php' );

require get_parent_theme_file_path( '/inc/dashboard/get_started_info.php' );