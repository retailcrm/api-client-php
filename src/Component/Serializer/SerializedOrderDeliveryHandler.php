<?php

/**
 * PHP version 7.3
 *
 * @category SerializedOrderDeliveryHandler
 * @package  RetailCrm\Api\Component\Serializer
 */

namespace RetailCrm\Api\Component\Serializer;

use JMS\Serializer\Context;
use JMS\Serializer\GraphNavigatorInterface;
use JMS\Serializer\Handler\SubscribingHandlerInterface;
use JMS\Serializer\JsonDeserializationVisitor;
use RetailCrm\Api\Model\Entity\Order\SerializedOrderDelivery;

/**
 * Class SerializedOrderDeliveryHandler
 *
 * @category SerializedOrderDeliveryHandler
 * @package  RetailCrm\Api\Component\Serializer
 */
class SerializedOrderDeliveryHandler implements SubscribingHandlerInterface
{
    use SkippableHandlerTrait;

    public const PARAM_KEY = 'order_delivery_integration_code';

    /**
     * @return array[]
     */
    public static function getSubscribingMethods(): array
    {
        return [
            [
                'direction' => GraphNavigatorInterface::DIRECTION_DESERIALIZATION,
                'format' => 'json',
                'type' => SerializedOrderDelivery::class,
                'method' => 'deserialize',
            ],
        ];
    }

    /**
     * Deserialize order data. Provide delivery integration code for the OrderDeliveryDataHandler.
     *
     * @param \JMS\Serializer\JsonDeserializationVisitor $visitor
     * @param mixed                                      $data
     * @param mixed[]                                    $type
     * @param \JMS\Serializer\Context                    $context
     *
     * @return SerializedOrderDelivery
     *
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function deserialize(
        JsonDeserializationVisitor $visitor,
        $data,
        array $type,
        Context $context
    ): SerializedOrderDelivery {
        if (!is_array($data) || !empty($type['params'][static::PARAM_KEY])) {
            static::skip();
        }

        if (!empty($data['integrationCode'])) {
            $type['params'][static::PARAM_KEY] = $data['integrationCode'];
        }

        return $context->getNavigator()->accept($data, $type);
    }
}
