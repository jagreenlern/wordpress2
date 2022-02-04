<?php
/**
 * demo import
 *
 * @package corpobrand
 */

/**
 * Imports predefine demos.
 * @return [type] [description]
 */
function corpobrand_intro_text( $default_text ) {
    $default_text .= sprintf( '<p class="about-description">%1$s <a href="%2$s">%3$s</a></p>', esc_html__( 'Demo content files for CorpoBrand Theme.', 'corpobrand' ),
    esc_url( 'https://drive.google.com/open?id=1r1sxGsRTrGf48XawrWtxr-wm7q5YS5qs' ), esc_html__( 'Click here to download Demo Data', 'corpobrand' ) );

    return $default_text;
}
add_filter( 'pt-ocdi/plugin_intro_text', 'corpobrand_intro_text' );
