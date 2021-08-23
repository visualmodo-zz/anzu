<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Anzu
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'anzu_layout_type', 'container' );
$anzu_header_dark_mode = get_theme_mod( 'anzu_header_dark_mode', '' ) ? 'anzu-dark-mode' : 'anzu-light-mode';
$navbar_theme_mode = $anzu_header_dark_mode == 'anzu-light-mode' ? 'navbar-light' : 'navbar-dark';
$anzu_scroll_to_top_switch = get_theme_mod( 'anzu_scroll_to_top_switch', '1' );
$anzu_header_general_search = get_theme_mod( 'anzu_header_general_search', '1' );
$anzu_header_general_cart = get_theme_mod( 'anzu_header_general_cart', '1' );
$anzu_header_transparency_switch = get_theme_mod( 'anzu_header_transparency_switch', '' );
$anzu_header_transparency_pages = get_theme_mod( 'anzu_header_transparency_pages', '1' );
$anzu_header_transparency_posts = get_theme_mod( 'anzu_header_transparency_posts', '1' );
$anzu_header_transparency_blog_page = get_theme_mod( 'anzu_header_transparency_blog_page', '' );
$anzu_header_transparency_404_archives_search = get_theme_mod( 'anzu_header_transparency_404_archives_search', '' );

// Transparent Header.

$transparent_header = "";

if ( $anzu_header_transparency_switch ) {

	if ( is_page() && $anzu_header_transparency_pages == '1' ) {
		$transparent_header = "anzu-transparent-header";
	} else if ( is_single() && $anzu_header_transparency_posts == '1' ) {
		$transparent_header = "anzu-transparent-header";
	} else if ( is_home() && $anzu_header_transparency_blog_page == '1' ) {
		$transparent_header = "anzu-transparent-header";
	} else if ( ( is_404() || is_archive() || is_search() ) && $anzu_header_transparency_404_archives_search == '1' ) {
		$transparent_header = "anzu-transparent-header";
	}

}

// End Transparent Header.

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php anzu_body_attributes(); ?>>

<?php
// Scroll To Top.
if ( $anzu_scroll_to_top_switch ) {
	get_template_part( 'views/global-templates/scroll-to-top' );
}
?>

<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" class="anzu-header <?php echo esc_attr( $anzu_header_dark_mode ) .' '. esc_attr( $transparent_header ); ?>">

		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'anzu' ); ?></a>

		<nav id="main-nav" class="navbar navbar-expand-md <?php echo esc_attr( $navbar_theme_mode ); ?>" aria-labelledby="main-nav-label">

			<h2 id="main-nav-label" class="visually-hidden-focusable">
				<?php esc_html_e( 'Main Navigation', 'anzu' ); ?>
			</h2>

			<?php if ( 'container' === $container ) : ?>
				<div class="container">
			<?php endif; ?>

				<?php get_template_part( 'views/global-templates/header', 'branding' ); ?>
					
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'anzu' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse justify-content-end',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Anzu_WP_Bootstrap_Navwalker(),
					)
				);
				?>
			<?php if ( 'container' === $container ) : ?>

				<!-- Header Cart -->
				<?php if ( $anzu_header_general_cart ) {
					get_template_part( 'views/global-templates/header', 'cart' );
				} ?>

				<!-- Header Search -->
				<?php if ( $anzu_header_general_search ) {
					get_template_part( 'views/global-templates/header', 'search' );
				} ?>

			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
