<?php
//=============================================================
// Color reset
//=============================================================
if ( ! function_exists( 'medical_hub_reset_colors' ) ) :

    function medical_hub_reset_colors($data) {

        set_theme_mod('medical_hub_top_header_background_color','#0e0f10');

        set_theme_mod('medical_hub_top_footer_background_color','#1A1E21');

        set_theme_mod('medical_hub_bottom_footer_background_color','#444444');

        set_theme_mod('medical_hub_primary_color','#ef4a2b');

        set_theme_mod('medical_hub_color_reset_option','do-not-reset');

    }

endif;
add_action( 'medical_hub_colors_reset','medical_hub_reset_colors', 10 );

