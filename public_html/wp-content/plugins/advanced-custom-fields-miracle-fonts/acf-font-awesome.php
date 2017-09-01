<?php
/*
Plugin Name: Advanced Custom Fields: Miracle project icons
Description: Add a Icommon Font field type to Advanced Custom Fields
Version: 1.0
Author: Mishalov Pavel
Author URI: http://vk.com/mis_develop_pro
*/

function register_miracle_fields_font_awesome() {

	if ( ! class_exists( 'acf' ) ) {
		return;
	}

	global $acf;

	if ( version_compare( $acf->settings['version'], '5.0', '>=' ) ) {
		include_once( 'acf-font-awesome-v5.php' );
	} else {
		include_once( 'acf-font-awesome-v4.php' );
	}
	
}
add_action( 'init', 'register_miracle_fields_font_awesome' );
