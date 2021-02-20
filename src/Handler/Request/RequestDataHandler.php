<?php

/**
 * PHP version 7.3
 *
 * @category RequestDataHandler
 * @package  RetailCrm\Api\Handler\Request
 */

namespace RetailCrm\Api\Handler\Request;

use Psr\Http\Message\StreamFactoryInterface;
use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Handler\AbstractHandler;
use RetailCrm\Api\Interfaces\FormEncoderInterface;
use RetailCrm\Api\Model\RequestData;

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
     * @throws \RetailCrm\Api\Exception\HandlerException
     *
     * @SuppressWarnings(PHPMD.ElseExpression)
     */
    public function handle($item)
    {
        if ($item instanceof RequestData && null !== $item->requestModel && null !== $item->request) {
            $formData = $this->formEncoder->encode($item->requestModel);

            if (in_array(strtoupper($item->request->getMethod()), [RequestMethod::GET, RequestMethod::DELETE], true)) {
                $item->request = $item->request->withUri(
                    $item->request->getUri()->withQuery($formData)
                );
            } else {
                $item->request = $item->request->withBody(
                    $this->streamFactory->createStream($formData)
                );
            }
        }

        return parent::handle($item);
    }
}
