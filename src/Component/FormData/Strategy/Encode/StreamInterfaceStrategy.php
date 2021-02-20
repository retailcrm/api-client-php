<?php

/**
 * PHP version 7.3
 *
 * @category StreamInterfaceStrategy
 * @package  RetailCrm\Api\Component\FormData\Strategy\Encode
 */

namespace RetailCrm\Api\Component\FormData\Strategy\Encode;

use Psr\Http\Message\StreamInterface;
use RetailCrm\Api\Component\FormData\PropertyAnnotations;

/**
 * Class StreamInterfaceStrategy
 *
 * @category StreamInterfaceStrategy
 * @package  RetailCrm\Api\Component\FormData\Strategy\Encode
 */
class StreamInterfaceStrategy extends AbstractEncodeStrategy
{
    /**
     * @inheritDoc
     */
    public function encode($value, ?PropertyAnnotations $annotations): ?string
    {
        if ($value instanceof StreamInterface) {
            if ($value->isSeekable()) {
                $value->seek(0);
            }

            return $value->getContents();
        }

        return null;
    }
}
