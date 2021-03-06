<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package enlighten
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if(has_post_thumbnail()) : ?>
		<?php $enlighten_img = wp_get_attachment_image_src(get_post_thumbnail_id(),'enlighten-single-page'); 
        $enlighten_img_src = $enlighten_img[0]; 
        $img_show = get_theme_mod('enlighten_archive_img_disable','');
	        if($img_show != '1' ){?>
		<div class="post-image-wrap">
			<a href="<?php the_permalink(); ?>">
				<img src="<?php echo esc_url($enlighten_img_src); ?>" />
			</a>
		</div>
		<?php } ?>
	<?php endif; ?>
	<div class="post-meta">
	<?php
		if ( is_single() ) {
		?> <a href="<?php the_permalink() ?>"><h1 class="entry-title"><?php the_title(); ?></h1></a> <?php
		} else {
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		}

                        
		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta clearfix">
			<?php 
			$enlighten_archive_meta_data_disable = get_theme_mod('enlighten_archive_meta_data_disable','');
	        if( get_theme_mod('enlighten_archive_meta_data_disable') != '1' ){?>
				<div class="post-date">
				<?php enlighten_posted_on(); ?>
				</div>
				<div class="post-comment"><a href="<?php comments_link(); ?>"><i class="fa fa-comment-o"></i><?php comments_number(0); ?></a></div>
			<?php } ?>
		</div><!-- .entry-meta -->
		<div class="entry-content">
			<?php 
			$enlighten_excerpt_length = get_theme_mod( 'enlighten_archive_excerpt_lenght', '150' );
			echo enlighten_get_excerpt_content( $enlighten_excerpt_length ); 
			?>
		</div><!-- .entry-content -->
	<?php endif;?>
	</div>
</article><!-- #post-## -->
