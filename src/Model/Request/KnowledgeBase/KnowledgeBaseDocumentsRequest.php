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

/**
 * Class KnowledgeBaseDocumentsRequest
 *
 * @category KnowledgeBaseDocumentsRequest
 * @package  RetailCrm\Api\Model\Request\KnowledgeBase
 */
class KnowledgeBaseDocumentsRequest implements RequestInterface
{
    /**
     * @var int
     *
     * @Form\Type("int")
     * @Form\SerializedName("limit")
     */
    public $limit;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("cursor")
     */
    public $cursor;

    /**
     * @var \RetailCrm\Api\Model\Filter\KnowledgeBase\KnowledgeBaseDocumentFilter
     *
     * @Form\Type("RetailCrm\Api\Model\Filter\KnowledgeBase\KnowledgeBaseDocumentFilter")
     * @Form\SerializedName("filter")
     */
    public $filter;
}
