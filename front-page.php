<?php
/**
 * This file adds the Front Page Template to VDG Law Genesis Theme
 */

remove_action( 'genesis_loop', 'genesis_do_loop' );
// add a custom loop


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
	$jumbotron_title  = get_theme_mod('jumbotron_title');
	$jumbotron_text   = get_theme_mod('jumbotron_text');

	echo '<div id="fp-parallax-top" class="parallax-window">
					<div class="parallax-slider">
					<img src="'. $jumbotron_bg_img .'" style="width:100%;" sizes="100vw">
					<div class="parallax-content container-fluid">
					    <div class="row">
					      <div class="col-md-4 offset-md-5">
					        <h1>'. $jumbotron_title .'</h1>
					        <p>'. $jumbotron_text .'</p>
					        <button class="btn btn-outline-light">CHANGE TO SCHEDULE A CONSULTATION</button>
					      </div>
					    </div>
					  </div>
				  </div>
			 </div>';
}

// Ads Mid Page Slider
add_action( 'genesis_after_header', 'mid_page_slider', 20 );
function mid_page_slider() {
	$firstImage = get_theme_mod('wst_mid_slider1');
	if($firstImage !== '') {
		include 'inc/fp-mid-slider.php';
	}
}
add_action('genesis_before_content', 'add_testimonials', 10);

function add_testimonials() {
	$default = '';
	$testimonials_slider1       = get_theme_mod('testislider1');
	$testimonials_slider1_title = get_theme_mod('testislider1title');
	$testimonials_slider1_text  = get_theme_mod('testislider1text');

	$testimonials_slider2       = get_theme_mod('testislider2');
	$testimonials_slider2_title = get_theme_mod('testislider2title');
	$testimonials_slider2_text  = get_theme_mod('testislider2text');

	$testimonials_slider3       = get_theme_mod('testislider3');
	$testimonials_slider3_title = get_theme_mod('testislider3title');
	$testimonials_slider3_text  = get_theme_mod('testislider3text');

	$testimonials_slider4       = get_theme_mod('testislider4');
	$testimonials_slider4_title = get_theme_mod('testislider4title');
	$testimonials_slider4_text  = get_theme_mod('testislider4text');

	$testimonials_slider5       = get_theme_mod('testislider5');
	$testimonials_slider5_title = get_theme_mod('testislider5title');
	$testimonials_slider5_text  = get_theme_mod('testislider5text');

	$testimonials_slider6       = get_theme_mod('testislider6');
	$testimonials_slider6_title = get_theme_mod('testislider6title');
	$testimonials_slider6_text  = get_theme_mod('testislider6text');

	if($testimonials_slider1 !== $default) {

		echo '<div id="testimonialIndcators" class="testimonial carousel slide carousel-fade" data-ride="carousel">
					<ol class="carousel-indicators">';
				    if($testimonials_slider2 !== $default) {
							echo '<li data-target="#testimonialIndcators" data-slide-to="0" class="active"></li>
										<li data-target="#testimonialIndcators" data-slide-to="1"></li>';
						}
						if($testimonials_slider3 !== $default) {
							echo '<li data-target="#testimonialIndcators" data-slide-to="2"></li>';
						}
						if($testimonials_slider4 !== $default) {
							echo '<li data-target="#testimonialIndcators" data-slide-to="3"></li>';
						}
						if($testimonials_slider5 !== $default) {
							echo '<li data-target="#testimonialIndcators" data-slide-to="4"></li>';
						}
						if($testimonials_slider6 !== $default) {
							echo '<li data-target="#testimonialIndcators" data-slide-to="5"></li>';
						}
				  echo '</ol>
								<div class="carousel-item active">
								<img src="' . $testimonials_slider1 . '" alt="vdg law testimonial #1">
									<div class="carousel-caption d-md-block">
									<h5>' . $testimonials_slider1_title . '</h5>
									<p>' . $testimonials_slider1_text . '</p>
									</div>
								</div>';

					if($testimonials_slider2 !== $default) {

						echo '<div class="carousel-item" >
									<img src = "' . $testimonials_slider2 . '" alt = "vdg law testimonial #1">
										<div class="carousel-caption d-md-block">
										<h5> ' . $testimonials_slider2_title . '</h5>
										<p> ' . $testimonials_slider2_text . '</p>
										</div>
									</div>';
					}

					if($testimonials_slider3 !== $default) {
						echo '<div class="carousel-item" >
									<img src = "' . $testimonials_slider3 . '" alt = "vdg law testimonial #1" >
										<div class="carousel-caption d-md-block" >
										<h5> ' . $testimonials_slider3_title . '</h5 >
										<p> ' . $testimonials_slider3_text . '</p >
										</div>
									</div>';
					}

					if($testimonials_slider4 !== $default) {
						echo '<div class="carousel-item">
									<img src="' . $testimonials_slider4 . '" alt="vdg law testimonial #1">
										<div class="carousel-caption d-md-block">
										<h5>' . $testimonials_slider4_title . '</h5>
										<p>' . $testimonials_slider4_text . '</p>
										</div>
									</div>';
					}

					if($testimonials_slider5 !== $default) {
						echo '<div class="carousel-item">
									<img src="' . $testimonials_slider5 . '" alt="vdg law testimonial #1">
										<div class="carousel-caption d-md-block">
										<h5>' . $testimonials_slider5_title . '</h5>
										<p>' . $testimonials_slider5_text . '</p>
										</div>
									</div>';
					}

					if($testimonials_slider6 !== $default) {
						echo '<div class="carousel-item">
									<img src="' . $testimonials_slider6 . '" alt="vdg law testimonial #1">
										<div class="carousel-caption d-md-block">
										<h5>' . $testimonials_slider6_title . '</h5>
										<p>' . $testimonials_slider6_text . '</p>
										</div>
									</div>';
					}

					if($testimonials_slider2 !== $default) {
						echo '<a class="carousel-control-prev" href="#testimonialIndcators" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
									</a>
									<a class="carousel-control-next" href="#testimonialIndcators" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
									</a>';
					}
						echo	'</div>';
	}
}




genesis();
