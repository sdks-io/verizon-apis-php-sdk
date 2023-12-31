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
 * The ID of the authenticating billing account, in the format `{"billingaccountid":"1234567890-
 * 12345"}`.
 */
class AccountIdentifier implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $billingaccountid;

    /**
     * Returns Billingaccountid.
     */
    public function getBillingaccountid(): ?string
    {
        return $this->billingaccountid;
    }

    /**
     * Sets Billingaccountid.
     *
     * @maps billingaccountid
     */
    public function setBillingaccountid(?string $billingaccountid): void
    {
        $this->billingaccountid = $billingaccountid;
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
        if (isset($this->billingaccountid)) {
            $json['billingaccountid'] = $this->billingaccountid;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
