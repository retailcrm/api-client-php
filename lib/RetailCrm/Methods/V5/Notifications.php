<?php

namespace RetailCrm\Methods\V5;

trait Notifications
{
    /**
     * Send notifications
     *
     * @param array<string, string> $notification
     * @return \RetailCrm\Response\ApiResponse
     */
    public function notificationsSend(array $notification)
    {
        if (!count($notification)) {
            throw new \InvalidArgumentException(
                'Parameter `notification` must contains a data'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/notifications/send',
            "POST",
            [
                'notification' => json_encode($notification)
            ]
        );
    }
}
