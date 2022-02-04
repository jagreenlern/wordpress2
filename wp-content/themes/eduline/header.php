<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package eduline
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php 
	  if ( function_exists( 'wp_body_open' ) ){
	    	wp_body_open();
	  }
	  else{ 
	  	do_action( 'wp_body_open' ); 
	  }
	?>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'eduline' ); ?></a>
	<!-- Header -->
	<header class="header">
		<!-- Topbar -->
		<?php 
		if(get_theme_mod( 'eduline_top_header_enable' ) == '1'){
			get_template_part( 'header-parts/header','top' );
		}

		get_template_part( 'header-parts/header','menu' );
		?>
		<!-- End Topbar -->
		<!-- Header Menu -->

		<!--End Header Menu -->
	</header>
	<!-- End Header -->
	
	<?php 
	if((!is_404())):
		if( is_home() || (!is_front_page())):?>
			<!-- Start Breadcrumbs -->
		<section class="breadcrumbs overlay" style="background-image:url(<?php if(has_header_image()):echo esc_url(get_header_image());endif;?>)">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<?php if(is_home()): ?>
							<ul class="bread-list">
								<li><a href="<?php echo esc_url(home_url());?>"><?php bloginfo('name'); ?></a></li>
							</ul>
							<?php else:?> 
								<?php breadcrumb_trail(); ?>
							<?php endif; ?>
							<?php if(is_home()): ?>
								<h2><?php bloginfo('name'); ?></h2>
								<?php else: ?>
									<?php if ( is_archive() ) {
										the_archive_title( '<h2>', '</h2>' );
									}
									else{
										echo '<h2>';
										echo esc_html( get_the_title() );
										echo '</h2>';
									} ?>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</section>
				<!--/ End Breadcrumbs -->
			<?php endif;
		endif;?>
		
<div id="content" class="site-content">