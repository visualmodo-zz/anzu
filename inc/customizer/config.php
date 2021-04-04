<?php

use Kirki\Util\Helper;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Do not proceed if Kirki does not exist.
if ( ! class_exists( 'Kirki' ) ) {
	return;
}

/**
 * Add a panel.
 *
 * @link https://kirki.org/docs/getting-started/panels.html
 */
new \Kirki\Panel(
	'anzu',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Anzu Settings', 'anzu' ),
		'description' => esc_html__( 'Contains sections for all Anzu controls.', 'anzu' ),
	]
);

/**
 * Add Sections.
 *
 * We'll be doing things a bit differently here, just to demonstrate an example.
 * We're going to define 1 section per control-type just to keep things clean and separate.
 *
 * @link https://kirki.org/docs/getting-started/sections.html
 */
$sections = [
	'layout'           => [ esc_html__( 'Layout', 'anzu' ), '' ],
	'light-colors'    => [ esc_html__( 'Colors', 'anzu' ), '' ],
	'typography'      => [ esc_html__( 'Typography', 'anzu' ), '' ],
];
foreach ( $sections as $section_id => $section ) {
	$section_args = [
		'title'       => $section[0],
		'description' => $section[1],
		'panel'       => 'anzu',
	];
	if ( isset( $section[2] ) ) {
		$section_args['type'] = $section[2];
	}
	new \Kirki\Section( str_replace( '-', '_', $section_id ) . '_section', $section_args );
}

/**
 * Layout Control.
 */
new \Kirki\Field\Select(
	[
		'settings'    => 'anzu_layout_type',
		'label'       => esc_html__( 'Layout Style', 'anzu' ),
		'description' => esc_html__( 'Choose the format that works best for you.', 'anzu' ),
		'section'     => 'layout_section',
		'default'     => 'container',
		'placeholder' => esc_html__( 'Select an option', 'anzu' ),
		'choices'     => [
			'container' => esc_html__( 'Boxed', 'anzu' ),
			'container-fluid' => esc_html__( 'Stretched', 'anzu' ),
		],
	]
);

new \Kirki\Field\Select(
	[
		'settings'    => 'anzu_sidebar_position',
		'label'       => esc_html__( 'Sidebar Position', 'anzu' ),
		'description' => esc_html__( 'Set sidebar\'s default position. Can either be: right, left, both or none. Note: this can be overridden on individual pages.', 'anzu' ),
		'section'     => 'layout_section',
		'default'     => 'right',
		'placeholder' => esc_html__( 'Select an option', 'anzu' ),
		'choices'     => [
			'right' => esc_html__( 'Right sidebar', 'anzu' ),
			'left' => esc_html__( 'Left sidebar', 'anzu' ),
			'both' => esc_html__( 'Left & Right sidebars', 'anzu' ),
			'none' => esc_html__( 'No sidebar', 'anzu' ),
		],
	]
);


/**
 * Light Colors Control.
 */
new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_light_colors_primary_color',
		'label'       => __( 'Primary Color', 'anzu' ),
		'description' => esc_html__( 'Pick a primary color for the theme.', 'anzu' ),
		'section'     => 'light_colors_section',
		'default'     => '#0000FF',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.anzu-primary-color--color',
				'property' => 'color',
			),
			array(
				'element'  => '.anzu-primary-color--background-color',
				'property' => 'background-color',
			),
			array(
				'element'  => '.anzu-primary-color--border-color',
				'property' => 'background-color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_light_colors_secondary_color',
		'label'       => __( 'Secondary Color', 'anzu' ),
		'description' => esc_html__( 'Pick a secondary color for the theme.', 'anzu' ),
		'section'     => 'light_colors_section',
		'default'     => '#FF6819',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.anzu-secondary-color--color',
				'property' => 'color',
			),
			array(
				'element'  => '.anzu-secondary-color--background-color',
				'property' => 'background-color',
			),
			array(
				'element'  => '.anzu-secondary-color--border-color',
				'property' => 'background-color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_light_colors_tertiary_color',
		'label'       => __( 'Tertiary Color', 'anzu' ),
		'description' => esc_html__( 'Pick a tertiary color for the theme.', 'anzu' ),
		'section'     => 'light_colors_section',
		'default'     => '#3FCC14',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.anzu-tertiary-color--color',
				'property' => 'color',
			),
			array(
				'element'  => '.anzu-tertiary-color--background-color',
				'property' => 'background-color',
			),
			array(
				'element'  => '.anzu-tertiary-color--border-color',
				'property' => 'background-color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_light_colors_background_body',
		'label'       => __( 'Background Body', 'anzu' ),
		'description' => esc_html__( 'Pick a background light color for the theme.', 'anzu' ),
		'section'     => 'light_colors_section',
		'default'     => '#FFFFFF',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => 'body',
				'property' => 'background-color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_light_colors_text_color',
		'label'       => __( 'Text', 'anzu' ),
		'description' => esc_html__( 'It will apply to all the texts.', 'anzu' ),
		'section'     => 'light_colors_section',
		'default'     => '#333333',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => 'h1, h2, h3, h4, h5, h6, p, span',
				'property' => 'color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_light_colors_link_color',
		'label'       => __( 'Link', 'anzu' ),
		'description' => esc_html__( 'It will apply to all the links.', 'anzu' ),
		'section'     => 'light_colors_section',
		'default'     => '#0000FF',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => 'a',
				'property' => 'color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_light_colors_link_hover_color',
		'label'       => __( 'Link Hover', 'anzu' ),
		'description' => esc_html__( 'It will apply to all the links.', 'anzu' ),
		'section'     => 'light_colors_section',
		'default'     => '#0D4DFF',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => 'a:hover',
				'property' => 'color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_light_colors_link_active_color',
		'label'       => __( 'Link Active', 'anzu' ),
		'description' => esc_html__( 'It will apply to all the links.', 'anzu' ),
		'section'     => 'light_colors_section',
		'default'     => '#0D8CFF',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => 'a:active',
				'property' => 'color',
			),
		),
	]
);


/**
 * Typography Control.
 */
new \Kirki\Field\Typography(
	[
		'settings'    => 'anzu_typography_body',
		'label'       => esc_html__( 'Body', 'anzu' ),
		'description' => esc_html__( 'These settings control the typography for all body text.', 'anzu' ),
		'section'     => 'typography_section',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => [
			'font-family'     => '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif',
			'variant'         => 'regular',
			'font-size'       => '16px',
			'font-style'      => 'normal',
			'line-height'     => '1.5',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
			'text-decoration' => 'none',
			'text-align'      => 'left',
			'margin-top'      => '0',
			'margin-bottom'   => '0',
		],
		'output'      => [
			[
				'element' => 'body, p',
			],
		],
	]
);

new \Kirki\Field\Typography(
	[
		'settings'    => 'anzu_typography_headers',
		'label'       => esc_html__( 'Headers', 'anzu' ),
		'description' => esc_html__( 'These settings control the typography for all headers.', 'anzu' ),
		'section'     => 'typography_section',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => [
			'font-family' => '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif',
		],
		'output'      => [
			[
				'element' => [ 'h1', 'h2', 'h3', 'h4', 'h5', 'h6' ],
			],
		],
	]
);
