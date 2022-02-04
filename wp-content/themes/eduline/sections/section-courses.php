<?php if(get_theme_mod('eduline_course_enable')):?>
	<!-- Courses -->
	<section class="courses section-bg section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-title">
						<?php
						$course_title = get_theme_mod('eduline_course_title');
						$queried_post = get_post(absint( $course_title ));?>
						<h2><?php echo esc_html($queried_post->post_title); ?></h2>
						<p><?php echo esc_html($queried_post->post_content); ?></p>
						<?php wp_reset_postdata(); ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="course-slider">
						<?php $k=1; 
						for($i=1;$i<7;$i++){
							$course_page[$k]= absint( get_theme_mod('eduline_course_title_'.$i) );
							$k=$k+1;
						}

						$args = array (
							'post_type' => 'page',
							'post_per_page' => $k,
							'posts_per_page'=>7,
							'post__in'         => $course_page ? $course_page : '',
							'orderby'           =>'post__in',
						);

						$courseloop = new WP_Query($args);


						$j=1;

						if ($courseloop->have_posts()) :  while ($courseloop->have_posts()) : $courseloop->the_post();?>
							<!-- Single Course -->
							<div class="single-course">
								<div class="course-head overlay">
									<?php if(has_post_thumbnail()):
										the_post_thumbnail();
									endif;?>
									<a href="<?php the_permalink();?>" class="btn"><?php esc_html_e( 'Read More', 'eduline' );?><i class="fa fa-book" aria-hidden="true"></i></a>
								</div>
								<div class="single-content">
									<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
									<?php the_excerpt();?>
								</div>

							</div>
							<!--/ End Single Course -->
							<?php $j=$j+1; endwhile;
							wp_reset_postdata();  
						endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/ End Courses -->
	<?php endif;?>	