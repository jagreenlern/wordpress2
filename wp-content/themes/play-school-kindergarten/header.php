<?php
/**
 * The header for our theme
 *
 * @subpackage play-school-kindergarten
 * @since 1.0
 * @version 0.3
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
} else {
    do_action( 'wp_body_open' );
}?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'play-school-kindergarten' ); ?></a>

	<div class="top-header">
		<div class="container">	
			<div class="row padd0 header-section">
				<div class="col-lg-8 col-md-8 top">
					<div class="row">
						<div class="col-lg-5 col-md-5">
							<?php if( get_theme_mod( 'play_school_kindergarten_mail','' ) != '') { ?>
						        <i class="fas fa-envelope"></i><span class="col-org"><a href="mailto:<?php echo esc_attr( get_theme_mod('play_school_kindergarten_mail','') ); ?>"><?php echo esc_html( get_theme_mod('play_school_kindergarten_mail','') ); ?></a></span>
						    <?php } ?>
					   	</div>
					   	<div class="col-lg-7 col-md-7">				   	
					   		<?php if( get_theme_mod( 'play_school_kindergarten_location','' ) != '') { ?>		
						        <i class="fas fa-map-marker-alt"></i><span class="col-org"><?php echo esc_html( get_theme_mod('play_school_kindergarten_location','') ); ?></span>
						    <?php } ?>
					   	</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 mag0">
					<div class="social-icon">
						<?php if( get_theme_mod( 'play_school_kindergarten_facebook','' ) != '') { ?>
							<a href="<?php echo esc_url( get_theme_mod('play_school_kindergarten_facebook','') ); ?>"><i class="fab fa-facebook-f"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','play-school-kindergarten' );?></span></a>
						<?php } ?>
						<?php if( get_theme_mod( 'play_school_kindergarten_twitter','' ) != '') { ?>
							<a href="<?php echo esc_url( get_theme_mod('play_school_kindergarten_twitter','') ); ?>"><i class="fab fa-twitter"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','play-school-kindergarten' );?></span></a>
						<?php } ?>
						<?php if( get_theme_mod( 'play_school_kindergarten_linkdin','' ) != '') { ?>
							<a href="<?php echo esc_url( get_theme_mod('play_school_kindergarten_linkdin','') ); ?>"><i class="fab fa-linkedin-in"></i><span class="screen-reader-text"><?php esc_html_e( 'Linkedin','play-school-kindergarten' );?></span></a>
						<?php } ?>
						<?php if( get_theme_mod( 'play_school_kindergarten_instagram','' ) != '') { ?>
							<a href="<?php echo esc_url( get_theme_mod('play_school_kindergarten_instagram','') ); ?>"><i class="fab fa-instagram"></i><span class="screen-reader-text"><?php esc_html_e( 'Instagram','play-school-kindergarten' );?></span></a>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<header role="banner" id="header">
		<div class="container">
			<div class="main-top">
				<div class="row m-0">
					<div class="col-lg-3 col-md-4 col-9">
						<div class="logo">
					        <?php if ( has_custom_logo() ) : ?>
						        <div class="site-logo"><?php the_custom_logo(); ?></div>
						    <?php endif; ?>
				            <?php if (get_theme_mod('play_school_kindergarten_show_site_title',true)) {?>
						        <?php $blog_info = get_bloginfo( 'name' ); ?>
						        <?php if ( ! empty( $blog_info ) ) : ?>
						            <?php if ( is_front_page() && is_home() ) : ?>
							            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						        	<?php else : ?>
					            		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						            <?php endif; ?>
						        <?php endif; ?>
						    <?php }?>
				        	<?php if (get_theme_mod('play_school_kindergarten_show_tagline',true)) {?>
						        <?php
						        $description = get_bloginfo( 'description', 'display' );
						        if ( $description || is_customize_preview() ) :
						          ?>
							        <p class="site-description">
							            <?php echo esc_html($description); ?>
							        </p>
						        <?php endif; ?>
						    <?php }?>
					    </div>
					</div>
					<div class="col-lg-7 col-md-5 col-3">
						<?php if (has_nav_menu('primary')){ ?>
							<div class="toggle-menu responsive-menu">
					            <button onclick="play_school_kindergarten_open()" role="tab" class="mobile-menu"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','play-school-kindergarten'); ?></span></button>
					        </div>
							<div id="sidelong-menu" class="nav sidenav">
				                <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'play-school-kindergarten' ); ?>">
				                  <?php 
				                    wp_nav_menu( array( 
				                      'theme_location' => 'primary',
				                      'container_class' => 'main-menu-navigation clearfix' ,
				                      'menu_class' => 'clearfix',
				                      'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
				                      'fallback_cb' => 'wp_page_menu',
				                    ) ); 
				                  ?>
				                  <a href="javascript:void(0)" class="closebtn responsive-menu" onclick="play_school_kindergarten_close()"><i class="fas fa-times"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','play-school-kindergarten'); ?></span></a>
				                </nav>
				            </div>
				        <?php }?>
					</div>
					<div class="col-lg-2 col-md-3">
						<?php if( get_theme_mod( 'play_school_kindergarten_button_link','' ) != '') { ?>
		         		<div class="courses">
		           			<a href="<?php echo esc_url( get_theme_mod('play_school_kindergarten_button_link','' ) ); ?>"><?php esc_html_e( 'Our Courses','play-school-kindergarten' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Our Courses', 'play-school-kindergarten' ); ?></span></a>
		        		</div>
		         		<?php } ?>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</header>

	<div class="site-content-contain">
		<div id="content" class="site-content">