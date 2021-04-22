<?php

/**
 * PHP 7.3
 *
 * @category ClientBuilderTest
 * @package  RetailCrm\Tests\Builder
 */

namespace RetailCrm\Tests\Builder;

use PHPUnit\Framework\TestCase;
use RetailCrm\Api\Builder\ClientBuilder;
use RetailCrm\Api\Exception\Client\BuilderException;

/**
 * Class ClientBuilderTest
 *
 * @category ClientBuilderTest
 * @package  RetailCrm\Tests\Builder
 */
class ClientBuilderTest extends TestCase
{
    public function testNoData(): void
    {
        $this->expectException(BuilderException::class);
        $this->expectDeprecationMessage('apiUrl must not be empty');
        (new ClientBuilder())->build();
    }

    public function testNoDataCheckFields(): void
    {
        try {
            (new ClientBuilder())->build();
        } catch (BuilderException $exception) {
            self::assertEquals(['apiUrl'], $exception->getInvalidArgument());
        }
    }

    public function testNoRequestTransformer(): void
    {
        $this->expectException(BuilderException::class);
        $this->expectDeprecationMessage('Authenticator or RequestTransformer must be present');
        (new ClientBuilder())
            ->setApiUrl('https://test.retailcrm.pro')
            ->build();
    }
}
