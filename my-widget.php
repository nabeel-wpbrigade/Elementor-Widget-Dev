<?php
/*
Plugin Name:  call to action
Plugin URI:   https://elementor.com/ 
Description:  A short little description of the plugin. It will be displayed on the Plugins page in WordPress admin area. 
Version:      1.0
Author:       Nabeel 
Author URI:   https://developers.elementor.com/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  textdomain
Domain Path:  /languages
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function register_list_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/widget-1.php' );
	require_once( __DIR__ . '/widgets/widget-2.php' );

	$widgets_manager->register( new \Elementor_List_Widget() );
	

}
add_action( 'elementor/widgets/register', 'register_list_widget' );

//   Register scripts and styles

function elementor_test_widgets_dependencies() {

	wp_register_script( 'script-handle', plugins_url( 'assets/js/custom.js', __FILE__ ) );

	wp_register_style( 'style-handle', plugins_url( 'assets/css/style.css', __FILE__ ) );

}
add_action( 'wp_enqueue_scripts', 'elementor_test_widgets_dependencies' );