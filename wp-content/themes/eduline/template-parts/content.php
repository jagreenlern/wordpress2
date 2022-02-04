<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package eduline
 */

?>

<div class="col-lg-4 col-md-6 col-12">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- Single Blog -->
		<div class="single-blog">
			<div class="blog-head">
				<?php eduline_post_thumbnail(); ?>
			</div>
			<div class="blog-content">
				<div class="date"><i class="fa fa-calendar"></i> <?php eduline_posted_on();?> / <span>
				<?php	$category_detail=get_the_category(get_the_ID());//$post->ID
				foreach($category_detail as $cd){
					echo esc_html($cd->cat_name);
				}
				?>	
			</span></div>
			<h4 class="blog-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
			<div class="bottom">
				<img src="<?php echo esc_url(get_avatar_url( get_the_ID() ));?>">
				<div class="content">
					<p><?php eduline_posted_by();?></p>
				</div>
			</div>
		</div>
		<!-- End Single Blog -->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
</div>
<?php
wp_link_pages( array(
	'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'eduline' ),
	'after'  => '</div>',
) );
?>