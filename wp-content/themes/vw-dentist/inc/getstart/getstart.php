<?php
//about theme info
add_action( 'admin_menu', 'vw_dentist_gettingstarted' );
function vw_dentist_gettingstarted() {    	
	add_theme_page( esc_html__('About VW Dentist', 'vw-dentist'), esc_html__('About VW Dentist', 'vw-dentist'), 'edit_theme_options', 'vw_dentist_guide', 'vw_dentist_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function vw_dentist_admin_theme_style() {
   wp_enqueue_style('vw-dentist-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getstart/getstart.css');
   wp_enqueue_script('vw-dentist-tabs', esc_url(get_template_directory_uri()) . '/inc/getstart/js/tab.js');
   wp_enqueue_style( 'font-awesome-css', esc_url(get_template_directory_uri()).'/assets/css/fontawesome-all.css' );
}
add_action('admin_enqueue_scripts', 'vw_dentist_admin_theme_style');

//guidline for about theme
function vw_dentist_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'vw-dentist' );
?>

<div class="wrapper-info">
    <div class="col-left">
    	<h2><?php esc_html_e( 'Welcome to VW Dentist Theme', 'vw-dentist' ); ?> <span class="version">Version: <?php echo esc_html($theme['Version']);?></span></h2>
    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','vw-dentist'); ?></p>
    </div>
    <div class="col-right">
    	<div class="logo">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/final-logo.png" alt="" />
		</div>
		<div class="update-now">
			<h4><?php esc_html_e('Buy VW Dentist at 20% Discount','vw-dentist'); ?></h4>
			<h4><?php esc_html_e('Use Coupon','vw-dentist'); ?> ( <span><?php esc_html_e('vwpro20','vw-dentist'); ?></span> ) </h4> 
			<div class="info-link">
				<a href="<?php echo esc_url( VW_DENTIST_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Upgrade to Pro', 'vw-dentist' ); ?></a>
			</div>
		</div>
    </div>

    <div class="tab-sec">
		<div class="tab">
			<button class="tablinks" onclick="vw_dentist_open_tab(event, 'gutenberg_editor')"><?php esc_html_e( 'Setup With Gutunberg Block', 'vw-dentist' ); ?></button>
			<button class="tablinks" onclick="vw_dentist_open_tab(event, 'block_pattern')"><?php esc_html_e( 'Setup With Block Pattern', 'vw-dentist' ); ?></button>
		  	<button class="tablinks" onclick="vw_dentist_open_tab(event, 'lite_theme')"><?php esc_html_e( 'Setup With Customizer', 'vw-dentist' ); ?></button>		  
		  	<button class="tablinks" onclick="vw_dentist_open_tab(event, 'theme_pro')"><?php esc_html_e( 'Get Premium', 'vw-dentist' ); ?></button>
		  	<button class="tablinks" onclick="vw_dentist_open_tab(event, 'free_pro')"><?php esc_html_e( 'Support', 'vw-dentist' ); ?></button>
		</div>

		<!-- Tab content -->
		<?php
			$vw_dentist_plugin_custom_css = '';
			if(class_exists('Ibtana_Visual_Editor_Menu_Class')){
				$vw_dentist_plugin_custom_css ='display: block';
			}
		?>
		<div id="gutenberg_editor" class="tabcontent open">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
			$plugin_ins = VW_Dentist_Plugin_Activation_Settings::get_instance();
			$vw_dentist_actions = $plugin_ins->recommended_actions;
			?>
				<div class="vw-dentist-recommended-plugins">
				    <div class="vw-dentist-action-list">
				        <?php if ($vw_dentist_actions): foreach ($vw_dentist_actions as $key => $vw_dentist_actionValue): ?>
				                <div class="vw-dentist-action" id="<?php echo esc_attr($vw_dentist_actionValue['id']);?>">
			                        <div class="action-inner plugin-activation-redirect">
			                            <h3 class="action-title"><?php echo esc_html($vw_dentist_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($vw_dentist_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($vw_dentist_actionValue['link']); ?>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php }else{ ?>
				<h3><?php esc_html_e( 'Gutunberg Blocks', 'vw-dentist' ); ?></h3>
				<hr class="h3hr">
				<div class="vw-dentist-pattern-page">
			    	<a href="<?php echo esc_url( admin_url( 'admin.php?page=ibtana-visual-editor-templates' ) ); ?>" class="vw-pattern-page-btn ibtana-dashboard-page-btn button-primary button"><?php esc_html_e('Ibtana Settings','vw-dentist'); ?></a>
			    </div>
			<?php } ?>
		</div>

		<div id="block_pattern" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
				$plugin_ins = VW_Dentist_Plugin_Activation_Settings::get_instance();
				$vw_dentist_actions = $plugin_ins->recommended_actions;
				?>
				<div class="vw-dentist-recommended-plugins">
				    <div class="vw-dentist-action-list">
				        <?php if ($vw_dentist_actions): foreach ($vw_dentist_actions as $key => $vw_dentist_actionValue): ?>
				                <div class="vw-dentist-action" id="<?php echo esc_attr($vw_dentist_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($vw_dentist_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($vw_dentist_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($vw_dentist_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" href="javascript:void(0);" get-start-tab-id="gutenberg-editor-tab"><?php esc_html_e('Skip','vw-dentist'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="gutenberg-editor-tab" style="<?php echo esc_attr($vw_dentist_plugin_custom_css); ?>">
			  	<h3><?php esc_html_e( 'Block Patterns', 'vw-dentist' ); ?></h3>
				<hr class="h3hr">
				<p><?php esc_html_e('Follow the below instructions to setup Home page with Block Patterns.','vw-dentist'); ?></p>
              	<p><b><?php esc_html_e('Click on Below Add new page button >> Click on "+" Icon >> Click Pattern Tab >> Click on homepage sections >> Publish.','vw-dentist'); ?></span></b></p>
              	<div class="vw-dentist-pattern-page">
			    	<a href="javascript:void(0)" class="vw-pattern-page-btn button-primary button"><?php esc_html_e('Add New Page','vw-dentist'); ?></a>
			    </div>
              	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/block-pattern.png" alt="" />				
	        </div>
		</div>

		<div id="lite_theme" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
				$plugin_ins = VW_Dentist_Plugin_Activation_Settings::get_instance();
				$vw_dentist_actions = $plugin_ins->recommended_actions;
				?>
				<div class="vw-dentist-recommended-plugins">
				    <div class="vw-dentist-action-list">
				        <?php if ($vw_dentist_actions): foreach ($vw_dentist_actions as $key => $vw_dentist_actionValue): ?>
				                <div class="vw-dentist-action" id="<?php echo esc_attr($vw_dentist_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($vw_dentist_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($vw_dentist_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($vw_dentist_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" get-start-tab-id="lite-theme-tab" href="javascript:void(0);"><?php esc_html_e('Skip','vw-dentist'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="lite-theme-tab" style="<?php echo esc_attr($vw_dentist_plugin_custom_css); ?>">
				<h3><?php esc_html_e( 'Lite Theme Information', 'vw-dentist' ); ?></h3>
				<hr class="h3hr">
			  	<p><?php esc_html_e('VW Dentist is specifically designed for dentists, dental hygienists, dental clinics as well as providers of oral health. It is also perfect fit for any medical as well as health organization. One of the special features of VW Dentist is that it is accompanied with the mobile ready design that is responsive to the core and is based on the Bootstrap 4 technology. Due to responsive nature, it works well on the screens of different dimensions. This theme comprises of targeted features having high functionality and all these features are for the medical and dental practices. One of the important specialities with VW Dentist is a very strong theme options panel apart from an additional page as well as post- Meta options. With the later, it becomes quite easy to customize various theme aspects and you can do all this with just some clicks. There is no requirement of coding skill. If you are just starting a dental clinic, VW Dentist is something you must go for and in case you check its demo, you will find this theme with a latest design and above all, entire feature list is quite impressive. ','vw-dentist'); ?></p>
			  	<div class="col-left-inner">
			  		<h4><?php esc_html_e( 'Theme Documentation', 'vw-dentist' ); ?></h4>
					<p><?php esc_html_e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'vw-dentist' ); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_DENTIST_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'vw-dentist' ); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Theme Customizer', 'vw-dentist'); ?></h4>
					<p> <?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'vw-dentist'); ?></p>
					<div class="info-link">
						<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'vw-dentist'); ?></a>
					</div>
					<hr>				
					<h4><?php esc_html_e('Having Trouble, Need Support?', 'vw-dentist'); ?></h4>
					<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'vw-dentist'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_DENTIST_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'vw-dentist'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Reviews & Testimonials', 'vw-dentist'); ?></h4>
					<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'vw-dentist'); ?>  </p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_DENTIST_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'vw-dentist'); ?></a>
					</div>
			  		<div class="link-customizer">
						<h3><?php esc_html_e( 'Link to customizer', 'vw-dentist' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','vw-dentist'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-welcome-write-blog"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_dentist_topbar') ); ?>" target="_blank"><?php esc_html_e('Topbar Settings','vw-dentist'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-slides"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_dentist_slidersettings') ); ?>" target="_blank"><?php esc_html_e('Slider Section','vw-dentist'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_dentist_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','vw-dentist'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','vw-dentist'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-admin-customizer"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=vw_dentist_typography') ); ?>" target="_blank"><?php esc_html_e('Typography','vw-dentist'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_dentist_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','vw-dentist'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_dentist_woocommerce_section') ); ?>" target="_blank"><?php esc_html_e('WooCommerce Layout','vw-dentist'); ?></a>
								</div> 
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_dentist_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','vw-dentist'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','vw-dentist'); ?></a>
								</div> 
							</div>
						</div>
					</div>
			  	</div>
				<div class="col-right-inner">
					<h3 class="page-template"><?php esc_html_e('How to set up Home Page Template','vw-dentist'); ?></h3>
				  	<hr class="h3hr">
					<p><?php esc_html_e('Follow these instructions to setup Home page.','vw-dentist'); ?></p>
	                <ul>
	                  	<p><span class="strong"><?php esc_html_e('1. Create a new page :','vw-dentist'); ?></span><?php esc_html_e(' Go to ','vw-dentist'); ?>
					  	<b><?php esc_html_e(' Dashboard >> Pages >> Add New Page','vw-dentist'); ?></b></p>

	                  	<p><?php esc_html_e('Name it as "Home" then select the template "Custom Home Page".','vw-dentist'); ?></p>
	                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/home-page-template.png" alt="" />
	                  	<p><span class="strong"><?php esc_html_e('2. Set the front page:','vw-dentist'); ?></span><?php esc_html_e(' Go to ','vw-dentist'); ?>
					  	<b><?php esc_html_e(' Settings >> Reading ','vw-dentist'); ?></b></p>
					  	<p><?php esc_html_e('Select the option of Static Page, now select the page you created to be the homepage, while another page to be your default page.','vw-dentist'); ?></p>
	                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/set-front-page.png" alt="" />
	                  	<p><?php esc_html_e(' Once you are done with this, then follow the','vw-dentist'); ?> <a class="doc-links" href="https://www.vwthemesdemo.com/docs/free-vw-dentist/" target="_blank"><?php esc_html_e('Documentation','vw-dentist'); ?></a></p>
	                </ul>
			  	</div>
			</div>
		</div>	

		<div id="theme_pro" class="tabcontent">
		  	<h3><?php esc_html_e( 'Premium Theme Information', 'vw-dentist' ); ?></h3>
			<hr class="h3hr">
		    <div class="col-left-pro">
		    	<p><?php esc_html_e('Dentist WordPress Theme is well designed and being versatile, it is associated with many features. It has the potential to work with any type of niche and the main purpose is to excel the websites related to dental health. Being multipurpose, it is not only used for dental field but for clinics related to any medical field associated with dentistry and it is also an excellent choice for the dental hospitals as well. When you go for the installation of this theme, you have the selection choice between full width as well as boxed theme layout. Your content is going to look fabulous. Dentist WordPress theme comprises of pre-designed website color schemes but you also have the option to design your own as well. It also has various page layouts as well as widgets apart from multiple content elements that are added. Another important feature is the Twitter integration with which you are immensely benefitted because you can share the updates with the followers on social media platforms. Dentist theme has a clean code that is also well written and as a result the pages can be loaded in a very short span of time. Being responsive to the core, all the issues related to compatibility are eliminated.','vw-dentist'); ?></p>
		    	<div class="pro-links">
			    	<a href="<?php echo esc_url( VW_DENTIST_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'vw-dentist'); ?></a>
					<a href="<?php echo esc_url( VW_DENTIST_BUY_NOW ); ?>"><?php esc_html_e('Buy Pro', 'vw-dentist'); ?></a>
					<a href="<?php echo esc_url( VW_DENTIST_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'vw-dentist'); ?></a>
				</div>
		    </div>
		    <div class="col-right-pro">
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/responsive.png" alt="" />
		    </div>
		    <div class="featurebox">
			    <h3><?php esc_html_e( 'Theme Features', 'vw-dentist' ); ?></h3>
				<hr class="h3hr">
				<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th></th>
								<th><?php esc_html_e('Free Themes', 'vw-dentist'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'vw-dentist'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Theme Customization', 'vw-dentist'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'vw-dentist'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Logo Upload', 'vw-dentist'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Social Media Links', 'vw-dentist'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Slider Settings', 'vw-dentist'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Number of Slides', 'vw-dentist'); ?></td>
								<td class="table-img"><?php esc_html_e('4', 'vw-dentist'); ?></td>
								<td class="table-img"><?php esc_html_e('Unlimited', 'vw-dentist'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Template Pages', 'vw-dentist'); ?></td>
								<td class="table-img"><?php esc_html_e('3', 'vw-dentist'); ?></td>
								<td class="table-img"><?php esc_html_e('6', 'vw-dentist'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'vw-dentist'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'vw-dentist'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'vw-dentist'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Theme sections', 'vw-dentist'); ?></td>
								<td class="table-img"><?php esc_html_e('2', 'vw-dentist'); ?></td>
								<td class="table-img"><?php esc_html_e('12', 'vw-dentist'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Contact us Page Template', 'vw-dentist'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'vw-dentist'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Blog Templates & Layout', 'vw-dentist'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'vw-dentist'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Page Templates & Layout', 'vw-dentist'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('2(Left/Right Sidebar)', 'vw-dentist'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Color Pallete For Particular Sections', 'vw-dentist'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Global Color Option', 'vw-dentist'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Reordering', 'vw-dentist'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Demo Importer', 'vw-dentist'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Allow To Set Site Title, Tagline, Logo', 'vw-dentist'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Enable Disable Options On All Sections, Logo', 'vw-dentist'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Full Documentation', 'vw-dentist'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Latest WordPress Compatibility', 'vw-dentist'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Woo-Commerce Compatibility', 'vw-dentist'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support 3rd Party Plugins', 'vw-dentist'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Secure and Optimized Code', 'vw-dentist'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Exclusive Functionalities', 'vw-dentist'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Enable / Disable', 'vw-dentist'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Google Font Choices', 'vw-dentist'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Gallery', 'vw-dentist'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Simple & Mega Menu Option', 'vw-dentist'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'vw-dentist'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Shortcodes', 'vw-dentist'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'vw-dentist'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Premium Membership', 'vw-dentist'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Budget Friendly Value', 'vw-dentist'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Priority Error Fixing', 'vw-dentist'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Feature Addition', 'vw-dentist'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('All Access Theme Pass', 'vw-dentist'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Seamless Customer Support', 'vw-dentist'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td></td>
								<td class="table-img"></td>
								<td class="update-link"><a href="<?php echo esc_url( VW_DENTIST_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'vw-dentist'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="free_pro" class="tabcontent">
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-star-filled"></span><?php esc_html_e('Pro Version', 'vw-dentist'); ?></h4>
				<p> <?php esc_html_e('To gain access to extra theme options and more interesting features, upgrade to pro version.', 'vw-dentist'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_DENTIST_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get Pro', 'vw-dentist'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-cart"></span><?php esc_html_e('Pre-purchase Queries', 'vw-dentist'); ?></h4>
				<p> <?php esc_html_e('If you have any pre-sale query, we are prepared to resolve it.', 'vw-dentist'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_DENTIST_CONTACT ); ?>" target="_blank"><?php esc_html_e('Question', 'vw-dentist'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">		  		
		  		<h4><span class="dashicons dashicons-admin-customizer"></span><?php esc_html_e('Child Theme', 'vw-dentist'); ?></h4>
				<p> <?php esc_html_e('For theme file customizations, make modifications in the child theme and not in the main theme file.', 'vw-dentist'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_DENTIST_CHILD_THEME ); ?>" target="_blank"><?php esc_html_e('About Child Theme', 'vw-dentist'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-admin-comments"></span><?php esc_html_e('Frequently Asked Questions', 'vw-dentist'); ?></h4>
				<p> <?php esc_html_e('We have gathered top most, frequently asked questions and answered them for your easy understanding. We will list down more as we get new challenging queries. Check back often.', 'vw-dentist'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_DENTIST_FAQ ); ?>" target="_blank"><?php esc_html_e('View FAQ','vw-dentist'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-sos"></span><?php esc_html_e('Support Queries', 'vw-dentist'); ?></h4>
				<p> <?php esc_html_e('If you have any queries after purchase, you can contact us. We are eveready to help you out.', 'vw-dentist'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_DENTIST_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Contact Us', 'vw-dentist'); ?></a>
				</div>
		  	</div>
		</div>
	</div>
</div>
<?php } ?>