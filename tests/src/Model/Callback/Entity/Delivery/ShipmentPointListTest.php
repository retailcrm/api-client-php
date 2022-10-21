<?php

/**
 * PHP version 7.3
 *
 * @category ShipmentPointListTest
 * @package  RetailCrm\Tests\Model\Callback\Entity\Delivery
 */

namespace RetailCrm\Tests\Model\Callback\Entity\Delivery;

use PHPUnit\Framework\TestCase;
use RetailCrm\Api\Factory\SerializerFactory;
use RetailCrm\Api\Model\Callback\Entity\Delivery\ShipmentPointList;

/**
 * Class ShipmentPointListTest
 *
 * @category ShipmentPointListTest
 * @package  RetailCrm\Tests\Model\Callback\Entity\Delivery
 */
class ShipmentPointListTest extends TestCase
{
    public function testDeserialize(): void
    {
        /** @var ShipmentPointList $pointList */
        $pointList = SerializerFactory::create()->fromArray(
            [
                'clientId' => '1111',
                'country' => 'RU',
                'region' => 'big-area',
                'regionId' => 112,
                'city' => 'small-town',
                'cityId' => 25,
                'code' => 'warehouse',
            ],
            ShipmentPointList::class
        );

        static::assertInstanceOf(ShipmentPointList::class, $pointList);
        static::assertEquals('1111', $pointList->clientId);
        static::assertEquals('warehouse', $pointList->code);
    }
}
