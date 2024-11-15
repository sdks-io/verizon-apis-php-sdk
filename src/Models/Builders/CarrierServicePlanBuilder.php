<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\CarrierServicePlan;

/**
 * Builder for model CarrierServicePlan
 *
 * @see CarrierServicePlan
 */
class CarrierServicePlanBuilder
{
    /**
     * @var CarrierServicePlan
     */
    private $instance;

    private function __construct(CarrierServicePlan $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new carrier service plan Builder object.
     */
    public static function init(): self
    {
        return new self(new CarrierServicePlan());
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
     * Sets code field.
     */
    public function code(?string $value): self
    {
        $this->instance->setCode($value);
        return $this;
    }

    /**
     * Sets size kb field.
     */
    public function sizeKb(?string $value): self
    {
        $this->instance->setSizeKb($value);
        return $this;
    }

    /**
     * Sets carrier service plan code field.
     */
    public function carrierServicePlanCode(?string $value): self
    {
        $this->instance->setCarrierServicePlanCode($value);
        return $this;
    }

    /**
     * Initializes a new carrier service plan object.
     */
    public function build(): CarrierServicePlan
    {
        return CoreHelper::clone($this->instance);
    }
}