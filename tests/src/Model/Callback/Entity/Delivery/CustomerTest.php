<?php

/**
 * PHP version 7.3
 *
 * @category CustomerTest
 * @package  RetailCrm\Tests\Model\Callback\Entity\Delivery
 */

namespace RetailCrm\Tests\Model\Callback\Entity\Delivery;

use Liip\Serializer\SerializerInterface;
use PHPUnit\Framework\TestCase;
use RetailCrm\Api\Factory\SerializerFactory;
use RetailCrm\Api\Model\Callback\Entity\Delivery\Customer;

/**
 * Class CustomerTest
 *
 * @category CustomerTest
 * @package  RetailCrm\Tests\Model\Callback\Entity\Delivery
 */
class CustomerTest extends TestCase
{
    public function testDeserialize(): void
    {
        /** @var Customer $customer */
        $customer = SerializerFactory::create()->fromArray(['phones' => ['88005553125']], Customer::class);

        self::assertInstanceOf(Customer::class, $customer);
        self::assertEquals(['88005553125'], $customer->phones);
    }
}
