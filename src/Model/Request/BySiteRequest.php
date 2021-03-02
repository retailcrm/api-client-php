<?php

/**
 * PHP version 7.3
 *
 * @category BySiteRequest
 * @package  RetailCrm\Api\Model\Request
 */

namespace RetailCrm\Api\Model\Request;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class BySiteRequest
 *
 * @category BySiteRequest
 * @package  RetailCrm\Api\Model\Request
 */
class BySiteRequest implements RequestInterface
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
     * @Form\SerializedName("site")
     */
    public $site;

    /**
     * BySiteRequest constructor.
     *
     * @param string $by
     * @param string $site
     */
    public function __construct(string $by = '', string $site = '')
    {
        if ('' !== $by) {
            $this->by   = $by;
        }

        if ('' !== $site) {
            $this->site = $site;
        }
    }
}
