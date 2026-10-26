<?php

/**
 * PHP version 7.3
 *
 * @category KnowledgeBaseDocumentByRequest
 * @package  RetailCrm\Api\Model\Request\KnowledgeBase
 */

namespace RetailCrm\Api\Model\Request\KnowledgeBase;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class KnowledgeBaseDocumentByRequest
 *
 * @category KnowledgeBaseDocumentByRequest
 * @package  RetailCrm\Api\Model\Request\KnowledgeBase
 */
class KnowledgeBaseDocumentByRequest implements RequestInterface
{
    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("by")
     */
    public $by;

    /**
     * @param string $by Internal id or externalId (the API default).
     */
    public function __construct(string $by = '')
    {
        if ('' !== $by) {
            $this->by = $by;
        }
    }
}
