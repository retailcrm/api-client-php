<?php

namespace RetailCrm\Tests\Http;

use RetailCrm\Http\RequestOptions;
use RetailCrm\Test\TestCase;

class RequestOptionsTest extends TestCase
{
    public function testGetHeaders()
    {
        $headers = ['Test header' => 'Test'];
        $options = new RequestOptions($headers);

        self::assertEquals('Test header: Test', $options->getHeaders()[0]);
    }

    public function testGetClientTimeout()
    {
        $options = new RequestOptions([], 10);

        self::assertEquals(10, $options->getClientTimeout());
    }
}
