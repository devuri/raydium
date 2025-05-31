<?php

/**
 *  Front Controller.
 *
 * Enables theme loading by setting the necessary constant
 * and attempts to bootstrap the  environment.
 *
 * This script is typically used as the entry point of a site.
 * It looks for the `wp-blog-header.php` file in the current directory
 * or a `wp` subdirectory and includes it to initialize the application.
 */
\define('HYBRIDX', false);

// Enable theme loading and functionality during initialization.
\define('WP_USE_THEMES', true);

/*
 * Bootstrap the  application.
 *
 * This logic attempts to load the  blog header from:
 * 1. The current directory
 * 2. The wp subdirectory
 */
if (file_exists(__DIR__ . '/wp-blog-header.php')) {
    require __DIR__ . '/wp-blog-header.php';
} elseif (file_exists(__DIR__ . '/wp/wp-blog-header.php')) {
    require __DIR__ . '/wp/wp-blog-header.php';
} else {
    exit("Error:  blog header not found. Please ensure wp-blog-header.php exists in either the current directory or wp/ subdirectory.");
}

