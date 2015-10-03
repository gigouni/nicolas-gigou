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
	
	// The div which contains the items on the home page
	var home_div				= $("#home_content");
	var home_portrait_div 		= $("#home_content .portrait");
	var home_presentation_div 	= $("#home_content .presentation");
	var home_projects_div 		= $("#home_content .projects");
	var home_skills_div 		= $("#home_content .skills");
	var home_tutorials_div 		= $("#home_content .tutorials");
	var home_contact_div 		= $("#home_content .contact");

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
		home_div.toggle(400);
		presentation_content.toggle(400);

	});

	// When the user click on the project item
	// To click on this, we are on the home page, no alternatives
	home_projects_div.click( function() 
	{
		home_div.toggle(400);
		projects_content.toggle(400);

	});

	// When the user click on the skills item
	// To click on this, we are on the home page, no alternatives
	home_skills_div.click( function() 
	{
		home_div.toggle(400);
		skills_content.toggle(400);

	});

	// When the user click on the tutorials item
	// To click on this, we are on the home page, no alternatives
	home_tutorials_div.click( function() 
	{
		home_div.toggle(400);
		tutorials_content.toggle(400);

	});

	// When the user click on the contact item
	// To click on this, we are on the home page, no alternatives
	home_contact_div.click( function() 
	{
		home_div.toggle(400);
		contact_content.toggle(400);

	});

});


/**
 * ==========================================================
 * CUSTOM FUNCTION
 * PERMITS TO GO BACK THE HOME PANEL AND HIDE THE CURRENT ONE
 * ==========================================================
 */
function goBackHome(p)
{
	// The div which contains the content of pages
	var home_div = $("#home_content");
	var presentation_content = $("#presentation_content");
	var projects_content = $("#projects_content");
	var skills_content = $("#skills_content");
	var tutorials_content = $("#tutorials_content");
	var contact_content = $("#contact_content");

	// Toggle (hide with animation) the current panel
	if( p == "presentation" )	{ presentation_content.toggle(400); }
	if( p == "projects" )		{ projects_content.toggle(400); }
	if( p == "skills" )			{ skills_content.toggle(400); }
	if( p == "tutorials" )		{ tutorials_content.toggle(400); }
	if( p == "contact" )		{ contact_content.toggle(400); }

	// Toggle (show) the home panel in all cases
	home_div.toggle(400);
}