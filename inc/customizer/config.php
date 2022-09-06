<?php

use Kirki\Util\Helper;
new \Kirki\Pro\HeadlineDivider\Init();
new \Kirki\Pro\InputSlider\Init();
new \Kirki\Pro\MarginPadding\Init();
new \Kirki\Pro\Responsive\Init();
new \Kirki\Pro\Tabs\Init();

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Do not proceed if Kirki does not exist.
if ( ! class_exists( 'Kirki' ) ) {
	return;
}

Kirki :: add_config ('anzu', array ( 
    'capacity' => 'edit_theme_options', 
    'option_type' => 'option', 
    'option_name' => 'anzu', 
));

require_once __DIR__ . '/config/general-options.php';// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude
require_once __DIR__ . '/config/header.php';// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude
require_once __DIR__ . '/config/colors.php';// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude
require_once __DIR__ . '/config/typography.php';// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude
require_once __DIR__ . '/config/footer.php';// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude
require_once __DIR__ . '/config/hooks.php';// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude
require_once __DIR__ . '/config/scroll-to-top.php';// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude