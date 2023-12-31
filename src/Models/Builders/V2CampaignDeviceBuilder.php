<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\V2CampaignDevice;

/**
 * Builder for model V2CampaignDevice
 *
 * @see V2CampaignDevice
 */
class V2CampaignDeviceBuilder
{
    /**
     * @var V2CampaignDevice
     */
    private $instance;

    private function __construct(V2CampaignDevice $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new v2 campaign device Builder object.
     */
    public static function init(bool $hasMoreData, int $maxPageSize, array $deviceList): self
    {
        return new self(new V2CampaignDevice($hasMoreData, $maxPageSize, $deviceList));
    }

    /**
     * Sets total device field.
     */
    public function totalDevice(?int $value): self
    {
        $this->instance->setTotalDevice($value);
        return $this;
    }

    /**
     * Sets last seen device id field.
     */
    public function lastSeenDeviceId(?string $value): self
    {
        $this->instance->setLastSeenDeviceId($value);
        return $this;
    }

    /**
     * Initializes a new v2 campaign device object.
     */
    public function build(): V2CampaignDevice
    {
        return CoreHelper::clone($this->instance);
    }
}
