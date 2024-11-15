<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\ChangePWNDeviceProfileRequest;

/**
 * Builder for model ChangePWNDeviceProfileRequest
 *
 * @see ChangePWNDeviceProfileRequest
 */
class ChangePWNDeviceProfileRequestBuilder
{
    /**
     * @var ChangePWNDeviceProfileRequest
     */
    private $instance;

    private function __construct(ChangePWNDeviceProfileRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new change pwndevice profile request Builder object.
     */
    public static function init(string $accountName, array $deviceList, string $newProfile): self
    {
        return new self(new ChangePWNDeviceProfileRequest($accountName, $deviceList, $newProfile));
    }

    /**
     * Initializes a new change pwndevice profile request object.
     */
    public function build(): ChangePWNDeviceProfileRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
