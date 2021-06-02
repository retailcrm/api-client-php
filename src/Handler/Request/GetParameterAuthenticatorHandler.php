<?php

/**
 * PHP version 7.3
 *
 * @category GetParameterAuthenticatorHandler
 * @package  RetailCrm\Api\Handler\Request
 */

namespace RetailCrm\Api\Handler\Request;

use RetailCrm\Api\Handler\AbstractHandler;
use RetailCrm\Api\Model\RequestData;

/**
 * Class GetParameterAuthenticatorHandler
 *
 * @category GetParameterAuthenticatorHandler
 * @package  RetailCrm\Api\Handler\Request
 */
class GetParameterAuthenticatorHandler extends AbstractHandler
{
    /** @var string */
    private $apiKey;

    /**
     * GetParameterAuthenticatorHandler constructor.
     *
     * @param string $apiKey
     */
    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * Adds "apiKey" GET parameter with provided API key
     *
     * @param mixed $item
     *
     * @return mixed|null
     * @throws \RetailCrm\Api\Exception\Client\HandlerException|\RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function handle($item)
    {
        if ($item instanceof RequestData && null !== $item->request) {
            $params = [];
            $uri    = $item->request->getUri();
            parse_str($uri->getQuery(), $params);

            $params['apiKey'] = $this->apiKey;

            $item->request = $item->request->withUri($uri->withQuery(http_build_query($params)), true);
        }

        return parent::handle($item);
    }
}
