<?php
/**
* atomy-support.php
* @link https://www.denisfranchi.com
*
* @package Atomy
*
*/

function atomy_page_display() {
?>

 <div class="at-header-admin">
      <div class="at-logo-admin">
		   	<h2><?php echo esc_html__('Atomy','atomy');?></h2>
		  	<span><?php echo esc_html__('V 1.1.7','atomy');?></span>
		  </div>
		   <div class="at-logo-icon-admin">
		   	<span class="dashicons dashicons-screenoptions"></span>
	     </div>
   </div>
<!-- Tab links -->
<div class="atomy-tab-support">
	<div class="tab">
		<button class="tablinks" onclick="atomyopenGuide(event, 'Welcome')"id="defaultOpen"><?php esc_html_e('Welcome','atomy'); ?></button>
		<button class="tablinks" onclick="atomyopenGuide(event, 'Help')"><?php esc_html_e('Help','atomy'); ?></button>
		<button class="tablinks" onclick="atomyopenGuide(event, 'Options')"><?php esc_html_e('Pro Version','atomy'); ?></button>
		<button class="tablinks" onclick="atomyopenGuide(event, 'Changelog')"><a class="at-nav-link" href="<?php echo esc_url(atomy_url_updates_theme); ?>" target="_blank"><?php echo esc_html('Changelog','atomy')?></a></button>
		<button class="tablinks" onclick="atomyopenGuide(event, 'Starter Demos')"><a class="at-nav-link" href="<?php echo esc_url(atomy_url_demos_theme); ?>" target="_blank"><?php echo esc_html('Starter Demos','atomy')?></a></button>
	</div>
	<!-- Tab content -->
	<!-- Welcome -->
	<div id="Welcome" class="tabcontent">
		<h3 class="atomy-welkome-support-title"><?php esc_html_e('Welcome to Atomy!','atomy' ); ?></h3>
		<p class="atomy-welkome-support"><?php esc_html_e('Thank you for choosing Atomy.','atomy');?><br>
			<?php esc_html_e('The theme is ready to be used. You can customize everything you want in a few simple clicks directly from the front end.','atomy'); ?><br>
			<?php esc_html_e('This theme was created to be used with the WooCommerce plugin to fully exploit its potential.','atomy');?><br>
			<?php esc_html_e('You can choose the demo you prefer and import it in a few minutes, or you can create your site by customizing it as you prefer.','atomy');?><br>
			<?php esc_html_e('The code of this theme was designed to create a multilingual site in a very simple and fast way.','atomy');?><br>
			<?php esc_html_e('The demos of our themes are always in development, so we always release new ones!','atomy')?><br>
			<?php esc_html_e('Here you can view the demos and see the previews:','atomy')?><a class="av-link-news" target="_blank" href="<?php echo esc_url(atomy_url_demos_theme)?>"><?php esc_html_e('Demos Atomy','atomy')?></a><br>
			<?php esc_html_e('For support: ','atomy')?><a class="av-link-news" target="_blank" href="<?php echo esc_url(atomy_url_support_theme)?>"><?php esc_html_e('Wordpress.org','atomy')?></a>
		  </p>
		  <div class="container">
		  <h2><?php _e('Important links to get you started with Atomy','atomy')?></h2>
		  <div class="row">
		  <div class="col-md-4">
		    <h3><?php _e('Get Started','atomy')?></h3>
		    <button class="at-button-dem"><a target="_blank" href="<?php echo esc_url(atomy_url_basic_documentation);?>"><?php _e('Learn Basics','atomy')?></a></button>
		  </div>
		  <div class="col-md-4">
			<h3><?php _e('Next Steps','atomy')?></h3>
			<ul>
			  <li><span class="dashicons dashicons-media-document"></span><a target="_blank" href="<?php echo esc_url(atomy_url_documentation_theme);?>"><?php _e('Documentation','atomy')?></a></li>
			  <li><span class="dashicons dashicons-layout"></span><a target="_blank" href="<?php echo esc_url(atomy_url_demos_theme);?>"><?php _e('Starter Demos','atomy')?></a></li>
			  <li><span class="dashicons dashicons-migrate"></span><a target="_blank" href="<?php echo esc_url(atomy_url_go_pro_theme);?>"><?php _e('Premium Version','atomy')?></a></li>
			</ul>
		</div>
		  <div class="col-md-4">
		    <h3><?php _e('Further Actions','atomy')?></h3>
			<ul>
			  <li><span class="dashicons dashicons-businessperson"></span><a target="_blank" href="<?php echo esc_url(atomy_url_support_theme);?>"><?php _e('Got theme support question?','atomy')?></a></li>
			  <li><span class="dashicons dashicons-thumbs-up"></span><a target="_blank" href="<?php echo esc_url(atomy_review_theme);?>"><?php _e('Leave a review','atomy')?></a></li>
			  <li><span class="dashicons dashicons-admin-appearance"></span><a target="_blank" href="<?php echo esc_url(atomy_url_updates_theme);?>"><?php _e('Changelog','atomy')?></a></li>
			</ul>
		  </div>
         </div>
		</div>
	</div>
	<!-- Help -->
	<div id="Help" class="tabcontent">
		<div class="at-documentation">
	<div class="at-header-help">
	  <h2><?php echo esc_html__('Documentation','atomy');?></h2>
	</div>
	<div class="at-header-help-p">
	   <p><?php echo esc_html__('In this page you can view general frequently asked questions to help you get started.','atomy')?> 
	      <?php echo esc_html__('For more, refer to our documentation site or click the links below:','atomy')?></p>
          <div class="at-button-documentation">
		   	<a class="at-read-documentation" target="_blank" href="<?php echo esc_url(atomy_url_documentation_theme); ?>"><?php echo esc_html('Read Documentation','atomy');?></a>
		   <a class="at-theme-support" target="_blank" href="<?php echo esc_url(atomy_url_support_theme); ?>"><?php echo esc_html('Theme Support','atomy');?></a>
	     </div>
       </div>
    </div>
		<h3 class="atomy-welkome-support-title"><?php esc_html_e('Frequently Asked Questions','atomy' ); ?></h3>
		<a href="#" class="togglefaq"><span class="dashicons dashicons-plus at-plus"></span>
		  <?php esc_html_e('When I install the Atomy theme does the shop not appear?','atomy')?>
		  <p class="at-number"><?php esc_html_e('1','atomy')?></p>
		</a>
          <div class="faqanswer">
            <p><?php esc_html_e('To see the shop you have to follow these simple steps!','atomy')?></p>
            <div class="at-full-article">
              <a target="_blank" href="<?php echo esc_url(atomy_url_faq_1_support); ?>"><?php esc_html_e('VIEW FULL ARTICLE','atomy')?></a>
         </div>
    </div>
	   <a href="#" class="togglefaq"><span class="dashicons dashicons-plus"></span>
		<?php esc_html_e('What are the shop settings?','atomy')?>
		  <p class="at-number"><?php esc_html_e('2','atomy')?></p></a>
          <div class="faqanswer">
			 <p><?php esc_html_e('Here how to properly configure the Atomy plugins. Below you will find the configurations and explanations of some plugins, those not mentioned do not need particular cunfigurations.','atomy')?></p>
			 <div class="at-full-article">
               <a target="_blank" href="<?php echo esc_url(atomy_url_faq_2_support); ?>"><?php esc_html_e('VIEW FULL ARTICLE','atomy')?></a>
             </div>
          </div>
		<a href="#" class="togglefaq"><span class="dashicons dashicons-plus"></span>
		<?php esc_html_e('There are many customizations, how do you make us orient myself?','atomy')?>
		 <p class="at-number"><?php esc_html_e('3','atomy')?></p></a>
          <div class="faqanswer">
			 <p><?php esc_html_e('With Atomy you have the possibility to customize your site, let see how to do it step by step.','atomy')?></p>
			 <div class="at-full-article">
              <a target="_blank" href="<?php echo esc_url(atomy_url_faq_3_support); ?>"><?php esc_html_e('VIEW FULL ARTICLE','atomy')?></a>
            </div>
         </div>    
		   <a href="#" class="togglefaq"><span class="dashicons dashicons-plus"></span>
			<?php esc_html_e('How do I know the size of the images to be set?','atomy')?>
			 <p class="at-number"><?php esc_html_e('4','atomy')?></p></a>
          <div class="faqanswer">
			 <p><?php esc_html_e('In Atomy there are several sizes for the images, below is a list of recommended sizes.','atomy')?></p>
			 <div class="at-full-article">
              <a target="_blank" href="<?php echo esc_url(atomy_url_faq_4_support); ?>"><?php esc_html_e('VIEW FULL ARTICLE','atomy')?></a>
            </div>
		  </div>
		  <div class="at-margin-bottom-tab"></div>
		<div class="atomy-clear-guide-support-admin"></div>
	</div>
   <!-- Options -->
   <div id="Options" class="tabcontent">  
		<h3 class="atomy-comp-support-title"><?php esc_html_e('PRO VERSION', 'atomy' ); ?></h3>
		<p class="atomy-welkome-support">
			<?php esc_html_e('Specifications Atomy theme','atomy');?>
		</p>
		<div class="atomy-guide-support-admin-comparison">
			<div class="comparison">
				<table>
					<thead>
 						<tr>
							<th class="tl tl2"></th>
							<th class="product" style="background:#82B541;border-top-left-radius: 5px; border-left:0px;"><?php esc_html_e('FREE','atomy');?></th>
							<th class="product" style="background:#82B541;"><?php esc_html_e('PRO','atomy');?></th>
 							</tr>
 							<tr>
								<th></th>
								<th class="price-info">
									<div class="price-now"><span><?php esc_html_e('ATOMY - THEME','atomy');?></span><br>
										<p></p>
									</div>
								</th>
								<th class="price-info">
									<div class="price-now"><span><?php esc_html_e('ATOMY - THEME','atomy');?></span>
									</div>
								</th>
 							</tr>
						</thead>
						<tbody>
							<!-- Logo -->
 							<tr>
								<td></td>
									<td colspan="3"><?php esc_html_e('Logo Upload','atomy');?></td>
 							</tr>
 							<tr class="compare-row">
								<td><?php esc_html_e('Logo Upload','atomy');?></td>
								<td><span><i class="fa fa-check"></i></span>
								</td>
								<td><span><i class="fa fa-check"></i></span></td>
							</td>
 						</tr>
						<!-- Font Awesome -->
 						<tr>
							<td></td>
							<td colspan="3"><?php esc_html_e('Font Awesome Icons v5','atomy');?></td>
 						</tr>
 						<tr>
							<td><?php esc_html_e('Font Awesome Icons v5','atomy');?></td>
							<td><span><i class="fa fa-check"></i></span>
							</td>
							<td><span><i class="fa fa-check"></i></span></td>
						</td>
 					</tr>
					<!-- Ready Retina -->
 					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Retina Ready','atomy');?></td>
 					</tr>
 					<tr class="compare-row">
						<td><?php esc_html_e('Retina Ready','atomy');?></td>
						<td><span><i class="fa fa-check"></i></span>
						</td>
						<td><span><i class="fa fa-check"></i></span></td>
 					</tr>
					<!-- Responsive -->
 					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Responsive Design','atomy');?></td>
 					</tr>
 					<tr>
						<td><?php esc_html_e('Responsive Design','atomy');?></td>
						<td><span><i class="fa fa-check"></i></span></td>
						<td><span><i class="fa fa-check"></i></span></td>
 					</tr>
					<!-- Color Change -->
 					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Skin Color','atomy');?></td>
 					</tr>
 					<tr class="compare-row">
						<td><?php esc_html_e('Skin Color','atomy');?></td>
						<td><span><?php esc_html_e('2','atomy');?></span>
						</td>
						<td><span><?php esc_html_e('8','atomy');?></span></td>
 					</tr>
					<!-- Custom color -->
 					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Custom Color','atomy');?></td>
 					</tr>
 					<tr>
						<td><?php esc_html_e('Custom Color','atomy');?></td>
						<td><span><i class="fas fa-times avik-icon-free"></i></span>
						</td>
						<td><span><i class="fa fa-check"></i></span></td>
 					</tr>
					<!-- Font Family -->
 					<tr>
						<td></td>
						<td><?php esc_html_e('Font Family','atomy');?></td>
 					</tr>
 					<tr class="compare-row">
						<td><?php esc_html_e('Font Family','atomy');?></td>
						<td><span><?php esc_html_e('8','atomy');?></span>
						</td>
						<td><span><?php esc_html_e('15','atomy');?></span></td>
 					</tr>
					<!-- Custom Font -->
 					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Custom Font','atomy');?></td>
 					</tr>
 					<tr>
						<td><?php esc_html_e('Custom Font','atomy');?></td>
						<td><span><i class="fas fa-times avik-icon-free"></i></span>
						</td>
						<td><span><i class="fa fa-check"></i></span></td>
 					</tr>
					<!-- Layou setting -->
 					<tr>
						<td></td>
						<td colspan="4"><?php esc_html_e('Layout Settings','atomy');?></td>
 					</tr>
 					<tr class="compare-row">
						<td><?php esc_html_e('Layout Settings','atomy');?></td>
						<td><span><i class="fa fa-check"></i></span></td>
						<td><span><i class="fa fa-check"></i></span></td>
 					</tr>
					<!-- Slider -->
 					<tr class="compare-row">
						<td></td>
						<td colspan="4"><?php esc_html_e('Slider','atomy');?></td>
 					</tr>
 					<tr>
						<td><?php esc_html_e('Slider','atomy');?></td>
						<td><span><i class="fas fa-times avik-icon-free"></i></span></td>
						<td><span><i class="fa fa-check"></i></span></td>
 					</tr>
					<!-- More Widgets -->
 					<tr>
						<td></td>
						<td colspan="4"><?php esc_html_e('More Areas Widgets','atomy');?></td>
 					</tr>
 					<tr class="compare-row">
						<td><?php esc_html_e('More Areas Widgets','atomy');?></td>
						<td><span><?php esc_html_e('8','atomy');?></span></td>
						<td><span><?php esc_html_e('17','atomy');?></span></td>
 					</tr>
					<!-- Menu types -->
 					<tr>
						<td></td>
						<td colspan="4"><?php esc_html_e('Menu Types','atomy');?></td>
 					</tr>
 					<tr>
						<td><?php esc_html_e('Menu Types','atomy');?></td>
						<td><span><?php esc_html_e('1','atomy');?></span></td>
						<td><span><?php esc_html_e('2','atomy');?></span></td>
 					</tr>
					<!-- Menu Layout -->
 					<tr>
						<td></td>
						<td colspan="4"><?php esc_html_e('Menu Layout','atomy');?></td>
 					</tr>
 					<tr class="compare-row">
						<td><?php esc_html_e('Menu Layout','atomy');?></td>
						<td><span><?php esc_html_e('1','atomy');?></span></td>
						<td><span><?php esc_html_e('2','atomy');?></span></td>
 					</tr>
					<!-- Page Template -->
 					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Page Templates','atomy');?></td>
 					</tr>
 					<tr>
						<td><?php esc_html_e('Page Templates','atomy');?></td>
						<td><span><?php esc_html_e('1','atomy');?></span></td>
						<td><span><?php esc_html_e('5','atomy');?></span></td>
 					</tr>
					<!-- Sectiopn Template -->
 					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Section Templates','atomy');?></td>
 					</tr>
 					<tr class="compare-row">
						<td><?php esc_html_e('Section Templates','atomy');?></td>
						<td><span><?php esc_html_e('11','atomy');?></span></td>
						<td><span><?php esc_html_e('36','atomy');?></span></td>
 					</tr>
					<!-- Blog Layout -->
 					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Blog Layouts','atomy');?></td>
 					</tr>
 					<tr>
						<td><?php esc_html_e('Blog Layouts','atomy');?></td>
						<td><span><i class="fas fa-times avik-icon-free"></i></span></td>
						<td><i class="fa fa-check"></i></td>
 					</tr>
					<!-- Pop-up Light Box -->
 					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Pop-up Light Box','atomy');?></td>
 					</tr>
 					<tr class="compare-row">
						<td><?php esc_html_e('Pop-up Light Box','atomy');?></td>
						<td><i class="fa fa-check"></i></td>
						<td><i class="fa fa-check"></i></td>
 					</tr>
					<!-- Gutenberg -->
 					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Gutenberg Compatible','atomy');?></td>
 					</tr>
 					<tr>
						<td><?php esc_html_e('Gutenberg Compatible','atomy');?></td>
						<td><span><i class="fa fa-check"></i></span></td>
						<td><span><i class="fa fa-check"></i></span></td>
 					</tr>
					<!-- Portfolio -->
 					<tr>
						<td></td>
						<td colspan="4"><?php esc_html_e('Portfolio','atomy');?></td>
 					</tr>
 					<tr class="compare-row">
						<td><?php esc_html_e('Portfolio','atomy');?></td>
						<td><span><?php esc_html_e('Section Only','atomy');?></span></td>
						<td><span><?php esc_html_e('Section and Page','atomy');?></span></td>
 					</tr>
					<!-- Woocommerce compatible -->
 					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Woocommerce Complatible','atomy');?></td>
 					</tr>
 					<tr>
						<td><?php esc_html_e('Woocommerce Complatible','atomy');?></td>
						<td><span><i class="fa fa-check"></i></span></td>
						<td><span><i class="fa fa-check"></i></span></td>
 					</tr>
					<!-- Woocommerce Template -->
 					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Woocommerce Templates','atomy');?></td>
 					</tr>
 					<tr class="compare-row">
						<td><?php esc_html_e('Woocommerce Templates','atomy');?></td>
						<td><span><i class="fa fa-check"></i></span></td>
						<td><span><i class="fa fa-check"></i></span></td>
 					</tr>
					<!-- Dropdown Menu -->
 					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Dropdown Menu','atomy');?></td>
 					</tr>
 					<tr>
						<td><?php esc_html_e('Dropdown Menu','atomy');?></td>
						<td><span><i class="fa fa-check"></i></span></td>
						<td><span><i class="fa fa-check"></i></span></td>
 					</tr>
						<!-- Menu Sticky -->
 						<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Menu Sticky','atomy');?></td>
 					</tr>
 					<tr class="compare-row">
						<td><?php esc_html_e('Menu Sticky','atomy');?></td>
						<td><span><i class="fas fa-times avik-icon-free"></i></span></td>
						<td><span><i class="fa fa-check"></i></span></td>
 					</tr>
					<!-- Logo in Footer-->
 					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Logo in Footer','atomy');?></td>
 					</tr>
 					<tr>
						<td><?php esc_html_e('Logo in Footer','atomy');?></td>
						<td><span><i class="fas fa-times avik-icon-free"></i></span></td>
						<td><span><i class="fa fa-check"></i></span></td>
 					</tr>
					<!-- 404 Customizable error page -->
 					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('404 Customizable error page','atomy');?></td>
 					</tr>
 					<tr class="compare-row">
						<td><?php esc_html_e('404 Customizable error page','atomy');?></td>
						<td><span><i class="fas fa-times avik-icon-free"></i></span></td>
						<td><span><i class="fa fa-check"></i></span></td>
 					</tr>
					<!-- Child-Theme Included -->
 					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Child-Theme Included','atomy');?></td>
 					</tr>
 					<tr>
						<td><?php esc_html_e('Child-Theme Included','atomy');?></td>
						<td><span><i class="fas fa-times avik-icon-free"></i></span></td>
						<td><span><i class="fa fa-check"></i></span></td>
 					</tr>
 					<tr>
						<!-- Demos -->
						<td></td>
						<td colspan="3"><?php esc_html_e('Demos Included','atomy');?></td>
 					</tr>
 					<tr class="compare-row">
						<td><?php esc_html_e('Demos Included','atomy');?></td>
						<td><span><?php esc_html_e('1','atomy');?></span></td>
						<td><span><?php esc_html_e('4','atomy');?></span></td>
 					</tr>
						<!-- Shotcode -->
						<td></td>
						<td colspan="3"><?php esc_html_e('Shortcode','atomy');?></td>
 					</tr>
 					<tr>
						<td><?php esc_html_e('Shortcode','atomy');?></td>
						<td><span><i class="fas fa-times avik-icon-free"></i></span></td>
						<td><span><i class="fa fa-check"></i></span></td>
 					</tr>
						<!-- Banner -->
						<td></td>
						<td colspan="3"><?php esc_html_e('Banner','atomy');?></td>
 					</tr>
 					<tr class="compare-row">
						<td><?php esc_html_e('Banner','atomy');?></td>
						<td><span><i class="fas fa-times avik-icon-free"></i></span></td>
						<td><span><i class="fa fa-check"></i></span></td>
 					</tr>
						<!-- Popup -->
						<td></td>
						<td colspan="3"><?php esc_html_e('Custom Popup','atomy');?></td>
 					</tr>
 					<tr>
						<td><?php esc_html_e('Custom Popup','atomy');?></td>
						<td><span><i class="fas fa-times avik-icon-free"></i></span></td>
						<td><span><i class="fa fa-check"></i></span></td>
 					</tr>
						<!-- Effect hover icons-->
						<td></td>
						<td colspan="3"><?php esc_html_e('Effect hover icons','atomy');?></td>
 					</tr>
 					<tr class="compare-row">
						<td><?php esc_html_e('Effect hover icons','atomy');?></td>
						<td><span><?php esc_html_e('2','atomy');?></span></td>
						<td><span><?php esc_html_e('15','atomy');?></span></td>
 					</tr>
					<!-- Header top area-->
					<td></td>
						<td colspan="3"><?php esc_html_e('Header top area','atomy');?></td>
 					</tr>
 					<tr>
						<td><?php esc_html_e('Header top area','atomy');?></td>
						<td><span><i class="fas fa-times avik-icon-free"></i></span></td>
						<td><span><i class="fa fa-check"></i></span></td>
 					</tr>
						<!-- Preloader -->
						<td></td>
						<td colspan="3"><?php esc_html_e('Preloader','atomy');?></td>
 					</tr>
 					<tr class="compare-row">
						<td><?php esc_html_e('Preloader','atomy');?></td>
						<td><span><?php esc_html_e('2 Icons','atomy');?></span></td>
						<td><span><?php esc_html_e('6 + Icons','atomy');?></span></td>
 					</tr>
					<!-- Snow -->
					<td></td>
						<td colspan="3"><?php esc_html_e('Effect Snow','atomy');?></td>
 					</tr>
 					<tr>
						<td><?php esc_html_e('Effect Snow','atomy');?></td>
						<td><span><i class="fas fa-times avik-icon-free"></i></span></td>
						<td><span><i class="fa fa-check"></i></span></td>
 					</tr>
					<!-- Automatic cursor -->
					<td></td>
						<td colspan="3"><?php esc_html_e('Automatic cursor','atomy');?></td>
 					</tr>
 					<tr class="compare-row">
						<td><?php esc_html_e('Automatic cursor','atomy');?></td>
						<td><span><i class="fas fa-times avik-icon-free"></i></span></td>
						<td><span><i class="fa fa-check"></i></span></td>
 					</tr>
					<!-- Services -->
					<td></td>
						<td colspan="3"><?php esc_html_e('Services Post','atomy');?></td>
 					</tr>
 					<tr>
						<td><?php esc_html_e('Services Post','atomy');?></td>
						<td><span><?php esc_html_e('3','atomy');?></span></td>
						<td><span><?php esc_html_e('5','atomy');?></span></td>
 					</tr>
					<!-- Transition Ready -->
 					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Transition Ready','atomy');?></td>
 					</tr>
 					<tr class="compare-row"> 
						<td><?php esc_html_e('Transition Ready','atomy');?></td>
						<td><span><i class="fa fa-check"></i></span></td>
						<td><span><i class="fa fa-check"></i></span></td>
 					</tr>
					<!-- Multy Language -->
 					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Multy Language','atomy');?></td>
 					</tr>
 					<tr>
						<td><?php esc_html_e('Multy Language','atomy');?></td>
						<td><span><i class="fas fa-times avik-icon-free"></i></span></td>
						<td><span><i class="fa fa-check"></i></span></td>
 					</tr>
					<!-- Full Support -->
 					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Full Support','atomy');?></td>
 					</tr>
 					<tr class="compare-row">
						<td><?php esc_html_e('Full Support','atomy');?></td>
						<td><span><i class="fas fa-times avik-icon-free"></i></span></td>
						<td><span><i class="fa fa-check"></i></span></td>
 					</tr>
					 <!-- Preloader Time -->
 					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Duration preloader','atomy');?></td>
 					</tr>
 					<tr>
						<td><?php esc_html_e('Duration preloader','atomy');?></td>
						<td><span><i class="fas fa-times avik-icon-free"></i></span></td>
						<td><span><i class="fa fa-check"></i></span></td>
 					</tr>
 					<tr>
						<td></td>
 					</tr>
 					<tr>
						<td></td>
						<td><div class="avik-no-button-free"></div></td>
						<td><a href="<?php echo esc_url(atomy_url_go_pro_theme);?>" class="price-buy" target="_blank"><?php esc_html_e('GO PRO','atomy');?><span class="hide-mobile"></span></a></td>
 					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="avik-clear-guide-support-admin"></div>
</div>

<?php
/* And Settings Page */
}







