<?php 
$bizzmo_enable_portfolio_section = get_theme_mod( 'bizzmo_enable_portfolio_section', false );
$bizzmo_portfolio_title = get_theme_mod( 'bizzmo_portfolio_title');
$bizzmo_portfolio_subtitle = get_theme_mod( 'bizzmo_portfolio_subtitle' );

if($bizzmo_enable_portfolio_section==true ) {
    

        $bizzmo_portfolio_no        = 8;
        $bizzmo_portfolio_page      = array();
        for( $k = 1; $k <= $bizzmo_portfolio_no; $k++ ) {
             $bizzmo_portfolio_page[] = get_theme_mod('bizzmo_portfolio_page'.$k); 

        }
        $bizzmo_portfolio_args  = array(
        'post_type' => 'page',
        'post__in' => array_map( 'absint', $bizzmo_portfolio_page ),
        'posts_per_page' => absint($bizzmo_portfolio_no),
        'orderby' => 'post__in'
        ); 
        $bizzmo_portfolio_query = new WP_Query( $bizzmo_portfolio_args );
      

?>

  
 <!-- gallery start-->
    <section class="gallary-one bg-dull sp-100 pb-0">
		<div class="container">
		  <div class="row">
			<div class="col-12">
			  <?php if(!empty($bizzmo_portfolio_title)) { ?>
			  <div class="all-title">
				<h3 class="sec-title">
				   <?php echo esc_html($bizzmo_portfolio_title); ?>
				</h3>
				<span class="title-line">
					<i></i>
					<i></i>
					<i></i>
				</span>
				 <p><?php echo esc_html($bizzmo_portfolio_subtitle); ?></p>
			  </div>
			<?php } ?>
			</div>
		  </div>
     	</div>
        <div class="container-fluid">
            <div class="row masonary-wrap">
				<?php
					$count = 0;
					while($bizzmo_portfolio_query->have_posts() && $count <= 8 ) :
					$bizzmo_portfolio_query->the_post();
				 ?> 
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 port-item mas-item px-0">
					  <div class="project">
						<?php if(has_post_thumbnail()): ?>
							<div class="proj-img">
							  <img src="<?php the_post_thumbnail_url(); ?>" alt="project">
								<div class="proj-overlay text-center">
								  <a href="<?php the_post_thumbnail_url(); ?>" class="pop-btn">
								  <i class="fa fa-plus"></i><br><?php echo the_title(); ?></a>
							  </div>
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
    <!-- gallery end--> 
<?php } ?>