<?php

namespace RetailCrm\Tests\Methods\Version5;

use RetailCrm\Test\TestCase;

/**
 * Class ApiClientNotificationsTest
 *
 * @category RetailCrm
 * @package  RetailCrm
 */
class ApiClientNotificationsTest extends TestCase
{
    public function testNotificationsSend()
    {
        $client = static::getApiClient();

        $notification = [
            'userGroups' => ['superadmins'],
            'type' => 'api.info',
            'message' => '<p>test message </p>',
        ];
        $response = $client->request->notificationsSend($notification);

        static::assertInstanceOf('RetailCrm\Response\ApiResponse', $response);
        static::assertTrue(in_array($response->getStatusCode(), [200, 201]));
        static::assertTrue($response->isSuccessful());
    }
}
