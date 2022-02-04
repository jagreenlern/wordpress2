<?php
/**
 * Template part for displaying posts
 * 
 * @subpackage play-school-kindergarten
 * @since 1.0
 * @version 1.4
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="article_content">
		<header role="banner" class="entry-header">
			<?php   
		        if ( is_single() ) {
		          	the_title( '<h1 class="entry-title">', '</h1>' );
		        } elseif ( is_front_page() && is_home() ) {
		          	the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		        } else {
		          	the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		        }
		    ?>
		</header>

		<?php if ( '' !== get_the_post_thumbnail() || is_single() ) : ?>
			<div class="post-thumbnail">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( 'play-school-kindergarten-featured-image' ); ?>
					<span class="screen-reader-text"><?php the_title(); ?></span>
				</a>
			</div>
		<?php endif; ?>

		<div class="entry-content">
			<?php
			/* translators: %s: Name of current post */
			if ( is_single() ) :
			the_content();
			else :
			the_excerpt();
			endif;
			

			wp_link_pages( array(
				'before'      => '<div class="page-links">' . __( 'Pages:', 'play-school-kindergarten' ),
				'after'       => '</div>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			) );
			?>
		</div>

		<?php
		if ( is_single() ) {
			play_school_kindergarten_entry_footer();
		}
		?>
	</div>
</article>