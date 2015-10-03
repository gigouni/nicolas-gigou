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


		<!--
			=============================================================
			CONTENT OF THE PRESENTATION PAGE
			CONTAINS MY PERSONNAL PRESENTATION AND SOME OTHER INFORMATION
			DIV SHOWN ONLY ON THE HOME PAGE (OBVIOUSLY ...)
			=============================================================
		-->
		<div id="presentation-content" class="presentation">
			<pre>
				<code class="hljs json">
	[ { 
	"<span class="hljs-attribute">Identité</span>": <span class="hljs-value"><span class="hljs-string">"Nicolas GIGOU"</span></span>,

	"<span class="hljs-attribute">Âge</span>": <span class="hljs-value"><span class="hljs-number">21</span></span>,

	"<span class="hljs-attribute">Ville</span>": <span class="hljs-value"><span class="hljs-string">"Rennes"</span></span>,

	"<span class="hljs-attribute">Statut</span>":
	<span class="hljs-value"><span class="hljs-string">"Étudiant en M1 MIAGE à l'ISTIC de Rennes
	Auto-entrepreneur en développement de sites internet"</span></span>, 
	
	"<span class="hljs-attribute">À propos</span>":
	<span class="hljs-value"><span class="hljs-string">"Passionné par le web et le monde qui m'entoure, j'aime aller plus loin, 
	en apprendre toujours plus et être un élément qui saura satisfaire 
	les envies et besoins de mes clients."</span></span>
	} ]
				</code>
			</pre>
		</div>


		<!--
			=============================================================
			CONTENT OF THE PROJECT PAGE
			CONTAINS A LIST OF SEVERAL ACHEIVED AND PROCESSING PROJECTS
			DIV SHOWN ONLY ON THE HOME PAGE (OBVIOUSLY ...)
			=============================================================
		-->
		<div id="project-content" class="project">
			<p><span class="project-intro">Listes des projets auxquels j'ai eu le plaisir de participer :</span></p>
			<!-- 
				parseur php ?
				amities d'armor
				the mad king of dev
			 -->

			<!-- First row -->
			<div class="top-line grid-4">
				<div class="item-project projects">
					<p>Projet de site dans le cadre d'un cous d'anglais</p>
				</div>
				<div class="item-project">
					<p>Crêperie Tymaï - Trégastel (22)</p>
				</div>
				<div class="item-project presentation">
					<p>Groupe REMS de l'ENSTA Bretagne - Brest (29)</p>
				</div>
				<div class="item-project projects">
					<p>Page personnelle de Mr KHENCHAF Ali, responsable du groupe REMS de l'ENSTA Bretagne</p>
				</div>
			</div>

			<!-- Second row -->
			<div class="grid-4">
				<div class="item-project competences">
					<p>LAMBE conduite - Brest (29)</p>
				</div>
				<div class="item-project tutoriels flex-item-double">
					<p>Site vitrine personnel nicolas-gigou.fr</p>
				</div>
				<div class="item-project contact">
					<p>Appliction mobile multilangue d'apprentissage au développement - Partage avec les étudiants d'une promo</p>
				</div>
			</div>	
		</div>

	</div>

</div>

<?php get_footer(); ?>