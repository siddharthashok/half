<?php
/**
 * Half Theme Customizer.
 *
 * @package Half
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function half_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	// Add Social Media Section
$wp_customize->add_section( 'social-media' , array(
    'title' => __( 'Social Media', '_s' ),
    'priority' => 30,
    'description' => __( 'Enter the URL to your account for each service for the icon to appear in the header.', '_s' )
) );

$wp_customize->add_setting( 'twitter' , array( 'default' => '' ));
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'twitter', array(
    'label' => __( 'Twitter', '_s' ),
    'section' => 'social-media',
    'settings' => 'twitter',
) ) );

$wp_customize->add_setting( 'facefook' , array( 'default' => '' ));
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'facefook', array(
    'label' => __( 'Facefook', '_s' ),
    'section' => 'social-media',
    'settings' => 'facefook',
) ) );

$wp_customize->add_setting( 'instagram' , array( 'default' => '' ));
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'instagram', array(
    'label' => __( 'Instagram', '_s' ),
    'section' => 'social-media',
    'settings' => 'instagram',
) ) );

$wp_customize->add_setting( 'youtube' , array( 'default' => '' ));
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'youtube', array(
    'label' => __( 'Youtube', '_s' ),
    'section' => 'social-media',
    'settings' => 'youtube',
) ) );

$wp_customize->add_setting( 'github' , array( 'default' => '' ));
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'github', array(
    'label' => __( 'Github', '_s' ),
    'section' => 'social-media',
    'settings' => 'github',
) ) );

$wp_customize->add_setting( 'image_control' , array( 'default' => '' ));
$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'image_control', array(
  'label' => __( 'Featured Home Page Image', '_s' ),
  'section' => 'social-media',
	'settings' => 'image_control',
) ) );



}
add_action( 'customize_register', 'half_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function half_customize_preview_js() {
	wp_enqueue_script( 'half_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'half_customize_preview_js' );
