<?php

/**
 * PHP version 7.3
 *
 * @category Type
 * @package  RetailCrm\Api\Component\FormData\Mapping
 */

namespace RetailCrm\Api\Component\FormData\Mapping;

use Doctrine\Common\Annotations\Annotation;
use Doctrine\Common\Annotations\Annotation\Target;
use Doctrine\Common\Annotations\Annotation\Attribute;
use Doctrine\Common\Annotations\Annotation\Attributes;

/**
 * Class Type
 *
 * @category Type
 * @package RetailCrm\Api\Component\FormData\Mapping
 *
 * @Annotation
 * @Attributes(
 *     @Attribute("type", required=false, type="string")
 * )
 * @Target({"PROPERTY","ANNOTATION"})
 */
final class Type
{
    /**
     * Property type
     *
     * @var string
     */
    public $type;
}
