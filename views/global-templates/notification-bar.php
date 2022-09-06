<?php
/**
 * Notification Bar
 *
 * @package Anzu
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'anzu_notification_bar_layout_type', 'container' );
$anzu_header_dark_mode = get_theme_mod( 'anzu_header_dark_mode', '' ) ? 'anzu-dark-mode' : 'anzu-light-mode';
$btn_close_dark_mode = $anzu_header_dark_mode == 'anzu-dark-mode' ? 'btn-close-white' : '';
$anzu_notification_bar_dismissible_switch = get_theme_mod( 'anzu_notification_bar_dismissible_switch', '1' );
$anzu_notification_bar_content = get_theme_mod( 'anzu_notification_bar_content', '' );

?>

<div class="anzu-notification-bar alert alert-light fade show <?php echo esc_attr( $anzu_header_dark_mode ); ?>" role="alert">
    <div class="<?php echo esc_attr( $container ); ?>">
        <div class="row">
            <div class="anzu-notification-bar__content col">
                <?php echo wp_kses_post( $anzu_notification_bar_content ); ?>
            </div>
            <?php if( $anzu_notification_bar_dismissible_switch ) { ?>
                <div class="anzu-notification-bar__close col-auto text-end">
                    <button type="button" class="btn-close <?php echo esc_attr( $btn_close_dark_mode ); ?>" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>
        </div>
    </div>
</div>