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
 * Request to assign or change custom field values for one or more devices.
 */
class CustomFieldsUpdateRequest implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $accountName;

    /**
     * @var CustomFields[]|null
     */
    private $customFields;

    /**
     * @var CustomFields[]|null
     */
    private $customFieldsToUpdate;

    /**
     * @var AccountDeviceList[]|null
     */
    private $devices;

    /**
     * @var string|null
     */
    private $groupName;

    /**
     * @var string|null
     */
    private $servicePlan;

    /**
     * Returns Account Name.
     * The name of a billing account.This parameter is only required if the UWS account used for the
     * current API session has access to multiple billing accounts.An account name is usually numeric, and
     * must include any leading zeros.
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    /**
     * Sets Account Name.
     * The name of a billing account.This parameter is only required if the UWS account used for the
     * current API session has access to multiple billing accounts.An account name is usually numeric, and
     * must include any leading zeros.
     *
     * @maps accountName
     */
    public function setAccountName(?string $accountName): void
    {
        $this->accountName = $accountName;
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
     * Returns Custom Fields to Update.
     * The names and new values of any custom fields that you want to change.
     *
     * @return CustomFields[]|null
     */
    public function getCustomFieldsToUpdate(): ?array
    {
        return $this->customFieldsToUpdate;
    }

    /**
     * Sets Custom Fields to Update.
     * The names and new values of any custom fields that you want to change.
     *
     * @maps customFieldsToUpdate
     *
     * @param CustomFields[]|null $customFieldsToUpdate
     */
    public function setCustomFieldsToUpdate(?array $customFieldsToUpdate): void
    {
        $this->customFieldsToUpdate = $customFieldsToUpdate;
    }

    /**
     * Returns Devices.
     * The devices that you want to change.
     *
     * @return AccountDeviceList[]|null
     */
    public function getDevices(): ?array
    {
        return $this->devices;
    }

    /**
     * Sets Devices.
     * The devices that you want to change.
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
            $json['accountName']          = $this->accountName;
        }
        if (isset($this->customFields)) {
            $json['customFields']         = $this->customFields;
        }
        if (isset($this->customFieldsToUpdate)) {
            $json['customFieldsToUpdate'] = $this->customFieldsToUpdate;
        }
        if (isset($this->devices)) {
            $json['devices']              = $this->devices;
        }
        if (isset($this->groupName)) {
            $json['groupName']            = $this->groupName;
        }
        if (isset($this->servicePlan)) {
            $json['servicePlan']          = $this->servicePlan;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}