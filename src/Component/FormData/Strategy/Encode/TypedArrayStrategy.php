<?php

/**
 * PHP version 7.3
 *
 * @category TypedArrayStrategy
 * @package  RetailCrm\Api\Component\FormData\Strategy\Encode
 */

namespace RetailCrm\Api\Component\FormData\Strategy\Encode;

use Doctrine\Common\Annotations\Reader;
use Liip\Serializer\SerializerInterface;
use RetailCrm\Api\Component\FormData\Mapping\JsonField;
use RetailCrm\Api\Component\FormData\PropertyAnnotations;
use RetailCrm\Api\Component\FormData\Strategy\StrategyFactory;

/**
 * Class TypedArrayStrategy
 *
 * @package RetailCrm\Api\Component\FormData\Strategy\Encode
 *
 * @SuppressWarnings(PHPMD.ElseExpression)
 */
class TypedArrayStrategy extends AbstractEncodeStrategy
{
    /** @var string */
    private static $innerTypesMatcher = '/^([a-z]+)\s*\,?\s*(.+?\>)/m';

    /** @var \RetailCrm\Api\Component\FormData\Strategy\Encode\SimpleTypeStrategy */
    private $simpleStrategy;

    /**
     * TypedArrayStrategy constructor.
     *
     * @param \Doctrine\Common\Annotations\Reader  $annotationReader
     * @param \Liip\Serializer\SerializerInterface $liipSerializer
     */
    public function __construct(Reader $annotationReader, SerializerInterface $liipSerializer)
    {
        parent::__construct($annotationReader, $liipSerializer);

        $this->simpleStrategy = new SimpleTypeStrategy($this->annotationReader, $this->liipSerializer);
    }

    /**
     * @param mixed                                                      $value
     * @param \RetailCrm\Api\Component\FormData\PropertyAnnotations|null $annotations
     *
     * @return mixed[]|mixed
     */
    public function encode($value, ?PropertyAnnotations $annotations = null)
    {
        if (!is_array($value)) {
            return $value;
        }

        if (strpos($this->innerType, ',') !== false) {
            [$keyType, $valueType] = static::getInnerTypes($this->innerType);

            if ('' === $keyType && '' === $valueType) {
                $valueType = $this->innerType;
            }
        } else {
            $valueType = $this->innerType;
        }

        if (null !== $annotations && $annotations->jsonField instanceof JsonField && !empty($value)) {
            return $this->liipSerializer->serialize($value, 'json');
        }

        return $this->encodeRegularArray($value, $valueType);
    }

    /**
     * Encode regular typed array.
     *
     * @param array<string|int, mixed> $value
     * @param string               $valueType
     *
     * @return array<string|int, mixed>
     */
    private function encodeRegularArray(array $value, string $valueType): array
    {
        $result = [];

        foreach (array_keys($value) as $key) {
            $result[$this->simpleStrategy->encode($key, new PropertyAnnotations())]
                = StrategyFactory::encodeStrategyByType(
                    $valueType,
                    $value[$key],
                    $this->annotationReader,
                    $this->liipSerializer
                )->encode($value[$key], new PropertyAnnotations());
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
