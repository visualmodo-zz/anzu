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
    <ul style="width:300px;" class="dropdown-menu dropdown-menu-start dropdown-menu-lg-end p-2">
        <?php get_search_form() ?>
    </ul>
</div>