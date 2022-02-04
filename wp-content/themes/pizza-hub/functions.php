<?php

add_action( 'wp_enqueue_scripts', 'pizza_hub_chld_thm_parent_css' );
function pizza_hub_chld_thm_parent_css() {

    wp_enqueue_style( 
    	'pizza_hub_chld_css', 
    	trailingslashit( get_template_directory_uri() ) . 'style.css', 
    	array( 
    		'bootstrap',
    		'font-awesome-5',
    		'bizberg-main',
    		'bizberg-component',
    		'bizberg-style2',
    		'bizberg-responsive' 
    	) 
    );

}

/**
* Change the theme color
*/

add_filter( 'bizberg_theme_color', 'pizza_hub_change_theme_color' );
add_filter( 'bizberg_header_menu_color_hover_sticky_menu', 'pizza_hub_change_theme_color' );
add_filter( 'bizberg_header_button_color_sticky_menu', 'pizza_hub_change_theme_color' );
add_filter( 'bizberg_header_button_color_hover_sticky_menu', 'pizza_hub_change_theme_color' );
function pizza_hub_change_theme_color(){
	return '#bb9f5d';
}

add_filter( 'bizberg_header_button_border_color', 'pizza_hub_btn_border_color' );
add_filter( 'bizberg_header_button_border_color_sticky_menu', 'pizza_hub_btn_border_color' );
function pizza_hub_btn_border_color(){
    return '#3f2d02';
}

/**
* Change the header menu color hover
*/

add_filter( 'bizberg_header_menu_color_hover', 'pizza_hub_header_menu_color_hover' );
function pizza_hub_header_menu_color_hover(){
	return '#bb9f5d';
}

/**
* Change the button color of header
*/

add_filter( 'bizberg_header_button_color', 'pizza_hub_header_button_color' );
function pizza_hub_header_button_color(){
	return '#bb9f5d';
}

/**
* Change the button hover color of header
*/

add_filter( 'bizberg_header_button_color_hover', 'pizza_hub_header_button_color_hover' );
function pizza_hub_header_button_color_hover(){
	return '#6c5113';
}

add_filter( 'bizberg_slider_title_box_highlight_color', function(){
    return '#bb9f5d';
});

add_filter( 'bizberg_slider_arrow_background_color', function(){
    return '#bb9f5d';
});

add_filter( 'bizberg_slider_dot_active_color', function(){
    return '#bb9f5d';
});

add_filter( 'bizberg_slider_gradient_primary_color', function(){
    return '#bb9f5d';
});

add_filter( 'bizberg_read_more_background_color', function(){
    return '#bb9f5d';
});

add_filter( 'bizberg_read_more_background_color_2', function(){
    return '#bb9f5d';
});

add_filter( 'bizberg_link_color', function(){
    return '#bb9f5d';
});

add_filter( 'bizberg_link_color_hover', function(){
    return '#bb9f5d';
});

add_filter( 'bizberg_blog_listing_pagination_active_hover_color', function(){
    return '#bb9f5d';
});

add_filter( 'bizberg_sidebar_widget_link_color_hover', function(){
    return '#bb9f5d';
});

add_filter( 'bizberg_sidebar_widget_title_color', function(){
    return '#bb9f5d';
});

add_filter( 'bizberg_footer_social_icon_background', function(){
    return '#bb9f5d';
});

add_filter( 'bizberg_footer_social_icon_color', function(){
    return '#fff';
});