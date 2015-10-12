<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @package nicolas-gigou
 */

get_header(); ?>

<div id="main" role="main" class="mw1640p center">

	<!-- Content of the page -->
	<div class="item-container">

		<div id="home_content">
			<!-- First row -->
			<div class="line-space-bottom grid-4" id="home_first_row">
				<div class="item welcome medium-row small-row tiny-row">
					<p>Les rubriques <i class="fa fa-arrow-right"></i></p>
				</div>
				<div class="item presentation medium-row small-row tiny-row">
					<p><i class="fa fa-info"></i> Présentation</p>
				</div>
				<div class="item projects flex-item-double medium-row small-row tiny-row">
					<p><i class="fa fa-desktop"></i> Projets</p>
				</div>
			</div>

			<!-- Second row -->
			<div class="grid-4" id="home_second_row">
				<div class="item skills medium-row small-row tiny-row">
					<p><i class="fa fa-graduation-cap"></i> Compétences</p>
				</div>
				<div class="item tutorials flex-item-double medium-row small-row tiny-row">
					<p><i class="fa fa-certificate"></i> Tutoriels</p>
				</div>
				<div class="item contact medium-row small-row tiny-row">
					<p><i class="fa fa-send"></i> Contact</p>
				</div>
			</div>	
		</div>

		<?php get_template_part( 'partials/content', 'presentation' ); ?>
		<?php get_template_part( 'partials/content', 'projects' ); ?>
		<?php get_template_part( 'partials/content', 'skills' ); ?>
		<?php get_template_part( 'partials/content', 'tutorials' ); ?>
		<?php get_template_part( 'partials/content', 'contact' ); ?>
		<?php get_template_part( 'partials/content', 'legalNotice' ); ?>

	</div>

</div>

<?php get_footer(); ?>