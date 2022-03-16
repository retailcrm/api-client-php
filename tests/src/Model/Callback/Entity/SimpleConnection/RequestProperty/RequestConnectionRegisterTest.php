<?php

namespace RetailCrm\Tests\Model\Callback\Entity\SimpleConnection\RequestProperty;

use PHPUnit\Framework\TestCase;
use RetailCrm\Api\Factory\SerializerFactory;
use RetailCrm\Api\Model\Callback\Entity\SimpleConnection\RequestProperty\RequestConnectionRegister;

class RequestConnectionRegisterTest extends TestCase
{
    public function testDeserialize(): void
    {
        $requestData = [
            'systemUrl' => 'test_url',
            'apiKey' => 'test_key',
            'token' => 'token'
        ];

        /** @var RequestConnectionRegister $request */
        $request = SerializerFactory::create()->fromArray($requestData, RequestConnectionRegister::class);

        static::assertEquals($requestData['systemUrl'], $request->systemUrl);
        static::assertEquals($requestData['apiKey'], $request->apiKey);
        static::assertEquals($requestData['token'], $request->token);
    }
}
