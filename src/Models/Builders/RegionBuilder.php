<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\Region;

/**
 * Builder for model Region
 *
 * @see Region
 */
class RegionBuilder
{
    /**
     * @var Region
     */
    private $instance;

    private function __construct(Region $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new region Builder object.
     */
    public static function init(): self
    {
        return new self(new Region());
    }

    /**
     * Sets region id field.
     */
    public function regionId(?string $value): self
    {
        $this->instance->setRegionId($value);
        return $this;
    }

    /**
     * Unsets region id field.
     */
    public function unsetRegionId(): self
    {
        $this->instance->unsetRegionId();
        return $this;
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
     * Unsets name field.
     */
    public function unsetName(): self
    {
        $this->instance->unsetName();
        return $this;
    }

    /**
     * Sets country code field.
     */
    public function countryCode(?string $value): self
    {
        $this->instance->setCountryCode($value);
        return $this;
    }

    /**
     * Unsets country code field.
     */
    public function unsetCountryCode(): self
    {
        $this->instance->unsetCountryCode();
        return $this;
    }

    /**
     * Sets metro field.
     */
    public function metro(?string $value): self
    {
        $this->instance->setMetro($value);
        return $this;
    }

    /**
     * Unsets metro field.
     */
    public function unsetMetro(): self
    {
        $this->instance->unsetMetro();
        return $this;
    }

    /**
     * Sets area field.
     */
    public function area(?string $value): self
    {
        $this->instance->setArea($value);
        return $this;
    }

    /**
     * Unsets area field.
     */
    public function unsetArea(): self
    {
        $this->instance->unsetArea();
        return $this;
    }

    /**
     * Initializes a new region object.
     */
    public function build(): Region
    {
        return CoreHelper::clone($this->instance);
    }
}