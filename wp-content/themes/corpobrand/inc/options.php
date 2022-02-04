<?php
/**
 * Options functions
 *
 * @package corpobrand
 */

if ( ! function_exists( 'corpobrand_show_options' ) ) :
    /**
     * List of custom Switch Control options
     * @return array List of switch control options.
     */
    function corpobrand_show_options() {
        $arr = array(
            'on'        => esc_html__( 'Yes', 'corpobrand' ),
            'off'       => esc_html__( 'No', 'corpobrand' )
        );
        return apply_filters( 'corpobrand_show_options', $arr );
    }
endif;

if ( ! function_exists( 'corpobrand_page_choices' ) ) :
    /**
     * List of pages for page choices.
     * @return Array Array of page ids and name.
     */
    function corpobrand_page_choices() {
        $pages = get_pages();
        $choices = array();
        $choices[0] = esc_html__( 'None', 'corpobrand' );
        foreach ( $pages as $page ) {
            $choices[ $page->ID ] = $page->post_title;
        }
        return $choices;
    }
endif;

if ( ! function_exists( 'corpobrand_post_choices' ) ) :
    /**
     * List of posts for post choices.
     * @return Array Array of post ids and name.
     */
    function corpobrand_post_choices() {
        $posts = get_posts( array( 'numberposts' => -1 ) );
        $choices = array();
        $choices[0] = esc_html__( 'None', 'corpobrand' );
        foreach ( $posts as $post ) {
            $choices[ $post->ID ] = $post->post_title;
        }
        return $choices;
    }
endif;

if ( ! function_exists( 'corpobrand_category_choices' ) ) :
    /**
     * List of categories for category choices.
     * @return Array Array of category ids and name.
     */
    function corpobrand_category_choices() {
        $args = array(
                'type'          => 'post',
                'child_of'      => 0,
                'parent'        => '',
                'orderby'       => 'name',
                'order'         => 'ASC',
                'hide_empty'    => 0,
                'hierarchical'  => 0,
                'taxonomy'      => 'category',
            );
        $categories = get_categories( $args );
        $choices = array();
        $choices[0] = esc_html__( 'None', 'corpobrand' );
        foreach ( $categories as $category ) {
            $choices[ $category->term_id ] = $category->name;
        }
        return $choices;
    }
endif;

if ( ! function_exists( 'corpobrand_site_layout' ) ) :
    /**
     * site layout
     * @return array site layout
     */
    function corpobrand_site_layout() {
        $corpobrand_site_layout = array(
            'full'    => get_template_directory_uri() . '/assets/uploads/full.png',
            'boxed'   => get_template_directory_uri() . '/assets/uploads/boxed.png',
        );

        $output = apply_filters( 'corpobrand_site_layout', $corpobrand_site_layout );

        return $output;
    }
endif;

if ( ! function_exists( 'corpobrand_sidebar_position' ) ) :
    /**
     * Sidebar position
     * @return array Sidebar position
     */
    function corpobrand_sidebar_position() {
        $corpobrand_sidebar_position = array(
            'right-sidebar' => get_template_directory_uri() . '/assets/uploads/right.png',
            'no-sidebar'    => get_template_directory_uri() . '/assets/uploads/full.png',
        );

        $output = apply_filters( 'corpobrand_sidebar_position', $corpobrand_sidebar_position );

        return $output;
    }
endif;

if ( ! function_exists( 'corpobrand_selected_sidebar' ) ) :
    /**
     * Sidebars options
     * @return array Sidbar positions
     */
    function corpobrand_selected_sidebar() {
        $corpobrand_selected_sidebar = array(
            'sidebar-1'             => esc_html__( 'Default Sidebar', 'corpobrand' ),
            'optional-sidebar'      => esc_html__( 'Optional Sidebar 1', 'corpobrand' ),
        );

        $output = apply_filters( 'corpobrand_selected_sidebar', $corpobrand_selected_sidebar );

        return $output;
    }
endif;
