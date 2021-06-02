<?php

/**
 * PHP version 7.3
 *
 * @category AbstractCustomer
 * @package  RetailCrm\Api\Model\Entity\Tasks
 */

namespace RetailCrm\Api\Model\Entity\Tasks;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class AbstractCustomer
 *
 * @category AbstractCustomer
 * @package  RetailCrm\Api\Model\Entity\Tasks
 */
class AbstractCustomer
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("type")
     */
    public $type;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $id;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("externalId")
     */
    public $externalId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("site")
     */
    public $site;

    /**
     * AbstractCustomer constructor.
     *
     * @param int|null $id
     * @param string   $externalId
     * @param string   $type
     * @param string   $site
     */
    public function __construct(?int $id = null, string $externalId = '', string $type = '', string $site = '')
    {
        if (null !== $id) {
            $this->id = $id;
        }

        if ('' !== $externalId) {
            $this->externalId = $externalId;
        }

        if ('' !== $type) {
            $this->type = $type;
        }

        if ('' !== $site) {
            $this->site = $site;
        }
    }
}
