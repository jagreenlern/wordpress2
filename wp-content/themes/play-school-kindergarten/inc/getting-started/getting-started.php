<?php
//about theme info
add_action( 'admin_menu', 'play_school_kindergarten_gettingstarted' );
function play_school_kindergarten_gettingstarted() {    	
	add_theme_page( esc_html__('About Theme', 'play-school-kindergarten'), esc_html__('About Theme', 'play-school-kindergarten'), 'edit_theme_options', 'play_school_kindergarten_guide', 'play_school_kindergarten_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function play_school_kindergarten_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getting-started/getting-started.css');
}
add_action('admin_enqueue_scripts', 'play_school_kindergarten_admin_theme_style');

//guidline for about theme
function play_school_kindergarten_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'play-school-kindergarten' );

?>

<div class="wrapper-info">
	<div class="col-left">
		<div class="intro">
			<h3><?php esc_html_e( 'Welcome to Play School Kindergarten WordPress Theme', 'play-school-kindergarten' ); ?> <span>Version: <?php echo esc_html($theme['Version']);?></span></h3>
		</div>
		<div class="started">
			<hr>
			<div class="free-doc">
				<div class="lz-4">
					<h4><?php esc_html_e( 'Start Customizing', 'play-school-kindergarten' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Go to', 'play-school-kindergarten' ); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizer', 'play-school-kindergarten' ); ?> </a> <?php esc_html_e( 'and start customizing your website', 'play-school-kindergarten' ); ?></span>
					</ul>
				</div>
				<div class="lz-4">
					<h4><?php esc_html_e( 'Support', 'play-school-kindergarten' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Send your query to our', 'play-school-kindergarten' ); ?> <a href="<?php echo esc_url( PLAY_SCHOOL_KINDERGARTEN_SUPPORT ); ?>" target="_blank"> <?php esc_html_e( 'Support', 'play-school-kindergarten' ); ?></a></span>
					</ul>
				</div>
			</div>
			<p><?php esc_html_e( 'Play School Kindergarten is a beautiful and professional WordPress theme made for kindergartens, nurseries, play schools, preschools, childcare centres, elementary and primary schools. It can be used by people providing online courses and e-learning. You can also use this multipurpose theme if you run a training centre or any educational institutions. The theme serves the dedicated purpose of designing a site pertaining to children with its fun images and bright colours. Its colour scheme is so chosen to give it a fresh look as required for a child theme. The theme is fully responsive and cross-browser compatible to serve a wide range of audience. It is translation ready to satisfy various demographics with ease. Though it is fun-filled but that does not make it messy. It has a clean design and loads faster. Short codes are implemented to make its coding further easy and clean. The Play School Kindergarten theme is customizable which allows you to make small changes to it on your own. You can change its background, colour, logo, tagline etc. according to your requirements. It has dedicated header and footer area to add elements to it. It is an SEO-friendly theme which has social media integration to share your content on various networking platforms. ', 'play-school-kindergarten')?></p>
			<hr>			
			<div class="col-left-inner">
				<h3><?php esc_html_e( 'Get started with Free Play School Kindergarten Theme', 'play-school-kindergarten' ); ?></h3>
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/customizer-image.png" alt="" />
			</div>
		</div>
	</div>
	<div class="col-right">
		<div class="col-left-area">
			<h3><?php esc_html_e('Premium Theme Information', 'play-school-kindergarten'); ?></h3>
			<hr>
		</div>
		<div class="centerbold">
			<a href="<?php echo esc_url( PLAY_SCHOOL_KINDERGARTEN_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'play-school-kindergarten'); ?></a>
			<a href="<?php echo esc_url( PLAY_SCHOOL_KINDERGARTEN_BUY_NOW ); ?>"><?php esc_html_e('Buy Pro', 'play-school-kindergarten'); ?></a>
			<a href="<?php echo esc_url( PLAY_SCHOOL_KINDERGARTEN_PRO_DOCS ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'play-school-kindergarten'); ?></a>
			<hr class="secondhr">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/playschool-kindergarten.jpg" alt="" />
		</div>
		<h3><?php esc_html_e( 'PREMIUM THEME FEATURES', 'play-school-kindergarten'); ?></h3>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon01.png" alt="" />
			<h4><?php esc_html_e( 'Banner Slider', 'play-school-kindergarten'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon02.png" alt="" />
			<h4><?php esc_html_e( 'Theme Options', 'play-school-kindergarten'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon03.png" alt="" />
			<h4><?php esc_html_e( 'Custom Innerpage Banner', 'play-school-kindergarten'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon04.png" alt="" />
			<h4><?php esc_html_e( 'Custom Colors and Images', 'play-school-kindergarten'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon05.png" alt="" />
			<h4><?php esc_html_e( 'Fully Responsive', 'play-school-kindergarten'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon06.png" alt="" />
			<h4><?php esc_html_e( 'Hide/Show Sections', 'play-school-kindergarten'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon07.png" alt="" />
			<h4><?php esc_html_e( 'Woocommerce Support', 'play-school-kindergarten'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon08.png" alt="" />
			<h4><?php esc_html_e( 'Limit to display number of Posts', 'play-school-kindergarten'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon09.png" alt="" />
			<h4><?php esc_html_e( 'Multiple Page Templates', 'play-school-kindergarten'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon10.png" alt="" />
			<h4><?php esc_html_e( 'Custom Read More link', 'play-school-kindergarten'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon11.png" alt="" />
			<h4><?php esc_html_e( 'Code written with WordPress standard', 'play-school-kindergarten'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon12.png" alt="" />
			<h4><?php esc_html_e( '100% Multi language', 'play-school-kindergarten'); ?></h4>
		</div>
	</div>
</div>
<?php } ?>