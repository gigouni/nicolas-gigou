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

<div id="main" role="main" class="mw1440p center">

	<!-- Content of the page -->
	<div class="item-container">

		<!-->
			===============================================
			CONTENT OF THE HOME PAGE
			CONTAINS THE DIFFERENT TOPICS OF THE WEBSITE
			DIV SHOWN ONLY ON THE HOME PAGE (OBVIOUSLY ...)
			===============================================
		</!-->
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
				<div class="item competences">
					<p>Compétences</p>
				</div>
				<div class="item tutoriels flex-item-double">
					<p>Tutoriels</p>
				</div>
				<div class="item contact">
					<p>Contact</p>
				</div>
			</div>	
		</div>


		<!-->
			=============================================================
			CONTENT OF THE PRESENTATION PAGE
			CONTAINS MY PERSONNAL PRESENTATION AND SOME OTHER INFORMATION
			DIV SHOWN ONLY ON THE HOME PAGE (OBVIOUSLY ...)
			=============================================================
		</!-->
		<div id="presentation-content" class="presentation page-hidden">
			<!-->Test</!-->

			<!-- First row -->
			<div class="top-line grid-4">
				<div class="item portrait">
					<img src="wp-content/themes/nicolas-gigou/images/portrait.png" class="img-portrait">
				</div>
				<div class="item presentation">
					<p>TEST</p>
				</div>
				<div class="item projects flex-item-double">
					<p>TEST</p>
				</div>
			</div>

			<!-- Second row -->
			<div class="grid-4">
				<div class="item competences">
					<p>TEST</p>
				</div>
				<div class="item tutoriels flex-item-double">
					<p>TEST</p>
				</div>
				<div class="item contact">
					<p>TEST</p>
				</div>
			</div>
		</div>

	</div>

</div>

<?php get_footer(); ?>