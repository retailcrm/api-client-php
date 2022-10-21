<?php

/**
 * PHP version 7.3
 *
 * @category ProductEditInput
 * @package  RetailCrm\Api\Model\Request\Store
 */

namespace RetailCrm\Api\Model\Entity\Store;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class ProductEditInput
 *
 * @category ProductEditInput
 * @package  RetailCrm\Api\Model\Response\Store
 */
class ProductEditInput extends ProductBatchBase
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $id;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("site")
     */
    public $site;
}
