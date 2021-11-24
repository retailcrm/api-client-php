<?php

/**
 * PHP version 7.3
 *
 * @category CustomMethods
 * @package  RetailCrm\Api\ResourceGroup
 */

namespace RetailCrm\Api\ResourceGroup;

use RetailCrm\Api\Component\RequestSender;
use RetailCrm\Api\Exception\Client\HandlerException;

/**
 * Class CustomMethods
 *
 * @category CustomMethods
 * @package  RetailCrm\Api\ResourceGroup
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class CustomMethods extends AbstractApiResourceGroup
{
    /** @var \RetailCrm\Api\Interfaces\RequestSenderInterface|null */
    private $requestSender;

    /** @var array<string, callable|\RetailCrm\Api\Component\CustomApiMethod> */
    private $methods = [];

    /**
     * Register custom method in the resource group. You can use invokable class for easier implementation.
     *
     * Registered callable should accept three arguments:
     *  - `RequestSenderInterface`
     *  - Array with the request data (may be null or empty if not provided - this is the case for get requests).
     *  - Context data - may contain any data. You can use the context for anything you like.
     *
     * Example with the `CustomApiMethod` wrapper:
     *
     * ```php
     * use RetailCrm\Api\Component\CustomApiMethod;
     * use RetailCrm\Api\Enum\RequestMethod;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://test.simla.com', 'apiKey');
     * $client->customMethods->register('settings', new CustomApiMethod(RequestMethod::GET, 'settings'));
     * ```
     *
     * Sometimes `CustomApiMethod` may feel too simple to do certain tasks in the methods. That's why it is possible
     * to register custom callable. Let's register a custom method that returns array of available scopes:
     *
     * use RetailCrm\Api\Enum\RequestMethod;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     * use RetailCrm\Api\Interfaces\RequestSenderInterface;
     *
     * ```php
     * $client = SimpleClientFactory::createClient('https://test.simla.com', 'apiKey');
     * $client->customMethods->register(
     *     'scopes',
     *     static function (RequestSenderInterface $sender, $data, array $context) {
     *         return $sender->send(
     *             RequestMethod::GET,
     *             sprintf('https://%s/api/credentials', $sender->host()),
     *             $data
     *         )['scopes'];
     *     }
     * );
     * ```
     *
     * Check `call()` method to learn how to call registered methods.
     *
     * @see self::call
     * @see \RetailCrm\Api\Interfaces\RequestSenderInterface
     * @see RequestSender
     * @see \RetailCrm\Api\Component\CustomApiMethod
     *
     * @param string                                            $name
     * @param callable|\RetailCrm\Api\Component\CustomApiMethod $sender
     */
    public function register(string $name, callable $sender): void
    {
        if (null === $this->requestSender) {
            $this->requestSender = new RequestSender($this);
        }

        $this->methods[$name] = $sender;
    }

    /**
     * Calls custom method, returns array response.
     *
     * Usage:
     *
     * ```php
     * $client->customMethods->call('scopes');
     * ```
     *
     * Second parameter should be provided for POST requests or query data. Third parameter is used to pass anything
     * you like to the callable during the method call (logger, for example).
     *
     * This implementation is also used in the `__call` magic method. It works like this:
     *
     * ```php
     * $client->customMethods->scopes($data, 'any', 'other', 'params');
     * ```
     * will make this call:
     * ```php
     * $client->customMethods->call('scopes', $data, ['any', 'other', 'params']);
     * ```
     *
     * Full example for the settings method:
     *
     * ```php
     * use RetailCrm\Api\Component\CustomApiMethod;
     * use RetailCrm\Api\Enum\RequestMethod;
     * use RetailCrm\Api\Factory\SimpleClientFactory;
     * use RetailCrm\Api\Interfaces\ApiExceptionInterface;
     *
     * $client = SimpleClientFactory::createClient('https://azgalot.retailcrm.ru', '9y3e3ohX1NGqAausgg5ACMWPv5Z4iXQF');
     * $client->customMethods->register('settings', new CustomApiMethod(RequestMethod::GET, 'settings'));
     *
     * try {
     *     // It will work because 'settings' method was registered before
     *     $settings = $client->customMethods->settings();
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
     * echo 'Timezone: ' . $settings['settings']['timezone']['value'];
     * ```
     *
     * @param string                          $name
     * @param array<int|string, mixed>|object $data
     * @param array<int|string, mixed>        $context
     *
     * @return array<int|string, mixed>|object
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
    public function call(string $name, $data = [], array $context = [])
    {
        if (null === $this->requestSender || !array_key_exists($name, $this->methods)) {
            throw new HandlerException(sprintf('Cannot find custom method with name "%s"', $name));
        }

        return $this->methods[$name]($this->requestSender, $data, $context);
    }

    /**
     * Calls custom method, returns array response.
     *
     * @param string                   $name
     * @param array<int|string, mixed> $arguments
     *
     * @return array<int|string, mixed>|object
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     * @throws \RetailCrm\Api\Interfaces\ClientExceptionInterface
     * @throws \RetailCrm\Api\Exception\Api\AccountDoesNotExistException
     * @throws \RetailCrm\Api\Exception\Api\ApiErrorException
     * @throws \RetailCrm\Api\Exception\Api\MissingCredentialsException
     * @throws \RetailCrm\Api\Exception\Api\MissingParameterException
     * @throws \RetailCrm\Api\Exception\Api\ValidationException
     * @throws \RetailCrm\Api\Exception\Client\HandlerException
     * @throws \RetailCrm\Api\Exception\Client\HttpClientException
     *@see \RetailCrm\Api\ResourceGroup\CustomMethods::call()
     *
     */
    public function __call(string $name, array $arguments)
    {
        $data = [];
        $context = [];

        if (count($arguments) > 0) {
            if (!is_array($arguments[0]) && !is_object($arguments[0])) {
                throw new HandlerException(sprintf(
                    '$data must be of type array or object, %s given',
                    gettype($arguments[0])
                ));
            }

            $data = $arguments[0];
        }

        if (count($arguments) > 1) {
            if (!is_array($arguments[1])) {
                throw new HandlerException(sprintf(
                    '$context must be of type array, %s given',
                    gettype($arguments[1])
                ));
            }

            $context = $arguments[1];
        }

        return $this->call($name, $data, $context);
    }
}
