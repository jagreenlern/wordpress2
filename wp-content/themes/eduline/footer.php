<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package eduline
 */
?>
</div><!-- #content -->
<!-- Footer -->
<footer class="footer  section">
	<!-- Footer Top -->
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 logo-col">
					<div class="logo">
						<?php
						if(has_custom_logo()):?>
							<?php the_custom_logo();?>
							<?php else: ?>  
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name');?></a></h1>
							<?php endif; ?>
						</div>
					</div>
					<div class="col-lg-10 col-md-10 col-12">
						<p class="logo-text"><?php bloginfo( 'description' ) ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-6 col-12">
						<!-- About -->
						<?php if ( is_active_sidebar( 'footer-1' ) ) { ?>
							<?php dynamic_sidebar( 'footer-1' );?>
						<?php } ?>
						<!--/ End About -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Useful Links -->
						<?php if ( is_active_sidebar( 'footer-2' ) ) { ?>
							<?php dynamic_sidebar( 'footer-2' );?>
						<?php } ?>
						<!--/ End Useful Links -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Latest News -->
						<div class="single-widget useful-links">
							<?php if ( is_active_sidebar( 'footer-3' ) ) { ?>
								<?php dynamic_sidebar( 'footer-3' );?>
							<?php } ?>
						</div>
						<!--/ End Latest News -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Newsletter -->
						<?php if ( is_active_sidebar( 'footer-4' ) ) { ?>
							<?php dynamic_sidebar( 'footer-4' );?>
						<?php } ?>
						<!--/ End Newsletter -->
					</div>
				</div>
			</div>
		</div>
		<!--/ End Footer Top -->
		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-12">
						<div class="bottom-head">
							<div class="row">
								<div class="col-12">
									<!-- Copyright -->
									<div class="copyright">
										<p><?php esc_html_e('&copy; All Right Reserved ','eduline'); bloginfo('title');?> <?php echo  esc_html(date_i18n( __( 'Y' , 'eduline' ) ));?></p>
									</div>
									<!--/ End Copyright -->
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<div class="bottom-head">
							<div class="row">
								<div class="col-12">
										<?php 
										
											$facebook_url 	= get_theme_mod('eduline_footer_facebook_url');
											$twitter_url  	= get_theme_mod('eduline_footer_twitter_url');
											$linkedin_url  	= get_theme_mod('eduline_footer_linkedin_url');
											$pinterest_url  = get_theme_mod('eduline_footer_pinterest_url');
											$youtube_url  	= get_theme_mod('eduline_footer_youtube_url');
											if(get_theme_mod('eduline_footer_social_media_enable')):
										?>
										<ul class="social">
											<?php if($facebook_url):?>
											<li><a href="<?php echo esc_url($facebook_url);?>"><i class="fa fa-facebook"></i></a></li>
											<?php endif;?>

											<?php if($twitter_url):?>
											<li><a href="<?php echo esc_url($twitter_url);?>"><i class="fa fa-twitter"></i></a></li>
											<?php endif;?>

											<?php if($linkedin_url):?>	
											<li><a href="<?php echo esc_url($linkedin_url);?>"><i class="fa fa-linkedin"></i></a></li>
											<?php endif;?>

											<?php if($pinterest_url):?>
											<li><a href="<?php echo esc_url($pinterest_url);?>"><i class="fa fa-pinterest"></i></a></li>
											<?php endif;?>

											<?php if($youtube_url):?>
											<li><a href="<?php echo esc_url($youtube_url);?>"><i class="fa fa-youtube-play"></i></a></li>
											<?php endif;?>

										</ul>
										<!-- End Social -->
									<?php endif;?>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Footer Bottom -->
	</footer>
	<!--/ End Footer -->

	<?php wp_footer(); ?>

</body>
</html>
