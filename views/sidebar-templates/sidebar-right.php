<?php
/**
 * The right sidebar containing the main widget area
 *
 * @package Anzu
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! is_active_sidebar( 'right-sidebar' ) ) {
	return;
}

// when both sidebars turned on reduce col size to 3 from 4.
$sidebar_pos = get_theme_mod( 'anzu_sidebar_position' );
?>

<?php if ( 'both' === $sidebar_pos ) : ?>
	<div class="col-md-3 widget-area" id="right-sidebar" role="complementary">
	<?php do_action( 'anzu_hook_before_sidebar' ); ?>
<?php else : ?>
	<div class="col-md-4 widget-area" id="right-sidebar" role="complementary">
	<?php do_action( 'anzu_hook_before_sidebar' ); ?>
<?php endif; ?>
<?php dynamic_sidebar( 'right-sidebar' ); ?>
<?php do_action( 'anzu_hook_after_sidebar' ); ?>
</div><!-- #right-sidebar -->
