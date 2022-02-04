<?php
/*
* Template Name: FrontPage
*/	
get_header();	

get_template_part( 'sections/section','banner' );
get_template_part( 'sections/section','counter' );
get_template_part( 'sections/section','service' );
get_template_part( 'sections/section','courses' );
get_template_part( 'sections/section','registration' );
get_template_part( 'sections/section','team' );
get_template_part( 'sections/section','testimonials' );
get_template_part( 'sections/section','events' );
get_template_part( 'sections/section','become' );
get_template_part( 'sections/section','blog' );
get_template_part( 'sections/section','cta' );

get_footer(); 
?>