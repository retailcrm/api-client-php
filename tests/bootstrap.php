<?php

if (function_exists('date_default_timezone_set')
    && function_exists('date_default_timezone_get')
) {
    date_default_timezone_set(date_default_timezone_get());
}

$loader = include dirname(__DIR__) . '/vendor/autoload.php';
$loader->add('RetailCrm\\Test', __DIR__);
