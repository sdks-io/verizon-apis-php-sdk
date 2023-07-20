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
 * Changes the provisioning state of one or more devices to a specified customer-defined service and
 * state.
 */
class GoToStateRequest implements \JsonSerializable
{
    /**
     * @var AccountDeviceList[]|null
     */
    private $devices;

    /**
     * @var DeviceFilter|null
     */
    private $filter;

    /**
     * @var string|null
     */
    private $serviceName;

    /**
     * @var string|null
     */
    private $stateName;

    /**
     * @var string|null
     */
    private $servicePlan;

    /**
     * @var string|null
     */
    private $mdnZipCode;

    /**
     * @var string|null
     */
    private $carrierIpPoolName;

    /**
     * @var string|null
     */
    private $publicIpRestriction;

    /**
     * @var string|null
     */
    private $skuNumber;

    /**
     * @var CustomFields[]|null
     */
    private $customFields;

    /**
     * @var string|null
     */
    private $groupName;

    /**
     * @var PlaceOfUse|null
     */
    private $primaryPlaceOfUse;

    /**
     * Returns Devices.
     * Up to 10,000 devices that you want to push to a different state, specified by device identifier.
     *
     * @return AccountDeviceList[]|null
     */
    public function getDevices(): ?array
    {
        return $this->devices;
    }

    /**
     * Sets Devices.
     * Up to 10,000 devices that you want to push to a different state, specified by device identifier.
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
     * Returns Filter.
     * Specify the kind of the device identifier, the type of match, and the string that you want to match.
     */
    public function getFilter(): ?DeviceFilter
    {
        return $this->filter;
    }

    /**
     * Sets Filter.
     * Specify the kind of the device identifier, the type of match, and the string that you want to match.
     *
     * @maps filter
     */
    public function setFilter(?DeviceFilter $filter): void
    {
        $this->filter = $filter;
    }

    /**
     * Returns Service Name.
     * The name of a customer-defined service to push the devices to.
     */
    public function getServiceName(): ?string
    {
        return $this->serviceName;
    }

    /**
     * Sets Service Name.
     * The name of a customer-defined service to push the devices to.
     *
     * @maps serviceName
     */
    public function setServiceName(?string $serviceName): void
    {
        $this->serviceName = $serviceName;
    }

    /**
     * Returns State Name.
     * The name of a customer-defined stage state to push the devices to.
     */
    public function getStateName(): ?string
    {
        return $this->stateName;
    }

    /**
     * Sets State Name.
     * The name of a customer-defined stage state to push the devices to.
     *
     * @maps stateName
     */
    public function setStateName(?string $stateName): void
    {
        $this->stateName = $stateName;
    }

    /**
     * Returns Service Plan.
     * The service plan code that you want to assign to all specified devices in the new state.
     */
    public function getServicePlan(): ?string
    {
        return $this->servicePlan;
    }

    /**
     * Sets Service Plan.
     * The service plan code that you want to assign to all specified devices in the new state.
     *
     * @maps servicePlan
     */
    public function setServicePlan(?string $servicePlan): void
    {
        $this->servicePlan = $servicePlan;
    }

    /**
     * Returns Mdn Zip Code.
     * The Zip code of the location where the line of service will primarily be used, or a Zip code that
     * you have been told to use with these devices. For accounts that are configured for geographic
     * numbering, this is the ZIP code from which the MDN will be derived.
     */
    public function getMdnZipCode(): ?string
    {
        return $this->mdnZipCode;
    }

    /**
     * Sets Mdn Zip Code.
     * The Zip code of the location where the line of service will primarily be used, or a Zip code that
     * you have been told to use with these devices. For accounts that are configured for geographic
     * numbering, this is the ZIP code from which the MDN will be derived.
     *
     * @maps mdnZipCode
     */
    public function setMdnZipCode(?string $mdnZipCode): void
    {
        $this->mdnZipCode = $mdnZipCode;
    }

    /**
     * Returns Carrier Ip Pool Name.
     * The pool from which your device IP addresses will be derived if the service or state change requires
     * new IP addresses.If you do not include this element, the default pool will be used.
     */
    public function getCarrierIpPoolName(): ?string
    {
        return $this->carrierIpPoolName;
    }

    /**
     * Sets Carrier Ip Pool Name.
     * The pool from which your device IP addresses will be derived if the service or state change requires
     * new IP addresses.If you do not include this element, the default pool will be used.
     *
     * @maps carrierIpPoolName
     */
    public function setCarrierIpPoolName(?string $carrierIpPoolName): void
    {
        $this->carrierIpPoolName = $carrierIpPoolName;
    }

    /**
     * Returns Public Ip Restriction.
     * For devices with static IP addresses on the public network, this specifies whether the devices have
     * general access to the Internet. Valid values are “restricted” or “unrestricted”.
     */
    public function getPublicIpRestriction(): ?string
    {
        return $this->publicIpRestriction;
    }

    /**
     * Sets Public Ip Restriction.
     * For devices with static IP addresses on the public network, this specifies whether the devices have
     * general access to the Internet. Valid values are “restricted” or “unrestricted”.
     *
     * @maps publicIpRestriction
     */
    public function setPublicIpRestriction(?string $publicIpRestriction): void
    {
        $this->publicIpRestriction = $publicIpRestriction;
    }

    /**
     * Returns Sku Number.
     * The Stock Keeping Unit (SKU) number of a 4G device type with an embedded SIM. Can be used with ICCID
     * or EID device identifiers in lieu of an IMEI when activating 4G devices. The SkuNumber will be used
     * with all devices in the request, so all devices must be of the same type.
     */
    public function getSkuNumber(): ?string
    {
        return $this->skuNumber;
    }

    /**
     * Sets Sku Number.
     * The Stock Keeping Unit (SKU) number of a 4G device type with an embedded SIM. Can be used with ICCID
     * or EID device identifiers in lieu of an IMEI when activating 4G devices. The SkuNumber will be used
     * with all devices in the request, so all devices must be of the same type.
     *
     * @maps skuNumber
     */
    public function setSkuNumber(?string $skuNumber): void
    {
        $this->skuNumber = $skuNumber;
    }

    /**
     * Returns Custom Fields.
     * The names and values of any custom fields that you want to set for the devices.
     *
     * @return CustomFields[]|null
     */
    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    /**
     * Sets Custom Fields.
     * The names and values of any custom fields that you want to set for the devices.
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
     * Returns Group Name.
     * The name of a device group that the devices should be added to.
     */
    public function getGroupName(): ?string
    {
        return $this->groupName;
    }

    /**
     * Sets Group Name.
     * The name of a device group that the devices should be added to.
     *
     * @maps groupName
     */
    public function setGroupName(?string $groupName): void
    {
        $this->groupName = $groupName;
    }

    /**
     * Returns Primary Place of Use.
     * The customer name and the address of the device's primary place of use. Leave these fields empty to
     * use the account profile address as the primary place of use. These values will be applied to all
     * devices in the request.If the account is enabled for non-geographic MDNs and the device supports it,
     * the primaryPlaceOfUse address will also be used to derive the MDN for the device.
     */
    public function getPrimaryPlaceOfUse(): ?PlaceOfUse
    {
        return $this->primaryPlaceOfUse;
    }

    /**
     * Sets Primary Place of Use.
     * The customer name and the address of the device's primary place of use. Leave these fields empty to
     * use the account profile address as the primary place of use. These values will be applied to all
     * devices in the request.If the account is enabled for non-geographic MDNs and the device supports it,
     * the primaryPlaceOfUse address will also be used to derive the MDN for the device.
     *
     * @maps primaryPlaceOfUse
     */
    public function setPrimaryPlaceOfUse(?PlaceOfUse $primaryPlaceOfUse): void
    {
        $this->primaryPlaceOfUse = $primaryPlaceOfUse;
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
            $json['devices']             = $this->devices;
        }
        if (isset($this->filter)) {
            $json['filter']              = $this->filter;
        }
        if (isset($this->serviceName)) {
            $json['serviceName']         = $this->serviceName;
        }
        if (isset($this->stateName)) {
            $json['stateName']           = $this->stateName;
        }
        if (isset($this->servicePlan)) {
            $json['servicePlan']         = $this->servicePlan;
        }
        if (isset($this->mdnZipCode)) {
            $json['mdnZipCode']          = $this->mdnZipCode;
        }
        if (isset($this->carrierIpPoolName)) {
            $json['carrierIpPoolName']   = $this->carrierIpPoolName;
        }
        if (isset($this->publicIpRestriction)) {
            $json['publicIpRestriction'] = $this->publicIpRestriction;
        }
        if (isset($this->skuNumber)) {
            $json['skuNumber']           = $this->skuNumber;
        }
        if (isset($this->customFields)) {
            $json['customFields']        = $this->customFields;
        }
        if (isset($this->groupName)) {
            $json['groupName']           = $this->groupName;
        }
        if (isset($this->primaryPlaceOfUse)) {
            $json['primaryPlaceOfUse']   = $this->primaryPlaceOfUse;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
