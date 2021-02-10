<?php

/**
 * PHP version 7.3
 *
 * @category SerializedName
 * @package  RetailCrm\Api\Component\FormData\Mapping
 */

namespace RetailCrm\Api\Component\FormData\Mapping;

use Doctrine\Common\Annotations\Annotation;
use Doctrine\Common\Annotations\Annotation\Target;
use Doctrine\Common\Annotations\Annotation\Attribute;
use Doctrine\Common\Annotations\Annotation\Attributes;

/**
 * Class SerializedName
 *
 * @category SerializedName
 * @package RetailCrm\Api\Component\FormData\Mapping
 *
 * @Annotation
 * @Attributes(
 *     @Attribute("name", required=true, type="string")
 * )
 * @Target({"PROPERTY","ANNOTATION"})
 */
final class SerializedName
{
    /**
     * Property name in result JSON
     *
     * @var string
     */
    public $name;
}
