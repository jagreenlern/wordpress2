<?php if(get_theme_mod('eduline_registration_enable')):?>
	<!-- Registration -->
	<?php
	$regist_title = absint( get_theme_mod('eduline_registration_title') );
	$img_url = get_the_post_thumbnail_url($regist_title);
	$queried_post = get_post($regist_title);
	?>
	<section class="registration overlay section" data-stellar-background-ratio="0.5" style="background: url(<?php echo esc_url($img_url);?>);">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="registration-title">
						<h2><?php echo esc_html($queried_post->post_title); ?></h2>
						<p><?php echo esc_html($queried_post->post_content); ?></p>
						<?php wp_reset_postdata(); ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<!-- Single Registration -->
					<div class="registration-form">
						<!-- Form -->
						<?php  do_shortcode(esc_html(get_theme_mod('eduline_newsletter_shortcode'))); ?>
						<!--/ End Form -->
					</div>
					<!-- Single Registration -->
				</div>
			</div>
		</div>
	</section>
	<!--/ End Registration -->
	<?php endif;?>