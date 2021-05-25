<?php

/**
 * PHP version 7.3
 *
 * @category CallbackResponseHandlerTest
 * @package  RetailCrm\Tests\Handler\Response
 */

namespace RetailCrm\Tests\Handler\Response;

use Nyholm\Psr7\Factory\Psr17Factory;
use PHPUnit\Framework\TestCase;
use RetailCrm\Api\Handler\Response\CallbackResponseHandler;
use RetailCrm\Api\Model\Response\Customers\CustomersResponse;
use RetailCrm\Api\Model\ResponseData;

/**
 * Class CallbackResponseHandlerTest
 *
 * @category CallbackResponseHandlerTest
 * @package  RetailCrm\Tests\Handler\Response
 */
class CallbackResponseHandlerTest extends TestCase
{
    public function testHandle(): void
    {
        $factory = new Psr17Factory();
        $data = new ResponseData(
            'https://example.com',
            $factory->createRequest('GET', 'https://example.com'),
            $factory->createResponse(),
            ''
        );
        $handler = new CallbackResponseHandler(static function (ResponseData $responseData) {
            $responseData->type = CustomersResponse::class;
        });

        $handler->handle($data);

        self::assertEquals(CustomersResponse::class, $data->type);
    }
}
