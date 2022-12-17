<?php
/**
 * Moina Grid functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Moina Grid
 */

if ( ! defined( 'MOINA_GRID_VERSION' ) ) {
	$moina_grid_theme = wp_get_theme();
	define( 'MOINA_GRID_VERSION', $moina_grid_theme->get( 'Version' ) );
}


/**
 * Enqueue scripts and styles.
 */
function moina_grid_scripts() {
    wp_enqueue_style( 'moina-grid-parent-style', get_template_directory_uri() . '/style.css',array('bootstrap','slicknav','moina-default-block','moina-style'), '', 'all');
    wp_enqueue_style( 'moina-grid-main-style',get_stylesheet_directory_uri() . '/assets/css/main-style.css',array(), MOINA_GRID_VERSION, 'all');
    wp_enqueue_script( 'masonry', get_stylesheet_directory_uri() . '/assets/js/masonry.pkgd.min.js',array('jquery'), MOINA_GRID_VERSION, true );
    wp_enqueue_script( 'moina-grid-main-js', get_stylesheet_directory_uri() . '/assets/js/moina-grid-main.js',array('jquery','moina-script'), MOINA_GRID_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'moina_grid_scripts' );

/**
 * Custom excerpt length.
 */
function moina_grid_excerpt_length( $length ) {
    if ( is_admin() ) return $length;
    return 19;
}
add_filter( 'excerpt_length', 'moina_grid_excerpt_length', 999 );