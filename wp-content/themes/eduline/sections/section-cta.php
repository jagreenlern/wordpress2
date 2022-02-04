<?php if(get_theme_mod('eduline_cta_enable')):?>
	<!-- Apply Area -->
	<section class="apply">
		<!-- Apply-inner -->
		<div class="container">
			<div class="apply-inner">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-12">
						<div class="apply-text">
							<?php 
							$cta_title = get_theme_mod('eduline_cta_title');
							$query_post = get_post($cta_title);	
							?>
							<p><?php echo esc_html($query_post->post_content);?></p>
							<h1><?php echo esc_html($query_post->post_title);?></h1>
							<?php wp_reset_postdata(); ?>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<?php 
						$cta_btn_title = get_theme_mod('eduline_cta_button_title');
						$cta_btn_url = get_theme_mod('eduline_cta_button_url');
						?>
						<div class="apply-button">
							<div class="button">
								<a href="<?php echo esc_url($cta_btn_url);?>" class="btn "><?php echo esc_html($cta_btn_title);?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Apply-inner -->
	</section>
	<!--/ End Apply Area -->
	<?php endif;?>