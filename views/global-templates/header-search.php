<?php
/**
 * Header Search
 *
 * @package Anzu
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>

<div class="anzu-header--search btn-group d-none d-md-block">
    <a class="dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
        <i class="bi bi-search"></i>
    </a>
    <ul style="width:260px;" class="dropdown-menu dropdown-menu-start dropdown-menu-lg-end">
        <form method="get" class="py-2 px-3" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
            <label class="visually-hidden-focusable" for="s"><?php esc_html_e( 'Search', 'anzu' ); ?></label>
            <div class="input-group">
                <input class="field form-control" id="s" name="s" type="text" placeholder="<?php esc_attr_e( 'Search &hellip;', 'anzu' ); ?>" value="<?php the_search_query(); ?>">
            </div>
        </form>
    </ul>
</div>