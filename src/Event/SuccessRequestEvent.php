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
    /** @var \RetailCrm\Api\Interfaces\ResponseInterface|null */
    private $responseModel;

    /** @var array<int|string, mixed> */
    private $responseArray;

    /**
     * SuccessRequestEvent constructor.
     *
     * @param string                                           $baseUrl
     * @param \Psr\Http\Message\RequestInterface               $request
     * @param \Psr\Http\Message\ResponseInterface              $response
     * @param \RetailCrm\Api\Interfaces\ResponseInterface|null $responseModel
     * @param array<int|string, mixed>                         $responseArray
     */
    public function __construct(
        string $baseUrl,
        RequestInterface $request,
        PsrResponseInterface $response,
        ?ResponseInterface $responseModel,
        array $responseArray = []
    ) {
        parent::__construct($baseUrl, $request, $response);

        $this->responseModel = $responseModel;
        $this->responseArray = $responseArray;
    }

    /**
     * @return \RetailCrm\Api\Interfaces\ResponseInterface|null
     */
    public function getResponseModel(): ?ResponseInterface
    {
        return $this->responseModel;
    }

    /**
     * This array will be present only for the custom requests.
     *
     * @return array<int|string, mixed>
     */
    public function getResponseArray(): array
    {
        return $this->responseArray;
    }
}
