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

<div id="main" role="main" class="mw1640p center">

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
			<div class="line-space-bottom grid-4">
				<div class="item welcome">
					<p>Les rubriques <i class="fa fa-arrow-right"></i></p>
				</div>
				<div class="item presentation">
					<p><i class="fa fa-info"></i> Présentation</p>
				</div>
				<div class="item projects flex-item-double">
					<p><i class="fa fa-desktop"></i> Projets</p>
				</div>
			</div>

			<!-- Second row -->
			<div class="grid-4">
				<div class="item skills">
					<p><i class="fa fa-graduation-cap"></i> Compétences</p>
				</div>
				<div class="item tutorials flex-item-double">
					<p><i class="fa fa-certificate"></i> Tutoriels</p>
				</div>
				<div class="item contact">
					<p><i class="fa fa-send"></i> Contact</p>
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