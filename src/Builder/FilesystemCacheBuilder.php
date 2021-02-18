<?php

/**
 * PHP version 7.3
 *
 * @category FilesystemCacheBuilder
 * @package  RetailCrm\Api\Builder
 */

namespace RetailCrm\Api\Builder;

use Doctrine\Common\Cache\Cache;
use Doctrine\Common\Cache\FilesystemCache;
use Metadata\Cache\CacheInterface;
use Metadata\Cache\DoctrineCacheAdapter;
use RetailCrm\Api\Enum\CacheDirectories;
use RetailCrm\Api\Exception\BuilderException;
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
     * Builds and returns form and json cache.
     *
     * @return array<Cache|CacheInterface>
     * @inheritDoc
     */
    public function build(): array
    {
        return [$this->buildFormCache(), $this->buildJsonCache()];
    }

    /**
     * Returns false if caches can't be created.
     *
     * @return bool
     */
    public function canBuild(): bool
    {
        return !empty($this->cacheDir);
    }

    /**
     * @throws \RetailCrm\Api\Exception\BuilderException
     */
    private function validateBuilder(): void
    {
        if (!$this->canBuild()) {
            throw new BuilderException('cacheDir must be provided');
        }
    }

    /**
     * Builds form cache.
     *
     * @return \Doctrine\Common\Cache\Cache
     * @throws \RetailCrm\Api\Exception\BuilderException
     */
    public function buildFormCache(): Cache
    {
        $this->validateBuilder();

        $cacheDir = static::getCacheDirPath($this->cacheDir);

        $this->createDir($cacheDir);
        $this->createDir($cacheDir . CacheDirectories::FORM_DIR);

        return new FilesystemCache($cacheDir . CacheDirectories::FORM_DIR);
    }

    /**
     * Builds json cache.
     *
     * @return \Metadata\Cache\CacheInterface
     * @throws \RetailCrm\Api\Exception\BuilderException
     */
    public function buildJsonCache(): CacheInterface
    {
        $this->validateBuilder();

        $cacheDir = static::getCacheDirPath($this->cacheDir);

        $this->createDir($cacheDir);
        $this->createDir($cacheDir . CacheDirectories::JSON_DIR);

        return new DoctrineCacheAdapter('retailcrm', new FilesystemCache($cacheDir . CacheDirectories::JSON_DIR));
    }

    /**
     * @param string $dir
     *
     * @throws \RetailCrm\Api\Exception\BuilderException
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
