<?php

/**
 * PHP version 7.3
 *
 * @category SuccessRequestEvent
 * @package  RetailCrm\Api\Event
 */

namespace RetailCrm\Api\Event;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface as PsrResponseInterface;
use RetailCrm\Api\Interfaces\ResponseInterface;

/**
 * Class SuccessRequestEvent
 *
 * @category SuccessRequestEvent
 * @package  RetailCrm\Api\Event
 */
class SuccessRequestEvent extends AbstractRequestEvent
{
    /** @var \RetailCrm\Api\Interfaces\ResponseInterface */
    private $responseModel;

    /**
     * FailureRequestEvent constructor.
     *
     * @param string                                      $baseUrl
     * @param \Psr\Http\Message\RequestInterface          $request
     * @param \Psr\Http\Message\ResponseInterface         $response
     * @param \RetailCrm\Api\Interfaces\ResponseInterface $responseModel
     */
    public function __construct(
        string $baseUrl,
        RequestInterface $request,
        PsrResponseInterface $response,
        ResponseInterface $responseModel
    ) {
        parent::__construct($baseUrl, $request, $response);

        $this->responseModel = $responseModel;
    }

    /**
     * @return \RetailCrm\Api\Interfaces\ResponseInterface
     */
    public function getResponseModel(): ResponseInterface
    {
        return $this->responseModel;
    }
}
