<?php

declare(strict_types=1);

use Doctrine\Common\Annotations\AnnotationRegistry;

if (
    function_exists('date_default_timezone_set')
    && function_exists('date_default_timezone_get')
) {
    date_default_timezone_set(date_default_timezone_get());
}

if (!is_file($autoloadFile = __DIR__ . '/../vendor/autoload.php')) {
    throw new RuntimeException('Did not find vendor/autoload.php. Did you run "composer install --dev"?');
}

$loader = require $autoloadFile;
$loader->add('RetailCrm\\TestUtils', __DIR__ . '/tests/utils');
$loader->add('RetailCrm\\Tests', __DIR__ . '/src');
AnnotationRegistry::registerLoader('class_exists');

if (file_exists(__DIR__ . '/../.env')) {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
    $dotenv->load();
}
