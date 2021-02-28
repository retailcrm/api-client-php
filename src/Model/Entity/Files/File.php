<?php

/**
 * PHP version 7.3
 *
 * @category File
 * @package  RetailCrm\Api\Model\Entity\Files
 */

namespace RetailCrm\Api\Model\Entity\Files;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class File
 *
 * @category File
 * @package  RetailCrm\Api\Model\Entity\Files
 */
class File
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
     * @JMS\SerializedName("filename")
     */
    public $filename;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("type")
     */
    public $type;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("createdAt")
     */
    public $createdAt;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("size")
     */
    public $size;

    /**
     * @var \RetailCrm\Api\Model\Entity\Files\Attachment[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Files\Attachment>")
     * @JMS\SerializedName("attachment")
     */
    public $attachment;
}
