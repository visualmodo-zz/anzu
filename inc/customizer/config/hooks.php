<?php

/*-----------------------------------------------------------------------------------*/
/*  *.  Hooks
/*-----------------------------------------------------------------------------------*/

if ( is_object( $anzu_license ) && $anzu_license->get_api_key_status() ) {

	Kirki::add_panel( 'hooks', array(
		'priority'    => 10,
		'title'       => esc_html__( 'Hooks', 'anzu' ),
	) );

	Kirki::add_section( 'hooks_header_section_html', array(
		'title'          => esc_html__( 'Header HTML', 'anzu' ),
		'panel'          => 'hooks',
		'priority'       => 160,
	) );

	Kirki::add_section( 'hooks_header_section_css', array(
		'title'          => esc_html__( 'Header CSS', 'anzu' ),
		'panel'          => 'hooks',
		'priority'       => 160,
	) );

	Kirki::add_section( 'hooks_header_section_js', array(
		'title'          => esc_html__( 'Header JS', 'anzu' ),
		'panel'          => 'hooks',
		'priority'       => 160,
	) );

	Kirki::add_section( 'hooks_content_section_html', array(
		'title'          => esc_html__( 'Content HTML', 'anzu' ),
		'panel'          => 'hooks',
		'priority'       => 160,
	) );

	Kirki::add_section( 'hooks_content_section_css', array(
		'title'          => esc_html__( 'Content CSS', 'anzu' ),
		'panel'          => 'hooks',
		'priority'       => 160,
	) );

	Kirki::add_section( 'hooks_content_section_js', array(
		'title'          => esc_html__( 'Content JS', 'anzu' ),
		'panel'          => 'hooks',
		'priority'       => 160,
	) );

	Kirki::add_section( 'hooks_comments_section_html', array(
		'title'          => esc_html__( 'Comments HTML', 'anzu' ),
		'panel'          => 'hooks',
		'priority'       => 160,
	) );

	Kirki::add_section( 'hooks_comments_section_css', array(
		'title'          => esc_html__( 'Comments CSS', 'anzu' ),
		'panel'          => 'hooks',
		'priority'       => 160,
	) );

	Kirki::add_section( 'hooks_comments_section_js', array(
		'title'          => esc_html__( 'Comments JS', 'anzu' ),
		'panel'          => 'hooks',
		'priority'       => 160,
	) );

	Kirki::add_section( 'hooks_sidebar_section_html', array(
		'title'          => esc_html__( 'Sidebar HTML', 'anzu' ),
		'panel'          => 'hooks',
		'priority'       => 160,
	) );

	Kirki::add_section( 'hooks_sidebar_section_css', array(
		'title'          => esc_html__( 'Sidebar CSS', 'anzu' ),
		'panel'          => 'hooks',
		'priority'       => 160,
	) );

	Kirki::add_section( 'hooks_sidebar_section_js', array(
		'title'          => esc_html__( 'Sidebar JS', 'anzu' ),
		'panel'          => 'hooks',
		'priority'       => 160,
	) );

	Kirki::add_section( 'hooks_footer_section_html', array(
		'title'          => esc_html__( 'Footer HTML', 'anzu' ),
		'panel'          => 'hooks',
		'priority'       => 160,
	) );

	Kirki::add_section( 'hooks_footer_section_css', array(
		'title'          => esc_html__( 'Footer CSS', 'anzu' ),
		'panel'          => 'hooks',
		'priority'       => 160,
	) );

	Kirki::add_section( 'hooks_footer_section_js', array(
		'title'          => esc_html__( 'Footer JS', 'anzu' ),
		'panel'          => 'hooks',
		'priority'       => 160,
	) );

	// HTML

	new \Kirki\Field\Code(
		[
			'settings'    => 'anzu_hooks_header_html_wp_head',
			'label'       => esc_html__( 'wp_head', 'anzu' ),
			'section'     => 'hooks_header_section_html',
			'default'     => '',
			'choices'     => [
				'language' => 'html',
			],
		]
	);

	new \Kirki\Field\Code(
		[
			'settings'    => 'anzu_hooks_header_html_before',
			'label'       => esc_html__( 'Before Header', 'anzu' ),
			'section'     => 'hooks_header_section_html',
			'default'     => '',
			'choices'     => [
				'language' => 'html',
			],
		]
	);

	new \Kirki\Field\Code(
		[
			'settings'    => 'anzu_hooks_header_html_after',
			'label'       => esc_html__( 'After Header', 'anzu' ),
			'section'     => 'hooks_header_section_html',
			'default'     => '',
			'choices'     => [
				'language' => 'html',
			],
		]
	);

	new \Kirki\Field\Code(
		[
			'settings'    => 'anzu_hooks_footer_html_wp_footer',
			'label'       => esc_html__( 'wp_footer', 'anzu' ),
			'section'     => 'hooks_footer_section_html',
			'default'     => '',
			'choices'     => [
				'language' => 'html',
			],
		]
	);

	new \Kirki\Field\Code(
		[
			'settings'    => 'anzu_hooks_content_html_before',
			'label'       => esc_html__( 'Before Content', 'anzu' ),
			'section'     => 'hooks_content_section_html',
			'default'     => '',
			'choices'     => [
				'language' => 'html',
			],
		]
	);

	new \Kirki\Field\Code(
		[
			'settings'    => 'anzu_hooks_content_html_after',
			'label'       => esc_html__( 'After Content', 'anzu' ),
			'section'     => 'hooks_content_section_html',
			'default'     => '',
			'choices'     => [
				'language' => 'html',
			],
		]
	);

	new \Kirki\Field\Code(
		[
			'settings'    => 'anzu_hooks_comments_html_before',
			'label'       => esc_html__( 'Before Comments', 'anzu' ),
			'section'     => 'hooks_comments_section_html',
			'default'     => '',
			'choices'     => [
				'language' => 'html',
			],
		]
	);

	new \Kirki\Field\Code(
		[
			'settings'    => 'anzu_hooks_comments_html_after',
			'label'       => esc_html__( 'After Comments', 'anzu' ),
			'section'     => 'hooks_comments_section_html',
			'default'     => '',
			'choices'     => [
				'language' => 'html',
			],
		]
	);

	new \Kirki\Field\Code(
		[
			'settings'    => 'anzu_hooks_sidebar_html_before',
			'label'       => esc_html__( 'Before Sidebar', 'anzu' ),
			'section'     => 'hooks_sidebar_section_html',
			'default'     => '',
			'choices'     => [
				'language' => 'html',
			],
		]
	);

	new \Kirki\Field\Code(
		[
			'settings'    => 'anzu_hooks_sidebar_html_after',
			'label'       => esc_html__( 'After Sidebar', 'anzu' ),
			'section'     => 'hooks_sidebar_section_html',
			'default'     => '',
			'choices'     => [
				'language' => 'html',
			],
		]
	);

	new \Kirki\Field\Code(
		[
			'settings'    => 'anzu_hooks_footer_html_before',
			'label'       => esc_html__( 'Before Footer', 'anzu' ),
			'section'     => 'hooks_footer_section_html',
			'default'     => '',
			'choices'     => [
				'language' => 'html',
			],
		]
	);

	new \Kirki\Field\Code(
		[
			'settings'    => 'anzu_hooks_footer_html_after',
			'label'       => esc_html__( 'After Footer', 'anzu' ),
			'section'     => 'hooks_footer_section_html',
			'default'     => '',
			'choices'     => [
				'language' => 'html',
			],
		]
	);

	// CSS

	new \Kirki\Field\Code(
		[
			'settings'    => 'anzu_hooks_header_css_wp_head',
			'label'       => esc_html__( 'wp_head', 'anzu' ),
			'section'     => 'hooks_header_section_css',
			'default'     => '',
			'choices'     => [
				'language' => 'css',
			],
		]
	);

	new \Kirki\Field\Code(
		[
			'settings'    => 'anzu_hooks_header_css_before',
			'label'       => esc_html__( 'Before Header', 'anzu' ),
			'section'     => 'hooks_header_section_css',
			'default'     => '',
			'choices'     => [
				'language' => 'css',
			],
		]
	);

	new \Kirki\Field\Code(
		[
			'settings'    => 'anzu_hooks_header_css_after',
			'label'       => esc_html__( 'After Header', 'anzu' ),
			'section'     => 'hooks_header_section_css',
			'default'     => '',
			'choices'     => [
				'language' => 'css',
			],
		]
	);

	new \Kirki\Field\Code(
		[
			'settings'    => 'anzu_hooks_footer_css_wp_footer',
			'label'       => esc_html__( 'wp_footer', 'anzu' ),
			'section'     => 'hooks_footer_section_css',
			'default'     => '',
			'choices'     => [
				'language' => 'css',
			],
		]
	);

	new \Kirki\Field\Code(
		[
			'settings'    => 'anzu_hooks_content_css_before',
			'label'       => esc_html__( 'Before Content', 'anzu' ),
			'section'     => 'hooks_content_section_css',
			'default'     => '',
			'choices'     => [
				'language' => 'css',
			],
		]
	);

	new \Kirki\Field\Code(
		[
			'settings'    => 'anzu_hooks_content_css_after',
			'label'       => esc_html__( 'After Content', 'anzu' ),
			'section'     => 'hooks_content_section_css',
			'default'     => '',
			'choices'     => [
				'language' => 'css',
			],
		]
	);

	new \Kirki\Field\Code(
		[
			'settings'    => 'anzu_hooks_comments_css_before',
			'label'       => esc_html__( 'Before Comments', 'anzu' ),
			'section'     => 'hooks_comments_section_css',
			'default'     => '',
			'choices'     => [
				'language' => 'css',
			],
		]
	);

	new \Kirki\Field\Code(
		[
			'settings'    => 'anzu_hooks_comments_css_after',
			'label'       => esc_html__( 'After Comments', 'anzu' ),
			'section'     => 'hooks_comments_section_css',
			'default'     => '',
			'choices'     => [
				'language' => 'css',
			],
		]
	);

	new \Kirki\Field\Code(
		[
			'settings'    => 'anzu_hooks_sidebar_css_before',
			'label'       => esc_html__( 'Before Sidebar', 'anzu' ),
			'section'     => 'hooks_sidebar_section_css',
			'default'     => '',
			'choices'     => [
				'language' => 'css',
			],
		]
	);

	new \Kirki\Field\Code(
		[
			'settings'    => 'anzu_hooks_sidebar_css_after',
			'label'       => esc_html__( 'After Sidebar', 'anzu' ),
			'section'     => 'hooks_sidebar_section_css',
			'default'     => '',
			'choices'     => [
				'language' => 'css',
			],
		]
	);

	new \Kirki\Field\Code(
		[
			'settings'    => 'anzu_hooks_footer_css_before',
			'label'       => esc_html__( 'Before Footer', 'anzu' ),
			'section'     => 'hooks_footer_section_css',
			'default'     => '',
			'choices'     => [
				'language' => 'css',
			],
		]
	);

	new \Kirki\Field\Code(
		[
			'settings'    => 'anzu_hooks_footer_css_after',
			'label'       => esc_html__( 'After Footer', 'anzu' ),
			'section'     => 'hooks_footer_section_css',
			'default'     => '',
			'choices'     => [
				'language' => 'css',
			],
		]
	);

	// JS

	new \Kirki\Field\Code(
		[
			'settings'    => 'anzu_hooks_header_js_wp_head',
			'label'       => esc_html__( 'wp_head', 'anzu' ),
			'section'     => 'hooks_header_section_js',
			'default'     => '',
			'choices'     => [
				'language' => 'js',
			],
		]
	);

	new \Kirki\Field\Code(
		[
			'settings'    => 'anzu_hooks_header_js_before',
			'label'       => esc_html__( 'Before Header', 'anzu' ),
			'section'     => 'hooks_header_section_js',
			'default'     => '',
			'choices'     => [
				'language' => 'js',
			],
		]
	);

	new \Kirki\Field\Code(
		[
			'settings'    => 'anzu_hooks_header_js_after',
			'label'       => esc_html__( 'After Header', 'anzu' ),
			'section'     => 'hooks_header_section_js',
			'default'     => '',
			'choices'     => [
				'language' => 'js',
			],
		]
	);

	new \Kirki\Field\Code(
		[
			'settings'    => 'anzu_hooks_footer_js_wp_footer',
			'label'       => esc_html__( 'wp_footer', 'anzu' ),
			'section'     => 'hooks_footer_section_js',
			'default'     => '',
			'choices'     => [
				'language' => 'js',
			],
		]
	);

	new \Kirki\Field\Code(
		[
			'settings'    => 'anzu_hooks_content_js_before',
			'label'       => esc_html__( 'Before Content', 'anzu' ),
			'section'     => 'hooks_content_section_js',
			'default'     => '',
			'choices'     => [
				'language' => 'js',
			],
		]
	);

	new \Kirki\Field\Code(
		[
			'settings'    => 'anzu_hooks_content_js_after',
			'label'       => esc_html__( 'After Content', 'anzu' ),
			'section'     => 'hooks_content_section_js',
			'default'     => '',
			'choices'     => [
				'language' => 'js',
			],
		]
	);

	new \Kirki\Field\Code(
		[
			'settings'    => 'anzu_hooks_comments_js_before',
			'label'       => esc_html__( 'Before Comments', 'anzu' ),
			'section'     => 'hooks_comments_section_js',
			'default'     => '',
			'choices'     => [
				'language' => 'js',
			],
		]
	);

	new \Kirki\Field\Code(
		[
			'settings'    => 'anzu_hooks_comments_js_after',
			'label'       => esc_html__( 'After Comments', 'anzu' ),
			'section'     => 'hooks_comments_section_js',
			'default'     => '',
			'choices'     => [
				'language' => 'js',
			],
		]
	);

	new \Kirki\Field\Code(
		[
			'settings'    => 'anzu_hooks_sidebar_js_before',
			'label'       => esc_html__( 'Before Sidebar', 'anzu' ),
			'section'     => 'hooks_sidebar_section_js',
			'default'     => '',
			'choices'     => [
				'language' => 'js',
			],
		]
	);

	new \Kirki\Field\Code(
		[
			'settings'    => 'anzu_hooks_sidebar_js_after',
			'label'       => esc_html__( 'After Sidebar', 'anzu' ),
			'section'     => 'hooks_sidebar_section_js',
			'default'     => '',
			'choices'     => [
				'language' => 'js',
			],
		]
	);

	new \Kirki\Field\Code(
		[
			'settings'    => 'anzu_hooks_footer_js_before',
			'label'       => esc_html__( 'Before Footer', 'anzu' ),
			'section'     => 'hooks_footer_section_js',
			'default'     => '',
			'choices'     => [
				'language' => 'js',
			],
		]
	);

	new \Kirki\Field\Code(
		[
			'settings'    => 'anzu_hooks_footer_js_after',
			'label'       => esc_html__( 'After Footer', 'anzu' ),
			'section'     => 'hooks_footer_section_js',
			'default'     => '',
			'choices'     => [
				'language' => 'js',
			],
		]
	);

}