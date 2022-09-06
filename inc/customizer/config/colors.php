<?php

/*-----------------------------------------------------------------------------------*/
/*  *.  Colors
/*-----------------------------------------------------------------------------------*/

Kirki::add_panel( 'colors', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Colors', 'anzu' ),
    'description' => esc_html__( 'The color system can help you create a color theme that reflects your brand or style.', 'anzu' ),
) );

Kirki::add_section( 'theme_colors_section', array(
    'title'          => esc_html__( 'Theme Color', 'anzu' ),
    'panel'          => 'colors',
	'description'    => esc_html__( 'The color system can help you create a color theme that reflects your brand or style.', 'anzu' ),
    'priority'       => 160,
) );

Kirki::add_section( 'light_colors_section', array(
    'title'          => esc_html__( 'Light Colors', 'anzu' ),
    'description'    => esc_html__( 'Create and apply color palettes to your UI, as well as measure the accessibility level of any color combination.', 'anzu' ),
    'panel'          => 'colors',
    'priority'       => 160,
) );

Kirki::add_section( 'dark_colors_section', array(
    'title'          => esc_html__( 'Dark Colors', 'anzu' ),
    'description'    => esc_html__( 'Create and apply color palettes to your UI, as well as measure the accessibility level of any color combination.', 'anzu' ),
    'panel'          => 'colors',
    'priority'       => 160,
) );


/*-----------------------------------------------------------------------------------*/
/*  *.  colors > theme_colors_section
/*-----------------------------------------------------------------------------------*/

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'anzu_header_dark_mode',
		'label'       => esc_html__( 'Header Dark Mode', 'anzu' ),
		'section'     => 'theme_colors_section',
		'default'     => false,
	]
);

/*
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'anzu_hero_dark_mode',
		'label'       => esc_html__( 'Hero Dark Mode', 'anzu' ),
		'section'     => 'theme_colors_section',
		'default'     => false,
	]
);
*/

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'anzu_content_dark_mode',
		'label'       => esc_html__( 'Content Dark Mode', 'anzu' ),
		'section'     => 'theme_colors_section',
		'default'     => false,
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'anzu_footer_dark_mode',
		'label'       => esc_html__( 'Footer Dark Mode', 'anzu' ),
		'section'     => 'theme_colors_section',
		'default'     => true,
	]
);


/*-----------------------------------------------------------------------------------*/
/*  *.  colors > light_colors_section
/*-----------------------------------------------------------------------------------*/

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
				'element'  => '
				.anzu-primary-color--color, 
				.anzu-light-mode a.anzu-brand__title,
				.anzu-light-mode #main-menu .nav-item.active .nav-link, 
				.anzu-light-mode #main-menu .nav-item:not(.active):hover > .nav-link, 
				.anzu-light-mode #main-menu .dropdown .dropdown-item:hover, 
				.anzu-light-mode article.post .entry-title a:hover',
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
			array(
				'element'  => '#scroll-to-top',
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
				'element'  => '.anzu-light-mode .anzu-secondary-color--color',
				'property' => 'color',
			),
			array(
				'element'  => '.anzu-light-mode .anzu-secondary-color--background-color',
				'property' => 'background-color',
			),
			array(
				'element'  => '.anzu-light-mode .anzu-secondary-color--border-color',
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
				'element'  => '.anzu-light-mode .anzu-tertiary-color--color',
				'property' => 'color',
			),
			array(
				'element'  => '.anzu-light-mode .anzu-tertiary-color--background-color',
				'property' => 'background-color',
			),
			array(
				'element'  => '.anzu-light-mode .anzu-tertiary-color--border-color',
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
				'element'  => 'body .anzu-light-mode, .anzu-light-mode p, .anzu-light-mode span',
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
				'element'  => '
				.anzu-light-mode .anzu-brand__title,
				.anzu-light-mode .anzu-brand__tagline,
				.anzu-light-mode h1, 
				.anzu-light-mode h2, 
				.anzu-light-mode h3, 
				.anzu-light-mode h4, 
				.anzu-light-mode h5, 
				.anzu-light-mode h6',
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
				'element'  => '.anzu-light-mode a:not(.btn)',
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
				'element'  => '.anzu-light-mode a:hover:not(.btn)',
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
				'element'  => '.anzu-light-mode a:active:not(.btn)',
				'property' => 'color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_light_colors_background_notification_header',
		'label'       => __( 'Background Notification Bar', 'anzu' ),
		'description' => esc_html__( 'Pick a background light color for the theme.', 'anzu' ),
		'section'     => 'light_colors_section',
		'default'     => '#e2e3e5',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.anzu-notification-bar.anzu-light-mode',
				'property' => 'background-color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_light_colors_background_header',
		'label'       => __( 'Background Header', 'anzu' ),
		'description' => esc_html__( 'Pick a background light color for the theme.', 'anzu' ),
		'section'     => 'light_colors_section',
		'default'     => '#FFFFFF',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.anzu-header.anzu-light-mode',
				'property' => 'background-color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_light_colors_background_content',
		'label'       => __( 'Background Content', 'anzu' ),
		'description' => esc_html__( 'Pick a background light color for the theme.', 'anzu' ),
		'section'     => 'light_colors_section',
		'default'     => '#FFFFFF',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.anzu-content.anzu-light-mode',
				'property' => 'background-color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_light_colors_background_footer',
		'label'       => __( 'Background Footer', 'anzu' ),
		'description' => esc_html__( 'Pick a background light color for the theme.', 'anzu' ),
		'section'     => 'light_colors_section',
		'default'     => '#FFFFFF',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '#anzu-footer.anzu-light-mode',
				'property' => 'background-color',
			),
		),
	]
);


/*-----------------------------------------------------------------------------------*/
/*  *.  colors > dark_colors_section
/*-----------------------------------------------------------------------------------*/

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_dark_colors_primary_color',
		'label'       => __( 'Primary Color', 'anzu' ),
		'description' => esc_html__( 'Pick a primary color for the theme.', 'anzu' ),
		'section'     => 'dark_colors_section',
		'default'     => '#0000FF',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '
				.anzu-primary-color--color, 
				.anzu-dark-mode a.anzu-brand__url,
				.anzu-dark-mode #main-menu .nav-item.active .nav-link, 
				.anzu-dark-mode #main-menu .nav-item:not(.active):hover > .nav-link, 
				.anzu-dark-mode #main-menu .dropdown .dropdown-item:hover, 
				.anzu-dark-mode article.post .entry-title a:hover',
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
		'settings'    => 'anzu_dark_colors_secondary_color',
		'label'       => __( 'Secondary Color', 'anzu' ),
		'description' => esc_html__( 'Pick a secondary color for the theme.', 'anzu' ),
		'section'     => 'dark_colors_section',
		'default'     => '#FF6819',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.anzu-dark-mode .anzu-secondary-color--color',
				'property' => 'color',
			),
			array(
				'element'  => '.anzu-dark-mode .anzu-secondary-color--background-color',
				'property' => 'background-color',
			),
			array(
				'element'  => '.anzu-dark-mode .anzu-secondary-color--border-color',
				'property' => 'background-color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_dark_colors_tertiary_color',
		'label'       => __( 'Tertiary Color', 'anzu' ),
		'description' => esc_html__( 'Pick a tertiary color for the theme.', 'anzu' ),
		'section'     => 'dark_colors_section',
		'default'     => '#3FCC14',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.anzu-dark-mode .anzu-tertiary-color--color',
				'property' => 'color',
			),
			array(
				'element'  => '.anzu-dark-mode .anzu-tertiary-color--background-color',
				'property' => 'background-color',
			),
			array(
				'element'  => '.anzu-dark-mode .anzu-tertiary-color--border-color',
				'property' => 'background-color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_dark_colors_text_color',
		'label'       => __( 'Text', 'anzu' ),
		'description' => esc_html__( 'It will apply to all the texts.', 'anzu' ),
		'section'     => 'dark_colors_section',
		'default'     => '#cccccc',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => 'body .anzu-dark-mode, .anzu-dark-mode p, .anzu-dark-mode span',
				'property' => 'color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_dark_colors_heading_color',
		'label'       => __( 'Heading (H1 - H6)', 'anzu' ),
		'description' => esc_html__( 'It will apply to all the headings.', 'anzu' ),
		'section'     => 'dark_colors_section',
		'default'     => '#FFFFFF',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '
				.anzu-dark-mode .anzu-brand__title,
				.anzu-dark-mode .anzu-brand__tagline,
				.anzu-dark-mode h1, 
				.anzu-dark-mode h2, 
				.anzu-dark-mode h3, 
				.anzu-dark-mode h4, 
				.anzu-dark-mode h5, 
				.anzu-dark-mode h6',
				'property' => 'color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_dark_colors_link_color',
		'label'       => __( 'Link', 'anzu' ),
		'description' => esc_html__( 'It will apply to all the links.', 'anzu' ),
		'section'     => 'dark_colors_section',
		'default'     => '#0000FF',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.anzu-dark-mode a:not(.btn)',
				'property' => 'color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_dark_colors_link_hover_color',
		'label'       => __( 'Link Hover', 'anzu' ),
		'description' => esc_html__( 'It will apply to all the links.', 'anzu' ),
		'section'     => 'dark_colors_section',
		'default'     => '#0D4DFF',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.anzu-dark-mode a:hover:not(.btn)',
				'property' => 'color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_dark_colors_link_active_color',
		'label'       => __( 'Link Active', 'anzu' ),
		'description' => esc_html__( 'It will apply to all the links.', 'anzu' ),
		'section'     => 'dark_colors_section',
		'default'     => '#0D8CFF',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.anzu-dark-mode a:active:not(.btn)',
				'property' => 'color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_dark_colors_background_notification_header',
		'label'       => __( 'Background Notification Bar', 'anzu' ),
		'description' => esc_html__( 'Pick a background dark color for the theme.', 'anzu' ),
		'section'     => 'dark_colors_section',
		'default'     => '#000000',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.anzu-notification-bar.anzu-dark-mode',
				'property' => 'background-color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_dark_colors_background_header',
		'label'       => __( 'Background Header', 'anzu' ),
		'description' => esc_html__( 'Pick a background dark color for the theme.', 'anzu' ),
		'section'     => 'dark_colors_section',
		'default'     => '#000000',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.anzu-header.anzu-dark-mode',
				'property' => 'background-color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_dark_colors_background_content',
		'label'       => __( 'Background Content', 'anzu' ),
		'description' => esc_html__( 'Pick a background dark color for the theme.', 'anzu' ),
		'section'     => 'dark_colors_section',
		'default'     => '#000000',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.anzu-content.anzu-dark-mode',
				'property' => 'background-color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'anzu_dark_colors_background_footer',
		'label'       => __( 'Background Footer', 'anzu' ),
		'description' => esc_html__( 'Pick a background dark color for the theme.', 'anzu' ),
		'section'     => 'dark_colors_section',
		'default'     => '#000000',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '#anzu-footer.anzu-dark-mode',
				'property' => 'background-color',
			),
		),
	]
);