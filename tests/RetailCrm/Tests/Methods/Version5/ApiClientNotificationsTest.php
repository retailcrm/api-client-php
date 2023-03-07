<?php

namespace RetailCrm\Tests\Methods\Version5;

use RetailCrm\Test\TestCase;

class ApiClientNotificationsTest extends TestCase
{
    /**
     * @dataProvider notificationsProvider
     *
     * @group notifications_v5
     */
    public function testUsersGroups(callable $getNotification, ?string $exceptionClass): void
    {
        $client = static::getApiClient();
        if (!empty($exceptionClass)) {
            $this->expectException($exceptionClass);
        }
        $response = $client->request->sendNotification($getNotification());
        if (empty($exceptionClass)) {
            static::assertContains($response->getStatusCode(), [200, 201]);
            static::assertTrue($response->isSuccessful());
        }
    }

    public function notificationsProvider(): array
    {
        return [
            'error_type' => [
                function (): array {
                    $notification = self::getErrorNotification();
                    $notification['type'] = 'another';

                    return $notification;
                },
                \InvalidArgumentException::class,
            ],
            'error_message' => [
                function (): array {
                    $notification = self::getErrorNotification();
                    $notification['message'] = [];

                    return $notification;
                },
                \InvalidArgumentException::class,
            ],
            'error_users_empty' => [
                function (): array {
                    $notification = self::getErrorNotification();
                    $notification['userGroups'] = [];
                    $notification['userIds'] = [];

                    return $notification;
                },
                \InvalidArgumentException::class,
            ],
            'error_users_filled' => [
                function (): array {
                    return self::getErrorNotification();;
                },
                \InvalidArgumentException::class,
            ],
            'success_group' => [
                function (): array {
                    $notification = self::getErrorNotification();
                    unset($notification['userIds']);

                    return $notification;
                },
                null,
            ],
            'success_ids' => [
                function (): array {
                    $notification = self::getErrorNotification();
                    unset($notification['userGroups']);

                    return $notification;
                },
                null,
            ],
        ];
    }

    protected static function getErrorNotification(): array
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