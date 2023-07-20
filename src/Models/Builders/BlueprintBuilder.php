<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\Blueprint;

/**
 * Builder for model Blueprint
 *
 * @see Blueprint
 */
class BlueprintBuilder
{
    /**
     * @var Blueprint
     */
    private $instance;

    private function __construct(Blueprint $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new blueprint Builder object.
     */
    public static function init(): self
    {
        return new self(new Blueprint());
    }

    /**
     * Sets name field.
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets version field.
     */
    public function version(?string $value): self
    {
        $this->instance->setVersion($value);
        return $this;
    }

    /**
     * Initializes a new blueprint object.
     */
    public function build(): Blueprint
    {
        return CoreHelper::clone($this->instance);
    }
}