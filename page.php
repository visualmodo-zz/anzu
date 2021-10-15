<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Anzu
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$hero = ! empty ( get_post_meta( get_the_ID(), 'anzu_hero_type_and_style', true ) ) ? get_post_meta( get_the_ID(), 'anzu_hero_type_and_style', true ) : 'default';

$container_customizer = get_theme_mod( 'anzu_container_pages', 'container' );
$container_metabox = ! empty ( get_post_meta( get_the_ID(), 'anzu_layout_content', true ) ) ? get_post_meta( get_the_ID(), 'anzu_layout_content', true ) : 'customizer';
$container = ( $container_metabox == 'customizer' ) ? $container_customizer : $container_metabox;

get_header();

?>

<?php if ($hero != 'default') { echo get_template_part( 'views/global-templates/hero' ); } ?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'views/global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'views/template-parts/content', 'page' );

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

</div><!-- #page-wrapper -->

<?php
get_footer();
