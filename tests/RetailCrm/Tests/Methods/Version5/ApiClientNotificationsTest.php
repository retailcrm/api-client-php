<?php

namespace RetailCrm\Tests\Methods\Version5;

use RetailCrm\Test\TestCase;

class ApiClientNotificationsTest extends TestCase
{
    /**
     * @dataProvider notificationsProvider
     *
     * @group notifications_v5
     *
     * @param callable    $getNotification
     * @param string|null $exceptionClass
     *
     * @return void
     */
    public function testSendNotification(callable $getNotification, $exceptionClass)
    {
        $client = static::getApiClient();
        if (!empty($exceptionClass)) {
            $this->expectException($exceptionClass);
        }
        $response = $client->request->sendNotification($getNotification());
        if (empty($exceptionClass)) {
            static::assertTrue(in_array($response->getStatusCode(), [200, 201]));
            static::assertTrue($response->isSuccessful());
        }
    }

    /**
     * @return array[]
     */
    public function notificationsProvider()
    {
        return [
            'error_type' => [
                static function () {
                    $notification = self::getErrorNotification();
                    $notification['type'] = 'another';

                    return $notification;
                },
                'InvalidArgumentException',
            ],
            'error_message' => [
                static function () {
                    $notification = self::getErrorNotification();
                    $notification['message'] = [];

                    return $notification;
                },
                'InvalidArgumentException',
            ],
            'error_users_empty' => [
                static function () {
                    $notification = self::getErrorNotification();
                    $notification['userGroups'] = [];
                    $notification['userIds'] = [];

                    return $notification;
                },
                'InvalidArgumentException',
            ],
            'error_users_filled' => [
                static function () {
                    return self::getErrorNotification();
                },
                'InvalidArgumentException',
            ],
            'success_group' => [
                static function () {
                    $notification = self::getErrorNotification();
                    unset($notification['userIds']);

                    return $notification;
                },
                null,
            ],
            'success_ids' => [
                static function () {
                    $notification = self::getErrorNotification();
                    unset($notification['userGroups']);

                    return $notification;
                },
                null,
            ],
        ];
    }

    /**
     * @return array
     */
    protected static function getErrorNotification()
    {
        return [
            'type' => 'api.error',
            'userIds' => [1],
            'userGroups' => ['superadmins'],
            'message' => '<a href="/admin/integration/moysklad2/edit">[Модуль МойСклад]</a>
Возникли проблемы при проверке доступов входа. Введен неверный логин/пароль, проверьте корректность введенных данных.',
        ];
    }
}
