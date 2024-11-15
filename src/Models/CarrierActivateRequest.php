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
 * Request for carrier activation.
 */
class CarrierActivateRequest implements \JsonSerializable
{
    /**
     * @var AccountDeviceList[]
     */
    private $devices;

    /**
     * @var string
     */
    private $servicePlan;

    /**
     * @var string
     */
    private $mdnZipCode;

    /**
     * @var string|null
     */
    private $accountName;

    /**
     * @var string|null
     */
    private $carrierIpPoolName;

    /**
     * @var string|null
     */
    private $carrierName;

    /**
     * @var string|null
     */
    private $costCenterCode;

    /**
     * @var CustomFields[]|null
     */
    private $customFields;

    /**
     * @var string|null
     */
    private $groupName;

    /**
     * @var string|null
     */
    private $leadId;

    /**
     * @var PlaceOfUse|null
     */
    private $primaryPlaceOfUse;

    /**
     * @var string|null
     */
    private $publicIpRestriction;

    /**
     * @var string|null
     */
    private $skuNumber;

    /**
     * @param AccountDeviceList[] $devices
     * @param string $servicePlan
     * @param string $mdnZipCode
     */
    public function __construct(array $devices, string $servicePlan, string $mdnZipCode)
    {
        $this->devices = $devices;
        $this->servicePlan = $servicePlan;
        $this->mdnZipCode = $mdnZipCode;
    }

    /**
     * Returns Devices.
     * Up to 10,000 devices for which you want to activate service, specified by device identifier.
     *
     * @return AccountDeviceList[]
     */
    public function getDevices(): array
    {
        return $this->devices;
    }

    /**
     * Sets Devices.
     * Up to 10,000 devices for which you want to activate service, specified by device identifier.
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
     * Returns Service Plan.
     * The service plan code that you want to assign to all specified devices.
     */
    public function getServicePlan(): string
    {
        return $this->servicePlan;
    }

    /**
     * Sets Service Plan.
     * The service plan code that you want to assign to all specified devices.
     *
     * @required
     * @maps servicePlan
     */
    public function setServicePlan(string $servicePlan): void
    {
        $this->servicePlan = $servicePlan;
    }

    /**
     * Returns Mdn Zip Code.
     * The Zip code of the location where the line of service will primarily be used, or a Zip code that
     * you have been told to use with these devices. For accounts that are configured for geographic
     * numbering, this is the ZIP code from which the MDN will be derived.
     */
    public function getMdnZipCode(): string
    {
        return $this->mdnZipCode;
    }

    /**
     * Sets Mdn Zip Code.
     * The Zip code of the location where the line of service will primarily be used, or a Zip code that
     * you have been told to use with these devices. For accounts that are configured for geographic
     * numbering, this is the ZIP code from which the MDN will be derived.
     *
     * @required
     * @maps mdnZipCode
     */
    public function setMdnZipCode(string $mdnZipCode): void
    {
        $this->mdnZipCode = $mdnZipCode;
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
     * Returns Carrier Ip Pool Name.
     * The private IP pool (Carrier Group Name) from which your device IP addresses will be derived.
     */
    public function getCarrierIpPoolName(): ?string
    {
        return $this->carrierIpPoolName;
    }

    /**
     * Sets Carrier Ip Pool Name.
     * The private IP pool (Carrier Group Name) from which your device IP addresses will be derived.
     *
     * @maps carrierIpPoolName
     */
    public function setCarrierIpPoolName(?string $carrierIpPoolName): void
    {
        $this->carrierIpPoolName = $carrierIpPoolName;
    }

    /**
     * Returns Carrier Name.
     * The carrier that will perform the activation.
     */
    public function getCarrierName(): ?string
    {
        return $this->carrierName;
    }

    /**
     * Sets Carrier Name.
     * The carrier that will perform the activation.
     *
     * @maps carrierName
     */
    public function setCarrierName(?string $carrierName): void
    {
        $this->carrierName = $carrierName;
    }

    /**
     * Returns Cost Center Code.
     * A string to identify the cost center that the device is associated with.
     */
    public function getCostCenterCode(): ?string
    {
        return $this->costCenterCode;
    }

    /**
     * Sets Cost Center Code.
     * A string to identify the cost center that the device is associated with.
     *
     * @maps costCenterCode
     */
    public function setCostCenterCode(?string $costCenterCode): void
    {
        $this->costCenterCode = $costCenterCode;
    }

    /**
     * Returns Custom Fields.
     * A user-defined descriptive field, limited to 50 characters.
     *
     * @return CustomFields[]|null
     */
    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    /**
     * Sets Custom Fields.
     * A user-defined descriptive field, limited to 50 characters.
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
     * If you specify devices by ID in the devices parameters, this is the name of a device group that the
     * devices should be added to.If you don't specify individual devices with the devices parameter, you
     * can provide the name of a device group to activate all devices in that group.
     */
    public function getGroupName(): ?string
    {
        return $this->groupName;
    }

    /**
     * Sets Group Name.
     * If you specify devices by ID in the devices parameters, this is the name of a device group that the
     * devices should be added to.If you don't specify individual devices with the devices parameter, you
     * can provide the name of a device group to activate all devices in that group.
     *
     * @maps groupName
     */
    public function setGroupName(?string $groupName): void
    {
        $this->groupName = $groupName;
    }

    /**
     * Returns Lead Id.
     * The ID of a “Qualified” or “Closed - Won” VPP customer lead, which is used with other values to
     * determine MDN assignment, taxation, and compensation.
     */
    public function getLeadId(): ?string
    {
        return $this->leadId;
    }

    /**
     * Sets Lead Id.
     * The ID of a “Qualified” or “Closed - Won” VPP customer lead, which is used with other values to
     * determine MDN assignment, taxation, and compensation.
     *
     * @maps leadId
     */
    public function setLeadId(?string $leadId): void
    {
        $this->leadId = $leadId;
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
     * Returns Public Ip Restriction.
     * For devices with static IP addresses on the public network, this specifies whether the devices have
     * general access to the Internet.
     */
    public function getPublicIpRestriction(): ?string
    {
        return $this->publicIpRestriction;
    }

    /**
     * Sets Public Ip Restriction.
     * For devices with static IP addresses on the public network, this specifies whether the devices have
     * general access to the Internet.
     *
     * @maps publicIpRestriction
     */
    public function setPublicIpRestriction(?string $publicIpRestriction): void
    {
        $this->publicIpRestriction = $publicIpRestriction;
    }

    /**
     * Returns Sku Number.
     * The Stock Keeping Unit (SKU) of a 4G device type can be used with ICCID device identifiers in lieu
     * of an IMEI when activating 4G devices. The SkuNumber will be used with all devices in the request,
     * so all devices must be of the same type.
     */
    public function getSkuNumber(): ?string
    {
        return $this->skuNumber;
    }

    /**
     * Sets Sku Number.
     * The Stock Keeping Unit (SKU) of a 4G device type can be used with ICCID device identifiers in lieu
     * of an IMEI when activating 4G devices. The SkuNumber will be used with all devices in the request,
     * so all devices must be of the same type.
     *
     * @maps skuNumber
     */
    public function setSkuNumber(?string $skuNumber): void
    {
        $this->skuNumber = $skuNumber;
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
        $json['devices']                 = $this->devices;
        $json['servicePlan']             = $this->servicePlan;
        $json['mdnZipCode']              = $this->mdnZipCode;
        if (isset($this->accountName)) {
            $json['accountName']         = $this->accountName;
        }
        if (isset($this->carrierIpPoolName)) {
            $json['carrierIpPoolName']   = $this->carrierIpPoolName;
        }
        if (isset($this->carrierName)) {
            $json['carrierName']         = $this->carrierName;
        }
        if (isset($this->costCenterCode)) {
            $json['costCenterCode']      = $this->costCenterCode;
        }
        if (isset($this->customFields)) {
            $json['customFields']        = $this->customFields;
        }
        if (isset($this->groupName)) {
            $json['groupName']           = $this->groupName;
        }
        if (isset($this->leadId)) {
            $json['leadId']              = $this->leadId;
        }
        if (isset($this->primaryPlaceOfUse)) {
            $json['primaryPlaceOfUse']   = $this->primaryPlaceOfUse;
        }
        if (isset($this->publicIpRestriction)) {
            $json['publicIpRestriction'] = $this->publicIpRestriction;
        }
        if (isset($this->skuNumber)) {
            $json['skuNumber']           = $this->skuNumber;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
