<?php

namespace RetailCrm\Tests\Http;

use RetailCrm\Http\RequestOptions;
use RetailCrm\Test\TestCase;

class RequestOptionsTest extends TestCase
{
    public function testGetHeaders()
    {
        $headers = ['X-Test-Header' => 'Test'];
        $options = new RequestOptions($headers);

        self::assertEquals('X-Test-Header: Test', $options->getHttpHeaders()[0]);
        self::assertEquals('Test', $options->getHeaders()['X-Test-Header']);
    }

    public function testGetClientTimeout()
    {
        $options = new RequestOptions([], 10);

        self::assertEquals(10, $options->getClientTimeout());
    }
}
