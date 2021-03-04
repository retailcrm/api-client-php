<?php

/**
 * PHP version 7.3
 *
 * @category StoreWorkTime
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery
 */

namespace RetailCrm\Api\Model\Callback\Entity\Delivery;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class StoreWorkTime
 *
 * @category StoreWorkTime
 * @package  RetailCrm\Api\Model\Callback\Entity\Delivery
 */
class StoreWorkTime
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("startTime")
     */
    public $startTime;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("endTime")
     */
    public $endTime;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("lunchStartTime")
     */
    public $lunchStartTime;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("lunchEndTime")
     */
    public $lunchEndTime;

    /**
     * StoreWorkTime constructor.
     *
     * @param string $startTime
     * @param string $endTime
     * @param string $lunchStartTime
     * @param string $lunchEndTime
     */
    public function __construct(
        string $startTime = '',
        string $endTime = '',
        string $lunchStartTime = '',
        string $lunchEndTime = ''
    ) {
        if ('' !== $startTime) {
            $this->startTime = $startTime;
        }

        if ('' !== $endTime) {
            $this->endTime = $endTime;
        }

        if ('' !== $lunchStartTime) {
            $this->lunchStartTime = $lunchStartTime;
        }

        if ('' !== $lunchEndTime) {
            $this->lunchEndTime = $lunchEndTime;
        }
    }
}
