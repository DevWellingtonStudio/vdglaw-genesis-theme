<?php

/* Jumbotron Image */

// Add Jumbotron Section
$wp_customize->add_section( 'jumbotron', array(
	'title' => __( 'Jumbotron', 'vdglaw-theme-genesis' ),
	'priority' => 10
));
// Hero Slider Image #1
$wp_customize -> add_setting ( 'jumbotron_bg_img', array(
	'default'           => '',
	'type'              => 'theme_mod',
	'transport'         => 'postMessage'
));
$wp_customize -> add_control (
	new WP_Customize_Image_Control (
		$wp_customize,
		'jumbotron_bg_img',
		array (
			'label'             => __('Jumbotron Image'),
			'section'           => 'jumbotron',
			'settings'          => 'jumbotron_bg_img',
			//'priority'          => 10,
			'sanitize_callback' => 'esc_url_raw',
		)
	)
);
// Jumbotron Title
$wp_customize->add_setting( 'jumbotron_title', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'sanitize_text_field'
));
$wp_customize->add_control( 'jumbotron_title', array(
	'label'	=>	__('Jumbotron Title', 'vdglaw-theme-genesis' ),
	'section'	=>	'jumbotron',
	'settings'	=>	'jumbotron_title',
	'type'	=> 'text'
));
// Slider #1 Text Area
$wp_customize->add_setting( 'jumbotron_text', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'sanitize_text_field'
));
$wp_customize->add_control( 'jumbotron_text', array(
	'label'	=>	__('Jumbotron Text', 'vdglaw-theme-genesis' ),
	'section'	=>	'jumbotron',
	'settings'	=>	'jumbotron_text',
	'type'	=> 'textarea'
));
