<?php

namespace Fulcrum\Container\Tests;

if (version_compare(phpversion(), '5.6.0', '<')) {
    die('Whoops, PHP 5.6 or higher is required.');
}

define('FULCRUM_CONTAINER_TESTS_DIR', __DIR__);
define('FULCRUM_CONTAINER_ROOT_DIR', dirname(__DIR__) . DIRECTORY_SEPARATOR);

/**
 * Time to load Composer's autoloader.
 */
$vendorPath = FULCRUM_CONTAINER_ROOT_DIR . 'vendor' . DIRECTORY_SEPARATOR;
if (!file_exists($vendorPath . 'autoload.php')) {
    die('Whoops, we need Composer before we start running tests.  Please type: `composer install`.');
}
require_once $vendorPath . 'autoload.php';
unset($vendorPath);
