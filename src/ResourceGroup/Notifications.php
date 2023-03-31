<?php

/**
 * PHP version 7.3
 *
 * @category Notifications
 * @package  RetailCrm\Api\ResourceGroup
 */

namespace RetailCrm\Api\ResourceGroup;

use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Request\Notifications\NotificationsSendRequest;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class Notifications
 *
 * @category Notifications
 * @package  RetailCrm\Api\ResourceGroup
 */
class Notifications extends AbstractApiResourceGroup
{
    /**
     * Makes POST "/api/v5/notifications/send" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Model\Entity\Notifications\Notification;
     * use RetailCrm\Api\Model\Request\Notifications\NotificationsSendRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $notification                = new Notification();
     * $notification->userGroups    = ['superadmins'];
     * $notification->type          = 'api.info';
     * $notification->message       = '<p>notification text</p>';
     *
     * $request                     = new NotificationsSendRequest();
     * $request->notification       = $notification;
     *
     * try {
     *      $response = $client->notifications->send($request);
     * } catch (ApiExceptionInterface $exception) {
     *      echo sprintf(
     *         'Error from RetailCRM API (status code: %d): %s',
     *         $exception->getStatusCode(),
     *         $exception->getMessage()
     *     );
     *
     *      if (count($exception->getErrorResponse()->errors) > 0) {
     *         echo PHP_EOL . 'Errors: ' . implode(', ', $exception->getErrorResponse()->errors);
     *     }
     *
     *      return;
     * }
     *
     * echo 'Status: ' . var_export($response->success, true);
     * ```
     *
     * @param NotificationsSendRequest $request
     *
     * @return SuccessResponse
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     * @throws \RetailCrm\Api\Interfaces\ClientExceptionInterface
     * @throws \RetailCrm\Api\Exception\ApiException
     * @throws \RetailCrm\Api\Exception\ClientException
     * @throws \RetailCrm\Api\Exception\Api\AccountDoesNotExistException
     * @throws \RetailCrm\Api\Exception\Api\ApiErrorException
     * @throws \RetailCrm\Api\Exception\Api\MissingCredentialsException
     * @throws \RetailCrm\Api\Exception\Api\MissingParameterException
     * @throws \RetailCrm\Api\Exception\Api\ValidationException
     * @throws \RetailCrm\Api\Exception\Client\HandlerException
     * @throws \RetailCrm\Api\Exception\Client\HttpClientException
     */
    public function send(NotificationsSendRequest $request): SuccessResponse
    {
        /** @var SuccessResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'notifications/send',
            $request,
            SuccessResponse::class
        );
        return $response;
    }
}
