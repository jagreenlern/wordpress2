<?php 
$bizblack_enable_team_section = get_theme_mod( 'bizblack_enable_team_section', false );
$bizblack_team_title  = get_theme_mod( 'bizblack_team_title' );
$bizblack_team_subtitle  = get_theme_mod( 'bizblack_team_subtitle' );


if($bizblack_enable_team_section==true ) {
    

        $bizblack_teams_no        = 6;
        $bizblack_teams_pages      = array();
        for( $i = 1; $i <= $bizblack_teams_no; $i++ ) {
             $bizblack_teams_pages[] = get_theme_mod('bizblack_team_page'.$i);

        }
        $bizblack_teams_args  = array(
        'post_type' => 'page',
        'post__in' => array_map( 'absint', $bizblack_teams_pages ),
        'posts_per_page' => absint($bizblack_teams_no),
        'orderby' => 'post__in'
        ); 
        $bizblack_teams_query = new WP_Query( $bizblack_teams_args );
      

?>
<section class="traniner-two sp-100">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php if(!empty($bizblack_team_title)) { ?>
        <div class="all-title">
          <h3 class="sec-title">
            <?php echo esc_html($bizblack_team_title); ?>
          </h3>
          <p>
          <?php echo esc_html($bizblack_team_subtitle); ?>
           </p>
        </div>
      <?php } ?>
      </div>
    </div>
    <div class="row">
       
        <?php
            $count = 0;
            while($bizblack_teams_query->have_posts() && $count <= 6 ) :
            $bizblack_teams_query->the_post();
         ?> 
        <div class="col-md-4 col-sm-6">
            <div class="our-team">
				<?php if(has_post_thumbnail()): ?>
					<div class="pic">
						<?php the_post_thumbnail(); ?>
						<div class="social_media_team">
							<p class="description">
								<?php the_excerpt(); ?>
							</p>
							
						</div>
					</div>
				
					
                <div class="team-prof">
                    <h3 class="post-title"><a href="#"><?php the_title(); ?></a></h3>
                </div>
				<?php endif; ?>	
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

  <!-- partner start-->
  <div class="partner-one">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="partner-slider owl-carousel owl-theme">
            <div class="partner-slide">
              <img src="assets/img/home/partner1.png" alt="partner">
            </div>
            <div class="partner-slide">
              <img src="assets/img/home/partner2.png" alt="partner">
            </div>
            <div class="partner-slide">
              <img src="assets/img/home/partner3.png" alt="partner">
            </div>
            <div class="partner-slide">
              <img src="assets/img/home/partner4.png" alt="partner">
            </div>
            <div class="partner-slide">
              <img src="assets/img/home/partner5.png" alt="partner">
            </div>
            <div class="partner-slide">
              <img src="assets/img/home/partner3.png" alt="partner">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- partner end--> 

<?php } ?>