<?php

/**
 * PHP version 7.3
 *
 * @category KnowledgeBaseDocumentHistoryFilter
 * @package  RetailCrm\Api\Model\Filter\KnowledgeBase
 */

namespace RetailCrm\Api\Model\Filter\KnowledgeBase;

use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class KnowledgeBaseDocumentHistoryFilter
 *
 * @category KnowledgeBaseDocumentHistoryFilter
 * @package  RetailCrm\Api\Model\Filter\KnowledgeBase
 */
class KnowledgeBaseDocumentHistoryFilter
{
    /**
     * @var int
     *
     * @Form\Type("int")
     * @Form\SerializedName("documentId")
     */
    public $documentId;

    /**
     * @var int
     *
     * @Form\Type("int")
     * @Form\SerializedName("sinceId")
     */
    public $sinceId;

    /**
     * @var \DateTime
     *
     * @Form\Type("DateTime<'Y-m-d H:i:s'>")
     * @Form\SerializedName("startDate")
     */
    public $startDate;

    /**
     * @var \DateTime
     *
     * @Form\Type("DateTime<'Y-m-d H:i:s'>")
     * @Form\SerializedName("endDate")
     */
    public $endDate;
}
