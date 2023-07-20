<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\DeviceFirmwareVersion;

/**
 * Builder for model DeviceFirmwareVersion
 *
 * @see DeviceFirmwareVersion
 */
class DeviceFirmwareVersionBuilder
{
    /**
     * @var DeviceFirmwareVersion
     */
    private $instance;

    private function __construct(DeviceFirmwareVersion $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new device firmware version Builder object.
     */
    public static function init(string $deviceId, string $firmwareVersion): self
    {
        return new self(new DeviceFirmwareVersion($deviceId, $firmwareVersion));
    }

    /**
     * Sets status field.
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Sets reason field.
     */
    public function reason(?string $value): self
    {
        $this->instance->setReason($value);
        return $this;
    }

    /**
     * Sets firmware version update time field.
     */
    public function firmwareVersionUpdateTime(?\DateTime $value): self
    {
        $this->instance->setFirmwareVersionUpdateTime($value);
        return $this;
    }

    /**
     * Initializes a new device firmware version object.
     */
    public function build(): DeviceFirmwareVersion
    {
        return CoreHelper::clone($this->instance);
    }
}