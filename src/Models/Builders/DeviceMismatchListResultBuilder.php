<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\DeviceMismatchListResult;

/**
 * Builder for model DeviceMismatchListResult
 *
 * @see DeviceMismatchListResult
 */
class DeviceMismatchListResultBuilder
{
    /**
     * @var DeviceMismatchListResult
     */
    private $instance;

    private function __construct(DeviceMismatchListResult $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new device mismatch list result Builder object.
     */
    public static function init(): self
    {
        return new self(new DeviceMismatchListResult());
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
     * Initializes a new device mismatch list result object.
     */
    public function build(): DeviceMismatchListResult
    {
        return CoreHelper::clone($this->instance);
    }
}