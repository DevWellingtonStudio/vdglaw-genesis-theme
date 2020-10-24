<?php

/* Front Page Mid Slider Customizer options */

// Add Front Page Mid Slider Section
$wp_customize->add_section( 'fptestislider', array(
	'title' => __( 'Front Page Testimonials Slider', 'bootstrap-for-genesis' ),
	'priority' => 10
));

// Front Page Mid Slider Image #1
$wp_customize -> add_setting ( 'testislider1', array(
	'default'           => '',
	'type'              => 'theme_mod',
	'transport'         => 'postMessage'
));
$wp_customize -> add_control (
	new WP_Customize_Image_Control (
		$wp_customize,
		'testislider1',
		array (
			'label'             => __('Slider Image, One'),
			'section'           => 'fptestislider',
			'settings'          => 'testislider1',
			//'priority'          => 10,
			'sanitize_callback' => 'esc_url_raw',
		)
	)
);
// Slider #1 Title
$wp_customize->add_setting( 'testislider1title', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'sanitize_text_field'
));
$wp_customize->add_control( 'testislider1title', array(
	'label'	=>	__('Slider 1 Title', 'bootstrap-for-genesis' ),
	'section'	=>	'fptestislider',
	'settings'	=>	'testislider1title',
	'type'	=> 'text'
));
// Slider #1 Text Area
$wp_customize->add_setting( 'testislider1text', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'wp_kses_post'
));
$wp_customize->add_control( 'testislider1text', array(
	'label'	=>	__('Slider 1 Text Area', 'bootstrap-for-genesis' ),
	'section'	=>	'fptestislider',
	'settings'	=>	'testislider1text',
	'type'	=> 'textarea'
));

// Front Page Mid Slider Image #2
$wp_customize -> add_setting ( 'testislider2', array(
	'default'           => '',
	'type'              => 'theme_mod',
	'transport'         => 'postMessage'
));
$wp_customize -> add_control (
	new WP_Customize_Image_Control (
		$wp_customize,
		'testislider2',
		array (
			'label'             => __('Slider Image, Two'),
			'section'           => 'fptestislider',
			'settings'          => 'testislider2',
//'priority'          => 10,
			'sanitize_callback' => 'esc_url_raw',
		)
	)
);
// Slider #2 Title
$wp_customize->add_setting( 'testislider2title', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'sanitize_text_field'
));
$wp_customize->add_control( 'testislider2title', array(
	'label'	=>	__('Slider 2 Title', 'bootstrap-for-genesis' ),
	'section'	=>	'fptestislider',
	'settings'	=>	'testislider2title',
	'type'	=> 'text'
));
// Slider #2 Text Area
$wp_customize->add_setting( 'testislider2text', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'wp_kses_post'
));
$wp_customize->add_control( 'testislider2text', array(
	'label'	=>	__('Slider 2 Text Area', 'bootstrap-for-genesis' ),
	'section'	=>	'fptestislider',
	'settings'	=>	'testislider2text',
	'type'	=> 'textarea'
));
// Front Page Mid Slider Image #3
$wp_customize -> add_setting ( 'testislider3', array(
	'default'           => '',
	'type'              => 'theme_mod',
	'transport'         => 'postMessage'
));
$wp_customize -> add_control (
	new WP_Customize_Image_Control (
		$wp_customize,
		'testislider3',
		array (
			'label'             => __('Slider Image, Three'),
			'section'           => 'fptestislider',
			'settings'          => 'testislider3',
			//'priority'          => 10,
			'sanitize_callback' => 'esc_url_raw',
		)
	)
);
// Slider #3 Title
$wp_customize->add_setting( 'testislider3title', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'sanitize_text_field'
));
$wp_customize->add_control( 'testislider3title', array(
	'label'	=>	__('Slider 3 Title', 'bootstrap-for-genesis' ),
	'section'	=>	'fptestislider',
	'settings'	=>	'testislider3title',
	'type'	=> 'text'
));
// Slider #3 Text Area
$wp_customize->add_setting( 'testislider3text', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'wp_kses_post'
));
$wp_customize->add_control( 'testislider3text', array(
	'label'	=>	__('Slider 3 Text Area', 'bootstrap-for-genesis' ),
	'section'	=>	'fptestislider',
	'settings'	=>	'testislider3text',
	'type'	=> 'textarea'
));
// Front Page Mid Slider Image #4
$wp_customize -> add_setting ( 'testislider4', array(
	'default'           => '',
	'type'              => 'theme_mod',
	'transport'         => 'postMessage'
));
$wp_customize -> add_control (
	new WP_Customize_Image_Control (
		$wp_customize,
		'testislider4',
		array (
			'label'             => __('Slider Image, Four'),
			'section'           => 'fptestislider',
			'settings'          => 'testislider4',
			//'priority'          => 10,
			'sanitize_callback' => 'esc_url_raw',
		)
	)
);
// Slider #4 Title
$wp_customize->add_setting( 'testislider4title', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'sanitize_text_field'
));
$wp_customize->add_control( 'testislider4title', array(
	'label'	=>	__('Slider 4 Title', 'bootstrap-for-genesis' ),
	'section'	=>	'fptestislider',
	'settings'	=>	'testislider4title',
	'type'	=> 'text'
));
// Slider #4 Text Area
$wp_customize->add_setting( 'testislider4text', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'wp_kses_post'
));
$wp_customize->add_control( 'testislider4text', array(
	'label'	=>	__('Slider 4 Text Area', 'bootstrap-for-genesis' ),
	'section'	=>	'fptestislider',
	'settings'	=>	'testislider4text',
	'type'	=> 'textarea'
));

// Front Page Mid Slider Image #5
$wp_customize -> add_setting ( 'testislider5', array(
	'default'           => '',
	'type'              => 'theme_mod',
	'transport'         => 'postMessage'
));
$wp_customize -> add_control (
	new WP_Customize_Image_Control (
		$wp_customize,
		'testislider5',
		array (
			'label'             => __('Slider Image, Five'),
			'section'           => 'fptestislider',
			'settings'          => 'testislider5',
			//'priority'          => 10,
			'sanitize_callback' => 'esc_url_raw',
		)
	)
);
// Slider #5 Title
$wp_customize->add_setting( 'testislider5title', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'sanitize_text_field'
));
$wp_customize->add_control( 'testislider5title', array(
	'label'	=>	__('Slider 5 Title', 'bootstrap-for-genesis' ),
	'section'	=>	'fptestislider',
	'settings'	=>	'testislider5title',
	'type'	=> 'text'
));
// Slider #5 Text Area
$wp_customize->add_setting( 'testislider5text', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'wp_kses_post'
));
$wp_customize->add_control( 'testislider5text', array(
	'label'	=>	__('Slider 5 Text Area', 'bootstrap-for-genesis' ),
	'section'	=>	'fptestislider',
	'settings'	=>	'testislider5text',
	'type'	=> 'textarea'
));

// Front Page Mid Slider Image #6
$wp_customize -> add_setting ( 'testislider6', array(
	'default'           => '',
	'type'              => 'theme_mod',
	'transport'         => 'postMessage'
));
$wp_customize -> add_control (
	new WP_Customize_Image_Control (
		$wp_customize,
		'testislider6',
		array (
			'label'             => __('Slider Image, Six'),
			'section'           => 'fptestislider',
			'settings'          => 'testislider6',
			//'priority'          => 10,
			'sanitize_callback' => 'esc_url_raw',
		)
	)
);
// Slider #6 Title
$wp_customize->add_setting( 'testislider6title', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'sanitize_text_field'
));
$wp_customize->add_control( 'testislider6title', array(
	'label'	=>	__('Slider 6 Title', 'bootstrap-for-genesis' ),
	'section'	=>	'fptestislider',
	'settings'	=>	'testislider6title',
	'type'	=> 'text'
));
// Slider #6 Text Area
$wp_customize->add_setting( 'testislider6text', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'wp_kses_post'
));
$wp_customize->add_control( 'testislider6text', array(
	'label'	=>	__('Slider 6 Text Area', 'bootstrap-for-genesis' ),
	'section'	=>	'fptestislider',
	'settings'	=>	'testislider6text',
	'type'	=> 'textarea'
));

/// ====== End Slider ====== ///

