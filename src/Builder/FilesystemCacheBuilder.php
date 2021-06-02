<?php

/**
 * PHP version 7.3
 *
 * @category FilesystemCacheBuilder
 * @package  RetailCrm\Api\Builder
 */

namespace RetailCrm\Api\Builder;

use Psr\Cache\CacheItemPoolInterface;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use RetailCrm\Api\Enum\CacheDirectories;
use RetailCrm\Api\Exception\Client\BuilderException;
use RetailCrm\Api\Interfaces\BuilderInterface;

/**
 * Class FilesystemCacheBuilder
 *
 * @category FilesystemCacheBuilder
 * @package  RetailCrm\Api\Builder
 */
class FilesystemCacheBuilder implements BuilderInterface
{
    /** @var string */
    private $cacheDir;

    /**
     * @param string $cacheDir
     *
     * @return FilesystemCacheBuilder
     */
    public function setCacheDir(string $cacheDir): FilesystemCacheBuilder
    {
        $this->cacheDir = $cacheDir;
        return $this;
    }

    /**
     * Builds and returns filesystem cache.
     *
     * @return CacheItemPoolInterface
     * @inheritDoc
     */
    public function build(): CacheItemPoolInterface
    {
        if (empty($this->cacheDir)) {
            return new FilesystemAdapter(CacheDirectories::DIR_NAME);
        }

        $cacheDir = static::getCacheDirPath($this->cacheDir);
        $this->createDir($cacheDir);

        return new FilesystemAdapter('', 0, $cacheDir);
    }

    /**
     * @param string $dir
     *
     * @throws \RetailCrm\Api\Exception\Client\BuilderException
     */
    private function createDir(string $dir): void
    {
        if (is_dir($dir)) {
            return;
        }

        if (false === mkdir($dir, 0777, true) && false === is_dir($dir)) {
            throw new BuilderException(sprintf('Could not create directory "%s".', $dir));
        }
    }

    /**
     * Returns target cache dir for cache.
     *
     * @param string $cacheDir
     *
     * @return string
     */
    private static function getCacheDirPath(string $cacheDir): string
    {
        if ('' !== $cacheDir && DIRECTORY_SEPARATOR !== $cacheDir[strlen($cacheDir) - 1]) {
            $cacheDir .= DIRECTORY_SEPARATOR;
        }

        return $cacheDir . CacheDirectories::MAIN_DIR . DIRECTORY_SEPARATOR;
    }
}
