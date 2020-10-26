<?php
add_action( 'genesis_before_content', 'add_jumbotron_mid_front_page', 20 );
function add_jumbotron_mid_front_page() {
	$jumbotron_bg_img = get_theme_mod('jumbotron_bg_img');
	$feature1_id = attachment_url_to_postid($jumbotron_bg_img);
	$alt  = get_post_meta( $feature1_id, '_wp_attachment_image_alt', true );
	$jumbotron_title  = get_theme_mod('jumbotron_title');
	$jumbotron_text = get_theme_mod('jumbotron_text');
	$jumbotron_button_link = get_theme_mod('jumbotron_button_link');
	$jumbotron_button_title = get_theme_mod('jumbotron_button_title');

	echo ' <div id="mid-page-jumbotron">
					<div class="mid-page jumbotron">

					<picture >
						<source media="(min-width:800px)" srcset="'. $jumbotron_bg_img .'">
						<img src="'. $jumbotron_bg_img .'" alt="'. $alt .'" class="jumbotron__background">
					</picture>

					<div id="fp-mid-jumbotron-cta" class="container text-white">
						<div class="row">
							<div class="content-container col-lg-5 offset-lg-6">
							<h1 class="display-4">'. $jumbotron_title .'</h1>
							<p class="lead">'. $jumbotron_text .'</p>
							<a href="'. $jumbotron_button_link .'" title="'. $jumbotron_button_title .'"><button class="btn btn-outline-light">'. $jumbotron_button_title .'</button></a>
							</div>
						</div>
					</div>
				</div>
				</div>';
}
