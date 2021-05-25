<?php

/**
 * PHP version 7.3
 *
 * @category CallbackRequestHandler
 * @package  RetailCrm\Api\Handler\Request
 */

namespace RetailCrm\Api\Handler\Request;

use RetailCrm\Api\Handler\AbstractHandler;
use RetailCrm\Api\Interfaces\PsrFactoriesAwareInterface;
use RetailCrm\Api\Traits\PsrFactoriesAwareTrait;

/**
 * Class CallbackRequestHandler
 *
 * @category CallbackRequestHandler
 * @package  RetailCrm\Api\Handler\Request
 */
class CallbackRequestHandler extends AbstractHandler implements PsrFactoriesAwareInterface
{
    use PsrFactoriesAwareTrait;

    /** @var callable */
    private $callback;

    /**
     * CallbackRequestHandler constructor.
     *
     * @param callable $callback
     */
    public function __construct(callable $callback)
    {
        $this->callback = $callback;
    }

    /**
     * @inheritDoc
     */
    public function handle($item)
    {
        call_user_func(
            $this->callback,
            $item,
            $this->requestFactory,
            $this->streamFactory,
            $this->uriFactory
        );

        return parent::handle($item);
    }
}
