<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

class M5gBiprimaryPlaceofuse implements \JsonSerializable
{
    /**
     * @var M5gBiAddress|null
     */
    private $address;

    /**
     * @var M5gBiCustomerName|null
     */
    private $customerName;

    /**
     * Returns Address.
     */
    public function getAddress(): ?M5gBiAddress
    {
        return $this->address;
    }

    /**
     * Sets Address.
     *
     * @maps address
     */
    public function setAddress(?M5gBiAddress $address): void
    {
        $this->address = $address;
    }

    /**
     * Returns Customer Name.
     */
    public function getCustomerName(): ?M5gBiCustomerName
    {
        return $this->customerName;
    }

    /**
     * Sets Customer Name.
     *
     * @maps customerName
     */
    public function setCustomerName(?M5gBiCustomerName $customerName): void
    {
        $this->customerName = $customerName;
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
        if (isset($this->address)) {
            $json['address']      = $this->address;
        }
        if (isset($this->customerName)) {
            $json['customerName'] = $this->customerName;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
