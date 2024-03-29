<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package Anzu
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$hero = ! empty ( get_post_meta( get_the_ID(), 'anzu_hero_layout', true ) ) ? get_post_meta( get_the_ID(), 'anzu_hero_layout', true ) : get_theme_mod( 'anzu_hero_layout', 'default' );
$anzu_layout_disable_title = ! empty ( get_post_meta( get_the_ID(), 'anzu_layout_disable_title', true ) ) ? get_post_meta( get_the_ID(), 'anzu_layout_disable_title', true ) : '';

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php if ( $hero == 'default'|| is_home() ) { ?>

		<header class="entry-header">

			<?php if ( $anzu_layout_disable_title != '1' ) { ?>   

				<?php
				the_title(
					sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
					'</a></h2>'
				);
				?>
				
			<?php } ?>

			<?php if ( 'post' === get_post_type() ) : ?>

				<div class="entry-meta">
					<?php anzu_posted_on(); ?>
				</div><!-- .entry-meta -->

			<?php endif; ?>

		</header><!-- .entry-header -->

		<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<?php } ?>

	<div class="entry-content">

		<?php the_excerpt(); ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'anzu' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

</article><!-- #post-## -->
