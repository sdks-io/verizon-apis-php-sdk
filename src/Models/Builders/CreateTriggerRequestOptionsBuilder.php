<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\AnomalyTriggerRequest;
use VerizonLib\Models\CreateTriggerRequestOptions;
use VerizonLib\Models\Notification;

/**
 * Builder for model CreateTriggerRequestOptions
 *
 * @see CreateTriggerRequestOptions
 */
class CreateTriggerRequestOptionsBuilder
{
    /**
     * @var CreateTriggerRequestOptions
     */
    private $instance;

    private function __construct(CreateTriggerRequestOptions $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create trigger request options Builder object.
     */
    public static function init(): self
    {
        return new self(new CreateTriggerRequestOptions());
    }

    /**
     * Sets name field.
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets trigger category field.
     */
    public function triggerCategory(?string $value): self
    {
        $this->instance->setTriggerCategory($value);
        return $this;
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
     * Sets anomaly trigger request field.
     */
    public function anomalyTriggerRequest(?AnomalyTriggerRequest $value): self
    {
        $this->instance->setAnomalyTriggerRequest($value);
        return $this;
    }

    /**
     * Sets notification field.
     */
    public function notification(?Notification $value): self
    {
        $this->instance->setNotification($value);
        return $this;
    }

    /**
     * Sets active field.
     */
    public function active(?bool $value): self
    {
        $this->instance->setActive($value);
        return $this;
    }

    /**
     * Initializes a new create trigger request options object.
     */
    public function build(): CreateTriggerRequestOptions
    {
        return CoreHelper::clone($this->instance);
    }
}