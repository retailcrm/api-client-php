<?php

/**
 * PHP version 7.3
 *
 * @category OrderDeliveryDataHandler
 * @package  RetailCrm\Api\Component\Serializer
 */

namespace RetailCrm\Api\Component\Serializer;

use JMS\Serializer\Context;
use JMS\Serializer\GraphNavigatorInterface;
use JMS\Serializer\Handler\SubscribingHandlerInterface;
use JMS\Serializer\JsonDeserializationVisitor;
use RetailCrm\Api\Interfaces\Order\DeliveryDataInterface;
use RetailCrm\Api\Model\Entity\Order\DeliveryData\GenericData;

/**
 * Class OrderDeliveryDataHandler
 *
 * @category OrderDeliveryDataHandler
 * @package  RetailCrm\Api\Component\Serializer
 */
class OrderDeliveryDataHandler implements SubscribingHandlerInterface
{
    use SkippableHandlerTrait;

    /**
     * @return array[]
     */
    public static function getSubscribingMethods(): array
    {
        return [
            [
                'direction' => GraphNavigatorInterface::DIRECTION_DESERIALIZATION,
                'format' => 'json',
                'type' => DeliveryDataInterface::class,
                'method' => 'deserialize',
            ],
        ];
    }

    /**
     * Deserialize order data with delivery data.
     *
     * @param \JMS\Serializer\JsonDeserializationVisitor $visitor
     * @param mixed                                      $deliveryData
     * @param mixed[]                                    $type
     * @param \JMS\Serializer\Context                    $context
     *
     * @return DeliveryDataInterface
     *
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function deserialize(
        JsonDeserializationVisitor $visitor,
        $deliveryData,
        array $type,
        Context $context
    ): DeliveryDataInterface {
        if (
            !is_array($deliveryData) ||
            (array_key_exists('name', $type) && DeliveryDataInterface::class !== $type['name'])
        ) {
            static::skip();
        }

        // TODO: Add cases for integration codes which models are available in the library.
        switch ($type['params'][SerializedOrderDeliveryHandler::PARAM_KEY]) {
            default:
                $type['name'] = GenericData::class;
                break;
        }

        return $context->getNavigator()->accept($deliveryData, $type);
    }
}
