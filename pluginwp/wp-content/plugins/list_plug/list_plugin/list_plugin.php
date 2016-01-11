<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://listplugin.com
 * @since             1.0.0
 * @package           List_plugin
 *
 * @wordpress-plugin
 * Plugin Name:       list plugin
 * Plugin URI:        http://listplugin.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Dmitriy Savushkin
 * Author URI:        http://listplugin.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       list_plugin
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-list_plugin-activator.php
 */
function activate_list_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-list_plugin-activator.php';
	List_plugin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-list_plugin-deactivator.php
 */
function deactivate_list_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-list_plugin-deactivator.php';
	List_plugin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_list_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_list_plugin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-list_plugin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_list_plugin() {

	$plugin = new List_plugin();
	$plugin->run();

}
run_list_plugin();
