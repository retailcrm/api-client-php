<?php

/**
 * PHP version 7.3
 *
 * @category DateTimeTransformer
 * @package  RetailCrm\Api\Component\Transformer
 */

namespace RetailCrm\Api\Component\Transformer;

use DateTime;
use DateTimeInterface;
use InvalidArgumentException;

/**
 * Class DateTimeTransformer
 *
 * @category DateTimeTransformer
 * @package  RetailCrm\Api\Component\Transformer
 */
class DateTimeTransformer
{
    public const FORMAT_DATE_TIME = 'Y-m-d H:i:s';
    public const FORMAT_DATE = 'Y-m-d';
    public const FORMAT_TIME = 'H:i:s';

    /**
     * Converts provided date and time string to DateTime from format used in the system.
     *
     * @param string $dateTime
     *
     * @return \DateTime
     * @throws InvalidArgumentException
     */
    public static function create(string $dateTime): DateTime
    {
        return static::createFromFormat($dateTime, static::FORMAT_DATE_TIME);
    }

    /**
     * Converts provided date string to DateTime from format used in the system.
     *
     * @param string $date
     *
     * @return \DateTime
     * @throws InvalidArgumentException
     */
    public static function createDate(string $date): DateTime
    {
        return static::createFromFormat($date, static::FORMAT_DATE);
    }

    /**
     * Converts provided time string to DateTime from format used in the system.
     *
     * @param string $time
     *
     * @return \DateTime
     * @throws InvalidArgumentException
     */
    public static function createTime(string $time): DateTime
    {
        return static::createFromFormat($time, static::FORMAT_TIME);
    }

    /**
     * Converts provided DateTimeInterface instance to date and time format used in the system.
     *
     * @param \DateTimeInterface $dateTime
     *
     * @return string
     */
    public static function format(DateTimeInterface $dateTime): string
    {
        return $dateTime->format(static::FORMAT_DATE_TIME);
    }

    /**
     * Converts provided DateTimeInterface instance to date format used in the system.
     *
     * @param \DateTimeInterface $dateTime
     *
     * @return string
     */
    public static function formatDate(DateTimeInterface $dateTime): string
    {
        return $dateTime->format(static::FORMAT_DATE);
    }

    /**
     * Converts provided DateTimeInterface instance to time format used in the system.
     *
     * @param \DateTimeInterface $dateTime
     *
     * @return string
     */
    public static function formatTime(DateTimeInterface $dateTime): string
    {
        return $dateTime->format(static::FORMAT_TIME);
    }

    /**
     * @param string $item
     * @param string $format
     *
     * @return \DateTime
     */
    private static function createFromFormat(string $item, string $format): DateTime
    {
        $result = DateTime::createFromFormat($format, $item);

        if (!($result instanceof DateTime)) {
            throw new InvalidArgumentException(sprintf(
                'Invalid date format: expect "%s" got "%s".',
                $format,
                $item
            ));
        }

        return $result;
    }
}
