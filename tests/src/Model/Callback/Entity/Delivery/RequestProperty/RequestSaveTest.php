<?php

/**
 * PHP version 7.3
 *
 * @category RequestSaveTest
 * @package  RetailCrm\Tests\Model\Callback\Entity\Delivery\RequestProperty
 */

namespace RetailCrm\Tests\Model\Callback\Entity\Delivery\RequestProperty;

use PHPUnit\Framework\TestCase;
use RetailCrm\Api\Factory\SerializerFactory;
use RetailCrm\Api\Model\Callback\Entity\Delivery\RequestProperty\RequestSave;
use RetailCrm\Api\Model\Entity\MarkingObject;

/**
 * Class RequestSaveTest
 *
 * @category RequestSaveTest
 * @package  RetailCrm\Tests\Model\Callback\Entity\Delivery\RequestProperty
 */
class RequestSaveTest extends TestCase
{
    public function testDeserializePackageItemMarkingObjects(): void
    {
        /** @var RequestSave $request */
        $request = SerializerFactory::create()->fromArray(
            [
                'packages' => [
                    [
                        'items' => [
                            [
                                'markingObjects' => [
                                    [
                                        'code' => '1234567890123456',
                                        'provider' => 'giis_dmdk',
                                    ],
                                ],
                                'markingCodes' => ['legacy-code'],
                            ],
                        ],
                    ],
                ],
            ],
            RequestSave::class
        );

        $packageItem = $request->packages[0]->items[0];

        self::assertInstanceOf(MarkingObject::class, $packageItem->markingObjects[0]);
        self::assertSame('1234567890123456', $packageItem->markingObjects[0]->code);
        self::assertSame('giis_dmdk', $packageItem->markingObjects[0]->provider);
        self::assertSame(['legacy-code'], $packageItem->markingCodes);
    }
}
