<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

class FallBack implements \JsonSerializable
{
    /**
     * @var DeviceIdarray[][]|null
     */
    private $devices;

    /**
     * @var string|null
     */
    private $accountName;

    /**
     * Returns Devices.
     * An array containing the `deviceId` array.
     *
     * @return DeviceIdarray[][]|null
     */
    public function getDevices(): ?array
    {
        return $this->devices;
    }

    /**
     * Sets Devices.
     * An array containing the `deviceId` array.
     *
     * @maps devices
     *
     * @param DeviceIdarray[][]|null $devices
     */
    public function setDevices(?array $devices): void
    {
        $this->devices = $devices;
    }

    /**
     * Returns Account Name.
     * The numeric name of the account, in the format "0000123456-00001". Leading zeros must be included.
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    /**
     * Sets Account Name.
     * The numeric name of the account, in the format "0000123456-00001". Leading zeros must be included.
     *
     * @maps accountName
     */
    public function setAccountName(?string $accountName): void
    {
        $this->accountName = $accountName;
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
        if (isset($this->devices)) {
            $json['devices']     = $this->devices;
        }
        if (isset($this->accountName)) {
            $json['accountName'] = $this->accountName;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
