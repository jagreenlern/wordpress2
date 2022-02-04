<?php if(get_theme_mod('eduline_become_enable')):?>
	<?php 
	$become_title = get_theme_mod('eduline_become_title');
	$query_post = get_post(absint( $become_title ));	
	$img_url = get_the_post_thumbnail_url(absint( $become_title ));
	?>
	<!-- Become Area -->
	<section class="become overlay section" data-stellar-background-ratio="0.5" style="background-image: url(<?php echo esc_url($img_url);?>)">
		<div class="container">
			<div class="become-inner">
				<div class="row">
					<div class="col-12">
						<div class="become-text">
							<h2><?php echo esc_html($query_post->post_title);?></h2>
							<p><?php echo esc_html($query_post->post_content);?></p>
							<?php wp_reset_postdata(); ?>
							<div class="button">
								<?php 
								$become_btn_title = get_theme_mod('eduline_become_button_title');
								$become_btn_url = get_theme_mod('eduline_become_button_url');
								?>
								<?php if(!empty($become_btn_url)):?>
									<a href="<?php echo esc_url($become_btn_url);?>" class="btn"><?php echo esc_html($become_btn_title);?></a>
								<?php endif;?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/ End Become Area -->
	<?php endif;?>