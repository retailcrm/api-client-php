<?php

/**
 * PHP version 7.3
 *
 * @category KnowledgeBaseDocumentsCreateRequest
 * @package  RetailCrm\Api\Model\Request\KnowledgeBase
 */

namespace RetailCrm\Api\Model\Request\KnowledgeBase;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class KnowledgeBaseDocumentsCreateRequest
 *
 * @category KnowledgeBaseDocumentsCreateRequest
 * @package  RetailCrm\Api\Model\Request\KnowledgeBase
 */
class KnowledgeBaseDocumentsCreateRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\KnowledgeBase\KnowledgeBaseDocumentInput
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\KnowledgeBase\KnowledgeBaseDocumentInput")
     * @Form\SerializedName("document")
     * @Form\JsonField()
     */
    public $document;
}
