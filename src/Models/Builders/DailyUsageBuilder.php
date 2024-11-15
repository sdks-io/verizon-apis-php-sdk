<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\DailyUsage;
use VerizonLib\Models\GIODeviceId;

/**
 * Builder for model DailyUsage
 *
 * @see DailyUsage
 */
class DailyUsageBuilder
{
    /**
     * @var DailyUsage
     */
    private $instance;

    private function __construct(DailyUsage $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new daily usage Builder object.
     */
    public static function init(): self
    {
        return new self(new DailyUsage());
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
     * Initializes a new daily usage object.
     */
    public function build(): DailyUsage
    {
        return CoreHelper::clone($this->instance);
    }
}
