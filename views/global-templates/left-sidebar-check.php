<?php
/**
 * Left sidebar check
 *
 * @package Anzu
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( is_page() ) {
	$sidebar_cutomizer = get_theme_mod( 'anzu_sidebar_pages', 'none' );
} else if ( is_single() ) {
	$sidebar_cutomizer = get_theme_mod( 'anzu_sidebar_single_posts', 'none' );
} else if ( is_archive() ) {
	$sidebar_cutomizer = get_theme_mod( 'anzu_sidebar_archives', 'none' );
} else {
	$sidebar_cutomizer = get_theme_mod( 'anzu_sidebar', 'none' );
}

$sidebar_metabox = ! empty ( get_post_meta( get_the_ID(), 'anzu_layout_sidebar', true ) ) ? get_post_meta( get_the_ID(), 'anzu_layout_sidebar', true ) : 'customizer';
$sidebar = ( $sidebar_metabox == 'customizer' ) ? $sidebar_cutomizer : $sidebar_metabox;

if ( $sidebar == 'left' || $sidebar == 'both' ) {
	get_template_part( 'views/sidebar-templates/sidebar', 'left' );
}
?>

<div class="col-md content-area" id="primary">
