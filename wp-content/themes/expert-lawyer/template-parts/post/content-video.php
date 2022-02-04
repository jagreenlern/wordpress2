<?php
/**
 * Template part for displaying posts
 * @package WordPress
 * @subpackage expert-lawyer
 * @since 1.0
 * @version 1.4
 */

?>
<?php
	$content = apply_filters( 'the_content', get_the_content() );
	$video = false;

	// Only get video from the content if a playlist isn't present.
	if ( false === strpos( $content, 'wp-playlist-script' ) ) {
		$video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );
	}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="article_content">
    <?php
		if ( ! is_single() ) {
			// If not a single post, highlight the video file.
			if ( ! empty( $video ) ) {
				foreach ( $video as $video_html ) {
					echo '<div class="entry-video">';
						echo $video_html;
					echo '</div>';
				}
			};
		}; 
	?> 
	<h3><?php the_title(); ?></h3>
	<div class="metabox"> 
		<span class="entry-author"><i class="fas fa-user"></i><?php the_author(); ?></span>
		<span class="entry-date"><i class="fas fa-calendar-alt"></i><?php echo esc_html( get_the_date()); ?></span>
		<span class="entry-comments"><i class="fas fa-comments"></i><?php comments_number( __('0 Comments','expert-lawyer'), __('0 Comments','expert-lawyer'), __('% Comments','expert-lawyer') ); ?></span>
	</div>
	<p><?php the_excerpt(); ?></p>
	<div class="read-btn">
		<a href="<?php the_permalink();?>" title="<?php esc_attr_e( 'READ MORE', 'expert-lawyer' ); ?>"><?php esc_html_e('READ MORE','expert-lawyer'); ?></a>
	</div>
    <div class="clearfix"></div> 
  </div>
</article>