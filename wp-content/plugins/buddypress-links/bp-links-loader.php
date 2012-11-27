<?php
/*
Plugin Name: BuddyPress Links
Plugin URI: http://wordpress.org/extend/plugins/buddypress-links/
Description: BuddyPress Links is a link sharing component for BuddyPress.
Author: Marshall Sorenson (MrMaz)
Author URI: http://marshallsorenson.com
License: GNU GENERAL PUBLIC LICENSE 3.0 http://www.gnu.org/licenses/gpl.txt
Version: 0.7
Text Domain: buddypress-links
*/

//
// You can override the following constants in
// wp-config.php if you feel the need to.
//
// ***** DO NOT EDIT THIS FILE *****
//

// Define the slug for the component
if ( !defined( 'BP_LINKS_SLUG' ) )
	define( 'BP_LINKS_SLUG', 'links' );

// Define a custom theme name to completely bypass any core links themes
// For example, if your active WordPress theme is 'bluesky', and you wanted
// to define your links theme as 'links-custom', you would put your files in:
// /../../wp-content/themes/bluesky/links-custom
if ( !defined( 'BP_LINKS_CUSTOM_THEME' ) )
	define( 'BP_LINKS_CUSTOM_THEME', false );

//
// If you have a Fotoglif account you may want to change this so
// you get credit for any revenue generated from embedded images.
//
// If you leave this like it is, I will get the credit, which is an
// easy way for you to support the continued development of this plugin :)
if ( !defined( 'BP_LINKS_EMBED_FOTOGLIF_PUBID' ) )
	define( 'BP_LINKS_EMBED_FOTOGLIF_PUBID', 'ncnz5fx9z1h9' );


////////////////////////////////
// Important Internal Constants
// *** DO NOT MODIFY THESE ***

// Configuration
define( 'BP_LINKS_VERSION', '0.7' );
define( 'BP_LINKS_DB_VERSION', '7' );
define( 'BP_LINKS_PLUGIN_NAME', 'buddypress-links' );
define( 'BP_LINKS_PLUGIN_TEXTDOMAIN', 'buddypress-links' );
define( 'BP_LINKS_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );
define( 'BP_LINKS_THEMES_PATH', 'themes' );
define( 'BP_LINKS_DEFAULT_THEME', 'bp-links-default' );
define( 'BP_LINKS_ADMIN_THEME', 'bp-links-admin' );
define( 'BP_LINKS_ACTIVITY_ACTION_CREATE', 'bp_link_create' );
define( 'BP_LINKS_ACTIVITY_ACTION_VOTE', 'bp_link_vote' );
define( 'BP_LINKS_ACTIVITY_ACTION_COMMENT', 'bp_link_comment' );

// Core Paths
define( 'BP_LINKS_PLUGIN_DIR', WP_PLUGIN_DIR . '/' . BP_LINKS_PLUGIN_NAME );
define( 'BP_LINKS_PLUGIN_URL', WP_PLUGIN_URL . '/' . BP_LINKS_PLUGIN_NAME );
define( 'BP_LINKS_LIB_DIR', BP_LINKS_PLUGIN_DIR . '/lib' );

// Sub Paths
define( 'BP_LINKS_THEMES_DIR', BP_LINKS_PLUGIN_DIR . '/' . BP_LINKS_THEMES_PATH );
define( 'BP_LINKS_THEMES_URL', BP_LINKS_PLUGIN_URL . '/' . BP_LINKS_THEMES_PATH );
define( 'BP_LINKS_ADMIN_THEME_DIR', BP_LINKS_THEMES_DIR . '/' . BP_LINKS_ADMIN_THEME );
define( 'BP_LINKS_ADMIN_THEME_URL', BP_LINKS_THEMES_URL . '/' . BP_LINKS_ADMIN_THEME );
define( 'BP_LINKS_ADMIN_THEME_URL_INC', BP_LINKS_ADMIN_THEME_URL . '/_inc' );

// ***************************
///////////////////////////////

//
// Plugin Compatibility Functions
//

/**
 * Check if activity component is enabled
 *
 * @return boolean
 */
function bp_links_is_activity_enabled() {
	return ( class_exists( 'BP_Activity_Component', false ) );
}

/**
 * Check if friends component is enabled
 *
 * @return boolean
 */
function bp_links_is_friends_enabled() {
	return ( class_exists( 'BP_Friends_Component', false ) );
}

//
// Plugin Bootstrap Functions
//

/**
 * Set up root component
 */
function bp_links_setup_root_component() {
	// Register 'links' as a root component
	bp_core_add_root_component( 'links' );
}

/**
 * Set up globals
 */
function bp_links_setup_globals() {
	global $bp, $wpdb;

	$bp->links = new stdClass();

	/* For internal identification NEVER, EVER, CHANGE THIS */
	$bp->links->id = 'links';
	$bp->links->slug = BP_LINKS_SLUG;
	$bp->links->root_slug = isset( $bp->pages->links->slug ) ? $bp->pages->links->slug : BP_LINKS_SLUG;

	$bp->links->table_name = $wpdb->base_prefix . 'bp_links';
	$bp->links->table_name_categories = $wpdb->base_prefix . 'bp_links_categories';
	$bp->links->table_name_votes = $wpdb->base_prefix . 'bp_links_votes';
	$bp->links->table_name_linkmeta = $wpdb->base_prefix . 'bp_links_linkmeta';
	$bp->links->format_notification_function = 'bp_links_format_notifications';

	/* Register this in the active components array */
	$bp->active_components[$bp->links->slug] = $bp->links->id;

	$bp->links->forbidden_names = apply_filters( 'bp_links_forbidden_names', array( 'links', 'my-links', 'link-finder', 'create', 'delete', 'add', 'admin', 'popular', 'most-votes', 'high-votes', 'active', 'newest', 'all', 'submit', 'feed' ) );

	do_action( 'bp_links_setup_globals' );
}

/**
 * Handle special BP initialization
 */
function bp_links_init() {

	// setup actions
	add_action( 'bp_setup_root_components', 'bp_links_setup_root_component' );
	add_action( 'bp_setup_globals', 'bp_links_setup_globals' );

	// load core
	require_once 'bp-links-core.php';

	do_action( 'bp_links_init' );
}

/**
 * Handle activation
 */
function bp_links_activate()
{
	require_once( 'bp-links-upgrade.php' );
	bp_links_setup_globals();
	bp_links_upgrade();
}
add_action( 'activate_' . BP_LINKS_PLUGIN_BASENAME, 'bp_links_activate' );

//
// Hook into BuddyPress!
//
add_action( 'bp_include', 'bp_links_init' );

?>