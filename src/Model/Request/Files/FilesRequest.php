<?php

/**
 * PHP version 7.3
 *
 * @category FilesRequest
 * @package  RetailCrm\Api\Model\Request\Files
 */

namespace RetailCrm\Api\Model\Request\Files;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Request\Traits\PageLimitTrait;

/**
 * Class FilesRequest
 *
 * @category FilesRequest
 * @package  RetailCrm\Api\Model\Request\Files
 */
class FilesRequest implements RequestInterface
{
    use PageLimitTrait;

    /**
     * @var \RetailCrm\Api\Model\Filter\Files\FileFilter
     *
     * @Form\Type("RetailCrm\Api\Model\Filter\Files\FileFilter")
     * @Form\SerializedName("filter")
     */
    public $filter;
}
