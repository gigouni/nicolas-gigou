<?php
/**
 * The header.
 *
 * @package Amities-armor
 */
?><!DOCTYPE html>
<html class="no-js" lang="fr" <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php 
        // get_current_template(false); 
        //echo $_SERVER['REQUEST_URI'];
    ?>
	
	<header id="header" role="banner" class="line ptm txtcenter">
		
		<a href="/" class="logo"><img src="<?php bloginfo('template_url') ?>/images/logo.png" alt="Amitiés d'Armor"></a>

		<div class="actus">
			<div class="actu"></div>
		</div>

	</header><!-- #masthead -->
