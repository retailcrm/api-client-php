<?php

/**
 * PHP version 7.3
 *
 * @category KnowledgeBaseDocumentsHistoryResponse
 * @package  RetailCrm\Api\Model\Response\KnowledgeBase
 */

namespace RetailCrm\Api\Model\Response\KnowledgeBase;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\AbstractPaginatedResponse;

/**
 * Class KnowledgeBaseDocumentsHistoryResponse
 *
 * @category KnowledgeBaseDocumentsHistoryResponse
 * @package  RetailCrm\Api\Model\Response\KnowledgeBase
 */
class KnowledgeBaseDocumentsHistoryResponse extends AbstractPaginatedResponse
{
    /**
     * @var \DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("generatedAt")
     */
    public $generatedAt;

    /**
     * @var \RetailCrm\Api\Model\Entity\KnowledgeBase\KnowledgeBaseDocumentHistory[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\KnowledgeBase\KnowledgeBaseDocumentHistory>")
     * @JMS\SerializedName("history")
     */
    public $history;
}
