<?php

namespace RetailCrm\Methods\V5;

use RetailCrm\Response\ApiResponse;

trait Notifications
{
    protected static $allowedTypes = ['api.info', 'api.error'];

    public function sendNotification(array $notification): ApiResponse
    {
        if (empty($notification['type']) || !in_array($notification['type'], self::$allowedTypes, true)) {
            throw new \InvalidArgumentException(
                'Parameter `type` must be not empty & must be equal one of these values: api.info|api.error'
            );
        }

        if (empty($notification['message'])) {
            throw new \InvalidArgumentException(
                'Parameter `message` should not be blank'
            );
        }

        if (empty($notification['userGroups']) && empty($notification['userIds'])) {
            throw new \InvalidArgumentException(
                'One of the parameters must be filled: `userGroups` or `userIds`'
            );
        }

        /** @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            "/notifications/send",
            "POST",
            ['notification' => \json_encode($notification, JSON_UNESCAPED_SLASHES)]
        );
    }
}
