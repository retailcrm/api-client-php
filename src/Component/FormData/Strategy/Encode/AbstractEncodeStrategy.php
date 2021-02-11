<?php

/**
 * PHP version 7.3
 *
 * @category AbstractEncodeStrategy
 * @package  RetailCrm\Api\Component\FormData\Strategy\Encode
 */

namespace RetailCrm\Api\Component\FormData\Strategy\Encode;

use Doctrine\Common\Annotations\Reader;
use JMS\Serializer\SerializerInterface;

/**
 * Class AbstractEncodeStrategy
 *
 * @category AbstractEncodeStrategy
 * @package  RetailCrm\Api\Component\FormData\Strategy\Encode
 */
abstract class AbstractEncodeStrategy implements EncodeStrategyInterface
{
    /** @var \Doctrine\Common\Annotations\Reader */
    protected $annotationReader;

    /** @var string $innerType */
    protected $innerType;

    /** @var \JMS\Serializer\SerializerInterface */
    protected $jmsSerializer;

    /**
     * AbstractEncodeStrategy constructor.
     *
     * @param \Doctrine\Common\Annotations\Reader $annotationReader
     * @param \JMS\Serializer\SerializerInterface $jmsSerializer
     */
    public function __construct(Reader $annotationReader, SerializerInterface $jmsSerializer)
    {
        $this->annotationReader = $annotationReader;
        $this->jmsSerializer    = $jmsSerializer;
    }

    /**
     * Sets inner type for types like array<key, value> and \DateTime<format>
     *
     * @param string $type
     *
     * @return \RetailCrm\Api\Component\FormData\Strategy\Encode\EncodeStrategyInterface
     */
    public function setInnerType(string $type): EncodeStrategyInterface
    {
        $this->innerType = $type;
        return $this;
    }
}
