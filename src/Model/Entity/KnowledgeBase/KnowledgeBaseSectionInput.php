<?php

/**
 * PHP version 7.3
 *
 * @category KnowledgeBaseSectionInput
 * @package  RetailCrm\Api\Model\Entity\KnowledgeBase
 */

namespace RetailCrm\Api\Model\Entity\KnowledgeBase;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class KnowledgeBaseSectionInput
 *
 * @category KnowledgeBaseSectionInput
 * @package  RetailCrm\Api\Model\Entity\KnowledgeBase
 */
class KnowledgeBaseSectionInput
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     */
    public $name;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("parentId")
     */
    public $parentId;
}
