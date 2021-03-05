<?php

/**
 * PHP version 7.3
 *
 * @category Loyalty
 * @package  RetailCrm\Api\ResourceGroup
 */

namespace RetailCrm\Api\ResourceGroup;

use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Entity\Loyalty\LoyaltyAccount;
use RetailCrm\Api\Model\Request\Loyalty\LoyaltyAccountCreateRequest;
use RetailCrm\Api\Model\Request\Loyalty\LoyaltyAccountEditRequest;
use RetailCrm\Api\Model\Request\Loyalty\LoyaltyAccountsRequest;
use RetailCrm\Api\Model\Request\Loyalty\LoyaltyCalculateRequest;
use RetailCrm\Api\Model\Response\Loyalty\LoyaltyAccountActivateResponse;
use RetailCrm\Api\Model\Response\Loyalty\LoyaltyAccountCreateResponse;
use RetailCrm\Api\Model\Response\Loyalty\LoyaltyAccountsResponse;
use RetailCrm\Api\Model\Response\Loyalty\LoyaltyCalculateResponse;

/**
 * Class Loyalty
 *
 * @category Loyalty
 * @package  RetailCrm\Api\ResourceGroup
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Loyalty extends AbstractApiResourceGroup
{
    /**
     * Makes POST "/api/v5/loyalty/account/create" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedEntityCustomer;
     * use RetailCrm\Api\Model\Entity\Loyalty\SerializedCreateLoyaltyAccount;
     * use RetailCrm\Api\Model\Request\Loyalty\LoyaltyAccountCreateRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request           = new LoyaltyAccountCreateRequest();
     * $account           = new SerializedCreateLoyaltyAccount();
     * $account->customer = new SerializedEntityCustomer();
     *
     * $account->customer->id = 4787;
     * $account->cardNumber   = '2222 3333 4444 5555';
     * $account->phoneNumber  = '88005553125';
     *
     * $request->site           = 'bitrix-test';
     * $request->loyaltyAccount = $account;
     *
     * try {
     *     $response = $client->loyalty->accountCreate($request);
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
     * echo 'Created loyalty account: ' . print_r($response->loyaltyAccount, true);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Loyalty\LoyaltyAccountCreateRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\Loyalty\LoyaltyAccountCreateResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function accountCreate(LoyaltyAccountCreateRequest $request): LoyaltyAccountCreateResponse
    {
        /** @var LoyaltyAccountCreateResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'loyalty/account/create',
            $request,
            LoyaltyAccountCreateResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/loyalty/account/{id}/activate" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $response = $client->loyalty->accountActivate(159);
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
     * echo 'Activated loyalty account: ' . print_r($response->loyaltyAccount, true);
     * ```
     *
     * @param int $id
     *
     * @return \RetailCrm\Api\Model\Response\Loyalty\LoyaltyAccountActivateResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function accountActivate(int $id): LoyaltyAccountActivateResponse
    {
        /** @var LoyaltyAccountActivateResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'loyalty/account/' . $id . '/activate',
            null,
            LoyaltyAccountActivateResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/loyalty/account/{id}/edit" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\Loyalty\LoyaltyAccount;
     * use RetailCrm\Api\Model\Request\Loyalty\LoyaltyAccountEditRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $account              = new LoyaltyAccount();
     * $account->cardNumber  = '4444 5555 6666 7777';
     * $account->phoneNumber = '88005553000';
     *
     * try {
     *     $response = $client->loyalty->accountEdit(159, new LoyaltyAccountEditRequest($account));
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
     * @param int                                                            $id
     * @param \RetailCrm\Api\Model\Request\Loyalty\LoyaltyAccountEditRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\Loyalty\LoyaltyAccountCreateResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function accountEdit(int $id, LoyaltyAccountEditRequest $request): LoyaltyAccountCreateResponse
    {
        /** @var LoyaltyAccountCreateResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'loyalty/account/' . $id . '/edit',
            $request,
            LoyaltyAccountCreateResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/loyalty/accounts" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\Loyalty\AccountStatus;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Filter\Loyalty\LoyaltyAccountApiFilterType;
     * use RetailCrm\Api\Model\Request\Loyalty\LoyaltyAccountsRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request = new LoyaltyAccountsRequest();
     * $request->filter = new LoyaltyAccountApiFilterType();
     * $request->filter->status = AccountStatus::ACTIVATED;
     *
     * try {
     *     $response = $client->loyalty->accountsList($request);
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
     * echo 'Accounts: ' . print_r($response->loyaltyAccounts, true);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Loyalty\LoyaltyAccountsRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\Loyalty\LoyaltyAccountsResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function accountsList(LoyaltyAccountsRequest $request): LoyaltyAccountsResponse
    {
        /** @var LoyaltyAccountsResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'loyalty/accounts',
            $request,
            LoyaltyAccountsResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/loyalty/calculate" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\Loyalty\PrivilegeType;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedRelationAbstractCustomer;
     * use RetailCrm\Api\Model\Entity\Loyalty\SerializedOrder;
     * use RetailCrm\Api\Model\Entity\Loyalty\SerializedOrderDelivery;
     * use RetailCrm\Api\Model\Entity\Loyalty\SerializedOrderProduct;
     * use RetailCrm\Api\Model\Entity\Loyalty\SerializedOrderProductOffer;
     * use RetailCrm\Api\Model\Request\Loyalty\LoyaltyCalculateRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $item = new SerializedOrderProduct();
     * $item->offer = SerializedOrderProductOffer::withId(1);
     * $item->quantity = 10;
     *
     * $order                = new SerializedOrder();
     * $order->customer      = SerializedRelationAbstractCustomer::withExternalId(
     *     '47876750',
     *     'bitrix-test'
     * );
     * $order->items         = [$item];
     * $order->delivery      = new SerializedOrderDelivery(100);
     * $order->privilegeType = PrivilegeType::NONE;
     *
     * $request = new LoyaltyCalculateRequest();
     * $request->site = 'bitrix-test';
     * $request->bonuses = 5;
     * $request->order = $order;
     *
     * try {
     *     $response = $client->loyalty->calculate($request);
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
     * @param \RetailCrm\Api\Model\Request\Loyalty\LoyaltyCalculateRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\Loyalty\LoyaltyCalculateResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws \Psr\Http\Client\NetworkExceptionInterface
     * @throws \Psr\Http\Client\RequestExceptionInterface
     * @throws \RetailCrm\Api\Exception\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function calculate(LoyaltyCalculateRequest $request): LoyaltyCalculateResponse
    {
        /** @var LoyaltyCalculateResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'loyalty/calculate',
            $request,
            LoyaltyCalculateResponse::class
        );
        return $response;
    }
}
