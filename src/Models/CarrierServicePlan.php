<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

class CarrierServicePlan implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $code;

    /**
     * @var string|null
     */
    private $sizeKb;

    /**
     * @var string|null
     */
    private $carrierServicePlanCode;

    /**
     * Returns Name.
     * The name of the service plan
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The name of the service plan
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Code.
     * The inventory name or system name of the service plan
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Sets Code.
     * The inventory name or system name of the service plan
     *
     * @maps code
     */
    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    /**
     * Returns Size Kb.
     * The ammount of space the service plan will occupy on the Subscriber Information Module (SIM)
     */
    public function getSizeKb(): ?string
    {
        return $this->sizeKb;
    }

    /**
     * Sets Size Kb.
     * The ammount of space the service plan will occupy on the Subscriber Information Module (SIM)
     *
     * @maps sizeKb
     */
    public function setSizeKb(?string $sizeKb): void
    {
        $this->sizeKb = $sizeKb;
    }

    /**
     * Returns Carrier Service Plan Code.
     * The billing record ID. This can be numeric, alpha or alphanumeric.
     */
    public function getCarrierServicePlanCode(): ?string
    {
        return $this->carrierServicePlanCode;
    }

    /**
     * Sets Carrier Service Plan Code.
     * The billing record ID. This can be numeric, alpha or alphanumeric.
     *
     * @maps carrierServicePlanCode
     */
    public function setCarrierServicePlanCode(?string $carrierServicePlanCode): void
    {
        $this->carrierServicePlanCode = $carrierServicePlanCode;
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
        if (isset($this->name)) {
            $json['name']                   = $this->name;
        }
        if (isset($this->code)) {
            $json['code']                   = $this->code;
        }
        if (isset($this->sizeKb)) {
            $json['sizeKb']                 = $this->sizeKb;
        }
        if (isset($this->carrierServicePlanCode)) {
            $json['carrierServicePlanCode'] = $this->carrierServicePlanCode;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
