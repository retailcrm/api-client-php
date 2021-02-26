<?php

/**
 * PHP version 7.3
 *
 * @category PropertyTypeMixed
 * @package  RetailCrm\Api\Component\Serializer\Type
 */

namespace RetailCrm\Api\Component\Serializer\Type;

use Liip\MetadataParser\Metadata\AbstractPropertyType;
use Liip\MetadataParser\Metadata\PropertyType;

/**
 * Class PropertyTypeMixed
 *
 * @category PropertyTypeMixed
 * @package  RetailCrm\Api\Component\Serializer\Type
 * @internal
 */
class PropertyTypeMixed extends AbstractPropertyType
{
    public const TYPE_NAME = 'mixed';

    /**
     * PropertyTypeMixed constructor.
     */
    public function __construct()
    {
        parent::__construct(true);
    }

    /**
     * @inheritDoc
     */
    public function merge(PropertyType $other): PropertyType
    {
        return new self();
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return static::TYPE_NAME . parent::__toString();
    }

    /**
     * @return string
     */
    public function getTypeName(): string
    {
        return static::TYPE_NAME;
    }
}
