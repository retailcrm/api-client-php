<?php

/**
 * PHP version 7.3
 *
 * @category Verification
 * @package  RetailCrm\Api\ResourceGroup
 */

namespace RetailCrm\Api\ResourceGroup;

use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Request\Verification\SmsVerificationConfirmRequest;
use RetailCrm\Api\Model\Response\Verification\SmsVerificationConfirmResponse;
use RetailCrm\Api\Model\Response\Verification\SmsVerificationStatusResponse;

/**
 * Class Verification
 *
 * @category Verification
 * @package  RetailCrm\Api\ResourceGroup
 */
class Verification extends AbstractApiResourceGroup
{
    /**
     * Makes POST "/api/v5/verification/sms/confirm" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\Verification\SmsVerificationConfirm;
     * use RetailCrm\Api\Model\Request\Verification\SmsVerificationConfirmRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $confirm = new SmsVerificationConfirm();
     * $confirm->code = 'code';
     * $confirm->checkId = 'checkId';
     *
     * try {
     *     $response = $client->verification->smsConfirm(new SmsVerificationConfirmRequest($confirm));
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
     * echo 'Verification: ' . print_r($response->verification, true);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Verification\SmsVerificationConfirmRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\Verification\SmsVerificationConfirmResponse
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     * @throws \RetailCrm\Api\Interfaces\ClientExceptionInterface
     * @throws \RetailCrm\Api\Exception\Api\AccountDoesNotExistException
     * @throws \RetailCrm\Api\Exception\Api\ApiErrorException
     * @throws \RetailCrm\Api\Exception\Api\MissingCredentialsException
     * @throws \RetailCrm\Api\Exception\Api\MissingParameterException
     * @throws \RetailCrm\Api\Exception\Api\ValidationException
     * @throws \RetailCrm\Api\Exception\Client\HandlerException
     * @throws \RetailCrm\Api\Exception\Client\HttpClientException
     */
    public function smsConfirm(SmsVerificationConfirmRequest $request): SmsVerificationConfirmResponse
    {
        /** @var SmsVerificationConfirmResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'verification/sms/confirm',
            $request,
            SmsVerificationConfirmResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/verification/sms/{checkId}/status" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $response = $client->verification->smsStatus('checkId');
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
     * echo 'Verification: ' . print_r($response->verification, true);
     * ```
     *
     * @param string $checkId
     *
     * @return \RetailCrm\Api\Model\Response\Verification\SmsVerificationStatusResponse
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     * @throws \RetailCrm\Api\Interfaces\ClientExceptionInterface
     * @throws \RetailCrm\Api\Exception\Api\AccountDoesNotExistException
     * @throws \RetailCrm\Api\Exception\Api\ApiErrorException
     * @throws \RetailCrm\Api\Exception\Api\MissingCredentialsException
     * @throws \RetailCrm\Api\Exception\Api\MissingParameterException
     * @throws \RetailCrm\Api\Exception\Api\ValidationException
     * @throws \RetailCrm\Api\Exception\Client\HandlerException
     * @throws \RetailCrm\Api\Exception\Client\HttpClientException
     */
    public function smsStatus(string $checkId): SmsVerificationStatusResponse
    {
        /** @var SmsVerificationStatusResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'verification/sms/' . $checkId . '/status',
            null,
            SmsVerificationStatusResponse::class
        );
        return $response;
    }
}
