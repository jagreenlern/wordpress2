<?php if(get_theme_mod('eduline_testimonials_enable')):?>
	<!-- Testimonials -->
	<section class="testimonials">
		<div class="container-fluid">
			<div class="row">
				<?php
				$testimonial_title = absint( get_theme_mod('eduline_testimonials_title') );
				$queried_post = get_post($testimonial_title);
				$image_url = get_the_post_thumbnail_url($testimonial_title);
				?>
				<div class="col-lg-6 col-md-6 col-12">
					<div class="left" data-stellar-background-ratio="0.9" style="background-image:url(<?php echo esc_url($image_url);?>);">
						<a href="#" class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-12">
					<div class="testi-inner">
						<h4 class="title"><?php echo esc_html($queried_post->post_title);?></h4>
						<?php wp_reset_postdata(); ?>
						<div class="testimonial-slider">
							<?php
							$i=1;
							for($k=1;$k<5;$k++){
								$testimonial[$i] = absint( get_theme_mod('eduline_testimonial_page_'.$k) );    
								$testimonialposition[$i] = get_theme_mod('eduline_testimonial_position_'.$k);
								$i=$i+1;     
							}
							$args = array (
								'post_type' => 'page',
								'posts_per_page' => $i,
								'post__in'      => $testimonial,
								'orderby'        =>'post__in',
							);
							$testimonialloop = new WP_Query($args);
							$k=1;
							if ($testimonialloop->have_posts()) :  while ($testimonialloop->have_posts()) : $testimonialloop->the_post();?>
								<!-- Single Testimonial -->
								<div class="single-testimonial">
									<i class="fa fa-quote-right" aria-hidden="true"></i>
									<div class="main-content">
										<?php if(has_post_thumbnail()): 
											the_post_thumbnail(); 
										endif; ?>
										<?php the_excerpt();?>
										<p class="name"><?php the_title(); ?><span><?php echo esc_html($testimonialposition[$k]); ?></span></p>
									</div>
								</div>
								<!--/ End Single Testimonial -->
								<!--/ End Single Testimonial -->
								<?php  $k=$k+1; endwhile;
								wp_reset_postdata();  
							endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/ End Testimonials -->
	<?php endif;?>	