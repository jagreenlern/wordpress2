<?php
/**
 * Active callback functions.
 *
 * @package Meilleur Business
 */

function meilleur_business_additional_info_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_additional_info_section]' )->value() == true ) {
        return false;
    }else{
        return true;
    }
}

function meilleur_business_additional_info_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[ad_content_type]' )->value();
    return ( meilleur_business_additional_info_active( $control ) && ( 'ad_page' == $content_type ) );
}

function meilleur_business_testimonial_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_testimonial_slider]' )->value() == true ) {
        return false;
    }else{
        return true;
    }
}

function meilleur_business_testimonial_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[tl_content_type]' )->value();
    return ( meilleur_business_testimonial_active( $control ) && ( 'tl_page' == $content_type ) );
}

function meilleur_business_featured_plans_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_featured_plans_section]' )->value() == true ) {
        return false;
    }else{
        return true;
    }
}

function meilleur_business_featured_plans_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[cs_content_type]' )->value();
    return ( meilleur_business_featured_plans_active( $control ) && ( 'cs_page' == $content_type ) );
}

function meilleur_business_featured_courses_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_featured_courses_section]' )->value() == true ) {
        return false;
    }else{
        return true;
    }
}

function meilleur_business_featured_courses_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[ss_content_type]' )->value();
    return ( meilleur_business_featured_courses_active( $control ) && ( 'ss_page' == $content_type ) );
}

function meilleur_business_teams_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_team_section]' )->value() == true ) {
        return false;
    }else{
        return true;
    }
}

function meilleur_business_teams_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[ts_content_type]' )->value();
    return ( meilleur_business_teams_active( $control ) && ( 'ts_page' == $content_type ) );
}

function meilleur_business_gallery_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_gallery_section]' )->value() == true ) {
        return false;
    }else{
        return true;
    }
}

function meilleur_business_gallery_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[gy_content_type]' )->value();
    return ( meilleur_business_gallery_active( $control ) && ( 'gy_page' == $content_type ) );
}

function meilleur_business_slider_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_featured_slider]' )->value() == true ) {
        return false;
    }else{
        return true;
    }
}

function meilleur_business_slider_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[sr_content_type]' )->value();
    return ( meilleur_business_slider_active( $control ) && ( 'sr_page' == $content_type ) );
}

function meilleur_business_cta_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_cta_section]' )->value() == true ) {
        return false;
    }else{
        return true;
    }
}

function meilleur_business_blog_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_blog_section]' )->value() == true ) {
        return false;
    }else{
        return true;
    }
}

/**
 * Active Callback for top bar section
 */
function meilleur_business_contact_info_ac( $control ) {

    $show_contact_info = $control->manager->get_setting( 'theme_options[show_header_contact_info]')->value();
    $control_id        = $control->id;
         
    if ( $control_id == 'theme_options[header_location]' && $show_contact_info ) return true;
    if ( $control_id == 'theme_options[header_email]' && $show_contact_info ) return true;
    if ( $control_id == 'theme_options[header_phone]' && $show_contact_info ) return true;

    return false;
}

function meilleur_business_social_links_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[show_header_social_links]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}