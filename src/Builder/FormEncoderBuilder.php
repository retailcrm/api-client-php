<?php

/**
 * PHP version 7.3
 *
 * @category FormEncoderBuilder
 * @package  RetailCrm\Api\Builder
 */

namespace RetailCrm\Api\Builder;

use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\PsrCachedReader;
use Liip\Serializer\SerializerInterface;
use Psr\Cache\CacheItemPoolInterface;
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
    /** @var CacheItemPoolInterface|null */
    private $cache;

    /** @var \Doctrine\Common\Annotations\Reader */
    private $annotationReader;

    /** @var \RetailCrm\Api\Builder\FilesystemCacheBuilder */
    private $fsCacheBuilder;

    /** @var \Liip\Serializer\SerializerInterface */
    private $serializer;

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
     * annotations cache. Any cache from `symfony/cache` should work just fine.
     *
     * @param \Psr\Cache\CacheItemPoolInterface $cache
     *
     * @return FormEncoderBuilder
     */
    public function setCache(CacheItemPoolInterface $cache): FormEncoderBuilder
    {
        $this->cache = $cache;
        return $this;
    }

    /**
     * Sets serializer implementation.
     *
     * This serializer implementation will be used by FormEncoder component.
     *
     * @param \Liip\Serializer\SerializerInterface $serializer
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
    public function build(): FormEncoderInterface
    {
        $this->buildCache();
        $this->buildAnnotationReader();
        $this->buildSerializer();

        return new FormEncoder($this->serializer, $this->annotationReader);
    }

    /**
     * Builds cache if needed.
     *
     * @throws \RetailCrm\Api\Exception\Client\BuilderException
     */
    private function buildCache(): void
    {
        if (null === $this->cache) {
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
            $this->annotationReader = new PsrCachedReader(new AnnotationReader(), $this->cache);
        }
    }

    /**
     * Builds serializer.
     */
    private function buildSerializer(): void
    {
        if (null === $this->serializer) {
            $this->serializer = SerializerFactory::create();
        }
    }
}
