<?php

/**
 * PHP version 7.3
 *
 * @category TestConfig
 * @package  RetailCrm\Test
 */

namespace RetailCrm\Test;

/**
 * Class TestConfig
 *
 * @category TestConfig
 * @package  RetailCrm\Test
 */
class TestConfig
{
    /**
     * @return string
     */
    public static function getApiUrl(): string
    {
        return self::getenv('API_URL', 'https://test.retailcrm.pro/');
    }

    /**
     * @return string
     */
    public static function getApiKey(): string
    {
        return self::getenv('API_KEY', 'testkey');
    }

    /**
     * @param string $variable
     * @param mixed   $default
     *
     * @return mixed|null
     */
    private static function getenv(string $variable, $default = null)
    {
        if (!array_key_exists($variable, $_ENV)) {
            return $default;
        }

        return $_ENV[$variable];
    }
}