<?php
/**
 * @package WooResturant
 */
/*
Plugin Name: WooResturant
Plugin URI:
Description: Add restourant functionalities to your WooCommerce.
Version: 0.0.1
Author: Gianluca Lippolis
Author URI: https://www.linkedin.com/in/gianluca-lippolis-75a5a4122/
License: GPLv2 or later
Text Domain: wooresturant
Domain Path: /languages
*/


define( 'WOORESTURANT_VERSION', '0.0.1' );
define( 'WOORESTURANT__MINIMUM_WP_VERSION', '4.0' );
define( 'WOORESTURANT__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

register_activation_hook( __FILE__, array( 'WooResturant', 'plugin_activation' ) );
register_deactivation_hook( __FILE__, array( 'WooResturant', 'plugin_deactivation' ) );

require_once( WOORESTURANT__PLUGIN_DIR . 'class.wooresturant.php' );
require_once( WOORESTURANT__PLUGIN_DIR . 'class.wooresturant-admin.php' );

WooResturant_Admin::init(); 

add_action( 'admin_menu', 'admin_section' );

function admin_section() {
    add_menu_page( 'WooResturant', 'WooResturant', 'manage_options', 'wooresturant', array("WooResturant_Admin", "admin_page"), plugin_dir_url(__FILE__) . 'assets/img/icon.png', 20 );
		add_submenu_page( 'wooresturant', 'WooResturant', 'Settings', 'manage_options', 'wooresturant-settings', array("WooResturant_Admin", "settings_page") );
}
