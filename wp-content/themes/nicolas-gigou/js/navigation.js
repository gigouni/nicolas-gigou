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
	
	// The div which contains the items on the home page
	var home_div				= $("#home_content");
	var home_portrait_div 		= $(".portrait");
	var home_presentation_div 	= $(".presentation");
	var home_projects_div 		= $(".projects");
	var home_skills_div 		= $(".skills");
	var home_tutorials_div 		= $(".tutorials");
	var home_contact_div 		= $(".contact");

	// The div which contains the content of pages
	var presentation_content = $("#presentation_content");
	var projects_content = $("#projects_content");
	var skills_content = $("#skills_content");
	var tutorials_content = $("#tutorials_content");
	var contact_content = $("#contact_content");

	/**
	 * =================================
	 * DISPLAY ITEM PANEL ON CLICK EVENT
	 * =================================
	 */

	// Hide by default - Until the user click on it
	presentation_content.hide();
	projects_content.hide();
	skills_content.hide();
	tutorials_content.hide();
	contact_content.hide();

	// When the user click on the presentation item
	// To click on this, we are on the home page, no alternatives
	home_presentation_div.click( function() 
	{
		home_div.slideToggle();
		presentation_content.slideToggle();

	});

	// When the user click on the project item
	// To click on this, we are on the home page, no alternatives
	home_projects_div.click( function() 
	{
		home_div.slideToggle();
		projects_content.slideToggle();

	});

	// When the user click on the skills item
	// To click on this, we are on the home page, no alternatives
	home_skills_div.click( function() 
	{
		console.log("home skills div clicked");
		home_div.slideToggle();
		skills_content.slideToggle();

	});

	// When the user click on the tutorials item
	// To click on this, we are on the home page, no alternatives
	home_tutorials_div.click( function() 
	{
		home_div.slideToggle();
		tutorials_content.slideToggle();

	});

	// When the user click on the contact item
	// To click on this, we are on the home page, no alternatives
	home_contact_div.click( function() 
	{
		home_div.slideToggle();
		contact_content.slideToggle();

	});

});