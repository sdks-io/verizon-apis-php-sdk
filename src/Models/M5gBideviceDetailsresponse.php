<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

class M5gBideviceDetailsresponse implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $hasMoreData;

    /**
     * @var M5gBiaccountNameobject[]|null
     */
    private $devices;

    /**
     * Returns Has More Data.
     */
    public function getHasMoreData(): ?bool
    {
        return $this->hasMoreData;
    }

    /**
     * Sets Has More Data.
     *
     * @maps hasMoreData
     */
    public function setHasMoreData(?bool $hasMoreData): void
    {
        $this->hasMoreData = $hasMoreData;
    }

    /**
     * Returns Devices.
     *
     * @return M5gBiaccountNameobject[]|null
     */
    public function getDevices(): ?array
    {
        return $this->devices;
    }

    /**
     * Sets Devices.
     *
     * @maps devices
     *
     * @param M5gBiaccountNameobject[]|null $devices
     */
    public function setDevices(?array $devices): void
    {
        $this->devices = $devices;
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
        if (isset($this->hasMoreData)) {
            $json['hasMoreData'] = $this->hasMoreData;
        }
        if (isset($this->devices)) {
            $json['devices']     = $this->devices;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
