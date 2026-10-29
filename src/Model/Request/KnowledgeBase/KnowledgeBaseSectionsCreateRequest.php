<?php

/**
 * PHP version 7.3
 *
 * @category KnowledgeBaseSectionsCreateRequest
 * @package  RetailCrm\Api\Model\Request\KnowledgeBase
 */

namespace RetailCrm\Api\Model\Request\KnowledgeBase;

use RetailCrm\Api\Component\FormData\Mapping as Form;
use RetailCrm\Api\Interfaces\RequestInterface;

/**
 * Class KnowledgeBaseSectionsCreateRequest
 *
 * @category KnowledgeBaseSectionsCreateRequest
 * @package  RetailCrm\Api\Model\Request\KnowledgeBase
 */
class KnowledgeBaseSectionsCreateRequest implements RequestInterface
{
    /**
     * @var \RetailCrm\Api\Model\Entity\KnowledgeBase\KnowledgeBaseSectionInput
     *
     * @Form\Type("RetailCrm\Api\Model\Entity\KnowledgeBase\KnowledgeBaseSectionInput")
     * @Form\SerializedName("section")
     * @Form\JsonField()
     */
    public $section;
}
