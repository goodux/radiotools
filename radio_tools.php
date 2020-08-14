<?php
/*
Plugin Name: Radio Tools
Plugin URI:https://uiux.me/radio-tools
Description: Miscellanious Radio Tools
Version: 1.0
Author: UIUX <me@uiux.me>
Author URI: https://uiux.me
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