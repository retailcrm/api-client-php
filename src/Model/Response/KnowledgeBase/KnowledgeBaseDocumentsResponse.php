<?php

/**
 * PHP version 7.3
 *
 * @category KnowledgeBaseDocumentsResponse
 * @package  RetailCrm\Api\Model\Response\KnowledgeBase
 */

namespace RetailCrm\Api\Model\Response\KnowledgeBase;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\AbstractPaginatedResponse;

/**
 * Class KnowledgeBaseDocumentsResponse
 *
 * @category KnowledgeBaseDocumentsResponse
 * @package  RetailCrm\Api\Model\Response\KnowledgeBase
 */
class KnowledgeBaseDocumentsResponse extends AbstractPaginatedResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\KnowledgeBase\KnowledgeBaseDocument[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\KnowledgeBase\KnowledgeBaseDocument>")
     * @JMS\SerializedName("documents")
     */
    public $documents;
}
