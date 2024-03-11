<?php

declare(strict_types=1);

namespace RetailCrm\Api\Component\Serializer\Parser;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Liip\MetadataParser\Exception\InvalidTypeException;
use Liip\MetadataParser\Metadata\AbstractPropertyType;
use Liip\MetadataParser\Metadata\DateTimeOptions;
use Liip\MetadataParser\Metadata\PropertyType;
use Liip\MetadataParser\Metadata\PropertyTypeClass;
use Liip\MetadataParser\Metadata\PropertyTypeDateTime;
use Liip\MetadataParser\Metadata\PropertyTypeIterable;
use Liip\MetadataParser\Metadata\PropertyTypeArray;
use Liip\MetadataParser\Metadata\PropertyTypePrimitive;
use Liip\MetadataParser\Metadata\PropertyTypeUnknown;
use RetailCrm\Api\Component\Serializer\Parser\JMSCore\Type\Parser;
use RetailCrm\Api\Component\Serializer\Type\PropertyTypeMixed;

final class JMSTypeParser
{
    private const TYPE_ARRAY = 'array';
    private const TYPE_ARRAY_COLLECTION = 'ArrayCollection';
    private const TYPE_DATETIME_INTERFACE = 'DateTimeInterface';

    /**
     * @var Parser
     */
    private Parser $jmsTypeParser;

    private $useArrayDateFormat = true;

    public function __construct()
    {
        $this->jmsTypeParser = new Parser();
        $this->useArrayDateFormat = null === (new \ReflectionClass(DateTimeOptions::class))
                ->getConstructor()->getParameters()[2]->getType();
    }

    public function parse(string $rawType): PropertyType
    {
        if ('' === $rawType) {
            return new PropertyTypeUnknown(true);
        }

        return $this->parseType($this->jmsTypeParser->parse($rawType));
    }

    private function parseType(array $typeInfo, bool $isSubType = false): PropertyType
    {
        $typeInfo = array_merge(
            [
                'name' => null,
                'params' => [],
            ],
            $typeInfo
        );

        // JMS types are nullable except if it's a sub type (part of array)
        $nullable = !$isSubType;

        if (0 === \count($typeInfo['params'])) {
            if (self::TYPE_ARRAY === $typeInfo['name']) {
                return self::iterableType(new PropertyTypeUnknown(false), false, $nullable);
            }

            if (PropertyTypePrimitive::isTypePrimitive($typeInfo['name'])) {
                return new PropertyTypePrimitive($typeInfo['name'], $nullable);
            }
            if (PropertyTypeDateTime::isTypeDateTime($typeInfo['name'])) {
                return PropertyTypeDateTime::fromDateTimeClass($typeInfo['name'], $nullable);
            }

            if (PropertyTypeMixed::TYPE_NAME === $typeInfo['name']) {
                return new PropertyTypeMixed();
            }

            return new PropertyTypeClass($typeInfo['name'], $nullable);
        }

        $collectionClass = $this->getCollectionClass($typeInfo['name']);
        if (self::TYPE_ARRAY === $typeInfo['name'] || $collectionClass) {
            if (1 === \count($typeInfo['params'])) {
                return self::iterableType($this->parseType($typeInfo['params'][0], true), false, $nullable, $collectionClass);
            }
            if (2 === \count($typeInfo['params'])) {
                return self::iterableType($this->parseType($typeInfo['params'][1], true), true, $nullable, $collectionClass);
            }

            throw new InvalidTypeException(sprintf('JMS property type array can\'t have more than 2 parameters (%s)', var_export($typeInfo, true)));
        }

        if (PropertyTypeDateTime::isTypeDateTime($typeInfo['name']) || (self::TYPE_DATETIME_INTERFACE === $typeInfo['name'])) {
            // the case of datetime without params is already handled above, we know we have params
            $serializeFormat = $typeInfo['params'][0] ?: null;
            // {@link \JMS\Serializer\Handler\DateHandler} of jms/serializer defaults to using the serialization format as a deserialization format if none was supplied...
            $deserializeFormats = ($typeInfo['params'][2] ?? null) ?: $serializeFormat;
            // ... and always converts single strings to arrays
            $deserializeFormats = \is_string($deserializeFormats) ? [$deserializeFormats] : $deserializeFormats;
            // Jms defaults to DateTime when given DateTimeInterface despite the documentation saying DateTimeImmutable, {@see \JMS\Serializer\Handler\DateHandler} in jms/serializer
            $className = (self::TYPE_DATETIME_INTERFACE === $typeInfo['name']) ? \DateTime::class : $typeInfo['name'];

            return PropertyTypeDateTime::fromDateTimeClass(
                $className,
                $nullable,
                new DateTimeOptions(
                    $serializeFormat,
                    ($typeInfo['params'][1] ?? null) ?: null,
                    $this->useArrayDateFormat ? $deserializeFormats : $deserializeFormats[0],
                )
            );
        }

        throw new InvalidTypeException(sprintf('Unknown JMS property found (%s)', var_export($typeInfo, true)));
    }

    private function getCollectionClass(string $name): ?string
    {
        switch ($name) {
            case self::TYPE_ARRAY_COLLECTION:
                return ArrayCollection::class;
            default:
                return is_a($name, Collection::class, true) ? $name : null;
        }
    }

    private static function iterableType(
        PropertyType $subType,
        bool $hashmap,
        bool $nullable,
        ?string $collectionClass = null
    ): AbstractPropertyType {
        if (class_exists('Liip\MetadataParser\Metadata\PropertyTypeIterable')) {
            return new PropertyTypeIterable($subType, $hashmap, $nullable, $collectionClass);
        }

        return new PropertyTypeArray($subType, $hashmap, $nullable, $collectionClass !== null);
    }
}
