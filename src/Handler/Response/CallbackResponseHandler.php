<?php

/**
 * PHP version 7.3
 *
 * @category CallbackResponseHandler
 * @package  RetailCrm\Api\Handler\Response
 */

namespace RetailCrm\Api\Handler\Response;

use RetailCrm\Api\Model\ResponseData;

/**
 * Class CallbackResponseHandler
 *
 * @category CallbackResponseHandler
 * @package  RetailCrm\Api\Handler\Response
 */
class CallbackResponseHandler extends AbstractResponseHandler
{
    /** @var callable */
    private $callback;

    /**
     * CallbackResponseHandler constructor.
     */
    public function __construct(callable $callback)
    {
        $this->callback = $callback;
    }

    /**
     * @inheritDoc
     */
    protected function handleResponse(ResponseData $responseData)
    {
        call_user_func(
            $this->callback,
            $responseData,
            $this->serializer,
            $this->eventDispatcher,
            $this->apiExceptionFactory
        );

        return $this->next($responseData);
    }
}
