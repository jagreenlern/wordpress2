<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @subpackage bizblack
 * @since 1.0 
 */
?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<article class="blog-item blog-2">
		<?php if(has_post_thumbnail()) : ?>
			<div class="post-img">
			   <?php bizblack_post_thumbnail(); ?>
			    <div class="date">
			        <?php bizblack_posted_on(); ?>
			    </div>
			</div>
		<?php endif; ?>
		<ul class="post-meta">
			<?php bizblack_posted_by(); ?>
			<?php bizblack_post_comments(); ?> 
			<?php if(!has_post_thumbnail()) : ?>
				<?php bizblack_posted_on(); ?>
			<?php endif; ?>                                 
			
		</ul>
		<div class="post-content p-4 text-center">
			<?php
			if ( is_singular() ) :
				the_title( '<h5>', '</h5>' );
			else :
				the_title( '<h5><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h5>' );
			endif;
			?>
		  <?php
			if( is_singular() ){
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'bizblack' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );
			}else{
				the_excerpt();
			}

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bizblack' ),
				'after'  => '</div>',
			) );
			?>
			<a href="<?php the_permalink(); ?>" class="text-uppercase read-more"><?php echo esc_html__('Read More','bizblack'); ?></a>
		</div>
	</article>
</div>