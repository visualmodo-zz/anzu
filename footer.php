<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Anzu
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = ! empty ( get_theme_mod( 'anzu_layout_type' ) ) ? get_theme_mod( 'anzu_layout_type' ) : 'container' ;
?>

<?php get_template_part( 'views/sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">
						
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_html(bloginfo( 'name' )); ?>  <?php echo esc_html(date_i18n( __( 'Y', 'anzu' ) )); ?> <?php esc_html_e('. Powered by WordPress','anzu'); ?>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div>
			<!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>