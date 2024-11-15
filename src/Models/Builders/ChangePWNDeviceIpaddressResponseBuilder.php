<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\ChangePWNDeviceIpaddressResponse;

/**
 * Builder for model ChangePWNDeviceIpaddressResponse
 *
 * @see ChangePWNDeviceIpaddressResponse
 */
class ChangePWNDeviceIpaddressResponseBuilder
{
    /**
     * @var ChangePWNDeviceIpaddressResponse
     */
    private $instance;

    private function __construct(ChangePWNDeviceIpaddressResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new change pwndevice ipaddress response Builder object.
     */
    public static function init(): self
    {
        return new self(new ChangePWNDeviceIpaddressResponse());
    }

    /**
     * Sets request id field.
     */
    public function requestId(?string $value): self
    {
        $this->instance->setRequestId($value);
        return $this;
    }

    /**
     * Initializes a new change pwndevice ipaddress response object.
     */
    public function build(): ChangePWNDeviceIpaddressResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
