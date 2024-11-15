<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\ChangePWNDeviceStateResponse;

/**
 * Builder for model ChangePWNDeviceStateResponse
 *
 * @see ChangePWNDeviceStateResponse
 */
class ChangePWNDeviceStateResponseBuilder
{
    /**
     * @var ChangePWNDeviceStateResponse
     */
    private $instance;

    private function __construct(ChangePWNDeviceStateResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new change pwndevice state response Builder object.
     */
    public static function init(): self
    {
        return new self(new ChangePWNDeviceStateResponse());
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
     * Initializes a new change pwndevice state response object.
     */
    public function build(): ChangePWNDeviceStateResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
