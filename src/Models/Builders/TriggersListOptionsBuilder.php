<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\TriggerNotification;
use VerizonLib\Models\TriggersListOptions;
use VerizonLib\Models\UsageAnomalyAttributes;

/**
 * Builder for model TriggersListOptions
 *
 * @see TriggersListOptions
 */
class TriggersListOptionsBuilder
{
    /**
     * @var TriggersListOptions
     */
    private $instance;

    private function __construct(TriggersListOptions $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new triggers list options Builder object.
     */
    public static function init(): self
    {
        return new self(new TriggersListOptions());
    }

    /**
     * Sets trigger id field.
     */
    public function triggerId(?string $value): self
    {
        $this->instance->setTriggerId($value);
        return $this;
    }

    /**
     * Sets trigger name field.
     */
    public function triggerName(?string $value): self
    {
        $this->instance->setTriggerName($value);
        return $this;
    }

    /**
     * Sets organization name field.
     */
    public function organizationName(?string $value): self
    {
        $this->instance->setOrganizationName($value);
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
     * Sets trigger attributes field.
     */
    public function triggerAttributes(?array $value): self
    {
        $this->instance->setTriggerAttributes($value);
        return $this;
    }

    /**
     * Sets created at field.
     */
    public function createdAt(?string $value): self
    {
        $this->instance->setCreatedAt($value);
        return $this;
    }

    /**
     * Sets modified at field.
     */
    public function modifiedAt(?string $value): self
    {
        $this->instance->setModifiedAt($value);
        return $this;
    }

    /**
     * Sets anomalyattributes field.
     */
    public function anomalyattributes(?UsageAnomalyAttributes $value): self
    {
        $this->instance->setAnomalyattributes($value);
        return $this;
    }

    /**
     * Sets notification field.
     */
    public function notification(?TriggerNotification $value): self
    {
        $this->instance->setNotification($value);
        return $this;
    }

    /**
     * Initializes a new triggers list options object.
     */
    public function build(): TriggersListOptions
    {
        return CoreHelper::clone($this->instance);
    }
}
