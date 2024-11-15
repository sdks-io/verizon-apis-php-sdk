<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

/**
 * List of the field names and values to set.
 */
class Configuration implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $frequency;

    /**
     * Returns Frequency.
     */
    public function getFrequency(): ?string
    {
        return $this->frequency;
    }

    /**
     * Sets Frequency.
     *
     * @maps frequency
     */
    public function setFrequency(?string $frequency): void
    {
        $this->frequency = $frequency;
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
        if (isset($this->frequency)) {
            $json['frequency'] = $this->frequency;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
