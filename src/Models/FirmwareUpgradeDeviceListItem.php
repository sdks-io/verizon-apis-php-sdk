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
 * A JSON object for each device that was included in the upgrade, showing the device IMEI, the status
 * of the upgrade, and additional information about the status.
 */
class FirmwareUpgradeDeviceListItem implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $deviceId;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var string|null
     */
    private $resultReason;

    /**
     * Returns Device Id.
     * Device IMEI.
     */
    public function getDeviceId(): ?string
    {
        return $this->deviceId;
    }

    /**
     * Sets Device Id.
     * Device IMEI.
     *
     * @maps deviceId
     */
    public function setDeviceId(?string $deviceId): void
    {
        $this->deviceId = $deviceId;
    }

    /**
     * Returns Status.
     * The status of the upgrade for this device.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * The status of the upgrade for this device.
     *
     * @maps status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Result Reason.
     * Additional details about the status. Not included when status='Request Pending.'
     */
    public function getResultReason(): ?string
    {
        return $this->resultReason;
    }

    /**
     * Sets Result Reason.
     * Additional details about the status. Not included when status='Request Pending.'
     *
     * @maps resultReason
     */
    public function setResultReason(?string $resultReason): void
    {
        $this->resultReason = $resultReason;
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
            $json['deviceId']     = $this->deviceId;
        }
        if (isset($this->status)) {
            $json['status']       = $this->status;
        }
        if (isset($this->resultReason)) {
            $json['resultReason'] = $this->resultReason;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}