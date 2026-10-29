<?php

/**
 * PHP version 7.3
 *
 * @category KnowledgeBaseDocumentInput
 * @package  RetailCrm\Api\Model\Entity\KnowledgeBase
 */

namespace RetailCrm\Api\Model\Entity\KnowledgeBase;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class KnowledgeBaseDocumentInput
 *
 * @category KnowledgeBaseDocumentInput
 * @package  RetailCrm\Api\Model\Entity\KnowledgeBase
 */
class KnowledgeBaseDocumentInput
{
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
}
