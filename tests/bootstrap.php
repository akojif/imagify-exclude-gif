<?php

$_tests_dir = getenv('WP_TESTS_DIR');
if ( ! $_tests_dir ) {
    $_tests_dir = rtrim( sys_get_temp_dir(), '/\\' ) . '/wordpress-tests-lib';
}
require_once $_tests_dir . '/includes/webp-gif.php';

require_once dirname( dirname( __FILE__ ) ) . '/exclude-gif.php';