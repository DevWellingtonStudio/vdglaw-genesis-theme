<?php
/**
 * This file adds the Front Page Template to VDG Law Genesis Theme
 */


add_filter( 'body_class', 'io_front_page_body_class' );
/**
 * Adds a css class to the body element
 *
 * @param  array $classes the current body classes
 * @return array $classes modified classes
 */
function io_front_page_body_class( $classes ) {
	$classes[] = 'front-page';
	return $classes;
}

add_action('genesis_after_header', 'add_jumbotron_front_page', 5);
function add_jumbotron_front_page() {
	$jumbotron_bg_img = get_theme_mod('jumbotron_bg_img');
	/*	echo '<div id="jumbotron-fp" class="jumbotron jumbotron-fluid" style="background-image: url('. $jumbotron_bg_img .');">
					  <div class="container">
					    <h1 class="display-4">Fluid jumbotron</h1>
					    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
					  </div>
			  	</div>';*/

	echo '<div class="parallax-window">
				  <div class="parallax-slider">
				    <img src="'. $jumbotron_bg_img .'" sizes="100vw">
				  </div>
				</div>';
}


remove_action( 'genesis_loop', 'genesis_do_loop' );
// add a custom loop



genesis();
