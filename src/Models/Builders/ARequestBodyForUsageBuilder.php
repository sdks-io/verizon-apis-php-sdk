<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\ARequestBodyForUsage;

/**
 * Builder for model ARequestBodyForUsage
 *
 * @see ARequestBodyForUsage
 */
class ARequestBodyForUsageBuilder
{
    /**
     * @var ARequestBodyForUsage
     */
    private $instance;

    private function __construct(ARequestBodyForUsage $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new arequest body for usage Builder object.
     */
    public static function init(): self
    {
        return new self(new ARequestBodyForUsage());
    }

    /**
     * Sets device id field.
     */
    public function deviceId(?array $value): self
    {
        $this->instance->setDeviceId($value);
        return $this;
    }

    /**
     * Sets start time field.
     */
    public function startTime(?\DateTime $value): self
    {
        $this->instance->setStartTime($value);
        return $this;
    }

    /**
     * Sets end time field.
     */
    public function endTime(?\DateTime $value): self
    {
        $this->instance->setEndTime($value);
        return $this;
    }

    /**
     * Initializes a new arequest body for usage object.
     */
    public function build(): ARequestBodyForUsage
    {
        return CoreHelper::clone($this->instance);
    }
}
