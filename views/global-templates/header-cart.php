<?php
/**
 * Header Cart
 *
 * @package Anzu
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

global $woocommerce;
if ( $woocommerce ) {
    if ( is_woocommerce() || is_cart() || is_checkout() || is_account_page() ) { ?>
        <div class="anzu-header-cart d-none d-md-block">
            <a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'anzu' ); ?>"><i class="bi bi-bag"></i><span class="cart-content-count"><?php echo $woocommerce->cart->cart_contents_count; ?></span></a>
        </div>
    <?php } else { ?>
        <div class="anzu-header-cart d-none d-md-block">
            <a data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <i class="bi bi-bag"></i>
                <span class="cart-content-count"><?php echo $woocommerce->cart->cart_contents_count; ?></span>
            </a>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <h5 id="offcanvasRightLabel">Shopping Cart</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="widget_shopping_cart_content">
                        <?php woocommerce_mini_cart() ?>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
<?php } ?>