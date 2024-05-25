<?php

/*
 * This is the bootstrap file for the web application.
 *
 * It loads the necessary files and sets up the environment for the application to run.
 * This includes initializing the Composer autoloader, which is used to load classes and packages.
 *
 * The application uses Composer to manage dependencies and packages including WordPress themes and plugins, which allows you to easily add, update, and remove packages as needed.
 * To install or update packages, you can use the `composer` command line.
 *
 * IMPORTANT: Do NOT modify this file unless you are sure of what you are doing.
 * Any changes you make to this file may affect the behavior of the entire application and cause errors or unexpected behavior.
 * If you are unsure about how to modify the application, please refer to the documentation or seek assistance from a qualified developer.
 *
 * To modify the setup, please refer to the documentation for instructions.
 *
 */
if ( file_exists(__DIR__ . '/../bootstrap.php') ) {
	require_once __DIR__ . '/../bootstrap.php';
}

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

// Sets up WordPress.
require_once ABSPATH . 'wp-settings.php';
