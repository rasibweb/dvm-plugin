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

include_once DVM_PLUGIN_DIR . 'inc/dvm-scripts.php';