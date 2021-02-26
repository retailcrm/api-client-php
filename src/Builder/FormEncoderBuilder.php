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
use RetailCrm\Api\Component\FormData\FormEncoder;
use RetailCrm\Api\Factory\SerializerFactory;
use RetailCrm\Api\Interfaces\BuilderInterface;
use RetailCrm\Api\Interfaces\FormEncoderInterface;

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
    /** @var \Doctrine\Common\Cache\Cache|null */
    private $cache;

    /** @var \Doctrine\Common\Annotations\Reader */
    private $annotationReader;

    /** @var \RetailCrm\Api\Builder\FilesystemCacheBuilder */
    private $fsCacheBuilder;

    /**
     * FormEncoderBuilder constructor.
     */
    public function __construct()
    {
        $this->fsCacheBuilder = new FilesystemCacheBuilder();
    }

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
        $this->fsCacheBuilder->setCacheDir($cacheDir);
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
     * Builds FormEncoder.
     *
     * **Note:** Cache won't be set into provided serializer instance. It only works for instance built by
     * this builder. You must manually inject the proper cache into the custom JMS Serializer instance.
     *
     * @inheritDoc
     */
    public function build(): FormEncoderInterface
    {
        $this->buildCache();
        $this->buildAnnotationReader();

        $serializer = SerializerFactory::create();

        return new FormEncoder($serializer, $this->annotationReader);
    }

    /**
     * Builds cache if needed.
     *
     * @throws \RetailCrm\Api\Exception\BuilderException
     */
    private function buildCache(): void
    {
        if ($this->fsCacheBuilder->canBuild()) {
            $this->cache = $this->fsCacheBuilder->build();
        }
    }

    /**
     * Builds annotation reader.
     */
    private function buildAnnotationReader(): void
    {
        $this->annotationReader = new AnnotationReader();

        if (null !== $this->cache) {
            $this->annotationReader = new CachedReader(new AnnotationReader(), $this->cache);
        }
    }
}
