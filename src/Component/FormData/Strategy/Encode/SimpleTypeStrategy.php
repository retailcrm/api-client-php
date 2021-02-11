<?php

/**
 * PHP version 7.3
 *
 * @category SimpleTypeStrategy
 * @package  RetailCrm\Api\Component\FormData\Strategy\Encode
 */

namespace RetailCrm\Api\Component\FormData\Strategy\Encode;

use RetailCrm\Api\Component\FormData\PropertyAnnotations;
use RetailCrm\Api\Component\FormData\Strategy\StrategyFactory;

/**
 * Class SimpleTypeStrategy
 *
 * @package RetailCrm\Api\Component\FormData\Strategy\Encode
 */
class SimpleTypeStrategy extends AbstractEncodeStrategy
{
    /**
     * @inheritDoc
     */
    public function encode($value, ?PropertyAnnotations $annotations)
    {
        switch (gettype($value)) {
            case 'bool':
            case 'boolean':
                return (bool) $value;
            case 'int':
            case 'integer':
                return (int) $value;
            case 'float':
                return (float) $value;
            case 'double':
                return (double) $value;
            case 'string':
                return (string) $value;
            default:
                return $this->encodeDefault($value);
        }
    }

    /**
     * @param mixed $value
     *
     * @return mixed[]|null
     */
    private function encodeDefault($value): ?array
    {
        if (is_iterable($value)) {
            $result = [];

            foreach ($value as $key => $item) {
                $result[$key] = StrategyFactory::encodeStrategyByType(
                    gettype($item),
                    $this->annotationReader,
                    $this->jmsSerializer
                )->encode($item, new PropertyAnnotations());
            }

            return $result;
        }

        return null;
    }
}
