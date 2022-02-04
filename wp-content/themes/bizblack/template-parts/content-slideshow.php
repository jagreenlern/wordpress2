<?php
/**
 * Template part for displaying section of banner content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @subpackage bizblack
 * @since 1.0 
 */
		$bizblack_enable_slider_section = get_theme_mod( 'bizblack_enable_slider_section', true );
		$bizblack_slider_no        = 3;
        $bizblack_slider_pages      = array();
        for( $i = 1; $i <= $bizblack_slider_no; $i++ ) {
             $bizblack_slider_pages[] = get_theme_mod('bizblack_slider_page'.$i); 
			 $bizblack_slider_page_btn_txt[]    =  get_theme_mod( "bizblack_slider_page_btn_txt_$i", 1 );
			 $bizblack_slider_page_btn_url[]    =  get_theme_mod( "bizblack_slider_page_btn_url_$i", 1 );
        }
        $bizblack_slider_args  = array(
        'post_type' => 'page',
        'post__in' => array_map( 'absint', $bizblack_slider_pages ),
        'posts_per_page' => absint($bizblack_slider_no),
        'orderby' => 'post__in'
        ); 
        $bizblack_slider_query = new WP_Query( $bizblack_slider_args );
      
if($bizblack_enable_slider_section==false ) {
?>  
 <section class="main-slider">
	<div class="slide-item">
		<img src="<?php echo esc_url(header_image());?>">
		  <div class="slide-overlay">
			 <div class="slide-table">
				<div class="slide-table-cell">
					<div class="container">
						<div class="slide-content">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php }

else 
{?>
<section>
 <!-- START OWL SLIDER -->
  <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
	<?php
		$count = 0;
		while($bizblack_slider_query->have_posts() && $count <= 2 ) :
		$bizblack_slider_query->the_post();
     ?> 
		<div class="carousel-item <?php if($count==0) {echo "active";} ?>">
		  <?php if(has_post_thumbnail()) {
		        echo the_post_thumbnail(); 
		  }
		  else
		  {?>
			  <img src="<?php echo get_header_image(); ?>">
			<?php
		  }
		  ?>
		  <div class="carousel-caption">
			<p><?php the_title(); ?></p>
			<?php if($bizblack_slider_page_btn_txt[$count]) {?>
				<a href="<?php echo esc_url($bizblack_slider_page_btn_url[$count]); ?>"><?php echo esc_html($bizblack_slider_page_btn_txt[$count]); ?></a>
			<?php } ?>	
		  </div>   
		</div>
     <?php
	  $count = $count + 1;
	  endwhile;
	  wp_reset_postdata();
      ?>
   
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon pre-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
  <!-- END OWL SLIDER -->
</section>
<?php
}
?>