<?php

namespace RetailCrm\Tests\Methods\Version5;

use RetailCrm\Response\ApiResponse;
use RetailCrm\Test\TestCase;

/**
 * Class ApiClientModulesTest
 *
 * @category RetailCrm
 * @package  RetailCrm
 */
class ApiClientModuleTest extends TestCase
{
    /**
     * Test configuration
     *
     * @group module_v5
     *
     * @return void
     */
    public function testUpdateScopes()
    {
        $integrationCode = 'integration_v5';
        $stub = $this->getMockBuilder(\RetailCrm\Http\Client::class)
            ->disableOriginalConstructor()
            ->setMethods(['makeRequest'])
            ->getMock();

        $requires = [
            'scopes' => [
                "integration_read",
                "integration_write"
            ],
        ];

        $stub->expects(self::once())
            ->method('makeRequest')
            ->with(
                sprintf('/integration-modules/%s/update-scopes', $integrationCode),
                "POST",
                ['requires' => json_encode($requires)]
            )
            ->willReturn(
                (new ApiResponse(200, json_encode(['success' => true, 'apiKey' => 'test key'])))
                    ->asJsonResponse()
            )
        ;
        $client = static::getMockedApiClient($stub);

        /** @var \RetailCrm\Response\ApiResponse $response */
        $response = $client->request->integrationModulesUpdateScopes($integrationCode, $requires);

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertEquals($response->getStatusCode(), 200);
        static::assertTrue($response->isSuccessful());
        static::assertNotEmpty($response['apiKey']);
    }
}
