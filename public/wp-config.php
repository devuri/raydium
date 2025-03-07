<?php

use WPframework\AppFactory;

if (file_exists(dirname(__DIR__) . '/vendor/autoload.php')) {
    require_once dirname(__DIR__) . '/vendor/autoload.php';
} else {
    exit('Cannot find the vendor autoload file.');
}


/* That's all, stop editing! Happy publishing. */

$siteAppFactory = AppFactory::create(dirname(__DIR__));

AppFactory::run();

$table_prefix = env('DB_PREFIX');

if (! defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

require_once ABSPATH . 'wp-settings.php';
