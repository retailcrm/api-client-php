<?php

/**
 * PHP version 7.3
 *
 * @category PsrRequestHandler
 * @package  RetailCrm\Api\Handler\Request
 */

namespace RetailCrm\Api\Handler\Request;

use InvalidArgumentException;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\UriFactoryInterface;
use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Exception\Client\HandlerException;
use RetailCrm\Api\Handler\AbstractHandler;
use RetailCrm\Api\Interfaces\PsrFactoriesAwareInterface;
use RetailCrm\Api\Model\RequestData;
use RetailCrm\Api\Traits\PsrFactoriesAwareTrait;

/**
 * Class PsrRequestHandler
 *
 * @category PsrRequestHandler
 * @package  RetailCrm\Api\Handler\Request
 */
class PsrRequestHandler extends AbstractHandler implements PsrFactoriesAwareInterface
{
    use PsrFactoriesAwareTrait;

    /** @var string[] */
    private static $methodsWithBody = [
        RequestMethod::POST,
        RequestMethod::PUT,
        RequestMethod::PATCH,
    ];

    /**
     * PsrRequestHandler constructor.
     *
     * @param \Psr\Http\Message\UriFactoryInterface     $uriFactory
     * @param \Psr\Http\Message\RequestFactoryInterface $requestFactory
     */
    public function __construct(UriFactoryInterface $uriFactory, RequestFactoryInterface $requestFactory)
    {
        $this->uriFactory = $uriFactory;
        $this->requestFactory = $requestFactory;
    }

    /**
     * Creates base PSR-7 request model with URI and method.
     *
     * @param mixed $item
     *
     * @return mixed|null
     * @throws \RetailCrm\Api\Exception\Client\HandlerException|\RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function handle($item)
    {
        if ($item instanceof RequestData) {
            $item->method = strtoupper($item->method);

            try {
                $uri = $this->uriFactory->createUri($item->uri);
            } catch (InvalidArgumentException $exception) {
                throw new HandlerException("Cannot parse URI", 0, $exception);
            }

            $request = $this->requestFactory
                ->createRequest($item->method, $uri)
                ->withHeader('User-Agent', 'RetailCRM PHP API Client / v6.x')
                ->withHeader('Accept', 'application/json');

            if (in_array($item->method, static::$methodsWithBody)) {
                $request = $request->withHeader('Content-Type', 'application/x-www-form-urlencoded');
            }

            $item->request = $request;
        }

        return parent::handle($item);
    }
}
