<?php
/**
 * Partials for Selective Refresh
 *
 * @package Eduline
 */

if( ! function_exists( 'eduline_banner_tag_text' ) ) :
/**
 * Prints Popular Courses Heading
*/
function eduline_banner_tag_text(){
    return get_theme_mod( 'eduline_banner_tag_text', __( 'Accelerate your future', 'eduline' ) );
}
endif;