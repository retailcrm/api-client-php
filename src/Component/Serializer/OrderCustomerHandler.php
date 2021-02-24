<?php

/**
 * PHP version 7.3
 *
 * @category OrderCustomerHandler
 * @package  RetailCrm\Api\Component\Serializer
 */

namespace RetailCrm\Api\Component\Serializer;

use JMS\Serializer\Context;
use JMS\Serializer\GraphNavigatorInterface;
use JMS\Serializer\Handler\SubscribingHandlerInterface;
use JMS\Serializer\JsonDeserializationVisitor;
use RetailCrm\Api\Enum\Customers\CustomerType;
use RetailCrm\Api\Interfaces\Order\CustomerInterface;
use RetailCrm\Api\Model\Entity\Customers\Customer;
use RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate;

/**
 * Class OrderCustomerHandler
 *
 * @category OrderCustomerHandler
 * @package  RetailCrm\Api\Component\Serializer
 */
class OrderCustomerHandler implements SubscribingHandlerInterface
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
                'type' => CustomerInterface::class,
                'method' => 'deserialize',
            ],
        ];
    }

    /**
     * Deserialize customer data into regular or corporate models depends on type field.
     * This field will be present in the customer data in both cases.
     *
     * @param \JMS\Serializer\JsonDeserializationVisitor $visitor
     * @param mixed                                      $customer
     * @param mixed[]                                    $type
     * @param \JMS\Serializer\Context                    $context
     *
     * @return \RetailCrm\Api\Interfaces\Order\CustomerInterface|null
     *
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function deserialize(
        JsonDeserializationVisitor $visitor,
        $customer,
        array $type,
        Context $context
    ): ?CustomerInterface {
        if (
            !is_array($customer) ||
            (array_key_exists('name', $type) && CustomerInterface::class !== $type['name'])
        ) {
            static::skip();
        }

        if (CustomerType::CORPORATE_CUSTOMER === (string) ($customer['type'] ?? CustomerType::CUSTOMER)) {
            return $context->getNavigator()->accept(
                $customer,
                ['name' => CustomerCorporate::class, 'params' => []]
            );
        }

        return $context->getNavigator()->accept($customer, ['name' => Customer::class, 'params' => []]);
    }
}
