<?php

/*-----------------------------------------------------------------------------------*/
/*  *.  Header
/*-----------------------------------------------------------------------------------*/

Kirki::add_panel( 'header', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Header', 'anzu' ),
) );

new \Kirki\Section(
	'header_general_section',
	[
		'title' => esc_html__( 'General', 'anzu' ),
		'panel' => 'header',
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

Kirki::add_section( 'header_menu_section', array(
    'title'          => esc_html__( 'Menu', 'anzu' ),
    'panel'          => 'header',
    'priority'       => 160,
) );

new \Kirki\Section(
	'header_notification_section',
	[
		'title' => esc_html__( 'Notification Bar', 'anzu' ),
		'panel' => 'header',
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

Kirki::add_section( 'header_hero_section', array(
    'title'          => esc_html__( 'Hero', 'anzu' ),
	'panel'          => 'header',
    'priority'       => 160,
) );

Kirki::add_section( 'header_branding_section', array(
    'title'          => esc_html__( 'Branding', 'anzu' ),
    'panel'          => 'header',
    'priority'       => 160,
) );

Kirki::add_section( 'header_light_logo_section', array(
    'title'          => esc_html__( 'Logo', 'anzu' ),
	'panel'          => 'header',
    'priority'       => 160,
) );

Kirki::add_section( 'header_dark_logo_section', array(
    'title'          => esc_html__( 'Logo For Dark Mode', 'anzu' ),
	'panel'          => 'header',
    'priority'       => 160,
) );

Kirki::add_section( 'transparent_header_section', array(
    'title'          => esc_html__( 'Transparent Header', 'anzu' ),
    'panel'          => 'header',
    'priority'       => 160,
) );

if ( is_object( $anzu_license ) && $anzu_license->get_api_key_status() ) {

	Kirki::add_section( 'sticky_header_section', array(
		'title'          => esc_html__( 'Sticky Header', 'anzu' ),
		'panel'          => 'header',
		'priority'       => 160,
	) );

}

/*-----------------------------------------------------------------------------------*/
/*  *.  header > header_general_section
/*-----------------------------------------------------------------------------------*/

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'anzu_header_general_cart',
		'label'       => esc_html__( 'Cart', 'anzu' ),
		'section'     => 'header_general_section',
		'default'     => true,
		'tab'         => 'general',
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'anzu_header_general_search',
		'label'       => esc_html__( 'Search', 'anzu' ),
		'section'     => 'header_general_section',
		'default'     => true,
		'tab'         => 'general',
	]
);

new \Kirki\Pro\Field\Padding(
	[
		'settings'        => 'anzu_main_header_padding',
		'label'           => esc_html__( 'Padding', 'anzu' ),
		'section'         => 'header_general_section',
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
				'element'     => '.anzu-header #main-nav > .container',
				'media_query' => [
					'desktop' => '@media (min-width: 1200px)',
					'tablet'  => '@media (min-width: 768px)',
					'mobile'  => '@media (max-width: 767px)',
				],
			],
		],
	]
);

new \Kirki\Pro\Field\Margin(
	[
		'settings'        => 'anzu_main_header_margin',
		'label'           => esc_html__( 'Margin', 'anzu' ),
		'section'         => 'header_general_section',
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
				'element'     => '.anzu-header #main-nav',
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
/*  *.  header > header_menu_section
/*-----------------------------------------------------------------------------------*/

new \Kirki\Field\Select(
	[
		'settings'    => 'anzu_header_menu_position',
		'label'       => esc_html__( 'Position', 'anzu' ),
		'section'     => 'header_menu_section',
		'default'     => 'justify-content-end',
		'placeholder' => esc_html__( 'Select an option', 'anzu' ),
		'choices'     => [
			'justify-content-start' => esc_html__( 'Start', 'anzu' ),
			'justify-content-center' => esc_html__( 'Center', 'anzu' ),
			'justify-content-end' => esc_html__( 'End', 'anzu' ),
		],
	]
);


/*-----------------------------------------------------------------------------------*/
/*  *.  header > header_notification_section
/*-----------------------------------------------------------------------------------*/

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'anzu_notification_bar_switch',
		'label'       => esc_html__( 'Notification Bar', 'anzu' ),
		'section'     => 'header_notification_section',
		'tab'         => 'general',
		'default'     => false,
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'anzu_notification_bar_dismissible_switch',
		'label'       => esc_html__( 'Dismissible', 'anzu' ),
		'section'     => 'header_notification_section',
		'tab'         => 'general',
		'default'     => true,
		'active_callback' => [
			[
				'setting'  => 'anzu_notification_bar_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Editor(
	[
		'settings'    => 'anzu_notification_bar_content',
		'label'       => esc_html__( 'Content', 'anzu' ),
		'section'     => 'header_notification_section',
		'tab'         => 'general',
		'default'     => '',
		'active_callback' => [
			[
				'setting'  => 'anzu_notification_bar_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Select(
	[
		'settings'    => 'anzu_notification_bar_layout_type',
		'label'       => esc_html__( 'Layout Style', 'anzu' ),
		'description' => esc_html__( 'Choose the format that works best for you.', 'anzu' ),
		'section'     => 'header_notification_section',
		'tab'         => 'design',
		'default'     => 'container',
		'placeholder' => esc_html__( 'Select an option', 'anzu' ),
		'choices'     => [
			'container' => esc_html__( 'Boxed', 'anzu' ),
			'container-fluid p-0' => esc_html__( 'Stretched', 'anzu' ),
		],
		'active_callback' => [
			[
				'setting'  => 'anzu_notification_bar_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Dimensions(
	[
		'settings'    => 'anzu_notification_bar_height',
		'label'       => esc_html__( 'Height', 'anzu' ),
		'section'     => 'header_notification_section',
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
				'element'     => '.anzu-notification-bar',
				'media_query' => [
					'desktop' => '@media (min-width: 1200px)',
					'tablet'  => '@media (min-width: 768px)',
					'mobile'  => '@media (max-width: 767px)',
				],
			],
		],
		'active_callback' => [
			[
				'setting'  => 'anzu_notification_bar_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Pro\Field\Padding(
	[
		'settings'        => 'anzu_notification_bar_padding',
		'label'           => esc_html__( 'Padding', 'anzu' ),
		'section'         => 'header_notification_section',
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
				'element'     => '.anzu-notification-bar',
				'media_query' => [
					'desktop' => '@media (min-width: 1200px)',
					'tablet'  => '@media (min-width: 768px)',
					'mobile'  => '@media (max-width: 767px)',
				],
			],
		],
		'active_callback' => [
			[
				'setting'  => 'anzu_notification_bar_switch',
				'operator' => '==',
				'value'    => true,
			],
		],
	]
);

new \Kirki\Pro\Field\Margin(
	[
		'settings'        => 'anzu_notification_bar_margin',
		'label'           => esc_html__( 'Margin', 'anzu' ),
		'section'         => 'header_notification_section',
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
				'element'     => '.anzu-notification-bar',
				'media_query' => [
					'desktop' => '@media (min-width: 1200px)',
					'tablet'  => '@media (min-width: 768px)',
					'mobile'  => '@media (max-width: 767px)',
				],
			],
		],
		'active_callback' => [
			[
				'setting'  => 'anzu_notification_bar_switch',
				'operator' => '==',
				'value'    => true,
			],
		],
	]
);


/*-----------------------------------------------------------------------------------*/
/*  *.  header > header_hero_section
/*-----------------------------------------------------------------------------------*/

new \Kirki\Field\Select(
	[
		'settings'    => 'anzu_header_hero_title_tag',
		'label'       => esc_html__( 'Title Tag', 'anzu' ),
		'section'     => 'header_hero_section',
		'placeholder' => esc_html__( 'Select an option', 'anzu' ),
		'default'     => 'h1',
		'choices'     => [
			'h1' => esc_html__( 'H1', 'anzu' ),
			'h2' => esc_html__( 'H2', 'anzu' ),
			'h3' => esc_html__( 'H3', 'anzu' ),
			'h4' => esc_html__( 'H4', 'anzu' ),
			'h5' => esc_html__( 'H5', 'anzu' ),
			'h6' => esc_html__( 'H6', 'anzu' ),
			'div' => esc_html__( 'div', 'anzu' ),
			'span' => esc_html__( 'span', 'anzu' ),
			'p' => esc_html__( 'p', 'anzu' ),
		],
	]
);

new \Kirki\Field\Select(
	[
		'settings'    => 'anzu_header_hero_subtitle_tag',
		'label'       => esc_html__( 'Subtitle Tag', 'anzu' ),
		'section'     => 'header_hero_section',
		'placeholder' => esc_html__( 'Select an option', 'anzu' ),
		'default'     => 'span',
		'choices'     => [
			'h1' => esc_html__( 'H1', 'anzu' ),
			'h2' => esc_html__( 'H2', 'anzu' ),
			'h3' => esc_html__( 'H3', 'anzu' ),
			'h4' => esc_html__( 'H4', 'anzu' ),
			'h5' => esc_html__( 'H5', 'anzu' ),
			'h6' => esc_html__( 'H6', 'anzu' ),
			'div' => esc_html__( 'div', 'anzu' ),
			'span' => esc_html__( 'span', 'anzu' ),
			'p' => esc_html__( 'p', 'anzu' ),
		],
	]
);

new \Kirki\Field\Select(
	[
		'settings'    => 'anzu_hero_layout',
		'label'       => esc_html__( 'Layout', 'anzu' ),
		'section'     => 'header_hero_section',
		'placeholder' => esc_html__( 'Select an option', 'anzu' ),
		'default'     => 'stretched',
		'choices'     => [
			'default' => esc_html__( 'Default', 'anzu' ),
			'contained' => esc_html__( 'Featured Contained', 'anzu' ),
			'stretched' => esc_html__( 'Featured Stretched', 'anzu' ),
		],
	]
);

new \Kirki\Field\Slider(
	[
		'settings'    => 'anzu_header_hero_height',
		'label'       => esc_html__( 'Height', 'anzu' ),
		'description' => esc_html__( 'Set the height of Hero, 100 being equivalent to 100% of the display.', 'anzu' ),
		'section'     => 'header_hero_section',
		'default'     => '50',
		'choices'     => [
			'min'    => 25,
			'max'    => 100,
			'step'   => 1,
			'suffix' => 'vh',
		],
		'output' => array(
			array(
				'element'  => '.anzu-hero__background-image',
				'property' => 'height',
				'units'    => 'vh',
			),
		),
	]
);

new \Kirki\Field\Background(
	[
		'settings'    => 'anzu_hero_background_image',
		'label'       => esc_html__( 'Image', 'anzu' ),
		'description' => esc_html__( 'Set Background Image.', 'anzu' ),
		'section'     => 'header_hero_section',
		'default'     => [
			'background-color'      => 'rgba(0, 0, 0, 0)',
			'background-image'      => '',
			'background-repeat'     => 'no-repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '.anzu-hero',
			],
		],
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_hero_overlay_color',
		'label'       => __( 'Overlay Color', 'anzu' ),
		'section'     => 'header_hero_section',
		'default'     => 'rgba(0, 0, 0, 0.4)',
		'choices'     => [
			'alpha' => true,
		],
		'output'      => [
			[
				'element' => '.anzu-hero__background-color',
				'property' => 'background-color',
			],
		],
	]
);


/*-----------------------------------------------------------------------------------*/
/*  *.  header > header_branding_section
/*-----------------------------------------------------------------------------------*/

new \Kirki\Field\Radio_Image(
	[
		'settings'    => 'anzu_brand_display',
		'label'       => esc_html__( 'Display', 'anzu' ),
		'section'     => 'header_branding_section',
		'default'     => 'anzu-brand--logo-title-tagline-right',
		'choices'     => [
			'anzu-brand--just-logo'                => ANZU_THEME_URI . '/inc/customizer/assets/images/just-logo.png',
			'anzu-brand--logo-title-tagline-right' => ANZU_THEME_URI . '/inc/customizer/assets/images/logo-title-tagline-right.png',
			'anzu-brand--logo-title-tagline-left'  => ANZU_THEME_URI . '/inc/customizer/assets/images/logo-title-tagline-left.png',
			'anzu-brand--logo-title-tagline-down'  => ANZU_THEME_URI . '/inc/customizer/assets/images/logo-title-tagline-down.png',
		],
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'anzu_logo_switch',
		'label'       => esc_html__( 'Logo', 'anzu' ),
		'section'     => 'header_branding_section',
		'default'     => true,
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'anzu_site_title_switch',
		'label'       => esc_html__( 'Site Title', 'anzu' ),
		'section'     => 'header_branding_section',
		'default'     => true,
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'anzu_tagline_switch',
		'label'       => esc_html__( 'Tagline', 'anzu' ),
		'section'     => 'header_branding_section',
		'default'     => false,
	]
);


/*-----------------------------------------------------------------------------------*/
/*  *.  header > header_light_logo_section
/*-----------------------------------------------------------------------------------*/

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'anzu_retina_light_logo_switch',
		'label'       => esc_html__( 'Different Logo For Retina Devices?', 'anzu' ),
		'section'     => 'header_light_logo_section',
		'default'     => false,
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'anzu_mobile_light_logo_switch',
		'label'       => esc_html__( 'Different Logo For Mobile Devices?', 'anzu' ),
		'section'     => 'header_light_logo_section',
		'default'     => false,
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'anzu_transparent_light_logo_switch',
		'label'       => esc_html__( 'Different Logo for Transparent Header?', 'anzu' ),
		'section'     => 'header_light_logo_section',
		'default'     => false,
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'anzu_sticky_light_logo_switch',
		'label'       => esc_html__( 'Different Logo for Sticky Header?', 'anzu' ),
		'section'     => 'header_light_logo_section',
		'default'     => false,
	]
);

new \Kirki\Field\Image(
	[
		'settings'    => 'anzu_light_logo',
		'label'       => esc_html__( 'Logo', 'anzu' ),
		'description' => esc_html__( 'Select logo.', 'anzu' ),
		'section'     => 'header_light_logo_section',
		'default'     => '',
	]
);

new \Kirki\Field\Image(
	[
		'settings'    => 'anzu_retina_light_logo',
		'label'       => esc_html__( 'Retina Logo', 'anzu' ),
		'description' => esc_html__( 'Select a retina logo twice the normal logo size.', 'anzu' ),
		'section'     => 'header_light_logo_section',
		'default'     => '',
		'active_callback' => [
			[
				'setting'  => 'anzu_retina_light_logo_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Image(
	[
		'settings'    => 'anzu_mobile_light_logo',
		'label'       => esc_html__( 'Logo For Mobile Devices', 'anzu' ),
		'description' => esc_html__( 'Select logo.', 'anzu' ),
		'section'     => 'header_light_logo_section',
		'default'     => '',
		'active_callback' => [
			[
				'setting'  => 'anzu_mobile_light_logo_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Image(
	[
		'settings'    => 'anzu_retina_mobile_light_logo',
		'label'       => esc_html__( 'Retina Logo For Mobile Devices', 'anzu' ),
		'description' => esc_html__( 'Select a retina logo twice the normal logo size.', 'anzu' ),
		'section'     => 'header_light_logo_section',
		'default'     => '',
		'active_callback' => [
			[
				'setting'  => 'anzu_retina_light_logo_switch',
				'operator' => '==',
				'value'    => true,
			],
			[
				'setting'  => 'anzu_mobile_light_logo_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Image(
	[
		'settings'    => 'anzu_transparent_light_logo',
		'label'       => esc_html__( 'Logo For Transparent Header', 'anzu' ),
		'description' => esc_html__( 'Select logo.', 'anzu' ),
		'section'     => 'header_light_logo_section',
		'default'     => '',
		'active_callback' => [
			[
				'setting'  => 'anzu_transparent_light_logo_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Image(
	[
		'settings'    => 'anzu_retina_transparent_light_logo',
		'label'       => esc_html__( 'Retina Logo For Transparent Header', 'anzu' ),
		'description' => esc_html__( 'Select a retina logo twice the normal logo size.', 'anzu' ),
		'section'     => 'header_light_logo_section',
		'default'     => '',
		'active_callback' => [
			[
				'setting'  => 'anzu_retina_light_logo_switch',
				'operator' => '==',
				'value'    => true,
			],
			[
				'setting'  => 'anzu_transparent_light_logo_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Image(
	[
		'settings'    => 'anzu_sticky_light_logo',
		'label'       => esc_html__( 'Logo For Sticky Header', 'anzu' ),
		'description' => esc_html__( 'Select logo.', 'anzu' ),
		'section'     => 'header_light_logo_section',
		'default'     => '',
		'active_callback' => [
			[
				'setting'  => 'anzu_sticky_light_logo_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Image(
	[
		'settings'    => 'anzu_retina_sticky_light_logo',
		'label'       => esc_html__( 'Retina Logo For Sticky Header', 'anzu' ),
		'description' => esc_html__( 'Select a retina logo twice the normal logo size.', 'anzu' ),
		'section'     => 'header_light_logo_section',
		'default'     => '',
		'active_callback' => [
			[
				'setting'  => 'anzu_retina_light_logo_switch',
				'operator' => '==',
				'value'    => true,
			],
			[
				'setting'  => 'anzu_sticky_light_logo_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);


/*-----------------------------------------------------------------------------------*/
/*  *.  header > header_dark_logo_section
/*-----------------------------------------------------------------------------------*/

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'anzu_retina_dark_logo_switch',
		'label'       => esc_html__( 'Different Logo For Retina Devices?', 'anzu' ),
		'section'     => 'header_dark_logo_section',
		'default'     => false,
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'anzu_mobile_dark_logo_switch',
		'label'       => esc_html__( 'Different Logo For Mobile Devices?', 'anzu' ),
		'section'     => 'header_dark_logo_section',
		'default'     => false,
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'anzu_transparent_dark_logo_switch',
		'label'       => esc_html__( 'Different Logo for Transparent Header?', 'anzu' ),
		'section'     => 'header_dark_logo_section',
		'default'     => false,
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'anzu_sticky_dark_logo_switch',
		'label'       => esc_html__( 'Different Logo for Sticky Header?', 'anzu' ),
		'section'     => 'header_dark_logo_section',
		'default'     => false,
	]
);

new \Kirki\Field\Image(
	[
		'settings'    => 'anzu_dark_logo',
		'label'       => esc_html__( 'Logo', 'anzu' ),
		'description' => esc_html__( 'Select logo.', 'anzu' ),
		'section'     => 'header_dark_logo_section',
		'default'     => '',
	]
);

new \Kirki\Field\Image(
	[
		'settings'    => 'anzu_retina_dark_logo',
		'label'       => esc_html__( 'Retina Logo', 'anzu' ),
		'description' => esc_html__( 'Select a retina logo twice the normal logo size.', 'anzu' ),
		'section'     => 'header_dark_logo_section',
		'default'     => '',
		'active_callback' => [
			[
				'setting'  => 'anzu_retina_dark_logo_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Image(
	[
		'settings'    => 'anzu_mobile_dark_logo',
		'label'       => esc_html__( 'Logo For Mobile Devices', 'anzu' ),
		'description' => esc_html__( 'Select logo.', 'anzu' ),
		'section'     => 'header_dark_logo_section',
		'default'     => '',
		'active_callback' => [
			[
				'setting'  => 'anzu_mobile_dark_logo_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Image(
	[
		'settings'    => 'anzu_retina_mobile_dark_logo',
		'label'       => esc_html__( 'Retina Logo For Mobile Devices', 'anzu' ),
		'description' => esc_html__( 'Select a retina logo twice the normal logo size.', 'anzu' ),
		'section'     => 'header_dark_logo_section',
		'default'     => '',
		'active_callback' => [
			[
				'setting'  => 'anzu_retina_dark_logo_switch',
				'operator' => '==',
				'value'    => true,
			],
			[
				'setting'  => 'anzu_mobile_dark_logo_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Image(
	[
		'settings'    => 'anzu_transparent_dark_logo',
		'label'       => esc_html__( 'Logo For Transparent Header', 'anzu' ),
		'description' => esc_html__( 'Select logo.', 'anzu' ),
		'section'     => 'header_dark_logo_section',
		'default'     => '',
		'active_callback' => [
			[
				'setting'  => 'anzu_transparent_dark_logo_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Image(
	[
		'settings'    => 'anzu_retina_transparent_dark_logo',
		'label'       => esc_html__( 'Retina Logo For Transparent Header', 'anzu' ),
		'description' => esc_html__( 'Select a retina logo twice the normal logo size.', 'anzu' ),
		'section'     => 'header_dark_logo_section',
		'default'     => '',
		'active_callback' => [
			[
				'setting'  => 'anzu_retina_dark_logo_switch',
				'operator' => '==',
				'value'    => true,
			],
			[
				'setting'  => 'anzu_transparent_dark_logo_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Image(
	[
		'settings'    => 'anzu_sticky_dark_logo',
		'label'       => esc_html__( 'Logo For Sticky Header', 'anzu' ),
		'description' => esc_html__( 'Select logo.', 'anzu' ),
		'section'     => 'header_dark_logo_section',
		'default'     => '',
		'active_callback' => [
			[
				'setting'  => 'anzu_sticky_dark_logo_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Image(
	[
		'settings'    => 'anzu_retina_sticky_dark_logo',
		'label'       => esc_html__( 'Retina Logo For Sticky Header', 'anzu' ),
		'description' => esc_html__( 'Select a retina logo twice the normal logo size.', 'anzu' ),
		'section'     => 'header_dark_logo_section',
		'default'     => '',
		'active_callback' => [
			[
				'setting'  => 'anzu_retina_dark_logo_switch',
				'operator' => '==',
				'value'    => true,
			],
			[
				'setting'  => 'anzu_sticky_dark_logo_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);


/*-----------------------------------------------------------------------------------*/
/*  *.  header > transparent_header_section
/*-----------------------------------------------------------------------------------*/

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'anzu_transparent_header_switch',
		'label'       => esc_html__( 'Enable Transparent Header', 'anzu' ),
		'section'     => 'transparent_header_section',
		'default'     => false,
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'anzu_transparent_header_pages',
		'label'       => esc_html__( 'Pages', 'anzu' ),
		'section'     => 'transparent_header_section',
		'default'     => true,
		'active_callback' => [
			[
				'setting'  => 'anzu_transparent_header_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'anzu_transparent_header_posts',
		'label'       => esc_html__( 'Posts', 'anzu' ),
		'section'     => 'transparent_header_section',
		'default'     => true,
		'active_callback' => [
			[
				'setting'  => 'anzu_transparent_header_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'anzu_transparent_header_blog_page',
		'label'       => esc_html__( 'Blog Page', 'anzu' ),
		'section'     => 'transparent_header_section',
		'default'     => false,
		'active_callback' => [
			[
				'setting'  => 'anzu_transparent_header_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'anzu_transparent_header_404_archives_search',
		'label'       => esc_html__( '404, Archives and Search', 'anzu' ),
		'section'     => 'transparent_header_section',
		'default'     => false,
		'active_callback' => [
			[
				'setting'  => 'anzu_transparent_header_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);

new \Kirki\Field\Select(
	[
		'settings'    => 'anzu_transparent_header_theme_color',
		'label'       => esc_html__( 'Theme Color', 'anzu' ),
		'description'    => esc_html__( 'Select colors of texts, links and icons that best fit the background page.', 'anzu' ),
		'section'     => 'transparent_header_section',
		'default'     => 'anzu-transparent-header--theme-dark-mode',
		'choices'     => [
			'anzu-transparent-header--theme-light-mode' => esc_html__( 'Light Mode', 'anzu' ),
			'anzu-transparent-header--theme-dark-mode' => esc_html__( 'Dark Mode', 'anzu' ),
		],
		'active_callback' => [
			[
				'setting'  => 'anzu_transparent_header_switch',
				'operator' => '==',
				'value'    => true,
			]
		],
	]
);


/*-----------------------------------------------------------------------------------*/
/*  *.  header > sticky_header_section
/*-----------------------------------------------------------------------------------*/

if ( is_object( $anzu_license ) && $anzu_license->get_api_key_status() ) {

	Kirki::add_section( 'sticky_header_section', array(
		'title'          => esc_html__( 'Sticky Header', 'anzu' ),
		'panel'          => 'header',
		'priority'       => 160,
	) );

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'anzu_sticky_header_switch',
			'label'       => esc_html__( 'Enable Sticky Header', 'anzu' ),
			'section'     => 'sticky_header_section',
			'default'     => false,
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'anzu_sticky_header_pages',
			'label'       => esc_html__( 'Pages', 'anzu' ),
			'section'     => 'sticky_header_section',
			'default'     => true,
			'active_callback' => [
				[
					'setting'  => 'anzu_sticky_header_switch',
					'operator' => '==',
					'value'    => true,
				]
			],
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'anzu_sticky_header_posts',
			'label'       => esc_html__( 'Posts', 'anzu' ),
			'section'     => 'sticky_header_section',
			'default'     => true,
			'active_callback' => [
				[
					'setting'  => 'anzu_sticky_header_switch',
					'operator' => '==',
					'value'    => true,
				]
			],
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'anzu_sticky_header_blog_page',
			'label'       => esc_html__( 'Blog Page', 'anzu' ),
			'section'     => 'sticky_header_section',
			'default'     => false,
			'active_callback' => [
				[
					'setting'  => 'anzu_sticky_header_switch',
					'operator' => '==',
					'value'    => true,
				]
			],
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'anzu_sticky_header_404_archives_search',
			'label'       => esc_html__( '404, Archives and Search', 'anzu' ),
			'section'     => 'sticky_header_section',
			'default'     => false,
			'active_callback' => [
				[
					'setting'  => 'anzu_sticky_header_switch',
					'operator' => '==',
					'value'    => true,
				]
			],
		]
	);

	new \Kirki\Field\Select(
		[
			'settings'    => 'anzu_sticky_header_background_on_scroll',
			'label'       => esc_html__( 'Background On Scroll', 'anzu' ),
			'section'     => 'sticky_header_section',
			'default'     => 'anzu-sticky-header--background-default',
			'choices'     => [
				'anzu-sticky-header--background-default' => esc_html__( 'Default', 'anzu' ),
				'anzu-sticky-header--background-transparent' => esc_html__( 'Transparent', 'anzu' ),
				'anzu-sticky-header--background-blurred' => esc_html__( 'Blurred', 'anzu' ),
			],
			'active_callback' => [
				[
					'setting'  => 'anzu_sticky_header_switch',
					'operator' => '==',
					'value'    => true,
				]
			],
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'anzu_sticky_header_background_on_scroll_custom_color',
			'label'       => __( 'Background Color', 'anzu' ),
			'section'     => 'sticky_header_section',
			'default'     => '#0000FF',
			'choices'     => [
				'alpha' => true,
			],
			'active_callback' => [
				[
					'setting'  => 'anzu_sticky_header_background_on_scroll',
					'operator' => '==',
					'value'    => 'anzu-sticky-header--background-on-scroll-custom',
				]
			],
			'output' => array(
				array(
					'element'  => '.desktop-device .anzu-transparent-header',
					'property' => 'background-color',
				),
			),
		]
	);

}