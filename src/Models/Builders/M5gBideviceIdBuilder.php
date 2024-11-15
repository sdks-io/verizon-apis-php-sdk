<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\M5gBideviceId;
use VerizonLib\Models\M5gBideviceId1;

/**
 * Builder for model M5gBideviceId
 *
 * @see M5gBideviceId
 */
class M5gBideviceIdBuilder
{
    /**
     * @var M5gBideviceId
     */
    private $instance;

    private function __construct(M5gBideviceId $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new m5 g bidevice id Builder object.
     */
    public static function init(): self
    {
        return new self(new M5gBideviceId());
    }

    /**
     * Sets device id field.
     */
    public function deviceId(?M5gBideviceId1 $value): self
    {
        $this->instance->setDeviceId($value);
        return $this;
    }

    /**
     * Initializes a new m5 g bidevice id object.
     */
    public function build(): M5gBideviceId
    {
        return CoreHelper::clone($this->instance);
    }
}
