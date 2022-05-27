<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mywpsite
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<!-- <link rel="shortcut icon" href="favicon.ico"> -->

	<!-- <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic|Merriweather:300,400italic,300italic,400,700italic' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/simple-line-icons.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/magnific-popup.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/bootstrap.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/style.css">


	<!-- Modernizr JS -->
	<script src="<?php bloginfo('stylesheet_directory')?>/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="<?php bloginfo('stylesheet_directory')?>/js/respond.min.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

		<?php 
		  $hero_image = get_field('hero_image');
		  $hero_text = get_field('hero_text');
		  $hero_text_2 = get_field('hero_text_2');
		  $hero_link = get_field('hero_link');
		  $hero_company = get_field('hero_company');
        ?>
	<!-- Loader -->
	<div class="fh5co-loader"></div>
	<div class="fh5co-page">

	<div id="fh5co-container">
		<div id="fh5co-home" class="js-fullheight-home" data-section="home" style="background-image: url(<?php echo $hero_image['url']; ?>);" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="col-md-6">
					<div class="js-fullheight-home fh5co-copy">
						<div class="js-fullheight-home fh5co-copy-inner">
							<h1><?php echo $hero_text; ?></h1>
							<h2><?php echo $hero_text_2; ?> <a href="<?php echo $hero_link; ?>" target="_blank"><?php echo $hero_company; ?></a></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="js-sticky">
			<div class="fh5co-main-nav">
				<div class="container">
					<div class="fh5co-menu-1">
						<a href="#" data-nav-section="home">Home</a>
						<a href="#" data-nav-section="mission">Our Mission</a>
						<a href="#" data-nav-section="services">Services</a>
						<a href="#" data-nav-section="team">The Team</a>
						<a href="#" data-nav-section="contact">Get In Touch</a>
					</div>
				</div>
			</div>
		</div>