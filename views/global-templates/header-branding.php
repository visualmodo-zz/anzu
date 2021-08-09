<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


//Variables > Theme Options
$anzu_brand_scheme = get_theme_mod( 'anzu_brand_scheme', '1' );
$anzu_brand_display = get_theme_mod( 'anzu_brand_display', 'anzu-brand--logo-title-tagline-right' );
$anzu_site_title_switch = get_theme_mod( 'anzu_site_title_switch', '1' );
$anzu_tagline_switch = get_theme_mod( 'anzu_tagline_switch', '' );
$anzu_logo_switch = get_theme_mod( 'anzu_logo_switch', '' );
$anzu_header_theme_mode = get_theme_mod( 'anzu_header_dark_mode', '' ) ? 'anzu-dark-mode' : 'anzu-light-mode';


/*-----------------------------------------------------------------------------------*/
/*  *.  Light Mode - For Header With Light Background.
/*-----------------------------------------------------------------------------------*/

//URL
$anzu_light_logo = get_theme_mod( 'anzu_light_logo', '' );
$anzu_mobile_light_logo = get_theme_mod( 'anzu_mobile_light_logo', '' );

$anzu_retina_light_logo = get_theme_mod( 'anzu_retina_light_logo', '' );
$anzu_retina_mobile_light_logo = get_theme_mod( 'anzu_retina_mobile_light_logo', '' );

/*-----------------------------------------------------------------------------------*/
/*  *.  Dark Mode - For Header With Dark Background.
/*-----------------------------------------------------------------------------------*/

//URL
$anzu_dark_logo = get_theme_mod( 'anzu_dark_logo', '' );
$anzu_mobile_dark_logo = get_theme_mod( 'anzu_mobile_dark_logo', '' );

$anzu_retina_dark_logo = get_theme_mod( 'anzu_retina_dark_logo', '' );
$anzu_retina_mobile_dark_logo = get_theme_mod( 'anzu_retina_mobile_dark_logo', '' );

?>

<div class="anzu-brand <?php echo $anzu_brand_display; ?>">
	<a class="anzu-brand__url" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" itemprop="url">
		<?php if( $anzu_logo_switch ) { ?>
			<picture class="anzu-brand__img">
				<?php if($anzu_header_theme_mode == 'anzu-light-mode') { ?>
					<source media="(min-width: 769px)" srcset="<?php if ( $anzu_light_logo ) { echo esc_attr( $anzu_light_logo ) .' 1x'; } if ($anzu_retina_light_logo) { echo ','. esc_attr( $anzu_retina_light_logo ) .' 2x'; } ?>" type="image/webp">
					<source media="(max-width: 768px)" srcset="<?php if ( $anzu_mobile_light_logo ) { echo esc_attr( $anzu_mobile_light_logo ) .' 1x'; } if ($anzu_retina_mobile_light_logo) { echo ','. esc_attr( $anzu_retina_mobile_light_logo ) .' 2x'; } ?>" type="image/webp">
					<img src="<?php if ( $anzu_light_logo ) { echo esc_attr( $anzu_light_logo ); } ?>" type="image/webp">
				<?php } ?>
				<?php if($anzu_header_theme_mode == 'anzu-dark-mode') { ?>
					<source media="(min-width: 769px)" srcset="<?php if ( $anzu_dark_logo ) { echo esc_attr( $anzu_dark_logo ) .' 1x'; } if ($anzu_retina_dark_logo) { echo ','. esc_attr( $anzu_retina_dark_logo ) .' 2x'; } ?>" type="image/webp">
					<source media="(max-width: 768px)" srcset="<?php if ( $anzu_mobile_dark_logo ) { echo esc_attr( $anzu_mobile_dark_logo ) .' 1x'; } if ($anzu_retina_mobile_dark_logo) { echo ','. esc_attr( $anzu_retina_mobile_dark_logo ) .' 2x'; } ?>" type="image/webp">
					<img src="<?php if ( $anzu_dark_logo ) { echo esc_attr( $anzu_dark_logo ); } ?>" type="image/webp">
				<?php } ?>
			</picture>	
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