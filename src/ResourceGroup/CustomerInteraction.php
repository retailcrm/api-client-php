<?php

/**
 * PHP version 7.3
 *
 * @category CustomerInteraction
 * @package  RetailCrm\Api\ResourceGroup
 */

namespace RetailCrm\Api\ResourceGroup;

use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Model\Request\ByAndSiteByRequest;
use RetailCrm\Api\Model\Request\CustomerInteraction\CustomerInteractionCartClearRequest;
use RetailCrm\Api\Model\Request\CustomerInteraction\CustomerInteractionCartSetRequest;
use RetailCrm\Api\Model\Response\CustomerInteraction\CustomerInteractionCartGetResponse;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class CustomerInteraction
 *
 * @category CustomerInteraction
 * @package  RetailCrm\Api\ResourceGroup
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class CustomerInteraction extends AbstractApiResourceGroup
{
    /**
     * Makes POST "/api/v5/customer-interaction/{site}/cart/clear" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\BySite;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\CustomerInteraction\Cart;
     * use RetailCrm\Api\Model\Entity\CustomerInteraction\CartCustomer;
     * use RetailCrm\Api\Model\Request\CustomerInteraction\CustomerInteractionCartClearRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $cart                       = new Cart();
     * $cart->clearedAt            = new DateTime('now');
     * $cart->customer             = new CartCustomer();
     * $cart->customer->id         = 4770;
     * $cart->customer->browserId  = 'browserId';
     * $cart->customer->gaClientId = 'gaClientId';
     *
     * $request         = new CustomerInteractionCartClearRequest();
     * $request->cart   = $cart;
     * $request->siteBy = BySite::CODE;
     *
     * try {
     *     $response = $client->customerInteraction->cartClear('testSite', $request);
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
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\CustomerInteraction\CustomerInteractionCartClearRequest $request
     * @param string|int $site
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
    public function cartClear(CustomerInteractionCartClearRequest $request, $site): SuccessResponse
    {
        /** @var SuccessResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'customer-interaction/' . $site . '/cart/clear',
            $request,
            SuccessResponse::class
        );
        return $response;
    }

    /**
     * Makes POST "/api/v5/customer-interaction/{site}/cart/set" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\BySite;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Entity\CustomerInteraction\Cart;
     * use RetailCrm\Api\Model\Entity\CustomerInteraction\CartCustomer;
     * use RetailCrm\Api\Model\Entity\CustomerInteraction\CartItem;
     * use RetailCrm\Api\Model\Entity\Orders\Items\Offer;
     * use RetailCrm\Api\Model\Request\CustomerInteraction\CustomerInteractionCartSetRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * $customer     = new CartCustomer();
     * $customer->id = 4770;
     *
     * $cartItem                    = new CartItem();
     * $cartItem->price             = 24.99;
     * $cartItem->quantity          = 2;
     * $cartItem->offer             = new Offer();
     * $cartItem->offer->externalId = '47701234567890';
     *
     * $cart           = new Cart();
     * $cart->items[]  = $cartItem;
     * $cart->customer = $customer;
     *
     * $request         = new CustomerInteractionCartSetRequest();
     * $request->cart   = $cart;
     * $request->siteBy = BySite::CODE;
     *
     *  try {
     *      $response = $client->customerInteraction->cartSet('testSite', $request);
     *  } catch (ApiExceptionInterface $exception) {
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
     * ```
     *
     * @param \RetailCrm\Api\Model\Request\CustomerInteraction\CustomerInteractionCartSetRequest $request
     * @param string|int $site
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
    public function cartSet(CustomerInteractionCartSetRequest $request, $site): SuccessResponse
    {
        /** @var SuccessResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            'customer-interaction/' . $site . '/cart/set',
            $request,
            SuccessResponse::class
        );
        return $response;
    }

    /**
     * Makes GET "/api/v5/customer-interaction/{site}/cart/{customerId}" request.
     *
     * Example:
     * ```php
     * use RetailCrm\Api\Enum\ByIdentifier;
     * use RetailCrm\Api\Enum\BySite;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Model\Request\ByAndSiteByRequest;
     *
     * $client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
     *
     * try {
     *     $response = $client->customerInteraction->cartGet(
     *         'testSite',
     *         4200,
     *         new ByAndSiteByRequest(ByIdentifier::ID, BySite::CODE)
     *     );
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
     * echo 'Cart: ' . print_r($response->cart, true);
     * ```
     *
     * @param string|int                                           $site
     * @param string|int                                           $customerId
     * @param \RetailCrm\Api\Model\Request\ByAndSiteByRequest|null $request
     *
     * @return \RetailCrm\Api\Model\Response\CustomerInteraction\CustomerInteractionCartGetResponse
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
    public function cartGet(
        $site,
        $customerId,
        ?ByAndSiteByRequest $request = null
    ): CustomerInteractionCartGetResponse {
        /** @var CustomerInteractionCartGetResponse $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            'customer-interaction/' . $site . '/cart/' . $customerId,
            $request,
            CustomerInteractionCartGetResponse::class
        );
        return $response;
    }
}
