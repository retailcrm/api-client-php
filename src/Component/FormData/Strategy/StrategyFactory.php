<?php

/**
 * PHP version 7.3
 *
 * @category StrategyFactory
 * @package  RetailCrm\Api\Component\FormData\Strategy
 */

namespace RetailCrm\Api\Component\FormData\Strategy;

use DateTime;
use Doctrine\Common\Annotations\Reader;
use Liip\Serializer\SerializerInterface;
use Psr\Http\Message\StreamInterface;
use RetailCrm\Api\Component\FormData\Strategy\Encode;
use RetailCrm\Api\Component\FormData\Strategy\Encode\EncodeStrategyInterface;

/**
 * Class StrategyFactory
 *
 * @category StrategyFactory
 * @package  RetailCrm\Api\Component\FormData\Strategy
 */
class StrategyFactory
{
    /** @var string */
    private const TYPED_MATCHER = '/^\\\\?([a-zA-Z0-9_]+)\s*\<(.+)\>$/m';

    /** @var string[] $simpleTypes */
    private static $simpleTypes = [
        'bool',
        'boolean',
        'int',
        'integer',
        'float',
        'double',
        'string',
        'array'
    ];

    /**
     * Returns encode strategy for provided type
     *
     * @param string                              $dataType
     * @param mixed                               $value
     * @param \Doctrine\Common\Annotations\Reader $annotationReader
     * @param \Liip\Serializer\SerializerInterface $serializer
     *
     * @return \RetailCrm\Api\Component\FormData\Strategy\Encode\EncodeStrategyInterface
     */
    public static function encodeStrategyByType(
        string $dataType,
        $value,
        Reader $annotationReader,
        SerializerInterface $serializer
    ): EncodeStrategyInterface {
        if (in_array($dataType, static::$simpleTypes)) {
            return new Encode\SimpleTypeStrategy($annotationReader, $serializer);
        }

        if (static::isDateTime($dataType)) {
            return (new Encode\DateTimeStrategy($annotationReader, $serializer))->setInnerType(DateTime::RFC3339);
        }

        $arrSubType = static::getArrayInnerTypes($dataType);

        if (!empty($arrSubType)) {
            return (new Encode\TypedArrayStrategy($annotationReader, $serializer))->setInnerType($arrSubType);
        }

        $dateTimeFormat = static::getDateTimeFormat($dataType);

        if (!empty($dateTimeFormat)) {
            return (new Encode\DateTimeStrategy($annotationReader, $serializer))->setInnerType($dateTimeFormat);
        }

        if ($value instanceof StreamInterface) {
            return new Encode\StreamInterfaceStrategy($annotationReader, $serializer);
        }

        return new Encode\EntityStrategy($annotationReader, $serializer);
    }

    /**
     * Returns true if provided type is DateTime
     *
     * @param string $dataType
     *
     * @return bool
     */
    private static function isDateTime(string $dataType): bool
    {
        return strlen($dataType) > 1
            && (DateTime::class === $dataType
                || ('\\' === $dataType[0] && DateTime::class === substr($dataType, 1)));
    }

    /**
     * Returns array inner type for arrays like array<int, \DateTime<Y-m-d\TH:i:sP>>
     * For this example, "int, \DateTime<Y-m-d\TH:i:sP>" will be returned.
     *
     * Also works for arrays like int[].
     *
     * @param string $dataType
     *
     * @return string
     */
    private static function getArrayInnerTypes(string $dataType): string
    {
        $matches = [];

        preg_match_all(static::TYPED_MATCHER, $dataType, $matches, PREG_SET_ORDER, 0);

        if (empty($matches)) {
            if (strlen($dataType) > 2 && substr($dataType, -2) === '[]') {
                return substr($dataType, 0, -2);
            }

            return '';
        }

        if ($matches[0][1] === 'array') {
            return $matches[0][2];
        }

        return '';
    }

    /**
     * Returns DateTime format. Example: \DateTime<Y-m-d\TH:i:sP>>
     *
     * @param string $dataType
     *
     * @return string
     */
    private static function getDateTimeFormat(string $dataType): string
    {
        $matches = [];

        preg_match_all(static::TYPED_MATCHER, $dataType, $matches, PREG_SET_ORDER, 0);

        if (empty($matches)) {
            return '';
        }

        if ($matches[0][1] === 'DateTime') {
            $format = $matches[0][2];

            if (strlen($format) > 2 && $format[0] === "'" && substr($format, -1) === "'") {
                return substr($format, 1, -1);
            }

            return $format;
        }

        return '';
    }
}
