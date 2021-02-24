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
    use SkippableHandlerTrait;

    private const SKIP_FLAG = 'tag_is_being_handled';

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
        if (
            array_key_exists('params', $type) &&
            is_array($type['params']) &&
            array_key_exists(static::SKIP_FLAG, $type['params'])
        ) {
            static::skip();
        }

        if (is_array($tag)) {
            return $context->getNavigator()->accept($tag, [
                'name' => CustomerTag::class,
                'params' => [static::SKIP_FLAG => true]
            ]);
        }

        return new CustomerTag((string) $tag);
    }
}
