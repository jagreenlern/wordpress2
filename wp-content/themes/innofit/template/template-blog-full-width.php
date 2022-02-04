<?php
/**
 * Template Name: Blog Full Width
 */
get_header();
innofit_breadcrumbs();
?>
<!-- Blog & Sidebar Section -->
<section class="site-content">
	<div class="container">
		<div class="row">
			<!--Blog Posts-->
			<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="blog" id="content">
			<?php $innofit_pages = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$innofit_args = array( 'post_type' => 'post','paged'=>$innofit_pages);
				$innofit_loop = new WP_Query( $innofit_args );
				if ( $innofit_loop->have_posts() ) :
					// Start the Loop.
					while ( $innofit_loop->have_posts() ) : $innofit_loop->the_post();
						// Include the post format-specific template for the content.
						get_template_part( 'content','');
					endwhile;

				if (  function_exists( 'innofitp_activate' ) ):
				// pagination function
					$innofit_obj = new innofit_pagination();
					$innofit_obj->innofit_page($innofit_loop);
				endif;

				endif;
				wp_reset_postdata();
				?>
			</div>
			</div>
			<!--/Blog Posts-->
		</div>
	</div>
</section>
<!--/End of Blog & Sidebar Section-->
<?php get_footer(); ?>
