<?php

/**
 * PHP version 7.3
 *
 * @category EntityStrategy
 * @package  RetailCrm\Api\Component\FormData\Strategy\Encode
 */

namespace RetailCrm\Api\Component\FormData\Strategy\Encode;

use Doctrine\Common\Annotations\AnnotationReader;
use JMS\Serializer\SerializerInterface;
use ReflectionClass;
use RetailCrm\Api\Component\FormData\Mapping\JsonField;
use RetailCrm\Api\Component\FormData\Mapping\NoTransform;
use RetailCrm\Api\Component\FormData\PropertyAnnotations;
use RetailCrm\Api\Component\FormData\Mapping\Accessor;
use RetailCrm\Api\Component\FormData\Mapping\SerializedName;
use RetailCrm\Api\Component\FormData\Mapping\Type;
use RetailCrm\Api\Component\FormData\Strategy\StrategyFactory;

/**
 * Class EntityStrategy
 *
 * @category EntityStrategy
 * @package RetailCrm\Api\Component\FormData\Strategy\Encode
 */
class EntityStrategy extends AbstractEncodeStrategy
{
    /**
     * @inheritDoc
     *
     * @return mixed[]|string|null
     * @throws \ReflectionException
     */
    public function encode($value, ?PropertyAnnotations $annotations = null)
    {
        if (empty($value)) {
            return null;
        }

        if (null !== $annotations && $annotations->jsonField instanceof JsonField) {
            return $this->liipSerializer->serialize($value, 'json');
        }

        $result = [];
        $reflection = new ReflectionClass(get_class($value));

        if (!$reflection->isUserDefined()) {
            return (array) $value;
        }

        foreach ($reflection->getProperties() as $property) {
            $this->encodeProperty($value, $property, $result);
        }

        return $result;
    }

    /**
     * @param mixed               $object
     * @param \ReflectionProperty $property
     * @param mixed[]             $result
     *
     * @SuppressWarnings(PHPMD.ElseExpression)
     */
    protected function encodeProperty($object, \ReflectionProperty $property, array &$result): void
    {
        $annotations = new PropertyAnnotations($this->annotationReader->getPropertyAnnotations($property));

        if (!($annotations->serializedName instanceof SerializedName)) {
            return;
        }

        if ($annotations->accessor instanceof Accessor && !empty($annotations->accessor->getter)) {
            $value = $object->{$annotations->accessor->getter}();
        } else {
            $property->setAccessible(true);
            $value = $property->getValue($object);
        }

        if ($this->isNoTransform($property)) {
            $result[$annotations->serializedName->name] = $value;
        } elseif ($annotations->type instanceof Type) {
            $result[$annotations->serializedName->name] =
                StrategyFactory::encodeStrategyByType(
                    $annotations->type->type,
                    $value,
                    $this->annotationReader,
                    $this->liipSerializer
                )->encode($value, $annotations);
        } else {
            $result[$annotations->serializedName->name] =
                StrategyFactory::encodeStrategyByType(
                    gettype($value),
                    $value,
                    $this->annotationReader,
                    $this->liipSerializer
                )->encode($value, $annotations);
        }
    }

    /**
     * Returns true if NoTransform annotation was used
     *
     * @param \ReflectionProperty $property
     *
     * @return bool
     */
    protected function isNoTransform(\ReflectionProperty $property): bool
    {
        $isNoTransform = $this->annotationReader->getPropertyAnnotation($property, NoTransform::class);

        return $isNoTransform instanceof NoTransform;
    }
}
