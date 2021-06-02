<?php

/**
 * PHP version 7.3
 *
 * @category JMSTypeParser
 * @package  RetailCrm\Api\Component\Serializer\Parser
 */

namespace RetailCrm\Api\Component\Serializer\Parser;

use Liip\MetadataParser\Exception\InvalidTypeException;
use Liip\MetadataParser\Metadata\DateTimeOptions;
use Liip\MetadataParser\Metadata\PropertyType;
use Liip\MetadataParser\Metadata\PropertyTypeArray;
use Liip\MetadataParser\Metadata\PropertyTypeClass;
use Liip\MetadataParser\Metadata\PropertyTypeDateTime;
use Liip\MetadataParser\Metadata\PropertyTypePrimitive;
use Liip\MetadataParser\Metadata\PropertyTypeUnknown;
use RetailCrm\Api\Component\Serializer\Type\PropertyTypeMixed;

/**
 * Class JMSTypeParser
 *
 * @category JMSTypeParser
 * @package  RetailCrm\Api\Component\Serializer\Parser
 * @license  https://github.com/liip/metadata-parser/blob/master/LICENSE MIT License
 * @author   Liip <https://github.com/liip>
 * @author   Pavel Kovalenko
 * @see      https://github.com/liip/metadata-parser
 * @internal
 *
 * @SuppressWarnings(PHPMD)
 */
class JMSTypeParser
{
    private const TYPE_ARRAY = 'array';

    /**
     * @var \RetailCrm\Api\Component\Serializer\Parser\BaseJMSParser
     */
    private $jmsTypeParser;

    /**
     * JMSTypeParser constructor.
     */
    public function __construct()
    {
        $this->jmsTypeParser = new BaseJMSParser();
    }

    /**
     * @param string $rawType
     *
     * @return \Liip\MetadataParser\Metadata\PropertyType
     */
    public function parse(string $rawType): PropertyType
    {
        if ('' === $rawType) {
            return new PropertyTypeUnknown(true);
        }

        return $this->parseType($this->jmsTypeParser->parse($rawType));
    }

    /**
     * @param array<mixed> $typeInfo
     * @param bool         $isSubType
     *
     * @return \Liip\MetadataParser\Metadata\PropertyType
     */
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
                return new PropertyTypeArray(new PropertyTypeUnknown(false), false, $nullable);
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

        if (self::TYPE_ARRAY === $typeInfo['name']) {
            if (1 === \count($typeInfo['params'])) {
                return new PropertyTypeArray(
                    $this->parseType($typeInfo['params'][0], true),
                    false,
                    $nullable
                );
            }
            if (2 === \count($typeInfo['params'])) {
                return new PropertyTypeArray(
                    $this->parseType($typeInfo['params'][1], true),
                    true,
                    $nullable
                );
            }

            throw new InvalidTypeException(sprintf(
                'JMS property type array can\'t have more than 2 parameters (%s)',
                var_export($typeInfo, true)
            ));
        }

        if (PropertyTypeDateTime::isTypeDateTime($typeInfo['name'])) {
            // the case of datetime without params is already handled above, we know we have params
            return PropertyTypeDateTime::fromDateTimeClass(
                $typeInfo['name'],
                $nullable,
                new DateTimeOptions(
                    $typeInfo['params'][0] ?: null,
                    ($typeInfo['params'][1] ?? null) ?: null,
                    ($typeInfo['params'][2] ?? null) ?: null
                )
            );
        }

        throw new InvalidTypeException(sprintf('Unknown JMS property found (%s)', var_export($typeInfo, true)));
    }
}
