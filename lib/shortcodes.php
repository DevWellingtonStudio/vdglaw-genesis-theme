<?php
	/*
	 * Adds custom shortcodes
	 */


// Naviagtion icons/logo
// function that runs when shortcode is called
	function add_icons_logos() {
		$default = '';
		$icons_images_content = get_theme_mod('icons-images-content');
// Things that you want to do.
		$icons_images = '
	<div class="nav-icons-images">
		<div class="nav-icons-images-wrap">
			'. $icons_images_content .'
		</div>
	</div>


	';

// Output needs to be return
		if($icons_images_content !== $default) {
			return $icons_images;
		}
	}
// register shortcode
	add_shortcode('icons-images', 'add_icons_logos');
