<?php

/**
 * PHP version 7.3
 *
 * @category Encoder
 * @package  RetailCrm\Api\Component\FormData
 */

namespace RetailCrm\Api\Component\FormData;

use Doctrine\Common\Annotations\AnnotationReader;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use ReflectionClass;
use ReflectionException;
use RetailCrm\Api\Component\FormData\Mapping\PostSerialize;
use RetailCrm\Api\Component\FormData\Strategy\StrategyFactory;

/**
 * Class Serializer
 *
 * @category Encoder
 * @package  RetailCrm\Api\Component\FormData
 */
class Encoder
{
    /** @var \Doctrine\Common\Annotations\AnnotationReader */
    private $annotationReader;

    /** @var \JMS\Serializer\SerializerInterface */
    private $serializer;

    /**
     * Encoder constructor.
     *
     * @param \Doctrine\Common\Annotations\AnnotationReader|null $annotationReader
     * @param \JMS\Serializer\SerializerInterface|null           $serializer
     */
    public function __construct(?AnnotationReader $annotationReader = null, ?SerializerInterface $serializer = null)
    {
        $this->annotationReader = $annotationReader ?: new AnnotationReader();
        $this->serializer = $serializer ?: static::createSerializer();
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
        $result = (array) StrategyFactory::encodeStrategyByType($type, $this->annotationReader, $this->serializer)
            ->encode($object, null);

        return $this->processPostSerialize($object, $result);
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

    /**
     * @return \JMS\Serializer\SerializerInterface
     */
    private static function createSerializer(): SerializerInterface
    {
        return SerializerBuilder::create()
            ->addDefaultHandlers()
            ->addDefaultListeners()
            ->build();
    }
}
