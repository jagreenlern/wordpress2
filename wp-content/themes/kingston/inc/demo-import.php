<?php
/**
 * demo import
 *
 * @package kingston
 */

/**
 * Imports predefine demos.
 * @return [type] [description]
 */
function kingston_intro_text( $default_text ) {
    $default_text .= sprintf( '<p class="about-description">%1$s <a href="%2$s">%3$s</a></p>', esc_html__( 'Demo content files for Kingston Theme.', 'kingston' ),
    esc_url( 'https://drive.google.com/open?id=1IKuikycl60F9olmNEk8ilwmPO_7w6PdC' ), esc_html__( 'Click here to download Demo Data', 'kingston' ) );

    return $default_text;
}
add_filter( 'pt-ocdi/plugin_intro_text', 'kingston_intro_text' );
