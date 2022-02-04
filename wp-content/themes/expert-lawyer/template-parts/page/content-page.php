<?php
/**
 * Template part for displaying page content in page.php
 * @package WordPress
 * @subpackage expert-lawyer
 * @since 1.0
 * @version 0.1
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header" role="banner">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php expert_lawyer_edit_link( get_the_ID() ); ?>
	</header>
	<div class="entry-content">
		<?php the_post_thumbnail(); ?>
		<p><?php the_content();?></p>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'expert-lawyer' ),
				'after'  => '</div>',
			) );
		?>
	</div>
</article>