<?php

/**
 * PHP version 7.3
 *
 * @category KnowledgeBaseSectionsResponse
 * @package  RetailCrm\Api\Model\Response\KnowledgeBase
 */

namespace RetailCrm\Api\Model\Response\KnowledgeBase;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RetailCrm\Api\Model\Response\SuccessResponse;

/**
 * Class KnowledgeBaseSectionsResponse
 *
 * @category KnowledgeBaseSectionsResponse
 * @package  RetailCrm\Api\Model\Response\KnowledgeBase
 */
class KnowledgeBaseSectionsResponse extends SuccessResponse
{
    /**
     * @var \RetailCrm\Api\Model\Entity\KnowledgeBase\KnowledgeBaseSection[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\KnowledgeBase\KnowledgeBaseSection>")
     * @JMS\SerializedName("sections")
     */
    public $sections;
}
