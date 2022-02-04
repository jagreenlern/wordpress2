<?php if(get_theme_mod('eduline_team_enable')): ?>
	<!-- Team -->
	<section class="team section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-title">
						<?php
						$team_title = absint( get_theme_mod('eduline_team_page_title') );
						$queried_post = get_post($team_title);
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
					$team[$i] = absint( get_theme_mod('eduline_team_page_'.$k) );    
					$teamposition[$i] = absint( get_theme_mod('eduline_team_position_'.$k) );
					$i=$i+1;
				}
				$args = array (
					'post_type' => 'page',
					'posts_per_page' => $i,
					'post__in'      => $team,
					'orderby'        =>'post__in'
				);
				$teamloop = new WP_Query($args); $k=1;
				if ($teamloop->have_posts()) :  while ($teamloop->have_posts()) : $teamloop->the_post(); ?>
					<div class="col-lg-4 col-md-4 col-12">
						<!-- Single Team -->
						<div class="single-team">
							<?php if(has_post_thumbnail()):
								the_post_thumbnail(); 
							endif; ?>
							<div class="team-content">
								<h4><?php the_title();?></h4>
								<p><?php echo esc_html($teamposition[$k]); ?> </p>
							</div>
						</div>
						<!--/ End Single Team -->
					</div>
					<?php  $k=$k+1; endwhile;
					wp_reset_postdata();  
				endif; ?>
			</div>
		</div>
	</section>
	<!--/ End Team -->
	<?php endif;?>