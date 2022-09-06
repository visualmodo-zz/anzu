<?php

/*-----------------------------------------------------------------------------------*/
/*  *.  Scroll To Top
/*-----------------------------------------------------------------------------------*/

Kirki::add_section( 'scroll_to_top_section', array(
    'title'          => esc_html__( 'Scroll To Top', 'anzu' ),
    'description'    => esc_html__( 'As the name suggests, this addon helps add a scroll to top action on longer pages. This takes away the pain of scrolling right to the top when you’ve reached the end of the page.', 'anzu' ),
    'priority'       => 10,
) );

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'anzu_scroll_to_top_switch',
		'label'       => esc_html__( 'Scroll Up Button', 'anzu' ),
		'section'     => 'scroll_to_top_section',
		'default'     => true,
	]
);

new \Kirki\Field\Select(
	[
		'settings'    => 'anzu_scroll_to_top_position',
		'label'       => esc_html__( 'Position', 'anzu' ),
		'section'     => 'scroll_to_top_section',
		'default'     => 'scroll-to-top--right',
		'placeholder' => esc_html__( 'Select an option', 'anzu' ),
		'choices'     => [
			'scroll-to-top--left' => esc_html__( 'Left', 'anzu' ),
			'scroll-to-top--right' => esc_html__( 'Right', 'anzu' ),
		],
		'active_callback' => [
			[
				'setting'  => 'anzu_scroll_to_top_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Slider(
	[
		'settings'    => 'anzu_scroll_to_top_bottom_position',
		'label'       => esc_html__( 'Bottom Position', 'anzu' ),
		'section'     => 'scroll_to_top_section',
		'default'     => '20',
		'choices'     => [
			'min'    => 0,
			'max'    => 200,
			'step'   => 1,
			'suffix' => 'px',
		],
		'output' => array(
			array(
				'element'  => '#scroll-to-top',
				'property' => 'bottom',
				'units'    => 'px',
			),
		),
		'active_callback' => [
			[
				'setting'  => 'anzu_scroll_to_top_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Slider(
	[
		'settings'    => 'anzu_scroll_to_top_button_size',
		'label'       => esc_html__( 'Button Size', 'anzu' ),
		'section'     => 'scroll_to_top_section',
		'default'     => '40',
		'choices'     => [
			'min'    => 0,
			'max'    => 60,
			'step'   => 1,
			'suffix' => 'px',
		],
		'output' => array(
			array(
				'element'  => '#scroll-to-top',
				'property' => 'width',
				'units'    => 'px',
			),
			array(
				'element'  => '#scroll-to-top',
				'property' => 'height',
				'units'    => 'px',
			),
			array(
				'element'  => '#scroll-to-top:before',
				'property' => 'line-height',
				'units'    => 'px',
			),
		),
		'active_callback' => [
			[
				'setting'  => 'anzu_scroll_to_top_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Slider(
	[
		'settings'    => 'anzu_scroll_to_top_icon_size',
		'label'       => esc_html__( 'Icon Size', 'anzu' ),
		'section'     => 'scroll_to_top_section',
		'default'     => '18',
		'choices'     => [
			'min'    => 0,
			'max'    => 60,
			'step'   => 1,
			'suffix' => 'px',
		],
		'output' => array(
			array(
				'element'  => '#scroll-to-top:before',
				'property' => 'font-size',
				'units'    => 'px',
			),
		),
		'active_callback' => [
			[
				'setting'  => 'anzu_scroll_to_top_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Slider(
	[
		'settings'    => 'anzu_scroll_to_top_border_radius',
		'label'       => esc_html__( 'Border Radius', 'anzu' ),
		'section'     => 'scroll_to_top_section',
		'default'     => '3',
		'choices'     => [
			'min'    => 0,
			'max'    => 100,
			'step'   => 1,
			'suffix' => 'px',
		],
		'output' => array(
			array(
				'element'  => '#scroll-to-top',
				'property' => 'border-radius',
				'units'    => 'px',
			),
		),
		'active_callback' => [
			[
				'setting'  => 'anzu_scroll_to_top_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);