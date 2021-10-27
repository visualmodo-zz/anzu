<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


//Variables > Theme Options
$anzu_brand_scheme = get_theme_mod( 'anzu_brand_scheme', '1' );
$anzu_brand_display = get_theme_mod( 'anzu_brand_display', 'anzu-brand--logo-title-tagline-right' );
$anzu_site_title_switch = get_theme_mod( 'anzu_site_title_switch', '1' );
$anzu_tagline_switch = get_theme_mod( 'anzu_tagline_switch', '' );
$anzu_logo_switch = get_theme_mod( 'anzu_logo_switch', '1' );
$anzu_mobile_light_logo_switch = get_theme_mod( 'anzu_mobile_light_logo_switch', '' );
$anzu_transparent_light_logo_switch = get_theme_mod( 'anzu_transparent_light_logo_switch', '' );
$anzu_retina_light_logo_switch = get_theme_mod( 'anzu_retina_light_logo_switch', '' );
$anzu_header_theme_mode = get_theme_mod( 'anzu_header_dark_mode', '' ) ? 'dark' : 'light';
$anzu_transparent_header_switch = get_theme_mod( 'anzu_transparent_header_switch', '' );


/*-----------------------------------------------------------------------------------*/
/*  *.  Light Mode - For Header With Light Background.
/*-----------------------------------------------------------------------------------*/

//URL
$anzu_light_logo = get_theme_mod( 'anzu_light_logo', '' );
$anzu_mobile_light_logo = get_theme_mod( 'anzu_mobile_light_logo', '' );
$anzu_transparent_light_logo = get_theme_mod( 'anzu_transparent_light_logo', '' );

$anzu_retina_light_logo = get_theme_mod( 'anzu_retina_light_logo', '' );
$anzu_retina_mobile_light_logo = get_theme_mod( 'anzu_retina_mobile_light_logo', '' );
$anzu_retina_transparent_light_logo = get_theme_mod( 'anzu_retina_transparent_light_logo', '' );

/*-----------------------------------------------------------------------------------*/
/*  *.  Dark Mode - For Header With Dark Background.
/*-----------------------------------------------------------------------------------*/

//URL
$anzu_dark_logo = get_theme_mod( 'anzu_dark_logo', '' );
$anzu_mobile_dark_logo = get_theme_mod( 'anzu_mobile_dark_logo', '' );
$anzu_transparent_dark_logo = get_theme_mod( 'anzu_transparent_dark_logo', '' );

$anzu_retina_dark_logo = get_theme_mod( 'anzu_retina_dark_logo', '' );
$anzu_retina_mobile_dark_logo = get_theme_mod( 'anzu_retina_mobile_dark_logo', '' );
$anzu_retina_transparent_dark_logo = get_theme_mod( 'anzu_retina_transparent_dark_logo', '' );


/*-----------------------------------------------------------------------------------*/
/*  *.  Transparent Header.
/*-----------------------------------------------------------------------------------*/

$transparent_header = "";

if ( $anzu_transparent_header_switch ) {

	$anzu_transparent_header_pages = get_theme_mod( 'anzu_transparent_header_pages', '1' );
	$anzu_transparent_header_posts = get_theme_mod( 'anzu_transparent_header_posts', '1' );
	$anzu_transparent_header_blog_page = get_theme_mod( 'anzu_transparent_header_blog_page', '' );
	$anzu_transparent_header_404_archives_search = get_theme_mod( 'anzu_transparent_header_404_archives_search', '' );
	
	if ( is_page() && $anzu_transparent_header_pages ) {
		$transparent_header = "1";
	} else if ( is_single() && $anzu_transparent_header_posts ) {
		$transparent_header = "1";
	} else if ( is_home() && $anzu_transparent_header_blog_page ) {
		$transparent_header = "1";
	} else if ( ( is_404() || is_archive() || is_search() ) && $anzu_transparent_header_404_archives_search ) {
		$transparent_header = "1";
	}
	
}

?>

<div class="anzu-brand <?php echo $anzu_brand_display; ?>">
	<a class="anzu-brand__url" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" itemprop="url">
		<?php if( $anzu_logo_switch ) { ?>	
			
			<?php if ( $transparent_header == '1' && ${'anzu_transparent_'.$anzu_header_theme_mode.'_logo_switch'} == '1' ) { ?>
				<picture class="anzu-brand__img anzu-brand__img--transparent-header">
					<source media="(min-width: 769px)" srcset="<?php if ( ${'anzu_transparent_'.$anzu_header_theme_mode.'_logo'} ) { echo esc_attr( ${'anzu_transparent_'.$anzu_header_theme_mode.'_logo'} ) .' 1x'; } if ($anzu_retina_light_logo) { echo ','. esc_attr( ${'anzu_retina_'.$anzu_header_theme_mode.'_logo'} ) .' 2x'; } ?>" type="image/webp">
					<source media="(max-width: 768px)" srcset="<?php if ( ${'anzu_mobile_'.$anzu_header_theme_mode.'_logo'} ) { echo esc_attr( ${'anzu_mobile_'.$anzu_header_theme_mode.'_logo'} ) .' 1x'; } if (${'anzu_retina_mobile_'.$anzu_header_theme_mode.'_logo'}) { echo ','. esc_attr( ${'anzu_retina_mobile_'.$anzu_header_theme_mode.'_logo'} ) .' 2x'; } ?>" type="image/webp">
					<img src="<?php if ( ${'anzu_transparent_'.$anzu_header_theme_mode.'_logo'} ) { echo esc_attr( ${'anzu_transparent_'.$anzu_header_theme_mode.'_logo'} ); } ?>" type="image/webp">
				</picture>	
			<?php } else { ?>
				<picture class="anzu-brand__img">
					<source media="(min-width: 769px)" srcset="<?php if ( ${'anzu_'.$anzu_header_theme_mode.'_logo'} ) { echo esc_attr( ${'anzu_'.$anzu_header_theme_mode.'_logo'} ) .' 1x'; } if ($anzu_retina_light_logo) { echo ','. esc_attr( ${'anzu_retina_'.$anzu_header_theme_mode.'_logo'} ) .' 2x'; } ?>" type="image/webp">
					<source media="(max-width: 768px)" srcset="<?php if ( ${'anzu_mobile_'.$anzu_header_theme_mode.'_logo'} ) { echo esc_attr( ${'anzu_mobile_'.$anzu_header_theme_mode.'_logo'} ) .' 1x'; } if (${'anzu_retina_mobile_'.$anzu_header_theme_mode.'_logo'}) { echo ','. esc_attr( ${'anzu_retina_mobile_'.$anzu_header_theme_mode.'_logo'} ) .' 2x'; } ?>" type="image/webp">
					<img src="<?php if ( ${'anzu_'.$anzu_header_theme_mode.'_logo'} ) { echo esc_attr( ${'anzu_'.$anzu_header_theme_mode.'_logo'} ); } ?>" type="image/webp">
				</picture>
			<?php } ?>

		<?php } ?>
		<?php if( $anzu_brand_display != 'anzu-brand--just-logo' ) { ?>
			<?php if( $anzu_site_title_switch || $anzu_tagline_switch ) { ?>
				<div class="anzu-brand__title-tagline">
					<?php if( $anzu_site_title_switch ) { ?>
							<h1 class="anzu-brand__title mb-0"><?php bloginfo( 'name' ); ?></h1>
					<?php } ?>
					<?php if( $anzu_tagline_switch ) { ?>
						<small class="anzu-brand__tagline"><?php echo bloginfo( 'description' ); ?></small>
					<?php } ?>
				</div>
			<?php } ?>
		<?php } ?>
	</a>
</div>