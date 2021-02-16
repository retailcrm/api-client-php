<?php

/**
 * PHP version 7.3
 *
 * @category MixedHandler
 * @package  RetailCrm\Api\Component\Serializer
 */

namespace RetailCrm\Api\Component\Serializer;

use JMS\Serializer\Context;
use JMS\Serializer\GraphNavigatorInterface;
use JMS\Serializer\Handler\SubscribingHandlerInterface;
use JMS\Serializer\VisitorInterface;

/**
 * Class MixedHandler
 *
 * This handler allows us to serialize and deserialize models without modifying some subset of their fields.
 * It is useful when we expect a `mixed` data type.
 *
 * @category MixedHandler
 * @package  RetailCrm\Api\Component\Serializer
 */
class MixedHandler implements SubscribingHandlerInterface
{
    /**
     * @return array[]
     */
    public static function getSubscribingMethods(): array
    {
        return [
            [
                'direction' => GraphNavigatorInterface::DIRECTION_SERIALIZATION,
                'format' => 'json',
                'type' => 'mixed',
                'method' => 'process',
            ],
            [
                'direction' => GraphNavigatorInterface::DIRECTION_DESERIALIZATION,
                'format' => 'json',
                'type' => 'mixed',
                'method' => 'process',
            ],
        ];
    }

    /**
     * Returns value without any modification.
     *
     * @param \JMS\Serializer\VisitorInterface $visitor
     * @param mixed[]|string                   $value
     * @param mixed[]                          $type
     * @param \JMS\Serializer\Context          $context
     *
     * @return mixed
     *
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function process(VisitorInterface $visitor, $value, array $type, Context $context)
    {
        return $value;
    }
}
