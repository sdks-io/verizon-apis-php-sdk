<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\DeviceServiceRequest;

/**
 * Builder for model DeviceServiceRequest
 *
 * @see DeviceServiceRequest
 */
class DeviceServiceRequestBuilder
{
    /**
     * @var DeviceServiceRequest
     */
    private $instance;

    private function __construct(DeviceServiceRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new device service request Builder object.
     */
    public static function init(string $imei, bool $bullseyeEnable): self
    {
        return new self(new DeviceServiceRequest($imei, $bullseyeEnable));
    }

    /**
     * Initializes a new device service request object.
     */
    public function build(): DeviceServiceRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
