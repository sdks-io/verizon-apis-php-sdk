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
 * Request for device status to check availability of activation.
 */
class DeviceActivationRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $accountName;

    /**
     * @var AccountDeviceList[]
     */
    private $devices;

    /**
     * @param string $accountName
     * @param AccountDeviceList[] $devices
     */
    public function __construct(string $accountName, array $devices)
    {
        $this->accountName = $accountName;
        $this->devices = $devices;
    }

    /**
     * Returns Account Name.
     * The name of a billing account.
     */
    public function getAccountName(): string
    {
        return $this->accountName;
    }

    /**
     * Sets Account Name.
     * The name of a billing account.
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
     * Up to 10,000 devices that you want to move to a different account, specified by device identifier.
     *
     * @return AccountDeviceList[]
     */
    public function getDevices(): array
    {
        return $this->devices;
    }

    /**
     * Sets Devices.
     * Up to 10,000 devices that you want to move to a different account, specified by device identifier.
     *
     * @required
     * @maps devices
     *
     * @param AccountDeviceList[] $devices
     */
    public function setDevices(array $devices): void
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
        $json['accountName'] = $this->accountName;
        $json['devices']     = $this->devices;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
