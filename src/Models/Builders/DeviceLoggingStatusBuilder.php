<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\DeviceLoggingStatus;

/**
 * Builder for model DeviceLoggingStatus
 *
 * @see DeviceLoggingStatus
 */
class DeviceLoggingStatusBuilder
{
    /**
     * @var DeviceLoggingStatus
     */
    private $instance;

    private function __construct(DeviceLoggingStatus $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new device logging status Builder object.
     */
    public static function init(string $deviceId, \DateTime $expiryDate): self
    {
        return new self(new DeviceLoggingStatus($deviceId, $expiryDate));
    }

    /**
     * Initializes a new device logging status object.
     */
    public function build(): DeviceLoggingStatus
    {
        return CoreHelper::clone($this->instance);
    }
}