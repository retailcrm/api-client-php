<?php

/**
 * PHP version 7.3
 *
 * @category ClientFactory
 * @package  RetailCrm\Examples\CustomMethodsDto\Factory
 */

namespace RetailCrm\Examples\CustomMethodsDto\Factory;

use RetailCrm\Api\Client;
use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Factory\ClientFactory as Base;
use RetailCrm\Api\Interfaces\FormEncoderInterface;
use RetailCrm\Examples\CustomMethodsDto\Component\CustomApiMethod;
use RetailCrm\Examples\CustomMethodsDto\Dto\Response\CustomersCreateResponse;

/**
 * Class ClientFactory
 *
 * @category ClientFactory
 * @package  RetailCrm\Examples\CustomMethodsDto\Factory
 */
class ClientFactory extends Base
{
    /** @var \RetailCrm\Api\Interfaces\FormEncoderInterface */
    private $customEncoder;

    public function setCustomEncoder(FormEncoderInterface $customEncoder): ClientFactory
    {
        $this->customEncoder = $customEncoder;
        return $this;
    }

    public function createClient(string $apiUrl, string $apiKey): Client
    {
        $client = parent::createClient($apiUrl, $apiKey);
        $client->customMethods->register(
            'createCustomer',
            $this->method(
                RequestMethod::POST,
                'customers/create',
                CustomersCreateResponse::class
            )
        );

        return $client;
    }

    private function method(string $method, string $route, string $responseFqn): CustomApiMethod
    {
        return new CustomApiMethod($method, $route, $responseFqn, $this->customEncoder);
    }
}
