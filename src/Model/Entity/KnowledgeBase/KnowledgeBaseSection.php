<?php

/**
 * PHP version 7.3
 *
 * @category KnowledgeBaseSection
 * @package  RetailCrm\Api\Model\Entity\KnowledgeBase
 */

namespace RetailCrm\Api\Model\Entity\KnowledgeBase;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class KnowledgeBaseSection
 *
 * @category KnowledgeBaseSection
 * @package  RetailCrm\Api\Model\Entity\KnowledgeBase
 */
class KnowledgeBaseSection
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
     * @JMS\SerializedName("name")
     */
    public $name;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("parentId")
     */
    public $parentId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("path")
     */
    public $path;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("documentsCount")
     */
    public $documentsCount;

    /**
     * @var \DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("createdAt")
     */
    public $createdAt;

    /**
     * @var \DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("updatedAt")
     */
    public $updatedAt;
}
