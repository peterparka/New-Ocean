<?php
/**
 * Architect Base Theme functions and definitions
 *
 * @package Arc_starter
 * @since Arc_starter 1.1
 */

require __DIR__ . '/inc/wp-setup.php'; // WP Settings
require __DIR__ . '/inc/scripts.php'; // CSS / JS
require __DIR__ . '/inc/post-types.php'; // Post Types and Taxonomies
require __DIR__ . '/inc/acf.php'; // Advanced Custom Fields
require __DIR__ . '/inc/video-helpers.php'; // Video Helpers

// Register Menus
register_nav_menus( array(
    'header_menu' => 'Header Menu',
    'header_secondary_menu' => 'Header Secondary Menu',
    'footer_menu' => 'Footer Menu'
) );


function my_acf_init() {

	acf_update_setting('google_api_key', 'AIzaSyAsU-ft0miSYlXFl1okB1GCXOehpeRkT9Y');
}

add_action('acf/init', 'my_acf_init');

?>
