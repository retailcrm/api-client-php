<?php

/**
 * PHP version 7.3
 *
 * @category PackageItemTest
 * @package  RetailCrm\Tests\Model\Callback\Entity\Delivery
 */

namespace RetailCrm\Tests\Model\Callback\Entity\Delivery;

use PHPUnit\Framework\TestCase;
use RetailCrm\Api\Factory\SerializerFactory;
use RetailCrm\Api\Model\Callback\Entity\Delivery\PackageItem;
use RetailCrm\Api\Model\Entity\MarkingObject;

/**
 * Class PackageItemTest
 *
 * @category PackageItemTest
 * @package  RetailCrm\Tests\Model\Callback\Entity\Delivery
 */
class PackageItemTest extends TestCase
{
    public function testDeserializeWithoutMarkingObjects(): void
    {
        /** @var PackageItem $packageItem */
        $packageItem = SerializerFactory::create()->fromArray(
            ['markingCodes' => ['legacy-code']],
            PackageItem::class
        );

        self::assertNull($packageItem->markingObjects);
        self::assertSame(['legacy-code'], $packageItem->markingCodes);
    }

    public function testDeserializeEmptyMarkingObjects(): void
    {
        /** @var PackageItem $packageItem */
        $packageItem = SerializerFactory::create()->fromArray(
            [
                'markingObjects' => [],
                'markingCodes' => ['legacy-code'],
            ],
            PackageItem::class
        );

        self::assertSame([], $packageItem->markingObjects);
        self::assertSame(['legacy-code'], $packageItem->markingCodes);
    }

    public function testDeserializeNullMarkingObjects(): void
    {
        /** @var PackageItem $packageItem */
        $packageItem = SerializerFactory::create()->fromArray(
            [
                'markingObjects' => null,
                'markingCodes' => ['legacy-code'],
            ],
            PackageItem::class
        );

        self::assertNull($packageItem->markingObjects);
        self::assertSame(['legacy-code'], $packageItem->markingCodes);
    }

    /**
     * @param array<int, array<string, string>> $markingObjects
     *
     * @dataProvider markingObjectsProvider
     */
    public function testDeserializeMarkingObjects(array $markingObjects): void
    {
        /** @var PackageItem $packageItem */
        $packageItem = SerializerFactory::create()->fromArray(
            [
                'markingObjects' => $markingObjects,
                'markingCodes' => ['legacy-code'],
            ],
            PackageItem::class
        );

        self::assertCount(count($markingObjects), $packageItem->markingObjects);

        foreach ($markingObjects as $index => $expected) {
            self::assertInstanceOf(MarkingObject::class, $packageItem->markingObjects[$index]);
            self::assertSame($expected['code'], $packageItem->markingObjects[$index]->code);
            self::assertSame($expected['provider'], $packageItem->markingObjects[$index]->provider);
        }

        self::assertSame(['legacy-code'], $packageItem->markingCodes);
    }

    /**
     * @return array<string, array<int, array<int, array<string, string>>>>
     */
    public function markingObjectsProvider(): array
    {
        return [
            'one marking object' => [
                [
                    [
                        'code' => 'chestny-znak-code',
                        'provider' => 'chestny_znak',
                    ],
                ],
            ],
            'multiple marking objects' => [
                [
                    [
                        'code' => '1234567890123456',
                        'provider' => 'giis_dmdk',
                    ],
                    [
                        'code' => 'chestny-znak-code',
                        'provider' => 'chestny_znak',
                    ],
                ],
            ],
            'unknown provider' => [
                [
                    [
                        'code' => 'future-provider-code',
                        'provider' => 'future_provider',
                    ],
                ],
            ],
        ];
    }
}
