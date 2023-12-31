<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\DeviceCostCenterRequest;

/**
 * Builder for model DeviceCostCenterRequest
 *
 * @see DeviceCostCenterRequest
 */
class DeviceCostCenterRequestBuilder
{
    /**
     * @var DeviceCostCenterRequest
     */
    private $instance;

    private function __construct(DeviceCostCenterRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new device cost center request Builder object.
     */
    public static function init(): self
    {
        return new self(new DeviceCostCenterRequest());
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
     * Sets cost center field.
     */
    public function costCenter(?string $value): self
    {
        $this->instance->setCostCenter($value);
        return $this;
    }

    /**
     * Sets custom fields field.
     */
    public function customFields(?array $value): self
    {
        $this->instance->setCustomFields($value);
        return $this;
    }

    /**
     * Sets devices field.
     */
    public function devices(?array $value): self
    {
        $this->instance->setDevices($value);
        return $this;
    }

    /**
     * Sets group name field.
     */
    public function groupName(?string $value): self
    {
        $this->instance->setGroupName($value);
        return $this;
    }

    /**
     * Sets primary place of use field.
     */
    public function primaryPlaceOfUse(?array $value): self
    {
        $this->instance->setPrimaryPlaceOfUse($value);
        return $this;
    }

    /**
     * Sets remove cost center field.
     */
    public function removeCostCenter(?bool $value): self
    {
        $this->instance->setRemoveCostCenter($value);
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
     * Initializes a new device cost center request object.
     */
    public function build(): DeviceCostCenterRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
