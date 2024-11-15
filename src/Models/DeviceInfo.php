<?php

declare(strict_types=1);

/*
 * VerizonThingSpaceQualityOfServiceAPIEndpointsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonThingSpaceQualityOfServiceAPIEndpointsLib\Models;

use stdClass;

class DeviceInfo implements \JsonSerializable
{
    /**
     * @var DeviceId|null
     */
    private $deviceId;

    /**
     * @var string|null
     */
    private $deviceIPv6Addr;

    /**
     * @var FlowInfo[]|null
     */
    private $flowInfo;

    /**
     * Returns Device Id.
     * device identifiers consisting of an ID value and what that value represents (kind)
     */
    public function getDeviceId(): ?DeviceId
    {
        return $this->deviceId;
    }

    /**
     * Sets Device Id.
     * device identifiers consisting of an ID value and what that value represents (kind)
     *
     * @maps deviceId
     */
    public function setDeviceId(?DeviceId $deviceId): void
    {
        $this->deviceId = $deviceId;
    }

    /**
     * Returns Device I Pv 6 Addr.
     * the IPv6 IP address of the device
     */
    public function getDeviceIPv6Addr(): ?string
    {
        return $this->deviceIPv6Addr;
    }

    /**
     * Sets Device I Pv 6 Addr.
     * the IPv6 IP address of the device
     *
     * @maps deviceIPv6Addr
     */
    public function setDeviceIPv6Addr(?string $deviceIPv6Addr): void
    {
        $this->deviceIPv6Addr = $deviceIPv6Addr;
    }

    /**
     * Returns Flow Info.
     * The details of the data connection
     *
     * @return FlowInfo[]|null
     */
    public function getFlowInfo(): ?array
    {
        return $this->flowInfo;
    }

    /**
     * Sets Flow Info.
     * The details of the data connection
     *
     * @maps flowInfo
     *
     * @param FlowInfo[]|null $flowInfo
     */
    public function setFlowInfo(?array $flowInfo): void
    {
        $this->flowInfo = $flowInfo;
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
            $json['deviceId']       = $this->deviceId;
        }
        if (isset($this->deviceIPv6Addr)) {
            $json['deviceIPv6Addr'] = $this->deviceIPv6Addr;
        }
        if (isset($this->flowInfo)) {
            $json['flowInfo']       = $this->flowInfo;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
