<?php
/**
 * Template part for displaying section of blog content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @subpackage bizzmo
 * @since 1.0
 */

$bizzmo_enable_blog_section = get_theme_mod( 'bizzmo_enable_blog_section', true );
$bizzmo_blog_cat 		= get_theme_mod( 'bizzmo_blog_cat', 'uncategorized' );
if($bizzmo_enable_blog_section == true) {
	

$bizzmo_blog_title 	= get_theme_mod( 'bizzmo_blog_title', __( 'Latest News', 'bizzmo' ) );
$bizzmo_blog_count 	 = apply_filters( 'bizzmo_blog_count', 3 );

?>


<section class="blog sp-100">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="all-title">
					<?php
					if( !empty( $bizzmo_blog_title ) ) {
					?>
						<h3 class="sec-title">
							<?php echo esc_html( $bizzmo_blog_title ); ?>
						</h3>
						<span class="title-line">
                            <i></i>
                            <i></i>
                            <i></i>
                        </span>
				<?php } ?>
				</div>
			</div>
		</div>     
		<div class="row center-grid">
			<?php
				if( !empty( $bizzmo_blog_cat ) ) {
					$blog_args = array(
						'post_type' 	 => 'post',
						'category_name'	 => esc_attr( $bizzmo_blog_cat ),
						'posts_per_page' => absint( $bizzmo_blog_count ),
					);

					$blog_query = new WP_Query( $blog_args );
					if( $blog_query->have_posts() ) {
						while( $blog_query->have_posts() ) {
							$blog_query->the_post();
								?>

						<div class="col-lg-4 col-md-6 col-12">
							<article class="blog-item blog-2">
								<?php if( has_post_thumbnail() ) { ?>
									<div class="post-img">
										<?php the_post_thumbnail(); ?>
										<div class="date">
											<p>
												<span><?php echo esc_html(get_the_date( 'j' )); ?></span>
												<?php echo esc_html(get_the_date( 'F' )); ?></p>
										</div>
									</div>
								<?php } ?>	
								<ul class="post-meta">
									<?php bizzmo_posted_by(); ?>
									<?php bizzmo_post_comments();?>
								</ul>
								<div class="post-content p-4">
									<h5>
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h5>
									 <?php the_excerpt(); ?> 
									<a href="<?php the_permalink(); ?>" class="text-uppercase read-more"><?php esc_html__('read more','bizzmo'); ?></a>
								</div>
							</article>
						</div>
					
				 <?php
					}
				}
				wp_reset_postdata();
			}
			 ?>
		</div>
	</div>
</section>

<?php } ?>