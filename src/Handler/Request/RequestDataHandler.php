<?php

/**
 * PHP version 7.3
 *
 * @category RequestDataHandler
 * @package  RetailCrm\Api\Handler\Request
 */

namespace RetailCrm\Api\Handler\Request;

use JsonException;
use Psr\Http\Message\StreamFactoryInterface;
use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Exception\Client\HandlerException;
use RetailCrm\Api\Handler\AbstractHandler;
use RetailCrm\Api\Interfaces\FormEncoderInterface;
use RetailCrm\Api\Model\RequestData;
use Throwable;

/**
 * Class RequestDataHandler
 *
 * @category RequestDataHandler
 * @package  RetailCrm\Api\Handler\Request
 */
class RequestDataHandler extends AbstractHandler
{
    /**
     * @var StreamFactoryInterface $streamFactory
     */
    private $streamFactory;

    /**
     * @var \RetailCrm\Api\Interfaces\FormEncoderInterface
     */
    private $formEncoder;

    /**
     * RequestDataHandler constructor.
     *
     * @param \RetailCrm\Api\Interfaces\FormEncoderInterface $formEncoder
     * @param \Psr\Http\Message\StreamFactoryInterface       $streamFactory
     */
    public function __construct(FormEncoderInterface $formEncoder, StreamFactoryInterface $streamFactory)
    {
        $this->formEncoder = $formEncoder;
        $this->streamFactory = $streamFactory;
    }

    /**
     * Fills PSR-7 compatible request with request data.
     *
     * @param mixed $item
     *
     * @return mixed|null
     * @throws \RetailCrm\Api\Exception\Client\HandlerException|\RetailCrm\Api\Interfaces\ApiExceptionInterface
     *
     * @SuppressWarnings(PHPMD.ElseExpression)
     */
    public function handle($item)
    {
        if ($item instanceof RequestData && null !== $item->request) {
            $formData = '';

            if (null !== $item->requestModel) {
                try {
                    $formData = $this->formEncoder->encode($item->requestModel);
                } catch (Throwable $throwable) {
                    static::throwEncodeException($throwable);
                }
            }

            if (!empty($item->requestForm)) {
                $formData = http_build_query($item->requestForm);
            }

            if ('' !== $formData) {
                if (static::queryShouldBeUsed($item->request->getMethod())) {
                    $item->request = $item->request->withUri(
                        $item->request->getUri()->withQuery($formData)
                    );
                } else {
                    $item->request = $item->request->withBody(
                        $this->streamFactory->createStream($formData)
                    );
                }
            }
        }

        return parent::handle($item);
    }

    /**
     * @param \Throwable $throwable
     *
     * @throws \RetailCrm\Api\Exception\Client\HandlerException
     */
    private static function throwEncodeException(Throwable $throwable): void
    {
        throw new HandlerException(
            sprintf('Cannot encode request: %s', $throwable->getMessage()),
            $throwable->getCode(),
            $throwable
        );
    }

    /**
     * Returns true if query params should be used instead of JSON.
     *
     * @param string $method
     *
     * @return bool
     */
    private static function queryShouldBeUsed(string $method): bool
    {
        return in_array(
            strtoupper($method),
            [RequestMethod::GET, RequestMethod::DELETE],
            true
        );
    }
}
