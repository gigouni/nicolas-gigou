<?php
/**
 * nicolas-gigou functions and definitions
 *
 * @package nicolas-gigou
 */


/**
 * Enqueue scripts and styles.
 */
function nicolas_gigou_scripts() {
	wp_enqueue_style( 'nicolas-gigou-style', get_stylesheet_uri() );
	//wp_enqueue_script( 'nicolas-gigou-jq', get_template_directory_uri() . '/js/jquery.js', array(), '20120206', true );
	//wp_enqueue_script( 'nicolas-gigou-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120207', true );
	

	/*
	wp_enqueue_script( 'nicolas-gigou-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	*/
}
add_action( 'wp_enqueue_scripts', 'nicolas_gigou_scripts' );

/**
 * Remove the meta tag w/ the Wordpress' version
 */
remove_action('wp_head', 'wp_generator');