<?php

// Add Blog Customizer Section
$wp_customize->add_section( 'blog-jumbotron', array(
	'title' => __( 'Add Blog Jumbotron Image', 'vdglaw-theme-genesis' ),
	'priority' => 10
));

// Jumbotron Image
$wp_customize -> add_setting ( 'blog_jumbo_img', array(
	'default'           => '',
	'type'              => 'theme_mod',
	'transport'         => 'postMessage'
));
$wp_customize -> add_control (
	new WP_Customize_Image_Control (
		$wp_customize,
		'blog_jumbo_img',
		array (
			'label'             => __('Blog Image'),
			'section'           => 'blog-jumbotron',
			'settings'          => 'blog_jumbo_img',
			//'priority'          => 10,
			'sanitize_callback' => 'esc_url_raw',
		)
	)
);

// Blog Title
$wp_customize->add_setting( 'blog_title', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'sanitize_text_field'
));
$wp_customize->add_control( 'blog_title', array(
	'label'	=>	__('Blog Title', 'vdglaw-theme-genesis' ),
	'section'	=>	'blog-jumbotron',
	'settings'	=>	'blog_title',
	'type'	=> 'text'
));
// Parallax Text Area
$wp_customize->add_setting( 'blog_text', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'sanitize_text_field'
));
$wp_customize->add_control( 'blog_text', array(
	'label'	=>	__('Blog Text', 'vdglaw-theme-genesis' ),
	'section'	=>	'blog-jumbotron',
	'settings'	=>	'blog_text',
	'type'	=> 'textarea'
));
