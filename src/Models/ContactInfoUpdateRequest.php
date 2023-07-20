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
 * Request to update contact information.
 */
class ContactInfoUpdateRequest implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $accountName;

    /**
     * @var AccountDeviceList[]|null
     */
    private $devices;

    /**
     * @var array|null
     */
    private $primaryPlaceOfUse;

    /**
     * Returns Account Name.
     * The name of the billing account that the devices belong to. An account name is usually numeric, and
     * must include any leading zeros.
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    /**
     * Sets Account Name.
     * The name of the billing account that the devices belong to. An account name is usually numeric, and
     * must include any leading zeros.
     *
     * @maps accountName
     */
    public function setAccountName(?string $accountName): void
    {
        $this->accountName = $accountName;
    }

    /**
     * Returns Devices.
     * A list of the devices that you want to change, specified by device identifier. You only need to
     * provide one identifier per device. Do not include accountName, groupName, customFields, or
     * servicePlan if you use this parameter.
     *
     * @return AccountDeviceList[]|null
     */
    public function getDevices(): ?array
    {
        return $this->devices;
    }

    /**
     * Sets Devices.
     * A list of the devices that you want to change, specified by device identifier. You only need to
     * provide one identifier per device. Do not include accountName, groupName, customFields, or
     * servicePlan if you use this parameter.
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
        if (isset($this->devices)) {
            $json['devices']           = $this->devices;
        }
        if (isset($this->primaryPlaceOfUse)) {
            $json['primaryPlaceOfUse'] = $this->primaryPlaceOfUse;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}