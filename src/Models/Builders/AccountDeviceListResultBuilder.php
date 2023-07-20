<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\AccountDeviceListResult;

/**
 * Builder for model AccountDeviceListResult
 *
 * @see AccountDeviceListResult
 */
class AccountDeviceListResultBuilder
{
    /**
     * @var AccountDeviceListResult
     */
    private $instance;

    private function __construct(AccountDeviceListResult $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new account device list result Builder object.
     */
    public static function init(): self
    {
        return new self(new AccountDeviceListResult());
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
     * Sets has more data field.
     */
    public function hasMoreData(?bool $value): self
    {
        $this->instance->setHasMoreData($value);
        return $this;
    }

    /**
     * Initializes a new account device list result object.
     */
    public function build(): AccountDeviceListResult
    {
        return CoreHelper::clone($this->instance);
    }
}