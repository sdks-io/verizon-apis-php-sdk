<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\DeviceResetRequest;

/**
 * Builder for model DeviceResetRequest
 *
 * @see DeviceResetRequest
 */
class DeviceResetRequestBuilder
{
    /**
     * @var DeviceResetRequest
     */
    private $instance;

    private function __construct(DeviceResetRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new device reset request Builder object.
     */
    public static function init(): self
    {
        return new self(new DeviceResetRequest());
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
     * Sets action field.
     */
    public function action(?string $value): self
    {
        $this->instance->setAction($value);
        return $this;
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
     * Initializes a new device reset request object.
     */
    public function build(): DeviceResetRequest
    {
        return CoreHelper::clone($this->instance);
    }
}