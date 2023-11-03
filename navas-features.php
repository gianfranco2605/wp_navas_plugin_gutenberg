<?php
/**
 * NAVAS Features Plugin
 *
 * @package navas-features
 * @author  Gianfranco Navas Fernandini
 *
 * @wordpress-plugin
 * Plugin Name:       Navas Plugin
 * Plugin URI:        https://github.com/gianfranco2605/wp_navas_plugin_gutenberg
 * Description:       Adds Gutenberg Blocks.
 * Version:           1.0.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Gianfranco Navas Fernandini
 * Author URI:        https://digitalnavas.it
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       navas-features
 * Domain Path:       /languages
 */

/**
 * Bootstrap the plugin.
 */
require_once 'vendor/autoload.php';
require_once untrailingslashit( plugin_dir_path( __FILE__ ) ) . '/inc/custom-functions.php';

use NavasFeatures\Plugin;

if ( class_exists( 'NavasFeatures\Plugin' ) ) {
	$the_plugin = new Plugin();
}

register_activation_hook( __FILE__, [ $the_plugin, 'activate' ] );
register_deactivation_hook( __FILE__, [ $the_plugin, 'deactivate' ] );