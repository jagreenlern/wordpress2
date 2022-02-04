<?php 
$bizblack_enable_feature_section = get_theme_mod( 'bizblack_enable_feature_section', true );
        $bizblack_features_no        = 8;
        $bizblack_features_pages      = array();
        for( $i = 1; $i <= $bizblack_features_no; $i++ ) {
             $bizblack_features_pages[] = get_theme_mod('bizblack_feature_page'.$i); 

        }
        $bizblack_features_args  = array(
        'post_type' => 'page',
        'post__in' => array_map( 'absint', $bizblack_features_pages ),
        'posts_per_page' => absint($bizblack_features_no),
        'orderby' => 'post__in'
        ); 
        $bizblack_features_query = new WP_Query( $bizblack_features_args );
      
if($bizblack_enable_feature_section==true ) {
?>  
  <section class="service-two">
	 <div class="container-fluid">
		<div class="row">
			<?php
				$count = 0;
				while($bizblack_features_query->have_posts() && $count <= 2 ) :
				$bizblack_features_query->the_post();
			 ?> 
			<div class="col-md-4 col-sm-6 p-0">
				<div class="service-box2">
				  <div class="s-icon-box">
					<?php if(has_post_thumbnail()) {
						echo the_post_thumbnail(); 
					  }
					  else
					  {?>
						  <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/features.jpg">
						<?php
					  }
					  ?>
				  </div>
				  
				  <div class="s-content">
					<h5><?php the_title(); ?></h5>
					<?php the_excerpt(); ?>
				  </div>
			  </div>
			</div>
			<?php
				  $count = $count + 1;
				  endwhile;
				  wp_reset_postdata();
			  ?> 
		</div>	  
	</div>		
  </section>
  <?php } ?>