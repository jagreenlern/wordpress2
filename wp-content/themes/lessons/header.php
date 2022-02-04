<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lessons
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head> 
<body <?php body_class(); ?>> 
    <div class="lessons-wrapper">    
        <header class="lessons-header">
            <div class="main-menu-area-one">
                <div class="container">
                    <div class="menu-logo">
                        <div class="logo logo-area">
                            <?php lessons_logo(); ?>
                        </div>
                        <nav id="easy-menu">
                            <?php lessons_main_menu(); ?> 
                        </nav><!--#easy-menu-->
                       <div class="header-icons hidden-lg hidden-md ">  
                           <a href="#" class="header-humberger-icon" id="humbarger-icon"><i class="fa fa-bars"></i> </a>
                       </div>
                    </div>
                </div>
            </div>
        </header>
        <nav class="mobile-background-nav">
            <div class="mobile-inner">
                <span class="mobile-menu-close"><i class="icon-icomoon-close"></i></span>
                <?php lessons_mobile_menu(); ?> 
            </div>
        </nav>   
        <div id="page-title-wrap">
            <div class="container">
                <h1 class="page-title text-center">
                    <?php lessons_breadcrumb(); ?>
                </h1> 
            </div> 
        </div>
