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

<div id="main" role="main" class="mw1440p center">

	<!-- Content of the page -->
	<div class="item-container">

		<!--
			===============================================
			CONTENT OF THE HOME PAGE
			CONTAINS THE DIFFERENT TOPICS OF THE WEBSITE
			DIV SHOWN ONLY ON THE HOME PAGE (OBVIOUSLY ...)
			===============================================
		-->
		<div id="home_content">
			<!-- First row -->
			<div class="top-line grid-4">
				<div class="item portrait">
					<img src="wp-content/themes/nicolas-gigou/images/portrait.png" class="img-portrait">
				</div>
				<div class="item presentation">
					<p>Présentation</p>
				</div>
				<div class="item projects flex-item-double">
					<p>Projets</p>
				</div>
			</div>

			<!-- Second row -->
			<div class="grid-4">
				<div class="item skills">
					<p>Compétences</p>
				</div>
				<div class="item tutorials flex-item-double">
					<p>Tutoriels</p>
				</div>
				<div class="item contact">
					<p>Contact</p>
				</div>
			</div>	
		</div>

		<?php get_template_part( 'partials/content', 'presentation' ); ?>
		<?php get_template_part( 'partials/content', 'projects' ); ?>
		<?php get_template_part( 'partials/content', 'skills' ); ?>
		<?php get_template_part( 'partials/content', 'tutorials' ); ?>
		<?php get_template_part( 'partials/content', 'contact' ); ?>

	</div>

</div>

<?php get_footer(); ?>