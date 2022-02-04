<?php
	
	$it_company_first_theme_color = get_theme_mod('it_company_first_theme_color');
	$it_company_second_theme_color = get_theme_mod('it_company_second_theme_color');

	$it_company_custom_css = '';

	if($it_company_first_theme_color != false){
		$it_company_custom_css .=' #footer input[type="submit"], #sidebar .tagcloud a:hover, input[type="submit"], .nav-menu ul ul a, h1.page-title, h1.search-title, .more-btn a, .post-info, .blogbtn a, .inner, .footerinner .tagcloud a:hover, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, #sidebar input[type="submit"], .pagination .current, span.meta-nav,  .tags a:hover,#comments a.comment-reply-link, #comments input[type="submit"].submit, a.button,.back-to-top, #slider .carousel-indicators .active, .woocommerce-product-search button, .navigation .nav-previous a, .navigation .nav-next a, .woocommerce .widget_price_filter .ui-slider-horizontal .ui-slider-range, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle{';
			$it_company_custom_css .='background-color: '.esc_attr($it_company_first_theme_color).';';
		$it_company_custom_css .='}';
	}
	if($it_company_first_theme_color != false){
		$it_company_custom_css .=' .woocommerce .widget_shopping_cart .buttons a:hover, .woocommerce.widget_shopping_cart .buttons a:hover, .woocommerce .widget_price_filter .price_slider_amount .button:hover{';
			$it_company_custom_css .='background-color: '.esc_attr($it_company_first_theme_color).' !important;';
		$it_company_custom_css .='}';
	}
	if($it_company_first_theme_color != false){
		$it_company_custom_css .=' 
		@media screen and (max-width:720px){
		.page-template-custom-front-page .header{';
			$it_company_custom_css .='background-color: '.esc_attr($it_company_first_theme_color).' !important;';
		$it_company_custom_css .='} }';
	}
	if($it_company_first_theme_color != false){
		$it_company_custom_css .='  #sidebar ul li a:hover, a,  .social-media i:hover, .logo h1 a:hover, .account a:hover, .blog-sec h2 a, .border-image i, .footerinner ul li a:hover, .woocommerce-message::before, #sidebar h3, span.post-title, .tags a i, .comment-meta.commentmetadata a {';
			$it_company_custom_css .='color: '.esc_attr($it_company_first_theme_color).';';
		$it_company_custom_css .='}';
	}
	if($it_company_first_theme_color != false){
		$it_company_custom_css .=' .woocommerce-message, .nav-menu ul ul, .tags a:hover{';
			$it_company_custom_css .='border-color: '.esc_attr($it_company_first_theme_color).';';
		$it_company_custom_css .='}';
	}
	if($it_company_first_theme_color != false){
		$it_company_custom_css .=' .back-to-top::before{';
			$it_company_custom_css .='border-bottom-color: '.esc_attr($it_company_first_theme_color).';';
		$it_company_custom_css .='}';
	}
	if($it_company_first_theme_color != false){
		$it_company_custom_css .=' .nav-menu ul ul a:hover{';
			$it_company_custom_css .='border-left-color: '.esc_attr($it_company_first_theme_color).';';
		$it_company_custom_css .='}';
	}
	if($it_company_first_theme_color != false){
		$it_company_custom_css .=' .blog-sec,  #sidebar .widget{';
			$it_company_custom_css .='box-shadow: 2px 2px '.esc_attr($it_company_first_theme_color).';';
		$it_company_custom_css .='}';
	}


	if($it_company_second_theme_color != false){
		$it_company_custom_css .=' .nav-menu ul ul a:hover, .nav-menu ul ul a:focus, .header, .page-template-custom-front-page .top-bar, .search-box, .search-box input.search-field,  #footer, #comments a.comment-reply-link:hover, #comments input[type="submit"].submit:hover, a.button:hover{';
			$it_company_custom_css .='background-color: '.esc_attr($it_company_second_theme_color).';';
		$it_company_custom_css .='}';
	}
	if($it_company_second_theme_color != false){
		$it_company_custom_css .=' 
		@media screen and (max-width:768px) and (min-width:720px){
		.page-template-custom-front-page .header{';
			$it_company_custom_css .='background-color: '.esc_attr($it_company_second_theme_color).' !important;';
		$it_company_custom_css .='} }';
	}
	if($it_company_second_theme_color != false){
		$it_company_custom_css .='  input[type="search"], #about h2, #about h3, .description p{';
			$it_company_custom_css .='color: '.esc_attr($it_company_second_theme_color).';';
		$it_company_custom_css .='}';
	}
	if($it_company_second_theme_color != false){
		$it_company_custom_css .=' .back-to-top::after{';
			$it_company_custom_css .='border-bottom-color: '.esc_attr($it_company_second_theme_color).';';
		$it_company_custom_css .='}';
	}

	// Layout Options
	$it_company_theme_layout = get_theme_mod( 'it_company_theme_layout_options','Default Theme');
    if($it_company_theme_layout == 'Default Theme'){
		$it_company_custom_css .='body{';
			$it_company_custom_css .='max-width: 100%;';
		$it_company_custom_css .='}';
	}else if($it_company_theme_layout == 'Container Theme'){
		$it_company_custom_css .='body{';
			$it_company_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$it_company_custom_css .='}';
		$it_company_custom_css .='.page-template-custom-front-page .header{';
			$it_company_custom_css .='right:0;';
		$it_company_custom_css .='}';
	}else if($it_company_theme_layout == 'Box Container Theme'){
		$it_company_custom_css .='body{';
			$it_company_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$it_company_custom_css .='}';
		$it_company_custom_css .='.page-template-custom-front-page .header{';
			$it_company_custom_css .='right:0;';
		$it_company_custom_css .='}';
	}


	/*------------ Slider Opacity -------------------*/

	$it_company_slider_layout = get_theme_mod( 'it_company_slider_opacity_color','0.5');
	if($it_company_slider_layout == '0'){
		$it_company_custom_css .='#slider img{';
			$it_company_custom_css .='opacity:0';
		$it_company_custom_css .='}';
	}else if($it_company_slider_layout == '0.1'){
		$it_company_custom_css .='#slider img{';
			$it_company_custom_css .='opacity:0.1';
		$it_company_custom_css .='}';
	}else if($it_company_slider_layout == '0.2'){
		$it_company_custom_css .='#slider img{';
			$it_company_custom_css .='opacity:0.2';
		$it_company_custom_css .='}';
	}else if($it_company_slider_layout == '0.3'){
		$it_company_custom_css .='#slider img{';
			$it_company_custom_css .='opacity:0.3';
		$it_company_custom_css .='}';
	}else if($it_company_slider_layout == '0.4'){
		$it_company_custom_css .='#slider img{';
			$it_company_custom_css .='opacity:0.4';
		$it_company_custom_css .='}';
	}else if($it_company_slider_layout == '0.5'){
		$it_company_custom_css .='#slider img{';
			$it_company_custom_css .='opacity:0.5';
		$it_company_custom_css .='}';
	}else if($it_company_slider_layout == '0.6'){
		$it_company_custom_css .='#slider img{';
			$it_company_custom_css .='opacity:0.6';
		$it_company_custom_css .='}';
	}else if($it_company_slider_layout == '0.7'){
		$it_company_custom_css .='#slider img{';
			$it_company_custom_css .='opacity:0.7';
		$it_company_custom_css .='}';
	}else if($it_company_slider_layout == '0.8'){
		$it_company_custom_css .='#slider img{';
			$it_company_custom_css .='opacity:0.8';
		$it_company_custom_css .='}';
	}else if($it_company_slider_layout == '0.9'){
		$it_company_custom_css .='#slider img{';
			$it_company_custom_css .='opacity:0.9';
		$it_company_custom_css .='}';
	}

	/*-----------Slider Content Layout ----------------*/

	$it_company_slider_layout = get_theme_mod( 'it_company_slider_alignment_option','Center Align');
    if($it_company_slider_layout == 'Left Align'){
		$it_company_custom_css .='#slider .carousel-caption, #slider .inner_carousel{';
			$it_company_custom_css .='text-align:left;';
		$it_company_custom_css .='}';
		$it_company_custom_css .='#slider .carousel-caption{';
		$it_company_custom_css .='left:15%; right:30%;';
		$it_company_custom_css .='}';
	}else if($it_company_slider_layout == 'Center Align'){
		$it_company_custom_css .='#slider .carousel-caption, #slider .inner_carousel{';
			$it_company_custom_css .='text-align:center;';
		$it_company_custom_css .='}';
		$it_company_custom_css .='#slider .carousel-caption{';
		$it_company_custom_css .='left:24%; right:24%;';
		$it_company_custom_css .='}';
	}else if($it_company_slider_layout == 'Right Align'){
		$it_company_custom_css .='#slider .carousel-caption, #slider .inner_carousel{';
			$it_company_custom_css .='text-align:right;';
		$it_company_custom_css .='}';
		$it_company_custom_css .='#slider .carousel-caption{';
		$it_company_custom_css .='left:30%; right:15%;';
		$it_company_custom_css .='}';
	}

	/*--------- Preloader Color Option -------*/
	$it_company_preloader_color = get_theme_mod('it_company_preloader_color');

	if($it_company_preloader_color != false){
		$it_company_custom_css .=' .tg-loader{';
			$it_company_custom_css .='border-color: '.esc_attr($it_company_preloader_color).';';
		$it_company_custom_css .='} ';
		$it_company_custom_css .=' .tg-loader-inner, .preloader .preloader-container .animated-preloader, .preloader .preloader-container .animated-preloader:before{';
			$it_company_custom_css .='background-color: '.esc_attr($it_company_preloader_color).';';
		$it_company_custom_css .='} ';
	}

	$it_company_preloader_bg_color = get_theme_mod('it_company_preloader_bg_color');

	if($it_company_preloader_bg_color != false){
		$it_company_custom_css .=' #overlayer{';
			$it_company_custom_css .='background-color: '.esc_attr($it_company_preloader_bg_color).';';
		$it_company_custom_css .='} ';
	}

	/*--------- Top Header ----------*/
	$it_company_top_bar = get_theme_mod('it_company_top_header');
	if($it_company_top_bar == false){
		$it_company_custom_css .=' .page-template-custom-front-page .header{';
			$it_company_custom_css .='top: 25px;';
		$it_company_custom_css .='} ';
		$it_company_custom_css .=' .page-template-custom-front-page .header{';
			$it_company_custom_css .='top: 25px;';
		$it_company_custom_css .='} ';
	}

	$it_company_top_topbar_padding = get_theme_mod('it_company_top_topbar_padding');
	$it_company_bottom_topbar_padding = get_theme_mod('it_company_bottom_topbar_padding');
	if($it_company_top_topbar_padding != false || $it_company_bottom_topbar_padding != false){
		$it_company_custom_css .='.top-header, .page-template-custom-front-page .top-header{';
			$it_company_custom_css .='padding-top: '.esc_attr($it_company_top_topbar_padding).'px; padding-bottom: '.esc_attr($it_company_bottom_topbar_padding).'px; ';
		$it_company_custom_css .='}';
	}

	$it_company_top_bar = get_theme_mod('it_company_slider_hide');
	if($it_company_top_bar == false){
		$it_company_custom_css .=' .page-template-custom-front-page .header{';
			$it_company_custom_css .='position: static; background-color: #232c2b;';
		$it_company_custom_css .='} ';
		$it_company_custom_css .=' .page-template-custom-front-page .top-header{';
			$it_company_custom_css .='border-bottom: 1px solid #fff;';
		$it_company_custom_css .='} ';
	}

	/*------------ Button Settings option-----------------*/

	$it_company_top_button_padding = get_theme_mod('it_company_top_button_padding');
	$it_company_bottom_button_padding = get_theme_mod('it_company_bottom_button_padding');
	$it_company_left_button_padding = get_theme_mod('it_company_left_button_padding');
	$it_company_right_button_padding = get_theme_mod('it_company_right_button_padding');
	if($it_company_top_button_padding != false || $it_company_bottom_button_padding != false || $it_company_left_button_padding != false || $it_company_right_button_padding != false){
		$it_company_custom_css .='.blogbtn a, .more-btn a, #comments input[type="submit"].submit{';
			$it_company_custom_css .='padding-top: '.esc_attr($it_company_top_button_padding).'px; padding-bottom: '.esc_attr($it_company_bottom_button_padding).'px; padding-left: '.esc_attr($it_company_left_button_padding).'px; padding-right: '.esc_attr($it_company_right_button_padding).'px; display:inline-block;';
		$it_company_custom_css .='}';
	}

	$it_company_button_border_radius = get_theme_mod('it_company_button_border_radius');
	$it_company_custom_css .='.blogbtn a, .more-btn a, .more-btn span, #comments input[type="submit"].submit{';
		$it_company_custom_css .='border-radius: '.esc_attr($it_company_button_border_radius).'px;';
	$it_company_custom_css .='}';

	/*----------- Header Layout ----------------*/

	$it_company_header_layout = get_theme_mod( 'it_company_header_layout','Default Header');
    if($it_company_header_layout == 'Logo above Menu'){
		$it_company_custom_css .='.logo{';
			$it_company_custom_css .='text-align:center;';
		$it_company_custom_css .='}';
		$it_company_custom_css .='.page-template-custom-front-page .logo{';
			$it_company_custom_css .='background: rgba(35, 44, 43, 0.7); border: 0;';
		$it_company_custom_css .='}';
		$it_company_custom_css .='.page-template-custom-front-page .top-header, .logo{';
			$it_company_custom_css .='border-bottom: 1px solid #fff; ';
		$it_company_custom_css .='}';
		$it_company_custom_css .='#slider .carousel-caption{';
			$it_company_custom_css .='top: 55%;';
		$it_company_custom_css .='}';
		$it_company_custom_css .='@media screen and (max-width:1000px){';
			$it_company_custom_css .='.search-box{';
				$it_company_custom_css .='border-top: 0;';
			$it_company_custom_css .='} ';
			$it_company_custom_css .='.page-template-custom-front-page .logo{';
				$it_company_custom_css .='background:#232c2b; border-bottom: 1px solid #fff;';
			$it_company_custom_css .='} ';
		$it_company_custom_css .='}';
	}

	/*-------- Logo Alignment --------*/
	$it_company_logo_alignment = get_theme_mod('it_company_logo_alignment', 'Center');
	if($it_company_logo_alignment == 'Center' ){
		$it_company_custom_css .='.logo{';
			$it_company_custom_css .=' text-align: center;';
		$it_company_custom_css .='}';
	}elseif($it_company_logo_alignment == 'Left' ){
		$it_company_custom_css .='.logo{';
			$it_company_custom_css .=' text-align: left;';
		$it_company_custom_css .='}';
		$it_company_custom_css .='@media screen and (max-width: 720px){
			.logo{';
			$it_company_custom_css .=' text-align: center;';
		$it_company_custom_css .='} }';
	}elseif($it_company_logo_alignment == 'Right' ){
		$it_company_custom_css .='.logo{';
			$it_company_custom_css .=' text-align: right;';
		$it_company_custom_css .='}';
		$it_company_custom_css .='@media screen and (max-width: 720px){
			.logo{';
			$it_company_custom_css .=' text-align: center;';
		$it_company_custom_css .='} }';
	}

	/*------- Menu Alignment -----------*/
	if(get_theme_mod('it_company_show_search') == false  && get_theme_mod('it_company_header_layout') == 'Logo above Menu'){
		$it_company_menu_alignment = get_theme_mod('it_company_menu_alignment', 'Center');
		if($it_company_menu_alignment == 'Center' ){
			$it_company_custom_css .='.menubox{';
				$it_company_custom_css .=' text-align: center;';
			$it_company_custom_css .='}';
		}elseif($it_company_menu_alignment == 'Left' ){
			$it_company_custom_css .='.menubox{';
				$it_company_custom_css .=' text-align: left;';
			$it_company_custom_css .='}';
		}elseif($it_company_menu_alignment == 'Right' ){
			$it_company_custom_css .='.menubox{';
				$it_company_custom_css .=' text-align: right;';
			$it_company_custom_css .='}';
		}
	}

	/*-------- Logo Display option -----------*/
	$it_company_logo_alongside = get_theme_mod('it_company_logo_alongside');
	if ($it_company_logo_alongside == true) {
		$it_company_custom_css .='.logo h1, .logo p.site-title, .logo p{';
			$it_company_custom_css .=' text-align: left;';
		$it_company_custom_css .='}';
		$it_company_custom_css .='@media screen and (max-width: 720px){
		.logo h1, .logo p.site-title, .logo p{';
			$it_company_custom_css .=' text-align: center;';
		$it_company_custom_css .='} }';
	}

	/*---------- Responsive style ---------*/
	if (get_theme_mod('it_company_hide_topbar_responsive') == true && get_theme_mod('it_company_top_header') == false) {
		$it_company_custom_css .='.top-header{';
			$it_company_custom_css .=' display: none;';
		$it_company_custom_css .='} ';
	}
	if (get_theme_mod('it_company_hide_topbar_responsive') == false) {
		$it_company_custom_css .='@media screen and (max-width: 575px){
			.top-header{';
			$it_company_custom_css .=' display: none;';
		$it_company_custom_css .='} }';
	} else if(get_theme_mod('it_company_hide_topbar_responsive') == true){
		$it_company_custom_css .='@media screen and (max-width: 575px){
			.top-header{';
			$it_company_custom_css .=' display: block;';
		$it_company_custom_css .='} }';
	}

	if (get_theme_mod('it_company_sticky_header_responsive') == false) {
		$it_company_custom_css .='@media screen and (max-width: 575px){
			.sticky{';
			$it_company_custom_css .=' position: static;';
		$it_company_custom_css .='} }';
	}

	if (get_theme_mod('it_company_slider_responsive') == true && get_theme_mod('it_company_slider_hide') == false) {
		$it_company_custom_css .='#slider{';
			$it_company_custom_css .=' display: none;';
		$it_company_custom_css .='} ';
	}
	if (get_theme_mod('it_company_slider_responsive') == false) {
		$it_company_custom_css .='@media screen and (max-width: 575px){
			#slider{';
			$it_company_custom_css .=' display: none;';
		$it_company_custom_css .='} }';
	} else if(get_theme_mod('it_company_slider_responsive') == true){
		$it_company_custom_css .='@media screen and (max-width: 575px){
			#slider{';
			$it_company_custom_css .=' display: block;';
		$it_company_custom_css .='} }';
	}

	if (get_theme_mod('it_company_search_responsive') == true && get_theme_mod('it_company_show_search') == false) {
		$it_company_custom_css .='.search-mobile{';
			$it_company_custom_css .=' display: none;';
		$it_company_custom_css .='} ';
	}
	if (get_theme_mod('it_company_search_responsive') == false) {
		$it_company_custom_css .='@media screen and (max-width: 575px){
			.search-mobile{';
			$it_company_custom_css .=' display: none;';
		$it_company_custom_css .='} }';
	} else if(get_theme_mod('it_company_search_responsive') == true){
		$it_company_custom_css .='@media screen and (max-width: 575px){
			.search-mobile{';
			$it_company_custom_css .=' display: block;';
		$it_company_custom_css .='} }';
	}

	if (get_theme_mod('it_company_preloader_responsive',true) == true && get_theme_mod('it_company_preloader') == false) {
		$it_company_custom_css .='.preloader, #overlayer, .tg-loader{';
			$it_company_custom_css .=' display: none;';
		$it_company_custom_css .='} ';
	}
	if (get_theme_mod('it_company_preloader_responsive',true) == false) {
		$it_company_custom_css .='@media screen and (max-width: 575px){
			.preloader, #overlayer, .tg-loader{';
			$it_company_custom_css .=' display: none;';
		$it_company_custom_css .='} }';
	} else if(get_theme_mod('it_company_preloader_responsive',true) == true){
		$it_company_custom_css .='@media screen and (max-width: 575px){
			.preloader, #overlayer, .tg-loader{';
			$it_company_custom_css .=' display: block;';
		$it_company_custom_css .='} }';
	}

	if (get_theme_mod('it_company_slider_button_responsive',true) == true && get_theme_mod('it_company_slider_button') == false) {
		$it_company_custom_css .='.more-btn{';
			$it_company_custom_css .=' display: none;';
		$it_company_custom_css .='} ';
	}
	if (get_theme_mod('it_company_slider_button_responsive',true) == false) {
		$it_company_custom_css .='@media screen and (max-width: 575px){
			.more-btn{';
			$it_company_custom_css .=' display: none;';
		$it_company_custom_css .='} }';
	} else if(get_theme_mod('it_company_slider_button_responsive',true) == true){
		$it_company_custom_css .='@media screen and (max-width: 575px){
			.more-btn{';
			$it_company_custom_css .=' display: block;';
		$it_company_custom_css .='} }';
	}

	if (get_theme_mod('it_company_backtotop_responsive',true) == true && get_theme_mod('it_company_hide_scroll') == false) {
		$it_company_custom_css .='.show-back-to-top{';
			$it_company_custom_css .=' display: none;';
		$it_company_custom_css .='} ';
	}
	if (get_theme_mod('it_company_backtotop_responsive',true) == false) {
		$it_company_custom_css .='@media screen and (max-width: 575px){
			.show-back-to-top{';
			$it_company_custom_css .=' display: none;';
		$it_company_custom_css .='} }';
	} else if(get_theme_mod('it_company_backtotop_responsive',true) == true){
		$it_company_custom_css .='@media screen and (max-width: 575px){
			.show-back-to-top{';
			$it_company_custom_css .=' display: block;';
		$it_company_custom_css .='} }';
	}

	/*----------- Copyright css -----*/
	$it_company_copyright_top_padding = get_theme_mod('it_company_top_copyright_padding');
	$it_company_copyright_bottom_padding = get_theme_mod('it_company_bottom_copyright_padding');
	if($it_company_copyright_top_padding != false || $it_company_copyright_bottom_padding != false){
		$it_company_custom_css .='.inner{';
			$it_company_custom_css .='padding-top: '.esc_attr($it_company_copyright_top_padding).'px; padding-bottom: '.esc_attr($it_company_copyright_bottom_padding).'px; ';
		$it_company_custom_css .='}';
	}

	$it_company_copyright_alignment = get_theme_mod('it_company_copyright_alignment', 'center');
	if($it_company_copyright_alignment == 'center' ){
		$it_company_custom_css .='.copyright p{';
			$it_company_custom_css .='text-align: '. $it_company_copyright_alignment .';';
		$it_company_custom_css .='}';
	}elseif($it_company_copyright_alignment == 'left' ){
		$it_company_custom_css .='.copyright p{';
			$it_company_custom_css .=' text-align: '. $it_company_copyright_alignment .';';
		$it_company_custom_css .='}';
	}elseif($it_company_copyright_alignment == 'right' ){
		$it_company_custom_css .='.copyright p{';
			$it_company_custom_css .='text-align: '. $it_company_copyright_alignment .';';
		$it_company_custom_css .='}';
	}

	$it_company_copyright_font_size = get_theme_mod('it_company_copyright_font_size');
	$it_company_custom_css .='#footer .copyright p{';
		$it_company_custom_css .='font-size: '.esc_attr($it_company_copyright_font_size).'px;';
	$it_company_custom_css .='}';

	/*-------- Blog Post Alignment ------*/
	$it_company_post_alignment = get_theme_mod('it_company_blog_post_alignment', 'left');
	if($it_company_post_alignment == 'center' ){
		$it_company_custom_css .='.blog-sec, .blog-sec h2, .post-info, .blogbtn{';
			$it_company_custom_css .='text-align: '. $it_company_post_alignment .';';
		$it_company_custom_css .='}';
	}elseif($it_company_post_alignment == 'left' ){
		$it_company_custom_css .='.blog-sec, .blog-sec h2, .post-info, .blogbtn{';
			$it_company_custom_css .=' text-align: '. $it_company_post_alignment .';';
		$it_company_custom_css .='}';
	}elseif($it_company_post_alignment == 'right' ){
		$it_company_custom_css .='.blog-sec, .blog-sec h2, .post-info, .blogbtn{';
			$it_company_custom_css .='text-align: '. $it_company_post_alignment .';';
		$it_company_custom_css .='}';
	}

	/*---------- Slider display option ---------*/
	$it_company_slider_display = get_theme_mod('it_company_slider_display_option', 'frontpage');
	if( get_theme_mod('it_company_slider_hide') == true){
		if($it_company_slider_display == 'blog' || $it_company_slider_display == 'both' ){
			$it_company_custom_css .='.blog .header{';
				$it_company_custom_css .=' position: absolute; z-index: 999; width: 100%; background: transparent;';
			$it_company_custom_css .='}';
			$it_company_custom_css .='.blog .top-header{';
				$it_company_custom_css .=' border-bottom: none; background: rgba(35, 44, 43, 0.7); padding: 0 10px;';
			$it_company_custom_css .='}';
			$it_company_custom_css .='.blog .top-bar{';
				$it_company_custom_css .=' background: #232c2b;';
			$it_company_custom_css .='}';
		}
	}
	if( get_theme_mod('it_company_slider_hide' == false)){
		$it_company_custom_css .='.page-template-custom-front-page .header, .blog .header{';
			$it_company_custom_css .=' position: static; background: #232c2b;';
		$it_company_custom_css .='}';
		$it_company_custom_css .='.page-template-custom-front-page .top-header, .blog .top-header{';
			$it_company_custom_css .=' border-bottom: 1px solid #fff;';
		$it_company_custom_css .='}';
	}
	if( $it_company_slider_display == 'blog'){
		$it_company_custom_css .='.page-template-custom-front-page .header{';
			$it_company_custom_css .=' position: static; background: #232c2b;';
		$it_company_custom_css .='}';
		$it_company_custom_css .='.page-template-custom-front-page .top-header{';
			$it_company_custom_css .=' border-bottom: 1px solid #fff;';
		$it_company_custom_css .='}';
	}

	/*---- Slider Content Position -----*/
	$it_company_top_position = get_theme_mod('it_company_slider_top_position');
	$it_company_bottom_position = get_theme_mod('it_company_slider_bottom_position');
	$it_company_left_position = get_theme_mod('it_company_slider_left_position');
	$it_company_right_position = get_theme_mod('it_company_slider_right_position');
	if($it_company_top_position != false || $it_company_bottom_position != false || $it_company_left_position != false || $it_company_right_position != false){
		$it_company_custom_css .='#slider .carousel-caption{';
			$it_company_custom_css .='top: '.esc_attr($it_company_top_position).'%; bottom: '.esc_attr($it_company_bottom_position).'%; left: '.esc_attr($it_company_left_position).'%; right: '.esc_attr($it_company_right_position).'%;';
		$it_company_custom_css .='}';
	}

	/*------ Woocommerce ----*/
	$it_company_product_border = get_theme_mod('it_company_product_border',false);

	if($it_company_product_border == true){
		$it_company_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$it_company_custom_css .='border: 1px solid #dcdcdc;';
		$it_company_custom_css .='}';
	}

	$it_company_product_top = get_theme_mod('it_company_product_top_padding');
	$it_company_product_bottom = get_theme_mod('it_company_product_bottom_padding');
	$it_company_product_left = get_theme_mod('it_company_product_left_padding');
	$it_company_product_right = get_theme_mod('it_company_product_right_padding');
	if($it_company_product_top != false || $it_company_product_bottom != false || $it_company_product_left != false || $it_company_product_right != false){
		$it_company_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$it_company_custom_css .='padding-top: '.esc_attr($it_company_product_top).'px; padding-bottom: '.esc_attr($it_company_product_bottom).'px; padding-left: '.esc_attr($it_company_product_left).'px; padding-right: '.esc_attr($it_company_product_right).'px;';
		$it_company_custom_css .='}';
	}

	$it_company_product_border_radius = get_theme_mod('it_company_product_border_radius');
	if($it_company_product_border_radius != false){
		$it_company_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$it_company_custom_css .='border-radius: '.esc_attr($it_company_product_border_radius).'px;';
		$it_company_custom_css .='}';
	}

	/*-------- Menu Font Size --------*/
	$it_company_menu_font_size = get_theme_mod('it_company_menu_font_size');
	if($it_company_menu_font_size != false){
		$it_company_custom_css .='.nav-menu li a{';
			$it_company_custom_css .='font-size: '.esc_attr($it_company_menu_font_size).'px;';
		$it_company_custom_css .='}';
	}

	$it_company_menu_case = get_theme_mod('it_company_menu_case', 'uppercase');
	if($it_company_menu_case == 'uppercase' ){
		$it_company_custom_css .='.nav-menu li a{';
			$it_company_custom_css .=' text-transform: uppercase;';
		$it_company_custom_css .='}';
	}elseif($it_company_menu_case == 'capitalize' ){
		$it_company_custom_css .='.nav-menu li a{';
			$it_company_custom_css .=' text-transform: capitalize;';
		$it_company_custom_css .='}';
	}

	/*----- WooCommerce button css --------*/
	$it_company_product_button_top = get_theme_mod('it_company_product_button_top_padding',10);
	$it_company_product_button_bottom = get_theme_mod('it_company_product_button_bottom_padding',10);
	$it_company_product_button_left = get_theme_mod('it_company_product_button_left_padding',15);
	$it_company_product_button_right = get_theme_mod('it_company_product_button_right_padding',15);
	if($it_company_product_button_top != false || $it_company_product_button_bottom != false || $it_company_product_button_left != false || $it_company_product_button_right != false){
		$it_company_custom_css .='.woocommerce ul.products li.product .button, .woocommerce div.product form.cart .button, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button, .woocommerce #payment #place_order, .woocommerce-page #payment #place_order, button.woocommerce-button.button.woocommerce-form-login__submit, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
			$it_company_custom_css .='padding-top: '.esc_attr($it_company_product_button_top).'px; padding-bottom: '.esc_attr($it_company_product_button_bottom).'px; padding-left: '.esc_attr($it_company_product_button_left).'px; padding-right: '.esc_attr($it_company_product_button_right).'px;';
		$it_company_custom_css .='}';
	}

	$it_company_product_button_border_radius = get_theme_mod('it_company_product_button_border_radius');
	if($it_company_product_button_border_radius != false){
		$it_company_custom_css .='.woocommerce ul.products li.product .button, .woocommerce div.product form.cart .button, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button, a.checkout-button.button.alt.wc-forward, .woocommerce #payment #place_order, .woocommerce-page #payment #place_order, button.woocommerce-button.button.woocommerce-form-login__submit{';
			$it_company_custom_css .='border-radius: '.esc_attr($it_company_product_button_border_radius).'px;';
		$it_company_custom_css .='}';
	}

	/*----- WooCommerce product sale css --------*/
	$it_company_product_sale_top = get_theme_mod('it_company_product_sale_top_padding');
	$it_company_product_sale_bottom = get_theme_mod('it_company_product_sale_bottom_padding');
	$it_company_product_sale_left = get_theme_mod('it_company_product_sale_left_padding');
	$it_company_product_sale_right = get_theme_mod('it_company_product_sale_right_padding');
	$it_company_custom_css .='.woocommerce span.onsale {';
		$it_company_custom_css .='padding-top: '.esc_attr($it_company_product_sale_top).'px; padding-bottom: '.esc_attr($it_company_product_sale_bottom).'px; padding-left: '.esc_attr($it_company_product_sale_left).'px; padding-right: '.esc_attr($it_company_product_sale_right).'px;';
	$it_company_custom_css .='}';

	$it_company_product_sale_font_size = get_theme_mod('it_company_product_sale_font_size',13);
	$it_company_custom_css .='.woocommerce span.onsale {';
		$it_company_custom_css .='font-size: '.esc_attr($it_company_product_sale_font_size).'px;';
	$it_company_custom_css .='}';

	$it_company_product_sale_border_radius = get_theme_mod('it_company_product_sale_border_radius',50);
		$it_company_custom_css .='.woocommerce span.onsale {';
			$it_company_custom_css .='border-radius: '.esc_attr($it_company_product_sale_border_radius).'px;';
		$it_company_custom_css .='}';

	$it_company_menu_case = get_theme_mod('it_company_product_sale_position', 'Right');
	if($it_company_menu_case == 'Right' ){
		$it_company_custom_css .='.woocommerce ul.products li.product .onsale{';
			$it_company_custom_css .=' left:auto; right:0;';
		$it_company_custom_css .='}';
	}elseif($it_company_menu_case == 'Left' ){
		$it_company_custom_css .='.woocommerce ul.products li.product .onsale{';
			$it_company_custom_css .=' left:-10px; right:auto;';
		$it_company_custom_css .='}';
	}

	/*---- Comment form ----*/
	$it_company_comment_width = get_theme_mod('it_company_comment_width', '100');
	$it_company_custom_css .='#comments textarea{';
		$it_company_custom_css .=' width:'.esc_attr($it_company_comment_width).'%;';
	$it_company_custom_css .='}';

	$it_company_comment_submit_text = get_theme_mod('it_company_comment_submit_text', 'Post Comment');
	if($it_company_comment_submit_text == ''){
		$it_company_custom_css .='#comments p.form-submit {';
			$it_company_custom_css .='display: none;';
		$it_company_custom_css .='}';
	}

	$it_company_comment_title = get_theme_mod('it_company_comment_title', 'Leave a Reply');
	if($it_company_comment_title == ''){
		$it_company_custom_css .='#comments h2#reply-title {';
			$it_company_custom_css .='display: none;';
		$it_company_custom_css .='}';
	}

	/*---- Slider Image overlay -----*/
	$it_company_slider_image_overlay = get_theme_mod('it_company_slider_image_overlay',true);
	if($it_company_slider_image_overlay == false){
		$it_company_custom_css .='#slider img {';
			$it_company_custom_css .='opacity: 1;';
		$it_company_custom_css .='}';
	}

	$it_company_slider_overlay_color = get_theme_mod('it_company_slider_overlay_color');
	if($it_company_slider_overlay_color != false){
		$it_company_custom_css .='#slider  {';
			$it_company_custom_css .='background-color: '.esc_attr($it_company_slider_overlay_color).';';
		$it_company_custom_css .='}';
	}

	/*------ Related products ---------*/
	$it_company_related_products = get_theme_mod('it_company_single_related_products',true);
	if($it_company_related_products == false){
		$it_company_custom_css .=' .related.products{';
			$it_company_custom_css .='display: none;';
		$it_company_custom_css .='}';
	}

	/*------ Footer background css -------*/
	$it_company_footer_bg_color = get_theme_mod('it_company_footer_bg_color');
	if($it_company_footer_bg_color != false){
		$it_company_custom_css .='#footer{';
			$it_company_custom_css .='background-color: '.esc_attr($it_company_footer_bg_color).';';
		$it_company_custom_css .='}';
	}

	$it_company_footer_bg_image = get_theme_mod('it_company_footer_bg_image');
	if($it_company_footer_bg_image != false){
		$it_company_custom_css .='#footer{';
			$it_company_custom_css .='background: url('.esc_attr($it_company_footer_bg_image).');';
		$it_company_custom_css .='}';
	}

	/*----- Featured image css -----*/
	$it_company_feature_image_border_radius = get_theme_mod('it_company_feature_image_border_radius');
	if($it_company_feature_image_border_radius != false){
		$it_company_custom_css .='.blog-sec img{';
			$it_company_custom_css .='border-radius: '.esc_attr($it_company_feature_image_border_radius).'px;';
		$it_company_custom_css .='}';
	}

	$it_company_feature_image_shadow = get_theme_mod('it_company_feature_image_shadow');
	if($it_company_feature_image_shadow != false){
		$it_company_custom_css .='.blog-sec img{';
			$it_company_custom_css .='box-shadow: '.esc_attr($it_company_feature_image_shadow).'px '.esc_attr($it_company_feature_image_shadow).'px '.esc_attr($it_company_feature_image_shadow).'px #aaa;';
		$it_company_custom_css .='}';
	}

	/*----- Blog Post display type css ------*/
	$it_company_blog_post_display_type = get_theme_mod('it_company_blog_post_display_type', 'blocks');
	if($it_company_blog_post_display_type == 'blocks' ){
		$it_company_custom_css .='.blog .blog-sec, .blog #sidebar .widget{';
			$it_company_custom_css .=' box-shadow: 2px 2px #c5351f; border: 1px solid #e4e4e4;';
		$it_company_custom_css .='}';
	}elseif($it_company_blog_post_display_type == 'without blocks' ){
		$it_company_custom_css .='.blog .blog-sec, .blog #sidebar .widget{';
			$it_company_custom_css .=' box-shadow: none; border: 0;';
		$it_company_custom_css .='}';
	}

	/*----- Background content css ------*/
	$it_company_background_white = get_theme_mod('it_company_background_white', 'without background');
	if($it_company_background_white == 'with background' ){
		$it_company_custom_css .='.white-bg, #sidebar .widget{';
			$it_company_custom_css .='background-color: #fff; padding: 10px;';
		$it_company_custom_css .='}';
		$it_company_custom_css .='.blog-sec, #about, .pagination span, .pagination a, .woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$it_company_custom_css .='background-color: #fff; ';
		$it_company_custom_css .='}';
	}

	/*------ Sticky header padding ------------*/
	$it_company_top_sticky_header_padding = get_theme_mod('it_company_top_sticky_header_padding');
	$it_company_bottom_sticky_header_padding = get_theme_mod('it_company_bottom_sticky_header_padding');
	$it_company_custom_css .=' .fixed-header{';
		$it_company_custom_css .=' padding-top: '.esc_attr($it_company_top_sticky_header_padding).'px; padding-bottom: '.esc_attr($it_company_bottom_sticky_header_padding).'px';
	$it_company_custom_css .='}';

	// featured image dimention
	$it_company_blog_image_dimension = get_theme_mod('it_company_blog_image_dimension', 'default');
	$it_company_feature_image_custom_width = get_theme_mod('it_company_feature_image_custom_width',250);
	$it_company_feature_image_custom_height = get_theme_mod('it_company_feature_image_custom_height',250);
	if($it_company_blog_image_dimension == 'custom'){
		$it_company_custom_css .='.blog-sec img{';
			$it_company_custom_css .='width: '.esc_attr($it_company_feature_image_custom_width).'px; height: '.esc_attr($it_company_feature_image_custom_height).'px;';
		$it_company_custom_css .='}';
	}

	// Social Icons Font Size
	$it_company_social_icons_font_size = get_theme_mod('it_company_social_icons_font_size', '15');
	$it_company_custom_css .='.social-media i{';
		$it_company_custom_css .='font-size: '.esc_attr($it_company_social_icons_font_size).'px;';
	$it_company_custom_css .='}';

	// Site title Font Size
	$it_company_site_title_font_size = get_theme_mod('it_company_site_title_font_size', '25');
	$it_company_custom_css .='.logo h1, .logo p.site-title{';
		$it_company_custom_css .='font-size: '.esc_attr($it_company_site_title_font_size).'px;';
	$it_company_custom_css .='}';

	// Woocommerce Shop page pagination
	$it_company_Shop_page_navigation = get_theme_mod('it_company_Shop_page_navigation',true);
	if ($it_company_Shop_page_navigation == false) {
		$it_company_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$it_company_custom_css .='display: none;';
		$it_company_custom_css .='}';
	}

	// Featured image header
	$header_image_url = it_company_banner_image( $image_url = '' );
	$it_company_custom_css .='#page-site-header{';
		$it_company_custom_css .='background-image: url('. esc_url( $header_image_url ).'); background-size: cover;';
	$it_company_custom_css .='}';

	$it_company_post_featured_image = get_theme_mod('it_company_post_featured_image', 'in-content');
	if($it_company_post_featured_image == 'banner' ){
		$it_company_custom_css .='.single #wrapper h1, .page #wrapper h1, .page #wrapper img, .page .title-box h1{';
			$it_company_custom_css .=' display: none;';
		$it_company_custom_css .='}';
		$it_company_custom_css .='.page-template-custom-front-page #page-site-header{';
			$it_company_custom_css .=' display: none;';
		$it_company_custom_css .='}';
	}