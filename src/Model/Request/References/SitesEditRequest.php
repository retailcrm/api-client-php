<?php

/**
 * PHP version 7.3
 *
 * @category SitesEditRequest
 * @package  RetailCrm\Api\Model\Request\References
 */

namespace RetailCrm\Api\Model\Request\References;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Entity\References\Site;

/**
 * Class SitesEditRequest
 *
 * @category SitesEditRequest
 * @package  RetailCrm\Api\Model\Request\References
 */
class SitesEditRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\References\Site
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\References\Site")
     * @Form\SerializedName("site")
     * @Form\JsonField()
     */
    public $site;

    /**
     * SitesEditRequest constructor.
     *
     * @param \RetailCrm\Api\Model\Entity\References\Site|null $site
     */
    public function __construct(?Site $site = null)
    {
        if (null !== $site) {
            $this->site = $site;
        }
    }
}
