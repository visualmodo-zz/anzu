<?php
/**
 * Declaring widgets
 *
 * @package Anzu
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Head

function anzu_hooks_header_html_wp_head() {
	$anzu_hooks_header_html_wp_head = get_theme_mod( 'anzu_hooks_header_html_wp_head', '' );
	if (!empty($anzu_hooks_header_html_wp_head)) {
		echo $anzu_hooks_header_html_wp_head;
	}
}
add_action('wp_head', 'anzu_hooks_header_html_wp_head');

function anzu_hooks_header_css_wp_head() {
	$anzu_hooks_header_css_wp_head = get_theme_mod( 'anzu_hooks_header_css_wp_head', '' );
	if (!empty($anzu_hooks_header_css_wp_head)) {
		echo '<style type="text/css">'.$anzu_hooks_header_css_wp_head.'</style>';
	}
}
add_action('wp_head', 'anzu_hooks_header_css_wp_head');

function anzu_hooks_header_js_wp_head() {
	$anzu_hooks_header_js_wp_head = get_theme_mod( 'anzu_hooks_header_js_wp_head', '' );
	if (!empty($anzu_hooks_header_js_wp_head)) {
		echo '<script type="text/javascript">'.$anzu_hooks_header_js_wp_head.'</script>';
	}
}
add_action('wp_head', 'anzu_hooks_header_js_wp_head');


// Before Header

function anzu_hooks_header_html_before() {
	$anzu_hooks_header_html_before = get_theme_mod( 'anzu_hooks_header_html_before', '' );
	if (!empty($anzu_hooks_header_html_before)) {
		echo $anzu_hooks_header_html_before;
	}
}
add_action('anzu_hook_before_header', 'anzu_hooks_header_html_before');

function anzu_hooks_header_css_before() {
	$anzu_hooks_header_css_before = get_theme_mod( 'anzu_hooks_header_css_before', '' );
	if (!empty($anzu_hooks_header_css_before)) {
		echo '<style type="text/css">'.$anzu_hooks_header_css_before.'</style>';
	}
}
add_action('anzu_hook_before_header', 'anzu_hooks_header_css_before');

function anzu_hooks_header_js_before() {
	$anzu_hooks_header_js_before = get_theme_mod( 'anzu_hooks_header_js_before', '' );
	if (!empty($anzu_hooks_header_js_before)) {
		echo '<script type="text/javascript">'.$anzu_hooks_header_js_before.'</script>';
	}
}
add_action('anzu_hook_before_header', 'anzu_hooks_header_js_before');


// After Header

function anzu_hooks_header_html_after() {
	$anzu_hooks_header_html_after = get_theme_mod( 'anzu_hooks_header_html_after', '' );
	if (!empty($anzu_hooks_header_html_after)) {
		echo $anzu_hooks_header_html_after;
	}
}
add_action('anzu_hook_after_header', 'anzu_hooks_header_html_after');

function anzu_hooks_header_css_after() {
	$anzu_hooks_header_css_after = get_theme_mod( 'anzu_hooks_header_css_after', '' );
	if (!empty($anzu_hooks_header_css_after)) {
		echo '<style type="text/css">'.$anzu_hooks_header_css_after.'</style>';
	}
}
add_action('anzu_hook_after_header', 'anzu_hooks_header_css_after');

function anzu_hooks_header_js_after() {
	$anzu_hooks_header_js_after = get_theme_mod( 'anzu_hooks_header_js_after', '' );
	if (!empty($anzu_hooks_header_js_after)) {
		echo '<script type="text/javascript">'.$anzu_hooks_header_js_after.'</script>';
	}
}
add_action('anzu_hook_after_header', 'anzu_hooks_header_js_after');


// Footer

function anzu_hooks_footer_html_wp_footer() {
	$anzu_hooks_footer_html_wp_footer = get_theme_mod( 'anzu_hooks_footer_html_wp_footer', '' );
	if (!empty($anzu_hooks_footer_html_wp_footer)) {
		echo $anzu_hooks_footer_html_wp_footer;
	}
}
add_action('anzu_hook_after_header', 'anzu_hooks_footer_html_wp_footer');

function anzu_hooks_footer_css_wp_footer() {
	$anzu_hooks_footer_css_wp_footer = get_theme_mod( 'anzu_hooks_footer_css_wp_footer', '' );
	if (!empty($anzu_hooks_footer_css_wp_footer)) {
		echo '<style type="text/css">'.$anzu_hooks_footer_css_wp_footer.'</style>';
	}
}
add_action('wp_footer', 'anzu_hooks_footer_css_wp_footer');

function anzu_hooks_footer_js_wp_footer() {
	$anzu_hooks_footer_js_wp_footer = get_theme_mod( 'anzu_hooks_footer_js_wp_footer', '' );
	if (!empty($anzu_hooks_footer_js_wp_footer)) {
		echo '<script type="text/javascript">'.$anzu_hooks_footer_js_wp_footer.'</script>';
	}
}
add_action('wp_footer', 'anzu_hooks_footer_js_wp_footer');


// Before Footer

function anzu_hooks_footer_html_before() {
	$anzu_hooks_footer_html_before = get_theme_mod( 'anzu_hooks_footer_html_before', '' );
	if (!empty($anzu_hooks_footer_html_before)) {
		echo $anzu_hooks_footer_html_before;
	}
}
add_action('anzu_hook_after_header', 'anzu_hooks_footer_html_before');

function anzu_hooks_footer_css_before() {
	$anzu_hooks_footer_css_before = get_theme_mod( 'anzu_hooks_footer_css_before', '' );
	if (!empty($anzu_hooks_footer_css_before)) {
		echo '<style type="text/css">'.$anzu_hooks_footer_css_before.'</style>';
	}
}
add_action('anzu_hook_before_footer', 'anzu_hooks_footer_css_before');

function anzu_hooks_footer_js_before() {
	$anzu_hooks_footer_js_before = get_theme_mod( 'anzu_hooks_footer_js_before', '' );
	if (!empty($anzu_hooks_footer_js_before)) {
		echo '<script type="text/javascript">'.$anzu_hooks_footer_js_before.'</script>';
	}
}
add_action('anzu_hook_before_footer', 'anzu_hooks_footer_js_before');


// After Footer

function anzu_hooks_footer_html_after() {
	$anzu_hooks_footer_html_after = get_theme_mod( 'anzu_hooks_footer_html_after', '' );
	if (!empty($anzu_hooks_footer_html_after)) {
		echo $anzu_hooks_footer_html_after;
	}
}
add_action('anzu_hook_after_header', 'anzu_hooks_footer_html_after');

function anzu_hooks_footer_css_after() {
	$anzu_hooks_footer_css_after = get_theme_mod( 'anzu_hooks_footer_css_after', '' );
	if (!empty($anzu_hooks_footer_css_after)) {
		echo '<style type="text/css">'.$anzu_hooks_footer_css_after.'</style>';
	}
}
add_action('anzu_hook_after_footer', 'anzu_hooks_footer_css_after');

function anzu_hooks_footer_js_after() {
	$anzu_hooks_footer_js_after = get_theme_mod( 'anzu_hooks_footer_js_after', '' );
	if (!empty($anzu_hooks_footer_js_after)) {
		echo '<script type="text/javascript">'.$anzu_hooks_footer_js_after.'</script>';
	}
}
add_action('anzu_hook_after_footer', 'anzu_hooks_footer_js_after');


// Before Content

function anzu_hooks_content_html_before() {
	$anzu_hooks_content_html_before = get_theme_mod( 'anzu_hooks_content_html_before', '' );
	if (!empty($anzu_hooks_content_html_before)) {
		echo $anzu_hooks_content_html_before;
	}
}
add_action('anzu_hook_after_header', 'anzu_hooks_content_html_before');

function anzu_hooks_content_css_before() {
	$anzu_hooks_content_css_before = get_theme_mod( 'anzu_hooks_content_css_before', '' );
	if (!empty($anzu_hooks_content_css_before)) {
		echo '<style type="text/css">'.$anzu_hooks_content_css_before.'</style>';
	}
}
add_action('anzu_hook_before_content', 'anzu_hooks_content_css_before');

function anzu_hooks_content_js_before() {
	$anzu_hooks_content_js_before = get_theme_mod( 'anzu_hooks_content_js_before', '' );
	if (!empty($anzu_hooks_content_js_before)) {
		echo '<script type="text/javascript">'.$anzu_hooks_content_js_before.'</script>';
	}
}
add_action('anzu_hook_before_content', 'anzu_hooks_content_js_before');


// After Content

function anzu_hooks_content_html_after() {
	$anzu_hooks_content_html_after = get_theme_mod( 'anzu_hooks_content_html_after', '' );
	if (!empty($anzu_hooks_content_html_after)) {
		echo $anzu_hooks_content_html_after;
	}
}
add_action('anzu_hook_after_header', 'anzu_hooks_content_html_after');

function anzu_hooks_content_css_after() {
	$anzu_hooks_content_css_after = get_theme_mod( 'anzu_hooks_content_css_after', '' );
	if (!empty($anzu_hooks_content_css_after)) {
		echo '<style type="text/css">'.$anzu_hooks_content_css_after.'</style>';
	}
}
add_action('anzu_hook_after_content', 'anzu_hooks_content_css_after');

function anzu_hooks_content_js_after() {
	$anzu_hooks_content_js_after = get_theme_mod( 'anzu_hooks_content_js_after', '' );
	if (!empty($anzu_hooks_content_js_after)) {
		echo '<script type="text/javascript">'.$anzu_hooks_content_js_after.'</script>';
	}
}
add_action('anzu_hook_after_content', 'anzu_hooks_content_js_after');


// Before Comments

function anzu_hooks_comments_html_before() {
	$anzu_hooks_comments_html_before = get_theme_mod( 'anzu_hooks_comments_html_before', '' );
	if (!empty($anzu_hooks_comments_html_before)) {
		echo $anzu_hooks_comments_html_before;
	}
}
add_action('anzu_hook_after_header', 'anzu_hooks_comments_html_before');

function anzu_hooks_comments_css_before() {
	$anzu_hooks_comments_css_before = get_theme_mod( 'anzu_hooks_comments_css_before', '' );
	if (!empty($anzu_hooks_comments_css_before)) {
		echo '<style type="text/css">'.$anzu_hooks_comments_css_before.'</style>';
	}
}
add_action('anzu_hook_before_comments', 'anzu_hooks_comments_css_before');

function anzu_hooks_comments_js_before() {
	$anzu_hooks_comments_js_before = get_theme_mod( 'anzu_hooks_comments_js_before', '' );
	if (!empty($anzu_hooks_comments_js_before)) {
		echo '<script type="text/javascript">'.$anzu_hooks_comments_js_before.'</script>';
	}
}
add_action('anzu_hook_before_comments', 'anzu_hooks_comments_js_before');


// After Comments

function anzu_hooks_comments_html_after() {
	$anzu_hooks_comments_html_after = get_theme_mod( 'anzu_hooks_comments_html_after', '' );
	if (!empty($anzu_hooks_comments_html_after)) {
		echo $anzu_hooks_comments_html_after;
	}
}
add_action('anzu_hook_after_header', 'anzu_hooks_comments_html_after');

function anzu_hooks_comments_css_after() {
	$anzu_hooks_comments_css_after = get_theme_mod( 'anzu_hooks_comments_css_after', '' );
	if (!empty($anzu_hooks_comments_css_after)) {
		echo '<style type="text/css">'.$anzu_hooks_comments_css_after.'</style>';
	}
}
add_action('anzu_hook_after_comments', 'anzu_hooks_comments_css_after');

function anzu_hooks_comments_js_after() {
	$anzu_hooks_comments_js_after = get_theme_mod( 'anzu_hooks_comments_js_after', '' );
	if (!empty($anzu_hooks_comments_js_after)) {
		echo '<script type="text/javascript">'.$anzu_hooks_comments_js_after.'</script>';
	}
}
add_action('anzu_hook_after_comments', 'anzu_hooks_comments_js_after');


// Before Sidebar

function anzu_hooks_sidebar_html_before() {
	$anzu_hooks_sidebar_html_before = get_theme_mod( 'anzu_hooks_sidebar_html_before', '' );
	if (!empty($anzu_hooks_sidebar_html_before)) {
		echo $anzu_hooks_sidebar_html_before;
	}
}
add_action('anzu_hook_after_header', 'anzu_hooks_sidebar_html_before');

function anzu_hooks_sidebar_css_before() {
	$anzu_hooks_sidebar_css_before = get_theme_mod( 'anzu_hooks_sidebar_css_before', '' );
	if (!empty($anzu_hooks_sidebar_css_before)) {
		echo '<style type="text/css">'.$anzu_hooks_sidebar_css_before.'</style>';
	}
}
add_action('anzu_hook_before_sidebar', 'anzu_hooks_sidebar_css_before');

function anzu_hooks_sidebar_js_before() {
	$anzu_hooks_sidebar_js_before = get_theme_mod( 'anzu_hooks_sidebar_js_before', '' );
	if (!empty($anzu_hooks_sidebar_js_before)) {
		echo '<script type="text/javascript">'.$anzu_hooks_sidebar_js_before.'</script>';
	}
}
add_action('anzu_hook_before_sidebar', 'anzu_hooks_sidebar_js_before');


// After Sidebar

function anzu_hooks_sidebar_html_after() {
	$anzu_hooks_sidebar_html_after = get_theme_mod( 'anzu_hooks_sidebar_html_after', '' );
	if (!empty($anzu_hooks_sidebar_html_after)) {
		echo $anzu_hooks_sidebar_html_after;
	}
}
add_action('anzu_hook_after_header', 'anzu_hooks_sidebar_html_after');

function anzu_hooks_sidebar_css_after() {
	$anzu_hooks_sidebar_css_after = get_theme_mod( 'anzu_hooks_sidebar_css_after', '' );
	if (!empty($anzu_hooks_sidebar_css_after)) {
		echo '<style type="text/css">'.$anzu_hooks_sidebar_css_after.'</style>';
	}
}
add_action('anzu_hook_after_sidebar', 'anzu_hooks_sidebar_css_after');

function anzu_hooks_sidebar_js_after() {
	$anzu_hooks_sidebar_js_after = get_theme_mod( 'anzu_hooks_sidebar_js_after', '' );
	if (!empty($anzu_hooks_sidebar_js_after)) {
		echo '<script type="text/javascript">'.$anzu_hooks_sidebar_js_after.'</script>';
	}
}
add_action('anzu_hook_after_sidebar', 'anzu_hooks_sidebar_js_after');