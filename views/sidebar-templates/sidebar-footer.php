<?php
/**
 * Sidebar setup for footer full
 *
 * @package Anzu
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$footer_areas = array('above','main', 'below');
$container = get_theme_mod( 'anzu_layout_type', 'container' ); 
$above_footer_widgets_switch = get_theme_mod( 'above_footer_widgets_switch', '' );
$main_footer_widgets_switch = get_theme_mod( 'main_footer_widgets_switch', '' );
$below_footer_widgets_switch = get_theme_mod( 'below_footer_widgets_switch', '' );
?>

<?php if ( $above_footer_widgets_switch == '1' || $main_footer_widgets_switch == '1' || $below_footer_widgets_switch == '1' ) { ?>

	<div id="anzu-footer__widgets" class="wrapper">

		<div class="<?php echo esc_attr( $container ); ?>" id="sidebar-footer" tabindex="-1">

			<?php foreach( $footer_areas as $footer_area ) {

				if ( ${$footer_area.'_footer_widgets_switch'} == '1' ) {

					${$footer_area.'_footer_widgets_column'} = get_theme_mod( $footer_area.'_footer_widgets_column', '3' ); 
					${$footer_area.'_footer_widgets_layout'} = get_theme_mod( $footer_area.'_footer_widgets_layout_'.${$footer_area.'_footer_widgets_column'}, '1' );
					${$footer_area.'_footer_vertical_alignment'} = get_theme_mod( 'anzu_'.$footer_area.'_footer_vertical_alignment', 'align-items-center' );
					${$footer_area.'_footer_layout_type'} = get_theme_mod( 'anzu_'.$footer_area.'_footer_layout_type', 'container' );

					${'first_'.$footer_area.'_footer'} = ${'second_'.$footer_area.'_footer'} = ${'third_'.$footer_area.'_footer'} = ${'fourth_'.$footer_area.'_footer'} = ${'fifth_'.$footer_area.'_footer'} = ${'sixth_'.$footer_area.'_footer'} = '';

					if ( ${$footer_area.'_footer_widgets_column'} == '1' ) {
						$sidebars = array('first');
					} else if ( ${$footer_area.'_footer_widgets_column'} == '2' ) {
						$sidebars = array('first','second');
						switch (${$footer_area.'_footer_widgets_layout'}) {
							case 2:
								${'first_'.$footer_area.'_footer'} = '-8';
								${'second_'.$footer_area.'_footer'} = '-4';
								break;
							case 3:
								${'first_'.$footer_area.'_footer'} = '-4';
								${'second_'.$footer_area.'_footer'} = '-8';
								break;
							case 4:
								${'first_'.$footer_area.'_footer'} = '-9';
								${'second_'.$footer_area.'_footer'} = '-3';
								break;
							case 5:
								${'first_'.$footer_area.'_footer'} = '-3';
								${'second_'.$footer_area.'_footer'} = '-9';
								break;
						}
					} else if ( ${$footer_area.'_footer_widgets_column'} == '3' ) {
						$sidebars = array('first','second', 'third');
						switch (${$footer_area.'_footer_widgets_layout'}) {
							case 2:
								${'first_'.$footer_area.'_footer'} = '-6';
								${'second_'.$footer_area.'_footer'} = '-3';
								${'third_'.$footer_area.'_footer'} = '-3';
								break;
							case 3:
								${'first_'.$footer_area.'_footer'} = '-3';
								${'second_'.$footer_area.'_footer'} = '-3';
								${'third_'.$footer_area.'_footer'} = '-6';
								break;
							case 4:
								${'first_'.$footer_area.'_footer'} = '-3';
								${'second_'.$footer_area.'_footer'} = '-6';
								${'third_'.$footer_area.'_footer'} = '-3';
								break;
							case 5:
								${'first_'.$footer_area.'_footer'} = '-2';
								${'second_'.$footer_area.'_footer'} = '-8';
								${'third_'.$footer_area.'_footer'} = '-2';
								break;
						}
					} else if ( ${$footer_area.'_footer_widgets_column'} == '4' ) {
						$sidebars = array('first','second', 'third', 'fourth');
						switch (${$footer_area.'_footer_widgets_layout'}) {
							case 2:
								${'first_'.$footer_area.'_footer'} = '-6';
								${'second_'.$footer_area.'_footer'} = '-2';
								${'third_'.$footer_area.'_footer'} = '-2';
								${'fourth_'.$footer_area.'_footer'} = '-2';
								break;
							case 3:
								${'first_'.$footer_area.'_footer'} = '-2';
								${'second_'.$footer_area.'_footer'} = '-2';
								${'third_'.$footer_area.'_footer'} = '-2';
								${'fourth_'.$footer_area.'_footer'} = '-6';
								break;
						}
					} else if ( ${$footer_area.'_footer_widgets_column'} == '5' ) {
						$sidebars = array('first','second', 'third', 'fourth', 'fifth');
					} else if ( ${$footer_area.'_footer_widgets_column'} == '6' ) {
						$sidebars = array('first','second', 'third', 'fourth', 'fifth', 'sixth');
					}
					?>

					<div id="anzu-<?php echo $footer_area; ?>-footer" class="<?php echo ${$footer_area.'_footer_layout_type'} ?>">

						<div class="row <?php echo ${$footer_area.'_footer_vertical_alignment'} ?>">

							<?php foreach( $sidebars as $sidebar ) { ?>
								
								<div id="<?php echo $sidebar.'-'.$footer_area.'-footer'; ?>" class="col-md<?php echo ${$sidebar.'_'.$footer_area.'_footer'}; ?>">
									<?php if ( is_active_sidebar( $sidebar.'-'.$footer_area.'-footer' ) ) { ?>
									<?php dynamic_sidebar( $sidebar.'-'.$footer_area.'-footer' ); ?>
									<?php } ?>
								</div>

							<?php } ?>

						</div>

					</div>

					<?php
				}
			} ?>

		</div>

	</div><!-- #wrapper-sidebar-footer -->

<?php } ?>