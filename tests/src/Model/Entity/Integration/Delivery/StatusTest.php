<?php

namespace RetailCrm\Tests\Model\Entity\Integration\Delivery;

use PHPUnit\Framework\TestCase;
use RetailCrm\Api\Factory\SerializerFactory;
use RetailCrm\Api\Model\Entity\Integration\Delivery\Status;

class StatusTest extends TestCase
{
    public function testDeserialize(): void
    {
        $status = SerializerFactory::create()->fromArray([
            'code' => 'statusCode',
            'name' => 'statusName',
            'isEditable' => true,
            'isError' => false,
            'isPreprocessing' => true,
        ], Status::class);

        self::assertInstanceOf(Status::class, $status);
        self::assertEquals('statusCode', $status->code);
        self::assertEquals('statusName', $status->name);
        self::assertTrue($status->isEditable);
        self::assertFalse($status->isError);
        self::assertTrue($status->isPreprocessing);
    }
}
