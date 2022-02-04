<?php 
$bizzmo_enable_team_section = get_theme_mod( 'bizzmo_enable_team_section', false );
$bizzmo_team_title  = get_theme_mod( 'bizzmo_team_title' );
$bizzmo_team_subtitle  = get_theme_mod( 'bizzmo_team_subtitle' );


if($bizzmo_enable_team_section==true ) {
    

        $bizzmo_teams_no        = 6;
        $bizzmo_teams_pages      = array();
        for( $i = 1; $i <= $bizzmo_teams_no; $i++ ) {
             $bizzmo_teams_pages[] = get_theme_mod('bizzmo_team_page'.$i);

        }
        $bizzmo_teams_args  = array(
        'post_type' => 'page',
        'post__in' => array_map( 'absint', $bizzmo_teams_pages ),
        'posts_per_page' => absint($bizzmo_teams_no),
        'orderby' => 'post__in'
        ); 
        $bizzmo_teams_query = new WP_Query( $bizzmo_teams_args );
      

?>
<section class="traniner-two bg-dull sp-100">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php if(!empty($bizzmo_team_title)) { ?>
        <div class="all-title">
          <h3 class="sec-title">
            <?php echo esc_html($bizzmo_team_title); ?>
          </h3>
		  <span class="title-line">
			<i></i>
			<i></i>
			<i></i>
		  </span>
          <p>
          <?php echo esc_html($bizzmo_team_subtitle); ?>
           </p>
        </div>
      <?php } ?>
      </div>
    </div>
    <div class="row">
       
        <?php
            $count = 0;
            while($bizzmo_teams_query->have_posts() && $count <= 6 ) :
            $bizzmo_teams_query->the_post();
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
 

<?php } ?>