<?php

/**
 * PHP version 7.3
 *
 * @category CustomApiMethodTest
 * @package  RetailCrm\Tests\Component
 */

namespace RetailCrm\Tests\Component;

use http\Env\Request;
use PHPUnit\Framework\TestCase;
use RetailCrm\Api\Component\CustomApiMethod;
use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Interfaces\RequestSenderInterface;

/**
 * Class CustomApiMethodTest
 *
 * @category CustomApiMethodTest
 * @package  RetailCrm\Tests\Component
 */
class CustomApiMethodTest extends TestCase
{
    public function testDefault(): void
    {
        $baseUrl = 'https://test.simla.io/api/v5';
        $mock = $this->getMockBuilder(RequestSenderInterface::class)
            ->onlyMethods(['send', 'route', 'host'])
            ->getMock();

        $mock->method('send')
            ->with(RequestMethod::GET, $baseUrl . '/method')
            ->willReturn([$baseUrl]);

        $mock->method('route')
            ->withAnyParameters()
            ->willReturn($baseUrl . '/method');

        static::assertEquals([$baseUrl], (new CustomApiMethod(RequestMethod::GET, 'method'))($mock));
    }

    public function testRawRoute(): void
    {
        $baseUrl = 'https://test.simla.io/api/v5';
        $mock = $this->getMockBuilder(RequestSenderInterface::class)
            ->onlyMethods(['send', 'route', 'host'])
            ->getMock();

        $mock->method('send')
            ->with(RequestMethod::GET, 'method')
            ->willReturn([$baseUrl]);

        $mock->method('route')
            ->withAnyParameters()
            ->willReturn('');

        static::assertEquals(
            [$baseUrl],
            (new CustomApiMethod(RequestMethod::GET, 'method'))->useRouteAsUri()($mock)
        );
    }
}
