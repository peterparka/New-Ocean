<?php

if ( ! function_exists( 'arc_setup' ) ):

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which runs
	 * before the init hook. The init hook is too late for some features, such as indicating
	 * support post thumbnails.
	 */
	function arc_setup() {

		/**
		 * Theme supports: Feed links in head, post formats (aside/image/gallery), post thumbnails...
		 */
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );

		/**
		 * This theme uses wp_nav_menu() in one location.
		 */
		register_nav_menus( array(
			'primary' => __( 'Main Navigation', 'architect' ),
		) );

		/**
		 * Remove the crap from the wp_head() function
		 */
		remove_action('wp_head', 'rsd_link');
		remove_action('wp_head', 'wp_generator');
		remove_action('wp_head', 'feed_links', 2);
		remove_action('wp_head', 'index_rel_link');
		remove_action('wp_head', 'wlwmanifest_link');
		remove_action('wp_head', 'feed_links_extra', 3);
		remove_action('wp_head', 'start_post_rel_link', 10, 0);
		remove_action('wp_head', 'parent_post_rel_link', 10, 0);
		remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

		/** WP in the back-end **/

		/**
		 * Disable the Admin bar (courtesy of Paul Davis - Slim Starkers)
		 */
	    add_filter('show_admin_bar', '__return_false');

		/**
		 * Hide the upgrade notices in Wordpress (especially handy for people like Career Innovation etc etc
		 */
		if (!current_user_can('edit_users')) {
			add_action('init', create_function('$a', "remove_action('init', 'wp_version_check');"), 2);
			add_filter('pre_option_update_core', create_function('$a', "return null;"));
		}

		/**
		 * Prevent users from being able to use the full content editor in WP, allow only the code view
		 * - handy when you need to add in custom html to the post (which actually shouldn't be done)
		 **/
		// add_filter ( 'user_can_richedit' , create_function ( '$a' , 'return false;' ) , 50 );



	}

endif; // arc_setup
/**
 * Tell WordPress to run toolbox_setup() when the 'after_setup_theme' hook is run.
 */
add_action( 'after_setup_theme', 'arc_setup' );

/**
 * Remove any unwanted wordpress dashboard boxes
 */
function disable_default_dashboard_widgets() {
	remove_meta_box('dashboard_recent_comments', 'dashboard', 'core');
	remove_meta_box('dashboard_incoming_links', 'dashboard', 'core');
	remove_meta_box('dashboard_plugins', 'dashboard', 'core');
}
add_action('admin_menu', 'disable_default_dashboard_widgets');
