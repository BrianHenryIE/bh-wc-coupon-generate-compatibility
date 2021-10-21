<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           BH_WC_Coupon_Generate_Compatibility
 *
 * @wordpress-plugin
 * Plugin Name:       WooCommerce Coupon Generator Compatibility
 * Plugin URI:        http://github.com/username/bh-wc-coupon-generate-compatibility/
 * Description:       Fixes WooCommerce Coupon Generator so third party coupon plugins' features work when bulk creating coupons.
 * Version:           1.0.0
 * Requires PHP:      7.4
 * Author:            BrianHenryIE
 * Author URI:        http://example.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       bh-wc-coupon-generate-compatibility
 * Domain Path:       /languages
 */

namespace BrianHenryIE\WC_Coupon_Generate_Compatibility;

use BrianHenryIE\WC_Coupon_Generate_Compatibility\Includes\BH_WC_Coupon_Generate_Compatibility;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once plugin_dir_path( __FILE__ ) . 'autoload.php';

/**
 * Current plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'BH_WC_COUPON_GENERATE_COMPATIBILITY_VERSION', '1.0.0' );

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function instantiate_bh_wc_coupon_generate_compatibility(): BH_WC_Coupon_Generate_Compatibility {

	$plugin = new BH_WC_Coupon_Generate_Compatibility();

	return $plugin;
}

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and frontend-facing site hooks.
 */
$GLOBALS['bh_wc_coupon_generate_compatibility'] = instantiate_bh_wc_coupon_generate_compatibility();
