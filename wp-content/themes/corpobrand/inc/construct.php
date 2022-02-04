<?php
/**
 * Functions which construct the theme by hooking into WordPress
 *
 * @package corpobrand
 */


/*------------------------------------------------
            HEADER HOOK
------------------------------------------------*/

if ( ! function_exists( 'corpobrand_doctype' ) ) :
	/**
	 * Doctype Declaration.
	 *
	 * @since Corpobrand 1.0.0
	 */
	function corpobrand_doctype() { ?>
		<!DOCTYPE html>
			<html <?php language_attributes(); ?>>
	<?php }
endif;
add_action( 'corpobrand_doctype_action', 'corpobrand_doctype', 10 );

if ( ! function_exists( 'corpobrand_head' ) ) :
	/**
	 * head Codes
	 *
	 * @since Corpobrand 1.0.0
	 */
	function corpobrand_head() { ?>
		<head>
			<meta charset="<?php bloginfo( 'charset' ); ?>">
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
			<link rel="profile" href="http://gmpg.org/xfn/11">
			<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
				<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
			<?php endif; ?>
			<?php wp_head(); ?>
		</head>
	<?php }
endif;
add_action( 'corpobrand_head_action', 'corpobrand_head', 10 );

if ( ! function_exists( 'corpobrand_body_start' ) ) :
	/**
	 * Body start codes
	 *
	 * @since Corpobrand 1.0.0
	 */
	function corpobrand_body_start() { ?>
		<body <?php body_class(); ?>>
		<?php do_action( 'wp_body_open' ); ?>
	<?php }
endif;
add_action( 'corpobrand_body_start_action', 'corpobrand_body_start', 10 );


if ( ! function_exists( 'corpobrand_page_start' ) ) :
	/**
	 * Page starts html codes
	 *
	 * @since Corpobrand 1.0.0
	 */
	function corpobrand_page_start() { ?>
		<div id="page" class="site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'corpobrand' ); ?></a>
	<?php }
endif;
add_action( 'corpobrand_page_start_action', 'corpobrand_page_start', 10 );


if ( ! function_exists( 'corpobrand_header_start' ) ) :
	/**
	 * Header starts html codes
	 *
	 * @since Corpobrand 1.0.0
	 */
	function corpobrand_header_start() { 
		$sticky_header = corpobrand_theme_option( 'enable_sticky_header' ) ? 'sticky-header' : ''; 
		?>
		<header id="masthead" class="site-header <?php echo esc_attr( $sticky_header ); ?>">
		<div class="wrapper">
	<?php }
endif;
add_action( 'corpobrand_header_start_action', 'corpobrand_header_start', 10 );


if ( ! function_exists( 'corpobrand_site_branding' ) ) :
	/**
	 * Site branding codes
	 *
	 * @since Corpobrand 1.0.0
	 */
	function corpobrand_site_branding() { ?>
		<div class="site-menu">
            <div class="container">
				<div class="site-branding pull-left">
					<?php
					// site logo
					the_custom_logo();
					?>
					<div class="site-details">
						<?php if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php else : ?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php endif;

						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) : ?>
							<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
						<?php endif; ?>
					</div><!-- .site-details -->
				</div><!-- .site-branding -->
	<?php }
endif;
add_action( 'corpobrand_site_branding_action', 'corpobrand_site_branding', 10 );


if ( ! function_exists( 'corpobrand_primary_nav' ) ) :
	/**
	 * Primary nav codes
	 *
	 * @since Corpobrand 1.0.0
	 */
	function corpobrand_primary_nav() { ?>
		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
            <span class="screen-reader-text"><?php esc_html_e( 'Menu', 'corpobrand' ); ?></span>
            <svg viewBox="0 0 40 40" class="icon-menu">
                <g>
                    <rect y="7" width="40" height="2"/>
                    <rect y="19" width="40" height="2"/>
                    <rect y="31" width="40" height="2"/>
                </g>
            </svg>
            <?php echo corpobrand_get_svg( array( 'icon' => 'close' ) ); ?>
        </button>
		<nav id="site-navigation" class="main-navigation">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'primary',
        			'container' => 'div',
        			'menu_class' => 'menu nav-menu',
        			'menu_id' => 'primary-menu',
        			'fallback_cb' => 'corpobrand_menu_fallback_cb',
				) );
			?>
		</nav><!-- #site-navigation -->
		</div><!-- .container -->
        </div><!-- .site-menu -->
	<?php }
endif;
add_action( 'corpobrand_primary_nav_action', 'corpobrand_primary_nav', 10 );


if ( ! function_exists( 'corpobrand_header_ends' ) ) :
	/**
	 * Header ends codes
	 *
	 * @since Corpobrand 1.0.0
	 */
	function corpobrand_header_ends() { ?>
		</div><!-- .wrapper -->
		</header><!-- #masthead -->
	<?php }
endif;
add_action( 'corpobrand_header_ends_action', 'corpobrand_header_ends', 10 );


if ( ! function_exists( 'corpobrand_site_content_start' ) ) :
	/**
	 * Site content start codes
	 *
	 * @since Corpobrand 1.0.0
	 */
	function corpobrand_site_content_start() { ?>
		<div id="content" class="site-content">
	<?php }
endif;
add_action( 'corpobrand_site_content_start_action', 'corpobrand_site_content_start', 10 );


/**
 * Display custom header title in frontpage and blog
 */
function corpobrand_custom_header_title() {
	if ( is_home() && is_front_page() ) : 
		$title = corpobrand_theme_option( 'latest_blog_title', 'Blogs' ); ?>
		<h2><?php echo esc_html( $title ); ?></h2>
	<?php elseif ( is_singular() || ( is_home() && ! is_front_page() ) ): ?>
		<h2><?php single_post_title(); ?></h2>
	<?php elseif ( class_exists( 'WooCommerce' ) && is_shop() ) : ?>
    	<h2><?php woocommerce_page_title(); ?></h2>
    <?php elseif ( is_archive() ) : 
		the_archive_title( '<h2>', '</h2>' );
	elseif ( is_search() ) : ?>
		<h2><?php printf( esc_html__( 'Search Results for: %s', 'corpobrand' ), get_search_query() ); ?></h2>
	<?php elseif ( is_404() ) :
		echo '<h2>' . esc_html__( 'Oops! That page can&#39;t be found.', 'corpobrand' ) . '</h2>';
	endif;
}


if ( ! function_exists( 'corpobrand_add_breadcrumb' ) ) :
	/**
	 * Add breadcrumb.
	 *
	 * @since Corpobrand 1.0.0
	 */
	function corpobrand_add_breadcrumb() {
		// Bail if Breadcrumb disabled.
		if ( ! corpobrand_theme_option( 'enable_breadcrumb' ) ) {
			return;
		}
		
		// Bail if Home Page.
		if ( ! is_home() && is_front_page() ) {
			return;
		}

		echo '<div id="breadcrumb-list" >';
				/**
				 * corpobrand_breadcrumb hook
				 *
				 * @hooked corpobrand_breadcrumb -  10
				 *
				 */
				do_action( 'corpobrand_breadcrumb' );
		echo '</div><!-- #breadcrumb-list -->';
		return;
	}
endif;


if ( ! function_exists( 'corpobrand_custom_header' ) ) :
	/**
	 * Site content codes
	 *
	 * @since Corpobrand 1.0.0
	 *
	 */
	function corpobrand_custom_header() {
		if ( ! is_home() && is_front_page() ) {
			return;
		}
		
		$image = get_header_image() ? get_header_image() : get_template_directory_uri() . '/assets/uploads/banner.jpg';
		if ( is_singular() ) {
			$image = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_id(), 'full' ) : $image;
		}
		?>

        <div class="inner-header-image">
        	<div class="wrapper">
        		<div class="featured-image" style="background-image: url( '<?php echo esc_url( $image ); ?>' )">
        			<div class="overlay"></div>
	                <div class="custom-header-content">
	                    <?php 
	                    echo corpobrand_custom_header_title();
	                    corpobrand_add_breadcrumb(); 
	                    ?>
	                </div><!-- .custom-header-content -->
                </div>
        	</div><!-- .wrapper -->
        </div><!-- .custom-header-content-wrapper -->
		<?php
	}
endif;
add_action( 'corpobrand_site_content_start_action', 'corpobrand_custom_header', 20 );


/*------------------------------------------------
            FOOTER HOOK
------------------------------------------------*/

if ( ! function_exists( 'corpobrand_site_content_ends' ) ) :
	/**
	 * Site content ends codes
	 *
	 * @since Corpobrand 1.0.0
	 */
	function corpobrand_site_content_ends() { ?>
		</div><!-- #content -->
	<?php }
endif;
add_action( 'corpobrand_site_content_ends_action', 'corpobrand_site_content_ends', 10 );


if ( ! function_exists( 'corpobrand_footer_start' ) ) :
	/**
	 * Footer start codes
	 *
	 * @since Corpobrand 1.0.0
	 */
	function corpobrand_footer_start() { ?>
		<footer id="colophon" class="site-footer">
	<?php }
endif;
add_action( 'corpobrand_footer_start_action', 'corpobrand_footer_start', 10 );


if ( ! function_exists( 'corpobrand_site_info' ) ) :
	/**
	 * Site info codes
	 *
	 * @since Corpobrand 1.0.0
	 */
	function corpobrand_site_info() { 
		$copyright = corpobrand_theme_option('copyright_text');
		?>
		<div class="site-info">
            <div class="wrapper">
            	<?php if ( ! empty( $copyright ) ) : ?>
	                <div class="copyright">
	                	<p>
	                    	<?php 
	                    	echo corpobrand_santize_allow_tags( $copyright ); 
	                    	if ( function_exists( 'the_privacy_policy_link' ) ) {
								the_privacy_policy_link( ' | ' );
							}
	                    	?>
	                    </p>
	                </div><!-- .copyright -->
	            <?php endif; 

	            if ( ! empty( $copyright ) ) : ?>
	                <div class="powered-by">
	                    <?php
							printf( esc_html__( ' Corpobrand by %1$s Shark Themes %2$s', 'corpobrand' ), '<a href="' . esc_url( 'http://sharkthemes.com/' ) . '" target="_blank">','</a>' )
						?>
	                </div><!-- .powered-by -->
	            <?php endif; ?>
            </div><!-- .wrapper -->    
        </div><!-- .site-info -->
	<?php }
endif;
add_action( 'corpobrand_site_info_action', 'corpobrand_site_info', 10 );


if ( ! function_exists( 'corpobrand_footer_ends' ) ) :
	/**
	 * Footer ends codes
	 *
	 * @since Corpobrand 1.0.0
	 */
	function corpobrand_footer_ends() { ?>
		</footer><!-- #colophon -->
	<?php }
endif;
add_action( 'corpobrand_footer_ends_action', 'corpobrand_footer_ends', 10 );


if ( ! function_exists( 'corpobrand_slide_to_top' ) ) :
	/**
	 * Footer ends codes
	 *
	 * @since Corpobrand 1.0.0
	 */
	function corpobrand_slide_to_top() { ?>
		<div class="backtotop">
            <?php echo corpobrand_get_svg( array( 'icon' => 'up' ) ); ?>
        </div><!-- .backtotop -->
	<?php }
endif;
add_action( 'corpobrand_footer_ends_action', 'corpobrand_slide_to_top', 20 );


if ( ! function_exists( 'corpobrand_page_ends' ) ) :
	/**
	 * Page ends codes
	 *
	 * @since Corpobrand 1.0.0
	 */
	function corpobrand_page_ends() { ?>
		</div><!-- #page -->
	<?php }
endif;
add_action( 'corpobrand_page_ends_action', 'corpobrand_page_ends', 10 );


if ( ! function_exists( 'corpobrand_body_html_ends' ) ) :
	/**
	 * Body & Html ends codes
	 *
	 * @since Corpobrand 1.0.0
	 */
	function corpobrand_body_html_ends() { ?>
		</body>
		</html>
	<?php }
endif;
add_action( 'corpobrand_body_html_ends_action', 'corpobrand_body_html_ends', 10 );

if ( ! function_exists( 'corpobrand_infinite_loader' ) ) :
	/**
	 * infinite loader codes
	 *
	 * @since Corpobrand 1.0.0
	 */
	function corpobrand_infinite_loader() { 
		global $post;
		if ( 'infinite' == corpobrand_theme_option( 'pagination_type' ) ) :
			if ( count( $post ) > 0 ) {
				echo '<div class="blog-loader">' . corpobrand_get_svg( array( 'icon' => 'spinner-umbrella' ) ) . '</div>';
			}
		endif;
	}
endif;
add_action( 'corpobrand_infinite_loader_action', 'corpobrand_infinite_loader', 10 );
