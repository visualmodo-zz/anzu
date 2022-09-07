<?php
/**
* Anzu functions and definitions
*
* @package Anzu
*/

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Core Constants.
define( 'ANZU_THEME_VERSION', '1.0.2' );
define( 'ANZU_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'ANZU_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );

// Include Paths.
define( 'ANZU_INC_DIR', ANZU_THEME_DIR . '/inc/' );
define( 'ANZU_INC_DIR_URI', ANZU_THEME_URI . '/inc/' );

// License Manager.
require_once ANZU_INC_DIR . 'pro/license/license.php';

if ( is_admin() ) {
	// Recommend plugins.
	require_once ANZU_INC_DIR . 'plugins/class-tgm-plugin-activation.php';
	require_once ANZU_INC_DIR . 'plugins/plugin-activation.php';
} 

if ( is_customize_preview() || ! is_admin() ) {
	// Customizer.
	require_once ANZU_INC_DIR . 'customizer/kirki.php';
	require_once ANZU_INC_DIR . 'customizer/config.php';
}

// Array of files to include.
$anzu_includes = array(
	'/inc/theme-settings.php',                  // Initialize theme default settings.
	'/inc/setup.php',                           // Theme setup and custom theme supports.
	'/inc/widgets.php',                         // Register widget area.
	'/inc/enqueue.php',                         // Enqueue scripts and styles.
	'/inc/template-tags.php',                   // Custom template tags for this theme.
	'/inc/pagination.php',                      // Custom pagination for this theme.
	'/inc/extras.php',                          // Custom functions that act independently of the theme templates.
	'/inc/custom-comments.php',                 // Custom Comments file.
	'/inc/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/inc/editor.php',                          // Load Editor functions.
	'/inc/deprecated.php',                      // Load deprecated functions.
	'/inc/metaboxes/layout-metabox.php',        // Load layout metabox.
	'/inc/metaboxes/header-metabox.php',        // Load Header metabox.
	'/inc/metaboxes/hero-metabox.php',          // Load hero metabox.
	'/inc/metaboxes/code-metabox.php',          // Load Custom Code metabox.
	'/inc/hooks.php',                           // Hooks API.
);

// Load WooCommerce functions if WooCommerce is activated.
if ( class_exists( 'WooCommerce' ) ) {
	$anzu_includes[] = '/inc/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if ( class_exists( 'Jetpack' ) ) {
	$anzu_includes[] = '/inc/jetpack.php';
}

// Include files.
foreach ( $anzu_includes as $file ) {
	require_once ANZU_THEME_DIR . $file;
}