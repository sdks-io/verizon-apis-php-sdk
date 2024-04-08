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
 * Device that exist in Verizon Mobile Device Management (MDM).
 */
class ThingspaceDevice implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $accountName;

    /**
     * @var string|null
     */
    private $billingCycleEndDate;

    /**
     * @var CarrierInformation[]|null
     */
    private $carrierInformations;

    /**
     * @var bool|null
     */
    private $connected;

    /**
     * @var string|null
     */
    private $createdAt;

    /**
     * @var CustomFields[]|null
     */
    private $customFields;

    /**
     * @var DeviceId[]|null
     */
    private $deviceIds;

    /**
     * @var CustomFields[]|null
     */
    private $extendedAttributes;

    /**
     * @var array<string|null>|null
     */
    private $groupNames;

    /**
     * @var string|null
     */
    private $ipAddress;

    /**
     * @var string|null
     */
    private $lastActivationBy;

    /**
     * @var string|null
     */
    private $lastActivationDate;

    /**
     * @var string|null
     */
    private $lastConnectionDate;

    /**
     * Returns Account Name.
     * The billing account that the device is associated with.
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    /**
     * Sets Account Name.
     * The billing account that the device is associated with.
     *
     * @maps accountName
     */
    public function setAccountName(?string $accountName): void
    {
        $this->accountName = $accountName;
    }

    /**
     * Returns Billing Cycle End Date.
     * The date that the device's current billing cycle ends.
     */
    public function getBillingCycleEndDate(): ?string
    {
        return $this->billingCycleEndDate;
    }

    /**
     * Sets Billing Cycle End Date.
     * The date that the device's current billing cycle ends.
     *
     * @maps billingCycleEndDate
     */
    public function setBillingCycleEndDate(?string $billingCycleEndDate): void
    {
        $this->billingCycleEndDate = $billingCycleEndDate;
    }

    /**
     * Returns Carrier Informations.
     * The carrier information associated with the device.
     *
     * @return CarrierInformation[]|null
     */
    public function getCarrierInformations(): ?array
    {
        return $this->carrierInformations;
    }

    /**
     * Sets Carrier Informations.
     * The carrier information associated with the device.
     *
     * @maps carrierInformations
     *
     * @param CarrierInformation[]|null $carrierInformations
     */
    public function setCarrierInformations(?array $carrierInformations): void
    {
        $this->carrierInformations = $carrierInformations;
    }

    /**
     * Returns Connected.
     * True if the device is connected; false if it is not.
     */
    public function getConnected(): ?bool
    {
        return $this->connected;
    }

    /**
     * Sets Connected.
     * True if the device is connected; false if it is not.
     *
     * @maps connected
     */
    public function setConnected(?bool $connected): void
    {
        $this->connected = $connected;
    }

    /**
     * Returns Created At.
     * The date and time that the device was added to the system.
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     * The date and time that the device was added to the system.
     *
     * @maps createdAt
     */
    public function setCreatedAt(?string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Custom Fields.
     * The custom fields and values that have been set for the device.
     *
     * @return CustomFields[]|null
     */
    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    /**
     * Sets Custom Fields.
     * The custom fields and values that have been set for the device.
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
     * Returns Device Ids.
     * All identifiers for the device.
     *
     * @return DeviceId[]|null
     */
    public function getDeviceIds(): ?array
    {
        return $this->deviceIds;
    }

    /**
     * Sets Device Ids.
     * All identifiers for the device.
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
     * Returns Extended Attributes.
     * Any extended attributes for the device, as Key and Value pairs. The pairs listed below are returned
     * as part of the response for a single device, but are not included if the request was for information
     * about multiple devices.
     *
     * @return CustomFields[]|null
     */
    public function getExtendedAttributes(): ?array
    {
        return $this->extendedAttributes;
    }

    /**
     * Sets Extended Attributes.
     * Any extended attributes for the device, as Key and Value pairs. The pairs listed below are returned
     * as part of the response for a single device, but are not included if the request was for information
     * about multiple devices.
     *
     * @maps extendedAttributes
     *
     * @param CustomFields[]|null $extendedAttributes
     */
    public function setExtendedAttributes(?array $extendedAttributes): void
    {
        $this->extendedAttributes = $extendedAttributes;
    }

    /**
     * Returns Group Names.
     * The device groups that the device belongs to.
     *
     * @return array<string|null>|null
     */
    public function getGroupNames(): ?array
    {
        return $this->groupNames;
    }

    /**
     * Sets Group Names.
     * The device groups that the device belongs to.
     *
     * @maps groupNames
     *
     * @param array<string|null>|null $groupNames
     */
    public function setGroupNames(?array $groupNames): void
    {
        $this->groupNames = $groupNames;
    }

    /**
     * Returns Ip Address.
     * The IP address of the device.
     */
    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    /**
     * Sets Ip Address.
     * The IP address of the device.
     *
     * @maps ipAddress
     */
    public function setIpAddress(?string $ipAddress): void
    {
        $this->ipAddress = $ipAddress;
    }

    /**
     * Returns Last Activation By.
     * The user who last activated the device.
     */
    public function getLastActivationBy(): ?string
    {
        return $this->lastActivationBy;
    }

    /**
     * Sets Last Activation By.
     * The user who last activated the device.
     *
     * @maps lastActivationBy
     */
    public function setLastActivationBy(?string $lastActivationBy): void
    {
        $this->lastActivationBy = $lastActivationBy;
    }

    /**
     * Returns Last Activation Date.
     * The date and time that the device was last activated.
     */
    public function getLastActivationDate(): ?string
    {
        return $this->lastActivationDate;
    }

    /**
     * Sets Last Activation Date.
     * The date and time that the device was last activated.
     *
     * @maps lastActivationDate
     */
    public function setLastActivationDate(?string $lastActivationDate): void
    {
        $this->lastActivationDate = $lastActivationDate;
    }

    /**
     * Returns Last Connection Date.
     * The most recent connection date and time.
     */
    public function getLastConnectionDate(): ?string
    {
        return $this->lastConnectionDate;
    }

    /**
     * Sets Last Connection Date.
     * The most recent connection date and time.
     *
     * @maps lastConnectionDate
     */
    public function setLastConnectionDate(?string $lastConnectionDate): void
    {
        $this->lastConnectionDate = $lastConnectionDate;
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
            $json['accountName']         = $this->accountName;
        }
        if (isset($this->billingCycleEndDate)) {
            $json['billingCycleEndDate'] = $this->billingCycleEndDate;
        }
        if (isset($this->carrierInformations)) {
            $json['carrierInformations'] = $this->carrierInformations;
        }
        if (isset($this->connected)) {
            $json['connected']           = $this->connected;
        }
        if (isset($this->createdAt)) {
            $json['createdAt']           = $this->createdAt;
        }
        if (isset($this->customFields)) {
            $json['customFields']        = $this->customFields;
        }
        if (isset($this->deviceIds)) {
            $json['deviceIds']           = $this->deviceIds;
        }
        if (isset($this->extendedAttributes)) {
            $json['extendedAttributes']  = $this->extendedAttributes;
        }
        if (isset($this->groupNames)) {
            $json['groupNames']          = $this->groupNames;
        }
        if (isset($this->ipAddress)) {
            $json['ipAddress']           = $this->ipAddress;
        }
        if (isset($this->lastActivationBy)) {
            $json['lastActivationBy']    = $this->lastActivationBy;
        }
        if (isset($this->lastActivationDate)) {
            $json['lastActivationDate']  = $this->lastActivationDate;
        }
        if (isset($this->lastConnectionDate)) {
            $json['lastConnectionDate']  = $this->lastConnectionDate;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
