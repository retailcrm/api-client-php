<?php

/**
 * PHP version 7.3
 *
 * @category KnowledgeBaseDocumentsHistoryRequest
 * @package  RetailCrm\Api\Model\Request\KnowledgeBase
 */

namespace RetailCrm\Api\Model\Request\KnowledgeBase;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Request\Traits\HistoryPageLimitTrait;

/**
 * Class KnowledgeBaseDocumentsHistoryRequest
 *
 * @category KnowledgeBaseDocumentsHistoryRequest
 * @package  RetailCrm\Api\Model\Request\KnowledgeBase
 */
class KnowledgeBaseDocumentsHistoryRequest implements RequestInterface
{
    use HistoryPageLimitTrait;

    /**
     * @var \RetailCrm\Api\Model\Filter\KnowledgeBase\KnowledgeBaseDocumentHistoryFilter
     *
     * @Form\Type("RetailCrm\Api\Model\Filter\KnowledgeBase\KnowledgeBaseDocumentHistoryFilter")
     * @Form\SerializedName("filter")
     */
    public $filter;
}
