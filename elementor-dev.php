<?php
/**
 * Elementor Functionality Plugin
 *
 * @wordpress-plugin
 * Plugin Name:       Elementor Functionality Plugin
 * Description:       This plugin is created to for the widgets
 * Version:           1.0
 * Author:            Nabeel 
 * Text Domain:       prefix
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Plugin version
define( 'ELEMENTOR_DEV_PLUGIN_VERSION', '1.5' );

include_once( plugin_dir_path( __FILE__ ) . 'elementor-widgets.php' );
