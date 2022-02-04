<?php if(get_theme_mod('eduline_banner_enable')):
	$banner_tag_title = get_theme_mod( 'eduline_banner_tag_text', __( 'Accelerate your future', 'eduline' ) );
	$banner_sub_title = get_theme_mod('eduline_banner_sub_title');
	$banner_page = get_theme_mod('eduline_banner_title');
	$banner_img_url = get_the_post_thumbnail_url($banner_page);
	$queried_post =  get_post($banner_page);
	$banner_btn_title  = get_theme_mod('eduline_banner_button_title');
	$banner_btn_url  = get_theme_mod('eduline_banner_button_url');
	?>
	<!-- Hero Area -->
	<section class="hero-area overlay" data-stellar-background-ratio="0.5" style="background-image:url(<?php echo esc_url($banner_img_url);?>);">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="inner-head">
						<div class="row">
							<div class="col-lg-7">
								<div class="slider-text">
									<span class="short"><?php echo esc_html($banner_tag_title);?></span>
									<h1><?php echo esc_html($queried_post->post_title);?> <span><?php echo esc_html($banner_sub_title);?></span></h1>
									<p><?php echo esc_html($queried_post->post_content);?></p>
									<?php wp_reset_postdata(); ?>
								</div>
							</div>
						</div>
						<!-- Trip Search -->
						<div class="search-main">
							<div class="search-form">
								<div class="row">
									<div class="col-lg-3 col-md-6 col-12">
										<!-- Form Button -->
										<div class="form-group button">
											<button type="button" class="btn"><a href="<?php echo esc_url($banner_btn_url);?>"><?php echo esc_html($banner_btn_title);?></a></button>
										</div>
										<!--/ End Form Button -->
									</div>
								</div>
							</div>
						</div>
						<!--/ End Trip Search -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/ End Hero Area -->
	<?php endif;?>