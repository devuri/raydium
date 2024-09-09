<?php


/* That's all, stop editing! Happy publishing. */

if ( file_exists(__DIR__ . '/../bootstrap.php') ) {
	require_once __DIR__ . '/../bootstrap.php';
}

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

// Sets up WordPress.
require_once ABSPATH . 'wp-settings.php';
