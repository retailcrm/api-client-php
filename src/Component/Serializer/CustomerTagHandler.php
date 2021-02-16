<?php

/**
 * PHP version 7.3
 *
 * @category CustomerTagHandler
 * @package  RetailCrm\Api\Component\Serializer
 */

namespace RetailCrm\Api\Component\Serializer;

use JMS\Serializer\Context;
use JMS\Serializer\GraphNavigatorInterface;
use JMS\Serializer\Handler\SubscribingHandlerInterface;
use JMS\Serializer\JsonDeserializationVisitor;
use JMS\Serializer\JsonSerializationVisitor;
use RetailCrm\Api\Model\Entity\Customers\CustomerTag;

/**
 * Class CustomerTagHandler
 *
 * This handler provides support for (de)serialization of customer tags both for modifying and receiving data.
 *
 * @category CustomerTagHandler
 * @package  RetailCrm\Api\Component\Serializer
 */
class CustomerTagHandler implements SubscribingHandlerInterface
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
                'type' => CustomerTag::class,
                'method' => 'serialize',
            ],
            [
                'direction' => GraphNavigatorInterface::DIRECTION_DESERIALIZATION,
                'format' => 'json',
                'type' => CustomerTag::class,
                'method' => 'deserialize',
            ],
        ];
    }

    /**
     * @param \JMS\Serializer\JsonSerializationVisitor          $visitor
     * @param \RetailCrm\Api\Model\Entity\Customers\CustomerTag $tag
     * @param mixed[][]                                         $type
     * @param \JMS\Serializer\Context                           $context
     *
     * @return string
     *
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function serialize(
        JsonSerializationVisitor $visitor,
        CustomerTag $tag,
        array $type,
        Context $context
    ): string {
        return $tag->name;
    }

    /**
     * @param \JMS\Serializer\JsonDeserializationVisitor $visitor
     * @param mixed[]|string                             $tag
     * @param mixed[]                                    $type
     * @param \JMS\Serializer\Context                    $context
     *
     * @return \RetailCrm\Api\Model\Entity\Customers\CustomerTag
     *
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function deserialize(JsonDeserializationVisitor $visitor, $tag, array $type, Context $context): CustomerTag
    {
        if (is_array($tag)) {
            $instance = new CustomerTag();

            foreach ($tag as $key => $value) {
                switch ($key) {
                    case 'name':
                        $instance->name = (string) $value;
                        break;
                    case 'color':
                        $instance->color = (string) $value;
                        break;
                    case 'attached':
                        $instance->attached = (bool) $value;
                        break;
                }
            }

            return $instance;
        }

        return new CustomerTag((string) $tag);
    }
}
