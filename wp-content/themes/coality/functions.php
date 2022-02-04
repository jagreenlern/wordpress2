<?php
/**
 * coality functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Coality
 */
require_once( trailingslashit( get_stylesheet_directory() ) . 'customizer-button/class-customize.php' );
function coality_enqueue_theme_skin() {
	$minified_assests = intval( get_theme_mod( 'elixar_minified_assests', 0 ) );
	$min = ''; 
	if ( $minified_assests == 1 ) {
		$min = '.min';
	}

	$parent_style = 'elixar-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css', array( 'bootstrap' ) );
	
    wp_enqueue_style( 'coality',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
	wp_enqueue_style( 'elixar-theme-skin-red', get_stylesheet_directory_uri(). '/css/skins/coality-blue'.$min.'.css',array('coality') );
		
	$coality_is_rtl_enable = intval( get_theme_mod( 'elixar_is_rtl_enable', 0 ) );
	if( $coality_is_rtl_enable == 1 ) {
		wp_enqueue_style( 'coality-style-main-rtl', get_stylesheet_directory_uri().'/css/coality-rtl'.$min.'.css' );
	}
	wp_enqueue_script( 'coality-theme', get_stylesheet_directory_uri() . '/js/coality-theme.js', array('jquery') );
}
add_action( 'wp_enqueue_scripts', 'coality_enqueue_theme_skin');
function coality_deenqueue_parent_theme_skin() {
	/* Deenqueu parent styles */
	//wp_dequeue_style('elixar-theme-skin-red');
	wp_dequeue_style('elixar-style-main-rtl');
	wp_dequeue_script('elixar-theme');
}
add_action( 'wp_enqueue_scripts', 'coality_deenqueue_parent_theme_skin', 11);

add_action( 'customize_register', 'coality_customizer', 20 );
function coality_customizer( $wp_customize ) {
	$wp_customize->get_setting( 'elixar_menubar_bg_color' )->default = '#ffffff';
	$wp_customize->get_setting( 'elixar_menu_item_color' )->default = '#2196f3';
	$wp_customize->remove_control('elixar_service_icon_size');
}

function coality_theme_setup()
{
	load_child_theme_textdomain('coality', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'coality_theme_setup', 20);


if ( ! function_exists( 'coality_get_section_services_data' ) ) {
    /**
     * Get services data
     * @return array
     */
    function coality_get_section_services_data()
    {
        $services = get_theme_mod('coality_services', array(
			array(
				'icon_type' => 'icon',
				'icon' => 'fa fa-paper-plane',
				'image' => '',
				'content_page' => 1,
				'enable_link' => '',
			),
			array(
				'icon_type' => 'icon',
				'icon' => 'fas fa-chart-line',
				'image' => '',
				'content_page' => 1,
				'enable_link' => '',
			),
			array(
				'icon_type' => 'icon',
				'icon' => 'fa fa-shopping-bag',
				'image' => '',
				'content_page' => 1,
				'enable_link' => '',
			),
		));
        if (is_string($services)) {
            $services = json_decode($services, true);
        }
        $coality_page_ids = array();
        if (!empty($services) && is_array($services)) {
            foreach ($services as $k => $v) {
                if (isset ($v['content_page'])) {
                    $v['content_page'] = absint($v['content_page']);
                    if ($v['content_page'] > 0) {
                        $coality_page_ids[] = wp_parse_args($v, array(
                            'icon_type' => 'icon',
                            'image' => '',
                            'icon' => '',
							'content_page' => 1,
                            'enable_link' => 0,
							'link' => 0,
                        ));
                    }
                }
            }
        }
        return $coality_page_ids;
    }
}


if ( ! function_exists( 'coality_custom_inline_style' ) ) {
    /**
     * Add custom css to header
     *
     * @change 1.1.5
     */
	function coality_custom_inline_style( ) {
            ob_start();
			// Hero Section
			$coality_hero_page = get_theme_mod('coality_hero_page');
			if ( !empty( $coality_hero_page ) && $coality_hero_page !=0 ) {
				$coality_hero_content = get_post($coality_hero_page);
				$coality_hero_bgurl = wp_get_attachment_url( get_post_thumbnail_id($coality_hero_page) );
			} else {
				$coality_hero_bgurl = get_stylesheet_directory_uri() . '/images/hero.jpg';
			}
			if( ! empty ( $coality_hero_bgurl ) ) { ?>
			.hero-section-wrapper {
				background: linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.3)) repeat scroll 0% 0%, transparent url('<?php echo esc_url( $coality_hero_bgurl );?>') repeat fixed center center;
			}
			<?php }
			
			$coality_cta_page = get_theme_mod('coality_cta_page');
			if ( !empty($coality_cta_page) && $coality_cta_page!=0) {
				$coality_cta_content = get_post($coality_cta_page);
				$coality_cta_bgurl = wp_get_attachment_url( get_post_thumbnail_id($coality_cta_page) );
			} else {
				$coality_cta_bgurl = get_stylesheet_directory_uri() . '/images/cta.jpg';
			}
			if( ! empty ( $coality_cta_bgurl ) ) { ?>
			.section-cta {
				background: linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.3)) repeat scroll 0% 0%, transparent url('<?php echo esc_url( $coality_cta_bgurl );?>') repeat fixed center center;
			}
			<?php } ?>
        <?php $coality_css = ob_get_clean();
        if ( trim( $coality_css ) == "" ) {
            return ;
        }
        $coality_css = preg_replace(
            array(
                // Remove comment(s)
                '#("(?:[^"\\\]++|\\\.)*+"|\'(?:[^\'\\\\]++|\\\.)*+\')|\/\*(?!\!)(?>.*?\*\/)|^\s*|\s*$#s',
                // Remove unused white-space(s)
                '#("(?:[^"\\\]++|\\\.)*+"|\'(?:[^\'\\\\]++|\\\.)*+\'|\/\*(?>.*?\*\/))|\s*+;\s*+(})\s*+|\s*+([*$~^|]?+=|[{};,>~+]|\s*+-(?![0-9\.])|!important\b)\s*+|([[(:])\s++|\s++([])])|\s++(:)\s*+(?!(?>[^{}"\']++|"(?:[^"\\\]++|\\\.)*+"|\'(?:[^\'\\\\]++|\\\.)*+\')*+{)|^\s++|\s++\z|(\s)\s+#si',
            ),
            array(
                '$1',
                '$1$2$3$4$5$6$7',
            ),
            $coality_css
        );
        if ( ! function_exists( 'coality_wp_get_custom_css' ) ) {  // Back-compat for WordPress < 4.7.
            $custom = get_option('coality_custom_css');
            if ($custom) {
                $coality_css .= "\n/* --- Begin custom CSS --- */\n" . $custom . "\n/* --- End custom CSS --- */\n";
            }
        }
       return apply_filters( 'coality_custom_css', $coality_css ) ;
	}
}
if ( function_exists( 'coality_wp_update_custom_css_post' ) ) {
    // Migrate any existing theme CSS to the core option added in WordPress 4.7.
    $coality_css = get_option( 'coality_custom_css' );
    if ( $coality_css ) {
        $coality_core_css = coality_wp_get_custom_css(); // Preserve any CSS already added to the core option.
        $coality_return = coality_wp_update_custom_css_post( $coality_core_css ."\n". $coality_css );
        if ( ! is_wp_error( $coality_return ) ) {
            // Remove the old theme_mod, so that the CSS is stored in only one place moving forward.
            delete_option( 'coality_custom_css' );
        }
    }
}

add_filter('elixar_load_customizer_demo_file','coality_load_customizer_demo_file');
function coality_load_customizer_demo_file(){
	return 'http://demo.webhuntinfotech.com/documentation/wp-content/uploads/2019/07/coality-demo-importer-files/coality-export.dat';
}

/*add_filter('elixar_service_control_tabs','coality_add_child_service_control',1,10);
function coality_add_child_service_control($services){
	$services['tabs']['service_content']['controls'][2] = 'coality_home_service_style';
	return $services;
}*/