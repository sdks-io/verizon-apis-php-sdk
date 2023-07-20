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
 * 4G devices with an ICCID (SIM) that was not activated with the expected IMEI (hardware) during a
 * specified time frame.
 */
class MismatchedDevice implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $accountName;

    /**
     * @var string|null
     */
    private $mdn;

    /**
     * @var string|null
     */
    private $activationDate;

    /**
     * @var string|null
     */
    private $iccid;

    /**
     * @var string|null
     */
    private $preImei;

    /**
     * @var string|null
     */
    private $postImei;

    /**
     * @var string|null
     */
    private $simOtaDate;

    /**
     * Returns Account Name.
     * The account that the device is associated with.
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    /**
     * Sets Account Name.
     * The account that the device is associated with.
     *
     * @maps accountName
     */
    public function setAccountName(?string $accountName): void
    {
        $this->accountName = $accountName;
    }

    /**
     * Returns Mdn.
     * The assigned phone number of the device.
     */
    public function getMdn(): ?string
    {
        return $this->mdn;
    }

    /**
     * Sets Mdn.
     * The assigned phone number of the device.
     *
     * @maps mdn
     */
    public function setMdn(?string $mdn): void
    {
        $this->mdn = $mdn;
    }

    /**
     * Returns Activation Date.
     * The date and time when the SIM was last activated.
     */
    public function getActivationDate(): ?string
    {
        return $this->activationDate;
    }

    /**
     * Sets Activation Date.
     * The date and time when the SIM was last activated.
     *
     * @maps activationDate
     */
    public function setActivationDate(?string $activationDate): void
    {
        $this->activationDate = $activationDate;
    }

    /**
     * Returns Iccid.
     * The ID of the SIM.
     */
    public function getIccid(): ?string
    {
        return $this->iccid;
    }

    /**
     * Sets Iccid.
     * The ID of the SIM.
     *
     * @maps iccid
     */
    public function setIccid(?string $iccid): void
    {
        $this->iccid = $iccid;
    }

    /**
     * Returns Pre Imei.
     * The IMEI of the device prior to the SIM OTA activation on simOtaDate.
     */
    public function getPreImei(): ?string
    {
        return $this->preImei;
    }

    /**
     * Sets Pre Imei.
     * The IMEI of the device prior to the SIM OTA activation on simOtaDate.
     *
     * @maps preImei
     */
    public function setPreImei(?string $preImei): void
    {
        $this->preImei = $preImei;
    }

    /**
     * Returns Post Imei.
     * The IMEI of the device after the SIM OTA activation on simOtaDate.
     */
    public function getPostImei(): ?string
    {
        return $this->postImei;
    }

    /**
     * Sets Post Imei.
     * The IMEI of the device after the SIM OTA activation on simOtaDate.
     *
     * @maps postImei
     */
    public function setPostImei(?string $postImei): void
    {
        $this->postImei = $postImei;
    }

    /**
     * Returns Sim Ota Date.
     * The date and time of the SIM OTA activation.
     */
    public function getSimOtaDate(): ?string
    {
        return $this->simOtaDate;
    }

    /**
     * Sets Sim Ota Date.
     * The date and time of the SIM OTA activation.
     *
     * @maps simOtaDate
     */
    public function setSimOtaDate(?string $simOtaDate): void
    {
        $this->simOtaDate = $simOtaDate;
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
            $json['accountName']    = $this->accountName;
        }
        if (isset($this->mdn)) {
            $json['mdn']            = $this->mdn;
        }
        if (isset($this->activationDate)) {
            $json['activationDate'] = $this->activationDate;
        }
        if (isset($this->iccid)) {
            $json['iccid']          = $this->iccid;
        }
        if (isset($this->preImei)) {
            $json['preImei']        = $this->preImei;
        }
        if (isset($this->postImei)) {
            $json['postImei']       = $this->postImei;
        }
        if (isset($this->simOtaDate)) {
            $json['simOtaDate']     = $this->simOtaDate;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
