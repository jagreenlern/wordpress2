<?php
	
	/*---------------------------First highlight color-------------------*/

	$it_company_lite_first_color = get_theme_mod('it_company_lite_first_color');

	$it_company_lite_custom_css = '';

	if($it_company_lite_first_color != false){
		$it_company_lite_custom_css .='#topbar i, #topbar a, span.carousel-control-prev-icon:hover, span.carousel-control-next-icon:hover, #slider, .about-btn a:hover, .scrollup i, .footer .tagcloud a:hover, .footer .tagcloud a:hover, .sidebar .custom-social-icons i, .footer .custom-social-icons i, .footer-2, input[type="submit"], #comments input[type="submit"].submit:hover, .sidebar input[type="submit"]:hover, .error-btn a:hover, .content-bttn a:hover, .footer input[type="submit"]:hover, .pagination span, .pagination a, .sidebar .tagcloud a:hover, #comments input[type="submit"], nav.woocommerce-MyAccount-navigation ul li, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .toggle-nav i, #comments a.comment-reply-link, .sidebar .widget_price_filter .ui-slider .ui-slider-range, .sidebar .widget_price_filter .ui-slider .ui-slider-handle, .sidebar .woocommerce-product-search button[type="submit"]:hover, .footer .widget_price_filter .ui-slider .ui-slider-range, .footer .widget_price_filter .ui-slider .ui-slider-handle, .footer .woocommerce-product-search button, .sidebar a.custom_read_more:hover, .footer a.custom_read_more, .woocommerce nav.woocommerce-pagination ul li a, .nav-previous a, .nav-next a, .wp-block-button .wp-block-button__link:hover{';
			$it_company_lite_custom_css .='background-color: '.esc_attr($it_company_lite_first_color).';';
		$it_company_lite_custom_css .='}';
	}
	if($it_company_lite_first_color != false){
		$it_company_lite_custom_css .='.footer #respond input#submit:hover, .footer a.button:hover, .footer button.button:hover, .footer input.button:hover, .footer #respond input#submit.alt:hover, .footer a.button.alt:hover, .footer button.button.alt:hover, .footer input.button.alt:hover{';
			$it_company_lite_custom_css .='background-color: '.esc_attr($it_company_lite_first_color).'!important;';
		$it_company_lite_custom_css .='}';
	}
	if($it_company_lite_first_color != false){
		$it_company_lite_custom_css .='a, .custom-social-icons i:hover, .lower-header span, .more-btn a:hover, .footer li a:hover, .footer .custom-social-icons i:hover, .post-main-box:hover h3 a, .post-navigation a:hover .post-title, .post-navigation a:focus .post-title, .entry-content a, .sidebar .textwidget p a, .textwidget p a, #comments p a, .slider .inner_carousel p a, .main-navigation a:hover, .main-navigation ul.sub-menu a:hover, .post-main-box:hover h2 a, .footer a.custom_read_more:hover{';
			$it_company_lite_custom_css .='color: '.esc_attr($it_company_lite_first_color).';';
		$it_company_lite_custom_css .='}';
	}
	if($it_company_lite_first_color != false){
		$it_company_lite_custom_css .='.about-btn a:hover, #comments input[type="submit"].submit:hover, .sidebar input[type="submit"]:hover, .error-btn a:hover, .content-bttn a:hover, .footer input[type="submit"]:hover, .sidebar .woocommerce-product-search button[type="submit"]:hover, .sidebar a.custom_read_more:hover, .wp-block-button .wp-block-button__link:hover{';
			$it_company_lite_custom_css .='border-color: '.esc_attr($it_company_lite_first_color).';';
		$it_company_lite_custom_css .='}';
	}
	if($it_company_lite_first_color != false){
		$it_company_lite_custom_css .='#about hr, .post-info hr, .main-navigation ul ul{';
			$it_company_lite_custom_css .='border-top-color: '.esc_attr($it_company_lite_first_color).';';
		$it_company_lite_custom_css .='}';
	}
	if($it_company_lite_first_color != false){
		$it_company_lite_custom_css .='.main-navigation ul ul{';
			$it_company_lite_custom_css .='border-bottom-color: '.esc_attr($it_company_lite_first_color).';';
		$it_company_lite_custom_css .='}';
	}

	/*---------------------------Second highlight color-------------------*/

	$it_company_lite_second_color = get_theme_mod('it_company_lite_second_color');

	if($it_company_lite_second_color != false){
		$it_company_lite_custom_css .='#topbar, .lower-header input[type="submit"], .footer, .sidebar .custom-social-icons i:hover, .pagination a:hover, .pagination .current, .woocommerce span.onsale, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .nav-previous a:hover, .nav-next a:hover{';
			$it_company_lite_custom_css .='background-color: '.esc_attr($it_company_lite_second_color).';';
		$it_company_lite_custom_css .='}';
	}
	if($it_company_lite_second_color != false){
		$it_company_lite_custom_css .='h1,h2,h3,h4,h5,h6, .custom-social-icons i, .logo h1 a, .logo p.site-title a,  p.site-description, #header .main-navigation ul li a, .about-btn a, .post-main-box h3 a, .content-bttn a, .sidebar caption, .sidebar h3, .sidebar input[type="submit"], .post-navigation a, h2.woocommerce-loop-product__title, .woocommerce div.product .product_title, .woocommerce ul.products li.product .price, .woocommerce div.product p.price, .woocommerce div.product span.price, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce .quantity .qty, .sidebar a.custom_read_more, .post-main-box h2 a, .wp-block-button__link{';
			$it_company_lite_custom_css .='color: '.esc_attr($it_company_lite_second_color).';';
		$it_company_lite_custom_css .='}';
	}
	if($it_company_lite_second_color != false){
		$it_company_lite_custom_css .='.wp-block-button__link{';
			$it_company_lite_custom_css .='color: '.esc_attr($it_company_lite_second_color).'!important;';
		$it_company_lite_custom_css .='}';
	}
	if($it_company_lite_second_color != false){
		$it_company_lite_custom_css .='.content-bttn a, .sidebar input[type="submit"], .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce .quantity .qty, .sidebar a.custom_read_more, .wp-block-button__link{';
			$it_company_lite_custom_css .='border-color: '.esc_attr($it_company_lite_second_color).';';
		$it_company_lite_custom_css .='}';
	}
	if($it_company_lite_second_color != false){
		$it_company_lite_custom_css .='.header-fixed{';
			$it_company_lite_custom_css .='border-bottom-color: '.esc_attr($it_company_lite_second_color).';';
		$it_company_lite_custom_css .='}';
	}
	if($it_company_lite_second_color != false){
		$it_company_lite_custom_css .='nav.woocommerce-MyAccount-navigation ul li{
		box-shadow: 2px 2px 0 0 '.esc_attr($it_company_lite_second_color).';
		}';
	}

	/*---------------------------Width Layout -------------------*/

	$it_company_lite_theme_lay = get_theme_mod( 'it_company_lite_width_option','Full Width');
    if($it_company_lite_theme_lay == 'Boxed'){
		$it_company_lite_custom_css .='body{';
			$it_company_lite_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$it_company_lite_custom_css .='}';
		$it_company_lite_custom_css .='.page-template-custom-home-page .main-header{';
			$it_company_lite_custom_css .='width: 97%;';
		$it_company_lite_custom_css .='}';
		$it_company_lite_custom_css .='.lower-header label{';
			$it_company_lite_custom_css .='width: 71%;';
		$it_company_lite_custom_css .='}';
	}else if($it_company_lite_theme_lay == 'Wide Width'){
		$it_company_lite_custom_css .='body{';
			$it_company_lite_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$it_company_lite_custom_css .='}';
	}else if($it_company_lite_theme_lay == 'Full Width'){
		$it_company_lite_custom_css .='body{';
			$it_company_lite_custom_css .='max-width: 100%;';
		$it_company_lite_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$it_company_lite_theme_lay = get_theme_mod( 'it_company_lite_slider_opacity_color','0.4');
	if($it_company_lite_theme_lay == '0'){
		$it_company_lite_custom_css .='#slider img{';
			$it_company_lite_custom_css .='opacity:0';
		$it_company_lite_custom_css .='}';
		}else if($it_company_lite_theme_lay == '0.1'){
		$it_company_lite_custom_css .='#slider img{';
			$it_company_lite_custom_css .='opacity:0.1';
		$it_company_lite_custom_css .='}';
		}else if($it_company_lite_theme_lay == '0.2'){
		$it_company_lite_custom_css .='#slider img{';
			$it_company_lite_custom_css .='opacity:0.2';
		$it_company_lite_custom_css .='}';
		}else if($it_company_lite_theme_lay == '0.3'){
		$it_company_lite_custom_css .='#slider img{';
			$it_company_lite_custom_css .='opacity:0.3';
		$it_company_lite_custom_css .='}';
		}else if($it_company_lite_theme_lay == '0.4'){
		$it_company_lite_custom_css .='#slider img{';
			$it_company_lite_custom_css .='opacity:0.4';
		$it_company_lite_custom_css .='}';
		}else if($it_company_lite_theme_lay == '0.5'){
		$it_company_lite_custom_css .='#slider img{';
			$it_company_lite_custom_css .='opacity:0.5';
		$it_company_lite_custom_css .='}';
		}else if($it_company_lite_theme_lay == '0.6'){
		$it_company_lite_custom_css .='#slider img{';
			$it_company_lite_custom_css .='opacity:0.6';
		$it_company_lite_custom_css .='}';
		}else if($it_company_lite_theme_lay == '0.7'){
		$it_company_lite_custom_css .='#slider img{';
			$it_company_lite_custom_css .='opacity:0.7';
		$it_company_lite_custom_css .='}';
		}else if($it_company_lite_theme_lay == '0.8'){
		$it_company_lite_custom_css .='#slider img{';
			$it_company_lite_custom_css .='opacity:0.8';
		$it_company_lite_custom_css .='}';
		}else if($it_company_lite_theme_lay == '0.9'){
		$it_company_lite_custom_css .='#slider img{';
			$it_company_lite_custom_css .='opacity:0.9';
		$it_company_lite_custom_css .='}';
		}

	/*---------------------------Slider Content Layout -------------------*/

	$it_company_lite_theme_lay = get_theme_mod( 'it_company_lite_slider_content_option','Center');
    if($it_company_lite_theme_lay == 'Left'){
		$it_company_lite_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$it_company_lite_custom_css .='text-align:left; left:15%; right:45%;';
		$it_company_lite_custom_css .='}';
	}else if($it_company_lite_theme_lay == 'Center'){
		$it_company_lite_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$it_company_lite_custom_css .='text-align:center; left:25%; right:25%;';
		$it_company_lite_custom_css .='}';
	}else if($it_company_lite_theme_lay == 'Right'){
		$it_company_lite_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$it_company_lite_custom_css .='text-align:right; left:45%; right:15%;';
		$it_company_lite_custom_css .='}';
	}

	/*---------------------------Slider Height ------------*/

	$it_company_lite_slider_height = get_theme_mod('it_company_lite_slider_height');
	if($it_company_lite_slider_height != false){
		$it_company_lite_custom_css .='#slider img{';
			$it_company_lite_custom_css .='height: '.esc_attr($it_company_lite_slider_height).';';
		$it_company_lite_custom_css .='}';
	}

	/*--------------------------- Slider -------------------*/

	$it_company_lite_slider = get_theme_mod('it_company_lite_slider_hide_show');
	if($it_company_lite_slider == false){
		$it_company_lite_custom_css .='.page-template-custom-home-page .home-page-header{';
			$it_company_lite_custom_css .='padding-bottom: 1em;';
		$it_company_lite_custom_css .='}';
		$it_company_lite_custom_css .='.page-template-custom-home-page .main-header{';
			$it_company_lite_custom_css .='position: static;';
		$it_company_lite_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$it_company_lite_theme_lay = get_theme_mod( 'it_company_lite_blog_layout_option','Default');
    if($it_company_lite_theme_lay == 'Default'){
		$it_company_lite_custom_css .='.post-main-box{';
			$it_company_lite_custom_css .='';
		$it_company_lite_custom_css .='}';
	}else if($it_company_lite_theme_lay == 'Center'){
		$it_company_lite_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn, #our-services p{';
			$it_company_lite_custom_css .='text-align:center;';
		$it_company_lite_custom_css .='}';
		$it_company_lite_custom_css .='.post-info{';
			$it_company_lite_custom_css .='margin-top:10px;';
		$it_company_lite_custom_css .='}';
		$it_company_lite_custom_css .='.post-info hr{';
			$it_company_lite_custom_css .='margin:10px auto;';
		$it_company_lite_custom_css .='}';
	}else if($it_company_lite_theme_lay == 'Left'){
		$it_company_lite_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn, #our-services p{';
			$it_company_lite_custom_css .='text-align:Left;';
		$it_company_lite_custom_css .='}';
	}

	/*------------------------------Responsive Media -----------------------*/

	$it_company_lite_resp_topbar = get_theme_mod( 'it_company_lite_resp_topbar_hide_show',false);
	if($it_company_lite_resp_topbar == true && get_theme_mod( 'it_company_lite_topbar_hide_show', false) == false){
    	$it_company_lite_custom_css .='#topbar{';
			$it_company_lite_custom_css .='display:none;';
		$it_company_lite_custom_css .='} ';
	}
    if($it_company_lite_resp_topbar == true){
    	$it_company_lite_custom_css .='@media screen and (max-width:575px) {';
		$it_company_lite_custom_css .='#topbar{';
			$it_company_lite_custom_css .='display:block;';
		$it_company_lite_custom_css .='} }';
	}else if($it_company_lite_resp_topbar == false){
		$it_company_lite_custom_css .='@media screen and (max-width:575px) {';
		$it_company_lite_custom_css .='#topbar{';
			$it_company_lite_custom_css .='display:none;';
		$it_company_lite_custom_css .='} }';
	}

	$it_company_lite_resp_stickyheader = get_theme_mod( 'it_company_lite_stickyheader_hide_show',false);
	if($it_company_lite_resp_stickyheader == true && get_theme_mod( 'it_company_lite_sticky_header',false) != true){
    	$it_company_lite_custom_css .='.header-fixed{';
			$it_company_lite_custom_css .='position:static;';
		$it_company_lite_custom_css .='} ';
	}
    if($it_company_lite_resp_stickyheader == true){
    	$it_company_lite_custom_css .='@media screen and (max-width:575px) {';
		$it_company_lite_custom_css .='.header-fixed{';
			$it_company_lite_custom_css .='position:fixed;';
		$it_company_lite_custom_css .='} }';
	}else if($it_company_lite_resp_stickyheader == false){
		$it_company_lite_custom_css .='@media screen and (max-width:575px){';
		$it_company_lite_custom_css .='.header-fixed{';
			$it_company_lite_custom_css .='position:static;';
		$it_company_lite_custom_css .='} }';
	}

	$it_company_lite_resp_slider = get_theme_mod( 'it_company_lite_resp_slider_hide_show',false);
	if($it_company_lite_resp_slider == true && get_theme_mod( 'it_company_lite_slider_hide_show', false) == false){
    	$it_company_lite_custom_css .='#slider{';
			$it_company_lite_custom_css .='display:none;';
		$it_company_lite_custom_css .='} ';
	}
    if($it_company_lite_resp_slider == true){
    	$it_company_lite_custom_css .='@media screen and (max-width:575px) {';
		$it_company_lite_custom_css .='#slider{';
			$it_company_lite_custom_css .='display:block;';
		$it_company_lite_custom_css .='} }';
	}else if($it_company_lite_resp_slider == false){
		$it_company_lite_custom_css .='@media screen and (max-width:575px) {';
		$it_company_lite_custom_css .='#slider{';
			$it_company_lite_custom_css .='display:none;';
		$it_company_lite_custom_css .='} }';
	}

	$it_company_lite_resp_metabox = get_theme_mod( 'it_company_lite_metabox_hide_show',true);
    if($it_company_lite_resp_metabox == true){
    	$it_company_lite_custom_css .='@media screen and (max-width:575px) {';
		$it_company_lite_custom_css .='.post-info{';
			$it_company_lite_custom_css .='display:block;';
		$it_company_lite_custom_css .='} }';
	}else if($it_company_lite_resp_metabox == false){
		$it_company_lite_custom_css .='@media screen and (max-width:575px) {';
		$it_company_lite_custom_css .='.post-info{';
			$it_company_lite_custom_css .='display:none;';
		$it_company_lite_custom_css .='} }';
	}

	$it_company_lite_resp_sidebar = get_theme_mod( 'it_company_lite_sidebar_hide_show',true);
    if($it_company_lite_resp_sidebar == true){
    	$it_company_lite_custom_css .='@media screen and (max-width:575px) {';
		$it_company_lite_custom_css .='.sidebar{';
			$it_company_lite_custom_css .='display:block;';
		$it_company_lite_custom_css .='} }';
	}else if($it_company_lite_resp_sidebar == false){
		$it_company_lite_custom_css .='@media screen and (max-width:575px) {';
		$it_company_lite_custom_css .='.sidebar{';
			$it_company_lite_custom_css .='display:none;';
		$it_company_lite_custom_css .='} }';
	}

	$it_company_lite_resp_scroll_top = get_theme_mod( 'it_company_lite_resp_scroll_top_hide_show',true);
	if($it_company_lite_resp_scroll_top == true && get_theme_mod( 'it_company_lite_hide_show_scroll',true) != true){
    	$it_company_lite_custom_css .='.scrollup i{';
			$it_company_lite_custom_css .='visibility:hidden !important;';
		$it_company_lite_custom_css .='} ';
	}
    if($it_company_lite_resp_scroll_top == true){
    	$it_company_lite_custom_css .='@media screen and (max-width:575px) {';
		$it_company_lite_custom_css .='.scrollup i{';
			$it_company_lite_custom_css .='visibility:visible !important;';
		$it_company_lite_custom_css .='} }';
	}else if($it_company_lite_resp_scroll_top == false){
		$it_company_lite_custom_css .='@media screen and (max-width:575px){';
		$it_company_lite_custom_css .='.scrollup i{';
			$it_company_lite_custom_css .='visibility:hidden !important;';
		$it_company_lite_custom_css .='} }';
	}

	/*------------- Top Bar Settings ------------------*/

	$it_company_lite_topbar_padding_top_bottom = get_theme_mod('it_company_lite_topbar_padding_top_bottom');
	if($it_company_lite_topbar_padding_top_bottom != false){
		$it_company_lite_custom_css .='#topbar{';
			$it_company_lite_custom_css .='padding-top: '.esc_attr($it_company_lite_topbar_padding_top_bottom).'; padding-bottom: '.esc_attr($it_company_lite_topbar_padding_top_bottom).';';
		$it_company_lite_custom_css .='}';
	}

	/*-------------- Sticky Header Padding ----------------*/

	$it_company_lite_sticky_header_padding = get_theme_mod('it_company_lite_sticky_header_padding');
	if($it_company_lite_sticky_header_padding != false){
		$it_company_lite_custom_css .='.header-fixed{';
			$it_company_lite_custom_css .='padding: '.esc_attr($it_company_lite_sticky_header_padding).';';
		$it_company_lite_custom_css .='}';
	}

	/*---------------- Button Settings ------------------*/

	$it_company_lite_button_padding_top_bottom = get_theme_mod('it_company_lite_button_padding_top_bottom');
	$it_company_lite_button_padding_left_right = get_theme_mod('it_company_lite_button_padding_left_right');
	if($it_company_lite_button_padding_top_bottom != false || $it_company_lite_button_padding_left_right != false){
		$it_company_lite_custom_css .='.post-main-box .content-bttn a{';
			$it_company_lite_custom_css .='padding-top: '.esc_attr($it_company_lite_button_padding_top_bottom).'; padding-bottom: '.esc_attr($it_company_lite_button_padding_top_bottom).';padding-left: '.esc_attr($it_company_lite_button_padding_left_right).';padding-right: '.esc_attr($it_company_lite_button_padding_left_right).';';
		$it_company_lite_custom_css .='}';
	}

	$it_company_lite_button_border_radius = get_theme_mod('it_company_lite_button_border_radius');
	if($it_company_lite_button_border_radius != false){
		$it_company_lite_custom_css .='.post-main-box .content-bttn a{';
			$it_company_lite_custom_css .='border-radius: '.esc_attr($it_company_lite_button_border_radius).'px;';
		$it_company_lite_custom_css .='}';
	}

	/*------------- Single Blog Page------------------*/

	$it_company_lite_single_blog_post_navigation_show_hide = get_theme_mod('it_company_lite_single_blog_post_navigation_show_hide',true);
	if($it_company_lite_single_blog_post_navigation_show_hide != true){
		$it_company_lite_custom_css .='.post-navigation{';
			$it_company_lite_custom_css .='display: none;';
		$it_company_lite_custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/

	$it_company_lite_copyright_alingment = get_theme_mod('it_company_lite_copyright_alingment');
	if($it_company_lite_copyright_alingment != false){
		$it_company_lite_custom_css .='.copyright p{';
			$it_company_lite_custom_css .='text-align: '.esc_attr($it_company_lite_copyright_alingment).';';
		$it_company_lite_custom_css .='}';
	}

	$it_company_lite_copyright_padding_top_bottom = get_theme_mod('it_company_lite_copyright_padding_top_bottom');
	if($it_company_lite_copyright_padding_top_bottom != false){
		$it_company_lite_custom_css .='.footer-2{';
			$it_company_lite_custom_css .='padding-top: '.esc_attr($it_company_lite_copyright_padding_top_bottom).'; padding-bottom: '.esc_attr($it_company_lite_copyright_padding_top_bottom).';';
		$it_company_lite_custom_css .='}';
	}

	/*----------------Sroll to top Settings ------------------*/

	$it_company_lite_scroll_to_top_font_size = get_theme_mod('it_company_lite_scroll_to_top_font_size');
	if($it_company_lite_scroll_to_top_font_size != false){
		$it_company_lite_custom_css .='.scrollup i{';
			$it_company_lite_custom_css .='font-size: '.esc_attr($it_company_lite_scroll_to_top_font_size).';';
		$it_company_lite_custom_css .='}';
	}

	$it_company_lite_scroll_to_top_padding = get_theme_mod('it_company_lite_scroll_to_top_padding');
	$it_company_lite_scroll_to_top_padding = get_theme_mod('it_company_lite_scroll_to_top_padding');
	if($it_company_lite_scroll_to_top_padding != false){
		$it_company_lite_custom_css .='.scrollup i{';
			$it_company_lite_custom_css .='padding-top: '.esc_attr($it_company_lite_scroll_to_top_padding).';padding-bottom: '.esc_attr($it_company_lite_scroll_to_top_padding).';';
		$it_company_lite_custom_css .='}';
	}

	$it_company_lite_scroll_to_top_width = get_theme_mod('it_company_lite_scroll_to_top_width');
	if($it_company_lite_scroll_to_top_width != false){
		$it_company_lite_custom_css .='.scrollup i{';
			$it_company_lite_custom_css .='width: '.esc_attr($it_company_lite_scroll_to_top_width).';';
		$it_company_lite_custom_css .='}';
	}

	$it_company_lite_scroll_to_top_height = get_theme_mod('it_company_lite_scroll_to_top_height');
	if($it_company_lite_scroll_to_top_height != false){
		$it_company_lite_custom_css .='.scrollup i{';
			$it_company_lite_custom_css .='height: '.esc_attr($it_company_lite_scroll_to_top_height).';';
		$it_company_lite_custom_css .='}';
	}

	$it_company_lite_scroll_to_top_border_radius = get_theme_mod('it_company_lite_scroll_to_top_border_radius');
	if($it_company_lite_scroll_to_top_border_radius != false){
		$it_company_lite_custom_css .='.scrollup i{';
			$it_company_lite_custom_css .='border-radius: '.esc_attr($it_company_lite_scroll_to_top_border_radius).'px;';
		$it_company_lite_custom_css .='}';
	}

	/*----------------Social Icons Settings ------------------*/

	$it_company_lite_social_icon_font_size = get_theme_mod('it_company_lite_social_icon_font_size');
	if($it_company_lite_social_icon_font_size != false){
		$it_company_lite_custom_css .='.sidebar .custom-social-icons i, .footer .custom-social-icons i{';
			$it_company_lite_custom_css .='font-size: '.esc_attr($it_company_lite_social_icon_font_size).';';
		$it_company_lite_custom_css .='}';
	}

	$it_company_lite_social_icon_padding = get_theme_mod('it_company_lite_social_icon_padding');
	if($it_company_lite_social_icon_padding != false){
		$it_company_lite_custom_css .='.sidebar .custom-social-icons i, .footer .custom-social-icons i{';
			$it_company_lite_custom_css .='padding: '.esc_attr($it_company_lite_social_icon_padding).';';
		$it_company_lite_custom_css .='}';
	}

	$it_company_lite_social_icon_width = get_theme_mod('it_company_lite_social_icon_width');
	if($it_company_lite_social_icon_width != false){
		$it_company_lite_custom_css .='.sidebar .custom-social-icons i, .footer .custom-social-icons i{';
			$it_company_lite_custom_css .='width: '.esc_attr($it_company_lite_social_icon_width).';';
		$it_company_lite_custom_css .='}';
	}

	$it_company_lite_social_icon_height = get_theme_mod('it_company_lite_social_icon_height');
	if($it_company_lite_social_icon_height != false){
		$it_company_lite_custom_css .='.sidebar .custom-social-icons i, .footer .custom-social-icons i{';
			$it_company_lite_custom_css .='height: '.esc_attr($it_company_lite_social_icon_height).';';
		$it_company_lite_custom_css .='}';
	}

	$it_company_lite_social_icon_border_radius = get_theme_mod('it_company_lite_social_icon_border_radius');
	if($it_company_lite_social_icon_border_radius != false){
		$it_company_lite_custom_css .='.sidebar .custom-social-icons i, .footer .custom-social-icons i{';
			$it_company_lite_custom_css .='border-radius: '.esc_attr($it_company_lite_social_icon_border_radius).'px;';
		$it_company_lite_custom_css .='}';
	}

	/*----------------Woocommerce Products Settings ------------------*/

	$it_company_lite_products_padding_top_bottom = get_theme_mod('it_company_lite_products_padding_top_bottom');
	if($it_company_lite_products_padding_top_bottom != false){
		$it_company_lite_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$it_company_lite_custom_css .='padding-top: '.esc_attr($it_company_lite_products_padding_top_bottom).'!important; padding-bottom: '.esc_attr($it_company_lite_products_padding_top_bottom).'!important;';
		$it_company_lite_custom_css .='}';
	}

	$it_company_lite_products_padding_left_right = get_theme_mod('it_company_lite_products_padding_left_right');
	if($it_company_lite_products_padding_left_right != false){
		$it_company_lite_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$it_company_lite_custom_css .='padding-left: '.esc_attr($it_company_lite_products_padding_left_right).'!important; padding-right: '.esc_attr($it_company_lite_products_padding_left_right).'!important;';
		$it_company_lite_custom_css .='}';
	}

	$it_company_lite_products_box_shadow = get_theme_mod('it_company_lite_products_box_shadow');
	if($it_company_lite_products_box_shadow != false){
		$it_company_lite_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
				$it_company_lite_custom_css .='box-shadow: '.esc_attr($it_company_lite_products_box_shadow).'px '.esc_attr($it_company_lite_products_box_shadow).'px '.esc_attr($it_company_lite_products_box_shadow).'px #ddd;';
		$it_company_lite_custom_css .='}';
	}

	$it_company_lite_products_border_radius = get_theme_mod('it_company_lite_products_border_radius');
	if($it_company_lite_products_border_radius != false){
		$it_company_lite_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$it_company_lite_custom_css .='border-radius: '.esc_attr($it_company_lite_products_border_radius).'px;';
		$it_company_lite_custom_css .='}';
	}