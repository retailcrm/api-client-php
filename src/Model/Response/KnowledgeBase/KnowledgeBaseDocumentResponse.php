<?php

/**
 * PHP version 7.3
 *
 * @category KnowledgeBaseDocumentResponse
 * @package  RetailCrm\Api\Model\Response\KnowledgeBase
 */

namespace RetailCrm\Api\Model\Response\KnowledgeBase;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class KnowledgeBaseDocumentResponse
 *
 * @category KnowledgeBaseDocumentResponse
 * @package  RetailCrm\Api\Model\Response\KnowledgeBase
 */
class KnowledgeBaseDocumentResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\KnowledgeBase\KnowledgeBaseDocument
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\KnowledgeBase\KnowledgeBaseDocument")
     * @JMS\SerializedName("document")
     */
    public $document;
}
