<?php
/**
 * Plugin Name:       Radio Tools
 * Plugin URI:        https://uiux.me/radio-tools
 * Description:       Streaming Audio Made Easy with Customisable Audio Player!
 * Version:           1.03
 * Requires at least: 4.0
 * Author:            UIUX <me@uiux.me>
 * Author URI:        https://uiux.me/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define("RADIO_TOOLS_PLUGIN_PATH", plugin_dir_path( __FILE__ ));
define("RADIO_TOOLS_PLUGIN_TEMPLATES_PATH", RADIO_TOOLS_PLUGIN_PATH . 'templates/');
define("RADIO_TOOLS_PLUGIN_ASSETS", plugin_dir_url( __FILE__ ) .'assets/');

include 'classes/radio_tools.php';
include 'classes/radio_tools_options.php';

new RadioTools;
new RadioToolsOptions;


?>