<?php
/**
 * Functions and definitions
 *
 * @package Qoe
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

define( 'QOE_VERSION', '1.0.4' );
define( 'QOE_DIR', rtrim( get_template_directory(), '/' ) );
define( 'QOE_URL', rtrim( get_template_directory_uri(), '/' ) );

// Load autoload.
if ( file_exists( QOE_DIR . '/vendor/autoload.php' ) ) {
	require_once QOE_DIR . '/vendor/autoload.php';
}

/**
 * Theme setup.
 *
 * @since 1.0.0
 */
function qoe_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails.
	add_theme_support( 'post-thumbnails' );

	// Admin editor styles.
	add_theme_support( 'editor-styles' );

	// Switch default core markup for different forms to output valid HTML5.
	add_theme_support( 'html5', array( 'comment-form', 'comment-list' ) );

	// Add support for responsive embeds.
	add_theme_support( 'responsive-embeds' );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Enable block styles.
	add_theme_support( 'wp-block-styles' );

	// Enqueue editor styles.
	add_editor_style();
}

add_action( 'after_setup_theme', 'qoe_setup' );

/**
 * Enqueue scripts and styles.
 *
 * @since 1.0.0
 */
function qoe_scripts() {
	wp_enqueue_style( 'qoe-style', get_stylesheet_uri(), array(), QOE_VERSION );
	wp_style_add_data( 'qoe-style', 'rtl', 'replace' );
	wp_enqueue_script( 'qoe-frontend', QOE_URL . '/assets/js/frontend.js', array(), QOE_VERSION, true );
}

add_action( 'wp_enqueue_scripts', 'qoe_scripts' );

/**
 * Register block patterns category.
 *
 * @since 1.0.0
 */
function qoe_register_block_patterns_category() {
	register_block_pattern_category(
		'qoe',
		array(
			'label' => esc_html__( 'Qoe', 'qoe' ),
		)
	);
}

add_action( 'init', 'qoe_register_block_patterns_category', 9 );

/**
 * Register block styles.
 *
 * @since 1.0.0
 */
function qoe_register_block_styles() {
	$block_styles = array(
		'core/list'      => array(
			'square' => esc_html__( 'Square', 'qoe' ),
			'none'   => esc_html__( 'None', 'qoe' ),
		),
		'core/separator' => array(
			'dotted'         => esc_html__( 'Dotted', 'qoe' ),
			'wide-thin-line' => esc_html__( 'Wide Thin Line', 'qoe' ),
			'left-aligned'   => esc_html__( 'Left Aligned', 'qoe' ),
			'right-aligned'  => esc_html__( 'Right Aligned', 'qoe' ),
		),
	);

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
			register_block_style(
				$block,
				array(
					'name'  => $style_name,
					'label' => $style_label,
				)
			);
		}
	}
}

add_action( 'init', 'qoe_register_block_styles' );

/**
 * Add back to top.
 *
 * @since 1.0.0
 */
function qoe_add_back_to_top() {
	echo '<div id="back-to-top">&uarr;</div>';
}

add_action( 'wp_footer', 'qoe_add_back_to_top' );

// WooCommerce customizations.
if ( class_exists( 'WooCommerce', false ) ) {
	require_once QOE_DIR . '/inc/woocommerce.php';
}

/**
 * Add admin notice.
 *
 * @since 1.0.0
 */
function qoe_add_admin_notice() {
	\Nilambar\AdminNotice\Notice::init(
		array(
			'slug' => 'qoe',
			'type' => 'theme',
			'name' => esc_html__( 'Qoe', 'qoe' ),
		)
	);
}

add_action( 'admin_init', 'qoe_add_admin_notice' );

/**
 * Add Buy Me a Coffee on admin notice.
 *
 * @since 1.0.0
 */
function qoe_add_donate_link() {
	echo '<span style="font-weight: bold;"><a href="https://ko-fi.com/maneshtimilsina" target="_blank">Buy Me a Coffee</a></span>';
}

add_action( 'qoe_after_admin_notice_link_items', 'qoe_add_donate_link' );
