<?php
/**
 * Recommended plugins
 *
 * @package bizblack
 */

if ( ! function_exists( 'bizblack_recommended_plugins' ) ) :

    /**
     * Recommend plugins.
     *
     * @since 1.0.0
     */
    function bizblack_recommended_plugins() {
		$plugins = array(
            array(
                'name'     => esc_html__( 'One Click Demo Import', 'bizblack' ),
                'slug'     => 'one-click-demo-import',
                'required' => false,
            ),
			array(
                'name'     => esc_html__( 'Image Slider', 'bizblack' ),
                'slug'     => 'image-slider-slideshow',
                'required' => false,
            )
        );
		 
		 
        tgmpa( $plugins );

    }

endif;

add_action( 'tgmpa_register', 'bizblack_recommended_plugins' );
