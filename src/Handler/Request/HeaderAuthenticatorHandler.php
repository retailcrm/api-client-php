<?php

/**
 * PHP version 7.3
 *
 * @category HeaderAuthenticatorHandler
 * @package  RetailCrm\Api\Handler\Request
 */

namespace RetailCrm\Api\Handler\Request;

use RetailCrm\Api\Handler\AbstractHandler;
use RetailCrm\Api\Model\RequestData;

/**
 * Class HeaderAuthenticatorHandler
 *
 * @category HeaderAuthenticatorHandler
 * @package  RetailCrm\Api\Handler\Request
 */
class HeaderAuthenticatorHandler extends AbstractHandler
{
    /** @var string */
    private $apiKey;

    /**
     * HeaderAuthenticatorHandler constructor.
     *
     * @param string $apiKey
     */
    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * Adds "x-api-key" header with provided API key
     *
     * @param mixed $item
     *
     * @return mixed|null
     * @throws \RetailCrm\Api\Exception\Client\HandlerException|\RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function handle($item)
    {
        if ($item instanceof RequestData && null !== $item->request) {
            $item->request = $item->request->withAddedHeader('X-Api-Key', $this->apiKey);
        }

        return parent::handle($item);
    }
}
