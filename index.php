<?php
/**
 * This file contains all the plugin's boilerplate functions
 * 
 * Plugin Name: WP Plugin Boilerplate
 * Description: A simple boilerplate for a WordPress plugin
 * Text Domain: wppb
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Plugin URI:  https://ahmadkarim.com/wordpress-plugins/wp-plugin-boilerplate/
 * Author URI:  https://ahmadkarim.com/
 * License:     GPL-2.0+
 * Version:     1.0.0
 * Author:      Ahmad Karim
 * Prefix:      wppb
 * GitHub URI:  ahmu83/wp-plugin-boilerplate
 */

if (!defined('WPINC')) die;

register_activation_hook(__FILE__, 'wppb_activation');
register_deactivation_hook(__FILE__, 'wppb_deactivation');

/**
 * Get this plugin URL
 * 
 * @param  boolean | string $append • Append to url
 * @return string
 */
function wppb_url($append = false) {

	return plugin_dir_url(__FILE__) . $append;

}

/**
 * Get this plugin directory path
 * 
 * @param  boolean | string $append • Append to the directory path
 * @return string
 */
function wppb_dir($append = false) {

	return plugin_dir_path(__FILE__) . $append;

}

/**
 * Include a file
 * 
 * @param  string $inc • file path
 * @param  array  $args • Variables to be available on the file
 * @return null
 */
function wppb_inc($inc, $args = array()) {

	if( is_array($args) && count($args) > 0 ) {

		extract($args);

	}

	include_once $inc;

}

/**
 * Render a simple PHP view
 * 
 * @param  string $view • View file name
 * @param  array  $args • Variables to be available on the view file
 * @return null
 */
function wppb_view($view, $args = array()) {

	$settings = wppb_settings();

	if( is_array($args) && count($args) > 0 ) {

		extract($args);

	}

	$views_dir = $settings['views_dir'];

	include_once wppb_dir("/{$views_dir}/{$view}");

}

/**
 * Get this plugin settings
 * 
 * @return array
 */
function wppb_settings() {

	$settings = include 'settings.php';
	$settings['plugin_data'] = get_plugin_data(__FILE__);

	return $settings;

}

$includes = include_once 'includes.php';

foreach ($includes as $include) {

	include_once wppb_dir($include);

}






