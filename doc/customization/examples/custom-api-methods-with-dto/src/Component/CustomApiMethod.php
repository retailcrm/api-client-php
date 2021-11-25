<?php

/**
 * PHP version 7.3
 *
 * @category CustomApiMethod
 * @package  Retailcrm\Examples\CustomMethodsDto\Component
 */

namespace Retailcrm\Examples\CustomMethodsDto\Component;

use RetailCrm\Api\Exception\Client\HandlerException;
use RetailCrm\Api\Interfaces\FormEncoderInterface;
use RetailCrm\Api\Interfaces\RequestSenderInterface;

/**
 * Class CustomApiMethod
 *
 * @category CustomApiMethod
 * @package  Retailcrm\Examples\CustomMethodsDto\Component
 */
class CustomApiMethod extends \RetailCrm\Api\Component\CustomApiMethod
{
    /** @var string */
    private $responseFqn;

    /** @var FormEncoderInterface */
    private $encoder;

    public function __construct(string $method, string $route, string $responseFqn, FormEncoderInterface $encoder)
    {
        parent::__construct($method, $route);

        $this->responseFqn = $responseFqn;
        $this->encoder = $encoder;
    }

    /**
     * Sends the request, returns the response.
     *
     * @param \RetailCrm\Api\Interfaces\RequestSenderInterface $sender
     * @param array<int|string, mixed>|object                  $data
     *
     * @return object
     * @throws \RetailCrm\Api\Exception\ApiException
     * @throws \RetailCrm\Api\Exception\ClientException
     * @throws \RetailCrm\Api\Exception\Client\HandlerException
     * @throws \RetailCrm\Api\Interfaces\ApiExceptionInterface
     */
    public function __invoke(RequestSenderInterface $sender, $data = [])
    {
        if (is_object($data)) {
            $data = $this->encoder->encodeArray($data);
        }

        $result = parent::__invoke($sender, $data);

        try {
            return $this->encoder->getSerializer()->fromArray($result, $this->responseFqn);
        } catch (\Throwable $throwable) {
            throw new HandlerException(
                'Cannot deserialize body: ' . $throwable->getMessage(),
                0,
                $throwable
            );
        }
    }
}
