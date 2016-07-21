<?php

/**
 * PHP version 5.3
 *
 * API client response test class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion4
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
 * @link     http://www.retailcrm.ru/docs/Developers/ApiVersion4
 */
class ApiResponseTest extends TestCase
{
    /**
     * @group unit
     */
    public function testSuccessConstruct()
    {
        $response = new ApiResponse(200);
        $this->assertInstanceOf(
            'RetailCrm\Response\ApiResponse',
            $response,
            'Response object created'
        );

        $response = new ApiResponse(201, '{ "success": true }');
        $this->assertInstanceOf(
            'RetailCrm\Response\ApiResponse',
            $response,
            'Response object created'
        );
    }

    /**
     * @group unit
     * @expectedException \RetailCrm\Exception\InvalidJsonException
     */
    public function testJsonInvalid()
    {
        $response = new ApiResponse(400, '{ "asdf": }');
    }

    /**
     * @group unit
     */
    public function testStatusCodeGetting()
    {
        $response = new ApiResponse(200);
        $this->assertEquals(
            200,
            $response->getStatusCode(),
            'Response object returns the right status code'
        );

        $response = new ApiResponse(460, '{ "success": false }');
        $this->assertEquals(
            460,
            $response->getStatusCode(),
            'Response object returns the right status code'
        );
    }

    /**
     * @group unit
     */
    public function testIsSuccessful()
    {
        $response = new ApiResponse(200);
        $this->assertTrue(
            $response->isSuccessful(),
            'Request was successful'
        );

        $response = new ApiResponse(460, '{ "success": false }');
        $this->assertFalse(
            $response->isSuccessful(),
            'Request was failed'
        );
    }

    /**
     * @group unit
     */
    public function testMagicCall()
    {
        $response = new ApiResponse(201, '{ "success": true }');
        $this->assertEquals(
            true,
            $response->getSuccess(),
            'Response object returns property value throw magic method'
        );
    }

    /**
     * @group unit
     * @expectedException \InvalidArgumentException
     */
    public function testMagicCallException1()
    {
        $response = new ApiResponse(200);
        $response->getSome();
    }

    /**
     * @group unit
     * @expectedException \InvalidArgumentException
     */
    public function testMagicCallException2()
    {
        $response = new ApiResponse(201, '{ "success": true }');
        $response->getSomeSuccess();
    }

    /**
     * @group unit
     */
    public function testMagicGet()
    {
        $response = new ApiResponse(201, '{ "success": true }');
        $this->assertEquals(
            true,
            $response->success,
            'Response object returns property value throw magic get'
        );
    }

    /**
     * @group unit
     * @expectedException \InvalidArgumentException
     */
    public function testMagicGetException1()
    {
        $response = new ApiResponse(200);
        $response->some;
    }

    /**
     * @group unit
     * @expectedException \InvalidArgumentException
     */
    public function testMagicGetException2()
    {
        $response = new ApiResponse(201, '{ "success": true }');
        $response->someSuccess;
    }

    /**
     * @group unit
     */
    public function testArrayGet()
    {
        $response = new ApiResponse(201, '{ "success": true }');
        $this->assertEquals(
            true,
            $response['success'],
            'Response object returns property value throw magic array get'
        );
    }

    /**
     * @group unit
     * @expectedException \InvalidArgumentException
     */
    public function testArrayGetException1()
    {
        $response = new ApiResponse(200);
        $response['some'];
    }

    /**
     * @group unit
     * @expectedException \InvalidArgumentException
     */
    public function testArrayGetException2()
    {
        $response = new ApiResponse(201, '{ "success": true }');
        $response['someSuccess'];
    }

    /**
     * @group unit
     */
    public function testArrayIsset()
    {
        $response = new ApiResponse(201, '{ "success": true }');

        $this->assertTrue(
            isset($response['success']),
            'Response object returns property existing'
        );

        $this->assertFalse(
            isset($response['suess']),
            'Response object returns property existing'
        );
    }

    /**
     * @group unit
     * @expectedException \BadMethodCallException
     */
    public function testArraySetException1()
    {
        $response = new ApiResponse(201, '{ "success": true }');
        $response['success'] = 'a';
    }

    /**
     * @group unit
     * @expectedException \BadMethodCallException
     */
    public function testArraySetException2()
    {
        $response = new ApiResponse(201, '{ "success": true }');
        $response['sssssssuccess'] = 'a';
    }

    /**
     * @group unit
     * @expectedException \BadMethodCallException
     */
    public function testArrayUnsetException1()
    {
        $response = new ApiResponse(201, '{ "success": true }');
        unset($response['success']);
    }

    /**
     * @group unit
     * @expectedException \BadMethodCallException
     */
    public function testArrayUnsetException2()
    {
        $response = new ApiResponse(201, '{ "success": true }');
        unset($response['sssssssuccess']);
    }
}
