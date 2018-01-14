<?php
/**
 * Enqueue all styles and scripts
 *
 * Learn more about enqueue_script: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_script}
 * Learn more about enqueue_style: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_style }
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'foundationpress_scripts' ) ) :
    function foundationpress_scripts() {

	// Enqueue the main Stylesheet.
	wp_enqueue_style( 'main-stylesheet', get_stylesheet_directory_uri() . '/assets/stylesheets/foundation.css' );

	// Deregister the jquery version bundled with WordPress.
	wp_deregister_script( 'jquery' );

	// Modernizr is used for polyfills and feature detection. Must be placed in header. (Not required).
	// wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/javascript/vendor/modernizr.js', array(), '2.8.3', false );

	wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js', array(), '2.1.0', false );

	wp_enqueue_script( 'foundation', get_template_directory_uri() . '/assets/javascript/foundation.js', array('jquery'), '5.5.2', true );

    wp_enqueue_script( 'packery', get_template_directory_uri() . '/assets/javascript/vendor/packery.pkgd.js', array('jquery'), '1.4.3', false );

    wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/assets/javascript/vendor/imagesloaded.pkgd.min.js', array('jquery'), '3.1.8', false );

    wp_enqueue_script( 'jquery-smooth-scroll', get_template_directory_uri() . '/assets/javascript/vendor/jquery.smooth-scroll.js', array('jquery'), '1.5.6', true);

    wp_enqueue_script( 'parallax', get_template_directory_uri() . '/assets/javascript/vendor/parallax.min.js', array('jquery'), '2.1.3', true);

    // wp_enqueue_script( 'anime', get_template_directory_uri() . '/assets/javascript/vendor/anime.min.js', array('jquery'), '1.0', true );

    wp_enqueue_script( 'lazy', get_template_directory_uri() . '/assets/javascript/lazy.js', array('jquery'), '1.0', false );

    wp_enqueue_script( 'c3k-custom', get_template_directory_uri() . '/assets/javascript/c3k-custom.js', array('jquery'), '1.0', true );
    }

add_action( 'wp_enqueue_scripts', 'foundationpress_scripts' );
endif;

?>
