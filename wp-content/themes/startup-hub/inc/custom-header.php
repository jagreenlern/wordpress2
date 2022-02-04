<?php
/**
 * Sample implementation of the Custom Header feature.
 *
 * You can add an optional custom header image to header.php like so ...
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package Startup hub
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses startup_hub_header_style()
 */
function startup_hub_custom_header_setup() {
	add_theme_support( 'custom-logo', array(
		'width'       => 155,
		'height'      => 44,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
		) );
	add_theme_support( 'custom-header', array(
		'default-image'			=> '%s/images/header-default.png',
		'default-text-color'	=> 'fff',
		'width'					=> 1400,
		'height'				=> 500,
		'flex-width'			=> true,
		'flex-height'			=> true,
		'wp-head-callback'		=> 'startup_hub_header_style',
		) );
	register_default_headers( array(
		'header-bg' => array(
			'url'           => '%s/images/header-default.png',
			'thumbnail_url' => '%s/images/header_default_thumbail.png',
			'description'   => _x( 'Default', 'Default header image', 'startup-hub' )
			),	
		) );

}
add_action( 'after_setup_theme', 'startup_hub_custom_header_setup' );

if ( ! function_exists( 'startup_hub_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog.
 *
 * @see startup_hub_custom_header_setup().
 */
function startup_hub_header_style() {
	$header_text_color = get_header_textcolor();
	$header_image = get_header_image();

	// If we get this far, we have custom styles. Let's do this.
	?>
	<style type="text/css">
		#site-header {
			background-image: url(<?php header_image(); ?>);
		    background-size: cover;
		}


	<?php if ( ! display_header_text() ) : ?>
	.site-title,
	.site-description {
		position: absolute;
		clip: rect(1px, 1px, 1px, 1px);
	}
	<?php else : ?>
	.site-branding .site-title,
	.site-branding .site-description {
		color: #<?php echo esc_attr( $header_text_color ); ?>;
	}
	.site-branding .site-title:after {
		background: #<?php echo esc_attr( $header_text_color ); ?>;
	}
	<?php endif; ?>
	</style>
	<?php
}
endif;
