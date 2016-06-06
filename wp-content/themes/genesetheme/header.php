<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title('|', true, 'right'); ?></title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?> type = "text/css />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri ();?>/style.css type = "text/css />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/skeleton.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/layout.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/flexslider.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/prettyPhoto.css">

	
    
    <!-- CSS
  ================================================== -->
 	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider-min.js"></script>
 	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri() ?>/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri() ?>/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri() ?>/images/apple-touch-icon-114x114.png">
	<?php wp_head(); ?>
	
</head>
<body class="wrap">



	<!-- Primary Page Layout
	================================================== -->

	<header id="header" class="site-header" role="banner">
    <div id="header-inner" class="container sixteen columns over">
    <hgroup class="one-third column alpha">
    <h1 id="site-title" class="site-title">
    <a href="index.html" id="logo"><img src="images/icebrrrg-logo.png" alt="Icebrrrg logo" height="63" width="157" /></a>
    </h1>
    </hgroup>
    <nav id="main-nav" class="two thirds column omega">
    
    <!-- <li id="menu-item-1" class="current"> -->
    <li id = "menu-item-1">
        <!-- Nav-Menu display -->
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_id' => 'main-nav-menu', 'menu_class'=> 'nav-menu' ) ); ?>
    	
    </li>
    </nav>
    </div>
    </header>
    <div class="container">