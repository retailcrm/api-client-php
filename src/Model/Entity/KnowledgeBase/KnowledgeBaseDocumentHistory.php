<?php

/**
 * PHP version 7.3
 *
 * @category KnowledgeBaseDocumentHistory
 * @package  RetailCrm\Api\Model\Entity\KnowledgeBase
 */

namespace RetailCrm\Api\Model\Entity\KnowledgeBase;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class KnowledgeBaseDocumentHistory
 *
 * @category KnowledgeBaseDocumentHistory
 * @package  RetailCrm\Api\Model\Entity\KnowledgeBase
 */
class KnowledgeBaseDocumentHistory
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $id;

    /**
     * @var \DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("createdAt")
     */
    public $createdAt;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("created")
     */
    public $created;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("deleted")
     */
    public $deleted;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("source")
     */
    public $source;

    /**
     * @var \RetailCrm\Api\Model\Entity\HistoryUser
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\HistoryUser")
     * @JMS\SerializedName("user")
     */
    public $user;

    /**
     * @var \RetailCrm\Api\Model\Entity\HistoryApiKey
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\HistoryApiKey")
     * @JMS\SerializedName("apiKey")
     */
    public $apiKey;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("field")
     */
    public $field;

    /**
     * @var mixed
     *
     * @JMS\Type("mixed")
     * @JMS\SerializedName("oldValue")
     */
    public $oldValue;

    /**
     * @var mixed
     *
     * @JMS\Type("mixed")
     * @JMS\SerializedName("newValue")
     */
    public $newValue;

    /**
     * @var \RetailCrm\Api\Model\Entity\KnowledgeBase\KnowledgeBaseDocument
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\KnowledgeBase\KnowledgeBaseDocument")
     * @JMS\SerializedName("document")
     */
    public $document;

    /**
     * @var \RetailCrm\Api\Model\Entity\KnowledgeBase\KnowledgeBaseDocumentFile
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\KnowledgeBase\KnowledgeBaseDocumentFile")
     * @JMS\SerializedName("file")
     */
    public $file;
}
