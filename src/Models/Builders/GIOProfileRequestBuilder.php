<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\GIOProfileRequest;

/**
 * Builder for model GIOProfileRequest
 *
 * @see GIOProfileRequest
 */
class GIOProfileRequestBuilder
{
    /**
     * @var GIOProfileRequest
     */
    private $instance;

    private function __construct(GIOProfileRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new gioprofile request Builder object.
     */
    public static function init(array $devices, string $accountName): self
    {
        return new self(new GIOProfileRequest($devices, $accountName));
    }

    /**
     * Sets mdn zip code field.
     */
    public function mdnZipCode(?string $value): self
    {
        $this->instance->setMdnZipCode($value);
        return $this;
    }

    /**
     * Sets service plan field.
     */
    public function servicePlan(?string $value): self
    {
        $this->instance->setServicePlan($value);
        return $this;
    }

    /**
     * Initializes a new gioprofile request object.
     */
    public function build(): GIOProfileRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
