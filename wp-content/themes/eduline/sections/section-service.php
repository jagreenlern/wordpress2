<?php if(get_theme_mod('eduline_service_enable')):?>
<!-- Why Choose -->
<section id="why-choose" class="why-choose section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<?php
					$service_title = absint( get_theme_mod('eduline_service_page_title') );
					$queried_post = get_post($service_title);
					$image_url = get_the_post_thumbnail_url($service_title);
					?>
					<h2><?php echo esc_html($queried_post->post_title); ?></h2>
					<p><?php echo esc_html($queried_post->post_content); ?></p>
					<?php wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-7 col-md-12 col-12">
				<div class="row">
						<?php
  						
  						$i=1;

  						for ($j=1;$j<=4;$j++){
		                  $edulineservice[$j] 	  = get_theme_mod('eduline_service_title_'.$j);
		                
		                  $edulineserviceicon[$j] = get_theme_mod('eduline_service_icon_'.$j);
		                }

		                for ($k=1;$k<=4;$k++){
	                      	
                      	$args = array (
                          'post_type' 	  => 'page',
                          'posts_per_page' => 4,
                          'post__in'      => array($edulineservice[$k]),
                          'orderby'       =>'post__in',
                        );

	                    $edulineserviceloop = new WP_Query($args);

                      	if ($edulineserviceloop->have_posts()) :  while ($edulineserviceloop->have_posts()) : $edulineserviceloop->the_post(); ?>
							<div class="col-lg-6 col-md-6 col-12">
								<!-- Choose Single -->
								<div class="choose-single">
									<i class="<?php echo esc_attr($edulineserviceicon[$k]); ?>" aria-hidden="true"></i>
									<div class="content">
										<h4><?php the_title(); ?></h4>
										<?php the_excerpt(); ?>
									</div>
								</div>
								<!--/ End Choose Single -->
							</div>
						<?php $i=$i+1;?> 
			          <?php  endwhile; 
			          	wp_reset_postdata();
					endif; 
					}
					?>
				</div>
			</div>
			<div class="col-lg-5 col-md-12 col-12">
				<!-- Choose Single -->
				<?php 
				$service_title1 = absint( get_theme_mod('eduline_service_page_title') );	
				$image_url = get_the_post_thumbnail_url($service_title1);?>
				<div class="why-image">
					<img src="<?php echo esc_url($image_url);?>">
				</div>
				<!--/ End Choose Single -->
				<?php wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
</section>
<!-- End Why Choose -->
<?php endif;?>