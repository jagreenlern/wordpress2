<div class="header-menu">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="logo">
          <?php
            if(has_custom_logo()):
              the_custom_logo();
            endif; ?>

            <?php
            $eduline_description = get_bloginfo( 'description', 'display' );
            if ( $eduline_description || is_customize_preview() ) : ?>
              <h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
              <p class="site-description ml-1 mb-1"><?php echo $eduline_description; /* WPCS: xss ok. */ ?></p>
            <?php endif; ?>
          </div>
          <div class="mobile-menu mt-1"></div>
        </div>
        <div class="col-9">
          <nav id="site-navigation" class="navbar navbar-default main-navigation">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'eduline' ); ?></button>
            <?php
            if ( has_nav_menu( 'primary' ) ) :
            wp_nav_menu(
              array(
                'theme_location' => 'primary',
                'menu_id'        => 'nav',
                'menu_class'        => 'nav menu navbar-nav',
                'container_class'   => 'navbar-collapse',
                'container_id'      => 'navbarSupportedContent', 
                'fallback_cb'       => 'Eduline_Navwalker::fallback',
                'walker'            => new Eduline_Navwalker(),
              )
            );
            endif;
            ?>
          </nav><!-- #site-navigation -->
      </div>
    </div>
  </div>
</div>
<!--/ End Header Menu -->