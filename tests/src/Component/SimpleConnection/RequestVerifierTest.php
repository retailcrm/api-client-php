<?php

namespace RetailCrm\Tests\Component\SimpleConnection;

use PHPUnit\Framework\TestCase;
use RetailCrm\Api\Component\SimpleConnection\RequestVerifier;
use RetailCrm\Api\Model\Callback\Entity\SimpleConnection\RequestProperty\RequestConnectionRegister;

class RequestVerifierTest extends TestCase
{
    public function testVerify(): void
    {
        $secret = 'secret';
        $apiKey = 'api_key';
        $token = hash_hmac('sha256', $apiKey, $secret);

        $verifier = new RequestVerifier();
        $request = new RequestConnectionRegister();

        $request->systemUrl = 'url';
        $request->apiKey = $apiKey;
        $request->token = $token;

        static::assertTrue($verifier->verify($secret, $request));
    }
}
