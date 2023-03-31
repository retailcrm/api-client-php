<?php

namespace RetailCrm\Tests\ResourceGroup;

use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Entity\Notifications\Notification;
use RetailCrm\Api\Model\Request\Notifications\NotificationsSendRequest;
use RetailCrm\TestUtils\Factory\TestClientFactory;
use RetailCrm\TestUtils\TestCase\AbstractApiResourceGroupTestCase;

class NotificationsTest extends AbstractApiResourceGroupTestCase
{
    public function testSend(): void
    {
        $json = <<<'EOF'
{
    "success": true
}
EOF;

        $notification               = new Notification();
        $notification->type         = 'api.info';
        $notification->message      = '<p>some notification</p>';
        $notification->userGroups   = ['superadmins'];

        $request                    = new NotificationsSendRequest();
        $request->notification      = $notification;

        $mock = static::createApiMockBuilder('notifications/send');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(self::encodeForm($request))
            ->reply(200)
            ->withBody($json);

        $client   = TestClientFactory::createClient($mock->getClient());
        $response = $client->notifications->send($request);

        self::assertModelEqualsToResponse($json, $response);
    }
}
