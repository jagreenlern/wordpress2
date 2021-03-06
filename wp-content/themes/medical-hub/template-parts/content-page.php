<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bussiness_agency
 */
$hide_show_feature_image=medical_hub_get_option( 'medical_hub_show_feature_image_single_option');

?>

<article id="post-<?php the_ID(); ?>" class="post type-post status-publish has-post-thumbnail hentry" <?php post_class(); ?>>

	<figure>
		
		<div class="view hm-zoom">
			<a href="<?php the_permalink();?>">

                <?php if(!has_post_thumbnail() || $hide_show_feature_image=='hide') { echo''; }?>
				<?php
				if(has_post_thumbnail() && $hide_show_feature_image=="show")
				{
					the_post_thumbnail('full', array('class' => 'img-fluid'));
				}
				?>
				<div class="mask flex-center">
				</div>
			</a>
		</div>
	</figure>
    <header class="entry-header">
        <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    </header>


    <div class="entry-content">
		<?php
		the_content();
		wp_link_pages( array(
		'before' => '<div class="page-links">' . esc_html__( 'Pages:','medical-hub' ),
			'after'  => '</div>',
		) );
		?>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->


