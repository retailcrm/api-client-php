<?php

/**
 * PHP version 7.3
 *
 * @category FilesEditRequest
 * @package  RetailCrm\Api\Model\Request\Files
 */

namespace RetailCrm\Api\Model\Request\Files;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class FilesEditRequest
 *
 * @category FilesEditRequest
 * @package  RetailCrm\Api\Model\Request\Files
 */
class FilesEditRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Files\File
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\Files\File")
     * @Form\SerializedName("file")
     * @Form\JsonField()
     */
    public $file;
}
