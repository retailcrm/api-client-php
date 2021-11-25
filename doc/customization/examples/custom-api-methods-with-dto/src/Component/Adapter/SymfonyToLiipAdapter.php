<?php

/**
 * PHP version 7.3
 *
 * @category SymfonyToLiipAdapter
 * @package  Retailcrm\Examples\CustomMethodsDto\Component\Adapter
 */

namespace Retailcrm\Examples\CustomMethodsDto\Component\Adapter;

use Liip\Serializer\Context;
use Liip\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Serializer as SymfonySerializer;

/**
 * Class SymfonyToLiipAdapter
 *
 * @category SymfonyToLiipAdapter
 * @package  Retailcrm\Examples\CustomMethodsDto\Component\Adapter
 */
class SymfonyToLiipAdapter implements SerializerInterface
{
    /** @var SymfonySerializer */
    private $serializer;

    public function __construct(SymfonySerializer $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * @inheritDoc
     */
    public function serialize($data, string $format, Context $context = null): string
    {
        return $this->serializer->serialize($data, $format);
    }

    /**
     * @inheritDoc
     */
    public function deserialize(string $data, string $type, string $format, Context $context = null)
    {
        return $this->serializer->deserialize($data, $type, $format);
    }

    /**
     * @inheritDoc
     * @throws \Symfony\Component\Serializer\Exception\ExceptionInterface
     */
    public function toArray($data, Context $context = null): array
    {
        return $this->serializer->normalize($data);
    }

    /**
     * @inheritDoc
     * @throws \Symfony\Component\Serializer\Exception\ExceptionInterface
     */
    public function fromArray(array $data, string $type, Context $context = null)
    {
        return $this->serializer->denormalize($data, $type);
    }
}
