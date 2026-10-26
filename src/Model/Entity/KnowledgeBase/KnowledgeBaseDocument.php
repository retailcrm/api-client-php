<?php

/**
 * PHP version 7.3
 *
 * @category KnowledgeBaseDocument
 * @package  RetailCrm\Api\Model\Entity\KnowledgeBase
 */

namespace RetailCrm\Api\Model\Entity\KnowledgeBase;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class KnowledgeBaseDocument
 *
 * @category KnowledgeBaseDocument
 * @package  RetailCrm\Api\Model\Entity\KnowledgeBase
 */
class KnowledgeBaseDocument
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
     * @JMS\SerializedName("title")
     */
    public $title;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("content")
     */
    public $content;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("sectionId")
     */
    public $sectionId;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("availableForCopilot")
     */
    public $availableForCopilot;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("externalId")
     */
    public $externalId;

    /**
     * @var \RetailCrm\Api\Model\Entity\KnowledgeBase\KnowledgeBaseDocumentFile
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\KnowledgeBase\KnowledgeBaseDocumentFile")
     * @JMS\SerializedName("file")
     */
    public $file;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("contentHash")
     */
    public $contentHash;

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
