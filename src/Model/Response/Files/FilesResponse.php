<?php

/**
 * PHP version 7.3
 *
 * @category FilesResponse
 * @package  RetailCrm\Api\Model\Response\Files
 */

namespace RetailCrm\Api\Model\Response\Files;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\AbstractPaginatedResponse;

/**
 * Class FilesResponse
 *
 * @category FilesResponse
 * @package  RetailCrm\Api\Model\Response\Files
 */
class FilesResponse extends AbstractPaginatedResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\Files\File[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Files\File>")
     * @JMS\SerializedName("files")
     */
    public $files;
}
