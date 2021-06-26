<?php
/**
 * Hero setup
 *
 * @package Anzu
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$anzu_scroll_to_top_position = get_theme_mod( 'anzu_scroll_to_top_position', 'scroll-to-top--right' );

?>

<!-- Scroll To Top -->
<span id="scroll-to-top" class="bi bi-chevron-up <?php echo esc_attr( $anzu_scroll_to_top_position ); ?>"></span>