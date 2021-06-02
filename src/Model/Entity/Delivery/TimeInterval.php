<?php

/**
 * PHP version 7.3
 *
 * @category TimeInterval
 * @package  RetailCrm\Api\Model\Entity\Delivery
 */

namespace RetailCrm\Api\Model\Entity\Delivery;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;
use RuntimeException;

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
            $this->to = $to;
        }
    }

    /**
     * Creates a new instance of TimeInterval with provided time boundaries.
     * Time must be in "H:i" format. If time cannot be parsed, then RuntimeException will be thrown.
     *
     * @param string $from
     * @param string $to
     *
     * @return \RetailCrm\Api\Model\Entity\Delivery\TimeInterval
     */
    public static function withTextInterval(string $from, string $to): TimeInterval
    {
        $interval       = new TimeInterval();
        $interval->from = static::createTime($from);
        $interval->to   = static::createTime($to);

        return $interval;
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

    /**
     * Parses string into DateTime using "H:i" format. Throws RuntimeException on failure.
     *
     * @param string $time
     *
     * @return \DateTime
     */
    private static function createTime(string $time): DateTime
    {
        $result = DateTime::createFromFormat('H:i', $time);

        if (false === $result) {
            throw new RuntimeException(sprintf('Cannot parse provided time "%s" using "H:i" format.', $time));
        }

        return $result;
    }
}
