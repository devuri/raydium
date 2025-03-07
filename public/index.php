<?php

/**
 * Define whether to use WordPress themes.
 */
define( 'WP_USE_THEMES', true );

/**
 * Define lightweight framework mode.
 */
define( 'HYBRIDX', false );

/**
 * Bootstrap the application.
 */
if (\defined('HYBRIDX') && true === \constant('HYBRIDX')) {
    $initializationConfigPath = __DIR__ . '/wp-config.php';
    if (file_exists($initializationConfigPath)) {
        require $initializationConfigPath;
    } else {
        exit("Error: initialization file wp-config.php not found. Please check your configuration.");
    }
} elseif (file_exists(__DIR__ . '/wp/wp-blog-header.php')) {
    require __DIR__ . '/wp/wp-blog-header.php';
} else {
    exit("Error: Framework setup incomplete. Run setup or 'composer install' to proceed.");
}
