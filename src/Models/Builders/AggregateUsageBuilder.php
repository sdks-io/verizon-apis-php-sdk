<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\AggregateUsage;
use VerizonLib\Models\GIODeviceId;

/**
 * Builder for model AggregateUsage
 *
 * @see AggregateUsage
 */
class AggregateUsageBuilder
{
    /**
     * @var AggregateUsage
     */
    private $instance;

    private function __construct(AggregateUsage $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new aggregate usage Builder object.
     */
    public static function init(): self
    {
        return new self(new AggregateUsage());
    }

    /**
     * Sets device id field.
     */
    public function deviceId(?GIODeviceId $value): self
    {
        $this->instance->setDeviceId($value);
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
     * Sets earliest field.
     */
    public function earliest(?string $value): self
    {
        $this->instance->setEarliest($value);
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
     * Initializes a new aggregate usage object.
     */
    public function build(): AggregateUsage
    {
        return CoreHelper::clone($this->instance);
    }
}
