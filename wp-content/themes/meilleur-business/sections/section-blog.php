<?php 
/**
 * Template part for displaying Blog Section
 *
 *@package Meilleur Business
 */
?>
<?php 
	$blog_title    = meilleur_business_get_option( 'blog_title' );
	$blog_subtitle = meilleur_business_get_option( 'blog_subtitle' );
	$blog_category = meilleur_business_get_option( 'blog_category' );
	$blog_number   = meilleur_business_get_option( 'blog_number' );
	 
	 
?> 
    <?php if(!empty($blog_title)):?>
	  <div class="section-header">
	    <h2 class="section-title"><?php echo esc_html($blog_title);?></h2>
        <h3 class="section-subtitle"><?php echo esc_html($blog_subtitle);?></h3>
	  </div><!-- .section-header -->
  	<?php endif;?>
  <div class="section-content col-3">
  	<?php
		$blog_args = array(
			'posts_per_page' =>absint( $blog_number ),				
			'post_type' => 'post',
            'post_status' => 'publish',
            'paged' => 1,
			);

		if ( absint( $blog_category ) > 0 ) {
			$blog_args['cat'] = absint( $blog_category );
		}
		
		// Fetch posts.
		$the_query = new WP_Query( $blog_args );
		
	?>

	<?php if ( $the_query->have_posts() ) : 			
		while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		    <article>
		    	<div class="post-item">
			      	<?php if(has_post_thumbnail()):?>
				        <div class="featured-image">
				        	<a href="<?php the_permalink();?>"><?php the_post_thumbnail('meilleur-business-blog');?></a>  
				        </div>
			    	<?php endif?>

			    	<div class="entry-container">
				    	<div class="entry-meta">		         
				            <?php meilleur_business_posted_on();?>
				        </div><!-- .entry-meta -->

				        <header class="entry-header">
							<h2 class="entry-title">
								<a href="<?php the_permalink();?>"><?php the_title();?></a>
							</h2>
				        </header>

				        <div class="entry-content">
		 				    <?php
								$excerpt = meilleur_business_the_excerpt( 25 );
								echo wp_kses_post( wpautop( $excerpt ) );
							?>
				        </div><!-- .entry-content -->

				        <?php $readmore_text = meilleur_business_get_option( 'readmore_text' );?>
				        <a href="<?php the_permalink();?>" class="btn"><?php echo esc_html($readmore_text);?></a>
			        </div><!-- .entry-container -->
			    </div><!-- .post-item -->
		    </article>
	    <?php endwhile;?>
	    <?php wp_reset_postdata(); ?>
    <?php endif;?>
  </div>