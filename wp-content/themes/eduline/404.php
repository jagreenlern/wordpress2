<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package eduline
 */
get_header();
?>

<!-- Error Page -->
<section id="error-page" class="error-page overlay" style="background-image:url(<?php if(has_header_image()):echo esc_url(get_header_image());endif;?>)">
	<div class="table">
		<div class="table-cell">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3 col-12">
						<!-- Error Inner -->
						<div class="error-inner">
							<h2><?php esc_html_e( '404 Page Not Found', 'eduline' ); ?></h2>
							<div class="button">
								<a href="<?php echo esc_url(home_url());?>" class="btn primary"><?php esc_html_e( 'Go Back Home', 'eduline' ); ?></a>
							</div>
						</div>
						<!--/ End Error Inner -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/ End Error Page -->

<?php
get_footer();
?>