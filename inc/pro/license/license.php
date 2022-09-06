<?php

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

// Load WC_AM_Client class if it exists.
if ( ! class_exists( 'ANZU_LICENSE' ) ) {
	require_once ANZU_INC_DIR . 'pro/license/client.php';
}

// Instantiate WC_AM_Client class object if the WC_AM_Client class is loaded.
if ( class_exists( 'ANZU_LICENSE' ) ) {
	$anzu_license = new ANZU_LICENSE( __FILE__, 168803, ANZU_THEME_VERSION, 'theme', 'https://visualmodo.com', 'Anzu' );
}