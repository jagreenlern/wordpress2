<?php
/**
 * Advance Blogging functions and definitions
 *
 * @package Advance Blogging
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

if ( ! function_exists( 'advance_blogging_setup' ) ) :

/* Theme Setup */
function advance_blogging_setup() {

	$GLOBALS['content_width'] = apply_filters( 'advance_blogging_content_width', 640 );

	load_theme_textdomain( 'advance-blogging', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	add_image_size('advance-blogging-homepage-thumb',240,145,true);
	
   	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'advance-blogging' ),
	) );

	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
	
	/*
	* Enable support for Post Formats.
	*
	* See: https://codex.wordpress.org/Post_Formats
	*/
	add_theme_support( 'post-formats', array('image','video','gallery','audio',) ); 

	/* Selective refresh for widgets */
	add_theme_support( 'customize-selective-refresh-widgets' );

	/* Starter Content */
	add_theme_support( 'starter-content', array(
		'widgets' => array(
			'sidebar-1' => array(
				'text_business_info',
				'search',
				'text_about',
			),
			'sidebar-2' => array(
				'text_business_info',
			),
			'sidebar-3' => array(
				'text_about',
				'search',
			),
			'footer-1' => array(
				'text_about',
			),
			'footer-2' => array(
				'archives',
			),
			'footer-3' => array(
				'text_business_info',
			),
			'footer-4' => array(
				'search',
			),
		),

		'posts' => array(
			'home',
			'about' => array(
				'thumbnail' => '{{image-espresso}}',
			),
			'contact' => array(
				'thumbnail' => '{{image-coffee}}',
			),
			'blog' => array(
				'thumbnail' => '{{image-coffee}}',
			),
		),

		'theme_mods' => array(
			'advance_blogging_facebook_url' => 'www.facebook.com',
			'advance_blogging_twitter_url' => 'www.twitter.com',
			'advance_blogging_tumblr_url' => 'www.tumblr.com',
			'advance_blogging_pinterest_url' => 'www.pinterest.com',
			'advance_blogging_insta_url' => 'www.instagram.com',
			'advance_blogging_linkedin_url' => 'www.linkedin.com',
			'advance_blogging_youtube_url' => 'www.youtube.com',
			'advance_blogging_footer_copy' => 'By ThemesCaliber'
		),

		'nav_menus' => array(
			'primary' => array(
				'name' => __( 'Primary Menu', 'advance-blogging' ),
				'items' => array(
					'page_home',
					'page_about',
					'page_blog',
					'page_contact',
				),
			),
		),
    ));

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', advance_blogging_font_url() ) );
}
endif;
add_action( 'after_setup_theme', 'advance_blogging_setup' );

/* Theme Widgets Setup */
function advance_blogging_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'advance-blogging' ),
		'description' => __( 'Appears on blog page sidebar', 'advance-blogging' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s mb-4 p-2">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title mb-3 py-2">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'advance-blogging' ),
		'description' => __( 'Appears on page sidebar', 'advance-blogging' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s mb-4 p-2">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title mb-3 py-2">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Thid Column Sidebar', 'advance-blogging' ),
		'description' => __( 'Appears on page sidebar', 'advance-blogging' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s mb-4 p-2">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title mb-3 py-2">',
		'after_title'   => '</h1>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Home Page Sidebar', 'advance-blogging' ),
		'description' => __( 'Appears on page sidebar', 'advance-blogging' ),
		'id'            => 'home',
		'before_widget' => '<aside id="%1$s" class="widget %2$s mb-4 p-2">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title mb-3 py-2">',
		'after_title'   => '</h3>',
	) );

	//Footer widget areas
	$advance_blogging_widget_areas = get_theme_mod('advance_blogging_footer_widget_layout', '4');
	for ($i=1; $i<=$advance_blogging_widget_areas; $i++) {
		register_sidebar( array(
			'name'          => __( 'Footer Nav ', 'advance-blogging' ) . $i,
			'id'            => 'footer-' . $i,
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title mb-2">',
			'after_title'   => '</h3>',
		) );
	}
}
add_action( 'widgets_init', 'advance_blogging_widgets_init' );

/* Theme Font URL */
function advance_blogging_font_url() {
	$font_url = '';
	$font_family = array();
	$font_family[] = 'Kavoon';
	$font_family[] = 'Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600';
	$font_family[] = 'Playfair+Display:400,400i,700,700i,900,900i';
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

	$query_args = array(
		'family'	=> rawurlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}

/* Theme enqueue scripts */
function advance_blogging_scripts() {
	wp_enqueue_style( 'advance-blogging-font', advance_blogging_font_url(), array() );
	wp_enqueue_style( 'bootstrap-css', esc_url(get_template_directory_uri()).'/css/bootstrap.css' );
	wp_enqueue_style( 'advance-blogging-basic-style', get_stylesheet_uri() );
	wp_style_add_data( 'advance-blogging-style', 'rtl', 'replace' );
	wp_enqueue_style( 'font-awesome-css', esc_url(get_template_directory_uri()).'/css/fontawesome-all.css' );
	wp_enqueue_style( 'advance-blogging-block-style', esc_url(get_template_directory_uri()).'/css/block-style.css' );

	// Paragraph
    $advance_blogging_paragraph_color = get_theme_mod('advance_blogging_paragraph_color', '');
    $advance_blogging_paragraph_font_family = get_theme_mod('advance_blogging_paragraph_font_family', '');
    $advance_blogging_paragraph_font_size = get_theme_mod('advance_blogging_paragraph_font_size', '');
	// "a" tag
	$advance_blogging_atag_color = get_theme_mod('advance_blogging_atag_color', '');
    $advance_blogging_atag_font_family = get_theme_mod('advance_blogging_atag_font_family', '');
	// "li" tag
	$advance_blogging_li_color = get_theme_mod('advance_blogging_li_color', '');
    $advance_blogging_li_font_family = get_theme_mod('advance_blogging_li_font_family', '');
	// H1
	$advance_blogging_h1_color = get_theme_mod('advance_blogging_h1_color', '');
    $advance_blogging_h1_font_family = get_theme_mod('advance_blogging_h1_font_family', '');
    $advance_blogging_h1_font_size = get_theme_mod('advance_blogging_h1_font_size', '');
	// H2
	$advance_blogging_h2_color = get_theme_mod('advance_blogging_h2_color', '');
    $advance_blogging_h2_font_family = get_theme_mod('advance_blogging_h2_font_family', '');
    $advance_blogging_h2_font_size = get_theme_mod('advance_blogging_h2_font_size', '');
	// H3
	$advance_blogging_h3_color = get_theme_mod('advance_blogging_h3_color', '');
    $advance_blogging_h3_font_family = get_theme_mod('advance_blogging_h3_font_family', '');
    $advance_blogging_h3_font_size = get_theme_mod('advance_blogging_h3_font_size', '');
	// H4
	$advance_blogging_h4_color = get_theme_mod('advance_blogging_h4_color', '');
    $advance_blogging_h4_font_family = get_theme_mod('advance_blogging_h4_font_family', '');
    $advance_blogging_h4_font_size = get_theme_mod('advance_blogging_h4_font_size', '');
	// H5
	$advance_blogging_h5_color = get_theme_mod('advance_blogging_h5_color', '');
    $advance_blogging_h5_font_family = get_theme_mod('advance_blogging_h5_font_family', '');
    $advance_blogging_h5_font_size = get_theme_mod('advance_blogging_h5_font_size', '');
	// H6
	$advance_blogging_h6_color = get_theme_mod('advance_blogging_h6_color', '');
    $advance_blogging_h6_font_family = get_theme_mod('advance_blogging_h6_font_family', '');
    $advance_blogging_h6_font_size = get_theme_mod('advance_blogging_h6_font_size', '');

	$advance_blogging_theme_color = get_theme_mod('advance_blogging_theme_color', '');

	$advance_blogging_custom_css ='
		p,span{
		    color:'.esc_attr($advance_blogging_paragraph_color).'!important;
		    font-family: '.esc_attr($advance_blogging_paragraph_font_family).'!important;
		    font-size: '.esc_attr($advance_blogging_paragraph_font_size).'!important;
		}
		a{
		    color:'.esc_attr($advance_blogging_atag_color).'!important;
		    font-family: '.esc_attr($advance_blogging_atag_font_family).';
		}
		li{
		    color:'.esc_attr($advance_blogging_li_color).'!important;
		    font-family: '.esc_attr($advance_blogging_li_font_family).';
		}
		h1{
		    color:'.esc_attr($advance_blogging_h1_color).'!important;
		    font-family: '.esc_attr($advance_blogging_h1_font_family).'!important;
		    font-size: '.esc_attr($advance_blogging_h1_font_size).'!important;
		}
		h2{
		    color:'.esc_attr($advance_blogging_h2_color).'!important;
		    font-family: '.esc_attr($advance_blogging_h2_font_family).'!important;
		    font-size: '.esc_attr($advance_blogging_h2_font_size).'!important;
		}
		h3{
		    color:'.esc_attr($advance_blogging_h3_color).'!important;
		    font-family: '.esc_attr($advance_blogging_h3_font_family).'!important;
		    font-size: '.esc_attr($advance_blogging_h3_font_size).'!important;
		}
		h4{
		    color:'.esc_attr($advance_blogging_h4_color).'!important;
		    font-family: '.esc_attr($advance_blogging_h4_font_family).'!important;
		    font-size: '.esc_attr($advance_blogging_h4_font_size).'!important;
		}
		h5{
		    color:'.esc_attr($advance_blogging_h5_color).'!important;
		    font-family: '.esc_attr($advance_blogging_h5_font_family).'!important;
		    font-size: '.esc_attr($advance_blogging_h5_font_size).'!important;
		}
		h6{
		    color:'.esc_attr($advance_blogging_h6_color).'!important;
		    font-family: '.esc_attr($advance_blogging_h6_font_family).'!important;
		    font-size: '.esc_attr($advance_blogging_h6_font_size).'!important;
		}
		.menubox.nav, .footertown .tagcloud a:hover, .metabox, .cat-post::-webkit-scrollbar-thumb, .button-post a, .woocommerce span.onsale, woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, .footertown input[type="submit"], #comments input[type="submit"].submit, .pagination span,.pagination a, input[type="submit"], .social-icons a:hover, .search-icon, #header .nav ul li:hover > ul li:hover, .blogbutton-mdall, #footer, #header .nav ul.sub-menu li a:hover,#sidebar .tagcloud a:hover, .primary-navigation ul, .primary-navigation ul ul a, #sidebar input[type="submit"],.sidebar,.toggle-menu, #comments a.comment-reply-link,a.button, .fixed-header, .woocommerce-product-search button[type="submit"], .woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .metbox, .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce #respond input#submit, .wp-block-button a {
		    background-color:'.esc_attr($advance_blogging_theme_color).';
		}
		.logo h1 a, .logo p, .logo h1 a, .logo p.site-title a, .cart-box, .cart-box i, .footertown .widget h3, p.logged-in-as a, #header .cart,.primary-navigation ul ul a:hover, #main p a, a, .tags a, code, span.post-title, .scrollup, .scrollup:focus, .scrollup:hover, .entry-content a, .textwidget a, .comment-list li.comment p a, #content-ma a{
		    color:'.esc_attr($advance_blogging_theme_color).';
		}
		@media screen and (max-width:1000px){
			.primary-navigation ul ul a:hover,.primary-navigation li a:hover{
				color:'.esc_attr($advance_blogging_theme_color).'!important;
			}
		}
		.cat-border, #slider .inner_carousel{
		    border-left-color:'.esc_attr($advance_blogging_theme_color).'!important;
		}
		input[type="submit"], #header,.tags a, .primary-navigation ul ul{
		    border-color:'.esc_attr($advance_blogging_theme_color).'!important;
		}
		#sidebar h3,.serach_inner form.search-form{
		    border-bottom-color:'.esc_attr($advance_blogging_theme_color).'!important;
		}
		.footertown input.search-field, .footertown input[type="submit"],.footertown input.search-field, .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current{
		    border-color:'.esc_attr($advance_blogging_theme_color).'!important;
		}
	';	

	wp_add_inline_style( 'advance-blogging-basic-style',$advance_blogging_custom_css );

	require get_parent_theme_file_path( '/tc-style.php' );
	wp_add_inline_style( 'advance-blogging-basic-style',$advance_blogging_custom_css );
	wp_enqueue_script( 'advance-blogging-customscripts', esc_url(get_template_directory_uri()) . '/js/custom.js', array('jquery') );
	wp_enqueue_script( 'jquery-superfish', esc_url(get_template_directory_uri()) . '/js/jquery.superfish.js', array('jquery') ,'',true);
	wp_enqueue_script( 'bootstrap-js', esc_url(get_template_directory_uri()) . '/js/bootstrap.js', array('jquery') );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'advance_blogging_scripts' );

/*Dropdown sanitization*/
function advance_blogging_sanitize_dropdown_pages( $page_id, $setting ) {
  // Ensure $input is an absolute integer.
  $page_id = absint( $page_id );
  // If $page_id is an ID of a published page, return it; otherwise, return the default.
  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

/*radio button sanitization*/
function advance_blogging_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'advance_blogging_loop_columns');
if (!function_exists('advance_blogging_loop_columns')) {
	function advance_blogging_loop_columns() {
		$columns = get_theme_mod( 'advance_blogging_products_per_row', 3 );
		return $columns; // 3 products per row
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'advance_blogging_shop_per_page', 9 );
function advance_blogging_shop_per_page( $cols ) {
  	$cols = get_theme_mod( 'advance_blogging_product_per_page', 9 );
	return $cols;
}

/* Excerpt Limit Begin */
function advance_blogging_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

// URL DEFINES
define('ADVANCE_BLOGGING_SITE_URL',__('https://www.themescaliber.com/themes/free-blog-wordpress-theme','advance-blogging'));

function advance_blogging_credit_link() {
    echo "<a href=".esc_url(ADVANCE_BLOGGING_SITE_URL)." target='_blank'>".esc_html__('Blogging WordPress Theme','advance-blogging')."</a>";
}

function advance_blogging_sanitize_checkbox( $input ) {
	// Boolean check 
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

function advance_blogging_sanitize_float( $input ) {
    return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}

/** Posts navigation. */
if ( ! function_exists( 'advance_blogging_post_navigation' ) ) {
	function advance_blogging_post_navigation() {
		$advance_blogging_pagination_type = get_theme_mod( 'advance_blogging_post_navigation_type', 'numbers' );
		if ( $advance_blogging_pagination_type == 'numbers' ) {
			the_posts_pagination();
		} else {
			the_posts_navigation( array(
	            'prev_text'          => __( 'Previous page', 'advance-blogging' ),
	            'next_text'          => __( 'Next page', 'advance-blogging' ),
	            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'advance-blogging' ) . ' </span>',
	        ) );
		}
	}
}

/* Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';

/* Implement the Custom Header feature. */
require get_template_directory() . '/inc/custom-header.php';

/* Customizer additions. */
require get_template_directory() . '/inc/customizer.php';