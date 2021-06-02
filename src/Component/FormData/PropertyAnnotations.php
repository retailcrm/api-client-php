<?php

/**
 * PHP version 7.3
 *
 * @category PropertyAnnotations
 * @package  RetailCrm\Api\Component\FormData
 */

namespace RetailCrm\Api\Component\FormData;

use RetailCrm\Api\Component\FormData\Mapping\Accessor;
use RetailCrm\Api\Component\FormData\Mapping\JsonField;
use RetailCrm\Api\Component\FormData\Mapping\SerializedName;
use RetailCrm\Api\Component\FormData\Mapping\Type;

/**
 * Class PropertyAnnotations
 *
 * @category PropertyAnnotations
 * @package  RetailCrm\Api\Component\FormData
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class PropertyAnnotations
{
    /**
     * @var SerializedName|null
     */
    public $serializedName;

    /**
     * @var Accessor|null
     */
    public $accessor;

    /**
     * @var Type|null
     */
    public $type;

    /**
     * @var JsonField|null
     */
    public $jsonField;

    /**
     * PropertyAnnotations constructor.
     *
     * @param object[] $annotations
     */
    public function __construct(array $annotations = [])
    {
        foreach ($annotations as $annotation) {
            switch (get_class($annotation)) {
                case Type::class:
                    $this->type = $annotation;
                    break;
                case SerializedName::class:
                    $this->serializedName = $annotation;
                    break;
                case Accessor::class:
                    $this->accessor = $annotation;
                    break;
                case JsonField::class:
                    $this->jsonField = $annotation;
                    break;
            }
        }
    }
}
