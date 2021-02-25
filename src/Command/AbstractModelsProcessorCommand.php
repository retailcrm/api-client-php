<?php

/**
 * PHP version 7.3
 *
 * @category AbstractModelsProcessorCommand
 * @package  RetailCrm\Api\Command
 */

namespace RetailCrm\Api\Command;

use RuntimeException;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use SplFileInfo;
use Symfony\Component\Console\Command\Command;

/**
 * Class AbstractModelsProcessorCommand
 *
 * @category AbstractModelsProcessorCommand
 * @package  RetailCrm\Api\Command
 */
abstract class AbstractModelsProcessorCommand extends Command
{
    /**
     * Returns target directory for the model cache.
     *
     * @return string
     */
    protected static function getTargetDirectory(): string
    {
        $parentDir = implode(DIRECTORY_SEPARATOR, [__DIR__, '..', '..']);

        return implode(DIRECTORY_SEPARATOR, [realpath($parentDir), 'models']);
    }

    /**
     * Create directory
     *
     * @param string $dir
     *
     * @throws RuntimeException
     */
    protected static function createDir(string $dir): void
    {
        if (is_dir($dir)) {
            return;
        }

        if (false === mkdir($dir, 0777, true) && false === is_dir($dir)) {
            throw new RuntimeException(sprintf('Could not create directory "%s".', $dir));
        }
    }

    /**
     * Recursively delete a directory and all of it's contents - e.g.the equivalent of `rm -r` on the command-line.
     * Consistent with `rmdir()` and `unlink()`, an E_WARNING level error will be generated on failure.
     *
     * @param string $dir absolute path to directory to delete
     *
     * @return bool true on success; false on failure
     */
    protected static function recursiveRmdir(string $dir): bool
    {
        if (false === file_exists($dir)) {
            return false;
        }

        /** @var SplFileInfo[] $files */
        $files = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS),
            RecursiveIteratorIterator::CHILD_FIRST
        );

        foreach ($files as $fileInfo) {
            if ($fileInfo->isDir()) {
                if (false === rmdir((string) $fileInfo->getRealPath())) {
                    return false;
                }
            } elseif (false === unlink((string) $fileInfo->getRealPath())) {
                return false;
            }
        }

        return rmdir($dir);
    }
}
