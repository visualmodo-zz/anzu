<?php

/*-----------------------------------------------------------------------------------*/
/*  *.  General Options. 
/*-----------------------------------------------------------------------------------*/

Kirki::add_panel( 'general', array(
    'priority'    => 10,
    'title'       => esc_html__( 'General Options', 'anzu' ),
    'description' => esc_html__( 'Contains sections for all Anzu controls.', 'anzu' ),
) );

Kirki::add_section( 'general_buttons', array(
    'title'          => esc_html__( 'Buttons', 'anzu' ),
    'panel'          => 'general',
    'priority'       => 160,
) );

Kirki::add_section( 'general_forms', array(
    'title'          => esc_html__( 'Forms - Input and Textarea', 'anzu' ),
    'panel'          => 'general',
    'priority'       => 160,
) );

Kirki::add_section( 'general_container', array(
    'title'          => esc_html__( 'Container', 'anzu' ),
	'panel'          => 'general',
    'priority'       => 160,
) );

Kirki::add_section( 'general_sidebar', array(
    'title'          => esc_html__( 'Sidebar', 'anzu' ),
    'description'    => esc_html__( 'Make a big impression with this clean, modern, and mobile-friendly site.', 'anzu' ),
	'panel'          => 'general',
    'priority'       => 160,
) );

/*
new \Kirki\Field\Select(
	[
		'settings'    => 'anzu_general_buttons_style',
		'label'       => esc_html__( 'Style', 'anzu' ),
		'section'     => 'general_buttons',
		'default'     => 'contained',
		'placeholder' => esc_html__( 'Select an option', 'anzu' ),
		'choices'     => [
			'contained' => esc_html__( 'Contained', 'anzu' ),
			'outlined' => esc_html__( 'Outlined', 'anzu' ),
		],
	]
);
*/


/*-----------------------------------------------------------------------------------*/
/*  *.  general > general_buttons
/*-----------------------------------------------------------------------------------*/

new \Kirki\Field\Slider(
	[
		'settings'    => 'anzu_general_buttons_border_radius',
		'label'       => esc_html__( 'Border Radius', 'anzu' ),
		'section'     => 'general_buttons',
		'default'     => '3',
		'choices'     => [
			'min'    => 0,
			'max'    => 100,
			'step'   => 1,
			'suffix' => 'px',
		],
		'output' => array(
			array(
				'element'  => '.btn',
				'property' => 'border-radius',
				'units'    => 'px',
			),
		),
	]
);

new \Kirki\Pro\Field\Padding(
	[
		'settings'        => 'anzu_general_buttons_padding',
		'label'           => esc_html__( 'Padding', 'anzu' ),
		'section'         => 'general_buttons',
		'responsive'      => true,
		'transport'       => 'postMessage',
		'default'         => [
			'desktop' => [
				'top'    => '6px',
				'right'  => '12px',
				'bottom' => '6px',
				'left'   => '12px',
			],
			'tablet' => [
				'top'    => '6px',
				'right'  => '12px',
				'bottom' => '6px',
				'left'   => '12px',
			],
			'mobile' => [
				'top'    => '6px',
				'right'  => '12px',
				'bottom' => '6px',
				'left'   => '12px',
			],
		],
		'output'          => [
			[
				'element'     => '.btn:not(.anzu-read-more-link)',
				'media_query' => [
					'desktop' => '@media (min-width: 1200px)',
					'tablet'  => '@media (min-width: 768px)',
					'mobile'  => '@media (max-width: 767px)',
				],
			],
		],
	]
);


/*-----------------------------------------------------------------------------------*/
/*  *.  general > general_forms
/*-----------------------------------------------------------------------------------*/

new \Kirki\Field\Slider(
	[
		'settings'    => 'anzu_general_forms_border_radius',
		'label'       => esc_html__( 'Border Radius', 'anzu' ),
		'section'     => 'general_forms',
		'default'     => '3',
		'choices'     => [
			'min'    => 0,
			'max'    => 100,
			'step'   => 1,
			'suffix' => 'px',
		],
		'output' => array(
			array(
				'element'  => '.form-control',
				'property' => 'border-radius',
				'units'    => 'px',
			),
		),
	]
);

new \Kirki\Pro\Field\Padding(
	[
		'settings'        => 'anzu_general_forms_padding',
		'label'           => esc_html__( 'Padding', 'anzu' ),
		'section'         => 'general_forms',
		'responsive'      => true,
		'transport'       => 'postMessage',
		'default'         => [
			'desktop' => [
				'top'    => '6px',
				'right'  => '12px',
				'bottom' => '6px',
				'left'   => '12px',
			],
			'tablet' => [
				'top'    => '6px',
				'right'  => '12px',
				'bottom' => '6px',
				'left'   => '12px',
			],
			'mobile' => [
				'top'    => '6px',
				'right'  => '12px',
				'bottom' => '6px',
				'left'   => '12px',
			],
		],
		'output'          => [
			[
				'element'     => '.form-control',
				'media_query' => [
					'desktop' => '@media (min-width: 1200px)',
					'tablet'  => '@media (min-width: 768px)',
					'mobile'  => '@media (max-width: 767px)',
				],
			],
		],
	]
);


/*-----------------------------------------------------------------------------------*/
/*  *.  general > general_container
/*-----------------------------------------------------------------------------------*/

new \Kirki\Field\Select(
	[
		'settings'    => 'anzu_container',
		'label'       => esc_html__( 'Layout', 'anzu' ),
		'description' => esc_html__( 'Choose the format that works best for you.', 'anzu' ),
		'section'     => 'general_container',
		'default'     => 'container',
		'placeholder' => esc_html__( 'Select an option', 'anzu' ),
		'choices'     => [
			'container' => esc_html__( 'Contained', 'anzu' ),
			'container-fluid' => esc_html__( 'Full Width', 'anzu' ),
		],
	]
);

new \Kirki\Field\Select(
	[
		'settings'    => 'anzu_container_pages',
		'label'       => esc_html__( 'Pages', 'anzu' ),
		'description' => esc_html__( 'Choose the format that works best for you.', 'anzu' ),
		'section'     => 'general_container',
		'default'     => 'container',
		'placeholder' => esc_html__( 'Select an option', 'anzu' ),
		'choices'     => [
			'container' => esc_html__( 'Contained', 'anzu' ),
			'container-fluid' => esc_html__( 'Full Width', 'anzu' ),
		],
	]
);

new \Kirki\Field\Select(
	[
		'settings'    => 'anzu_container_single_posts',
		'label'       => esc_html__( 'Single Posts', 'anzu' ),
		'description' => esc_html__( 'Choose the format that works best for you.', 'anzu' ),
		'section'     => 'general_container',
		'default'     => 'container',
		'placeholder' => esc_html__( 'Select an option', 'anzu' ),
		'choices'     => [
			'container' => esc_html__( 'Contained', 'anzu' ),
			'container-fluid' => esc_html__( 'Full Width', 'anzu' ),
		],
	]
);

new \Kirki\Field\Select(
	[
		'settings'    => 'anzu_container_archives',
		'label'       => esc_html__( 'Archives', 'anzu' ),
		'description' => esc_html__( 'Choose the format that works best for you.', 'anzu' ),
		'section'     => 'general_container',
		'default'     => 'container',
		'placeholder' => esc_html__( 'Select an option', 'anzu' ),
		'choices'     => [
			'container' => esc_html__( 'Contained', 'anzu' ),
			'container-fluid' => esc_html__( 'Full Width', 'anzu' ),
		],
	]
);


/*-----------------------------------------------------------------------------------*/
/*  *.  general > general_sidebar
/*-----------------------------------------------------------------------------------*/

new \Kirki\Field\Select(
	[
		'settings'    => 'anzu_sidebar',
		'label'       => esc_html__( 'Default Layout', 'anzu' ),
		'description' => esc_html__( 'Set sidebar\'s default position. Can either be: right, left, both or none. Note: this can be overridden on individual pages.', 'anzu' ),
		'section'     => 'general_sidebar',
		'default'     => 'none',
		'placeholder' => esc_html__( 'Select an option', 'anzu' ),
		'choices'     => [
			'right' => esc_html__( 'Right sidebar', 'anzu' ),
			'left' => esc_html__( 'Left sidebar', 'anzu' ),
			'both' => esc_html__( 'Left & Right sidebars', 'anzu' ),
			'none' => esc_html__( 'No sidebar', 'anzu' ),
		],
	]
);

new \Kirki\Field\Select(
	[
		'settings'    => 'anzu_sidebar_pages',
		'label'       => esc_html__( 'Pages', 'anzu' ),
		'section'     => 'general_sidebar',
		'default'     => 'none',
		'placeholder' => esc_html__( 'Select an option', 'anzu' ),
		'choices'     => [
			'right' => esc_html__( 'Right sidebar', 'anzu' ),
			'left' => esc_html__( 'Left sidebar', 'anzu' ),
			'both' => esc_html__( 'Left & Right sidebars', 'anzu' ),
			'none' => esc_html__( 'No sidebar', 'anzu' ),
		],
	]
);

new \Kirki\Field\Select(
	[
		'settings'    => 'anzu_sidebar_single_posts',
		'label'       => esc_html__( 'Single Posts', 'anzu' ),
		'section'     => 'general_sidebar',
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

new \Kirki\Field\Select(
	[
		'settings'    => 'anzu_sidebar_archives',
		'label'       => esc_html__( 'Archives', 'anzu' ),
		'section'     => 'general_sidebar',
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