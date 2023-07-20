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
 * A list of IMEIs for devices to be synchronized between ThingSpace and the FOTA server.
 */
class FirmwareIMEI implements \JsonSerializable
{
    /**
     * @var string[]
     */
    private $deviceList;

    /**
     * @param string[] $deviceList
     */
    public function __construct(array $deviceList)
    {
        $this->deviceList = $deviceList;
    }

    /**
     * Returns Device List.
     * Device IMEI list.
     *
     * @return string[]
     */
    public function getDeviceList(): array
    {
        return $this->deviceList;
    }

    /**
     * Sets Device List.
     * Device IMEI list.
     *
     * @required
     * @maps deviceList
     *
     * @param string[] $deviceList
     */
    public function setDeviceList(array $deviceList): void
    {
        $this->deviceList = $deviceList;
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
        $json['deviceList'] = $this->deviceList;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}