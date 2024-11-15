<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\AccountDeviceList;

/**
 * Builder for model AccountDeviceList
 *
 * @see AccountDeviceList
 */
class AccountDeviceListBuilder
{
    /**
     * @var AccountDeviceList
     */
    private $instance;

    private function __construct(AccountDeviceList $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new account device list Builder object.
     */
    public static function init(array $deviceIds): self
    {
        return new self(new AccountDeviceList($deviceIds));
    }

    /**
     * Sets ip address field.
     */
    public function ipaddress(?string $value): self
    {
        $this->instance->setIpaddress($value);
        return $this;
    }

    /**
     * Initializes a new account device list object.
     */
    public function build(): AccountDeviceList
    {
        return CoreHelper::clone($this->instance);
    }
}
