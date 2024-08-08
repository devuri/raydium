<?php

/**
 * Plugin Name:       WP-Framework Core
 * Plugin URI:        https://github.com/devuri/wpframework
 * Description:       Web Application Framework provides `wpframework_init` action and bootstrap file.
 * Version:           0.2
 * Requires at least: 5.3.0
 * Requires PHP:      7.3.5
 * Author:            Uriel
 * Author URI:        https://devuri.github.io/wpframework
 * Text Domain:       wpframework
 * Domain Path:       languages
 * License:           GPLv2
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Network: true
 */

if ( ! \defined( 'ABSPATH' ) ) {
    exit;
}

if ( defined( 'WP_INSTALLING' ) && WP_INSTALLING ) {
    return;
}

if ( function_exists( 'wpframeworkCore' ) ) {
    $_wpframework = wpframeworkCore();
    $_wpframework->plugin();
} else {
    $_wpframework = null;
}


if ( is_object( $_wpframework ) ) {
    do_action( 'wpframework_init', $_wpframework->get_app_options() );
} else {
    do_action( 'wpframework_init' );
}
