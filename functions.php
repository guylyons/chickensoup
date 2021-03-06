<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */


/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add desktop menu walker */
require_once( 'library/menu-walker.php' );

/** Add off-canvas menu walker */
require_once( 'library/offcanvas-walker.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Add protocol relative theme assets */
require_once( 'library/protocol-relative-theme-assets.php' );

/** Add Chicken 3000 custom php file */
require_once( 'library/chicken.php' );


/** Remove standard custom fields */
add_action('admin_init','remove_custom_meta_boxes');
function remove_custom_meta_boxes() {
    remove_meta_box('postcustom','post','normal');
    remove_meta_box('postcustom','page','normal');
}

/** Thumbnail support */
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 400, 400, true ); // Normal post thumbnails
add_image_size( 'single-post-thumbnail', 400, 9999 ); // Permalink thumbnail size

/* my custom post type: project */
add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'c3k_project',
        array(
            'labels' => array(
                'name' => __( 'Projects', 'c3kwordpress' ),
                    'singular_name' => __( 'Project', 'c3kwordpress' )
	    ),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'projects'),
		'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' ),
	)
    );
    register_post_type( 'c3k_service',
        array(
            'labels' => array(
                'name' => __( 'Services', 'c3kwordpress' ),
                    'singular_name' => __( 'Service', 'c3kwordpress' )
	    ),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'services'),
		'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' ),
	)
    );
}

/* allow svg*/
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
