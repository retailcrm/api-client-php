<?php

use Symfony\Component\Dotenv\Dotenv;

if (function_exists('date_default_timezone_set')
    && function_exists('date_default_timezone_get')
) {
    date_default_timezone_set(date_default_timezone_get());
}

if (class_exists(Dotenv::class) and file_exists(__DIR__.'/.env')) {
    (new Dotenv())->load(__DIR__.'/.env');
}

$loader = include dirname(__DIR__) . '/vendor/autoload.php';
$loader->add('RetailCrm\\Test', __DIR__);
