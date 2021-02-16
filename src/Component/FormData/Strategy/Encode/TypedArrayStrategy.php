<?php

/**
 * PHP version 7.3
 *
 * @category TypedArrayStrategy
 * @package  RetailCrm\Api\Component\FormData\Strategy\Encode
 */

namespace RetailCrm\Api\Component\FormData\Strategy\Encode;

use RetailCrm\Api\Component\FormData\Mapping\JsonField;
use RetailCrm\Api\Component\FormData\PropertyAnnotations;
use RetailCrm\Api\Component\FormData\Strategy\StrategyFactory;

/**
 * Class TypedArrayStrategy
 *
 * @package RetailCrm\Api\Component\FormData\Strategy\Encode
 */
class TypedArrayStrategy extends AbstractEncodeStrategy
{
    /** @var string */
    private static $innerTypesMatcher = '/^([a-z]+)\s*\,?\s*(.+?\>)/m';

    /**
     * @param mixed                                                      $value
     * @param \RetailCrm\Api\Component\FormData\PropertyAnnotations|null $annotations
     *
     * @return mixed[]|mixed
     *
     * @SuppressWarnings(PHPMD.ElseExpression)
     */
    public function encode($value, ?PropertyAnnotations $annotations = null)
    {
        if (null !== $annotations && $annotations->jsonField instanceof JsonField && !empty($value)) {
            return $this->jmsSerializer->serialize($value, 'json');
        }

        if (!is_array($value)) {
            return $value;
        }

        $valueType = '';
        $result = [];

        if (strpos($this->innerType, ',') !== false) {
            [$keyType, $valueType] = static::getInnerTypes($this->innerType);

            if ('' === $keyType && '' === $valueType) {
                $valueType = $this->innerType;
            }
        } else {
            $valueType = $this->innerType;
        }

        $simpleStrategy = new SimpleTypeStrategy($this->annotationReader, $this->jmsSerializer);

        foreach (array_keys($value) as $key) {
            $result[$simpleStrategy->encode($key, new PropertyAnnotations())]
                = StrategyFactory::encodeStrategyByType($valueType, $this->annotationReader, $this->jmsSerializer)
                ->encode($value[$key], new PropertyAnnotations());
        }

        return $result;
    }

    /**
     * Returns inner types for array with typed key (example: array<string, DateTime<Y m d H i s>>).
     *
     * @param string $innerType
     *
     * @return string[]
     */
    private static function getInnerTypes(string $innerType): array
    {
        $matches = [];

        preg_match_all(static::$innerTypesMatcher, $innerType, $matches, PREG_SET_ORDER, 0);

        if (empty($matches)) {
            return ['', ''];
        }

        $matches = $matches[0];

        return [trim($matches[1]), trim($matches[2])];
    }
}
