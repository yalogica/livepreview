<?php

/**
 * Plugin Name:       LivePreview
 * Plugin URI:        http://avirtum.com
 * Description:       LivePreview allows you to easily preview your digital product (theme, template, html5 game and etc) for your future customers. Use this plugin to create a digital presentation catalog in minutes.
 * Version:           1.2.3
 * Author:            Avirtum
 * Author URI:        http://avirtum.com/
 * License:           GPLv3
 * Text Domain:       livepreview
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if(!defined('ABSPATH')) {
	exit;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define('LIVEPREVIEWPRO_PLUGIN_NAME', 'livepreviewpro');
define('LIVEPREVIEWPRO_PLUGIN_VERSION', '1.2.3');

/**
 * The code that runs during plugin activation
 */
function livepreviewpro_activate() {
	require_once( plugin_dir_path( __FILE__ ) . 'includes/activator.php' );
	$activator = new LivePreviewPro_Activator();
	$activator->activate();
}
register_activation_hook( __FILE__, 'livepreviewpro_activate' );

/**
 * The code that runs during plugin deactivation
 */
function livepreviewpro_deactivate() {
	require_once( plugin_dir_path( __FILE__ ) . 'includes/deactivator.php' );
	$deactivator = new LivePreviewPro_Deactivator();
	$deactivator->deactivate();
}
register_deactivation_hook( __FILE__, 'livepreviewpro_deactivate' );

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 */
require_once( plugin_dir_path( __FILE__ ) . 'includes/plugin.php' );


function livepreviewpro_run() {
	$pluginBasename = plugin_basename(__FILE__);
	
	$plugin = new LivePreviewPro_Builder($pluginBasename);
	$plugin->run();
}
add_action('init', 'livepreviewpro_run');