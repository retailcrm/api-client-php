<?php

/**
 * PHP version 7.3
 *
 * @category FilesUploadResponse
 * @package  RetailCrm\Api\Model\Response\Files
 */

namespace RetailCrm\Api\Model\Response\Files;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class FilesUploadResponse
 *
 * @category FilesUploadResponse
 * @package  RetailCrm\Api\Model\Response\Files
 */
class FilesUploadResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Files\File
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Files\File")
     * @JMS\SerializedName("file")
     */
    public $file;
}
