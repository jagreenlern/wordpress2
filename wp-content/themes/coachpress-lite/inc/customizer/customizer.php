<?php
/**
 * CoachPress Lite Theme Customizer
 *
 * @package CoachPress_Lite
 */

/**
 * Requiring customizer panels & sections
*/
$coachpress_lite_sections = array( 'info', 'site', 'appearance', 'layout', 'home', 'general', 'elementor', 'footer' );

foreach( $coachpress_lite_sections as $s ){
    require get_template_directory() . '/inc/customizer/' . $s . '.php';
}

/**
 * Sanitization Functions
*/
require get_template_directory() . '/inc/customizer/sanitization-functions.php';

/**
 * Active Callbacks
*/
require get_template_directory() . '/inc/customizer/active-callback.php';

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function coachpress_lite_customize_preview_js() {
	wp_enqueue_script( 'coachpress-lite-customizer', get_template_directory_uri() . '/inc/js/customizer.js', array( 'customize-preview' ), COACHPRESS_LITE_THEME_VERSION, true );
}
add_action( 'customize_preview_init', 'coachpress_lite_customize_preview_js' );

function coachpress_lite_customize_script(){
    $array = array(
        'home'    => get_permalink( get_option( 'page_on_front' ) ),
    );
    wp_enqueue_style( 'coachpress-lite-customize', get_template_directory_uri() . '/inc/css/customize.css', array(), COACHPRESS_LITE_THEME_VERSION );
    wp_enqueue_script( 'coachpress-lite-customize', get_template_directory_uri() . '/inc/js/customize.js', array( 'jquery', 'customize-controls' ), COACHPRESS_LITE_THEME_VERSION, true );
    wp_localize_script( 'coachpress-lite-customize', 'coachpress_lite_cdata', $array );

    wp_localize_script( 'coachpress-lite-repeater', 'coachpress_lite_customize',
        array(
            'nonce' => wp_create_nonce( 'coachpress_lite_customize_nonce' )
        )
    );
}
add_action( 'customize_controls_enqueue_scripts', 'coachpress_lite_customize_script' );

/*
 * Notifications in customizer
 */
require get_template_directory() . '/inc/customizer-plugin-recommend/customizer-notice/class-customizer-notice.php';

require get_template_directory() . '/inc/customizer-plugin-recommend/plugin-install/class-plugin-install-helper.php';

require get_template_directory() . '/inc/customizer-plugin-recommend/plugin-install/class-plugin-recommend.php';

$config_customizer = array(
	'recommended_plugins' => array(
		//change the slug for respective plugin recomendation
        'blossomthemes-toolkit' => array(
			'recommended' => true,
			'description' => sprintf(
				/* translators: %s: plugin name */
				esc_html__( 'If you want to take full advantage of the features this theme has to offer, please install and activate %s plugin.', 'coachpress-lite' ), '<strong>BlossomThemes Toolkit</strong>'
			),
		),
	),
	'recommended_plugins_title' => esc_html__( 'Recommended Plugin', 'coachpress-lite' ),
	'install_button_label'      => esc_html__( 'Install and Activate', 'coachpress-lite' ),
	'activate_button_label'     => esc_html__( 'Activate', 'coachpress-lite' ),
	'deactivate_button_label'   => esc_html__( 'Deactivate', 'coachpress-lite' ),
);
CoachPress_Lite_Customizer_Notice::init( apply_filters( 'coachpress_lite_customizer_notice_array', $config_customizer ) );