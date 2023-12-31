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
 * Information required to associate a usage segmentation label with a device to retrieve billing.
 */
class BilledusageListRequest implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $accountName;

    /**
     * @var LabelsList|null
     */
    private $labels;

    /**
     * @var DeviceList[]|null
     */
    private $devices;

    /**
     * @var BillingCycle|null
     */
    private $billingCycle;

    /**
     * Returns Account Name.
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    /**
     * Sets Account Name.
     *
     * @maps accountName
     */
    public function setAccountName(?string $accountName): void
    {
        $this->accountName = $accountName;
    }

    /**
     * Returns Labels.
     */
    public function getLabels(): ?LabelsList
    {
        return $this->labels;
    }

    /**
     * Sets Labels.
     *
     * @maps labels
     */
    public function setLabels(?LabelsList $labels): void
    {
        $this->labels = $labels;
    }

    /**
     * Returns Devices.
     *
     * @return DeviceList[]|null
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
     * @param DeviceList[]|null $devices
     */
    public function setDevices(?array $devices): void
    {
        $this->devices = $devices;
    }

    /**
     * Returns Billing Cycle.
     */
    public function getBillingCycle(): ?BillingCycle
    {
        return $this->billingCycle;
    }

    /**
     * Sets Billing Cycle.
     *
     * @maps BillingCycle
     */
    public function setBillingCycle(?BillingCycle $billingCycle): void
    {
        $this->billingCycle = $billingCycle;
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
        if (isset($this->accountName)) {
            $json['accountName']  = $this->accountName;
        }
        if (isset($this->labels)) {
            $json['labels']       = $this->labels;
        }
        if (isset($this->devices)) {
            $json['devices']      = $this->devices;
        }
        if (isset($this->billingCycle)) {
            $json['BillingCycle'] = $this->billingCycle;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
