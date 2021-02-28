<?php

declare(strict_types=1);

use Doctrine\Common\Annotations\AnnotationRegistry;
use RetailCrm\Dev\Component\Serializer\ModelsChecksumGenerator;

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
$loader->add('RetailCrm\\Tests', __DIR__ . '/src');
$loader->add('RetailCrm\\DevTests', __DIR__ . '/dev');
AnnotationRegistry::registerLoader('class_exists');

if (file_exists(__DIR__ . '/../.env')) {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
    $dotenv->load();
}

if (class_exists('RetailCrm\Dev\Component\Serializer\ModelsChecksumGenerator')) {
    if (!ModelsChecksumGenerator::verifyChecksum()) {
        trigger_error(
            'Models code cache is not consistent with model data. ' .
            'Perhaps you forgot to regenerate code cache? ' .
            'Use "bin/console models:generate" command to update model cache.',
            E_USER_ERROR
        );
    }
}
