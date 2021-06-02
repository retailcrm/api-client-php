<?php

/**
 * PHP version 7.3
 *
 * @category ClientExceptionTest
 * @package  RetailCrm\Tests\Exception
 */

namespace RetailCrm\Tests\Exception;

use PHPUnit\Framework\TestCase;
use RetailCrm\Api\Exception\Client\HandlerException;

/**
 * Class ClientExceptionTest
 *
 * @category ClientExceptionTest
 * @package  RetailCrm\Tests\Exception
 */
class ClientExceptionTest extends TestCase
{
    public function testStringable(): void
    {
        $exception = ((string) new HandlerException('Test ClientException'));

        self::assertStringContainsString('Test ClientException', $exception);
        self::assertStringContainsString(__CLASS__, $exception);
    }
}
