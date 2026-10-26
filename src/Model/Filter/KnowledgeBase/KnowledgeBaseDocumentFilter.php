<?php

/**
 * PHP version 7.3
 *
 * @category KnowledgeBaseDocumentFilter
 * @package  RetailCrm\Api\Model\Filter\KnowledgeBase
 */

namespace RetailCrm\Api\Model\Filter\KnowledgeBase;

use RetailCrm\Api\Component\FormData\Mapping as Form;

/**
 * Class KnowledgeBaseDocumentFilter
 *
 * @category KnowledgeBaseDocumentFilter
 * @package  RetailCrm\Api\Model\Filter\KnowledgeBase
 */
class KnowledgeBaseDocumentFilter
{
    /**
     * @var int[]
     *
     * @Form\Type("array<int>")
     * @Form\SerializedName("ids")
     */
    public $ids;

    /**
     * @var string[]
     *
     * @Form\Type("array<string>")
     * @Form\SerializedName("externalIds")
     */
    public $externalIds;

    /**
     * @var int
     *
     * @Form\Type("int")
     * @Form\SerializedName("sectionId")
     */
    public $sectionId;

    /**
     * @var bool
     *
     * @Form\Type("bool")
     * @Form\SerializedName("directOnly")
     */
    public $directOnly;

    /**
     * @var bool
     *
     * @Form\Type("bool")
     * @Form\SerializedName("availableForCopilot")
     */
    public $availableForCopilot;

    /**
     * @var bool
     *
     * @Form\Type("bool")
     * @Form\SerializedName("hasFile")
     */
    public $hasFile;

    /**
     * @var string
     *
     * @Form\Type("string")
     * @Form\SerializedName("search")
     */
    public $search;
}
