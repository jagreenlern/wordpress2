<?php
$bizblack_enable_callout_section = get_theme_mod( 'bizblack_enable_callout_section', true );
$bizblack_callout_image = get_theme_mod( 'bizblack_callout_image' );

if($bizblack_enable_callout_section == true ) {
   
$bizblack_callout_title = get_theme_mod( 'bizblack_callout_title');
$bizblack_callout_content = get_theme_mod( 'bizblack_callout_content');
$bizblack_callout_button_label1 = get_theme_mod( 'bizblack_callout_button_label1');
$bizblack_callout_button_link1 = get_theme_mod( 'bizblack_callout_button_link1');


?>
<section class="cta-2">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-lg-center text-center">
				<h3 class="c-white text-capitalize"><?php echo esc_html($bizblack_callout_title); ?></h3>
				<p class="c-white mb-0"><?php echo esc_html($bizblack_callout_content); ?></p>
				<?php if(!empty($bizblack_callout_button_label1 && $bizblack_callout_button_link1)): ?>
					<a href="<?php echo esc_url($bizblack_callout_button_link1); ?>" class="btn btn-two mt-3"><?php echo esc_html($bizblack_callout_button_label1); ?></a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<?php } ?>