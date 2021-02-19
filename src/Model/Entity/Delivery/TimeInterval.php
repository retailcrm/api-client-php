<?php

/**
 * PHP version 7.3
 *
 * @category TimeInterval
 * @package  RetailCrm\Api\Model\Entity\Delivery
 */

namespace RetailCrm\Api\Model\Entity\Delivery;

use DateTime;
use JMS\Serializer\Annotation as JMS;

/**
 * Class TimeInterval
 *
 * @category TimeInterval
 * @package  RetailCrm\Api\Model\Entity\Delivery
 */
class TimeInterval
{
    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'H:i'>")
     * @JMS\SerializedName("from")
     */
    public $from;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'H:i'>")
     * @JMS\SerializedName("to")
     */
    public $to;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("custom")
     */
    public $custom;

    /**
     * TimeInterval constructor.
     *
     * @param \DateTime|null $from
     * @param \DateTime|null $to
     */
    public function __construct(?DateTime $from = null, ?DateTime $to = null)
    {
        if (null !== $from) {
            $this->from = $from;
        }

        if (null !== $to) {
            $this->from = $to;
        }
    }

    /**
     * Returns TimeInterval with provided custom interval.
     *
     * @param string $customInterval
     *
     * @return TimeInterval
     */
    public static function withCustomInterval(string $customInterval): TimeInterval
    {
        $interval = new TimeInterval();
        $interval->custom = $customInterval;

        return $interval;
    }
}
