<?php

/*-----------------------------------------------------------------------------------*/
/*  *.  Typography
/*-----------------------------------------------------------------------------------*/

Kirki::add_panel( 'typography', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Typography', 'anzu' ),
    'description' => esc_html__( 'Contains sections for all Anzu controls.', 'anzu' ),
) );

Kirki::add_section( 'typography_body', array(
    'title'          => esc_html__( 'Body', 'anzu' ),
    'description'    => esc_html__( 'These settings control the typography for all body text.', 'anzu' ),
    'panel'          => 'typography',
    'priority'       => 160,
) );

Kirki::add_section( 'typography_headings', array(
    'title'          => esc_html__( 'All Headings', 'anzu' ),
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

Kirki::add_section( 'typography_menu', array(
    'title'          => esc_html__( 'Menu', 'anzu' ),
    'panel'          => 'typography',
    'priority'       => 160,
) );

Kirki::add_section( 'typography_dropdown_menu', array(
    'title'          => esc_html__( 'Menu - Dropdown', 'anzu' ),
    'panel'          => 'typography',
    'priority'       => 160,
) );

Kirki::add_section( 'typography_page_title_section', array(
    'title'          => esc_html__( 'Page Title', 'anzu' ),
    'panel'          => 'typography',
    'priority'       => 160,
) );

Kirki::add_section( 'typography_page_subtitle_section', array(
    'title'          => esc_html__( 'Page Subtitle', 'anzu' ),
    'panel'          => 'typography',
    'priority'       => 160,
) );


/*-----------------------------------------------------------------------------------*/
/*  *.  typography > typography_body
/*-----------------------------------------------------------------------------------*/

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


/*-----------------------------------------------------------------------------------*/
/*  *.  typography > typography_headings
/*-----------------------------------------------------------------------------------*/

new \Kirki\Field\Typography(
	[
		'settings'    => 'anzu_typography_headings',
		'label'       => esc_html__( 'All Headings', 'anzu' ),
		'description' => esc_html__( 'These settings control the typography for all Headings.', 'anzu' ),
		'section'     => 'typography_headings',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => [
			'font-family'     => '',
			'variant'         => '',
			'text-transform'  => '',
		],
		'output'      => [
			[
				'element' => [ 'h1, h2, h3, h4, h5, h6' ],
			],
		],
	]
);


/*-----------------------------------------------------------------------------------*/
/*  *.  typography > anzu_typography_heading_1
/*-----------------------------------------------------------------------------------*/

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

/*-----------------------------------------------------------------------------------*/
/*  *.  typography > anzu_typography_heading_2
/*-----------------------------------------------------------------------------------*/

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


/*-----------------------------------------------------------------------------------*/
/*  *.  typography > anzu_typography_heading_3
/*-----------------------------------------------------------------------------------*/

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


/*-----------------------------------------------------------------------------------*/
/*  *.  typography > anzu_typography_heading_4
/*-----------------------------------------------------------------------------------*/

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


/*-----------------------------------------------------------------------------------*/
/*  *.  typography > anzu_typography_heading_5
/*-----------------------------------------------------------------------------------*/

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


/*-----------------------------------------------------------------------------------*/
/*  *.  typography > anzu_typography_heading_6
/*-----------------------------------------------------------------------------------*/

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


/*-----------------------------------------------------------------------------------*/
/*  *.  typography > typography_menu
/*-----------------------------------------------------------------------------------*/

new \Kirki\Field\Typography(
	[
		'settings'    => 'anzu_typography_menu',
		'label'       => esc_html__( 'Menu', 'anzu' ),
		'description' => esc_html__( 'These settings control the typography for all Menus.', 'anzu' ),
		'section'     => 'typography_menu',
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
				'element' => [ '.navbar-nav li a.nav-link' ],
			],
		],
	]
);


/*-----------------------------------------------------------------------------------*/
/*  *.  typography > typography_dropdown_menu
/*-----------------------------------------------------------------------------------*/

new \Kirki\Field\Typography(
	[
		'settings'    => 'anzu_typography_dropdown_menu',
		'label'       => esc_html__( 'Menu - Dropdown', 'anzu' ),
		'description' => esc_html__( 'These settings control the typography for all Dropdown Menu.', 'anzu' ),
		'section'     => 'typography_dropdown_menu',
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
				'element' => [ '.dropdown-menu li a.dropdown-item' ],
			],
		],
	]
);


/*-----------------------------------------------------------------------------------*/
/*  *.  typography > typography_page_title_section
/*-----------------------------------------------------------------------------------*/

new \Kirki\Field\Typography(
	[
		'settings'    => 'anzu_typography_page_title',
		'label'       => esc_html__( 'Typography', 'anzu' ),
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


/*-----------------------------------------------------------------------------------*/
/*  *.  typography > typography_page_subtitle_section
/*-----------------------------------------------------------------------------------*/

new \Kirki\Field\Typography(
	[
		'settings'    => 'anzu_typography_page_subtitle',
		'label'       => esc_html__( 'Page Subtitle', 'anzu' ),
		'description' => esc_html__( 'These settings control the typography of all page subtitles.', 'anzu' ),
		'section'     => 'typography_page_subtitle_section',
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
				'element' => [ '#page .anzu-hero__subtitle' ],
			],
		],
	]
);