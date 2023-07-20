<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\AccountDeviceListFilter;
use VerizonLib\Models\AccountDeviceListRequest;
use VerizonLib\Models\DeviceId;

/**
 * Builder for model AccountDeviceListRequest
 *
 * @see AccountDeviceListRequest
 */
class AccountDeviceListRequestBuilder
{
    /**
     * @var AccountDeviceListRequest
     */
    private $instance;

    private function __construct(AccountDeviceListRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new account device list request Builder object.
     */
    public static function init(): self
    {
        return new self(new AccountDeviceListRequest());
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
     * Sets device id field.
     */
    public function deviceId(?DeviceId $value): self
    {
        $this->instance->setDeviceId($value);
        return $this;
    }

    /**
     * Sets filter field.
     */
    public function filter(?AccountDeviceListFilter $value): self
    {
        $this->instance->setFilter($value);
        return $this;
    }

    /**
     * Sets current state field.
     */
    public function currentState(?string $value): self
    {
        $this->instance->setCurrentState($value);
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
     * Sets earliest field.
     */
    public function earliest(?string $value): self
    {
        $this->instance->setEarliest($value);
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
     * Sets latest field.
     */
    public function latest(?string $value): self
    {
        $this->instance->setLatest($value);
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
     * Initializes a new account device list request object.
     */
    public function build(): AccountDeviceListRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
