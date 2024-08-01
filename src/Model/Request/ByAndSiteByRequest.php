<?php

/**
 * PHP version 7.3
 *
 * @category ByAndSiteByRequest
 * @package  RetailCrm\Api\Model\Request
 */

namespace RetailCrm\Api\Model\Request;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class ByAndSiteByRequest
 *
 * @category ByAndSiteByRequest
 * @package  RetailCrm\Api\Model\Request
 */
class ByAndSiteByRequest implements RequestInterface
{
    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("by")
     */
    public $by;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("siteBy")
     */
    public $siteBy;

    /**
     * BySiteRequest constructor.
     *
     * @param string $by
     * @param string $siteBy
     */
    public function __construct(string $by = '', string $siteBy = '')
    {
        if ('' !== $by) {
            $this->by   = $by;
        }

        if ('' !== $siteBy) {
            $this->siteBy = $siteBy;
        }
    }
}
