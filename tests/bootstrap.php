<?php
/**
 * PHPUnit bootstrap file
 */
$_tests_dir = getenv( 'WP_TESTS_DIR' );
$_core_dir = getenv( 'WP_CORE_DIR' );

if ( ! $_tests_dir ) {
	$_tests_dir = '/tmp/wordpress-tests-lib';
}

if ( ! $_core_dir ) {
	$_core_dir = '/tmp/wordpress';
}

// Give access to tests_add_filter() function.
require_once $_tests_dir . '/includes/functions.php';

// Copy across the drop-in plugin.
copy( dirname( __DIR__ ) . '/object-cache.php', $_core_dir . '/wp-content/object-cache.php' );

// Start up the WP testing environment.
require $_tests_dir . '/includes/bootstrap.php';
