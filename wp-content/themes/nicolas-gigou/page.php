<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package nicolas-gigou
 */

get_header(); ?>

<div id="main" role="main" class="line pam mw1440p center">

	<!-- Content of the page -->
	<div class="item-container">

		<!-- First row -->
		<div class="top-line grid-2-1">
			<div class="item portrait">
				<img src="wp-content/themes/nicolas-gigou/images/portrait.png" class="img-portrait">
			</div>
			<div class="item presentation">
				<p>Présentation</p>
			</div>
		</div>

		<!-- Second row -->
		<div class="grid-2-1">
			<div class="item projects">
				<p>Projets</p>
			</div>
			<div class="item contact">
				<p>Contact</p>
			</div>
		</div>
	</div>

</div>

<?php get_footer(); ?>
