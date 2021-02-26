<?php

/**
 * PHP version 7.3
 *
 * @category FormEncoder
 * @package  RetailCrm\Api\Component\FormData
 */

namespace RetailCrm\Api\Component\FormData;

use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\Reader;
use Liip\Serializer\SerializerInterface;
use ReflectionClass;
use ReflectionException;
use RetailCrm\Api\Component\FormData\Mapping\PostSerialize;
use RetailCrm\Api\Component\FormData\Strategy\StrategyFactory;
use RetailCrm\Api\Interfaces\FormEncoderInterface;

/**
 * Class FormEncoder
 *
 * FormEncoder is a vital part of the library. Our API expects form-data for all requests, but some fields may contain
 * JSON data (for example, `/api/v5/customers/create` method works like that). FormEncoder is our custom serializer that
 * converts request instances to form-data and uses Liip serializer under the hood to fill some fields with JSON data.
 *
 * @see https://docs.retailcrm.ru/Developers/API/APIVersions/APIv5#post--api-v5-customers-create
 *
 * @category FormEncoder
 * @package  RetailCrm\Api\Component\FormData
 */
class FormEncoder implements FormEncoderInterface
{
    /** @var \Doctrine\Common\Annotations\Reader */
    private $annotationReader;

    /** @var \Liip\Serializer\SerializerInterface */
    private $serializer;

    /**
     * FormEncoder constructor.
     *
     * @param \Liip\Serializer\SerializerInterface      $serializer
     * @param \Doctrine\Common\Annotations\Reader|null $annotationReader
     */
    public function __construct(SerializerInterface $serializer, ?Reader $annotationReader = null)
    {
        $this->serializer       = $serializer;
        $this->annotationReader = $annotationReader ?: new AnnotationReader();
    }

    /**
     * Encodes provided object into a form data
     *
     * @param mixed  $object
     * @param string $type
     *
     * @return string
     * @throws \ReflectionException
     */
    public function encode($object, string $type = ''): string
    {
        return http_build_query($this->encodeArray($object, $type));
    }

    /**
     * Encodes provided object into an array
     *
     * @param mixed  $object
     * @param string $type
     *
     * @return array<mixed>
     * @throws \ReflectionException
     */
    public function encodeArray($object, string $type = ''): array
    {
        $type = empty($type) ? gettype($object) : $type;
        $result = (array) StrategyFactory::encodeStrategyByType(
            $type,
            $object,
            $this->annotationReader,
            $this->serializer
        )->encode($object, null);

        return $this->processPostSerialize($object, $result);
    }

    /**
     * Returns underlying serializer instance.
     *
     * @return \Liip\Serializer\SerializerInterface
     */
    public function getSerializer(): SerializerInterface
    {
        return $this->serializer;
    }

    /**
     * Process post deserialize callback
     *
     * @param mixed   $object
     * @param mixed[] $result
     *
     * @return mixed[]
     * @throws ReflectionException
     */
    private function processPostSerialize($object, array $result): array
    {
        $class = get_class($object);

        if (false !== $object) {
            try {
                $reflection = new ReflectionClass($class);
            } catch (ReflectionException $e) {
                return $result;
            }

            foreach ($reflection->getMethods() as $method) {
                $postDeserialize = $this->annotationReader
                    ->getMethodAnnotation($method, PostSerialize::class);

                if ($postDeserialize instanceof PostSerialize) {
                    return $method->invokeArgs($object, [$result]);
                }
            }
        }

        return $result;
    }
}
