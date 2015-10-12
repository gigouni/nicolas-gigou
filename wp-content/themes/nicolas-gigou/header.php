<?php
/**
 * The header.
 *
 * @package nicolas-gigou
 */
?><!DOCTYPE html>
<html class="no-js" lang="fr" <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta title="Nicolas GIGOU">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


	<!-- =============================== -->
	<!-- 	- JQuery and global Js files -->
	<!-- =============================== -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/lib/jquery.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/navigation.js"></script>


	<!-- ====================== -->
	<!--   - Hightlight library -->
	<!-- ====================== -->
	<!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/lib/highlight/hl-default.css"> -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/lib/highlight/obsidian.css">
	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/lib/highlight/hl.pack.js"></script>

	<!-- ================ -->
	<!--   - Font-Awesome -->
	<!--   - Font-Mfizz   -->
	<!-- ================ -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/fonts/fa/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/fonts/fm/font-mfizz.css">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!-- For footer usage -->
	<div id="wrap">
	
	<!-- Header content -->
	<header id="header" role="banner" class="line ptm txtcenter">

		<p class="header_title">Nicolas GIGOU</p>
		<p class="header_content">Développeur web indépendant</p>
		
	</header><!-- #masthead -->
