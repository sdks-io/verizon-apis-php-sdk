<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\M5gBiattribute2;

/**
 * Builder for model M5gBiattribute2
 *
 * @see M5gBiattribute2
 */
class M5gBiattribute2Builder
{
    /**
     * @var M5gBiattribute2
     */
    private $instance;

    private function __construct(M5gBiattribute2 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new m5 g biattribute 2 Builder object.
     */
    public static function init(): self
    {
        return new self(new M5gBiattribute2());
    }

    /**
     * Sets key field.
     */
    public function key(?string $value): self
    {
        $this->instance->setKey($value);
        return $this;
    }

    /**
     * Sets value field.
     */
    public function value(?string $value): self
    {
        $this->instance->setValue($value);
        return $this;
    }

    /**
     * Initializes a new m5 g biattribute 2 object.
     */
    public function build(): M5gBiattribute2
    {
        return CoreHelper::clone($this->instance);
    }
}
