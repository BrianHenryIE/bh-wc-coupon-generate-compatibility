<?php
/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * frontend-facing side of the site and the admin area.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    BH_WC_Coupon_Generate_Compatibility
 * @subpackage BH_WC_Coupon_Generate_Compatibility/includes
 */

namespace BrianHenryIE\WC_Coupon_Generate_Compatibility\Includes;

use BrianHenryIE\WC_Coupon_Generate_Compatibility\Coupon_Generator\Core_Generate;

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * frontend-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    BH_WC_Coupon_Generate_Compatibility
 * @subpackage BH_WC_Coupon_Generate_Compatibility/includes
 * @author     BrianHenryIE <BrianHenryIE@gmail.com>
 */
class BH_WC_Coupon_Generate_Compatibility {

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the frontend-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {

		$this->define_coupon_generator_hooks();
	}

	public function define_coupon_generator_hooks(): void {

		$coupon_generate = new Core_Generate();

		add_filter( 'woocommerce_coupon_generator_coupon_meta_data', array( $coupon_generate, 'add_coupon_meta' ), 100, 3 );
	}


}
