<?php 

	$one_login_business_sticky_header = get_theme_mod('one_login_business_sticky_header');

	$one_login_business_custom_style= "";

	if($one_login_business_sticky_header != true){

		$one_login_business_custom_style .='.main-top.fixed{';

			$one_login_business_custom_style .='position: static;';
			
		$one_login_business_custom_style .='}';
	}