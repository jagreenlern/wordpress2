<?php if(get_theme_mod('eduline_blog_enable')):?>
	<!-- Blogs -->
	<section class="blog section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-title">
						<?php
						$btitle[1] = get_theme_mod('eduline_blog_title');
						$args = array (
                          'post_type' => 'page',
                          'post_per_page' => 1,
                          'post__in'         => $btitle,
                          'orderby'           =>'post__in',
                        );

                      $bloop = new WP_Query($args);
                      if ($bloop->have_posts()) :  while ($bloop->have_posts()) : $bloop->the_post();
						?>
						<h2><?php the_title() ?></h2>
						<p><?php the_content(); ?></p>
						 <?php  endwhile; 
						            endif; ?>
						<?php  wp_reset_postdata(); ?>

					</div>
				</div>
			</div>
			<div class="row">
				<?php
				$blog_catId = absint(get_theme_mod( 'eduline_blog_category_id'));
				$blog_number = get_theme_mod('eduline_blog_number');
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => absint( $blog_number ),
					'post_status' => 'publish',
					'cat' => absint( $blog_catId ),

				);

				$blogloop = new WP_Query($args);

				while ($blogloop->have_posts()) : 
					$blogloop->the_post(); 
					?>
					<div class="col-lg-4 col-md-4 col-12">
						<!-- Single Blog -->
						<div class="single-blog">
							<?php if(has_post_thumbnail()): ?>
								<div class="blog-head">
									<?php the_post_thumbnail();	?>
								</div>
							<?php endif;?>	
							<div class="blog-content">
								<div class="date"><i class="fa fa-calendar"></i><?php eduline_posted_on();?><span><?php	
								$blogId = absint( get_the_ID() );
								$category_detail=get_the_category($blogId);//$post->ID
								foreach($category_detail as $cd){
									echo esc_html($cd->cat_name);
								}
								?>	</span></div>
								<h4 class="blog-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
								<div class="bottom">
									<img src="<?php echo esc_url(get_avatar_url( $blogId ));?>">
									<div class="content">
										<p><?php eduline_posted_by();?></p>
									</div>
								</div>
							</div>
							<!-- End Single Blog -->
						</div>
					</div>
				<?php endwhile;
				wp_reset_postdata();
				?>
			</div>
		</div>
	</section>
	<!--/ End Blogs -->
<?php endif;?>