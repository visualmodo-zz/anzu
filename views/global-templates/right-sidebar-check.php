<?php
/**
 * Right sidebar check
 *
 * @package Anzu
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

</div><!-- #closing the primary container from /views/global-templates/left-sidebar-check.php -->

<?php

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

if ( $sidebar == 'right' || $sidebar == 'both' ) {
	get_template_part( 'views/sidebar-templates/sidebar', 'right' );
}
