<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

class DeviceUploadRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $accountName;

    /**
     * @var DeviceList[]
     */
    private $devices;

    /**
     * @var string
     */
    private $emailAddress;

    /**
     * @var string
     */
    private $deviceSku;

    /**
     * @var string
     */
    private $uploadType;

    /**
     * @param string $accountName
     * @param DeviceList[] $devices
     * @param string $emailAddress
     * @param string $deviceSku
     * @param string $uploadType
     */
    public function __construct(
        string $accountName,
        array $devices,
        string $emailAddress,
        string $deviceSku,
        string $uploadType
    ) {
        $this->accountName = $accountName;
        $this->devices = $devices;
        $this->emailAddress = $emailAddress;
        $this->deviceSku = $deviceSku;
        $this->uploadType = $uploadType;
    }

    /**
     * Returns Account Name.
     */
    public function getAccountName(): string
    {
        return $this->accountName;
    }

    /**
     * Sets Account Name.
     *
     * @required
     * @maps accountName
     */
    public function setAccountName(string $accountName): void
    {
        $this->accountName = $accountName;
    }

    /**
     * Returns Devices.
     *
     * @return DeviceList[]
     */
    public function getDevices(): array
    {
        return $this->devices;
    }

    /**
     * Sets Devices.
     *
     * @required
     * @maps devices
     *
     * @param DeviceList[] $devices
     */
    public function setDevices(array $devices): void
    {
        $this->devices = $devices;
    }

    /**
     * Returns Email Address.
     */
    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }

    /**
     * Sets Email Address.
     *
     * @required
     * @maps emailAddress
     */
    public function setEmailAddress(string $emailAddress): void
    {
        $this->emailAddress = $emailAddress;
    }

    /**
     * Returns Device Sku.
     */
    public function getDeviceSku(): string
    {
        return $this->deviceSku;
    }

    /**
     * Sets Device Sku.
     *
     * @required
     * @maps deviceSku
     */
    public function setDeviceSku(string $deviceSku): void
    {
        $this->deviceSku = $deviceSku;
    }

    /**
     * Returns Upload Type.
     */
    public function getUploadType(): string
    {
        return $this->uploadType;
    }

    /**
     * Sets Upload Type.
     *
     * @required
     * @maps uploadType
     */
    public function setUploadType(string $uploadType): void
    {
        $this->uploadType = $uploadType;
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
        $json['accountName']  = $this->accountName;
        $json['devices']      = $this->devices;
        $json['emailAddress'] = $this->emailAddress;
        $json['deviceSku']    = $this->deviceSku;
        $json['uploadType']   = $this->uploadType;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}