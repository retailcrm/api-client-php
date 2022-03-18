<?php

namespace RetailCrm\Tests\Component\SimpleConnection;

use PHPUnit\Framework\TestCase;
use RetailCrm\Api\Component\SimpleConnection\TokenCreator;

class TokenCreatorTest extends TestCase
{
    public function testCreate(): void
    {
        $secret = 'secret';
        $apiKey = 'api_key';

        $hash = hash_hmac('sha256', $apiKey, $secret);

        static::assertEquals($hash, TokenCreator::create($apiKey, $secret));
    }
}
