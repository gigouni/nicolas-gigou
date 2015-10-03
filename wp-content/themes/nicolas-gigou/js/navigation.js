/**
 * Script to handle different elements of the site
 * Used principaly to show you the content page and return to the home one
 * @author : Nicolas GIGOU
 * @protected : Please contact the author to use/edit the following lines at nicolas.gigou [at] gmail.com
 */

$(document).ready(function() 
{
	/**
	 * ==================================================
	 * THE JQUERY IS LOADED
	 * ADD BY QUICK AND DIRTY METHOD DIRECTLY IN THE HEAD
	 * ==================================================
	 */

	/**
	 * ============================
	 * SELECTION OF THE CONTENT DIV
	 * A NEW VAR FOR EACH CONTENT
	 * ============================
	 */
	var home_div				= $("#home_content");
	var home_portrait_div 		= $(".portrait");
	var home_presentation_div 	= $(".presentation");
	var home_projets_div 		= $(".projects");
	var home_competences_div 	= $(".competences");
	var home_tutoriels_div 		= $(".tutoriels");
	var home_contact_div 		= $(".contact");

	/**
	 * ===========================================
	 * ADD HOVER ON EACH ITEM
	 * DID IN JS 'CAUSE NOT WORKING IN CSS WITH IE
	 * ===========================================
	 */
	
	// The div which contains the content of pages
	var presentation_content = $("#presentation-content");
	var project_content = $("#project-content");

	// Hide by default - Until the user click on it
	presentation_content.hide();
	project_content.hide();

	// When the user click on the presentation item
	// To click on this, we are on the home page, no alternatives
	home_presentation_div.click( function() 
	{
		home_div.slideToggle();
		presentation_content.slideToggle();

	});

	// When the user click on the poject item
	// To click on this, we are on the home page, no alternatives
	home_projets_div.click( function() 
	{
		home_div.slideToggle();
		project_content.slideToggle();

	});

});