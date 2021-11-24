<?php

/**
 * PHP version 7.3
 *
 * @category CustomApiMethod
 * @package  RetailCrm\Api\Component
 */

namespace RetailCrm\Api\Component;

use RetailCrm\Api\Exception\Client\HandlerException;
use RetailCrm\Api\Interfaces\RequestSenderInterface;

/**
 * Class CustomApiMethod
 *
 * This class can be used to implement custom methods without any hassle. It is useful if you don't want to
 * do anything besides sending the request and reading the response.
 *
 * @see \RetailCrm\Api\ResourceGroup\CustomMethods::register() for the usage example.
 *
 * @category CustomApiMethod
 * @package  RetailCrm\Api\Component
 */
class CustomApiMethod
{
    /** @var string */
    protected $method;

    /** @var string */
    protected $route;

    /** @var bool */
    protected $rawRouteUri;

    /**
     * Instantiates new instance of the CustomApiMethod.
     *
     * @param string $method
     * @param string $route
     */
    public function __construct(string $method, string $route)
    {
        $this->method = $method;
        $this->route = $route;
    }

    /**
     * Use provided route as if it was full URL.
     *
     * @return $this
     */
    public function useRouteAsUri(): self
    {
        $this->rawRouteUri = true;
        return $this;
    }

    /**
     * Sends the request, returns the response.
     *
     * @param \RetailCrm\Api\Interfaces\RequestSenderInterface $sender
     * @param array<int|string, mixed>|object                  $data
     *
     * @return array<int|string, mixed>|mixed
     * @throws \RetailCrm\Api\Exception\ApiException
     * @throws \RetailCrm\Api\Exception\ClientException
     * @throws \RetailCrm\Api\Exception\Client\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function __invoke(RequestSenderInterface $sender, $data = [])
    {
        if (!is_array($data)) {
            throw new HandlerException(__CLASS__ . ' only supports array data');
        }

        return $sender->send($this->method, $this->rawRouteUri ? $this->route : $sender->route($this->route), $data);
    }
}
