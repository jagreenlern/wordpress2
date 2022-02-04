<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package eduline
 */

?>
<div class="single-blog">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
			<h1 class="blog-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
			<?php the_content();?>
		</div>
		<!-- End Single Blog -->
	</article>
</div>