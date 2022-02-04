<?php
/**
 * Template Name: Home
 *
 * The template used for displaying custom home page section like hero image, service, call to action, blog section etc. 
 *
 * @package Elixar
 */ ?>

<?php
$elixar_enabled  = intval( get_theme_mod( 'elixar_frontpage_enable', 1 ) );
if ( $elixar_enabled == 1 ) {
	get_header();
	do_action( 'elixar_frontpage_before_section_parts' );
	if ( ! has_action( 'elixar_frontpage_section_parts' ) ) {
		$elixar_sections = apply_filters( 'elixar_frontpage_sections_order', json_decode( get_theme_mod('elixar_home_reorder', json_encode(array('service', 'extra', 'callout', 'blog')))),true );
		foreach ( $elixar_sections as $elixar_section ) {
			elixar_load_section( $elixar_section );
		}
	} else {
		do_action( 'elixar_frontpage_section_parts' );
	}
	do_action( 'elixar_frontpage_after_section_parts' );
	get_footer();

} else {
	if(is_page()) {
		get_template_part('page');
	} else {
		get_template_part('index');
	}
} ?>