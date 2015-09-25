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
		<div class="top-line grid-4">
			<div class="item portrait small-row">
				<img src="wp-content/themes/nicolas-gigou/images/portrait.png" class="img-portrait">
			</div>
			<div class="item presentation small-row">
				<p>Présentation</p>
			</div>
			<div class="item projects flex-item-double small-row">
				<p>Projets</p>
			</div>
		</div>

		<!-- Second row -->
		<div class="grid-4">
			<div class="item competences small-row">
				<p>Compétences</p>
			</div>
			<div class="item tutoriels flex-item-double small-row">
				<p>Tutoriels</p>
			</div>
			<div class="item contact small-row">
				<p>Contact</p>
			</div>
		</div>
	</div>

</div>

<?php get_footer(); ?>
