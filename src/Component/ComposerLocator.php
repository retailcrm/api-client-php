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
            $fileName = implode(DIRECTORY_SEPARATOR, [$dir, 'composer.json']);

            if (file_exists($fileName) && static::getPackageComposerJson() !== $fileName) {
                return $fileName;
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

    /**
     * Returns full path to the composer.json of this package.
     *
     * @return string
     */
    private static function getPackageComposerJson(): string
    {
        return (string) realpath(implode(DIRECTORY_SEPARATOR, [__DIR__, '..', '..', 'composer.json']));
    }
}
