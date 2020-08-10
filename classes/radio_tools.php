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

class RadioTools {


	function __construct() {
		add_action( 'generate_rewrite_rules', array($this, 'add_rewrite_rules') );
		add_filter( 'query_vars', array($this, 'query_vars') );
		add_action( 'parse_request', array($this, 'parse_request') );
		add_action('init', array($this, 'register_shortcodes'));
		add_action('wp_enqueue_scripts', array($this,'load_js'));
	}

	function register_shortcodes() {
		add_shortcode( 'radio_tools', array($this, 'render_radio_widget') );
	}

	function load_js($the_content) {
		wp_register_script( 'howler-js', RADIO_TOOLS_PLUGIN_ASSETS.'/js/howler.min.js');
		wp_enqueue_script( 'howler-js', RADIO_TOOLS_PLUGIN_ASSETS.'/js/howler.min.js', false );
		wp_enqueue_style( 'dashicons' );
	}

	function add_rewrite_rules($wp_rewrite) {
		$rules = array(
			'radio-tools-stream-proxy\/?$' => 'index.php?radio-tools-stream-proxy=true',
		);
		$wp_rewrite->rules = $rules + (array)$wp_rewrite->rules;

	}

	function query_vars($public_query_vars) {
		array_push($public_query_vars, 'radio-tools-stream-proxy');
		return $public_query_vars;
	}

	function parse_request( &$wp ) {
		if (array_key_exists( 'radio-tools-stream-proxy', $wp->query_vars )) {
			$this->stream_proxy();
			die();
		}
	}

	function render_radio_widget($atts) {

		$html = '';

		if(get_option('radio-tools-stream-proxy', false)) {
			$stream_url = site_url('/radio-tools-stream-proxy/');
		} else {
			$stream_url = get_option('radio-tools-stream-url', false);
		}

		if($stream_url) {

			$stream = array(
				'url'	=>	$stream_url,
				'image'	=>	get_option('radio-tools-stream-image', false),
				'text'	=>	get_option('radio-tools-stream-text', false)
			);

			$theme_player = get_stylesheet_directory().'/radio-tools/player.php';

			ob_start();
			if(file_exists($theme_player)) {
				include $theme_player;
			} else {
				include RADIO_TOOLS_PLUGIN_TEMPLATES_PATH . 'player.php';
			}
			$player = ob_get_contents();
			ob_end_clean();
		}

		return $player;

	}

	function stream_proxy() {
		header('Content-Type: audio/aac');
		$stream_url = get_option('radio-tools-stream-url', false);
		if($stream_url) {
			$f = fopen($stream_url,'r');
			if(!$f) exit;
			while(!feof($f)) {
				echo fread($f,128);  
				flush();
			}
			fclose($f);
		}
		
	}

}


?>