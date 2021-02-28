<?php

/**
 * PHP version 7.3
 *
 * @category Utils
 * @package  RetailCrm\Dev\Component
 */

namespace RetailCrm\Dev\Component;

/**
 * Class Utils
 *
 * @category Utils
 * @package  RetailCrm\Dev\Component
 */
class Utils
{
    /**
     * Returns models directory.
     *
     * @return string
     */
    public static function getModelsDirectory(): string
    {
        return (string) realpath(implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), '..', 'src', 'Model']));
    }
}
