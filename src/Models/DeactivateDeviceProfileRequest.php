<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

class DeactivateDeviceProfileRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $accountName;

    /**
     * @var string
     */
    private $reasonCode;

    /**
     * @var DeactivateDeviceList[]|null
     */
    private $devices;

    /**
     * @var string|null
     */
    private $carrierName;

    /**
     * @var bool|null
     */
    private $etfWaiver = true;

    /**
     * @var bool|null
     */
    private $checkFallbackProfile = false;

    /**
     * @param string $accountName
     * @param string $reasonCode
     */
    public function __construct(string $accountName, string $reasonCode)
    {
        $this->accountName = $accountName;
        $this->reasonCode = $reasonCode;
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
     * Returns Reason Code.
     */
    public function getReasonCode(): string
    {
        return $this->reasonCode;
    }

    /**
     * Sets Reason Code.
     *
     * @required
     * @maps reasonCode
     */
    public function setReasonCode(string $reasonCode): void
    {
        $this->reasonCode = $reasonCode;
    }

    /**
     * Returns Devices.
     *
     * @return DeactivateDeviceList[]|null
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
     * @param DeactivateDeviceList[]|null $devices
     */
    public function setDevices(?array $devices): void
    {
        $this->devices = $devices;
    }

    /**
     * Returns Carrier Name.
     */
    public function getCarrierName(): ?string
    {
        return $this->carrierName;
    }

    /**
     * Sets Carrier Name.
     *
     * @maps carrierName
     */
    public function setCarrierName(?string $carrierName): void
    {
        $this->carrierName = $carrierName;
    }

    /**
     * Returns Etf Waiver.
     */
    public function getEtfWaiver(): ?bool
    {
        return $this->etfWaiver;
    }

    /**
     * Sets Etf Waiver.
     *
     * @maps etfWaiver
     */
    public function setEtfWaiver(?bool $etfWaiver): void
    {
        $this->etfWaiver = $etfWaiver;
    }

    /**
     * Returns Check Fallback Profile.
     */
    public function getCheckFallbackProfile(): ?bool
    {
        return $this->checkFallbackProfile;
    }

    /**
     * Sets Check Fallback Profile.
     *
     * @maps checkFallbackProfile
     */
    public function setCheckFallbackProfile(?bool $checkFallbackProfile): void
    {
        $this->checkFallbackProfile = $checkFallbackProfile;
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
        $json['accountName']              = $this->accountName;
        $json['reasonCode']               = $this->reasonCode;
        if (isset($this->devices)) {
            $json['devices']              = $this->devices;
        }
        if (isset($this->carrierName)) {
            $json['carrierName']          = $this->carrierName;
        }
        if (isset($this->etfWaiver)) {
            $json['etfWaiver']            = $this->etfWaiver;
        }
        if (isset($this->checkFallbackProfile)) {
            $json['checkFallbackProfile'] = $this->checkFallbackProfile;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
