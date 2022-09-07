<?php
/**
 * Recommends plugins for use with the theme via the TGMA Script
 *
 * @package Anzu
 */

require_once ANZU_INC_DIR . 'plugins/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'anzu_tgmpa_register' );

function anzu_tgmpa_register() {
	
	// Get array of recommended plugins.
	$plugins = array(

		array(
			'name'               => 'Borderless',
			'slug'               => 'borderless',
			'required'           => true,
			'force_activation'	=> false,
		),

		array(
			'name'		         => 'Elementor Website Builder',
			'slug'     	         => 'elementor',
			'required'	         => false,
			'force_activation'   => false,
		),

		array(
			'name'		         => 'One Click Demo Import',
			'slug'     	         => 'one-click-demo-import',
			'required'	         => true,
			'required'	         => false,
		),

	);

	$config = array(
		'id'           => 'anzu',
		'default_path' => '',
		'menu'         => 'anzu-install-plugins', 
		'parent_slug'  => 'anzu', 
		'capability'   => 'edit_theme_options', 
		'has_notices'  => false,
		'dismissable'  => true,   
		'dismiss_msg'  => '',         
		'is_automatic' => false,   
		'message'      => '',  
	);

	tgmpa( $plugins, $config );
}
