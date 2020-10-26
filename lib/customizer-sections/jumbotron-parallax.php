<?php

/* Parallax Image */

// Add parallax Section
$wp_customize->add_section( 'parallax', array(
	'title' => __( 'Parallax Section', 'vdglaw-theme-genesis' ),
	'priority' => 10
));
// Parallax Image
$wp_customize -> add_setting ( 'parallax_bg_img', array(
	'default'           => '',
	'type'              => 'theme_mod',
	'transport'         => 'postMessage'
));
$wp_customize -> add_control (
	new WP_Customize_Image_Control (
		$wp_customize,
		'parallax_bg_img',
		array (
			'label'             => __('Parallax Image'),
			'section'           => 'parallax',
			'settings'          => 'parallax_bg_img',
			//'priority'          => 10,
			'sanitize_callback' => 'esc_url_raw',
		)
	)
);

// Parallax 576x314.png 39vw Image
$wp_customize -> add_setting ( 'parallax_39vw_img', array(
	'default'           => '',
	'type'              => 'theme_mod',
	'transport'         => 'postMessage'
));
$wp_customize -> add_control (
	new WP_Customize_Image_Control (
		$wp_customize,
		'parallax_39vw_img',
		array (
			'label'             => __('Parallax 39vw Image'),
			'description'				=> __('Add an image size 576px x 314px'),
			'section'           => 'parallax',
			'settings'          => 'parallax_39vw_img',
			//'priority'          => 10,
			'sanitize_callback' => 'esc_url_raw',
		)
	)
);

// Parallax 768x418.png 52vw Image
$wp_customize -> add_setting ( 'parallax_52vw_img', array(
	'default'           => '',
	'type'              => 'theme_mod',
	'transport'         => 'postMessage'
));
$wp_customize -> add_control (
	new WP_Customize_Image_Control (
		$wp_customize,
		'parallax_52vw_img',
		array (
			'label'             => __('Parallax 52vw Image'),
			'description'				=> __('Add an image size 768px x 418px'),
			'section'           => 'parallax',
			'settings'          => 'parallax_52vw_img',
			//'priority'          => 10,
			'sanitize_callback' => 'esc_url_raw',
		)
	)
);

// Parallax 991x540.png 72vw Image
$wp_customize -> add_setting ( 'parallax_72vw_img', array(
	'default'           => '',
	'type'              => 'theme_mod',
	'transport'         => 'postMessage'
));
$wp_customize -> add_control (
	new WP_Customize_Image_Control (
		$wp_customize,
		'parallax_72vw_img',
		array (
			'label'             => __('Parallax 72vw Image'),
			'description'				=> __('Add an image size 991px x 540px'),
			'section'           => 'parallax',
			'settings'          => 'parallax_72vw_img',
			//'priority'          => 10,
			'sanitize_callback' => 'esc_url_raw',
		)
	)
);

// Parallax 1200x654.png 87vw Image
$wp_customize -> add_setting ( 'parallax_87vw_img', array(
	'default'           => '',
	'type'              => 'theme_mod',
	'transport'         => 'postMessage'
));
$wp_customize -> add_control (
	new WP_Customize_Image_Control (
		$wp_customize,
		'parallax_87vw_img',
		array (
			'label'             => __('Parallax 87vw Image'),
			'description'				=> __('Add an image size 1200px x 654px'),
			'section'           => 'parallax',
			'settings'          => 'parallax_87vw_img',
			//'priority'          => 10,
			'sanitize_callback' => 'esc_url_raw',
		)
	)
);

// Parallax Title
$wp_customize->add_setting( 'parallax_title', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'sanitize_text_field'
));
$wp_customize->add_control( 'parallax_title', array(
	'label'	=>	__('Parallax Title', 'vdglaw-theme-genesis' ),
	'section'	=>	'parallax',
	'settings'	=>	'parallax_title',
	'type'	=> 'text'
));
// Parallax Text Area
$wp_customize->add_setting( 'parallax_text', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'sanitize_text_field'
));
$wp_customize->add_control( 'parallax_text', array(
	'label'	=>	__('Jumbotron Text', 'vdglaw-theme-genesis' ),
	'section'	=>	'parallax',
	'settings'	=>	'parallax_text',
	'type'	=> 'textarea'
));

// Parallax Button Title
$wp_customize->add_setting( 'parallax_button_title', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'sanitize_text_field'
));
$wp_customize->add_control( 'parallax_button_title', array(
	'label'	=>	__('Jumbotron Button Text', 'vdglaw-theme-genesis' ),
	'section'	=>	'parallax',
	'settings'	=>	'parallax_button_title',
	'type'	=> 'text'
));

// Parallax Button Link
$wp_customize->add_setting( 'parallax_button_link', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'esc_url_raw'
));
$wp_customize->add_control( 'parallax_button_link', array(
	'label'	=>	__('Jumbotron Button Link', 'vdglaw-theme-genesis' ),
	'section'	=>	'parallax',
	'settings'	=>	'parallax_button_link',
	'type'	=> 'url'
));


/* Jumbotron Image */

// Add Jumbotron Section
$wp_customize->add_section('jumbotron', array(
	'title' => __('Jumbotron CTA Section', 'vdglaw-theme-genesis'),
	'priority' => 10
));

// Jumbotron Image
$wp_customize->add_setting('jumbotron_bg_img', array(
	'default' => '',
	'type' => 'theme_mod',
	'transport' => 'postMessage'
));
$wp_customize->add_control(
	new WP_Customize_Image_Control (
		$wp_customize,
		'jumbotron_bg_img',
		array(
			'label' => __('Jumbotron Image'),
			'section' => 'jumbotron',
			'settings' => 'jumbotron_bg_img',
			//'priority'          => 10,
			'sanitize_callback' => 'esc_url_raw',
		)
	)
);

// Jumbotron Title
$wp_customize->add_setting('jumbotron_title', array(
	'default' => '',
	'type' => 'theme_mod',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('jumbotron_title', array(
	'label' => __('Jumbotron Title', 'vdglaw-theme-genesis'),
	'section' => 'jumbotron',
	'settings' => 'jumbotron_title',
	'type' => 'text'
));
// Jumbotron Text Area
$wp_customize->add_setting('jumbotron_text', array(
	'default' => '',
	'type' => 'theme_mod',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('jumbotron_text', array(
	'label' => __('Jumbotron Text', 'vdglaw-theme-genesis'),
	'section' => 'jumbotron',
	'settings' => 'jumbotron_text',
	'type' => 'textarea'
));

// Jumbotron Button Title
$wp_customize->add_setting('jumbotron_button_title', array(
	'default' => '',
	'type' => 'theme_mod',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('jumbotron_button_title', array(
	'label' => __('Jumbotron Button Text', 'vdglaw-theme-genesis'),
	'section' => 'jumbotron',
	'settings' => 'jumbotron_button_title',
	'type' => 'text'
));

// Jumbotron Button Link
$wp_customize->add_setting('jumbotron_button_link', array(
	'default' => '',
	'type' => 'theme_mod',
	'sanitize_callback' => 'esc_url_raw'
));
$wp_customize->add_control('jumbotron_button_link', array(
	'label' => __('Jumbotron Button Link', 'vdglaw-theme-genesis'),
	'section' => 'jumbotron',
	'settings' => 'jumbotron_button_link',
	'type' => 'url'
));

