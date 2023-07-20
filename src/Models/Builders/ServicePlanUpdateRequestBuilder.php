<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\ServicePlanUpdateRequest;

/**
 * Builder for model ServicePlanUpdateRequest
 *
 * @see ServicePlanUpdateRequest
 */
class ServicePlanUpdateRequestBuilder
{
    /**
     * @var ServicePlanUpdateRequest
     */
    private $instance;

    private function __construct(ServicePlanUpdateRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new service plan update request Builder object.
     */
    public static function init(): self
    {
        return new self(new ServicePlanUpdateRequest());
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
     * Sets current service plan field.
     */
    public function currentServicePlan(?string $value): self
    {
        $this->instance->setCurrentServicePlan($value);
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
     * Sets service plan field.
     */
    public function servicePlan(?string $value): self
    {
        $this->instance->setServicePlan($value);
        return $this;
    }

    /**
     * Initializes a new service plan update request object.
     */
    public function build(): ServicePlanUpdateRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
