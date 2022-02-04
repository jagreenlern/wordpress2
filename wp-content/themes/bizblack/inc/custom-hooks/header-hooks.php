<?php
/**
 * Managed the custom functions and hooks for header section of the theme.
 *
 * @subpackage Gymnaz
 * @since 1.0.0
 */

/*-----------------------------------------------------------------------------------------------------------------------*/
if( ! function_exists( 'bizblack_header_start' ) ):
    
    function bizblack_header_start(){ ?>
<header>
        <div class="header-two">
            <div class="container">
                <div class="menu-three">
                    <div class="row">
<?php }
endif;  

/*-----------------------------------------------------------------------------------------------------------------------*/
if( ! function_exists( 'bizblack_header_site_branding' ) ):
   
    function bizblack_header_site_branding(){ ?>
        <div class="col-lg-3 col-12">
            <div class="logo-wrap">
                <div class="logo">
                <?php the_custom_logo();   
                 if (display_header_text()==true){ ?>
                 <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                 <h1 class="site-title">
                 <?php bloginfo( 'title' ); ?>
                 </h1>
                   <p class="site-description">
                 <?php bloginfo( 'description' ); ?>
                 </p>
                 </a>
                 <?php } ?>
            </div>
        </div>
    </div>

    <?php
    }
endif;  

/*-----------------------------------------------------------------------------------------------------------------------*/

if( ! function_exists( 'bizblack_header_nav_menu' ) ):
    
    function bizblack_header_nav_menu(){ ?>
        <div class="col-lg-9 col-12">
            <nav id="site-navigation" class="main-navigation">
               <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars"></i></button>
                 <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                    ) );
                    ?>
            </nav>
        </div>
<?php }
endif;  
if( ! function_exists( 'bizblack_header_end' ) ):
      function bizblack_header_end(){ ?>
                    </div>
                </div>
            </div>
        </div>
    </header>

<?php }


endif;  


add_action( 'bizblack_header', 'bizblack_header_start', 5  );
add_action( 'bizblack_header', 'bizblack_header_site_branding', 10  );
add_action( 'bizblack_header', 'bizblack_header_nav_menu', 15  );
add_action( 'bizblack_header', 'bizblack_header_end', 25  );