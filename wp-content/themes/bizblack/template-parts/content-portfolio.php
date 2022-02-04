<?php 
$bizblack_enable_portfolio_section = get_theme_mod( 'bizblack_enable_portfolio_section', false );
$bizblack_portfolio_title = get_theme_mod( 'bizblack_portfolio_title');
$bizblack_portfolio_subtitle = get_theme_mod( 'bizblack_portfolio_subtitle' );

if($bizblack_enable_portfolio_section==true ) {
    

        $bizblack_portfolio_no        = 8;
        $bizblack_portfolio_page      = array();
        for( $k = 1; $k <= $bizblack_portfolio_no; $k++ ) {
             $bizblack_portfolio_page[] = get_theme_mod('bizblack_portfolio_page'.$k); 

        }
        $bizblack_portfolio_args  = array(
        'post_type' => 'page',
        'post__in' => array_map( 'absint', $bizblack_portfolio_page ),
        'posts_per_page' => absint($bizblack_portfolio_no),
        'orderby' => 'post__in'
        ); 
        $bizblack_portfolio_query = new WP_Query( $bizblack_portfolio_args );
      

?>

  
 <!-- gallery start-->
    <section class="gallary-one bg-dull sp-100 pb-0">
		<?php if(!empty($bizblack_portfolio_title)) { ?>
			<div class="container">
			  <div class="row">
				<div class="col-12">
				  <div class="all-title">
					<h3 class="sec-title">
					   <?php echo esc_html($bizblack_portfolio_title); ?>
					</h3>
					 <p><?php echo esc_html($bizblack_portfolio_subtitle); ?></p>
				  </div>
				</div>
			  </div>
			</div>
		<?php } ?>
        <div class="container-fluid">
            <div class="row masonary-wrap">
				<?php
					$count = 0;
					while($bizblack_portfolio_query->have_posts() && $count <= 8 ) :
					$bizblack_portfolio_query->the_post();
				 ?> 
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 port-item mas-item px-0 cardio fitness">
					  <div class="project">
						<?php if(has_post_thumbnail()){ ?>
							<div class="proj-img">
							  <img src="<?php the_post_thumbnail_url(); ?>" alt="project">
								<div class="proj-overlay text-center">
								  <a href="<?php the_post_thumbnail_url(); ?>" class="pop-btn">
								  <i class="fa fa-plus"></i><br><?php echo the_title(); ?></a>
							  </div>
							</div>
						<?php }
						else
						  {?>
						<div class="proj-img">
							  <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/bg.jpg; ?>" alt="project">
								<div class="proj-overlay text-center">
								  <a href="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/bg.jpg; ?>" class="pop-btn">
								  <i class="fa fa-plus"></i><br><?php echo the_title(); ?></a>
							  </div>
							</div>
							<?php
						  }
						  ?>
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