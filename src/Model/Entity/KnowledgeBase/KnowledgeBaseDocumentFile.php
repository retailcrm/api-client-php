<?php

/**
 * PHP version 7.3
 *
 * @category KnowledgeBaseDocumentFile
 * @package  RetailCrm\Api\Model\Entity\KnowledgeBase
 */

namespace RetailCrm\Api\Model\Entity\KnowledgeBase;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class KnowledgeBaseDocumentFile
 *
 * @category KnowledgeBaseDocumentFile
 * @package  RetailCrm\Api\Model\Entity\KnowledgeBase
 */
class KnowledgeBaseDocumentFile
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
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("type")
     */
    public $type;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("size")
     */
    public $size;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("url")
     */
    public $url;
}
