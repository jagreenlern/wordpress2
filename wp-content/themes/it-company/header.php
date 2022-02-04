<?php
/**
 * The Header for our theme.
 * @package IT Company
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
  } else {
    do_action( 'wp_body_open' );
  }?>
  <?php if(get_theme_mod('it_company_preloader',true) || get_theme_mod('it_company_preloader_responsive',true)){ ?>
    <?php if(get_theme_mod( 'it_company_preloader_type','Square') == 'Square'){ ?>
      <div id="overlayer"></div>
      <span class="tg-loader">
        <span class="tg-loader-inner"></span>
      </span>
    <?php }else if(get_theme_mod( 'it_company_preloader_type') == 'Circle') {?>
      <div class="preloader text-center">
        <div class="preloader-container">
          <span class="animated-preloader"></span>
        </div>
      </div>
    <?php }?>
  <?php }?>
  <header role="banner" class="header">
    <a class="screen-reader-text skip-link" href="#maincontent"><?php esc_html_e( 'Skip to content', 'it-company' ); ?><span class="screen-reader-text"><?php esc_html_e('Skip to Content','it-company'); ?></span></a>
    <?php if (has_nav_menu('primary')){?>
      <div class="toggle-menu responsive-menu p-2">
        <button role="tab" class="mobiletoggle"><i class="<?php echo esc_html(get_theme_mod('it_company_menu_open_icon','fas fa-bars')); ?> mr-2"></i><?php echo esc_html( get_theme_mod('it_company_mobile_menu_label', __('Menu','it-company'))); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('it_company_mobile_menu_label', __('Menu','it-company'))); ?></button>
      </div>
      <div id="sidelong-menu" class="nav side-nav">
        <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'it-company' ); ?>">
          <?php 
            wp_nav_menu( array(
              'theme_location' => 'primary',
              'container_class' => 'main-menu-navigation clearfix' ,
              'menu_class' => 'clearfix',
              'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
              'fallback_cb' => 'wp_page_menu',
            ) ); 
          ?>
          <a href="javascript:void(0)" class="closebtn responsive-menu"><?php esc_html_e('Close Menu','it-company'); ?><i class="<?php echo esc_html(get_theme_mod('it_company_menu_close_icon','fas fa-times-circle')); ?> m-3"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','it-company'); ?></span></a>
        </nav>
      </div>
    <?php }?>
    <div class="container">
      <?php if(get_theme_mod('it_company_top_header') || get_theme_mod('it_company_hide_topbar_responsive')){ ?>
        <div class="top-header">
          <div class="row m-0">
            <div class="col-lg-8 col-md-9">
              <div class="row">
                <div class="col-lg-4 col-md-4 pl-0">
                  <?php if ( get_theme_mod('it_company_question','') != "" ) {?>
                    <div class="welcome">
                      <?php if ( get_theme_mod('it_company_question','') != "" ) {?>
                        <p class="py-2 m-0 text-md-left text-center"><?php echo esc_html( get_theme_mod('it_company_question','') ); ?></p>
                      <?php }?>
                    </div>
                  <?php }?>
                </div>
                <div class="col-lg-4 col-md-4 p-0">
                  <div class="contact-details py-lg-2 py-md-3 py-3">
                    <?php if ( get_theme_mod('it_company_email','') != "" ) {?>
                      <span class="conatct-font pr-md-0 pr-3 text-md-left text-center">
                        <i class="<?php echo esc_html(get_theme_mod('it_company_email_icon','fas fa-envelope')); ?>"></i>
                        <?php if ( get_theme_mod('it_company_email','') != "" ) {?>
                          <a href="mailto:<?php echo esc_attr( get_theme_mod('it_company_email','') ); ?>"><p class="px-1 mb-0"><?php echo esc_html( get_theme_mod('it_company_email','') ); ?></p><span class="screen-reader-text"><?php esc_html_e('Email', 'it-company') ?></span></a>
                        <?php }?>
                      </span>
                    <?php }?>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 p-0">
                  <div class="contact-details py-lg-2 py-md-3 py-3">
                    <?php if ( get_theme_mod('it_company_call_number','') != "" ) {?>
                      <span class="conatct-font pr-md-0 pr-3 text-md-left text-center">
                        <i class="<?php echo esc_html(get_theme_mod('it_company_phone_icon','fa fa-phone')); ?>"></i>
                        <?php if ( get_theme_mod('it_company_call_number','') != "" ) {?>
                          <a href="tel:<?php echo esc_attr( get_theme_mod('it_company_call_number','') ); ?>"><p class="px-1 mb-0"><?php echo esc_html( get_theme_mod('it_company_call_number','' )); ?></p><span class="screen-reader-text"><?php esc_html_e('Phone Number', 'it-company') ?></span></a>
                        <?php }?>
                      </span>
                    <?php }?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-3 pr-0">
              <div class="social-media py-2 pr-md-0 pr-3 text-md-right text-center">
                <?php if( get_theme_mod( 'it_company_facebook' ) != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'it_company_facebook','' ) ); ?>" class="pl-lg-4 pl-md-3 pl-4 py-lg-0 py-md-2 py-0"><i class="<?php echo esc_html(get_theme_mod('it_company_facebook_icon','fab fa-facebook-f')); ?> px-1"></i><span class="screen-reader-text"><?php esc_html_e('Facebook','it-company'); ?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'it_company_twitter' ) != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'it_company_twitter','' ) ); ?>" class="pl-lg-4 pl-md-3 pl-4 py-lg-0 py-md-2 py-0"><i class="<?php echo esc_html(get_theme_mod('it_company_twitter_icon','fab fa-twitter')); ?> px-1"></i><span class="screen-reader-text"><?php esc_html_e('Twitter','it-company'); ?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'it_company_youtube' ) != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'it_company_youtube','' ) ); ?>" class="pl-lg-4 pl-md-3 pl-4 py-lg-0 py-md-2 py-0"><i class="<?php echo esc_html(get_theme_mod('it_company_youtube_icon','fab fa-youtube')); ?> px-1"></i><span class="screen-reader-text"><?php esc_html_e('Youtube','it-company'); ?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'it_company_linkedin') != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'it_company_linkedin','' ) ); ?>" class="pl-lg-4 pl-md-3 pl-4 py-lg-0 py-md-2 py-0"><i class="<?php echo esc_html(get_theme_mod('it_company_linkedin_icon','fab fa-linkedin-in')); ?> px-1"></i><span class="screen-reader-text"><?php esc_html_e('Linkedin','it-company'); ?></span></a>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      <?php }?>
    </div>
    <?php if(get_theme_mod('it_company_header_layout', 'Default Header') == 'Default Header'){ ?>
      <div id="header" class="<?php if( get_theme_mod( 'it_company_sticky_header') != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
        <div class="container">
          <div class="menu-sec">
            <div class="row">
              <div class="<?php if(get_theme_mod('it_company_show_search',true)) { ?>col-lg-10 col-md-9" <?php } else { ?>col-lg-12 col-md-12 <?php } ?>">
                <div class="top-bar">
                  <div class="row">
                    <div class="<?php if(get_theme_mod('it_company_show_search',true)) { ?>col-lg-3 col-md-6" <?php } else { ?>col-lg-3 col-md-12 <?php } ?>">
                      <?php if(get_theme_mod('it_company_display_logo', 'Both logo & Title') == 'Both logo & Title'){ ?>
                        <div class="logo p-2 text-md-left text-center">
                          <div class="row">
                            <div class="<?php if( has_custom_logo() && get_theme_mod('it_company_logo_alongside',true) != '') { ?> col-lg-4 col-md-4"<?php } else { ?>col-lg-12 col-md-12 <?php } ?>">
                              <?php if ( has_custom_logo() ) : ?>
                                <div class="site-logo"><?php the_custom_logo(); ?></div>
                              <?php endif; ?>
                            </div>
                            <div class="<?php if( has_custom_logo() && get_theme_mod('it_company_logo_alongside',true) != '') { ?> col-lg-8 col-md-8"<?php } else { ?>col-lg-12 col-md-12 <?php } ?>">
                              <?php $blog_info = get_bloginfo( 'name' ); ?>
                              <?php if ( ! empty( $blog_info ) ) : ?>
                                <?php if ( is_front_page() && is_home() ) : ?>
                                  <h1 class="site-title p-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                                <?php else : ?>
                                  <p class="site-title m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                                <?php endif; ?>
                              <?php endif; ?>
                              <?php
                              $description = get_bloginfo( 'description', 'display' );
                              if ( $description || is_customize_preview() ) :
                                ?>
                                <p class="site-description m-0">
                                  <?php echo esc_html($description); ?>
                                </p>
                              <?php endif; ?>
                            </div>
                          </div>
                        </div>
                      <?php } else if(get_theme_mod('it_company_display_logo') == 'Only Title & Tagline'){ ?>
                        <div class="logo p-2 text-md-left text-center">
                          <?php $blog_info = get_bloginfo( 'name' ); ?>
                          <?php if ( ! empty( $blog_info ) ) : ?>
                            <?php if ( is_front_page() && is_home() ) : ?>
                              <h1 class="site-title p-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                            <?php else : ?>
                              <p class="site-title m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                            <?php endif; ?>
                          <?php endif; ?>
                          <?php
                          $description = get_bloginfo( 'description', 'display' );
                          if ( $description || is_customize_preview() ) :
                            ?>
                            <p class="site-description m-0">
                              <?php echo esc_html($description); ?>
                            </p>
                          <?php endif; ?>
                        </div>
                      <?php } else if(get_theme_mod('it_company_display_logo') == 'Only Logo'){ ?>
                        <div class="logo p-2 text-md-left text-center">
                          <?php if ( has_custom_logo() ) : ?>
                            <div class="site-logo"><?php the_custom_logo(); ?></div>
                          <?php endif; ?>
                        </div>
                      <?php }?>
                    </div>
                    <div class="menubox col-lg-9 col-md-1 pr-0">
                      <div id="sidelong-menu" class="nav side-nav">
                        <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'it-company' ); ?>">
                          <?php if (has_nav_menu('primary')){
                            wp_nav_menu( array(
                              'theme_location' => 'primary',
                              'container_class' => 'main-menu-navigation clearfix' ,
                              'menu_class' => 'clearfix',
                              'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                              'fallback_cb' => 'wp_page_menu',
                            ) ); 
                          } ?>
                        </nav>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php if(get_theme_mod('it_company_show_search',true) || get_theme_mod('it_company_search_responsive',true)){ ?>
                <div class="search-mobile col-lg-2 col-md-3 pl-0">
                  <div class="search-box">
                    <?php get_search_form();?>
                  </div>
                </div>
              <?php }?>
            </div>
          </div>
        </div>
      </div>
    <?php }else if(get_theme_mod('it_company_header_layout') == 'Logo above Menu') {?>
      <div id="header" class="<?php if( get_theme_mod( 'it_company_sticky_header') != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
        <div class="container">
          <div class="menu-sec">
            <?php if(get_theme_mod('it_company_display_logo', 'Both logo & Title') == 'Both logo & Title'){ ?>
              <div class="logo p-2 text-center">
                <div class="second-logo">
                  <div class="row">
                    <div class="<?php if( has_custom_logo() && get_theme_mod('it_company_logo_alongside') == true) { ?> col-lg-4 col-md-4"<?php } else { ?>col-lg-12 col-md-12 <?php } ?>">
                      <?php if ( has_custom_logo() ) : ?>
                        <div class="site-logo"><?php the_custom_logo(); ?></div>
                      <?php endif; ?>
                    </div>
                    <div class="<?php if( has_custom_logo() && get_theme_mod('it_company_logo_alongside') == true) { ?> col-lg-8 col-md-8"<?php } else { ?>col-lg-12 col-md-12 <?php } ?>">
                      <?php $blog_info = get_bloginfo( 'name' ); ?>
                      <?php if ( ! empty( $blog_info ) ) : ?>
                        <?php if ( is_front_page() && is_home() ) : ?>
                          <h1 class="site-title p-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <?php else : ?>
                          <p class="site-title m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                        <?php endif; ?>
                      <?php endif; ?>
                      <?php
                      $description = get_bloginfo( 'description', 'display' );
                      if ( $description || is_customize_preview() ) :
                        ?>
                        <p class="site-description m-0">
                          <?php echo esc_html($description); ?>
                        </p>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
            <?php } else if(get_theme_mod('it_company_display_logo') == 'Only Title & Tagline'){ ?>
              <div class="logo p-2 text-center">
                <?php $blog_info = get_bloginfo( 'name' ); ?>
                <?php if ( ! empty( $blog_info ) ) : ?>
                  <?php if ( is_front_page() && is_home() ) : ?>
                    <h1 class="site-title p-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                  <?php else : ?>
                    <p class="site-title m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                  <?php endif; ?>
                <?php endif; ?>
                <?php
                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) :
                  ?>
                  <p class="site-description m-0">
                    <?php echo esc_html($description); ?>
                  </p>
                <?php endif; ?>
              </div>
            <?php } else if(get_theme_mod('it_company_display_logo') == 'Only Logo'){ ?>
              <div class="logo p-2 text-center">
                <?php if ( has_custom_logo() ) : ?>
                  <div class="site-logo"><?php the_custom_logo(); ?></div>
                <?php endif; ?>
              </div>
            <?php }?>
            <div class="row">
              <div class="<?php if(get_theme_mod('it_company_show_search',true)) { ?>col-lg-10 col-md-12" <?php } else { ?>col-lg-12 col-md-12 <?php } ?>">
                <div class="top-bar">
                  <div class="menubox pr-0">
                    <div id="sidelong-menu" class="nav side-nav">
                      <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'it-company' ); ?>">
                        <?php if (has_nav_menu('primary')){
                          wp_nav_menu( array(
                            'theme_location' => 'primary',
                            'container_class' => 'main-menu-navigation clearfix' ,
                            'menu_class' => 'clearfix',
                            'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                            'fallback_cb' => 'wp_page_menu',
                          ) ); 
                        } ?>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
              <?php if(get_theme_mod('it_company_show_search',true) || get_theme_mod('it_company_search_responsive',true)){ ?>
                <div class="search-mobile col-lg-2 col-md-12 pl-0">
                  <div class="search-box">
                    <?php get_search_form();?>
                  </div>
                </div>
              <?php }?>
            </div>
          </div>
        </div>
      </div>
    <?php }?>
  </header>

  <?php if(get_theme_mod('it_company_post_featured_image') == 'banner' ){
    if( is_singular() ) {?>
      <div id="page-site-header">
        <div class='page-header'> 
          <?php the_title( '<h1>', '</h1>' ); ?>
        </div>
      </div>
    <?php }
  }?>