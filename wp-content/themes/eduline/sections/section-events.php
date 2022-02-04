<?php if(get_theme_mod('eduline_events_enable')):?>
	<!-- Events -->
	<section class="events section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-title">
						<?php
						$event_title = get_theme_mod('eduline_events_title');
						$queried_post = get_post($event_title);
						?>
						<h2><?php echo esc_html($queried_post->post_title); ?></h2>
						<p><?php echo esc_html($queried_post->post_content); ?></p>
						<?php wp_reset_postdata(); ?>
					</div>
				</div>
			</div>
			<div class="row">
				<?php
				$i=1;
				for($k=1;$k<5;$k++){
					$event[$i] = get_theme_mod('eduline_event_page_'.$k);    
					$eventdate[$i] = get_theme_mod('eduline_event_date_'.$k);
					$eventaddress[$i] = get_theme_mod('eduline_event_address_'.$k);
					$i=$i+1;     
				}
				$args = array (
					'post_type' => 'page',
					'posts_per_page' => $i,
					'post__in'      => $event,
					'orderby'        =>'post__in',
				);
				$eventloop = new WP_Query($args);
				$k=1;
				if ($eventloop->have_posts()) :  while ($eventloop->have_posts()) : $eventloop->the_post();?>
					<!-- Single Event -->
					<div class="col-12">
						<div class="single-event">
							<div class="row">
								<div class="col-lg-2 col-md-2 col-12">
									<div class="date">
										<p><?php eduline_posted_on();?></p>
									</div>
								</div>
								<div class="col-lg-5 col-md-5 col-12">
									<div class="cat">
										<p><?php the_title();?> <span><?php echo esc_html($eventdate[$k]); ?></span></p>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-12">
									<div class="location">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										<div class="content">
											<p><?php echo esc_html($eventaddress[$k]); ?></p>
										</div>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-12">
									<?php if(has_post_thumbnail()): ?>
										<div class="image">
											<?php the_post_thumbnail(); ?> 
										</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
					<!-- /End Single Event -->
					<?php  $k=$k+1; endwhile;
					wp_reset_postdata();  
				endif; ?>
			</div>
		</div>
	</section>
	<!--/ End Events -->
	<?php endif;?>