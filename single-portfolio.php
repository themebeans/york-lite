<?php
/**
 * The template for displaying the single portfolio posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package     York Lite
 * @link        https://themebeans.com/themes/york-lite
 */

get_header();

// Start the loop.
while ( have_posts() ) :

	the_post();

	// Include the single portfolio content template.
	get_template_part( 'components/portfolio/single' );

endwhile;

get_footer();
