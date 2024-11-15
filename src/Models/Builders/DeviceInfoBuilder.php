<?php

declare(strict_types=1);

/*
 * VerizonThingSpaceQualityOfServiceAPIEndpointsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonThingSpaceQualityOfServiceAPIEndpointsLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonThingSpaceQualityOfServiceAPIEndpointsLib\Models\DeviceId;
use VerizonThingSpaceQualityOfServiceAPIEndpointsLib\Models\DeviceInfo;

/**
 * Builder for model DeviceInfo
 *
 * @see DeviceInfo
 */
class DeviceInfoBuilder
{
    /**
     * @var DeviceInfo
     */
    private $instance;

    private function __construct(DeviceInfo $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new device info Builder object.
     */
    public static function init(): self
    {
        return new self(new DeviceInfo());
    }

    /**
     * Sets device id field.
     */
    public function deviceId(?DeviceId $value): self
    {
        $this->instance->setDeviceId($value);
        return $this;
    }

    /**
     * Sets device ipv 6 addr field.
     */
    public function deviceIPv6Addr(?string $value): self
    {
        $this->instance->setDeviceIPv6Addr($value);
        return $this;
    }

    /**
     * Sets flow info field.
     */
    public function flowInfo(?array $value): self
    {
        $this->instance->setFlowInfo($value);
        return $this;
    }

    /**
     * Initializes a new device info object.
     */
    public function build(): DeviceInfo
    {
        return CoreHelper::clone($this->instance);
    }
}
