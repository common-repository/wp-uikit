=== WP UIKit===
Contributors: srikat
Tags: uikit, frontend, framework
Donate link: https://www.paypal.me/sridharkatakam
Requires at least: 4.9
Tested up to: 5.2
Stable tag: trunk
Requires PHP: 5.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A plugin to load UIKit's CSS and JS files.

== Description ==

[UIKit](https://getuikit.com/) is a popular frontend framework for developing fast, powerful and consistent web interfaces.

This plugin loads UIKit's assets in WordPress.

1. uikit.min.css in the `<head>`.
2. data-attributes.js - a blank file with sample code (commented out) for adding classes and attributes to elements, set to load only if present.
3. uikit.min.js and uikit-icons.min.js before `</body>`.

The default location for `data-attributes.js` is child theme's `js` directory.

This is filterable using `wpuikit_data_attributes_path` filter hook.

Example usage (goes in child theme's functions.php or a Snippet using the Code Snippets plugin):

`add_filter( 'wpuikit_data_attributes_path', 'sk_my_data_attributes_path' );
/**
 * Sets custom path for data-attributes.js to be used by WP UIKit plugin.
 *
 * @return string New path.
 */
function sk_my_data_attributes_path() {

	return WP_PLUGIN_DIR . '/my-custom-functionality/assets/js/data-attributes.js';

}`

There are no settings for the plugin.

== Installation ==

=== Automatic Installation ===

Search for `uikit` from within your WordPress plugins' Add New page and install.

=== Manual Installation ===

1. Click on the `Download` button to download the plugin.
2. Upload the entire `wp-uikit` folder to the `/wp-content/plugins/` directory.
3. Activate the plugin through the `Plugins` menu in WordPress.

== Changelog ==

= 1.0 =
Initial Release.
