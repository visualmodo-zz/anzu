<?php
/**
 * The template for displaying all single posts
 *
 * @package Anzu
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$anzu_content_dark_mode = get_theme_mod( 'anzu_content_dark_mode', '' ) ? 'anzu-dark-mode' : 'anzu-light-mode';
$hero = ! empty ( get_post_meta( get_the_ID(), 'anzu_hero_layout', true ) ) ? get_post_meta( get_the_ID(), 'anzu_hero_layout', true ) : get_theme_mod( 'anzu_hero_layout', 'default' );

$container_customizer = get_theme_mod( 'anzu_container_single_posts', 'container' );
$container_metabox = ! empty ( get_post_meta( get_the_ID(), 'anzu_layout_content', true ) ) ? get_post_meta( get_the_ID(), 'anzu_layout_content', true ) : 'customizer';
$container = ( $container_metabox == 'customizer' ) ? $container_customizer : $container_metabox;
?>

<?php if ($hero != 'default') { echo get_template_part( 'views/global-templates/hero' ); } ?>

<?php do_action( 'anzu_hook_before_content' ); ?>

<div class="anzu-content wrapper <?php echo esc_attr( $anzu_content_dark_mode ); ?>" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'views/global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'views/template-parts/content', 'single' );
					anzu_post_nav();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				}
				?>

			</main><!-- #main -->

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'views/global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php do_action( 'anzu_hook_after_content' ); ?>

<?php
get_footer();
