<?php

/**
 * PHP version 7.3
 *
 * @category Utils
 * @package  RetailCrm\Api\Component
 */

namespace RetailCrm\Api\Component;

/**
 * Class Utils
 *
 * @category Utils
 * @package  RetailCrm\Api\Component
 */
class Utils
{
    /**
     * Remove version from URI.
     *
     * @param string $uri
     *
     * @return string
     */
    public static function removeVersionFromUri(string $uri): string
    {
        return (string) preg_replace('/\/v\d{1,3}\/?/', '', $uri);
    }

    /**
     * Remove trailing slash from provided text.
     *
     * @param string $text
     *
     * @return string
     */
    public static function removeTrailingSlash(string $text): string
    {
        return (string) preg_replace('/\/$/', '', $text);
    }
}
