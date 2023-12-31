<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

class BillingCycle implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $year;

    /**
     * @var string|null
     */
    private $month;

    /**
     * Returns Year.
     */
    public function getYear(): ?string
    {
        return $this->year;
    }

    /**
     * Sets Year.
     *
     * @maps year
     */
    public function setYear(?string $year): void
    {
        $this->year = $year;
    }

    /**
     * Returns Month.
     */
    public function getMonth(): ?string
    {
        return $this->month;
    }

    /**
     * Sets Month.
     *
     * @maps month
     */
    public function setMonth(?string $month): void
    {
        $this->month = $month;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->year)) {
            $json['year']  = $this->year;
        }
        if (isset($this->month)) {
            $json['month'] = $this->month;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
