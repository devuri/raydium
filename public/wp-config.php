<?php

use WPframework\AppFactory;

if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require __DIR__ . '/vendor/autoload.php';
} elseif (file_exists(dirname(__DIR__) . '/vendor/autoload.php')) {
    require dirname(__DIR__) . '/vendor/autoload.php';
} else {
    exit('Error: Composer autoloader not found. Please run "composer install" or ensure vendor/autoload.php exists in either the current directory or parent directory.');
}


/* That's all, stop editing! Happy publishing. */

$siteAppFactory = AppFactory::create(__DIR__);

// Run the application.
$siteAppFactory->run();

$table_prefix = env('DB_PREFIX');

if (! defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

require_once ABSPATH . 'wp-settings.php';
