<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\NetworkType;

/**
 * Builder for model NetworkType
 *
 * @see NetworkType
 */
class NetworkTypeBuilder
{
    /**
     * @var NetworkType
     */
    private $instance;

    private function __construct(NetworkType $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new network type Builder object.
     */
    public static function init(): self
    {
        return new self(new NetworkType());
    }

    /**
     * Sets network type field.
     */
    public function networkType(?string $value): self
    {
        $this->instance->setNetworkType($value);
        return $this;
    }

    /**
     * Initializes a new network type object.
     */
    public function build(): NetworkType
    {
        return CoreHelper::clone($this->instance);
    }
}