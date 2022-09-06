<?php
/**
 * Hero setup
 *
 * @package Anzu
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$anzu_header_hero_title_tag = get_theme_mod( 'anzu_header_hero_title_tag', 'h1' );
$anzu_header_hero_subtitle_tag = get_theme_mod( 'anzu_header_hero_subtitle_tag', 'span' );
$anzu_hero_background_image = get_the_post_thumbnail_url() != '' ? 'style="background-image: url('.get_the_post_thumbnail_url().')"' : '';

$hero = ! empty ( get_post_meta( get_the_ID(), 'anzu_hero_layout', true ) ) ? get_post_meta( get_the_ID(), 'anzu_hero_layout', true ) : get_theme_mod( 'anzu_hero_layout', 'default' );

$hero_content_position =  ! empty ( get_post_meta( get_the_ID(), 'anzu_hero_content_position', true ) ) ? get_post_meta( get_the_ID(), 'anzu_hero_content_position', true ) : 'anzu-hero--center-center';

$hero_overlay_color = ! empty ( get_post_meta( get_the_ID(), 'anzu_hero_overlay_color', true ) ) ? get_post_meta( get_the_ID(), 'anzu_hero_overlay_color', true ) : 'anzu-no-overlay-color';

$hero_overlay_opacity = ! empty ( get_post_meta( get_the_ID(), 'anzu_hero_overlay_opacity', true ) ) ? get_post_meta( get_the_ID(), 'anzu_hero_overlay_opacity', true ) : 'anzu-no-opacity';

$subtitle = ! empty ( get_post_meta( get_the_ID(), 'anzu_hero_subtitle', true ) ) ? '<'.esc_attr( $anzu_header_hero_subtitle_tag ).' class="anzu-hero__subtitle">'.get_post_meta( get_the_ID(), 'anzu_hero_subtitle', true ).'</'.esc_attr( $anzu_header_hero_subtitle_tag ).'>' : '';

$anzu_layout_disable_title = ! empty ( get_post_meta( get_the_ID(), 'anzu_layout_disable_title', true ) ) ? get_post_meta( get_the_ID(), 'anzu_layout_disable_title', true ) : '';

if ($hero == 'stretched') { 
    ?>

    <div class="anzu-hero anzu-hero--featured-stretched wrapper <?php echo $hero_content_position; ?>" id="wrapper-hero" <?php echo $anzu_hero_background_image; ?>>
        <div class="anzu-hero__background-image">
            <div class="anzu-hero__content container">
                <?php if ( $anzu_layout_disable_title != '1' ) { ?> 
                    <<?php echo esc_attr( $anzu_header_hero_title_tag ); ?> class="anzu-hero__title"><?php echo get_the_title(); ?></<?php echo esc_attr( $anzu_header_hero_title_tag ); ?>>
                <?php } ?>
                <?php echo $subtitle; ?>
            </div>
            <div class="anzu-hero__background-color <?php echo $hero_overlay_color.' '.$hero_overlay_opacity; ?>"></div>
        </div>
    </div>

    <?php
} else if ($hero == 'contained') { 
    ?>

    <div class="anzu-hero anzu-hero--featured-stretched wrapper container <?php echo $hero_content_position; ?>" id="wrapper-hero" <?php echo $anzu_hero_background_image; ?>>
        <div class="anzu-hero__background-image">
            <div class="anzu-hero__content container">
                <<?php echo esc_attr( $anzu_header_hero_title_tag ); ?> class="anzu-hero__title"><?php echo get_the_title(); ?></<?php echo esc_attr( $anzu_header_hero_title_tag ); ?>>
                <?php echo $subtitle; ?>
            </div>
            <div class="anzu-hero__background-color <?php echo $hero_overlay_color.' '.$hero_overlay_opacity; ?>"></div>
        </div>
    </div>

    <?php
}