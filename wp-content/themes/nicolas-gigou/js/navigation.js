/**
 * Script to handle different elements of the site
 * Used principaly to show you the content page and return to the home one
 * @author : Nicolas GIGOU
 * @protected : Please contact the author to use/edit the following lines at nicolas.gigou [at] gmail.com
 */


function rgbToHex(R,G,B) {
	return toHex(R)+toHex(G)+toHex(B);
}
function toHex(n) {
	n = parseInt(n,10);
	if (isNaN(n)) return "00";
	n = Math.max(0,Math.min(n,255));
	return "0123456789ABCDEF".charAt((n-n%16)/16)
		+ "0123456789ABCDEF".charAt(n%16);
}

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

	/**
	 * ====================================================
	 * ON CLICK ON ITEM PROJECT
	 * REDIRECTION INTO THE SITE OR THE FOLDER IN A NEW TAB
	 * ====================================================
	 */
	
	// The div of project item
	var project_tymai 			= $(".item.tymai");
	var project_anglais 		= $(".item.anglais");
	var project_lambeconduite 	= $(".item.lambeconduite");
	var project_rems 			= $(".item.rems");
	var project_khenchaf 		= $(".item.khenchaf");
	var project_nicolasgigou 	= $(".item.nicolasgigou");
	var project_mkda 			= $(".item.mkda");

	project_tymai.click( function(){ redirectToProject("tymai") });
	project_anglais.click( function(){ redirectToProject("anglais") });
	project_lambeconduite.click( function(){ redirectToProject("lambeconduite") });
	project_rems.click( function(){ redirectToProject("rems") });
	project_khenchaf.click( function(){ redirectToProject("khenchaf") });
	project_nicolasgigou.click( function(){ redirectToProject("nicolasgigou") });
	project_mkda.click( function(){ alert("Aucune page disponible pour l'instant. Veuillez revenir ultérieurement.") });

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
	else if( p == "projects" )		{ projects_content.toggle(400); }
	else if( p == "skills" )		{ skills_content.toggle(400); }
	else if( p == "tutorials" )		{ tutorials_content.toggle(400); }
	else if( p == "contact" )		{ contact_content.toggle(400); }

	// Toggle (show) the home panel in all cases
	home_div.toggle(400);
}

/**
 * =================================================
 * CUSTOM FUNCTION
 * REDIRECT USERS INTO THE HOME PAGE OF EACH PROJECT
 * =================================================
 */
function redirectToProject(project)
{
	if( project == "tymai" ){ window.open("http://www.creperietymai.fr/"); }
	if( project == "anglais" ){ window.open("http://nicolas-gigou.fr/wp-content/uploads/2014/08/site_anglais/home.html"); }
	if( project == "lambeconduite" ){ window.open("http://lambeconduite.com/"); }
	if( project == "rems" ){ window.open("https://rems.ensta-bretagne.fr/"); }
	if( project == "khenchaf" ){ window.open("http://www.ensta-bretagne.fr/khenchaf/"); }
	if( project == "nicolasgigou" ){ goBackHome("projects"); }
}