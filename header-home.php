<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<link href='http://fonts.googleapis.com/css?family=Questrial|Inconsolata' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="google-site-verification" content="mFNfRjUNMOKQW3kH9NfTkYEtEiunXCanCQw9ialOrPI" />
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	 <?php wp_head(); ?>
</head>
<body>
	<!-- start nav -->
	<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
	<div class="nav">
			<div class="hamburger"><i class="fa fa-navicon fa-4x"></i></div>
			<!-- <div> -->	
				<!-- <ul id="nav" class="shownav">
					<li><a class="menuitem" href="#about">About</a></li>
					<li><a class="menuitem" href="#portfolio">Portfolio</a></li>
					<li><a class="menuitem" href="#contact">Contact</a></li>
				</ul> -->
				<!-- <ul id="nav" class="shownav">
					<li><?php //wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?></li>
				</ul> -->
				<div id="nav" class="hidden">
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
				</div>
			<!-- </div> -->
	</div>
	<!-- end nav -->