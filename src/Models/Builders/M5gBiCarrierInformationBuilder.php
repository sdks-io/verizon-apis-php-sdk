<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\M5gBiCarrierInformation;

/**
 * Builder for model M5gBiCarrierInformation
 *
 * @see M5gBiCarrierInformation
 */
class M5gBiCarrierInformationBuilder
{
    /**
     * @var M5gBiCarrierInformation
     */
    private $instance;

    private function __construct(M5gBiCarrierInformation $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new m5 g bi carrier information Builder object.
     */
    public static function init(): self
    {
        return new self(new M5gBiCarrierInformation());
    }

    /**
     * Sets carrier name field.
     */
    public function carrierName(?string $value): self
    {
        $this->instance->setCarrierName($value);
        return $this;
    }

    /**
     * Initializes a new m5 g bi carrier information object.
     */
    public function build(): M5gBiCarrierInformation
    {
        return CoreHelper::clone($this->instance);
    }
}