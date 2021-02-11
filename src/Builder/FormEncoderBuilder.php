<?php

/**
 * PHP version 7.3
 *
 * @category FormEncoderBuilder
 * @package  RetailCrm\Api\Builder
 */

namespace RetailCrm\Api\Builder;

use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\CachedReader;
use Doctrine\Common\Cache\Cache;
use Doctrine\Common\Cache\FilesystemCache;
use JMS\Serializer\SerializerBuilder;
use Metadata\Cache\DoctrineCacheAdapter;
use RetailCrm\Api\Component\FormData\FormEncoder;
use RetailCrm\Api\Enum\CacheDirectories;
use RuntimeException;

/**
 * Class FormEncoderBuilder
 *
 * @category FormEncoderBuilder
 * @package  RetailCrm\Api\Builder
 */
class FormEncoderBuilder implements BuilderInterface
{
    /** @var string */
    private $cacheDir;

    /** @var \Doctrine\Common\Cache\Cache */
    private $cache;

    /**
     * @param string $cacheDir
     *
     * @return FormEncoderBuilder
     */
    public function setCacheDir(string $cacheDir): FormEncoderBuilder
    {
        $this->cacheDir = $cacheDir;
        return $this;
    }

    /**
     * @param \Doctrine\Common\Cache\Cache $cache
     *
     * @return FormEncoderBuilder
     */
    public function setCache(Cache $cache): FormEncoderBuilder
    {
        $this->cache = $cache;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function build(): FormEncoder
    {
        $jsonCache = null;
        $formCache = null;

        if (!empty($this->cacheDir) && is_dir($this->cacheDir)) {
            $this->createDir($this->cacheDir . CacheDirectories::JSON_DIR);
            $this->createDir($this->cacheDir . CacheDirectories::FORM_DIR);

            $jsonCache = new FilesystemCache($this->cacheDir . CacheDirectories::JSON_DIR);
            $formCache = new FilesystemCache($this->cacheDir . CacheDirectories::FORM_DIR);
        }

        $annotationReader = new AnnotationReader();
        $serializerBuilder = SerializerBuilder::create()
            ->addDefaultHandlers()
            ->addDefaultListeners();

        if (null !== $jsonCache && null !== $formCache) {
            $serializerBuilder->setMetadataCache(new DoctrineCacheAdapter('retailcrm', $jsonCache));
            $annotationReader = new CachedReader(new AnnotationReader(), $formCache);
        } elseif (null !== $this->cache) {
            $serializerBuilder->setMetadataCache(new DoctrineCacheAdapter('retailcrm', $this->cache));
        }

        return new FormEncoder($annotationReader, $serializerBuilder->build());
    }

    /**
     * @param string $dir
     */
    private function createDir(string $dir): void
    {
        if (is_dir($dir)) {
            return;
        }

        if (false === mkdir($dir, 0777, true) && false === is_dir($dir)) {
            throw new RuntimeException(sprintf('Could not create directory "%s".', $dir));
        }
    }
}
