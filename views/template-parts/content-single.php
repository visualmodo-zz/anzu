<?php
/**
 * Single post partial template
 *
 * @package Anzu
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$hero = ! empty ( get_post_meta( get_the_ID(), 'anzu_hero_type_and_style', true ) ) ? get_post_meta( get_the_ID(), 'anzu_hero_type_and_style', true ) : 'default';
$anzu_layout_disable_title = ! empty ( get_post_meta( get_the_ID(), 'anzu_layout_disable_title', true ) ) ? get_post_meta( get_the_ID(), 'anzu_layout_disable_title', true ) : '';

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php if ( $hero == 'default' || is_home() ) { ?>

		<header class="entry-header">

			<?php if ( $anzu_layout_disable_title != '1' ) { ?> 

				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				
			<?php } ?>

			<div class="entry-meta">

				<?php anzu_posted_on(); ?>

			</div><!-- .entry-meta -->

		</header><!-- .entry-header -->

		<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<?php } ?>


	<div class="entry-content">

		<?php the_content(); ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'anzu' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php anzu_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
