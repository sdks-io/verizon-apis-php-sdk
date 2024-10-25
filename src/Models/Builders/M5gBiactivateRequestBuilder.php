<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\M5gBiactivateRequest;

/**
 * Builder for model M5gBiactivateRequest
 *
 * @see M5gBiactivateRequest
 */
class M5gBiactivateRequestBuilder
{
    /**
     * @var M5gBiactivateRequest
     */
    private $instance;

    private function __construct(M5gBiactivateRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new m5 g biactivate request Builder object.
     */
    public static function init(): self
    {
        return new self(new M5gBiactivateRequest());
    }

    /**
     * Sets account name field.
     */
    public function accountName(?string $value): self
    {
        $this->instance->setAccountName($value);
        return $this;
    }

    /**
     * Sets service plan field.
     */
    public function servicePlan(?string $value): self
    {
        $this->instance->setServicePlan($value);
        return $this;
    }

    /**
     * Sets device list with service address field.
     */
    public function deviceListWithServiceAddress(?array $value): self
    {
        $this->instance->setDeviceListWithServiceAddress($value);
        return $this;
    }

    /**
     * Sets public ip restriction field.
     */
    public function publicIpRestriction(?string $value): self
    {
        $this->instance->setPublicIpRestriction($value);
        return $this;
    }

    /**
     * Sets carrier name field.
     */
    public function carrierName(?string $value): self
    {
        $this->instance->setCarrierName($value);
        return $this;
    }

    /**
     * Sets mdn zip code field.
     */
    public function mdnZipCode(?string $value): self
    {
        $this->instance->setMdnZipCode($value);
        return $this;
    }

    /**
     * Initializes a new m5 g biactivate request object.
     */
    public function build(): M5gBiactivateRequest
    {
        return CoreHelper::clone($this->instance);
    }
}