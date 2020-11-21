<?php
/**
 * Customizer
 *
 * @package      Bootstrap for Genesis
 * @since        1.0
 * @link         http://webdevsuperfast.github.io
 * @author       Rotsen Mark Acob <webdevsuperfast.github.io>
 * @copyright    Copyright (c) 2017, Rotsen Mark Acob
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
*/

add_action( 'customize_register', function( $wp_customize ) {

	include 'customizer-sections/jumbotron-parallax.php';
	include 'customizer-sections/fp-mid-slider-options.php';
	include 'customizer-sections/testimonials-customizer.php';
	include 'customizer-sections/blog-customizer.php';

    // Add Default Settings
    $wp_customize->add_setting( 'vdglaw-theme-genesis', array(
        'capability' => 'edit_theme_options',
        'type' => 'theme_mod'
    ) );

    // Add Bootstrap Panel
    $wp_customize->add_panel( 'bootstrap', array(
        'title' => __( 'VDG Law Settings', 'vdglaw-theme-genesis' ),
        'priority' => 100
    ) );

    // Add Navigation Section
    $wp_customize->add_section( 'navigation', array(
        'title' => __( 'Navigation Settings', 'vdglaw-theme-genesis' ),
        'priority' => 10,
        'panel' => 'bootstrap'
    ) );

    //* Add Navigation Controls
    $wp_customize->add_setting( 'navposition', array(
        'default' => ''
    ) );

    $wp_customize->add_control( 'navposition', array(
        'type' => 'select',
        'priority' => 10,
        'label' => __( 'Navigation Position', 'vdglaw-theme-genesis' ),
        'section' => 'navigation',
        'choices' => array(
            '' => __( 'Default', 'vdglaw-theme-genesis' ),
            'sticky-top' => __( 'Sticky Top', 'vdglaw-theme-genesis' ),
            'fixed-top' => __( 'Fixed Top', 'vdglaw-theme-genesis' ),
            'fixed-bottom' => __( 'Fixed Bottom', 'vdglaw-theme-genesis' ),
        )
    ) );

    $wp_customize->add_setting( 'navcontainer', array(
        'default' => 'lg'
    ) );

    // Navigation Container
    $wp_customize->add_control( 'navcontainer', array(
        'type' => 'select',
        'priority' => 20,
        'label' => __( 'Navigation Container', 'vdglaw-theme-genesis' ),
        'section' => 'navigation',
        'choices' => array(
            'sm' => __( 'Small', 'vdglaw-theme-genesis' ),
            'md' => __( 'Medium', 'vdglaw-theme-genesis' ),
            'lg' => __( 'Large', 'vdglaw-theme-genesis' ),
            'xl' => __( 'Extra Large', 'vdglaw-theme-genesis' )
        )
    ) );

    // Navigation Color
    $wp_customize->add_setting( 'navcolor', array(
        'default' => 'dark'
    ) );

    $wp_customize->add_control( 'navcolor', array(
        'type' => 'select',
        'priority' => 30,
        'label' => __( 'Navigation Background', 'vdglaw-theme-genesis' ),
        'section' => 'navigation',
        'choices' => array(
            'light' => __( 'Light', 'vdglaw-theme-genesis' ),
            'dark' => __( 'Dark', 'vdglaw-theme-genesis' ),
            'primary' => __( 'Primary', 'vdglaw-theme-genesis' ),
	          'transparent' => __( 'Transparent', 'vdglaw-theme-genesis'),
	          'black' => __('Black', 'vdglaw-theme-genesis')
        )
    ) );

    // Navigation Extras
    $wp_customize->add_setting( 'navextra', array(
        'default' => 'search'
    ) );

    $wp_customize->add_control( 'navextra', array(
        'type' => 'select',
        'priority' => 40,
        'label' => __( 'Navigation Extras', 'vdglaw-theme-genesis' ),
        'section' => 'navigation',
        'choices' => array(
            '' => __( 'None', 'vdglaw-theme-genesis' ),
            'date' => __( 'Date', 'vdglaw-theme-genesis' ),
            'search' => __( 'Search Form', 'vdglaw-theme-genesis' ),
            'widget' => __( 'Widget Area', 'vdglaw-theme-genesis' )
        )
    ) );

	// Nav Icon/Image Area
	$wp_customize->add_setting( 'icons-images-content', array(
		'default'	=>	'',
		'type'	=> 'theme_mod',
		'sanitize_callback'	=>	'wp_kses_post'
	));
	$wp_customize->add_control( 'icons-images-content', array(
		'label'	=>	__('Image/Icon Area', 'vdglaw-theme-genesis' ),
		'description'	=> __('Used in conjunction with Short Codes To Menu plugin. Shortcode is [icons-images] https://wordpress.org/plugins/shortcode-in-menus/. Also, add the class "break" to the shortcode menu item.', 'vdglaw-theme-genesis' ),
		'section'	=>	'navigation',
		'settings'	=>	'icons-images-content',
		'type'	=> 'textarea'
	));





    // Container Layout
    $wp_customize->add_section( 'container-layout', array(
        'title' => __( 'Container Layout', 'vdglaw-theme-genesis' ),
        'priority' => 40,
        'panel' => 'bootstrap'
    ) );

    $wp_customize->add_setting( 'container', array(
        'default' => 'boxed',
    ) );

    $wp_customize->add_control( 'container', array(
        'type' => 'select',
        'priority' => 30,
        'label' => __( 'Container Settings', 'vdglaw-theme-genesis' ),
        'section' => 'container-layout',
        'choices' => array(
            'fluid' => __( 'Fluid Layout', 'vdglaw-theme-genesis' ),
            'boxed' => __( 'Boxed Layout', 'vdglaw-theme-genesis' )
        )
    ) );

    // Footer Section
    $wp_customize->add_section( 'footer', array(
        'title' => __( 'Footer Section', 'vdglaw-theme-genesis' ),
        'priority' => 40,
        'panel' => 'bootstrap'
    ) );

    $wp_customize->add_setting( 'footerwidgetbg', array(
        'default' => 'dark'
    ) );

    $wp_customize->add_control( 'footerwidgetbg', array(
        'type' => 'select',
        'priority' => 30,
        'label' => __( 'Footer Widget Background', 'vdglaw-theme-genesis' ),
        'section' => 'footer',
        'choices' => array(
            'light' => __( 'Light', 'vdglaw-theme-genesis' ),
            'dark' => __( 'Dark', 'vdglaw-theme-genesis' ),
            'primary' => __( 'Primary', 'vdglaw-theme-genesis' ),
	          'black' => __('Black', 'vdglaw-theme-genesis')
        )
    ) );

    $wp_customize->add_setting( 'footerbg', array(
        'default' => 'dark'
    ) );

    $wp_customize->add_control( 'footerbg', array(
        'type' => 'select',
        'priority' => 30,
        'label' => __( 'Footer Background', 'vdglaw-theme-genesis' ),
        'section' => 'footer',
        'choices' => array(
            'light' => __( 'Light', 'vdglaw-theme-genesis' ),
            'dark' => __( 'Dark', 'vdglaw-theme-genesis' ),
            'primary' => __( 'Primary', 'vdglaw-theme-genesis' ),
            'black' => __('Black', 'vdglaw-theme-genesis')

        )
    ) );
} );
