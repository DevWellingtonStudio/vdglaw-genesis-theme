<?php

/*
 * Adds customizer options to Blog template
 */

add_action( 'genesis_loop', 'add_jumbotron_blog_template', 5 );
function add_jumbotron_blog_template() {
	$default	= '';
	$blog_jumbo_img = get_theme_mod('blog_jumbo_img');
	$blog_title	= get_theme_mod('blog_title');
	$blog_text	= get_theme_mod('blog_text');

	if(!empty($blog_jumbo_img) && is_home()) {
		echo '
		<div id="blog-loop-jumbotron" class="jumbotron jumbotron-fluid" style="background-image: url(' . $blog_jumbo_img . ');">
			<div class="container">
				<h1 class="display-4">' . $blog_title . '</h1>
				<p class="lead">' . $blog_text . '</p>
			</div>
		</div>





	';
	}
}
