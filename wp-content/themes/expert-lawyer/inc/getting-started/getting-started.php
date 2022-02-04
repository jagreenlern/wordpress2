<?php
//about theme info
add_action( 'admin_menu', 'expert_lawyer_gettingstarted' );
function expert_lawyer_gettingstarted() {    	
	add_theme_page( esc_html__('About Theme', 'expert-lawyer'), esc_html__('About Theme', 'expert-lawyer'), 'edit_theme_options', 'expert_lawyer_guide', 'expert_lawyer_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function expert_lawyer_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getting-started/getting-started.css');
}
add_action('admin_enqueue_scripts', 'expert_lawyer_admin_theme_style');

//guidline for about theme
function expert_lawyer_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'expert-lawyer' );

?>

<div class="wrapper-info">
	<div class="col-left">
		<div class="intro">
			<h3><?php esc_html_e( 'Welcome to Expert Lawyer WordPress Theme', 'expert-lawyer' ); ?> <span>Version: <?php echo esc_html($theme['Version']);?></span></h3>
		</div>
		<div class="started">
			<hr>
			<div class="free-doc">
				<div class="lz-4">
					<h4><?php esc_html_e( 'Start Customizing', 'expert-lawyer' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Go to', 'expert-lawyer' ); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizer', 'expert-lawyer' ); ?> </a> <?php esc_html_e( 'and start customizing your website', 'expert-lawyer' ); ?></span>
					</ul>
				</div>
				<div class="lz-4">
					<h4><?php esc_html_e( 'Support', 'expert-lawyer' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Send your query to our', 'expert-lawyer' ); ?> <a href="<?php echo esc_url( EXPERT_LAWYER_SUPPORT ); ?>" target="_blank"> <?php esc_html_e( 'Support', 'expert-lawyer' ); ?></a></span>
					</ul>
				</div>
			</div>
			<p><?php esc_html_e( 'Expert lawyer is a WordPress theme with modern features and the principal focus of design is on the law companies as well as the individual attorneys. If you really want an organised web presence when it comes to your legal firm, this legal attorney WordPress theme will be highly beneficial. In case you are working as a legal advisor or operating the legal offices around the globe, you can create legal focussed websites with this WordPress theme that will provide legal help to clients. You have the option to use this Theme as a portfolio page as well for the professionals dealing with law practices. Being multipurpose to the core, it works well with other professions also whether it is medical or technology. If you are interested to promote the professional services related to the civil law and law practices, this is a special WordPress theme and is available with personalised options as well as call to action button [CTA]. It has some special features like animation, bootstrap, clean code, customization options and much more. Even if you do not have the technical knowhow, you have still the option to modify this WordPress theme and design the desired pages. This is a perfect choice for creating attorney at law website. ', 'expert-lawyer')?></p>
			<hr>			
			<div class="col-left-inner">
				<h3><?php esc_html_e( 'Get started with Free Expert Lawyer Theme', 'expert-lawyer' ); ?></h3>
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/customizer-image.png" alt="" />
			</div>
		</div>
	</div>
	<div class="col-right">
		<div class="col-left-area">
			<h3><?php esc_html_e('Premium Theme Information', 'expert-lawyer'); ?></h3>
			<hr>
		</div>
		<div class="centerbold">
			<a href="<?php echo esc_url( EXPERT_LAWYER_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'expert-lawyer'); ?></a>
			<a href="<?php echo esc_url( EXPERT_LAWYER_BUY_NOW ); ?>"><?php esc_html_e('Buy Pro', 'expert-lawyer'); ?></a>
			<a href="<?php echo esc_url( EXPERT_LAWYER_PRO_DOCS ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'expert-lawyer'); ?></a>
			<hr class="secondhr">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/expert-lawyer2.jpg" alt="" />
		</div>
		<h3><?php esc_html_e( 'PREMIUM THEME FEATURES', 'expert-lawyer'); ?></h3>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon01.png" alt="" />
			<h4><?php esc_html_e( 'Banner Slider', 'expert-lawyer'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon02.png" alt="" />
			<h4><?php esc_html_e( 'Theme Options', 'expert-lawyer'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon03.png" alt="" />
			<h4><?php esc_html_e( 'Custom Innerpage Banner', 'expert-lawyer'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon04.png" alt="" />
			<h4><?php esc_html_e( 'Custom Colors and Images', 'expert-lawyer'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon05.png" alt="" />
			<h4><?php esc_html_e( 'Fully Responsive', 'expert-lawyer'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon06.png" alt="" />
			<h4><?php esc_html_e( 'Hide/Show Sections', 'expert-lawyer'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon07.png" alt="" />
			<h4><?php esc_html_e( 'Woocommerce Support', 'expert-lawyer'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon08.png" alt="" />
			<h4><?php esc_html_e( 'Limit to display number of Posts', 'expert-lawyer'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon09.png" alt="" />
			<h4><?php esc_html_e( 'Multiple Page Templates', 'expert-lawyer'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon10.png" alt="" />
			<h4><?php esc_html_e( 'Custom Read More link', 'expert-lawyer'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon11.png" alt="" />
			<h4><?php esc_html_e( 'Code written with WordPress standard', 'expert-lawyer'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon12.png" alt="" />
			<h4><?php esc_html_e( '100% Multi language', 'expert-lawyer'); ?></h4>
		</div>
	</div>
</div>
<?php } ?>