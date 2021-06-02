<?php

/**
 * PHP version 7.3
 *
 * @category Payments
 * @package  RetailCrm\Api\ResourceGroup
 */

namespace RetailCrm\Api\ResourceGroup;

use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Request\Payments\PaymentCheckRequest;
use RetailCrm\Api\Model\Request\Payments\PaymentCreateInvoiceRequest;
use RetailCrm\Api\Model\Request\Payments\PaymentUpdateInvoiceRequest;
use RetailCrm\Api\Model\Response\Payments\PaymentCheckResponse;
use RetailCrm\Api\Model\Response\Payments\PaymentCreateInvoiceResponse;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class Payments
 *
 * @category Payments
 * @package  RetailCrm\Api\ResourceGroup
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Payments extends AbstractApiResourceGroup
{
    /**
     * Makes POST "/api/v5/payment/check" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\Currency;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\Payments\ApiCheckRequest;
     * use RetailCrm\Api\Model\Request\Payments\PaymentCheckRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request              = new ApiCheckRequest();
     * $request->invoiceUuid = '5b1b2e9d-b7f1-48f4-acb9-4bfce04b30cf';
     * $request->currency    = Currency::RUB;
     * $request->amount      = .5;
     *
     * try {
     *     $response = $client->payments->check(new PaymentCheckRequest($request));
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
     * echo 'Result: ' . print_r($response->result, true);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Payments\PaymentCheckRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\Payments\PaymentCheckResponse
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
    public function check(PaymentCheckRequest $request): PaymentCheckResponse
    {
        /** @var PaymentCheckResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'payment/check',
            $request,
            PaymentCheckResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/payment/create-invoice" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\Payments\ApiCreateInvoiceRequest;
     * use RetailCrm\Api\Model\Request\Payments\PaymentCreateInvoiceRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request            = new ApiCreateInvoiceRequest();
     * $request->paymentId = 4571;
     * $request->returnUrl = 'https://example.com';
     *
     * try {
     *     $response = $client->payments->createInvoice(new PaymentCreateInvoiceRequest($request));
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
     * echo 'Result: ' . print_r($response->result, true);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Payments\PaymentCreateInvoiceRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\Payments\PaymentCreateInvoiceResponse
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
    public function createInvoice(PaymentCreateInvoiceRequest $request): PaymentCreateInvoiceResponse
    {
        /** @var PaymentCreateInvoiceResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'payment/create-invoice',
            $request,
            PaymentCreateInvoiceResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/payment/update-invoice" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\Payments\ApiUpdateInvoiceRequest;
     * use RetailCrm\Api\Model\Request\Payments\PaymentUpdateInvoiceRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request              = new ApiUpdateInvoiceRequest();
     * $request->paymentId   = 'd6458333-fff3-4fd0-9b23-4e6344451f8e';
     * $request->invoiceUuid = '5b1b2e9d-b7f1-48f4-acb9-4bfce04b30cf';
     * $request->invoiceUrl  = 'https://example.com/newUrl';
     *
     * try {
     *     $response = $client->payments->updateInvoice(new PaymentUpdateInvoiceRequest($request));
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
     * }
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Payments\PaymentUpdateInvoiceRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\SuccessResponse
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
    public function updateInvoice(PaymentUpdateInvoiceRequest $request): SuccessResponse
    {
        /** @var SuccessResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'payment/update-invoice',
            $request,
            SuccessResponse::class
        );
        return $response;
    }
}
