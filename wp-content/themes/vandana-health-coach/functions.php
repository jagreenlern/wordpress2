<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

/**
 * After setup theme hook
 */
function vandana_health_coach_theme_setup(){
    /*
     * Make child theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    load_child_theme_textdomain( 'vandana-health-coach', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'vandana_health_coach_theme_setup' );

function vandana_health_coach_styles() {
    $my_theme = wp_get_theme();
	$version = $my_theme['Version'];

    if( vandana_lite_is_woocommerce_activated() ){
        $dependencies = array( 'vandana-lite-woocommerce', 'owl-carousel', 'vandana-lite-google-fonts' );  
    }else{
        $dependencies = array( 'owl-carousel', 'vandana-lite-google-fonts' );
    }

    wp_enqueue_style( 'vandana-health-coach-parent-style', get_template_directory_uri() . '/style.css', $dependencies ); 

    wp_enqueue_script( 'perfect-scrollbar', get_stylesheet_directory_uri() . '/js/perfect-scrollbar.js', array( 'jquery' ), '1.5.0', true );
    
    wp_enqueue_script( 'vandana-health-coach', get_stylesheet_directory_uri() . '/js/custom.js', array( 'jquery', 'owl-carousel' ), $version, true );
    
    $array = array( 
        'rtl'           => is_rtl(),
    ); 
    wp_localize_script( 'vandana-health-coach', 'vandana_health_coach_data', $array );   
}
add_action( 'wp_enqueue_scripts', 'vandana_health_coach_styles', 10 );

//Remove a function from the parent theme
function vandana_health_coach_remove_parent_filters(){ //Have to do it after theme setup, because child theme functions are loaded first
    remove_action( 'customize_register', 'vandana_lite_customizer_theme_info' );
    remove_action( 'customize_register', 'vandana_lite_customize_register_appearance' );
    remove_action( 'wp_head', 'vandana_lite_dynamic_css', 99 );
}
add_action( 'init', 'vandana_health_coach_remove_parent_filters' );

function vandana_health_coach_customize_register( $wp_customize ) {
    
    $wp_customize->add_section( 'theme_info', array(
        'title'       => __( 'Demo & Documentation' , 'vandana-health-coach' ),
        'priority'    => 6,
    ) );
    
    /** Important Links */
    $wp_customize->add_setting( 'theme_info_theme',
        array(
            'default' => '',
            'sanitize_callback' => 'wp_kses_post',
        )
    );
    
    $theme_info = '<p>';
    $theme_info .= sprintf( __( 'Demo Link: %1$sClick here.%2$s', 'vandana-health-coach' ),  '<a href="' . esc_url( 'https://blossomthemes.com/theme-demo/?theme=vandana-health-coach' ) . '" target="_blank">', '</a>' ); 
    $theme_info .= '</p><p>';
    $theme_info .= sprintf( __( 'Documentation Link: %1$sClick here.%2$s', 'vandana-health-coach' ),  '<a href="' . esc_url( 'https://docs.blossomthemes.com/vandana-health-coach/' ) . '" target="_blank">', '</a>' ); 
    $theme_info .= '</p>';

    $wp_customize->add_control( new Vandana_Lite_Note_Control( $wp_customize,
        'theme_info_theme', 
            array(
                'section'     => 'theme_info',
                'description' => $theme_info
            )
        )
    );

    /** Appearance Settings */
    $wp_customize->add_panel( 
        'appearance_settings',
         array(
            'priority'    => 25,
            'capability'  => 'edit_theme_options',
            'title'       => __( 'Appearance Settings', 'vandana-health-coach' ),
            'description' => __( 'Customize Color, Typography & Background Image', 'vandana-health-coach' ),
        ) 
    );

    /** Typography Settings */
    $wp_customize->add_section(
        'typography_settings',
        array(
            'title'    => __( 'Typography Settings', 'vandana-health-coach' ),
            'priority' => 20,
            'panel'    => 'appearance_settings'
        )
    );
    
    /** Primary Font */
    $wp_customize->add_setting(
        'primary_font',
        array(
            'default'           => 'Bitter',
            'sanitize_callback' => 'vandana_lite_sanitize_select'
        )
    );

    $wp_customize->add_control(
        new Vandana_Lite_Select_Control(
            $wp_customize,
            'primary_font',
            array(
                'label'       => __( 'Primary Font', 'vandana-health-coach' ),
                'description' => __( 'Primary font of the site.', 'vandana-health-coach' ),
                'section'     => 'typography_settings',
                'choices'     => vandana_lite_get_all_fonts(),   
            )
        )
    );
    
    /** Secondary Font */
    $wp_customize->add_setting(
        'secondary_font',
        array(
            'default'           => 'Mate',
            'sanitize_callback' => 'vandana_lite_sanitize_select'
        )
    );

    $wp_customize->add_control(
        new Vandana_Lite_Select_Control(
            $wp_customize,
            'secondary_font',
            array(
                'label'       => __( 'Secondary Font', 'vandana-health-coach' ),
                'description' => __( 'Secondary font of the site.', 'vandana-health-coach' ),
                'section'     => 'typography_settings',
                'choices'     => vandana_lite_get_all_fonts(),   
            )
        )
    );  

    /** Font Size*/
    $wp_customize->add_setting( 
        'font_size', 
        array(
            'default'           => 17,
            'sanitize_callback' => 'vandana_lite_sanitize_number_absint'
        ) 
    );
    
    $wp_customize->add_control(
        new Vandana_Lite_Slider_Control( 
            $wp_customize,
            'font_size',
            array(
                'section'     => 'typography_settings',
                'label'       => __( 'Font Size', 'vandana-health-coach' ),
                'description' => __( 'Change the font size of your site.', 'vandana-health-coach' ),
                'choices'     => array(
                    'min'   => 10,
                    'max'   => 50,
                    'step'  => 1,
                )                 
            )
        )
    );

    /** Move Background Image section to appearance panel */
    $wp_customize->get_section( 'colors' )->panel              = 'appearance_settings';
    $wp_customize->get_section( 'colors' )->priority           = 10;
    $wp_customize->get_section( 'background_image' )->panel    = 'appearance_settings';
    $wp_customize->get_section( 'background_image' )->priority = 15;

    /** Header Layout */
    $wp_customize->add_section(
        'header_layout',
        array(
            'title'    => __( 'Header Layout', 'vandana-health-coach' ),
            'panel'    => 'layout_settings',
            'priority' => 10,
        )
    );
    
    $wp_customize->add_setting( 
        'header_layout_option', 
        array(
            'default'           => 'two',
            'sanitize_callback' => 'vandana_lite_sanitize_radio'
        ) 
    );
    
    $wp_customize->add_control(
        new Vandana_Lite_Radio_Image_Control(
            $wp_customize,
            'header_layout_option',
            array(
                'section'     => 'header_layout',
                'label'       => __( 'Header Layout', 'vandana-health-coach' ),
                'description' => __( 'This is the layout for header.', 'vandana-health-coach' ),
                'choices'     => array(                 
                    'one'   => get_stylesheet_directory_uri() . '/images/header/one.jpg',
                    'two'   => get_stylesheet_directory_uri() . '/images/header/two.jpg',
                )
            )
        )
    );

    /** Phone */
    $wp_customize->add_setting(
        'phone',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field' 
        )
    );
    
    $wp_customize->add_control(
        'phone',
        array(
            'type'    => 'text',
            'section' => 'header_settings',
            'label'   => __( 'Phone', 'vandana-health-coach' ),
        )
    );
    
    /** Email */
    $wp_customize->add_setting(
        'email',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_email' 
        )
    );
    
    $wp_customize->add_control(
        'email',
        array(
            'type'    => 'text',
            'section' => 'header_settings',
            'label'   => __( 'Email', 'vandana-health-coach' ),
        )
    );
}
add_action( 'customize_register', 'vandana_health_coach_customize_register', 99 );

/**
 * Header Contact
*/
function vandana_health_coach_header_contact( $echo = true ){ 
    $phone       = get_theme_mod( 'phone' );
    $email       = get_theme_mod( 'email' );
    
    if( $echo && ( !empty( $phone ) || !empty( $email ) ) ) :
        if( !empty( $phone ) ) : ?>
            <div class="header-block">
                <i class="fas fa-phone"></i>
                <?php if( !empty( $phone ) ) echo '<a href="tel:' . preg_replace( '/[^\d+]/', '', $phone ) . '">' . esc_html( $phone ) . '</a>'; ?>
            </div>
        <?php endif; ?>

        <?php if( !empty( $email ) ) : ?>
            <div class="header-block">
                <i class="fas fa-envelope"></i>
                <?php if( !empty( $email ) ) echo '<a href="mailto:' . sanitize_email( $email ) . '">' . sanitize_email( $email ) . '</a>'; ?>
            </div>
        <?php endif;
    elseif( !empty( $phone ) || !empty( $email ) ) :
        return true;
    else :
        return false;
    endif;
}

/**
 * Header Start
*/
function vandana_lite_header(){ 
    
    $ed_cart   = get_theme_mod( 'ed_shopping_cart', true );
    $ed_search = get_theme_mod( 'ed_header_search', true ); 
    $header_layout = get_theme_mod( 'header_layout_option', 'two' ); 
    
    if( $header_layout == 'one' ) { ?>

        <header id="masthead" class="site-header style-one" itemscope itemtype="https://schema.org/WPHeader">
            <div class="header-t">
                <div class="container">
                    <?php vandana_lite_secondary_navigation(); ?>
                </div>
            </div>
            <div class="header-mid">
                <div class="container">
                    <div class="header-left">
                        <?php vandana_lite_social_links(); ?>
                    </div>
                    <?php vandana_lite_site_branding(); ?>
                    <div class="header-right">
                        <?php if( vandana_lite_is_woocommerce_activated() && $ed_cart ){
                            echo '<div class="header-cart">';
                            vandana_lite_wc_cart_count();
                            echo '</div>';
                        }
                        if( $ed_search ) vandana_lite_form_section(); 
                        ?>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <?php vandana_lite_primary_navigation(); ?>
                </div>
            </div>
        </header>
        <?php vandana_lite_mobile_header();
    }else{ ?>
        <header id="masthead" class="site-header style-two" itemscope itemtype="http://schema.org/WPHeader">
            <?php if( vandana_health_coach_header_contact( false ) || vandana_lite_social_links( false ) ) : ?>
                <div class="header-t">
                    <div class="container">
                        <?php if( vandana_health_coach_header_contact( false ) ) : ?>
                            <div class="header-left">
                                <?php vandana_health_coach_header_contact(); ?>
                            </div>
                        <?php endif; ?>
                        <?php if( vandana_lite_social_links( false ) ) : ?>
                            <div class="header-right">
                                <?php vandana_lite_social_links(); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
            <div class="header-mid">
                <div class="container">
                    <?php vandana_lite_site_branding(); ?>
                    <div class="header-right">
                        <?php 
                        if( $ed_search ) vandana_lite_form_section(); 
                        if( vandana_lite_is_woocommerce_activated() && $ed_cart ){
                            echo '<div class="header-cart">';
                            vandana_lite_wc_cart_count();
                            echo '</div>';
                        }
                        vandana_health_coach_secondary_navigation(); ?>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <?php vandana_lite_primary_navigation(); ?>
                </div>
            </div>
        </header>
        <?php vandana_lite_mobile_header();
    }
}

/**
 * Form Icon
*/
function vandana_lite_form_section(){ 
    $header_layout = get_theme_mod( 'header_layout_option', 'two' );?>
    <div class="header-search">
        <?php if( $header_layout == 'one' ) { ?>
        <button class="search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="22.691" height="21.932" viewBox="0 0 22.691 21.932">
                <g id="Group_258" data-name="Group 258" transform="matrix(0.966, -0.259, 0.259, 0.966, -1515.787, 248.902)">
                    <g id="Ellipse_9" data-name="Ellipse 9" transform="translate(1525.802 162.18) rotate(-30)" fill="none" stroke="#6a6a6a" stroke-width="2.5">
                        <circle cx="7.531" cy="7.531" r="7.531" stroke="none"/>
                        <circle cx="7.531" cy="7.531" r="6.281" fill="none"/>
                    </g>
                    <path id="Path_4339" data-name="Path 4339" d="M0,0V7" transform="translate(1540.052 170.724) rotate(-30)" fill="none" stroke="#6a6a6a" stroke-linecap="round" stroke-width="2.5"/>
                </g>
            </svg>
        </button>
        <div class="header-search-wrap search-modal cover-modal" data-modal-target-string=".search-modal">
            <div class="header-search-inner-wrap">
        <?php } ?>
                <?php get_search_form(); ?>
        <?php if( $header_layout == 'one' ) {?>
            <button class="close" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false"></button>
            </div>
        </div>
        <?php } ?>
    </div><!-- .header-search -->
    <?php
}

/**
 * Secondary Navigation
*/
function vandana_health_coach_secondary_navigation(){ 
    $header_layout = get_theme_mod( 'header_layout_option', 'two' );
    if( current_user_can( 'manage_options' ) || has_nav_menu( 'secondary' ) ) { ?>
        <nav class="secondary-menu">
            <button class="toggle-btn" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
                <span class="toggle-bar"></span>
                <span class="toggle-bar"></span>
                <span class="toggle-bar"></span>
            </button>
            <?php if( $header_layout == 'two' ) {?>
                <div class="menu-wrap secondary-menu-list menu-modal cover-modal" data-modal-target-string=".menu-modal">
                    <button class="close close-nav-toggle" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".menu-modal">
                        <span class="toggle-bar"></span>
                        <span class="toggle-bar"></span>
                    </button>
                    <div class="mobile-menu" aria-label="<?php esc_attr_e( 'Mobile', 'vandana-health-coach' ); ?>">
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'secondary',
                                'menu_id'        => 'secondary-menu',
                                'menu_class'     => 'nav-menu menu-modal',
                                'fallback_cb'    => 'vandana_lite_secondary_menu_fallback',
                            ) );
                        ?>
                    </div>
                </div> 
            <?php } ?>
        </nav>
        <?php
    }
}

/**
 * 
*/ 
function vandana_lite_fonts_url(){
    $fonts_url = '';
    
    $primary_font       = get_theme_mod( 'primary_font', 'Bitter' );
    $ig_primary_font    = vandana_lite_is_google_font( $primary_font );    
    $secondary_font     = get_theme_mod( 'secondary_font', 'Mate' );
    $ig_secondary_font  = vandana_lite_is_google_font( $secondary_font );    
    $site_title_font    = get_theme_mod( 'site_title_font', array( 'font-family'=>'Halant', 'variant'=>'700' ) );
    $ig_site_title_font = vandana_lite_is_google_font( $site_title_font['font-family'] );
        
    /* Translators: If there are characters in your language that are not
    * supported by respective fonts, translate this to 'off'. Do not translate
    * into your own language.
    */
    $primary    = _x( 'on', 'Primary Font: on or off', 'vandana-health-coach' );
    $secondary  = _x( 'on', 'Secondary Font: on or off', 'vandana-health-coach' );
    $site_title = _x( 'on', 'Site Title Font: on or off', 'vandana-health-coach' );
    
    
    if ( 'off' !== $primary || 'off' !== $secondary || 'off' !== $site_title ) {
        
        $font_families = array();
     
        if ( 'off' !== $primary && $ig_primary_font ) {
            $primary_variant = vandana_lite_check_varient( $primary_font, 'regular', true );
            if( $primary_variant ){
                $primary_var = ':' . $primary_variant;
            }else{
                $primary_var = '';    
            }            
            $font_families[] = $primary_font . $primary_var;
        }
         
        if ( 'off' !== $secondary && $ig_secondary_font ) {
            $secondary_variant = vandana_lite_check_varient( $secondary_font, 'regular', true );
            if( $secondary_variant ){
                $secondary_var = ':' . $secondary_variant;    
            }else{
                $secondary_var = '';
            }
            $font_families[] = $secondary_font . $secondary_var;
        }
        
        if ( 'off' !== $site_title && $ig_site_title_font ) {
            
            if( ! empty( $site_title_font['variant'] ) ){
                $site_title_var = ':' . vandana_lite_check_varient( $site_title_font['font-family'], $site_title_font['variant'] );    
            }else{
                $site_title_var = '';
            }
            $font_families[] = $site_title_font['font-family'] . $site_title_var;
        }
        
        $font_families = array_diff( array_unique( $font_families ), array('') );
        
        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),            
        );
        
        $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
    }
     
    return esc_url( $fonts_url );
}

function vandana_health_coach_dynamic_css(){
    
    $primary_font    = get_theme_mod( 'primary_font', 'Bitter' );
    $primary_fonts   = vandana_lite_get_fonts( $primary_font, 'regular' );
    $secondary_font  = get_theme_mod( 'secondary_font', 'Mate' );
    $secondary_fonts = vandana_lite_get_fonts( $secondary_font, 'regular' );
    $font_size       = get_theme_mod( 'font_size', 17 );
    
    $site_title_font      = get_theme_mod( 'site_title_font', array( 'font-family'=>'Halant', 'variant'=>'700' ) );
    $site_title_fonts     = vandana_lite_get_fonts( $site_title_font['font-family'], $site_title_font['variant'] );
    $site_title_font_size = get_theme_mod( 'site_title_font_size', 30 );
    
    $site_title_color = get_theme_mod( 'site_title_color', '#111111' );
    $site_logo_size   = get_theme_mod( 'site_logo_size', 70 );

    $cta_bg = get_theme_mod( 'cta_bg', get_template_directory_uri() . '/images/flower-bg.png' );
    $blog_bg = get_theme_mod( 'blog_bg', get_template_directory_uri() . '/images/blog-section-flower-bg.png' );
     
    echo "<style type='text/css' media='all'>"; ?>
     
    section.cta-section.style-one .widget .blossomtheme-cta-container {
        background-image: url('<?php echo esc_url( $cta_bg ); ?>');
    }
    section.blog-section.style-two::after {
        background-image: url('<?php echo esc_url( $blog_bg ); ?>');
    }
    
    /*Typography*/

    :root {
        --primary-font: <?php echo wp_kses_post( $primary_fonts['font'] ); ?>;
        --secondary-font: <?php echo wp_kses_post( $secondary_fonts['font'] ); ?>;
    }

    body,
    button,
    input,
    select,
    optgroup,
    textarea{
        font-family : <?php echo wp_kses_post( $primary_fonts['font'] ); ?>;
        font-size   : <?php echo absint( $font_size ); ?>px;        
    }
    
    .site-branding .site-title{
        font-size   : <?php echo absint( $site_title_font_size ); ?>px;
        font-family : <?php echo wp_kses_post( $site_title_fonts['font'] ); ?>;
        font-weight : <?php echo esc_html( $site_title_fonts['weight'] ); ?>;
        font-style  : <?php echo esc_html( $site_title_fonts['style'] ); ?>;
    }
    
    .site-branding .site-title a{
        color: <?php echo vandana_lite_sanitize_hex_color( $site_title_color ); ?>;
    }
    
    .custom-logo-link img{
        width: <?php echo absint( $site_logo_size ); ?>px;
        max-width: 100%;
    }
           
    <?php echo "</style>";
}
add_action( 'wp_head', 'vandana_health_coach_dynamic_css', 99 );

/**
 * Footer Bottom
*/
function vandana_lite_footer_bottom(){ ?>
    <div class="footer-b">
        <div class="container">
            <div class="site-info">            
            <?php
                vandana_lite_get_footer_copyright();
                echo esc_html__( ' Vandana Health Coach | Developed By ', 'vandana-health-coach' ); 
                echo '<a href="' . esc_url( 'https://blossomthemes.com/' ) .'" rel="nofollow" target="_blank">' . esc_html__( 'Blossom Themes', 'vandana-health-coach' ) . '</a>.';                
                printf( esc_html__( ' Powered by %s. ', 'vandana-health-coach' ), '<a href="'. esc_url( __( 'https://wordpress.org/', 'vandana-health-coach' ) ) .'" target="_blank">WordPress</a>' );
                if( function_exists( 'the_privacy_policy_link' ) ){
                    the_privacy_policy_link();
                }
            ?>               
            </div>
            <?php vandana_lite_footer_navigation(); ?>
        </div>
    </div>
    <?php
}