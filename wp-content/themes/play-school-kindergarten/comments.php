<?php
/**
 * The template for displaying comments
 * 
 * @subpackage play-school-kindergarten
 * @since 1.0
 * @version 0.3
 */

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
	<?php
	if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
			$comments_number = get_comments_number();
			if ( '1' === $comments_number ) {
				/* translators: %s: post title */
				printf( esc_html__( 'One thought on &ldquo;%s&rdquo;', 'play-school-kindergarten' ), esc_html(get_the_title()) );
			} else {
				printf(
					esc_html(
					/* translators: 1: number of comments, 2: post title */
						_nx( 
							'%1$s Reply to &ldquo;%2$s&rdquo;',
							'%1$s Replies to &ldquo;%2$s&rdquo;',
							$comments_number,
							'comments title',
							'play-school-kindergarten'
						)
					),
					esc_html (number_format_i18n( $comments_number ) ),
					esc_html (get_the_title())
				);
			}
			?>
		</h2>

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'avatar_size' => 100,
					'style'       => 'ol',
					'short_ping'  => true,
				) );
			?>
		</ol>
		
	<?php

	endif; 
	
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'play-school-kindergarten' ); ?></p>
	<?php
	endif;

	comment_form();
	?>
</div>