<?php

add_action( 'admin_menu', 'finance_accounting_gettingstarted' );
function finance_accounting_gettingstarted() {
	add_theme_page( esc_html__('About Theme', 'finance-accounting'), esc_html__('About Theme', 'finance-accounting'), 'edit_theme_options', 'finance-accounting-guide-page', 'finance_accounting_guide');   
}

function finance_accounting_admin_theme_style() {
   wp_enqueue_style('finance-accounting-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/get_started_info.css');
   wp_enqueue_script('tabs', esc_url(get_template_directory_uri()) . '/inc/dashboard/js/tab.js');
}
add_action('admin_enqueue_scripts', 'finance_accounting_admin_theme_style');

function finance_accounting_notice(){
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {?>
    <div class="notice notice-success is-dismissible getting_started">
		<div class="notice-content">
			<h2><?php esc_html_e( 'Thanks for installing Finance Accounting Lite Theme', 'finance-accounting' ) ?> </h2>
			<p><?php esc_html_e( "Please Click on the link below to know the theme setup information", 'finance-accounting' ) ?></p>
			<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=finance-accounting-guide-page' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Get Started ', 'finance-accounting' ); ?></a></p>
		</div>
	</div>
	<?php }
}
add_action('admin_notices', 'finance_accounting_notice');

/**
 * Theme Info Page
 */
function finance_accounting_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'finance-accounting' ); ?>

	<div class="wrap getting-started">
		<div class="getting-started__header">
				<div class="intro">
					<div class="pad-box">
						<h2 align="center"><?php esc_html_e( 'Welcome to Finance Accounting Theme', 'finance-accounting' ); ?>
						<span class="version" align="center">Version: <?php echo esc_html($theme['Version']);?></span></h2>	
						</span>
						<div class="powered-by">
							<p align="center"><strong><?php esc_html_e( 'Theme created by ThemesEye', 'finance-accounting' ); ?></strong></p>
							<p align="center">
								<img role="img" class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/logo.png'); ?>"/>
							</p>
						</div>
					</div>
				</div>

			<div class="tab">
			  <button role="tab" class="tablinks" onclick="finance_accounting_open(event, 'lite_theme')">Getting Started</button>		  
			  <button role="tab" class="tablinks" onclick="finance_accounting_open(event, 'pro_theme')">Get Premium</button>
			</div>

			<!-- Tab content -->
			<div id="lite_theme" class="tabcontent open">
				<h2 class="tg-docs-section intruction-title" id="section-4" align="center"><?php esc_html_e( '1). Finance Accounting Lite Theme', 'finance-accounting' ); ?></h2>
				<div class="row">
					<div class="col-md-5">
						<div class="pad-box">
	              			<img role="img" class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/screenshot.png'); ?>"/>
	              		 </div> 
					</div>
					<div class="theme-instruction-block col-md-7">
						<div class="pad-box">
		                    <p><?php esc_html_e( 'Finance Accounting is a professional looking WordPress theme for finance and accounting businesses. It is dedicatedly designed for financial advisors, law firms, accountants, consults, wealth advisors and investors. The theme can be used by general corporate websites, start-ups and business ventures. Its professional look makes it apt for serious businesses and corporate websites. It has stunning and modern design. The user-friendly interface caters hassle-free navigation. It provides easy customization. The theme has all the essential plugins just enough to set up a finance site. It supports third party plugins to extend the functionality and include a specific function. It has multiple page layouts for different pages. You can include banner to give it an altogether different look. The Finance and Accounting theme is responsive to adjust its layout across any device size; cross-browser compatible to load on all browsers and translation ready to serve a particular region or population. It has search engine optimized code which pushes for faster page loading. The theme is made in bootstrap framework. Short codes allow clean and secure theme designing. It has a testimonial section for your users to share their experience about your site and services. This will give more insight to other users.', 'finance-accounting' ); ?></p>
							<ol>
								<li><?php esc_html_e( 'Start','finance-accounting'); ?> <a href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','finance-accounting'); ?></a> <?php esc_html_e( 'your website.','finance-accounting'); ?> </li>
							</ol>
	                    </div>
	                </div>
				</div><br><br>
				
	        </div>
	        <div id="pro_theme" class="tabcontent">
				<h2 class="dashboard-install-title" align="center"><?php esc_html_e( '2.) Premium Theme Information.','finance-accounting'); ?></h2>
            	<div class="row">
					<div class="col-md-7">
						<img role="img" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/responsive.png'); ?>" alt="">
						<div class="pro-links" >
					    	<a href="<?php echo esc_url( FINANCE_ACCOUNTING_LIVE_DEMO ); ?>"><?php esc_html_e('Live Demo', 'finance-accounting'); ?></a>
							<a href="<?php echo esc_url( FINANCE_ACCOUNTING_BUY_PRO ); ?>"><?php esc_html_e('Buy Pro', 'finance-accounting'); ?></a>
							<a href="<?php echo esc_url( FINANCE_ACCOUNTING_PRO_DOC ); ?>"><?php esc_html_e('Pro Documentation', 'finance-accounting'); ?></a>
						</div>
						<div class="pad-box">
							<h3><?php esc_html_e( 'Pro Theme Description','finance-accounting'); ?></h3>
                    		<p class="pad-box-p"><?php esc_html_e( 'The finance WordPress theme is highly effective and efficient theme oriented to consulting, accounting and financing websites. It is a thoughtfully designed theme well suited for financial advisors, corporate websites, startups, and business ventures. The framework of this theme is best for designing a sophisticated website.This fully responsive theme looks beautiful on all devices irrespective of their size and screen resolution. It is rigorously tested to make compatible with various browsers. With theme options panel, you can customize the theme to change its logo, color, background, header, footer, menu, and various other elements. The theme is optimized for faster loading. It is translation ready to attend maximum people. With banners and sliders, the theme has been given an attractive look. You can choose from a combination of Google Fonts and unlimited colors to try various looks for your site. The finance WordPress theme has several options to change the layout of the theme homepage and inner pages. With multiple templates and numerous inner pages, you can implement a particular layout to a single page or on all of the pages of the theme. It is SEO-friendly and implements social media icons for better exposure to the world. It has shortcodes to be applied to the widgetized area to implement any feature instantly. We provide full documentation and prompt support for any query you have regarding our theme functionality. The various sections like the testimonial section, subscription area and gallery will help connect with users in an advanced way. Brand yourself with this premium finance theme for better customer response.', 'finance-accounting' ); ?><p>
                    	</div>
					</div>
					<div class="col-md-5 install-plugin-right">
						<div class="pad-box">								
							<h3><?php esc_html_e( 'Pro Theme Features','finance-accounting'); ?></h3>
							<div class="dashboard-install-benefit">
								<ul>
									<li><?php esc_html_e( 'Easy install 10 minute setup Themes','finance-accounting'); ?></li>
									<li><?php esc_html_e( 'Multiplue Domain Usage','finance-accounting'); ?></li>
									<li><?php esc_html_e( 'Premium Technical Support','finance-accounting'); ?></li>
									<li><?php esc_html_e( 'FREE Shortcodes','finance-accounting'); ?></li>
									<li><?php esc_html_e( 'Multiple page templates','finance-accounting'); ?></li>
									<li><?php esc_html_e( 'Google Font Integration','finance-accounting'); ?></li>
									<li><?php esc_html_e( 'Customizable Colors','finance-accounting'); ?></li>
									<li><?php esc_html_e( 'Theme customizer ','finance-accounting'); ?></li>
									<li><?php esc_html_e( 'Documention','finance-accounting'); ?></li>
									<li><?php esc_html_e( 'Unlimited Color Option','finance-accounting'); ?></li>
									<li><?php esc_html_e( 'Plugin Compatible','finance-accounting'); ?></li>
									<li><?php esc_html_e( 'Social Media Integration','finance-accounting'); ?></li>
									<li><?php esc_html_e( 'Incredible Support','finance-accounting'); ?></li>
									<li><?php esc_html_e( 'Eye Appealing Design','finance-accounting'); ?></li>
									<li><?php esc_html_e( 'Simple To Install','finance-accounting'); ?></li>
									<li><?php esc_html_e( 'Fully Responsive ','finance-accounting'); ?></li>
									<li><?php esc_html_e( 'Translation Ready','finance-accounting'); ?></li>
									<li><?php esc_html_e( 'Custom Page Templates ','finance-accounting'); ?></li>
									<li><?php esc_html_e( 'WooCommerce Integration','finance-accounting'); ?></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
          	<div class="dashboard__blocks">
				<div class="row">
					<div class="col-md-3">
						<h3><?php esc_html_e( 'Get Support','finance-accounting'); ?></h3>
						<ol>
							<li><a href="<?php echo esc_url( FINANCE_ACCOUNTING_FREE_SUPPORT ); ?>"><?php esc_html_e( 'Free Theme Support','finance-accounting'); ?></a></li>
							<li><a href="<?php echo esc_url( FINANCE_ACCOUNTING_PRO_SUPPORT ); ?>"><?php esc_html_e( 'Premium Theme Support','finance-accounting'); ?></a></li>
						</ol>
					</div>

					<div class="col-md-3">
						<h3><?php esc_html_e( 'Getting Started','finance-accounting'); ?></h3>
						<ol>
							<li><?php esc_html_e( 'Start','finance-accounting'); ?> <a href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','finance-accounting'); ?></a> <?php esc_html_e( 'your website.','finance-accounting'); ?> </li>
						</ol>
					</div>
					<div class="col-md-3">
						<h3><?php esc_html_e( 'Buy Premium','finance-accounting'); ?></h3>
						<ol>
							<li><a href="<?php echo esc_url( FINANCE_ACCOUNTING_BUY_PRO ); ?>"><?php esc_html_e('Buy Pro', 'finance-accounting'); ?></a></li>
						</ol>
					</div>
				</div>
			</div>
		</div>		
	</div>
<?php }?>