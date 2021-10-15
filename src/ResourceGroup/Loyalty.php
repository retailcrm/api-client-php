<?php

/**
 * PHP version 7.3
 *
 * @category Loyalty
 * @package  RetailCrm\Api\ResourceGroup
 */

namespace RetailCrm\Api\ResourceGroup;

use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Request\Loyalty\BonusAccountDetailsRequest;
use RetailCrm\Api\Model\Request\Loyalty\LoyaltiesRequest;
use RetailCrm\Api\Model\Request\Loyalty\LoyaltyAccountCreateRequest;
use RetailCrm\Api\Model\Request\Loyalty\LoyaltyAccountEditRequest;
use RetailCrm\Api\Model\Request\Loyalty\LoyaltyAccountsRequest;
use RetailCrm\Api\Model\Request\Loyalty\LoyaltyBonusCreditRequest;
use RetailCrm\Api\Model\Request\Loyalty\LoyaltyBonusOperationsRequest;
use RetailCrm\Api\Model\Request\Loyalty\LoyaltyCalculateRequest;
use RetailCrm\Api\Model\Response\Loyalty\BonusAccountDetailsResponse;
use RetailCrm\Api\Model\Response\Loyalty\LoyaltiesResponse;
use RetailCrm\Api\Model\Response\Loyalty\LoyaltyAccountActivateResponse;
use RetailCrm\Api\Model\Response\Loyalty\LoyaltyAccountCreateResponse;
use RetailCrm\Api\Model\Response\Loyalty\LoyaltyAccountResponse;
use RetailCrm\Api\Model\Response\Loyalty\LoyaltyAccountsResponse;
use RetailCrm\Api\Model\Response\Loyalty\LoyaltyBonusCreditResponse;
use RetailCrm\Api\Model\Response\Loyalty\LoyaltyBonusOperationsResponse;
use RetailCrm\Api\Model\Response\Loyalty\LoyaltyCalculateResponse;
use RetailCrm\Api\Model\Response\Loyalty\LoyaltyResponse;

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
     * Makes POST "/api/v5/loyalty/account/{id}/bonus/credit" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Request\Loyalty\LoyaltyBonusCreditRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request = new LoyaltyBonusCreditRequest();
     * $request->amount = 100;
     * $request->activationDate = new DateTime();
     * $request->expireDate = (new DateTime())->add(new DateInterval('P14D'));
     * $request->comment = 'Monthly membership bonuses.';
     *
     * try {
     *     $response = $client->loyalty->accountBonusCredit(159, $request);
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
     * echo 'Credited bonuses for account: ' . print_r($response->loyaltyBonus, true);
     * ```
     *
     * @param int                                                            $id
     * @param \RetailCrm\Api\Model\Request\Loyalty\LoyaltyBonusCreditRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\Loyalty\LoyaltyBonusCreditResponse
     * @throws \RetailCrm\Api\Exception\Api\AccountDoesNotExistException
     * @throws \RetailCrm\Api\Exception\Api\ApiErrorException
     * @throws \RetailCrm\Api\Exception\Api\MissingCredentialsException
     * @throws \RetailCrm\Api\Exception\Api\MissingParameterException
     * @throws \RetailCrm\Api\Exception\Api\ValidationException
     * @throws \RetailCrm\Api\Exception\Client\HandlerException
     * @throws \RetailCrm\Api\Exception\Client\HttpClientException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     * @throws \RetailCrm\Api\Interfaces\ClientExceptionInterface
     */
    public function accountBonusCredit(int $id, LoyaltyBonusCreditRequest $request): LoyaltyBonusCreditResponse
    {
        /** @var LoyaltyBonusCreditResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'loyalty/account/' . $id . '/bonus/credit',
            $request,
            LoyaltyBonusCreditResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/loyalty/account/{id}/bonus/operations" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Component\Transformer\DateTimeTransformer;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Filter\Loyalty\LoyaltyAccountBonusOperationsApiFilterType;
     * use RetailCrm\Api\Model\Request\Loyalty\LoyaltyBonusOperationsRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request = new LoyaltyBonusOperationsRequest();
     * $request->filter = new LoyaltyAccountBonusOperationsApiFilterType();
     * $request->filter->createdAtFrom = DateTimeTransformer::create('2020-01-01 00:00:00');
     * $request->filter->createdAtTo = DateTimeTransformer::create('2021-08-01 00:00:00');
     *
     * try {
     *     $response = $client->loyalty->accountBonusOperations(159, $request);
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
     * echo 'Account operations: ' . print_r($response->bonusOperations, true);
     * ```
     *
     * @param int                                                                     $id
     * @param \RetailCrm\Api\Model\Request\Loyalty\LoyaltyBonusOperationsRequest|null $request
     *
     * @return \RetailCrm\Api\Model\Response\Loyalty\LoyaltyBonusOperationsResponse
     * @throws \RetailCrm\Api\Exception\Api\AccountDoesNotExistException
     * @throws \RetailCrm\Api\Exception\Api\ApiErrorException
     * @throws \RetailCrm\Api\Exception\Api\MissingCredentialsException
     * @throws \RetailCrm\Api\Exception\Api\MissingParameterException
     * @throws \RetailCrm\Api\Exception\Api\ValidationException
     * @throws \RetailCrm\Api\Exception\Client\HandlerException
     * @throws \RetailCrm\Api\Exception\Client\HttpClientException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     * @throws \RetailCrm\Api\Interfaces\ClientExceptionInterface
     */
    public function accountBonusOperations(
        int $id,
        ?LoyaltyBonusOperationsRequest $request = null
    ): LoyaltyBonusOperationsResponse {
        /** @var LoyaltyBonusOperationsResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'loyalty/account/' . $id . '/bonus/operations',
            $request,
            LoyaltyBonusOperationsResponse::class
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
     *     $response = $client->loyalty->accounts($request);
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
    public function accounts(LoyaltyAccountsRequest $request): LoyaltyAccountsResponse
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
     * Makes GET "/api/v5/loyalty/account/{id}" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $response = $client->loyalty->accountGet(1);
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
     * echo 'Current loyalty account balance: ' . $response->loyaltyAccount->amount . ' bonuses.';
     * ```
     *
     * @param int $id
     *
     * @return \RetailCrm\Api\Model\Response\Loyalty\LoyaltyAccountResponse
     * @throws \RetailCrm\Api\Exception\Api\AccountDoesNotExistException
     * @throws \RetailCrm\Api\Exception\Api\ApiErrorException
     * @throws \RetailCrm\Api\Exception\Api\MissingCredentialsException
     * @throws \RetailCrm\Api\Exception\Api\MissingParameterException
     * @throws \RetailCrm\Api\Exception\Api\ValidationException
     * @throws \RetailCrm\Api\Exception\Client\HandlerException
     * @throws \RetailCrm\Api\Exception\Client\HttpClientException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     * @throws \RetailCrm\Api\Interfaces\ClientExceptionInterface
     */
    public function accountGet(int $id): LoyaltyAccountResponse
    {
        /** @var LoyaltyAccountResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'loyalty/account/' . $id,
            null,
            LoyaltyAccountResponse::class
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

    /**
     * Makes GET "/api/v5/loyalty/loyalties" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\NumericBoolean;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Filter\Loyalty\LoyaltyApiFilterType;
     * use RetailCrm\Api\Model\Request\Loyalty\LoyaltiesRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $request = new LoyaltiesRequest();
     * $request->filter = new LoyaltyApiFilterType();
     * $request->filter->active = NumericBoolean::TRUE;
     * $request->filter->blocked = NumericBoolean::FALSE;
     *
     * try {
     *     $response = $client->loyalty->loyalties($request);
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
     * echo 'Loyalties: ' . print_r($response->loyalties, true);
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\Loyalty\LoyaltiesRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\Loyalty\LoyaltiesResponse
     * @throws \RetailCrm\Api\Exception\Api\AccountDoesNotExistException
     * @throws \RetailCrm\Api\Exception\Api\ApiErrorException
     * @throws \RetailCrm\Api\Exception\Api\MissingCredentialsException
     * @throws \RetailCrm\Api\Exception\Api\MissingParameterException
     * @throws \RetailCrm\Api\Exception\Api\ValidationException
     * @throws \RetailCrm\Api\Exception\Client\HandlerException
     * @throws \RetailCrm\Api\Exception\Client\HttpClientException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     * @throws \RetailCrm\Api\Interfaces\ClientExceptionInterface
     */
    public function loyalties(LoyaltiesRequest $request): LoyaltiesResponse
    {
        /** @var LoyaltiesResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'loyalty/loyalties',
            $request,
            LoyaltiesResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/loyalty/loyalties/{id}" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $response = $client->loyalty->get(1);
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
     * echo 'Loyalty program name: ' . $response->loyalty->name;
     * ```
     *
     * @param int $id
     *
     * @return \RetailCrm\Api\Model\Response\Loyalty\LoyaltyResponse
     * @throws \RetailCrm\Api\Exception\Api\AccountDoesNotExistException
     * @throws \RetailCrm\Api\Exception\Api\ApiErrorException
     * @throws \RetailCrm\Api\Exception\Api\MissingCredentialsException
     * @throws \RetailCrm\Api\Exception\Api\MissingParameterException
     * @throws \RetailCrm\Api\Exception\Api\ValidationException
     * @throws \RetailCrm\Api\Exception\Client\HandlerException
     * @throws \RetailCrm\Api\Exception\Client\HttpClientException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     * @throws \RetailCrm\Api\Interfaces\ClientExceptionInterface
     */
    public function get(int $id): LoyaltyResponse
    {
        /** @var LoyaltyResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'loyalty/loyalties/' . $id,
            null,
            LoyaltyResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/loyalty/account/{$id}/bonus/{$status}/details" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Filter\Loyalty\LoyaltyAccountBonusApiFilterType;
     * use RetailCrm\Api\Model\Request\Loyalty\BonusAccountDetailsRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $request = new BonusAccountDetailsRequest();
     *     $request->status = 'bonus_status';
     *     $request->id = 1;
     *     $request->limit = 2;
     *     $request->page = 1;
     *     $request->filter = new LoyaltyAccountBonusApiFilterType();
     *     $request->filter->date = new DateTime();
     *
     *     $response = $client->loyalty->getBonusAccountDetails(
     *          $request->status,
     *          $request->id,
     *          $request
     *     );
     * } catch (ApiExceptionInterface $exception) {
     *     echo sprintf(
     *          'Error from RetailCRM API (status code: %d): %s',
     *          $exception->getStatusCode(),
     *          $exception->getMessage()
     *     );
     *
     *     if (count($exception->getErrorResponse()->errors) > 0) {
     *         echo PHP_EOL . 'Errors: ' . implode(', ', $exception->getErrorResponse()->errors);
     *     }
     *
     *     return;
     * }
     *
     * echo 'Total bonus amount: ' . $response->statistic->totalAmount;
     * ```
     *
     * @param int                                                             $id
     * @param string                                                          $status
     * @param \RetailCrm\Api\Model\Request\Loyalty\BonusAccountDetailsRequest $request
     *
     * @return \RetailCrm\Api\Model\Response\Loyalty\BonusAccountDetailsResponse
     * @throws \RetailCrm\Api\Exception\Api\AccountDoesNotExistException
     * @throws \RetailCrm\Api\Exception\Api\ApiErrorException
     * @throws \RetailCrm\Api\Exception\Api\MissingCredentialsException
     * @throws \RetailCrm\Api\Exception\Api\MissingParameterException
     * @throws \RetailCrm\Api\Exception\Api\ValidationException
     * @throws \RetailCrm\Api\Exception\Client\HandlerException
     * @throws \RetailCrm\Api\Exception\Client\HttpClientException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     * @throws \RetailCrm\Api\Interfaces\ClientExceptionInterface
     */
    public function getBonusAccountDetails(
        int $id,
        string $status,
        BonusAccountDetailsRequest $request
    ): BonusAccountDetailsResponse {
        /** @var BonusAccountDetailsResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'loyalty/account/' . $id . '/bonus/' . $status . '/details',
            $request,
            BonusAccountDetailsResponse::class
        );

        return $response;
    }
}
