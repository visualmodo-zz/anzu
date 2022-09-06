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

$anzu_layout_disable_footer = ! empty ( get_post_meta( get_the_ID(), 'anzu_layout_disable_footer', true ) ) ? get_post_meta( get_the_ID(), 'anzu_layout_disable_footer', true ) : '';
$anzu_metabox_custom_css = get_post_meta( get_the_ID(), 'anzu_metabox_custom_css', true ) ?: '';

if ($anzu_layout_disable_footer != '1') { 

$container = get_theme_mod( 'anzu_container', 'container' );

$anzu_footer_dark_mode = get_theme_mod( 'anzu_footer_dark_mode', '1' ) ? 'anzu-dark-mode' : 'anzu-light-mode';

$anzu_title_switch = get_theme_mod( 'anzu_title_switch', '' );

$anzu_copyright_switch = get_theme_mod( 'anzu_copyright_switch', '1' );

	/**
	 * Footer Copyright
	 */
	function anzu_footer_copyright() {

		$theme_author = anzu_get_theme_author_details();

		$anzu_copyright = get_theme_mod( 'anzu_copyright', 'Copyright [anzu_copyright] [anzu_current_year] [anzu_site_title] | Powered by [anzu_theme_author]' );
		
		if ( $anzu_copyright || is_customize_preview() ) {
			echo '<div id="site-info__copyright">';
				$anzu_copyright = str_replace( '[anzu_copyright]', '&copy;', $anzu_copyright );
				$anzu_copyright = str_replace( '[anzu_current_year]', gmdate( 'Y' ), $anzu_copyright );
				$anzu_copyright = str_replace( '[anzu_site_title]', get_bloginfo( 'name' ), $anzu_copyright );
				$anzu_copyright = str_replace( '[anzu_theme_author]', '<a href=" ' . esc_url( $theme_author['anzu_theme_author_url'] ) . '" target="_blank">' . $theme_author['anzu_theme_name'] . '</a>', $anzu_copyright );
					echo do_shortcode( wpautop( $anzu_copyright ) );
			echo '</div>';
		}

	}

	?>

	<?php do_action( 'anzu_hook_before_footer' ); ?>

	<footer id="anzu-footer" class="<?php echo esc_attr( $anzu_footer_dark_mode ); ?>" id="colophon">

		<?php get_template_part( 'views/sidebar-templates/sidebar', 'footer' ); ?>

		<?php if ( $anzu_title_switch != '' || $anzu_copyright_switch != '' ) { ?>

			<?php $site_info_align = $anzu_title_switch != '1' || $anzu_copyright_switch !='1' ? 'justify-content-center' :  'justify-content-between'; ?>

			<div id="anzu-footer__bottom" class="<?php echo esc_attr( $container ); ?>">

				<div class="row">

					<div id="site-info" class="col-md <?php echo $site_info_align; ?>">

						<?php if ( $anzu_title_switch == '1' ) { ?>
							<div id="site-info__site-name">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_html(bloginfo( 'name' )); ?></a>  
							</div>
						<?php } ?>
						
						<?php if ( $anzu_copyright_switch == '1' ) {
							anzu_footer_copyright();
						} ?>

					</div><!--col end -->

				</div><!-- row end -->

			</div><!-- container end -->

		<?php } ?>

	</footer><!-- wrapper end -->

	<?php do_action( 'anzu_hook_after_footer' ); ?>

<?php } ?><!-- Disable Footer -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

<!-- Custom CSS -->
<?php if( $anzu_metabox_custom_css ) { echo '<style type="text/css">'. esc_attr( $anzu_metabox_custom_css ) .'</style>'; } ?> 

</body>

</html>