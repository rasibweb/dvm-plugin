<?php
/*
 * Plugin Name: DVM Plugin
 * Description: A plugin to demonstrate Devomodo WordPress plugin structure.
 * Plugin URI:        https://github.com/rasibweb/dvm-plugin/
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Devomodo
 * Author URI:        https://devomodo.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://devomodo.com/my-plugin/
 * Text Domain:       dvm-plugin
 * Domain Path:       /languages
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
define("DVM_PLUGIN_VERSION", "1.0.0");
define("DVM_PLUGIN_DIR", plugin_dir_path( __FILE__ ) );
define("DVM_PLUGIN_URL", plugin_dir_url( __FILE__ ) );

require_once DVM_PLUGIN_DIR . 'inc/dvm-scripts.php';
require_once DVM_PLUGIN_DIR . 'inc/hooks.php';

// Database
if ( !defined( 'DVM_DB_VERSION' ) ) {
	define( 'DVM_DB_VERSION', '1.0.2' );
}

// include CPTs, Taxonomies and Meta Boxes
require_once DVM_PLUGIN_DIR . 'inc/cpt.php';
require_once DVM_PLUGIN_DIR . 'inc/taxonomies.php';
require_once DVM_PLUGIN_DIR . 'inc/metaboxes.php';

// include shortcodes
require_once DVM_PLUGIN_DIR . 'inc/shortcode.php';

// include admin menu and page
require_once DVM_PLUGIN_DIR . 'inc/admin-menu.php';
require_once DVM_PLUGIN_DIR . 'inc/admin-page.php';

// include admin settings
require_once DVM_PLUGIN_DIR . 'inc/admin-settings.php';

// Database setup
require_once DVM_PLUGIN_DIR . 'inc/db.php';
register_activation_hook( __FILE__, 'dvm_reaction_table' );