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
 * Request for a subscription.
 */
class SecuritySubscriptionRequest implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $accountName;

    /**
     * @var string|null
     */
    private $skuNumber;

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
     * Returns Sku Number.
     * The Stock Keeping Unit (SKU). Valid skuNumbers for SIM-Secure for IoT are:SIMSec-IoT-Lt”. (Lifetime)
     * Once a license is assigned to a SIM, the SIM-Secure feature is enabled for the life of the SIM.“TS-
     * BUNDLE-KTO-SIMSEC-MRC”. (Bundle) The SIM-Secure Flex license can be assigned to or removed from a
     * SIM at any time. This SKU is bundled with other ThingSpace Services.*“SIMSec-IoT”. (Flex) The SIM-
     * Secure Flex license can be assigned to or removed from a SIM at any time. This SKU is purchased a la
     * carte.
     */
    public function getSkuNumber(): ?string
    {
        return $this->skuNumber;
    }

    /**
     * Sets Sku Number.
     * The Stock Keeping Unit (SKU). Valid skuNumbers for SIM-Secure for IoT are:SIMSec-IoT-Lt”. (Lifetime)
     * Once a license is assigned to a SIM, the SIM-Secure feature is enabled for the life of the SIM.“TS-
     * BUNDLE-KTO-SIMSEC-MRC”. (Bundle) The SIM-Secure Flex license can be assigned to or removed from a
     * SIM at any time. This SKU is bundled with other ThingSpace Services.*“SIMSec-IoT”. (Flex) The SIM-
     * Secure Flex license can be assigned to or removed from a SIM at any time. This SKU is purchased a la
     * carte.
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
        if (isset($this->accountName)) {
            $json['accountName'] = $this->accountName;
        }
        if (isset($this->skuNumber)) {
            $json['skuNumber']   = $this->skuNumber;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
