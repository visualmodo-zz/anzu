<?php

/*-----------------------------------------------------------------------------------*/
/*  *.  Footer
/*-----------------------------------------------------------------------------------*/

Kirki::add_panel( 'footer', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Footer', 'anzu' ),
    'description' => esc_html__( 'Contains sections for all Anzu controls.', 'anzu' ),
) );

new \Kirki\Section(
	'above_footer_widgets_section',
	[
		'title' => esc_html__( 'Above Widgets', 'anzu' ),
		'panel' => 'footer',
		'tabs'  => [
			'general' => [
				'label' => esc_html__( 'General', 'anzu' ),
			],
			'design'  => [
				'label' => esc_html__( 'Design', 'anzu' ),
			],
		],
	]
);

new \Kirki\Section(
	'main_footer_widgets_section',
	[
		'title' => esc_html__( 'Main Widgets', 'anzu' ),
		'panel' => 'footer',
		'tabs'  => [
			'general' => [
				'label' => esc_html__( 'General', 'anzu' ),
			],
			'design'  => [
				'label' => esc_html__( 'Design', 'anzu' ),
			],
		],
	]
);

new \Kirki\Section(
	'below_footer_widgets_section',
	[
		'title' => esc_html__( 'Below Widgets', 'anzu' ),
		'panel' => 'footer',
		'tabs'  => [
			'general' => [
				'label' => esc_html__( 'General', 'anzu' ),
			],
			'design'  => [
				'label' => esc_html__( 'Design', 'anzu' ),
			],
		],
	]
);

new \Kirki\Section(
	'footer_bottom_section',
	[
		'title' => esc_html__( 'Footer Bottom', 'anzu' ),
		'panel' => 'footer',
		'tabs'  => [
			'general' => [
				'label' => esc_html__( 'General', 'anzu' ),
			],
			'design'  => [
				'label' => esc_html__( 'Design', 'anzu' ),
			],
		],
	]
);


/*-----------------------------------------------------------------------------------*/
/*  *.  footer > above_footer_widgets_section
/*-----------------------------------------------------------------------------------*/

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'above_footer_widgets_switch',
		'label'       => esc_html__( 'Enable Above Footer', 'anzu' ),
		'section'     => 'above_footer_widgets_section',
		'tab'         => 'general',
		'default'     => false,
	]
);
new \Kirki\Field\Select(
	[
		'settings'    => 'above_footer_widgets_column',
		'label'       => esc_html__( 'Select Control', 'anzu' ),
		'section'     => 'above_footer_widgets_section',
		'tab'         => 'general',
		'default'     => '3',
		'placeholder' => esc_html__( 'Select an option', 'anzu' ),
		'choices'     => [
			'1' => esc_html__( '1 Column', 'anzu' ),
			'2' => esc_html__( '2 Columns', 'anzu' ),
			'3' => esc_html__( '3 Columns', 'anzu' ),
			'4' => esc_html__( '4 Columns', 'anzu' ),
			'5' => esc_html__( '5 Columns', 'anzu' ),
			'6' => esc_html__( '6 Columns', 'anzu' ),
		],
		'active_callback' => [
			[
				'setting'  => 'above_footer_widgets_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Radio_Image(
	[
		'settings'    => 'above_footer_widgets_layout_1',
		'label'       => esc_html__( 'Layout', 'anzu' ),
		'section'     => 'above_footer_widgets_section',
		'tab'         => 'general',
		'default'     => '1',
		'choices'     => [
			'1'    => ANZU_THEME_URI . '/inc/customizer/assets/images/12.png', 
		],
		'active_callback' => [
			[
				'setting'  => 'above_footer_widgets_column',
				'operator' => '==',
				'value'    => '1',
			],
			[
				'setting'  => 'above_footer_widgets_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Radio_Image(
	[
		'settings'    => 'above_footer_widgets_layout_2',
		'label'       => esc_html__( 'Layout', 'anzu' ),
		'section'     => 'above_footer_widgets_section',
		'tab'         => 'general',
		'default'     => '1',
		'choices'     => [
			'1'    => ANZU_THEME_URI . '/inc/customizer/assets/images/6-6.png', 
			'2'    => ANZU_THEME_URI . '/inc/customizer/assets/images/8-4.png', 
			'3'    => ANZU_THEME_URI . '/inc/customizer/assets/images/4-8.png', 
			'4'    => ANZU_THEME_URI . '/inc/customizer/assets/images/9-3.png', 
			'5'   => ANZU_THEME_URI . '/inc/customizer/assets/images/3-9.png',  
		],
		'active_callback' => [
			[
				'setting'  => 'above_footer_widgets_column',
				'operator' => '==',
				'value'    => '2',
			],
			[
				'setting'  => 'above_footer_widgets_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Radio_Image(
	[
		'settings'    => 'above_footer_widgets_layout_3',
		'label'       => esc_html__( 'Layout', 'anzu' ),
		'section'     => 'above_footer_widgets_section',
		'tab'         => 'general',
		'default'     => '1',
		'choices'     => [
			'1'    => ANZU_THEME_URI . '/inc/customizer/assets/images/4-4-4.png',
			'2'   => ANZU_THEME_URI . '/inc/customizer/assets/images/6-3-3.png', 
			'3'   => ANZU_THEME_URI . '/inc/customizer/assets/images/3-3-6.png', 
			'4'   => ANZU_THEME_URI . '/inc/customizer/assets/images/3-6-3.png', 
			'5'   => ANZU_THEME_URI . '/inc/customizer/assets/images/2-8-2.png',  
		],
		'active_callback' => [
			[
				'setting'  => 'above_footer_widgets_column',
				'operator' => '==',
				'value'    => '3',
			],
			[
				'setting'  => 'above_footer_widgets_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);


new \Kirki\Field\Radio_Image(
	[
		'settings'    => 'above_footer_widgets_layout_4',
		'label'       => esc_html__( 'Layout', 'anzu' ),
		'section'     => 'above_footer_widgets_section',
		'tab'         => 'general',
		'default'     => '1',
		'choices'     => [
			'1'    => ANZU_THEME_URI . '/inc/customizer/assets/images/3-3-3-3.png', 
			'2'    => ANZU_THEME_URI . '/inc/customizer/assets/images/6-2-2-2.png', 
			'3'    => ANZU_THEME_URI . '/inc/customizer/assets/images/2-2-2-6.png',   
		],
		'active_callback' => [
			[
				'setting'  => 'above_footer_widgets_column',
				'operator' => '==',
				'value'    => '4',
			],
			[
				'setting'  => 'above_footer_widgets_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Radio_Image(
	[
		'settings'    => 'above_footer_widgets_layout_5',
		'label'       => esc_html__( 'Layout', 'anzu' ),
		'section'     => 'above_footer_widgets_section',
		'tab'         => 'general',
		'default'     => '1',
		'choices'     => [
			'1'    => ANZU_THEME_URI . '/inc/customizer/assets/images/2.4-2.4-2.4-2.4-2.4.png', 
		],
		'active_callback' => [
			[
				'setting'  => 'above_footer_widgets_column',
				'operator' => '==',
				'value'    => '5',
			],
			[
				'setting'  => 'above_footer_widgets_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Radio_Image(
	[
		'settings'    => 'above_footer_widgets_layout_6',
		'label'       => esc_html__( 'Layout', 'anzu' ),
		'section'     => 'above_footer_widgets_section',
		'tab'         => 'general',
		'default'     => '1',
		'choices'     => [ 
			'1'    => ANZU_THEME_URI . '/inc/customizer/assets/images/2-2-2-2-2-2.png',  
		],
		'active_callback' => [
			[
				'setting'  => 'above_footer_widgets_column',
				'operator' => '==',
				'value'    => '6',
			],
			[
				'setting'  => 'above_footer_widgets_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Select(
	[
		'settings'    => 'anzu_above_footer_vertical_alignment',
		'label'       => esc_html__( 'Vertical Alignment', 'anzu' ),
		'section'     => 'above_footer_widgets_section',
		'tab'         => 'design',
		'default'     => 'align-items-center',
		'placeholder' => esc_html__( 'Select an option', 'anzu' ),
		'choices'     => [
			'align-items-start' => esc_html__( 'Top', 'anzu' ),
			'align-items-center' => esc_html__( 'Middle', 'anzu' ),
			'align-items-end' => esc_html__( 'Bottom', 'anzu' ),
		],
		'active_callback' => [
			[
				'setting'  => 'above_footer_widgets_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Select(
	[
		'settings'    => 'anzu_above_footer_layout_type',
		'label'       => esc_html__( 'Layout Style', 'anzu' ),
		'description' => esc_html__( 'Choose the format that works best for you.', 'anzu' ),
		'section'     => 'above_footer_widgets_section',
		'tab'         => 'design',
		'default'     => 'container',
		'placeholder' => esc_html__( 'Select an option', 'anzu' ),
		'choices'     => [
			'container' => esc_html__( 'Boxed', 'anzu' ),
			'container-fluid p-0' => esc_html__( 'Stretched', 'anzu' ),
		],
		'active_callback' => [
			[
				'setting'  => 'above_footer_widgets_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Dimensions(
	[
		'settings'    => 'anzu_above_footer_height',
		'label'       => esc_html__( 'Height', 'anzu' ),
		'section'     => 'above_footer_widgets_section',
		'tab'         => 'design',
		'responsive'  => true,
		'transport'   => 'postMessage',
		'choices'     => [
			'min'  => 0,
			'max'  => 1000,
			'step' => 1,
		],
		'default'     => [
			'desktop' => [
				'min-height' => '',
			],
			'tablet'  => [
				'min-height' => '',
			],
			'mobile'  => [
				'min-height' => '',
			],
		],
		'output' => [
			[
				'element'     => '#anzu-above-footer .row',
				'media_query' => [
					'desktop' => '@media (min-width: 1200px)',
					'tablet'  => '@media (min-width: 768px)',
					'mobile'  => '@media (max-width: 767px)',
				],
			],
		],
		'active_callback' => [
			[
				'setting'  => 'above_footer_widgets_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Pro\Field\Padding(
	[
		'settings'        => 'anzu_above_footer_padding',
		'label'           => esc_html__( 'Padding', 'anzu' ),
		'section'         => 'above_footer_widgets_section',
		'tab'             => 'design',
		'responsive'      => true,
		'transport'       => 'postMessage',
		'default'         => [
			'desktop' => [
				'top'    => '',
				'right'  => '',
				'bottom' => '',
				'left'   => '',
			],
			'tablet' => [
				'top'    => '',
				'right'  => '',
				'bottom' => '',
				'left'   => '',
			],
			'mobile' => [
				'top'    => '',
				'right'  => '',
				'bottom' => '',
				'left'   => '',
			],
		],
		'output'          => [
			[
				'element'     => '#anzu-above-footer',
				'media_query' => [
					'desktop' => '@media (min-width: 1200px)',
					'tablet'  => '@media (min-width: 768px)',
					'mobile'  => '@media (max-width: 767px)',
				],
			],
		],
		'active_callback' => [
			[
				'setting'  => 'above_footer_widgets_switch',
				'operator' => '==',
				'value'    => true,
			],
		],
	]
);

new \Kirki\Pro\Field\Margin(
	[
		'settings'        => 'anzu_above_footer_margin',
		'label'           => esc_html__( 'Margin', 'anzu' ),
		'section'         => 'above_footer_widgets_section',
		'tab'             => 'design',
		'responsive'      => true,
		'transport'       => 'postMessage',
		'default'         => [
			'desktop' => [
				'top'    => '',
				'right'  => '',
				'bottom' => '',
				'left'   => '',
			],
			'tablet' => [
				'top'    => '',
				'right'  => '',
				'bottom' => '',
				'left'   => '',
			],
			'mobile' => [
				'top'    => '',
				'right'  => '',
				'bottom' => '',
				'left'   => '',
			],
		],
		'output'          => [
			[
				'element'     => '#anzu-above-footer',
				'media_query' => [
					'desktop' => '@media (min-width: 1200px)',
					'tablet'  => '@media (min-width: 768px)',
					'mobile'  => '@media (max-width: 767px)',
				],
			],
		],
		'active_callback' => [
			[
				'setting'  => 'above_footer_widgets_switch',
				'operator' => '==',
				'value'    => true,
			],
		],
	]
);


/*-----------------------------------------------------------------------------------*/
/*  *.  footer > main_footer_widgets_section
/*-----------------------------------------------------------------------------------*/

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'main_footer_widgets_switch',
		'label'       => esc_html__( 'Enable Main Footer', 'anzu' ),
		'section'     => 'main_footer_widgets_section',
		'tab'         => 'general',
		'default'     => false,
	]
);
new \Kirki\Field\Select(
	[
		'settings'    => 'main_footer_widgets_column',
		'label'       => esc_html__( 'Select Control', 'anzu' ),
		'section'     => 'main_footer_widgets_section',
		'tab'         => 'general',
		'default'     => '3',
		'placeholder' => esc_html__( 'Select an option', 'anzu' ),
		'choices'     => [
			'1' => esc_html__( '1 Column', 'anzu' ),
			'2' => esc_html__( '2 Columns', 'anzu' ),
			'3' => esc_html__( '3 Columns', 'anzu' ),
			'4' => esc_html__( '4 Columns', 'anzu' ),
			'5' => esc_html__( '5 Columns', 'anzu' ),
			'6' => esc_html__( '6 Columns', 'anzu' ),
		],
		'active_callback' => [
			[
				'setting'  => 'main_footer_widgets_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Radio_Image(
	[
		'settings'    => 'main_footer_widgets_layout_1',
		'label'       => esc_html__( 'Layout', 'anzu' ),
		'section'     => 'main_footer_widgets_section',
		'tab'         => 'general',
		'default'     => '1',
		'choices'     => [
			'1'    => ANZU_THEME_URI . '/inc/customizer/assets/images/12.png', 
		],
		'active_callback' => [
			[
				'setting'  => 'main_footer_widgets_column',
				'operator' => '==',
				'value'    => '1',
			],
			[
				'setting'  => 'main_footer_widgets_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Radio_Image(
	[
		'settings'    => 'main_footer_widgets_layout_2',
		'label'       => esc_html__( 'Layout', 'anzu' ),
		'section'     => 'main_footer_widgets_section',
		'tab'         => 'general',
		'default'     => '1',
		'choices'     => [
			'1'    => ANZU_THEME_URI . '/inc/customizer/assets/images/6-6.png', 
			'2'    => ANZU_THEME_URI . '/inc/customizer/assets/images/8-4.png', 
			'3'    => ANZU_THEME_URI . '/inc/customizer/assets/images/4-8.png', 
			'4'    => ANZU_THEME_URI . '/inc/customizer/assets/images/9-3.png', 
			'5'   => ANZU_THEME_URI . '/inc/customizer/assets/images/3-9.png',  
		],
		'active_callback' => [
			[
				'setting'  => 'main_footer_widgets_column',
				'operator' => '==',
				'value'    => '2',
			],
			[
				'setting'  => 'main_footer_widgets_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Radio_Image(
	[
		'settings'    => 'main_footer_widgets_layout_3',
		'label'       => esc_html__( 'Layout', 'anzu' ),
		'section'     => 'main_footer_widgets_section',
		'tab'         => 'general',
		'default'     => '1',
		'choices'     => [
			'1'    => ANZU_THEME_URI . '/inc/customizer/assets/images/4-4-4.png',
			'2'   => ANZU_THEME_URI . '/inc/customizer/assets/images/6-3-3.png', 
			'3'   => ANZU_THEME_URI . '/inc/customizer/assets/images/3-3-6.png', 
			'4'   => ANZU_THEME_URI . '/inc/customizer/assets/images/3-6-3.png', 
			'5'   => ANZU_THEME_URI . '/inc/customizer/assets/images/2-8-2.png',  
		],
		'active_callback' => [
			[
				'setting'  => 'main_footer_widgets_column',
				'operator' => '==',
				'value'    => '3',
			],
			[
				'setting'  => 'main_footer_widgets_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);


new \Kirki\Field\Radio_Image(
	[
		'settings'    => 'main_footer_widgets_layout_4',
		'label'       => esc_html__( 'Layout', 'anzu' ),
		'section'     => 'main_footer_widgets_section',
		'tab'         => 'general',
		'default'     => '1',
		'choices'     => [
			'1'    => ANZU_THEME_URI . '/inc/customizer/assets/images/3-3-3-3.png', 
			'2'    => ANZU_THEME_URI . '/inc/customizer/assets/images/6-2-2-2.png', 
			'3'    => ANZU_THEME_URI . '/inc/customizer/assets/images/2-2-2-6.png',   
		],
		'active_callback' => [
			[
				'setting'  => 'main_footer_widgets_column',
				'operator' => '==',
				'value'    => '4',
			],
			[
				'setting'  => 'main_footer_widgets_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Radio_Image(
	[
		'settings'    => 'main_footer_widgets_layout_5',
		'label'       => esc_html__( 'Layout', 'anzu' ),
		'section'     => 'main_footer_widgets_section',
		'tab'         => 'general',
		'default'     => '1',
		'choices'     => [
			'1'    => ANZU_THEME_URI . '/inc/customizer/assets/images/2.4-2.4-2.4-2.4-2.4.png', 
		],
		'active_callback' => [
			[
				'setting'  => 'main_footer_widgets_column',
				'operator' => '==',
				'value'    => '5',
			],
			[
				'setting'  => 'main_footer_widgets_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Radio_Image(
	[
		'settings'    => 'main_footer_widgets_layout_6',
		'label'       => esc_html__( 'Layout', 'anzu' ),
		'section'     => 'main_footer_widgets_section',
		'tab'         => 'general',
		'default'     => '1',
		'choices'     => [ 
			'1'    => ANZU_THEME_URI . '/inc/customizer/assets/images/2-2-2-2-2-2.png',  
		],
		'active_callback' => [
			[
				'setting'  => 'main_footer_widgets_column',
				'operator' => '==',
				'value'    => '6',
			],
			[
				'setting'  => 'main_footer_widgets_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Select(
	[
		'settings'    => 'anzu_main_footer_vertical_alignment',
		'label'       => esc_html__( 'Vertical Alignment', 'anzu' ),
		'section'     => 'main_footer_widgets_section',
		'tab'         => 'design',
		'default'     => 'align-items-center',
		'placeholder' => esc_html__( 'Select an option', 'anzu' ),
		'choices'     => [
			'align-items-start' => esc_html__( 'Top', 'anzu' ),
			'align-items-center' => esc_html__( 'Middle', 'anzu' ),
			'align-items-end' => esc_html__( 'Bottom', 'anzu' ),
		],
		'active_callback' => [
			[
				'setting'  => 'main_footer_widgets_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Select(
	[
		'settings'    => 'anzu_main_footer_layout_type',
		'label'       => esc_html__( 'Layout Style', 'anzu' ),
		'description' => esc_html__( 'Choose the format that works best for you.', 'anzu' ),
		'section'     => 'main_footer_widgets_section',
		'tab'         => 'design',
		'default'     => 'container',
		'placeholder' => esc_html__( 'Select an option', 'anzu' ),
		'choices'     => [
			'container' => esc_html__( 'Boxed', 'anzu' ),
			'container-fluid p-0' => esc_html__( 'Stretched', 'anzu' ),
		],
		'active_callback' => [
			[
				'setting'  => 'main_footer_widgets_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Dimensions(
	[
		'settings'    => 'anzu_main_footer_height',
		'label'       => esc_html__( 'Height', 'anzu' ),
		'section'     => 'main_footer_widgets_section',
		'tab'         => 'design',
		'responsive'  => true,
		'transport'   => 'postMessage',
		'choices'     => [
			'min'  => 0,
			'max'  => 1000,
			'step' => 1,
		],
		'default'     => [
			'desktop' => [
				'min-height' => '',
			],
			'tablet'  => [
				'min-height' => '',
			],
			'mobile'  => [
				'min-height' => '',
			],
		],
		'output' => [
			[
				'element'     => '#anzu-main-footer .row',
				'media_query' => [
					'desktop' => '@media (min-width: 1200px)',
					'tablet'  => '@media (min-width: 768px)',
					'mobile'  => '@media (max-width: 767px)',
				],
			],
		],
		'active_callback' => [
			[
				'setting'  => 'main_footer_widgets_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Pro\Field\Padding(
	[
		'settings'        => 'anzu_main_footer_padding',
		'label'           => esc_html__( 'Padding', 'anzu' ),
		'section'         => 'main_footer_widgets_section',
		'tab'             => 'design',
		'responsive'      => true,
		'transport'       => 'postMessage',
		'default'         => [
			'desktop' => [
				'top'    => '',
				'right'  => '',
				'bottom' => '',
				'left'   => '',
			],
			'tablet' => [
				'top'    => '',
				'right'  => '',
				'bottom' => '',
				'left'   => '',
			],
			'mobile' => [
				'top'    => '',
				'right'  => '',
				'bottom' => '',
				'left'   => '',
			],
		],
		'output'          => [
			[
				'element'     => '#anzu-main-footer',
				'media_query' => [
					'desktop' => '@media (min-width: 1200px)',
					'tablet'  => '@media (min-width: 768px)',
					'mobile'  => '@media (max-width: 767px)',
				],
			],
		],
		'active_callback' => [
			[
				'setting'  => 'main_footer_widgets_switch',
				'operator' => '==',
				'value'    => true,
			],
		],
	]
);

new \Kirki\Pro\Field\Margin(
	[
		'settings'        => 'anzu_main_footer_margin',
		'label'           => esc_html__( 'Margin', 'anzu' ),
		'section'         => 'main_footer_widgets_section',
		'tab'             => 'design',
		'responsive'      => true,
		'transport'       => 'postMessage',
		'default'         => [
			'desktop' => [
				'top'    => '',
				'right'  => '',
				'bottom' => '',
				'left'   => '',
			],
			'tablet' => [
				'top'    => '',
				'right'  => '',
				'bottom' => '',
				'left'   => '',
			],
			'mobile' => [
				'top'    => '',
				'right'  => '',
				'bottom' => '',
				'left'   => '',
			],
		],
		'output'          => [
			[
				'element'     => '#anzu-main-footer',
				'media_query' => [
					'desktop' => '@media (min-width: 1200px)',
					'tablet'  => '@media (min-width: 768px)',
					'mobile'  => '@media (max-width: 767px)',
				],
			],
		],
		'active_callback' => [
			[
				'setting'  => 'main_footer_widgets_switch',
				'operator' => '==',
				'value'    => true,
			],
		],
	]
);


/*-----------------------------------------------------------------------------------*/
/*  *.  footer > below_footer_widgets_section
/*-----------------------------------------------------------------------------------*/

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'below_footer_widgets_switch',
		'label'       => esc_html__( 'Enable Below Footer', 'anzu' ),
		'section'     => 'below_footer_widgets_section',
		'tab'         => 'general',
		'default'     => false,
	]
);
new \Kirki\Field\Select(
	[
		'settings'    => 'below_footer_widgets_column',
		'label'       => esc_html__( 'Select Control', 'anzu' ),
		'section'     => 'below_footer_widgets_section',
		'tab'         => 'general',
		'default'     => '3',
		'placeholder' => esc_html__( 'Select an option', 'anzu' ),
		'choices'     => [
			'1' => esc_html__( '1 Column', 'anzu' ),
			'2' => esc_html__( '2 Columns', 'anzu' ),
			'3' => esc_html__( '3 Columns', 'anzu' ),
			'4' => esc_html__( '4 Columns', 'anzu' ),
			'5' => esc_html__( '5 Columns', 'anzu' ),
			'6' => esc_html__( '6 Columns', 'anzu' ),
		],
		'active_callback' => [
			[
				'setting'  => 'below_footer_widgets_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Radio_Image(
	[
		'settings'    => 'below_footer_widgets_layout_1',
		'label'       => esc_html__( 'Layout', 'anzu' ),
		'section'     => 'below_footer_widgets_section',
		'tab'         => 'general',
		'default'     => '1',
		'choices'     => [
			'1'    => ANZU_THEME_URI . '/inc/customizer/assets/images/12.png', 
		],
		'active_callback' => [
			[
				'setting'  => 'below_footer_widgets_column',
				'operator' => '==',
				'value'    => '1',
			],
			[
				'setting'  => 'below_footer_widgets_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Radio_Image(
	[
		'settings'    => 'below_footer_widgets_layout_2',
		'label'       => esc_html__( 'Layout', 'anzu' ),
		'section'     => 'below_footer_widgets_section',
		'tab'         => 'general',
		'default'     => '1',
		'choices'     => [
			'1'    => ANZU_THEME_URI . '/inc/customizer/assets/images/6-6.png', 
			'2'    => ANZU_THEME_URI . '/inc/customizer/assets/images/8-4.png', 
			'3'    => ANZU_THEME_URI . '/inc/customizer/assets/images/4-8.png', 
			'4'    => ANZU_THEME_URI . '/inc/customizer/assets/images/9-3.png', 
			'5'   => ANZU_THEME_URI . '/inc/customizer/assets/images/3-9.png',  
		],
		'active_callback' => [
			[
				'setting'  => 'below_footer_widgets_column',
				'operator' => '==',
				'value'    => '2',
			],
			[
				'setting'  => 'below_footer_widgets_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Radio_Image(
	[
		'settings'    => 'below_footer_widgets_layout_3',
		'label'       => esc_html__( 'Layout', 'anzu' ),
		'section'     => 'below_footer_widgets_section',
		'tab'         => 'general',
		'default'     => '1',
		'choices'     => [
			'1'    => ANZU_THEME_URI . '/inc/customizer/assets/images/4-4-4.png',
			'2'   => ANZU_THEME_URI . '/inc/customizer/assets/images/6-3-3.png', 
			'3'   => ANZU_THEME_URI . '/inc/customizer/assets/images/3-3-6.png', 
			'4'   => ANZU_THEME_URI . '/inc/customizer/assets/images/3-6-3.png', 
			'5'   => ANZU_THEME_URI . '/inc/customizer/assets/images/2-8-2.png',  
		],
		'active_callback' => [
			[
				'setting'  => 'below_footer_widgets_column',
				'operator' => '==',
				'value'    => '3',
			],
			[
				'setting'  => 'below_footer_widgets_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);


new \Kirki\Field\Radio_Image(
	[
		'settings'    => 'below_footer_widgets_layout_4',
		'label'       => esc_html__( 'Layout', 'anzu' ),
		'section'     => 'below_footer_widgets_section',
		'tab'         => 'general',
		'default'     => '1',
		'choices'     => [
			'1'    => ANZU_THEME_URI . '/inc/customizer/assets/images/3-3-3-3.png', 
			'2'    => ANZU_THEME_URI . '/inc/customizer/assets/images/6-2-2-2.png', 
			'3'    => ANZU_THEME_URI . '/inc/customizer/assets/images/2-2-2-6.png',   
		],
		'active_callback' => [
			[
				'setting'  => 'below_footer_widgets_column',
				'operator' => '==',
				'value'    => '4',
			],
			[
				'setting'  => 'below_footer_widgets_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Radio_Image(
	[
		'settings'    => 'below_footer_widgets_layout_5',
		'label'       => esc_html__( 'Layout', 'anzu' ),
		'section'     => 'below_footer_widgets_section',
		'tab'         => 'general',
		'default'     => '1',
		'choices'     => [
			'1'    => ANZU_THEME_URI . '/inc/customizer/assets/images/2.4-2.4-2.4-2.4-2.4.png', 
		],
		'active_callback' => [
			[
				'setting'  => 'below_footer_widgets_column',
				'operator' => '==',
				'value'    => '5',
			],
			[
				'setting'  => 'below_footer_widgets_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Radio_Image(
	[
		'settings'    => 'below_footer_widgets_layout_6',
		'label'       => esc_html__( 'Layout', 'anzu' ),
		'section'     => 'below_footer_widgets_section',
		'tab'         => 'general',
		'default'     => '1',
		'choices'     => [ 
			'1'    => ANZU_THEME_URI . '/inc/customizer/assets/images/2-2-2-2-2-2.png',  
		],
		'active_callback' => [
			[
				'setting'  => 'below_footer_widgets_column',
				'operator' => '==',
				'value'    => '6',
			],
			[
				'setting'  => 'below_footer_widgets_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Select(
	[
		'settings'    => 'anzu_below_footer_vertical_alignment',
		'label'       => esc_html__( 'Vertical Alignment', 'anzu' ),
		'section'     => 'below_footer_widgets_section',
		'tab'         => 'design',
		'default'     => 'align-items-center',
		'placeholder' => esc_html__( 'Select an option', 'anzu' ),
		'choices'     => [
			'align-items-start' => esc_html__( 'Top', 'anzu' ),
			'align-items-center' => esc_html__( 'Middle', 'anzu' ),
			'align-items-end' => esc_html__( 'Bottom', 'anzu' ),
		],
		'active_callback' => [
			[
				'setting'  => 'below_footer_widgets_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Select(
	[
		'settings'    => 'anzu_below_footer_layout_type',
		'label'       => esc_html__( 'Layout Style', 'anzu' ),
		'description' => esc_html__( 'Choose the format that works best for you.', 'anzu' ),
		'section'     => 'below_footer_widgets_section',
		'tab'         => 'design',
		'default'     => 'container',
		'placeholder' => esc_html__( 'Select an option', 'anzu' ),
		'choices'     => [
			'container' => esc_html__( 'Boxed', 'anzu' ),
			'container-fluid p-0' => esc_html__( 'Stretched', 'anzu' ),
		],
		'active_callback' => [
			[
				'setting'  => 'below_footer_widgets_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Dimensions(
	[
		'settings'    => 'anzu_below_footer_height',
		'label'       => esc_html__( 'Height', 'anzu' ),
		'section'     => 'below_footer_widgets_section',
		'tab'         => 'design',
		'responsive'  => true,
		'transport'   => 'postMessage',
		'choices'     => [
			'min'  => 0,
			'max'  => 1000,
			'step' => 1,
		],
		'default'     => [
			'desktop' => [
				'min-height' => '',
			],
			'tablet'  => [
				'min-height' => '',
			],
			'mobile'  => [
				'min-height' => '',
			],
		],
		'output' => [
			[
				'element'     => '#anzu-below-footer .row',
				'media_query' => [
					'desktop' => '@media (min-width: 1200px)',
					'tablet'  => '@media (min-width: 768px)',
					'mobile'  => '@media (max-width: 767px)',
				],
			],
		],
		'active_callback' => [
			[
				'setting'  => 'below_footer_widgets_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Pro\Field\Padding(
	[
		'settings'        => 'anzu_below_footer_padding',
		'label'           => esc_html__( 'Padding', 'anzu' ),
		'section'         => 'below_footer_widgets_section',
		'tab'             => 'design',
		'responsive'      => true,
		'transport'       => 'postMessage',
		'default'         => [
			'desktop' => [
				'top'    => '',
				'right'  => '',
				'bottom' => '',
				'left'   => '',
			],
			'tablet' => [
				'top'    => '',
				'right'  => '',
				'bottom' => '',
				'left'   => '',
			],
			'mobile' => [
				'top'    => '',
				'right'  => '',
				'bottom' => '',
				'left'   => '',
			],
		],
		'output'          => [
			[
				'element'     => '#anzu-below-footer',
				'media_query' => [
					'desktop' => '@media (min-width: 1200px)',
					'tablet'  => '@media (min-width: 768px)',
					'mobile'  => '@media (max-width: 767px)',
				],
			],
		],
		'active_callback' => [
			[
				'setting'  => 'below_footer_widgets_switch',
				'operator' => '==',
				'value'    => true,
			],
		],
	]
);

new \Kirki\Pro\Field\Margin(
	[
		'settings'        => 'anzu_below_footer_margin',
		'label'           => esc_html__( 'Margin', 'anzu' ),
		'section'         => 'below_footer_widgets_section',
		'tab'             => 'design',
		'responsive'      => true,
		'transport'       => 'postMessage',
		'default'         => [
			'desktop' => [
				'top'    => '',
				'right'  => '',
				'bottom' => '',
				'left'   => '',
			],
			'tablet' => [
				'top'    => '',
				'right'  => '',
				'bottom' => '',
				'left'   => '',
			],
			'mobile' => [
				'top'    => '',
				'right'  => '',
				'bottom' => '',
				'left'   => '',
			],
		],
		'output'          => [
			[
				'element'     => '#anzu-below-footer',
				'media_query' => [
					'desktop' => '@media (min-width: 1200px)',
					'tablet'  => '@media (min-width: 768px)',
					'mobile'  => '@media (max-width: 767px)',
				],
			],
		],
		'active_callback' => [
			[
				'setting'  => 'below_footer_widgets_switch',
				'operator' => '==',
				'value'    => true,
			],
		],
	]
);


/*-----------------------------------------------------------------------------------*/
/*  *.  footer > footer_bottom_section
/*-----------------------------------------------------------------------------------*/

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'anzu_copyright_switch',
		'label'       => esc_html__( 'Enable Copyright', 'anzu' ),
		'section'     => 'footer_bottom_section',
		'tab'         => 'general',
		'default'     => true,
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'anzu_footer_site_title_switch',
		'label'       => esc_html__( 'Enable Site Title', 'anzu' ),
		'section'     => 'footer_bottom_section',
		'tab'         => 'general',
		'default'     => false,
	]
);

new \Kirki\Field\Editor(
	[
		'settings'    => 'anzu_copyright',
		'label'       => esc_html__( 'Copyright', 'anzu' ),
		'section'     => 'footer_bottom_section',
		'tab'         => 'general',
		'default'     => 'Copyright [anzu_copyright] [anzu_current_year] [anzu_site_title] | Powered by [anzu_theme_author]',
		'active_callback' => [
			[
				'setting'  => 'anzu_copyright_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	],
);

new \Kirki\Field\Dimensions(
	[
		'settings'    => 'anzu_copyright_height',
		'label'       => esc_html__( 'Height', 'anzu' ),
		'section'     => 'footer_bottom_section',
		'tab'         => 'design',
		'responsive'  => true,
		'transport'   => 'postMessage',
		'choices'     => [
			'min'  => 0,
			'max'  => 1000,
			'step' => 1,
		],
		'default'     => [
			'desktop' => [
				'min-height' => '80px',
			],
			'tablet'  => [
				'min-height' => '80px',
			],
			'mobile'  => [
				'min-height' => '50px',
			],
		],
		'output' => [
			[
				'element'     => '#anzu-footer #site-info',
				'media_query' => [
					'desktop' => '@media (min-width: 1200px)',
					'tablet'  => '@media (min-width: 768px)',
					'mobile'  => '@media (max-width: 767px)',
				],
			],
		],
		'active_callback' => [
			[
				'setting'  => 'anzu_copyright_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Pro\Field\Padding(
	[
		'settings'        => 'anzu_copyright_padding',
		'label'           => esc_html__( 'Padding', 'anzu' ),
		'section'         => 'footer_bottom_section',
		'tab'             => 'design',
		'responsive'      => true,
		'transport'       => 'postMessage',
		'default'         => [
			'desktop' => [
				'top'    => '',
				'right'  => '',
				'bottom' => '',
				'left'   => '',
			],
			'tablet' => [
				'top'    => '',
				'right'  => '',
				'bottom' => '',
				'left'   => '',
			],
			'mobile' => [
				'top'    => '',
				'right'  => '',
				'bottom' => '',
				'left'   => '',
			],
		],
		'output'          => [
			[
				'element'     => '#anzu-footer #site-info',
				'media_query' => [
					'desktop' => '@media (min-width: 1200px)',
					'tablet'  => '@media (min-width: 768px)',
					'mobile'  => '@media (max-width: 767px)',
				],
			],
		],
		'active_callback' => [
			[
				'setting'  => 'anzu_copyright_switch',
				'operator' => '==',
				'value'    => true,
			],
		],
	]
);

new \Kirki\Pro\Field\Margin(
	[
		'settings'        => 'anzu_copyright_margin',
		'label'           => esc_html__( 'Margin', 'anzu' ),
		'section'         => 'footer_bottom_section',
		'tab'             => 'design',
		'responsive'      => true,
		'transport'       => 'postMessage',
		'default'         => [
			'desktop' => [
				'top'    => '',
				'right'  => '',
				'bottom' => '',
				'left'   => '',
			],
			'tablet' => [
				'top'    => '',
				'right'  => '',
				'bottom' => '',
				'left'   => '',
			],
			'mobile' => [
				'top'    => '',
				'right'  => '',
				'bottom' => '',
				'left'   => '',
			],
		],
		'output'          => [
			[
				'element'     => '#anzu-footer #site-info',
				'media_query' => [
					'desktop' => '@media (min-width: 1200px)',
					'tablet'  => '@media (min-width: 768px)',
					'mobile'  => '@media (max-width: 767px)',
				],
			],
		],
		'active_callback' => [
			[
				'setting'  => 'anzu_copyright_switch',
				'operator' => '==',
				'value'    => true,
			],
		],
	]
);