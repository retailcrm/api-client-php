<?php

/**
 * PHP version 7.3
 *
 * @category KnowledgeBaseDocumentsEditRequest
 * @package  RetailCrm\Api\Model\Request\KnowledgeBase
 */

namespace RetailCrm\Api\Model\Request\KnowledgeBase;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class KnowledgeBaseDocumentsEditRequest
 *
 * @category KnowledgeBaseDocumentsEditRequest
 * @package  RetailCrm\Api\Model\Request\KnowledgeBase
 */
class KnowledgeBaseDocumentsEditRequest implements RequestInterface
{
    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("by")
     */
    public $by;

    /**
     * @var \RetailCrm\Api\Model\Entity\KnowledgeBase\KnowledgeBaseDocumentInput|array<string, mixed>
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\KnowledgeBase\KnowledgeBaseDocumentInput")
     * @Form\SerializedName("document")
     * @Form\JsonField()
     */
    public $document;
}
