<?php
	
	/*---------------------------First highlight color-------------------*/

	$vw_dentist_first_color = get_theme_mod('vw_dentist_first_color');

	$vw_dentist_custom_css = '';

	if($vw_dentist_first_color != false){
		$vw_dentist_custom_css .='input[type="submit"], #slider, .view-more, #serv-section span, #sidebar .custom-social-icons i:hover, .pagination a:hover, .pagination .current, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, #footer-2, .header-fixed, #sidebar .woocommerce-product-search button, #sidebar a.custom_read_more, #footer, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .nav-previous a:hover, .nav-next a:hover, .wp-block-button__link{';
			$vw_dentist_custom_css .='background-color: '.esc_attr($vw_dentist_first_color).';';
		$vw_dentist_custom_css .='}';
	}
	if($vw_dentist_first_color != false){
		$vw_dentist_custom_css .='h1,h2,h3,h4,h5,h6, .custom-social-icons i:hover, .logo p.site-title a, .logo h1 a, #serv-section h3, #sidebar caption, .post-navigation a, h2.woocommerce-loop-product__title,.woocommerce div.product .product_title, .woocommerce ul.products li.product .price,.woocommerce div.product p.price, .woocommerce div.product span.price, .woocommerce .quantity .qty, .woocommerce-message::before, .post-main-box h2 a{';
			$vw_dentist_custom_css .='color: '.esc_attr($vw_dentist_first_color).';';
		$vw_dentist_custom_css .='}';
	}
	if($vw_dentist_first_color != false){
		$vw_dentist_custom_css .='.woocommerce .quantity .qty{';
			$vw_dentist_custom_css .='border-color: '.esc_attr($vw_dentist_first_color).';';
		$vw_dentist_custom_css .='}';
	}
	if($vw_dentist_first_color != false){
		$vw_dentist_custom_css .='.woocommerce-message{';
			$vw_dentist_custom_css .='border-top-color: '.esc_attr($vw_dentist_first_color).';';
		$vw_dentist_custom_css .='}';
	}
	if($vw_dentist_first_color != false){
		$vw_dentist_custom_css .='#header{
		background: rgba(0, 0, 0, 0) linear-gradient(112deg, #fff0 3%,'.esc_attr($vw_dentist_first_color).' 0%) repeat scroll 0 0;
		}';
	}
	if($vw_dentist_first_color != false){
		$vw_dentist_custom_css .='nav.woocommerce-MyAccount-navigation ul li{
		box-shadow: 2px 2px 0 0 '.esc_attr($vw_dentist_first_color).';
		}';
	}

	/*---------------------------Second highlight color-------------------*/

	$vw_dentist_second_color = get_theme_mod('vw_dentist_second_color');

	if($vw_dentist_second_color != false){
		$vw_dentist_custom_css .='.view-more:hover, #footer .tagcloud a:hover, #comments input[type="submit"], #sidebar .custom-social-icons i,#footer .custom-social-icons i, #sidebar .tagcloud a:hover, .pagination span, .pagination a, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, nav.woocommerce-MyAccount-navigation ul li, #slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover, #comments a.comment-reply-link, #footer a.custom_read_more, #sidebar .more-button a:hover, .woocommerce nav.woocommerce-pagination ul li a, .nav-previous a, .nav-next a, .wp-block-button .wp-block-button__link:hover{';
			$vw_dentist_custom_css .='background-color: '.esc_attr($vw_dentist_second_color).';';
		$vw_dentist_custom_css .='}';
	}
	if($vw_dentist_second_color != false){
		$vw_dentist_custom_css .='a, #topbar span i, .main-navigation a:hover, #serv-section h2, #footer li a:hover, .post-main-box:hover h2, .post-navigation a:hover .post-title,.post-navigation a:focus .post-title, .post-navigation a:hover,.post-navigation a:focus, .main-navigation ul.sub-menu a:hover, .entry-content a, #sidebar .textwidget p a, .textwidget p a, #comments p a, .slider .inner_carousel p a{';
			$vw_dentist_custom_css .='color: '.esc_attr($vw_dentist_second_color).';';
		$vw_dentist_custom_css .='}';
	}
	if($vw_dentist_second_color != false){
		$vw_dentist_custom_css .='#slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover{';
			$vw_dentist_custom_css .='border-color: '.esc_attr($vw_dentist_second_color).';';
		$vw_dentist_custom_css .='}';
	}
	if($vw_dentist_second_color != false){
		$vw_dentist_custom_css .='.post-info hr, .main-navigation ul ul{';
			$vw_dentist_custom_css .='border-top-color: '.esc_attr($vw_dentist_second_color).';';
		$vw_dentist_custom_css .='}';
	}
	if($vw_dentist_second_color != false){
		$vw_dentist_custom_css .='.main-navigation ul ul{';
			$vw_dentist_custom_css .='border-bottom-color: '.esc_attr($vw_dentist_second_color).';';
		$vw_dentist_custom_css .='}';
	}
	if($vw_dentist_second_color != false){
		$vw_dentist_custom_css .='#topbar{
		background: rgba(0, 0, 0, 0) linear-gradient(120deg, #fff0 65%,'.esc_attr($vw_dentist_second_color).' 35%) repeat scroll 0 0;
		}';
	}
	if($vw_dentist_second_color != false){
		$vw_dentist_custom_css .='.post-main-box, #sidebar .widget{
		box-shadow: 0px 15px 10px -15px '.esc_attr($vw_dentist_second_color).';
		}';
	}

	/*---------------------------Third highlight color-------------------*/

	$vw_dentist_third_color = get_theme_mod('vw_dentist_third_color');

	if($vw_dentist_third_color != false){
		$vw_dentist_custom_css .='#footer input[type="submit"], #footer .custom-social-icons i:hover, .scrollup i, #sidebar .widget_price_filter .ui-slider .ui-slider-range, #sidebar .widget_price_filter .ui-slider .ui-slider-handle, #footer #respond input#submit, #footer a.button, #footer button.button, #footer input.button, #footer #respond input#submit.alt, #footer a.button.alt, #footer button.button.alt, #footer input.button.alt, #footer .widget_price_filter .ui-slider .ui-slider-range, #footer .widget_price_filter .ui-slider .ui-slider-handle, #footer .woocommerce-product-search button, #footer .more-button a:hover{';
			$vw_dentist_custom_css .='background-color: '.esc_attr($vw_dentist_third_color).';';
		$vw_dentist_custom_css .='}';
	}
	if($vw_dentist_third_color != false){
		$vw_dentist_custom_css .='.service-btn a:hover, #footer h3{';
			$vw_dentist_custom_css .='color: '.esc_attr($vw_dentist_third_color).';';
		$vw_dentist_custom_css .='}';
	}
	if($vw_dentist_third_color != false){
		$vw_dentist_custom_css .='.header-fixed{';
			$vw_dentist_custom_css .='border-bottom-color: '.esc_attr($vw_dentist_third_color).';';
		$vw_dentist_custom_css .='}';
	}

	/*---------------------------Width Layout -------------------*/

	$vw_dentist_theme_lay = get_theme_mod( 'vw_dentist_width_option','Full Width');
    if($vw_dentist_theme_lay == 'Boxed'){
		$vw_dentist_custom_css .='body{';
			$vw_dentist_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$vw_dentist_custom_css .='}';
	}else if($vw_dentist_theme_lay == 'Wide Width'){
		$vw_dentist_custom_css .='body{';
			$vw_dentist_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$vw_dentist_custom_css .='}';
	}else if($vw_dentist_theme_lay == 'Full Width'){
		$vw_dentist_custom_css .='body{';
			$vw_dentist_custom_css .='max-width: 100%;';
		$vw_dentist_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$vw_dentist_theme_lay = get_theme_mod( 'vw_dentist_slider_opacity_color','0.5');
	if($vw_dentist_theme_lay == '0'){
		$vw_dentist_custom_css .='#slider img{';
			$vw_dentist_custom_css .='opacity:0';
		$vw_dentist_custom_css .='}';
		}else if($vw_dentist_theme_lay == '0.1'){
		$vw_dentist_custom_css .='#slider img{';
			$vw_dentist_custom_css .='opacity:0.1';
		$vw_dentist_custom_css .='}';
		}else if($vw_dentist_theme_lay == '0.2'){
		$vw_dentist_custom_css .='#slider img{';
			$vw_dentist_custom_css .='opacity:0.2';
		$vw_dentist_custom_css .='}';
		}else if($vw_dentist_theme_lay == '0.3'){
		$vw_dentist_custom_css .='#slider img{';
			$vw_dentist_custom_css .='opacity:0.3';
		$vw_dentist_custom_css .='}';
		}else if($vw_dentist_theme_lay == '0.4'){
		$vw_dentist_custom_css .='#slider img{';
			$vw_dentist_custom_css .='opacity:0.4';
		$vw_dentist_custom_css .='}';
		}else if($vw_dentist_theme_lay == '0.5'){
		$vw_dentist_custom_css .='#slider img{';
			$vw_dentist_custom_css .='opacity:0.5';
		$vw_dentist_custom_css .='}';
		}else if($vw_dentist_theme_lay == '0.6'){
		$vw_dentist_custom_css .='#slider img{';
			$vw_dentist_custom_css .='opacity:0.6';
		$vw_dentist_custom_css .='}';
		}else if($vw_dentist_theme_lay == '0.7'){
		$vw_dentist_custom_css .='#slider img{';
			$vw_dentist_custom_css .='opacity:0.7';
		$vw_dentist_custom_css .='}';
		}else if($vw_dentist_theme_lay == '0.8'){
		$vw_dentist_custom_css .='#slider img{';
			$vw_dentist_custom_css .='opacity:0.8';
		$vw_dentist_custom_css .='}';
		}else if($vw_dentist_theme_lay == '0.9'){
		$vw_dentist_custom_css .='#slider img{';
			$vw_dentist_custom_css .='opacity:0.9';
		$vw_dentist_custom_css .='}';
		}

	/*---------------------------Slider Content Layout -------------------*/

	$vw_dentist_theme_lay = get_theme_mod( 'vw_dentist_slider_content_option','Left');
    if($vw_dentist_theme_lay == 'Left'){
		$vw_dentist_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$vw_dentist_custom_css .='text-align:left; left:10%; right:50%;';
		$vw_dentist_custom_css .='}';
	}else if($vw_dentist_theme_lay == 'Center'){
		$vw_dentist_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$vw_dentist_custom_css .='text-align:center; left:20%; right:20%;';
		$vw_dentist_custom_css .='}';
	}else if($vw_dentist_theme_lay == 'Right'){
		$vw_dentist_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$vw_dentist_custom_css .='text-align:right; left:50%; right:10%;';
		$vw_dentist_custom_css .='}';
	}

	/*---------------------------Slider Height ------------*/

	$vw_dentist_slider_height = get_theme_mod('vw_dentist_slider_height');
	if($vw_dentist_slider_height != false){
		$vw_dentist_custom_css .='#slider img{';
			$vw_dentist_custom_css .='height: '.esc_attr($vw_dentist_slider_height).';';
		$vw_dentist_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$vw_dentist_theme_lay = get_theme_mod( 'vw_dentist_blog_layout_option','Default');
    if($vw_dentist_theme_lay == 'Default'){
		$vw_dentist_custom_css .='.post-main-box{';
			$vw_dentist_custom_css .='';
		$vw_dentist_custom_css .='}';
	}else if($vw_dentist_theme_lay == 'Center'){
		$vw_dentist_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn{';
			$vw_dentist_custom_css .='text-align:center;';
		$vw_dentist_custom_css .='}';
		$vw_dentist_custom_css .='.post-info{';
			$vw_dentist_custom_css .='margin-top:10px;';
		$vw_dentist_custom_css .='}';
		$vw_dentist_custom_css .='.post-info hr{';
			$vw_dentist_custom_css .='margin:15px auto;';
		$vw_dentist_custom_css .='}';
	}else if($vw_dentist_theme_lay == 'Left'){
		$vw_dentist_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn, #our-services p{';
			$vw_dentist_custom_css .='text-align:Left;';
		$vw_dentist_custom_css .='}';
		$vw_dentist_custom_css .='.post-info hr{';
			$vw_dentist_custom_css .='margin-bottom:10px;';
		$vw_dentist_custom_css .='}';
		$vw_dentist_custom_css .='.post-main-box h2{';
			$vw_dentist_custom_css .='margin-top:10px;';
		$vw_dentist_custom_css .='}';
	}

	/*------------------------------Responsive Media -----------------------*/

	$vw_dentist_resp_topbar = get_theme_mod( 'vw_dentist_resp_topbar_hide_show',false);
	if($vw_dentist_resp_topbar == true && get_theme_mod( 'vw_dentist_topbar_hide_show', false) == false){
    	$vw_dentist_custom_css .='#topbar{';
			$vw_dentist_custom_css .='display:none;';
		$vw_dentist_custom_css .='} ';
	}
    if($vw_dentist_resp_topbar == true){
    	$vw_dentist_custom_css .='@media screen and (max-width:575px) {';
		$vw_dentist_custom_css .='#topbar{';
			$vw_dentist_custom_css .='display:block;';
		$vw_dentist_custom_css .='} }';
	}else if($vw_dentist_resp_topbar == false){
		$vw_dentist_custom_css .='@media screen and (max-width:575px) {';
		$vw_dentist_custom_css .='#topbar{';
			$vw_dentist_custom_css .='display:none;';
		$vw_dentist_custom_css .='} }';
	}

	$vw_dentist_resp_stickyheader = get_theme_mod( 'vw_dentist_stickyheader_hide_show',false);
	if($vw_dentist_resp_stickyheader == true && get_theme_mod( 'vw_dentist_sticky_header',false) != true){
    	$vw_dentist_custom_css .='.header-fixed{';
			$vw_dentist_custom_css .='position:static;';
		$vw_dentist_custom_css .='} ';
	}
    if($vw_dentist_resp_stickyheader == true){
    	$vw_dentist_custom_css .='@media screen and (max-width:575px) {';
		$vw_dentist_custom_css .='.header-fixed{';
			$vw_dentist_custom_css .='position:fixed;';
		$vw_dentist_custom_css .='} }';
	}else if($vw_dentist_resp_stickyheader == false){
		$vw_dentist_custom_css .='@media screen and (max-width:575px){';
		$vw_dentist_custom_css .='.header-fixed{';
			$vw_dentist_custom_css .='position:static;';
		$vw_dentist_custom_css .='} }';
	}

	$vw_dentist_resp_slider = get_theme_mod( 'vw_dentist_resp_slider_hide_show',false);
	if($vw_dentist_resp_slider == true && get_theme_mod( 'vw_dentist_slider_hide_show', false) == false){
    	$vw_dentist_custom_css .='#slider{';
			$vw_dentist_custom_css .='display:none;';
		$vw_dentist_custom_css .='} ';
	}
    if($vw_dentist_resp_slider == true){
    	$vw_dentist_custom_css .='@media screen and (max-width:575px) {';
		$vw_dentist_custom_css .='#slider{';
			$vw_dentist_custom_css .='display:block;';
		$vw_dentist_custom_css .='} }';
	}else if($vw_dentist_resp_slider == false){
		$vw_dentist_custom_css .='@media screen and (max-width:575px) {';
		$vw_dentist_custom_css .='#slider{';
			$vw_dentist_custom_css .='display:none;';
		$vw_dentist_custom_css .='} }';
	}

	$vw_dentist_metabox = get_theme_mod( 'vw_dentist_metabox_hide_show',true);
    if($vw_dentist_metabox == true){
    	$vw_dentist_custom_css .='@media screen and (max-width:575px) {';
		$vw_dentist_custom_css .='.post-info{';
			$vw_dentist_custom_css .='display:block;';
		$vw_dentist_custom_css .='} }';
	}else if($vw_dentist_metabox == false){
		$vw_dentist_custom_css .='@media screen and (max-width:575px) {';
		$vw_dentist_custom_css .='.post-info{';
			$vw_dentist_custom_css .='display:none;';
		$vw_dentist_custom_css .='} }';
	}

	$vw_dentist_sidebar = get_theme_mod( 'vw_dentist_sidebar_hide_show',true);
    if($vw_dentist_sidebar == true){
    	$vw_dentist_custom_css .='@media screen and (max-width:575px) {';
		$vw_dentist_custom_css .='#sidebar{';
			$vw_dentist_custom_css .='display:block;';
		$vw_dentist_custom_css .='} }';
	}else if($vw_dentist_sidebar == false){
		$vw_dentist_custom_css .='@media screen and (max-width:575px) {';
		$vw_dentist_custom_css .='#sidebar{';
			$vw_dentist_custom_css .='display:none;';
		$vw_dentist_custom_css .='} }';
	}

	$vw_dentist_resp_scroll_top = get_theme_mod( 'vw_dentist_resp_scroll_top_hide_show',true);
	if($vw_dentist_resp_scroll_top == true && get_theme_mod( 'vw_dentist_hide_show_scroll',true) != true){
    	$vw_dentist_custom_css .='.scrollup i{';
			$vw_dentist_custom_css .='visibility:hidden !important;';
		$vw_dentist_custom_css .='} ';
	}
    if($vw_dentist_resp_scroll_top == true){
    	$vw_dentist_custom_css .='@media screen and (max-width:575px) {';
		$vw_dentist_custom_css .='.scrollup i{';
			$vw_dentist_custom_css .='visibility:visible !important;';
		$vw_dentist_custom_css .='} }';
	}else if($vw_dentist_resp_scroll_top == false){
		$vw_dentist_custom_css .='@media screen and (max-width:575px){';
		$vw_dentist_custom_css .='.scrollup i{';
			$vw_dentist_custom_css .='visibility:hidden !important;';
		$vw_dentist_custom_css .='} }';
	}
	/*------------- Top Bar Settings ------------------*/

	$vw_dentist_topbar_padding_top_bottom = get_theme_mod('vw_dentist_topbar_padding_top_bottom');
	if($vw_dentist_topbar_padding_top_bottom != false){
		$vw_dentist_custom_css .='#topbar{';
			$vw_dentist_custom_css .='padding-top: '.esc_attr($vw_dentist_topbar_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_dentist_topbar_padding_top_bottom).';';
		$vw_dentist_custom_css .='}';
	}

	/*-------------- Sticky Header Padding ----------------*/

	$vw_dentist_sticky_header_padding = get_theme_mod('vw_dentist_sticky_header_padding');
	if($vw_dentist_sticky_header_padding != false){
		$vw_dentist_custom_css .='.header-fixed{';
			$vw_dentist_custom_css .='padding: '.esc_attr($vw_dentist_sticky_header_padding).';';
		$vw_dentist_custom_css .='}';
	}

	/*------------------ Search Settings -----------------*/
	
	$vw_dentist_search_font_size = get_theme_mod('vw_dentist_search_font_size');
	if($vw_dentist_search_font_size != false){
		$vw_dentist_custom_css .='.search-box i{';
			$vw_dentist_custom_css .='font-size: '.esc_attr($vw_dentist_search_font_size).';';
		$vw_dentist_custom_css .='}';
	}

	/*---------------- Button Settings ------------------*/

	$vw_dentist_button_padding_top_bottom = get_theme_mod('vw_dentist_button_padding_top_bottom');
	$vw_dentist_button_padding_left_right = get_theme_mod('vw_dentist_button_padding_left_right');
	if($vw_dentist_button_padding_top_bottom != false || $vw_dentist_button_padding_left_right != false){
		$vw_dentist_custom_css .='.post-main-box .view-more{';
			$vw_dentist_custom_css .='padding-top: '.esc_attr($vw_dentist_button_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_dentist_button_padding_top_bottom).';padding-left: '.esc_attr($vw_dentist_button_padding_left_right).';padding-right: '.esc_attr($vw_dentist_button_padding_left_right).';';
		$vw_dentist_custom_css .='}';
	}

	$vw_dentist_button_border_radius = get_theme_mod('vw_dentist_button_border_radius');
	if($vw_dentist_button_border_radius != false){
		$vw_dentist_custom_css .='.post-main-box .view-more{';
			$vw_dentist_custom_css .='border-radius: '.esc_attr($vw_dentist_button_border_radius).'px;';
		$vw_dentist_custom_css .='}';
	}

	/*------------- Single Blog Page------------------*/

	$vw_dentist_single_blog_post_navigation_show_hide = get_theme_mod('vw_dentist_single_blog_post_navigation_show_hide',true);
	if($vw_dentist_single_blog_post_navigation_show_hide != true){
		$vw_dentist_custom_css .='.post-navigation{';
			$vw_dentist_custom_css .='display: none;';
		$vw_dentist_custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/

	$vw_dentist_copyright_alingment = get_theme_mod('vw_dentist_copyright_alingment');
	if($vw_dentist_copyright_alingment != false){
		$vw_dentist_custom_css .='.copyright p{';
			$vw_dentist_custom_css .='text-align: '.esc_attr($vw_dentist_copyright_alingment).';';
		$vw_dentist_custom_css .='}';
	}

	$vw_dentist_copyright_padding_top_bottom = get_theme_mod('vw_dentist_copyright_padding_top_bottom');
	if($vw_dentist_copyright_padding_top_bottom != false){
		$vw_dentist_custom_css .='#footer-2{';
			$vw_dentist_custom_css .='padding-top: '.esc_attr($vw_dentist_copyright_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_dentist_copyright_padding_top_bottom).';';
		$vw_dentist_custom_css .='}';
	}

	/*----------------Sroll to top Settings ------------------*/

	$vw_dentist_scroll_to_top_font_size = get_theme_mod('vw_dentist_scroll_to_top_font_size');
	if($vw_dentist_scroll_to_top_font_size != false){
		$vw_dentist_custom_css .='.scrollup i{';
			$vw_dentist_custom_css .='font-size: '.esc_attr($vw_dentist_scroll_to_top_font_size).';';
		$vw_dentist_custom_css .='}';
	}

	$vw_dentist_scroll_to_top_padding = get_theme_mod('vw_dentist_scroll_to_top_padding');
	$vw_dentist_scroll_to_top_padding = get_theme_mod('vw_dentist_scroll_to_top_padding');
	if($vw_dentist_scroll_to_top_padding != false){
		$vw_dentist_custom_css .='.scrollup i{';
			$vw_dentist_custom_css .='padding-top: '.esc_attr($vw_dentist_scroll_to_top_padding).';padding-bottom: '.esc_attr($vw_dentist_scroll_to_top_padding).';';
		$vw_dentist_custom_css .='}';
	}

	$vw_dentist_scroll_to_top_width = get_theme_mod('vw_dentist_scroll_to_top_width');
	if($vw_dentist_scroll_to_top_width != false){
		$vw_dentist_custom_css .='.scrollup i{';
			$vw_dentist_custom_css .='width: '.esc_attr($vw_dentist_scroll_to_top_width).';';
		$vw_dentist_custom_css .='}';
	}

	$vw_dentist_scroll_to_top_height = get_theme_mod('vw_dentist_scroll_to_top_height');
	if($vw_dentist_scroll_to_top_height != false){
		$vw_dentist_custom_css .='.scrollup i{';
			$vw_dentist_custom_css .='height: '.esc_attr($vw_dentist_scroll_to_top_height).';';
		$vw_dentist_custom_css .='}';
	}

	$vw_dentist_scroll_to_top_border_radius = get_theme_mod('vw_dentist_scroll_to_top_border_radius');
	if($vw_dentist_scroll_to_top_border_radius != false){
		$vw_dentist_custom_css .='.scrollup i{';
			$vw_dentist_custom_css .='border-radius: '.esc_attr($vw_dentist_scroll_to_top_border_radius).'px;';
		$vw_dentist_custom_css .='}';
	}

	/*----------------Social Icons Settings ------------------*/

	$vw_dentist_social_icon_font_size = get_theme_mod('vw_dentist_social_icon_font_size');
	if($vw_dentist_social_icon_font_size != false){
		$vw_dentist_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_dentist_custom_css .='font-size: '.esc_attr($vw_dentist_social_icon_font_size).';';
		$vw_dentist_custom_css .='}';
	}

	$vw_dentist_social_icon_padding = get_theme_mod('vw_dentist_social_icon_padding');
	if($vw_dentist_social_icon_padding != false){
		$vw_dentist_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_dentist_custom_css .='padding: '.esc_attr($vw_dentist_social_icon_padding).';';
		$vw_dentist_custom_css .='}';
	}

	$vw_dentist_social_icon_width = get_theme_mod('vw_dentist_social_icon_width');
	if($vw_dentist_social_icon_width != false){
		$vw_dentist_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_dentist_custom_css .='width: '.esc_attr($vw_dentist_social_icon_width).';';
		$vw_dentist_custom_css .='}';
	}

	$vw_dentist_social_icon_height = get_theme_mod('vw_dentist_social_icon_height');
	if($vw_dentist_social_icon_height != false){
		$vw_dentist_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_dentist_custom_css .='height: '.esc_attr($vw_dentist_social_icon_height).';';
		$vw_dentist_custom_css .='}';
	}

	$vw_dentist_social_icon_border_radius = get_theme_mod('vw_dentist_social_icon_border_radius');
	if($vw_dentist_social_icon_border_radius != false){
		$vw_dentist_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_dentist_custom_css .='border-radius: '.esc_attr($vw_dentist_social_icon_border_radius).'px;';
		$vw_dentist_custom_css .='}';
	}

	/*----------------Woocommerce Products Settings ------------------*/

	$vw_dentist_products_padding_top_bottom = get_theme_mod('vw_dentist_products_padding_top_bottom');
	if($vw_dentist_products_padding_top_bottom != false){
		$vw_dentist_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_dentist_custom_css .='padding-top: '.esc_attr($vw_dentist_products_padding_top_bottom).'!important; padding-bottom: '.esc_attr($vw_dentist_products_padding_top_bottom).'!important;';
		$vw_dentist_custom_css .='}';
	}

	$vw_dentist_products_padding_left_right = get_theme_mod('vw_dentist_products_padding_left_right');
	if($vw_dentist_products_padding_left_right != false){
		$vw_dentist_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_dentist_custom_css .='padding-left: '.esc_attr($vw_dentist_products_padding_left_right).'!important; padding-right: '.esc_attr($vw_dentist_products_padding_left_right).'!important;';
		$vw_dentist_custom_css .='}';
	}

	$vw_dentist_products_box_shadow = get_theme_mod('vw_dentist_products_box_shadow');
	if($vw_dentist_products_box_shadow != false){
		$vw_dentist_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
				$vw_dentist_custom_css .='box-shadow: '.esc_attr($vw_dentist_products_box_shadow).'px '.esc_attr($vw_dentist_products_box_shadow).'px '.esc_attr($vw_dentist_products_box_shadow).'px #ddd;';
		$vw_dentist_custom_css .='}';
	}

	$vw_dentist_products_border_radius = get_theme_mod('vw_dentist_products_border_radius');
	if($vw_dentist_products_border_radius != false){
		$vw_dentist_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_dentist_custom_css .='border-radius: '.esc_attr($vw_dentist_products_border_radius).'px;';
		$vw_dentist_custom_css .='}';
	}