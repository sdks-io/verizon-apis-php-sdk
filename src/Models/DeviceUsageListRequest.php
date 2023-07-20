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
 * Request to return the daily network data usage of a single device during a specified time period.
 */
class DeviceUsageListRequest implements \JsonSerializable
{
    /**
     * @var DeviceId|null
     */
    private $deviceId;

    /**
     * @var string|null
     */
    private $earliest;

    /**
     * @var string|null
     */
    private $latest;

    /**
     * Returns Device Id.
     * An identifier for a single device.
     */
    public function getDeviceId(): ?DeviceId
    {
        return $this->deviceId;
    }

    /**
     * Sets Device Id.
     * An identifier for a single device.
     *
     * @maps deviceId
     */
    public function setDeviceId(?DeviceId $deviceId): void
    {
        $this->deviceId = $deviceId;
    }

    /**
     * Returns Earliest.
     * The earliest date for which you want usage data.
     */
    public function getEarliest(): ?string
    {
        return $this->earliest;
    }

    /**
     * Sets Earliest.
     * The earliest date for which you want usage data.
     *
     * @maps earliest
     */
    public function setEarliest(?string $earliest): void
    {
        $this->earliest = $earliest;
    }

    /**
     * Returns Latest.
     * The last date for which you want usage data.
     */
    public function getLatest(): ?string
    {
        return $this->latest;
    }

    /**
     * Sets Latest.
     * The last date for which you want usage data.
     *
     * @maps latest
     */
    public function setLatest(?string $latest): void
    {
        $this->latest = $latest;
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
        if (isset($this->deviceId)) {
            $json['deviceId'] = $this->deviceId;
        }
        if (isset($this->earliest)) {
            $json['earliest'] = $this->earliest;
        }
        if (isset($this->latest)) {
            $json['latest']   = $this->latest;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}