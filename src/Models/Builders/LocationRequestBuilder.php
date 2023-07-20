<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\LocationRequest;

/**
 * Builder for model LocationRequest
 *
 * @see LocationRequest
 */
class LocationRequestBuilder
{
    /**
     * @var LocationRequest
     */
    private $instance;

    private function __construct(LocationRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new location request Builder object.
     */
    public static function init(string $accountName, string $cacheMode, array $deviceList): self
    {
        return new self(new LocationRequest($accountName, $cacheMode, $deviceList));
    }

    /**
     * Initializes a new location request object.
     */
    public function build(): LocationRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
