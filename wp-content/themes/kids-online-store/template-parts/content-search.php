<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Kids Online Store
 */
?>

<article id="post-<?php the_ID(); ?>" class="article-box">
	<header class="entry-header">
		<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
        <hr>
		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php kids_online_store_posted_on(); ?>
		</div>
		<?php endif; ?>
	</header>

	<?php kids_online_store_post_thumbnail(); ?>

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div>
	<footer class="entry-footer">
		<?php kids_online_store_entry_footer(); ?>
	</footer>
</article>