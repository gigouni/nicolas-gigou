<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Amities-armor
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function amities_armor_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'amities_armor_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function amities_armor_jetpack_setup
add_action( 'after_setup_theme', 'amities_armor_jetpack_setup' );

function amities_armor_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function amities_armor_infinite_scroll_render