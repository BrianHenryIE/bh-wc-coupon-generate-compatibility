<?php
/**
 * WooCommerce Coupon Generator
 *
 * @see https://wordpress.org/plugins/coupon-generator-for-woocommerce/
 * @see https://jeroensormani.com/
 *
 * @see /wp-admin/admin.php?page=woocommerce_coupon_generator
 *
 * @package brianhenryie/bh-wc-coupon-generate-compatibility
 */

namespace BrianHenryIE\WC_Coupon_Generate_Compatibility\Coupon_Generator;

use function _PHPStan_76800bfb5\RingCentral\Psr7\parse_query;

/**
 *
 */
class Core_Generate {

	/**
	 * Add the posted metadata to the data to be saved by Coupon Generator.
	 *
	 * @hooked woocommerce_coupon_generator_coupon_meta_data
	 * @see wccg_generate_coupons()
	 *
	 * @param array<string, mixed>  $meta The metadata to be saved with the coupons.
	 * @param ?int                  $coupon_id   Coupon post id. "deprecated as its not useful".
	 * @param array<string, string> $args The posted data.
	 *
	 * @return array<string, mixed>
	 */
	public function add_coupon_meta( array $meta, ?int $coupon_id, array $args ): array {

		foreach ( $args as $key => $value ) {

			if ( ! isset( $meta[ $key ] ) ) {
				$meta[ $key ] = $value;
			}
		}

		return $meta;
	}
}
