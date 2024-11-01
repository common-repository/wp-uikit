<?php
/**
 * Plugin Name: WP UIKit
 * Plugin URI: https://wordpress.org/plugins/wp-uikit/
 * Description: Loads UIKit (https://getuikit.com/) front-end framework in WordPress.
 * Version: 1.0
 * Author: Sridhar Katakam
 * Author URI: https://sridharkatakam.com/
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License version 2, as published by the Free Software Foundation.  You may NOT assume
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

add_action( 'wp_enqueue_scripts', 'wpuikit_load_uikit' );
/**
 * Load UIKit.
 */
function wpuikit_load_uikit() {

	// Set default value of $file_path to active theme's /js/data-attributes.js.
	// can be filtered using `wpuikit_data_attributes_path`.
	$file_path = apply_filters( 'wpuikit_data_attributes_path', get_stylesheet_directory() . '/js/data-attributes.js' );

	// if data attributes file exists, load it.
	if ( file_exists( $file_path ) ) {
		// Get the full URI of the above path.
		$file_uri = ( get_stylesheet_directory() . '/js/data-attributes.js' === $file_path ) ? get_stylesheet_directory_uri() . '/js/data-attributes.js' : home_url( str_replace( ABSPATH, '', $file_path ) );

		wp_enqueue_script( 'wp-uikit-data-attributes', $file_uri, array( 'jquery' ), '1.0.0', true );
	}

	// load UIKit's CSS.
	wp_enqueue_style( 'wp-uikit', plugin_dir_url( __FILE__ ) . 'assets/css/uikit.min.css' );

	// load UIKit's JS.
	wp_enqueue_script( 'wp-uikit', plugin_dir_url( __FILE__ ) . 'assets/js/uikit.min.js', array(), '3.1.4', true );

	// load UIKit's Icons.
	wp_enqueue_script( 'wp-uikit-icons', plugin_dir_url( __FILE__ ) . 'assets/js/uikit-icons.min.js', array( 'uikit' ), '3.1.4', true );

}
