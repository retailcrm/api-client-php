<?php

/**
 * PHP version 7.3
 *
 * @category CallbackRequestHandlerTest
 * @package  RetailCrm\Tests\Handler\Request
 */

namespace RetailCrm\Tests\Handler\Request;

use Nyholm\Psr7\Factory\Psr17Factory;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;
use RetailCrm\Api\Handler\Request\CallbackRequestHandler;
use RetailCrm\Api\Model\RequestData;

/**
 * Class CallbackRequestHandlerTest
 *
 * @category CallbackRequestHandlerTest
 * @package  RetailCrm\Tests\Handler\Request
 */
class CallbackRequestHandlerTest extends TestCase
{
    public function testHandle(): void
    {
        $data = new RequestData('', '', null);
        $handler = new CallbackRequestHandler(static function (RequestData $requestData) {
            $requestData->request = (new Psr17Factory())->createRequest('GET', 'https://example.com');
        });

        $handler->handle($data);

        self::assertInstanceOf(RequestInterface::class, $data->request);
        self::assertEquals('GET', $data->request->getMethod());
        self::assertEquals('https://example.com', (string) $data->request->getUri());
    }
}
