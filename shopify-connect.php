<?php
/**
 * Plugin Name: Shopify Connect
 * Description: Connect your Shopify store to your WordPress site.
 * Version: 2.0
 * Author: Alexander Steadman
 * Author URI: github.com/VeryOddlySpecific
 * License: GPL2
 */

// if this file is called directly, abort
if ( ! defined( 'WPINC' ) ) {
    die;
}

// define constants
define( 'VOS_SC_PATH', plugin_dir_path( __FILE__ ) );
define( 'VOS_SC_URL', plugin_dir_url( __FILE__ ) );
define( 'VOS_SC_VERSION', '2.0' );

// include the main class file
require_once VOS_SC_PATH . 'includes/class-shopify-connect.php';

// run the plugin
$plugin = new Shopify_Connect();
$plugin->run();