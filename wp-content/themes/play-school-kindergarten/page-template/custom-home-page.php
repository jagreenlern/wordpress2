<?php
/**
 * Template Name: Custom Home
 */

get_header(); ?>

<?php do_action( 'play_school_kindergarten_above_slider' ); ?>

<section id="slider">
  	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
	    <?php $play_school_kindergarten_slider_pages = array();
	      	for ( $count = 1; $count <= 4; $count++ ) {
		        $mod = intval( get_theme_mod( 'play_school_kindergarten_slide_page' . $count ));
		        if ( 'page-none-selected' != $mod ) {
		          	$play_school_kindergarten_slider_pages[] = $mod;
		        }
	      	}
	      	if( !empty($play_school_kindergarten_slider_pages) ) :
	        $args = array(
	          	'post_type' => 'page',
	          	'post__in' => $play_school_kindergarten_slider_pages,
	          	'orderby' => 'post__in'
	        );
	        $query = new WP_Query( $args );
	        if ( $query->have_posts() ) :
	          $i = 1;
	    ?>     
	    <div class="carousel-inner" role="listbox">
	      	<?php  while ( $query->have_posts() ) : $query->the_post(); ?>
	        <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
	          	<?php the_post_thumbnail(); ?>
	          	<div class="carousel-caption">
		            <div class="inner_carousel">
		              	<h1><?php the_title(); ?></h1>
		              	<p><?php $excerpt = get_the_excerpt(); echo esc_html( play_school_kindergarten_string_limit_words( $excerpt,10 ) ); ?></p>
		              	<div class="read-more">
				          <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small"><?php esc_html_e('Read More','play-school-kindergarten'); ?><span class="screen-reader-text"><?php esc_html_e('Read More','play-school-kindergarten'); ?></span>
				          </a>
				      	</div>	
		            </div>
	          	</div>
	        </div>
	      	<?php $i++; endwhile; 
	      	wp_reset_postdata();?>
	    </div>
	    <?php else : ?>
	    <div class="no-postfound"></div>
	      <?php endif;
	    endif;?>
	    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	      <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
	      <span class="screen-reader-text"><?php esc_html_e( 'Prev','play-school-kindergarten' );?></span>
	    </a>
	    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	      <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
	      <span class="screen-reader-text"><?php esc_html_e( 'Prev','play-school-kindergarten' );?></span>
	    </a>
  	</div>  
  	<div class="clearfix"></div>
</section>

<?php do_action('play_school_kindergarten_befor_about_section'); ?>

<?php /*--About Us--*/?>
<section class="about">
  	<div class="container">
	    <h2><?php echo esc_html(get_theme_mod('play_school_kindergarten_about_name','')); ?></h2>
	    <?php
	      	$args = array( 'name' => get_theme_mod('play_school_kindergarten_about_setting',''));
	      	$query = new WP_Query( $args );
	      	if ( $query->have_posts() ) :
		        while ( $query->have_posts() ) : $query->the_post(); ?>
			    	<div class="row">
			          <div class="col-lg-8 col-md-8">
			            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			            <p><?php the_excerpt(); ?></p>
			          </div>
			          <div class="col-lg-4 col-md-4">
			            <div class="abt-image">
			              <?php the_post_thumbnail(); ?>
			            </div>
			          </div>
			        </div>
		        <?php endwhile; 
	        	wp_reset_postdata();?>
	        <?php else : ?>
	          <div class="no-postfound"></div>
	        <?php endif; 
		?>
  	</div>
</section>

<?php do_action('play_school_kindergarten_after_about_section'); ?>

<div class="container lz-content">
  <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>