<?php
$bizzmo_enable_callout_section = get_theme_mod( 'bizzmo_enable_callout_section', true );
$bizzmo_callout_image = get_theme_mod( 'bizzmo_callout_image' );

if($bizzmo_enable_callout_section == true ) {
   
$bizzmo_callout_title = get_theme_mod( 'bizzmo_callout_title');
$bizzmo_callout_content = get_theme_mod( 'bizzmo_callout_content');
$bizzmo_callout_button_label1 = get_theme_mod( 'bizzmo_callout_button_label1');
$bizzmo_callout_button_link1 = get_theme_mod( 'bizzmo_callout_button_link1');


?>
<section class="cta-2">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-lg-center text-center">
				<h3 class="c-white text-capitalize"><?php echo esc_html($bizzmo_callout_title); ?></h3>
				<p class="c-white mb-0"><?php echo esc_html($bizzmo_callout_content); ?></p>
				<?php if(!empty($bizzmo_callout_button_label1 && $bizzmo_callout_button_link1)): ?>
					<a href="<?php echo esc_url($bizzmo_callout_button_link1); ?>" class="btn btn-two mt-3"><?php echo esc_html($bizzmo_callout_button_label1); ?></a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<?php } ?>