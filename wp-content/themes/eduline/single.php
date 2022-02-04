<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package eduline
 */

get_header();
?>
<!-- Blogs -->
<section class="blog archives single section">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-12">
				<!-- Single Blog -->
				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'single' );

					the_post_navigation();

				// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
				endif;
		endwhile; // End of the loop.
		?>
	</div>
	<div class="col-lg-3 col-12">
		<div class="blog-sidebar">
			<!-- Single Widget -->
			<?php get_sidebar();?>
			<!--/ End Single Widget -->
		</div>
	</div>	
</div>
</div>
</section>

<?php
get_footer();
?>