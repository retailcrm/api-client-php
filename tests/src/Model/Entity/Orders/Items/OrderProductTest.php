<?php

/**
 * PHP version 7.3
 *
 * @category OrderProductTest
 * @package  RetailCrm\Tests\Model\Entity\Orders\Items
 */

namespace RetailCrm\Tests\Model\Entity\Orders\Items;

use PHPUnit\Framework\TestCase;
use RetailCrm\Api\Factory\SerializerFactory;
use RetailCrm\Api\Model\Entity\MarkingObject;
use RetailCrm\Api\Model\Entity\Orders\Items\OrderProduct;

/**
 * Class OrderProductTest
 *
 * @category OrderProductTest
 * @package  RetailCrm\Tests\Model\Entity\Orders\Items
 */
class OrderProductTest extends TestCase
{
    public function testMarkingObjectsRoundTrip(): void
    {
        $serializer = SerializerFactory::create();
        $data = [
            'markingObjects' => [
                [
                    'code' => 'chestny-znak-code',
                    'provider' => 'chestny_znak',
                ],
                [
                    'code' => '1234567890123456',
                    'provider' => 'giis_dmdk',
                ],
            ],
        ];

        /** @var OrderProduct $orderProduct */
        $orderProduct = $serializer->fromArray($data, OrderProduct::class);

        self::assertCount(2, $orderProduct->markingObjects);
        self::assertContainsOnlyInstancesOf(MarkingObject::class, $orderProduct->markingObjects);
        self::assertSame('chestny-znak-code', $orderProduct->markingObjects[0]->code);
        self::assertSame('chestny_znak', $orderProduct->markingObjects[0]->provider);
        self::assertSame('1234567890123456', $orderProduct->markingObjects[1]->code);
        self::assertSame('giis_dmdk', $orderProduct->markingObjects[1]->provider);
        self::assertSame($data, $serializer->toArray($orderProduct));
    }

    public function testLegacyMarkingCodesRoundTrip(): void
    {
        $serializer = SerializerFactory::create();
        $data = ['markingCodes' => ['legacy-code']];

        /** @var OrderProduct $orderProduct */
        $orderProduct = $serializer->fromArray($data, OrderProduct::class);

        self::assertNull($orderProduct->markingObjects);
        self::assertSame($data, $serializer->toArray($orderProduct));
    }

    public function testEmptyMarkingObjectsRoundTrip(): void
    {
        $serializer = SerializerFactory::create();
        $data = ['markingObjects' => []];

        /** @var OrderProduct $orderProduct */
        $orderProduct = $serializer->fromArray($data, OrderProduct::class);

        self::assertSame([], $orderProduct->markingObjects);
        self::assertSame($data, $serializer->toArray($orderProduct));
    }
}
