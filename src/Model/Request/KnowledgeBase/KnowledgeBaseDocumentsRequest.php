<?php

/**
 * PHP version 7.3
 *
 * @category KnowledgeBaseDocumentsRequest
 * @package  RetailCrm\Api\Model\Request\KnowledgeBase
 */

namespace RetailCrm\Api\Model\Request\KnowledgeBase;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;
use RetailCrm\Api\Model\Request\Traits\PageLimitTrait;

/**
 * Class KnowledgeBaseDocumentsRequest
 *
 * @category KnowledgeBaseDocumentsRequest
 * @package  RetailCrm\Api\Model\Request\KnowledgeBase
 */
class KnowledgeBaseDocumentsRequest implements RequestInterface
{
    use PageLimitTrait;

    /**
     * @var \RetailCrm\Api\Model\Filter\KnowledgeBase\KnowledgeBaseDocumentFilter
     *
     * @Form\Type("RetailCrm\Api\Model\Filter\KnowledgeBase\KnowledgeBaseDocumentFilter")
     * @Form\SerializedName("filter")
     */
    public $filter;
}
