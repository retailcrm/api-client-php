<?php

/**
 * PHP version 7.3
 *
 * @category Telephony
 * @package  RetailCrm\Api\ResourceGroup
 */

namespace RetailCrm\Api\ResourceGroup;

use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Entity\Telephony\CallEvent;
use RetailCrm\Api\Model\Request\Telephony\TelephonyCallEventRequest;
use RetailCrm\Api\Model\Request\Telephony\TelephonyCallsUploadRequest;
use RetailCrm\Api\Model\Request\Telephony\TelephonyManagerRequest;
use RetailCrm\Api\Model\Response\Telephony\CallEventResponse;
use RetailCrm\Api\Model\Response\Telephony\CallsUploadResponse;
use RetailCrm\Api\Model\Response\Telephony\ManagerResponse;

/**
 * Class Telephony
 *
 * @category Telephony
 * @package  RetailCrm\Api\ResourceGroup
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Telephony extends AbstractApiResourceGroup
{
    /**
     * Makes POST "/api/v5/telephony/call/event" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\Telephony\CallEventType;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\Telephony\CallEvent;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $event          = new CallEvent();
     * $event->site    = 'aliexpress';
     * $event->type    = CallEventType::IN;
     * $event->phone   = '88005553125';
     * $event->userIds = [27];
     *
     * try {
     *     $response = $client->telephony->callEvent($event);
     * } catch (ApiExceptionInterface $exception) {
     *     echo sprintf(
     *         'Error from RetailCRM API (status code: %d): %s',
     *         $exception->getStatusCode(),
     *         $exception->getMessage()
     *     );
     *
     *     if (count($exception->getErrorResponse()->errors) > 0) {
     *         echo PHP_EOL . 'Errors: ' . implode(', ', $exception->getErrorResponse()->errors);
     *     }
     *
     *     return;
     * }
     *
     * echo 'Response: ' . print_r($response, true);
     * ```
     *
     * @param \RetailCrm\Api\Model\Entity\Telephony\CallEvent $event
     *
     * @return \RetailCrm\Api\Model\Response\Telephony\CallEventResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function callEvent(CallEvent $event): CallEventResponse
    {
        /** @var CallEventResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'telephony/call/event',
            new TelephonyCallEventRequest($event),
            CallEventResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/telephony/calls/upload" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\Telephony\CallEventType;
     * use RetailCrm\Api\Enum\Telephony\CallResult;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\Telephony\Call;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $call                  = new Call();
     * $call->externalId      = 'test_call_external_id';
     * $call->date            = new DateTime();
     * $call->type            = CallEventType::IN;
     * $call->phone           = '88005553125';
     * $call->userId          = 27;
     * $call->result          = CallResult::ANSWERED;
     * $call->duration        = 60;
     * $call->durationWaiting = 10;
     * $call->recordUrl       = 'https://examle.com/test.mp3';
     * $call->site            = 'aliexpress';
     *
     * try {
     *     $response = $client->telephony->callsUpload([$call]);
     * } catch (ApiExceptionInterface $exception) {
     *     echo sprintf(
     *         'Error from RetailCRM API (status code: %d): %s',
     *         $exception->getStatusCode(),
     *         $exception->getMessage()
     *     );
     *
     *     if (count($exception->getErrorResponse()->errors) > 0) {
     *         echo PHP_EOL . 'Errors: ' . implode(', ', $exception->getErrorResponse()->errors);
     *     }
     *
     *     return;
     * }
     *
     * echo 'Response: ' . print_r($response, true);
     * ```
     *
     * @param \RetailCrm\Api\Model\Entity\Telephony\Call[] $calls
     *
     * @return \RetailCrm\Api\Model\Response\Telephony\CallsUploadResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function callsUpload(array $calls): CallsUploadResponse
    {
        /** @var CallsUploadResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'telephony/calls/upload',
            new TelephonyCallsUploadRequest($calls),
            CallsUploadResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/telephony/manager" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\NumericBoolean;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Request\Telephony\TelephonyManagerRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request               = new TelephonyManagerRequest();
     * $request->phone        = '88005553125';
     * $request->details      = NumericBoolean::TRUE;
     * $request->ignoreStatus = NumericBoolean::TRUE;
     *
     * try {
     *     $response = $client->telephony->manager($request);
     * } catch (ApiExceptionInterface $exception) {
     *     echo sprintf(
     *         'Error from RetailCRM API (status code: %d): %s',
     *         $exception->getStatusCode(),
     *         $exception->getMessage()
     *     );
     *
     *     if (count($exception->getErrorResponse()->errors) > 0) {
     *         echo PHP_EOL . 'Errors: ' . implode(', ', $exception->getErrorResponse()->errors);
     *     }
     *
     *     return;
     * }
     *
     * echo 'Manager: ' . print_r($response->manager, true);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Telephony\TelephonyManagerRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\Telephony\ManagerResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function manager(TelephonyManagerRequest $request): ManagerResponse
    {
        /** @var ManagerResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'telephony/manager',
            $request,
            ManagerResponse::class
        );
        return $response;
    }
}
