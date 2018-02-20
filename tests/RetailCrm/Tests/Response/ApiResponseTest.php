<?php

/**
 * PHP version 5.4
 *
 * API client response test class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */

namespace RetailCrm\Tests\Response;

use RetailCrm\Test\TestCase;
use RetailCrm\Response\ApiResponse;

/**
 * Class ApiResponseTest
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion5
 */
class ApiResponseTest extends TestCase
{
    /**
     * @group response
     */
    public function testSuccessConstruct()
    {
        $response = new ApiResponse(200);
        static::assertInstanceOf(
            'RetailCrm\Response\ApiResponse',
            $response,
            'Response object created'
        );

        $response = new ApiResponse(201, '{ "success": true }');
        static::assertInstanceOf(
            'RetailCrm\Response\ApiResponse',
            $response,
            'Response object created'
        );
    }

    /**
     * @group response
     * @expectedException \RetailCrm\Exception\InvalidJsonException
     */
    public function testJsonInvalid()
    {
        new ApiResponse(400, '{ "asdf": }');
    }

    /**
     * @group response
     */
    public function testStatusCodeGetting()
    {
        $response = new ApiResponse(200);
        static::assertEquals(
            200,
            $response->getStatusCode(),
            'Response object returns the right status code'
        );

        $response = new ApiResponse(460, '{ "success": false }');
        static::assertEquals(
            460,
            $response->getStatusCode(),
            'Response object returns the right status code'
        );
    }

    /**
     * @group response
     */
    public function testIsSuccessful()
    {
        $response = new ApiResponse(200);
        static::assertTrue(
            $response->isSuccessful(),
            'Request was successful'
        );

        $response = new ApiResponse(460, '{ "success": false }');
        static::assertFalse(
            $response->isSuccessful(),
            'Request was failed'
        );
    }

    /**
     * @group response
     */
    public function testMagicCall()
    {
        $response = new ApiResponse(201, '{ "success": true }');
        static::assertEquals(
            true,
            $response->isSuccessful(),
            'Response object returns property value throw magic method'
        );
    }

    /**
     * @group response
     * @expectedException \InvalidArgumentException
     */
    public function testMagicCallException1()
    {
        $response = new ApiResponse(200);
        /* @noinspection PhpUndefinedMethodInspection */
        $response->getSome();
    }

    /**
     * @group response
     * @expectedException \InvalidArgumentException
     */
    public function testMagicCallException2()
    {
        $response = new ApiResponse(201, '{ "success": true }');
        /* @noinspection PhpUndefinedMethodInspection */
        $response->getSomeSuccess();
    }

    /**
     * @group response
     */
    public function testMagicGet()
    {
        $response = new ApiResponse(201, '{ "success": true }');
        static::assertEquals(
            true,
            $response->success,
            'Response object returns property value throw magic get'
        );
    }

    /**
     * @group response
     * @expectedException \InvalidArgumentException
     */
    public function testMagicGetException1()
    {
        $response = new ApiResponse(200);
        /* @noinspection PhpUndefinedFieldInspection */
        $response->some;
    }

    /**
     * @group response
     * @expectedException \InvalidArgumentException
     */
    public function testMagicGetException2()
    {
        $response = new ApiResponse(201, '{ "success": true }');
        /* @noinspection PhpUndefinedFieldInspection */
        $response->someSuccess;
    }

    /**
     * @group response
     */
    public function testArrayGet()
    {
        $response = new ApiResponse(201, '{ "success": true }');
        static::assertEquals(
            true,
            $response['success'],
            'Response object returns property value throw magic array get'
        );
    }

    /**
     * @group response
     * @expectedException \InvalidArgumentException
     */
    public function testArrayGetException1()
    {
        $response = new ApiResponse(200);
        $response['some'];
    }

    /**
     * @group response
     * @expectedException \InvalidArgumentException
     */
    public function testArrayGetException2()
    {
        $response = new ApiResponse(201, '{ "success": true }');
        $response['someSuccess'];
    }

    /**
     * @group response
     */
    public function testArrayIsset()
    {
        $response = new ApiResponse(201, '{ "success": true }');

        static::assertTrue(
            isset($response['success']),
            'Response object returns property existing'
        );

        static::assertFalse(
            isset($response['suess']),
            'Response object returns property existing'
        );
    }

    /**
     * @group response
     * @expectedException \BadMethodCallException
     */
    public function testArraySetException1()
    {
        $response = new ApiResponse(201, '{ "success": true }');
        $response['success'] = 'a';
    }

    /**
     * @group response
     * @expectedException \BadMethodCallException
     */
    public function testArraySetException2()
    {
        $response = new ApiResponse(201, '{ "success": true }');
        $response['sssssssuccess'] = 'a';
    }

    /**
     * @group response
     * @expectedException \BadMethodCallException
     */
    public function testArrayUnsetException1()
    {
        $response = new ApiResponse(201, '{ "success": true }');
        unset($response['success']);
    }

    /**
     * @group response
     * @expectedException \BadMethodCallException
     */
    public function testArrayUnsetException2()
    {
        $response = new ApiResponse(201, '{ "success": true }');
        unset($response['sssssssuccess']);
    }

    /**
     * @group response
     */
    public function testMagicIsset()
    {
        $response = new ApiResponse(201, '{ "success": true }');

        static::assertTrue(
            isset($response->success),
            'Response object returns property existing'
        );

        static::assertFalse(
            isset($response->suess),
            'Response object returns property existing'
        );
    }
}
