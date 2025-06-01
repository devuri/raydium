<?php

use WPframework\AppFactory;

/**
 * Application Bootstrap File
 *
 * Sets up the environment for the web application by including the Composer autoloader.
 *
 * This file checks for the presence of the `vendor/autoload.php` file in either the current
 * directory or the parent directory. If found, it is required to initialize class autoloading.
 * If not found, the script halts with an error message.
 *
 * @package Application
 */
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require __DIR__ . '/vendor/autoload.php';
} elseif (file_exists(dirname(__DIR__) . '/vendor/autoload.php')) {
    require dirname(__DIR__) . '/vendor/autoload.php';
} else {
    exit('Error: Composer autoloader not found. Please run "composer install" or ensure vendor/autoload.php exists in either the current directory or parent directory.');
}


// define('DEBUG_STACK_TRACE', true);
// define( 'RAYDIUM_INSTALL_PROTECTION', false );
// define('USE_TWIGIT', true);
// define('DISABLE_PAGE_EDITOR_FIELD', true);


/* That's all, stop editing! Happy publishing. */

/**
 * Initialize and run the site application.
 *
 * Creates an instance of the application using the AppFactory with automatic path resolution.
 * The factory automatically detects the correct application directory by checking for
 * `vendor/autoload.php` in the current directory first, then the parent directory.
 *
 * This handles both common structures:
 * - Framework setup: Entry point in `app/public/wp-config.php`, vendor in `app/`
 * - Vanilla setup: Entry point `app/wp-config.php` vendor in `app/`
 *
 * No manual path adjustment needed - the factory determines the correct root automatically.
 */
$siteAppFactory = AppFactory::create(__DIR__);

// Run the application.
$siteAppFactory->run();

// Set the table prefix.
$table_prefix = env('DB_PREFIX');

//  if hybridx is running do not load wp.
if (defined('HYBRIDX') && true === constant('HYBRIDX')) {
    return null;
}

// Define ABSPATH.
if (! defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

// Load WordPress settings
require_once ABSPATH . 'wp-settings.php';

