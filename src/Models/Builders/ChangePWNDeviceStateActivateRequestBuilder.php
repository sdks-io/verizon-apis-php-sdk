<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\Activate;
use VerizonLib\Models\ChangePWNDeviceStateActivateRequest;

/**
 * Builder for model ChangePWNDeviceStateActivateRequest
 *
 * @see ChangePWNDeviceStateActivateRequest
 */
class ChangePWNDeviceStateActivateRequestBuilder
{
    /**
     * @var ChangePWNDeviceStateActivateRequest
     */
    private $instance;

    private function __construct(ChangePWNDeviceStateActivateRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new change pwndevice state activate request Builder object.
     */
    public static function init(string $accountName, array $deviceList, Activate $activate): self
    {
        return new self(new ChangePWNDeviceStateActivateRequest($accountName, $deviceList, $activate));
    }

    /**
     * Initializes a new change pwndevice state activate request object.
     */
    public function build(): ChangePWNDeviceStateActivateRequest
    {
        return CoreHelper::clone($this->instance);
    }
}