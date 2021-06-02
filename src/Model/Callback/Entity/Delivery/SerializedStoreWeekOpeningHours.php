<?php

/**
 * PHP version 7.3
 *
 * @category SerializedStoreWeekOpeningHours
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery
 */

namespace RetailCrm\Api\Model\Callback\Entity\Delivery;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class SerializedStoreWeekOpeningHours
 *
 * @category SerializedStoreWeekOpeningHours
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery
 */
class SerializedStoreWeekOpeningHours
{
    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime>")
     * @JMS\SerializedName("mo")
     */
    public $mo;

    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime>")
     * @JMS\SerializedName("tu")
     */
    public $tu;

    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime>")
     * @JMS\SerializedName("we")
     */
    public $we;

    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime>")
     * @JMS\SerializedName("th")
     */
    public $th;

    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime>")
     * @JMS\SerializedName("fr")
     */
    public $fr;

    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime>")
     * @JMS\SerializedName("sa")
     */
    public $sa;

    /**
     * @var \RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime>")
     * @JMS\SerializedName("su")
     */
    public $su;

    /**
     * SerializedStoreWeekOpeningHours constructor.
     *
     * @param \RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime[] $monday
     * @param \RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime[] $tuesday
     * @param \RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime[] $wednesday
     * @param \RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime[] $thursday
     * @param \RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime[] $friday
     * @param \RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime[] $saturday
     * @param \RetailCrm\Api\Model\Callback\Entity\Delivery\StoreWorkTime[] $sunday
     */
    public function __construct(
        ?array $monday = null,
        ?array $tuesday = null,
        ?array $wednesday = null,
        ?array $thursday = null,
        ?array $friday = null,
        ?array $saturday = null,
        ?array $sunday = null
    ) {
        if (null !== $monday) {
            $this->mo = $monday;
        }

        if (null !== $tuesday) {
            $this->tu = $tuesday;
        }

        if (null !== $wednesday) {
            $this->we = $wednesday;
        }

        if (null !== $thursday) {
            $this->th = $thursday;
        }

        if (null !== $friday) {
            $this->fr = $friday;
        }

        if (null !== $saturday) {
            $this->sa = $saturday;
        }

        if (null !== $sunday) {
            $this->su = $sunday;
        }
    }
}
