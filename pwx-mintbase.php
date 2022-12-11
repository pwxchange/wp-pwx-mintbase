<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://pwxchange.com
 * @since             1.0.0
 * @package           Pwx_Mintbase
 *
 * @wordpress-plugin
 * Plugin Name:       PWX Mintbase
 * Plugin URI:        https://mintbase.pwxchange.com
 * Description:       Mintbase integration plugin for a configurable taxonomy representing NFTs.
 * Version:           1.0.0
 * Author:            PWX
 * Author URI:        https://pwxchange.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       pwx-mintbase
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PWX_MINTBASE_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-pwx-mintbase-activator.php
 */
function activate_pwx_mintbase() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-pwx-mintbase-activator.php';
	Pwx_Mintbase_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-pwx-mintbase-deactivator.php
 */
function deactivate_pwx_mintbase() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-pwx-mintbase-deactivator.php';
	Pwx_Mintbase_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_pwx_mintbase' );
register_deactivation_hook( __FILE__, 'deactivate_pwx_mintbase' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-pwx-mintbase.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_pwx_mintbase() {

	$plugin = new Pwx_Mintbase();
	$plugin->run();

}
run_pwx_mintbase();
