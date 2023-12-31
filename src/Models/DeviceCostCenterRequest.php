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
 * Request to retrieve cost center value of a device.
 */
class DeviceCostCenterRequest implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $accountName;

    /**
     * @var string|null
     */
    private $costCenter;

    /**
     * @var CustomFields[]|null
     */
    private $customFields;

    /**
     * @var AccountDeviceList[]|null
     */
    private $devices;

    /**
     * @var string|null
     */
    private $groupName;

    /**
     * @var array|null
     */
    private $primaryPlaceOfUse;

    /**
     * @var bool|null
     */
    private $removeCostCenter;

    /**
     * @var string|null
     */
    private $servicePlan;

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
     * Returns Cost Center.
     * The new cost center code. Valid values are any string of up to 36 alphanumeric characters, space,
     * dash, exclamation point, and pound sign.
     */
    public function getCostCenter(): ?string
    {
        return $this->costCenter;
    }

    /**
     * Sets Cost Center.
     * The new cost center code. Valid values are any string of up to 36 alphanumeric characters, space,
     * dash, exclamation point, and pound sign.
     *
     * @maps costCenter
     */
    public function setCostCenter(?string $costCenter): void
    {
        $this->costCenter = $costCenter;
    }

    /**
     * Returns Custom Fields.
     * Custom field names and values, if you want to only include devices that have matching values.
     *
     * @return CustomFields[]|null
     */
    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    /**
     * Sets Custom Fields.
     * Custom field names and values, if you want to only include devices that have matching values.
     *
     * @maps customFields
     *
     * @param CustomFields[]|null $customFields
     */
    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }

    /**
     * Returns Devices.
     * A list of the devices that you want to change, specified by device identifier. Do not include
     * accountName, groupName, customFields, or servicePlan if you use this parameter.
     *
     * @return AccountDeviceList[]|null
     */
    public function getDevices(): ?array
    {
        return $this->devices;
    }

    /**
     * Sets Devices.
     * A list of the devices that you want to change, specified by device identifier. Do not include
     * accountName, groupName, customFields, or servicePlan if you use this parameter.
     *
     * @maps devices
     *
     * @param AccountDeviceList[]|null $devices
     */
    public function setDevices(?array $devices): void
    {
        $this->devices = $devices;
    }

    /**
     * Returns Group Name.
     * The name of a device group, if you want to only include devices in that group.
     */
    public function getGroupName(): ?string
    {
        return $this->groupName;
    }

    /**
     * Sets Group Name.
     * The name of a device group, if you want to only include devices in that group.
     *
     * @maps groupName
     */
    public function setGroupName(?string $groupName): void
    {
        $this->groupName = $groupName;
    }

    /**
     * Returns Primary Place of Use.
     * The customer name and the address of the device's primary place of use. These values are applied to
     * all devices in the request.The Primary Place of Use location may affect taxation or have other legal
     * implications. You may want to speak with legal and/or financial advisers before entering values for
     * these fields.
     */
    public function getPrimaryPlaceOfUse(): ?array
    {
        return $this->primaryPlaceOfUse;
    }

    /**
     * Sets Primary Place of Use.
     * The customer name and the address of the device's primary place of use. These values are applied to
     * all devices in the request.The Primary Place of Use location may affect taxation or have other legal
     * implications. You may want to speak with legal and/or financial advisers before entering values for
     * these fields.
     *
     * @maps primaryPlaceOfUse
     */
    public function setPrimaryPlaceOfUse(?array $primaryPlaceOfUse): void
    {
        $this->primaryPlaceOfUse = $primaryPlaceOfUse;
    }

    /**
     * Returns Remove Cost Center.
     * Set to true to remove the cost center code value. This flag takes precedence over a new costCenter
     * value. If this flag is true and costCenter has a value, the cost center code is removed. Do not
     * include this parameter, or set it to false to change the costCenter value.
     */
    public function getRemoveCostCenter(): ?bool
    {
        return $this->removeCostCenter;
    }

    /**
     * Sets Remove Cost Center.
     * Set to true to remove the cost center code value. This flag takes precedence over a new costCenter
     * value. If this flag is true and costCenter has a value, the cost center code is removed. Do not
     * include this parameter, or set it to false to change the costCenter value.
     *
     * @maps removeCostCenter
     */
    public function setRemoveCostCenter(?bool $removeCostCenter): void
    {
        $this->removeCostCenter = $removeCostCenter;
    }

    /**
     * Returns Service Plan.
     * The name of a service plan, if you want to only include devices that have that service plan.
     */
    public function getServicePlan(): ?string
    {
        return $this->servicePlan;
    }

    /**
     * Sets Service Plan.
     * The name of a service plan, if you want to only include devices that have that service plan.
     *
     * @maps servicePlan
     */
    public function setServicePlan(?string $servicePlan): void
    {
        $this->servicePlan = $servicePlan;
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
            $json['accountName']       = $this->accountName;
        }
        if (isset($this->costCenter)) {
            $json['costCenter']        = $this->costCenter;
        }
        if (isset($this->customFields)) {
            $json['customFields']      = $this->customFields;
        }
        if (isset($this->devices)) {
            $json['devices']           = $this->devices;
        }
        if (isset($this->groupName)) {
            $json['groupName']         = $this->groupName;
        }
        if (isset($this->primaryPlaceOfUse)) {
            $json['primaryPlaceOfUse'] = $this->primaryPlaceOfUse;
        }
        if (isset($this->removeCostCenter)) {
            $json['removeCostCenter']  = $this->removeCostCenter;
        }
        if (isset($this->servicePlan)) {
            $json['servicePlan']       = $this->servicePlan;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
