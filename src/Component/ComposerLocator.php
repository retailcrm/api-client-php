<?php

/**
 * PHP version 7.3
 *
 * @category ComposerLocator
 * @package  RetailCrm\Api\Component
 */

namespace RetailCrm\Api\Component;

/**
 * Class ComposerLocator
 *
 * @category ComposerLocator
 * @package  RetailCrm\Api\Component
 */
class ComposerLocator
{
    /**
     * Locate Composer autoloader.
     *
     * @return string
     */
    public static function findAutoloader(): string
    {
        $counter = 0;
        $dir = static::getBaseDirectory();

        for (;;) {
            if (file_exists($dir . '/autoload.php')) {
                return $dir . '/autoload.php';
            }

            if (file_exists($dir . '/vendor/autoload.php')) {
                return $dir . '/vendor/autoload.php';
            }

            $counter++;
            $dir = dirname($dir);

            if (5 < $counter) {
                break;
            }
        }

        return '';
    }

    /**
     * Locate `composer.json`.
     *
     * @return string
     */
    public static function findComposerJson(): string
    {
        $counter = 0;
        $dir = static::getBaseDirectory();

        for (;;) {
            if (file_exists($dir . '/composer.json')) {
                return $dir . '/composer.json';
            }

            $counter++;
            $dir = dirname($dir);

            if (5 < $counter) {
                break;
            }
        }

        return '';
    }

    /**
     * @return string
     */
    private static function getBaseDirectory(): string
    {
        return (string) realpath(implode(DIRECTORY_SEPARATOR, [__DIR__, '..', '..']));
    }
}
