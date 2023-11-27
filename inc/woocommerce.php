<?php
/**
 * WooCommerce customization
 *
 * @package Qoe
 */

/**
 * WooCommerce setup function.
 *
 * @since 1.0.0
 *
 * @return void
 */
function qoe_woocommerce_setup() {
	add_theme_support(
		'woocommerce',
		array(
			'thumbnail_image_width'         => 540,
			'gallery_thumbnail_image_width' => 150,
		)
	);
}

add_action( 'after_setup_theme', 'qoe_woocommerce_setup' );

/**
 * Enqueue WooCommerce scripts and styles.
 *
 * @since 1.0.0
 *
 * @return void
 */
function qoe_woocommerce_scripts() {
	wp_enqueue_style( 'qoe-woocommerce', get_template_directory_uri() . '/woocommerce.css', array(), QOE_VERSION );
	wp_style_add_data( 'qoe-woocommerce', 'rtl', 'replace' );
}

add_action( 'wp_enqueue_scripts', 'qoe_woocommerce_scripts' );

/**
 * Change number of products per row.
 *
 * @since 1.0.0
 *
 * @return int Number of columns.
 */
function qoe_product_columns() {
	return 3;
}

add_filter( 'loop_shop_columns', 'qoe_product_columns' );

/**
 * Change number of related products.
 *
 * @since 1.0.0
 *
 * @param array $args Arguments.
 * @return array Updated arguments.
 */
function qoe_related_products_args( $args ) {
	$args['columns']        = 3;
	$args['posts_per_page'] = 3;

	return $args;
}

add_filter( 'woocommerce_output_related_products_args', 'qoe_related_products_args' );

/**
 * Change number of upsell products.
 *
 * @since 1.0.0
 *
 * @param array $args Arguments.
 * @return array Updated arguments.
 */
function qoe_upsell_products_args( $args ) {
	$args['columns']        = 3;
	$args['posts_per_page'] = 3;

	return $args;
}

add_filter( 'woocommerce_upsell_display_args', 'qoe_upsell_products_args' );

/**
 * Init Woo customizations.
 *
 * @since 1.0.0
 *
 * @return void
 */
function qoe_woo_customization() {
	// Remove breadcrumb.
	remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}

add_action( 'init', 'qoe_woo_customization' );
