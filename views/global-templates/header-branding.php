<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


//Variables > Theme Options
$anzu_brand_display = get_theme_mod( 'anzu_brand_display', 'anzu-brand--logo-title-tagline-right' );
$anzu_site_title_switch = get_theme_mod( 'anzu_site_title_switch', '1' );
$anzu_tagline_switch = get_theme_mod( 'anzu_tagline_switch', '' );
$anzu_logo_switch = get_theme_mod( 'anzu_logo_switch', '1' );

?>

<div class="anzu-brand <?php echo $anzu_brand_display; ?>">
	<a class="anzu-brand__url" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" itemprop="url">
		<?php if( $anzu_logo_switch ) {
			
			//Variables > Theme Options
			$anzu_mobile_light_logo_switch = get_theme_mod( 'anzu_mobile_light_logo_switch', '' );
			$anzu_mobile_dark_logo_switch = get_theme_mod( 'anzu_mobile_dark_logo_switch', '' );
			$anzu_transparent_light_logo_switch = get_theme_mod( 'anzu_transparent_light_logo_switch', '' );
			$anzu_transparent_dark_logo_switch = get_theme_mod( 'anzu_transparent_dark_logo_switch', '' );
			$anzu_sticky_light_logo_switch = get_theme_mod( 'anzu_sticky_light_logo_switch', '' );
			$anzu_sticky_dark_logo_switch = get_theme_mod( 'anzu_sticky_dark_logo_switch', '' );
			$anzu_retina_light_logo_switch = get_theme_mod( 'anzu_retina_light_logo_switch', '' );
			$anzu_retina_dark_logo_switch = get_theme_mod( 'anzu_retina_dark_logo_switch', '' );
			$anzu_header_theme_mode = get_theme_mod( 'anzu_header_dark_mode', '' ) ? 'dark' : 'light';
			$anzu_transparent_header_switch = get_theme_mod( 'anzu_transparent_header_switch', '' );
			$anzu_metabox_transparent_header = ! empty ( get_post_meta( get_the_ID(), 'anzu_metabox_transparent_header', true ) ) ? get_post_meta( get_the_ID(), 'anzu_metabox_transparent_header', true ) : '';
			
			$anzu_default_header_theme_mode = $anzu_header_theme_mode;
			
			
			/*-----------------------------------------------------------------------------------*/
			/*  *.  Default Logo.
			/*-----------------------------------------------------------------------------------*/
			
			$anzu_default_light_logo = get_theme_mod( 'anzu_light_logo', '' );
			$anzu_retina_default_light_logo = get_theme_mod( 'anzu_retina_light_logo', '' );
			$anzu_default_dark_logo = get_theme_mod( 'anzu_dark_logo', '' );
			$anzu_retina_default_dark_logo = get_theme_mod( 'anzu_retina_dark_logo', '' );
			
			
			/*-----------------------------------------------------------------------------------*/
			/*  *.  Mobile Logo.
			/*-----------------------------------------------------------------------------------*/
			
			$anzu_mobile_light_logo = ! empty ( get_theme_mod( 'anzu_mobile_light_logo', '' ) ) && $anzu_mobile_light_logo_switch ? get_theme_mod( 'anzu_mobile_light_logo' ) : $anzu_default_light_logo;
			$anzu_retina_mobile_light_logo = ! empty ( get_theme_mod( 'anzu_retina_mobile_light_logo', '' ) ) && $anzu_mobile_light_logo_switch ? get_theme_mod( 'anzu_retina_mobile_light_logo' ) : $anzu_retina_default_light_logo;
			$anzu_mobile_dark_logo = ! empty ( get_theme_mod( 'anzu_mobile_dark_logo', '' ) ) && $anzu_mobile_dark_logo_switch ? get_theme_mod( 'anzu_mobile_dark_logo' ) : $anzu_default_dark_logo;
			$anzu_retina_mobile_dark_logo = ! empty ( get_theme_mod( 'anzu_retina_mobile_dark_logo', '' ) ) && $anzu_mobile_dark_logo_switch ? get_theme_mod( 'anzu_retina_mobile_dark_logo' ) : $anzu_retina_default_dark_logo;
			
			
			
			/*-----------------------------------------------------------------------------------*/
			/*  *.  Transparent Logo.
			/*-----------------------------------------------------------------------------------*/
			
			$anzu_transparent_light_logo = ! empty ( get_theme_mod( 'anzu_transparent_light_logo', '' ) ) && $anzu_transparent_light_logo_switch ? get_theme_mod( 'anzu_transparent_light_logo' ) : $anzu_default_light_logo;
			$anzu_retina_transparent_light_logo = ! empty ( get_theme_mod( 'anzu_retina_transparent_light_logo', '' ) ) && $anzu_transparent_light_logo_switch ? get_theme_mod( 'anzu_retina_transparent_light_logo' ) : $anzu_retina_default_light_logo;
			$anzu_transparent_dark_logo = ! empty ( get_theme_mod( 'anzu_transparent_dark_logo', '' ) ) && $anzu_transparent_dark_logo_switch ? get_theme_mod( 'anzu_transparent_dark_logo' ) : $anzu_default_dark_logo;
			$anzu_retina_transparent_dark_logo = ! empty ( get_theme_mod( 'anzu_retina_transparent_dark_logo', '' ) ) && $anzu_transparent_dark_logo_switch ? get_theme_mod( 'anzu_retina_transparent_dark_logo' ) : $anzu_retina_default_dark_logo;
			
			
			/*-----------------------------------------------------------------------------------*/
			/*  *.  Sticky Logo.
			/*-----------------------------------------------------------------------------------*/
			
			$anzu_sticky_light_logo = ! empty ( get_theme_mod( 'anzu_sticky_light_logo', '' ) ) && $anzu_sticky_light_logo_switch ? get_theme_mod( 'anzu_sticky_light_logo' ) : $anzu_default_light_logo;
			$anzu_retina_sticky_light_logo = ! empty ( get_theme_mod( 'anzu_retina_sticky_light_logo', '' ) ) && $anzu_sticky_light_logo_switch ? get_theme_mod( 'anzu_retina_sticky_light_logo' ) : $anzu_retina_default_light_logo;
			$anzu_sticky_dark_logo = ! empty ( get_theme_mod( 'anzu_sticky_dark_logo', '' ) ) && $anzu_sticky_dark_logo_switch ? get_theme_mod( 'anzu_sticky_dark_logo' ) : $anzu_default_dark_logo;
			$anzu_retina_sticky_dark_logo = ! empty ( get_theme_mod( 'anzu_retina_sticky_dark_logo', '' ) ) && $anzu_sticky_dark_logo_switch ? get_theme_mod( 'anzu_retina_sticky_dark_logo' ) : $anzu_retina_default_dark_logo;
			
			
			/*-----------------------------------------------------------------------------------*/
			/*  *.  Transparent Header.
			/*-----------------------------------------------------------------------------------*/
			
			$transparent_header = '';
			
			if ( $anzu_metabox_transparent_header ) {
				
				$transparent_header = '1';
				
				if ( $anzu_metabox_transparent_header == 'anzu-transparent-header--theme-light-mode' ) {
					$anzu_transparent_header_theme_mode = 'light';
				} else if ( $anzu_metabox_transparent_header == 'anzu-transparent-header--theme-dark-mode' ) {
					$anzu_transparent_header_theme_mode = 'dark';
				} 
				
			} else if ( $anzu_transparent_header_switch ) {
				
				$anzu_transparent_header_pages = get_theme_mod( 'anzu_transparent_header_pages', '1' );
				$anzu_transparent_header_posts = get_theme_mod( 'anzu_transparent_header_posts', '1' );
				$anzu_transparent_header_blog_page = get_theme_mod( 'anzu_transparent_header_blog_page', '' );
				$anzu_transparent_header_404_archives_search = get_theme_mod( 'anzu_transparent_header_404_archives_search', '' );
				$anzu_transparent_header_theme_color = get_theme_mod( 'anzu_transparent_header_theme_color', 'anzu-transparent-header--theme-dark-mode' );
				
				if ( ( is_page() || is_single() || is_home() || is_404() ) && $anzu_transparent_header_pages ) {
					$transparent_header = "1";
				} 
				
				if ( $anzu_transparent_header_theme_color == 'anzu-transparent-header--theme-light-mode' ) {
					$anzu_transparent_header_theme_mode = 'light';
				} else if ( $anzu_transparent_header_theme_color == 'anzu-transparent-header--theme-dark-mode' ) {
					$anzu_transparent_header_theme_mode = 'dark';
				}
				
			}
			
			if ( is_object( $anzu_license ) && $anzu_license->get_api_key_status() ) {
				
				/*-----------------------------------------------------------------------------------*/
				/*  *.  Sticky Header.
				/*-----------------------------------------------------------------------------------*/
				
				$anzu_metabox_sticky_header = ! empty ( get_post_meta( get_the_ID(), 'anzu_metabox_sticky_header', true ) ) ? get_post_meta( get_the_ID(), 'anzu_metabox_sticky_header', true ) : get_theme_mod( 'anzu_sticky_header_background_on_scroll', 'anzu-sticky-header--background-default' );
				$anzu_sticky_header_switch = get_theme_mod( 'anzu_sticky_header_switch', '' );
				$sticky_header = "";
				
				if ( $anzu_sticky_header_switch ) {
					
					$anzu_sticky_header_pages = get_theme_mod( 'anzu_sticky_header_pages', '1' );
					$anzu_sticky_header_posts = get_theme_mod( 'anzu_sticky_header_posts', '1' );
					$anzu_sticky_header_blog_page = get_theme_mod( 'anzu_sticky_header_blog_page', '' );
					$anzu_sticky_header_404_archives_search = get_theme_mod( 'anzu_sticky_header_404_archives_search', '' );
					
					if ( is_page() && $anzu_sticky_header_pages ) {
						$sticky_header = "1";
					} else if ( is_single() && $anzu_sticky_header_posts ) {
						$sticky_header = "1";
					} else if ( is_home() && $anzu_sticky_header_blog_page ) {
						$sticky_header = "1";
					} else if ( ( is_404() || is_archive() || is_search() ) && $anzu_sticky_header_404_archives_search ) {
						$sticky_header = "1";
					}
					
				}
				
			}
			
			if ( $transparent_header == '1' ) { $logo_states_transparent = 'transparent'; }
			if ( $sticky_header == '1' ) { $logo_states_sticky = 'sticky'; }
			$logo_states = array_filter(array('default', $logo_states_transparent, $logo_states_sticky)); 
			
			?>
			
			<?php foreach ($logo_states as $logo_state) { ?>
				
				<picture class="anzu-brand__img anzu-brand__img--<?php echo $logo_state; ?>-header" style="display:none;">
				
					<?php 
					
					$anzu_header_theme_mode_temp = $anzu_header_theme_mode; 
					
					// Start Transparent State Adjusts
					
					if ( $logo_state == 'transparent' ) {
						
						$anzu_header_theme_mode_temp = $anzu_transparent_header_theme_mode; //Light or Dark
						
					}
					
					// Start Sticky State Adjusts
					
					if ( $logo_state == 'sticky' && $anzu_metabox_sticky_header == 'anzu-sticky-header--background-blurred' ) { 
						$anzu_header_theme_mode_temp = 'dark';
					} 
					
					$anzu_logo = ${'anzu_'.$logo_state.'_'.$anzu_header_theme_mode_temp.'_logo'};
					$anzu_retina_logo = ${'anzu_retina_'.$logo_state.'_'.$anzu_header_theme_mode_temp.'_logo'};
					$anzu_mobile_logo = ${'anzu_mobile_'.$logo_state.'_'.$anzu_header_theme_mode_temp.'_logo'};
					$anzu_retina_mobile_logo = ${'anzu_retina_mobile_'.$logo_state.'_'.$anzu_header_theme_mode_temp.'_logo'};
					
					?>
					
					<source media="(min-width: 769px)" srcset="<?php if ( $anzu_logo ) { echo esc_attr( $anzu_logo ) .' 1x'; } if ( $anzu_retina_logo ) { echo ','. esc_attr( $anzu_retina_logo ) .' 2x'; } ?>" type="image/webp">
					
					<?php if ( $logo_state == 'default' ) { ?>
						<source media="(max-width: 768px)" srcset="<?php if ( $anzu_mobile_logo ) { echo esc_attr( $anzu_mobile_logo ) .' 1x'; } if ( $anzu_retina_mobile_logo ) { echo ','. esc_attr( $anzu_retina_mobile_logo ) .' 2x'; } ?>" type="image/webp">
					<?php } ?>
						
					<img src="<?php if ( $anzu_logo ) { echo esc_attr( $anzu_logo ); } ?>" type="image/webp">
					
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