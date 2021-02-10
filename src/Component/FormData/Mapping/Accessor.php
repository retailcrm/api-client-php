<?php

/**
 * PHP version 7.3
 *
 * @category Accessor
 * @package  RetailCrm\Api\Component\FormData\Mapping
 */

namespace RetailCrm\Api\Component\FormData\Mapping;

use Doctrine\Common\Annotations\Annotation;
use Doctrine\Common\Annotations\Annotation\Target;
use Doctrine\Common\Annotations\Annotation\Attribute;
use Doctrine\Common\Annotations\Annotation\Attributes;

/**
 * Class Accessor
 *
 * @category Accessor
 * @package RetailCrm\Api\Component\FormData\Mapping
 *
 * @Annotation
 * @Attributes(
 *     @Attribute("getter", required=false, type="string"),
 *     @Attribute("setter", required=false, type="string")
 * )
 * @Target({"PROPERTY","ANNOTATION"})
 */
final class Accessor
{
    /**
     * Property getter
     *
     * @var string
     */
    public $getter;

    /**
     * Property setter
     *
     * @var string
     */
    public $setter;
}
