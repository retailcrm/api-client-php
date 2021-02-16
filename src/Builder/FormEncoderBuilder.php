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
use JMS\Serializer\Handler\HandlerRegistry;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use Metadata\Cache\DoctrineCacheAdapter;
use RetailCrm\Api\Component\FormData\FormEncoder;
use RetailCrm\Api\Component\Serializer\JmsHandlersInjector;
use RetailCrm\Api\Enum\CacheDirectories;
use RetailCrm\Api\Interfaces\BuilderInterface;
use RuntimeException;

/**
 * Class FormEncoderBuilder
 *
 * @category FormEncoderBuilder
 * @package  RetailCrm\Api\Builder
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class FormEncoderBuilder implements BuilderInterface
{
    /** @var string */
    private $cacheDir;

    /** @var \Doctrine\Common\Cache\Cache|null */
    private $cache;

    /** @var \JMS\Serializer\SerializerInterface */
    private $serializer;

    /** @var \Doctrine\Common\Cache\Cache|null */
    private $jsonCache;

    /** @var \Doctrine\Common\Cache\Cache|null */
    private $formCache;

    /** @var \Doctrine\Common\Annotations\Reader */
    private $annotationReader;

    /**
     * Sets cache directory.
     *
     * This directory will be used by FormEncoder component and underlying serializer to store annotations cache.
     * Annotations parsing consumes a lot of resources, which is the reason why you should cache results.
     *
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
     * Sets cache implementation.
     *
     * This cache implementation will be used by FormEncoder component and underlying serializer to store
     * annotations cache. Any cache from `doctrine/cache` should work just fine.
     *
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
     * Sets serializer.
     *
     * Use any JMS Serializer instance. Keep in mind that this serializer instance should support some custom types
     * we use to provide full support for our API.
     *
     * You can use `JmsHandlersInjector::registerLibraryHandlers` to register handlers for those types.
     *
     * @see http://jmsyst.com/libs/serializer/master/handlers#subscribing-handlers
     *
     * @param \JMS\Serializer\SerializerInterface $serializer
     *
     * @return FormEncoderBuilder
     */
    public function setSerializer(SerializerInterface $serializer): FormEncoderBuilder
    {
        $this->serializer = $serializer;
        return $this;
    }

    /**
     * Builds FormEncoder.
     *
     * **Note:** Cache won't be set into provided serializer instance. It only works for instance built by
     * this builder. You must manually inject the proper cache into the custom JMS Serializer instance.
     *
     * @inheritDoc
     */
    public function build(): FormEncoder
    {
        $this->buildCaches();
        $this->buildAnnotationReader();
        $this->buildSerializer();

        return new FormEncoder($this->serializer, $this->annotationReader);
    }

    /**
     * Builds caches if needed.
     */
    private function buildCaches(): void
    {
        if (!empty($this->cacheDir) && is_dir($this->cacheDir)) {
            $this->createDir($this->cacheDir . CacheDirectories::FORM_DIR);
            $this->formCache = new FilesystemCache($this->cacheDir . CacheDirectories::FORM_DIR);

            if (null === $this->serializer) {
                $this->createDir($this->cacheDir . CacheDirectories::JSON_DIR);
                $this->jsonCache = new FilesystemCache($this->cacheDir . CacheDirectories::JSON_DIR);
            }
        }
    }

    /**
     * Builds annotation reader.
     */
    private function buildAnnotationReader(): void
    {
        $this->annotationReader = new AnnotationReader();

        if (null !== $this->formCache) {
            $this->annotationReader = new CachedReader(new AnnotationReader(), $this->formCache);
        }
    }

    /**
     * Builds serializer if necessary.
     */
    private function buildSerializer(): void
    {
        if (null !== $this->serializer) {
            return;
        }

        $serializerBuilder = SerializerBuilder::create()
            ->configureHandlers(function (HandlerRegistry $registry) {
                JmsHandlersInjector::registerLibraryHandlers($registry);
            })->addDefaultHandlers()
            ->addDefaultListeners();

        if (null !== $this->jsonCache) {
            $serializerBuilder->setMetadataCache(new DoctrineCacheAdapter('retailcrm', $this->jsonCache));
        } elseif (null !== $this->cache) {
            $serializerBuilder->setMetadataCache(new DoctrineCacheAdapter('retailcrm', $this->cache));
        }

        $this->serializer = $serializerBuilder->build();
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
