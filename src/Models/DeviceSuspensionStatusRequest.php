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
 * Request to return service suspension information about one or more devices.
 */
class DeviceSuspensionStatusRequest implements \JsonSerializable
{
    /**
     * @var DeviceId[]|null
     */
    private $deviceIds;

    /**
     * @var DeviceFilterWithoutAccount|null
     */
    private $filter;

    /**
     * @var string|null
     */
    private $accountName;

    /**
     * Returns Device Ids.
     * The devices that you want to include in the request, specified by device identifier. You only need
     * to provide one identifier per device.
     *
     * @return DeviceId[]|null
     */
    public function getDeviceIds(): ?array
    {
        return $this->deviceIds;
    }

    /**
     * Sets Device Ids.
     * The devices that you want to include in the request, specified by device identifier. You only need
     * to provide one identifier per device.
     *
     * @maps deviceIds
     *
     * @param DeviceId[]|null $deviceIds
     */
    public function setDeviceIds(?array $deviceIds): void
    {
        $this->deviceIds = $deviceIds;
    }

    /**
     * Returns Filter.
     * Filter for devices without account.
     */
    public function getFilter(): ?DeviceFilterWithoutAccount
    {
        return $this->filter;
    }

    /**
     * Sets Filter.
     * Filter for devices without account.
     *
     * @maps filter
     */
    public function setFilter(?DeviceFilterWithoutAccount $filter): void
    {
        $this->filter = $filter;
    }

    /**
     * Returns Account Name.
     * The name of a billing account.
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    /**
     * Sets Account Name.
     * The name of a billing account.
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
        if (isset($this->deviceIds)) {
            $json['deviceIds']   = $this->deviceIds;
        }
        if (isset($this->filter)) {
            $json['filter']      = $this->filter;
        }
        if (isset($this->accountName)) {
            $json['accountName'] = $this->accountName;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
