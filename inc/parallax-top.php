<?php
add_action('genesis_after_header', 'add_parallax_front_page', 5);
function add_parallax_front_page() {

	$parallax_bg_img = get_theme_mod('parallax_bg_img', $default);
	$feature1_id = attachment_url_to_postid($parallax_bg_img);
	$alt  = get_post_meta( $feature1_id, '_wp_attachment_image_alt', true );

	$parallax_title  = get_theme_mod('parallax_title');
	$parallax_text   = get_theme_mod('parallax_text');
	$parallax_button_title	= get_theme_mod('parallax_button_title');
	$parallax_button_link = get_theme_mod('parallax_button_link');

	$parallax_39vw_img = get_theme_mod('parallax_39vw_img');
	$parallax_52vw_img	= get_theme_mod('parallax_52vw_img');
	$parallax_72vw_img = get_theme_mod('parallax_72vw_img');
	$parallax_87vw_img	= get_theme_mod('parallax_87vw_img');

		echo '<div id="fp-parallax-top" class="parallax-window">
					<div class="parallax-slider">
					<!--<img src="" style="width:100%;" srcset="/img/hero-576x314.png 39vw, /img/hero-768x418.png 52vw, /img/hero-991x540.png 72vw, /img/hero-1200x654.png 87vw" sizes="100vw"> -->
					<img src="' . $parallax_bg_img . '" style="width:100%;" srcset="'. $parallax_39vw_img .' 39vw, '. $parallax_52vw_img .' 52vw, '. $parallax_72vw_img .' 72vw, '. $parallax_87vw_img .' 87vw" sizes="100vw">
					<div class="parallax-content container">
					    <div class="row">
					      <div class="text-btn-content col-lg-6 offset-lg-4 offset-xl-5">
									<div class="card">
										<h1>' . $parallax_title . '</h1>
										<p>' . $parallax_text . '</p>
										<a href="' . $parallax_button_link . '" title="' . $parallax_button_title . '"><button class="btn btn-outline-light">' . $parallax_button_title . '</button></a>
									 </div>
					      </div>
					    </div>
					  </div>
					  </div>
				  </div>
			 </div>';
	}

