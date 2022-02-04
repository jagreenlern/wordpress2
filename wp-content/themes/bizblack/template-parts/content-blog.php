<?php
/**
 * Template part for displaying section of blog content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @subpackage bizblack
 * @since 1.0
 */

$bizblack_enable_blog_section = get_theme_mod( 'bizblack_enable_blog_section', true );
$bizblack_blog_cat 		= get_theme_mod( 'bizblack_blog_cat', 'uncategorized' );
if($bizblack_enable_blog_section == true) {
	

$bizblack_blog_title 		= get_theme_mod( 'bizblack_blog_title', __( 'Latest News', 'bizblack' ) );
$bizblack_blog_count 		= apply_filters( 'bizblack_blog_count', 6 );

?>


<section class="blog sp-100">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="all-title">
					<?php
				if( !empty( $bizblack_blog_title ) ) {
			?>
					<h3 class="sec-title">
						<?php echo esc_html( $bizblack_blog_title ); ?>
					</h3>
				<?php } ?>
				</div>
			</div>
		</div>     
		<div class="blog-slider owl-carousel owl-theme owl-loaded owl-drag">
	<?php
					
					if( !empty( $bizblack_blog_cat ) ) {
						$blog_args = array(
								'post_type' 	 => 'post',
								'category_name'	 => esc_attr( $bizblack_blog_cat ),
								'posts_per_page' => absint( $bizblack_blog_count ),
							);

							$blog_query = new WP_Query( $blog_args );
							if( $blog_query->have_posts() ) {
								while( $blog_query->have_posts() ) {
									$blog_query->the_post();
										?>
			<article class="blog-item blog-1">
					<?php if( has_post_thumbnail() ) { ?>
				<div class="post-img">
					<?php the_post_thumbnail(); ?>
						<div class="date">
							 <?php bizblack_posted_on(); ?>
						</div>
				</div>
			<?php } ?>
				<ul class="post-meta">
						<?php bizblack_posted_by(); 
					bizblack_post_comments();?>
										</ul>
				<div class="post-content pt-4">
					<h5>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?>						</a>
					</h5>
                     
				</div>
			</article>
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