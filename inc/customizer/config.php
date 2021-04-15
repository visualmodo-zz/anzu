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

Kirki :: add_config ('anzu', array ( 
    'capacity' => 'edit_theme_options', 
    'option_type' => 'option', 
    'option_name' => 'anzu', 
));

/**
 * Panels.
 *
 */

Kirki::add_panel( 'light-colors', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Colors', 'anzu' ),
    'description' => esc_html__( 'Contains sections for all Anzu controls.', 'anzu' ),
) );

Kirki::add_panel( 'typography', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Typography', 'anzu' ),
    'description' => esc_html__( 'Contains sections for all Anzu controls.', 'anzu' ),
) );

/**
 * Sections.
 *
 */

Kirki::add_section( 'layout_section', array(
    'title'          => esc_html__( 'Layout', 'anzu' ),
    'description'    => esc_html__( 'My section description.', 'anzu' ),
    'priority'       => 160,
) );

Kirki::add_section( 'light_colors_section', array(
    'title'          => esc_html__( 'Light Colors', 'anzu' ),
    'description'    => esc_html__( 'My section description.', 'anzu' ),
    'panel'          => 'light-colors',
    'priority'       => 160,
) );

Kirki::add_section( 'typography_body', array(
    'title'          => esc_html__( 'Body', 'anzu' ),
    'description'    => esc_html__( 'These settings control the typography for all body text.', 'anzu' ),
    'panel'          => 'typography',
    'priority'       => 160,
) );

Kirki::add_section( 'typography_h1', array(
    'title'          => esc_html__( 'Heading 1 - H1', 'anzu' ),
    'panel'          => 'typography',
    'priority'       => 160,
) );

Kirki::add_section( 'typography_h2', array(
    'title'          => esc_html__( 'Heading 2 - H2', 'anzu' ),
    'panel'          => 'typography',
    'priority'       => 160,
) );

Kirki::add_section( 'typography_h3', array(
    'title'          => esc_html__( 'Heading 3 - H3', 'anzu' ),
    'panel'          => 'typography',
    'priority'       => 160,
) );

Kirki::add_section( 'typography_h4', array(
    'title'          => esc_html__( 'Heading 4 - H4', 'anzu' ),
    'panel'          => 'typography',
    'priority'       => 160,
) );

Kirki::add_section( 'typography_h5', array(
    'title'          => esc_html__( 'Heading 5 - H5', 'anzu' ),
    'panel'          => 'typography',
    'priority'       => 160,
) );

Kirki::add_section( 'typography_h6', array(
    'title'          => esc_html__( 'Heading 6 - H6', 'anzu' ),
    'panel'          => 'typography',
    'priority'       => 160,
) );

Kirki::add_section( 'typography_page_title_section', array(
    'title'          => esc_html__( 'Page Title', 'anzu' ),
    'panel'          => 'typography',
    'priority'       => 160,
) );

Kirki::add_section( 'typography_page_title_subheading_section', array(
    'title'          => esc_html__( 'Page Title Subheading', 'anzu' ),
    'panel'          => 'typography',
    'priority'       => 160,
) );


/**
 * Options.
 *
 */


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
				'element'  => '.anzu-primary-color--color, #main-menu .nav-item.active .nav-link, #main-menu .nav-item:not(.active):hover > .nav-link, #main-menu .dropdown .dropdown-item:hover, article.post .entry-title a:hover',
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
				'element'  => 'p, span',
				'property' => 'color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_light_colors_heading_color',
		'label'       => __( 'Heading (H1 - H6)', 'anzu' ),
		'description' => esc_html__( 'It will apply to all the headings.', 'anzu' ),
		'section'     => 'light_colors_section',
		'default'     => '#000000',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => 'h1, h2, h3, h4, h5, h6',
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


/**
 * Typography Control.
 */
new \Kirki\Field\Typography(
	[
		'settings'    => 'anzu_typography_body',
		'label'       => esc_html__( 'Body', 'anzu' ),
		'description' => esc_html__( 'These settings control the typography for all body text.', 'anzu' ),
		'section'     => 'typography_body',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => [
			'font-family'     => '',
			'variant'         => '',
			'font-size'       => '',
			'font-style'      => '',
			'line-height'     => '',
			'letter-spacing'  => '',
			'text-transform'  => '',
			'text-decoration' => '',
			'margin-top'      => '',
			'margin-bottom'   => '',
		],
		'output'      => [
			[
				'element' => 'body, p, span',
			],
		],
	]
);

new \Kirki\Field\Typography(
	[
		'settings'    => 'anzu_typography_heading_1',
		'label'       => esc_html__( 'Heading 1', 'anzu' ),
		'description' => esc_html__( 'These settings control the typography for all H1 headers.', 'anzu' ),
		'section'     => 'typography_h1',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => [
			'font-family'     => '',
			'variant'         => '',
			'font-size'       => '',
			'font-style'      => '',
			'line-height'     => '',
			'letter-spacing'  => '',
			'text-transform'  => '',
			'text-decoration' => '',
			'margin-top'      => '',
			'margin-bottom'   => '',
		],
		'output'      => [
			[
				'element' => [ 'h1' ],
			],
		],
	]
);

new \Kirki\Field\Typography(
	[
		'settings'    => 'anzu_typography_heading_2',
		'label'       => esc_html__( 'Heading 2', 'anzu' ),
		'description' => esc_html__( 'These settings control the typography for all H2 headers.', 'anzu' ),
		'section'     => 'typography_h2',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => [
			'font-family'     => '',
			'variant'         => '',
			'font-size'       => '',
			'font-style'      => '',
			'line-height'     => '',
			'letter-spacing'  => '',
			'text-transform'  => '',
			'text-decoration' => '',
			'margin-top'      => '',
			'margin-bottom'   => '',
		],
		'output'      => [
			[
				'element' => [ 'h2' ],
			],
		],
	]
);

new \Kirki\Field\Typography(
	[
		'settings'    => 'anzu_typography_heading_3',
		'label'       => esc_html__( 'Heading 3', 'anzu' ),
		'description' => esc_html__( 'These settings control the typography for all H3 headers.', 'anzu' ),
		'section'     => 'typography_h3',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => [
			'font-family'     => '',
			'variant'         => '',
			'font-size'       => '',
			'font-style'      => '',
			'line-height'     => '',
			'letter-spacing'  => '',
			'text-transform'  => '',
			'text-decoration' => '',
			'margin-top'      => '',
			'margin-bottom'   => '',
		],
		'output'      => [
			[
				'element' => [ 'h3' ],
			],
		],
	]
);

new \Kirki\Field\Typography(
	[
		'settings'    => 'anzu_typography_heading_4',
		'label'       => esc_html__( 'Heading 4', 'anzu' ),
		'description' => esc_html__( 'These settings control the typography for all H4 headers.', 'anzu' ),
		'section'     => 'typography_h4',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => [
			'font-family'     => '',
			'variant'         => '',
			'font-size'       => '',
			'font-style'      => '',
			'line-height'     => '',
			'letter-spacing'  => '',
			'text-transform'  => '',
			'text-decoration' => '',
			'margin-top'      => '',
			'margin-bottom'   => '',
		],
		'output'      => [
			[
				'element' => [ 'h4' ],
			],
		],
	]
);

new \Kirki\Field\Typography(
	[
		'settings'    => 'anzu_typography_heading_5',
		'label'       => esc_html__( 'Heading 5', 'anzu' ),
		'description' => esc_html__( 'These settings control the typography for all H5 headers.', 'anzu' ),
		'section'     => 'typography_h5',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => [
			'font-family'     => '',
			'variant'         => '',
			'font-size'       => '',
			'font-style'      => '',
			'line-height'     => '',
			'letter-spacing'  => '',
			'text-transform'  => '',
			'text-decoration' => '',
			'margin-top'      => '',
			'margin-bottom'   => '',
		],
		'output'      => [
			[
				'element' => [ 'h5' ],
			],
		],
	]
);

new \Kirki\Field\Typography(
	[
		'settings'    => 'anzu_typography_heading_6',
		'label'       => esc_html__( 'Heading 6', 'anzu' ),
		'description' => esc_html__( 'These settings control the typography for all H6 headers.', 'anzu' ),
		'section'     => 'typography_h6',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => [
			'font-family'     => '',
			'variant'         => '',
			'font-size'       => '',
			'font-style'      => '',
			'line-height'     => '',
			'letter-spacing'  => '',
			'text-transform'  => '',
			'text-decoration' => '',
			'margin-top'      => '',
			'margin-bottom'   => '',
		],
		'output'      => [
			[
				'element' => [ 'h6' ],
			],
		],
	]
);

new \Kirki\Field\Typography(
	[
		'settings'    => 'anzu_typography_page_title',
		'label'       => esc_html__( 'Page Title', 'anzu' ),
		'description' => esc_html__( 'These settings control the typography of all page titles.', 'anzu' ),
		'section'     => 'typography_page_title_section',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => [
			'font-family'     => '',
			'variant'         => '',
			'font-size'       => '',
			'font-style'      => '',
			'line-height'     => '',
			'letter-spacing'  => '',
			'text-transform'  => '',
			'text-decoration' => '',
			'margin-top'      => '',
			'margin-bottom'   => '',
		],
		'output'      => [
			[
				'element' => [ '#page .anzu-hero__title' ],
			],
		],
	]
);

new \Kirki\Field\Typography(
	[
		'settings'    => 'anzu_typography_page_title_subheading',
		'label'       => esc_html__( 'Page Title Subheading', 'anzu' ),
		'description' => esc_html__( 'These settings control the typography of all page title subheadings.', 'anzu' ),
		'section'     => 'typography_page_title_subheading_section',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => [
			'font-family'     => '',
			'variant'         => '',
			'font-size'       => '',
			'font-style'      => '',
			'line-height'     => '',
			'letter-spacing'  => '',
			'text-transform'  => '',
			'text-decoration' => '',
			'margin-top'      => '',
			'margin-bottom'   => '',
		],
		'output'      => [
			[
				'element' => [ '#page .anzu-hero__subheading' ],
			],
		],
	]
);